<?php

class Specification extends CI_Controller {

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
		$query=$this->General_model->show_data_id('product_specification','','','get','');
    $data['product_specification']=$query;
    $data['title']="Dahboard || Great Wine Global";
		$this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/specification');
		$this->load->view('superpanel/footer');
	}

	public function add_specification()
	{
		$query=$this->General_model->show_data_id('categories','','category_Id','get','');
    $data['category']=$query;
    $query=$this->General_model->show_data_id('product_specification','','','get','');
    $data['product_specification']=$query; 
    $this->load->view('superpanel/header',$data);
		$this->load->view('superpanel/specification_entry',$data);
		$this->load->view('superpanel/footer');
	}

	//========================= Insert Specification =================================
	public function insert_specification()
	{
           $specification_name=$this->input->post('specification_name');
           $category_Id       =$this->input->post('category_Id');

           
           foreach ($category_Id as $cid) 
           {
              foreach ($specification_name as $spname) 
              {
                $data = array(
                          'category_Id' =>$cid,   
                          'specification_name' =>$spname,
                        ); 
                $query = $this->General_model->show_data_id('product_specification', '', '', 'insert', $data);
              }
           }            
           redirect('superpanel/specification');      
            
	}

    //========================= End Insert Specification =================================

    //========================= Edit specification =================================
  public function edit_specification($id)
  {
        $query=$this->General_model->show_data_id('categories','','category_Id','get','');
        $data['category']=$query; 
        $query=$this->General_model->show_data_id('product_specification',$id,'specification_id','get','');
        $data['specification']=$query; 
        $data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_specification');
        $this->load->view('superpanel/footer');
  }

  //=========================End Edit specification =================================

  //========================= Update specification =================================

  public function update_specification($id)
  {       

          $specification_name=$this->input->post('specification_name');
           
           foreach ($specification_name as $spname) 
           {
              $data = array(
                             'category_name'=>$this->input->post('category_name'),
                             'specification_name' =>$spname,
                           ); 
            if(!empty($spname))
            {
              $query= $this->General_model->show_data_id('product_specification',$id,'specification_id','update',$data);

            }

           }    
         redirect('superpanel/specification');
  }
    //========================= End Update specification =================================

    //========================= Delete specification =================================
   
    public function delete_specification($id)
     { 
        $query=$this->General_model->show_data_id('product_specification',$id,'specification_id','delete','');
        redirect('superpanel/specification');
     }
    //=========================End Delete specification ================================= 
  
}

