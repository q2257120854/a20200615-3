<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class Product {
	
	static $_TSPEC;
	public $goods_name = null;
	public $goods_barcode = null;
	public $under_goods_barcode = null;
	public $under_goods_name = null;
	public $under_goods_quantity = null;
	public $goods_no = null;
	public $cat1_name = null;
	public $purchase_status = null;
	public $page_sale_price = null;
	public $page_url = null;
	public $goods_image_1 = null;
	public $goods_image_2 = null;
	public $goods_image_3 = null;
	public $goods_image_4 = null;
	public $goods_image_5 = null;
	public $goods_image_6 = null;
	public $brand_name = null;
	public $put_shelves_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goods_name'
			),
			2 => array(
			'var' => 'goods_barcode'
			),
			3 => array(
			'var' => 'under_goods_barcode'
			),
			4 => array(
			'var' => 'under_goods_name'
			),
			5 => array(
			'var' => 'under_goods_quantity'
			),
			6 => array(
			'var' => 'goods_no'
			),
			7 => array(
			'var' => 'cat1_name'
			),
			8 => array(
			'var' => 'purchase_status'
			),
			9 => array(
			'var' => 'page_sale_price'
			),
			10 => array(
			'var' => 'page_url'
			),
			11 => array(
			'var' => 'goods_image_1'
			),
			12 => array(
			'var' => 'goods_image_2'
			),
			13 => array(
			'var' => 'goods_image_3'
			),
			14 => array(
			'var' => 'goods_image_4'
			),
			15 => array(
			'var' => 'goods_image_5'
			),
			16 => array(
			'var' => 'goods_image_6'
			),
			17 => array(
			'var' => 'brand_name'
			),
			18 => array(
			'var' => 'put_shelves_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['goods_barcode'])){
				
				$this->goods_barcode = $vals['goods_barcode'];
			}
			
			
			if (isset($vals['under_goods_barcode'])){
				
				$this->under_goods_barcode = $vals['under_goods_barcode'];
			}
			
			
			if (isset($vals['under_goods_name'])){
				
				$this->under_goods_name = $vals['under_goods_name'];
			}
			
			
			if (isset($vals['under_goods_quantity'])){
				
				$this->under_goods_quantity = $vals['under_goods_quantity'];
			}
			
			
			if (isset($vals['goods_no'])){
				
				$this->goods_no = $vals['goods_no'];
			}
			
			
			if (isset($vals['cat1_name'])){
				
				$this->cat1_name = $vals['cat1_name'];
			}
			
			
			if (isset($vals['purchase_status'])){
				
				$this->purchase_status = $vals['purchase_status'];
			}
			
			
			if (isset($vals['page_sale_price'])){
				
				$this->page_sale_price = $vals['page_sale_price'];
			}
			
			
			if (isset($vals['page_url'])){
				
				$this->page_url = $vals['page_url'];
			}
			
			
			if (isset($vals['goods_image_1'])){
				
				$this->goods_image_1 = $vals['goods_image_1'];
			}
			
			
			if (isset($vals['goods_image_2'])){
				
				$this->goods_image_2 = $vals['goods_image_2'];
			}
			
			
			if (isset($vals['goods_image_3'])){
				
				$this->goods_image_3 = $vals['goods_image_3'];
			}
			
			
			if (isset($vals['goods_image_4'])){
				
				$this->goods_image_4 = $vals['goods_image_4'];
			}
			
			
			if (isset($vals['goods_image_5'])){
				
				$this->goods_image_5 = $vals['goods_image_5'];
			}
			
			
			if (isset($vals['goods_image_6'])){
				
				$this->goods_image_6 = $vals['goods_image_6'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['put_shelves_time'])){
				
				$this->put_shelves_time = $vals['put_shelves_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Product';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("goods_barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_barcode);
				
			}
			
			
			
			
			if ("under_goods_barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->under_goods_barcode);
				
			}
			
			
			
			
			if ("under_goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->under_goods_name);
				
			}
			
			
			
			
			if ("under_goods_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->under_goods_quantity); 
				
			}
			
			
			
			
			if ("goods_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_no);
				
			}
			
			
			
			
			if ("cat1_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat1_name);
				
			}
			
			
			
			
			if ("purchase_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_status);
				
			}
			
			
			
			
			if ("page_sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->page_sale_price);
				
			}
			
			
			
			
			if ("page_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->page_url);
				
			}
			
			
			
			
			if ("goods_image_1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_image_1);
				
			}
			
			
			
			
			if ("goods_image_2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_image_2);
				
			}
			
			
			
			
			if ("goods_image_3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_image_3);
				
			}
			
			
			
			
			if ("goods_image_4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_image_4);
				
			}
			
			
			
			
			if ("goods_image_5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_image_5);
				
			}
			
			
			
			
			if ("goods_image_6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_image_6);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("put_shelves_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->put_shelves_time);
				
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
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_barcode !== null) {
			
			$xfer += $output->writeFieldBegin('goods_barcode');
			$xfer += $output->writeString($this->goods_barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->under_goods_barcode !== null) {
			
			$xfer += $output->writeFieldBegin('under_goods_barcode');
			$xfer += $output->writeString($this->under_goods_barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->under_goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('under_goods_name');
			$xfer += $output->writeString($this->under_goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->under_goods_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('under_goods_quantity');
			$xfer += $output->writeI32($this->under_goods_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_no !== null) {
			
			$xfer += $output->writeFieldBegin('goods_no');
			$xfer += $output->writeString($this->goods_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat1_name !== null) {
			
			$xfer += $output->writeFieldBegin('cat1_name');
			$xfer += $output->writeString($this->cat1_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_status !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_status');
			$xfer += $output->writeString($this->purchase_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('page_sale_price');
			$xfer += $output->writeDouble($this->page_sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_url !== null) {
			
			$xfer += $output->writeFieldBegin('page_url');
			$xfer += $output->writeString($this->page_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_image_1 !== null) {
			
			$xfer += $output->writeFieldBegin('goods_image_1');
			$xfer += $output->writeString($this->goods_image_1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_image_2 !== null) {
			
			$xfer += $output->writeFieldBegin('goods_image_2');
			$xfer += $output->writeString($this->goods_image_2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_image_3 !== null) {
			
			$xfer += $output->writeFieldBegin('goods_image_3');
			$xfer += $output->writeString($this->goods_image_3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_image_4 !== null) {
			
			$xfer += $output->writeFieldBegin('goods_image_4');
			$xfer += $output->writeString($this->goods_image_4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_image_5 !== null) {
			
			$xfer += $output->writeFieldBegin('goods_image_5');
			$xfer += $output->writeString($this->goods_image_5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_image_6 !== null) {
			
			$xfer += $output->writeFieldBegin('goods_image_6');
			$xfer += $output->writeString($this->goods_image_6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->put_shelves_time !== null) {
			
			$xfer += $output->writeFieldBegin('put_shelves_time');
			$xfer += $output->writeString($this->put_shelves_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>