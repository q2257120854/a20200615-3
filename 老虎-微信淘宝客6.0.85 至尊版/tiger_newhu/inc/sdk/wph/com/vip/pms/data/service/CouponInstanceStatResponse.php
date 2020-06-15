<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponInstanceStatResponse {
	
	static $_TSPEC;
	public $couponNo = null;
	public $activatedAmount = null;
	public $usedAmount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponNo'
			),
			2 => array(
			'var' => 'activatedAmount'
			),
			3 => array(
			'var' => 'usedAmount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['activatedAmount'])){
				
				$this->activatedAmount = $vals['activatedAmount'];
			}
			
			
			if (isset($vals['usedAmount'])){
				
				$this->usedAmount = $vals['usedAmount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponInstanceStatResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponNo);
				
			}
			
			
			
			
			if ("activatedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activatedAmount); 
				
			}
			
			
			
			
			if ("usedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->usedAmount); 
				
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
		
		$xfer += $output->writeFieldBegin('couponNo');
		$xfer += $output->writeString($this->couponNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activatedAmount');
		$xfer += $output->writeI64($this->activatedAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('usedAmount');
		$xfer += $output->writeI64($this->usedAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>