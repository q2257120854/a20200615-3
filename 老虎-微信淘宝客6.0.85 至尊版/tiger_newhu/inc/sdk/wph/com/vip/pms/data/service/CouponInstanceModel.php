<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponInstanceModel {
	
	static $_TSPEC;
	public $id = null;
	public $couponNo = null;
	public $couponSn = null;
	public $userId = null;
	public $groupType = null;
	public $activateTime = null;
	public $useTime = null;
	public $beginTime = null;
	public $endTime = null;
	public $bindOrderSn = null;
	public $useLimit = null;
	public $favAmount = null;
	public $platform = null;
	public $status = null;
	public $isDeleted = null;
	public $createTime = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'couponNo'
			),
			3 => array(
			'var' => 'couponSn'
			),
			4 => array(
			'var' => 'userId'
			),
			5 => array(
			'var' => 'groupType'
			),
			6 => array(
			'var' => 'activateTime'
			),
			7 => array(
			'var' => 'useTime'
			),
			8 => array(
			'var' => 'beginTime'
			),
			9 => array(
			'var' => 'endTime'
			),
			10 => array(
			'var' => 'bindOrderSn'
			),
			11 => array(
			'var' => 'useLimit'
			),
			12 => array(
			'var' => 'favAmount'
			),
			13 => array(
			'var' => 'platform'
			),
			14 => array(
			'var' => 'status'
			),
			15 => array(
			'var' => 'isDeleted'
			),
			16 => array(
			'var' => 'createTime'
			),
			17 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['groupType'])){
				
				$this->groupType = $vals['groupType'];
			}
			
			
			if (isset($vals['activateTime'])){
				
				$this->activateTime = $vals['activateTime'];
			}
			
			
			if (isset($vals['useTime'])){
				
				$this->useTime = $vals['useTime'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['bindOrderSn'])){
				
				$this->bindOrderSn = $vals['bindOrderSn'];
			}
			
			
			if (isset($vals['useLimit'])){
				
				$this->useLimit = $vals['useLimit'];
			}
			
			
			if (isset($vals['favAmount'])){
				
				$this->favAmount = $vals['favAmount'];
			}
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponInstanceModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("groupType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->groupType); 
				
			}
			
			
			
			
			if ("activateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activateTime); 
				
			}
			
			
			
			
			if ("useTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useTime); 
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("bindOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bindOrderSn);
				
			}
			
			
			
			
			if ("useLimit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->useLimit);
				
			}
			
			
			
			
			if ("favAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favAmount);
				
			}
			
			
			
			
			if ("platform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platform);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
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
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponNo');
		$xfer += $output->writeString($this->couponNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponSn');
		$xfer += $output->writeString($this->couponSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('groupType');
		$xfer += $output->writeByte($this->groupType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activateTime');
		$xfer += $output->writeI64($this->activateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('useTime');
		$xfer += $output->writeI64($this->useTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bindOrderSn');
		$xfer += $output->writeString($this->bindOrderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('useLimit');
		$xfer += $output->writeDouble($this->useLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('favAmount');
		$xfer += $output->writeDouble($this->favAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('platform');
		$xfer += $output->writeString($this->platform);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeByte($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isDeleted');
		$xfer += $output->writeByte($this->isDeleted);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeI64($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateTime');
		$xfer += $output->writeI64($this->updateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>