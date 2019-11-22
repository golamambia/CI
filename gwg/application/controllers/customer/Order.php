<?php
ob_start();
class Order extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('General_model');
        $this->load->model('Custom_model');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->helper('text');

        if(!$this->session->userdata('cus_id')){
            redirect('/', 'refresh');
        }

    }

   //  function index()
   //  {
   //      $query= $this->General_model->show_data_id('customer',$this->session->userdata('cus_id'),'customer_id','get','');
   //      $data['customer'] = $query;
        
   //      $query= $this->Custom_model->uni_order_details($this->session->userdata('cus_uni_id'));
   //      $data['order'] = $query;

   //      foreach ($data['order'] as $r){
   //          $query = $this->General_model->show_data_id('product_order',$r->uni_order_id,'uni_order_id','get','');
   //          $data['product_order'][$r->uni_order_id] = $query;
   //      }
   //      //================== BRAND ============================
   //      $query=$this->General_model->show_data_id('brand_slide','1','status','get','');
   //      $data['brand']=$query;
   //      //=====================================================
   //      $data['title'] = $data['customer'][0]->customer_first_name.' '.$data['customer'][0]->customer_last_name.' - All orders';
   //      $this->load->view('header',$data);
   //      $this->load->view('orders',$data);
   //      $this->load->view('footer');
   //  }

   //  function reorder()
   //  {
			// $uni_order_id = $this->input->post('uni_order_id');
			// $result = $this->General_model->show_data_id('product_order',$uni_order_id,'uni_order_id','get','');
			
			// foreach($result as $r){
			//    $data=array(
			// 			'ip_address' => $this->input->ip_address(),
			// 			'customer_id' => $this->session->userdata('cus_id'),
			// 			'product_id' => $r->product_id,
			// 			'quantity' => $r->qty,
			//          );
			
			// $query = $this->db->get_where('cart', array('customer_id' => $this->session->userdata('cus_id'), 'product_id' => $r->product_id));
			
			// if ($query->num_rows() === 0) {
			// $this->General_model->show_data_id('cart','','','insert',$data);
			// }
	  //   }
   //  }
     

}