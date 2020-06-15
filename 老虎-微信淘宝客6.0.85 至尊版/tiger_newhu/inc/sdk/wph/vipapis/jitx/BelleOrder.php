<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class BelleOrder {
	
	static $_TSPEC;
	public $order_sn = null;
	public $delivery_warehouse = null;
	public $add_time = null;
	public $buyer = null;
	public $buyer_address = null;
	public $buyer_mobile = null;
	public $buyer_tel = null;
	public $buyer_postcode = null;
	public $buyer_city = null;
	public $buyer_province = null;
	public $buyer_county = null;
	public $buyer_country_id = null;
	public $pay_type = null;
	public $cod_type = null;
	public $cod_money = null;
	public $remark = null;
	public $transport_time = null;
	public $transport_day = null;
	public $vendor_id = null;
	public $vendor_name = null;
	public $transport_no = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $order_status = null;
	public $last_update_time = null;
	public $package_received_time = null;
	public $order_goods = null;
	public $order_type = null;
	public $is_forbidden_delivery = null;
	public $delivery_kpi_start_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'delivery_warehouse'
			),
			3 => array(
			'var' => 'add_time'
			),
			4 => array(
			'var' => 'buyer'
			),
			5 => array(
			'var' => 'buyer_address'
			),
			6 => array(
			'var' => 'buyer_mobile'
			),
			7 => array(
			'var' => 'buyer_tel'
			),
			8 => array(
			'var' => 'buyer_postcode'
			),
			9 => array(
			'var' => 'buyer_city'
			),
			10 => array(
			'var' => 'buyer_province'
			),
			11 => array(
			'var' => 'buyer_county'
			),
			12 => array(
			'var' => 'buyer_country_id'
			),
			13 => array(
			'var' => 'pay_type'
			),
			14 => array(
			'var' => 'cod_type'
			),
			15 => array(
			'var' => 'cod_money'
			),
			16 => array(
			'var' => 'remark'
			),
			17 => array(
			'var' => 'transport_time'
			),
			18 => array(
			'var' => 'transport_day'
			),
			19 => array(
			'var' => 'vendor_id'
			),
			20 => array(
			'var' => 'vendor_name'
			),
			21 => array(
			'var' => 'transport_no'
			),
			22 => array(
			'var' => 'carrier_code'
			),
			23 => array(
			'var' => 'carrier_name'
			),
			24 => array(
			'var' => 'order_status'
			),
			25 => array(
			'var' => 'last_update_time'
			),
			26 => array(
			'var' => 'package_received_time'
			),
			27 => array(
			'var' => 'order_goods'
			),
			28 => array(
			'var' => 'order_type'
			),
			29 => array(
			'var' => 'is_forbidden_delivery'
			),
			30 => array(
			'var' => 'delivery_kpi_start_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['buyer_address'])){
				
				$this->buyer_address = $vals['buyer_address'];
			}
			
			
			if (isset($vals['buyer_mobile'])){
				
				$this->buyer_mobile = $vals['buyer_mobile'];
			}
			
			
			if (isset($vals['buyer_tel'])){
				
				$this->buyer_tel = $vals['buyer_tel'];
			}
			
			
			if (isset($vals['buyer_postcode'])){
				
				$this->buyer_postcode = $vals['buyer_postcode'];
			}
			
			
			if (isset($vals['buyer_city'])){
				
				$this->buyer_city = $vals['buyer_city'];
			}
			
			
			if (isset($vals['buyer_province'])){
				
				$this->buyer_province = $vals['buyer_province'];
			}
			
			
			if (isset($vals['buyer_county'])){
				
				$this->buyer_county = $vals['buyer_county'];
			}
			
			
			if (isset($vals['buyer_country_id'])){
				
				$this->buyer_country_id = $vals['buyer_country_id'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['cod_type'])){
				
				$this->cod_type = $vals['cod_type'];
			}
			
			
			if (isset($vals['cod_money'])){
				
				$this->cod_money = $vals['cod_money'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transport_time'])){
				
				$this->transport_time = $vals['transport_time'];
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
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['last_update_time'])){
				
				$this->last_update_time = $vals['last_update_time'];
			}
			
			
			if (isset($vals['package_received_time'])){
				
				$this->package_received_time = $vals['package_received_time'];
			}
			
			
			if (isset($vals['order_goods'])){
				
				$this->order_goods = $vals['order_goods'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['is_forbidden_delivery'])){
				
				$this->is_forbidden_delivery = $vals['is_forbidden_delivery'];
			}
			
			
			if (isset($vals['delivery_kpi_start_time'])){
				
				$this->delivery_kpi_start_time = $vals['delivery_kpi_start_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BelleOrder';
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
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_time);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("buyer_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_address);
				
			}
			
			
			
			
			if ("buyer_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_mobile);
				
			}
			
			
			
			
			if ("buyer_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_tel);
				
			}
			
			
			
			
			if ("buyer_postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_postcode);
				
			}
			
			
			
			
			if ("buyer_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_city);
				
			}
			
			
			
			
			if ("buyer_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_province);
				
			}
			
			
			
			
			if ("buyer_county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_county);
				
			}
			
			
			
			
			if ("buyer_country_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_country_id);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("cod_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cod_type);
				
			}
			
			
			
			
			if ("cod_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cod_money);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transport_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_time);
				
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
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("last_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->last_update_time);
				
			}
			
			
			
			
			if ("package_received_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_received_time);
				
			}
			
			
			
			
			if ("order_goods" == $schemeField){
				
				$needSkip = false;
				
				$this->order_goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\jitx\OrderGood();
						$elem0->read($input);
						
						$this->order_goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_type); 
				
			}
			
			
			
			
			if ("is_forbidden_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_forbidden_delivery); 
				
			}
			
			
			
			
			if ("delivery_kpi_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_kpi_start_time);
				
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
		
		
		if($this->delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse');
			$xfer += $output->writeString($this->delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->add_time !== null) {
			
			$xfer += $output->writeFieldBegin('add_time');
			$xfer += $output->writeString($this->add_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_address !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_address');
			$xfer += $output->writeString($this->buyer_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_mobile');
			$xfer += $output->writeString($this->buyer_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_tel !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_tel');
			$xfer += $output->writeString($this->buyer_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_postcode !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_postcode');
			$xfer += $output->writeString($this->buyer_postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_city !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_city');
			$xfer += $output->writeString($this->buyer_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_province !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_province');
			$xfer += $output->writeString($this->buyer_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_county !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_county');
			$xfer += $output->writeString($this->buyer_county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_country_id !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_country_id');
			$xfer += $output->writeString($this->buyer_country_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeString($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cod_type !== null) {
			
			$xfer += $output->writeFieldBegin('cod_type');
			$xfer += $output->writeString($this->cod_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cod_money !== null) {
			
			$xfer += $output->writeFieldBegin('cod_money');
			$xfer += $output->writeString($this->cod_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_time !== null) {
			
			$xfer += $output->writeFieldBegin('transport_time');
			$xfer += $output->writeString($this->transport_time);
			
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
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('last_update_time');
			$xfer += $output->writeString($this->last_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_received_time !== null) {
			
			$xfer += $output->writeFieldBegin('package_received_time');
			$xfer += $output->writeString($this->package_received_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_goods !== null) {
			
			$xfer += $output->writeFieldBegin('order_goods');
			
			if (!is_array($this->order_goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeI32($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_forbidden_delivery');
		$xfer += $output->writeI32($this->is_forbidden_delivery);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_kpi_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_kpi_start_time');
			$xfer += $output->writeString($this->delivery_kpi_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>