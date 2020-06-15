<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\product\pool\service;

class ProdPoolSkuModel {
	
	static $_TSPEC;
	public $poNo = null;
	public $barcode = null;
	public $grade = null;
	public $warehouseCode = null;
	public $availableStock = null;
	public $osn = null;
	public $sn = null;
	public $age = null;
	public $vSkuId = null;
	public $vSpuId = null;
	public $marketPrice = null;
	public $basePrice = null;
	public $vipPayPrice = null;
	public $billTaxPrice = null;
	public $vendorCode = null;
	public $mainImageUrl = null;
	public $productName = null;
	public $size = null;
	public $color = null;
	public $brandSn = null;
	public $brandName = null;
	public $topCategoryId = null;
	public $topCategoryName = null;
	public $subCategoryId = null;
	public $subCategoryName = null;
	public $categoryId = null;
	public $categoryName = null;
	public $changeTime = null;
	public $xstoreBillTaxPrice = null;
	public $riAge = null;
	public $salesPlanNo = null;
	public $seller = null;
	public $season = null;
	public $poInTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNo'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'grade'
			),
			4 => array(
			'var' => 'warehouseCode'
			),
			5 => array(
			'var' => 'availableStock'
			),
			6 => array(
			'var' => 'osn'
			),
			7 => array(
			'var' => 'sn'
			),
			8 => array(
			'var' => 'age'
			),
			9 => array(
			'var' => 'vSkuId'
			),
			10 => array(
			'var' => 'vSpuId'
			),
			11 => array(
			'var' => 'marketPrice'
			),
			12 => array(
			'var' => 'basePrice'
			),
			13 => array(
			'var' => 'vipPayPrice'
			),
			14 => array(
			'var' => 'billTaxPrice'
			),
			15 => array(
			'var' => 'vendorCode'
			),
			16 => array(
			'var' => 'mainImageUrl'
			),
			17 => array(
			'var' => 'productName'
			),
			18 => array(
			'var' => 'size'
			),
			19 => array(
			'var' => 'color'
			),
			20 => array(
			'var' => 'brandSn'
			),
			21 => array(
			'var' => 'brandName'
			),
			22 => array(
			'var' => 'topCategoryId'
			),
			23 => array(
			'var' => 'topCategoryName'
			),
			24 => array(
			'var' => 'subCategoryId'
			),
			25 => array(
			'var' => 'subCategoryName'
			),
			26 => array(
			'var' => 'categoryId'
			),
			27 => array(
			'var' => 'categoryName'
			),
			28 => array(
			'var' => 'changeTime'
			),
			29 => array(
			'var' => 'xstoreBillTaxPrice'
			),
			30 => array(
			'var' => 'riAge'
			),
			31 => array(
			'var' => 'salesPlanNo'
			),
			32 => array(
			'var' => 'seller'
			),
			33 => array(
			'var' => 'season'
			),
			34 => array(
			'var' => 'poInTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['availableStock'])){
				
				$this->availableStock = $vals['availableStock'];
			}
			
			
			if (isset($vals['osn'])){
				
				$this->osn = $vals['osn'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['age'])){
				
				$this->age = $vals['age'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['vSpuId'])){
				
				$this->vSpuId = $vals['vSpuId'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['basePrice'])){
				
				$this->basePrice = $vals['basePrice'];
			}
			
			
			if (isset($vals['vipPayPrice'])){
				
				$this->vipPayPrice = $vals['vipPayPrice'];
			}
			
			
			if (isset($vals['billTaxPrice'])){
				
				$this->billTaxPrice = $vals['billTaxPrice'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['mainImageUrl'])){
				
				$this->mainImageUrl = $vals['mainImageUrl'];
			}
			
			
			if (isset($vals['productName'])){
				
				$this->productName = $vals['productName'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['topCategoryId'])){
				
				$this->topCategoryId = $vals['topCategoryId'];
			}
			
			
			if (isset($vals['topCategoryName'])){
				
				$this->topCategoryName = $vals['topCategoryName'];
			}
			
			
			if (isset($vals['subCategoryId'])){
				
				$this->subCategoryId = $vals['subCategoryId'];
			}
			
			
			if (isset($vals['subCategoryName'])){
				
				$this->subCategoryName = $vals['subCategoryName'];
			}
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['changeTime'])){
				
				$this->changeTime = $vals['changeTime'];
			}
			
			
			if (isset($vals['xstoreBillTaxPrice'])){
				
				$this->xstoreBillTaxPrice = $vals['xstoreBillTaxPrice'];
			}
			
			
			if (isset($vals['riAge'])){
				
				$this->riAge = $vals['riAge'];
			}
			
			
			if (isset($vals['salesPlanNo'])){
				
				$this->salesPlanNo = $vals['salesPlanNo'];
			}
			
			
			if (isset($vals['seller'])){
				
				$this->seller = $vals['seller'];
			}
			
			
			if (isset($vals['season'])){
				
				$this->season = $vals['season'];
			}
			
			
			if (isset($vals['poInTime'])){
				
				$this->poInTime = $vals['poInTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProdPoolSkuModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("availableStock" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->availableStock); 
				
			}
			
			
			
			
			if ("osn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->osn);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("age" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->age); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vSkuId);
				
			}
			
			
			
			
			if ("vSpuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vSpuId);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->marketPrice);
				
			}
			
			
			
			
			if ("basePrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->basePrice);
				
			}
			
			
			
			
			if ("vipPayPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vipPayPrice);
				
			}
			
			
			
			
			if ("billTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->billTaxPrice);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("mainImageUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mainImageUrl);
				
			}
			
			
			
			
			if ("productName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productName);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("topCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->topCategoryId);
				
			}
			
			
			
			
			if ("topCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->topCategoryName);
				
			}
			
			
			
			
			if ("subCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCategoryId);
				
			}
			
			
			
			
			if ("subCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subCategoryName);
				
			}
			
			
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryId);
				
			}
			
			
			
			
			if ("categoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryName);
				
			}
			
			
			
			
			if ("changeTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->changeTime);
				
			}
			
			
			
			
			if ("xstoreBillTaxPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->xstoreBillTaxPrice);
				
			}
			
			
			
			
			if ("riAge" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->riAge); 
				
			}
			
			
			
			
			if ("salesPlanNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesPlanNo);
				
			}
			
			
			
			
			if ("seller" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->seller); 
				
			}
			
			
			
			
			if ("season" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->season);
				
			}
			
			
			
			
			if ("poInTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poInTime);
				
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
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grade !== null) {
			
			$xfer += $output->writeFieldBegin('grade');
			$xfer += $output->writeString($this->grade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->availableStock !== null) {
			
			$xfer += $output->writeFieldBegin('availableStock');
			$xfer += $output->writeI64($this->availableStock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->osn !== null) {
			
			$xfer += $output->writeFieldBegin('osn');
			$xfer += $output->writeString($this->osn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->age !== null) {
			
			$xfer += $output->writeFieldBegin('age');
			$xfer += $output->writeI32($this->age);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeString($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSpuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSpuId');
			$xfer += $output->writeString($this->vSpuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeDouble($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->basePrice !== null) {
			
			$xfer += $output->writeFieldBegin('basePrice');
			$xfer += $output->writeDouble($this->basePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPayPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPayPrice');
			$xfer += $output->writeDouble($this->vipPayPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('billTaxPrice');
			$xfer += $output->writeDouble($this->billTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mainImageUrl !== null) {
			
			$xfer += $output->writeFieldBegin('mainImageUrl');
			$xfer += $output->writeString($this->mainImageUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productName !== null) {
			
			$xfer += $output->writeFieldBegin('productName');
			$xfer += $output->writeString($this->productName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->topCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('topCategoryId');
			$xfer += $output->writeString($this->topCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->topCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('topCategoryName');
			$xfer += $output->writeString($this->topCategoryName);
			
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
		
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeString($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryName !== null) {
			
			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->changeTime !== null) {
			
			$xfer += $output->writeFieldBegin('changeTime');
			$xfer += $output->writeI64($this->changeTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->xstoreBillTaxPrice !== null) {
			
			$xfer += $output->writeFieldBegin('xstoreBillTaxPrice');
			$xfer += $output->writeDouble($this->xstoreBillTaxPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->riAge !== null) {
			
			$xfer += $output->writeFieldBegin('riAge');
			$xfer += $output->writeI32($this->riAge);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesPlanNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesPlanNo');
			$xfer += $output->writeString($this->salesPlanNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seller !== null) {
			
			$xfer += $output->writeFieldBegin('seller');
			$xfer += $output->writeByte($this->seller);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->season !== null) {
			
			$xfer += $output->writeFieldBegin('season');
			$xfer += $output->writeString($this->season);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poInTime !== null) {
			
			$xfer += $output->writeFieldBegin('poInTime');
			$xfer += $output->writeString($this->poInTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>