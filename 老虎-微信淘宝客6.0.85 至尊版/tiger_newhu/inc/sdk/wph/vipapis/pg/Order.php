<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class Order {
	
	static $_TSPEC;
	public $order_sn = null;
	public $goods_name = null;
	public $goods_barcode = null;
	public $cat1_name = null;
	public $warehouse_code = null;
	public $order_date = null;
	public $purchase_quantity = null;
	public $order_status = null;
	public $order_quantity = null;
	public $receive_quantity = null;
	public $arrival_time = null;
	public $stock_date = null;
	public $modified_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'goods_name'
			),
			3 => array(
			'var' => 'goods_barcode'
			),
			4 => array(
			'var' => 'cat1_name'
			),
			5 => array(
			'var' => 'warehouse_code'
			),
			6 => array(
			'var' => 'order_date'
			),
			7 => array(
			'var' => 'purchase_quantity'
			),
			8 => array(
			'var' => 'order_status'
			),
			9 => array(
			'var' => 'order_quantity'
			),
			10 => array(
			'var' => 'receive_quantity'
			),
			11 => array(
			'var' => 'arrival_time'
			),
			12 => array(
			'var' => 'stock_date'
			),
			13 => array(
			'var' => 'modified_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['goods_barcode'])){
				
				$this->goods_barcode = $vals['goods_barcode'];
			}
			
			
			if (isset($vals['cat1_name'])){
				
				$this->cat1_name = $vals['cat1_name'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['order_date'])){
				
				$this->order_date = $vals['order_date'];
			}
			
			
			if (isset($vals['purchase_quantity'])){
				
				$this->purchase_quantity = $vals['purchase_quantity'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['order_quantity'])){
				
				$this->order_quantity = $vals['order_quantity'];
			}
			
			
			if (isset($vals['receive_quantity'])){
				
				$this->receive_quantity = $vals['receive_quantity'];
			}
			
			
			if (isset($vals['arrival_time'])){
				
				$this->arrival_time = $vals['arrival_time'];
			}
			
			
			if (isset($vals['stock_date'])){
				
				$this->stock_date = $vals['stock_date'];
			}
			
			
			if (isset($vals['modified_time'])){
				
				$this->modified_time = $vals['modified_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Order';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("goods_barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_barcode);
				
			}
			
			
			
			
			if ("cat1_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat1_name);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("order_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_date);
				
			}
			
			
			
			
			if ("purchase_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchase_quantity); 
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("order_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_quantity); 
				
			}
			
			
			
			
			if ("receive_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receive_quantity);
				
			}
			
			
			
			
			if ("arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrival_time);
				
			}
			
			
			
			
			if ("stock_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stock_date);
				
			}
			
			
			
			
			if ("modified_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->modified_time);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->cat1_name !== null) {
			
			$xfer += $output->writeFieldBegin('cat1_name');
			$xfer += $output->writeString($this->cat1_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_date !== null) {
			
			$xfer += $output->writeFieldBegin('order_date');
			$xfer += $output->writeString($this->order_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_quantity');
			$xfer += $output->writeI32($this->purchase_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('order_quantity');
			$xfer += $output->writeI32($this->order_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receive_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('receive_quantity');
			$xfer += $output->writeString($this->receive_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('arrival_time');
			$xfer += $output->writeString($this->arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_date !== null) {
			
			$xfer += $output->writeFieldBegin('stock_date');
			$xfer += $output->writeString($this->stock_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modified_time !== null) {
			
			$xfer += $output->writeFieldBegin('modified_time');
			$xfer += $output->writeString($this->modified_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>