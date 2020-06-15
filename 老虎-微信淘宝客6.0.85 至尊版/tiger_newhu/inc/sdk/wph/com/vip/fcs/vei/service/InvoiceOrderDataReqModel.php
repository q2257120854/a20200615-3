<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class InvoiceOrderDataReqModel {
	
	static $_TSPEC;
	public $orderSn = null;
	public $orderState = null;
	public $orderDate = null;
	public $orderAmount = null;
	public $customerTel = null;
	public $titleType = null;
	public $title = null;
	public $payType = null;
	public $consigneeProvinces = null;
	public $consigneeCity = null;
	public $warehouse = null;
	public $payDate = null;
	public $otherAmount = null;
	public $orderid = null;
	public $userid = null;
	public $orderElectornicInvoiceId = null;
	public $platform = null;
	public $discountAmount = null;
	public $walletAmount = null;
	public $invoiceDeductMoney = null;
	public $source = null;
	public $sourceRecordId = null;
	public $invoiceType = null;
	public $orderItems = null;
	public $vipClub = null;
	public $businessType = null;
	public $businessSubType = null;
	public $buyerTaxRegisterNo = null;
	public $remark = null;
	public $invoiceAddress = null;
	public $invoiceBank = null;
	public $invoiceBankAccount = null;
	public $invoicePhone = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'orderState'
			),
			3 => array(
			'var' => 'orderDate'
			),
			4 => array(
			'var' => 'orderAmount'
			),
			5 => array(
			'var' => 'customerTel'
			),
			6 => array(
			'var' => 'titleType'
			),
			7 => array(
			'var' => 'title'
			),
			8 => array(
			'var' => 'payType'
			),
			9 => array(
			'var' => 'consigneeProvinces'
			),
			10 => array(
			'var' => 'consigneeCity'
			),
			11 => array(
			'var' => 'warehouse'
			),
			12 => array(
			'var' => 'payDate'
			),
			13 => array(
			'var' => 'otherAmount'
			),
			14 => array(
			'var' => 'orderid'
			),
			15 => array(
			'var' => 'userid'
			),
			16 => array(
			'var' => 'orderElectornicInvoiceId'
			),
			17 => array(
			'var' => 'platform'
			),
			18 => array(
			'var' => 'discountAmount'
			),
			19 => array(
			'var' => 'walletAmount'
			),
			20 => array(
			'var' => 'invoiceDeductMoney'
			),
			21 => array(
			'var' => 'source'
			),
			22 => array(
			'var' => 'sourceRecordId'
			),
			23 => array(
			'var' => 'invoiceType'
			),
			24 => array(
			'var' => 'orderItems'
			),
			25 => array(
			'var' => 'vipClub'
			),
			26 => array(
			'var' => 'businessType'
			),
			27 => array(
			'var' => 'businessSubType'
			),
			28 => array(
			'var' => 'buyerTaxRegisterNo'
			),
			29 => array(
			'var' => 'remark'
			),
			30 => array(
			'var' => 'invoiceAddress'
			),
			31 => array(
			'var' => 'invoiceBank'
			),
			32 => array(
			'var' => 'invoiceBankAccount'
			),
			33 => array(
			'var' => 'invoicePhone'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderState'])){
				
				$this->orderState = $vals['orderState'];
			}
			
			
			if (isset($vals['orderDate'])){
				
				$this->orderDate = $vals['orderDate'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['customerTel'])){
				
				$this->customerTel = $vals['customerTel'];
			}
			
			
			if (isset($vals['titleType'])){
				
				$this->titleType = $vals['titleType'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['consigneeProvinces'])){
				
				$this->consigneeProvinces = $vals['consigneeProvinces'];
			}
			
			
			if (isset($vals['consigneeCity'])){
				
				$this->consigneeCity = $vals['consigneeCity'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['payDate'])){
				
				$this->payDate = $vals['payDate'];
			}
			
			
			if (isset($vals['otherAmount'])){
				
				$this->otherAmount = $vals['otherAmount'];
			}
			
			
			if (isset($vals['orderid'])){
				
				$this->orderid = $vals['orderid'];
			}
			
			
			if (isset($vals['userid'])){
				
				$this->userid = $vals['userid'];
			}
			
			
			if (isset($vals['orderElectornicInvoiceId'])){
				
				$this->orderElectornicInvoiceId = $vals['orderElectornicInvoiceId'];
			}
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
			if (isset($vals['discountAmount'])){
				
				$this->discountAmount = $vals['discountAmount'];
			}
			
			
			if (isset($vals['walletAmount'])){
				
				$this->walletAmount = $vals['walletAmount'];
			}
			
			
			if (isset($vals['invoiceDeductMoney'])){
				
				$this->invoiceDeductMoney = $vals['invoiceDeductMoney'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['sourceRecordId'])){
				
				$this->sourceRecordId = $vals['sourceRecordId'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['orderItems'])){
				
				$this->orderItems = $vals['orderItems'];
			}
			
			
			if (isset($vals['vipClub'])){
				
				$this->vipClub = $vals['vipClub'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['businessSubType'])){
				
				$this->businessSubType = $vals['businessSubType'];
			}
			
			
			if (isset($vals['buyerTaxRegisterNo'])){
				
				$this->buyerTaxRegisterNo = $vals['buyerTaxRegisterNo'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['invoiceAddress'])){
				
				$this->invoiceAddress = $vals['invoiceAddress'];
			}
			
			
			if (isset($vals['invoiceBank'])){
				
				$this->invoiceBank = $vals['invoiceBank'];
			}
			
			
			if (isset($vals['invoiceBankAccount'])){
				
				$this->invoiceBankAccount = $vals['invoiceBankAccount'];
			}
			
			
			if (isset($vals['invoicePhone'])){
				
				$this->invoicePhone = $vals['invoicePhone'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceOrderDataReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderState);
				
			}
			
			
			
			
			if ("orderDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderDate); 
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderAmount);
				
			}
			
			
			
			
			if ("customerTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerTel);
				
			}
			
			
			
			
			if ("titleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->titleType);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("consigneeProvinces" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consigneeProvinces);
				
			}
			
			
			
			
			if ("consigneeCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consigneeCity);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("payDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payDate); 
				
			}
			
			
			
			
			if ("otherAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->otherAmount);
				
			}
			
			
			
			
			if ("orderid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderid); 
				
			}
			
			
			
			
			if ("userid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userid);
				
			}
			
			
			
			
			if ("orderElectornicInvoiceId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderElectornicInvoiceId);
				
			}
			
			
			
			
			if ("platform" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->platform); 
				
			}
			
			
			
			
			if ("discountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discountAmount);
				
			}
			
			
			
			
			if ("walletAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->walletAmount);
				
			}
			
			
			
			
			if ("invoiceDeductMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->invoiceDeductMoney);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("sourceRecordId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceRecordId);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceType); 
				
			}
			
			
			
			
			if ("orderItems" == $schemeField){
				
				$needSkip = false;
				
				$this->orderItems = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\vei\service\OrderItemsModel();
						$elem1->read($input);
						
						$this->orderItems[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vipClub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipClub);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessType);
				
			}
			
			
			
			
			if ("businessSubType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessSubType);
				
			}
			
			
			
			
			if ("buyerTaxRegisterNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerTaxRegisterNo);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("invoiceAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceAddress);
				
			}
			
			
			
			
			if ("invoiceBank" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceBank);
				
			}
			
			
			
			
			if ("invoiceBankAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceBankAccount);
				
			}
			
			
			
			
			if ("invoicePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoicePhone);
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderState');
		$xfer += $output->writeString($this->orderState);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderDate !== null) {
			
			$xfer += $output->writeFieldBegin('orderDate');
			$xfer += $output->writeI64($this->orderDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAmount !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmount');
			$xfer += $output->writeDouble($this->orderAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerTel !== null) {
			
			$xfer += $output->writeFieldBegin('customerTel');
			$xfer += $output->writeString($this->customerTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->titleType !== null) {
			
			$xfer += $output->writeFieldBegin('titleType');
			$xfer += $output->writeString($this->titleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consigneeProvinces !== null) {
			
			$xfer += $output->writeFieldBegin('consigneeProvinces');
			$xfer += $output->writeString($this->consigneeProvinces);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consigneeCity !== null) {
			
			$xfer += $output->writeFieldBegin('consigneeCity');
			$xfer += $output->writeString($this->consigneeCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payDate !== null) {
			
			$xfer += $output->writeFieldBegin('payDate');
			$xfer += $output->writeI64($this->payDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->otherAmount !== null) {
			
			$xfer += $output->writeFieldBegin('otherAmount');
			$xfer += $output->writeDouble($this->otherAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderid !== null) {
			
			$xfer += $output->writeFieldBegin('orderid');
			$xfer += $output->writeI64($this->orderid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userid !== null) {
			
			$xfer += $output->writeFieldBegin('userid');
			$xfer += $output->writeString($this->userid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderElectornicInvoiceId !== null) {
			
			$xfer += $output->writeFieldBegin('orderElectornicInvoiceId');
			$xfer += $output->writeString($this->orderElectornicInvoiceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platform !== null) {
			
			$xfer += $output->writeFieldBegin('platform');
			$xfer += $output->writeI32($this->platform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('discountAmount');
			$xfer += $output->writeDouble($this->discountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->walletAmount !== null) {
			
			$xfer += $output->writeFieldBegin('walletAmount');
			$xfer += $output->writeDouble($this->walletAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceDeductMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceDeductMoney');
			$xfer += $output->writeDouble($this->invoiceDeductMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeString($this->source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceRecordId');
		$xfer += $output->writeString($this->sourceRecordId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invoiceType');
		$xfer += $output->writeI32($this->invoiceType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderItems !== null) {
			
			$xfer += $output->writeFieldBegin('orderItems');
			
			if (!is_array($this->orderItems)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderItems as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipClub !== null) {
			
			$xfer += $output->writeFieldBegin('vipClub');
			$xfer += $output->writeString($this->vipClub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeString($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessSubType !== null) {
			
			$xfer += $output->writeFieldBegin('businessSubType');
			$xfer += $output->writeString($this->businessSubType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerTaxRegisterNo !== null) {
			
			$xfer += $output->writeFieldBegin('buyerTaxRegisterNo');
			$xfer += $output->writeString($this->buyerTaxRegisterNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAddress !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAddress');
			$xfer += $output->writeString($this->invoiceAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceBank !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceBank');
			$xfer += $output->writeString($this->invoiceBank);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceBankAccount !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceBankAccount');
			$xfer += $output->writeString($this->invoiceBankAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoicePhone !== null) {
			
			$xfer += $output->writeFieldBegin('invoicePhone');
			$xfer += $output->writeString($this->invoicePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>