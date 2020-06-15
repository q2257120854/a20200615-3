<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\bill;

class BillDetailInfo {
	
	static $_TSPEC;
	public $channel_data_id = null;
	public $order_sn = null;
	public $receipt_no = null;
	public $receipt_type = null;
	public $prod_sku_id = null;
	public $ext_goods_no = null;
	public $ext_goods_name = null;
	public $schedule_id = null;
	public $category = null;
	public $tax_rate = null;
	public $commission_ratio = null;
	public $settlement_status = null;
	public $cost_occurrence_time = null;
	public $cost_chargeable_time = null;
	public $cost_settlement_time = null;
	public $cost_item = null;
	public $amount = null;
	public $currency = null;
	public $income_expenses_direction = null;
	public $money_serialNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channel_data_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'receipt_no'
			),
			4 => array(
			'var' => 'receipt_type'
			),
			5 => array(
			'var' => 'prod_sku_id'
			),
			6 => array(
			'var' => 'ext_goods_no'
			),
			7 => array(
			'var' => 'ext_goods_name'
			),
			8 => array(
			'var' => 'schedule_id'
			),
			9 => array(
			'var' => 'category'
			),
			10 => array(
			'var' => 'tax_rate'
			),
			11 => array(
			'var' => 'commission_ratio'
			),
			12 => array(
			'var' => 'settlement_status'
			),
			13 => array(
			'var' => 'cost_occurrence_time'
			),
			14 => array(
			'var' => 'cost_chargeable_time'
			),
			15 => array(
			'var' => 'cost_settlement_time'
			),
			16 => array(
			'var' => 'cost_item'
			),
			17 => array(
			'var' => 'amount'
			),
			18 => array(
			'var' => 'currency'
			),
			19 => array(
			'var' => 'income_expenses_direction'
			),
			20 => array(
			'var' => 'money_serialNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channel_data_id'])){
				
				$this->channel_data_id = $vals['channel_data_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['receipt_no'])){
				
				$this->receipt_no = $vals['receipt_no'];
			}
			
			
			if (isset($vals['receipt_type'])){
				
				$this->receipt_type = $vals['receipt_type'];
			}
			
			
			if (isset($vals['prod_sku_id'])){
				
				$this->prod_sku_id = $vals['prod_sku_id'];
			}
			
			
			if (isset($vals['ext_goods_no'])){
				
				$this->ext_goods_no = $vals['ext_goods_no'];
			}
			
			
			if (isset($vals['ext_goods_name'])){
				
				$this->ext_goods_name = $vals['ext_goods_name'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['category'])){
				
				$this->category = $vals['category'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['commission_ratio'])){
				
				$this->commission_ratio = $vals['commission_ratio'];
			}
			
			
			if (isset($vals['settlement_status'])){
				
				$this->settlement_status = $vals['settlement_status'];
			}
			
			
			if (isset($vals['cost_occurrence_time'])){
				
				$this->cost_occurrence_time = $vals['cost_occurrence_time'];
			}
			
			
			if (isset($vals['cost_chargeable_time'])){
				
				$this->cost_chargeable_time = $vals['cost_chargeable_time'];
			}
			
			
			if (isset($vals['cost_settlement_time'])){
				
				$this->cost_settlement_time = $vals['cost_settlement_time'];
			}
			
			
			if (isset($vals['cost_item'])){
				
				$this->cost_item = $vals['cost_item'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['income_expenses_direction'])){
				
				$this->income_expenses_direction = $vals['income_expenses_direction'];
			}
			
			
			if (isset($vals['money_serialNo'])){
				
				$this->money_serialNo = $vals['money_serialNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillDetailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channel_data_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channel_data_id); 
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_no);
				
			}
			
			
			
			
			if ("receipt_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_type);
				
			}
			
			
			
			
			if ("prod_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prod_sku_id); 
				
			}
			
			
			
			
			if ("ext_goods_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_goods_no);
				
			}
			
			
			
			
			if ("ext_goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_goods_name);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->schedule_id); 
				
			}
			
			
			
			
			if ("category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_rate);
				
			}
			
			
			
			
			if ("commission_ratio" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission_ratio);
				
			}
			
			
			
			
			if ("settlement_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settlement_status);
				
			}
			
			
			
			
			if ("cost_occurrence_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_occurrence_time); 
				
			}
			
			
			
			
			if ("cost_chargeable_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_chargeable_time); 
				
			}
			
			
			
			
			if ("cost_settlement_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_settlement_time); 
				
			}
			
			
			
			
			if ("cost_item" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cost_item);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("income_expenses_direction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->income_expenses_direction);
				
			}
			
			
			
			
			if ("money_serialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money_serialNo);
				
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
		
		$xfer += $output->writeFieldBegin('channel_data_id');
		$xfer += $output->writeI64($this->channel_data_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receipt_no');
		$xfer += $output->writeString($this->receipt_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receipt_type');
		$xfer += $output->writeString($this->receipt_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('prod_sku_id');
		$xfer += $output->writeI64($this->prod_sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ext_goods_no');
		$xfer += $output->writeString($this->ext_goods_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ext_goods_name');
		$xfer += $output->writeString($this->ext_goods_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeI64($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category !== null) {
			
			$xfer += $output->writeFieldBegin('category');
			$xfer += $output->writeString($this->category);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('tax_rate');
		$xfer += $output->writeString($this->tax_rate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->commission_ratio !== null) {
			
			$xfer += $output->writeFieldBegin('commission_ratio');
			$xfer += $output->writeString($this->commission_ratio);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('settlement_status');
		$xfer += $output->writeString($this->settlement_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_occurrence_time');
		$xfer += $output->writeI64($this->cost_occurrence_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_chargeable_time');
		$xfer += $output->writeI64($this->cost_chargeable_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cost_settlement_time !== null) {
			
			$xfer += $output->writeFieldBegin('cost_settlement_time');
			$xfer += $output->writeI64($this->cost_settlement_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('cost_item');
		$xfer += $output->writeString($this->cost_item);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeString($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('currency');
		$xfer += $output->writeString($this->currency);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('income_expenses_direction');
		$xfer += $output->writeString($this->income_expenses_direction);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->money_serialNo !== null) {
			
			$xfer += $output->writeFieldBegin('money_serialNo');
			$xfer += $output->writeString($this->money_serialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>