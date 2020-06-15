<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\delivery;

class ReceiptInfo {
	
	static $_TSPEC;
	public $id = null;
	public $transactionId = null;
	public $vendorId = null;
	public $receiptNo = null;
	public $totalShippingQty = null;
	public $totalShipContCount = null;
	public $totalInbQty = null;
	public $receiveCompleteTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'transactionId'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'receiptNo'
			),
			5 => array(
			'var' => 'totalShippingQty'
			),
			6 => array(
			'var' => 'totalShipContCount'
			),
			7 => array(
			'var' => 'totalInbQty'
			),
			8 => array(
			'var' => 'receiveCompleteTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['receiptNo'])){
				
				$this->receiptNo = $vals['receiptNo'];
			}
			
			
			if (isset($vals['totalShippingQty'])){
				
				$this->totalShippingQty = $vals['totalShippingQty'];
			}
			
			
			if (isset($vals['totalShipContCount'])){
				
				$this->totalShipContCount = $vals['totalShipContCount'];
			}
			
			
			if (isset($vals['totalInbQty'])){
				
				$this->totalInbQty = $vals['totalInbQty'];
			}
			
			
			if (isset($vals['receiveCompleteTime'])){
				
				$this->receiveCompleteTime = $vals['receiveCompleteTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceiptInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("transactionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionId);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("receiptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiptNo);
				
			}
			
			
			
			
			if ("totalShippingQty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalShippingQty);
				
			}
			
			
			
			
			if ("totalShipContCount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalShipContCount);
				
			}
			
			
			
			
			if ("totalInbQty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalInbQty);
				
			}
			
			
			
			
			if ("receiveCompleteTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->receiveCompleteTime);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transactionId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionId');
			$xfer += $output->writeString($this->transactionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiptNo !== null) {
			
			$xfer += $output->writeFieldBegin('receiptNo');
			$xfer += $output->writeString($this->receiptNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalShippingQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalShippingQty');
			$xfer += $output->writeDouble($this->totalShippingQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalShipContCount !== null) {
			
			$xfer += $output->writeFieldBegin('totalShipContCount');
			$xfer += $output->writeDouble($this->totalShipContCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalInbQty !== null) {
			
			$xfer += $output->writeFieldBegin('totalInbQty');
			$xfer += $output->writeDouble($this->totalInbQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveCompleteTime !== null) {
			
			$xfer += $output->writeFieldBegin('receiveCompleteTime');
			$xfer += $output->writeI64($this->receiveCompleteTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>