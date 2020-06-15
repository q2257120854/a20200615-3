<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OrderInvoiceResp {
	
	static $_TSPEC;
	public $order_id = null;
	public $package_no = null;
	public $invoice_title = null;
	public $invoice_amount = null;
	public $invoice_type = null;
	public $tax_pay_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'package_no'
			),
			3 => array(
			'var' => 'invoice_title'
			),
			4 => array(
			'var' => 'invoice_amount'
			),
			5 => array(
			'var' => 'invoice_type'
			),
			6 => array(
			'var' => 'tax_pay_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['invoice_title'])){
				
				$this->invoice_title = $vals['invoice_title'];
			}
			
			
			if (isset($vals['invoice_amount'])){
				
				$this->invoice_amount = $vals['invoice_amount'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['tax_pay_no'])){
				
				$this->tax_pay_no = $vals['tax_pay_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInvoiceResp';
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
			
			
			
			
			if ("package_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_no);
				
			}
			
			
			
			
			if ("invoice_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_title);
				
			}
			
			
			
			
			if ("invoice_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->invoice_amount);
				
			}
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoice_type); 
				
			}
			
			
			
			
			if ("tax_pay_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_pay_no);
				
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
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_title !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_title');
			$xfer += $output->writeString($this->invoice_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_amount !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_amount');
			$xfer += $output->writeDouble($this->invoice_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeI32($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_pay_no !== null) {
			
			$xfer += $output->writeFieldBegin('tax_pay_no');
			$xfer += $output->writeString($this->tax_pay_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>