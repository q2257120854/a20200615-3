<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TmsOrderInfoModel {
	
	static $_TSPEC;
	public $tmsOrderId = null;
	public $orderSn = null;
	public $vipClub = null;
	public $userType = null;
	public $tmsOriginalOrderId = null;
	public $createdOffice = null;
	public $buyTown = null;
	public $custType = null;
	public $buyerAreaId = null;
	public $buyerAddress = null;
	public $buyerCity = null;
	public $buyerState = null;
	public $buyerCountryId = null;
	public $isCod = null;
	public $extPayType = null;
	public $transportType = null;
	public $buyerTel = null;
	public $mobile = null;
	public $transportDay = null;
	public $carriage = null;
	public $money = null;
	public $addTime = null;
	public $buyer = null;
	public $custCode = null;
	public $isSecondMatchAppraise = null;
	public $crmCustPointId = null;
	public $transportNo = null;
	public $customerCode = null;
	public $orderType = null;
	public $pickingFinishTime = null;
	public $transportTime = null;
	public $receivingWarehouse = null;
	public $originalVipClub = null;
	public $serviceType = null;
	public $saleType = null;
	public $orderSubType = null;
	public $isJitZf = null;
	public $thirdCarrierFlag = null;
	public $easybreak = null;
	public $isJitX = null;
	public $userId = null;
	public $amount = null;
	public $packageNumFlag = null;
	public $tmsOrderOtherInfoId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'vipClub'
			),
			4 => array(
			'var' => 'userType'
			),
			5 => array(
			'var' => 'tmsOriginalOrderId'
			),
			6 => array(
			'var' => 'createdOffice'
			),
			7 => array(
			'var' => 'buyTown'
			),
			8 => array(
			'var' => 'custType'
			),
			9 => array(
			'var' => 'buyerAreaId'
			),
			10 => array(
			'var' => 'buyerAddress'
			),
			11 => array(
			'var' => 'buyerCity'
			),
			12 => array(
			'var' => 'buyerState'
			),
			13 => array(
			'var' => 'buyerCountryId'
			),
			14 => array(
			'var' => 'isCod'
			),
			15 => array(
			'var' => 'extPayType'
			),
			16 => array(
			'var' => 'transportType'
			),
			17 => array(
			'var' => 'buyerTel'
			),
			18 => array(
			'var' => 'mobile'
			),
			19 => array(
			'var' => 'transportDay'
			),
			20 => array(
			'var' => 'carriage'
			),
			21 => array(
			'var' => 'money'
			),
			22 => array(
			'var' => 'addTime'
			),
			23 => array(
			'var' => 'buyer'
			),
			24 => array(
			'var' => 'custCode'
			),
			25 => array(
			'var' => 'isSecondMatchAppraise'
			),
			26 => array(
			'var' => 'crmCustPointId'
			),
			27 => array(
			'var' => 'transportNo'
			),
			28 => array(
			'var' => 'customerCode'
			),
			29 => array(
			'var' => 'orderType'
			),
			30 => array(
			'var' => 'pickingFinishTime'
			),
			31 => array(
			'var' => 'transportTime'
			),
			32 => array(
			'var' => 'receivingWarehouse'
			),
			33 => array(
			'var' => 'originalVipClub'
			),
			34 => array(
			'var' => 'serviceType'
			),
			35 => array(
			'var' => 'saleType'
			),
			36 => array(
			'var' => 'orderSubType'
			),
			37 => array(
			'var' => 'isJitZf'
			),
			38 => array(
			'var' => 'thirdCarrierFlag'
			),
			39 => array(
			'var' => 'easybreak'
			),
			40 => array(
			'var' => 'isJitX'
			),
			41 => array(
			'var' => 'userId'
			),
			42 => array(
			'var' => 'amount'
			),
			43 => array(
			'var' => 'packageNumFlag'
			),
			44 => array(
			'var' => 'tmsOrderOtherInfoId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderId'])){
				
				$this->tmsOrderId = $vals['tmsOrderId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['vipClub'])){
				
				$this->vipClub = $vals['vipClub'];
			}
			
			
			if (isset($vals['userType'])){
				
				$this->userType = $vals['userType'];
			}
			
			
			if (isset($vals['tmsOriginalOrderId'])){
				
				$this->tmsOriginalOrderId = $vals['tmsOriginalOrderId'];
			}
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['buyTown'])){
				
				$this->buyTown = $vals['buyTown'];
			}
			
			
			if (isset($vals['custType'])){
				
				$this->custType = $vals['custType'];
			}
			
			
			if (isset($vals['buyerAreaId'])){
				
				$this->buyerAreaId = $vals['buyerAreaId'];
			}
			
			
			if (isset($vals['buyerAddress'])){
				
				$this->buyerAddress = $vals['buyerAddress'];
			}
			
			
			if (isset($vals['buyerCity'])){
				
				$this->buyerCity = $vals['buyerCity'];
			}
			
			
			if (isset($vals['buyerState'])){
				
				$this->buyerState = $vals['buyerState'];
			}
			
			
			if (isset($vals['buyerCountryId'])){
				
				$this->buyerCountryId = $vals['buyerCountryId'];
			}
			
			
			if (isset($vals['isCod'])){
				
				$this->isCod = $vals['isCod'];
			}
			
			
			if (isset($vals['extPayType'])){
				
				$this->extPayType = $vals['extPayType'];
			}
			
			
			if (isset($vals['transportType'])){
				
				$this->transportType = $vals['transportType'];
			}
			
			
			if (isset($vals['buyerTel'])){
				
				$this->buyerTel = $vals['buyerTel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['isSecondMatchAppraise'])){
				
				$this->isSecondMatchAppraise = $vals['isSecondMatchAppraise'];
			}
			
			
			if (isset($vals['crmCustPointId'])){
				
				$this->crmCustPointId = $vals['crmCustPointId'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['customerCode'])){
				
				$this->customerCode = $vals['customerCode'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['pickingFinishTime'])){
				
				$this->pickingFinishTime = $vals['pickingFinishTime'];
			}
			
			
			if (isset($vals['transportTime'])){
				
				$this->transportTime = $vals['transportTime'];
			}
			
			
			if (isset($vals['receivingWarehouse'])){
				
				$this->receivingWarehouse = $vals['receivingWarehouse'];
			}
			
			
			if (isset($vals['originalVipClub'])){
				
				$this->originalVipClub = $vals['originalVipClub'];
			}
			
			
			if (isset($vals['serviceType'])){
				
				$this->serviceType = $vals['serviceType'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['orderSubType'])){
				
				$this->orderSubType = $vals['orderSubType'];
			}
			
			
			if (isset($vals['isJitZf'])){
				
				$this->isJitZf = $vals['isJitZf'];
			}
			
			
			if (isset($vals['thirdCarrierFlag'])){
				
				$this->thirdCarrierFlag = $vals['thirdCarrierFlag'];
			}
			
			
			if (isset($vals['easybreak'])){
				
				$this->easybreak = $vals['easybreak'];
			}
			
			
			if (isset($vals['isJitX'])){
				
				$this->isJitX = $vals['isJitX'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['packageNumFlag'])){
				
				$this->packageNumFlag = $vals['packageNumFlag'];
			}
			
			
			if (isset($vals['tmsOrderOtherInfoId'])){
				
				$this->tmsOrderOtherInfoId = $vals['tmsOrderOtherInfoId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("vipClub" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipClub); 
				
			}
			
			
			
			
			if ("userType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userType); 
				
			}
			
			
			
			
			if ("tmsOriginalOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOriginalOrderId);
				
			}
			
			
			
			
			if ("createdOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdOffice);
				
			}
			
			
			
			
			if ("buyTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyTown);
				
			}
			
			
			
			
			if ("custType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->custType); 
				
			}
			
			
			
			
			if ("buyerAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAreaId);
				
			}
			
			
			
			
			if ("buyerAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddress);
				
			}
			
			
			
			
			if ("buyerCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCity);
				
			}
			
			
			
			
			if ("buyerState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerState);
				
			}
			
			
			
			
			if ("buyerCountryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCountryId);
				
			}
			
			
			
			
			if ("isCod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isCod); 
				
			}
			
			
			
			
			if ("extPayType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->extPayType); 
				
			}
			
			
			
			
			if ("transportType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportType);
				
			}
			
			
			
			
			if ("buyerTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerTel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->money);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("isSecondMatchAppraise" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSecondMatchAppraise); 
				
			}
			
			
			
			
			if ("crmCustPointId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->crmCustPointId);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("customerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerCode);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("pickingFinishTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pickingFinishTime);
				
			}
			
			
			
			
			if ("transportTime" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transportTime); 
				
			}
			
			
			
			
			if ("receivingWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receivingWarehouse);
				
			}
			
			
			
			
			if ("originalVipClub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalVipClub);
				
			}
			
			
			
			
			if ("serviceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->serviceType); 
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->saleType); 
				
			}
			
			
			
			
			if ("orderSubType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderSubType); 
				
			}
			
			
			
			
			if ("isJitZf" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitZf); 
				
			}
			
			
			
			
			if ("thirdCarrierFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thirdCarrierFlag); 
				
			}
			
			
			
			
			if ("easybreak" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->easybreak); 
				
			}
			
			
			
			
			if ("isJitX" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitX); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("packageNumFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->packageNumFlag); 
				
			}
			
			
			
			
			if ("tmsOrderOtherInfoId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderOtherInfoId);
				
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
		
		if($this->tmsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderId');
			$xfer += $output->writeString($this->tmsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipClub !== null) {
			
			$xfer += $output->writeFieldBegin('vipClub');
			$xfer += $output->writeI32($this->vipClub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userType !== null) {
			
			$xfer += $output->writeFieldBegin('userType');
			$xfer += $output->writeI32($this->userType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOriginalOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOriginalOrderId');
			$xfer += $output->writeString($this->tmsOriginalOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyTown !== null) {
			
			$xfer += $output->writeFieldBegin('buyTown');
			$xfer += $output->writeString($this->buyTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custType !== null) {
			
			$xfer += $output->writeFieldBegin('custType');
			$xfer += $output->writeI32($this->custType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAreaId');
			$xfer += $output->writeString($this->buyerAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddress !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddress');
			$xfer += $output->writeString($this->buyerAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCity !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCity');
			$xfer += $output->writeString($this->buyerCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerState !== null) {
			
			$xfer += $output->writeFieldBegin('buyerState');
			$xfer += $output->writeString($this->buyerState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCountryId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCountryId');
			$xfer += $output->writeString($this->buyerCountryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCod !== null) {
			
			$xfer += $output->writeFieldBegin('isCod');
			$xfer += $output->writeI32($this->isCod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPayType !== null) {
			
			$xfer += $output->writeFieldBegin('extPayType');
			$xfer += $output->writeI32($this->extPayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportType !== null) {
			
			$xfer += $output->writeFieldBegin('transportType');
			$xfer += $output->writeString($this->transportType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerTel !== null) {
			
			$xfer += $output->writeFieldBegin('buyerTel');
			$xfer += $output->writeString($this->buyerTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeDouble($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeI64($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSecondMatchAppraise !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondMatchAppraise');
			$xfer += $output->writeI32($this->isSecondMatchAppraise);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crmCustPointId !== null) {
			
			$xfer += $output->writeFieldBegin('crmCustPointId');
			$xfer += $output->writeString($this->crmCustPointId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerCode !== null) {
			
			$xfer += $output->writeFieldBegin('customerCode');
			$xfer += $output->writeString($this->customerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickingFinishTime !== null) {
			
			$xfer += $output->writeFieldBegin('pickingFinishTime');
			$xfer += $output->writeI64($this->pickingFinishTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportTime !== null) {
			
			$xfer += $output->writeFieldBegin('transportTime');
			$xfer += $output->writeByte($this->transportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receivingWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('receivingWarehouse');
			$xfer += $output->writeString($this->receivingWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalVipClub !== null) {
			
			$xfer += $output->writeFieldBegin('originalVipClub');
			$xfer += $output->writeString($this->originalVipClub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceType !== null) {
			
			$xfer += $output->writeFieldBegin('serviceType');
			$xfer += $output->writeI32($this->serviceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeI32($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSubType !== null) {
			
			$xfer += $output->writeFieldBegin('orderSubType');
			$xfer += $output->writeI32($this->orderSubType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isJitZf !== null) {
			
			$xfer += $output->writeFieldBegin('isJitZf');
			$xfer += $output->writeI32($this->isJitZf);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCarrierFlag !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCarrierFlag');
			$xfer += $output->writeI32($this->thirdCarrierFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->easybreak !== null) {
			
			$xfer += $output->writeFieldBegin('easybreak');
			$xfer += $output->writeI32($this->easybreak);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isJitX !== null) {
			
			$xfer += $output->writeFieldBegin('isJitX');
			$xfer += $output->writeI32($this->isJitX);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageNumFlag !== null) {
			
			$xfer += $output->writeFieldBegin('packageNumFlag');
			$xfer += $output->writeI32($this->packageNumFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOrderOtherInfoId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderOtherInfoId');
			$xfer += $output->writeString($this->tmsOrderOtherInfoId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>