<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class WarehouseSkuInventory {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $skuId = null;
	public $holdQuantity = null;
	public $quantity = null;
	public $totalQuantity = null;
	public $leavings = null;
	public $safeQuantity = null;
	public $disabled = null;
	
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
			'var' => 'holdQuantity'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'totalQuantity'
			),
			6 => array(
			'var' => 'leavings'
			),
			7 => array(
			'var' => 'safeQuantity'
			),
			8 => array(
			'var' => 'disabled'
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
			
			
			if (isset($vals['holdQuantity'])){
				
				$this->holdQuantity = $vals['holdQuantity'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['totalQuantity'])){
				
				$this->totalQuantity = $vals['totalQuantity'];
			}
			
			
			if (isset($vals['leavings'])){
				
				$this->leavings = $vals['leavings'];
			}
			
			
			if (isset($vals['safeQuantity'])){
				
				$this->safeQuantity = $vals['safeQuantity'];
			}
			
			
			if (isset($vals['disabled'])){
				
				$this->disabled = $vals['disabled'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WarehouseSkuInventory';
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
			
			
			
			
			if ("holdQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->holdQuantity); 
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("totalQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalQuantity); 
				
			}
			
			
			
			
			if ("leavings" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leavings); 
				
			}
			
			
			
			
			if ("safeQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->safeQuantity); 
				
			}
			
			
			
			
			if ("disabled" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->disabled); 
				
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
		
		
		if($this->holdQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('holdQuantity');
			$xfer += $output->writeI32($this->holdQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('totalQuantity');
			$xfer += $output->writeI32($this->totalQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leavings !== null) {
			
			$xfer += $output->writeFieldBegin('leavings');
			$xfer += $output->writeI32($this->leavings);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('safeQuantity');
			$xfer += $output->writeI32($this->safeQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->disabled !== null) {
			
			$xfer += $output->writeFieldBegin('disabled');
			$xfer += $output->writeI32($this->disabled);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>