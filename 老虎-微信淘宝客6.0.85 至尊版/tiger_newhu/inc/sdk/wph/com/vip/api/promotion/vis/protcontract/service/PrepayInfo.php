<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class PrepayInfo {
	
	static $_TSPEC;
	public $mainId = null;
	public $activityType = null;
	public $preferentialType = null;
	public $prepayType = null;
	public $prepayValue = null;
	public $prepayPreferential = null;
	public $discountContent = null;
	public $vendorBearInfo = null;
	public $actNo = null;
	public $actName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'activityType'
			),
			3 => array(
			'var' => 'preferentialType'
			),
			4 => array(
			'var' => 'prepayType'
			),
			5 => array(
			'var' => 'prepayValue'
			),
			6 => array(
			'var' => 'prepayPreferential'
			),
			7 => array(
			'var' => 'discountContent'
			),
			8 => array(
			'var' => 'vendorBearInfo'
			),
			9 => array(
			'var' => 'actNo'
			),
			10 => array(
			'var' => 'actName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['preferentialType'])){
				
				$this->preferentialType = $vals['preferentialType'];
			}
			
			
			if (isset($vals['prepayType'])){
				
				$this->prepayType = $vals['prepayType'];
			}
			
			
			if (isset($vals['prepayValue'])){
				
				$this->prepayValue = $vals['prepayValue'];
			}
			
			
			if (isset($vals['prepayPreferential'])){
				
				$this->prepayPreferential = $vals['prepayPreferential'];
			}
			
			
			if (isset($vals['discountContent'])){
				
				$this->discountContent = $vals['discountContent'];
			}
			
			
			if (isset($vals['vendorBearInfo'])){
				
				$this->vendorBearInfo = $vals['vendorBearInfo'];
			}
			
			
			if (isset($vals['actNo'])){
				
				$this->actNo = $vals['actNo'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrepayInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mainId); 
				
			}
			
			
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("preferentialType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->preferentialType); 
				
			}
			
			
			
			
			if ("prepayType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->prepayType); 
				
			}
			
			
			
			
			if ("prepayValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayValue);
				
			}
			
			
			
			
			if ("prepayPreferential" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayPreferential);
				
			}
			
			
			
			
			if ("discountContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountContent);
				
			}
			
			
			
			
			if ("vendorBearInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorBearInfo = new \com\vip\api\promotion\vis\protcontract\service\VendorBearInfo();
				$this->vendorBearInfo->read($input);
				
			}
			
			
			
			
			if ("actNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actNo);
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
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
		
		if($this->mainId !== null) {
			
			$xfer += $output->writeFieldBegin('mainId');
			$xfer += $output->writeI64($this->mainId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityType !== null) {
			
			$xfer += $output->writeFieldBegin('activityType');
			$xfer += $output->writeByte($this->activityType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preferentialType !== null) {
			
			$xfer += $output->writeFieldBegin('preferentialType');
			$xfer += $output->writeByte($this->preferentialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayType !== null) {
			
			$xfer += $output->writeFieldBegin('prepayType');
			$xfer += $output->writeByte($this->prepayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayValue !== null) {
			
			$xfer += $output->writeFieldBegin('prepayValue');
			$xfer += $output->writeString($this->prepayValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayPreferential !== null) {
			
			$xfer += $output->writeFieldBegin('prepayPreferential');
			$xfer += $output->writeString($this->prepayPreferential);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountContent !== null) {
			
			$xfer += $output->writeFieldBegin('discountContent');
			$xfer += $output->writeString($this->discountContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorBearInfo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBearInfo');
			
			if (!is_object($this->vendorBearInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->vendorBearInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actNo !== null) {
			
			$xfer += $output->writeFieldBegin('actNo');
			$xfer += $output->writeString($this->actNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actName !== null) {
			
			$xfer += $output->writeFieldBegin('actName');
			$xfer += $output->writeString($this->actName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>