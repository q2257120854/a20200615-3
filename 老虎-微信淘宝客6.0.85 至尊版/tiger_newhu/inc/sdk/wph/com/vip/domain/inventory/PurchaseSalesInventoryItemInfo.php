<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class PurchaseSalesInventoryItemInfo {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $warehouse_code = null;
	public $po_no = null;
	public $item_code = null;
	public $item_name = null;
	public $brand_code = null;
	public $brand_name = null;
	public $pay_category = null;
	public $inventory_date = null;
	public $beginning_inventory_quantity = null;
	public $inventory_in_quantity = null;
	public $inventory_out_quantity = null;
	public $return_to_vendor_qunatity = null;
	public $allocated_inventory_in_qunatity = null;
	public $allocated_inventory_out_qunatity = null;
	public $inventory_profit_quantity = null;
	public $inventory_losses_quantity = null;
	public $return_from_customer_received_quantity = null;
	public $subscribed_quantity = null;
	public $quality_inventory_quantity = null;
	public $defective_inventory_quantity = null;
	public $ending_inventory_quantity = null;
	
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
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'item_code'
			),
			5 => array(
			'var' => 'item_name'
			),
			6 => array(
			'var' => 'brand_code'
			),
			7 => array(
			'var' => 'brand_name'
			),
			8 => array(
			'var' => 'pay_category'
			),
			9 => array(
			'var' => 'inventory_date'
			),
			10 => array(
			'var' => 'beginning_inventory_quantity'
			),
			11 => array(
			'var' => 'inventory_in_quantity'
			),
			12 => array(
			'var' => 'inventory_out_quantity'
			),
			13 => array(
			'var' => 'return_to_vendor_qunatity'
			),
			14 => array(
			'var' => 'allocated_inventory_in_qunatity'
			),
			15 => array(
			'var' => 'allocated_inventory_out_qunatity'
			),
			16 => array(
			'var' => 'inventory_profit_quantity'
			),
			17 => array(
			'var' => 'inventory_losses_quantity'
			),
			18 => array(
			'var' => 'return_from_customer_received_quantity'
			),
			19 => array(
			'var' => 'subscribed_quantity'
			),
			20 => array(
			'var' => 'quality_inventory_quantity'
			),
			21 => array(
			'var' => 'defective_inventory_quantity'
			),
			22 => array(
			'var' => 'ending_inventory_quantity'
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
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
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
			
			
			if (isset($vals['pay_category'])){
				
				$this->pay_category = $vals['pay_category'];
			}
			
			
			if (isset($vals['inventory_date'])){
				
				$this->inventory_date = $vals['inventory_date'];
			}
			
			
			if (isset($vals['beginning_inventory_quantity'])){
				
				$this->beginning_inventory_quantity = $vals['beginning_inventory_quantity'];
			}
			
			
			if (isset($vals['inventory_in_quantity'])){
				
				$this->inventory_in_quantity = $vals['inventory_in_quantity'];
			}
			
			
			if (isset($vals['inventory_out_quantity'])){
				
				$this->inventory_out_quantity = $vals['inventory_out_quantity'];
			}
			
			
			if (isset($vals['return_to_vendor_qunatity'])){
				
				$this->return_to_vendor_qunatity = $vals['return_to_vendor_qunatity'];
			}
			
			
			if (isset($vals['allocated_inventory_in_qunatity'])){
				
				$this->allocated_inventory_in_qunatity = $vals['allocated_inventory_in_qunatity'];
			}
			
			
			if (isset($vals['allocated_inventory_out_qunatity'])){
				
				$this->allocated_inventory_out_qunatity = $vals['allocated_inventory_out_qunatity'];
			}
			
			
			if (isset($vals['inventory_profit_quantity'])){
				
				$this->inventory_profit_quantity = $vals['inventory_profit_quantity'];
			}
			
			
			if (isset($vals['inventory_losses_quantity'])){
				
				$this->inventory_losses_quantity = $vals['inventory_losses_quantity'];
			}
			
			
			if (isset($vals['return_from_customer_received_quantity'])){
				
				$this->return_from_customer_received_quantity = $vals['return_from_customer_received_quantity'];
			}
			
			
			if (isset($vals['subscribed_quantity'])){
				
				$this->subscribed_quantity = $vals['subscribed_quantity'];
			}
			
			
			if (isset($vals['quality_inventory_quantity'])){
				
				$this->quality_inventory_quantity = $vals['quality_inventory_quantity'];
			}
			
			
			if (isset($vals['defective_inventory_quantity'])){
				
				$this->defective_inventory_quantity = $vals['defective_inventory_quantity'];
			}
			
			
			if (isset($vals['ending_inventory_quantity'])){
				
				$this->ending_inventory_quantity = $vals['ending_inventory_quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseSalesInventoryItemInfo';
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
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
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
			
			
			
			
			if ("pay_category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_category);
				
			}
			
			
			
			
			if ("inventory_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inventory_date);
				
			}
			
			
			
			
			if ("beginning_inventory_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->beginning_inventory_quantity); 
				
			}
			
			
			
			
			if ("inventory_in_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_in_quantity); 
				
			}
			
			
			
			
			if ("inventory_out_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_out_quantity); 
				
			}
			
			
			
			
			if ("return_to_vendor_qunatity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_to_vendor_qunatity); 
				
			}
			
			
			
			
			if ("allocated_inventory_in_qunatity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->allocated_inventory_in_qunatity); 
				
			}
			
			
			
			
			if ("allocated_inventory_out_qunatity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->allocated_inventory_out_qunatity); 
				
			}
			
			
			
			
			if ("inventory_profit_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_profit_quantity); 
				
			}
			
			
			
			
			if ("inventory_losses_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_losses_quantity); 
				
			}
			
			
			
			
			if ("return_from_customer_received_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_from_customer_received_quantity); 
				
			}
			
			
			
			
			if ("subscribed_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->subscribed_quantity); 
				
			}
			
			
			
			
			if ("quality_inventory_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quality_inventory_quantity); 
				
			}
			
			
			
			
			if ("defective_inventory_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->defective_inventory_quantity); 
				
			}
			
			
			
			
			if ("ending_inventory_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->ending_inventory_quantity); 
				
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
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
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
		
		
		if($this->pay_category !== null) {
			
			$xfer += $output->writeFieldBegin('pay_category');
			$xfer += $output->writeString($this->pay_category);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventory_date !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_date');
			$xfer += $output->writeString($this->inventory_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginning_inventory_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('beginning_inventory_quantity');
			$xfer += $output->writeI32($this->beginning_inventory_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventory_in_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_in_quantity');
			$xfer += $output->writeI32($this->inventory_in_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventory_out_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_out_quantity');
			$xfer += $output->writeI32($this->inventory_out_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_to_vendor_qunatity !== null) {
			
			$xfer += $output->writeFieldBegin('return_to_vendor_qunatity');
			$xfer += $output->writeI32($this->return_to_vendor_qunatity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocated_inventory_in_qunatity !== null) {
			
			$xfer += $output->writeFieldBegin('allocated_inventory_in_qunatity');
			$xfer += $output->writeI32($this->allocated_inventory_in_qunatity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocated_inventory_out_qunatity !== null) {
			
			$xfer += $output->writeFieldBegin('allocated_inventory_out_qunatity');
			$xfer += $output->writeI32($this->allocated_inventory_out_qunatity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventory_profit_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_profit_quantity');
			$xfer += $output->writeI32($this->inventory_profit_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventory_losses_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_losses_quantity');
			$xfer += $output->writeI32($this->inventory_losses_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_from_customer_received_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('return_from_customer_received_quantity');
			$xfer += $output->writeI32($this->return_from_customer_received_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subscribed_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('subscribed_quantity');
			$xfer += $output->writeI32($this->subscribed_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quality_inventory_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quality_inventory_quantity');
			$xfer += $output->writeI32($this->quality_inventory_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defective_inventory_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('defective_inventory_quantity');
			$xfer += $output->writeI32($this->defective_inventory_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ending_inventory_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('ending_inventory_quantity');
			$xfer += $output->writeI32($this->ending_inventory_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>