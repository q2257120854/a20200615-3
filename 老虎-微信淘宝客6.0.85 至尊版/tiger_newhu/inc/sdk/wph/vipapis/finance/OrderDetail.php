<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\finance;

class OrderDetail {
	
	static $_TSPEC;
	public $order_id = null;
	public $barcode = null;
	public $amount = null;
	public $price = null;
	public $brand_name = null;
	public $product_name = null;
	public $sales_or_schedule_id = null;
	public $date = null;
	public $promotions = null;
	public $errors = null;
	public $carriage = null;
	public $expay_sub_total = null;
	public $exact_sub_total = null;
	public $excoupon_sub_total = null;
	public $virtual_money_paid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'price'
			),
			5 => array(
			'var' => 'brand_name'
			),
			6 => array(
			'var' => 'product_name'
			),
			7 => array(
			'var' => 'sales_or_schedule_id'
			),
			8 => array(
			'var' => 'date'
			),
			9 => array(
			'var' => 'promotions'
			),
			10 => array(
			'var' => 'errors'
			),
			11 => array(
			'var' => 'carriage'
			),
			12 => array(
			'var' => 'expay_sub_total'
			),
			13 => array(
			'var' => 'exact_sub_total'
			),
			14 => array(
			'var' => 'excoupon_sub_total'
			),
			15 => array(
			'var' => 'virtual_money_paid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['sales_or_schedule_id'])){
				
				$this->sales_or_schedule_id = $vals['sales_or_schedule_id'];
			}
			
			
			if (isset($vals['date'])){
				
				$this->date = $vals['date'];
			}
			
			
			if (isset($vals['promotions'])){
				
				$this->promotions = $vals['promotions'];
			}
			
			
			if (isset($vals['errors'])){
				
				$this->errors = $vals['errors'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['expay_sub_total'])){
				
				$this->expay_sub_total = $vals['expay_sub_total'];
			}
			
			
			if (isset($vals['exact_sub_total'])){
				
				$this->exact_sub_total = $vals['exact_sub_total'];
			}
			
			
			if (isset($vals['excoupon_sub_total'])){
				
				$this->excoupon_sub_total = $vals['excoupon_sub_total'];
			}
			
			
			if (isset($vals['virtual_money_paid'])){
				
				$this->virtual_money_paid = $vals['virtual_money_paid'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDetail';
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
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("sales_or_schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_or_schedule_id);
				
			}
			
			
			
			
			if ("date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->date);
				
			}
			
			
			
			
			if ("promotions" == $schemeField){
				
				$needSkip = false;
				
				$this->promotions = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\finance\Promotion();
						$elem1->read($input);
						
						$this->promotions[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("errors" == $schemeField){
				
				$needSkip = false;
				
				$this->errors = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\finance\Error();
						$elem2->read($input);
						
						$this->errors[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("expay_sub_total" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expay_sub_total);
				
			}
			
			
			
			
			if ("exact_sub_total" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exact_sub_total);
				
			}
			
			
			
			
			if ("excoupon_sub_total" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->excoupon_sub_total);
				
			}
			
			
			
			
			if ("virtual_money_paid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->virtual_money_paid);
				
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
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeDouble($this->price);
			
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
		
		
		if($this->sales_or_schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('sales_or_schedule_id');
			$xfer += $output->writeString($this->sales_or_schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->date !== null) {
			
			$xfer += $output->writeFieldBegin('date');
			$xfer += $output->writeString($this->date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotions !== null) {
			
			$xfer += $output->writeFieldBegin('promotions');
			
			if (!is_array($this->promotions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->promotions as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errors !== null) {
			
			$xfer += $output->writeFieldBegin('errors');
			
			if (!is_array($this->errors)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->errors as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expay_sub_total !== null) {
			
			$xfer += $output->writeFieldBegin('expay_sub_total');
			$xfer += $output->writeString($this->expay_sub_total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exact_sub_total !== null) {
			
			$xfer += $output->writeFieldBegin('exact_sub_total');
			$xfer += $output->writeString($this->exact_sub_total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->excoupon_sub_total !== null) {
			
			$xfer += $output->writeFieldBegin('excoupon_sub_total');
			$xfer += $output->writeString($this->excoupon_sub_total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->virtual_money_paid !== null) {
			
			$xfer += $output->writeFieldBegin('virtual_money_paid');
			$xfer += $output->writeString($this->virtual_money_paid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>