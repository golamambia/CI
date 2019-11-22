<?php
ob_start();

class Dashboard extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('General_model');
        $this->load->model('Custom_model');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->helper('text');
        $this->load->helper('date');

        if(!$this->session->userdata('cus_id'))
        {
            redirect('/', 'refresh');
        }

    }

    function profile()
    {
        
        $query= $this->General_model->show_data_id('customer',$this->session->userdata('cus_id'),'customer_id','get','');
        $data['customer'] = $query;

        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $query= $this->General_model->show_data_id('address_book','1','flag','get','');
        $data['shipping_address'] = $query;

        $query= $this->General_model->show_data_id('address_book','0','flag','get','');
        $data['billing_address'] = $query;
        

        $query= $this->db->select('*')->from('sales_order')->join('product','product.product_id = sales_order.product_id')->get('')->result();
        $data['sales_order']=$query;

        $query= $this->db->select('*')->from('wishlist')->join('product','product.product_id = wishlist.product_id')->get('')->result();
        $data['wishlist']=$query;
        


        $this->load->view('header',$data);
        $this->load->view('profile',$data);
        $this->load->view('footer');
    }
    
    function update_profile()
    {
        $data=array(
            'customer_fullname'=>$this->input->post('customer_fullname'),
            'email'            =>$this->input->post('email'),
            'phone_no'         =>$this->input->post('phone_no'),
        );

        $this->db->update('customer', $data);
    }

    function update_shipping()
    {

        $data=array(
            'first_name'=>$this->input->post('first_name'),
            'last_name' =>$this->input->post('last_name'),
            'email_id'  =>$this->input->post('email_id'),
            'phone_no'  =>$this->input->post('phone_no'),
            'address'   =>$this->input->post('address'),
            'city'      =>$this->input->post('city'),
            'state'     =>$this->input->post('state'),
            'zip_code'  =>$this->input->post('zip_code'),
            'country'   =>$this->input->post('country'),
            
        );

            $this->db->update('address_book', $data);
    }
    
    function update_billing()
    {

        $data=array(
            'first_name'=>$this->input->post('first_name'),
            'last_name' =>$this->input->post('last_name'),
            'email_id'  =>$this->input->post('email_id'),
            'phone_no'  =>$this->input->post('phone_no'),
            'address'   =>$this->input->post('address'),
            'city'      =>$this->input->post('city'),
            'state'     =>$this->input->post('state'),
            'zip_code'  =>$this->input->post('zip_code'),
            'country'   =>$this->input->post('country'),
            
        );

            $this->db->update('address_book', $data);
    }
    
    function billing_address_remove($id)
    {
        $query=$this->General_model->show_data_id('address_book',$id,'id','delete','');
        $this->session->set_flashdata('success',' Billing Address Deleted Successfully');   
        redirect('customer/dashboard/profile');
    }

    function shipping_address_remove($id)
    {
        $query=$this->General_model->show_data_id('address_book',$id,'id','delete','');
        $this->session->set_flashdata('success',' Shipping Address Deleted Successfully');   
        redirect('customer/dashboard/profile');
    }

    function change_password()
    {
        $cpassword  = md5($this->input->post('cpassword'));
        $npassword  = md5($this->input->post('npassword'));
        $repassword = md5($this->input->post('repassword'));

        $customer_id=$this->session->userdata('cus_id');

        if(empty($customer_id)){
        }else{
            $data = array(
                    'password' => $repassword,
                     );
            $query= $this->General_model->show_data_id('customer',$customer_id,'customer_id','update',$data);

            $this->session->set_flashdata('success_msg', 'Profile password updated successfully.');
        }
        redirect('customer/dashboard/profile');
    }

    function rating()
    {
        $data=array(
            'name'        =>$this->input->post('name'),
            'product_name'=>$this->input->post('product_name'),
            'rating'      =>$this->input->post('rating'),
            'review'      =>$this->input->post('review'),
        );

        $query=$this->General_model->show_data_id('product_review','','','insert',$data);
        redirect('customer/dashboard/profile');
    }
    
    function order_remove($order_id)
    {
        $query=$this->General_model->show_data_id('sales_order',$order_id,'order_id','delete','');
        $this->session->set_flashdata('success',' Order Deleted Successfully');   
        redirect('customer/dashboard/profile');  
    } 

    function wishlist_remove($id)
    {
        $query=$this->General_model->show_data_id('wishlist',$id,'id','delete','');
        $this->session->set_flashdata('success',' Wishlist Deleted Successfully');   
        redirect('customer/dashboard/profile');  
    } 

    function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect('/');
    }

     

}