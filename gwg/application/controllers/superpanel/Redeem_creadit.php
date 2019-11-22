<?php
ob_start();
class Redeem_creadit extends CI_Controller {

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
        $this->load->library('session');
        $this->load->model('General_model');
        $this->load->helper('url');
        $this->load->helper('string');
        if(!$this->session->userdata('is_logged_in')==1)
        {
            redirect('superpanel','refresh');
        }

    }

	public function index()
	{
		$query=$this->General_model->show_data_id('redeem_creadit',1,'id','get','');
        $data['change_redeem']=$query;
        $data['title']="Dahboard || Great Wine Global";
        //print_r($data);
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/redeem_creadit');
		$this->load->view('superpanel/footer');
	}

	//========================= Update Change Password =================================

	public function update_redeem()
	{
	   $this->form_validation->set_rules('amount', 'Amount', 'required');
	   $this->form_validation->set_rules('point', 'Point', 'required');
       if ($this->form_validation->run() == FALSE) 
	    {
			$this->session->set_flashdata('error', 'All fields are required !');
		     redirect('superpanel/redeem_creadit');	
		}
		else
		{
		   $datalist = array( 
                'amount' => $this->input->post('amount'),
                'point' => $this->input->post('point'),
                
            );
		  $query=$this->General_model->show_data_id('redeem_creadit',1,'id','update',$datalist);
	        $this->session->set_flashdata('success', 'Data Updated successfully.');
	        redirect('superpanel/redeem_creadit');				
	  } 

	}

	//========================= End Update Change Password =================================
}

