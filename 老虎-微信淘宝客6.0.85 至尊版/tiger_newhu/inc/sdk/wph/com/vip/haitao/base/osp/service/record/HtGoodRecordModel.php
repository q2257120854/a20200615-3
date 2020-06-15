<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\base\osp\service\record;

class HtGoodRecordModel {
	
	static $_TSPEC;
	public $goodRecordName = null;
	public $goodNo = null;
	public $goodSn = null;
	public $goodHsCode = null;
	public $parcelTaxRate = null;
	public $ieflag = null;
	public $parcelTaxNo = null;
	public $parcelTaxName = null;
	public $unit = null;
	public $recordPrice = null;
	public $grossWeight = null;
	public $netWeight = null;
	public $hsTaxRate = null;
	public $customsname = null;
	public $goodRecordNo = null;
	public $carriername = null;
	public $carriercode = null;
	public $customscode = null;
	public $remark = null;
	public $goodShelvesName = null;
	public $country = null;
	public $currency = null;
	public $goodName = null;
	public $goodDetail = null;
	public $standardType = null;
	public $effect = null;
	public $packageType = null;
	public $brand = null;
	public $ingredients = null;
	public $factory = null;
	public $batchNumber = null;
	public $ciqUnit = null;
	public $ciqRecordNo = null;
	public $gno = null;
	public $customsDistrict = null;
	public $consumptionTaxRate = null;
	public $valueAddedTaxRate = null;
	public $legalUnitFirst = null;
	public $legalUnitSecond = null;
	public $legalAmountFirst = null;
	public $legalAmountSecond = null;
	public $recordPartNum = null;
	public $expiryDate = null;
	public $productionStandard = null;
	public $ciqCountry = null;
	public $factoryAddress = null;
	public $factoryRecord = null;
	public $goodsType = null;
	public $frontPicture = null;
	public $backPicture = null;
	public $labelPicture = null;
	public $backupPicture = null;
	public $tarrifNo = null;
	public $element = null;
	public $goodEnglishName = null;
	public $useMethod = null;
	public $applyCrowd = null;
	public $storageCondition = null;
	public $vipSellCost = null;
	public $dateOfManufacture = null;
	public $manufacturerLinkman = null;
	public $manufacturerPhone = null;
	public $weavingProcess = null;
	public $garmentTypes = null;
	public $manOrWomensClothing = null;
	public $foreignCurrency = null;
	public $foreignPrice = null;
	public $typeOfMerchandize = null;
	public $isGroup = null;
	public $enterpriseName = null;
	public $enterpriseCusNo = null;
	public $enterpriseCiqNo = null;
	public $declareCusCode = null;
	public $declareCiqCode = null;
	public $brandType = null;
	public $exportBenefit = null;
	public $commodityQuality = null;
	public $lengthUnit = null;
	public $widthUnit = null;
	public $heightUnit = null;
	public $volumeUnit = null;
	public $businessType = null;
	public $unitConvertQuantity = null;
	public $enterpriseWarehouse = null;
	public $goodsSaleUrl = null;
	public $isOverFoodAdditives = null;
	public $isContainPoison = null;
	public $isGift = null;
	public $isSn = null;
	public $isLawReview = null;
	public $accordRule = null;
	public $modifyFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodRecordName'
			),
			2 => array(
			'var' => 'goodNo'
			),
			3 => array(
			'var' => 'goodSn'
			),
			4 => array(
			'var' => 'goodHsCode'
			),
			5 => array(
			'var' => 'parcelTaxRate'
			),
			6 => array(
			'var' => 'ieflag'
			),
			7 => array(
			'var' => 'parcelTaxNo'
			),
			8 => array(
			'var' => 'parcelTaxName'
			),
			9 => array(
			'var' => 'unit'
			),
			10 => array(
			'var' => 'recordPrice'
			),
			11 => array(
			'var' => 'grossWeight'
			),
			12 => array(
			'var' => 'netWeight'
			),
			13 => array(
			'var' => 'hsTaxRate'
			),
			14 => array(
			'var' => 'customsname'
			),
			15 => array(
			'var' => 'goodRecordNo'
			),
			16 => array(
			'var' => 'carriername'
			),
			17 => array(
			'var' => 'carriercode'
			),
			18 => array(
			'var' => 'customscode'
			),
			19 => array(
			'var' => 'remark'
			),
			20 => array(
			'var' => 'goodShelvesName'
			),
			21 => array(
			'var' => 'country'
			),
			22 => array(
			'var' => 'currency'
			),
			23 => array(
			'var' => 'goodName'
			),
			24 => array(
			'var' => 'goodDetail'
			),
			25 => array(
			'var' => 'standardType'
			),
			26 => array(
			'var' => 'effect'
			),
			27 => array(
			'var' => 'packageType'
			),
			28 => array(
			'var' => 'brand'
			),
			29 => array(
			'var' => 'ingredients'
			),
			30 => array(
			'var' => 'factory'
			),
			31 => array(
			'var' => 'batchNumber'
			),
			32 => array(
			'var' => 'ciqUnit'
			),
			33 => array(
			'var' => 'ciqRecordNo'
			),
			34 => array(
			'var' => 'gno'
			),
			35 => array(
			'var' => 'customsDistrict'
			),
			36 => array(
			'var' => 'consumptionTaxRate'
			),
			37 => array(
			'var' => 'valueAddedTaxRate'
			),
			38 => array(
			'var' => 'legalUnitFirst'
			),
			39 => array(
			'var' => 'legalUnitSecond'
			),
			40 => array(
			'var' => 'legalAmountFirst'
			),
			41 => array(
			'var' => 'legalAmountSecond'
			),
			42 => array(
			'var' => 'recordPartNum'
			),
			43 => array(
			'var' => 'expiryDate'
			),
			44 => array(
			'var' => 'productionStandard'
			),
			45 => array(
			'var' => 'ciqCountry'
			),
			46 => array(
			'var' => 'factoryAddress'
			),
			47 => array(
			'var' => 'factoryRecord'
			),
			48 => array(
			'var' => 'goodsType'
			),
			49 => array(
			'var' => 'frontPicture'
			),
			50 => array(
			'var' => 'backPicture'
			),
			51 => array(
			'var' => 'labelPicture'
			),
			52 => array(
			'var' => 'backupPicture'
			),
			53 => array(
			'var' => 'tarrifNo'
			),
			54 => array(
			'var' => 'element'
			),
			55 => array(
			'var' => 'goodEnglishName'
			),
			56 => array(
			'var' => 'useMethod'
			),
			57 => array(
			'var' => 'applyCrowd'
			),
			58 => array(
			'var' => 'storageCondition'
			),
			59 => array(
			'var' => 'vipSellCost'
			),
			60 => array(
			'var' => 'dateOfManufacture'
			),
			61 => array(
			'var' => 'manufacturerLinkman'
			),
			62 => array(
			'var' => 'manufacturerPhone'
			),
			63 => array(
			'var' => 'weavingProcess'
			),
			64 => array(
			'var' => 'garmentTypes'
			),
			65 => array(
			'var' => 'manOrWomensClothing'
			),
			66 => array(
			'var' => 'foreignCurrency'
			),
			67 => array(
			'var' => 'foreignPrice'
			),
			68 => array(
			'var' => 'typeOfMerchandize'
			),
			69 => array(
			'var' => 'isGroup'
			),
			70 => array(
			'var' => 'enterpriseName'
			),
			71 => array(
			'var' => 'enterpriseCusNo'
			),
			72 => array(
			'var' => 'enterpriseCiqNo'
			),
			73 => array(
			'var' => 'declareCusCode'
			),
			74 => array(
			'var' => 'declareCiqCode'
			),
			75 => array(
			'var' => 'brandType'
			),
			76 => array(
			'var' => 'exportBenefit'
			),
			77 => array(
			'var' => 'commodityQuality'
			),
			78 => array(
			'var' => 'lengthUnit'
			),
			79 => array(
			'var' => 'widthUnit'
			),
			80 => array(
			'var' => 'heightUnit'
			),
			81 => array(
			'var' => 'volumeUnit'
			),
			82 => array(
			'var' => 'businessType'
			),
			83 => array(
			'var' => 'unitConvertQuantity'
			),
			84 => array(
			'var' => 'enterpriseWarehouse'
			),
			85 => array(
			'var' => 'goodsSaleUrl'
			),
			86 => array(
			'var' => 'isOverFoodAdditives'
			),
			87 => array(
			'var' => 'isContainPoison'
			),
			88 => array(
			'var' => 'isGift'
			),
			89 => array(
			'var' => 'isSn'
			),
			90 => array(
			'var' => 'isLawReview'
			),
			91 => array(
			'var' => 'accordRule'
			),
			92 => array(
			'var' => 'modifyFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodRecordName'])){
				
				$this->goodRecordName = $vals['goodRecordName'];
			}
			
			
			if (isset($vals['goodNo'])){
				
				$this->goodNo = $vals['goodNo'];
			}
			
			
			if (isset($vals['goodSn'])){
				
				$this->goodSn = $vals['goodSn'];
			}
			
			
			if (isset($vals['goodHsCode'])){
				
				$this->goodHsCode = $vals['goodHsCode'];
			}
			
			
			if (isset($vals['parcelTaxRate'])){
				
				$this->parcelTaxRate = $vals['parcelTaxRate'];
			}
			
			
			if (isset($vals['ieflag'])){
				
				$this->ieflag = $vals['ieflag'];
			}
			
			
			if (isset($vals['parcelTaxNo'])){
				
				$this->parcelTaxNo = $vals['parcelTaxNo'];
			}
			
			
			if (isset($vals['parcelTaxName'])){
				
				$this->parcelTaxName = $vals['parcelTaxName'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['recordPrice'])){
				
				$this->recordPrice = $vals['recordPrice'];
			}
			
			
			if (isset($vals['grossWeight'])){
				
				$this->grossWeight = $vals['grossWeight'];
			}
			
			
			if (isset($vals['netWeight'])){
				
				$this->netWeight = $vals['netWeight'];
			}
			
			
			if (isset($vals['hsTaxRate'])){
				
				$this->hsTaxRate = $vals['hsTaxRate'];
			}
			
			
			if (isset($vals['customsname'])){
				
				$this->customsname = $vals['customsname'];
			}
			
			
			if (isset($vals['goodRecordNo'])){
				
				$this->goodRecordNo = $vals['goodRecordNo'];
			}
			
			
			if (isset($vals['carriername'])){
				
				$this->carriername = $vals['carriername'];
			}
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['customscode'])){
				
				$this->customscode = $vals['customscode'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['goodShelvesName'])){
				
				$this->goodShelvesName = $vals['goodShelvesName'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['goodDetail'])){
				
				$this->goodDetail = $vals['goodDetail'];
			}
			
			
			if (isset($vals['standardType'])){
				
				$this->standardType = $vals['standardType'];
			}
			
			
			if (isset($vals['effect'])){
				
				$this->effect = $vals['effect'];
			}
			
			
			if (isset($vals['packageType'])){
				
				$this->packageType = $vals['packageType'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['ingredients'])){
				
				$this->ingredients = $vals['ingredients'];
			}
			
			
			if (isset($vals['factory'])){
				
				$this->factory = $vals['factory'];
			}
			
			
			if (isset($vals['batchNumber'])){
				
				$this->batchNumber = $vals['batchNumber'];
			}
			
			
			if (isset($vals['ciqUnit'])){
				
				$this->ciqUnit = $vals['ciqUnit'];
			}
			
			
			if (isset($vals['ciqRecordNo'])){
				
				$this->ciqRecordNo = $vals['ciqRecordNo'];
			}
			
			
			if (isset($vals['gno'])){
				
				$this->gno = $vals['gno'];
			}
			
			
			if (isset($vals['customsDistrict'])){
				
				$this->customsDistrict = $vals['customsDistrict'];
			}
			
			
			if (isset($vals['consumptionTaxRate'])){
				
				$this->consumptionTaxRate = $vals['consumptionTaxRate'];
			}
			
			
			if (isset($vals['valueAddedTaxRate'])){
				
				$this->valueAddedTaxRate = $vals['valueAddedTaxRate'];
			}
			
			
			if (isset($vals['legalUnitFirst'])){
				
				$this->legalUnitFirst = $vals['legalUnitFirst'];
			}
			
			
			if (isset($vals['legalUnitSecond'])){
				
				$this->legalUnitSecond = $vals['legalUnitSecond'];
			}
			
			
			if (isset($vals['legalAmountFirst'])){
				
				$this->legalAmountFirst = $vals['legalAmountFirst'];
			}
			
			
			if (isset($vals['legalAmountSecond'])){
				
				$this->legalAmountSecond = $vals['legalAmountSecond'];
			}
			
			
			if (isset($vals['recordPartNum'])){
				
				$this->recordPartNum = $vals['recordPartNum'];
			}
			
			
			if (isset($vals['expiryDate'])){
				
				$this->expiryDate = $vals['expiryDate'];
			}
			
			
			if (isset($vals['productionStandard'])){
				
				$this->productionStandard = $vals['productionStandard'];
			}
			
			
			if (isset($vals['ciqCountry'])){
				
				$this->ciqCountry = $vals['ciqCountry'];
			}
			
			
			if (isset($vals['factoryAddress'])){
				
				$this->factoryAddress = $vals['factoryAddress'];
			}
			
			
			if (isset($vals['factoryRecord'])){
				
				$this->factoryRecord = $vals['factoryRecord'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['frontPicture'])){
				
				$this->frontPicture = $vals['frontPicture'];
			}
			
			
			if (isset($vals['backPicture'])){
				
				$this->backPicture = $vals['backPicture'];
			}
			
			
			if (isset($vals['labelPicture'])){
				
				$this->labelPicture = $vals['labelPicture'];
			}
			
			
			if (isset($vals['backupPicture'])){
				
				$this->backupPicture = $vals['backupPicture'];
			}
			
			
			if (isset($vals['tarrifNo'])){
				
				$this->tarrifNo = $vals['tarrifNo'];
			}
			
			
			if (isset($vals['element'])){
				
				$this->element = $vals['element'];
			}
			
			
			if (isset($vals['goodEnglishName'])){
				
				$this->goodEnglishName = $vals['goodEnglishName'];
			}
			
			
			if (isset($vals['useMethod'])){
				
				$this->useMethod = $vals['useMethod'];
			}
			
			
			if (isset($vals['applyCrowd'])){
				
				$this->applyCrowd = $vals['applyCrowd'];
			}
			
			
			if (isset($vals['storageCondition'])){
				
				$this->storageCondition = $vals['storageCondition'];
			}
			
			
			if (isset($vals['vipSellCost'])){
				
				$this->vipSellCost = $vals['vipSellCost'];
			}
			
			
			if (isset($vals['dateOfManufacture'])){
				
				$this->dateOfManufacture = $vals['dateOfManufacture'];
			}
			
			
			if (isset($vals['manufacturerLinkman'])){
				
				$this->manufacturerLinkman = $vals['manufacturerLinkman'];
			}
			
			
			if (isset($vals['manufacturerPhone'])){
				
				$this->manufacturerPhone = $vals['manufacturerPhone'];
			}
			
			
			if (isset($vals['weavingProcess'])){
				
				$this->weavingProcess = $vals['weavingProcess'];
			}
			
			
			if (isset($vals['garmentTypes'])){
				
				$this->garmentTypes = $vals['garmentTypes'];
			}
			
			
			if (isset($vals['manOrWomensClothing'])){
				
				$this->manOrWomensClothing = $vals['manOrWomensClothing'];
			}
			
			
			if (isset($vals['foreignCurrency'])){
				
				$this->foreignCurrency = $vals['foreignCurrency'];
			}
			
			
			if (isset($vals['foreignPrice'])){
				
				$this->foreignPrice = $vals['foreignPrice'];
			}
			
			
			if (isset($vals['typeOfMerchandize'])){
				
				$this->typeOfMerchandize = $vals['typeOfMerchandize'];
			}
			
			
			if (isset($vals['isGroup'])){
				
				$this->isGroup = $vals['isGroup'];
			}
			
			
			if (isset($vals['enterpriseName'])){
				
				$this->enterpriseName = $vals['enterpriseName'];
			}
			
			
			if (isset($vals['enterpriseCusNo'])){
				
				$this->enterpriseCusNo = $vals['enterpriseCusNo'];
			}
			
			
			if (isset($vals['enterpriseCiqNo'])){
				
				$this->enterpriseCiqNo = $vals['enterpriseCiqNo'];
			}
			
			
			if (isset($vals['declareCusCode'])){
				
				$this->declareCusCode = $vals['declareCusCode'];
			}
			
			
			if (isset($vals['declareCiqCode'])){
				
				$this->declareCiqCode = $vals['declareCiqCode'];
			}
			
			
			if (isset($vals['brandType'])){
				
				$this->brandType = $vals['brandType'];
			}
			
			
			if (isset($vals['exportBenefit'])){
				
				$this->exportBenefit = $vals['exportBenefit'];
			}
			
			
			if (isset($vals['commodityQuality'])){
				
				$this->commodityQuality = $vals['commodityQuality'];
			}
			
			
			if (isset($vals['lengthUnit'])){
				
				$this->lengthUnit = $vals['lengthUnit'];
			}
			
			
			if (isset($vals['widthUnit'])){
				
				$this->widthUnit = $vals['widthUnit'];
			}
			
			
			if (isset($vals['heightUnit'])){
				
				$this->heightUnit = $vals['heightUnit'];
			}
			
			
			if (isset($vals['volumeUnit'])){
				
				$this->volumeUnit = $vals['volumeUnit'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['unitConvertQuantity'])){
				
				$this->unitConvertQuantity = $vals['unitConvertQuantity'];
			}
			
			
			if (isset($vals['enterpriseWarehouse'])){
				
				$this->enterpriseWarehouse = $vals['enterpriseWarehouse'];
			}
			
			
			if (isset($vals['goodsSaleUrl'])){
				
				$this->goodsSaleUrl = $vals['goodsSaleUrl'];
			}
			
			
			if (isset($vals['isOverFoodAdditives'])){
				
				$this->isOverFoodAdditives = $vals['isOverFoodAdditives'];
			}
			
			
			if (isset($vals['isContainPoison'])){
				
				$this->isContainPoison = $vals['isContainPoison'];
			}
			
			
			if (isset($vals['isGift'])){
				
				$this->isGift = $vals['isGift'];
			}
			
			
			if (isset($vals['isSn'])){
				
				$this->isSn = $vals['isSn'];
			}
			
			
			if (isset($vals['isLawReview'])){
				
				$this->isLawReview = $vals['isLawReview'];
			}
			
			
			if (isset($vals['accordRule'])){
				
				$this->accordRule = $vals['accordRule'];
			}
			
			
			if (isset($vals['modifyFlag'])){
				
				$this->modifyFlag = $vals['modifyFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtGoodRecordModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodRecordName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodRecordName);
				
			}
			
			
			
			
			if ("goodNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodNo);
				
			}
			
			
			
			
			if ("goodSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodSn);
				
			}
			
			
			
			
			if ("goodHsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodHsCode);
				
			}
			
			
			
			
			if ("parcelTaxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->parcelTaxRate);
				
			}
			
			
			
			
			if ("ieflag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ieflag);
				
			}
			
			
			
			
			if ("parcelTaxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parcelTaxNo);
				
			}
			
			
			
			
			if ("parcelTaxName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parcelTaxName);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("recordPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->recordPrice);
				
			}
			
			
			
			
			if ("grossWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossWeight);
				
			}
			
			
			
			
			if ("netWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->netWeight);
				
			}
			
			
			
			
			if ("hsTaxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->hsTaxRate);
				
			}
			
			
			
			
			if ("customsname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsname);
				
			}
			
			
			
			
			if ("goodRecordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodRecordNo);
				
			}
			
			
			
			
			if ("carriername" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriername);
				
			}
			
			
			
			
			if ("carriercode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriercode);
				
			}
			
			
			
			
			if ("customscode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customscode);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("goodShelvesName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodShelvesName);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("goodDetail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodDetail);
				
			}
			
			
			
			
			if ("standardType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->standardType);
				
			}
			
			
			
			
			if ("effect" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->effect);
				
			}
			
			
			
			
			if ("packageType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageType);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("ingredients" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ingredients);
				
			}
			
			
			
			
			if ("factory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->factory);
				
			}
			
			
			
			
			if ("batchNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNumber);
				
			}
			
			
			
			
			if ("ciqUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqUnit);
				
			}
			
			
			
			
			if ("ciqRecordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqRecordNo);
				
			}
			
			
			
			
			if ("gno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gno);
				
			}
			
			
			
			
			if ("customsDistrict" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsDistrict);
				
			}
			
			
			
			
			if ("consumptionTaxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->consumptionTaxRate);
				
			}
			
			
			
			
			if ("valueAddedTaxRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->valueAddedTaxRate);
				
			}
			
			
			
			
			if ("legalUnitFirst" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalUnitFirst);
				
			}
			
			
			
			
			if ("legalUnitSecond" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalUnitSecond);
				
			}
			
			
			
			
			if ("legalAmountFirst" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalAmountFirst);
				
			}
			
			
			
			
			if ("legalAmountSecond" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalAmountSecond);
				
			}
			
			
			
			
			if ("recordPartNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordPartNum);
				
			}
			
			
			
			
			if ("expiryDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expiryDate);
				
			}
			
			
			
			
			if ("productionStandard" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productionStandard);
				
			}
			
			
			
			
			if ("ciqCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqCountry);
				
			}
			
			
			
			
			if ("factoryAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->factoryAddress);
				
			}
			
			
			
			
			if ("factoryRecord" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->factoryRecord);
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsType);
				
			}
			
			
			
			
			if ("frontPicture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->frontPicture);
				
			}
			
			
			
			
			if ("backPicture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backPicture);
				
			}
			
			
			
			
			if ("labelPicture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->labelPicture);
				
			}
			
			
			
			
			if ("backupPicture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backupPicture);
				
			}
			
			
			
			
			if ("tarrifNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tarrifNo);
				
			}
			
			
			
			
			if ("element" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->element);
				
			}
			
			
			
			
			if ("goodEnglishName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodEnglishName);
				
			}
			
			
			
			
			if ("useMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->useMethod);
				
			}
			
			
			
			
			if ("applyCrowd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->applyCrowd);
				
			}
			
			
			
			
			if ("storageCondition" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storageCondition);
				
			}
			
			
			
			
			if ("vipSellCost" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vipSellCost);
				
			}
			
			
			
			
			if ("dateOfManufacture" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dateOfManufacture); 
				
			}
			
			
			
			
			if ("manufacturerLinkman" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->manufacturerLinkman);
				
			}
			
			
			
			
			if ("manufacturerPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->manufacturerPhone);
				
			}
			
			
			
			
			if ("weavingProcess" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weavingProcess);
				
			}
			
			
			
			
			if ("garmentTypes" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->garmentTypes);
				
			}
			
			
			
			
			if ("manOrWomensClothing" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->manOrWomensClothing);
				
			}
			
			
			
			
			if ("foreignCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignCurrency);
				
			}
			
			
			
			
			if ("foreignPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->foreignPrice);
				
			}
			
			
			
			
			if ("typeOfMerchandize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->typeOfMerchandize);
				
			}
			
			
			
			
			if ("isGroup" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isGroup);
				
			}
			
			
			
			
			if ("enterpriseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterpriseName);
				
			}
			
			
			
			
			if ("enterpriseCusNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterpriseCusNo);
				
			}
			
			
			
			
			if ("enterpriseCiqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterpriseCiqNo);
				
			}
			
			
			
			
			if ("declareCusCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->declareCusCode);
				
			}
			
			
			
			
			if ("declareCiqCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->declareCiqCode);
				
			}
			
			
			
			
			if ("brandType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandType);
				
			}
			
			
			
			
			if ("exportBenefit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exportBenefit);
				
			}
			
			
			
			
			if ("commodityQuality" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityQuality);
				
			}
			
			
			
			
			if ("lengthUnit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->lengthUnit);
				
			}
			
			
			
			
			if ("widthUnit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->widthUnit);
				
			}
			
			
			
			
			if ("heightUnit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->heightUnit);
				
			}
			
			
			
			
			if ("volumeUnit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volumeUnit);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessType);
				
			}
			
			
			
			
			if ("unitConvertQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unitConvertQuantity);
				
			}
			
			
			
			
			if ("enterpriseWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterpriseWarehouse);
				
			}
			
			
			
			
			if ("goodsSaleUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsSaleUrl);
				
			}
			
			
			
			
			if ("isOverFoodAdditives" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isOverFoodAdditives);
				
			}
			
			
			
			
			if ("isContainPoison" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isContainPoison);
				
			}
			
			
			
			
			if ("isGift" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isGift);
				
			}
			
			
			
			
			if ("isSn" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSn);
				
			}
			
			
			
			
			if ("isLawReview" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isLawReview);
				
			}
			
			
			
			
			if ("accordRule" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accordRule);
				
			}
			
			
			
			
			if ("modifyFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modifyFlag); 
				
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
		
		if($this->goodRecordName !== null) {
			
			$xfer += $output->writeFieldBegin('goodRecordName');
			$xfer += $output->writeString($this->goodRecordName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodNo');
			$xfer += $output->writeString($this->goodNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodSn');
			$xfer += $output->writeString($this->goodSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodHsCode !== null) {
			
			$xfer += $output->writeFieldBegin('goodHsCode');
			$xfer += $output->writeString($this->goodHsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parcelTaxRate !== null) {
			
			$xfer += $output->writeFieldBegin('parcelTaxRate');
			$xfer += $output->writeDouble($this->parcelTaxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ieflag !== null) {
			
			$xfer += $output->writeFieldBegin('ieflag');
			$xfer += $output->writeString($this->ieflag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parcelTaxNo !== null) {
			
			$xfer += $output->writeFieldBegin('parcelTaxNo');
			$xfer += $output->writeString($this->parcelTaxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parcelTaxName !== null) {
			
			$xfer += $output->writeFieldBegin('parcelTaxName');
			$xfer += $output->writeString($this->parcelTaxName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordPrice !== null) {
			
			$xfer += $output->writeFieldBegin('recordPrice');
			$xfer += $output->writeDouble($this->recordPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossWeight !== null) {
			
			$xfer += $output->writeFieldBegin('grossWeight');
			$xfer += $output->writeDouble($this->grossWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->netWeight !== null) {
			
			$xfer += $output->writeFieldBegin('netWeight');
			$xfer += $output->writeDouble($this->netWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hsTaxRate !== null) {
			
			$xfer += $output->writeFieldBegin('hsTaxRate');
			$xfer += $output->writeDouble($this->hsTaxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsname !== null) {
			
			$xfer += $output->writeFieldBegin('customsname');
			$xfer += $output->writeString($this->customsname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodRecordNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodRecordNo');
			$xfer += $output->writeString($this->goodRecordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriername !== null) {
			
			$xfer += $output->writeFieldBegin('carriername');
			$xfer += $output->writeString($this->carriername);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriercode !== null) {
			
			$xfer += $output->writeFieldBegin('carriercode');
			$xfer += $output->writeString($this->carriercode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customscode !== null) {
			
			$xfer += $output->writeFieldBegin('customscode');
			$xfer += $output->writeString($this->customscode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodShelvesName !== null) {
			
			$xfer += $output->writeFieldBegin('goodShelvesName');
			$xfer += $output->writeString($this->goodShelvesName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodDetail !== null) {
			
			$xfer += $output->writeFieldBegin('goodDetail');
			$xfer += $output->writeString($this->goodDetail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standardType !== null) {
			
			$xfer += $output->writeFieldBegin('standardType');
			$xfer += $output->writeString($this->standardType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effect !== null) {
			
			$xfer += $output->writeFieldBegin('effect');
			$xfer += $output->writeString($this->effect);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageType !== null) {
			
			$xfer += $output->writeFieldBegin('packageType');
			$xfer += $output->writeString($this->packageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ingredients !== null) {
			
			$xfer += $output->writeFieldBegin('ingredients');
			$xfer += $output->writeString($this->ingredients);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->factory !== null) {
			
			$xfer += $output->writeFieldBegin('factory');
			$xfer += $output->writeString($this->factory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNumber !== null) {
			
			$xfer += $output->writeFieldBegin('batchNumber');
			$xfer += $output->writeString($this->batchNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ciqUnit !== null) {
			
			$xfer += $output->writeFieldBegin('ciqUnit');
			$xfer += $output->writeString($this->ciqUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ciqRecordNo !== null) {
			
			$xfer += $output->writeFieldBegin('ciqRecordNo');
			$xfer += $output->writeString($this->ciqRecordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gno !== null) {
			
			$xfer += $output->writeFieldBegin('gno');
			$xfer += $output->writeString($this->gno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsDistrict !== null) {
			
			$xfer += $output->writeFieldBegin('customsDistrict');
			$xfer += $output->writeString($this->customsDistrict);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consumptionTaxRate !== null) {
			
			$xfer += $output->writeFieldBegin('consumptionTaxRate');
			$xfer += $output->writeDouble($this->consumptionTaxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->valueAddedTaxRate !== null) {
			
			$xfer += $output->writeFieldBegin('valueAddedTaxRate');
			$xfer += $output->writeDouble($this->valueAddedTaxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalUnitFirst !== null) {
			
			$xfer += $output->writeFieldBegin('legalUnitFirst');
			$xfer += $output->writeString($this->legalUnitFirst);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalUnitSecond !== null) {
			
			$xfer += $output->writeFieldBegin('legalUnitSecond');
			$xfer += $output->writeString($this->legalUnitSecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalAmountFirst !== null) {
			
			$xfer += $output->writeFieldBegin('legalAmountFirst');
			$xfer += $output->writeString($this->legalAmountFirst);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalAmountSecond !== null) {
			
			$xfer += $output->writeFieldBegin('legalAmountSecond');
			$xfer += $output->writeString($this->legalAmountSecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordPartNum !== null) {
			
			$xfer += $output->writeFieldBegin('recordPartNum');
			$xfer += $output->writeString($this->recordPartNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expiryDate !== null) {
			
			$xfer += $output->writeFieldBegin('expiryDate');
			$xfer += $output->writeString($this->expiryDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productionStandard !== null) {
			
			$xfer += $output->writeFieldBegin('productionStandard');
			$xfer += $output->writeString($this->productionStandard);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ciqCountry !== null) {
			
			$xfer += $output->writeFieldBegin('ciqCountry');
			$xfer += $output->writeString($this->ciqCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->factoryAddress !== null) {
			
			$xfer += $output->writeFieldBegin('factoryAddress');
			$xfer += $output->writeString($this->factoryAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->factoryRecord !== null) {
			
			$xfer += $output->writeFieldBegin('factoryRecord');
			$xfer += $output->writeString($this->factoryRecord);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeString($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->frontPicture !== null) {
			
			$xfer += $output->writeFieldBegin('frontPicture');
			$xfer += $output->writeString($this->frontPicture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backPicture !== null) {
			
			$xfer += $output->writeFieldBegin('backPicture');
			$xfer += $output->writeString($this->backPicture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->labelPicture !== null) {
			
			$xfer += $output->writeFieldBegin('labelPicture');
			$xfer += $output->writeString($this->labelPicture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backupPicture !== null) {
			
			$xfer += $output->writeFieldBegin('backupPicture');
			$xfer += $output->writeString($this->backupPicture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tarrifNo !== null) {
			
			$xfer += $output->writeFieldBegin('tarrifNo');
			$xfer += $output->writeString($this->tarrifNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->element !== null) {
			
			$xfer += $output->writeFieldBegin('element');
			$xfer += $output->writeString($this->element);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodEnglishName !== null) {
			
			$xfer += $output->writeFieldBegin('goodEnglishName');
			$xfer += $output->writeString($this->goodEnglishName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->useMethod !== null) {
			
			$xfer += $output->writeFieldBegin('useMethod');
			$xfer += $output->writeString($this->useMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyCrowd !== null) {
			
			$xfer += $output->writeFieldBegin('applyCrowd');
			$xfer += $output->writeString($this->applyCrowd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storageCondition !== null) {
			
			$xfer += $output->writeFieldBegin('storageCondition');
			$xfer += $output->writeString($this->storageCondition);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipSellCost !== null) {
			
			$xfer += $output->writeFieldBegin('vipSellCost');
			$xfer += $output->writeDouble($this->vipSellCost);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dateOfManufacture !== null) {
			
			$xfer += $output->writeFieldBegin('dateOfManufacture');
			$xfer += $output->writeI64($this->dateOfManufacture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->manufacturerLinkman !== null) {
			
			$xfer += $output->writeFieldBegin('manufacturerLinkman');
			$xfer += $output->writeString($this->manufacturerLinkman);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->manufacturerPhone !== null) {
			
			$xfer += $output->writeFieldBegin('manufacturerPhone');
			$xfer += $output->writeString($this->manufacturerPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weavingProcess !== null) {
			
			$xfer += $output->writeFieldBegin('weavingProcess');
			$xfer += $output->writeString($this->weavingProcess);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->garmentTypes !== null) {
			
			$xfer += $output->writeFieldBegin('garmentTypes');
			$xfer += $output->writeString($this->garmentTypes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->manOrWomensClothing !== null) {
			
			$xfer += $output->writeFieldBegin('manOrWomensClothing');
			$xfer += $output->writeString($this->manOrWomensClothing);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('foreignCurrency');
			$xfer += $output->writeString($this->foreignCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignPrice !== null) {
			
			$xfer += $output->writeFieldBegin('foreignPrice');
			$xfer += $output->writeDouble($this->foreignPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->typeOfMerchandize !== null) {
			
			$xfer += $output->writeFieldBegin('typeOfMerchandize');
			$xfer += $output->writeString($this->typeOfMerchandize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isGroup !== null) {
			
			$xfer += $output->writeFieldBegin('isGroup');
			$xfer += $output->writeBool($this->isGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseName !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseName');
			$xfer += $output->writeString($this->enterpriseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseCusNo !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseCusNo');
			$xfer += $output->writeString($this->enterpriseCusNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseCiqNo !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseCiqNo');
			$xfer += $output->writeString($this->enterpriseCiqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->declareCusCode !== null) {
			
			$xfer += $output->writeFieldBegin('declareCusCode');
			$xfer += $output->writeString($this->declareCusCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->declareCiqCode !== null) {
			
			$xfer += $output->writeFieldBegin('declareCiqCode');
			$xfer += $output->writeString($this->declareCiqCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandType !== null) {
			
			$xfer += $output->writeFieldBegin('brandType');
			$xfer += $output->writeString($this->brandType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exportBenefit !== null) {
			
			$xfer += $output->writeFieldBegin('exportBenefit');
			$xfer += $output->writeString($this->exportBenefit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityQuality !== null) {
			
			$xfer += $output->writeFieldBegin('commodityQuality');
			$xfer += $output->writeString($this->commodityQuality);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lengthUnit !== null) {
			
			$xfer += $output->writeFieldBegin('lengthUnit');
			$xfer += $output->writeDouble($this->lengthUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->widthUnit !== null) {
			
			$xfer += $output->writeFieldBegin('widthUnit');
			$xfer += $output->writeDouble($this->widthUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->heightUnit !== null) {
			
			$xfer += $output->writeFieldBegin('heightUnit');
			$xfer += $output->writeDouble($this->heightUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volumeUnit !== null) {
			
			$xfer += $output->writeFieldBegin('volumeUnit');
			$xfer += $output->writeDouble($this->volumeUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeString($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unitConvertQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('unitConvertQuantity');
			$xfer += $output->writeString($this->unitConvertQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseWarehouse');
			$xfer += $output->writeString($this->enterpriseWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsSaleUrl !== null) {
			
			$xfer += $output->writeFieldBegin('goodsSaleUrl');
			$xfer += $output->writeString($this->goodsSaleUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isOverFoodAdditives !== null) {
			
			$xfer += $output->writeFieldBegin('isOverFoodAdditives');
			$xfer += $output->writeBool($this->isOverFoodAdditives);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isContainPoison !== null) {
			
			$xfer += $output->writeFieldBegin('isContainPoison');
			$xfer += $output->writeBool($this->isContainPoison);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isGift !== null) {
			
			$xfer += $output->writeFieldBegin('isGift');
			$xfer += $output->writeBool($this->isGift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSn !== null) {
			
			$xfer += $output->writeFieldBegin('isSn');
			$xfer += $output->writeBool($this->isSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isLawReview !== null) {
			
			$xfer += $output->writeFieldBegin('isLawReview');
			$xfer += $output->writeBool($this->isLawReview);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accordRule !== null) {
			
			$xfer += $output->writeFieldBegin('accordRule');
			$xfer += $output->writeString($this->accordRule);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modifyFlag !== null) {
			
			$xfer += $output->writeFieldBegin('modifyFlag');
			$xfer += $output->writeI32($this->modifyFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>