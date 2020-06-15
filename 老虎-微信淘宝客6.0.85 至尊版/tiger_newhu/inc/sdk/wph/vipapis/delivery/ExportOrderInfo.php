<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class ExportOrderInfo {
	
	static $_TSPEC;
	public $order_id = null;
	public $order_status = null;
	public $warehouse_name = null;
	public $ebs_warehouse_code = null;
	public $b2c_warehouse = null;
	public $user_type = null;
	public $user_name = null;
	public $buyer_id = null;
	public $address = null;
	public $buyer = null;
	public $area_id = null;
	public $postcode = null;
	public $city = null;
	public $province = null;
	public $country_id = null;
	public $tel = null;
	public $mobile = null;
	public $pay_type = null;
	public $pos = null;
	public $transport_day = null;
	public $remark = null;
	public $order_type = null;
	public $vipclub = null;
	public $invoice = null;
	public $goods_money = null;
	public $money = null;
	public $agio = null;
	public $discount_amount = null;
	public $promo_discount_amount = null;
	public $surplus = null;
	public $carriage = null;
	public $transport_no = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $transport_detail = null;
	public $b2c_transport_code = null;
	public $transport_id = null;
	public $transport_type = null;
	public $vendor_code = null;
	public $vendor_id = null;
	public $vendor_name = null;
	public $brand_name = null;
	public $goods_list = null;
	
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
			'var' => 'warehouse_name'
			),
			4 => array(
			'var' => 'ebs_warehouse_code'
			),
			5 => array(
			'var' => 'b2c_warehouse'
			),
			6 => array(
			'var' => 'user_type'
			),
			7 => array(
			'var' => 'user_name'
			),
			8 => array(
			'var' => 'buyer_id'
			),
			9 => array(
			'var' => 'address'
			),
			10 => array(
			'var' => 'buyer'
			),
			11 => array(
			'var' => 'area_id'
			),
			12 => array(
			'var' => 'postcode'
			),
			13 => array(
			'var' => 'city'
			),
			14 => array(
			'var' => 'province'
			),
			15 => array(
			'var' => 'country_id'
			),
			16 => array(
			'var' => 'tel'
			),
			17 => array(
			'var' => 'mobile'
			),
			18 => array(
			'var' => 'pay_type'
			),
			19 => array(
			'var' => 'pos'
			),
			20 => array(
			'var' => 'transport_day'
			),
			21 => array(
			'var' => 'remark'
			),
			22 => array(
			'var' => 'order_type'
			),
			23 => array(
			'var' => 'vipclub'
			),
			24 => array(
			'var' => 'invoice'
			),
			25 => array(
			'var' => 'goods_money'
			),
			26 => array(
			'var' => 'money'
			),
			27 => array(
			'var' => 'agio'
			),
			28 => array(
			'var' => 'discount_amount'
			),
			29 => array(
			'var' => 'promo_discount_amount'
			),
			30 => array(
			'var' => 'surplus'
			),
			31 => array(
			'var' => 'carriage'
			),
			32 => array(
			'var' => 'transport_no'
			),
			33 => array(
			'var' => 'carrier_code'
			),
			34 => array(
			'var' => 'carrier_name'
			),
			35 => array(
			'var' => 'transport_detail'
			),
			36 => array(
			'var' => 'b2c_transport_code'
			),
			37 => array(
			'var' => 'transport_id'
			),
			38 => array(
			'var' => 'transport_type'
			),
			39 => array(
			'var' => 'vendor_code'
			),
			40 => array(
			'var' => 'vendor_id'
			),
			41 => array(
			'var' => 'vendor_name'
			),
			42 => array(
			'var' => 'brand_name'
			),
			43 => array(
			'var' => 'goods_list'
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
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['ebs_warehouse_code'])){
				
				$this->ebs_warehouse_code = $vals['ebs_warehouse_code'];
			}
			
			
			if (isset($vals['b2c_warehouse'])){
				
				$this->b2c_warehouse = $vals['b2c_warehouse'];
			}
			
			
			if (isset($vals['user_type'])){
				
				$this->user_type = $vals['user_type'];
			}
			
			
			if (isset($vals['user_name'])){
				
				$this->user_name = $vals['user_name'];
			}
			
			
			if (isset($vals['buyer_id'])){
				
				$this->buyer_id = $vals['buyer_id'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['area_id'])){
				
				$this->area_id = $vals['area_id'];
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
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['pos'])){
				
				$this->pos = $vals['pos'];
			}
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['vipclub'])){
				
				$this->vipclub = $vals['vipclub'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['goods_money'])){
				
				$this->goods_money = $vals['goods_money'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['agio'])){
				
				$this->agio = $vals['agio'];
			}
			
			
			if (isset($vals['discount_amount'])){
				
				$this->discount_amount = $vals['discount_amount'];
			}
			
			
			if (isset($vals['promo_discount_amount'])){
				
				$this->promo_discount_amount = $vals['promo_discount_amount'];
			}
			
			
			if (isset($vals['surplus'])){
				
				$this->surplus = $vals['surplus'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['transport_detail'])){
				
				$this->transport_detail = $vals['transport_detail'];
			}
			
			
			if (isset($vals['b2c_transport_code'])){
				
				$this->b2c_transport_code = $vals['b2c_transport_code'];
			}
			
			
			if (isset($vals['transport_id'])){
				
				$this->transport_id = $vals['transport_id'];
			}
			
			
			if (isset($vals['transport_type'])){
				
				$this->transport_type = $vals['transport_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['goods_list'])){
				
				$this->goods_list = $vals['goods_list'];
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
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("ebs_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ebs_warehouse_code);
				
			}
			
			
			
			
			if ("b2c_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2c_warehouse);
				
			}
			
			
			
			
			if ("user_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->user_type); 
				
			}
			
			
			
			
			if ("user_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_name);
				
			}
			
			
			
			
			if ("buyer_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyer_id); 
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("area_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_id);
				
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
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("pos" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pos); 
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_day);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("vipclub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclub);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("goods_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_money);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("agio" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->agio);
				
			}
			
			
			
			
			if ("discount_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount_amount);
				
			}
			
			
			
			
			if ("promo_discount_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promo_discount_amount);
				
			}
			
			
			
			
			if ("surplus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->surplus);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("transport_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_detail);
				
			}
			
			
			
			
			if ("b2c_transport_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2c_transport_code); 
				
			}
			
			
			
			
			if ("transport_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_id);
				
			}
			
			
			
			
			if ("transport_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_type);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("goods_list" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\ExportProduct();
						$elem0->read($input);
						
						$this->goods_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_name');
			$xfer += $output->writeString($this->warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebs_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('ebs_warehouse_code');
			$xfer += $output->writeString($this->ebs_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2c_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('b2c_warehouse');
			$xfer += $output->writeString($this->b2c_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_type !== null) {
			
			$xfer += $output->writeFieldBegin('user_type');
			$xfer += $output->writeI32($this->user_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_name !== null) {
			
			$xfer += $output->writeFieldBegin('user_name');
			$xfer += $output->writeString($this->user_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_id !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_id');
			$xfer += $output->writeI32($this->buyer_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_id');
			$xfer += $output->writeString($this->area_id);
			
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
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeString($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pos !== null) {
			
			$xfer += $output->writeFieldBegin('pos');
			$xfer += $output->writeI32($this->pos);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_day !== null) {
			
			$xfer += $output->writeFieldBegin('transport_day');
			$xfer += $output->writeString($this->transport_day);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeString($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipclub !== null) {
			
			$xfer += $output->writeFieldBegin('vipclub');
			$xfer += $output->writeString($this->vipclub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_money !== null) {
			
			$xfer += $output->writeFieldBegin('goods_money');
			$xfer += $output->writeString($this->goods_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->agio !== null) {
			
			$xfer += $output->writeFieldBegin('agio');
			$xfer += $output->writeString($this->agio);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_amount !== null) {
			
			$xfer += $output->writeFieldBegin('discount_amount');
			$xfer += $output->writeString($this->discount_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promo_discount_amount !== null) {
			
			$xfer += $output->writeFieldBegin('promo_discount_amount');
			$xfer += $output->writeString($this->promo_discount_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplus !== null) {
			
			$xfer += $output->writeFieldBegin('surplus');
			$xfer += $output->writeString($this->surplus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_detail !== null) {
			
			$xfer += $output->writeFieldBegin('transport_detail');
			$xfer += $output->writeString($this->transport_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2c_transport_code !== null) {
			
			$xfer += $output->writeFieldBegin('b2c_transport_code');
			$xfer += $output->writeI32($this->b2c_transport_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_id !== null) {
			
			$xfer += $output->writeFieldBegin('transport_id');
			$xfer += $output->writeString($this->transport_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_type !== null) {
			
			$xfer += $output->writeFieldBegin('transport_type');
			$xfer += $output->writeString($this->transport_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
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
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_list !== null) {
			
			$xfer += $output->writeFieldBegin('goods_list');
			
			if (!is_array($this->goods_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>