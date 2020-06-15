<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class VendorBearInfo {
	
	static $_TSPEC;
	public $scaleValue = null;
	public $rollNum = null;
	public $extraValue = null;
	public $bearType = null;
	public $bearValue = null;
	public $oldDeduction = null;
	public $newDeduction = null;
	public $oxoScaleValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scaleValue'
			),
			2 => array(
			'var' => 'rollNum'
			),
			3 => array(
			'var' => 'extraValue'
			),
			4 => array(
			'var' => 'bearType'
			),
			5 => array(
			'var' => 'bearValue'
			),
			6 => array(
			'var' => 'oldDeduction'
			),
			7 => array(
			'var' => 'newDeduction'
			),
			8 => array(
			'var' => 'oxoScaleValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scaleValue'])){
				
				$this->scaleValue = $vals['scaleValue'];
			}
			
			
			if (isset($vals['rollNum'])){
				
				$this->rollNum = $vals['rollNum'];
			}
			
			
			if (isset($vals['extraValue'])){
				
				$this->extraValue = $vals['extraValue'];
			}
			
			
			if (isset($vals['bearType'])){
				
				$this->bearType = $vals['bearType'];
			}
			
			
			if (isset($vals['bearValue'])){
				
				$this->bearValue = $vals['bearValue'];
			}
			
			
			if (isset($vals['oldDeduction'])){
				
				$this->oldDeduction = $vals['oldDeduction'];
			}
			
			
			if (isset($vals['newDeduction'])){
				
				$this->newDeduction = $vals['newDeduction'];
			}
			
			
			if (isset($vals['oxoScaleValue'])){
				
				$this->oxoScaleValue = $vals['oxoScaleValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorBearInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scaleValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scaleValue);
				
			}
			
			
			
			
			if ("rollNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rollNum); 
				
			}
			
			
			
			
			if ("extraValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extraValue);
				
			}
			
			
			
			
			if ("bearType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->bearType); 
				
			}
			
			
			
			
			if ("bearValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bearValue);
				
			}
			
			
			
			
			if ("oldDeduction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldDeduction);
				
			}
			
			
			
			
			if ("newDeduction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newDeduction);
				
			}
			
			
			
			
			if ("oxoScaleValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oxoScaleValue);
				
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
		
		if($this->scaleValue !== null) {
			
			$xfer += $output->writeFieldBegin('scaleValue');
			$xfer += $output->writeString($this->scaleValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rollNum !== null) {
			
			$xfer += $output->writeFieldBegin('rollNum');
			$xfer += $output->writeI32($this->rollNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extraValue !== null) {
			
			$xfer += $output->writeFieldBegin('extraValue');
			$xfer += $output->writeString($this->extraValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bearType !== null) {
			
			$xfer += $output->writeFieldBegin('bearType');
			$xfer += $output->writeByte($this->bearType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bearValue !== null) {
			
			$xfer += $output->writeFieldBegin('bearValue');
			$xfer += $output->writeString($this->bearValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldDeduction !== null) {
			
			$xfer += $output->writeFieldBegin('oldDeduction');
			$xfer += $output->writeString($this->oldDeduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newDeduction !== null) {
			
			$xfer += $output->writeFieldBegin('newDeduction');
			$xfer += $output->writeString($this->newDeduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oxoScaleValue !== null) {
			
			$xfer += $output->writeFieldBegin('oxoScaleValue');
			$xfer += $output->writeString($this->oxoScaleValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>