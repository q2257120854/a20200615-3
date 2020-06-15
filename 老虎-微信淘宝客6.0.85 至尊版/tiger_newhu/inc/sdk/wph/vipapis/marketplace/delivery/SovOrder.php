<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class SovOrder {
	
	static $_TSPEC;
	public $order_id = null;
	public $status = null;
	public $sales_channel = null;
	public $transport_day = null;
	public $receiver_name = null;
	public $receiver_address = null;
	public $receiver_mobile = null;
	public $receiver_phone = null;
	public $receiver_zip = null;
	public $receiver_district = null;
	public $receiver_city = null;
	public $receiver_state = null;
	public $country_id = null;
	public $remark = null;
	public $invoice_title = null;
	public $tax_pay_no = null;
	public $invoice_amount = null;
	public $total_fee = null;
	public $post_fee = null;
	public $discount_fee = null;
	public $ex_discount_fee = null;
	public $created = null;
	public $store_add_time = null;
	public $old_order_id = null;
	public $warehouse = null;
	public $is_export = null;
	public $open_user_id = null;
	public $vipmoney = null;
	public $pay_type = null;
	public $invoice_deduct_money = null;
	public $payable_fee = null;
	public $invoice_type = null;
	public $vendor_memo = null;
	public $sales_warehouse = null;
	public $shipping_method = null;
	public $last_update_time = null;
	
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
			'var' => 'transport_day'
			),
			5 => array(
			'var' => 'receiver_name'
			),
			6 => array(
			'var' => 'receiver_address'
			),
			7 => array(
			'var' => 'receiver_mobile'
			),
			8 => array(
			'var' => 'receiver_phone'
			),
			9 => array(
			'var' => 'receiver_zip'
			),
			10 => array(
			'var' => 'receiver_district'
			),
			11 => array(
			'var' => 'receiver_city'
			),
			12 => array(
			'var' => 'receiver_state'
			),
			13 => array(
			'var' => 'country_id'
			),
			14 => array(
			'var' => 'remark'
			),
			15 => array(
			'var' => 'invoice_title'
			),
			16 => array(
			'var' => 'tax_pay_no'
			),
			17 => array(
			'var' => 'invoice_amount'
			),
			18 => array(
			'var' => 'total_fee'
			),
			19 => array(
			'var' => 'post_fee'
			),
			20 => array(
			'var' => 'discount_fee'
			),
			21 => array(
			'var' => 'ex_discount_fee'
			),
			22 => array(
			'var' => 'created'
			),
			23 => array(
			'var' => 'store_add_time'
			),
			24 => array(
			'var' => 'old_order_id'
			),
			25 => array(
			'var' => 'warehouse'
			),
			26 => array(
			'var' => 'is_export'
			),
			27 => array(
			'var' => 'open_user_id'
			),
			28 => array(
			'var' => 'vipmoney'
			),
			29 => array(
			'var' => 'pay_type'
			),
			30 => array(
			'var' => 'invoice_deduct_money'
			),
			31 => array(
			'var' => 'payable_fee'
			),
			32 => array(
			'var' => 'invoice_type'
			),
			33 => array(
			'var' => 'vendor_memo'
			),
			34 => array(
			'var' => 'sales_warehouse'
			),
			35 => array(
			'var' => 'shipping_method'
			),
			36 => array(
			'var' => 'last_update_time'
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
			
			
			if (isset($vals['receiver_district'])){
				
				$this->receiver_district = $vals['receiver_district'];
			}
			
			
			if (isset($vals['receiver_city'])){
				
				$this->receiver_city = $vals['receiver_city'];
			}
			
			
			if (isset($vals['receiver_state'])){
				
				$this->receiver_state = $vals['receiver_state'];
			}
			
			
			if (isset($vals['country_id'])){
				
				$this->country_id = $vals['country_id'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['invoice_title'])){
				
				$this->invoice_title = $vals['invoice_title'];
			}
			
			
			if (isset($vals['tax_pay_no'])){
				
				$this->tax_pay_no = $vals['tax_pay_no'];
			}
			
			
			if (isset($vals['invoice_amount'])){
				
				$this->invoice_amount = $vals['invoice_amount'];
			}
			
			
			if (isset($vals['total_fee'])){
				
				$this->total_fee = $vals['total_fee'];
			}
			
			
			if (isset($vals['post_fee'])){
				
				$this->post_fee = $vals['post_fee'];
			}
			
			
			if (isset($vals['discount_fee'])){
				
				$this->discount_fee = $vals['discount_fee'];
			}
			
			
			if (isset($vals['ex_discount_fee'])){
				
				$this->ex_discount_fee = $vals['ex_discount_fee'];
			}
			
			
			if (isset($vals['created'])){
				
				$this->created = $vals['created'];
			}
			
			
			if (isset($vals['store_add_time'])){
				
				$this->store_add_time = $vals['store_add_time'];
			}
			
			
			if (isset($vals['old_order_id'])){
				
				$this->old_order_id = $vals['old_order_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['is_export'])){
				
				$this->is_export = $vals['is_export'];
			}
			
			
			if (isset($vals['open_user_id'])){
				
				$this->open_user_id = $vals['open_user_id'];
			}
			
			
			if (isset($vals['vipmoney'])){
				
				$this->vipmoney = $vals['vipmoney'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['invoice_deduct_money'])){
				
				$this->invoice_deduct_money = $vals['invoice_deduct_money'];
			}
			
			
			if (isset($vals['payable_fee'])){
				
				$this->payable_fee = $vals['payable_fee'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['vendor_memo'])){
				
				$this->vendor_memo = $vals['vendor_memo'];
			}
			
			
			if (isset($vals['sales_warehouse'])){
				
				$this->sales_warehouse = $vals['sales_warehouse'];
			}
			
			
			if (isset($vals['shipping_method'])){
				
				$this->shipping_method = $vals['shipping_method'];
			}
			
			
			if (isset($vals['last_update_time'])){
				
				$this->last_update_time = $vals['last_update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SovOrder';
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
			
			
			
			
			if ("receiver_district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_district);
				
			}
			
			
			
			
			if ("receiver_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_city);
				
			}
			
			
			
			
			if ("receiver_state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_state);
				
			}
			
			
			
			
			if ("country_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country_id);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("invoice_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_title);
				
			}
			
			
			
			
			if ("tax_pay_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_pay_no);
				
			}
			
			
			
			
			if ("invoice_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_amount);
				
			}
			
			
			
			
			if ("total_fee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->total_fee);
				
			}
			
			
			
			
			if ("post_fee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post_fee);
				
			}
			
			
			
			
			if ("discount_fee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount_fee);
				
			}
			
			
			
			
			if ("ex_discount_fee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ex_discount_fee);
				
			}
			
			
			
			
			if ("created" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->created);
				
			}
			
			
			
			
			if ("store_add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_add_time);
				
			}
			
			
			
			
			if ("old_order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->old_order_id);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("is_export" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_export);
				
			}
			
			
			
			
			if ("open_user_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_user_id);
				
			}
			
			
			
			
			if ("vipmoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipmoney);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("invoice_deduct_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_deduct_money);
				
			}
			
			
			
			
			if ("payable_fee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payable_fee);
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
			}
			
			
			
			
			if ("vendor_memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_memo);
				
			}
			
			
			
			
			if ("sales_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_warehouse);
				
			}
			
			
			
			
			if ("shipping_method" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shipping_method); 
				
			}
			
			
			
			
			if ("last_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->last_update_time);
				
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
		
		
		if($this->receiver_district !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_district');
			$xfer += $output->writeString($this->receiver_district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_city !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_city');
			$xfer += $output->writeString($this->receiver_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_state !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_state');
			$xfer += $output->writeString($this->receiver_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country_id !== null) {
			
			$xfer += $output->writeFieldBegin('country_id');
			$xfer += $output->writeString($this->country_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_title !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_title');
			$xfer += $output->writeString($this->invoice_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_pay_no !== null) {
			
			$xfer += $output->writeFieldBegin('tax_pay_no');
			$xfer += $output->writeString($this->tax_pay_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_amount !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_amount');
			$xfer += $output->writeString($this->invoice_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_fee !== null) {
			
			$xfer += $output->writeFieldBegin('total_fee');
			$xfer += $output->writeString($this->total_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->post_fee !== null) {
			
			$xfer += $output->writeFieldBegin('post_fee');
			$xfer += $output->writeString($this->post_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_fee !== null) {
			
			$xfer += $output->writeFieldBegin('discount_fee');
			$xfer += $output->writeString($this->discount_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ex_discount_fee !== null) {
			
			$xfer += $output->writeFieldBegin('ex_discount_fee');
			$xfer += $output->writeString($this->ex_discount_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->created !== null) {
			
			$xfer += $output->writeFieldBegin('created');
			$xfer += $output->writeString($this->created);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_add_time !== null) {
			
			$xfer += $output->writeFieldBegin('store_add_time');
			$xfer += $output->writeString($this->store_add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->old_order_id !== null) {
			
			$xfer += $output->writeFieldBegin('old_order_id');
			$xfer += $output->writeString($this->old_order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_export !== null) {
			
			$xfer += $output->writeFieldBegin('is_export');
			$xfer += $output->writeString($this->is_export);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_user_id !== null) {
			
			$xfer += $output->writeFieldBegin('open_user_id');
			$xfer += $output->writeString($this->open_user_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipmoney !== null) {
			
			$xfer += $output->writeFieldBegin('vipmoney');
			$xfer += $output->writeString($this->vipmoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeString($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_deduct_money !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_deduct_money');
			$xfer += $output->writeString($this->invoice_deduct_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payable_fee !== null) {
			
			$xfer += $output->writeFieldBegin('payable_fee');
			$xfer += $output->writeString($this->payable_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeString($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_memo !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_memo');
			$xfer += $output->writeString($this->vendor_memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('sales_warehouse');
			$xfer += $output->writeString($this->sales_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipping_method !== null) {
			
			$xfer += $output->writeFieldBegin('shipping_method');
			$xfer += $output->writeI32($this->shipping_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('last_update_time');
			$xfer += $output->writeString($this->last_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>