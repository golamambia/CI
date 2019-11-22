<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_export extends CI_Controller {
	
	function index()
	{
		$this->load->model("excel_export_model");
		$data["employee_data"] = $this->excel_export_model->fetch_data();
		$this->load->view("excel_export_view", $data);
	}

	function action()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("Slno", "Purchase Date", "Product Name", "Quantity", "Amount");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->excel_export_model->fetch_data();

		$excel_row = 2;
		$i=1;
		foreach($employee_data as $row)
		{
			$originalDate =$row->date_of_order;
      
                $newDate1 =date("d-m-Y",strtotime($originalDate));
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $i);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $newDate1);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->product_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->qty);
			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->price);
			$excel_row++;
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Sales Order Data.xls"');
		$object_writer->save('php://output');
	}
	function action2()
	{
		$this->load->model("excel_export_model");
		$this->load->library("excel");
		$object = new PHPExcel();

		$object->setActiveSheetIndex(0);

		$table_columns = array("Slno", "Purchase Date","Order ID","Customer Name", "Product Name", "Quantity", "Amount");

		$column = 0;

		foreach($table_columns as $field)
		{
			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			$column++;
		}

		$employee_data = $this->excel_export_model->fetch_data();

		$excel_row = 2;
		$i=1;
		foreach($employee_data as $row)
		{
			$originalDate =$row->date_of_order;
      
                $newDate1 =date("d-m-Y",strtotime($originalDate));
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $i);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $newDate1);
			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->uni_order_id);
			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->customer_fullname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->product_name);
			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->qty);
			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->price);
			$excel_row++;
			$i++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Sales Customer Data.xls"');
		$object_writer->save('php://output');
	}

	
	
}

















































	