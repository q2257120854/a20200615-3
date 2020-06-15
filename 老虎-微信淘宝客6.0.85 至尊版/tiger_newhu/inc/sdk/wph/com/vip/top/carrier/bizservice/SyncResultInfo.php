<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class SyncResultInfo {
	
	static $_TSPEC;
	public $matchOrderType = null;
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
	public $deliverPointCode = null;
	public $custPrintName = null;
	public $buyerAddress = null;
	public $buyerCountryId = null;
	public $buyerState = null;
	public $buyerCity = null;
	public $buyerAreaId = null;
	public $buyTown = null;
	public $transportNo = null;
	public $orderSn = null;
	public $crmCustPointId = null;
	public $orderType = null;
	public $sendMatchControl = null;
	public $isSecondMatchAppraise = null;
	public $wareHouseArea = null;
	public $isPjDistribution = null;
	public $isPjGroup = null;
	public $subMailnoModel = null;
	public $matchBizType = null;
	public $ltOrderNo = null;
	public $exchangeRelationNo = null;
	public $backSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'matchOrderType'
			),
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
			'var' => 'deliverPointCode'
			),
			24 => array(
			'var' => 'custPrintName'
			),
			25 => array(
			'var' => 'buyerAddress'
			),
			26 => array(
			'var' => 'buyerCountryId'
			),
			27 => array(
			'var' => 'buyerState'
			),
			28 => array(
			'var' => 'buyerCity'
			),
			29 => array(
			'var' => 'buyerAreaId'
			),
			30 => array(
			'var' => 'buyTown'
			),
			31 => array(
			'var' => 'transportNo'
			),
			32 => array(
			'var' => 'orderSn'
			),
			33 => array(
			'var' => 'crmCustPointId'
			),
			34 => array(
			'var' => 'orderType'
			),
			35 => array(
			'var' => 'sendMatchControl'
			),
			36 => array(
			'var' => 'isSecondMatchAppraise'
			),
			37 => array(
			'var' => 'wareHouseArea'
			),
			38 => array(
			'var' => 'isPjDistribution'
			),
			39 => array(
			'var' => 'isPjGroup'
			),
			40 => array(
			'var' => 'subMailnoModel'
			),
			41 => array(
			'var' => 'matchBizType'
			),
			42 => array(
			'var' => 'ltOrderNo'
			),
			43 => array(
			'var' => 'exchangeRelationNo'
			),
			44 => array(
			'var' => 'backSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['matchOrderType'])){
				
				$this->matchOrderType = $vals['matchOrderType'];
			}
			
			
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
			
			
			if (isset($vals['deliverPointCode'])){
				
				$this->deliverPointCode = $vals['deliverPointCode'];
			}
			
			
			if (isset($vals['custPrintName'])){
				
				$this->custPrintName = $vals['custPrintName'];
			}
			
			
			if (isset($vals['buyerAddress'])){
				
				$this->buyerAddress = $vals['buyerAddress'];
			}
			
			
			if (isset($vals['buyerCountryId'])){
				
				$this->buyerCountryId = $vals['buyerCountryId'];
			}
			
			
			if (isset($vals['buyerState'])){
				
				$this->buyerState = $vals['buyerState'];
			}
			
			
			if (isset($vals['buyerCity'])){
				
				$this->buyerCity = $vals['buyerCity'];
			}
			
			
			if (isset($vals['buyerAreaId'])){
				
				$this->buyerAreaId = $vals['buyerAreaId'];
			}
			
			
			if (isset($vals['buyTown'])){
				
				$this->buyTown = $vals['buyTown'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['crmCustPointId'])){
				
				$this->crmCustPointId = $vals['crmCustPointId'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['sendMatchControl'])){
				
				$this->sendMatchControl = $vals['sendMatchControl'];
			}
			
			
			if (isset($vals['isSecondMatchAppraise'])){
				
				$this->isSecondMatchAppraise = $vals['isSecondMatchAppraise'];
			}
			
			
			if (isset($vals['wareHouseArea'])){
				
				$this->wareHouseArea = $vals['wareHouseArea'];
			}
			
			
			if (isset($vals['isPjDistribution'])){
				
				$this->isPjDistribution = $vals['isPjDistribution'];
			}
			
			
			if (isset($vals['isPjGroup'])){
				
				$this->isPjGroup = $vals['isPjGroup'];
			}
			
			
			if (isset($vals['subMailnoModel'])){
				
				$this->subMailnoModel = $vals['subMailnoModel'];
			}
			
			
			if (isset($vals['matchBizType'])){
				
				$this->matchBizType = $vals['matchBizType'];
			}
			
			
			if (isset($vals['ltOrderNo'])){
				
				$this->ltOrderNo = $vals['ltOrderNo'];
			}
			
			
			if (isset($vals['exchangeRelationNo'])){
				
				$this->exchangeRelationNo = $vals['exchangeRelationNo'];
			}
			
			
			if (isset($vals['backSn'])){
				
				$this->backSn = $vals['backSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncResultInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("matchOrderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->matchOrderType); 
				
			}
			
			
			
			
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
			
			
			
			
			if ("deliverPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverPointCode);
				
			}
			
			
			
			
			if ("custPrintName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custPrintName);
				
			}
			
			
			
			
			if ("buyerAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddress);
				
			}
			
			
			
			
			if ("buyerCountryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCountryId);
				
			}
			
			
			
			
			if ("buyerState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerState);
				
			}
			
			
			
			
			if ("buyerCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCity);
				
			}
			
			
			
			
			if ("buyerAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAreaId);
				
			}
			
			
			
			
			if ("buyTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyTown);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("crmCustPointId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->crmCustPointId);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("sendMatchControl" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sendMatchControl); 
				
			}
			
			
			
			
			if ("isSecondMatchAppraise" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSecondMatchAppraise); 
				
			}
			
			
			
			
			if ("wareHouseArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wareHouseArea);
				
			}
			
			
			
			
			if ("isPjDistribution" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPjDistribution); 
				
			}
			
			
			
			
			if ("isPjGroup" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPjGroup); 
				
			}
			
			
			
			
			if ("subMailnoModel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->subMailnoModel); 
				
			}
			
			
			
			
			if ("matchBizType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->matchBizType); 
				
			}
			
			
			
			
			if ("ltOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ltOrderNo);
				
			}
			
			
			
			
			if ("exchangeRelationNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeRelationNo);
				
			}
			
			
			
			
			if ("backSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backSn);
				
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
		
		if($this->matchOrderType !== null) {
			
			$xfer += $output->writeFieldBegin('matchOrderType');
			$xfer += $output->writeI32($this->matchOrderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->deliverPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('deliverPointCode');
			$xfer += $output->writeString($this->deliverPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custPrintName !== null) {
			
			$xfer += $output->writeFieldBegin('custPrintName');
			$xfer += $output->writeString($this->custPrintName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddress !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddress');
			$xfer += $output->writeString($this->buyerAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCountryId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCountryId');
			$xfer += $output->writeString($this->buyerCountryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerState !== null) {
			
			$xfer += $output->writeFieldBegin('buyerState');
			$xfer += $output->writeString($this->buyerState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCity !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCity');
			$xfer += $output->writeString($this->buyerCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAreaId');
			$xfer += $output->writeString($this->buyerAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyTown !== null) {
			
			$xfer += $output->writeFieldBegin('buyTown');
			$xfer += $output->writeString($this->buyTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crmCustPointId !== null) {
			
			$xfer += $output->writeFieldBegin('crmCustPointId');
			$xfer += $output->writeString($this->crmCustPointId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sendMatchControl !== null) {
			
			$xfer += $output->writeFieldBegin('sendMatchControl');
			$xfer += $output->writeI32($this->sendMatchControl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSecondMatchAppraise !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondMatchAppraise');
			$xfer += $output->writeI32($this->isSecondMatchAppraise);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wareHouseArea !== null) {
			
			$xfer += $output->writeFieldBegin('wareHouseArea');
			$xfer += $output->writeString($this->wareHouseArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPjDistribution !== null) {
			
			$xfer += $output->writeFieldBegin('isPjDistribution');
			$xfer += $output->writeI32($this->isPjDistribution);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPjGroup !== null) {
			
			$xfer += $output->writeFieldBegin('isPjGroup');
			$xfer += $output->writeI32($this->isPjGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subMailnoModel !== null) {
			
			$xfer += $output->writeFieldBegin('subMailnoModel');
			$xfer += $output->writeI32($this->subMailnoModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->matchBizType !== null) {
			
			$xfer += $output->writeFieldBegin('matchBizType');
			$xfer += $output->writeI32($this->matchBizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ltOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('ltOrderNo');
			$xfer += $output->writeString($this->ltOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeRelationNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeRelationNo');
			$xfer += $output->writeString($this->exchangeRelationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backSn !== null) {
			
			$xfer += $output->writeFieldBegin('backSn');
			$xfer += $output->writeString($this->backSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>