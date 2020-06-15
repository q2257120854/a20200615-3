<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class ActivityInfo {
	
	static $_TSPEC;
	public $actType = null;
	public $actName = null;
	public $beginTime = null;
	public $endTime = null;
	public $foreShowBeginTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actType'
			),
			2 => array(
			'var' => 'actName'
			),
			3 => array(
			'var' => 'beginTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'foreShowBeginTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actType'])){
				
				$this->actType = $vals['actType'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['foreShowBeginTime'])){
				
				$this->foreShowBeginTime = $vals['foreShowBeginTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActivityInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actType); 
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("foreShowBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->foreShowBeginTime); 
				
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
		
		if($this->actType !== null) {
			
			$xfer += $output->writeFieldBegin('actType');
			$xfer += $output->writeI32($this->actType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actName !== null) {
			
			$xfer += $output->writeFieldBegin('actName');
			$xfer += $output->writeString($this->actName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginTime');
			$xfer += $output->writeI64($this->beginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreShowBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('foreShowBeginTime');
			$xfer += $output->writeI64($this->foreShowBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>