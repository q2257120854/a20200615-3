<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\coupon;

class CouponUseResult {
	
	static $_TSPEC;
	public $coupon_sn = null;
	public $coupon_type = null;
	public $coupon_field = null;
	public $coupon_type_name = null;
	public $coupon_fav_desc = null;
	public $sku_ids = null;
	
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponUseResult';
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
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->sku_ids[$_size0++] = $elem0;
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>