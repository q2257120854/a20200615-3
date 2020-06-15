<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service;

class TaxInfo {
	
	static $_TSPEC;
	public $platformCode = null;
	public $message = null;
	public $notifyType = null;
	public $notifyTime = null;
	public $orderId = null;
	public $ticketSn = null;
	public $ticketCode = null;
	public $ticketDate = null;
	public $ticketStatus = null;
	public $amountHasTax = null;
	public $amountNoTax = null;
	public $ticketTaxAmount = null;
	public $checkCode = null;
	public $pdfUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'platformCode'
			),
			2 => array(
			'var' => 'message'
			),
			3 => array(
			'var' => 'notifyType'
			),
			4 => array(
			'var' => 'notifyTime'
			),
			5 => array(
			'var' => 'orderId'
			),
			6 => array(
			'var' => 'ticketSn'
			),
			7 => array(
			'var' => 'ticketCode'
			),
			8 => array(
			'var' => 'ticketDate'
			),
			9 => array(
			'var' => 'ticketStatus'
			),
			10 => array(
			'var' => 'amountHasTax'
			),
			11 => array(
			'var' => 'amountNoTax'
			),
			12 => array(
			'var' => 'ticketTaxAmount'
			),
			13 => array(
			'var' => 'checkCode'
			),
			14 => array(
			'var' => 'pdfUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['platformCode'])){
				
				$this->platformCode = $vals['platformCode'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['notifyType'])){
				
				$this->notifyType = $vals['notifyType'];
			}
			
			
			if (isset($vals['notifyTime'])){
				
				$this->notifyTime = $vals['notifyTime'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['ticketSn'])){
				
				$this->ticketSn = $vals['ticketSn'];
			}
			
			
			if (isset($vals['ticketCode'])){
				
				$this->ticketCode = $vals['ticketCode'];
			}
			
			
			if (isset($vals['ticketDate'])){
				
				$this->ticketDate = $vals['ticketDate'];
			}
			
			
			if (isset($vals['ticketStatus'])){
				
				$this->ticketStatus = $vals['ticketStatus'];
			}
			
			
			if (isset($vals['amountHasTax'])){
				
				$this->amountHasTax = $vals['amountHasTax'];
			}
			
			
			if (isset($vals['amountNoTax'])){
				
				$this->amountNoTax = $vals['amountNoTax'];
			}
			
			
			if (isset($vals['ticketTaxAmount'])){
				
				$this->ticketTaxAmount = $vals['ticketTaxAmount'];
			}
			
			
			if (isset($vals['checkCode'])){
				
				$this->checkCode = $vals['checkCode'];
			}
			
			
			if (isset($vals['pdfUrl'])){
				
				$this->pdfUrl = $vals['pdfUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TaxInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("platformCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platformCode);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("notifyType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->notifyType);
				
			}
			
			
			
			
			if ("notifyTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->notifyTime);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("ticketSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ticketSn);
				
			}
			
			
			
			
			if ("ticketCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ticketCode);
				
			}
			
			
			
			
			if ("ticketDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ticketDate);
				
			}
			
			
			
			
			if ("ticketStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->ticketStatus); 
				
			}
			
			
			
			
			if ("amountHasTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amountHasTax);
				
			}
			
			
			
			
			if ("amountNoTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amountNoTax);
				
			}
			
			
			
			
			if ("ticketTaxAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ticketTaxAmount);
				
			}
			
			
			
			
			if ("checkCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->checkCode);
				
			}
			
			
			
			
			if ("pdfUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdfUrl);
				
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
		
		if($this->platformCode !== null) {
			
			$xfer += $output->writeFieldBegin('platformCode');
			$xfer += $output->writeString($this->platformCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('message');
		$xfer += $output->writeString($this->message);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('notifyType');
		$xfer += $output->writeString($this->notifyType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('notifyTime');
		$xfer += $output->writeString($this->notifyTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderId');
		$xfer += $output->writeString($this->orderId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ticketSn !== null) {
			
			$xfer += $output->writeFieldBegin('ticketSn');
			$xfer += $output->writeString($this->ticketSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ticketCode !== null) {
			
			$xfer += $output->writeFieldBegin('ticketCode');
			$xfer += $output->writeString($this->ticketCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('ticketDate');
		$xfer += $output->writeString($this->ticketDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ticketStatus');
		$xfer += $output->writeI32($this->ticketStatus);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->amountHasTax !== null) {
			
			$xfer += $output->writeFieldBegin('amountHasTax');
			$xfer += $output->writeString($this->amountHasTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amountNoTax !== null) {
			
			$xfer += $output->writeFieldBegin('amountNoTax');
			$xfer += $output->writeString($this->amountNoTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ticketTaxAmount !== null) {
			
			$xfer += $output->writeFieldBegin('ticketTaxAmount');
			$xfer += $output->writeString($this->ticketTaxAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->checkCode !== null) {
			
			$xfer += $output->writeFieldBegin('checkCode');
			$xfer += $output->writeString($this->checkCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdfUrl !== null) {
			
			$xfer += $output->writeFieldBegin('pdfUrl');
			$xfer += $output->writeString($this->pdfUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>