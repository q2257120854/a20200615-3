<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class BaseBillAndDiscountSource {
	
	static $_TSPEC;
	public $globalId = null;
	public $vendorId = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $orgId = null;
	public $orgName = null;
	public $warehouse = null;
	public $scheduleId = null;
	public $scheduleName = null;
	public $brandId = null;
	public $vBrandName = null;
	public $poNo = null;
	public $poCreationDate = null;
	public $origPoNo = null;
	public $orderNum = null;
	public $orderDate = null;
	public $itemNo = null;
	public $itemDescription = null;
	public $goodsNo = null;
	public $brandCode = null;
	public $brandName = null;
	public $transactionQuantity = null;
	public $dataSign = null;
	public $orderPrice = null;
	public $currencyCode = null;
	public $taxRate = null;
	public $periodName = null;
	public $transactionTypeId = null;
	public $transactionDate = null;
	public $payableBillAmount = null;
	public $vendorRate = null;
	public $confirmNo = null;
	public $salePlatform = null;
	public $salePlatformName = null;
	public $createdTime = null;
	public $updatedTime = null;
	public $isDeleted = null;
	public $grossMarginRate = null;
	public $remark = null;
	public $poPrice = null;
	public $poTaxPrice = null;
	public $payableTotalBillAmount = null;
	public $detailLineType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'globalId'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			6 => array(
			'var' => 'orgId'
			),
			7 => array(
			'var' => 'orgName'
			),
			8 => array(
			'var' => 'warehouse'
			),
			9 => array(
			'var' => 'scheduleId'
			),
			10 => array(
			'var' => 'scheduleName'
			),
			11 => array(
			'var' => 'brandId'
			),
			12 => array(
			'var' => 'vBrandName'
			),
			13 => array(
			'var' => 'poNo'
			),
			14 => array(
			'var' => 'poCreationDate'
			),
			15 => array(
			'var' => 'origPoNo'
			),
			16 => array(
			'var' => 'orderNum'
			),
			17 => array(
			'var' => 'orderDate'
			),
			18 => array(
			'var' => 'itemNo'
			),
			19 => array(
			'var' => 'itemDescription'
			),
			20 => array(
			'var' => 'goodsNo'
			),
			21 => array(
			'var' => 'brandCode'
			),
			22 => array(
			'var' => 'brandName'
			),
			23 => array(
			'var' => 'transactionQuantity'
			),
			24 => array(
			'var' => 'dataSign'
			),
			25 => array(
			'var' => 'orderPrice'
			),
			26 => array(
			'var' => 'currencyCode'
			),
			27 => array(
			'var' => 'taxRate'
			),
			28 => array(
			'var' => 'periodName'
			),
			29 => array(
			'var' => 'transactionTypeId'
			),
			30 => array(
			'var' => 'transactionDate'
			),
			31 => array(
			'var' => 'payableBillAmount'
			),
			33 => array(
			'var' => 'vendorRate'
			),
			34 => array(
			'var' => 'confirmNo'
			),
			35 => array(
			'var' => 'salePlatform'
			),
			36 => array(
			'var' => 'salePlatformName'
			),
			37 => array(
			'var' => 'createdTime'
			),
			38 => array(
			'var' => 'updatedTime'
			),
			39 => array(
			'var' => 'isDeleted'
			),
			40 => array(
			'var' => 'grossMarginRate'
			),
			41 => array(
			'var' => 'remark'
			),
			42 => array(
			'var' => 'poPrice'
			),
			43 => array(
			'var' => 'poTaxPrice'
			),
			48 => array(
			'var' => 'payableTotalBillAmount'
			),
			49 => array(
			'var' => 'detailLineType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['orgName'])){
				
				$this->orgName = $vals['orgName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['scheduleId'])){
				
				$this->scheduleId = $vals['scheduleId'];
			}
			
			
			if (isset($vals['scheduleName'])){
				
				$this->scheduleName = $vals['scheduleName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['vBrandName'])){
				
				$this->vBrandName = $vals['vBrandName'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['poCreationDate'])){
				
				$this->poCreationDate = $vals['poCreationDate'];
			}
			
			
			if (isset($vals['origPoNo'])){
				
				$this->origPoNo = $vals['origPoNo'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['orderDate'])){
				
				$this->orderDate = $vals['orderDate'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDescription'])){
				
				$this->itemDescription = $vals['itemDescription'];
			}
			
			
			if (isset($vals['goodsNo'])){
				
				$this->goodsNo = $vals['goodsNo'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['transactionQuantity'])){
				
				$this->transactionQuantity = $vals['transactionQuantity'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
			if (isset($vals['orderPrice'])){
				
				$this->orderPrice = $vals['orderPrice'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['transactionTypeId'])){
				
				$this->transactionTypeId = $vals['transactionTypeId'];
			}
			
			
			if (isset($vals['transactionDate'])){
				
				$this->transactionDate = $vals['transactionDate'];
			}
			
			
			if (isset($vals['payableBillAmount'])){
				
				$this->payableBillAmount = $vals['payableBillAmount'];
			}
			
			
			if (isset($vals['vendorRate'])){
				
				$this->vendorRate = $vals['vendorRate'];
			}
			
			
			if (isset($vals['confirmNo'])){
				
				$this->confirmNo = $vals['confirmNo'];
			}
			
			
			if (isset($vals['salePlatform'])){
				
				$this->salePlatform = $vals['salePlatform'];
			}
			
			
			if (isset($vals['salePlatformName'])){
				
				$this->salePlatformName = $vals['salePlatformName'];
			}
			
			
			if (isset($vals['createdTime'])){
				
				$this->createdTime = $vals['createdTime'];
			}
			
			
			if (isset($vals['updatedTime'])){
				
				$this->updatedTime = $vals['updatedTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['poPrice'])){
				
				$this->poPrice = $vals['poPrice'];
			}
			
			
			if (isset($vals['poTaxPrice'])){
				
				$this->poTaxPrice = $vals['poTaxPrice'];
			}
			
			
			if (isset($vals['payableTotalBillAmount'])){
				
				$this->payableTotalBillAmount = $vals['payableTotalBillAmount'];
			}
			
			
			if (isset($vals['detailLineType'])){
				
				$this->detailLineType = $vals['detailLineType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BaseBillAndDiscountSource';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgId);
				
			}
			
			
			
			
			if ("orgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("scheduleId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleId);
				
			}
			
			
			
			
			if ("scheduleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduleName);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("vBrandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vBrandName);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("poCreationDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poCreationDate);
				
			}
			
			
			
			
			if ("origPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->origPoNo);
				
			}
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("orderDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderDate);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDescription);
				
			}
			
			
			
			
			if ("goodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsNo);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("transactionQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->transactionQuantity);
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataSign); 
				
			}
			
			
			
			
			if ("orderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderPrice);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("transactionTypeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeId);
				
			}
			
			
			
			
			if ("transactionDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transactionDate);
				
			}
			
			
			
			
			if ("payableBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableBillAmount);
				
			}
			
			
			
			
			if ("vendorRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vendorRate);
				
			}
			
			
			
			
			if ("confirmNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->confirmNo);
				
			}
			
			
			
			
			if ("salePlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatform);
				
			}
			
			
			
			
			if ("salePlatformName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatformName);
				
			}
			
			
			
			
			if ("createdTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdTime);
				
			}
			
			
			
			
			if ("updatedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updatedTime);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->isDeleted); 
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMarginRate);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("poPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poPrice);
				
			}
			
			
			
			
			if ("poTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poTaxPrice);
				
			}
			
			
			
			
			if ("payableTotalBillAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payableTotalBillAmount);
				
			}
			
			
			
			
			if ("detailLineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailLineType);
				
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
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeString($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgName !== null) {
			
			$xfer += $output->writeFieldBegin('orgName');
			$xfer += $output->writeString($this->orgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleId');
			$xfer += $output->writeString($this->scheduleId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduleName !== null) {
			
			$xfer += $output->writeFieldBegin('scheduleName');
			$xfer += $output->writeString($this->scheduleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vBrandName !== null) {
			
			$xfer += $output->writeFieldBegin('vBrandName');
			$xfer += $output->writeString($this->vBrandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCreationDate !== null) {
			
			$xfer += $output->writeFieldBegin('poCreationDate');
			$xfer += $output->writeString($this->poCreationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->origPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('origPoNo');
			$xfer += $output->writeString($this->origPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDate !== null) {
			
			$xfer += $output->writeFieldBegin('orderDate');
			$xfer += $output->writeString($this->orderDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDescription !== null) {
			
			$xfer += $output->writeFieldBegin('itemDescription');
			$xfer += $output->writeString($this->itemDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodsNo');
			$xfer += $output->writeString($this->goodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCode !== null) {
			
			$xfer += $output->writeFieldBegin('brandCode');
			$xfer += $output->writeString($this->brandCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('transactionQuantity');
			$xfer += $output->writeDouble($this->transactionQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeI32($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('orderPrice');
			$xfer += $output->writeString($this->orderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeId');
			$xfer += $output->writeString($this->transactionTypeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionDate !== null) {
			
			$xfer += $output->writeFieldBegin('transactionDate');
			$xfer += $output->writeI64($this->transactionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableBillAmount');
			$xfer += $output->writeDouble($this->payableBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorRate !== null) {
			
			$xfer += $output->writeFieldBegin('vendorRate');
			$xfer += $output->writeDouble($this->vendorRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmNo !== null) {
			
			$xfer += $output->writeFieldBegin('confirmNo');
			$xfer += $output->writeString($this->confirmNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatform !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatform');
			$xfer += $output->writeString($this->salePlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatformName !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatformName');
			$xfer += $output->writeString($this->salePlatformName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTime !== null) {
			
			$xfer += $output->writeFieldBegin('createdTime');
			$xfer += $output->writeI64($this->createdTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedTime !== null) {
			
			$xfer += $output->writeFieldBegin('updatedTime');
			$xfer += $output->writeI64($this->updatedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI16($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeString($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poPrice');
			$xfer += $output->writeDouble($this->poPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poTaxPrice');
			$xfer += $output->writeDouble($this->poTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payableTotalBillAmount !== null) {
			
			$xfer += $output->writeFieldBegin('payableTotalBillAmount');
			$xfer += $output->writeDouble($this->payableTotalBillAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailLineType !== null) {
			
			$xfer += $output->writeFieldBegin('detailLineType');
			$xfer += $output->writeString($this->detailLineType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>