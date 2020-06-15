<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class UpdateSkuInventoryRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_no = null;
	public $warehouse = null;
	public $barcode = null;
	public $quantity = null;
	public $batch_no = null;
	public $circuit_break_ack_flag = null;
	public $sync_mode = null;
	public $area_warehouse_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_no'
			),
			3 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'quantity'
			),
			6 => array(
			'var' => 'batch_no'
			),
			7 => array(
			'var' => 'circuit_break_ack_flag'
			),
			8 => array(
			'var' => 'sync_mode'
			),
			9 => array(
			'var' => 'area_warehouse_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['circuit_break_ack_flag'])){
				
				$this->circuit_break_ack_flag = $vals['circuit_break_ack_flag'];
			}
			
			
			if (isset($vals['sync_mode'])){
				
				$this->sync_mode = $vals['sync_mode'];
			}
			
			
			if (isset($vals['area_warehouse_id'])){
				
				$this->area_warehouse_id = $vals['area_warehouse_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateSkuInventoryRequest';
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
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_no);
				
			}
			
			
			
			
			if ("circuit_break_ack_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->circuit_break_ack_flag); 
				
			}
			
			
			
			
			if ("sync_mode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sync_mode); 
				
			}
			
			
			
			
			if ("area_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_id);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeI32($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->circuit_break_ack_flag !== null) {
			
			$xfer += $output->writeFieldBegin('circuit_break_ack_flag');
			$xfer += $output->writeI32($this->circuit_break_ack_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sync_mode !== null) {
			
			$xfer += $output->writeFieldBegin('sync_mode');
			$xfer += $output->writeI32($this->sync_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_id');
			$xfer += $output->writeString($this->area_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>