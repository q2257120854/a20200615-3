<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class InboundItemInfo {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $warehouse_code = null;
	public $po_no = null;
	public $item_code = null;
	public $item_name = null;
	public $brand_code = null;
	public $brand_name = null;
	public $inbound_status = null;
	public $created_date = null;
	public $inbound_date = null;
	public $poTotal_qty = null;
	public $check_qty = null;
	public $diff_qty = null;
	public $defect_qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_code'
			),
			2 => array(
			'var' => 'warehouse_code'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'item_code'
			),
			5 => array(
			'var' => 'item_name'
			),
			6 => array(
			'var' => 'brand_code'
			),
			7 => array(
			'var' => 'brand_name'
			),
			8 => array(
			'var' => 'inbound_status'
			),
			9 => array(
			'var' => 'created_date'
			),
			10 => array(
			'var' => 'inbound_date'
			),
			11 => array(
			'var' => 'poTotal_qty'
			),
			12 => array(
			'var' => 'check_qty'
			),
			13 => array(
			'var' => 'diff_qty'
			),
			14 => array(
			'var' => 'defect_qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['item_name'])){
				
				$this->item_name = $vals['item_name'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['inbound_status'])){
				
				$this->inbound_status = $vals['inbound_status'];
			}
			
			
			if (isset($vals['created_date'])){
				
				$this->created_date = $vals['created_date'];
			}
			
			
			if (isset($vals['inbound_date'])){
				
				$this->inbound_date = $vals['inbound_date'];
			}
			
			
			if (isset($vals['poTotal_qty'])){
				
				$this->poTotal_qty = $vals['poTotal_qty'];
			}
			
			
			if (isset($vals['check_qty'])){
				
				$this->check_qty = $vals['check_qty'];
			}
			
			
			if (isset($vals['diff_qty'])){
				
				$this->diff_qty = $vals['diff_qty'];
			}
			
			
			if (isset($vals['defect_qty'])){
				
				$this->defect_qty = $vals['defect_qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InboundItemInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("item_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_name);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("inbound_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inbound_status);
				
			}
			
			
			
			
			if ("created_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->created_date);
				
			}
			
			
			
			
			if ("inbound_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inbound_date);
				
			}
			
			
			
			
			if ("poTotal_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->poTotal_qty); 
				
			}
			
			
			
			
			if ("check_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->check_qty); 
				
			}
			
			
			
			
			if ("diff_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->diff_qty); 
				
			}
			
			
			
			
			if ("defect_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->defect_qty); 
				
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
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_name !== null) {
			
			$xfer += $output->writeFieldBegin('item_name');
			$xfer += $output->writeString($this->item_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_code !== null) {
			
			$xfer += $output->writeFieldBegin('brand_code');
			$xfer += $output->writeString($this->brand_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inbound_status !== null) {
			
			$xfer += $output->writeFieldBegin('inbound_status');
			$xfer += $output->writeString($this->inbound_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->created_date !== null) {
			
			$xfer += $output->writeFieldBegin('created_date');
			$xfer += $output->writeString($this->created_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inbound_date !== null) {
			
			$xfer += $output->writeFieldBegin('inbound_date');
			$xfer += $output->writeString($this->inbound_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poTotal_qty !== null) {
			
			$xfer += $output->writeFieldBegin('poTotal_qty');
			$xfer += $output->writeI32($this->poTotal_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->check_qty !== null) {
			
			$xfer += $output->writeFieldBegin('check_qty');
			$xfer += $output->writeI32($this->check_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diff_qty !== null) {
			
			$xfer += $output->writeFieldBegin('diff_qty');
			$xfer += $output->writeI32($this->diff_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defect_qty !== null) {
			
			$xfer += $output->writeFieldBegin('defect_qty');
			$xfer += $output->writeI32($this->defect_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>