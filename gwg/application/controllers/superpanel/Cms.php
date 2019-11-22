<?php
ob_start();
class Cms extends CI_Controller {

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
        $this->load->library('session');
         if(!$this->session->userdata('is_logged_in')==1)
        {
            redirect('superpanel', 'refresh');
        }

        //Admin Access
        $query = $this->General_model->show_data_id('admin_access',$this->session->userdata('access_id'),'admin_id','get','');
        if($query[0]->cms_pages == 0 || $query[0]->cms_pages == NULL)
        {
            redirect('superpanel/home');
        }
        //End of Admin Access
      
    }

	public function index()
	{
		$query=$this->General_model->show_data_id('cms','','','get','');
        $data['cms']=$query;
        $data['title']="Dahboard || Great Wine Global";
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/cms');
		$this->load->view('superpanel/footer');
	}

	public function add_cms()
	{
		$this->load->view('superpanel/header');
		$this->load->view('superpanel/cms_entry');
		$this->load->view('superpanel/footer');
	}

	//========================= Insert Cms =================================
	public function insert_cms()
	{
        $this->form_validation->set_rules('slug','slug', 'required|is_unique[cms.slug]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('error', 'Cms slug already exists on database !');
            redirect('superpanel/categorie/add_category');
        }
        else
        {  
		$data=$this->input->post();
		$data1= array();

		//For Slug 
		$slug =strtolower($data['slug']);
        $slug = preg_replace('/[^a-zA-Z0-9-_\.]/','_',$slug);
        //End Slug

		$config = array(
                'upload_path' => "uploads/cms/",
                'upload_url' => base_url()."uploads/cms/",
                'allowed_types' => "gif|jpg|png|jpeg"
            );

            $this->load->library('upload', $config);

        if ($this->upload->do_upload("image")) {
         $data['image'] = $this->upload->data();

         $data1['slug']                = $data['slug'];
         $data1['image']               = base_url().'uploads/cms/'.$data['image']['file_name'];
         $data1['page_name']           = $data['page_name'];
         $data1['page_title']          = $data['page_title'];
         $data1['description']         = $data['description'];
         $data1['meta_keyword']        = $data['meta_keyword'];
         $data1['meta_description']    = $data['meta_description'];
         $data1['status']              = $data['status'];
         $result=$this->General_model->show_data_id('cms','','','insert', $data1);
         $this->session->set_flashdata('success', 'CMS Page Insert successfully.');
         redirect('superpanel/cms');
         }else{
         $data1['slug']                = $data['slug'];
         $data1['image']               = base_url().'uploads/cms/'.$data['image']['file_name'];
         $data1['page_name']           = $data['page_name'];
         $data1['page_title']          = $data['page_title'];
         $data1['description']         = $data['description'];
         $data1['meta_keyword']        = $data['meta_keyword'];
         $data1['meta_description']    = $data['meta_description'];
         $data1['status']              = $data['status'];
         $result=$this->General_model->show_data_id('cms','','','insert', $data1);
         $this->session->set_flashdata('success', 'CMS Page Insert successfully.');
         redirect('superpanel/cms');
         }
         }	
     
	}

    //========================= End Insert Cms =================================

    //========================= Edit Cms =================================
	public function edit_cms($id)
	{
		$query=$this->General_model->show_data_id('cms',$id,'id','get','');
        $data['cms']=$query; 
		$data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_cms');
        $this->load->view('superpanel/footer');
	}
	//========================= End Edit Cms =================================

	//========================= Update Cms =================================
	public function update_cms($id)
	{
		$config = array(
            'upload_path' => "uploads/cms/",
            'upload_url' => base_url() . "uploads/cms/",
            'allowed_types' => "gif|jpg|png|jpeg"
        );

        $this->load->library('upload', $config);
        if($this->upload->do_upload('userfile')) 
        {
            $data['userfile'] = $this->upload->data();
            $filename = $data['userfile']['file_name'];
		   
            $datalist = array( 
                'image' => base_url().'uploads/cms/'.$filename, 
                'page_name' => $this->input->post('page_name'),
                'page_title' => $this->input->post('page_title'),
				'slug'=> $this->input->post('slug'), 
                'description' => $this->input->post('description'),
                'meta_keyword' => $this->input->post('meta_keyword'),
				'meta_description'=> $this->input->post('meta_description'), 
                'status'=>$this->input->post('status'), 
            );
        }
        else
        {
            $datalist = array( 
                'page_name' => $this->input->post('page_name'),
                'page_title' => $this->input->post('page_title'),
				'slug'=> $this->input->post('slug'), 
                'description' => $this->input->post('description'),
                'meta_keyword' => $this->input->post('meta_keyword'),
				'meta_description'=> $this->input->post('meta_description'), 
                'status'=>$this->input->post('status'), 
            );
        }  

        $query= $this->General_model->show_data_id('cms',$id,'id','update',$datalist);
        $this->session->set_flashdata('success', 'CMS Page Update successfully.');
        redirect('superpanel/cms');
	}
   //========================= End Update Cms =================================

	//========================= Delete category =================================
    public function delete_cms($id)
     { 
	    $query=$this->General_model->show_data_id('cms',$id,'id','delete','');
        $this->session->set_flashdata('success', 'CMS Page Delete successfully.');
        redirect('superpanel/cms');
	
	 }
    //=========================End Delete category ================================= 
}

