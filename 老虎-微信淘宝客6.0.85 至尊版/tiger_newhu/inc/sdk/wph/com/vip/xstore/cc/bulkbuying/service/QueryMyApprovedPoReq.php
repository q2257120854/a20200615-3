<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class QueryMyApprovedPoReq {
	
	static $_TSPEC;
	public $dealType = null;
	public $currentUserId = null;
	public $queryNo = null;
	public $queryType = null;
	public $companyCode = null;
	public $deliveryStatus = null;
	public $stockProps = null;
	public $deliveryWarehouse = null;
	public $createTimeStart = null;
	public $buyerId = null;
	public $createTimeEnd = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $purchaseType = null;
	public $pageSize = null;
	public $page = null;
	public $goodsType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'dealType'
			),
			2 => array(
			'var' => 'currentUserId'
			),
			3 => array(
			'var' => 'queryNo'
			),
			4 => array(
			'var' => 'queryType'
			),
			5 => array(
			'var' => 'companyCode'
			),
			6 => array(
			'var' => 'deliveryStatus'
			),
			7 => array(
			'var' => 'stockProps'
			),
			8 => array(
			'var' => 'deliveryWarehouse'
			),
			9 => array(
			'var' => 'createTimeStart'
			),
			10 => array(
			'var' => 'buyerId'
			),
			11 => array(
			'var' => 'createTimeEnd'
			),
			12 => array(
			'var' => 'vendorCode'
			),
			13 => array(
			'var' => 'vendorName'
			),
			14 => array(
			'var' => 'purchaseType'
			),
			15 => array(
			'var' => 'pageSize'
			),
			16 => array(
			'var' => 'page'
			),
			17 => array(
			'var' => 'goodsType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dealType'])){
				
				$this->dealType = $vals['dealType'];
			}
			
			
			if (isset($vals['currentUserId'])){
				
				$this->currentUserId = $vals['currentUserId'];
			}
			
			
			if (isset($vals['queryNo'])){
				
				$this->queryNo = $vals['queryNo'];
			}
			
			
			if (isset($vals['queryType'])){
				
				$this->queryType = $vals['queryType'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['deliveryStatus'])){
				
				$this->deliveryStatus = $vals['deliveryStatus'];
			}
			
			
			if (isset($vals['stockProps'])){
				
				$this->stockProps = $vals['stockProps'];
			}
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['createTimeStart'])){
				
				$this->createTimeStart = $vals['createTimeStart'];
			}
			
			
			if (isset($vals['buyerId'])){
				
				$this->buyerId = $vals['buyerId'];
			}
			
			
			if (isset($vals['createTimeEnd'])){
				
				$this->createTimeEnd = $vals['createTimeEnd'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['purchaseType'])){
				
				$this->purchaseType = $vals['purchaseType'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryMyApprovedPoReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dealType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->dealType); 
				
			}
			
			
			
			
			if ("currentUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currentUserId);
				
			}
			
			
			
			
			if ("queryNo" == $schemeField){
				
				$needSkip = false;
				
				$this->queryNo = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->queryNo[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("queryType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->queryType); 
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("deliveryStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->deliveryStatus); 
				
			}
			
			
			
			
			if ("stockProps" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stockProps); 
				
			}
			
			
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("createTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTimeStart);
				
			}
			
			
			
			
			if ("buyerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerId);
				
			}
			
			
			
			
			if ("createTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTimeEnd);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("purchaseType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->purchaseType); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->goodsType); 
				
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
		
		$xfer += $output->writeFieldBegin('dealType');
		$xfer += $output->writeByte($this->dealType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('currentUserId');
		$xfer += $output->writeString($this->currentUserId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('queryNo');
		
		if (!is_array($this->queryNo)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->queryNo as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('queryType');
		$xfer += $output->writeByte($this->queryType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryStatus !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryStatus');
			$xfer += $output->writeByte($this->deliveryStatus);
			
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
		
		
		if($this->createTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeStart');
			$xfer += $output->writeI64($this->createTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerId');
			$xfer += $output->writeString($this->buyerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeEnd');
			$xfer += $output->writeI64($this->createTimeEnd);
			
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
		
		
		if($this->purchaseType !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseType');
			$xfer += $output->writeByte($this->purchaseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeByte($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>