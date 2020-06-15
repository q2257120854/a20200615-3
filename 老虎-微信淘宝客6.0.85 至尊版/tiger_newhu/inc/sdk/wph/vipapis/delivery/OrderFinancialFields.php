<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class OrderFinancialFields {
	
	static $_TSPEC;
	public $order_id = null;
	public $vip_order_total_amount = null;
	public $carriage = null;
	public $vendor_discount = null;
	public $vip_total_deduction = null;
	public $actual_payment_amount = null;
	public $invoice_amount = null;
	public $vip_card_amount = null;
	public $pay_time = null;
	public $invoice_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'vip_order_total_amount'
			),
			3 => array(
			'var' => 'carriage'
			),
			4 => array(
			'var' => 'vendor_discount'
			),
			5 => array(
			'var' => 'vip_total_deduction'
			),
			6 => array(
			'var' => 'actual_payment_amount'
			),
			7 => array(
			'var' => 'invoice_amount'
			),
			8 => array(
			'var' => 'vip_card_amount'
			),
			9 => array(
			'var' => 'pay_time'
			),
			10 => array(
			'var' => 'invoice_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['vip_order_total_amount'])){
				
				$this->vip_order_total_amount = $vals['vip_order_total_amount'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['vendor_discount'])){
				
				$this->vendor_discount = $vals['vendor_discount'];
			}
			
			
			if (isset($vals['vip_total_deduction'])){
				
				$this->vip_total_deduction = $vals['vip_total_deduction'];
			}
			
			
			if (isset($vals['actual_payment_amount'])){
				
				$this->actual_payment_amount = $vals['actual_payment_amount'];
			}
			
			
			if (isset($vals['invoice_amount'])){
				
				$this->invoice_amount = $vals['invoice_amount'];
			}
			
			
			if (isset($vals['vip_card_amount'])){
				
				$this->vip_card_amount = $vals['vip_card_amount'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderFinancialFields';
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
			
			
			
			
			if ("vip_order_total_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_order_total_amount);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("vendor_discount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendor_discount);
				
			}
			
			
			
			
			if ("vip_total_deduction" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_total_deduction);
				
			}
			
			
			
			
			if ("actual_payment_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->actual_payment_amount);
				
			}
			
			
			
			
			if ("invoice_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->invoice_amount);
				
			}
			
			
			
			
			if ("vip_card_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vip_card_amount);
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pay_time); 
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
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
		
		
		if($this->vip_order_total_amount !== null) {
			
			$xfer += $output->writeFieldBegin('vip_order_total_amount');
			$xfer += $output->writeDouble($this->vip_order_total_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_discount !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_discount');
			$xfer += $output->writeDouble($this->vendor_discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_total_deduction !== null) {
			
			$xfer += $output->writeFieldBegin('vip_total_deduction');
			$xfer += $output->writeDouble($this->vip_total_deduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_payment_amount !== null) {
			
			$xfer += $output->writeFieldBegin('actual_payment_amount');
			$xfer += $output->writeDouble($this->actual_payment_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_amount !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_amount');
			$xfer += $output->writeDouble($this->invoice_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_card_amount !== null) {
			
			$xfer += $output->writeFieldBegin('vip_card_amount');
			$xfer += $output->writeDouble($this->vip_card_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_time !== null) {
			
			$xfer += $output->writeFieldBegin('pay_time');
			$xfer += $output->writeI64($this->pay_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeString($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>