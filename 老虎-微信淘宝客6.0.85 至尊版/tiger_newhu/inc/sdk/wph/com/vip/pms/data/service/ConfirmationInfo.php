<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class ConfirmationInfo {
	
	static $_TSPEC;
	public $confirmNo = null;
	public $supplierScale = null;
	public $dataType = null;
	public $chargeType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'confirmNo'
			),
			2 => array(
			'var' => 'supplierScale'
			),
			3 => array(
			'var' => 'dataType'
			),
			4 => array(
			'var' => 'chargeType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['confirmNo'])){
				
				$this->confirmNo = $vals['confirmNo'];
			}
			
			
			if (isset($vals['supplierScale'])){
				
				$this->supplierScale = $vals['supplierScale'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['chargeType'])){
				
				$this->chargeType = $vals['chargeType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmationInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("confirmNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->confirmNo);
				
			}
			
			
			
			
			if ("supplierScale" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->supplierScale);
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->dataType); 
				
			}
			
			
			
			
			if ("chargeType" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->chargeType); 
				
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
		
		if($this->confirmNo !== null) {
			
			$xfer += $output->writeFieldBegin('confirmNo');
			$xfer += $output->writeString($this->confirmNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplierScale !== null) {
			
			$xfer += $output->writeFieldBegin('supplierScale');
			$xfer += $output->writeDouble($this->supplierScale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('dataType');
		$xfer += $output->writeByte($this->dataType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->chargeType !== null) {
			
			$xfer += $output->writeFieldBegin('chargeType');
			$xfer += $output->writeI16($this->chargeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>