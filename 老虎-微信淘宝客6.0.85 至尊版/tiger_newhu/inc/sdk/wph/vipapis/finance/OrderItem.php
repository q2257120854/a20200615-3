<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\finance;

class OrderItem {
	
	static $_TSPEC;
	public $order_id = null;
	public $schedule_id = null;
	public $po_no = null;
	public $transaction_time = null;
	public $create_time = null;
	public $barcode = null;
	public $document_type = null;
	public $quantity = null;
	public $warehouse = null;
	public $sale_price = null;
	public $bill_amount = null;
	public $total_promotion_amount = null;
	public $vendor_amount = null;
	public $vendor_rate = null;
	public $process_status = null;
	public $comments = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'schedule_id'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'transaction_time'
			),
			5 => array(
			'var' => 'create_time'
			),
			6 => array(
			'var' => 'barcode'
			),
			7 => array(
			'var' => 'document_type'
			),
			8 => array(
			'var' => 'quantity'
			),
			9 => array(
			'var' => 'warehouse'
			),
			10 => array(
			'var' => 'sale_price'
			),
			11 => array(
			'var' => 'bill_amount'
			),
			12 => array(
			'var' => 'total_promotion_amount'
			),
			13 => array(
			'var' => 'vendor_amount'
			),
			14 => array(
			'var' => 'vendor_rate'
			),
			15 => array(
			'var' => 'process_status'
			),
			16 => array(
			'var' => 'comments'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['transaction_time'])){
				
				$this->transaction_time = $vals['transaction_time'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['document_type'])){
				
				$this->document_type = $vals['document_type'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sale_price'])){
				
				$this->sale_price = $vals['sale_price'];
			}
			
			
			if (isset($vals['bill_amount'])){
				
				$this->bill_amount = $vals['bill_amount'];
			}
			
			
			if (isset($vals['total_promotion_amount'])){
				
				$this->total_promotion_amount = $vals['total_promotion_amount'];
			}
			
			
			if (isset($vals['vendor_amount'])){
				
				$this->vendor_amount = $vals['vendor_amount'];
			}
			
			
			if (isset($vals['vendor_rate'])){
				
				$this->vendor_rate = $vals['vendor_rate'];
			}
			
			
			if (isset($vals['process_status'])){
				
				$this->process_status = $vals['process_status'];
			}
			
			
			if (isset($vals['comments'])){
				
				$this->comments = $vals['comments'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderItem';
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
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("transaction_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transaction_time); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("document_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->document_type);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->quantity); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sale_price);
				
			}
			
			
			
			
			if ("bill_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_amount);
				
			}
			
			
			
			
			if ("total_promotion_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_promotion_amount);
				
			}
			
			
			
			
			if ("vendor_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendor_amount);
				
			}
			
			
			
			
			if ("vendor_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendor_rate);
				
			}
			
			
			
			
			if ("process_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->process_status);
				
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
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
		
		
		if($this->transaction_time !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_time');
			$xfer += $output->writeI64($this->transaction_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->document_type !== null) {
			
			$xfer += $output->writeFieldBegin('document_type');
			$xfer += $output->writeString($this->document_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI64($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('sale_price');
			$xfer += $output->writeDouble($this->sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_amount !== null) {
			
			$xfer += $output->writeFieldBegin('bill_amount');
			$xfer += $output->writeDouble($this->bill_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_promotion_amount !== null) {
			
			$xfer += $output->writeFieldBegin('total_promotion_amount');
			$xfer += $output->writeDouble($this->total_promotion_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_amount !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_amount');
			$xfer += $output->writeDouble($this->vendor_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_rate !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_rate');
			$xfer += $output->writeDouble($this->vendor_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->process_status !== null) {
			
			$xfer += $output->writeFieldBegin('process_status');
			$xfer += $output->writeString($this->process_status);
			
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