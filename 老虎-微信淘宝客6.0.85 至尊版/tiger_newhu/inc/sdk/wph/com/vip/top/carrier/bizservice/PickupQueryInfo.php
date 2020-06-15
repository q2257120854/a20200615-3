<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class PickupQueryInfo {
	
	static $_TSPEC;
	public $custCode = null;
	public $pointName = null;
	public $beginTime = null;
	public $endTime = null;
	public $opName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custCode'
			),
			2 => array(
			'var' => 'pointName'
			),
			3 => array(
			'var' => 'beginTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'opName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['pointName'])){
				
				$this->pointName = $vals['pointName'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['opName'])){
				
				$this->opName = $vals['opName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PickupQueryInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("pointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pointName);
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->beginTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->endTime);
				
			}
			
			
			
			
			if ("opName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opName);
				
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
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pointName !== null) {
			
			$xfer += $output->writeFieldBegin('pointName');
			$xfer += $output->writeString($this->pointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginTime');
			$xfer += $output->writeString($this->beginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeString($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opName !== null) {
			
			$xfer += $output->writeFieldBegin('opName');
			$xfer += $output->writeString($this->opName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>