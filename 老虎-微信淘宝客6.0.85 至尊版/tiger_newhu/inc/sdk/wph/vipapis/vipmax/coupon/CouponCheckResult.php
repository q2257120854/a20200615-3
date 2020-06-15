<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\coupon;

class CouponCheckResult {
	
	static $_TSPEC;
	public $coupon_sn = null;
	public $coupon_type = null;
	public $coupon_field = null;
	public $coupon_type_name = null;
	public $coupon_fav_desc = null;
	public $sku_ids = null;
	public $usable = null;
	public $unusable_code = null;
	public $unusableReason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'coupon_sn'
			),
			2 => array(
			'var' => 'coupon_type'
			),
			3 => array(
			'var' => 'coupon_field'
			),
			4 => array(
			'var' => 'coupon_type_name'
			),
			5 => array(
			'var' => 'coupon_fav_desc'
			),
			6 => array(
			'var' => 'sku_ids'
			),
			7 => array(
			'var' => 'usable'
			),
			8 => array(
			'var' => 'unusable_code'
			),
			9 => array(
			'var' => 'unusableReason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['coupon_sn'])){
				
				$this->coupon_sn = $vals['coupon_sn'];
			}
			
			
			if (isset($vals['coupon_type'])){
				
				$this->coupon_type = $vals['coupon_type'];
			}
			
			
			if (isset($vals['coupon_field'])){
				
				$this->coupon_field = $vals['coupon_field'];
			}
			
			
			if (isset($vals['coupon_type_name'])){
				
				$this->coupon_type_name = $vals['coupon_type_name'];
			}
			
			
			if (isset($vals['coupon_fav_desc'])){
				
				$this->coupon_fav_desc = $vals['coupon_fav_desc'];
			}
			
			
			if (isset($vals['sku_ids'])){
				
				$this->sku_ids = $vals['sku_ids'];
			}
			
			
			if (isset($vals['usable'])){
				
				$this->usable = $vals['usable'];
			}
			
			
			if (isset($vals['unusable_code'])){
				
				$this->unusable_code = $vals['unusable_code'];
			}
			
			
			if (isset($vals['unusableReason'])){
				
				$this->unusableReason = $vals['unusableReason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponCheckResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("coupon_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_sn);
				
			}
			
			
			
			
			if ("coupon_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->coupon_type); 
				
			}
			
			
			
			
			if ("coupon_field" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->coupon_field); 
				
			}
			
			
			
			
			if ("coupon_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_type_name);
				
			}
			
			
			
			
			if ("coupon_fav_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_fav_desc);
				
			}
			
			
			
			
			if ("sku_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->sku_ids = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->sku_ids[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("usable" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->usable); 
				
			}
			
			
			
			
			if ("unusable_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unusable_code); 
				
			}
			
			
			
			
			if ("unusableReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unusableReason);
				
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
		
		if($this->coupon_sn !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_sn');
			$xfer += $output->writeString($this->coupon_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_type !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_type');
			$xfer += $output->writeI32($this->coupon_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_field !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_field');
			$xfer += $output->writeI32($this->coupon_field);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_type_name');
			$xfer += $output->writeString($this->coupon_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_fav_desc !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_fav_desc');
			$xfer += $output->writeString($this->coupon_fav_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku_ids !== null) {
			
			$xfer += $output->writeFieldBegin('sku_ids');
			
			if (!is_array($this->sku_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sku_ids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usable !== null) {
			
			$xfer += $output->writeFieldBegin('usable');
			$xfer += $output->writeI32($this->usable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unusable_code !== null) {
			
			$xfer += $output->writeFieldBegin('unusable_code');
			$xfer += $output->writeI32($this->unusable_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unusableReason !== null) {
			
			$xfer += $output->writeFieldBegin('unusableReason');
			$xfer += $output->writeString($this->unusableReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>