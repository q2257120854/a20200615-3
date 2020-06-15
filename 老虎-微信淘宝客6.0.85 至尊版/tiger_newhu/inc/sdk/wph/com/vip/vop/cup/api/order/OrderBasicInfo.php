<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\order;

class OrderBasicInfo {
	
	static $_TSPEC;
	public $parent_order_sn = null;
	public $order_sn = null;
	public $user_code = null;
	public $add_time = null;
	public $pay_time = null;
	public $money = null;
	public $payer = null;
	public $seller_money = null;
	public $carriage = null;
	public $transport_way = null;
	public $transport_special_req = null;
	public $transport_day = null;
	public $transport_time = null;
	public $user_remark = null;
	public $seller_remark = null;
	public $update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'parent_order_sn'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'user_code'
			),
			4 => array(
			'var' => 'add_time'
			),
			5 => array(
			'var' => 'pay_time'
			),
			6 => array(
			'var' => 'money'
			),
			7 => array(
			'var' => 'payer'
			),
			8 => array(
			'var' => 'seller_money'
			),
			9 => array(
			'var' => 'carriage'
			),
			10 => array(
			'var' => 'transport_way'
			),
			11 => array(
			'var' => 'transport_special_req'
			),
			12 => array(
			'var' => 'transport_day'
			),
			13 => array(
			'var' => 'transport_time'
			),
			14 => array(
			'var' => 'user_remark'
			),
			15 => array(
			'var' => 'seller_remark'
			),
			16 => array(
			'var' => 'update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parent_order_sn'])){
				
				$this->parent_order_sn = $vals['parent_order_sn'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['user_code'])){
				
				$this->user_code = $vals['user_code'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['payer'])){
				
				$this->payer = $vals['payer'];
			}
			
			
			if (isset($vals['seller_money'])){
				
				$this->seller_money = $vals['seller_money'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['transport_way'])){
				
				$this->transport_way = $vals['transport_way'];
			}
			
			
			if (isset($vals['transport_special_req'])){
				
				$this->transport_special_req = $vals['transport_special_req'];
			}
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['transport_time'])){
				
				$this->transport_time = $vals['transport_time'];
			}
			
			
			if (isset($vals['user_remark'])){
				
				$this->user_remark = $vals['user_remark'];
			}
			
			
			if (isset($vals['seller_remark'])){
				
				$this->seller_remark = $vals['seller_remark'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderBasicInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("parent_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_order_sn);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_code);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_time);
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_time);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("payer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payer);
				
			}
			
			
			
			
			if ("seller_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seller_money);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("transport_way" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transport_way); 
				
			}
			
			
			
			
			if ("transport_special_req" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_special_req);
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transport_day); 
				
			}
			
			
			
			
			if ("transport_time" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transport_time); 
				
			}
			
			
			
			
			if ("user_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_remark);
				
			}
			
			
			
			
			if ("seller_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seller_remark);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
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
		
		if($this->parent_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('parent_order_sn');
			$xfer += $output->writeString($this->parent_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user_code');
		$xfer += $output->writeString($this->user_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('add_time');
		$xfer += $output->writeString($this->add_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_time');
		$xfer += $output->writeString($this->pay_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('money');
		$xfer += $output->writeString($this->money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('payer');
		$xfer += $output->writeString($this->payer);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('seller_money');
		$xfer += $output->writeString($this->seller_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carriage');
		$xfer += $output->writeString($this->carriage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_way');
		$xfer += $output->writeI32($this->transport_way);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_special_req !== null) {
			
			$xfer += $output->writeFieldBegin('transport_special_req');
			$xfer += $output->writeString($this->transport_special_req);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transport_day');
		$xfer += $output->writeI32($this->transport_day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_time');
		$xfer += $output->writeI32($this->transport_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->user_remark !== null) {
			
			$xfer += $output->writeFieldBegin('user_remark');
			$xfer += $output->writeString($this->user_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seller_remark !== null) {
			
			$xfer += $output->writeFieldBegin('seller_remark');
			$xfer += $output->writeString($this->seller_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('update_time');
		$xfer += $output->writeString($this->update_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>