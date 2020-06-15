<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class RdcDeliverDetail {
	
	static $_TSPEC;
	public $id = null;
	public $source_id = null;
	public $brand_id = null;
	public $order_sn = null;
	public $barcode = null;
	public $product_name = null;
	public $po_no = null;
	public $warehouse_type = null;
	public $grade = null;
	public $status = null;
	public $out_time = null;
	public $num = null;
	public $schedule_id = null;
	public $vendor_code = null;
	public $from_warehouse = null;
	public $to_warehouse = null;
	public $shipment_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'source_id'
			),
			3 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'order_sn'
			),
			5 => array(
			'var' => 'barcode'
			),
			6 => array(
			'var' => 'product_name'
			),
			7 => array(
			'var' => 'po_no'
			),
			8 => array(
			'var' => 'warehouse_type'
			),
			9 => array(
			'var' => 'grade'
			),
			10 => array(
			'var' => 'status'
			),
			11 => array(
			'var' => 'out_time'
			),
			12 => array(
			'var' => 'num'
			),
			13 => array(
			'var' => 'schedule_id'
			),
			14 => array(
			'var' => 'vendor_code'
			),
			15 => array(
			'var' => 'from_warehouse'
			),
			16 => array(
			'var' => 'to_warehouse'
			),
			17 => array(
			'var' => 'shipment_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['source_id'])){
				
				$this->source_id = $vals['source_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['warehouse_type'])){
				
				$this->warehouse_type = $vals['warehouse_type'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['from_warehouse'])){
				
				$this->from_warehouse = $vals['from_warehouse'];
			}
			
			
			if (isset($vals['to_warehouse'])){
				
				$this->to_warehouse = $vals['to_warehouse'];
			}
			
			
			if (isset($vals['shipment_no'])){
				
				$this->shipment_no = $vals['shipment_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RdcDeliverDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("source_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source_id);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("warehouse_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_type);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("from_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_warehouse);
				
			}
			
			
			
			
			if ("to_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->to_warehouse);
				
			}
			
			
			
			
			if ("shipment_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipment_no);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('source_id');
		$xfer += $output->writeString($this->source_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeString($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_name');
		$xfer += $output->writeString($this->product_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_type');
		$xfer += $output->writeString($this->warehouse_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('grade');
		$xfer += $output->writeString($this->grade);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('out_time');
		$xfer += $output->writeString($this->out_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('num');
		$xfer += $output->writeI32($this->num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('schedule_id');
		$xfer += $output->writeString($this->schedule_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('from_warehouse');
		$xfer += $output->writeString($this->from_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('to_warehouse');
		$xfer += $output->writeString($this->to_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shipment_no');
		$xfer += $output->writeString($this->shipment_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>