<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponCoreModel {
	
	static $_TSPEC;
	public $couponCommonModel = null;
	public $msgGet = null;
	public $channel = null;
	public $couponType = null;
	public $couponCode = null;
	public $deliveryType = null;
	public $deliveryNum = null;
	public $userBindLimit = null;
	public $useTimeType = null;
	public $relativeDays = null;
	public $salt = null;
	public $isNewCoupon = null;
	public $beginTime = null;
	public $endTime = null;
	public $status = null;
	public $userTagList = null;
	public $memberPropList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponCommonModel'
			),
			2 => array(
			'var' => 'msgGet'
			),
			3 => array(
			'var' => 'channel'
			),
			4 => array(
			'var' => 'couponType'
			),
			5 => array(
			'var' => 'couponCode'
			),
			6 => array(
			'var' => 'deliveryType'
			),
			7 => array(
			'var' => 'deliveryNum'
			),
			8 => array(
			'var' => 'userBindLimit'
			),
			9 => array(
			'var' => 'useTimeType'
			),
			10 => array(
			'var' => 'relativeDays'
			),
			11 => array(
			'var' => 'salt'
			),
			12 => array(
			'var' => 'isNewCoupon'
			),
			13 => array(
			'var' => 'beginTime'
			),
			14 => array(
			'var' => 'endTime'
			),
			15 => array(
			'var' => 'status'
			),
			16 => array(
			'var' => 'userTagList'
			),
			17 => array(
			'var' => 'memberPropList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponCommonModel'])){
				
				$this->couponCommonModel = $vals['couponCommonModel'];
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
			
			
			if (isset($vals['deliveryNum'])){
				
				$this->deliveryNum = $vals['deliveryNum'];
			}
			
			
			if (isset($vals['userBindLimit'])){
				
				$this->userBindLimit = $vals['userBindLimit'];
			}
			
			
			if (isset($vals['useTimeType'])){
				
				$this->useTimeType = $vals['useTimeType'];
			}
			
			
			if (isset($vals['relativeDays'])){
				
				$this->relativeDays = $vals['relativeDays'];
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
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['userTagList'])){
				
				$this->userTagList = $vals['userTagList'];
			}
			
			
			if (isset($vals['memberPropList'])){
				
				$this->memberPropList = $vals['memberPropList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponCoreModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponCommonModel" == $schemeField){
				
				$needSkip = false;
				
				$this->couponCommonModel = new \com\vip\pms\data\service\CouponCommonModel();
				$this->couponCommonModel->read($input);
				
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
			
			
			
			
			if ("deliveryNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryNum); 
				
			}
			
			
			
			
			if ("userBindLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userBindLimit); 
				
			}
			
			
			
			
			if ("useTimeType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->useTimeType); 
				
			}
			
			
			
			
			if ("relativeDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->relativeDays); 
				
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
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("userTagList" == $schemeField){
				
				$needSkip = false;
				
				$this->userTagList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsActAudienceConfigModel();
						$elem1->read($input);
						
						$this->userTagList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("memberPropList" == $schemeField){
				
				$needSkip = false;
				
				$this->memberPropList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\pms\data\service\PmsActAudienceConfigModel();
						$elem2->read($input);
						
						$this->memberPropList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('couponCommonModel');
		
		if (!is_object($this->couponCommonModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->couponCommonModel->write($output);
		
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
		
		$xfer += $output->writeFieldBegin('deliveryNum');
		$xfer += $output->writeI32($this->deliveryNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userBindLimit');
		$xfer += $output->writeI32($this->userBindLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('useTimeType');
		$xfer += $output->writeI32($this->useTimeType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('relativeDays');
		$xfer += $output->writeI32($this->relativeDays);
		
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
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userTagList !== null) {
			
			$xfer += $output->writeFieldBegin('userTagList');
			
			if (!is_array($this->userTagList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->userTagList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->memberPropList !== null) {
			
			$xfer += $output->writeFieldBegin('memberPropList');
			
			if (!is_array($this->memberPropList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->memberPropList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>