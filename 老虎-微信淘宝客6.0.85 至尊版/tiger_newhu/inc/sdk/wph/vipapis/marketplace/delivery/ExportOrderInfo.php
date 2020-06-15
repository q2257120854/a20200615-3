<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class ExportOrderInfo {
	
	static $_TSPEC;
	public $order_id = null;
	public $status = null;
	public $sales_channel = null;
	public $created = null;
	public $update_time = null;
	public $vendor_name = null;
	public $transport_day = null;
	public $receiver_name = null;
	public $receiver_address = null;
	public $receiver_mobile = null;
	public $receiver_phone = null;
	public $receiver_zip = null;
	public $is_export = null;
	public $export_time = null;
	public $invoice_title = null;
	public $tax_no = null;
	public $invoice_amount = null;
	public $memo = null;
	public $po = null;
	public $brand_name = null;
	public $title = null;
	public $num = null;
	public $size = null;
	public $outer_spu_id = null;
	public $outer_sku_id = null;
	public $price = null;
	public $customization = null;
	public $vendor_memo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'sales_channel'
			),
			4 => array(
			'var' => 'created'
			),
			5 => array(
			'var' => 'update_time'
			),
			6 => array(
			'var' => 'vendor_name'
			),
			7 => array(
			'var' => 'transport_day'
			),
			8 => array(
			'var' => 'receiver_name'
			),
			9 => array(
			'var' => 'receiver_address'
			),
			10 => array(
			'var' => 'receiver_mobile'
			),
			11 => array(
			'var' => 'receiver_phone'
			),
			12 => array(
			'var' => 'receiver_zip'
			),
			13 => array(
			'var' => 'is_export'
			),
			14 => array(
			'var' => 'export_time'
			),
			15 => array(
			'var' => 'invoice_title'
			),
			16 => array(
			'var' => 'tax_no'
			),
			17 => array(
			'var' => 'invoice_amount'
			),
			18 => array(
			'var' => 'memo'
			),
			19 => array(
			'var' => 'po'
			),
			20 => array(
			'var' => 'brand_name'
			),
			21 => array(
			'var' => 'title'
			),
			22 => array(
			'var' => 'num'
			),
			23 => array(
			'var' => 'size'
			),
			24 => array(
			'var' => 'outer_spu_id'
			),
			25 => array(
			'var' => 'outer_sku_id'
			),
			26 => array(
			'var' => 'price'
			),
			27 => array(
			'var' => 'customization'
			),
			28 => array(
			'var' => 'vendor_memo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sales_channel'])){
				
				$this->sales_channel = $vals['sales_channel'];
			}
			
			
			if (isset($vals['created'])){
				
				$this->created = $vals['created'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['receiver_name'])){
				
				$this->receiver_name = $vals['receiver_name'];
			}
			
			
			if (isset($vals['receiver_address'])){
				
				$this->receiver_address = $vals['receiver_address'];
			}
			
			
			if (isset($vals['receiver_mobile'])){
				
				$this->receiver_mobile = $vals['receiver_mobile'];
			}
			
			
			if (isset($vals['receiver_phone'])){
				
				$this->receiver_phone = $vals['receiver_phone'];
			}
			
			
			if (isset($vals['receiver_zip'])){
				
				$this->receiver_zip = $vals['receiver_zip'];
			}
			
			
			if (isset($vals['is_export'])){
				
				$this->is_export = $vals['is_export'];
			}
			
			
			if (isset($vals['export_time'])){
				
				$this->export_time = $vals['export_time'];
			}
			
			
			if (isset($vals['invoice_title'])){
				
				$this->invoice_title = $vals['invoice_title'];
			}
			
			
			if (isset($vals['tax_no'])){
				
				$this->tax_no = $vals['tax_no'];
			}
			
			
			if (isset($vals['invoice_amount'])){
				
				$this->invoice_amount = $vals['invoice_amount'];
			}
			
			
			if (isset($vals['memo'])){
				
				$this->memo = $vals['memo'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['outer_spu_id'])){
				
				$this->outer_spu_id = $vals['outer_spu_id'];
			}
			
			
			if (isset($vals['outer_sku_id'])){
				
				$this->outer_sku_id = $vals['outer_sku_id'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['customization'])){
				
				$this->customization = $vals['customization'];
			}
			
			
			if (isset($vals['vendor_memo'])){
				
				$this->vendor_memo = $vals['vendor_memo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExportOrderInfo';
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
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("sales_channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_channel);
				
			}
			
			
			
			
			if ("created" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->created);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_day);
				
			}
			
			
			
			
			if ("receiver_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_name);
				
			}
			
			
			
			
			if ("receiver_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_address);
				
			}
			
			
			
			
			if ("receiver_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_mobile);
				
			}
			
			
			
			
			if ("receiver_phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_phone);
				
			}
			
			
			
			
			if ("receiver_zip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_zip);
				
			}
			
			
			
			
			if ("is_export" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_export);
				
			}
			
			
			
			
			if ("export_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->export_time);
				
			}
			
			
			
			
			if ("invoice_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_title);
				
			}
			
			
			
			
			if ("tax_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_no);
				
			}
			
			
			
			
			if ("invoice_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_amount);
				
			}
			
			
			
			
			if ("memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memo);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("outer_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_spu_id);
				
			}
			
			
			
			
			if ("outer_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_sku_id);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("customization" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customization);
				
			}
			
			
			
			
			if ("vendor_memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_memo);
				
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
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_channel !== null) {
			
			$xfer += $output->writeFieldBegin('sales_channel');
			$xfer += $output->writeString($this->sales_channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->created !== null) {
			
			$xfer += $output->writeFieldBegin('created');
			$xfer += $output->writeString($this->created);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_day !== null) {
			
			$xfer += $output->writeFieldBegin('transport_day');
			$xfer += $output->writeString($this->transport_day);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_name !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_name');
			$xfer += $output->writeString($this->receiver_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_address !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_address');
			$xfer += $output->writeString($this->receiver_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_mobile');
			$xfer += $output->writeString($this->receiver_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_phone !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_phone');
			$xfer += $output->writeString($this->receiver_phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_zip !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_zip');
			$xfer += $output->writeString($this->receiver_zip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_export !== null) {
			
			$xfer += $output->writeFieldBegin('is_export');
			$xfer += $output->writeString($this->is_export);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->export_time !== null) {
			
			$xfer += $output->writeFieldBegin('export_time');
			$xfer += $output->writeString($this->export_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_title !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_title');
			$xfer += $output->writeString($this->invoice_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_no !== null) {
			
			$xfer += $output->writeFieldBegin('tax_no');
			$xfer += $output->writeString($this->tax_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_amount !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_amount');
			$xfer += $output->writeString($this->invoice_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->memo !== null) {
			
			$xfer += $output->writeFieldBegin('memo');
			$xfer += $output->writeString($this->memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_spu_id');
			$xfer += $output->writeString($this->outer_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_sku_id');
			$xfer += $output->writeString($this->outer_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customization !== null) {
			
			$xfer += $output->writeFieldBegin('customization');
			$xfer += $output->writeString($this->customization);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_memo !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_memo');
			$xfer += $output->writeString($this->vendor_memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>