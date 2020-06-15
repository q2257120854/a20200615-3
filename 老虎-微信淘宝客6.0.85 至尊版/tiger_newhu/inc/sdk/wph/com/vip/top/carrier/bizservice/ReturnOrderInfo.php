<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class ReturnOrderInfo {
	
	static $_TSPEC;
	public $transportNo = null;
	public $custName = null;
	public $returnStatus = null;
	public $appointmentReturnTime = null;
	public $overReturnTime = null;
	public $actualReturnTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'custName'
			),
			3 => array(
			'var' => 'returnStatus'
			),
			4 => array(
			'var' => 'appointmentReturnTime'
			),
			5 => array(
			'var' => 'overReturnTime'
			),
			6 => array(
			'var' => 'actualReturnTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
			if (isset($vals['returnStatus'])){
				
				$this->returnStatus = $vals['returnStatus'];
			}
			
			
			if (isset($vals['appointmentReturnTime'])){
				
				$this->appointmentReturnTime = $vals['appointmentReturnTime'];
			}
			
			
			if (isset($vals['overReturnTime'])){
				
				$this->overReturnTime = $vals['overReturnTime'];
			}
			
			
			if (isset($vals['actualReturnTime'])){
				
				$this->actualReturnTime = $vals['actualReturnTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
			}
			
			
			
			
			if ("returnStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnStatus);
				
			}
			
			
			
			
			if ("appointmentReturnTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appointmentReturnTime);
				
			}
			
			
			
			
			if ("overReturnTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->overReturnTime);
				
			}
			
			
			
			
			if ("actualReturnTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actualReturnTime);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnStatus !== null) {
			
			$xfer += $output->writeFieldBegin('returnStatus');
			$xfer += $output->writeString($this->returnStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointmentReturnTime !== null) {
			
			$xfer += $output->writeFieldBegin('appointmentReturnTime');
			$xfer += $output->writeString($this->appointmentReturnTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->overReturnTime !== null) {
			
			$xfer += $output->writeFieldBegin('overReturnTime');
			$xfer += $output->writeString($this->overReturnTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReturnTime !== null) {
			
			$xfer += $output->writeFieldBegin('actualReturnTime');
			$xfer += $output->writeString($this->actualReturnTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>