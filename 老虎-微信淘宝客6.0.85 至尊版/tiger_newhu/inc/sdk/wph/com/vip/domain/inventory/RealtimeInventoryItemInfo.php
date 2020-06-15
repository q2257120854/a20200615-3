<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class RealtimeInventoryItemInfo {
	
	static $_TSPEC;
	public $vendor_code = null;
	public $warehouse_code = null;
	public $po_no = null;
	public $item_code = null;
	public $item_name = null;
	public $brand_code = null;
	public $brand_name = null;
	public $inventory_location_parameter = null;
	public $commodity_parameter = null;
	public $vendor_item = null;
	public $quantity = null;
	public $occupancy_quantity = null;
	public $allocated_qunatity = null;
	public $available_quantity = null;
	public $vip3pl_qty = null;
	
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
			'var' => 'inventory_location_parameter'
			),
			9 => array(
			'var' => 'commodity_parameter'
			),
			10 => array(
			'var' => 'vendor_item'
			),
			11 => array(
			'var' => 'quantity'
			),
			12 => array(
			'var' => 'occupancy_quantity'
			),
			13 => array(
			'var' => 'allocated_qunatity'
			),
			14 => array(
			'var' => 'available_quantity'
			),
			15 => array(
			'var' => 'vip3pl_qty'
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
			
			
			if (isset($vals['inventory_location_parameter'])){
				
				$this->inventory_location_parameter = $vals['inventory_location_parameter'];
			}
			
			
			if (isset($vals['commodity_parameter'])){
				
				$this->commodity_parameter = $vals['commodity_parameter'];
			}
			
			
			if (isset($vals['vendor_item'])){
				
				$this->vendor_item = $vals['vendor_item'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['occupancy_quantity'])){
				
				$this->occupancy_quantity = $vals['occupancy_quantity'];
			}
			
			
			if (isset($vals['allocated_qunatity'])){
				
				$this->allocated_qunatity = $vals['allocated_qunatity'];
			}
			
			
			if (isset($vals['available_quantity'])){
				
				$this->available_quantity = $vals['available_quantity'];
			}
			
			
			if (isset($vals['vip3pl_qty'])){
				
				$this->vip3pl_qty = $vals['vip3pl_qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RealtimeInventoryItemInfo';
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
			
			
			
			
			if ("inventory_location_parameter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inventory_location_parameter);
				
			}
			
			
			
			
			if ("commodity_parameter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodity_parameter);
				
			}
			
			
			
			
			if ("vendor_item" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_item);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("occupancy_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->occupancy_quantity); 
				
			}
			
			
			
			
			if ("allocated_qunatity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->allocated_qunatity); 
				
			}
			
			
			
			
			if ("available_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->available_quantity); 
				
			}
			
			
			
			
			if ("vip3pl_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vip3pl_qty); 
				
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
		
		
		if($this->inventory_location_parameter !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_location_parameter');
			$xfer += $output->writeString($this->inventory_location_parameter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodity_parameter !== null) {
			
			$xfer += $output->writeFieldBegin('commodity_parameter');
			$xfer += $output->writeString($this->commodity_parameter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_item !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_item');
			$xfer += $output->writeString($this->vendor_item);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->occupancy_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('occupancy_quantity');
			$xfer += $output->writeI32($this->occupancy_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocated_qunatity !== null) {
			
			$xfer += $output->writeFieldBegin('allocated_qunatity');
			$xfer += $output->writeI32($this->allocated_qunatity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->available_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('available_quantity');
			$xfer += $output->writeI32($this->available_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip3pl_qty !== null) {
			
			$xfer += $output->writeFieldBegin('vip3pl_qty');
			$xfer += $output->writeI32($this->vip3pl_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>