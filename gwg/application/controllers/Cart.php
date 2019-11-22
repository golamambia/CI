<?php
ob_start();
class Cart extends CI_Controller {
	
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
        $this->load->library('pagination');
    }

	public function index()
	{
        
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;
        $this->load->view('header',$data);
		$this->load->view('cart');
        $this->load->view('footer');

	}


}


	
    
