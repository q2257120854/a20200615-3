<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class SkuSalePrice {
	
	static $_TSPEC;
	public $distribution_price = null;
	public $suggest_retail_price = null;
	public $market_price = null;
	public $effective_start_time = null;
	public $effective_end_time = null;
	public $price_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'distribution_price'
			),
			2 => array(
			'var' => 'suggest_retail_price'
			),
			3 => array(
			'var' => 'market_price'
			),
			4 => array(
			'var' => 'effective_start_time'
			),
			5 => array(
			'var' => 'effective_end_time'
			),
			6 => array(
			'var' => 'price_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['distribution_price'])){
				
				$this->distribution_price = $vals['distribution_price'];
			}
			
			
			if (isset($vals['suggest_retail_price'])){
				
				$this->suggest_retail_price = $vals['suggest_retail_price'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['effective_start_time'])){
				
				$this->effective_start_time = $vals['effective_start_time'];
			}
			
			
			if (isset($vals['effective_end_time'])){
				
				$this->effective_end_time = $vals['effective_end_time'];
			}
			
			
			if (isset($vals['price_time'])){
				
				$this->price_time = $vals['price_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuSalePrice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("distribution_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->distribution_price);
				
			}
			
			
			
			
			if ("suggest_retail_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggest_retail_price);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->market_price);
				
			}
			
			
			
			
			if ("effective_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effective_start_time);
				
			}
			
			
			
			
			if ("effective_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effective_end_time);
				
			}
			
			
			
			
			if ("price_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->price_time); 
				
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
		
		if($this->distribution_price !== null) {
			
			$xfer += $output->writeFieldBegin('distribution_price');
			$xfer += $output->writeString($this->distribution_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggest_retail_price !== null) {
			
			$xfer += $output->writeFieldBegin('suggest_retail_price');
			$xfer += $output->writeString($this->suggest_retail_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeString($this->market_price);
			
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
		
		
		if($this->price_time !== null) {
			
			$xfer += $output->writeFieldBegin('price_time');
			$xfer += $output->writeI64($this->price_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>