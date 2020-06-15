<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\delivery;

class ReceiptDetail {
	
	static $_TSPEC;
	public $id = null;
	public $poNo = null;
	public $warehouse = null;
	public $sku = null;
	public $purchaseCaseNo = null;
	public $stockQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'poNo'
			),
			3 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'sku'
			),
			5 => array(
			'var' => 'purchaseCaseNo'
			),
			6 => array(
			'var' => 'stockQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['purchaseCaseNo'])){
				
				$this->purchaseCaseNo = $vals['purchaseCaseNo'];
			}
			
			
			if (isset($vals['stockQty'])){
				
				$this->stockQty = $vals['stockQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiptDetail';
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
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("purchaseCaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCaseNo);
				
			}
			
			
			
			
			if ("stockQty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->stockQty);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCaseNo');
			$xfer += $output->writeString($this->purchaseCaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stockQty !== null) {
			
			$xfer += $output->writeFieldBegin('stockQty');
			$xfer += $output->writeDouble($this->stockQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>