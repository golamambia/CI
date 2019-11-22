<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




if ( ! function_exists('formData')){
   function formData($user_id){
      
       // get main CodeIgniter object
       // $ci =& get_instance();
       
       // //load databse library
       // $ci->load->database();
       // //get data from database
       // $query = $ci->db->get_where('user_table',array('id'=>1));
       
       // if($query->num_rows() > 0){
       //     $result = $query->row_array();
       //     return $result;
       // }else{
       //     return false;
       // }
    // foreach($user_id as $key => $val)  
    // {  
    //     //$post[$key] =$this->input->post($key);
    //     $post[$key] =$key;    
    // }  
       $hh=getField('user_table');
    return $hh;
   }
}