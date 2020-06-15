<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponRequestModel {
	
	static $_TSPEC;
	public $couponCoreModel = null;
	public $couponGroupCoreModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponCoreModel'
			),
			2 => array(
			'var' => 'couponGroupCoreModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponCoreModel'])){
				
				$this->couponCoreModel = $vals['couponCoreModel'];
			}
			
			
			if (isset($vals['couponGroupCoreModel'])){
				
				$this->couponGroupCoreModel = $vals['couponGroupCoreModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->couponCoreModel = new \com\vip\pms\data\service\CouponCoreModel();
				$this->couponCoreModel->read($input);
				
			}
			
			
			
			
			if ("couponGroupCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->couponGroupCoreModel = new \com\vip\pms\data\service\CouponGroupCoreModel();
				$this->couponGroupCoreModel->read($input);
				
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
		
		if($this->couponCoreModel !== null) {
			
			$xfer += $output->writeFieldBegin('couponCoreModel');
			
			if (!is_object($this->couponCoreModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->couponCoreModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponGroupCoreModel !== null) {
			
			$xfer += $output->writeFieldBegin('couponGroupCoreModel');
			
			if (!is_object($this->couponGroupCoreModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->couponGroupCoreModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>