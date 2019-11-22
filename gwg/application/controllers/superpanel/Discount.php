<?php

class Discount extends CI_Controller {

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
	if(!$this->session->userdata('is_logged_in')==1)
        {
            redirect('superpanel', 'refresh');
        }

        //Admin Access
        $query = $this->General_model->show_data_id('admin_access',$this->session->userdata('access_id'),'admin_id','get','');
        if($query[0]->discount == 0 || $query[0]->discount == NULL){
            redirect('superpanel/home');
        }
        //End of Admin Access
    }    
	public function index()
	{
        $query= $this->db->select('*')->from('discount')->join('product','product.product_id = discount.product_id')->get('')->result();
        
        $data['discount']=$query;
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/discount');
		$this->load->view('superpanel/footer');
	}

    public function add_discount()
    {
        $query=$this->General_model->show_data_id('product','','product_id','get','');
        $data['product']=$query;

        $data['title']="Add Discount";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/discount_entry');
        $this->load->view('superpanel/footer');
    }

    public function insert_discount()
    {
        
        $data=array(
                'product_id'  =>$this->input->post('product_id'),
                'discount_amount'=>$this->input->post('discount_amount'),
                'publish_date'=>$this->input->post('publish_date'),
                'end_date'    =>$this->input->post('end_date')
        );
        
        $result=$this->General_model->show_data_id('discount','','','insert', $data);
        $this->session->set_flashdata('success', 'Discount added successfully');
        redirect('superpanel/discount');

    }
}

