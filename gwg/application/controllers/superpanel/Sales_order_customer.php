<?php
ob_start();
class Sales_order_customer extends CI_Controller {

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
        $this->load->helper('url');
        $this->load->library('image_lib');
        $this->load->helper('string');
    }

    public function index()
    {
        $dat=$this->input->post();
        $data1=$this->input->post('date1');
        $data2=$this->input->post('date2');
        if($dat){
            $query=$this->General_model->show_data_date2('sales_order',$data1,$data2,'','get','order_date','price','DESC');
        $data['sales']=$query;
        $data['dt1']=$data1;
        $data['dt2']=$data2;
        $data['title']="Dahboard || Great Wine Global";
        
        }else{
            $query=$this->General_model->show_data_id2('sales_order','','','get','','inner_join');
        $data['sales']=$query;
        $data['title']="Dahboard || Great Wine Global";
        
        }
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/sales_order_customer');
        $this->load->view('superpanel/footer');
        
    }

    public function add_sales_order()
    {
        $query=$this->General_model->show_data_id('product','','','get','');
        $data['product']=$query; 
        $query=$this->General_model->show_data_id('sales_order','','','get','');
        $data['sales']=$query;
        $data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/sales_order_entry');
        $this->load->view('superpanel/footer');
    }

    //========================= Insert sales order =================================
    public function insert_sales_order()
    {

        $data=$this->input->post();
        $data1= array();

         $data1['category_Id']         = $data['category_Id'];
         $data1['product_id']          = $data['product_id'];
         $data1['customer_name']       = $data['customer_name'];
         $data1['date_of_order']       = $data['date_of_order'];
         $data1['qty']                 = $data['qty'];
         $data1['price']               = $data['price'];
         $data1['qty']                 = $data['qty'];
         $data1['total_price']         = $data['total_price'];
         $result=$this->General_model->show_data_id('sales_order','','','insert', $data1);
         redirect('superpanel/sales_order');
     
    }

    //========================= End sales order =================================

    //========================= Edit sales order =================================
    public function edit_sales_order($id)
    {
        

        $query=$this->General_model->show_data_id('product','','','get','');
        $data['product']=$query; 
        $query=$this->General_model->show_data_id('sales_order',$id,'order_id','get','');
        $data['sales']=$query;
        $data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_sales_order');
        $this->load->view('superpanel/footer');
    }
    //========================= End sales order =================================

    //========================= Update sales order =================================
    public function update_sales_order($id)
    {
        $data=$this->input->post();
        $data1= array();

         $data1['category_Id']         = $data['category_Id'];
         $data1['product_id']          = $data['product_id'];
         $data1['customer_name']       = $data['customer_name'];
         $data1['date_of_order']       = $data['date_of_order'];
         $data1['qty']                 = $data['qty'];
         $data1['price']               = $data['price'];
         $data1['qty']                 = $data['qty'];
         $data1['total_price']         = $data['total_price'];
         $result=$this->General_model->show_data_id('sales_order',$id,'order_id','update', $data1);
         redirect('superpanel/sales_order');
    }
   //========================= End Update sales order =================================

}

