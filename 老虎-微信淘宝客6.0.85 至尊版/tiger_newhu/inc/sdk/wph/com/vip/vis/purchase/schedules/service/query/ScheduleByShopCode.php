<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class ScheduleByShopCode {
	
	static $_TSPEC;
	public $vendorCode = null;
	public $vendorName = null;
	public $shopCode = null;
	public $shopName = null;
	public $sellingAction = null;
	public $schedulesList = null;
	public $sellTimeFrom = null;
	public $sellTimeTo = null;
	public $dataAreaId = null;
	public $dataAreaName = null;
	public $dataAreaDivide = null;
	public $dataAreaDivideName = null;
	public $createTime = null;
	public $sellingMode = null;
	public $sellingModeReadable = null;
	public $b2cModeId = null;
	public $cooperationType = null;
	public $grossProfitRate = null;
	public $grossProfitRateEnd = null;
	public $grossProfitRateFixedValue = null;
	public $brandList = null;
	public $createBy = null;
	public $contractCurrency = null;
	public $isHt = null;
	public $isStoreSale = null;
	public $specialOperationsFlag = null;
	public $purchaseChannel = null;
	public $grossProfitRateLadderList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorCode'
			),
			2 => array(
			'var' => 'vendorName'
			),
			3 => array(
			'var' => 'shopCode'
			),
			4 => array(
			'var' => 'shopName'
			),
			5 => array(
			'var' => 'sellingAction'
			),
			6 => array(
			'var' => 'schedulesList'
			),
			7 => array(
			'var' => 'sellTimeFrom'
			),
			8 => array(
			'var' => 'sellTimeTo'
			),
			9 => array(
			'var' => 'dataAreaId'
			),
			10 => array(
			'var' => 'dataAreaName'
			),
			11 => array(
			'var' => 'dataAreaDivide'
			),
			12 => array(
			'var' => 'dataAreaDivideName'
			),
			13 => array(
			'var' => 'createTime'
			),
			14 => array(
			'var' => 'sellingMode'
			),
			15 => array(
			'var' => 'sellingModeReadable'
			),
			16 => array(
			'var' => 'b2cModeId'
			),
			17 => array(
			'var' => 'cooperationType'
			),
			18 => array(
			'var' => 'grossProfitRate'
			),
			19 => array(
			'var' => 'grossProfitRateEnd'
			),
			20 => array(
			'var' => 'grossProfitRateFixedValue'
			),
			21 => array(
			'var' => 'brandList'
			),
			22 => array(
			'var' => 'createBy'
			),
			23 => array(
			'var' => 'contractCurrency'
			),
			24 => array(
			'var' => 'isHt'
			),
			25 => array(
			'var' => 'isStoreSale'
			),
			26 => array(
			'var' => 'specialOperationsFlag'
			),
			27 => array(
			'var' => 'purchaseChannel'
			),
			28 => array(
			'var' => 'grossProfitRateLadderList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['shopName'])){
				
				$this->shopName = $vals['shopName'];
			}
			
			
			if (isset($vals['sellingAction'])){
				
				$this->sellingAction = $vals['sellingAction'];
			}
			
			
			if (isset($vals['schedulesList'])){
				
				$this->schedulesList = $vals['schedulesList'];
			}
			
			
			if (isset($vals['sellTimeFrom'])){
				
				$this->sellTimeFrom = $vals['sellTimeFrom'];
			}
			
			
			if (isset($vals['sellTimeTo'])){
				
				$this->sellTimeTo = $vals['sellTimeTo'];
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
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['sellingModeReadable'])){
				
				$this->sellingModeReadable = $vals['sellingModeReadable'];
			}
			
			
			if (isset($vals['b2cModeId'])){
				
				$this->b2cModeId = $vals['b2cModeId'];
			}
			
			
			if (isset($vals['cooperationType'])){
				
				$this->cooperationType = $vals['cooperationType'];
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
			
			
			if (isset($vals['brandList'])){
				
				$this->brandList = $vals['brandList'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['contractCurrency'])){
				
				$this->contractCurrency = $vals['contractCurrency'];
			}
			
			
			if (isset($vals['isHt'])){
				
				$this->isHt = $vals['isHt'];
			}
			
			
			if (isset($vals['isStoreSale'])){
				
				$this->isStoreSale = $vals['isStoreSale'];
			}
			
			
			if (isset($vals['specialOperationsFlag'])){
				
				$this->specialOperationsFlag = $vals['specialOperationsFlag'];
			}
			
			
			if (isset($vals['purchaseChannel'])){
				
				$this->purchaseChannel = $vals['purchaseChannel'];
			}
			
			
			if (isset($vals['grossProfitRateLadderList'])){
				
				$this->grossProfitRateLadderList = $vals['grossProfitRateLadderList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ScheduleByShopCode';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shopCode); 
				
			}
			
			
			
			
			if ("shopName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopName);
				
			}
			
			
			
			
			if ("sellingAction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingAction);
				
			}
			
			
			
			
			if ("schedulesList" == $schemeField){
				
				$needSkip = false;
				
				$this->schedulesList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vis\purchase\schedules\service\query\ApplySchedules();
						$elem0->read($input);
						
						$this->schedulesList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sellTimeFrom" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sellTimeFrom);
				
			}
			
			
			
			
			if ("sellTimeTo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sellTimeTo);
				
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
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->sellingMode); 
				
			}
			
			
			
			
			if ("sellingModeReadable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingModeReadable);
				
			}
			
			
			
			
			if ("b2cModeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->b2cModeId); 
				
			}
			
			
			
			
			if ("cooperationType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationType); 
				
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
			
			
			
			
			if ("brandList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\purchase\schedules\service\query\ApplyBrand();
						$elem1->read($input);
						
						$this->brandList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("contractCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractCurrency);
				
			}
			
			
			
			
			if ("isHt" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isHt); 
				
			}
			
			
			
			
			if ("isStoreSale" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isStoreSale); 
				
			}
			
			
			
			
			if ("specialOperationsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specialOperationsFlag); 
				
			}
			
			
			
			
			if ("purchaseChannel" == $schemeField){
				
				$needSkip = false;
				
				$this->purchaseChannel = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->purchaseChannel[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("grossProfitRateLadderList" == $schemeField){
				
				$needSkip = false;
				
				$this->grossProfitRateLadderList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\vis\purchase\schedules\service\query\GrossProfitRateLadder();
						$elem3->read($input);
						
						$this->grossProfitRateLadderList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeI64($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopName !== null) {
			
			$xfer += $output->writeFieldBegin('shopName');
			$xfer += $output->writeString($this->shopName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingAction !== null) {
			
			$xfer += $output->writeFieldBegin('sellingAction');
			$xfer += $output->writeString($this->sellingAction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedulesList !== null) {
			
			$xfer += $output->writeFieldBegin('schedulesList');
			
			if (!is_array($this->schedulesList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->schedulesList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFrom !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFrom');
			$xfer += $output->writeI64($this->sellTimeFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeTo !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeTo');
			$xfer += $output->writeI64($this->sellTimeTo);
			
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
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeByte($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingModeReadable !== null) {
			
			$xfer += $output->writeFieldBegin('sellingModeReadable');
			$xfer += $output->writeString($this->sellingModeReadable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cModeId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cModeId');
			$xfer += $output->writeI32($this->b2cModeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationType !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationType');
			$xfer += $output->writeByte($this->cooperationType);
			
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
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('contractCurrency');
			$xfer += $output->writeString($this->contractCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHt !== null) {
			
			$xfer += $output->writeFieldBegin('isHt');
			$xfer += $output->writeByte($this->isHt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isStoreSale !== null) {
			
			$xfer += $output->writeFieldBegin('isStoreSale');
			$xfer += $output->writeByte($this->isStoreSale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOperationsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialOperationsFlag');
			$xfer += $output->writeByte($this->specialOperationsFlag);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>