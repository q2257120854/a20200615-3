<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\finance;

class FinancialDetail {
	
	static $_TSPEC;
	public $order_id = null;
	public $trx_date = null;
	public $order_type = null;
	public $detail_type = null;
	public $type_description = null;
	public $detail_create_time = null;
	public $sku = null;
	public $quantity = null;
	public $amount = null;
	public $commission_rate = null;
	public $vendor_scale = null;
	public $vendor_total_receivable_fee = null;
	public $last_account_date = null;
	public $received_amount = null;
	public $unpaid_amount = null;
	public $promotion_no = null;
	public $promotion_description = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'trx_date'
			),
			3 => array(
			'var' => 'order_type'
			),
			4 => array(
			'var' => 'detail_type'
			),
			5 => array(
			'var' => 'type_description'
			),
			6 => array(
			'var' => 'detail_create_time'
			),
			7 => array(
			'var' => 'sku'
			),
			8 => array(
			'var' => 'quantity'
			),
			9 => array(
			'var' => 'amount'
			),
			10 => array(
			'var' => 'commission_rate'
			),
			11 => array(
			'var' => 'vendor_scale'
			),
			12 => array(
			'var' => 'vendor_total_receivable_fee'
			),
			13 => array(
			'var' => 'last_account_date'
			),
			14 => array(
			'var' => 'received_amount'
			),
			15 => array(
			'var' => 'unpaid_amount'
			),
			16 => array(
			'var' => 'promotion_no'
			),
			17 => array(
			'var' => 'promotion_description'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['trx_date'])){
				
				$this->trx_date = $vals['trx_date'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['detail_type'])){
				
				$this->detail_type = $vals['detail_type'];
			}
			
			
			if (isset($vals['type_description'])){
				
				$this->type_description = $vals['type_description'];
			}
			
			
			if (isset($vals['detail_create_time'])){
				
				$this->detail_create_time = $vals['detail_create_time'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['commission_rate'])){
				
				$this->commission_rate = $vals['commission_rate'];
			}
			
			
			if (isset($vals['vendor_scale'])){
				
				$this->vendor_scale = $vals['vendor_scale'];
			}
			
			
			if (isset($vals['vendor_total_receivable_fee'])){
				
				$this->vendor_total_receivable_fee = $vals['vendor_total_receivable_fee'];
			}
			
			
			if (isset($vals['last_account_date'])){
				
				$this->last_account_date = $vals['last_account_date'];
			}
			
			
			if (isset($vals['received_amount'])){
				
				$this->received_amount = $vals['received_amount'];
			}
			
			
			if (isset($vals['unpaid_amount'])){
				
				$this->unpaid_amount = $vals['unpaid_amount'];
			}
			
			
			if (isset($vals['promotion_no'])){
				
				$this->promotion_no = $vals['promotion_no'];
			}
			
			
			if (isset($vals['promotion_description'])){
				
				$this->promotion_description = $vals['promotion_description'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FinancialDetail';
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
			
			
			
			
			if ("trx_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trx_date);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("detail_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detail_type);
				
			}
			
			
			
			
			if ("type_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type_description);
				
			}
			
			
			
			
			if ("detail_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detail_create_time);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->quantity);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("commission_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission_rate);
				
			}
			
			
			
			
			if ("vendor_scale" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_scale);
				
			}
			
			
			
			
			if ("vendor_total_receivable_fee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_total_receivable_fee);
				
			}
			
			
			
			
			if ("last_account_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->last_account_date);
				
			}
			
			
			
			
			if ("received_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->received_amount);
				
			}
			
			
			
			
			if ("unpaid_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unpaid_amount);
				
			}
			
			
			
			
			if ("promotion_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_no);
				
			}
			
			
			
			
			if ("promotion_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_description);
				
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
		
		
		if($this->trx_date !== null) {
			
			$xfer += $output->writeFieldBegin('trx_date');
			$xfer += $output->writeString($this->trx_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeString($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail_type !== null) {
			
			$xfer += $output->writeFieldBegin('detail_type');
			$xfer += $output->writeString($this->detail_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type_description !== null) {
			
			$xfer += $output->writeFieldBegin('type_description');
			$xfer += $output->writeString($this->type_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('detail_create_time');
			$xfer += $output->writeString($this->detail_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeString($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission_rate !== null) {
			
			$xfer += $output->writeFieldBegin('commission_rate');
			$xfer += $output->writeString($this->commission_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_scale !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_scale');
			$xfer += $output->writeString($this->vendor_scale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_total_receivable_fee !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_total_receivable_fee');
			$xfer += $output->writeString($this->vendor_total_receivable_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_account_date !== null) {
			
			$xfer += $output->writeFieldBegin('last_account_date');
			$xfer += $output->writeString($this->last_account_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->received_amount !== null) {
			
			$xfer += $output->writeFieldBegin('received_amount');
			$xfer += $output->writeString($this->received_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unpaid_amount !== null) {
			
			$xfer += $output->writeFieldBegin('unpaid_amount');
			$xfer += $output->writeString($this->unpaid_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_no !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_no');
			$xfer += $output->writeString($this->promotion_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_description !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_description');
			$xfer += $output->writeString($this->promotion_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>