<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\jingdong;

class OrderActive {
	
	static $_TSPEC;
	public $order_id = null;
	public $active_type = null;
	public $active_field = null;
	public $active_no = null;
	public $active_discount_money = null;
	public $goods_discount_details = null;
	public $prom_coupons = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'active_type'
			),
			3 => array(
			'var' => 'active_field'
			),
			4 => array(
			'var' => 'active_no'
			),
			5 => array(
			'var' => 'active_discount_money'
			),
			6 => array(
			'var' => 'goods_discount_details'
			),
			7 => array(
			'var' => 'prom_coupons'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['active_type'])){
				
				$this->active_type = $vals['active_type'];
			}
			
			
			if (isset($vals['active_field'])){
				
				$this->active_field = $vals['active_field'];
			}
			
			
			if (isset($vals['active_no'])){
				
				$this->active_no = $vals['active_no'];
			}
			
			
			if (isset($vals['active_discount_money'])){
				
				$this->active_discount_money = $vals['active_discount_money'];
			}
			
			
			if (isset($vals['goods_discount_details'])){
				
				$this->goods_discount_details = $vals['goods_discount_details'];
			}
			
			
			if (isset($vals['prom_coupons'])){
				
				$this->prom_coupons = $vals['prom_coupons'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderActive';
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
			
			
			
			
			if ("active_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->active_type); 
				
			}
			
			
			
			
			if ("active_field" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->active_field); 
				
			}
			
			
			
			
			if ("active_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->active_no);
				
			}
			
			
			
			
			if ("active_discount_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->active_discount_money);
				
			}
			
			
			
			
			if ("goods_discount_details" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_discount_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\jingdong\GoodsDiscountDetail();
						$elem0->read($input);
						
						$this->goods_discount_details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("prom_coupons" == $schemeField){
				
				$needSkip = false;
				
				$this->prom_coupons = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\jingdong\PromCouponInfo();
						$elem1->read($input);
						
						$this->prom_coupons[$_size1++] = $elem1;
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
		
		
		if($this->active_type !== null) {
			
			$xfer += $output->writeFieldBegin('active_type');
			$xfer += $output->writeI32($this->active_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active_field !== null) {
			
			$xfer += $output->writeFieldBegin('active_field');
			$xfer += $output->writeI32($this->active_field);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active_no !== null) {
			
			$xfer += $output->writeFieldBegin('active_no');
			$xfer += $output->writeString($this->active_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->active_discount_money !== null) {
			
			$xfer += $output->writeFieldBegin('active_discount_money');
			$xfer += $output->writeString($this->active_discount_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_discount_details !== null) {
			
			$xfer += $output->writeFieldBegin('goods_discount_details');
			
			if (!is_array($this->goods_discount_details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods_discount_details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prom_coupons !== null) {
			
			$xfer += $output->writeFieldBegin('prom_coupons');
			
			if (!is_array($this->prom_coupons)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->prom_coupons as $iter0){
				
				
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