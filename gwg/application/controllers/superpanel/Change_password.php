<?php
ob_start();
class Change_password extends CI_Controller {

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
		$query=$this->General_model->show_data_id('admin_details',1,'id','get','');
        $data['change_pass']=$query;
        $data['title']="Dahboard || Great Wine Global";
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/change_password');
		$this->load->view('superpanel/footer');
	}

	//========================= Update Change Password =================================

	public function update_password()
	{
	   $this->form_validation->set_rules('password', 'Password', 'required|matches[con_pass]');
       if ($this->form_validation->run() == FALSE) 
	    {
			$this->session->set_flashdata('error', 'Password and Confirm Password do not matched !');
		     redirect('superpanel/change_password');	
		}
		else
		{
		    $old_password=$this->input->post('old_password');  
		    $old_pass=md5($this->input->post('old_pass'));  
		    $new_pass=md5($this->input->post('password'));
		
		  if($old_password==$old_pass)
		  {		
		    $data=array(
		     'password'=>$new_pass	
		     ); 
		    $query=$this->General_model->show_data_id('admin_details',1,'id','update',$data);
	        $this->session->set_flashdata('success', 'Password Changed successfully.');
	        redirect('superpanel/change_password');			
		  }
		  else
		  {
			$this->session->set_flashdata('error', 'Current Password do not matched !');
		    redirect('superpanel/change_pass');	
		  }		
	  } 

	}

	//========================= End Update Change Password =================================
}

