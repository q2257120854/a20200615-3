<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class Spu {
	
	static $_TSPEC;
	public $ean = null;
	public $isOnline = null;
	public $unit = null;
	public $upc = null;
	public $productName = null;
	public $categoryId = null;
	public $stepQuantity = null;
	public $shortDescription = null;
	public $longDescription = null;
	public $minOrderQuantity = null;
	public $isSearchable = null;
	public $taxClassId = null;
	public $isAvailable = null;
	public $status = null;
	public $brand = null;
	public $variations = null;
	public $sftpFileLogId = null;
	public $isDeleted = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ean'
			),
			2 => array(
			'var' => 'isOnline'
			),
			3 => array(
			'var' => 'unit'
			),
			4 => array(
			'var' => 'upc'
			),
			5 => array(
			'var' => 'productName'
			),
			6 => array(
			'var' => 'categoryId'
			),
			7 => array(
			'var' => 'stepQuantity'
			),
			8 => array(
			'var' => 'shortDescription'
			),
			9 => array(
			'var' => 'longDescription'
			),
			10 => array(
			'var' => 'minOrderQuantity'
			),
			11 => array(
			'var' => 'isSearchable'
			),
			12 => array(
			'var' => 'taxClassId'
			),
			14 => array(
			'var' => 'isAvailable'
			),
			15 => array(
			'var' => 'status'
			),
			16 => array(
			'var' => 'brand'
			),
			17 => array(
			'var' => 'variations'
			),
			18 => array(
			'var' => 'sftpFileLogId'
			),
			19 => array(
			'var' => 'isDeleted'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ean'])){
				
				$this->ean = $vals['ean'];
			}
			
			
			if (isset($vals['isOnline'])){
				
				$this->isOnline = $vals['isOnline'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['upc'])){
				
				$this->upc = $vals['upc'];
			}
			
			
			if (isset($vals['productName'])){
				
				$this->productName = $vals['productName'];
			}
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['stepQuantity'])){
				
				$this->stepQuantity = $vals['stepQuantity'];
			}
			
			
			if (isset($vals['shortDescription'])){
				
				$this->shortDescription = $vals['shortDescription'];
			}
			
			
			if (isset($vals['longDescription'])){
				
				$this->longDescription = $vals['longDescription'];
			}
			
			
			if (isset($vals['minOrderQuantity'])){
				
				$this->minOrderQuantity = $vals['minOrderQuantity'];
			}
			
			
			if (isset($vals['isSearchable'])){
				
				$this->isSearchable = $vals['isSearchable'];
			}
			
			
			if (isset($vals['taxClassId'])){
				
				$this->taxClassId = $vals['taxClassId'];
			}
			
			
			if (isset($vals['isAvailable'])){
				
				$this->isAvailable = $vals['isAvailable'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['variations'])){
				
				$this->variations = $vals['variations'];
			}
			
			
			if (isset($vals['sftpFileLogId'])){
				
				$this->sftpFileLogId = $vals['sftpFileLogId'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Spu';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ean" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ean);
				
			}
			
			
			
			
			if ("isOnline" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isOnline); 
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("upc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->upc);
				
			}
			
			
			
			
			if ("productName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productName);
				
			}
			
			
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryId);
				
			}
			
			
			
			
			if ("stepQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stepQuantity);
				
			}
			
			
			
			
			if ("shortDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortDescription);
				
			}
			
			
			
			
			if ("longDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longDescription);
				
			}
			
			
			
			
			if ("minOrderQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->minOrderQuantity); 
				
			}
			
			
			
			
			if ("isSearchable" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSearchable); 
				
			}
			
			
			
			
			if ("taxClassId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxClassId);
				
			}
			
			
			
			
			if ("isAvailable" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isAvailable); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("variations" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->variations);
				
			}
			
			
			
			
			if ("sftpFileLogId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sftpFileLogId);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDeleted); 
				
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
		
		if($this->ean !== null) {
			
			$xfer += $output->writeFieldBegin('ean');
			$xfer += $output->writeString($this->ean);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOnline !== null) {
			
			$xfer += $output->writeFieldBegin('isOnline');
			$xfer += $output->writeByte($this->isOnline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->upc !== null) {
			
			$xfer += $output->writeFieldBegin('upc');
			$xfer += $output->writeString($this->upc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productName !== null) {
			
			$xfer += $output->writeFieldBegin('productName');
			$xfer += $output->writeString($this->productName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeString($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stepQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('stepQuantity');
			$xfer += $output->writeString($this->stepQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shortDescription !== null) {
			
			$xfer += $output->writeFieldBegin('shortDescription');
			$xfer += $output->writeString($this->shortDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->longDescription !== null) {
			
			$xfer += $output->writeFieldBegin('longDescription');
			$xfer += $output->writeString($this->longDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->minOrderQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('minOrderQuantity');
			$xfer += $output->writeI32($this->minOrderQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSearchable !== null) {
			
			$xfer += $output->writeFieldBegin('isSearchable');
			$xfer += $output->writeByte($this->isSearchable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxClassId !== null) {
			
			$xfer += $output->writeFieldBegin('taxClassId');
			$xfer += $output->writeString($this->taxClassId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAvailable !== null) {
			
			$xfer += $output->writeFieldBegin('isAvailable');
			$xfer += $output->writeByte($this->isAvailable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->variations !== null) {
			
			$xfer += $output->writeFieldBegin('variations');
			$xfer += $output->writeString($this->variations);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sftpFileLogId !== null) {
			
			$xfer += $output->writeFieldBegin('sftpFileLogId');
			$xfer += $output->writeString($this->sftpFileLogId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeByte($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>