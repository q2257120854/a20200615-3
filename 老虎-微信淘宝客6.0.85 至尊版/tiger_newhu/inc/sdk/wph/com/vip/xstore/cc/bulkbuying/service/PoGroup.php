<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PoGroup {
	
	static $_TSPEC;
	public $purchaseQuantity = null;
	public $avgAmount = null;
	public $totalAmount = null;
	public $discount = null;
	public $brandName = null;
	public $brandSn = null;
	public $seasonName = null;
	public $subCategoryId = null;
	public $subCategoryName = null;
	public $leafCategoryId = null;
	public $leafCategoryName = null;
	public $season = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			97 => array(
			'var' => 'purchaseQuantity'
			),
			98 => array(
			'var' => 'avgAmount'
			),
			99 => array(
			'var' => 'totalAmount'
			),
			100 => array(
			'var' => 'discount'
			),
			1 => array(
			'var' => 'brandName'
			),
			2 => array(
			'var' => 'brandSn'
			),
			3 => array(
			'var' => 'seasonName'
			),
			4 => array(
			'var' => 'subCategoryId'
			),
			5 => array(
			'var' => 'subCategoryName'
			),
			6 => array(
			'var' => 'leafCategoryId'
			),
			7 => array(
			'var' => 'leafCategoryName'
			),
			8 => array(
			'var' => 'season'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseQuantity'])){
				
				$this->purchaseQuantity = $vals['purchaseQuantity'];
			}
			
			
			if (isset($vals['avgAmount'])){
				
				$this->avgAmount = $vals['avgAmount'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['seasonName'])){
				
				$this->seasonName = $vals['seasonName'];
			}
			
			
			if (isset($vals['subCategoryId'])){
				
				$this->subCategoryId = $vals['subCategoryId'];
			}
			
			
			if (isset($vals['subCategoryName'])){
				
				$this->subCategoryName = $vals['subCategoryName'];
			}
			
			
			if (isset($vals['leafCategoryId'])){
				
				$this->leafCategoryId = $vals['leafCategoryId'];
			}
			
			
			if (isset($vals['leafCategoryName'])){
				
				$this->leafCategoryName = $vals['leafCategoryName'];
			}
			
			
			if (isset($vals['season'])){
				
				$this->season = $vals['season'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoGroup';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchaseQuantity); 
				
			}
			
			
			
			
			if ("avgAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->avgAmount);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("seasonName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seasonName);
				
			}
			
			
			
			
			if ("subCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCategoryId);
				
			}
			
			
			
			
			if ("subCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCategoryName);
				
			}
			
			
			
			
			if ("leafCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leafCategoryId);
				
			}
			
			
			
			
			if ("leafCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leafCategoryName);
				
			}
			
			
			
			
			if ("season" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->season);
				
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
		
		$xfer += $output->writeFieldBegin('purchaseQuantity');
		$xfer += $output->writeI32($this->purchaseQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('avgAmount');
		$xfer += $output->writeDouble($this->avgAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalAmount');
		$xfer += $output->writeDouble($this->totalAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('discount');
		$xfer += $output->writeDouble($this->discount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seasonName !== null) {
			
			$xfer += $output->writeFieldBegin('seasonName');
			$xfer += $output->writeString($this->seasonName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('subCategoryId');
			$xfer += $output->writeString($this->subCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('subCategoryName');
			$xfer += $output->writeString($this->subCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leafCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('leafCategoryId');
			$xfer += $output->writeString($this->leafCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leafCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('leafCategoryName');
			$xfer += $output->writeString($this->leafCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->season !== null) {
			
			$xfer += $output->writeFieldBegin('season');
			$xfer += $output->writeString($this->season);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>