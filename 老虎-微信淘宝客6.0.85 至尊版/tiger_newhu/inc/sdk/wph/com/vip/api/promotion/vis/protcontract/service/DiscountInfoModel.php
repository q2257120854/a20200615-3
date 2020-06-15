<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class DiscountInfoModel {
	
	static $_TSPEC;
	public $fullCutInfo = null;
	public $mobileInfo = null;
	public $couponInfo = null;
	public $prepayInfo = null;
	public $exclusivePrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fullCutInfo'
			),
			2 => array(
			'var' => 'mobileInfo'
			),
			3 => array(
			'var' => 'couponInfo'
			),
			4 => array(
			'var' => 'prepayInfo'
			),
			5 => array(
			'var' => 'exclusivePrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fullCutInfo'])){
				
				$this->fullCutInfo = $vals['fullCutInfo'];
			}
			
			
			if (isset($vals['mobileInfo'])){
				
				$this->mobileInfo = $vals['mobileInfo'];
			}
			
			
			if (isset($vals['couponInfo'])){
				
				$this->couponInfo = $vals['couponInfo'];
			}
			
			
			if (isset($vals['prepayInfo'])){
				
				$this->prepayInfo = $vals['prepayInfo'];
			}
			
			
			if (isset($vals['exclusivePrice'])){
				
				$this->exclusivePrice = $vals['exclusivePrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DiscountInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fullCutInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->fullCutInfo = new \com\vip\api\promotion\vis\protcontract\service\FullCutInfo();
				$this->fullCutInfo->read($input);
				
			}
			
			
			
			
			if ("mobileInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->mobileInfo = new \com\vip\api\promotion\vis\protcontract\service\MobileInfo();
				$this->mobileInfo->read($input);
				
			}
			
			
			
			
			if ("couponInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->couponInfo = new \com\vip\api\promotion\vis\protcontract\service\CouponInfo();
				$this->couponInfo->read($input);
				
			}
			
			
			
			
			if ("prepayInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->prepayInfo = new \com\vip\api\promotion\vis\protcontract\service\PrepayInfo();
				$this->prepayInfo->read($input);
				
			}
			
			
			
			
			if ("exclusivePrice" == $schemeField){
				
				$needSkip = false;
				
				$this->exclusivePrice = new \com\vip\api\promotion\vis\protcontract\service\ExclusivePrice();
				$this->exclusivePrice->read($input);
				
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
		
		if($this->fullCutInfo !== null) {
			
			$xfer += $output->writeFieldBegin('fullCutInfo');
			
			if (!is_object($this->fullCutInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->fullCutInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileInfo !== null) {
			
			$xfer += $output->writeFieldBegin('mobileInfo');
			
			if (!is_object($this->mobileInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->mobileInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponInfo !== null) {
			
			$xfer += $output->writeFieldBegin('couponInfo');
			
			if (!is_object($this->couponInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->couponInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayInfo !== null) {
			
			$xfer += $output->writeFieldBegin('prepayInfo');
			
			if (!is_object($this->prepayInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->prepayInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exclusivePrice !== null) {
			
			$xfer += $output->writeFieldBegin('exclusivePrice');
			
			if (!is_object($this->exclusivePrice)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->exclusivePrice->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>