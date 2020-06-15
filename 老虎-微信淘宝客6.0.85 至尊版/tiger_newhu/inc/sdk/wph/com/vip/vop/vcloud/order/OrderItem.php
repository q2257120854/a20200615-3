<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OrderItem {
	
	static $_TSPEC;
	public $orderSn = null;
	public $orderTime = null;
	public $status = null;
	public $recipients = null;
	public $mobileNo = null;
	public $shipAddress = null;
	public $provinceCode = null;
	public $cityCode = null;
	public $reginCode = null;
	public $streetCode = null;
	public $storeId = null;
	public $provinceName = null;
	public $cityName = null;
	public $reginName = null;
	public $streetName = null;
	public $orderDetails = null;
	public $officalAccount = null;
	public $subOrderSn = null;
	public $channelId = null;
	public $findSrcState = null;
	public $orderRemark = null;
	public $isConfirmed = null;
	public $orderSaleType = null;
	public $preOrderReleaseDate = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'orderTime'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'recipients'
			),
			5 => array(
			'var' => 'mobileNo'
			),
			6 => array(
			'var' => 'shipAddress'
			),
			7 => array(
			'var' => 'provinceCode'
			),
			8 => array(
			'var' => 'cityCode'
			),
			9 => array(
			'var' => 'reginCode'
			),
			10 => array(
			'var' => 'streetCode'
			),
			11 => array(
			'var' => 'storeId'
			),
			12 => array(
			'var' => 'provinceName'
			),
			13 => array(
			'var' => 'cityName'
			),
			14 => array(
			'var' => 'reginName'
			),
			15 => array(
			'var' => 'streetName'
			),
			16 => array(
			'var' => 'orderDetails'
			),
			17 => array(
			'var' => 'officalAccount'
			),
			18 => array(
			'var' => 'subOrderSn'
			),
			19 => array(
			'var' => 'channelId'
			),
			20 => array(
			'var' => 'findSrcState'
			),
			21 => array(
			'var' => 'orderRemark'
			),
			22 => array(
			'var' => 'isConfirmed'
			),
			23 => array(
			'var' => 'orderSaleType'
			),
			24 => array(
			'var' => 'preOrderReleaseDate'
			),
			25 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
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
			
			
			if (isset($vals['shipAddress'])){
				
				$this->shipAddress = $vals['shipAddress'];
			}
			
			
			if (isset($vals['provinceCode'])){
				
				$this->provinceCode = $vals['provinceCode'];
			}
			
			
			if (isset($vals['cityCode'])){
				
				$this->cityCode = $vals['cityCode'];
			}
			
			
			if (isset($vals['reginCode'])){
				
				$this->reginCode = $vals['reginCode'];
			}
			
			
			if (isset($vals['streetCode'])){
				
				$this->streetCode = $vals['streetCode'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['reginName'])){
				
				$this->reginName = $vals['reginName'];
			}
			
			
			if (isset($vals['streetName'])){
				
				$this->streetName = $vals['streetName'];
			}
			
			
			if (isset($vals['orderDetails'])){
				
				$this->orderDetails = $vals['orderDetails'];
			}
			
			
			if (isset($vals['officalAccount'])){
				
				$this->officalAccount = $vals['officalAccount'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['findSrcState'])){
				
				$this->findSrcState = $vals['findSrcState'];
			}
			
			
			if (isset($vals['orderRemark'])){
				
				$this->orderRemark = $vals['orderRemark'];
			}
			
			
			if (isset($vals['isConfirmed'])){
				
				$this->isConfirmed = $vals['isConfirmed'];
			}
			
			
			if (isset($vals['orderSaleType'])){
				
				$this->orderSaleType = $vals['orderSaleType'];
			}
			
			
			if (isset($vals['preOrderReleaseDate'])){
				
				$this->preOrderReleaseDate = $vals['preOrderReleaseDate'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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
			
			
			
			
			if ("shipAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipAddress);
				
			}
			
			
			
			
			if ("provinceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceCode);
				
			}
			
			
			
			
			if ("cityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityCode);
				
			}
			
			
			
			
			if ("reginCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reginCode);
				
			}
			
			
			
			
			if ("streetCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->streetCode);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->storeId); 
				
			}
			
			
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("reginName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reginName);
				
			}
			
			
			
			
			if ("streetName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->streetName);
				
			}
			
			
			
			
			if ("orderDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->orderDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\vcloud\order\OrderDetail();
						$elem0->read($input);
						
						$this->orderDetails[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("officalAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->officalAccount);
				
			}
			
			
			
			
			if ("subOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSn);
				
			}
			
			
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("findSrcState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->findSrcState); 
				
			}
			
			
			
			
			if ("orderRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderRemark);
				
			}
			
			
			
			
			if ("isConfirmed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isConfirmed); 
				
			}
			
			
			
			
			if ("orderSaleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderSaleType); 
				
			}
			
			
			
			
			if ("preOrderReleaseDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->preOrderReleaseDate); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		
		if($this->shipAddress !== null) {
			
			$xfer += $output->writeFieldBegin('shipAddress');
			$xfer += $output->writeString($this->shipAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceCode !== null) {
			
			$xfer += $output->writeFieldBegin('provinceCode');
			$xfer += $output->writeString($this->provinceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityCode !== null) {
			
			$xfer += $output->writeFieldBegin('cityCode');
			$xfer += $output->writeString($this->cityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reginCode !== null) {
			
			$xfer += $output->writeFieldBegin('reginCode');
			$xfer += $output->writeString($this->reginCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->streetCode !== null) {
			
			$xfer += $output->writeFieldBegin('streetCode');
			$xfer += $output->writeString($this->streetCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceName !== null) {
			
			$xfer += $output->writeFieldBegin('provinceName');
			$xfer += $output->writeString($this->provinceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reginName !== null) {
			
			$xfer += $output->writeFieldBegin('reginName');
			$xfer += $output->writeString($this->reginName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->streetName !== null) {
			
			$xfer += $output->writeFieldBegin('streetName');
			$xfer += $output->writeString($this->streetName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderDetails !== null) {
			
			$xfer += $output->writeFieldBegin('orderDetails');
			
			if (!is_array($this->orderDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderDetails as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->officalAccount !== null) {
			
			$xfer += $output->writeFieldBegin('officalAccount');
			$xfer += $output->writeString($this->officalAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->findSrcState !== null) {
			
			$xfer += $output->writeFieldBegin('findSrcState');
			$xfer += $output->writeI32($this->findSrcState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderRemark !== null) {
			
			$xfer += $output->writeFieldBegin('orderRemark');
			$xfer += $output->writeString($this->orderRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isConfirmed !== null) {
			
			$xfer += $output->writeFieldBegin('isConfirmed');
			$xfer += $output->writeI32($this->isConfirmed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSaleType !== null) {
			
			$xfer += $output->writeFieldBegin('orderSaleType');
			$xfer += $output->writeI32($this->orderSaleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preOrderReleaseDate !== null) {
			
			$xfer += $output->writeFieldBegin('preOrderReleaseDate');
			$xfer += $output->writeI64($this->preOrderReleaseDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>