<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\coupon;

class CheckCouponInfoResponse {
	
	static $_TSPEC;
	public $total_fav = null;
	public $alloc_fav = null;
	public $coupons = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'total_fav'
			),
			2 => array(
			'var' => 'alloc_fav'
			),
			3 => array(
			'var' => 'coupons'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['total_fav'])){
				
				$this->total_fav = $vals['total_fav'];
			}
			
			
			if (isset($vals['alloc_fav'])){
				
				$this->alloc_fav = $vals['alloc_fav'];
			}
			
			
			if (isset($vals['coupons'])){
				
				$this->coupons = $vals['coupons'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckCouponInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("total_fav" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->total_fav);
				
			}
			
			
			
			
			if ("alloc_fav" == $schemeField){
				
				$needSkip = false;
				
				$this->alloc_fav = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->alloc_fav[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("coupons" == $schemeField){
				
				$needSkip = false;
				
				$this->coupons = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\vipmax\coupon\CouponCheckResult();
						$elem1->read($input);
						
						$this->coupons[$_size1++] = $elem1;
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
		
		if($this->total_fav !== null) {
			
			$xfer += $output->writeFieldBegin('total_fav');
			$xfer += $output->writeString($this->total_fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->alloc_fav !== null) {
			
			$xfer += $output->writeFieldBegin('alloc_fav');
			
			if (!is_array($this->alloc_fav)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->alloc_fav as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
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