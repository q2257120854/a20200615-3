<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class AscProduct {
	
	static $_TSPEC;
	public $asc_product_id = null;
	public $sku_id = null;
	public $good_name = null;
	public $quantity = null;
	public $goods_fav = null;
	public $price = null;
	public $return_reason = null;
	public $unit = null;
	public $asc_product_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'asc_product_id'
			),
			2 => array(
			'var' => 'sku_id'
			),
			3 => array(
			'var' => 'good_name'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'goods_fav'
			),
			6 => array(
			'var' => 'price'
			),
			7 => array(
			'var' => 'return_reason'
			),
			8 => array(
			'var' => 'unit'
			),
			9 => array(
			'var' => 'asc_product_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['asc_product_id'])){
				
				$this->asc_product_id = $vals['asc_product_id'];
			}
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['good_name'])){
				
				$this->good_name = $vals['good_name'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['goods_fav'])){
				
				$this->goods_fav = $vals['goods_fav'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['return_reason'])){
				
				$this->return_reason = $vals['return_reason'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['asc_product_status'])){
				
				$this->asc_product_status = $vals['asc_product_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AscProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("asc_product_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_product_id);
				
			}
			
			
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku_id);
				
			}
			
			
			
			
			if ("good_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->good_name);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("goods_fav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goods_fav);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("return_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_reason);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("asc_product_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_product_status);
				
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
		
		$xfer += $output->writeFieldBegin('asc_product_id');
		$xfer += $output->writeString($this->asc_product_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeString($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->good_name !== null) {
			
			$xfer += $output->writeFieldBegin('good_name');
			$xfer += $output->writeString($this->good_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_fav !== null) {
			
			$xfer += $output->writeFieldBegin('goods_fav');
			$xfer += $output->writeDouble($this->goods_fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeDouble($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_reason !== null) {
			
			$xfer += $output->writeFieldBegin('return_reason');
			$xfer += $output->writeString($this->return_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_product_status !== null) {
			
			$xfer += $output->writeFieldBegin('asc_product_status');
			$xfer += $output->writeString($this->asc_product_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>