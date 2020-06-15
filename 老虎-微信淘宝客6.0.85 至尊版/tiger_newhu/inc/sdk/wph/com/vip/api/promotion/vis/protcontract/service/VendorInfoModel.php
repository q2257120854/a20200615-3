<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class VendorInfoModel {
	
	static $_TSPEC;
	public $vendorCode = null;
	public $protNo = null;
	public $brandSn = null;
	public $isValid = null;
	public $businessType = null;
	public $contractDimension = null;
	public $activityList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorCode'
			),
			2 => array(
			'var' => 'protNo'
			),
			3 => array(
			'var' => 'brandSn'
			),
			4 => array(
			'var' => 'isValid'
			),
			5 => array(
			'var' => 'businessType'
			),
			6 => array(
			'var' => 'contractDimension'
			),
			7 => array(
			'var' => 'activityList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['protNo'])){
				
				$this->protNo = $vals['protNo'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['isValid'])){
				
				$this->isValid = $vals['isValid'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['contractDimension'])){
				
				$this->contractDimension = $vals['contractDimension'];
			}
			
			
			if (isset($vals['activityList'])){
				
				$this->activityList = $vals['activityList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("protNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->protNo);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("isValid" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isValid); 
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("contractDimension" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->contractDimension); 
				
			}
			
			
			
			
			if ("activityList" == $schemeField){
				
				$needSkip = false;
				
				$this->activityList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\ActivityInfoModel();
						$elem0->read($input);
						
						$this->activityList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->protNo !== null) {
			
			$xfer += $output->writeFieldBegin('protNo');
			$xfer += $output->writeString($this->protNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isValid !== null) {
			
			$xfer += $output->writeFieldBegin('isValid');
			$xfer += $output->writeByte($this->isValid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeByte($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractDimension !== null) {
			
			$xfer += $output->writeFieldBegin('contractDimension');
			$xfer += $output->writeByte($this->contractDimension);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityList !== null) {
			
			$xfer += $output->writeFieldBegin('activityList');
			
			if (!is_array($this->activityList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->activityList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>