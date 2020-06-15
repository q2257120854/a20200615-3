<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vipapis\productsale\service;

class ProductSaleInfo {
	
	static $_TSPEC;
	public $globalId = null;
	public $poOuName = null;
	public $vendorCode = null;
	public $brandCode = null;
	public $brandName = null;
	public $orderSn = null;
	public $addTime = null;
	public $issueDate = null;
	public $status = null;
	public $currencyCode = null;
	public $sellingPrice = null;
	public $issueQuantity = null;
	public $itemNo = null;
	public $itemDesc = null;
	public $orderAmount = null;
	public $moneyOver = null;
	public $moneyDiscountLevel = null;
	public $brandCut = null;
	public $brandDiscountLevel = null;
	public $zjAmount = null;
	public $marketPrice = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $warehouseName = null;
	public $serialNo = null;
	public $goodsActureAmt = null;
	public $rn = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'globalId'
			),
			2 => array(
			'var' => 'poOuName'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'brandCode'
			),
			5 => array(
			'var' => 'brandName'
			),
			6 => array(
			'var' => 'orderSn'
			),
			7 => array(
			'var' => 'addTime'
			),
			8 => array(
			'var' => 'issueDate'
			),
			9 => array(
			'var' => 'status'
			),
			10 => array(
			'var' => 'currencyCode'
			),
			11 => array(
			'var' => 'sellingPrice'
			),
			12 => array(
			'var' => 'issueQuantity'
			),
			13 => array(
			'var' => 'itemNo'
			),
			14 => array(
			'var' => 'itemDesc'
			),
			15 => array(
			'var' => 'orderAmount'
			),
			16 => array(
			'var' => 'moneyOver'
			),
			17 => array(
			'var' => 'moneyDiscountLevel'
			),
			18 => array(
			'var' => 'brandCut'
			),
			19 => array(
			'var' => 'brandDiscountLevel'
			),
			20 => array(
			'var' => 'zjAmount'
			),
			21 => array(
			'var' => 'marketPrice'
			),
			22 => array(
			'var' => 'country'
			),
			23 => array(
			'var' => 'province'
			),
			24 => array(
			'var' => 'city'
			),
			25 => array(
			'var' => 'warehouseName'
			),
			26 => array(
			'var' => 'serialNo'
			),
			27 => array(
			'var' => 'goodsActureAmt'
			),
			28 => array(
			'var' => 'rn'
			),
			29 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['poOuName'])){
				
				$this->poOuName = $vals['poOuName'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['issueDate'])){
				
				$this->issueDate = $vals['issueDate'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['sellingPrice'])){
				
				$this->sellingPrice = $vals['sellingPrice'];
			}
			
			
			if (isset($vals['issueQuantity'])){
				
				$this->issueQuantity = $vals['issueQuantity'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDesc'])){
				
				$this->itemDesc = $vals['itemDesc'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['moneyOver'])){
				
				$this->moneyOver = $vals['moneyOver'];
			}
			
			
			if (isset($vals['moneyDiscountLevel'])){
				
				$this->moneyDiscountLevel = $vals['moneyDiscountLevel'];
			}
			
			
			if (isset($vals['brandCut'])){
				
				$this->brandCut = $vals['brandCut'];
			}
			
			
			if (isset($vals['brandDiscountLevel'])){
				
				$this->brandDiscountLevel = $vals['brandDiscountLevel'];
			}
			
			
			if (isset($vals['zjAmount'])){
				
				$this->zjAmount = $vals['zjAmount'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['warehouseName'])){
				
				$this->warehouseName = $vals['warehouseName'];
			}
			
			
			if (isset($vals['serialNo'])){
				
				$this->serialNo = $vals['serialNo'];
			}
			
			
			if (isset($vals['goodsActureAmt'])){
				
				$this->goodsActureAmt = $vals['goodsActureAmt'];
			}
			
			
			if (isset($vals['rn'])){
				
				$this->rn = $vals['rn'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductSaleInfo';
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
			
			
			
			
			if ("poOuName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poOuName);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("issueDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->issueDate); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("sellingPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sellingPrice);
				
			}
			
			
			
			
			if ("issueQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->issueQuantity);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDesc);
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderAmount);
				
			}
			
			
			
			
			if ("moneyOver" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->moneyOver);
				
			}
			
			
			
			
			if ("moneyDiscountLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->moneyDiscountLevel);
				
			}
			
			
			
			
			if ("brandCut" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->brandCut);
				
			}
			
			
			
			
			if ("brandDiscountLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandDiscountLevel);
				
			}
			
			
			
			
			if ("zjAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->zjAmount);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->marketPrice);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("warehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseName);
				
			}
			
			
			
			
			if ("serialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNo);
				
			}
			
			
			
			
			if ("goodsActureAmt" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodsActureAmt);
				
			}
			
			
			
			
			if ("rn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rn); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
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
		
		
		if($this->poOuName !== null) {
			
			$xfer += $output->writeFieldBegin('poOuName');
			$xfer += $output->writeString($this->poOuName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
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
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->issueDate !== null) {
			
			$xfer += $output->writeFieldBegin('issueDate');
			$xfer += $output->writeI64($this->issueDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingPrice !== null) {
			
			$xfer += $output->writeFieldBegin('sellingPrice');
			$xfer += $output->writeDouble($this->sellingPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->issueQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('issueQuantity');
			$xfer += $output->writeDouble($this->issueQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('itemDesc');
			$xfer += $output->writeString($this->itemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAmount !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmount');
			$xfer += $output->writeDouble($this->orderAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moneyOver !== null) {
			
			$xfer += $output->writeFieldBegin('moneyOver');
			$xfer += $output->writeDouble($this->moneyOver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moneyDiscountLevel !== null) {
			
			$xfer += $output->writeFieldBegin('moneyDiscountLevel');
			$xfer += $output->writeString($this->moneyDiscountLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCut !== null) {
			
			$xfer += $output->writeFieldBegin('brandCut');
			$xfer += $output->writeDouble($this->brandCut);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandDiscountLevel !== null) {
			
			$xfer += $output->writeFieldBegin('brandDiscountLevel');
			$xfer += $output->writeString($this->brandDiscountLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zjAmount !== null) {
			
			$xfer += $output->writeFieldBegin('zjAmount');
			$xfer += $output->writeDouble($this->zjAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeDouble($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseName');
			$xfer += $output->writeString($this->warehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serialNo !== null) {
			
			$xfer += $output->writeFieldBegin('serialNo');
			$xfer += $output->writeString($this->serialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsActureAmt !== null) {
			
			$xfer += $output->writeFieldBegin('goodsActureAmt');
			$xfer += $output->writeDouble($this->goodsActureAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rn !== null) {
			
			$xfer += $output->writeFieldBegin('rn');
			$xfer += $output->writeI32($this->rn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>