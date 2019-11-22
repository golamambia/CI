<?php
ob_start();
class General_settings extends CI_Controller {

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
        $this->load->helper('string');
    }

	public function index()
	{
		$query=$this->General_model->show_data_id('general_setting','','','get','');
        $data['admin']=$query;
        $data['title']="Dahboard || Great Wine Global";
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/general_settings');
		$this->load->view('superpanel/footer');
	}

	//========================= Insert General_settings =================================

	public function insert_general_settings()
	{
		$data=$this->input->post();
		$data1= array();

         $data1['email']               = $data['email'];
         $data1['phone']               = $data['phone'];
         $data1['address']             = $data['address'];
         $data1['google_map']          = $data['google_map'];
         $data1['facebook_link']       = $data['facebook_link'];
         $data1['instragram_link']     = $data['instragram_link'];
         $data1['googleplus_link']     = $data['googleplus_link'];
         $data1['youtube_link']        = $data['youtube_link'];
         $data1['pinterest_link']      = $data['pinterest_link'];
         $data1['twitter_link']        = $data['twitter_link'];
         $data1['rss_link']            = $data['rss_link'];
         $result=$this->General_model->show_data_id('general_setting','','','insert', $data1);
         redirect('superpanel/general_settings');
         
         	   

	}

	//========================= End Insert General_settings =================================
}

