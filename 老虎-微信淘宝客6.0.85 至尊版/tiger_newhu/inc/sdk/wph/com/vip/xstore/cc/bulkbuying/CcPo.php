<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class CcPo {
	
	static $_TSPEC;
	public $companyCode = null;
	public $purchaseNo = null;
	public $purchaseType = null;
	public $orderSn = null;
	public $buyerNo = null;
	public $buyerId = null;
	public $buyerName = null;
	public $stockProps = null;
	public $deliveryWarehouse = null;
	public $disabilityLevel = null;
	public $deptId = null;
	public $deptName = null;
	public $deliveryTime = null;
	public $createTime = null;
	public $updateTime = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $approvalTime = null;
	public $currency = null;
	public $bizLinkerId = null;
	public $bizLinkerName = null;
	public $bizLinkerDeptId = null;
	public $bizLinkerDeptName = null;
	public $totalDeliveredLineQty = null;
	public $cooperationMode = null;
	public $receiveWarehouse = null;
	public $followDeptId = null;
	public $followDeptName = null;
	public $settleSegment = null;
	public $partyCode = null;
	public $receivingType = null;
	public $settlementMode = null;
	public $deduction = null;
	public $approvalStatusDesc = null;
	public $conversionCnyRate = null;
	public $approvalStatus = null;
	public $distributedToWop = null;
	public $is3PL = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'companyCode'
			),
			2 => array(
			'var' => 'purchaseNo'
			),
			3 => array(
			'var' => 'purchaseType'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'buyerNo'
			),
			6 => array(
			'var' => 'buyerId'
			),
			7 => array(
			'var' => 'buyerName'
			),
			8 => array(
			'var' => 'stockProps'
			),
			9 => array(
			'var' => 'deliveryWarehouse'
			),
			10 => array(
			'var' => 'disabilityLevel'
			),
			11 => array(
			'var' => 'deptId'
			),
			12 => array(
			'var' => 'deptName'
			),
			13 => array(
			'var' => 'deliveryTime'
			),
			14 => array(
			'var' => 'createTime'
			),
			15 => array(
			'var' => 'updateTime'
			),
			16 => array(
			'var' => 'vendorCode'
			),
			17 => array(
			'var' => 'vendorName'
			),
			18 => array(
			'var' => 'approvalTime'
			),
			19 => array(
			'var' => 'currency'
			),
			20 => array(
			'var' => 'bizLinkerId'
			),
			21 => array(
			'var' => 'bizLinkerName'
			),
			22 => array(
			'var' => 'bizLinkerDeptId'
			),
			23 => array(
			'var' => 'bizLinkerDeptName'
			),
			24 => array(
			'var' => 'totalDeliveredLineQty'
			),
			25 => array(
			'var' => 'cooperationMode'
			),
			26 => array(
			'var' => 'receiveWarehouse'
			),
			27 => array(
			'var' => 'followDeptId'
			),
			28 => array(
			'var' => 'followDeptName'
			),
			29 => array(
			'var' => 'settleSegment'
			),
			30 => array(
			'var' => 'partyCode'
			),
			31 => array(
			'var' => 'receivingType'
			),
			32 => array(
			'var' => 'settlementMode'
			),
			33 => array(
			'var' => 'deduction'
			),
			34 => array(
			'var' => 'approvalStatusDesc'
			),
			35 => array(
			'var' => 'conversionCnyRate'
			),
			36 => array(
			'var' => 'approvalStatus'
			),
			37 => array(
			'var' => 'distributedToWop'
			),
			38 => array(
			'var' => 'is3PL'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['purchaseType'])){
				
				$this->purchaseType = $vals['purchaseType'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['buyerNo'])){
				
				$this->buyerNo = $vals['buyerNo'];
			}
			
			
			if (isset($vals['buyerId'])){
				
				$this->buyerId = $vals['buyerId'];
			}
			
			
			if (isset($vals['buyerName'])){
				
				$this->buyerName = $vals['buyerName'];
			}
			
			
			if (isset($vals['stockProps'])){
				
				$this->stockProps = $vals['stockProps'];
			}
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['disabilityLevel'])){
				
				$this->disabilityLevel = $vals['disabilityLevel'];
			}
			
			
			if (isset($vals['deptId'])){
				
				$this->deptId = $vals['deptId'];
			}
			
			
			if (isset($vals['deptName'])){
				
				$this->deptName = $vals['deptName'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['approvalTime'])){
				
				$this->approvalTime = $vals['approvalTime'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['bizLinkerId'])){
				
				$this->bizLinkerId = $vals['bizLinkerId'];
			}
			
			
			if (isset($vals['bizLinkerName'])){
				
				$this->bizLinkerName = $vals['bizLinkerName'];
			}
			
			
			if (isset($vals['bizLinkerDeptId'])){
				
				$this->bizLinkerDeptId = $vals['bizLinkerDeptId'];
			}
			
			
			if (isset($vals['bizLinkerDeptName'])){
				
				$this->bizLinkerDeptName = $vals['bizLinkerDeptName'];
			}
			
			
			if (isset($vals['totalDeliveredLineQty'])){
				
				$this->totalDeliveredLineQty = $vals['totalDeliveredLineQty'];
			}
			
			
			if (isset($vals['cooperationMode'])){
				
				$this->cooperationMode = $vals['cooperationMode'];
			}
			
			
			if (isset($vals['receiveWarehouse'])){
				
				$this->receiveWarehouse = $vals['receiveWarehouse'];
			}
			
			
			if (isset($vals['followDeptId'])){
				
				$this->followDeptId = $vals['followDeptId'];
			}
			
			
			if (isset($vals['followDeptName'])){
				
				$this->followDeptName = $vals['followDeptName'];
			}
			
			
			if (isset($vals['settleSegment'])){
				
				$this->settleSegment = $vals['settleSegment'];
			}
			
			
			if (isset($vals['partyCode'])){
				
				$this->partyCode = $vals['partyCode'];
			}
			
			
			if (isset($vals['receivingType'])){
				
				$this->receivingType = $vals['receivingType'];
			}
			
			
			if (isset($vals['settlementMode'])){
				
				$this->settlementMode = $vals['settlementMode'];
			}
			
			
			if (isset($vals['deduction'])){
				
				$this->deduction = $vals['deduction'];
			}
			
			
			if (isset($vals['approvalStatusDesc'])){
				
				$this->approvalStatusDesc = $vals['approvalStatusDesc'];
			}
			
			
			if (isset($vals['conversionCnyRate'])){
				
				$this->conversionCnyRate = $vals['conversionCnyRate'];
			}
			
			
			if (isset($vals['approvalStatus'])){
				
				$this->approvalStatus = $vals['approvalStatus'];
			}
			
			
			if (isset($vals['distributedToWop'])){
				
				$this->distributedToWop = $vals['distributedToWop'];
			}
			
			
			if (isset($vals['is3PL'])){
				
				$this->is3PL = $vals['is3PL'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CcPo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("purchaseType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->purchaseType); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("buyerNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerNo);
				
			}
			
			
			
			
			if ("buyerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerId);
				
			}
			
			
			
			
			if ("buyerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerName);
				
			}
			
			
			
			
			if ("stockProps" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stockProps); 
				
			}
			
			
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("disabilityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->disabilityLevel);
				
			}
			
			
			
			
			if ("deptId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deptId);
				
			}
			
			
			
			
			if ("deptName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deptName);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryTime);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("approvalTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->approvalTime);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("bizLinkerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerId);
				
			}
			
			
			
			
			if ("bizLinkerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerName);
				
			}
			
			
			
			
			if ("bizLinkerDeptId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerDeptId);
				
			}
			
			
			
			
			if ("bizLinkerDeptName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizLinkerDeptName);
				
			}
			
			
			
			
			if ("totalDeliveredLineQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalDeliveredLineQty); 
				
			}
			
			
			
			
			if ("cooperationMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperationMode);
				
			}
			
			
			
			
			if ("receiveWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiveWarehouse);
				
			}
			
			
			
			
			if ("followDeptId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->followDeptId);
				
			}
			
			
			
			
			if ("followDeptName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->followDeptName);
				
			}
			
			
			
			
			if ("settleSegment" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleSegment);
				
			}
			
			
			
			
			if ("partyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->partyCode);
				
			}
			
			
			
			
			if ("receivingType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->receivingType); 
				
			}
			
			
			
			
			if ("settlementMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->settlementMode); 
				
			}
			
			
			
			
			if ("deduction" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->deduction);
				
			}
			
			
			
			
			if ("approvalStatusDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalStatusDesc);
				
			}
			
			
			
			
			if ("conversionCnyRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->conversionCnyRate);
				
			}
			
			
			
			
			if ("approvalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->approvalStatus); 
				
			}
			
			
			
			
			if ("distributedToWop" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->distributedToWop);
				
			}
			
			
			
			
			if ("is3PL" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is3PL);
				
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
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseType !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseType');
			$xfer += $output->writeByte($this->purchaseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerNo !== null) {
			
			$xfer += $output->writeFieldBegin('buyerNo');
			$xfer += $output->writeString($this->buyerNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerId');
			$xfer += $output->writeString($this->buyerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerName');
			$xfer += $output->writeString($this->buyerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stockProps !== null) {
			
			$xfer += $output->writeFieldBegin('stockProps');
			$xfer += $output->writeByte($this->stockProps);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouse');
			$xfer += $output->writeString($this->deliveryWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->disabilityLevel !== null) {
			
			$xfer += $output->writeFieldBegin('disabilityLevel');
			$xfer += $output->writeString($this->disabilityLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deptId !== null) {
			
			$xfer += $output->writeFieldBegin('deptId');
			$xfer += $output->writeString($this->deptId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deptName !== null) {
			
			$xfer += $output->writeFieldBegin('deptName');
			$xfer += $output->writeString($this->deptName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeI64($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
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
		
		
		if($this->approvalTime !== null) {
			
			$xfer += $output->writeFieldBegin('approvalTime');
			$xfer += $output->writeI64($this->approvalTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerId !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerId');
			$xfer += $output->writeString($this->bizLinkerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerName !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerName');
			$xfer += $output->writeString($this->bizLinkerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerDeptId !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerDeptId');
			$xfer += $output->writeString($this->bizLinkerDeptId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizLinkerDeptName !== null) {
			
			$xfer += $output->writeFieldBegin('bizLinkerDeptName');
			$xfer += $output->writeString($this->bizLinkerDeptName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalDeliveredLineQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalDeliveredLineQty');
			$xfer += $output->writeI32($this->totalDeliveredLineQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationMode !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationMode');
			$xfer += $output->writeString($this->cooperationMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('receiveWarehouse');
			$xfer += $output->writeString($this->receiveWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->followDeptId !== null) {
			
			$xfer += $output->writeFieldBegin('followDeptId');
			$xfer += $output->writeString($this->followDeptId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->followDeptName !== null) {
			
			$xfer += $output->writeFieldBegin('followDeptName');
			$xfer += $output->writeString($this->followDeptName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settleSegment !== null) {
			
			$xfer += $output->writeFieldBegin('settleSegment');
			$xfer += $output->writeString($this->settleSegment);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partyCode !== null) {
			
			$xfer += $output->writeFieldBegin('partyCode');
			$xfer += $output->writeString($this->partyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receivingType !== null) {
			
			$xfer += $output->writeFieldBegin('receivingType');
			$xfer += $output->writeByte($this->receivingType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementMode !== null) {
			
			$xfer += $output->writeFieldBegin('settlementMode');
			$xfer += $output->writeByte($this->settlementMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deduction !== null) {
			
			$xfer += $output->writeFieldBegin('deduction');
			$xfer += $output->writeDouble($this->deduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalStatusDesc !== null) {
			
			$xfer += $output->writeFieldBegin('approvalStatusDesc');
			$xfer += $output->writeString($this->approvalStatusDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conversionCnyRate !== null) {
			
			$xfer += $output->writeFieldBegin('conversionCnyRate');
			$xfer += $output->writeDouble($this->conversionCnyRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('approvalStatus');
			$xfer += $output->writeByte($this->approvalStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('distributedToWop');
		$xfer += $output->writeBool($this->distributedToWop);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is3PL');
		$xfer += $output->writeBool($this->is3PL);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>