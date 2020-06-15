<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class EBSPoDetail {
	
	static $_TSPEC;
	public $sourceCode = null;
	public $vendorCode = null;
	public $buyerBy = null;
	public $purchaseType = null;
	public $lineNum = null;
	public $itemNo = null;
	public $itemDesc = null;
	public $uomCode = null;
	public $poQty = null;
	public $packingQty = null;
	public $poMarketPrice = null;
	public $poUnitPrice = null;
	public $needByDate = null;
	public $sellArea = null;
	public $settlement = null;
	public $purchaseModel = null;
	public $currency = null;
	public $rateDate = null;
	public $tradeModel = null;
	public $po = null;
	public $createdBy = null;
	public $creationDate = null;
	public $lastUpdatedBy = null;
	public $lastUpdateDate = null;
	public $servfeeRate = null;
	public $delayDays = null;
	public $tagPrice = null;
	public $purchaseArea = null;
	public $purchaseOffice = null;
	public $taxPurchasePrice = null;
	public $size = null;
	public $brandSn = null;
	public $brandName = null;
	public $brandNameEn = null;
	public $itemSn = null;
	public $buyerName = null;
	public $taxRate = null;
	public $purchaseOffice1 = null;
	public $kpiDays = null;
	public $kpiGrossMargin = null;
	public $salesSite = null;
	public $generalTrade = null;
	public $pdcVendorCode = null;
	public $taxType = null;
	public $taxTypeRate = null;
	public $purchaseCompany = null;
	public $purchaseCompanyCode = null;
	public $originalPo = null;
	public $partyCountry = null;
	public $isVWarehouse = null;
	public $productionDate = null;
	public $expireDate = null;
	public $SETTLE_SEGMENT1 = null;
	public $oldItemNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sourceCode'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'buyerBy'
			),
			4 => array(
			'var' => 'purchaseType'
			),
			5 => array(
			'var' => 'lineNum'
			),
			6 => array(
			'var' => 'itemNo'
			),
			7 => array(
			'var' => 'itemDesc'
			),
			8 => array(
			'var' => 'uomCode'
			),
			9 => array(
			'var' => 'poQty'
			),
			10 => array(
			'var' => 'packingQty'
			),
			11 => array(
			'var' => 'poMarketPrice'
			),
			12 => array(
			'var' => 'poUnitPrice'
			),
			13 => array(
			'var' => 'needByDate'
			),
			14 => array(
			'var' => 'sellArea'
			),
			15 => array(
			'var' => 'settlement'
			),
			16 => array(
			'var' => 'purchaseModel'
			),
			17 => array(
			'var' => 'currency'
			),
			18 => array(
			'var' => 'rateDate'
			),
			19 => array(
			'var' => 'tradeModel'
			),
			20 => array(
			'var' => 'po'
			),
			21 => array(
			'var' => 'createdBy'
			),
			22 => array(
			'var' => 'creationDate'
			),
			23 => array(
			'var' => 'lastUpdatedBy'
			),
			24 => array(
			'var' => 'lastUpdateDate'
			),
			25 => array(
			'var' => 'servfeeRate'
			),
			26 => array(
			'var' => 'delayDays'
			),
			27 => array(
			'var' => 'tagPrice'
			),
			28 => array(
			'var' => 'purchaseArea'
			),
			29 => array(
			'var' => 'purchaseOffice'
			),
			30 => array(
			'var' => 'taxPurchasePrice'
			),
			31 => array(
			'var' => 'size'
			),
			32 => array(
			'var' => 'brandSn'
			),
			33 => array(
			'var' => 'brandName'
			),
			34 => array(
			'var' => 'brandNameEn'
			),
			35 => array(
			'var' => 'itemSn'
			),
			36 => array(
			'var' => 'buyerName'
			),
			37 => array(
			'var' => 'taxRate'
			),
			38 => array(
			'var' => 'purchaseOffice1'
			),
			39 => array(
			'var' => 'kpiDays'
			),
			40 => array(
			'var' => 'kpiGrossMargin'
			),
			41 => array(
			'var' => 'salesSite'
			),
			42 => array(
			'var' => 'generalTrade'
			),
			43 => array(
			'var' => 'pdcVendorCode'
			),
			44 => array(
			'var' => 'taxType'
			),
			45 => array(
			'var' => 'taxTypeRate'
			),
			46 => array(
			'var' => 'purchaseCompany'
			),
			47 => array(
			'var' => 'purchaseCompanyCode'
			),
			48 => array(
			'var' => 'originalPo'
			),
			49 => array(
			'var' => 'partyCountry'
			),
			50 => array(
			'var' => 'isVWarehouse'
			),
			51 => array(
			'var' => 'productionDate'
			),
			52 => array(
			'var' => 'expireDate'
			),
			53 => array(
			'var' => 'SETTLE_SEGMENT1'
			),
			54 => array(
			'var' => 'oldItemNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sourceCode'])){
				
				$this->sourceCode = $vals['sourceCode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['buyerBy'])){
				
				$this->buyerBy = $vals['buyerBy'];
			}
			
			
			if (isset($vals['purchaseType'])){
				
				$this->purchaseType = $vals['purchaseType'];
			}
			
			
			if (isset($vals['lineNum'])){
				
				$this->lineNum = $vals['lineNum'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDesc'])){
				
				$this->itemDesc = $vals['itemDesc'];
			}
			
			
			if (isset($vals['uomCode'])){
				
				$this->uomCode = $vals['uomCode'];
			}
			
			
			if (isset($vals['poQty'])){
				
				$this->poQty = $vals['poQty'];
			}
			
			
			if (isset($vals['packingQty'])){
				
				$this->packingQty = $vals['packingQty'];
			}
			
			
			if (isset($vals['poMarketPrice'])){
				
				$this->poMarketPrice = $vals['poMarketPrice'];
			}
			
			
			if (isset($vals['poUnitPrice'])){
				
				$this->poUnitPrice = $vals['poUnitPrice'];
			}
			
			
			if (isset($vals['needByDate'])){
				
				$this->needByDate = $vals['needByDate'];
			}
			
			
			if (isset($vals['sellArea'])){
				
				$this->sellArea = $vals['sellArea'];
			}
			
			
			if (isset($vals['settlement'])){
				
				$this->settlement = $vals['settlement'];
			}
			
			
			if (isset($vals['purchaseModel'])){
				
				$this->purchaseModel = $vals['purchaseModel'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['rateDate'])){
				
				$this->rateDate = $vals['rateDate'];
			}
			
			
			if (isset($vals['tradeModel'])){
				
				$this->tradeModel = $vals['tradeModel'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['creationDate'])){
				
				$this->creationDate = $vals['creationDate'];
			}
			
			
			if (isset($vals['lastUpdatedBy'])){
				
				$this->lastUpdatedBy = $vals['lastUpdatedBy'];
			}
			
			
			if (isset($vals['lastUpdateDate'])){
				
				$this->lastUpdateDate = $vals['lastUpdateDate'];
			}
			
			
			if (isset($vals['servfeeRate'])){
				
				$this->servfeeRate = $vals['servfeeRate'];
			}
			
			
			if (isset($vals['delayDays'])){
				
				$this->delayDays = $vals['delayDays'];
			}
			
			
			if (isset($vals['tagPrice'])){
				
				$this->tagPrice = $vals['tagPrice'];
			}
			
			
			if (isset($vals['purchaseArea'])){
				
				$this->purchaseArea = $vals['purchaseArea'];
			}
			
			
			if (isset($vals['purchaseOffice'])){
				
				$this->purchaseOffice = $vals['purchaseOffice'];
			}
			
			
			if (isset($vals['taxPurchasePrice'])){
				
				$this->taxPurchasePrice = $vals['taxPurchasePrice'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandNameEn'])){
				
				$this->brandNameEn = $vals['brandNameEn'];
			}
			
			
			if (isset($vals['itemSn'])){
				
				$this->itemSn = $vals['itemSn'];
			}
			
			
			if (isset($vals['buyerName'])){
				
				$this->buyerName = $vals['buyerName'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['purchaseOffice1'])){
				
				$this->purchaseOffice1 = $vals['purchaseOffice1'];
			}
			
			
			if (isset($vals['kpiDays'])){
				
				$this->kpiDays = $vals['kpiDays'];
			}
			
			
			if (isset($vals['kpiGrossMargin'])){
				
				$this->kpiGrossMargin = $vals['kpiGrossMargin'];
			}
			
			
			if (isset($vals['salesSite'])){
				
				$this->salesSite = $vals['salesSite'];
			}
			
			
			if (isset($vals['generalTrade'])){
				
				$this->generalTrade = $vals['generalTrade'];
			}
			
			
			if (isset($vals['pdcVendorCode'])){
				
				$this->pdcVendorCode = $vals['pdcVendorCode'];
			}
			
			
			if (isset($vals['taxType'])){
				
				$this->taxType = $vals['taxType'];
			}
			
			
			if (isset($vals['taxTypeRate'])){
				
				$this->taxTypeRate = $vals['taxTypeRate'];
			}
			
			
			if (isset($vals['purchaseCompany'])){
				
				$this->purchaseCompany = $vals['purchaseCompany'];
			}
			
			
			if (isset($vals['purchaseCompanyCode'])){
				
				$this->purchaseCompanyCode = $vals['purchaseCompanyCode'];
			}
			
			
			if (isset($vals['originalPo'])){
				
				$this->originalPo = $vals['originalPo'];
			}
			
			
			if (isset($vals['partyCountry'])){
				
				$this->partyCountry = $vals['partyCountry'];
			}
			
			
			if (isset($vals['isVWarehouse'])){
				
				$this->isVWarehouse = $vals['isVWarehouse'];
			}
			
			
			if (isset($vals['productionDate'])){
				
				$this->productionDate = $vals['productionDate'];
			}
			
			
			if (isset($vals['expireDate'])){
				
				$this->expireDate = $vals['expireDate'];
			}
			
			
			if (isset($vals['SETTLE_SEGMENT1'])){
				
				$this->SETTLE_SEGMENT1 = $vals['SETTLE_SEGMENT1'];
			}
			
			
			if (isset($vals['oldItemNo'])){
				
				$this->oldItemNo = $vals['oldItemNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EBSPoDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sourceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceCode);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("buyerBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerBy);
				
			}
			
			
			
			
			if ("purchaseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseType);
				
			}
			
			
			
			
			if ("lineNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineNum);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDesc);
				
			}
			
			
			
			
			if ("uomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uomCode);
				
			}
			
			
			
			
			if ("poQty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poQty);
				
			}
			
			
			
			
			if ("packingQty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packingQty);
				
			}
			
			
			
			
			if ("poMarketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poMarketPrice);
				
			}
			
			
			
			
			if ("poUnitPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poUnitPrice);
				
			}
			
			
			
			
			if ("needByDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->needByDate);
				
			}
			
			
			
			
			if ("sellArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellArea);
				
			}
			
			
			
			
			if ("settlement" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settlement);
				
			}
			
			
			
			
			if ("purchaseModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseModel);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("rateDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rateDate);
				
			}
			
			
			
			
			if ("tradeModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeModel);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("creationDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creationDate);
				
			}
			
			
			
			
			if ("lastUpdatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastUpdatedBy);
				
			}
			
			
			
			
			if ("lastUpdateDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastUpdateDate);
				
			}
			
			
			
			
			if ("servfeeRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->servfeeRate);
				
			}
			
			
			
			
			if ("delayDays" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delayDays);
				
			}
			
			
			
			
			if ("tagPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagPrice);
				
			}
			
			
			
			
			if ("purchaseArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseArea);
				
			}
			
			
			
			
			if ("purchaseOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice);
				
			}
			
			
			
			
			if ("taxPurchasePrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxPurchasePrice);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandNameEn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandNameEn);
				
			}
			
			
			
			
			if ("itemSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemSn);
				
			}
			
			
			
			
			if ("buyerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerName);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("purchaseOffice1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice1);
				
			}
			
			
			
			
			if ("kpiDays" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->kpiDays);
				
			}
			
			
			
			
			if ("kpiGrossMargin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->kpiGrossMargin);
				
			}
			
			
			
			
			if ("salesSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesSite);
				
			}
			
			
			
			
			if ("generalTrade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->generalTrade);
				
			}
			
			
			
			
			if ("pdcVendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcVendorCode);
				
			}
			
			
			
			
			if ("taxType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxType);
				
			}
			
			
			
			
			if ("taxTypeRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxTypeRate);
				
			}
			
			
			
			
			if ("purchaseCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompany);
				
			}
			
			
			
			
			if ("purchaseCompanyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompanyCode);
				
			}
			
			
			
			
			if ("originalPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalPo);
				
			}
			
			
			
			
			if ("partyCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->partyCountry);
				
			}
			
			
			
			
			if ("isVWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isVWarehouse); 
				
			}
			
			
			
			
			if ("productionDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productionDate);
				
			}
			
			
			
			
			if ("expireDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expireDate);
				
			}
			
			
			
			
			if ("SETTLE_SEGMENT1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->SETTLE_SEGMENT1);
				
			}
			
			
			
			
			if ("oldItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldItemNo);
				
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
		
		if($this->sourceCode !== null) {
			
			$xfer += $output->writeFieldBegin('sourceCode');
			$xfer += $output->writeString($this->sourceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerBy !== null) {
			
			$xfer += $output->writeFieldBegin('buyerBy');
			$xfer += $output->writeString($this->buyerBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseType !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseType');
			$xfer += $output->writeString($this->purchaseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineNum !== null) {
			
			$xfer += $output->writeFieldBegin('lineNum');
			$xfer += $output->writeString($this->lineNum);
			
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
		
		
		if($this->uomCode !== null) {
			
			$xfer += $output->writeFieldBegin('uomCode');
			$xfer += $output->writeString($this->uomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poQty !== null) {
			
			$xfer += $output->writeFieldBegin('poQty');
			$xfer += $output->writeString($this->poQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packingQty !== null) {
			
			$xfer += $output->writeFieldBegin('packingQty');
			$xfer += $output->writeString($this->packingQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poMarketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poMarketPrice');
			$xfer += $output->writeString($this->poMarketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poUnitPrice !== null) {
			
			$xfer += $output->writeFieldBegin('poUnitPrice');
			$xfer += $output->writeString($this->poUnitPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needByDate !== null) {
			
			$xfer += $output->writeFieldBegin('needByDate');
			$xfer += $output->writeString($this->needByDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellArea !== null) {
			
			$xfer += $output->writeFieldBegin('sellArea');
			$xfer += $output->writeString($this->sellArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlement !== null) {
			
			$xfer += $output->writeFieldBegin('settlement');
			$xfer += $output->writeString($this->settlement);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseModel !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseModel');
			$xfer += $output->writeString($this->purchaseModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rateDate !== null) {
			
			$xfer += $output->writeFieldBegin('rateDate');
			$xfer += $output->writeString($this->rateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeModel !== null) {
			
			$xfer += $output->writeFieldBegin('tradeModel');
			$xfer += $output->writeString($this->tradeModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creationDate !== null) {
			
			$xfer += $output->writeFieldBegin('creationDate');
			$xfer += $output->writeString($this->creationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedBy');
			$xfer += $output->writeString($this->lastUpdatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdateDate !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateDate');
			$xfer += $output->writeString($this->lastUpdateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->servfeeRate !== null) {
			
			$xfer += $output->writeFieldBegin('servfeeRate');
			$xfer += $output->writeString($this->servfeeRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delayDays !== null) {
			
			$xfer += $output->writeFieldBegin('delayDays');
			$xfer += $output->writeString($this->delayDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagPrice !== null) {
			
			$xfer += $output->writeFieldBegin('tagPrice');
			$xfer += $output->writeString($this->tagPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseArea !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseArea');
			$xfer += $output->writeString($this->purchaseArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice');
			$xfer += $output->writeString($this->purchaseOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxPurchasePrice !== null) {
			
			$xfer += $output->writeFieldBegin('taxPurchasePrice');
			$xfer += $output->writeString($this->taxPurchasePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
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
		
		
		if($this->brandNameEn !== null) {
			
			$xfer += $output->writeFieldBegin('brandNameEn');
			$xfer += $output->writeString($this->brandNameEn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemSn !== null) {
			
			$xfer += $output->writeFieldBegin('itemSn');
			$xfer += $output->writeString($this->itemSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerName');
			$xfer += $output->writeString($this->buyerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice1 !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice1');
			$xfer += $output->writeString($this->purchaseOffice1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->kpiDays !== null) {
			
			$xfer += $output->writeFieldBegin('kpiDays');
			$xfer += $output->writeString($this->kpiDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->kpiGrossMargin !== null) {
			
			$xfer += $output->writeFieldBegin('kpiGrossMargin');
			$xfer += $output->writeString($this->kpiGrossMargin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesSite !== null) {
			
			$xfer += $output->writeFieldBegin('salesSite');
			$xfer += $output->writeString($this->salesSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->generalTrade !== null) {
			
			$xfer += $output->writeFieldBegin('generalTrade');
			$xfer += $output->writeString($this->generalTrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcVendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('pdcVendorCode');
			$xfer += $output->writeString($this->pdcVendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxType !== null) {
			
			$xfer += $output->writeFieldBegin('taxType');
			$xfer += $output->writeString($this->taxType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxTypeRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxTypeRate');
			$xfer += $output->writeString($this->taxTypeRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompany !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompany');
			$xfer += $output->writeString($this->purchaseCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompanyCode !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompanyCode');
			$xfer += $output->writeString($this->purchaseCompanyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalPo !== null) {
			
			$xfer += $output->writeFieldBegin('originalPo');
			$xfer += $output->writeString($this->originalPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partyCountry !== null) {
			
			$xfer += $output->writeFieldBegin('partyCountry');
			$xfer += $output->writeString($this->partyCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('isVWarehouse');
			$xfer += $output->writeI32($this->isVWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productionDate !== null) {
			
			$xfer += $output->writeFieldBegin('productionDate');
			$xfer += $output->writeString($this->productionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expireDate !== null) {
			
			$xfer += $output->writeFieldBegin('expireDate');
			$xfer += $output->writeString($this->expireDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->SETTLE_SEGMENT1 !== null) {
			
			$xfer += $output->writeFieldBegin('SETTLE_SEGMENT1');
			$xfer += $output->writeString($this->SETTLE_SEGMENT1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('oldItemNo');
			$xfer += $output->writeString($this->oldItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>