<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class OrderInfo {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $sales_platform = null;
	public $erp_order_sn = null;
	public $third_order_sn = null;
	public $old_erp_order_sn = null;
	public $warehouse = null;
	public $buyer = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $postcode = null;
	public $tel = null;
	public $mobile = null;
	public $pay_type = null;
	public $transport_day = null;
	public $remark = null;
	public $goods_money = null;
	public $money = null;
	public $carriage = null;
	public $ext_pay_type = null;
	public $erp_create_time = null;
	public $b2c_add_time = null;
	public $invoice = null;
	public $ex_pay_money = null;
	public $aigo = null;
	public $service_phone = null;
	public $is_printing_price = null;
	public $itemList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'sales_platform'
			),
			3 => array(
			'var' => 'erp_order_sn'
			),
			4 => array(
			'var' => 'third_order_sn'
			),
			5 => array(
			'var' => 'old_erp_order_sn'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'buyer'
			),
			8 => array(
			'var' => 'country'
			),
			9 => array(
			'var' => 'state'
			),
			10 => array(
			'var' => 'city'
			),
			11 => array(
			'var' => 'region'
			),
			12 => array(
			'var' => 'town'
			),
			13 => array(
			'var' => 'address'
			),
			14 => array(
			'var' => 'postcode'
			),
			15 => array(
			'var' => 'tel'
			),
			16 => array(
			'var' => 'mobile'
			),
			17 => array(
			'var' => 'pay_type'
			),
			18 => array(
			'var' => 'transport_day'
			),
			19 => array(
			'var' => 'remark'
			),
			20 => array(
			'var' => 'goods_money'
			),
			21 => array(
			'var' => 'money'
			),
			22 => array(
			'var' => 'carriage'
			),
			23 => array(
			'var' => 'ext_pay_type'
			),
			24 => array(
			'var' => 'erp_create_time'
			),
			25 => array(
			'var' => 'b2c_add_time'
			),
			26 => array(
			'var' => 'invoice'
			),
			27 => array(
			'var' => 'ex_pay_money'
			),
			28 => array(
			'var' => 'aigo'
			),
			29 => array(
			'var' => 'service_phone'
			),
			30 => array(
			'var' => 'is_printing_price'
			),
			31 => array(
			'var' => 'itemList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['sales_platform'])){
				
				$this->sales_platform = $vals['sales_platform'];
			}
			
			
			if (isset($vals['erp_order_sn'])){
				
				$this->erp_order_sn = $vals['erp_order_sn'];
			}
			
			
			if (isset($vals['third_order_sn'])){
				
				$this->third_order_sn = $vals['third_order_sn'];
			}
			
			
			if (isset($vals['old_erp_order_sn'])){
				
				$this->old_erp_order_sn = $vals['old_erp_order_sn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
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
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['goods_money'])){
				
				$this->goods_money = $vals['goods_money'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['ext_pay_type'])){
				
				$this->ext_pay_type = $vals['ext_pay_type'];
			}
			
			
			if (isset($vals['erp_create_time'])){
				
				$this->erp_create_time = $vals['erp_create_time'];
			}
			
			
			if (isset($vals['b2c_add_time'])){
				
				$this->b2c_add_time = $vals['b2c_add_time'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['ex_pay_money'])){
				
				$this->ex_pay_money = $vals['ex_pay_money'];
			}
			
			
			if (isset($vals['aigo'])){
				
				$this->aigo = $vals['aigo'];
			}
			
			
			if (isset($vals['service_phone'])){
				
				$this->service_phone = $vals['service_phone'];
			}
			
			
			if (isset($vals['is_printing_price'])){
				
				$this->is_printing_price = $vals['is_printing_price'];
			}
			
			
			if (isset($vals['itemList'])){
				
				$this->itemList = $vals['itemList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInfo';
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
			
			
			
			
			if ("sales_platform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_platform);
				
			}
			
			
			
			
			if ("erp_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_order_sn);
				
			}
			
			
			
			
			if ("third_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_order_sn);
				
			}
			
			
			
			
			if ("old_erp_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->old_erp_order_sn);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\WarehouseCode::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->warehouse = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
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
				
				$names = \com\vip\domain\order\OrderPayType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->pay_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\order\OrderTransportDay::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->transport_day = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("goods_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goods_money);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->money);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("ext_pay_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\order\OrderExtPayType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->ext_pay_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("erp_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_create_time);
				
			}
			
			
			
			
			if ("b2c_add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2c_add_time);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("ex_pay_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->ex_pay_money);
				
			}
			
			
			
			
			if ("aigo" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->aigo);
				
			}
			
			
			
			
			if ("service_phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->service_phone);
				
			}
			
			
			
			
			if ("is_printing_price" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\order\OrderIsPrintingPrice::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->is_printing_price = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("itemList" == $schemeField){
				
				$needSkip = false;
				
				$this->itemList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\domain\order\OrderItemInfo();
						$elem0->read($input);
						
						$this->itemList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_platform');
		$xfer += $output->writeString($this->sales_platform);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_order_sn');
		$xfer += $output->writeString($this->erp_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('third_order_sn');
		$xfer += $output->writeString($this->third_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->old_erp_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('old_erp_order_sn');
			$xfer += $output->writeString($this->old_erp_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \com\vip\domain\inventory\WarehouseCode; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('buyer');
		$xfer += $output->writeString($this->buyer);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('country');
		$xfer += $output->writeString($this->country);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeString($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
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
		
		
		$xfer += $output->writeFieldBegin('pay_type');
		
		$em = new \com\vip\domain\order\OrderPayType; 
		$output->writeString($em::$__names[$this->pay_type]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_day');
		
		$em = new \com\vip\domain\order\OrderTransportDay; 
		$output->writeString($em::$__names[$this->transport_day]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('goods_money');
		$xfer += $output->writeDouble($this->goods_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('money');
		$xfer += $output->writeDouble($this->money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carriage');
		$xfer += $output->writeDouble($this->carriage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ext_pay_type');
		
		$em = new \com\vip\domain\order\OrderExtPayType; 
		$output->writeString($em::$__names[$this->ext_pay_type]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_create_time');
		$xfer += $output->writeString($this->erp_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('b2c_add_time');
		$xfer += $output->writeString($this->b2c_add_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ex_pay_money !== null) {
			
			$xfer += $output->writeFieldBegin('ex_pay_money');
			$xfer += $output->writeDouble($this->ex_pay_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aigo !== null) {
			
			$xfer += $output->writeFieldBegin('aigo');
			$xfer += $output->writeDouble($this->aigo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('service_phone');
		$xfer += $output->writeString($this->service_phone);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_printing_price');
		
		$em = new \com\vip\domain\order\OrderIsPrintingPrice; 
		$output->writeString($em::$__names[$this->is_printing_price]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->itemList !== null) {
			
			$xfer += $output->writeFieldBegin('itemList');
			
			if (!is_array($this->itemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->itemList as $iter0){
				
				
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