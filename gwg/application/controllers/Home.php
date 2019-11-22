<?php
ob_start();
class Home extends CI_Controller {
	
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
        $query=$this->General_model->show_data_id('slider','1','status','get','');
        $data['slider']=$query;

        $query=$this->General_model->show_data_id('product','1','status','get','');
        $data['product']=$query;

        $query=$this->General_model->show_data_id('cms','home','slug','get','');
        $data['cms']=$query;      

        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;

        $result=$this->General_model->show_data_id('product_review','1','status','get','');
        $data['product_review']=$result;

        $query= $this->db->select('*')->from('product_review')->join('product','product.product_name = product_review.product_name')->get('')->result();
        $data['product_review1']=$query;

        $this->load->view('header',$data);
		$this->load->view('index',$data);
        $this->load->view('footer',$data);

	}

    public function register()
    {
        $result=$this->General_model->show_data_id('general_setting','','id','get','');
        $data['general_setting']=$result;
        $this->load->view('header',$data);
        $this->load->view('register');
        $this->load->view('footer');
    }
    
    public function insert_register()
    {

        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[15]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required');

        if($this->form_validation->run()==FALSE)
        {
            redirect('home/register');
        }
        else
        {
        $data=$this->input->post();
        $data1= array();
        $now = date('Y-m-d H:i:s');
        $data1['customer_fullname']   = $data['customer_fullname'];
        $data1['email']            = $data['email_id'];
        $data1['password']            = md5($data['password']);
        //$data1['confirm_password']    = md5($data['confirm_password']);
        $data1['phone_no']            = $data['phone_no'];
        $data1['gender']              = $data['gender'];
        $data1['reg_date']              = $now;
        $data1['status']              = '1';
        $data1['wine_interest']       = implode(',',$data['wine_interest']);
        
        $result=$this->General_model->show_data_id('customer','','','insert', $data1);
        redirect('home/index');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[15]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|required');

        if($this->form_validation->run()==FALSE)
        {
            redirect('home');
        }
        else
        {

        $data=$this->input->post();
        $data1= array();

        $data1['email_id']            = $data['email_id'];
        $data1['password']            = md5($data['password']);
        $result=$this->General_model->show_data_id('customer','','','insert', $data1);
        redirect('home/index');
        
        }
    }
}


	
    
