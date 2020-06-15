<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class ChannelInventoryItemInfo {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $warehouse_code = null;
	public $channel = null;
	public $vendor_item = null;
	public $item_code = null;
	public $item_name = null;
	public $brand_code = null;
	public $brand_name = null;
	public $first_categoryid = null;
	public $second_categoryid = null;
	public $third_categoryid = null;
	public $grade = null;
	public $status = null;
	public $sales_plan_no = null;
	public $ordered_qty = null;
	public $frozen_qty = null;
	public $return_held_qty = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_code'
			),
			2 => array(
			'var' => 'warehouse_code'
			),
			3 => array(
			'var' => 'channel'
			),
			4 => array(
			'var' => 'vendor_item'
			),
			5 => array(
			'var' => 'item_code'
			),
			6 => array(
			'var' => 'item_name'
			),
			7 => array(
			'var' => 'brand_code'
			),
			8 => array(
			'var' => 'brand_name'
			),
			9 => array(
			'var' => 'first_categoryid'
			),
			10 => array(
			'var' => 'second_categoryid'
			),
			11 => array(
			'var' => 'third_categoryid'
			),
			12 => array(
			'var' => 'grade'
			),
			13 => array(
			'var' => 'status'
			),
			14 => array(
			'var' => 'sales_plan_no'
			),
			15 => array(
			'var' => 'ordered_qty'
			),
			16 => array(
			'var' => 'frozen_qty'
			),
			17 => array(
			'var' => 'return_held_qty'
			),
			18 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['vendor_item'])){
				
				$this->vendor_item = $vals['vendor_item'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['item_name'])){
				
				$this->item_name = $vals['item_name'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['first_categoryid'])){
				
				$this->first_categoryid = $vals['first_categoryid'];
			}
			
			
			if (isset($vals['second_categoryid'])){
				
				$this->second_categoryid = $vals['second_categoryid'];
			}
			
			
			if (isset($vals['third_categoryid'])){
				
				$this->third_categoryid = $vals['third_categoryid'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sales_plan_no'])){
				
				$this->sales_plan_no = $vals['sales_plan_no'];
			}
			
			
			if (isset($vals['ordered_qty'])){
				
				$this->ordered_qty = $vals['ordered_qty'];
			}
			
			
			if (isset($vals['frozen_qty'])){
				
				$this->frozen_qty = $vals['frozen_qty'];
			}
			
			
			if (isset($vals['return_held_qty'])){
				
				$this->return_held_qty = $vals['return_held_qty'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelInventoryItemInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("vendor_item" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_item);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("item_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_name);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("first_categoryid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->first_categoryid);
				
			}
			
			
			
			
			if ("second_categoryid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->second_categoryid);
				
			}
			
			
			
			
			if ("third_categoryid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_categoryid);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("sales_plan_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_plan_no);
				
			}
			
			
			
			
			if ("ordered_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->ordered_qty); 
				
			}
			
			
			
			
			if ("frozen_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->frozen_qty); 
				
			}
			
			
			
			
			if ("return_held_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_held_qty); 
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
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
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_item !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_item');
			$xfer += $output->writeString($this->vendor_item);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_name !== null) {
			
			$xfer += $output->writeFieldBegin('item_name');
			$xfer += $output->writeString($this->item_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_code !== null) {
			
			$xfer += $output->writeFieldBegin('brand_code');
			$xfer += $output->writeString($this->brand_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->first_categoryid !== null) {
			
			$xfer += $output->writeFieldBegin('first_categoryid');
			$xfer += $output->writeString($this->first_categoryid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->second_categoryid !== null) {
			
			$xfer += $output->writeFieldBegin('second_categoryid');
			$xfer += $output->writeString($this->second_categoryid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_categoryid !== null) {
			
			$xfer += $output->writeFieldBegin('third_categoryid');
			$xfer += $output->writeString($this->third_categoryid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grade !== null) {
			
			$xfer += $output->writeFieldBegin('grade');
			$xfer += $output->writeString($this->grade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_plan_no !== null) {
			
			$xfer += $output->writeFieldBegin('sales_plan_no');
			$xfer += $output->writeString($this->sales_plan_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ordered_qty !== null) {
			
			$xfer += $output->writeFieldBegin('ordered_qty');
			$xfer += $output->writeI32($this->ordered_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frozen_qty !== null) {
			
			$xfer += $output->writeFieldBegin('frozen_qty');
			$xfer += $output->writeI32($this->frozen_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_held_qty !== null) {
			
			$xfer += $output->writeFieldBegin('return_held_qty');
			$xfer += $output->writeI32($this->return_held_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>