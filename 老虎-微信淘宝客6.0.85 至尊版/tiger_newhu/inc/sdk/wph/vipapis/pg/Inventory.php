<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\pg;

class Inventory {
	
	static $_TSPEC;
	public $goods_name = null;
	public $goods_barcode = null;
	public $cat1_name = null;
	public $stock_quantity = null;
	public $stock_day = null;
	public $warehouse_code = null;
	public $vendor_name = null;
	public $day_sale_average_one_week = null;
	public $day_sale_average_two_week = null;
	public $day_sale_average_four_week = null;
	public $stock_date = null;
	public $stock_age = null;
	public $po = null;
	public $stock_type = null;
	public $dt_date = null;
	
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
			'var' => 'cat1_name'
			),
			4 => array(
			'var' => 'stock_quantity'
			),
			5 => array(
			'var' => 'stock_day'
			),
			6 => array(
			'var' => 'warehouse_code'
			),
			7 => array(
			'var' => 'vendor_name'
			),
			8 => array(
			'var' => 'day_sale_average_one_week'
			),
			9 => array(
			'var' => 'day_sale_average_two_week'
			),
			10 => array(
			'var' => 'day_sale_average_four_week'
			),
			11 => array(
			'var' => 'stock_date'
			),
			12 => array(
			'var' => 'stock_age'
			),
			13 => array(
			'var' => 'po'
			),
			14 => array(
			'var' => 'stock_type'
			),
			15 => array(
			'var' => 'dt_date'
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
			
			
			if (isset($vals['cat1_name'])){
				
				$this->cat1_name = $vals['cat1_name'];
			}
			
			
			if (isset($vals['stock_quantity'])){
				
				$this->stock_quantity = $vals['stock_quantity'];
			}
			
			
			if (isset($vals['stock_day'])){
				
				$this->stock_day = $vals['stock_day'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['day_sale_average_one_week'])){
				
				$this->day_sale_average_one_week = $vals['day_sale_average_one_week'];
			}
			
			
			if (isset($vals['day_sale_average_two_week'])){
				
				$this->day_sale_average_two_week = $vals['day_sale_average_two_week'];
			}
			
			
			if (isset($vals['day_sale_average_four_week'])){
				
				$this->day_sale_average_four_week = $vals['day_sale_average_four_week'];
			}
			
			
			if (isset($vals['stock_date'])){
				
				$this->stock_date = $vals['stock_date'];
			}
			
			
			if (isset($vals['stock_age'])){
				
				$this->stock_age = $vals['stock_age'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['stock_type'])){
				
				$this->stock_type = $vals['stock_type'];
			}
			
			
			if (isset($vals['dt_date'])){
				
				$this->dt_date = $vals['dt_date'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Inventory';
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
			
			
			
			
			if ("cat1_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cat1_name);
				
			}
			
			
			
			
			if ("stock_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock_quantity); 
				
			}
			
			
			
			
			if ("stock_day" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock_day); 
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("day_sale_average_one_week" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->day_sale_average_one_week);
				
			}
			
			
			
			
			if ("day_sale_average_two_week" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->day_sale_average_two_week);
				
			}
			
			
			
			
			if ("day_sale_average_four_week" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->day_sale_average_four_week);
				
			}
			
			
			
			
			if ("stock_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stock_date);
				
			}
			
			
			
			
			if ("stock_age" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock_age); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("stock_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stock_type);
				
			}
			
			
			
			
			if ("dt_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dt_date);
				
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
		
		
		if($this->cat1_name !== null) {
			
			$xfer += $output->writeFieldBegin('cat1_name');
			$xfer += $output->writeString($this->cat1_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('stock_quantity');
			$xfer += $output->writeI32($this->stock_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_day !== null) {
			
			$xfer += $output->writeFieldBegin('stock_day');
			$xfer += $output->writeI32($this->stock_day);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->day_sale_average_one_week !== null) {
			
			$xfer += $output->writeFieldBegin('day_sale_average_one_week');
			$xfer += $output->writeDouble($this->day_sale_average_one_week);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->day_sale_average_two_week !== null) {
			
			$xfer += $output->writeFieldBegin('day_sale_average_two_week');
			$xfer += $output->writeDouble($this->day_sale_average_two_week);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->day_sale_average_four_week !== null) {
			
			$xfer += $output->writeFieldBegin('day_sale_average_four_week');
			$xfer += $output->writeDouble($this->day_sale_average_four_week);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_date !== null) {
			
			$xfer += $output->writeFieldBegin('stock_date');
			$xfer += $output->writeString($this->stock_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_age !== null) {
			
			$xfer += $output->writeFieldBegin('stock_age');
			$xfer += $output->writeI32($this->stock_age);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock_type !== null) {
			
			$xfer += $output->writeFieldBegin('stock_type');
			$xfer += $output->writeString($this->stock_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dt_date !== null) {
			
			$xfer += $output->writeFieldBegin('dt_date');
			$xfer += $output->writeString($this->dt_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>