<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\normal;

class InventoryUpdateResult {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $batch_no = null;
	public $warehouse_supplier = null;
	public $barcode = null;
	public $status = null;
	public $quantity = null;
	public $real_quantity = null;
	public $modify_time = null;
	public $stock_mode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'batch_no'
			),
			3 => array(
			'var' => 'warehouse_supplier'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'quantity'
			),
			7 => array(
			'var' => 'real_quantity'
			),
			8 => array(
			'var' => 'modify_time'
			),
			9 => array(
			'var' => 'stock_mode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['warehouse_supplier'])){
				
				$this->warehouse_supplier = $vals['warehouse_supplier'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['real_quantity'])){
				
				$this->real_quantity = $vals['real_quantity'];
			}
			
			
			if (isset($vals['modify_time'])){
				
				$this->modify_time = $vals['modify_time'];
			}
			
			
			if (isset($vals['stock_mode'])){
				
				$this->stock_mode = $vals['stock_mode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryUpdateResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_no);
				
			}
			
			
			
			
			if ("warehouse_supplier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_supplier);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("real_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->real_quantity); 
				
			}
			
			
			
			
			if ("modify_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->modify_time); 
				
			}
			
			
			
			
			if ("stock_mode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock_mode); 
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batch_no !== null) {
			
			$xfer += $output->writeFieldBegin('batch_no');
			$xfer += $output->writeString($this->batch_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_supplier !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_supplier');
			$xfer += $output->writeString($this->warehouse_supplier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->real_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('real_quantity');
			$xfer += $output->writeI32($this->real_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modify_time !== null) {
			
			$xfer += $output->writeFieldBegin('modify_time');
			$xfer += $output->writeI64($this->modify_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_mode !== null) {
			
			$xfer += $output->writeFieldBegin('stock_mode');
			$xfer += $output->writeI32($this->stock_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>