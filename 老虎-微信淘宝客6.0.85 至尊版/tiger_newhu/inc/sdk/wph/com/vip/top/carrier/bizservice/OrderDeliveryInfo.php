<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class OrderDeliveryInfo {
	
	static $_TSPEC;
	public $mainCustCode = null;
	public $mainCustName = null;
	public $custCode = null;
	public $custName = null;
	public $expectedSignTime = null;
	public $expectedTrunkTime = null;
	public $signTime = null;
	public $trunkTime = null;
	public $custType = null;
	public $timeLiness = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainCustCode'
			),
			2 => array(
			'var' => 'mainCustName'
			),
			3 => array(
			'var' => 'custCode'
			),
			4 => array(
			'var' => 'custName'
			),
			5 => array(
			'var' => 'expectedSignTime'
			),
			6 => array(
			'var' => 'expectedTrunkTime'
			),
			7 => array(
			'var' => 'signTime'
			),
			8 => array(
			'var' => 'trunkTime'
			),
			9 => array(
			'var' => 'custType'
			),
			10 => array(
			'var' => 'timeLiness'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainCustCode'])){
				
				$this->mainCustCode = $vals['mainCustCode'];
			}
			
			
			if (isset($vals['mainCustName'])){
				
				$this->mainCustName = $vals['mainCustName'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
			if (isset($vals['expectedSignTime'])){
				
				$this->expectedSignTime = $vals['expectedSignTime'];
			}
			
			
			if (isset($vals['expectedTrunkTime'])){
				
				$this->expectedTrunkTime = $vals['expectedTrunkTime'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['trunkTime'])){
				
				$this->trunkTime = $vals['trunkTime'];
			}
			
			
			if (isset($vals['custType'])){
				
				$this->custType = $vals['custType'];
			}
			
			
			if (isset($vals['timeLiness'])){
				
				$this->timeLiness = $vals['timeLiness'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDeliveryInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainCustCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mainCustCode);
				
			}
			
			
			
			
			if ("mainCustName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mainCustName);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
			}
			
			
			
			
			if ("expectedSignTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expectedSignTime);
				
			}
			
			
			
			
			if ("expectedTrunkTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expectedTrunkTime);
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signTime);
				
			}
			
			
			
			
			if ("trunkTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trunkTime);
				
			}
			
			
			
			
			if ("custType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->custType); 
				
			}
			
			
			
			
			if ("timeLiness" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->timeLiness); 
				
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
		
		if($this->mainCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('mainCustCode');
			$xfer += $output->writeString($this->mainCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mainCustName !== null) {
			
			$xfer += $output->writeFieldBegin('mainCustName');
			$xfer += $output->writeString($this->mainCustName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectedSignTime !== null) {
			
			$xfer += $output->writeFieldBegin('expectedSignTime');
			$xfer += $output->writeString($this->expectedSignTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectedTrunkTime !== null) {
			
			$xfer += $output->writeFieldBegin('expectedTrunkTime');
			$xfer += $output->writeString($this->expectedTrunkTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeString($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trunkTime !== null) {
			
			$xfer += $output->writeFieldBegin('trunkTime');
			$xfer += $output->writeString($this->trunkTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custType !== null) {
			
			$xfer += $output->writeFieldBegin('custType');
			$xfer += $output->writeI32($this->custType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeLiness !== null) {
			
			$xfer += $output->writeFieldBegin('timeLiness');
			$xfer += $output->writeI32($this->timeLiness);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>