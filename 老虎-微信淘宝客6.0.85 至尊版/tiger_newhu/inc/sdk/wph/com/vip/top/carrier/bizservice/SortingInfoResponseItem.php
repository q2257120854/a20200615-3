<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class SortingInfoResponseItem {
	
	static $_TSPEC;
	public $sortingCode = null;
	public $carrierPointCode = null;
	public $carrierPointName = null;
	public $referenceNo = null;
	public $bizCode = null;
	public $bizMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sortingCode'
			),
			2 => array(
			'var' => 'carrierPointCode'
			),
			3 => array(
			'var' => 'carrierPointName'
			),
			4 => array(
			'var' => 'referenceNo'
			),
			5 => array(
			'var' => 'bizCode'
			),
			6 => array(
			'var' => 'bizMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sortingCode'])){
				
				$this->sortingCode = $vals['sortingCode'];
			}
			
			
			if (isset($vals['carrierPointCode'])){
				
				$this->carrierPointCode = $vals['carrierPointCode'];
			}
			
			
			if (isset($vals['carrierPointName'])){
				
				$this->carrierPointName = $vals['carrierPointName'];
			}
			
			
			if (isset($vals['referenceNo'])){
				
				$this->referenceNo = $vals['referenceNo'];
			}
			
			
			if (isset($vals['bizCode'])){
				
				$this->bizCode = $vals['bizCode'];
			}
			
			
			if (isset($vals['bizMsg'])){
				
				$this->bizMsg = $vals['bizMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SortingInfoResponseItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sortingCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sortingCode);
				
			}
			
			
			
			
			if ("carrierPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointCode);
				
			}
			
			
			
			
			if ("carrierPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointName);
				
			}
			
			
			
			
			if ("referenceNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceNo);
				
			}
			
			
			
			
			if ("bizCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizCode);
				
			}
			
			
			
			
			if ("bizMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizMsg);
				
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
		
		if($this->sortingCode !== null) {
			
			$xfer += $output->writeFieldBegin('sortingCode');
			$xfer += $output->writeString($this->sortingCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointCode');
			$xfer += $output->writeString($this->carrierPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointName');
			$xfer += $output->writeString($this->carrierPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceNo !== null) {
			
			$xfer += $output->writeFieldBegin('referenceNo');
			$xfer += $output->writeString($this->referenceNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizCode');
			$xfer += $output->writeString($this->bizCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizMsg !== null) {
			
			$xfer += $output->writeFieldBegin('bizMsg');
			$xfer += $output->writeString($this->bizMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>