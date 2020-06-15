<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\logistics;

class MaxSpeedRouteInfo {
	
	static $_TSPEC;
	public $sfOrderId = null;
	public $shopOrderId = null;
	public $urlIndex = null;
	public $operatorName = null;
	public $operatorPhone = null;
	public $riderLng = null;
	public $riderLat = null;
	public $orderStatus = null;
	public $statusDesc = null;
	public $pushTime = null;
	public $sign = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sfOrderId'
			),
			2 => array(
			'var' => 'shopOrderId'
			),
			3 => array(
			'var' => 'urlIndex'
			),
			4 => array(
			'var' => 'operatorName'
			),
			5 => array(
			'var' => 'operatorPhone'
			),
			6 => array(
			'var' => 'riderLng'
			),
			7 => array(
			'var' => 'riderLat'
			),
			8 => array(
			'var' => 'orderStatus'
			),
			9 => array(
			'var' => 'statusDesc'
			),
			10 => array(
			'var' => 'pushTime'
			),
			11 => array(
			'var' => 'sign'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sfOrderId'])){
				
				$this->sfOrderId = $vals['sfOrderId'];
			}
			
			
			if (isset($vals['shopOrderId'])){
				
				$this->shopOrderId = $vals['shopOrderId'];
			}
			
			
			if (isset($vals['urlIndex'])){
				
				$this->urlIndex = $vals['urlIndex'];
			}
			
			
			if (isset($vals['operatorName'])){
				
				$this->operatorName = $vals['operatorName'];
			}
			
			
			if (isset($vals['operatorPhone'])){
				
				$this->operatorPhone = $vals['operatorPhone'];
			}
			
			
			if (isset($vals['riderLng'])){
				
				$this->riderLng = $vals['riderLng'];
			}
			
			
			if (isset($vals['riderLat'])){
				
				$this->riderLat = $vals['riderLat'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['statusDesc'])){
				
				$this->statusDesc = $vals['statusDesc'];
			}
			
			
			if (isset($vals['pushTime'])){
				
				$this->pushTime = $vals['pushTime'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MaxSpeedRouteInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sfOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sfOrderId);
				
			}
			
			
			
			
			if ("shopOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopOrderId);
				
			}
			
			
			
			
			if ("urlIndex" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->urlIndex);
				
			}
			
			
			
			
			if ("operatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorName);
				
			}
			
			
			
			
			if ("operatorPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operatorPhone);
				
			}
			
			
			
			
			if ("riderLng" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->riderLng);
				
			}
			
			
			
			
			if ("riderLat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->riderLat);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderStatus); 
				
			}
			
			
			
			
			if ("statusDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusDesc);
				
			}
			
			
			
			
			if ("pushTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pushTime); 
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
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
		
		if($this->sfOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('sfOrderId');
			$xfer += $output->writeString($this->sfOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('shopOrderId');
			$xfer += $output->writeString($this->shopOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->urlIndex !== null) {
			
			$xfer += $output->writeFieldBegin('urlIndex');
			$xfer += $output->writeString($this->urlIndex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorName !== null) {
			
			$xfer += $output->writeFieldBegin('operatorName');
			$xfer += $output->writeString($this->operatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operatorPhone !== null) {
			
			$xfer += $output->writeFieldBegin('operatorPhone');
			$xfer += $output->writeString($this->operatorPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->riderLng !== null) {
			
			$xfer += $output->writeFieldBegin('riderLng');
			$xfer += $output->writeString($this->riderLng);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->riderLat !== null) {
			
			$xfer += $output->writeFieldBegin('riderLat');
			$xfer += $output->writeString($this->riderLat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeI32($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusDesc !== null) {
			
			$xfer += $output->writeFieldBegin('statusDesc');
			$xfer += $output->writeString($this->statusDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pushTime !== null) {
			
			$xfer += $output->writeFieldBegin('pushTime');
			$xfer += $output->writeI32($this->pushTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign !== null) {
			
			$xfer += $output->writeFieldBegin('sign');
			$xfer += $output->writeString($this->sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>