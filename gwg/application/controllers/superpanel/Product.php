<?php
ob_start();
class Product extends CI_Controller {
    
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
        $this->load->helper('file');

        if(!$this->session->userdata('is_logged_in')==1)
        {
            redirect('superpanel', 'refresh');
        }

        //Admin Access
        $query = $this->General_model->show_data_id('admin_access',$this->session->userdata('access_id'),'admin_id','get','');
        if($query[0]->product == 0 || $query[0]->product == NULL)
        {
            redirect('superpanel/home');
        }
        //End of Admin Access
    }

    public function index()
    {

        $query=$this->General_model->show_data_id('product','','','get','');
        $data['product']=$query;
        $query=$this->General_model->show_data_id('categories','','category_Id','get','');
        $data['category']=$query; 
        $data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/product');
        $this->load->view('superpanel/footer');
    }

    public function add_product()
    {   
        $query=$this->General_model->show_data_id('categories','','category_Id','get','');
        $data['category']=$query; 
        $result=$this->General_model->show_data_id('product_specification','','specification_id','get','');
        $data['specification']=$result;
        $data['title']="Dahboard || Great Wine Global"; 
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/product_entry');
        $this->load->view('superpanel/footer');
    }


    //========================= Insert product =================================

    public function insert_product()
    {

        $this->form_validation->set_rules('product_slug','Product Slug', 'required|is_unique[product.product_slug]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('error', 'Product Slug already exists on database !');
            redirect('superpanel/product/add_product');
        }
        else
        {    
            $data =$this->input->post();
            $data1= array();

            //For Slug 
            $slug =strtolower($data['product_slug']);
            $slug = preg_replace('/[^a-zA-Z0-9-_\.]/','-',$slug);
            //End Slug

            $config = array(
                        'upload_path' => "uploads/products/",
                        'upload_url' => base_url() . "uploads/products/",
                        'allowed_types' => "gif|jpg|png|jpeg"
                    );
            $this->load->library('upload', $config);
            $product_name=ucwords(strtolower($this->input->post('product_name')));


        if ($this->upload->do_upload("product_img")) 
         {
             $data['product_img']          = $this->upload->data();

             $data1['category_Id']         = $data['category_Id'];
             $data1['product_code']        = $data['product_code'];
             $data1['product_name']        = $product_name;
             $data1['product_slug']        = $data['product_slug'];
             $data1['product_type']        = $data['product_type'];
             $data1['product_description'] = $data['product_description'];
             $data1['product_img']         = base_url().'uploads/products/'.$data['product_img']['file_name'];
             $data1['video']               = $data['video'];

             $data1['price']               = $data['price'];
             $data1['sales_price']         = $data['sales_price'];
             $data1['cheese_paining']      = $data['cheese_paining'];
             
             $data1['quantity']            = $data['quantity'];
             $data1['vintage']             = $data['vintage'];
             $data1['alcohol']             = $data['vintage'];
             
             $data1['country']             = $data['country'];
             $data1['varietals']           = $data['varietals'];
             $data1['color']               = $data['color'];

             $data1['nose']                = $data['nose'];
             $data1['meta_keyword']        = $data['meta_keyword'];
             $data1['meta_description']    = $data['meta_description'];
             $data1['gifts']               = $data['gifts'];
             $data1['weddings']            = $data['weddings'];
             $data1['events']              = $data['events'];

             $data1['shipping_charge']     = $data['shipping_charge'];
             $data1['taxes']               = $data['taxes'];

             $data1['featured']            = $data['featured'];
             $data1['stock']               = $data['stock'];
             $data1['status']              = $data['status'];
             
             $result=$this->General_model->show_data_id('product','','','insert', $data1);
             $last_id=$this->db->insert_id();
         
         }

         //==========================Multiple image uploading=============================//
           $filesCount = count($_FILES['p_multi']['name']);

            for($i = 0; $i<$filesCount; $i++)
            {
                $_FILES['userFile']['name'] = $_FILES['p_multi']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['p_multi']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['p_multi']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['p_multi']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['p_multi']['size'][$i];

                $uploadPath = 'uploads/products/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['file_name']= random_string('alnum', 8);
                $config['overwrite'] = false;
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile'))
                {
                    $fileData = $this->upload->data();
                    $uploadData[$i]['images'] = base_url().'uploads/products/'.$fileData['file_name'];
                    $uploadData[$i]['product_id']= $last_id;
                }
            }
            if(!empty($uploadData))
            {
                $insert = $this->General_model->insertdata($uploadData);
            }
           //==========================Multiple image uploading=============================// 
         }  
            redirect('superpanel/product');
    }

    //========================= End Insert product =================================

    //========================= Edit product =================================

    public function edit_product($id)
    {
        
        $query=$this->General_model->show_data_id('product',$id,'product_id','get','');
        $data['product']=$query;

        $query=$this->General_model->show_data_id('categories',$data['product'][0]->category_Id,'category_Id','get','');
        $data['category']=$query;

        $result=$this->General_model->show_data_id('product_specification','','specification_id','get','');
        $data['specification']=$result;

        $result=$this->General_model->show_data_id('product_multi_image','','product_id','get','');
        $data['product_multi_image']=$result;

        $data['title']="Dahboard || Great Wine Global";
        $this->load->view('superpanel/header',$data);
        $this->load->view('superpanel/edit_product');
        $this->load->view('superpanel/footer');
    }

    //=========================End Edit product =================================

    //========================= Update product =================================

    public function update_product($id)
    {
        $config = array(
            'upload_path' => "uploads/products/",
            'upload_url' => base_url() . "uploads/products/",
            'allowed_types' => "gif|jpg|png|jpeg"
        );

        $this->load->library('upload', $config);
        $product_name=ucwords(strtolower($this->input->post('product_name')));

        if($this->upload->do_upload('userfile')) 
        {

            $data['userfile'] = $this->upload->data();
            $filename = $data['userfile']['file_name'];
           
            $datalist = array(

                'product_code'       =>$this->input->post('product_code'),
                'product_name'       => $product_name,
                'product_slug'       => $this->input->post('product_slug'),
                'product_type'       => $this->input->post('product_type'),
                'product_description'=> $this->input->post('product_description'), 
                'product_img'        => base_url().'uploads/products/'.$filename,

                'price'              => $this->input->post('price'),
                'sales_price'        => $this->input->post('sales_price'),
                'cheese_paining'     => $this->input->post('cheese_paining'),
                
                'quantity'           => $this->input->post('quantity'),
                'vintage'            => $this->input->post('vintage'),
                'alcohol'            => $this->input->post('alcohol'),

                'country'            => $this->input->post('country'),
                'varietals'          => $this->input->post('varietals'),
                'color'              => $this->input->post('color'),

                'nose'               => $this->input->post('nose'),
                'meta_keyword'       => $this->input->post('meta_keyword'),
                'meta_description'   => $this->input->post('meta_description'),
                'stock'              => $this->input->post('stock'),
                'status'             =>$this->input->post('status'), 
            );
        }
        else
        {
            $datalist = array(
                'product_code'       =>$this->input->post('product_code'),
                'product_name'       => $product_name,
                'product_slug'       => $this->input->post('product_slug'),
                'product_type'       => $this->input->post('product_type'),
                'product_description'=> $this->input->post('product_description'), 

                'price'              => $this->input->post('price'),
                'sales_price'        => $this->input->post('sales_price'),
                'cheese_paining'     => $this->input->post('cheese_paining'),
                
                'quantity'           => $this->input->post('quantity'),
                'vintage'            => $this->input->post('vintage'),
                'alcohol'            => $this->input->post('alcohol'),

                'country'            => $this->input->post('country'),
                'varietals'          => $this->input->post('varietals'),
                'color'              => $this->input->post('color'),

                'nose'               => $this->input->post('nose'),
                'meta_keyword'       => $this->input->post('meta_keyword'),
                'meta_description'   => $this->input->post('meta_description'),

                'gifts'              => $this->input->post('gifts'),
                'weddings'           => $this->input->post('weddings'),
                'events'             => $this->input->post('events'),
                'shipping_charge'    => $this->input->post('shipping_charge'),
                'free_delivery'    => $this->input->post('free_delivery'),
                'taxes'              => $this->input->post('taxes'),
                'featured'           => $this->input->post('featured'),

                'stock'              => $this->input->post('stock'),
                'status'             =>$this->input->post('status'),
            );
        }  

        $query= $this->General_model->show_data_id('product',$id,'product_id','update',$datalist);
         redirect('superpanel/product');
    }

    //========================= Update product =================================
    
    //========================= Delete product =================================
    public function delete_product($id)
     { 
        $query=$this->General_model->show_data_id('product',$id,'product_id','get','');
        @unlink(str_replace(base_url(),'',$query[0]->product_img));

        $query=$this->General_model->show_data_id('product_multi_image',$id,'product_id','get','');
        @unlink(str_replace(base_url(),'',$query[0]->images));

        $query1=$this->General_model->show_data_id('product',$id,'product_id','delete','');
        $query2=$this->General_model->show_data_id('product_multi_image',$id,'product_id','delete','');
        redirect('superpanel/product');
    
     }
    //=========================End Delete product ================================= 
}


    
    

