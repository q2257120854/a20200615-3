<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtSaleOrderInfoModel {
	
	static $_TSPEC;
	public $po = null;
	public $sizeSn = null;
	public $goodName = null;
	public $goodRecordName = null;
	public $goodSn = null;
	public $standardType = null;
	public $brandId = null;
	public $goodRecordNo = null;
	public $price = null;
	public $priceTaxfree = null;
	public $printPrice = null;
	public $amount = null;
	public $unit = null;
	public $parcelTaxNo = null;
	public $brand = null;
	public $country = null;
	public $netWeight = null;
	public $grossWeight = null;
	public $vendorCode = null;
	public $noPo = null;
	public $hsCode = null;
	public $userDefined1 = null;
	public $userDefined2 = null;
	public $userDefined3 = null;
	public $userDefined4 = null;
	public $userDefined5 = null;
	public $userDefined6 = null;
	public $userDefined7 = null;
	public $userDefined8 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po'
			),
			2 => array(
			'var' => 'sizeSn'
			),
			3 => array(
			'var' => 'goodName'
			),
			4 => array(
			'var' => 'goodRecordName'
			),
			5 => array(
			'var' => 'goodSn'
			),
			6 => array(
			'var' => 'standardType'
			),
			7 => array(
			'var' => 'brandId'
			),
			8 => array(
			'var' => 'goodRecordNo'
			),
			9 => array(
			'var' => 'price'
			),
			10 => array(
			'var' => 'priceTaxfree'
			),
			11 => array(
			'var' => 'printPrice'
			),
			12 => array(
			'var' => 'amount'
			),
			13 => array(
			'var' => 'unit'
			),
			14 => array(
			'var' => 'parcelTaxNo'
			),
			15 => array(
			'var' => 'brand'
			),
			16 => array(
			'var' => 'country'
			),
			17 => array(
			'var' => 'netWeight'
			),
			18 => array(
			'var' => 'grossWeight'
			),
			19 => array(
			'var' => 'vendorCode'
			),
			20 => array(
			'var' => 'noPo'
			),
			21 => array(
			'var' => 'hsCode'
			),
			22 => array(
			'var' => 'userDefined1'
			),
			23 => array(
			'var' => 'userDefined2'
			),
			24 => array(
			'var' => 'userDefined3'
			),
			25 => array(
			'var' => 'userDefined4'
			),
			26 => array(
			'var' => 'userDefined5'
			),
			27 => array(
			'var' => 'userDefined6'
			),
			28 => array(
			'var' => 'userDefined7'
			),
			29 => array(
			'var' => 'userDefined8'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['sizeSn'])){
				
				$this->sizeSn = $vals['sizeSn'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['goodRecordName'])){
				
				$this->goodRecordName = $vals['goodRecordName'];
			}
			
			
			if (isset($vals['goodSn'])){
				
				$this->goodSn = $vals['goodSn'];
			}
			
			
			if (isset($vals['standardType'])){
				
				$this->standardType = $vals['standardType'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['goodRecordNo'])){
				
				$this->goodRecordNo = $vals['goodRecordNo'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['priceTaxfree'])){
				
				$this->priceTaxfree = $vals['priceTaxfree'];
			}
			
			
			if (isset($vals['printPrice'])){
				
				$this->printPrice = $vals['printPrice'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['parcelTaxNo'])){
				
				$this->parcelTaxNo = $vals['parcelTaxNo'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['netWeight'])){
				
				$this->netWeight = $vals['netWeight'];
			}
			
			
			if (isset($vals['grossWeight'])){
				
				$this->grossWeight = $vals['grossWeight'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['noPo'])){
				
				$this->noPo = $vals['noPo'];
			}
			
			
			if (isset($vals['hsCode'])){
				
				$this->hsCode = $vals['hsCode'];
			}
			
			
			if (isset($vals['userDefined1'])){
				
				$this->userDefined1 = $vals['userDefined1'];
			}
			
			
			if (isset($vals['userDefined2'])){
				
				$this->userDefined2 = $vals['userDefined2'];
			}
			
			
			if (isset($vals['userDefined3'])){
				
				$this->userDefined3 = $vals['userDefined3'];
			}
			
			
			if (isset($vals['userDefined4'])){
				
				$this->userDefined4 = $vals['userDefined4'];
			}
			
			
			if (isset($vals['userDefined5'])){
				
				$this->userDefined5 = $vals['userDefined5'];
			}
			
			
			if (isset($vals['userDefined6'])){
				
				$this->userDefined6 = $vals['userDefined6'];
			}
			
			
			if (isset($vals['userDefined7'])){
				
				$this->userDefined7 = $vals['userDefined7'];
			}
			
			
			if (isset($vals['userDefined8'])){
				
				$this->userDefined8 = $vals['userDefined8'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtSaleOrderInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("sizeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeSn);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("goodRecordName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodRecordName);
				
			}
			
			
			
			
			if ("goodSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodSn);
				
			}
			
			
			
			
			if ("standardType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->standardType);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("goodRecordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodRecordNo);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("priceTaxfree" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->priceTaxfree);
				
			}
			
			
			
			
			if ("printPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->printPrice);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("parcelTaxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parcelTaxNo);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("netWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->netWeight);
				
			}
			
			
			
			
			if ("grossWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossWeight);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("noPo" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->noPo); 
				
			}
			
			
			
			
			if ("hsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hsCode);
				
			}
			
			
			
			
			if ("userDefined1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined1);
				
			}
			
			
			
			
			if ("userDefined2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined2);
				
			}
			
			
			
			
			if ("userDefined3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined3);
				
			}
			
			
			
			
			if ("userDefined4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined4);
				
			}
			
			
			
			
			if ("userDefined5" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userDefined5); 
				
			}
			
			
			
			
			if ("userDefined6" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userDefined6); 
				
			}
			
			
			
			
			if ("userDefined7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined7);
				
			}
			
			
			
			
			if ("userDefined8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDefined8);
				
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
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeSn !== null) {
			
			$xfer += $output->writeFieldBegin('sizeSn');
			$xfer += $output->writeString($this->sizeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('goodRecordName');
		$xfer += $output->writeString($this->goodRecordName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goodSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodSn');
			$xfer += $output->writeString($this->goodSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standardType !== null) {
			
			$xfer += $output->writeFieldBegin('standardType');
			$xfer += $output->writeString($this->standardType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('brandId');
		$xfer += $output->writeString($this->brandId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goodRecordNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodRecordNo');
			$xfer += $output->writeString($this->goodRecordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeDouble($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('priceTaxfree');
		$xfer += $output->writeDouble($this->priceTaxfree);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->printPrice !== null) {
			
			$xfer += $output->writeFieldBegin('printPrice');
			$xfer += $output->writeDouble($this->printPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeI32($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parcelTaxNo !== null) {
			
			$xfer += $output->writeFieldBegin('parcelTaxNo');
			$xfer += $output->writeString($this->parcelTaxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->netWeight !== null) {
			
			$xfer += $output->writeFieldBegin('netWeight');
			$xfer += $output->writeDouble($this->netWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossWeight !== null) {
			
			$xfer += $output->writeFieldBegin('grossWeight');
			$xfer += $output->writeDouble($this->grossWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noPo !== null) {
			
			$xfer += $output->writeFieldBegin('noPo');
			$xfer += $output->writeI16($this->noPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hsCode !== null) {
			
			$xfer += $output->writeFieldBegin('hsCode');
			$xfer += $output->writeString($this->hsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined1 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined1');
			$xfer += $output->writeString($this->userDefined1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined2 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined2');
			$xfer += $output->writeString($this->userDefined2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined3 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined3');
			$xfer += $output->writeString($this->userDefined3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined4 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined4');
			$xfer += $output->writeString($this->userDefined4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined5 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined5');
			$xfer += $output->writeI64($this->userDefined5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined6 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined6');
			$xfer += $output->writeI64($this->userDefined6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined7 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined7');
			$xfer += $output->writeString($this->userDefined7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDefined8 !== null) {
			
			$xfer += $output->writeFieldBegin('userDefined8');
			$xfer += $output->writeString($this->userDefined8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>