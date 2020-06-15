<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class OdsOrderMessageDetail {
	
	static $_TSPEC;
	public $amount = null;
	public $brandForeignName = null;
	public $brandId = null;
	public $brandName = null;
	public $brandType = null;
	public $foreWord = null;
	public $foreignName = null;
	public $goodsLineMoney = null;
	public $goodsPic = null;
	public $grossWeight = null;
	public $id = null;
	public $isGift = null;
	public $isVip = null;
	public $name = null;
	public $noPo = null;
	public $orderId = null;
	public $orderSn = null;
	public $po = null;
	public $price = null;
	public $size = null;
	public $sizeSn = null;
	public $unit = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $warehouse = null;
	public $receivingWarehouse = null;
	public $hsCode = null;
	public $finalPrice = null;
	public $productsCustomCnName = null;
	public $productsCustomEnName = null;
	public $noGoodCatagory = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'amount'
			),
			2 => array(
			'var' => 'brandForeignName'
			),
			3 => array(
			'var' => 'brandId'
			),
			4 => array(
			'var' => 'brandName'
			),
			5 => array(
			'var' => 'brandType'
			),
			6 => array(
			'var' => 'foreWord'
			),
			7 => array(
			'var' => 'foreignName'
			),
			8 => array(
			'var' => 'goodsLineMoney'
			),
			9 => array(
			'var' => 'goodsPic'
			),
			10 => array(
			'var' => 'grossWeight'
			),
			11 => array(
			'var' => 'id'
			),
			12 => array(
			'var' => 'isGift'
			),
			13 => array(
			'var' => 'isVip'
			),
			14 => array(
			'var' => 'name'
			),
			15 => array(
			'var' => 'noPo'
			),
			16 => array(
			'var' => 'orderId'
			),
			17 => array(
			'var' => 'orderSn'
			),
			18 => array(
			'var' => 'po'
			),
			19 => array(
			'var' => 'price'
			),
			20 => array(
			'var' => 'size'
			),
			21 => array(
			'var' => 'sizeSn'
			),
			22 => array(
			'var' => 'unit'
			),
			23 => array(
			'var' => 'vendorCode'
			),
			24 => array(
			'var' => 'vendorName'
			),
			25 => array(
			'var' => 'warehouse'
			),
			26 => array(
			'var' => 'receivingWarehouse'
			),
			27 => array(
			'var' => 'hsCode'
			),
			28 => array(
			'var' => 'finalPrice'
			),
			29 => array(
			'var' => 'productsCustomCnName'
			),
			30 => array(
			'var' => 'productsCustomEnName'
			),
			31 => array(
			'var' => 'noGoodCatagory'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['brandForeignName'])){
				
				$this->brandForeignName = $vals['brandForeignName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandType'])){
				
				$this->brandType = $vals['brandType'];
			}
			
			
			if (isset($vals['foreWord'])){
				
				$this->foreWord = $vals['foreWord'];
			}
			
			
			if (isset($vals['foreignName'])){
				
				$this->foreignName = $vals['foreignName'];
			}
			
			
			if (isset($vals['goodsLineMoney'])){
				
				$this->goodsLineMoney = $vals['goodsLineMoney'];
			}
			
			
			if (isset($vals['goodsPic'])){
				
				$this->goodsPic = $vals['goodsPic'];
			}
			
			
			if (isset($vals['grossWeight'])){
				
				$this->grossWeight = $vals['grossWeight'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['isGift'])){
				
				$this->isGift = $vals['isGift'];
			}
			
			
			if (isset($vals['isVip'])){
				
				$this->isVip = $vals['isVip'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['noPo'])){
				
				$this->noPo = $vals['noPo'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['sizeSn'])){
				
				$this->sizeSn = $vals['sizeSn'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['receivingWarehouse'])){
				
				$this->receivingWarehouse = $vals['receivingWarehouse'];
			}
			
			
			if (isset($vals['hsCode'])){
				
				$this->hsCode = $vals['hsCode'];
			}
			
			
			if (isset($vals['finalPrice'])){
				
				$this->finalPrice = $vals['finalPrice'];
			}
			
			
			if (isset($vals['productsCustomCnName'])){
				
				$this->productsCustomCnName = $vals['productsCustomCnName'];
			}
			
			
			if (isset($vals['productsCustomEnName'])){
				
				$this->productsCustomEnName = $vals['productsCustomEnName'];
			}
			
			
			if (isset($vals['noGoodCatagory'])){
				
				$this->noGoodCatagory = $vals['noGoodCatagory'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OdsOrderMessageDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->amount); 
				
			}
			
			
			
			
			if ("brandForeignName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandForeignName);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandType);
				
			}
			
			
			
			
			if ("foreWord" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreWord);
				
			}
			
			
			
			
			if ("foreignName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignName);
				
			}
			
			
			
			
			if ("goodsLineMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodsLineMoney);
				
			}
			
			
			
			
			if ("goodsPic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsPic);
				
			}
			
			
			
			
			if ("grossWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossWeight);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("isGift" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isGift);
				
			}
			
			
			
			
			if ("isVip" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isVip); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("noPo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->noPo); 
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("sizeSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeSn);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("receivingWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receivingWarehouse);
				
			}
			
			
			
			
			if ("hsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hsCode);
				
			}
			
			
			
			
			if ("finalPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->finalPrice);
				
			}
			
			
			
			
			if ("productsCustomCnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productsCustomCnName);
				
			}
			
			
			
			
			if ("productsCustomEnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productsCustomEnName);
				
			}
			
			
			
			
			if ("noGoodCatagory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->noGoodCatagory);
				
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
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI64($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandForeignName !== null) {
			
			$xfer += $output->writeFieldBegin('brandForeignName');
			$xfer += $output->writeString($this->brandForeignName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandType !== null) {
			
			$xfer += $output->writeFieldBegin('brandType');
			$xfer += $output->writeString($this->brandType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreWord !== null) {
			
			$xfer += $output->writeFieldBegin('foreWord');
			$xfer += $output->writeString($this->foreWord);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignName !== null) {
			
			$xfer += $output->writeFieldBegin('foreignName');
			$xfer += $output->writeString($this->foreignName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsLineMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsLineMoney');
			$xfer += $output->writeDouble($this->goodsLineMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsPic !== null) {
			
			$xfer += $output->writeFieldBegin('goodsPic');
			$xfer += $output->writeString($this->goodsPic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossWeight !== null) {
			
			$xfer += $output->writeFieldBegin('grossWeight');
			$xfer += $output->writeDouble($this->grossWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isGift !== null) {
			
			$xfer += $output->writeFieldBegin('isGift');
			$xfer += $output->writeString($this->isGift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVip !== null) {
			
			$xfer += $output->writeFieldBegin('isVip');
			$xfer += $output->writeI32($this->isVip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noPo !== null) {
			
			$xfer += $output->writeFieldBegin('noPo');
			$xfer += $output->writeI32($this->noPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeDouble($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeSn !== null) {
			
			$xfer += $output->writeFieldBegin('sizeSn');
			$xfer += $output->writeString($this->sizeSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
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
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receivingWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('receivingWarehouse');
			$xfer += $output->writeString($this->receivingWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hsCode !== null) {
			
			$xfer += $output->writeFieldBegin('hsCode');
			$xfer += $output->writeString($this->hsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalPrice !== null) {
			
			$xfer += $output->writeFieldBegin('finalPrice');
			$xfer += $output->writeDouble($this->finalPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productsCustomCnName !== null) {
			
			$xfer += $output->writeFieldBegin('productsCustomCnName');
			$xfer += $output->writeString($this->productsCustomCnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productsCustomEnName !== null) {
			
			$xfer += $output->writeFieldBegin('productsCustomEnName');
			$xfer += $output->writeString($this->productsCustomEnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->noGoodCatagory !== null) {
			
			$xfer += $output->writeFieldBegin('noGoodCatagory');
			$xfer += $output->writeString($this->noGoodCatagory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>