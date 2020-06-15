<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class ChannelInventoryHold {
	
	static $_TSPEC;
	public $transId = null;
	public $channelId = null;
	public $skuId = null;
	public $quantity = null;
	public $address = null;
	public $vipCooperationNo = null;
	public $vipWarehouseCode = null;
	public $partnerId = null;
	public $vipCooperationType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'address'
			),
			6 => array(
			'var' => 'vipCooperationNo'
			),
			7 => array(
			'var' => 'vipWarehouseCode'
			),
			8 => array(
			'var' => 'partnerId'
			),
			9 => array(
			'var' => 'vipCooperationType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
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
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['vipCooperationNo'])){
				
				$this->vipCooperationNo = $vals['vipCooperationNo'];
			}
			
			
			if (isset($vals['vipWarehouseCode'])){
				
				$this->vipWarehouseCode = $vals['vipWarehouseCode'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['vipCooperationType'])){
				
				$this->vipCooperationType = $vals['vipCooperationType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelInventoryHold';
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
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				
				$this->address = new \com\vip\vop\vcloud\warehouse\api\Address();
				$this->address->read($input);
				
			}
			
			
			
			
			if ("vipCooperationNo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipCooperationNo); 
				
			}
			
			
			
			
			if ("vipWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipWarehouseCode);
				
			}
			
			
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("vipCooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipCooperationType); 
				
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
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			
			if (!is_object($this->address)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->address->write($output);
			
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
		
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('vipCooperationType');
			$xfer += $output->writeI32($this->vipCooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>