<?php
ob_start();
class Product extends CI_Controller {
	
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
        $this->load->helper('url');
        $this->load->library('image_lib');
        $this->load->helper('string');
        $this->load->library('pagination');
        $this->load->library('cart');
    }

	public function index()
	{
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $config = array();
        $config["base_url"] = base_url() . "product/page";
        $config["total_rows"] = $this->General_model->record_count();
        $config["per_page"] = 3;
        $config["uri_segment"] = 3;
        $config['num_links'] = 2;

        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open']   = '<ul>';
        $config['full_tag_close']  = '</ul>';
         
        $config['first_link']      = '<i class="fas fa-angle-double-left">';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link']       = '<i class="fas fa-angle-double-right">';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
         
        $config['next_link']       = 'Next';
        $config['next_tag_open']   = '<li class="nextlink">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = 'Prev';
        $config['prev_tag_open']   = '<li class="prevlink">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active">';
        $config['cur_tag_close']   = '</li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->General_model->fetch_products($config["per_page"], $page);

        $query= $this->pagination->create_links();
        $data['links']=$query;
        
        $this->load->view('header',$data);
		$this->load->view('product',$data);
        $this->load->view('footer');

	}

    function wishlist()
    {   
        $product_id=$this->input->post('product_id');
        $customer_id=$this->session->userdata('cus_id');

        $query=$this->General_model->show_data_id('product',$product_id,'product_id','get','');

            $data = array(
            'customer_id'=> $customer_id,
            'product_id' => $product_id,
        );
            $query = $this->General_model->show_data_id('wishlist', '', '', 'insert', $data);
        

    } 

    function filter_product()
    {

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $id          =$this->input->get('product_id');
        $cat_id      =$this->input->get('category_Id');
        $sort_by     =$this->input->get('sort_by');
        $wine_type   =$this->input->get('wine_type');
        $country     =$this->input->get('country');
        $varietals   =$this->input->get('varietals');
        $color       =$this->input->get('color');
        $product_name=$this->input->get('search');
        $query=$this->Custom_model->product_filter($id,$cat_id,$sort_by,$wine_type,$country,$varietals,$color,$product_name);
        $data['results']=$query;
        $this->load->view('filter_product',$data);
    }

    public function details($pd)
    {
        if($pd!="")
        {
            $check_slug=$this->General_model->show_data_id('product',$pd,'product_slug','get','');
       
            if(count($check_slug)>0)
            {
                $result=$this->General_model->show_data_id('general_setting','','id','get','');
                $data['general_setting']=$result;
                
                $query=$this->General_model->show_data_id('product',$pd,'product_slug','get','');
                $data['pdetails']=$query;

                $product_id=$query[0]->product_id;
                $category_Id=$query[0]->category_Id;
                
                $query=$this->General_model->show_data_id('product_multi_image',$data['pdetails'][0]->product_id,'product_id','get','');
                $data['product_multi_image']=$query;
 
                $result=$this->General_model->show_data_id('categories','','id','get','');
                $data['category']=$result;

                $result=$this->General_model->show_data_id('product_review',$data['pdetails'][0]->product_id,'product_id','get','');
                $data['product_review']=$result;
                
                //Overall review count
                if (!empty($data['product_review'])) {
                    $total = 0;
                    foreach ($data['product_review'] as $totalreview) {
                        $total = $total + $totalreview->rating;
                    }
                    $data['avg_rating'] = $total / count($data['product_review']);
                }
                //End Overall review count

                $query=$this->Custom_model->you_may_need($product_id,$category_Id);
                $data['product_need'] = $query;

            } 
        }
            $this->load->view('header',$data);
            $this->load->view('product_details');
            $this->load->view('footer');

    }

    public function rating()
    {   
        $data=$this->input->post();
        $data1= array();

        $data1['name']        = $data['name']; 
        $data1['product_id']  = $data['product_id']; 
        $data1['product_name']= $data['product_name'];  
        $data1['rating']      = $data['rating']; 
        $data1['review']      = $data['review'];
        $result=$this->General_model->show_data_id('product_review','','','insert', $data1);
        redirect('product');
    }

    public function add_cart()
    {
        $product_id=$this->input->post('product_id');
        $quantity=$this->input->post('quantity');
        //===================== AFTER LOGIN CART ADDED WITH CUSTOMER ID ===================================
        $customer_id=$this->session->userdata('cus_id');

        if(!empty($customer_id)) 
        {
            $data = array(
                'customer_id'=> $customer_id,
                'product_id' => $product_id,
                'quantity'   => $quantity,
                'ip_address' => $this->input->ip_address()
            );
            
            $query = $this->db->get_where('cart', array('customer_id' => $customer_id,'product_id' => $product_id));
            if($query->num_rows() === 0)
            {
                $query = $this->General_model->show_data_id('cart', '', '', 'insert', $data);
            }

            $query = $this->General_model->show_data_id('cart', $customer_id, 'customer_id', 'get', '');
            $data['crt'] = count($query);

        }
        else
        {
        //============================= IP ADDRESS THROUGH CART ADDED ===================================

            $query=$this->General_model->show_data_id('product',$product_id,'product_id','get','');
            $data = array(
                array(
                'id'    => $product_id,
                'qty'   => $quantity,
                'price' => $query[0]->sales_price,
                'name'  => trim($query[0]->product_name)
                ),
            );
            $this->cart->insert($data);
            $data['crt']=count($this->cart->contents());
        }
            echo $data['crt'];
    }
    
    
    public function cart()
    {   
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;
        
        $result=$this->General_model->show_data_id('discount','','id','get','');
        $data['discount']=$result;

        $customer_id=$this->session->userdata('cus_id');
        if(!empty($customer_id)){
            $query = $this->General_model->show_data_id('cart', $customer_id, 'customer_id', 'get', '');
            $data['cart'] = $query;

        }else{
            $data['cart'] = $this->cart->contents();
            // var_dump($data['cart']); die();
        }

        $this->load->view('header',$data);
        $this->load->view('cart');
        $this->load->view('footer');

    }

     public function cart_plus_minus()
     {
        $ip_address=$this->input->ip_address();
        $product_id=$this->input->post('product_id');
        //===================== AFTER LOGIN CART ADDED WITH CUSTOMER ID ===================================
        $customer_id=$this->session->userdata('cus_id');
        if(!empty($customer_id))
        {
            $data = array(
                'quantity'   =>$this->input->post('total_product'),
                'ip_address' =>$this->input->ip_address(),
                'product_id' =>$product_id,
                'customer_id'=>$customer_id,
            );
            var_dump($data);
            die();
            $query=$this->Custom_model->cart_plus_minus_user($customer_id,$product_id,$data);

        }
        else
        {
            //============================= IP ADDRESS THROUGH CART ADDED ===================================
            $data = array(
                'rowid'      => $this->input->post('rowid'),
                'quantity'   => $this->input->post('total_product')
            );
            var_dump($data);
            die();
            $this->cart->update($data);
        }
            // redirect('product/cart','refresh');
    }


    public function remove($rowid)
    {   
        $customer_id=$this->session->userdata('cus_id');
        if(!empty($customer_id))
        {
            $query = $this->General_model->show_data_id('cart', $rowid, 'cart_id', 'get', '');
        }

        $data = array(
            'rowid' => $rowid,
            'qty'   => 0
        );
        // Update cart data, after cancel.
        $this->cart->update($data);
        $query=$this->General_model->show_data_id('cart',$rowid,'cart_id','delete','');
        echo $data['crt'];
        redirect('product/cart');
    }

    public function customer_logout()
    { 
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    } 

    public function gifts()
    {

        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $config                = array();
        $config["base_url"]    = base_url() . "product/page";
        $config["total_rows"]  = $this->General_model->record_count();
        $config["per_page"]    = 9;
        $config["uri_segment"] = 3;
        $config['num_links']   = 2;

        $config['use_page_numbers']   = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open']   = '<ul>';
        $config['full_tag_close']  = '</ul>';
         
        $config['first_link']      = '<i class="fas fa-angle-double-left">';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link']       = '<i class="fas fa-angle-double-right">';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
         
        $config['next_link']       = 'Next';
        $config['next_tag_open']   = '<li class="nextlink">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = 'Prev';
        $config['prev_tag_open']   = '<li class="prevlink">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active">';
        $config['cur_tag_close']   = '</li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        $this->pagination->initialize($config);
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->General_model->fetch_products($config["per_page"], $page);

        $query           = $this->pagination->create_links();
        $data["links"]   =$query; 
         
        //$data['results'] = $this->db->where('events','both')->get('product')->result();
        $data['results'] = $this->db->where('gifts','gifts')->get('product')->result();

        $this->load->view('header',$data);
        $this->load->view('product',$data);
        $this->load->view('footer');
    }

    public function weddings()
    {

        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $config                = array();
        $config["base_url"]    = base_url() . "product/page";
        $config["total_rows"]  = $this->General_model->record_count();
        $config["per_page"]    = 9;
        $config["uri_segment"] = 3;
        $config['num_links']   = 2;

        $config['use_page_numbers']   = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open']   = '<ul>';
        $config['full_tag_close']  = '</ul>';
         
        $config['first_link']      = '<i class="fas fa-angle-double-left">';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link']       = '<i class="fas fa-angle-double-right">';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
         
        $config['next_link']       = 'Next';
        $config['next_tag_open']   = '<li class="nextlink">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = 'Prev';
        $config['prev_tag_open']   = '<li class="prevlink">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active">';
        $config['cur_tag_close']   = '</li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        $this->pagination->initialize($config);
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->General_model->fetch_products($config["per_page"], $page);

        $query           = $this->pagination->create_links();
        $data["links"]   =$query; 


        $data['results'] = $this->db->where('weddings','weddings')->get('product')->result();

        $this->load->view('header',$data);
        $this->load->view('product',$data);
        $this->load->view('footer');
    }

    public function events()
    {

        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $config                = array();
        $config["base_url"]    = base_url() . "product/page";
        $config["total_rows"]  = $this->General_model->record_count();
        $config["per_page"]    = 9;
        $config["uri_segment"] = 3;
        $config['num_links']   = 2;

        $config['use_page_numbers']   = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open']   = '<ul>';
        $config['full_tag_close']  = '</ul>';
         
        $config['first_link']      = '<i class="fas fa-angle-double-left">';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link']       = '<i class="fas fa-angle-double-right">';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
         
        $config['next_link']       = 'Next';
        $config['next_tag_open']   = '<li class="nextlink">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = 'Prev';
        $config['prev_tag_open']   = '<li class="prevlink">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active">';
        $config['cur_tag_close']   = '</li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        $this->pagination->initialize($config);
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->General_model->fetch_products($config["per_page"], $page);

        $query           = $this->pagination->create_links();
        $data["links"]   =$query; 


        $data['results'] = $this->db->where('events','both')->get('product')->result();

        $this->load->view('header',$data);
        $this->load->view('product',$data);
        $this->load->view('footer');
    }

    public function premium_wine()
    {
        
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $config                = array();
        $config["base_url"]    = base_url() . "product/page";
        $config["total_rows"]  = $this->General_model->record_count();
        $config["per_page"]    = 9;
        $config["uri_segment"] = 3;
        $config['num_links']   = 2;

        $config['use_page_numbers']   = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open']   = '<ul>';
        $config['full_tag_close']  = '</ul>';
         
        $config['first_link']      = '<i class="fas fa-angle-double-left">';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link']       = '<i class="fas fa-angle-double-right">';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
         
        $config['next_link']       = 'Next';
        $config['next_tag_open']   = '<li class="nextlink">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = 'Prev';
        $config['prev_tag_open']   = '<li class="prevlink">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active">';
        $config['cur_tag_close']   = '</li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';

        $this->pagination->initialize($config);
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->General_model->fetch_products($config["per_page"], $page);

        $query           = $this->pagination->create_links();
        $data["links"]   = $query; 

        $data['results'] = $this->db->select('*')->from('product')->join('categories','categories.category_Id = product.category_Id')->where('product.category_Id','1')->get('')->result();      
        
        $this->load->view('header',$data);
        $this->load->view('premium_wine',$data);
        $this->load->view('footer');

    }

    public function classic_wine()
    {
        
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query=$this->General_model->show_data_id('categories','1','status','get','');
        $data['categorie']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->alldistnict('product','country','country','','');
        $data['country']=$query;

        $query=$this->General_model->alldistnict('product','color','color','','');
        $data['color']=$query;

        $query=$this->General_model->alldistnict('product','varietals','varietals','','');
        $data['varietals']=$query;

        $config                = array();
        $config["base_url"]    = base_url() . "product/page";
        $config["total_rows"]  = $this->General_model->record_count();
        $config["per_page"]    = 9;
        $config["uri_segment"] = 3;
        $config['num_links']   = 2;

        $config['use_page_numbers']   = TRUE;
        $config['reuse_query_string'] = TRUE;
         
        $config['full_tag_open']   = '<ul>';
        $config['full_tag_close']  = '</ul>';
         
        $config['first_link']      = '<i class="fas fa-angle-double-left">';
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link']       = '<i class="fas fa-angle-double-right">';
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
         
        $config['next_link']       = 'Next';
        $config['next_tag_open']   = '<li class="nextlink">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = 'Prev';
        $config['prev_tag_open']   = '<li class="prevlink">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="active">';
        $config['cur_tag_close']   = '</li>';

        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        $this->pagination->initialize($config);
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->General_model->fetch_products($config["per_page"], $page);

        $query           = $this->pagination->create_links();
        $data["links"]   = $query; 
        
        $data['results'] = $this->db->select('*')->from('product')->join('categories','categories.category_Id = product.category_Id')->where('product.category_Id','2')->get('')->result();      
        
        $this->load->view('header',$data);
        $this->load->view('classic_wine',$data);
        $this->load->view('footer');

    }
}


	
    
