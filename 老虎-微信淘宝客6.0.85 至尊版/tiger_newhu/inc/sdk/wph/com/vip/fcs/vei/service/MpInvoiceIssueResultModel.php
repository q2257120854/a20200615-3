<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class MpInvoiceIssueResultModel {
	
	static $_TSPEC;
	public $invoiceCode = null;
	public $invoiceNo = null;
	public $invoiceDate = null;
	public $pdfUrl = null;
	public $taxControlCode = null;
	public $invoiceCheckCode = null;
	public $invoiceQrCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'invoiceCode'
			),
			2 => array(
			'var' => 'invoiceNo'
			),
			3 => array(
			'var' => 'invoiceDate'
			),
			4 => array(
			'var' => 'pdfUrl'
			),
			5 => array(
			'var' => 'taxControlCode'
			),
			6 => array(
			'var' => 'invoiceCheckCode'
			),
			7 => array(
			'var' => 'invoiceQrCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['invoiceCode'])){
				
				$this->invoiceCode = $vals['invoiceCode'];
			}
			
			
			if (isset($vals['invoiceNo'])){
				
				$this->invoiceNo = $vals['invoiceNo'];
			}
			
			
			if (isset($vals['invoiceDate'])){
				
				$this->invoiceDate = $vals['invoiceDate'];
			}
			
			
			if (isset($vals['pdfUrl'])){
				
				$this->pdfUrl = $vals['pdfUrl'];
			}
			
			
			if (isset($vals['taxControlCode'])){
				
				$this->taxControlCode = $vals['taxControlCode'];
			}
			
			
			if (isset($vals['invoiceCheckCode'])){
				
				$this->invoiceCheckCode = $vals['invoiceCheckCode'];
			}
			
			
			if (isset($vals['invoiceQrCode'])){
				
				$this->invoiceQrCode = $vals['invoiceQrCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MpInvoiceIssueResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("invoiceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCode);
				
			}
			
			
			
			
			if ("invoiceNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceNo);
				
			}
			
			
			
			
			if ("invoiceDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceDate);
				
			}
			
			
			
			
			if ("pdfUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdfUrl);
				
			}
			
			
			
			
			if ("taxControlCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxControlCode);
				
			}
			
			
			
			
			if ("invoiceCheckCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCheckCode);
				
			}
			
			
			
			
			if ("invoiceQrCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceQrCode);
				
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
		
		$xfer += $output->writeFieldBegin('invoiceCode');
		$xfer += $output->writeString($this->invoiceCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invoiceNo');
		$xfer += $output->writeString($this->invoiceNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invoiceDate');
		$xfer += $output->writeString($this->invoiceDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pdfUrl');
		$xfer += $output->writeString($this->pdfUrl);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->taxControlCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxControlCode');
			$xfer += $output->writeString($this->taxControlCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCheckCode !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCheckCode');
			$xfer += $output->writeString($this->invoiceCheckCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceQrCode !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceQrCode');
			$xfer += $output->writeString($this->invoiceQrCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>