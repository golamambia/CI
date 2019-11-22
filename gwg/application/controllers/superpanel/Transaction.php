<?php
ob_start();
class Transaction extends CI_Controller {

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
            $query=$this->General_model->show_data_date('transaction',$data1,$data2,'get','transaction_date','tranction_id','asc');
        $data['transaction']=$query;
        $data['title']="Dahboard || Great Wine Global";
        
        }else{
            $query=$this->General_model->show_data_id('transaction','','','get','');
        $data['transaction']=$query;
        $data['title']="Dahboard || Great Wine Global";
        
        }
		
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/transaction');
		$this->load->view('superpanel/footer');
	}

    //========================= Edit Transaction =================================
    public function edit_transaction($id)
    {
        $query=$this->General_model->show_data_id('categories','','category_Id','get','');
        $data['category']=$query;
        $query=$this->General_model->show_data_id('product','','','get','');
        $data['product']=$query; 
        $query=$this->General_model->show_data_id('transaction','','','get','');
        $data['transaction']=$query; 
        $data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_transaction');
        $this->load->view('superpanel/footer');
    }
    //========================= End Transaction =================================

    //========================= Update Transaction =================================
    public function update_transaction($id)
    {
        $data=$this->input->post();
        $data1= array();

        $data1['customer_name']       = ucwords(strtolower($data['category_name']));
        $data1['date_of_tranction']   = $data['date_of_tranction'];
        $data1['mode_of_tranction']   = $data['mode_of_tranction'];
        $data1['total_price']         = $data['total_price'];
        $result=$this->General_model->show_data_id('transaction','','','insert', $data1);
        redirect('superpanel/transaction');
    }
   //========================= End Update Transaction =================================
	

}

