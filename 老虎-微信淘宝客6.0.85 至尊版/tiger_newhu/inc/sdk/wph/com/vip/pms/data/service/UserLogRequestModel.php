<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class UserLogRequestModel {
	
	static $_TSPEC;
	public $userId = null;
	public $refId = null;
	public $refIdType = null;
	public $refNo = null;
	public $orderNo = null;
	public $action = null;
	public $orderAmount = null;
	public $orderFav = null;
	public $orderHash = null;
	public $orderGoodsList = null;
	public $parentHashCode = null;
	public $activityType = null;
	public $actType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'refId'
			),
			3 => array(
			'var' => 'refIdType'
			),
			4 => array(
			'var' => 'refNo'
			),
			5 => array(
			'var' => 'orderNo'
			),
			6 => array(
			'var' => 'action'
			),
			7 => array(
			'var' => 'orderAmount'
			),
			8 => array(
			'var' => 'orderFav'
			),
			9 => array(
			'var' => 'orderHash'
			),
			10 => array(
			'var' => 'orderGoodsList'
			),
			11 => array(
			'var' => 'parentHashCode'
			),
			12 => array(
			'var' => 'activityType'
			),
			13 => array(
			'var' => 'actType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['refId'])){
				
				$this->refId = $vals['refId'];
			}
			
			
			if (isset($vals['refIdType'])){
				
				$this->refIdType = $vals['refIdType'];
			}
			
			
			if (isset($vals['refNo'])){
				
				$this->refNo = $vals['refNo'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['action'])){
				
				$this->action = $vals['action'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['orderFav'])){
				
				$this->orderFav = $vals['orderFav'];
			}
			
			
			if (isset($vals['orderHash'])){
				
				$this->orderHash = $vals['orderHash'];
			}
			
			
			if (isset($vals['orderGoodsList'])){
				
				$this->orderGoodsList = $vals['orderGoodsList'];
			}
			
			
			if (isset($vals['parentHashCode'])){
				
				$this->parentHashCode = $vals['parentHashCode'];
			}
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['actType'])){
				
				$this->actType = $vals['actType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserLogRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("refId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refId);
				
			}
			
			
			
			
			if ("refIdType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refIdType); 
				
			}
			
			
			
			
			if ("refNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refNo);
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("action" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->action); 
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderAmount);
				
			}
			
			
			
			
			if ("orderFav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderFav);
				
			}
			
			
			
			
			if ("orderHash" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderHash);
				
			}
			
			
			
			
			if ("orderGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderGoodsList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\PromotionOrderGoodsModel();
						$elem0->read($input);
						
						$this->orderGoodsList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("parentHashCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentHashCode);
				
			}
			
			
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("actType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actType); 
				
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeString($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refId');
		$xfer += $output->writeString($this->refId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refIdType');
		$xfer += $output->writeByte($this->refIdType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refNo');
		$xfer += $output->writeString($this->refNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderNo');
			$xfer += $output->writeString($this->orderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('action');
		$xfer += $output->writeI32($this->action);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderAmount');
		$xfer += $output->writeDouble($this->orderAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderFav');
		$xfer += $output->writeDouble($this->orderFav);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderHash');
		$xfer += $output->writeString($this->orderHash);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderGoodsList !== null) {
			
			$xfer += $output->writeFieldBegin('orderGoodsList');
			
			if (!is_array($this->orderGoodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderGoodsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentHashCode !== null) {
			
			$xfer += $output->writeFieldBegin('parentHashCode');
			$xfer += $output->writeString($this->parentHashCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityType !== null) {
			
			$xfer += $output->writeFieldBegin('activityType');
			$xfer += $output->writeByte($this->activityType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actType !== null) {
			
			$xfer += $output->writeFieldBegin('actType');
			$xfer += $output->writeI32($this->actType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>