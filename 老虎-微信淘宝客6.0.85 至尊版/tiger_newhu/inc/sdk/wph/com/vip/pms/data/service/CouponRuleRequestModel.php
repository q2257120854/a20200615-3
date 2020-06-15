<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponRuleRequestModel {
	
	static $_TSPEC;
	public $couponRuleCoreModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponRuleCoreModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponRuleCoreModel'])){
				
				$this->couponRuleCoreModel = $vals['couponRuleCoreModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponRuleRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponRuleCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->couponRuleCoreModel = new \com\vip\pms\data\service\CouponRuleCoreModel();
				$this->couponRuleCoreModel->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('couponRuleCoreModel');
		
		if (!is_object($this->couponRuleCoreModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->couponRuleCoreModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>