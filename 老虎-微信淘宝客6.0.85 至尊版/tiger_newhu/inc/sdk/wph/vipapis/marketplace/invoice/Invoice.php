<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\invoice;

class Invoice {
	
	static $_TSPEC;
	public $order_id = null;
	public $order_status = null;
	public $order_time = null;
	public $invoice_status = null;
	public $invoice_type = null;
	public $invoice_title = null;
	public $tax_payer_no = null;
	public $ex_pay_money = null;
	public $transport_no = null;
	public $invoice_url = null;
	public $invoice_code = null;
	public $invoice_num = null;
	public $carrier = null;
	public $red_punching_invoice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'order_status'
			),
			3 => array(
			'var' => 'order_time'
			),
			4 => array(
			'var' => 'invoice_status'
			),
			5 => array(
			'var' => 'invoice_type'
			),
			6 => array(
			'var' => 'invoice_title'
			),
			7 => array(
			'var' => 'tax_payer_no'
			),
			8 => array(
			'var' => 'ex_pay_money'
			),
			9 => array(
			'var' => 'transport_no'
			),
			10 => array(
			'var' => 'invoice_url'
			),
			11 => array(
			'var' => 'invoice_code'
			),
			12 => array(
			'var' => 'invoice_num'
			),
			13 => array(
			'var' => 'carrier'
			),
			14 => array(
			'var' => 'red_punching_invoice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['order_time'])){
				
				$this->order_time = $vals['order_time'];
			}
			
			
			if (isset($vals['invoice_status'])){
				
				$this->invoice_status = $vals['invoice_status'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['invoice_title'])){
				
				$this->invoice_title = $vals['invoice_title'];
			}
			
			
			if (isset($vals['tax_payer_no'])){
				
				$this->tax_payer_no = $vals['tax_payer_no'];
			}
			
			
			if (isset($vals['ex_pay_money'])){
				
				$this->ex_pay_money = $vals['ex_pay_money'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['invoice_url'])){
				
				$this->invoice_url = $vals['invoice_url'];
			}
			
			
			if (isset($vals['invoice_code'])){
				
				$this->invoice_code = $vals['invoice_code'];
			}
			
			
			if (isset($vals['invoice_num'])){
				
				$this->invoice_num = $vals['invoice_num'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['red_punching_invoice'])){
				
				$this->red_punching_invoice = $vals['red_punching_invoice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Invoice';
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
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("order_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_time);
				
			}
			
			
			
			
			if ("invoice_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_status);
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
			}
			
			
			
			
			if ("invoice_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_title);
				
			}
			
			
			
			
			if ("tax_payer_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_payer_no);
				
			}
			
			
			
			
			if ("ex_pay_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ex_pay_money);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("invoice_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_url);
				
			}
			
			
			
			
			if ("invoice_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_code);
				
			}
			
			
			
			
			if ("invoice_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_num);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("red_punching_invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->red_punching_invoice);
				
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
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_time !== null) {
			
			$xfer += $output->writeFieldBegin('order_time');
			$xfer += $output->writeString($this->order_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_status !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_status');
			$xfer += $output->writeString($this->invoice_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeString($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_title !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_title');
			$xfer += $output->writeString($this->invoice_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_payer_no !== null) {
			
			$xfer += $output->writeFieldBegin('tax_payer_no');
			$xfer += $output->writeString($this->tax_payer_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ex_pay_money !== null) {
			
			$xfer += $output->writeFieldBegin('ex_pay_money');
			$xfer += $output->writeString($this->ex_pay_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_url !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_url');
			$xfer += $output->writeString($this->invoice_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_code !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_code');
			$xfer += $output->writeString($this->invoice_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_num !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_num');
			$xfer += $output->writeString($this->invoice_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->red_punching_invoice !== null) {
			
			$xfer += $output->writeFieldBegin('red_punching_invoice');
			$xfer += $output->writeString($this->red_punching_invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>