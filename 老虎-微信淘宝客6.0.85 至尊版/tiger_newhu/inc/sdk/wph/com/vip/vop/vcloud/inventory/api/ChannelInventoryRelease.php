<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class ChannelInventoryRelease {
	
	static $_TSPEC;
	public $transId = null;
	public $holdTransId = null;
	public $channelId = null;
	public $skuId = null;
	public $quantity = null;
	public $vipCooperationNo = null;
	public $vipWarehouseCode = null;
	public $vipCooperationType = null;
	public $warehouseId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'holdTransId'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'skuId'
			),
			5 => array(
			'var' => 'quantity'
			),
			6 => array(
			'var' => 'vipCooperationNo'
			),
			7 => array(
			'var' => 'vipWarehouseCode'
			),
			8 => array(
			'var' => 'vipCooperationType'
			),
			9 => array(
			'var' => 'warehouseId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['holdTransId'])){
				
				$this->holdTransId = $vals['holdTransId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['vipCooperationNo'])){
				
				$this->vipCooperationNo = $vals['vipCooperationNo'];
			}
			
			
			if (isset($vals['vipWarehouseCode'])){
				
				$this->vipWarehouseCode = $vals['vipWarehouseCode'];
			}
			
			
			if (isset($vals['vipCooperationType'])){
				
				$this->vipCooperationType = $vals['vipCooperationType'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelInventoryRelease';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transId);
				
			}
			
			
			
			
			if ("holdTransId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdTransId);
				
			}
			
			
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("vipCooperationNo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipCooperationNo); 
				
			}
			
			
			
			
			if ("vipWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipWarehouseCode);
				
			}
			
			
			
			
			if ("vipCooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipCooperationType); 
				
			}
			
			
			
			
			if ("warehouseId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->warehouseId); 
				
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
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdTransId !== null) {
			
			$xfer += $output->writeFieldBegin('holdTransId');
			$xfer += $output->writeString($this->holdTransId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCooperationNo !== null) {
			
			$xfer += $output->writeFieldBegin('vipCooperationNo');
			$xfer += $output->writeI32($this->vipCooperationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('vipWarehouseCode');
			$xfer += $output->writeString($this->vipWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('vipCooperationType');
			$xfer += $output->writeI32($this->vipCooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>