<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OspOutWmsPoBatchFModel {
	
	static $_TSPEC;
	public $batchId = null;
	public $batchNo = null;
	public $poNo = null;
	public $poType = null;
	public $vendorId = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $tradeModel = null;
	public $deliveryTime = null;
	public $estimateArriveTime = null;
	public $warehouse = null;
	public $warehouseType = null;
	public $product_List = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batchId'
			),
			2 => array(
			'var' => 'batchNo'
			),
			3 => array(
			'var' => 'poNo'
			),
			4 => array(
			'var' => 'poType'
			),
			5 => array(
			'var' => 'vendorId'
			),
			6 => array(
			'var' => 'vendorCode'
			),
			7 => array(
			'var' => 'vendorName'
			),
			8 => array(
			'var' => 'tradeModel'
			),
			9 => array(
			'var' => 'deliveryTime'
			),
			10 => array(
			'var' => 'estimateArriveTime'
			),
			11 => array(
			'var' => 'warehouse'
			),
			12 => array(
			'var' => 'warehouseType'
			),
			13 => array(
			'var' => 'product_List'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batchId'])){
				
				$this->batchId = $vals['batchId'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['poType'])){
				
				$this->poType = $vals['poType'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['tradeModel'])){
				
				$this->tradeModel = $vals['tradeModel'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['estimateArriveTime'])){
				
				$this->estimateArriveTime = $vals['estimateArriveTime'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['warehouseType'])){
				
				$this->warehouseType = $vals['warehouseType'];
			}
			
			
			if (isset($vals['product_List'])){
				
				$this->product_List = $vals['product_List'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OspOutWmsPoBatchFModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batchId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batchId); 
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("poType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poType);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("tradeModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeModel);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryTime);
				
			}
			
			
			
			
			if ("estimateArriveTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimateArriveTime);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("warehouseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseType);
				
			}
			
			
			
			
			if ("product_List" == $schemeField){
				
				$needSkip = false;
				
				$this->product_List = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sce\vlg\osp\wms\service\OspOutWmsPoBatchDxFModel();
						$elem0->read($input);
						
						$this->product_List[$_size0++] = $elem0;
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
		
		if($this->batchId !== null) {
			
			$xfer += $output->writeFieldBegin('batchId');
			$xfer += $output->writeI32($this->batchId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poType !== null) {
			
			$xfer += $output->writeFieldBegin('poType');
			$xfer += $output->writeString($this->poType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
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
		
		
		if($this->tradeModel !== null) {
			
			$xfer += $output->writeFieldBegin('tradeModel');
			$xfer += $output->writeString($this->tradeModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeI64($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimateArriveTime !== null) {
			
			$xfer += $output->writeFieldBegin('estimateArriveTime');
			$xfer += $output->writeI64($this->estimateArriveTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouseType !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseType');
			$xfer += $output->writeString($this->warehouseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('product_List');
		
		if (!is_array($this->product_List)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->product_List as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>