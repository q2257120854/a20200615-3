<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OrderQueryRequest {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	public $warehouses = null;
	public $recipients = null;
	public $mobileNo = null;
	public $expressNo = null;
	public $startTime = null;
	public $endTime = null;
	public $orderType = null;
	public $page = null;
	public $pageSize = null;
	public $includeOrderDetail = null;
	public $orderSaleType = null;
	public $startDeliveryTime = null;
	public $endDeliveryTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'warehouses'
			),
			5 => array(
			'var' => 'recipients'
			),
			6 => array(
			'var' => 'mobileNo'
			),
			7 => array(
			'var' => 'expressNo'
			),
			8 => array(
			'var' => 'startTime'
			),
			9 => array(
			'var' => 'endTime'
			),
			10 => array(
			'var' => 'orderType'
			),
			11 => array(
			'var' => 'page'
			),
			12 => array(
			'var' => 'pageSize'
			),
			13 => array(
			'var' => 'includeOrderDetail'
			),
			14 => array(
			'var' => 'orderSaleType'
			),
			15 => array(
			'var' => 'startDeliveryTime'
			),
			16 => array(
			'var' => 'endDeliveryTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['warehouses'])){
				
				$this->warehouses = $vals['warehouses'];
			}
			
			
			if (isset($vals['recipients'])){
				
				$this->recipients = $vals['recipients'];
			}
			
			
			if (isset($vals['mobileNo'])){
				
				$this->mobileNo = $vals['mobileNo'];
			}
			
			
			if (isset($vals['expressNo'])){
				
				$this->expressNo = $vals['expressNo'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['includeOrderDetail'])){
				
				$this->includeOrderDetail = $vals['includeOrderDetail'];
			}
			
			
			if (isset($vals['orderSaleType'])){
				
				$this->orderSaleType = $vals['orderSaleType'];
			}
			
			
			if (isset($vals['startDeliveryTime'])){
				
				$this->startDeliveryTime = $vals['startDeliveryTime'];
			}
			
			
			if (isset($vals['endDeliveryTime'])){
				
				$this->endDeliveryTime = $vals['endDeliveryTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderQueryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("warehouses" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouses = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI64($elem1); 
						
						$this->warehouses[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("recipients" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recipients);
				
			}
			
			
			
			
			if ("mobileNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileNo);
				
			}
			
			
			
			
			if ("expressNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressNo);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderType); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("includeOrderDetail" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->includeOrderDetail);
				
			}
			
			
			
			
			if ("orderSaleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderSaleType); 
				
			}
			
			
			
			
			if ("startDeliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startDeliveryTime); 
				
			}
			
			
			
			
			if ("endDeliveryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endDeliveryTime); 
				
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
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouses !== null) {
			
			$xfer += $output->writeFieldBegin('warehouses');
			
			if (!is_array($this->warehouses)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouses as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		if($this->expressNo !== null) {
			
			$xfer += $output->writeFieldBegin('expressNo');
			$xfer += $output->writeString($this->expressNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeI32($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->includeOrderDetail !== null) {
			
			$xfer += $output->writeFieldBegin('includeOrderDetail');
			$xfer += $output->writeBool($this->includeOrderDetail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSaleType !== null) {
			
			$xfer += $output->writeFieldBegin('orderSaleType');
			$xfer += $output->writeI32($this->orderSaleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDeliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('startDeliveryTime');
			$xfer += $output->writeI64($this->startDeliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDeliveryTime !== null) {
			
			$xfer += $output->writeFieldBegin('endDeliveryTime');
			$xfer += $output->writeI64($this->endDeliveryTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>