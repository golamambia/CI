<?php
ob_start();
class Slider extends CI_Controller {

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
		$query=$this->General_model->show_data_id('slider','','id','get','');
        $data['slider']=$query; 
		$data['title']="Dahboard || Great Wine Global";
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/slider');
		$this->load->view('superpanel/footer');
	}

	public function add_slider()
	{   
		
        $result=$this->General_model->show_data_id('slider','','specification_id','get','');
        $data['slider']=$result;
        $data['title']="Dahboard || Great Wine Global"; 
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/slider_entry');
		$this->load->view('superpanel/footer');
	}

	//========================= Enter Slider =================================
	public function insert_slider()
	{

		$data =$this->input->post();
		$data1= array();

		$config = array(
                'upload_path' => "uploads/slider/",
                'upload_url' => base_url() . "uploads/slider/",
                'allowed_types' => "gif|jpg|png|jpeg"
            );

            $this->load->library('upload', $config);

        if ($this->upload->do_upload("slider_img")) {
         $data['slider_img'] = $this->upload->data();

         $data1['slider_heading']      = $data['slider_heading'];
         $data1['slider_description']  = $data['slider_description'];
         $data1['slider_img']          = base_url().'uploads/slider/'.$data['slider_img']['file_name'];
         $data1['slider_button_url']   = $data['slider_button_url'];
         $data1['slider_button_text']  = $data['slider_button_text'];
         $data1['status']              = $data['status'];
         $result=$this->General_model->show_data_id('slider','','','insert', $data1);
         redirect('superpanel/slider');
         }else{
         $data['slider_img'] = $this->upload->data();

         $data1['slider_heading']      = $data['slider_heading'];
         $data1['slider_description']  = $data['slider_description'];
         $data1['slider_img']          = base_url().'uploads/slider/'.$data['slider_img']['file_name'];
         $data1['slider_button_url']   = $data['slider_button_url'];
         $data1['slider_button_text']  = $data['slider_button_text'];
         $data1['status']              = $data['status'];
         $result=$this->General_model->show_data_id('slider','','','insert', $data1);
         redirect('superpanel/slider');	
         
         }	
     
	}

    //========================= End Slider =================================

    //========================= Edit Slider =================================

    public function edit_slider($id)
	{
		
        $result=$this->General_model->show_data_id('slider',$id,'id','get','');
        $data['slider']=$result;  
		$data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_slider',$data);
        $this->load->view('superpanel/footer');
	}

	//=========================End Edit Slider =================================

	//========================= Update Slider =================================

	public function update_slider($id)
	{
		$config = array(
            'upload_path' => "uploads/slider/",
            'upload_url' => base_url() . "uploads/slider/",
            'allowed_types' => "gif|jpg|png|jpeg"
        );

        $this->load->library('upload', $config);
        if($this->upload->do_upload('slider_img')) {

            $data['slider_img'] = $this->upload->data();
            $filename = $data['slider_img']['file_name'];
		   
            $datalist = array( 
                'slider_img'         => base_url().'uploads/slider/'.$filename, 
                'slider_heading'     => $this->input->post('slider_heading'),
                'slider_description' => $this->input->post('slider_description'),
                'slider_button_url'  => $this->input->post('slider_button_url'),
                'slider_button_text' => $this->input->post('slider_button_text'),
                'status'             =>$this->input->post('status'), 
            );
        }else{
            $datalist = array( 
                'slider_img'         => base_url().'uploads/slider/'.$filename, 
                'slider_heading'     => $this->input->post('slider_heading'),
                'slider_description' => $this->input->post('slider_description'),
                'slider_button_url'  => $this->input->post('slider_button_url'),
                'slider_button_text' => $this->input->post('slider_button_text'),
                'status'             =>$this->input->post('status'), 
            );
        }  

        $query= $this->General_model->show_data_id('slider',$id,'id','update',$datalist);
         redirect('superpanel/slider');
	}

	//========================= End Update Slider =================================

	//========================= Delete Slider =================================
    public function delete_slider($id)
     { 
	    $query=$this->General_model->show_data_id('slider',$id,'id','delete','');
        redirect('superpanel/slider');
	
	 }
    //=========================End Delete Slider ================================= 
}

