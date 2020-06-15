<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;

class WarehouseInventoryForceHold {
	
	static $_TSPEC;
	public $transId = null;
	public $partnerId = null;
	public $channelId = null;
	public $warehouseId = null;
	public $skuQuantityMap = null;
	public $vipCooperationNo = null;
	public $vipWarehouseCode = null;
	public $vipCooperationType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'partnerId'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'warehouseId'
			),
			5 => array(
			'var' => 'skuQuantityMap'
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
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuQuantityMap'])){
				
				$this->skuQuantityMap = $vals['skuQuantityMap'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WarehouseInventoryForceHold';
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
			
			
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("warehouseId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->warehouseId); 
				
			}
			
			
			
			
			if ("skuQuantityMap" == $schemeField){
				
				$needSkip = false;
				
				$this->skuQuantityMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = 0;
						$input->readI64($key0); 
						
						$val0 = 0;
						$input->readI32($val0); 
						
						$this->skuQuantityMap[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		$xfer += $output->writeFieldBegin('skuQuantityMap');
		
		if (!is_array($this->skuQuantityMap)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->skuQuantityMap as $kiter0 => $viter0){
			
			$xfer += $output->writeI64($kiter0);
			
			$xfer += $output->writeI32($viter0);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>