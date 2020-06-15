<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class ChannelInventoryHoldResult {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $skuId = null;
	public $leavings = null;
	public $holdQuantity = null;
	public $isOk = null;
	public $message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'skuId'
			),
			3 => array(
			'var' => 'leavings'
			),
			4 => array(
			'var' => 'holdQuantity'
			),
			5 => array(
			'var' => 'isOk'
			),
			6 => array(
			'var' => 'message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['leavings'])){
				
				$this->leavings = $vals['leavings'];
			}
			
			
			if (isset($vals['holdQuantity'])){
				
				$this->holdQuantity = $vals['holdQuantity'];
			}
			
			
			if (isset($vals['isOk'])){
				
				$this->isOk = $vals['isOk'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelInventoryHoldResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouseId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->warehouseId); 
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("leavings" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leavings); 
				
			}
			
			
			
			
			if ("holdQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->holdQuantity); 
				
			}
			
			
			
			
			if ("isOk" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isOk);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
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
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leavings !== null) {
			
			$xfer += $output->writeFieldBegin('leavings');
			$xfer += $output->writeI32($this->leavings);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('holdQuantity');
			$xfer += $output->writeI32($this->holdQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOk !== null) {
			
			$xfer += $output->writeFieldBegin('isOk');
			$xfer += $output->writeBool($this->isOk);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>