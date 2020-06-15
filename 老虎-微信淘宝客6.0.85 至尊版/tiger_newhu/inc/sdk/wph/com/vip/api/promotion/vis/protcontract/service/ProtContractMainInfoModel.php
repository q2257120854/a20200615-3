<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractMainInfoModel {
	
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
	public $activityAlltype = null;
	public $onlineStarttime = null;
	public $onlineEndtime = null;
	public $basicStatus = null;
	public $assistantStatus = null;
	public $managerStatus = null;
	public $directorStatus = null;
	public $stage = null;
	public $updateTime = null;
	public $createTime = null;
	public $createBy = null;
	public $departmentId = null;
	public $acceptOperatorId = null;
	public $acceptOperator = null;
	public $specialStatus = null;
	public $finalStatus = null;
	public $brandName = null;
	public $brandSn = null;
	public $status = null;
	public $brandId = null;
	public $departmentName = null;
	public $scaleContent = null;
	public $discountContent = null;
	public $bindingType = null;
	public $operatorType = null;
	public $businessType = null;
	public $contractDimension = null;
	public $onlineStarttimeFmt = null;
	public $onlineEndtimeFmt = null;
	public $createTimeFmt = null;
	public $contractDimensionName = null;
	public $signModeName = null;
	public $statusName = null;
	public $companyName = null;
	public $discountList = null;
	public $processCompletedTimeStr = null;
	public $salesWarehouseList = null;
	public $overseasSalesType = null;
	public $salesNo = null;
	public $channel = null;
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
			'var' => 'activityAlltype'
			),
			13 => array(
			'var' => 'onlineStarttime'
			),
			14 => array(
			'var' => 'onlineEndtime'
			),
			15 => array(
			'var' => 'basicStatus'
			),
			16 => array(
			'var' => 'assistantStatus'
			),
			17 => array(
			'var' => 'managerStatus'
			),
			18 => array(
			'var' => 'directorStatus'
			),
			19 => array(
			'var' => 'stage'
			),
			20 => array(
			'var' => 'updateTime'
			),
			21 => array(
			'var' => 'createTime'
			),
			22 => array(
			'var' => 'createBy'
			),
			23 => array(
			'var' => 'departmentId'
			),
			24 => array(
			'var' => 'acceptOperatorId'
			),
			25 => array(
			'var' => 'acceptOperator'
			),
			26 => array(
			'var' => 'specialStatus'
			),
			27 => array(
			'var' => 'finalStatus'
			),
			28 => array(
			'var' => 'brandName'
			),
			29 => array(
			'var' => 'brandSn'
			),
			30 => array(
			'var' => 'status'
			),
			31 => array(
			'var' => 'brandId'
			),
			32 => array(
			'var' => 'departmentName'
			),
			33 => array(
			'var' => 'scaleContent'
			),
			34 => array(
			'var' => 'discountContent'
			),
			35 => array(
			'var' => 'bindingType'
			),
			36 => array(
			'var' => 'operatorType'
			),
			37 => array(
			'var' => 'businessType'
			),
			38 => array(
			'var' => 'contractDimension'
			),
			39 => array(
			'var' => 'onlineStarttimeFmt'
			),
			40 => array(
			'var' => 'onlineEndtimeFmt'
			),
			41 => array(
			'var' => 'createTimeFmt'
			),
			42 => array(
			'var' => 'contractDimensionName'
			),
			43 => array(
			'var' => 'signModeName'
			),
			44 => array(
			'var' => 'statusName'
			),
			45 => array(
			'var' => 'companyName'
			),
			46 => array(
			'var' => 'discountList'
			),
			47 => array(
			'var' => 'processCompletedTimeStr'
			),
			48 => array(
			'var' => 'salesWarehouseList'
			),
			49 => array(
			'var' => 'overseasSalesType'
			),
			50 => array(
			'var' => 'salesNo'
			),
			51 => array(
			'var' => 'channel'
			),
			52 => array(
			'var' => 'contractMode'
			),
			53 => array(
			'var' => 'oxoContractNo'
			),
			54 => array(
			'var' => 'oxoContractName'
			),
			55 => array(
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
			
			
			if (isset($vals['activityAlltype'])){
				
				$this->activityAlltype = $vals['activityAlltype'];
			}
			
			
			if (isset($vals['onlineStarttime'])){
				
				$this->onlineStarttime = $vals['onlineStarttime'];
			}
			
			
			if (isset($vals['onlineEndtime'])){
				
				$this->onlineEndtime = $vals['onlineEndtime'];
			}
			
			
			if (isset($vals['basicStatus'])){
				
				$this->basicStatus = $vals['basicStatus'];
			}
			
			
			if (isset($vals['assistantStatus'])){
				
				$this->assistantStatus = $vals['assistantStatus'];
			}
			
			
			if (isset($vals['managerStatus'])){
				
				$this->managerStatus = $vals['managerStatus'];
			}
			
			
			if (isset($vals['directorStatus'])){
				
				$this->directorStatus = $vals['directorStatus'];
			}
			
			
			if (isset($vals['stage'])){
				
				$this->stage = $vals['stage'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
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
			
			
			if (isset($vals['specialStatus'])){
				
				$this->specialStatus = $vals['specialStatus'];
			}
			
			
			if (isset($vals['finalStatus'])){
				
				$this->finalStatus = $vals['finalStatus'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['departmentName'])){
				
				$this->departmentName = $vals['departmentName'];
			}
			
			
			if (isset($vals['scaleContent'])){
				
				$this->scaleContent = $vals['scaleContent'];
			}
			
			
			if (isset($vals['discountContent'])){
				
				$this->discountContent = $vals['discountContent'];
			}
			
			
			if (isset($vals['bindingType'])){
				
				$this->bindingType = $vals['bindingType'];
			}
			
			
			if (isset($vals['operatorType'])){
				
				$this->operatorType = $vals['operatorType'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['contractDimension'])){
				
				$this->contractDimension = $vals['contractDimension'];
			}
			
			
			if (isset($vals['onlineStarttimeFmt'])){
				
				$this->onlineStarttimeFmt = $vals['onlineStarttimeFmt'];
			}
			
			
			if (isset($vals['onlineEndtimeFmt'])){
				
				$this->onlineEndtimeFmt = $vals['onlineEndtimeFmt'];
			}
			
			
			if (isset($vals['createTimeFmt'])){
				
				$this->createTimeFmt = $vals['createTimeFmt'];
			}
			
			
			if (isset($vals['contractDimensionName'])){
				
				$this->contractDimensionName = $vals['contractDimensionName'];
			}
			
			
			if (isset($vals['signModeName'])){
				
				$this->signModeName = $vals['signModeName'];
			}
			
			
			if (isset($vals['statusName'])){
				
				$this->statusName = $vals['statusName'];
			}
			
			
			if (isset($vals['companyName'])){
				
				$this->companyName = $vals['companyName'];
			}
			
			
			if (isset($vals['discountList'])){
				
				$this->discountList = $vals['discountList'];
			}
			
			
			if (isset($vals['processCompletedTimeStr'])){
				
				$this->processCompletedTimeStr = $vals['processCompletedTimeStr'];
			}
			
			
			if (isset($vals['salesWarehouseList'])){
				
				$this->salesWarehouseList = $vals['salesWarehouseList'];
			}
			
			
			if (isset($vals['overseasSalesType'])){
				
				$this->overseasSalesType = $vals['overseasSalesType'];
			}
			
			
			if (isset($vals['salesNo'])){
				
				$this->salesNo = $vals['salesNo'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
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
		
		return 'ProtContractMainInfoModel';
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
			
			
			
			
			if ("activityAlltype" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityAlltype);
				
			}
			
			
			
			
			if ("onlineStarttime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineStarttime); 
				
			}
			
			
			
			
			if ("onlineEndtime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineEndtime); 
				
			}
			
			
			
			
			if ("basicStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->basicStatus); 
				
			}
			
			
			
			
			if ("assistantStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->assistantStatus); 
				
			}
			
			
			
			
			if ("managerStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->managerStatus); 
				
			}
			
			
			
			
			if ("directorStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->directorStatus); 
				
			}
			
			
			
			
			if ("stage" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stage); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
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
			
			
			
			
			if ("specialStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specialStatus); 
				
			}
			
			
			
			
			if ("finalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->finalStatus); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("departmentName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->departmentName);
				
			}
			
			
			
			
			if ("scaleContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scaleContent);
				
			}
			
			
			
			
			if ("discountContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountContent);
				
			}
			
			
			
			
			if ("bindingType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->bindingType); 
				
			}
			
			
			
			
			if ("operatorType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->operatorType); 
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->businessType); 
				
			}
			
			
			
			
			if ("contractDimension" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->contractDimension); 
				
			}
			
			
			
			
			if ("onlineStarttimeFmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->onlineStarttimeFmt);
				
			}
			
			
			
			
			if ("onlineEndtimeFmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->onlineEndtimeFmt);
				
			}
			
			
			
			
			if ("createTimeFmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTimeFmt);
				
			}
			
			
			
			
			if ("contractDimensionName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractDimensionName);
				
			}
			
			
			
			
			if ("signModeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signModeName);
				
			}
			
			
			
			
			if ("statusName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusName);
				
			}
			
			
			
			
			if ("companyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyName);
				
			}
			
			
			
			
			if ("discountList" == $schemeField){
				
				$needSkip = false;
				
				$this->discountList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDiscountInfoModel();
						$elem0->read($input);
						
						$this->discountList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("processCompletedTimeStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processCompletedTimeStr);
				
			}
			
			
			
			
			if ("salesWarehouseList" == $schemeField){
				
				$needSkip = false;
				
				$this->salesWarehouseList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\api\promotion\vis\protcontract\service\SalesWarehouse();
						$elem1->read($input);
						
						$this->salesWarehouseList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("overseasSalesType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->overseasSalesType); 
				
			}
			
			
			
			
			if ("salesNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->salesNo); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
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
		
		
		if($this->activityAlltype !== null) {
			
			$xfer += $output->writeFieldBegin('activityAlltype');
			$xfer += $output->writeString($this->activityAlltype);
			
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
		
		
		if($this->basicStatus !== null) {
			
			$xfer += $output->writeFieldBegin('basicStatus');
			$xfer += $output->writeByte($this->basicStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assistantStatus !== null) {
			
			$xfer += $output->writeFieldBegin('assistantStatus');
			$xfer += $output->writeByte($this->assistantStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->managerStatus !== null) {
			
			$xfer += $output->writeFieldBegin('managerStatus');
			$xfer += $output->writeByte($this->managerStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->directorStatus !== null) {
			
			$xfer += $output->writeFieldBegin('directorStatus');
			$xfer += $output->writeByte($this->directorStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stage !== null) {
			
			$xfer += $output->writeFieldBegin('stage');
			$xfer += $output->writeByte($this->stage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
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
		
		
		if($this->specialStatus !== null) {
			
			$xfer += $output->writeFieldBegin('specialStatus');
			$xfer += $output->writeByte($this->specialStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('finalStatus');
			$xfer += $output->writeByte($this->finalStatus);
			
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
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departmentName !== null) {
			
			$xfer += $output->writeFieldBegin('departmentName');
			$xfer += $output->writeString($this->departmentName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scaleContent !== null) {
			
			$xfer += $output->writeFieldBegin('scaleContent');
			$xfer += $output->writeString($this->scaleContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountContent !== null) {
			
			$xfer += $output->writeFieldBegin('discountContent');
			$xfer += $output->writeString($this->discountContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bindingType !== null) {
			
			$xfer += $output->writeFieldBegin('bindingType');
			$xfer += $output->writeByte($this->bindingType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorType !== null) {
			
			$xfer += $output->writeFieldBegin('operatorType');
			$xfer += $output->writeByte($this->operatorType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeByte($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractDimension !== null) {
			
			$xfer += $output->writeFieldBegin('contractDimension');
			$xfer += $output->writeByte($this->contractDimension);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineStarttimeFmt !== null) {
			
			$xfer += $output->writeFieldBegin('onlineStarttimeFmt');
			$xfer += $output->writeString($this->onlineStarttimeFmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineEndtimeFmt !== null) {
			
			$xfer += $output->writeFieldBegin('onlineEndtimeFmt');
			$xfer += $output->writeString($this->onlineEndtimeFmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeFmt !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeFmt');
			$xfer += $output->writeString($this->createTimeFmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractDimensionName !== null) {
			
			$xfer += $output->writeFieldBegin('contractDimensionName');
			$xfer += $output->writeString($this->contractDimensionName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signModeName !== null) {
			
			$xfer += $output->writeFieldBegin('signModeName');
			$xfer += $output->writeString($this->signModeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusName !== null) {
			
			$xfer += $output->writeFieldBegin('statusName');
			$xfer += $output->writeString($this->statusName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyName !== null) {
			
			$xfer += $output->writeFieldBegin('companyName');
			$xfer += $output->writeString($this->companyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountList !== null) {
			
			$xfer += $output->writeFieldBegin('discountList');
			
			if (!is_array($this->discountList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->discountList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processCompletedTimeStr !== null) {
			
			$xfer += $output->writeFieldBegin('processCompletedTimeStr');
			$xfer += $output->writeString($this->processCompletedTimeStr);
			
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
		
		
		if($this->overseasSalesType !== null) {
			
			$xfer += $output->writeFieldBegin('overseasSalesType');
			$xfer += $output->writeByte($this->overseasSalesType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesNo');
			$xfer += $output->writeI64($this->salesNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
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