<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\activity;

class CouponData {
	
	static $_TSPEC;
	public $error_code = null;
	public $error_msg = null;
	public $coupons = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'error_code'
			),
			2 => array(
			'var' => 'error_msg'
			),
			3 => array(
			'var' => 'coupons'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['error_code'])){
				
				$this->error_code = $vals['error_code'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
			if (isset($vals['coupons'])){
				
				$this->coupons = $vals['coupons'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("error_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_code);
				
			}
			
			
			
			
			if ("error_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_msg);
				
			}
			
			
			
			
			if ("coupons" == $schemeField){
				
				$needSkip = false;
				
				$this->coupons = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\activity\Coupon();
						$elem0->read($input);
						
						$this->coupons[$_size0++] = $elem0;
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
		
		if($this->error_code !== null) {
			
			$xfer += $output->writeFieldBegin('error_code');
			$xfer += $output->writeString($this->error_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_msg !== null) {
			
			$xfer += $output->writeFieldBegin('error_msg');
			$xfer += $output->writeString($this->error_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupons !== null) {
			
			$xfer += $output->writeFieldBegin('coupons');
			
			if (!is_array($this->coupons)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->coupons as $iter0){
				
				
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