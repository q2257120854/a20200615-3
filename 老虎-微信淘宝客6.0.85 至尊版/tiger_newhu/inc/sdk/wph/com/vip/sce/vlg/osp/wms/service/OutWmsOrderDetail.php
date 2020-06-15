<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsOrderDetail {
	
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
	public $hsCode = null;
	public $vendorCode = null;
	public $noPo = null;
	public $userDef1 = null;
	public $userDef2 = null;
	public $userDef3 = null;
	public $userDef4 = null;
	public $userDef5 = null;
	public $userDef6 = null;
	public $userDef7 = null;
	public $userDef8 = null;
	
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
			'var' => 'hsCode'
			),
			20 => array(
			'var' => 'vendorCode'
			),
			21 => array(
			'var' => 'noPo'
			),
			22 => array(
			'var' => 'userDef1'
			),
			23 => array(
			'var' => 'userDef2'
			),
			24 => array(
			'var' => 'userDef3'
			),
			25 => array(
			'var' => 'userDef4'
			),
			26 => array(
			'var' => 'userDef5'
			),
			27 => array(
			'var' => 'userDef6'
			),
			28 => array(
			'var' => 'userDef7'
			),
			29 => array(
			'var' => 'userDef8'
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
			
			
			if (isset($vals['hsCode'])){
				
				$this->hsCode = $vals['hsCode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['noPo'])){
				
				$this->noPo = $vals['noPo'];
			}
			
			
			if (isset($vals['userDef1'])){
				
				$this->userDef1 = $vals['userDef1'];
			}
			
			
			if (isset($vals['userDef2'])){
				
				$this->userDef2 = $vals['userDef2'];
			}
			
			
			if (isset($vals['userDef3'])){
				
				$this->userDef3 = $vals['userDef3'];
			}
			
			
			if (isset($vals['userDef4'])){
				
				$this->userDef4 = $vals['userDef4'];
			}
			
			
			if (isset($vals['userDef5'])){
				
				$this->userDef5 = $vals['userDef5'];
			}
			
			
			if (isset($vals['userDef6'])){
				
				$this->userDef6 = $vals['userDef6'];
			}
			
			
			if (isset($vals['userDef7'])){
				
				$this->userDef7 = $vals['userDef7'];
			}
			
			
			if (isset($vals['userDef8'])){
				
				$this->userDef8 = $vals['userDef8'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsOrderDetail';
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
			
			
			
			
			if ("hsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hsCode);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("noPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->noPo);
				
			}
			
			
			
			
			if ("userDef1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef1);
				
			}
			
			
			
			
			if ("userDef2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef2);
				
			}
			
			
			
			
			if ("userDef3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef3);
				
			}
			
			
			
			
			if ("userDef4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef4);
				
			}
			
			
			
			
			if ("userDef5" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userDef5); 
				
			}
			
			
			
			
			if ("userDef6" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userDef6); 
				
			}
			
			
			
			
			if ("userDef7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef7);
				
			}
			
			
			
			
			if ("userDef8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef8);
				
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
		
		$xfer += $output->writeFieldBegin('po');
		$xfer += $output->writeString($this->po);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sizeSn');
		$xfer += $output->writeString($this->sizeSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodName');
		$xfer += $output->writeString($this->goodName);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		$xfer += $output->writeFieldBegin('goodRecordNo');
		$xfer += $output->writeString($this->goodRecordNo);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->hsCode !== null) {
			
			$xfer += $output->writeFieldBegin('hsCode');
			$xfer += $output->writeString($this->hsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noPo !== null) {
			
			$xfer += $output->writeFieldBegin('noPo');
			$xfer += $output->writeString($this->noPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef1 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef1');
			$xfer += $output->writeString($this->userDef1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef2 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef2');
			$xfer += $output->writeString($this->userDef2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef3 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef3');
			$xfer += $output->writeString($this->userDef3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef4 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef4');
			$xfer += $output->writeString($this->userDef4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef5 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef5');
			$xfer += $output->writeI64($this->userDef5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef6 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef6');
			$xfer += $output->writeI64($this->userDef6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef7 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef7');
			$xfer += $output->writeString($this->userDef7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef8 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef8');
			$xfer += $output->writeString($this->userDef8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>