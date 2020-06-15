<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OrderGoods {
	
	static $_TSPEC;
	public $channelId = null;
	public $orderSn = null;
	public $orderTime = null;
	public $status = null;
	public $recipients = null;
	public $mobileNo = null;
	public $storeId = null;
	public $subOrderSn = null;
	public $expressCompany = null;
	public $expressNo = null;
	public $deliveryTime = null;
	public $barcode = null;
	public $productName = null;
	public $size = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'orderTime'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'recipients'
			),
			6 => array(
			'var' => 'mobileNo'
			),
			7 => array(
			'var' => 'storeId'
			),
			8 => array(
			'var' => 'subOrderSn'
			),
			9 => array(
			'var' => 'expressCompany'
			),
			10 => array(
			'var' => 'expressNo'
			),
			11 => array(
			'var' => 'deliveryTime'
			),
			12 => array(
			'var' => 'barcode'
			),
			13 => array(
			'var' => 'productName'
			),
			14 => array(
			'var' => 'size'
			),
			15 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderTime'])){
				
				$this->orderTime = $vals['orderTime'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['recipients'])){
				
				$this->recipients = $vals['recipients'];
			}
			
			
			if (isset($vals['mobileNo'])){
				
				$this->mobileNo = $vals['mobileNo'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['expressCompany'])){
				
				$this->expressCompany = $vals['expressCompany'];
			}
			
			
			if (isset($vals['expressNo'])){
				
				$this->expressNo = $vals['expressNo'];
			}
			
			
			if (isset($vals['deliveryTime'])){
				
				$this->deliveryTime = $vals['deliveryTime'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['productName'])){
				
				$this->productName = $vals['productName'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderTime); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("recipients" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recipients);
				
			}
			
			
			
			
			if ("mobileNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileNo);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeId); 
				
			}
			
			
			
			
			if ("subOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSn);
				
			}
			
			
			
			
			if ("expressCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressCompany);
				
			}
			
			
			
			
			if ("expressNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressNo);
				
			}
			
			
			
			
			if ("deliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryTime); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("productName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productName);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
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
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeI64($this->orderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recipients !== null) {
			
			$xfer += $output->writeFieldBegin('recipients');
			$xfer += $output->writeString($this->recipients);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileNo !== null) {
			
			$xfer += $output->writeFieldBegin('mobileNo');
			$xfer += $output->writeString($this->mobileNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressCompany !== null) {
			
			$xfer += $output->writeFieldBegin('expressCompany');
			$xfer += $output->writeString($this->expressCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressNo !== null) {
			
			$xfer += $output->writeFieldBegin('expressNo');
			$xfer += $output->writeString($this->expressNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryTime');
			$xfer += $output->writeI64($this->deliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productName !== null) {
			
			$xfer += $output->writeFieldBegin('productName');
			$xfer += $output->writeString($this->productName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>