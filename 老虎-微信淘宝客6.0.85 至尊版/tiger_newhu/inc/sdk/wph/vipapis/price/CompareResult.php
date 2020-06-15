<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\price;

class CompareResult {
	
	static $_TSPEC;
	public $ext_market_price = null;
	public $ext_sale_price = null;
	public $vip_discount_price = null;
	public $c_discount_price = null;
	public $c_url = null;
	public $c_product_name = null;
	public $c_mall_name = null;
	public $c_store_name = null;
	public $vip_lowest_price = null;
	public $same_style_price = null;
	public $pre_market_price = null;
	public $pre_sale_price = null;
	public $pre_bill_price = null;
	public $pre_brand_id = null;
	public $pre_schedule_name = null;
	public $pre_schedule_start_time = null;
	public $pre_schedule_end_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ext_market_price'
			),
			2 => array(
			'var' => 'ext_sale_price'
			),
			3 => array(
			'var' => 'vip_discount_price'
			),
			4 => array(
			'var' => 'c_discount_price'
			),
			5 => array(
			'var' => 'c_url'
			),
			6 => array(
			'var' => 'c_product_name'
			),
			7 => array(
			'var' => 'c_mall_name'
			),
			8 => array(
			'var' => 'c_store_name'
			),
			9 => array(
			'var' => 'vip_lowest_price'
			),
			10 => array(
			'var' => 'same_style_price'
			),
			11 => array(
			'var' => 'pre_market_price'
			),
			12 => array(
			'var' => 'pre_sale_price'
			),
			13 => array(
			'var' => 'pre_bill_price'
			),
			14 => array(
			'var' => 'pre_brand_id'
			),
			15 => array(
			'var' => 'pre_schedule_name'
			),
			16 => array(
			'var' => 'pre_schedule_start_time'
			),
			17 => array(
			'var' => 'pre_schedule_end_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ext_market_price'])){
				
				$this->ext_market_price = $vals['ext_market_price'];
			}
			
			
			if (isset($vals['ext_sale_price'])){
				
				$this->ext_sale_price = $vals['ext_sale_price'];
			}
			
			
			if (isset($vals['vip_discount_price'])){
				
				$this->vip_discount_price = $vals['vip_discount_price'];
			}
			
			
			if (isset($vals['c_discount_price'])){
				
				$this->c_discount_price = $vals['c_discount_price'];
			}
			
			
			if (isset($vals['c_url'])){
				
				$this->c_url = $vals['c_url'];
			}
			
			
			if (isset($vals['c_product_name'])){
				
				$this->c_product_name = $vals['c_product_name'];
			}
			
			
			if (isset($vals['c_mall_name'])){
				
				$this->c_mall_name = $vals['c_mall_name'];
			}
			
			
			if (isset($vals['c_store_name'])){
				
				$this->c_store_name = $vals['c_store_name'];
			}
			
			
			if (isset($vals['vip_lowest_price'])){
				
				$this->vip_lowest_price = $vals['vip_lowest_price'];
			}
			
			
			if (isset($vals['same_style_price'])){
				
				$this->same_style_price = $vals['same_style_price'];
			}
			
			
			if (isset($vals['pre_market_price'])){
				
				$this->pre_market_price = $vals['pre_market_price'];
			}
			
			
			if (isset($vals['pre_sale_price'])){
				
				$this->pre_sale_price = $vals['pre_sale_price'];
			}
			
			
			if (isset($vals['pre_bill_price'])){
				
				$this->pre_bill_price = $vals['pre_bill_price'];
			}
			
			
			if (isset($vals['pre_brand_id'])){
				
				$this->pre_brand_id = $vals['pre_brand_id'];
			}
			
			
			if (isset($vals['pre_schedule_name'])){
				
				$this->pre_schedule_name = $vals['pre_schedule_name'];
			}
			
			
			if (isset($vals['pre_schedule_start_time'])){
				
				$this->pre_schedule_start_time = $vals['pre_schedule_start_time'];
			}
			
			
			if (isset($vals['pre_schedule_end_time'])){
				
				$this->pre_schedule_end_time = $vals['pre_schedule_end_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CompareResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ext_market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->ext_market_price);
				
			}
			
			
			
			
			if ("ext_sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->ext_sale_price);
				
			}
			
			
			
			
			if ("vip_discount_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_discount_price);
				
			}
			
			
			
			
			if ("c_discount_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->c_discount_price);
				
			}
			
			
			
			
			if ("c_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->c_url);
				
			}
			
			
			
			
			if ("c_product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->c_product_name);
				
			}
			
			
			
			
			if ("c_mall_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->c_mall_name);
				
			}
			
			
			
			
			if ("c_store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->c_store_name);
				
			}
			
			
			
			
			if ("vip_lowest_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_lowest_price);
				
			}
			
			
			
			
			if ("same_style_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->same_style_price);
				
			}
			
			
			
			
			if ("pre_market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->pre_market_price);
				
			}
			
			
			
			
			if ("pre_sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->pre_sale_price);
				
			}
			
			
			
			
			if ("pre_bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->pre_bill_price);
				
			}
			
			
			
			
			if ("pre_brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_brand_id);
				
			}
			
			
			
			
			if ("pre_schedule_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_schedule_name);
				
			}
			
			
			
			
			if ("pre_schedule_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pre_schedule_start_time);
				
			}
			
			
			
			
			if ("pre_schedule_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pre_schedule_end_time);
				
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
		
		if($this->ext_market_price !== null) {
			
			$xfer += $output->writeFieldBegin('ext_market_price');
			$xfer += $output->writeDouble($this->ext_market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext_sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('ext_sale_price');
			$xfer += $output->writeDouble($this->ext_sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_discount_price !== null) {
			
			$xfer += $output->writeFieldBegin('vip_discount_price');
			$xfer += $output->writeDouble($this->vip_discount_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->c_discount_price !== null) {
			
			$xfer += $output->writeFieldBegin('c_discount_price');
			$xfer += $output->writeDouble($this->c_discount_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->c_url !== null) {
			
			$xfer += $output->writeFieldBegin('c_url');
			$xfer += $output->writeString($this->c_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->c_product_name !== null) {
			
			$xfer += $output->writeFieldBegin('c_product_name');
			$xfer += $output->writeString($this->c_product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->c_mall_name !== null) {
			
			$xfer += $output->writeFieldBegin('c_mall_name');
			$xfer += $output->writeString($this->c_mall_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->c_store_name !== null) {
			
			$xfer += $output->writeFieldBegin('c_store_name');
			$xfer += $output->writeString($this->c_store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_lowest_price !== null) {
			
			$xfer += $output->writeFieldBegin('vip_lowest_price');
			$xfer += $output->writeDouble($this->vip_lowest_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->same_style_price !== null) {
			
			$xfer += $output->writeFieldBegin('same_style_price');
			$xfer += $output->writeDouble($this->same_style_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_market_price !== null) {
			
			$xfer += $output->writeFieldBegin('pre_market_price');
			$xfer += $output->writeDouble($this->pre_market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('pre_sale_price');
			$xfer += $output->writeDouble($this->pre_sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_bill_price !== null) {
			
			$xfer += $output->writeFieldBegin('pre_bill_price');
			$xfer += $output->writeDouble($this->pre_bill_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('pre_brand_id');
			$xfer += $output->writeString($this->pre_brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_schedule_name !== null) {
			
			$xfer += $output->writeFieldBegin('pre_schedule_name');
			$xfer += $output->writeString($this->pre_schedule_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_schedule_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('pre_schedule_start_time');
			$xfer += $output->writeI64($this->pre_schedule_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_schedule_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('pre_schedule_end_time');
			$xfer += $output->writeI64($this->pre_schedule_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>