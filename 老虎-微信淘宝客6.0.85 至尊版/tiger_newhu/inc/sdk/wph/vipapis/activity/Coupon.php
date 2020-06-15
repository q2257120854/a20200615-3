<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\activity;

class Coupon {
	
	static $_TSPEC;
	public $coupon_name = null;
	public $coupon_type = null;
	public $use_type = null;
	public $buy = null;
	public $fav = null;
	public $activate_begin_time = null;
	public $activate_end_time = null;
	public $use_relative_days = null;
	public $use_begin_time = null;
	public $use_end_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'coupon_name'
			),
			2 => array(
			'var' => 'coupon_type'
			),
			3 => array(
			'var' => 'use_type'
			),
			4 => array(
			'var' => 'buy'
			),
			5 => array(
			'var' => 'fav'
			),
			6 => array(
			'var' => 'activate_begin_time'
			),
			7 => array(
			'var' => 'activate_end_time'
			),
			8 => array(
			'var' => 'use_relative_days'
			),
			9 => array(
			'var' => 'use_begin_time'
			),
			10 => array(
			'var' => 'use_end_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['coupon_name'])){
				
				$this->coupon_name = $vals['coupon_name'];
			}
			
			
			if (isset($vals['coupon_type'])){
				
				$this->coupon_type = $vals['coupon_type'];
			}
			
			
			if (isset($vals['use_type'])){
				
				$this->use_type = $vals['use_type'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['fav'])){
				
				$this->fav = $vals['fav'];
			}
			
			
			if (isset($vals['activate_begin_time'])){
				
				$this->activate_begin_time = $vals['activate_begin_time'];
			}
			
			
			if (isset($vals['activate_end_time'])){
				
				$this->activate_end_time = $vals['activate_end_time'];
			}
			
			
			if (isset($vals['use_relative_days'])){
				
				$this->use_relative_days = $vals['use_relative_days'];
			}
			
			
			if (isset($vals['use_begin_time'])){
				
				$this->use_begin_time = $vals['use_begin_time'];
			}
			
			
			if (isset($vals['use_end_time'])){
				
				$this->use_end_time = $vals['use_end_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Coupon';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("coupon_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_name);
				
			}
			
			
			
			
			if ("coupon_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->coupon_type); 
				
			}
			
			
			
			
			if ("use_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->use_type); 
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->buy);
				
			}
			
			
			
			
			if ("fav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->fav);
				
			}
			
			
			
			
			if ("activate_begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activate_begin_time); 
				
			}
			
			
			
			
			if ("activate_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->activate_end_time); 
				
			}
			
			
			
			
			if ("use_relative_days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->use_relative_days); 
				
			}
			
			
			
			
			if ("use_begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->use_begin_time); 
				
			}
			
			
			
			
			if ("use_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->use_end_time); 
				
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
		
		if($this->coupon_name !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_name');
			$xfer += $output->writeString($this->coupon_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_type !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_type');
			$xfer += $output->writeI32($this->coupon_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->use_type !== null) {
			
			$xfer += $output->writeFieldBegin('use_type');
			$xfer += $output->writeI32($this->use_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buy !== null) {
			
			$xfer += $output->writeFieldBegin('buy');
			$xfer += $output->writeDouble($this->buy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fav !== null) {
			
			$xfer += $output->writeFieldBegin('fav');
			$xfer += $output->writeDouble($this->fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activate_begin_time !== null) {
			
			$xfer += $output->writeFieldBegin('activate_begin_time');
			$xfer += $output->writeI64($this->activate_begin_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activate_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('activate_end_time');
			$xfer += $output->writeI64($this->activate_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->use_relative_days !== null) {
			
			$xfer += $output->writeFieldBegin('use_relative_days');
			$xfer += $output->writeI32($this->use_relative_days);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->use_begin_time !== null) {
			
			$xfer += $output->writeFieldBegin('use_begin_time');
			$xfer += $output->writeI64($this->use_begin_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->use_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('use_end_time');
			$xfer += $output->writeI64($this->use_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>