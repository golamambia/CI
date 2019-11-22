<?php
ob_start();

require_once(APPPATH . 'libraries/paypal-php-sdk/paypal/rest-api-sdk-php/sample/bootstrap.php'); // require paypal files

use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;

class Checkout extends CI_Controller {
	public $_api_context;
	function __construct()
    {
        parent::__construct();
        $this->load->database();
        //****************************backtrace prevent*** START HERE*************************
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('form_validation');
        $this->load->model('General_model');
        $this->load->model('Custom_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('image_lib');
        $this->load->helper('string');

        $this->load->model('paypal_model', 'paypal');
        // paypal credentials
        $this->config->load('paypal');

        $this->_api_context = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $this->config->item('client_id'), $this->config->item('secret')
            )
        );
        
    }

	public function index()
	{  
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $customer_id=$this->session->userdata('cus_id');

        if(!empty($customer_id)) 
        {
            $query = $this->General_model->show_data_id('cart', $customer_id, 'customer_id', 'get', '');
            if(!empty($query)) {
                $data['cart'] = $query;
            }else{
                redirect('/');
            }
        }
        
        if(!empty($this->session->userdata('cus_id')))
        { 
            foreach ($data['cart'] as $c) 
            {
                $product=$this->General_model->show_data_id('product',$c->product_id,'product_id','get','');
                $sales_price[]=$product[0]->sales_price*$c->quantity;

                if(!$this->session->userdata($c->product_id)){
                    // redirect('product/cart');
                }
            }
        }
        else
        {    
                if($this->cart->contents()){
                    foreach($this->cart->contents() as $items){
                        $total_cart=count($this->cart->contents());
                        $product_id=$items['id'];
                        @$cart_product=$this->General_model->show_data_id('product',$product_id,'product_id','get','');
                        $selling_price[]=@$cart_product[0]->selling_price*$items['qty'];
                    }
                }

        }

        $query= $this->General_model->show_data_id('address_book',$this->session->userdata('cus_id'),'customer_id','get','');
        $data['meta_address'] = $query;


        $query= $this->General_model->show_data_id('cart',$this->session->userdata('cus_id'),'customer_id','get','');
        $data['cart'] = $query;
       
        $this->load->view('header',$data);
		$this->load->view('checkout');
        $this->load->view('footer');
	}

    
    public function login()
    {
        $query=$this->Custom_model->cus_login($this->input->post('login_email'),md5($this->input->post('login_password')));

        @$cus_status=$query[0]->status;
        @$cus_email=$query[0]->email;
        @$cus_id = $query[0]->customer_id;
        // @$cus_uni_id=$query[0]->uni_cust_id;
        if($query==true && $cus_status=='1')
        {

            $session_data = array(
                'cus_email'=>$cus_email,
                'cus_id'=>$cus_id,
                'is_cus_logged_in' =>1
            );

            $this->session->set_userdata('cus_logged_in',$session_data);
            $this->session->set_userdata('cus_email',$cus_email);
            $this->session->set_userdata('cus_id',$cus_id);
            // $this->session->set_userdata('cus_uni_id',$cus_uni_id);

            //----------Add to cart after login------------//
            $customer_id=$this->session->userdata('cus_id');
            if(!empty($customer_id))
            {
                foreach ($this->cart->contents() as $cartdata)
                {
                    $data = array(
                        'customer_id' => $customer_id,
                        'product_id' => $cartdata["id"],
                        'quantity' => $cartdata["qty"],
                        'ip_address' => $this->input->ip_address()
                    );
                    
                    $query = $this->db->get_where('cart', array('product_id' => $cartdata["id"],'customer_id' => $customer_id));

                    if($query->num_rows() === 0)
                    {
                        $query = $this->General_model->show_data_id('cart', '', '', 'insert', $data);

                    }

                }
            }
            //----------//End of Add to cart ---------------//

            redirect('checkout',$session_data);
        }
        else
        {
            $this->session->set_flashdata("login_error2", "<b style='color:#cc3300;padding-left:16px;padding-bottom:10px;'>Error: Invalid email or password !</b><br>");
            redirect('checkout');
        }
    }

    function filling_shipping_billing_address()
    {
        $id = $this->input->post('id');
        $query= $this->Generalmodel->show_data_id('address_book',$id,'id','get','');
        print_r(json_encode($query));
    }
    
    function multiple_address_add()
    {
        $data = array(
            'customer_id' => $this->session->userdata('cus_id'),
            'address_name' => $this->input->post('shippingaddress_name'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_id' => $this->input->post('email_id'),
            'phone_no' => $this->input->post('phone_no'),
            'country' => $this->input->post('country'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'address' => $this->input->post('address'),
            'zip_code' => $this->input->post('zipcode'),
            'flag' => $this->input->post('flag'),
        );
        $query= $this->General_model->show_data_id('address_book','','','insert',$data);

    }

    public function insert_order()
    {
        //=========================== GENERATE UNIQUE ID WHICH IS PRESENT DATABASE ====================================
        $query=$this->Custom_model->gen_random();
        $ord_num=$query[0]->random_num;

        if($ord_num=="")
        {
            $order_num='ORD00000000001';
        } else {
            $order_num = 'ORD' . $ord_num;
        }

        $cus_id = $this->session->userdata('cus_id');

        $cart = $this->db->select('cart.product_id as product_id,cart.quantity as quantity,sales_price')->where('customer_id',$cus_id)->join('product','product.product_id = cart.product_id')->get('cart')->result();
        $current_date = date("Y-m-d");
        $pay_check = $this->input->post('pay_check');


        $data_post = array(
                
                'b_first_name' => $this->input->post('first_name'),
                'b_email_id' => $this->input->post('email_id'),
                'b_phone_no' =>$this->input->post('phone_no'),
                'b_country' =>$this->input->post('country'),
                'b_state' =>$this->input->post('state'),
                'b_city' =>$this->input->post('city'),
                'b_address' =>$this->input->post('address'),
                'b_zip_code' =>$this->input->post('zip_code'),

                's_first_name' => $this->input->post('first_name'),
                's_email_id' => $this->input->post('email_id'),
                's_phone_no' =>$this->input->post('phone_no'),
                's_country' =>$this->input->post('country'),
                's_state' =>$this->input->post('state'),
                's_city' =>$this->input->post('city'),
                's_address' =>$this->input->post('address'),
                's_zip_code' =>$this->input->post('zip_code'),
                'order_date' =>$current_date,
            );
            $this->session->set_userdata('data_post',$data_post);


        if($pay_check=='cod'){

            foreach ($cart as $c)
        {
            $data = array(
                'product_id' => $c->product_id,
                'qty' => $c->quantity,
                'price'=>$c->sales_price*$c->quantity,
                'uni_order_id'=>$order_num,
                'customer_id' => $cus_id,

                'b_first_name' => $this->input->post('first_name'),
                'b_email_id' => $this->input->post('email_id'),
                'b_phone_no' =>$this->input->post('phone_no'),
                'b_country' =>$this->input->post('country'),
                'b_state' =>$this->input->post('state'),
                'b_city' =>$this->input->post('city'),
                'b_address' =>$this->input->post('address'),
                'b_zip_code' =>$this->input->post('zip_code'),

                's_first_name' => $this->input->post('first_name'),
                's_email_id' => $this->input->post('email_id'),
                's_phone_no' =>$this->input->post('phone_no'),
                's_country' =>$this->input->post('country'),
                's_state' =>$this->input->post('state'),
                's_city' =>$this->input->post('city'),
                's_address' =>$this->input->post('address'),
                's_zip_code' =>$this->input->post('zip_code'),
                'order_date' =>$current_date,
            ); 

            $this->General_model->show_data_id('sales_order','','','insert',$data);  
        }

        $this->db->where('customer_id',$cus_id)->delete('cart');
        $this->session->set_flashdata("cod_num",$order_num);
        //redirect('checkout');
        redirect('checkout/thankyou');

        }else{
            

            //function create_payment_with_paypal()
    //{

        // setup PayPal api context
        $this->_api_context->setConfig($this->config->item('settings'));


// ### Payer
// A resource representing a Payer that funds a payment
// For direct credit card payments, set payment method
// to 'credit_card' and add an array of funding instruments.

        $payer['payment_method'] = 'paypal';

// ### Itemized information
// (Optional) Lets you specify item wise
// information
        $item1["name"] = $this->input->post('item_name');
        $item1["sku"] = $this->input->post('item_number');  // Similar to `item_number` in Classic API
        $item1["description"] = $this->input->post('item_description');
        $item1["currency"] ="USD";
        $item1["quantity"] =1;
        $item1["price"] = $this->input->post('item_price');

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
        $details['tax'] =0;
        $details['subtotal'] = $this->input->post('item_price');
// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
        $amount['currency'] = "USD";
        $amount['total'] = $details['tax'] + $details['subtotal'];
        $amount['details'] = $details;
// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it.
        $transaction['description'] ='Payment description';
        $transaction['amount'] = $amount;
        $transaction['invoice_number'] = uniqid();
        $transaction['item_list'] = $itemList;

        // ### Redirect urls
// Set the urls that the buyer must be redirected to after
// payment approval/ cancellation.
        $baseUrl = base_url();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($baseUrl."checkout/getPaymentStatus")
            ->setCancelUrl($baseUrl."checkout/getPaymentStatus");

// ### Payment
// A Payment Resource; create one using
// the above types and intent set to sale 'sale'
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            ResultPrinter::printError("Created Payment Using PayPal. Please visit the URL to Approve.", "Payment", null, $ex);
            exit(1);
        }
        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        if(isset($redirect_url)) {
            /** redirect to paypal **/
            redirect($redirect_url);
        }

        $this->session->set_flashdata('success_msg','Unknown error occurred');
        redirect('checkout/cancel');

    //}

     
    // function success(){
    //     $this->load->view("content/success");
    //     $this->load->view('header');
    //     $this->load->view('success');
    //     $this->load->view('footer');
    // }
    // function cancel(){
    //     $this->paypal->create_payment();
    //     $this->load->view("content/cancel");
    // }



        }
        
    }
function getPaymentStatus()
    {

        // paypal credentials

        /** Get the payment ID before session clear **/
        $payment_id = $this->input->get("paymentId") ;
        $PayerID = $this->input->get("PayerID") ;
        $token = $this->input->get("token") ;
        /** clear the session payment ID **/

        if (empty($PayerID) || empty($token)) {
            $this->session->set_flashdata('success_msg','Payment failed');
            redirect('checkout/cancel');
        }

        $payment = Payment::get($payment_id,$this->_api_context);


        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId($this->input->get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution,$this->_api_context);



        //  DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {
            $trans = $result->getTransactions();

            // item info
            $Subtotal = $trans[0]->getAmount()->getDetails()->getSubtotal();
            $Tax = $trans[0]->getAmount()->getDetails()->getTax();

            $payer = $result->getPayer();
            // payer info //
            $PaymentMethod =$payer->getPaymentMethod();
            $PayerStatus =$payer->getStatus();
            $PayerMail =$payer->getPayerInfo()->getEmail();

            $relatedResources = $trans[0]->getRelatedResources();
            $sale = $relatedResources[0]->getSale();
            // sale info //
            $saleId = $sale->getId();
            $CreateTime = $sale->getCreateTime();
            $UpdateTime = $sale->getUpdateTime();
            $State = $sale->getState();
            $Total = $sale->getAmount()->getTotal();
            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/

            $query=$this->Custom_model->gen_random();
        $ord_num=$query[0]->random_num;

        if($ord_num=="")
        {
            $order_num='ORD00000000001';
        } else {
            $order_num = 'ORD' . $ord_num;
        }

             $cus_id = $this->session->userdata('cus_id');

        $cart = $this->db->select('cart.product_id as product_id,cart.quantity as quantity,sales_price')->where('customer_id',$cus_id)->join('product','product.product_id = cart.product_id')->get('cart')->result();
        $current_date = date("Y-m-d");
            foreach ($cart as $c)
        {
            $data = array(
                'product_id' => $c->product_id,
                'qty' => $c->quantity,
                'price'=>$c->sales_price*$c->quantity,
                'uni_order_id'=>$order_num,
                'customer_id' => $cus_id,

                'b_first_name' => $this->session->userdata('data_post')['b_first_name'],
                'b_email_id' => $this->session->userdata('data_post')['b_email_id'],
                'b_phone_no' =>$this->session->userdata('data_post')['b_phone_no'],
                'b_country' =>$this->session->userdata('data_post')['b_country'],
                'b_state' =>$this->session->userdata('data_post')['b_state'],
                'b_city' =>$this->session->userdata('data_post')['b_city'],
                'b_address' =>$this->session->userdata('data_post')['b_address'],
                'b_zip_code' =>$this->session->userdata('data_post')['b_zip_code'],

                's_first_name' => $this->session->userdata('data_post')['s_first_name'],
                's_email_id' => $this->session->userdata('data_post')['s_email_id'],
                's_phone_no' =>$this->session->userdata('data_post')['s_phone_no'],
                's_country' =>$this->session->userdata('data_post')['s_country'],
                's_state' =>$this->session->userdata('data_post')['s_state'],
                's_city' =>$this->session->userdata('data_post')['s_city'],
                's_address' =>$this->session->userdata('data_post')['s_address'],
                's_zip_code' =>$this->session->userdata('data_post')['s_zip_code'],
                'order_date' =>$current_date,
            ); 

            $this->General_model->show_data_id('sales_order','','','insert',$data);  
        }
        $this->session->unset_userdata('data_post');
        $this->session->set_flashdata("online_num",$order_num);
        $this->session->set_flashdata("txn_num",$saleId);
        $this->db->where('customer_id',$cus_id)->delete('cart');
        //redirect('checkout');


            //$this->paypal->create($Total,$Subtotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State);
            $this->paypal->create($Total,$PayerStatus,$saleId,$current_date,$State,$cus_id,$order_num,$PaymentMethod);
            $this->session->set_flashdata('success_msg','Payment success');
            redirect('checkout/success');
        }
        
        $this->session->set_flashdata('success_msg','Payment failed');
        redirect('checkout/cancel');
    }

function success(){
        //$this->load->view("content/success");
    $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;
        $this->load->view('header',$data);
        $this->load->view('success');
        $this->load->view('footer');
    }
function cancel(){
    $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;
         $this->load->view('header',$data);
        $this->load->view('cancel');
        $this->load->view('footer');
    }
    function thankyou(){
    $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;
        //$data['order_num']=$order_num;
        $this->load->view('header',$data);
        $this->load->view('thankyou');
        $this->load->view('footer');
}

}


	
    
