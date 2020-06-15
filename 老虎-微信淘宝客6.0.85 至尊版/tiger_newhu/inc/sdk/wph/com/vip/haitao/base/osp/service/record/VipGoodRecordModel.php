<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\base\osp\service\record;

class VipGoodRecordModel {
	
	static $_TSPEC;
	public $goodNo = null;
	public $goodSn = null;
	public $goodRecordName = null;
	public $goodName = null;
	public $goodEnglishName = null;
	public $ingredients = null;
	public $commodityFunction = null;
	public $effect = null;
	public $goodDetail = null;
	public $standardType = null;
	public $grossWeight = null;
	public $netWeight = null;
	public $unit = null;
	public $recordPrice = null;
	public $expiryDate = null;
	public $ciqCountry = null;
	public $country = null;
	public $productionStandard = null;
	public $currency = null;
	public $brand = null;
	public $brandType = null;
	public $factory = null;
	public $factoryAddress = null;
	public $factoryRecord = null;
	public $goodsType = null;
	public $exportBenefit = null;
	public $commodityQuality = null;
	public $lengthUnit = null;
	public $widthUnit = null;
	public $heightUnit = null;
	public $volumeUnit = null;
	public $ieflag = null;
	public $batchNumber = null;
	public $remark = null;
	public $recordType = null;
	public $enterpriseName = null;
	public $enterpriseCusNo = null;
	public $enterpriseCiqNo = null;
	public $businessType = null;
	public $unitConvertQuantity = null;
	public $goodsSaleUrl = null;
	public $isOverFoodAdditives = null;
	public $isContainPoison = null;
	public $isGift = null;
	public $isSn = null;
	public $accordRule = null;
	public $frontPicture = null;
	public $backPicture = null;
	public $labelPicture = null;
	public $statementPicture = null;
	public $cosmeticHazardIdTable = null;
	public $clearanceMode = null;
	public $ciqUnit = null;
	public $supplier = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodNo'
			),
			2 => array(
			'var' => 'goodSn'
			),
			3 => array(
			'var' => 'goodRecordName'
			),
			4 => array(
			'var' => 'goodName'
			),
			5 => array(
			'var' => 'goodEnglishName'
			),
			6 => array(
			'var' => 'ingredients'
			),
			7 => array(
			'var' => 'commodityFunction'
			),
			8 => array(
			'var' => 'effect'
			),
			9 => array(
			'var' => 'goodDetail'
			),
			10 => array(
			'var' => 'standardType'
			),
			11 => array(
			'var' => 'grossWeight'
			),
			12 => array(
			'var' => 'netWeight'
			),
			13 => array(
			'var' => 'unit'
			),
			14 => array(
			'var' => 'recordPrice'
			),
			15 => array(
			'var' => 'expiryDate'
			),
			16 => array(
			'var' => 'ciqCountry'
			),
			17 => array(
			'var' => 'country'
			),
			18 => array(
			'var' => 'productionStandard'
			),
			19 => array(
			'var' => 'currency'
			),
			20 => array(
			'var' => 'brand'
			),
			21 => array(
			'var' => 'brandType'
			),
			22 => array(
			'var' => 'factory'
			),
			23 => array(
			'var' => 'factoryAddress'
			),
			24 => array(
			'var' => 'factoryRecord'
			),
			25 => array(
			'var' => 'goodsType'
			),
			26 => array(
			'var' => 'exportBenefit'
			),
			27 => array(
			'var' => 'commodityQuality'
			),
			28 => array(
			'var' => 'lengthUnit'
			),
			29 => array(
			'var' => 'widthUnit'
			),
			30 => array(
			'var' => 'heightUnit'
			),
			31 => array(
			'var' => 'volumeUnit'
			),
			32 => array(
			'var' => 'ieflag'
			),
			33 => array(
			'var' => 'batchNumber'
			),
			34 => array(
			'var' => 'remark'
			),
			35 => array(
			'var' => 'recordType'
			),
			36 => array(
			'var' => 'enterpriseName'
			),
			37 => array(
			'var' => 'enterpriseCusNo'
			),
			38 => array(
			'var' => 'enterpriseCiqNo'
			),
			39 => array(
			'var' => 'businessType'
			),
			40 => array(
			'var' => 'unitConvertQuantity'
			),
			41 => array(
			'var' => 'goodsSaleUrl'
			),
			42 => array(
			'var' => 'isOverFoodAdditives'
			),
			43 => array(
			'var' => 'isContainPoison'
			),
			44 => array(
			'var' => 'isGift'
			),
			45 => array(
			'var' => 'isSn'
			),
			46 => array(
			'var' => 'accordRule'
			),
			47 => array(
			'var' => 'frontPicture'
			),
			48 => array(
			'var' => 'backPicture'
			),
			49 => array(
			'var' => 'labelPicture'
			),
			50 => array(
			'var' => 'statementPicture'
			),
			51 => array(
			'var' => 'cosmeticHazardIdTable'
			),
			52 => array(
			'var' => 'clearanceMode'
			),
			53 => array(
			'var' => 'ciqUnit'
			),
			54 => array(
			'var' => 'supplier'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodNo'])){
				
				$this->goodNo = $vals['goodNo'];
			}
			
			
			if (isset($vals['goodSn'])){
				
				$this->goodSn = $vals['goodSn'];
			}
			
			
			if (isset($vals['goodRecordName'])){
				
				$this->goodRecordName = $vals['goodRecordName'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['goodEnglishName'])){
				
				$this->goodEnglishName = $vals['goodEnglishName'];
			}
			
			
			if (isset($vals['ingredients'])){
				
				$this->ingredients = $vals['ingredients'];
			}
			
			
			if (isset($vals['commodityFunction'])){
				
				$this->commodityFunction = $vals['commodityFunction'];
			}
			
			
			if (isset($vals['effect'])){
				
				$this->effect = $vals['effect'];
			}
			
			
			if (isset($vals['goodDetail'])){
				
				$this->goodDetail = $vals['goodDetail'];
			}
			
			
			if (isset($vals['standardType'])){
				
				$this->standardType = $vals['standardType'];
			}
			
			
			if (isset($vals['grossWeight'])){
				
				$this->grossWeight = $vals['grossWeight'];
			}
			
			
			if (isset($vals['netWeight'])){
				
				$this->netWeight = $vals['netWeight'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['recordPrice'])){
				
				$this->recordPrice = $vals['recordPrice'];
			}
			
			
			if (isset($vals['expiryDate'])){
				
				$this->expiryDate = $vals['expiryDate'];
			}
			
			
			if (isset($vals['ciqCountry'])){
				
				$this->ciqCountry = $vals['ciqCountry'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['productionStandard'])){
				
				$this->productionStandard = $vals['productionStandard'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['brandType'])){
				
				$this->brandType = $vals['brandType'];
			}
			
			
			if (isset($vals['factory'])){
				
				$this->factory = $vals['factory'];
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
			
			
			if (isset($vals['ieflag'])){
				
				$this->ieflag = $vals['ieflag'];
			}
			
			
			if (isset($vals['batchNumber'])){
				
				$this->batchNumber = $vals['batchNumber'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['recordType'])){
				
				$this->recordType = $vals['recordType'];
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
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['unitConvertQuantity'])){
				
				$this->unitConvertQuantity = $vals['unitConvertQuantity'];
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
			
			
			if (isset($vals['accordRule'])){
				
				$this->accordRule = $vals['accordRule'];
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
			
			
			if (isset($vals['statementPicture'])){
				
				$this->statementPicture = $vals['statementPicture'];
			}
			
			
			if (isset($vals['cosmeticHazardIdTable'])){
				
				$this->cosmeticHazardIdTable = $vals['cosmeticHazardIdTable'];
			}
			
			
			if (isset($vals['clearanceMode'])){
				
				$this->clearanceMode = $vals['clearanceMode'];
			}
			
			
			if (isset($vals['ciqUnit'])){
				
				$this->ciqUnit = $vals['ciqUnit'];
			}
			
			
			if (isset($vals['supplier'])){
				
				$this->supplier = $vals['supplier'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipGoodRecordModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodNo);
				
			}
			
			
			
			
			if ("goodSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodSn);
				
			}
			
			
			
			
			if ("goodRecordName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodRecordName);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("goodEnglishName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodEnglishName);
				
			}
			
			
			
			
			if ("ingredients" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ingredients);
				
			}
			
			
			
			
			if ("commodityFunction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityFunction);
				
			}
			
			
			
			
			if ("effect" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->effect);
				
			}
			
			
			
			
			if ("goodDetail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodDetail);
				
			}
			
			
			
			
			if ("standardType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->standardType);
				
			}
			
			
			
			
			if ("grossWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossWeight);
				
			}
			
			
			
			
			if ("netWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->netWeight);
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("recordPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->recordPrice);
				
			}
			
			
			
			
			if ("expiryDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expiryDate);
				
			}
			
			
			
			
			if ("ciqCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqCountry);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("productionStandard" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productionStandard);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("brandType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandType);
				
			}
			
			
			
			
			if ("factory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->factory);
				
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
			
			
			
			
			if ("ieflag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ieflag);
				
			}
			
			
			
			
			if ("batchNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNumber);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("recordType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordType);
				
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
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessType);
				
			}
			
			
			
			
			if ("unitConvertQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unitConvertQuantity); 
				
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
			
			
			
			
			if ("accordRule" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accordRule);
				
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
			
			
			
			
			if ("statementPicture" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statementPicture);
				
			}
			
			
			
			
			if ("cosmeticHazardIdTable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cosmeticHazardIdTable);
				
			}
			
			
			
			
			if ("clearanceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clearanceMode);
				
			}
			
			
			
			
			if ("ciqUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqUnit);
				
			}
			
			
			
			
			if ("supplier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplier);
				
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
		
		
		if($this->goodRecordName !== null) {
			
			$xfer += $output->writeFieldBegin('goodRecordName');
			$xfer += $output->writeString($this->goodRecordName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodEnglishName !== null) {
			
			$xfer += $output->writeFieldBegin('goodEnglishName');
			$xfer += $output->writeString($this->goodEnglishName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ingredients !== null) {
			
			$xfer += $output->writeFieldBegin('ingredients');
			$xfer += $output->writeString($this->ingredients);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityFunction !== null) {
			
			$xfer += $output->writeFieldBegin('commodityFunction');
			$xfer += $output->writeString($this->commodityFunction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effect !== null) {
			
			$xfer += $output->writeFieldBegin('effect');
			$xfer += $output->writeString($this->effect);
			
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
		
		
		if($this->expiryDate !== null) {
			
			$xfer += $output->writeFieldBegin('expiryDate');
			$xfer += $output->writeString($this->expiryDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ciqCountry !== null) {
			
			$xfer += $output->writeFieldBegin('ciqCountry');
			$xfer += $output->writeString($this->ciqCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productionStandard !== null) {
			
			$xfer += $output->writeFieldBegin('productionStandard');
			$xfer += $output->writeString($this->productionStandard);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandType !== null) {
			
			$xfer += $output->writeFieldBegin('brandType');
			$xfer += $output->writeString($this->brandType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->factory !== null) {
			
			$xfer += $output->writeFieldBegin('factory');
			$xfer += $output->writeString($this->factory);
			
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
		
		
		if($this->ieflag !== null) {
			
			$xfer += $output->writeFieldBegin('ieflag');
			$xfer += $output->writeString($this->ieflag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNumber !== null) {
			
			$xfer += $output->writeFieldBegin('batchNumber');
			$xfer += $output->writeString($this->batchNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordType !== null) {
			
			$xfer += $output->writeFieldBegin('recordType');
			$xfer += $output->writeString($this->recordType);
			
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
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeString($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unitConvertQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('unitConvertQuantity');
			$xfer += $output->writeI32($this->unitConvertQuantity);
			
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
		
		
		if($this->accordRule !== null) {
			
			$xfer += $output->writeFieldBegin('accordRule');
			$xfer += $output->writeString($this->accordRule);
			
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
		
		
		if($this->statementPicture !== null) {
			
			$xfer += $output->writeFieldBegin('statementPicture');
			$xfer += $output->writeString($this->statementPicture);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cosmeticHazardIdTable !== null) {
			
			$xfer += $output->writeFieldBegin('cosmeticHazardIdTable');
			$xfer += $output->writeString($this->cosmeticHazardIdTable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clearanceMode !== null) {
			
			$xfer += $output->writeFieldBegin('clearanceMode');
			$xfer += $output->writeString($this->clearanceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ciqUnit !== null) {
			
			$xfer += $output->writeFieldBegin('ciqUnit');
			$xfer += $output->writeString($this->ciqUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supplier !== null) {
			
			$xfer += $output->writeFieldBegin('supplier');
			$xfer += $output->writeString($this->supplier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>