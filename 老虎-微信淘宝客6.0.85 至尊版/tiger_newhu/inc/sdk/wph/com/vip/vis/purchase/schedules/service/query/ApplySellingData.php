<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class ApplySellingData {
	
	static $_TSPEC;
	public $brandId = null;
	public $shopCode = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $dataAreaId = null;
	public $dataAreaName = null;
	public $dataAreaDivide = null;
	public $dataAreaDivideName = null;
	public $areaId = null;
	public $departmentId = null;
	public $departmentIdName = null;
	public $createBy = null;
	public $createByUid = null;
	public $brandAdminName = null;
	public $brandAdminUserId = null;
	public $brandAdminUserJobnumber = null;
	public $brandAdminDepName = null;
	public $sellingAction = null;
	public $sellingMode = null;
	public $b2cModeId = null;
	public $sellArea = null;
	public $distributionSites = null;
	public $sellTimeFromStr = null;
	public $sellTimeToStr = null;
	public $isNormalization = null;
	public $accessPrice = null;
	public $isPos = null;
	public $exclusiveOrShare = null;
	public $specialOperationsFlag = null;
	public $brandList = null;
	public $labelList = null;
	public $flagMap = null;
	public $department = null;
	public $departmentName = null;
	public $createByName = null;
	public $salePlatform = null;
	public $defectAttr = null;
	public $createTimeStr = null;
	public $sellingModeReadable = null;
	public $isMarketPlace = null;
	public $storeId = null;
	public $isAreaSales = null;
	public $contractCurrency = null;
	public $arrivalType = null;
	public $paymentType = null;
	public $isStoreSale = null;
	public $poCopyIntervalDay = null;
	public $isHaopifa = null;
	public $defectAttrLevel = null;
	public $cooperationType = null;
	public $isHt = null;
	public $purchaseChannel = null;
	public $grossProfitRate = null;
	public $grossProfitRateEnd = null;
	public $grossProfitRateFixedValue = null;
	public $grossProfitRateLadderList = null;
	public $isPreSell = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandId'
			),
			2 => array(
			'var' => 'shopCode'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'dataAreaId'
			),
			6 => array(
			'var' => 'dataAreaName'
			),
			7 => array(
			'var' => 'dataAreaDivide'
			),
			8 => array(
			'var' => 'dataAreaDivideName'
			),
			9 => array(
			'var' => 'areaId'
			),
			11 => array(
			'var' => 'departmentId'
			),
			12 => array(
			'var' => 'departmentIdName'
			),
			13 => array(
			'var' => 'createBy'
			),
			14 => array(
			'var' => 'createByUid'
			),
			15 => array(
			'var' => 'brandAdminName'
			),
			16 => array(
			'var' => 'brandAdminUserId'
			),
			17 => array(
			'var' => 'brandAdminUserJobnumber'
			),
			18 => array(
			'var' => 'brandAdminDepName'
			),
			19 => array(
			'var' => 'sellingAction'
			),
			20 => array(
			'var' => 'sellingMode'
			),
			21 => array(
			'var' => 'b2cModeId'
			),
			22 => array(
			'var' => 'sellArea'
			),
			23 => array(
			'var' => 'distributionSites'
			),
			24 => array(
			'var' => 'sellTimeFromStr'
			),
			25 => array(
			'var' => 'sellTimeToStr'
			),
			26 => array(
			'var' => 'isNormalization'
			),
			27 => array(
			'var' => 'accessPrice'
			),
			28 => array(
			'var' => 'isPos'
			),
			29 => array(
			'var' => 'exclusiveOrShare'
			),
			30 => array(
			'var' => 'specialOperationsFlag'
			),
			31 => array(
			'var' => 'brandList'
			),
			32 => array(
			'var' => 'labelList'
			),
			33 => array(
			'var' => 'flagMap'
			),
			34 => array(
			'var' => 'department'
			),
			35 => array(
			'var' => 'departmentName'
			),
			36 => array(
			'var' => 'createByName'
			),
			37 => array(
			'var' => 'salePlatform'
			),
			38 => array(
			'var' => 'defectAttr'
			),
			39 => array(
			'var' => 'createTimeStr'
			),
			40 => array(
			'var' => 'sellingModeReadable'
			),
			41 => array(
			'var' => 'isMarketPlace'
			),
			42 => array(
			'var' => 'storeId'
			),
			43 => array(
			'var' => 'isAreaSales'
			),
			44 => array(
			'var' => 'contractCurrency'
			),
			45 => array(
			'var' => 'arrivalType'
			),
			46 => array(
			'var' => 'paymentType'
			),
			47 => array(
			'var' => 'isStoreSale'
			),
			48 => array(
			'var' => 'poCopyIntervalDay'
			),
			49 => array(
			'var' => 'isHaopifa'
			),
			50 => array(
			'var' => 'defectAttrLevel'
			),
			51 => array(
			'var' => 'cooperationType'
			),
			52 => array(
			'var' => 'isHt'
			),
			53 => array(
			'var' => 'purchaseChannel'
			),
			54 => array(
			'var' => 'grossProfitRate'
			),
			55 => array(
			'var' => 'grossProfitRateEnd'
			),
			56 => array(
			'var' => 'grossProfitRateFixedValue'
			),
			57 => array(
			'var' => 'grossProfitRateLadderList'
			),
			58 => array(
			'var' => 'isPreSell'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['dataAreaId'])){
				
				$this->dataAreaId = $vals['dataAreaId'];
			}
			
			
			if (isset($vals['dataAreaName'])){
				
				$this->dataAreaName = $vals['dataAreaName'];
			}
			
			
			if (isset($vals['dataAreaDivide'])){
				
				$this->dataAreaDivide = $vals['dataAreaDivide'];
			}
			
			
			if (isset($vals['dataAreaDivideName'])){
				
				$this->dataAreaDivideName = $vals['dataAreaDivideName'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['departmentId'])){
				
				$this->departmentId = $vals['departmentId'];
			}
			
			
			if (isset($vals['departmentIdName'])){
				
				$this->departmentIdName = $vals['departmentIdName'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['createByUid'])){
				
				$this->createByUid = $vals['createByUid'];
			}
			
			
			if (isset($vals['brandAdminName'])){
				
				$this->brandAdminName = $vals['brandAdminName'];
			}
			
			
			if (isset($vals['brandAdminUserId'])){
				
				$this->brandAdminUserId = $vals['brandAdminUserId'];
			}
			
			
			if (isset($vals['brandAdminUserJobnumber'])){
				
				$this->brandAdminUserJobnumber = $vals['brandAdminUserJobnumber'];
			}
			
			
			if (isset($vals['brandAdminDepName'])){
				
				$this->brandAdminDepName = $vals['brandAdminDepName'];
			}
			
			
			if (isset($vals['sellingAction'])){
				
				$this->sellingAction = $vals['sellingAction'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['b2cModeId'])){
				
				$this->b2cModeId = $vals['b2cModeId'];
			}
			
			
			if (isset($vals['sellArea'])){
				
				$this->sellArea = $vals['sellArea'];
			}
			
			
			if (isset($vals['distributionSites'])){
				
				$this->distributionSites = $vals['distributionSites'];
			}
			
			
			if (isset($vals['sellTimeFromStr'])){
				
				$this->sellTimeFromStr = $vals['sellTimeFromStr'];
			}
			
			
			if (isset($vals['sellTimeToStr'])){
				
				$this->sellTimeToStr = $vals['sellTimeToStr'];
			}
			
			
			if (isset($vals['isNormalization'])){
				
				$this->isNormalization = $vals['isNormalization'];
			}
			
			
			if (isset($vals['accessPrice'])){
				
				$this->accessPrice = $vals['accessPrice'];
			}
			
			
			if (isset($vals['isPos'])){
				
				$this->isPos = $vals['isPos'];
			}
			
			
			if (isset($vals['exclusiveOrShare'])){
				
				$this->exclusiveOrShare = $vals['exclusiveOrShare'];
			}
			
			
			if (isset($vals['specialOperationsFlag'])){
				
				$this->specialOperationsFlag = $vals['specialOperationsFlag'];
			}
			
			
			if (isset($vals['brandList'])){
				
				$this->brandList = $vals['brandList'];
			}
			
			
			if (isset($vals['labelList'])){
				
				$this->labelList = $vals['labelList'];
			}
			
			
			if (isset($vals['flagMap'])){
				
				$this->flagMap = $vals['flagMap'];
			}
			
			
			if (isset($vals['department'])){
				
				$this->department = $vals['department'];
			}
			
			
			if (isset($vals['departmentName'])){
				
				$this->departmentName = $vals['departmentName'];
			}
			
			
			if (isset($vals['createByName'])){
				
				$this->createByName = $vals['createByName'];
			}
			
			
			if (isset($vals['salePlatform'])){
				
				$this->salePlatform = $vals['salePlatform'];
			}
			
			
			if (isset($vals['defectAttr'])){
				
				$this->defectAttr = $vals['defectAttr'];
			}
			
			
			if (isset($vals['createTimeStr'])){
				
				$this->createTimeStr = $vals['createTimeStr'];
			}
			
			
			if (isset($vals['sellingModeReadable'])){
				
				$this->sellingModeReadable = $vals['sellingModeReadable'];
			}
			
			
			if (isset($vals['isMarketPlace'])){
				
				$this->isMarketPlace = $vals['isMarketPlace'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['isAreaSales'])){
				
				$this->isAreaSales = $vals['isAreaSales'];
			}
			
			
			if (isset($vals['contractCurrency'])){
				
				$this->contractCurrency = $vals['contractCurrency'];
			}
			
			
			if (isset($vals['arrivalType'])){
				
				$this->arrivalType = $vals['arrivalType'];
			}
			
			
			if (isset($vals['paymentType'])){
				
				$this->paymentType = $vals['paymentType'];
			}
			
			
			if (isset($vals['isStoreSale'])){
				
				$this->isStoreSale = $vals['isStoreSale'];
			}
			
			
			if (isset($vals['poCopyIntervalDay'])){
				
				$this->poCopyIntervalDay = $vals['poCopyIntervalDay'];
			}
			
			
			if (isset($vals['isHaopifa'])){
				
				$this->isHaopifa = $vals['isHaopifa'];
			}
			
			
			if (isset($vals['defectAttrLevel'])){
				
				$this->defectAttrLevel = $vals['defectAttrLevel'];
			}
			
			
			if (isset($vals['cooperationType'])){
				
				$this->cooperationType = $vals['cooperationType'];
			}
			
			
			if (isset($vals['isHt'])){
				
				$this->isHt = $vals['isHt'];
			}
			
			
			if (isset($vals['purchaseChannel'])){
				
				$this->purchaseChannel = $vals['purchaseChannel'];
			}
			
			
			if (isset($vals['grossProfitRate'])){
				
				$this->grossProfitRate = $vals['grossProfitRate'];
			}
			
			
			if (isset($vals['grossProfitRateEnd'])){
				
				$this->grossProfitRateEnd = $vals['grossProfitRateEnd'];
			}
			
			
			if (isset($vals['grossProfitRateFixedValue'])){
				
				$this->grossProfitRateFixedValue = $vals['grossProfitRateFixedValue'];
			}
			
			
			if (isset($vals['grossProfitRateLadderList'])){
				
				$this->grossProfitRateLadderList = $vals['grossProfitRateLadderList'];
			}
			
			
			if (isset($vals['isPreSell'])){
				
				$this->isPreSell = $vals['isPreSell'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApplySellingData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->brandId); 
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shopCode); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("dataAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataAreaId); 
				
			}
			
			
			
			
			if ("dataAreaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataAreaName);
				
			}
			
			
			
			
			if ("dataAreaDivide" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataAreaDivide); 
				
			}
			
			
			
			
			if ("dataAreaDivideName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataAreaDivideName);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->areaId); 
				
			}
			
			
			
			
			if ("departmentId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->departmentId); 
				
			}
			
			
			
			
			if ("departmentIdName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->departmentIdName);
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("createByUid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->createByUid); 
				
			}
			
			
			
			
			if ("brandAdminName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminName);
				
			}
			
			
			
			
			if ("brandAdminUserId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandAdminUserId); 
				
			}
			
			
			
			
			if ("brandAdminUserJobnumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminUserJobnumber);
				
			}
			
			
			
			
			if ("brandAdminDepName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminDepName);
				
			}
			
			
			
			
			if ("sellingAction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingAction);
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellingMode); 
				
			}
			
			
			
			
			if ("b2cModeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2cModeId); 
				
			}
			
			
			
			
			if ("sellArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellArea);
				
			}
			
			
			
			
			if ("distributionSites" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->distributionSites);
				
			}
			
			
			
			
			if ("sellTimeFromStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeFromStr);
				
			}
			
			
			
			
			if ("sellTimeToStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeToStr);
				
			}
			
			
			
			
			if ("isNormalization" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isNormalization); 
				
			}
			
			
			
			
			if ("accessPrice" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->accessPrice); 
				
			}
			
			
			
			
			if ("isPos" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPos); 
				
			}
			
			
			
			
			if ("exclusiveOrShare" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->exclusiveOrShare); 
				
			}
			
			
			
			
			if ("specialOperationsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specialOperationsFlag); 
				
			}
			
			
			
			
			if ("brandList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\purchase\schedules\service\query\ApplyBrand();
						$elem0->read($input);
						
						$this->brandList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("labelList" == $schemeField){
				
				$needSkip = false;
				
				$this->labelList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->labelList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("flagMap" == $schemeField){
				
				$needSkip = false;
				
				$this->flagMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key2 = '';
						$input->readString($key2);
						
						$val2 = '';
						$input->readString($val2);
						
						$this->flagMap[$key2] = $val2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("department" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->department); 
				
			}
			
			
			
			
			if ("departmentName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->departmentName);
				
			}
			
			
			
			
			if ("createByName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createByName);
				
			}
			
			
			
			
			if ("salePlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salePlatform);
				
			}
			
			
			
			
			if ("defectAttr" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->defectAttr); 
				
			}
			
			
			
			
			if ("createTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTimeStr);
				
			}
			
			
			
			
			if ("sellingModeReadable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingModeReadable);
				
			}
			
			
			
			
			if ("isMarketPlace" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isMarketPlace); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("isAreaSales" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isAreaSales); 
				
			}
			
			
			
			
			if ("contractCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractCurrency);
				
			}
			
			
			
			
			if ("arrivalType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->arrivalType); 
				
			}
			
			
			
			
			if ("paymentType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->paymentType); 
				
			}
			
			
			
			
			if ("isStoreSale" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isStoreSale); 
				
			}
			
			
			
			
			if ("poCopyIntervalDay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->poCopyIntervalDay); 
				
			}
			
			
			
			
			if ("isHaopifa" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isHaopifa); 
				
			}
			
			
			
			
			if ("defectAttrLevel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->defectAttrLevel); 
				
			}
			
			
			
			
			if ("cooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationType); 
				
			}
			
			
			
			
			if ("isHt" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isHt); 
				
			}
			
			
			
			
			if ("purchaseChannel" == $schemeField){
				
				$needSkip = false;
				
				$this->purchaseChannel = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->purchaseChannel[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("grossProfitRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossProfitRate);
				
			}
			
			
			
			
			if ("grossProfitRateEnd" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossProfitRateEnd);
				
			}
			
			
			
			
			if ("grossProfitRateFixedValue" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossProfitRateFixedValue);
				
			}
			
			
			
			
			if ("grossProfitRateLadderList" == $schemeField){
				
				$needSkip = false;
				
				$this->grossProfitRateLadderList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\vis\purchase\schedules\service\query\GrossProfitRateLadder();
						$elem4->read($input);
						
						$this->grossProfitRateLadderList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isPreSell" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPreSell); 
				
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
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI64($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeI64($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeI32($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaId');
			$xfer += $output->writeI32($this->dataAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaName !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaName');
			$xfer += $output->writeString($this->dataAreaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaDivide !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaDivide');
			$xfer += $output->writeI32($this->dataAreaDivide);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaDivideName !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaDivideName');
			$xfer += $output->writeString($this->dataAreaDivideName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeI32($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departmentId !== null) {
			
			$xfer += $output->writeFieldBegin('departmentId');
			$xfer += $output->writeI32($this->departmentId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departmentIdName !== null) {
			
			$xfer += $output->writeFieldBegin('departmentIdName');
			$xfer += $output->writeString($this->departmentIdName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createByUid !== null) {
			
			$xfer += $output->writeFieldBegin('createByUid');
			$xfer += $output->writeI32($this->createByUid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminName !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminName');
			$xfer += $output->writeString($this->brandAdminName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserId !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserId');
			$xfer += $output->writeI32($this->brandAdminUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserJobnumber !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserJobnumber');
			$xfer += $output->writeString($this->brandAdminUserJobnumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminDepName !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminDepName');
			$xfer += $output->writeString($this->brandAdminDepName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingAction !== null) {
			
			$xfer += $output->writeFieldBegin('sellingAction');
			$xfer += $output->writeString($this->sellingAction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeByte($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cModeId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cModeId');
			$xfer += $output->writeI32($this->b2cModeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellArea !== null) {
			
			$xfer += $output->writeFieldBegin('sellArea');
			$xfer += $output->writeString($this->sellArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributionSites !== null) {
			
			$xfer += $output->writeFieldBegin('distributionSites');
			$xfer += $output->writeString($this->distributionSites);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFromStr !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFromStr');
			$xfer += $output->writeString($this->sellTimeFromStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeToStr !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeToStr');
			$xfer += $output->writeString($this->sellTimeToStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isNormalization !== null) {
			
			$xfer += $output->writeFieldBegin('isNormalization');
			$xfer += $output->writeI32($this->isNormalization);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessPrice !== null) {
			
			$xfer += $output->writeFieldBegin('accessPrice');
			$xfer += $output->writeByte($this->accessPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPos !== null) {
			
			$xfer += $output->writeFieldBegin('isPos');
			$xfer += $output->writeByte($this->isPos);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exclusiveOrShare !== null) {
			
			$xfer += $output->writeFieldBegin('exclusiveOrShare');
			$xfer += $output->writeByte($this->exclusiveOrShare);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOperationsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialOperationsFlag');
			$xfer += $output->writeByte($this->specialOperationsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandList !== null) {
			
			$xfer += $output->writeFieldBegin('brandList');
			
			if (!is_array($this->brandList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->labelList !== null) {
			
			$xfer += $output->writeFieldBegin('labelList');
			
			if (!is_array($this->labelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->labelList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flagMap !== null) {
			
			$xfer += $output->writeFieldBegin('flagMap');
			
			if (!is_array($this->flagMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->flagMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->department !== null) {
			
			$xfer += $output->writeFieldBegin('department');
			$xfer += $output->writeI32($this->department);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departmentName !== null) {
			
			$xfer += $output->writeFieldBegin('departmentName');
			$xfer += $output->writeString($this->departmentName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createByName !== null) {
			
			$xfer += $output->writeFieldBegin('createByName');
			$xfer += $output->writeString($this->createByName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salePlatform !== null) {
			
			$xfer += $output->writeFieldBegin('salePlatform');
			$xfer += $output->writeString($this->salePlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defectAttr !== null) {
			
			$xfer += $output->writeFieldBegin('defectAttr');
			$xfer += $output->writeByte($this->defectAttr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeStr');
			$xfer += $output->writeString($this->createTimeStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingModeReadable !== null) {
			
			$xfer += $output->writeFieldBegin('sellingModeReadable');
			$xfer += $output->writeString($this->sellingModeReadable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isMarketPlace !== null) {
			
			$xfer += $output->writeFieldBegin('isMarketPlace');
			$xfer += $output->writeByte($this->isMarketPlace);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAreaSales !== null) {
			
			$xfer += $output->writeFieldBegin('isAreaSales');
			$xfer += $output->writeByte($this->isAreaSales);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('contractCurrency');
			$xfer += $output->writeString($this->contractCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arrivalType !== null) {
			
			$xfer += $output->writeFieldBegin('arrivalType');
			$xfer += $output->writeByte($this->arrivalType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentType !== null) {
			
			$xfer += $output->writeFieldBegin('paymentType');
			$xfer += $output->writeByte($this->paymentType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isStoreSale !== null) {
			
			$xfer += $output->writeFieldBegin('isStoreSale');
			$xfer += $output->writeByte($this->isStoreSale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poCopyIntervalDay !== null) {
			
			$xfer += $output->writeFieldBegin('poCopyIntervalDay');
			$xfer += $output->writeI32($this->poCopyIntervalDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHaopifa !== null) {
			
			$xfer += $output->writeFieldBegin('isHaopifa');
			$xfer += $output->writeI32($this->isHaopifa);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defectAttrLevel !== null) {
			
			$xfer += $output->writeFieldBegin('defectAttrLevel');
			$xfer += $output->writeI32($this->defectAttrLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationType');
			$xfer += $output->writeByte($this->cooperationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHt !== null) {
			
			$xfer += $output->writeFieldBegin('isHt');
			$xfer += $output->writeByte($this->isHt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseChannel !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseChannel');
			
			if (!is_array($this->purchaseChannel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->purchaseChannel as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossProfitRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossProfitRate');
			$xfer += $output->writeDouble($this->grossProfitRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossProfitRateEnd !== null) {
			
			$xfer += $output->writeFieldBegin('grossProfitRateEnd');
			$xfer += $output->writeDouble($this->grossProfitRateEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossProfitRateFixedValue !== null) {
			
			$xfer += $output->writeFieldBegin('grossProfitRateFixedValue');
			$xfer += $output->writeDouble($this->grossProfitRateFixedValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossProfitRateLadderList !== null) {
			
			$xfer += $output->writeFieldBegin('grossProfitRateLadderList');
			
			if (!is_array($this->grossProfitRateLadderList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->grossProfitRateLadderList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPreSell !== null) {
			
			$xfer += $output->writeFieldBegin('isPreSell');
			$xfer += $output->writeI32($this->isPreSell);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>