<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponGroupCoreModel {
	
	static $_TSPEC;
	public $id = null;
	public $name = null;
	public $msgGet = null;
	public $channel = null;
	public $couponType = null;
	public $couponCode = null;
	public $deliveryType = null;
	public $sendNum = null;
	public $userBindLimit = null;
	public $salt = null;
	public $isNewCoupon = null;
	public $beginTime = null;
	public $endTime = null;
	public $couponCommonModelList = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'msgGet'
			),
			4 => array(
			'var' => 'channel'
			),
			5 => array(
			'var' => 'couponType'
			),
			6 => array(
			'var' => 'couponCode'
			),
			7 => array(
			'var' => 'deliveryType'
			),
			8 => array(
			'var' => 'sendNum'
			),
			9 => array(
			'var' => 'userBindLimit'
			),
			10 => array(
			'var' => 'salt'
			),
			11 => array(
			'var' => 'isNewCoupon'
			),
			12 => array(
			'var' => 'beginTime'
			),
			13 => array(
			'var' => 'endTime'
			),
			14 => array(
			'var' => 'couponCommonModelList'
			),
			15 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['msgGet'])){
				
				$this->msgGet = $vals['msgGet'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['couponType'])){
				
				$this->couponType = $vals['couponType'];
			}
			
			
			if (isset($vals['couponCode'])){
				
				$this->couponCode = $vals['couponCode'];
			}
			
			
			if (isset($vals['deliveryType'])){
				
				$this->deliveryType = $vals['deliveryType'];
			}
			
			
			if (isset($vals['sendNum'])){
				
				$this->sendNum = $vals['sendNum'];
			}
			
			
			if (isset($vals['userBindLimit'])){
				
				$this->userBindLimit = $vals['userBindLimit'];
			}
			
			
			if (isset($vals['salt'])){
				
				$this->salt = $vals['salt'];
			}
			
			
			if (isset($vals['isNewCoupon'])){
				
				$this->isNewCoupon = $vals['isNewCoupon'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['couponCommonModelList'])){
				
				$this->couponCommonModelList = $vals['couponCommonModelList'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponGroupCoreModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("msgGet" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgGet);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("couponType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->couponType); 
				
			}
			
			
			
			
			if ("couponCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponCode);
				
			}
			
			
			
			
			if ("deliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryType); 
				
			}
			
			
			
			
			if ("sendNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sendNum); 
				
			}
			
			
			
			
			if ("userBindLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userBindLimit); 
				
			}
			
			
			
			
			if ("salt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salt);
				
			}
			
			
			
			
			if ("isNewCoupon" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNewCoupon);
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("couponCommonModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->couponCommonModelList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\CouponCommonModel();
						$elem1->read($input);
						
						$this->couponCommonModelList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeString($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('msgGet');
		$xfer += $output->writeString($this->msgGet);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channel');
		$xfer += $output->writeString($this->channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponType');
		$xfer += $output->writeI32($this->couponType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->couponCode !== null) {
			
			$xfer += $output->writeFieldBegin('couponCode');
			$xfer += $output->writeString($this->couponCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('deliveryType');
		$xfer += $output->writeI32($this->deliveryType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sendNum');
		$xfer += $output->writeI32($this->sendNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userBindLimit');
		$xfer += $output->writeI32($this->userBindLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('salt');
		$xfer += $output->writeString($this->salt);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isNewCoupon');
		$xfer += $output->writeBool($this->isNewCoupon);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponCommonModelList');
		
		if (!is_array($this->couponCommonModelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->couponCommonModelList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>