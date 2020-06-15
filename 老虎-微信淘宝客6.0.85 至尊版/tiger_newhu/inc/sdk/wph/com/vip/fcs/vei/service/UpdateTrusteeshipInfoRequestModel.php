<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class UpdateTrusteeshipInfoRequestModel {
	
	static $_TSPEC;
	public $storeSource = null;
	public $storeId = null;
	public $taxRegisterNo = null;
	public $trusteeshipStatus = null;
	public $signTime = null;
	public $trusteeshipStartTime = null;
	public $trusteeshipEndTime = null;
	public $trusteeshipPlatform = null;
	public $trusteeshipType = null;
	public $singleInvoiceAmountLimit = null;
	public $invoiceType = null;
	public $sellerName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeSource'
			),
			2 => array(
			'var' => 'storeId'
			),
			3 => array(
			'var' => 'taxRegisterNo'
			),
			4 => array(
			'var' => 'trusteeshipStatus'
			),
			5 => array(
			'var' => 'signTime'
			),
			6 => array(
			'var' => 'trusteeshipStartTime'
			),
			7 => array(
			'var' => 'trusteeshipEndTime'
			),
			8 => array(
			'var' => 'trusteeshipPlatform'
			),
			9 => array(
			'var' => 'trusteeshipType'
			),
			10 => array(
			'var' => 'singleInvoiceAmountLimit'
			),
			11 => array(
			'var' => 'invoiceType'
			),
			12 => array(
			'var' => 'sellerName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['taxRegisterNo'])){
				
				$this->taxRegisterNo = $vals['taxRegisterNo'];
			}
			
			
			if (isset($vals['trusteeshipStatus'])){
				
				$this->trusteeshipStatus = $vals['trusteeshipStatus'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['trusteeshipStartTime'])){
				
				$this->trusteeshipStartTime = $vals['trusteeshipStartTime'];
			}
			
			
			if (isset($vals['trusteeshipEndTime'])){
				
				$this->trusteeshipEndTime = $vals['trusteeshipEndTime'];
			}
			
			
			if (isset($vals['trusteeshipPlatform'])){
				
				$this->trusteeshipPlatform = $vals['trusteeshipPlatform'];
			}
			
			
			if (isset($vals['trusteeshipType'])){
				
				$this->trusteeshipType = $vals['trusteeshipType'];
			}
			
			
			if (isset($vals['singleInvoiceAmountLimit'])){
				
				$this->singleInvoiceAmountLimit = $vals['singleInvoiceAmountLimit'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['sellerName'])){
				
				$this->sellerName = $vals['sellerName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateTrusteeshipInfoRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->storeSource); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("taxRegisterNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRegisterNo);
				
			}
			
			
			
			
			if ("trusteeshipStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->trusteeshipStatus); 
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTime); 
				
			}
			
			
			
			
			if ("trusteeshipStartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trusteeshipStartTime); 
				
			}
			
			
			
			
			if ("trusteeshipEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trusteeshipEndTime); 
				
			}
			
			
			
			
			if ("trusteeshipPlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trusteeshipPlatform);
				
			}
			
			
			
			
			if ("trusteeshipType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->trusteeshipType); 
				
			}
			
			
			
			
			if ("singleInvoiceAmountLimit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->singleInvoiceAmountLimit);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("sellerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellerName);
				
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
		
		$xfer += $output->writeFieldBegin('storeSource');
		$xfer += $output->writeByte($this->storeSource);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeId');
		$xfer += $output->writeString($this->storeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('taxRegisterNo');
		$xfer += $output->writeString($this->taxRegisterNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trusteeshipStatus !== null) {
			
			$xfer += $output->writeFieldBegin('trusteeshipStatus');
			$xfer += $output->writeByte($this->trusteeshipStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeI64($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trusteeshipStartTime !== null) {
			
			$xfer += $output->writeFieldBegin('trusteeshipStartTime');
			$xfer += $output->writeI64($this->trusteeshipStartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trusteeshipEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('trusteeshipEndTime');
			$xfer += $output->writeI64($this->trusteeshipEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('trusteeshipPlatform');
		$xfer += $output->writeString($this->trusteeshipPlatform);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trusteeshipType !== null) {
			
			$xfer += $output->writeFieldBegin('trusteeshipType');
			$xfer += $output->writeByte($this->trusteeshipType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->singleInvoiceAmountLimit !== null) {
			
			$xfer += $output->writeFieldBegin('singleInvoiceAmountLimit');
			$xfer += $output->writeString($this->singleInvoiceAmountLimit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellerName !== null) {
			
			$xfer += $output->writeFieldBegin('sellerName');
			$xfer += $output->writeString($this->sellerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>