<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractQueryParam {
	
	static $_TSPEC;
	public $protNos = null;
	public $activityAlltype = null;
	public $status = null;
	public $signMode = null;
	public $onlineStarttimeStart = null;
	public $onlineStarttimeEnd = null;
	public $onlineEndtimeStart = null;
	public $onlineEndtimeEnd = null;
	public $vendorCodes = null;
	public $rangeType = null;
	public $stage = null;
	public $dataAreaIds = null;
	public $orderBy = null;
	public $brandSn = null;
	public $brandId = null;
	public $specialName = null;
	public $basicStatus = null;
	public $beginTime = null;
	public $endTime = null;
	public $operatorType = null;
	public $businessType = null;
	public $contractDimension = null;
	public $contractMode = null;
	public $contractIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protNos'
			),
			2 => array(
			'var' => 'activityAlltype'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'signMode'
			),
			5 => array(
			'var' => 'onlineStarttimeStart'
			),
			6 => array(
			'var' => 'onlineStarttimeEnd'
			),
			7 => array(
			'var' => 'onlineEndtimeStart'
			),
			8 => array(
			'var' => 'onlineEndtimeEnd'
			),
			9 => array(
			'var' => 'vendorCodes'
			),
			10 => array(
			'var' => 'rangeType'
			),
			11 => array(
			'var' => 'stage'
			),
			12 => array(
			'var' => 'dataAreaIds'
			),
			13 => array(
			'var' => 'orderBy'
			),
			14 => array(
			'var' => 'brandSn'
			),
			15 => array(
			'var' => 'brandId'
			),
			16 => array(
			'var' => 'specialName'
			),
			17 => array(
			'var' => 'basicStatus'
			),
			18 => array(
			'var' => 'beginTime'
			),
			19 => array(
			'var' => 'endTime'
			),
			20 => array(
			'var' => 'operatorType'
			),
			21 => array(
			'var' => 'businessType'
			),
			22 => array(
			'var' => 'contractDimension'
			),
			23 => array(
			'var' => 'contractMode'
			),
			24 => array(
			'var' => 'contractIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protNos'])){
				
				$this->protNos = $vals['protNos'];
			}
			
			
			if (isset($vals['activityAlltype'])){
				
				$this->activityAlltype = $vals['activityAlltype'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['signMode'])){
				
				$this->signMode = $vals['signMode'];
			}
			
			
			if (isset($vals['onlineStarttimeStart'])){
				
				$this->onlineStarttimeStart = $vals['onlineStarttimeStart'];
			}
			
			
			if (isset($vals['onlineStarttimeEnd'])){
				
				$this->onlineStarttimeEnd = $vals['onlineStarttimeEnd'];
			}
			
			
			if (isset($vals['onlineEndtimeStart'])){
				
				$this->onlineEndtimeStart = $vals['onlineEndtimeStart'];
			}
			
			
			if (isset($vals['onlineEndtimeEnd'])){
				
				$this->onlineEndtimeEnd = $vals['onlineEndtimeEnd'];
			}
			
			
			if (isset($vals['vendorCodes'])){
				
				$this->vendorCodes = $vals['vendorCodes'];
			}
			
			
			if (isset($vals['rangeType'])){
				
				$this->rangeType = $vals['rangeType'];
			}
			
			
			if (isset($vals['stage'])){
				
				$this->stage = $vals['stage'];
			}
			
			
			if (isset($vals['dataAreaIds'])){
				
				$this->dataAreaIds = $vals['dataAreaIds'];
			}
			
			
			if (isset($vals['orderBy'])){
				
				$this->orderBy = $vals['orderBy'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['specialName'])){
				
				$this->specialName = $vals['specialName'];
			}
			
			
			if (isset($vals['basicStatus'])){
				
				$this->basicStatus = $vals['basicStatus'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
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
			
			
			if (isset($vals['contractMode'])){
				
				$this->contractMode = $vals['contractMode'];
			}
			
			
			if (isset($vals['contractIds'])){
				
				$this->contractIds = $vals['contractIds'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("protNos" == $schemeField){
				
				$needSkip = false;
				
				$this->protNos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->protNos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("activityAlltype" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityAlltype);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("signMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->signMode); 
				
			}
			
			
			
			
			if ("onlineStarttimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineStarttimeStart); 
				
			}
			
			
			
			
			if ("onlineStarttimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineStarttimeEnd); 
				
			}
			
			
			
			
			if ("onlineEndtimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineEndtimeStart); 
				
			}
			
			
			
			
			if ("onlineEndtimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->onlineEndtimeEnd); 
				
			}
			
			
			
			
			if ("vendorCodes" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorCodes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->vendorCodes[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("rangeType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->rangeType); 
				
			}
			
			
			
			
			if ("stage" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stage); 
				
			}
			
			
			
			
			if ("dataAreaIds" == $schemeField){
				
				$needSkip = false;
				
				$this->dataAreaIds = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->dataAreaIds[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("orderBy" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->orderBy); 
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("specialName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialName);
				
			}
			
			
			
			
			if ("basicStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->basicStatus); 
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
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
			
			
			
			
			if ("contractMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->contractMode); 
				
			}
			
			
			
			
			if ("contractIds" == $schemeField){
				
				$needSkip = false;
				
				$this->contractIds = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI64($elem3); 
						
						$this->contractIds[$_size3++] = $elem3;
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
		
		if($this->protNos !== null) {
			
			$xfer += $output->writeFieldBegin('protNos');
			
			if (!is_array($this->protNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->protNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityAlltype !== null) {
			
			$xfer += $output->writeFieldBegin('activityAlltype');
			$xfer += $output->writeString($this->activityAlltype);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signMode !== null) {
			
			$xfer += $output->writeFieldBegin('signMode');
			$xfer += $output->writeByte($this->signMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineStarttimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('onlineStarttimeStart');
			$xfer += $output->writeI64($this->onlineStarttimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineStarttimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('onlineStarttimeEnd');
			$xfer += $output->writeI64($this->onlineStarttimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineEndtimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('onlineEndtimeStart');
			$xfer += $output->writeI64($this->onlineEndtimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineEndtimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('onlineEndtimeEnd');
			$xfer += $output->writeI64($this->onlineEndtimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCodes !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCodes');
			
			if (!is_array($this->vendorCodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vendorCodes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rangeType !== null) {
			
			$xfer += $output->writeFieldBegin('rangeType');
			$xfer += $output->writeByte($this->rangeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stage !== null) {
			
			$xfer += $output->writeFieldBegin('stage');
			$xfer += $output->writeByte($this->stage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaIds !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaIds');
			
			if (!is_array($this->dataAreaIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->dataAreaIds as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderBy !== null) {
			
			$xfer += $output->writeFieldBegin('orderBy');
			$xfer += $output->writeByte($this->orderBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialName !== null) {
			
			$xfer += $output->writeFieldBegin('specialName');
			$xfer += $output->writeString($this->specialName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->basicStatus !== null) {
			
			$xfer += $output->writeFieldBegin('basicStatus');
			$xfer += $output->writeByte($this->basicStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginTime');
			$xfer += $output->writeI64($this->beginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
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
		
		
		if($this->contractMode !== null) {
			
			$xfer += $output->writeFieldBegin('contractMode');
			$xfer += $output->writeByte($this->contractMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contractIds !== null) {
			
			$xfer += $output->writeFieldBegin('contractIds');
			
			if (!is_array($this->contractIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->contractIds as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
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