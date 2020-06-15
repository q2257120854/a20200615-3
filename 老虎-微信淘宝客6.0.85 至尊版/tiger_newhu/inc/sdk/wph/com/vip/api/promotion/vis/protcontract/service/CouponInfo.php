<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class CouponInfo {
	
	static $_TSPEC;
	public $mainId = null;
	public $activityType = null;
	public $redMoney = null;
	public $redNum = null;
	public $fullMoney = null;
	public $vendorBearInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'activityType'
			),
			3 => array(
			'var' => 'redMoney'
			),
			4 => array(
			'var' => 'redNum'
			),
			5 => array(
			'var' => 'fullMoney'
			),
			6 => array(
			'var' => 'vendorBearInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['redMoney'])){
				
				$this->redMoney = $vals['redMoney'];
			}
			
			
			if (isset($vals['redNum'])){
				
				$this->redNum = $vals['redNum'];
			}
			
			
			if (isset($vals['fullMoney'])){
				
				$this->fullMoney = $vals['fullMoney'];
			}
			
			
			if (isset($vals['vendorBearInfo'])){
				
				$this->vendorBearInfo = $vals['vendorBearInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mainId); 
				
			}
			
			
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("redMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redMoney);
				
			}
			
			
			
			
			if ("redNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->redNum); 
				
			}
			
			
			
			
			if ("fullMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullMoney);
				
			}
			
			
			
			
			if ("vendorBearInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorBearInfo = new \com\vip\api\promotion\vis\protcontract\service\VendorBearInfo();
				$this->vendorBearInfo->read($input);
				
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
		
		if($this->mainId !== null) {
			
			$xfer += $output->writeFieldBegin('mainId');
			$xfer += $output->writeI64($this->mainId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityType !== null) {
			
			$xfer += $output->writeFieldBegin('activityType');
			$xfer += $output->writeByte($this->activityType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redMoney !== null) {
			
			$xfer += $output->writeFieldBegin('redMoney');
			$xfer += $output->writeString($this->redMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redNum !== null) {
			
			$xfer += $output->writeFieldBegin('redNum');
			$xfer += $output->writeI32($this->redNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullMoney !== null) {
			
			$xfer += $output->writeFieldBegin('fullMoney');
			$xfer += $output->writeString($this->fullMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorBearInfo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBearInfo');
			
			if (!is_object($this->vendorBearInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->vendorBearInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>