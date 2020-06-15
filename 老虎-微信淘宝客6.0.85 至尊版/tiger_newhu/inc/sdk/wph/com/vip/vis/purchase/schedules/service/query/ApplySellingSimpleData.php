<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class ApplySellingSimpleData {
	
	static $_TSPEC;
	public $brandId = null;
	public $shopCode = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $sellingMode = null;
	public $b2cModeId = null;
	public $sellArea = null;
	public $sellTimeFromStr = null;
	public $sellTimeToStr = null;
	public $isPos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandId'
			),
			2 => array(
			'var' => 'shopCode'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'sellingMode'
			),
			6 => array(
			'var' => 'b2cModeId'
			),
			7 => array(
			'var' => 'sellArea'
			),
			8 => array(
			'var' => 'sellTimeFromStr'
			),
			9 => array(
			'var' => 'sellTimeToStr'
			),
			10 => array(
			'var' => 'isPos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['b2cModeId'])){
				
				$this->b2cModeId = $vals['b2cModeId'];
			}
			
			
			if (isset($vals['sellArea'])){
				
				$this->sellArea = $vals['sellArea'];
			}
			
			
			if (isset($vals['sellTimeFromStr'])){
				
				$this->sellTimeFromStr = $vals['sellTimeFromStr'];
			}
			
			
			if (isset($vals['sellTimeToStr'])){
				
				$this->sellTimeToStr = $vals['sellTimeToStr'];
			}
			
			
			if (isset($vals['isPos'])){
				
				$this->isPos = $vals['isPos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApplySellingSimpleData';
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
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shopCode); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellingMode); 
				
			}
			
			
			
			
			if ("b2cModeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2cModeId); 
				
			}
			
			
			
			
			if ("sellArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellArea);
				
			}
			
			
			
			
			if ("sellTimeFromStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeFromStr);
				
			}
			
			
			
			
			if ("sellTimeToStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeToStr);
				
			}
			
			
			
			
			if ("isPos" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPos); 
				
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
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeI64($this->shopCode);
			
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
		
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeByte($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cModeId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cModeId');
			$xfer += $output->writeI32($this->b2cModeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellArea !== null) {
			
			$xfer += $output->writeFieldBegin('sellArea');
			$xfer += $output->writeString($this->sellArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFromStr !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFromStr');
			$xfer += $output->writeString($this->sellTimeFromStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeToStr !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeToStr');
			$xfer += $output->writeString($this->sellTimeToStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPos !== null) {
			
			$xfer += $output->writeFieldBegin('isPos');
			$xfer += $output->writeByte($this->isPos);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>