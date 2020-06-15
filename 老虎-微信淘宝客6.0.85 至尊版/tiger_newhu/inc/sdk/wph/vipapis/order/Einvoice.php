<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class Einvoice {
	
	static $_TSPEC;
	public $e_invoice_url = null;
	public $e_invoice_code = null;
	public $e_invoice_serial_no = null;
	public $vendor_tax_pay_no = null;
	public $is_writeback = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'e_invoice_url'
			),
			2 => array(
			'var' => 'e_invoice_code'
			),
			3 => array(
			'var' => 'e_invoice_serial_no'
			),
			4 => array(
			'var' => 'vendor_tax_pay_no'
			),
			5 => array(
			'var' => 'is_writeback'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['e_invoice_url'])){
				
				$this->e_invoice_url = $vals['e_invoice_url'];
			}
			
			
			if (isset($vals['e_invoice_code'])){
				
				$this->e_invoice_code = $vals['e_invoice_code'];
			}
			
			
			if (isset($vals['e_invoice_serial_no'])){
				
				$this->e_invoice_serial_no = $vals['e_invoice_serial_no'];
			}
			
			
			if (isset($vals['vendor_tax_pay_no'])){
				
				$this->vendor_tax_pay_no = $vals['vendor_tax_pay_no'];
			}
			
			
			if (isset($vals['is_writeback'])){
				
				$this->is_writeback = $vals['is_writeback'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Einvoice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("e_invoice_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->e_invoice_url);
				
			}
			
			
			
			
			if ("e_invoice_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->e_invoice_code);
				
			}
			
			
			
			
			if ("e_invoice_serial_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->e_invoice_serial_no);
				
			}
			
			
			
			
			if ("vendor_tax_pay_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_tax_pay_no);
				
			}
			
			
			
			
			if ("is_writeback" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_writeback);
				
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
		
		$xfer += $output->writeFieldBegin('e_invoice_url');
		$xfer += $output->writeString($this->e_invoice_url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('e_invoice_code');
		$xfer += $output->writeString($this->e_invoice_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('e_invoice_serial_no');
		$xfer += $output->writeString($this->e_invoice_serial_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_tax_pay_no');
		$xfer += $output->writeString($this->vendor_tax_pay_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_writeback');
		$xfer += $output->writeString($this->is_writeback);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>