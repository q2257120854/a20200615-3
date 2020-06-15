<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class QueryApplySellingParam {
	
	static $_TSPEC;
	public $brandIdList = null;
	public $shopCode = null;
	public $sellingAction = null;
	public $status = null;
	public $vendorCode = null;
	public $dataAreaDivideList = null;
	public $vendorName = null;
	public $sellTimeFrom = null;
	public $sellTimeTo = null;
	public $isHt = null;
	public $sellArea = null;
	public $specialOperationsFlag = null;
	public $isNormalization = null;
	public $system = null;
	public $isNeedQueryBrand = null;
	public $isNeedQueryLabel = null;
	public $page = null;
	public $pageSize = null;
	public $isNeedDepartmentIdName = null;
	public $shopCodeList = null;
	public $sellingModeArr = null;
	public $isNowSell = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brandIdList'
			),
			2 => array(
			'var' => 'shopCode'
			),
			3 => array(
			'var' => 'sellingAction'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'vendorCode'
			),
			6 => array(
			'var' => 'dataAreaDivideList'
			),
			7 => array(
			'var' => 'vendorName'
			),
			8 => array(
			'var' => 'sellTimeFrom'
			),
			9 => array(
			'var' => 'sellTimeTo'
			),
			10 => array(
			'var' => 'isHt'
			),
			11 => array(
			'var' => 'sellArea'
			),
			12 => array(
			'var' => 'specialOperationsFlag'
			),
			13 => array(
			'var' => 'isNormalization'
			),
			14 => array(
			'var' => 'system'
			),
			15 => array(
			'var' => 'isNeedQueryBrand'
			),
			16 => array(
			'var' => 'isNeedQueryLabel'
			),
			17 => array(
			'var' => 'page'
			),
			18 => array(
			'var' => 'pageSize'
			),
			19 => array(
			'var' => 'isNeedDepartmentIdName'
			),
			20 => array(
			'var' => 'shopCodeList'
			),
			21 => array(
			'var' => 'sellingModeArr'
			),
			23 => array(
			'var' => 'isNowSell'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brandIdList'])){
				
				$this->brandIdList = $vals['brandIdList'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['sellingAction'])){
				
				$this->sellingAction = $vals['sellingAction'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['dataAreaDivideList'])){
				
				$this->dataAreaDivideList = $vals['dataAreaDivideList'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['sellTimeFrom'])){
				
				$this->sellTimeFrom = $vals['sellTimeFrom'];
			}
			
			
			if (isset($vals['sellTimeTo'])){
				
				$this->sellTimeTo = $vals['sellTimeTo'];
			}
			
			
			if (isset($vals['isHt'])){
				
				$this->isHt = $vals['isHt'];
			}
			
			
			if (isset($vals['sellArea'])){
				
				$this->sellArea = $vals['sellArea'];
			}
			
			
			if (isset($vals['specialOperationsFlag'])){
				
				$this->specialOperationsFlag = $vals['specialOperationsFlag'];
			}
			
			
			if (isset($vals['isNormalization'])){
				
				$this->isNormalization = $vals['isNormalization'];
			}
			
			
			if (isset($vals['system'])){
				
				$this->system = $vals['system'];
			}
			
			
			if (isset($vals['isNeedQueryBrand'])){
				
				$this->isNeedQueryBrand = $vals['isNeedQueryBrand'];
			}
			
			
			if (isset($vals['isNeedQueryLabel'])){
				
				$this->isNeedQueryLabel = $vals['isNeedQueryLabel'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['isNeedDepartmentIdName'])){
				
				$this->isNeedDepartmentIdName = $vals['isNeedDepartmentIdName'];
			}
			
			
			if (isset($vals['shopCodeList'])){
				
				$this->shopCodeList = $vals['shopCodeList'];
			}
			
			
			if (isset($vals['sellingModeArr'])){
				
				$this->sellingModeArr = $vals['sellingModeArr'];
			}
			
			
			if (isset($vals['isNowSell'])){
				
				$this->isNowSell = $vals['isNowSell'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryApplySellingParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brandIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandIdList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->brandIdList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shopCode); 
				
			}
			
			
			
			
			if ("sellingAction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingAction);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorCode); 
				
			}
			
			
			
			
			if ("dataAreaDivideList" == $schemeField){
				
				$needSkip = false;
				
				$this->dataAreaDivideList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->dataAreaDivideList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("sellTimeFrom" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeFrom);
				
			}
			
			
			
			
			if ("sellTimeTo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeTo);
				
			}
			
			
			
			
			if ("isHt" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isHt); 
				
			}
			
			
			
			
			if ("sellArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellArea);
				
			}
			
			
			
			
			if ("specialOperationsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specialOperationsFlag); 
				
			}
			
			
			
			
			if ("isNormalization" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isNormalization); 
				
			}
			
			
			
			
			if ("system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->system);
				
			}
			
			
			
			
			if ("isNeedQueryBrand" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNeedQueryBrand);
				
			}
			
			
			
			
			if ("isNeedQueryLabel" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNeedQueryLabel);
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("isNeedDepartmentIdName" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNeedDepartmentIdName);
				
			}
			
			
			
			
			if ("shopCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->shopCodeList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI64($elem2); 
						
						$this->shopCodeList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sellingModeArr" == $schemeField){
				
				$needSkip = false;
				
				$this->sellingModeArr = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readByte($elem3); 
						
						$this->sellingModeArr[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isNowSell" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNowSell);
				
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
		
		if($this->brandIdList !== null) {
			
			$xfer += $output->writeFieldBegin('brandIdList');
			
			if (!is_array($this->brandIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandIdList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeI64($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingAction !== null) {
			
			$xfer += $output->writeFieldBegin('sellingAction');
			$xfer += $output->writeString($this->sellingAction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeI32($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaDivideList !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaDivideList');
			
			if (!is_array($this->dataAreaDivideList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->dataAreaDivideList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFrom !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFrom');
			$xfer += $output->writeString($this->sellTimeFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeTo !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeTo');
			$xfer += $output->writeString($this->sellTimeTo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHt !== null) {
			
			$xfer += $output->writeFieldBegin('isHt');
			$xfer += $output->writeByte($this->isHt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellArea !== null) {
			
			$xfer += $output->writeFieldBegin('sellArea');
			$xfer += $output->writeString($this->sellArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialOperationsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('specialOperationsFlag');
			$xfer += $output->writeByte($this->specialOperationsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isNormalization !== null) {
			
			$xfer += $output->writeFieldBegin('isNormalization');
			$xfer += $output->writeI32($this->isNormalization);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->system !== null) {
			
			$xfer += $output->writeFieldBegin('system');
			$xfer += $output->writeString($this->system);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isNeedQueryBrand');
		$xfer += $output->writeBool($this->isNeedQueryBrand);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isNeedQueryLabel');
		$xfer += $output->writeBool($this->isNeedQueryLabel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isNeedDepartmentIdName');
		$xfer += $output->writeBool($this->isNeedDepartmentIdName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->shopCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('shopCodeList');
			
			if (!is_array($this->shopCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shopCodeList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingModeArr !== null) {
			
			$xfer += $output->writeFieldBegin('sellingModeArr');
			
			if (!is_array($this->sellingModeArr)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sellingModeArr as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isNowSell');
		$xfer += $output->writeBool($this->isNowSell);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>