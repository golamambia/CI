<?php
ob_start();
class Wishlist extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Generalmodel');
        $this->load->model('Custom_model');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->helper('text');

        if(!$this->session->userdata('cus_id')){
            redirect('/', 'refresh');
        }

    }

    function index()
    {
        $query= $this->Generalmodel->show_data_id('customer',$this->session->userdata('cus_id'),'id','get','');
        $data['customer'] = $query;
        
        $query= $this->Custom_model->uni_order_details($this->session->userdata('cus_uni_id'));
        $data['order'] = $query;

        //Wish List
        $query = $this->Generalmodel->show_data_id('wishlist',$this->session->userdata('cus_uni_id'),'customer_id','get','');
        $data['wishlist'] = $query;

        foreach ($data['wishlist'] as $w) {
            $query = $this->Generalmodel->show_data_id('product', $w->product_id, 'uni_product_id', 'get', '');
            $data['wishlist_product'][$w->product_id] = $query;
        }
        //End Wish List
        //================== BRAND ============================
        $query=$this->Generalmodel->show_data_id('brand_slide','1','status','get','');
        $data['brand']=$query;
        //=====================================================
        $data['title'] = $data['customer'][0]->customer_first_name.' '.$data['customer'][0]->customer_last_name.' - All Wishlist';
        $this->load->view('header',$data);
        $this->load->view('wishlist',$data);
        $this->load->view('footer');
    }

     

}