<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\order\osp\service;

class HtOrderStatusCancelModel {
	
	static $_TSPEC;
	public $id = null;
	public $orderSysId = null;
	public $soCreateTime = null;
	public $soUpdateTime = null;
	public $orderSn = null;
	public $orderStatus = null;
	public $warehouse = null;
	public $saleType = null;
	public $createTime = null;
	public $createUser = null;
	public $updateTime = null;
	public $updateUser = null;
	public $isDeleted = null;
	public $takeStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'orderSysId'
			),
			3 => array(
			'var' => 'soCreateTime'
			),
			4 => array(
			'var' => 'soUpdateTime'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'orderStatus'
			),
			7 => array(
			'var' => 'warehouse'
			),
			8 => array(
			'var' => 'saleType'
			),
			9 => array(
			'var' => 'createTime'
			),
			10 => array(
			'var' => 'createUser'
			),
			11 => array(
			'var' => 'updateTime'
			),
			12 => array(
			'var' => 'updateUser'
			),
			13 => array(
			'var' => 'isDeleted'
			),
			14 => array(
			'var' => 'takeStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['orderSysId'])){
				
				$this->orderSysId = $vals['orderSysId'];
			}
			
			
			if (isset($vals['soCreateTime'])){
				
				$this->soCreateTime = $vals['soCreateTime'];
			}
			
			
			if (isset($vals['soUpdateTime'])){
				
				$this->soUpdateTime = $vals['soUpdateTime'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['createUser'])){
				
				$this->createUser = $vals['createUser'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['updateUser'])){
				
				$this->updateUser = $vals['updateUser'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['takeStatus'])){
				
				$this->takeStatus = $vals['takeStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtOrderStatusCancelModel';
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
			
			
			
			
			if ("orderSysId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSysId);
				
			}
			
			
			
			
			if ("soCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->soCreateTime); 
				
			}
			
			
			
			
			if ("soUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->soUpdateTime); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatus);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("createUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUser);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("updateUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateUser);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
			}
			
			
			
			
			if ("takeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->takeStatus); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSysId !== null) {
			
			$xfer += $output->writeFieldBegin('orderSysId');
			$xfer += $output->writeString($this->orderSysId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->soCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('soCreateTime');
			$xfer += $output->writeI64($this->soCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->soUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('soUpdateTime');
			$xfer += $output->writeI64($this->soUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeString($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeString($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUser !== null) {
			
			$xfer += $output->writeFieldBegin('createUser');
			$xfer += $output->writeString($this->createUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateUser !== null) {
			
			$xfer += $output->writeFieldBegin('updateUser');
			$xfer += $output->writeString($this->updateUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeByte($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->takeStatus !== null) {
			
			$xfer += $output->writeFieldBegin('takeStatus');
			$xfer += $output->writeByte($this->takeStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>