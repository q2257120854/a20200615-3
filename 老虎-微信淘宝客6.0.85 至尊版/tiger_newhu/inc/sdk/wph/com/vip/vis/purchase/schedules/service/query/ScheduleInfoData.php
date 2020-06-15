<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class ScheduleInfoData {
	
	static $_TSPEC;
	public $brandId = null;
	public $sellingMode = null;
	public $sellingAction = null;
	public $b2cModeId = null;
	public $sellTimeFrom = null;
	public $sellTimeTo = null;
	public $specialOperationsFlag = null;
	public $exclusiveOrShare = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $sellArea = null;
	public $distributionSites = null;
	public $createTime = null;
	public $updateTime = null;
	public $createBy = null;
	public $normalityFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandId'
			),
			2 => array(
			'var' => 'sellingMode'
			),
			3 => array(
			'var' => 'sellingAction'
			),
			4 => array(
			'var' => 'b2cModeId'
			),
			5 => array(
			'var' => 'sellTimeFrom'
			),
			6 => array(
			'var' => 'sellTimeTo'
			),
			7 => array(
			'var' => 'specialOperationsFlag'
			),
			8 => array(
			'var' => 'exclusiveOrShare'
			),
			9 => array(
			'var' => 'vendorCode'
			),
			10 => array(
			'var' => 'vendorName'
			),
			11 => array(
			'var' => 'sellArea'
			),
			12 => array(
			'var' => 'distributionSites'
			),
			13 => array(
			'var' => 'createTime'
			),
			14 => array(
			'var' => 'updateTime'
			),
			15 => array(
			'var' => 'createBy'
			),
			16 => array(
			'var' => 'normalityFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['sellingAction'])){
				
				$this->sellingAction = $vals['sellingAction'];
			}
			
			
			if (isset($vals['b2cModeId'])){
				
				$this->b2cModeId = $vals['b2cModeId'];
			}
			
			
			if (isset($vals['sellTimeFrom'])){
				
				$this->sellTimeFrom = $vals['sellTimeFrom'];
			}
			
			
			if (isset($vals['sellTimeTo'])){
				
				$this->sellTimeTo = $vals['sellTimeTo'];
			}
			
			
			if (isset($vals['specialOperationsFlag'])){
				
				$this->specialOperationsFlag = $vals['specialOperationsFlag'];
			}
			
			
			if (isset($vals['exclusiveOrShare'])){
				
				$this->exclusiveOrShare = $vals['exclusiveOrShare'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['sellArea'])){
				
				$this->sellArea = $vals['sellArea'];
			}
			
			
			if (isset($vals['distributionSites'])){
				
				$this->distributionSites = $vals['distributionSites'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['normalityFlag'])){
				
				$this->normalityFlag = $vals['normalityFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ScheduleInfoData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellingMode); 
				
			}
			
			
			
			
			if ("sellingAction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingAction);
				
			}
			
			
			
			
			if ("b2cModeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2cModeId); 
				
			}
			
			
			
			
			if ("sellTimeFrom" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sellTimeFrom);
				
			}
			
			
			
			
			if ("sellTimeTo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sellTimeTo);
				
			}
			
			
			
			
			if ("specialOperationsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specialOperationsFlag); 
				
			}
			
			
			
			
			if ("exclusiveOrShare" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->exclusiveOrShare); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("sellArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellArea);
				
			}
			
			
			
			
			if ("distributionSites" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->distributionSites);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("normalityFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->normalityFlag); 
				
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
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeByte($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingAction !== null) {
			
			$xfer += $output->writeFieldBegin('sellingAction');
			$xfer += $output->writeString($this->sellingAction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cModeId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cModeId');
			$xfer += $output->writeI32($this->b2cModeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFrom !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFrom');
			$xfer += $output->writeI64($this->sellTimeFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeTo !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeTo');
			$xfer += $output->writeI64($this->sellTimeTo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOperationsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialOperationsFlag');
			$xfer += $output->writeByte($this->specialOperationsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exclusiveOrShare !== null) {
			
			$xfer += $output->writeFieldBegin('exclusiveOrShare');
			$xfer += $output->writeByte($this->exclusiveOrShare);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeI32($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellArea !== null) {
			
			$xfer += $output->writeFieldBegin('sellArea');
			$xfer += $output->writeString($this->sellArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributionSites !== null) {
			
			$xfer += $output->writeFieldBegin('distributionSites');
			$xfer += $output->writeString($this->distributionSites);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->normalityFlag !== null) {
			
			$xfer += $output->writeFieldBegin('normalityFlag');
			$xfer += $output->writeByte($this->normalityFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>