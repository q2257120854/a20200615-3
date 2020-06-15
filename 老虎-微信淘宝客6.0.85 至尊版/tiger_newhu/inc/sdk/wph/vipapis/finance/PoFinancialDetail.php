<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\finance;

class PoFinancialDetail {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $transaction_type = null;
	public $transaction_type_name = null;
	public $transaction_time = null;
	public $schedule_id = null;
	public $po_no = null;
	public $po_org_id = null;
	public $create_time = null;
	public $transaction_quantity = null;
	public $warehouse = null;
	public $order_no = null;
	public $barcode = null;
	public $sales_amount = null;
	public $order_currency = null;
	public $bill_price = null;
	public $bill_amount = null;
	public $bill_amount_tax = null;
	public $currency_code = null;
	public $tax_rate = null;
	public $source_status = null;
	public $comments = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'transaction_type'
			),
			3 => array(
			'var' => 'transaction_type_name'
			),
			4 => array(
			'var' => 'transaction_time'
			),
			5 => array(
			'var' => 'schedule_id'
			),
			6 => array(
			'var' => 'po_no'
			),
			7 => array(
			'var' => 'po_org_id'
			),
			8 => array(
			'var' => 'create_time'
			),
			9 => array(
			'var' => 'transaction_quantity'
			),
			10 => array(
			'var' => 'warehouse'
			),
			11 => array(
			'var' => 'order_no'
			),
			12 => array(
			'var' => 'barcode'
			),
			13 => array(
			'var' => 'sales_amount'
			),
			14 => array(
			'var' => 'order_currency'
			),
			15 => array(
			'var' => 'bill_price'
			),
			16 => array(
			'var' => 'bill_amount'
			),
			17 => array(
			'var' => 'bill_amount_tax'
			),
			18 => array(
			'var' => 'currency_code'
			),
			19 => array(
			'var' => 'tax_rate'
			),
			20 => array(
			'var' => 'source_status'
			),
			21 => array(
			'var' => 'comments'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['transaction_type'])){
				
				$this->transaction_type = $vals['transaction_type'];
			}
			
			
			if (isset($vals['transaction_type_name'])){
				
				$this->transaction_type_name = $vals['transaction_type_name'];
			}
			
			
			if (isset($vals['transaction_time'])){
				
				$this->transaction_time = $vals['transaction_time'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['po_org_id'])){
				
				$this->po_org_id = $vals['po_org_id'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['transaction_quantity'])){
				
				$this->transaction_quantity = $vals['transaction_quantity'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['sales_amount'])){
				
				$this->sales_amount = $vals['sales_amount'];
			}
			
			
			if (isset($vals['order_currency'])){
				
				$this->order_currency = $vals['order_currency'];
			}
			
			
			if (isset($vals['bill_price'])){
				
				$this->bill_price = $vals['bill_price'];
			}
			
			
			if (isset($vals['bill_amount'])){
				
				$this->bill_amount = $vals['bill_amount'];
			}
			
			
			if (isset($vals['bill_amount_tax'])){
				
				$this->bill_amount_tax = $vals['bill_amount_tax'];
			}
			
			
			if (isset($vals['currency_code'])){
				
				$this->currency_code = $vals['currency_code'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['source_status'])){
				
				$this->source_status = $vals['source_status'];
			}
			
			
			if (isset($vals['comments'])){
				
				$this->comments = $vals['comments'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoFinancialDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transaction_id); 
				
			}
			
			
			
			
			if ("transaction_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_type);
				
			}
			
			
			
			
			if ("transaction_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_type_name);
				
			}
			
			
			
			
			if ("transaction_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transaction_time);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("po_org_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_org_id);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("transaction_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transaction_quantity); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("sales_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sales_amount);
				
			}
			
			
			
			
			if ("order_currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_currency);
				
			}
			
			
			
			
			if ("bill_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_price);
				
			}
			
			
			
			
			if ("bill_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_amount);
				
			}
			
			
			
			
			if ("bill_amount_tax" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_amount_tax);
				
			}
			
			
			
			
			if ("currency_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency_code);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->tax_rate);
				
			}
			
			
			
			
			if ("source_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source_status);
				
			}
			
			
			
			
			if ("comments" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->comments);
				
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
		
		if($this->transaction_id !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_id');
			$xfer += $output->writeI64($this->transaction_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transaction_type !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_type');
			$xfer += $output->writeString($this->transaction_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transaction_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_type_name');
			$xfer += $output->writeString($this->transaction_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transaction_time !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_time');
			$xfer += $output->writeI64($this->transaction_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_org_id !== null) {
			
			$xfer += $output->writeFieldBegin('po_org_id');
			$xfer += $output->writeString($this->po_org_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transaction_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_quantity');
			$xfer += $output->writeI64($this->transaction_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_amount !== null) {
			
			$xfer += $output->writeFieldBegin('sales_amount');
			$xfer += $output->writeDouble($this->sales_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_currency !== null) {
			
			$xfer += $output->writeFieldBegin('order_currency');
			$xfer += $output->writeString($this->order_currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_price');
			$xfer += $output->writeDouble($this->bill_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_amount !== null) {
			
			$xfer += $output->writeFieldBegin('bill_amount');
			$xfer += $output->writeDouble($this->bill_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_amount_tax !== null) {
			
			$xfer += $output->writeFieldBegin('bill_amount_tax');
			$xfer += $output->writeDouble($this->bill_amount_tax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency_code !== null) {
			
			$xfer += $output->writeFieldBegin('currency_code');
			$xfer += $output->writeString($this->currency_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('tax_rate');
			$xfer += $output->writeDouble($this->tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source_status !== null) {
			
			$xfer += $output->writeFieldBegin('source_status');
			$xfer += $output->writeString($this->source_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->comments !== null) {
			
			$xfer += $output->writeFieldBegin('comments');
			$xfer += $output->writeString($this->comments);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>