<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class SubOrder {
	
	static $_TSPEC;
	public $orderId = null;
	public $subOrderId = null;
	public $partnerId = null;
	public $channelId = null;
	public $orderSn = null;
	public $subOrderSn = null;
	public $leavingUnboxQuantity = null;
	public $unboxQuantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderId'
			),
			2 => array(
			'var' => 'subOrderId'
			),
			3 => array(
			'var' => 'partnerId'
			),
			4 => array(
			'var' => 'channelId'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'subOrderSn'
			),
			7 => array(
			'var' => 'leavingUnboxQuantity'
			),
			8 => array(
			'var' => 'unboxQuantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['subOrderId'])){
				
				$this->subOrderId = $vals['subOrderId'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['leavingUnboxQuantity'])){
				
				$this->leavingUnboxQuantity = $vals['leavingUnboxQuantity'];
			}
			
			
			if (isset($vals['unboxQuantity'])){
				
				$this->unboxQuantity = $vals['unboxQuantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderId); 
				
			}
			
			
			
			
			if ("subOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->subOrderId); 
				
			}
			
			
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("subOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSn);
				
			}
			
			
			
			
			if ("leavingUnboxQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leavingUnboxQuantity); 
				
			}
			
			
			
			
			if ("unboxQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unboxQuantity); 
				
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
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeI64($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderId');
			$xfer += $output->writeI64($this->subOrderId);
			
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
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leavingUnboxQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('leavingUnboxQuantity');
			$xfer += $output->writeI32($this->leavingUnboxQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unboxQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('unboxQuantity');
			$xfer += $output->writeI32($this->unboxQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>