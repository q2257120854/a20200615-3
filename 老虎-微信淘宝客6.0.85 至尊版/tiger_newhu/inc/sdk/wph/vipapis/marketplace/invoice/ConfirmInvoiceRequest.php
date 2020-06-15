<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\invoice;

class ConfirmInvoiceRequest {
	
	static $_TSPEC;
	public $order_id = null;
	public $invoice_type = null;
	public $invoice_title = null;
	public $invoice_num = null;
	public $invoice_code = null;
	public $invoice_url = null;
	public $red_punching_invoice = null;
	public $carrier = null;
	public $transport_no = null;
	public $blue_invoice_num = null;
	public $blue_invoice_code = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'invoice_type'
			),
			3 => array(
			'var' => 'invoice_title'
			),
			4 => array(
			'var' => 'invoice_num'
			),
			5 => array(
			'var' => 'invoice_code'
			),
			6 => array(
			'var' => 'invoice_url'
			),
			7 => array(
			'var' => 'red_punching_invoice'
			),
			8 => array(
			'var' => 'carrier'
			),
			9 => array(
			'var' => 'transport_no'
			),
			10 => array(
			'var' => 'blue_invoice_num'
			),
			11 => array(
			'var' => 'blue_invoice_code'
			),
			12 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['invoice_title'])){
				
				$this->invoice_title = $vals['invoice_title'];
			}
			
			
			if (isset($vals['invoice_num'])){
				
				$this->invoice_num = $vals['invoice_num'];
			}
			
			
			if (isset($vals['invoice_code'])){
				
				$this->invoice_code = $vals['invoice_code'];
			}
			
			
			if (isset($vals['invoice_url'])){
				
				$this->invoice_url = $vals['invoice_url'];
			}
			
			
			if (isset($vals['red_punching_invoice'])){
				
				$this->red_punching_invoice = $vals['red_punching_invoice'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['blue_invoice_num'])){
				
				$this->blue_invoice_num = $vals['blue_invoice_num'];
			}
			
			
			if (isset($vals['blue_invoice_code'])){
				
				$this->blue_invoice_code = $vals['blue_invoice_code'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmInvoiceRequest';
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
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
			}
			
			
			
			
			if ("invoice_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_title);
				
			}
			
			
			
			
			if ("invoice_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_num);
				
			}
			
			
			
			
			if ("invoice_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_code);
				
			}
			
			
			
			
			if ("invoice_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_url);
				
			}
			
			
			
			
			if ("red_punching_invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->red_punching_invoice);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("blue_invoice_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->blue_invoice_num);
				
			}
			
			
			
			
			if ("blue_invoice_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->blue_invoice_code);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
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
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invoice_type');
		$xfer += $output->writeString($this->invoice_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invoice_title');
		$xfer += $output->writeString($this->invoice_title);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->invoice_num !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_num');
			$xfer += $output->writeString($this->invoice_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_code !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_code');
			$xfer += $output->writeString($this->invoice_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_url !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_url');
			$xfer += $output->writeString($this->invoice_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->red_punching_invoice !== null) {
			
			$xfer += $output->writeFieldBegin('red_punching_invoice');
			$xfer += $output->writeString($this->red_punching_invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->blue_invoice_num !== null) {
			
			$xfer += $output->writeFieldBegin('blue_invoice_num');
			$xfer += $output->writeString($this->blue_invoice_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->blue_invoice_code !== null) {
			
			$xfer += $output->writeFieldBegin('blue_invoice_code');
			$xfer += $output->writeString($this->blue_invoice_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operator');
		$xfer += $output->writeString($this->operator);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>