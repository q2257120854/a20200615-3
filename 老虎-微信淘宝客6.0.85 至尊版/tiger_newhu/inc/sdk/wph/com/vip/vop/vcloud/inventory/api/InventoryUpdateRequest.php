<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class InventoryUpdateRequest {
	
	static $_TSPEC;
	public $trans_id = null;
	public $partner_id = null;
	public $warehouse_code = null;
	public $barcode = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trans_id'
			),
			2 => array(
			'var' => 'partner_id'
			),
			3 => array(
			'var' => 'warehouse_code'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['partner_id'])){
				
				$this->partner_id = $vals['partner_id'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryUpdateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trans_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trans_id);
				
			}
			
			
			
			
			if ("partner_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partner_id); 
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
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
		
		if($this->trans_id !== null) {
			
			$xfer += $output->writeFieldBegin('trans_id');
			$xfer += $output->writeString($this->trans_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partner_id !== null) {
			
			$xfer += $output->writeFieldBegin('partner_id');
			$xfer += $output->writeI64($this->partner_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>