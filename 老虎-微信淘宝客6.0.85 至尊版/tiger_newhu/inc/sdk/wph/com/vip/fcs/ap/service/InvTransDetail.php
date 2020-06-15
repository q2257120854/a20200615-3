<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class InvTransDetail {
	
	static $_TSPEC;
	public $transactionDate = null;
	public $periodName = null;
	public $transactionTypeCommand = null;
	public $transactionTypeName = null;
	public $globalId = null;
	public $lineType = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $orgId = null;
	public $orgName = null;
	public $poNo = null;
	public $itemNo = null;
	public $itemDesc = null;
	public $goodsNo = null;
	public $quantity = null;
	public $doc = null;
	public $returnReqNo = null;
	public $sellingMode = null;
	public $warehouse = null;
	public $brandCode = null;
	public $brandName = null;
	public $category1 = null;
	public $category2 = null;
	public $category3 = null;
	public $parentPoNo = null;
	public $whType = null;
	public $dataGenTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transactionDate'
			),
			2 => array(
			'var' => 'periodName'
			),
			3 => array(
			'var' => 'transactionTypeCommand'
			),
			4 => array(
			'var' => 'transactionTypeName'
			),
			5 => array(
			'var' => 'globalId'
			),
			6 => array(
			'var' => 'lineType'
			),
			7 => array(
			'var' => 'vendorCode'
			),
			8 => array(
			'var' => 'vendorName'
			),
			9 => array(
			'var' => 'orgId'
			),
			10 => array(
			'var' => 'orgName'
			),
			11 => array(
			'var' => 'poNo'
			),
			12 => array(
			'var' => 'itemNo'
			),
			13 => array(
			'var' => 'itemDesc'
			),
			14 => array(
			'var' => 'goodsNo'
			),
			15 => array(
			'var' => 'quantity'
			),
			16 => array(
			'var' => 'doc'
			),
			17 => array(
			'var' => 'returnReqNo'
			),
			18 => array(
			'var' => 'sellingMode'
			),
			19 => array(
			'var' => 'warehouse'
			),
			20 => array(
			'var' => 'brandCode'
			),
			21 => array(
			'var' => 'brandName'
			),
			22 => array(
			'var' => 'category1'
			),
			23 => array(
			'var' => 'category2'
			),
			24 => array(
			'var' => 'category3'
			),
			25 => array(
			'var' => 'parentPoNo'
			),
			26 => array(
			'var' => 'whType'
			),
			27 => array(
			'var' => 'dataGenTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transactionDate'])){
				
				$this->transactionDate = $vals['transactionDate'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['transactionTypeCommand'])){
				
				$this->transactionTypeCommand = $vals['transactionTypeCommand'];
			}
			
			
			if (isset($vals['transactionTypeName'])){
				
				$this->transactionTypeName = $vals['transactionTypeName'];
			}
			
			
			if (isset($vals['globalId'])){
				
				$this->globalId = $vals['globalId'];
			}
			
			
			if (isset($vals['lineType'])){
				
				$this->lineType = $vals['lineType'];
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
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDesc'])){
				
				$this->itemDesc = $vals['itemDesc'];
			}
			
			
			if (isset($vals['goodsNo'])){
				
				$this->goodsNo = $vals['goodsNo'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['doc'])){
				
				$this->doc = $vals['doc'];
			}
			
			
			if (isset($vals['returnReqNo'])){
				
				$this->returnReqNo = $vals['returnReqNo'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['category1'])){
				
				$this->category1 = $vals['category1'];
			}
			
			
			if (isset($vals['category2'])){
				
				$this->category2 = $vals['category2'];
			}
			
			
			if (isset($vals['category3'])){
				
				$this->category3 = $vals['category3'];
			}
			
			
			if (isset($vals['parentPoNo'])){
				
				$this->parentPoNo = $vals['parentPoNo'];
			}
			
			
			if (isset($vals['whType'])){
				
				$this->whType = $vals['whType'];
			}
			
			
			if (isset($vals['dataGenTime'])){
				
				$this->dataGenTime = $vals['dataGenTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvTransDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transactionDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transactionDate);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("transactionTypeCommand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeCommand);
				
			}
			
			
			
			
			if ("transactionTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionTypeName);
				
			}
			
			
			
			
			if ("globalId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->globalId); 
				
			}
			
			
			
			
			if ("lineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineType);
				
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
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDesc);
				
			}
			
			
			
			
			if ("goodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsNo);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->quantity);
				
			}
			
			
			
			
			if ("doc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->doc);
				
			}
			
			
			
			
			if ("returnReqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnReqNo);
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingMode);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("category1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category1);
				
			}
			
			
			
			
			if ("category2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category2);
				
			}
			
			
			
			
			if ("category3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category3);
				
			}
			
			
			
			
			if ("parentPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentPoNo);
				
			}
			
			
			
			
			if ("whType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->whType);
				
			}
			
			
			
			
			if ("dataGenTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataGenTime);
				
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
		
		if($this->transactionDate !== null) {
			
			$xfer += $output->writeFieldBegin('transactionDate');
			$xfer += $output->writeI64($this->transactionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->periodName !== null) {
			
			$xfer += $output->writeFieldBegin('periodName');
			$xfer += $output->writeString($this->periodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeCommand !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeCommand');
			$xfer += $output->writeString($this->transactionTypeCommand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transactionTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('transactionTypeName');
			$xfer += $output->writeString($this->transactionTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalId !== null) {
			
			$xfer += $output->writeFieldBegin('globalId');
			$xfer += $output->writeI64($this->globalId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineType !== null) {
			
			$xfer += $output->writeFieldBegin('lineType');
			$xfer += $output->writeString($this->lineType);
			
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
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
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
		
		
		if($this->goodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodsNo');
			$xfer += $output->writeString($this->goodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeDouble($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->doc !== null) {
			
			$xfer += $output->writeFieldBegin('doc');
			$xfer += $output->writeString($this->doc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnReqNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnReqNo');
			$xfer += $output->writeString($this->returnReqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeString($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
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
		
		
		if($this->category1 !== null) {
			
			$xfer += $output->writeFieldBegin('category1');
			$xfer += $output->writeString($this->category1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category2 !== null) {
			
			$xfer += $output->writeFieldBegin('category2');
			$xfer += $output->writeString($this->category2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category3 !== null) {
			
			$xfer += $output->writeFieldBegin('category3');
			$xfer += $output->writeString($this->category3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('parentPoNo');
			$xfer += $output->writeString($this->parentPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->whType !== null) {
			
			$xfer += $output->writeFieldBegin('whType');
			$xfer += $output->writeString($this->whType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataGenTime !== null) {
			
			$xfer += $output->writeFieldBegin('dataGenTime');
			$xfer += $output->writeString($this->dataGenTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>