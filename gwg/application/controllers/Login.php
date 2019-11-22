<?php
ob_start();
class Login extends CI_Controller{
    function __construct() 
    {
        parent::__construct();
        $this->load->model('Custom_model');
		$this->load->model('General_model');	 
    }	
    function index(){}
	
    public function cus_login_validation(){
		$this->load->library('session');
        $this->load->helper('cookie');
		$query=$this->Custom_model->cus_login($this->input->post('login_email'),md5($this->input->post('login_password')));
		// echo $this->db->last_query(); exit();
		@$cus_status=$query[0]->status;
		@$cus_email=$query[0]->email;
		@$cus_id = $query[0]->customer_id;

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
			redirect($_SERVER['HTTP_REFERER'],$session_data);
		}
        else
        {  
			$this->session->set_flashdata("logerror", "Invalid Email or Password.");
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
?>