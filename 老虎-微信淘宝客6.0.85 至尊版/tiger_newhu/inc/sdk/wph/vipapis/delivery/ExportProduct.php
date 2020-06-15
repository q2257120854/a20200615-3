<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class ExportProduct {
	
	static $_TSPEC;
	public $order_id = null;
	public $po_no = null;
	public $barcode = null;
	public $product_name = null;
	public $art_no = null;
	public $size = null;
	public $brand_name = null;
	public $amount = null;
	public $sell_price = null;
	public $is_gift = null;
	public $unit = null;
	public $is_vip = null;
	public $product_pic = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'product_name'
			),
			5 => array(
			'var' => 'art_no'
			),
			6 => array(
			'var' => 'size'
			),
			7 => array(
			'var' => 'brand_name'
			),
			8 => array(
			'var' => 'amount'
			),
			9 => array(
			'var' => 'sell_price'
			),
			10 => array(
			'var' => 'is_gift'
			),
			11 => array(
			'var' => 'unit'
			),
			12 => array(
			'var' => 'is_vip'
			),
			13 => array(
			'var' => 'product_pic'
			),
			14 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['art_no'])){
				
				$this->art_no = $vals['art_no'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['sell_price'])){
				
				$this->sell_price = $vals['sell_price'];
			}
			
			
			if (isset($vals['is_gift'])){
				
				$this->is_gift = $vals['is_gift'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['is_vip'])){
				
				$this->is_vip = $vals['is_vip'];
			}
			
			
			if (isset($vals['product_pic'])){
				
				$this->product_pic = $vals['product_pic'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExportProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("art_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->art_no);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("sell_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_price);
				
			}
			
			
			
			
			if ("is_gift" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_gift);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("is_vip" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_vip); 
				
			}
			
			
			
			
			if ("product_pic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_pic);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->art_no !== null) {
			
			$xfer += $output->writeFieldBegin('art_no');
			$xfer += $output->writeString($this->art_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_price !== null) {
			
			$xfer += $output->writeFieldBegin('sell_price');
			$xfer += $output->writeString($this->sell_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_gift !== null) {
			
			$xfer += $output->writeFieldBegin('is_gift');
			$xfer += $output->writeString($this->is_gift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_vip !== null) {
			
			$xfer += $output->writeFieldBegin('is_vip');
			$xfer += $output->writeI32($this->is_vip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_pic !== null) {
			
			$xfer += $output->writeFieldBegin('product_pic');
			$xfer += $output->writeString($this->product_pic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>