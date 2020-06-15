<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\price\api;

class ProdItemSalePrice {
	
	static $_TSPEC;
	public $sale_price_change_no = null;
	public $store_code = null;
	public $barcode = null;
	public $suggestion_retail_price = null;
	public $discount = null;
	public $sale_price = null;
	public $start_effective_time = null;
	public $end_effective_time = null;
	public $is_global = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sale_price_change_no'
			),
			2 => array(
			'var' => 'store_code'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'suggestion_retail_price'
			),
			5 => array(
			'var' => 'discount'
			),
			6 => array(
			'var' => 'sale_price'
			),
			7 => array(
			'var' => 'start_effective_time'
			),
			8 => array(
			'var' => 'end_effective_time'
			),
			9 => array(
			'var' => 'is_global'
			),
			10 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sale_price_change_no'])){
				
				$this->sale_price_change_no = $vals['sale_price_change_no'];
			}
			
			
			if (isset($vals['store_code'])){
				
				$this->store_code = $vals['store_code'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['suggestion_retail_price'])){
				
				$this->suggestion_retail_price = $vals['suggestion_retail_price'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['sale_price'])){
				
				$this->sale_price = $vals['sale_price'];
			}
			
			
			if (isset($vals['start_effective_time'])){
				
				$this->start_effective_time = $vals['start_effective_time'];
			}
			
			
			if (isset($vals['end_effective_time'])){
				
				$this->end_effective_time = $vals['end_effective_time'];
			}
			
			
			if (isset($vals['is_global'])){
				
				$this->is_global = $vals['is_global'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProdItemSalePrice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sale_price_change_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_price_change_no);
				
			}
			
			
			
			
			if ("store_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_code);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("suggestion_retail_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestion_retail_price);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount);
				
			}
			
			
			
			
			if ("sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_price);
				
			}
			
			
			
			
			if ("start_effective_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_effective_time);
				
			}
			
			
			
			
			if ("end_effective_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_effective_time);
				
			}
			
			
			
			
			if ("is_global" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_global);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
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
		
		if($this->sale_price_change_no !== null) {
			
			$xfer += $output->writeFieldBegin('sale_price_change_no');
			$xfer += $output->writeString($this->sale_price_change_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_code !== null) {
			
			$xfer += $output->writeFieldBegin('store_code');
			$xfer += $output->writeString($this->store_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestion_retail_price !== null) {
			
			$xfer += $output->writeFieldBegin('suggestion_retail_price');
			$xfer += $output->writeString($this->suggestion_retail_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount !== null) {
			
			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeString($this->discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('sale_price');
			$xfer += $output->writeString($this->sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_effective_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_effective_time');
			$xfer += $output->writeI64($this->start_effective_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_effective_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_effective_time');
			$xfer += $output->writeI64($this->end_effective_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_global !== null) {
			
			$xfer += $output->writeFieldBegin('is_global');
			$xfer += $output->writeBool($this->is_global);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>