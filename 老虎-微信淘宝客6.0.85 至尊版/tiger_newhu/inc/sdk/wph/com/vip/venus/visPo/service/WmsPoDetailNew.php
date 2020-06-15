<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class WmsPoDetailNew {
	
	static $_TSPEC;
	public $id = null;
	public $po = null;
	public $itemNo = null;
	public $poQty = null;
	public $vendorName = null;
	public $tagPrice = null;
	public $antiTheftClasp = null;
	public $createTime = null;
	public $updateTime = null;
	public $buyerGroupCode = null;
	public $poUnitPrice = null;
	public $taxRate = null;
	public $priceWithTax = null;
	public $cartonMeasurement = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'po'
			),
			3 => array(
			'var' => 'itemNo'
			),
			4 => array(
			'var' => 'poQty'
			),
			5 => array(
			'var' => 'vendorName'
			),
			6 => array(
			'var' => 'tagPrice'
			),
			7 => array(
			'var' => 'antiTheftClasp'
			),
			8 => array(
			'var' => 'createTime'
			),
			9 => array(
			'var' => 'updateTime'
			),
			10 => array(
			'var' => 'buyerGroupCode'
			),
			11 => array(
			'var' => 'poUnitPrice'
			),
			12 => array(
			'var' => 'taxRate'
			),
			13 => array(
			'var' => 'priceWithTax'
			),
			14 => array(
			'var' => 'cartonMeasurement'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['poQty'])){
				
				$this->poQty = $vals['poQty'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['tagPrice'])){
				
				$this->tagPrice = $vals['tagPrice'];
			}
			
			
			if (isset($vals['antiTheftClasp'])){
				
				$this->antiTheftClasp = $vals['antiTheftClasp'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['buyerGroupCode'])){
				
				$this->buyerGroupCode = $vals['buyerGroupCode'];
			}
			
			
			if (isset($vals['poUnitPrice'])){
				
				$this->poUnitPrice = $vals['poUnitPrice'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['priceWithTax'])){
				
				$this->priceWithTax = $vals['priceWithTax'];
			}
			
			
			if (isset($vals['cartonMeasurement'])){
				
				$this->cartonMeasurement = $vals['cartonMeasurement'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WmsPoDetailNew';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("poQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->poQty); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("tagPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagPrice);
				
			}
			
			
			
			
			if ("antiTheftClasp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->antiTheftClasp);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("buyerGroupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerGroupCode);
				
			}
			
			
			
			
			if ("poUnitPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->poUnitPrice);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxRate);
				
			}
			
			
			
			
			if ("priceWithTax" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->priceWithTax);
				
			}
			
			
			
			
			if ("cartonMeasurement" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cartonMeasurement); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poQty !== null) {
			
			$xfer += $output->writeFieldBegin('poQty');
			$xfer += $output->writeI32($this->poQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagPrice !== null) {
			
			$xfer += $output->writeFieldBegin('tagPrice');
			$xfer += $output->writeString($this->tagPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->antiTheftClasp !== null) {
			
			$xfer += $output->writeFieldBegin('antiTheftClasp');
			$xfer += $output->writeString($this->antiTheftClasp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerGroupCode !== null) {
			
			$xfer += $output->writeFieldBegin('buyerGroupCode');
			$xfer += $output->writeString($this->buyerGroupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poUnitPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poUnitPrice');
			$xfer += $output->writeDouble($this->poUnitPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeDouble($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceWithTax !== null) {
			
			$xfer += $output->writeFieldBegin('priceWithTax');
			$xfer += $output->writeDouble($this->priceWithTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cartonMeasurement !== null) {
			
			$xfer += $output->writeFieldBegin('cartonMeasurement');
			$xfer += $output->writeI32($this->cartonMeasurement);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>