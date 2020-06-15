<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class ChannelSkuInventory {
	
	static $_TSPEC;
	public $channelId = null;
	public $warehouseId = null;
	public $skuId = null;
	public $holdQuantity = null;
	public $quantity = null;
	public $totalQuantity = null;
	public $leavings = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'warehouseId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'holdQuantity'
			),
			5 => array(
			'var' => 'quantity'
			),
			6 => array(
			'var' => 'totalQuantity'
			),
			7 => array(
			'var' => 'leavings'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelSkuInventory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
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
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>