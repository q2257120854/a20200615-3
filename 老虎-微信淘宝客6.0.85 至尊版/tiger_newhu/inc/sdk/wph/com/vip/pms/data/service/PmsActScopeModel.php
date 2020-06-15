<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActScopeModel {
	
	static $_TSPEC;
	public $scopeId = null;
	public $scopeType = null;
	public $brandId = null;
	public $brandName = null;
	public $salesNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scopeId'
			),
			2 => array(
			'var' => 'scopeType'
			),
			3 => array(
			'var' => 'brandId'
			),
			4 => array(
			'var' => 'brandName'
			),
			5 => array(
			'var' => 'salesNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scopeId'])){
				
				$this->scopeId = $vals['scopeId'];
			}
			
			
			if (isset($vals['scopeType'])){
				
				$this->scopeType = $vals['scopeType'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['salesNo'])){
				
				$this->salesNo = $vals['salesNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActScopeModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scopeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->scopeId); 
				
			}
			
			
			
			
			if ("scopeType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scopeType); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("salesNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->salesNo); 
				
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
		
		$xfer += $output->writeFieldBegin('scopeId');
		$xfer += $output->writeI64($this->scopeId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->scopeType !== null) {
			
			$xfer += $output->writeFieldBegin('scopeType');
			$xfer += $output->writeI32($this->scopeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesNo');
			$xfer += $output->writeI64($this->salesNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>