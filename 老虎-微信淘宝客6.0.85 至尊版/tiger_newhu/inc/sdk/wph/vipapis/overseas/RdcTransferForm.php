<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class RdcTransferForm {
	
	static $_TSPEC;
	public $rdc_id = null;
	public $barcode = null;
	public $product_name = null;
	public $schedule_id = null;
	public $num = null;
	public $to_warehouse = null;
	public $from_warehouse = null;
	public $order_id = null;
	public $order_sn = null;
	public $status = null;
	public $priority = null;
	public $data_source = null;
	public $order_type = null;
	public $po_no = null;
	public $detail_id = null;
	public $sale_type = null;
	public $no_po = null;
	public $po_type = null;
	public $vendor_code = null;
	public $create_time = null;
	public $allocated_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rdc_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'product_name'
			),
			4 => array(
			'var' => 'schedule_id'
			),
			5 => array(
			'var' => 'num'
			),
			6 => array(
			'var' => 'to_warehouse'
			),
			7 => array(
			'var' => 'from_warehouse'
			),
			8 => array(
			'var' => 'order_id'
			),
			9 => array(
			'var' => 'order_sn'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'priority'
			),
			12 => array(
			'var' => 'data_source'
			),
			13 => array(
			'var' => 'order_type'
			),
			14 => array(
			'var' => 'po_no'
			),
			15 => array(
			'var' => 'detail_id'
			),
			16 => array(
			'var' => 'sale_type'
			),
			17 => array(
			'var' => 'no_po'
			),
			18 => array(
			'var' => 'po_type'
			),
			19 => array(
			'var' => 'vendor_code'
			),
			20 => array(
			'var' => 'create_time'
			),
			21 => array(
			'var' => 'allocated_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rdc_id'])){
				
				$this->rdc_id = $vals['rdc_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['to_warehouse'])){
				
				$this->to_warehouse = $vals['to_warehouse'];
			}
			
			
			if (isset($vals['from_warehouse'])){
				
				$this->from_warehouse = $vals['from_warehouse'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['priority'])){
				
				$this->priority = $vals['priority'];
			}
			
			
			if (isset($vals['data_source'])){
				
				$this->data_source = $vals['data_source'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['detail_id'])){
				
				$this->detail_id = $vals['detail_id'];
			}
			
			
			if (isset($vals['sale_type'])){
				
				$this->sale_type = $vals['sale_type'];
			}
			
			
			if (isset($vals['no_po'])){
				
				$this->no_po = $vals['no_po'];
			}
			
			
			if (isset($vals['po_type'])){
				
				$this->po_type = $vals['po_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['allocated_num'])){
				
				$this->allocated_num = $vals['allocated_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RdcTransferForm';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("rdc_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rdc_id); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("to_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->to_warehouse);
				
			}
			
			
			
			
			if ("from_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_warehouse);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->order_id); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("priority" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priority);
				
			}
			
			
			
			
			if ("data_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_source);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->detail_id); 
				
			}
			
			
			
			
			if ("sale_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_type);
				
			}
			
			
			
			
			if ("no_po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->no_po);
				
			}
			
			
			
			
			if ("po_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_type);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("allocated_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->allocated_num); 
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('rdc_id');
		$xfer += $output->writeI64($this->rdc_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_name');
		$xfer += $output->writeString($this->product_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('schedule_id');
		$xfer += $output->writeString($this->schedule_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('num');
		$xfer += $output->writeI32($this->num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('to_warehouse');
		$xfer += $output->writeString($this->to_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('from_warehouse');
		$xfer += $output->writeString($this->from_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeI64($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('priority');
		$xfer += $output->writeString($this->priority);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('data_source');
		$xfer += $output->writeString($this->data_source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeString($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail_id !== null) {
			
			$xfer += $output->writeFieldBegin('detail_id');
			$xfer += $output->writeI32($this->detail_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_type !== null) {
			
			$xfer += $output->writeFieldBegin('sale_type');
			$xfer += $output->writeString($this->sale_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->no_po !== null) {
			
			$xfer += $output->writeFieldBegin('no_po');
			$xfer += $output->writeString($this->no_po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_type !== null) {
			
			$xfer += $output->writeFieldBegin('po_type');
			$xfer += $output->writeString($this->po_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocated_num !== null) {
			
			$xfer += $output->writeFieldBegin('allocated_num');
			$xfer += $output->writeI32($this->allocated_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>