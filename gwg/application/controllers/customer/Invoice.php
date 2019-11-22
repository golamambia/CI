<?php
ob_start();
class Invoice extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Generalmodel');
        $this->load->model('Custom_model');
        $this->load->library('form_validation');
        $this->load->library('cart');
        $this->load->helper('text');
        $this->load->helper('date'); 
    } 

    function invoice_copy($id)
    {   
		 $this->load->helper('file'); 
		 $this->load->library('pdf');
		 $this->pdf->set_paper('letter','landscape');		 
		 
         $data['order']= $this->Generalmodel->show_data_id('product_order',$id,'uni_order_id','get','');
         $this->pdf->loadHtml($this->load->view('pdfinvoice', $data, true));
         $this->pdf->render();
		 
		 $filename=$id.'_.pdf';
         $this->pdf->stream($filename, array("Attachment"=>0));
		  
		 
    } 
}
?>