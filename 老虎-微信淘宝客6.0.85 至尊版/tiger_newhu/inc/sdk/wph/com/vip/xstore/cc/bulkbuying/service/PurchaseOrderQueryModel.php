<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseOrderQueryModel {
	
	static $_TSPEC;
	public $queryNo = null;
	public $queryType = null;
	public $companyCode = null;
	public $visibility = null;
	public $approvalStatus = null;
	public $deliveryStatus = null;
	public $stockProps = null;
	public $deliveryWarehouse = null;
	public $createTimeStart = null;
	public $pageSize = null;
	public $page = null;
	public $buyerId = null;
	public $createTimeEnd = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $purchaseType = null;
	public $approvalRole = null;
	public $barcodeType = null;
	public $barcodes = null;
	public $goodsType = null;
	public $source = null;
	public $cooperationMode = null;
	public $goodsChannel = null;
	public $receivingType = null;
	public $receiveWarehouseCode = null;
	public $settlementMode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryNo'
			),
			2 => array(
			'var' => 'queryType'
			),
			3 => array(
			'var' => 'companyCode'
			),
			4 => array(
			'var' => 'visibility'
			),
			5 => array(
			'var' => 'approvalStatus'
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
			'var' => 'pageSize'
			),
			11 => array(
			'var' => 'page'
			),
			12 => array(
			'var' => 'buyerId'
			),
			13 => array(
			'var' => 'createTimeEnd'
			),
			14 => array(
			'var' => 'vendorCode'
			),
			15 => array(
			'var' => 'vendorName'
			),
			16 => array(
			'var' => 'purchaseType'
			),
			17 => array(
			'var' => 'approvalRole'
			),
			18 => array(
			'var' => 'barcodeType'
			),
			19 => array(
			'var' => 'barcodes'
			),
			20 => array(
			'var' => 'goodsType'
			),
			21 => array(
			'var' => 'source'
			),
			22 => array(
			'var' => 'cooperationMode'
			),
			23 => array(
			'var' => 'goodsChannel'
			),
			24 => array(
			'var' => 'receivingType'
			),
			25 => array(
			'var' => 'receiveWarehouseCode'
			),
			26 => array(
			'var' => 'settlementMode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryNo'])){
				
				$this->queryNo = $vals['queryNo'];
			}
			
			
			if (isset($vals['queryType'])){
				
				$this->queryType = $vals['queryType'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['visibility'])){
				
				$this->visibility = $vals['visibility'];
			}
			
			
			if (isset($vals['approvalStatus'])){
				
				$this->approvalStatus = $vals['approvalStatus'];
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
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
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
			
			
			if (isset($vals['approvalRole'])){
				
				$this->approvalRole = $vals['approvalRole'];
			}
			
			
			if (isset($vals['barcodeType'])){
				
				$this->barcodeType = $vals['barcodeType'];
			}
			
			
			if (isset($vals['barcodes'])){
				
				$this->barcodes = $vals['barcodes'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['cooperationMode'])){
				
				$this->cooperationMode = $vals['cooperationMode'];
			}
			
			
			if (isset($vals['goodsChannel'])){
				
				$this->goodsChannel = $vals['goodsChannel'];
			}
			
			
			if (isset($vals['receivingType'])){
				
				$this->receivingType = $vals['receivingType'];
			}
			
			
			if (isset($vals['receiveWarehouseCode'])){
				
				$this->receiveWarehouseCode = $vals['receiveWarehouseCode'];
			}
			
			
			if (isset($vals['settlementMode'])){
				
				$this->settlementMode = $vals['settlementMode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderQueryModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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
				$input->readI64($this->queryType); 
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("visibility" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->visibility); 
				
			}
			
			
			
			
			if ("approvalStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->approvalStatus); 
				
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
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
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
				$input->readString($this->purchaseType);
				
			}
			
			
			
			
			if ("approvalRole" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalRole);
				
			}
			
			
			
			
			if ("barcodeType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->barcodeType); 
				
			}
			
			
			
			
			if ("barcodes" == $schemeField){
				
				$needSkip = false;
				
				$this->barcodes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->barcodes[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->goodsType); 
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("cooperationMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cooperationMode); 
				
			}
			
			
			
			
			if ("goodsChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsChannel);
				
			}
			
			
			
			
			if ("receivingType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->receivingType); 
				
			}
			
			
			
			
			if ("receiveWarehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiveWarehouseCode);
				
			}
			
			
			
			
			if ("settlementMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->settlementMode); 
				
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
		$xfer += $output->writeI64($this->queryType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('visibility');
		$xfer += $output->writeI64($this->visibility);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->approvalStatus !== null) {
			
			$xfer += $output->writeFieldBegin('approvalStatus');
			$xfer += $output->writeByte($this->approvalStatus);
			
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
			$xfer += $output->writeString($this->purchaseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalRole !== null) {
			
			$xfer += $output->writeFieldBegin('approvalRole');
			$xfer += $output->writeString($this->approvalRole);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcodeType !== null) {
			
			$xfer += $output->writeFieldBegin('barcodeType');
			$xfer += $output->writeByte($this->barcodeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcodes !== null) {
			
			$xfer += $output->writeFieldBegin('barcodes');
			
			if (!is_array($this->barcodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->barcodes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsType !== null) {
			
			$xfer += $output->writeFieldBegin('goodsType');
			$xfer += $output->writeByte($this->goodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationMode !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationMode');
			$xfer += $output->writeByte($this->cooperationMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsChannel !== null) {
			
			$xfer += $output->writeFieldBegin('goodsChannel');
			$xfer += $output->writeString($this->goodsChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receivingType !== null) {
			
			$xfer += $output->writeFieldBegin('receivingType');
			$xfer += $output->writeByte($this->receivingType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveWarehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('receiveWarehouseCode');
			$xfer += $output->writeString($this->receiveWarehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementMode !== null) {
			
			$xfer += $output->writeFieldBegin('settlementMode');
			$xfer += $output->writeByte($this->settlementMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>