<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class DvdOrder {
	
	static $_TSPEC;
	public $order_id = null;
	public $order_status = null;
	public $buyer = null;
	public $address = null;
	public $mobile = null;
	public $tel = null;
	public $postcode = null;
	public $city = null;
	public $province = null;
	public $country_id = null;
	public $invoice = null;
	public $carriage = null;
	public $remark = null;
	public $transport_day = null;
	public $vendor_id = null;
	public $vendor_name = null;
	public $promo_discount_amount = null;
	public $discount_amount = null;
	public $product_money = null;
	public $add_time = null;
	public $po_no = null;
	public $country = null;
	public $vis_add_time = null;
	public $vip_order_total_amount = null;
	public $actual_payment_amount = null;
	public $invoice_amount = null;
	public $vip_card_amount = null;
	public $invoice_type = null;
	public $tax_pay_no = null;
	public $area_warehouse_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'order_status'
			),
			3 => array(
			'var' => 'buyer'
			),
			4 => array(
			'var' => 'address'
			),
			5 => array(
			'var' => 'mobile'
			),
			6 => array(
			'var' => 'tel'
			),
			7 => array(
			'var' => 'postcode'
			),
			8 => array(
			'var' => 'city'
			),
			9 => array(
			'var' => 'province'
			),
			10 => array(
			'var' => 'country_id'
			),
			11 => array(
			'var' => 'invoice'
			),
			12 => array(
			'var' => 'carriage'
			),
			13 => array(
			'var' => 'remark'
			),
			14 => array(
			'var' => 'transport_day'
			),
			15 => array(
			'var' => 'vendor_id'
			),
			16 => array(
			'var' => 'vendor_name'
			),
			17 => array(
			'var' => 'promo_discount_amount'
			),
			18 => array(
			'var' => 'discount_amount'
			),
			19 => array(
			'var' => 'product_money'
			),
			20 => array(
			'var' => 'add_time'
			),
			21 => array(
			'var' => 'po_no'
			),
			22 => array(
			'var' => 'country'
			),
			23 => array(
			'var' => 'vis_add_time'
			),
			24 => array(
			'var' => 'vip_order_total_amount'
			),
			25 => array(
			'var' => 'actual_payment_amount'
			),
			26 => array(
			'var' => 'invoice_amount'
			),
			27 => array(
			'var' => 'vip_card_amount'
			),
			28 => array(
			'var' => 'invoice_type'
			),
			29 => array(
			'var' => 'tax_pay_no'
			),
			30 => array(
			'var' => 'area_warehouse_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['country_id'])){
				
				$this->country_id = $vals['country_id'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['promo_discount_amount'])){
				
				$this->promo_discount_amount = $vals['promo_discount_amount'];
			}
			
			
			if (isset($vals['discount_amount'])){
				
				$this->discount_amount = $vals['discount_amount'];
			}
			
			
			if (isset($vals['product_money'])){
				
				$this->product_money = $vals['product_money'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['vis_add_time'])){
				
				$this->vis_add_time = $vals['vis_add_time'];
			}
			
			
			if (isset($vals['vip_order_total_amount'])){
				
				$this->vip_order_total_amount = $vals['vip_order_total_amount'];
			}
			
			
			if (isset($vals['actual_payment_amount'])){
				
				$this->actual_payment_amount = $vals['actual_payment_amount'];
			}
			
			
			if (isset($vals['invoice_amount'])){
				
				$this->invoice_amount = $vals['invoice_amount'];
			}
			
			
			if (isset($vals['vip_card_amount'])){
				
				$this->vip_card_amount = $vals['vip_card_amount'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['tax_pay_no'])){
				
				$this->tax_pay_no = $vals['tax_pay_no'];
			}
			
			
			if (isset($vals['area_warehouse_id'])){
				
				$this->area_warehouse_id = $vals['area_warehouse_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DvdOrder';
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
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("country_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country_id);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_day);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("promo_discount_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promo_discount_amount);
				
			}
			
			
			
			
			if ("discount_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount_amount);
				
			}
			
			
			
			
			if ("product_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_money);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_time);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("vis_add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vis_add_time);
				
			}
			
			
			
			
			if ("vip_order_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_order_total_amount);
				
			}
			
			
			
			
			if ("actual_payment_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_payment_amount);
				
			}
			
			
			
			
			if ("invoice_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->invoice_amount);
				
			}
			
			
			
			
			if ("vip_card_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_card_amount);
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
			}
			
			
			
			
			if ("tax_pay_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_pay_no);
				
			}
			
			
			
			
			if ("area_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_id);
				
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
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country_id !== null) {
			
			$xfer += $output->writeFieldBegin('country_id');
			$xfer += $output->writeString($this->country_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_day !== null) {
			
			$xfer += $output->writeFieldBegin('transport_day');
			$xfer += $output->writeString($this->transport_day);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promo_discount_amount !== null) {
			
			$xfer += $output->writeFieldBegin('promo_discount_amount');
			$xfer += $output->writeString($this->promo_discount_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_amount');
			$xfer += $output->writeString($this->discount_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_money !== null) {
			
			$xfer += $output->writeFieldBegin('product_money');
			$xfer += $output->writeString($this->product_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->add_time !== null) {
			
			$xfer += $output->writeFieldBegin('add_time');
			$xfer += $output->writeString($this->add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vis_add_time !== null) {
			
			$xfer += $output->writeFieldBegin('vis_add_time');
			$xfer += $output->writeString($this->vis_add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_order_total_amount !== null) {
			
			$xfer += $output->writeFieldBegin('vip_order_total_amount');
			$xfer += $output->writeDouble($this->vip_order_total_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_payment_amount !== null) {
			
			$xfer += $output->writeFieldBegin('actual_payment_amount');
			$xfer += $output->writeDouble($this->actual_payment_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_amount !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_amount');
			$xfer += $output->writeDouble($this->invoice_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_card_amount !== null) {
			
			$xfer += $output->writeFieldBegin('vip_card_amount');
			$xfer += $output->writeDouble($this->vip_card_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeString($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_pay_no !== null) {
			
			$xfer += $output->writeFieldBegin('tax_pay_no');
			$xfer += $output->writeString($this->tax_pay_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_id');
			$xfer += $output->writeString($this->area_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>