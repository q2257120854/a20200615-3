<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseOrderUpdateRequest {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $uploadedFilePath = null;
	public $buyerGroupCode = null;
	public $buyerGroupName = null;
	public $remark = null;
	public $goodsType = null;
	public $distributableGoodsTime = null;
	public $estimateArrivalTime = null;
	public $purchaseLabel = null;
	public $skipFlag = null;
	public $settlementMode = null;
	public $deduction = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'uploadedFilePath'
			),
			3 => array(
			'var' => 'buyerGroupCode'
			),
			4 => array(
			'var' => 'buyerGroupName'
			),
			5 => array(
			'var' => 'remark'
			),
			6 => array(
			'var' => 'goodsType'
			),
			7 => array(
			'var' => 'distributableGoodsTime'
			),
			8 => array(
			'var' => 'estimateArrivalTime'
			),
			9 => array(
			'var' => 'purchaseLabel'
			),
			10 => array(
			'var' => 'skipFlag'
			),
			11 => array(
			'var' => 'settlementMode'
			),
			12 => array(
			'var' => 'deduction'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['uploadedFilePath'])){
				
				$this->uploadedFilePath = $vals['uploadedFilePath'];
			}
			
			
			if (isset($vals['buyerGroupCode'])){
				
				$this->buyerGroupCode = $vals['buyerGroupCode'];
			}
			
			
			if (isset($vals['buyerGroupName'])){
				
				$this->buyerGroupName = $vals['buyerGroupName'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['distributableGoodsTime'])){
				
				$this->distributableGoodsTime = $vals['distributableGoodsTime'];
			}
			
			
			if (isset($vals['estimateArrivalTime'])){
				
				$this->estimateArrivalTime = $vals['estimateArrivalTime'];
			}
			
			
			if (isset($vals['purchaseLabel'])){
				
				$this->purchaseLabel = $vals['purchaseLabel'];
			}
			
			
			if (isset($vals['skipFlag'])){
				
				$this->skipFlag = $vals['skipFlag'];
			}
			
			
			if (isset($vals['settlementMode'])){
				
				$this->settlementMode = $vals['settlementMode'];
			}
			
			
			if (isset($vals['deduction'])){
				
				$this->deduction = $vals['deduction'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderUpdateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("uploadedFilePath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uploadedFilePath);
				
			}
			
			
			
			
			if ("buyerGroupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerGroupCode);
				
			}
			
			
			
			
			if ("buyerGroupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerGroupName);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->goodsType); 
				
			}
			
			
			
			
			if ("distributableGoodsTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->distributableGoodsTime);
				
			}
			
			
			
			
			if ("estimateArrivalTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimateArrivalTime);
				
			}
			
			
			
			
			if ("purchaseLabel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseLabel);
				
			}
			
			
			
			
			if ("skipFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->skipFlag); 
				
			}
			
			
			
			
			if ("settlementMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->settlementMode); 
				
			}
			
			
			
			
			if ("deduction" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->deduction);
				
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
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uploadedFilePath !== null) {
			
			$xfer += $output->writeFieldBegin('uploadedFilePath');
			$xfer += $output->writeString($this->uploadedFilePath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerGroupCode !== null) {
			
			$xfer += $output->writeFieldBegin('buyerGroupCode');
			$xfer += $output->writeString($this->buyerGroupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerGroupName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerGroupName');
			$xfer += $output->writeString($this->buyerGroupName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeByte($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distributableGoodsTime !== null) {
			
			$xfer += $output->writeFieldBegin('distributableGoodsTime');
			$xfer += $output->writeI64($this->distributableGoodsTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimateArrivalTime !== null) {
			
			$xfer += $output->writeFieldBegin('estimateArrivalTime');
			$xfer += $output->writeI64($this->estimateArrivalTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseLabel !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseLabel');
			$xfer += $output->writeString($this->purchaseLabel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skipFlag !== null) {
			
			$xfer += $output->writeFieldBegin('skipFlag');
			$xfer += $output->writeByte($this->skipFlag);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>