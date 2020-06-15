<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class DvdOrderDetail {
	
	static $_TSPEC;
	public $brand_name = null;
	public $product_name = null;
	public $size = null;
	public $art_no = null;
	public $barcode = null;
	public $amount = null;
	public $sell_price = null;
	public $order_id = null;
	public $fetch_address = null;
	public $customized_info = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brand_name'
			),
			2 => array(
			'var' => 'product_name'
			),
			3 => array(
			'var' => 'size'
			),
			4 => array(
			'var' => 'art_no'
			),
			5 => array(
			'var' => 'barcode'
			),
			6 => array(
			'var' => 'amount'
			),
			7 => array(
			'var' => 'sell_price'
			),
			8 => array(
			'var' => 'order_id'
			),
			9 => array(
			'var' => 'fetch_address'
			),
			10 => array(
			'var' => 'customized_info'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['art_no'])){
				
				$this->art_no = $vals['art_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['sell_price'])){
				
				$this->sell_price = $vals['sell_price'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['fetch_address'])){
				
				$this->fetch_address = $vals['fetch_address'];
			}
			
			
			if (isset($vals['customized_info'])){
				
				$this->customized_info = $vals['customized_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DvdOrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("art_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->art_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("sell_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sell_price);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("fetch_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fetch_address);
				
			}
			
			
			
			
			if ("customized_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customized_info);
				
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
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->art_no !== null) {
			
			$xfer += $output->writeFieldBegin('art_no');
			$xfer += $output->writeString($this->art_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_price !== null) {
			
			$xfer += $output->writeFieldBegin('sell_price');
			$xfer += $output->writeDouble($this->sell_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fetch_address !== null) {
			
			$xfer += $output->writeFieldBegin('fetch_address');
			$xfer += $output->writeString($this->fetch_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customized_info !== null) {
			
			$xfer += $output->writeFieldBegin('customized_info');
			$xfer += $output->writeString($this->customized_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>