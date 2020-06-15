<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class Price {
	
	static $_TSPEC;
	public $vip_price = null;
	public $market_price = null;
	public $discount = null;
	public $effective_start_time = null;
	public $effective_end_time = null;
	public $special_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vip_price'
			),
			2 => array(
			'var' => 'market_price'
			),
			3 => array(
			'var' => 'discount'
			),
			4 => array(
			'var' => 'effective_start_time'
			),
			5 => array(
			'var' => 'effective_end_time'
			),
			6 => array(
			'var' => 'special_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vip_price'])){
				
				$this->vip_price = $vals['vip_price'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['effective_start_time'])){
				
				$this->effective_start_time = $vals['effective_start_time'];
			}
			
			
			if (isset($vals['effective_end_time'])){
				
				$this->effective_end_time = $vals['effective_end_time'];
			}
			
			
			if (isset($vals['special_price'])){
				
				$this->special_price = $vals['special_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Price';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vip_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_price);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->market_price);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount);
				
			}
			
			
			
			
			if ("effective_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effective_start_time); 
				
			}
			
			
			
			
			if ("effective_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effective_end_time); 
				
			}
			
			
			
			
			if ("special_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->special_price);
				
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
		
		if($this->vip_price !== null) {
			
			$xfer += $output->writeFieldBegin('vip_price');
			$xfer += $output->writeString($this->vip_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeString($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount !== null) {
			
			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeString($this->discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effective_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('effective_start_time');
			$xfer += $output->writeI64($this->effective_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effective_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('effective_end_time');
			$xfer += $output->writeI64($this->effective_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->special_price !== null) {
			
			$xfer += $output->writeFieldBegin('special_price');
			$xfer += $output->writeString($this->special_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>