<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class WayBill {
	
	static $_TSPEC;
	public $orderSn = null;
	public $expressNo = null;
	public $deliveryTime = null;
	public $skuItems = null;
	public $subOrderSn = null;
	public $orderRemark = null;
	public $isConfirmed = null;
	public $warehouseId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'expressNo'
			),
			3 => array(
			'var' => 'deliveryTime'
			),
			4 => array(
			'var' => 'skuItems'
			),
			5 => array(
			'var' => 'subOrderSn'
			),
			6 => array(
			'var' => 'orderRemark'
			),
			7 => array(
			'var' => 'isConfirmed'
			),
			8 => array(
			'var' => 'warehouseId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['expressNo'])){
				
				$this->expressNo = $vals['expressNo'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['skuItems'])){
				
				$this->skuItems = $vals['skuItems'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['orderRemark'])){
				
				$this->orderRemark = $vals['orderRemark'];
			}
			
			
			if (isset($vals['isConfirmed'])){
				
				$this->isConfirmed = $vals['isConfirmed'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WayBill';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("expressNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressNo);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryTime); 
				
			}
			
			
			
			
			if ("skuItems" == $schemeField){
				
				$needSkip = false;
				
				$this->skuItems = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\vcloud\order\SkuItem();
						$elem0->read($input);
						
						$this->skuItems[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("subOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSn);
				
			}
			
			
			
			
			if ("orderRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderRemark);
				
			}
			
			
			
			
			if ("isConfirmed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isConfirmed); 
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressNo !== null) {
			
			$xfer += $output->writeFieldBegin('expressNo');
			$xfer += $output->writeString($this->expressNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeI64($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuItems !== null) {
			
			$xfer += $output->writeFieldBegin('skuItems');
			
			if (!is_array($this->skuItems)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuItems as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderRemark !== null) {
			
			$xfer += $output->writeFieldBegin('orderRemark');
			$xfer += $output->writeString($this->orderRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isConfirmed !== null) {
			
			$xfer += $output->writeFieldBegin('isConfirmed');
			$xfer += $output->writeI32($this->isConfirmed);
			
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