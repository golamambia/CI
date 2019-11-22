<?php
ob_start();
class Categorie extends CI_Controller {
	
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
        if($query[0]->categories == 0 || $query[0]->categories == NULL)
        {
            redirect('superpanel/home');
        }
        //End of Admin Access
      
    }

	public function index()
	{
		$query=$this->General_model->show_data_id('categories','','','get','');
        $data['category']=$query;
        $data['title']="Dahboard || Great Wine Global";
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/categorie');
		$this->load->view('superpanel/footer');
	}

	public function add_category()
	{
		$query=$this->General_model->show_data_id('categories','','','get','');
        $data['category']=$query;

        $this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/category_entry');
		$this->load->view('superpanel/footer');
	}


    //========================= Insert category =================================
	public function insert_category()
	{
        
        $this->form_validation->set_rules('category_slug','category_slug', 'required|is_unique[categories.category_slug]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('error', 'category Slug already exists on database !');
            redirect('superpanel/categorie/add_category');
        }
        else
        {    
		$data=$this->input->post();
		$data1= array();

		//For Slug 
		$slug =strtolower($data['category_slug']);
        $slug =preg_replace('/[^a-zA-Z0-9-_\.]/','-',$slug);
        //End Slug

		$config = array(
                'upload_path' => "uploads/category/",
                'upload_url' => base_url() . "uploads/category/",
                'allowed_types' => "gif|jpg|png|jpeg"
            );

            $this->load->library('upload', $config);

        if ($this->upload->do_upload("category_img")) {
         $data['category_img'] = $this->upload->data();

         $data1['category_parent_Id']  = $data['category_parent_Id'];
         $data1['category_name']       = ucwords(strtolower($data['category_name']));
         $data1['category_slug']       = $data['category_slug'];
         $data1['category_img']        = base_url().'uploads/category/'.$data['category_img']['file_name'];
         $data1['category_description']= $data['category_description'];
         $data1['meta_keyword']        = $data['meta_keyword'];
         $data1['meta_description']    = $data['meta_description'];
         $data1['status']              = $data['status'];

         $this->session->set_flashdata('success','Product Category added successfully');
         $result=$this->General_model->show_data_id('categories','','','insert', $data1);
         redirect('superpanel/categorie');
         }else{
         $data1['category_parent_Id']  = $data['category_parent_Id'];
         $data ['category_img']        = $this->upload->data();
         $data1['category_name']       = ucwords(strtolower($data['category_name']));
         $data1['category_slug']       = $data['category_slug'];
         $data1['category_img']        = base_url().'uploads/category/'.$data['category_img']['file_name'];
         $data1['category_description']= $data['category_description'];
         $data1['meta_keyword']        = $data['meta_keyword'];
         $data1['meta_description']    = $data['meta_description'];
         $data1['status']              = $data['status'];

         $this->session->set_flashdata('success','Product Category added successfully');
         $result=$this->General_model->show_data_id('categories','','','insert', $data1);
         redirect('superpanel/categorie');
         }
         }	
     
	}

    //========================= End Insert category =================================
    
    //========================= Edit category =================================
	public function edit_category($id)
	{
		$query=$this->General_model->show_data_id('categories',$id,'category_Id','get','');
        $data['category']=$query; 
		$data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_categorie');
        $this->load->view('superpanel/footer');
	}
	//========================= End Edit category =================================
    
    //========================= Update category =================================
	public function update_category($id)
	{
		$config = array(
            'upload_path' => "uploads/category/",
            'upload_url' => base_url() . "uploads/category/",
            'allowed_types' => "gif|jpg|png|jpeg"
        );

        $this->load->library('upload', $config);
        $category_name=ucwords(strtolower($this->input->post('category_name')));
        if($this->upload->do_upload('userfile')) {

            $data['userfile'] = $this->upload->data();
            $filename = $data['userfile']['file_name'];
		   
            $datalist = array( 
                'category_img' => base_url().'uploads/category/'.$filename, 
                'meta_keyword' => $this->input->post('meta_keyword'),
                'meta_description' => $this->input->post('meta_description'),
                'category_name'=> $this->input->post('category_name'),
				'category_description'=> $this->input->post('category_description'), 
                'category_slug' => $this->input->post('category_slug'),
                'status'=>$this->input->post('status'), 
            );
        }else{
            $datalist = array( 
                'meta_keyword' => $this->input->post('meta_keyword'),
                'meta_description' => $this->input->post('meta_description'),
                'category_name'=> $this->input->post('category_name'),
				'category_description'=> $this->input->post('category_description'), 
                'category_slug' => $this->input->post('category_slug'),
                'status'=>$this->input->post('status'),
            );
        }  

        $query= $this->General_model->show_data_id('categories',$id,'category_Id','update',$datalist);
        $this->session->set_flashdata('success', 'Product category Updated successfully.');
        redirect('superpanel/categorie');
	}
   //========================= End Update category =================================

   //========================= Delete category =================================
    public function delete_category($id)
     { 
	    $query=$this->General_model->show_data_id('categories',$id,'category_Id','get','');
        @unlink(str_replace(base_url(),'',$query[0]->category_img));
        
        $query=$this->General_model->show_data_id('categories',$id,'category_Id','delete','');
        $this->session->set_flashdata('success','Product Category Deleted successfully');   
        redirect('superpanel/categorie');
	
	 }
    //=========================End Delete category ================================= 
}


	
    
