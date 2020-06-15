<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\finance;

class Promotion {
	
	static $_TSPEC;
	public $promotion_type = null;
	public $promotion_name = null;
	public $promotion_description = null;
	public $vendor_ratio = null;
	public $discount_total_amount = null;
	public $discount_vendor_amount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'promotion_type'
			),
			2 => array(
			'var' => 'promotion_name'
			),
			3 => array(
			'var' => 'promotion_description'
			),
			4 => array(
			'var' => 'vendor_ratio'
			),
			5 => array(
			'var' => 'discount_total_amount'
			),
			6 => array(
			'var' => 'discount_vendor_amount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['promotion_type'])){
				
				$this->promotion_type = $vals['promotion_type'];
			}
			
			
			if (isset($vals['promotion_name'])){
				
				$this->promotion_name = $vals['promotion_name'];
			}
			
			
			if (isset($vals['promotion_description'])){
				
				$this->promotion_description = $vals['promotion_description'];
			}
			
			
			if (isset($vals['vendor_ratio'])){
				
				$this->vendor_ratio = $vals['vendor_ratio'];
			}
			
			
			if (isset($vals['discount_total_amount'])){
				
				$this->discount_total_amount = $vals['discount_total_amount'];
			}
			
			
			if (isset($vals['discount_vendor_amount'])){
				
				$this->discount_vendor_amount = $vals['discount_vendor_amount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Promotion';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("promotion_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_type);
				
			}
			
			
			
			
			if ("promotion_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_name);
				
			}
			
			
			
			
			if ("promotion_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_description);
				
			}
			
			
			
			
			if ("vendor_ratio" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendor_ratio);
				
			}
			
			
			
			
			if ("discount_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount_total_amount);
				
			}
			
			
			
			
			if ("discount_vendor_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount_vendor_amount);
				
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
		
		if($this->promotion_type !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_type');
			$xfer += $output->writeString($this->promotion_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_name !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_name');
			$xfer += $output->writeString($this->promotion_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_description !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_description');
			$xfer += $output->writeString($this->promotion_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_ratio !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_ratio');
			$xfer += $output->writeDouble($this->vendor_ratio);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_total_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_total_amount');
			$xfer += $output->writeDouble($this->discount_total_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_vendor_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_vendor_amount');
			$xfer += $output->writeDouble($this->discount_vendor_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>