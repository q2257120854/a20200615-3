<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class MatchProcessResultInfo {
	
	static $_TSPEC;
	public $tmsOrderId = null;
	public $custId = null;
	public $custCode = null;
	public $custType = null;
	public $infCust = null;
	public $infCustPointId = null;
	public $infCustPointCode = null;
	public $infCustPointName = null;
	public $infCustPickupGoodsTime = null;
	public $infOrderOrginCode = null;
	public $infOrderDestinationCode = null;
	public $payType = null;
	public $orderDeliveryBatch = null;
	public $templateCode = null;
	public $pickingCode = null;
	public $pickingLevel = null;
	public $destAccepter = null;
	public $distributeDeclareOrder = null;
	public $originalServiceLevel = null;
	public $acceptManipulatMatchTime = null;
	public $matchFlag = null;
	public $matchMemo = null;
	public $createdOffice = null;
	public $custLevel = null;
	public $isUseAlipay = null;
	public $custName = null;
	public $isAir = null;
	public $custStats = null;
	public $custCity = null;
	public $custRegion = null;
	public $custTown = null;
	public $isCod = null;
	public $isTownReach = null;
	public $ruleType = null;
	public $levelRate = null;
	public $matchCityPercent = null;
	public $matchRegionPercent = null;
	public $isPos = null;
	public $isSecondMatchAppraise = null;
	public $isNightMatch = null;
	public $mergeCustCode = null;
	public $mergeTmsOrderId = null;
	public $isSecondMatch = null;
	public $matchPayPercent = null;
	public $matchCashPercent = null;
	public $matchPosPercent = null;
	public $isExistCrm = null;
	public $isMatchArea = null;
	public $matchBizType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderId'
			),
			2 => array(
			'var' => 'custId'
			),
			3 => array(
			'var' => 'custCode'
			),
			4 => array(
			'var' => 'custType'
			),
			5 => array(
			'var' => 'infCust'
			),
			6 => array(
			'var' => 'infCustPointId'
			),
			7 => array(
			'var' => 'infCustPointCode'
			),
			8 => array(
			'var' => 'infCustPointName'
			),
			9 => array(
			'var' => 'infCustPickupGoodsTime'
			),
			10 => array(
			'var' => 'infOrderOrginCode'
			),
			11 => array(
			'var' => 'infOrderDestinationCode'
			),
			12 => array(
			'var' => 'payType'
			),
			13 => array(
			'var' => 'orderDeliveryBatch'
			),
			14 => array(
			'var' => 'templateCode'
			),
			15 => array(
			'var' => 'pickingCode'
			),
			16 => array(
			'var' => 'pickingLevel'
			),
			17 => array(
			'var' => 'destAccepter'
			),
			18 => array(
			'var' => 'distributeDeclareOrder'
			),
			19 => array(
			'var' => 'originalServiceLevel'
			),
			20 => array(
			'var' => 'acceptManipulatMatchTime'
			),
			21 => array(
			'var' => 'matchFlag'
			),
			22 => array(
			'var' => 'matchMemo'
			),
			23 => array(
			'var' => 'createdOffice'
			),
			24 => array(
			'var' => 'custLevel'
			),
			25 => array(
			'var' => 'isUseAlipay'
			),
			26 => array(
			'var' => 'custName'
			),
			27 => array(
			'var' => 'isAir'
			),
			28 => array(
			'var' => 'custStats'
			),
			29 => array(
			'var' => 'custCity'
			),
			30 => array(
			'var' => 'custRegion'
			),
			31 => array(
			'var' => 'custTown'
			),
			32 => array(
			'var' => 'isCod'
			),
			33 => array(
			'var' => 'isTownReach'
			),
			34 => array(
			'var' => 'ruleType'
			),
			35 => array(
			'var' => 'levelRate'
			),
			36 => array(
			'var' => 'matchCityPercent'
			),
			37 => array(
			'var' => 'matchRegionPercent'
			),
			38 => array(
			'var' => 'isPos'
			),
			39 => array(
			'var' => 'isSecondMatchAppraise'
			),
			40 => array(
			'var' => 'isNightMatch'
			),
			41 => array(
			'var' => 'mergeCustCode'
			),
			42 => array(
			'var' => 'mergeTmsOrderId'
			),
			43 => array(
			'var' => 'isSecondMatch'
			),
			44 => array(
			'var' => 'matchPayPercent'
			),
			45 => array(
			'var' => 'matchCashPercent'
			),
			46 => array(
			'var' => 'matchPosPercent'
			),
			47 => array(
			'var' => 'isExistCrm'
			),
			48 => array(
			'var' => 'isMatchArea'
			),
			49 => array(
			'var' => 'matchBizType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderId'])){
				
				$this->tmsOrderId = $vals['tmsOrderId'];
			}
			
			
			if (isset($vals['custId'])){
				
				$this->custId = $vals['custId'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['custType'])){
				
				$this->custType = $vals['custType'];
			}
			
			
			if (isset($vals['infCust'])){
				
				$this->infCust = $vals['infCust'];
			}
			
			
			if (isset($vals['infCustPointId'])){
				
				$this->infCustPointId = $vals['infCustPointId'];
			}
			
			
			if (isset($vals['infCustPointCode'])){
				
				$this->infCustPointCode = $vals['infCustPointCode'];
			}
			
			
			if (isset($vals['infCustPointName'])){
				
				$this->infCustPointName = $vals['infCustPointName'];
			}
			
			
			if (isset($vals['infCustPickupGoodsTime'])){
				
				$this->infCustPickupGoodsTime = $vals['infCustPickupGoodsTime'];
			}
			
			
			if (isset($vals['infOrderOrginCode'])){
				
				$this->infOrderOrginCode = $vals['infOrderOrginCode'];
			}
			
			
			if (isset($vals['infOrderDestinationCode'])){
				
				$this->infOrderDestinationCode = $vals['infOrderDestinationCode'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['orderDeliveryBatch'])){
				
				$this->orderDeliveryBatch = $vals['orderDeliveryBatch'];
			}
			
			
			if (isset($vals['templateCode'])){
				
				$this->templateCode = $vals['templateCode'];
			}
			
			
			if (isset($vals['pickingCode'])){
				
				$this->pickingCode = $vals['pickingCode'];
			}
			
			
			if (isset($vals['pickingLevel'])){
				
				$this->pickingLevel = $vals['pickingLevel'];
			}
			
			
			if (isset($vals['destAccepter'])){
				
				$this->destAccepter = $vals['destAccepter'];
			}
			
			
			if (isset($vals['distributeDeclareOrder'])){
				
				$this->distributeDeclareOrder = $vals['distributeDeclareOrder'];
			}
			
			
			if (isset($vals['originalServiceLevel'])){
				
				$this->originalServiceLevel = $vals['originalServiceLevel'];
			}
			
			
			if (isset($vals['acceptManipulatMatchTime'])){
				
				$this->acceptManipulatMatchTime = $vals['acceptManipulatMatchTime'];
			}
			
			
			if (isset($vals['matchFlag'])){
				
				$this->matchFlag = $vals['matchFlag'];
			}
			
			
			if (isset($vals['matchMemo'])){
				
				$this->matchMemo = $vals['matchMemo'];
			}
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['custLevel'])){
				
				$this->custLevel = $vals['custLevel'];
			}
			
			
			if (isset($vals['isUseAlipay'])){
				
				$this->isUseAlipay = $vals['isUseAlipay'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
			if (isset($vals['isAir'])){
				
				$this->isAir = $vals['isAir'];
			}
			
			
			if (isset($vals['custStats'])){
				
				$this->custStats = $vals['custStats'];
			}
			
			
			if (isset($vals['custCity'])){
				
				$this->custCity = $vals['custCity'];
			}
			
			
			if (isset($vals['custRegion'])){
				
				$this->custRegion = $vals['custRegion'];
			}
			
			
			if (isset($vals['custTown'])){
				
				$this->custTown = $vals['custTown'];
			}
			
			
			if (isset($vals['isCod'])){
				
				$this->isCod = $vals['isCod'];
			}
			
			
			if (isset($vals['isTownReach'])){
				
				$this->isTownReach = $vals['isTownReach'];
			}
			
			
			if (isset($vals['ruleType'])){
				
				$this->ruleType = $vals['ruleType'];
			}
			
			
			if (isset($vals['levelRate'])){
				
				$this->levelRate = $vals['levelRate'];
			}
			
			
			if (isset($vals['matchCityPercent'])){
				
				$this->matchCityPercent = $vals['matchCityPercent'];
			}
			
			
			if (isset($vals['matchRegionPercent'])){
				
				$this->matchRegionPercent = $vals['matchRegionPercent'];
			}
			
			
			if (isset($vals['isPos'])){
				
				$this->isPos = $vals['isPos'];
			}
			
			
			if (isset($vals['isSecondMatchAppraise'])){
				
				$this->isSecondMatchAppraise = $vals['isSecondMatchAppraise'];
			}
			
			
			if (isset($vals['isNightMatch'])){
				
				$this->isNightMatch = $vals['isNightMatch'];
			}
			
			
			if (isset($vals['mergeCustCode'])){
				
				$this->mergeCustCode = $vals['mergeCustCode'];
			}
			
			
			if (isset($vals['mergeTmsOrderId'])){
				
				$this->mergeTmsOrderId = $vals['mergeTmsOrderId'];
			}
			
			
			if (isset($vals['isSecondMatch'])){
				
				$this->isSecondMatch = $vals['isSecondMatch'];
			}
			
			
			if (isset($vals['matchPayPercent'])){
				
				$this->matchPayPercent = $vals['matchPayPercent'];
			}
			
			
			if (isset($vals['matchCashPercent'])){
				
				$this->matchCashPercent = $vals['matchCashPercent'];
			}
			
			
			if (isset($vals['matchPosPercent'])){
				
				$this->matchPosPercent = $vals['matchPosPercent'];
			}
			
			
			if (isset($vals['isExistCrm'])){
				
				$this->isExistCrm = $vals['isExistCrm'];
			}
			
			
			if (isset($vals['isMatchArea'])){
				
				$this->isMatchArea = $vals['isMatchArea'];
			}
			
			
			if (isset($vals['matchBizType'])){
				
				$this->matchBizType = $vals['matchBizType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MatchProcessResultInfo';
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
			
			
			
			
			if ("custId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custId);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("custType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->custType); 
				
			}
			
			
			
			
			if ("infCust" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infCust);
				
			}
			
			
			
			
			if ("infCustPointId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infCustPointId);
				
			}
			
			
			
			
			if ("infCustPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infCustPointCode);
				
			}
			
			
			
			
			if ("infCustPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infCustPointName);
				
			}
			
			
			
			
			if ("infCustPickupGoodsTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infCustPickupGoodsTime);
				
			}
			
			
			
			
			if ("infOrderOrginCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infOrderOrginCode);
				
			}
			
			
			
			
			if ("infOrderDestinationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infOrderDestinationCode);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("orderDeliveryBatch" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderDeliveryBatch); 
				
			}
			
			
			
			
			if ("templateCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateCode);
				
			}
			
			
			
			
			if ("pickingCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickingCode);
				
			}
			
			
			
			
			if ("pickingLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickingLevel);
				
			}
			
			
			
			
			if ("destAccepter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destAccepter);
				
			}
			
			
			
			
			if ("distributeDeclareOrder" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->distributeDeclareOrder); 
				
			}
			
			
			
			
			if ("originalServiceLevel" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->originalServiceLevel);
				
			}
			
			
			
			
			if ("acceptManipulatMatchTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->acceptManipulatMatchTime);
				
			}
			
			
			
			
			if ("matchFlag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->matchFlag);
				
			}
			
			
			
			
			if ("matchMemo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->matchMemo);
				
			}
			
			
			
			
			if ("createdOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdOffice);
				
			}
			
			
			
			
			if ("custLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custLevel);
				
			}
			
			
			
			
			if ("isUseAlipay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isUseAlipay); 
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
			}
			
			
			
			
			if ("isAir" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isAir); 
				
			}
			
			
			
			
			if ("custStats" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custStats);
				
			}
			
			
			
			
			if ("custCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCity);
				
			}
			
			
			
			
			if ("custRegion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custRegion);
				
			}
			
			
			
			
			if ("custTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custTown);
				
			}
			
			
			
			
			if ("isCod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isCod); 
				
			}
			
			
			
			
			if ("isTownReach" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isTownReach); 
				
			}
			
			
			
			
			if ("ruleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->ruleType); 
				
			}
			
			
			
			
			if ("levelRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->levelRate);
				
			}
			
			
			
			
			if ("matchCityPercent" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->matchCityPercent);
				
			}
			
			
			
			
			if ("matchRegionPercent" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->matchRegionPercent);
				
			}
			
			
			
			
			if ("isPos" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPos); 
				
			}
			
			
			
			
			if ("isSecondMatchAppraise" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSecondMatchAppraise); 
				
			}
			
			
			
			
			if ("isNightMatch" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isNightMatch);
				
			}
			
			
			
			
			if ("mergeCustCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mergeCustCode);
				
			}
			
			
			
			
			if ("mergeTmsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mergeTmsOrderId);
				
			}
			
			
			
			
			if ("isSecondMatch" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSecondMatch);
				
			}
			
			
			
			
			if ("matchPayPercent" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->matchPayPercent); 
				
			}
			
			
			
			
			if ("matchCashPercent" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->matchCashPercent); 
				
			}
			
			
			
			
			if ("matchPosPercent" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->matchPosPercent); 
				
			}
			
			
			
			
			if ("isExistCrm" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isExistCrm);
				
			}
			
			
			
			
			if ("isMatchArea" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isMatchArea);
				
			}
			
			
			
			
			if ("matchBizType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->matchBizType); 
				
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
		
		
		if($this->custId !== null) {
			
			$xfer += $output->writeFieldBegin('custId');
			$xfer += $output->writeString($this->custId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custType !== null) {
			
			$xfer += $output->writeFieldBegin('custType');
			$xfer += $output->writeI32($this->custType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infCust !== null) {
			
			$xfer += $output->writeFieldBegin('infCust');
			$xfer += $output->writeString($this->infCust);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infCustPointId !== null) {
			
			$xfer += $output->writeFieldBegin('infCustPointId');
			$xfer += $output->writeString($this->infCustPointId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infCustPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('infCustPointCode');
			$xfer += $output->writeString($this->infCustPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infCustPointName !== null) {
			
			$xfer += $output->writeFieldBegin('infCustPointName');
			$xfer += $output->writeString($this->infCustPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infCustPickupGoodsTime !== null) {
			
			$xfer += $output->writeFieldBegin('infCustPickupGoodsTime');
			$xfer += $output->writeString($this->infCustPickupGoodsTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infOrderOrginCode !== null) {
			
			$xfer += $output->writeFieldBegin('infOrderOrginCode');
			$xfer += $output->writeString($this->infOrderOrginCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infOrderDestinationCode !== null) {
			
			$xfer += $output->writeFieldBegin('infOrderDestinationCode');
			$xfer += $output->writeString($this->infOrderDestinationCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDeliveryBatch !== null) {
			
			$xfer += $output->writeFieldBegin('orderDeliveryBatch');
			$xfer += $output->writeI32($this->orderDeliveryBatch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateCode !== null) {
			
			$xfer += $output->writeFieldBegin('templateCode');
			$xfer += $output->writeString($this->templateCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickingCode !== null) {
			
			$xfer += $output->writeFieldBegin('pickingCode');
			$xfer += $output->writeString($this->pickingCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickingLevel !== null) {
			
			$xfer += $output->writeFieldBegin('pickingLevel');
			$xfer += $output->writeString($this->pickingLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destAccepter !== null) {
			
			$xfer += $output->writeFieldBegin('destAccepter');
			$xfer += $output->writeString($this->destAccepter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributeDeclareOrder !== null) {
			
			$xfer += $output->writeFieldBegin('distributeDeclareOrder');
			$xfer += $output->writeI32($this->distributeDeclareOrder);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalServiceLevel !== null) {
			
			$xfer += $output->writeFieldBegin('originalServiceLevel');
			$xfer += $output->writeDouble($this->originalServiceLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptManipulatMatchTime !== null) {
			
			$xfer += $output->writeFieldBegin('acceptManipulatMatchTime');
			$xfer += $output->writeI64($this->acceptManipulatMatchTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('matchFlag');
		$xfer += $output->writeBool($this->matchFlag);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->matchMemo !== null) {
			
			$xfer += $output->writeFieldBegin('matchMemo');
			$xfer += $output->writeString($this->matchMemo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custLevel !== null) {
			
			$xfer += $output->writeFieldBegin('custLevel');
			$xfer += $output->writeString($this->custLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isUseAlipay !== null) {
			
			$xfer += $output->writeFieldBegin('isUseAlipay');
			$xfer += $output->writeI32($this->isUseAlipay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAir !== null) {
			
			$xfer += $output->writeFieldBegin('isAir');
			$xfer += $output->writeI32($this->isAir);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custStats !== null) {
			
			$xfer += $output->writeFieldBegin('custStats');
			$xfer += $output->writeString($this->custStats);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCity !== null) {
			
			$xfer += $output->writeFieldBegin('custCity');
			$xfer += $output->writeString($this->custCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custRegion !== null) {
			
			$xfer += $output->writeFieldBegin('custRegion');
			$xfer += $output->writeString($this->custRegion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custTown !== null) {
			
			$xfer += $output->writeFieldBegin('custTown');
			$xfer += $output->writeString($this->custTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCod !== null) {
			
			$xfer += $output->writeFieldBegin('isCod');
			$xfer += $output->writeI32($this->isCod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTownReach !== null) {
			
			$xfer += $output->writeFieldBegin('isTownReach');
			$xfer += $output->writeI32($this->isTownReach);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ruleType !== null) {
			
			$xfer += $output->writeFieldBegin('ruleType');
			$xfer += $output->writeI32($this->ruleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->levelRate !== null) {
			
			$xfer += $output->writeFieldBegin('levelRate');
			$xfer += $output->writeDouble($this->levelRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->matchCityPercent !== null) {
			
			$xfer += $output->writeFieldBegin('matchCityPercent');
			$xfer += $output->writeDouble($this->matchCityPercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->matchRegionPercent !== null) {
			
			$xfer += $output->writeFieldBegin('matchRegionPercent');
			$xfer += $output->writeDouble($this->matchRegionPercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPos !== null) {
			
			$xfer += $output->writeFieldBegin('isPos');
			$xfer += $output->writeI32($this->isPos);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSecondMatchAppraise !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondMatchAppraise');
			$xfer += $output->writeI32($this->isSecondMatchAppraise);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isNightMatch');
		$xfer += $output->writeBool($this->isNightMatch);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->mergeCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('mergeCustCode');
			$xfer += $output->writeString($this->mergeCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mergeTmsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('mergeTmsOrderId');
			$xfer += $output->writeString($this->mergeTmsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isSecondMatch');
		$xfer += $output->writeBool($this->isSecondMatch);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->matchPayPercent !== null) {
			
			$xfer += $output->writeFieldBegin('matchPayPercent');
			$xfer += $output->writeI64($this->matchPayPercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->matchCashPercent !== null) {
			
			$xfer += $output->writeFieldBegin('matchCashPercent');
			$xfer += $output->writeI64($this->matchCashPercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->matchPosPercent !== null) {
			
			$xfer += $output->writeFieldBegin('matchPosPercent');
			$xfer += $output->writeI64($this->matchPosPercent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isExistCrm');
		$xfer += $output->writeBool($this->isExistCrm);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isMatchArea');
		$xfer += $output->writeBool($this->isMatchArea);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->matchBizType !== null) {
			
			$xfer += $output->writeFieldBegin('matchBizType');
			$xfer += $output->writeI32($this->matchBizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>