<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\inventory;

class InventoryFlow {
	
	static $_TSPEC;
	public $transactionId = null;
	public $actionType = null;
	public $warehouseCode = null;
	public $barcode = null;
	public $purchaseNo = null;
	public $stockProps = null;
	public $disabilityLevel = null;
	public $salableState = null;
	public $quantity = null;
	public $actionTime = null;
	public $billNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transactionId'
			),
			2 => array(
			'var' => 'actionType'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'purchaseNo'
			),
			6 => array(
			'var' => 'stockProps'
			),
			7 => array(
			'var' => 'disabilityLevel'
			),
			8 => array(
			'var' => 'salableState'
			),
			9 => array(
			'var' => 'quantity'
			),
			10 => array(
			'var' => 'actionTime'
			),
			11 => array(
			'var' => 'billNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
			if (isset($vals['actionType'])){
				
				$this->actionType = $vals['actionType'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['stockProps'])){
				
				$this->stockProps = $vals['stockProps'];
			}
			
			
			if (isset($vals['disabilityLevel'])){
				
				$this->disabilityLevel = $vals['disabilityLevel'];
			}
			
			
			if (isset($vals['salableState'])){
				
				$this->salableState = $vals['salableState'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['actionTime'])){
				
				$this->actionTime = $vals['actionTime'];
			}
			
			
			if (isset($vals['billNo'])){
				
				$this->billNo = $vals['billNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryFlow';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transactionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionId);
				
			}
			
			
			
			
			if ("actionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionType);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("stockProps" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stockProps);
				
			}
			
			
			
			
			if ("disabilityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->disabilityLevel);
				
			}
			
			
			
			
			if ("salableState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->salableState); 
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("actionTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionTime);
				
			}
			
			
			
			
			if ("billNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNo);
				
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
		
		$xfer += $output->writeFieldBegin('transactionId');
		$xfer += $output->writeString($this->transactionId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actionType');
		$xfer += $output->writeString($this->actionType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('stockProps');
		$xfer += $output->writeString($this->stockProps);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('disabilityLevel');
		$xfer += $output->writeString($this->disabilityLevel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('salableState');
		$xfer += $output->writeI32($this->salableState);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actionTime');
		$xfer += $output->writeString($this->actionTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->billNo !== null) {
			
			$xfer += $output->writeFieldBegin('billNo');
			$xfer += $output->writeString($this->billNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>