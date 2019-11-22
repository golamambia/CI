<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	//function create($Total,$SubTotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State) {
	function create($Total,$PayerStatus,$saleId,$current_date,$State,$cus_id,$order_num,$PaymentMethod) {
        $this->db->set('txn_id',$saleId);
        //$this->db->set('PaymentMethod',$PaymentMethod);
        //$this->db->set('PayerStatus',$PayerStatus);
        //$this->db->set('PayerMail',$PayerMail);
        $this->db->set('total_price',$Total);
        //$this->db->set('SubTotal',$SubTotal);
        $this->db->set('order_id',$order_num);
        $this->db->set('customer_id',$cus_id);
        $this->db->set('pay_status',$State);
		$this->db->set('mode_of_tranction','online');
		$this->db->set('transaction_date',$current_date);
		$this->db->insert('transaction');
		$id = $this->db->insert_id();
		return $id;
	}

}