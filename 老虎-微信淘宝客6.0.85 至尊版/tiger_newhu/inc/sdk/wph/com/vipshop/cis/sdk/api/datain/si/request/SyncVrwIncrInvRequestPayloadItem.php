<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vipshop\cis\sdk\api\datain\si\request;

class SyncVrwIncrInvRequestPayloadItem {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $warehouse_code = null;
	public $vendor_code = null;
	public $item_code = null;
	public $company_code = null;
	public $po_no = null;
	public $type = null;
	public $quantity = null;
	public $action_type = null;
	public $action_time = null;
	public $system = null;
	public $order_sn = null;
	public $brand_name = null;
	public $product_name = null;
	public $vendor_item = null;
	public $brand_id = null;
	public $grade = null;
	public $status = null;
	public $expiration_date = null;
	public $manufacture_date = null;
	public $cntry_of_orgn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			3 => array(
			'var' => 'warehouse_code'
			),
			5 => array(
			'var' => 'vendor_code'
			),
			7 => array(
			'var' => 'item_code'
			),
			9 => array(
			'var' => 'company_code'
			),
			11 => array(
			'var' => 'po_no'
			),
			13 => array(
			'var' => 'type'
			),
			15 => array(
			'var' => 'quantity'
			),
			17 => array(
			'var' => 'action_type'
			),
			19 => array(
			'var' => 'action_time'
			),
			21 => array(
			'var' => 'system'
			),
			23 => array(
			'var' => 'order_sn'
			),
			25 => array(
			'var' => 'brand_name'
			),
			27 => array(
			'var' => 'product_name'
			),
			29 => array(
			'var' => 'vendor_item'
			),
			31 => array(
			'var' => 'brand_id'
			),
			33 => array(
			'var' => 'grade'
			),
			35 => array(
			'var' => 'status'
			),
			37 => array(
			'var' => 'expiration_date'
			),
			39 => array(
			'var' => 'manufacture_date'
			),
			41 => array(
			'var' => 'cntry_of_orgn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['action_type'])){
				
				$this->action_type = $vals['action_type'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
			if (isset($vals['system'])){
				
				$this->system = $vals['system'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['vendor_item'])){
				
				$this->vendor_item = $vals['vendor_item'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['expiration_date'])){
				
				$this->expiration_date = $vals['expiration_date'];
			}
			
			
			if (isset($vals['manufacture_date'])){
				
				$this->manufacture_date = $vals['manufacture_date'];
			}
			
			
			if (isset($vals['cntry_of_orgn'])){
				
				$this->cntry_of_orgn = $vals['cntry_of_orgn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncVrwIncrInvRequestPayloadItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("action_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_type);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->action_time); 
				
			}
			
			
			
			
			if ("system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->system);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("vendor_item" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_item);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("expiration_date" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expiration_date); 
				
			}
			
			
			
			
			if ("manufacture_date" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->manufacture_date); 
				
			}
			
			
			
			
			if ("cntry_of_orgn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cntry_of_orgn);
				
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		$xfer += $output->writeString($this->warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_code');
		$xfer += $output->writeString($this->item_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('company_code');
		$xfer += $output->writeString($this->company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('action_type');
		$xfer += $output->writeString($this->action_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('action_time');
		$xfer += $output->writeI64($this->action_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('system');
		$xfer += $output->writeString($this->system);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->vendor_item !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_item');
			$xfer += $output->writeString($this->vendor_item);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeString($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('grade');
		$xfer += $output->writeString($this->grade);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->expiration_date !== null) {
			
			$xfer += $output->writeFieldBegin('expiration_date');
			$xfer += $output->writeI64($this->expiration_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->manufacture_date !== null) {
			
			$xfer += $output->writeFieldBegin('manufacture_date');
			$xfer += $output->writeI64($this->manufacture_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cntry_of_orgn !== null) {
			
			$xfer += $output->writeFieldBegin('cntry_of_orgn');
			$xfer += $output->writeString($this->cntry_of_orgn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>