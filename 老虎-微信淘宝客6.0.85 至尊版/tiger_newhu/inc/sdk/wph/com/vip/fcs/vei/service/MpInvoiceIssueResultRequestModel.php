<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class MpInvoiceIssueResultRequestModel {
	
	static $_TSPEC;
	public $serialNo = null;
	public $trusteeshipPlatform = null;
	public $resultType = null;
	public $mpInvoiceIssueResultModel = null;
	public $invoiceIssueResultMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serialNo'
			),
			2 => array(
			'var' => 'trusteeshipPlatform'
			),
			3 => array(
			'var' => 'resultType'
			),
			4 => array(
			'var' => 'mpInvoiceIssueResultModel'
			),
			5 => array(
			'var' => 'invoiceIssueResultMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serialNo'])){
				
				$this->serialNo = $vals['serialNo'];
			}
			
			
			if (isset($vals['trusteeshipPlatform'])){
				
				$this->trusteeshipPlatform = $vals['trusteeshipPlatform'];
			}
			
			
			if (isset($vals['resultType'])){
				
				$this->resultType = $vals['resultType'];
			}
			
			
			if (isset($vals['mpInvoiceIssueResultModel'])){
				
				$this->mpInvoiceIssueResultModel = $vals['mpInvoiceIssueResultModel'];
			}
			
			
			if (isset($vals['invoiceIssueResultMessage'])){
				
				$this->invoiceIssueResultMessage = $vals['invoiceIssueResultMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MpInvoiceIssueResultRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNo);
				
			}
			
			
			
			
			if ("trusteeshipPlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trusteeshipPlatform);
				
			}
			
			
			
			
			if ("resultType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultType);
				
			}
			
			
			
			
			if ("mpInvoiceIssueResultModel" == $schemeField){
				
				$needSkip = false;
				
				$this->mpInvoiceIssueResultModel = new \com\vip\fcs\vei\service\MpInvoiceIssueResultModel();
				$this->mpInvoiceIssueResultModel->read($input);
				
			}
			
			
			
			
			if ("invoiceIssueResultMessage" == $schemeField){
				
				$needSkip = false;
				
				$this->invoiceIssueResultMessage = new \com\vip\fcs\vei\service\InvoiceIssueResultMessage();
				$this->invoiceIssueResultMessage->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('serialNo');
		$xfer += $output->writeString($this->serialNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trusteeshipPlatform');
		$xfer += $output->writeString($this->trusteeshipPlatform);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultType');
		$xfer += $output->writeString($this->resultType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->mpInvoiceIssueResultModel !== null) {
			
			$xfer += $output->writeFieldBegin('mpInvoiceIssueResultModel');
			
			if (!is_object($this->mpInvoiceIssueResultModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->mpInvoiceIssueResultModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceIssueResultMessage !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceIssueResultMessage');
			
			if (!is_object($this->invoiceIssueResultMessage)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->invoiceIssueResultMessage->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>