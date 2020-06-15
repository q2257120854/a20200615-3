<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class ForwarderCompanyVO {
	
	static $_TSPEC;
	public $forwarderCompanyName = null;
	public $custName = null;
	public $custCode = null;
	public $orderSn = null;
	public $forwarderCompanyCode = null;
	public $orderCustCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'forwarderCompanyName'
			),
			2 => array(
			'var' => 'custName'
			),
			3 => array(
			'var' => 'custCode'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'forwarderCompanyCode'
			),
			6 => array(
			'var' => 'orderCustCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['forwarderCompanyName'])){
				
				$this->forwarderCompanyName = $vals['forwarderCompanyName'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['forwarderCompanyCode'])){
				
				$this->forwarderCompanyCode = $vals['forwarderCompanyCode'];
			}
			
			
			if (isset($vals['orderCustCode'])){
				
				$this->orderCustCode = $vals['orderCustCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ForwarderCompanyVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("forwarderCompanyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->forwarderCompanyName);
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("forwarderCompanyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->forwarderCompanyCode);
				
			}
			
			
			
			
			if ("orderCustCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderCustCode);
				
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
		
		if($this->forwarderCompanyName !== null) {
			
			$xfer += $output->writeFieldBegin('forwarderCompanyName');
			$xfer += $output->writeString($this->forwarderCompanyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->forwarderCompanyCode !== null) {
			
			$xfer += $output->writeFieldBegin('forwarderCompanyCode');
			$xfer += $output->writeString($this->forwarderCompanyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('orderCustCode');
			$xfer += $output->writeString($this->orderCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>