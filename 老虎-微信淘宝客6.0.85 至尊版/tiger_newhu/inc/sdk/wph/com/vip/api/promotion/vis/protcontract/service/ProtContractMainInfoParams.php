<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractMainInfoParams {
	
	static $_TSPEC;
	public $id = null;
	public $protNo = null;
	public $companyId = null;
	public $contractNo = null;
	public $contractName = null;
	public $contractTime = null;
	public $signMode = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $specialName = null;
	public $rangeType = null;
	public $onlineStarttime = null;
	public $onlineEndtime = null;
	public $createBy = null;
	public $departmentId = null;
	public $acceptOperatorId = null;
	public $acceptOperator = null;
	public $brandName = null;
	public $brandSn = null;
	public $brandId = null;
	public $businessType = null;
	public $contractDimension = null;
	public $companyName = null;
	public $salesWarehouseList = null;
	public $contractMode = null;
	public $oxoContractNo = null;
	public $oxoContractName = null;
	public $oxoContractTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'protNo'
			),
			3 => array(
			'var' => 'companyId'
			),
			4 => array(
			'var' => 'contractNo'
			),
			5 => array(
			'var' => 'contractName'
			),
			6 => array(
			'var' => 'contractTime'
			),
			7 => array(
			'var' => 'signMode'
			),
			8 => array(
			'var' => 'vendorCode'
			),
			9 => array(
			'var' => 'vendorName'
			),
			10 => array(
			'var' => 'specialName'
			),
			11 => array(
			'var' => 'rangeType'
			),
			12 => array(
			'var' => 'onlineStarttime'
			),
			13 => array(
			'var' => 'onlineEndtime'
			),
			14 => array(
			'var' => 'createBy'
			),
			15 => array(
			'var' => 'departmentId'
			),
			16 => array(
			'var' => 'acceptOperatorId'
			),
			17 => array(
			'var' => 'acceptOperator'
			),
			18 => array(
			'var' => 'brandName'
			),
			19 => array(
			'var' => 'brandSn'
			),
			20 => array(
			'var' => 'brandId'
			),
			21 => array(
			'var' => 'businessType'
			),
			22 => array(
			'var' => 'contractDimension'
			),
			23 => array(
			'var' => 'companyName'
			),
			24 => array(
			'var' => 'salesWarehouseList'
			),
			25 => array(
			'var' => 'contractMode'
			),
			26 => array(
			'var' => 'oxoContractNo'
			),
			27 => array(
			'var' => 'oxoContractName'
			),
			28 => array(
			'var' => 'oxoContractTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['protNo'])){
				
				$this->protNo = $vals['protNo'];
			}
			
			
			if (isset($vals['companyId'])){
				
				$this->companyId = $vals['companyId'];
			}
			
			
			if (isset($vals['contractNo'])){
				
				$this->contractNo = $vals['contractNo'];
			}
			
			
			if (isset($vals['contractName'])){
				
				$this->contractName = $vals['contractName'];
			}
			
			
			if (isset($vals['contractTime'])){
				
				$this->contractTime = $vals['contractTime'];
			}
			
			
			if (isset($vals['signMode'])){
				
				$this->signMode = $vals['signMode'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['specialName'])){
				
				$this->specialName = $vals['specialName'];
			}
			
			
			if (isset($vals['rangeType'])){
				
				$this->rangeType = $vals['rangeType'];
			}
			
			
			if (isset($vals['onlineStarttime'])){
				
				$this->onlineStarttime = $vals['onlineStarttime'];
			}
			
			
			if (isset($vals['onlineEndtime'])){
				
				$this->onlineEndtime = $vals['onlineEndtime'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['departmentId'])){
				
				$this->departmentId = $vals['departmentId'];
			}
			
			
			if (isset($vals['acceptOperatorId'])){
				
				$this->acceptOperatorId = $vals['acceptOperatorId'];
			}
			
			
			if (isset($vals['acceptOperator'])){
				
				$this->acceptOperator = $vals['acceptOperator'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['contractDimension'])){
				
				$this->contractDimension = $vals['contractDimension'];
			}
			
			
			if (isset($vals['companyName'])){
				
				$this->companyName = $vals['companyName'];
			}
			
			
			if (isset($vals['salesWarehouseList'])){
				
				$this->salesWarehouseList = $vals['salesWarehouseList'];
			}
			
			
			if (isset($vals['contractMode'])){
				
				$this->contractMode = $vals['contractMode'];
			}
			
			
			if (isset($vals['oxoContractNo'])){
				
				$this->oxoContractNo = $vals['oxoContractNo'];
			}
			
			
			if (isset($vals['oxoContractName'])){
				
				$this->oxoContractName = $vals['oxoContractName'];
			}
			
			
			if (isset($vals['oxoContractTime'])){
				
				$this->oxoContractTime = $vals['oxoContractTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractMainInfoParams';
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
			
			
			
			
			if ("protNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->protNo);
				
			}
			
			
			
			
			if ("companyId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->companyId); 
				
			}
			
			
			
			
			if ("contractNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractNo);
				
			}
			
			
			
			
			if ("contractName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractName);
				
			}
			
			
			
			
			if ("contractTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->contractTime); 
				
			}
			
			
			
			
			if ("signMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->signMode); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("specialName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialName);
				
			}
			
			
			
			
			if ("rangeType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->rangeType); 
				
			}
			
			
			
			
			if ("onlineStarttime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineStarttime); 
				
			}
			
			
			
			
			if ("onlineEndtime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineEndtime); 
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("departmentId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->departmentId); 
				
			}
			
			
			
			
			if ("acceptOperatorId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->acceptOperatorId);
				
			}
			
			
			
			
			if ("acceptOperator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->acceptOperator);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("contractDimension" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->contractDimension); 
				
			}
			
			
			
			
			if ("companyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyName);
				
			}
			
			
			
			
			if ("salesWarehouseList" == $schemeField){
				
				$needSkip = false;
				
				$this->salesWarehouseList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\SalesWarehouse();
						$elem0->read($input);
						
						$this->salesWarehouseList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("contractMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->contractMode); 
				
			}
			
			
			
			
			if ("oxoContractNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oxoContractNo);
				
			}
			
			
			
			
			if ("oxoContractName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oxoContractName);
				
			}
			
			
			
			
			if ("oxoContractTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->oxoContractTime); 
				
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
		
		
		if($this->protNo !== null) {
			
			$xfer += $output->writeFieldBegin('protNo');
			$xfer += $output->writeString($this->protNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyId !== null) {
			
			$xfer += $output->writeFieldBegin('companyId');
			$xfer += $output->writeI32($this->companyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractNo !== null) {
			
			$xfer += $output->writeFieldBegin('contractNo');
			$xfer += $output->writeString($this->contractNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractName !== null) {
			
			$xfer += $output->writeFieldBegin('contractName');
			$xfer += $output->writeString($this->contractName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractTime !== null) {
			
			$xfer += $output->writeFieldBegin('contractTime');
			$xfer += $output->writeI64($this->contractTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signMode !== null) {
			
			$xfer += $output->writeFieldBegin('signMode');
			$xfer += $output->writeByte($this->signMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialName !== null) {
			
			$xfer += $output->writeFieldBegin('specialName');
			$xfer += $output->writeString($this->specialName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rangeType !== null) {
			
			$xfer += $output->writeFieldBegin('rangeType');
			$xfer += $output->writeByte($this->rangeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineStarttime !== null) {
			
			$xfer += $output->writeFieldBegin('onlineStarttime');
			$xfer += $output->writeI64($this->onlineStarttime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineEndtime !== null) {
			
			$xfer += $output->writeFieldBegin('onlineEndtime');
			$xfer += $output->writeI64($this->onlineEndtime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departmentId !== null) {
			
			$xfer += $output->writeFieldBegin('departmentId');
			$xfer += $output->writeI32($this->departmentId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptOperatorId !== null) {
			
			$xfer += $output->writeFieldBegin('acceptOperatorId');
			$xfer += $output->writeString($this->acceptOperatorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptOperator !== null) {
			
			$xfer += $output->writeFieldBegin('acceptOperator');
			$xfer += $output->writeString($this->acceptOperator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('businessType');
		$xfer += $output->writeByte($this->businessType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contractDimension');
		$xfer += $output->writeByte($this->contractDimension);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->companyName !== null) {
			
			$xfer += $output->writeFieldBegin('companyName');
			$xfer += $output->writeString($this->companyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesWarehouseList !== null) {
			
			$xfer += $output->writeFieldBegin('salesWarehouseList');
			
			if (!is_array($this->salesWarehouseList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->salesWarehouseList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractMode !== null) {
			
			$xfer += $output->writeFieldBegin('contractMode');
			$xfer += $output->writeByte($this->contractMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oxoContractNo !== null) {
			
			$xfer += $output->writeFieldBegin('oxoContractNo');
			$xfer += $output->writeString($this->oxoContractNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oxoContractName !== null) {
			
			$xfer += $output->writeFieldBegin('oxoContractName');
			$xfer += $output->writeString($this->oxoContractName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oxoContractTime !== null) {
			
			$xfer += $output->writeFieldBegin('oxoContractTime');
			$xfer += $output->writeI64($this->oxoContractTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>