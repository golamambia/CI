<?php
class Excel_export_model extends CI_Model
{
	function fetch_data()
	{
		
		$this->db->select ('*'); 
				$this->db->from("sales_order");
				$this->db->join('product', 'sales_order.product_id = product.product_id');
				$this->db->join('customer', 'sales_order.customer_id = customer.customer_id');
			
			
			$this->db->order_by('order_id','desc');
			$query = $this->db->get();

		return $query->result();
	}

	
}
