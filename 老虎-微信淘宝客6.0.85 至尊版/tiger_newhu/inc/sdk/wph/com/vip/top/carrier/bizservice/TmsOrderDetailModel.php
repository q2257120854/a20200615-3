<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TmsOrderDetailModel {
	
	static $_TSPEC;
	public $orderSn = null;
	public $warehouse = null;
	public $deliveryWarehouse = null;
	public $receiverName = null;
	public $receiverPhone = null;
	public $receiverMobile = null;
	public $receiverProvince = null;
	public $receiverCity = null;
	public $receiverCounty = null;
	public $receiverTown = null;
	public $receiverAddress = null;
	public $receiverPostCode = null;
	public $isJitx = null;
	public $boxSeq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'deliveryWarehouse'
			),
			4 => array(
			'var' => 'receiverName'
			),
			5 => array(
			'var' => 'receiverPhone'
			),
			6 => array(
			'var' => 'receiverMobile'
			),
			7 => array(
			'var' => 'receiverProvince'
			),
			8 => array(
			'var' => 'receiverCity'
			),
			9 => array(
			'var' => 'receiverCounty'
			),
			10 => array(
			'var' => 'receiverTown'
			),
			11 => array(
			'var' => 'receiverAddress'
			),
			12 => array(
			'var' => 'receiverPostCode'
			),
			13 => array(
			'var' => 'isJitx'
			),
			14 => array(
			'var' => 'boxSeq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['receiverName'])){
				
				$this->receiverName = $vals['receiverName'];
			}
			
			
			if (isset($vals['receiverPhone'])){
				
				$this->receiverPhone = $vals['receiverPhone'];
			}
			
			
			if (isset($vals['receiverMobile'])){
				
				$this->receiverMobile = $vals['receiverMobile'];
			}
			
			
			if (isset($vals['receiverProvince'])){
				
				$this->receiverProvince = $vals['receiverProvince'];
			}
			
			
			if (isset($vals['receiverCity'])){
				
				$this->receiverCity = $vals['receiverCity'];
			}
			
			
			if (isset($vals['receiverCounty'])){
				
				$this->receiverCounty = $vals['receiverCounty'];
			}
			
			
			if (isset($vals['receiverTown'])){
				
				$this->receiverTown = $vals['receiverTown'];
			}
			
			
			if (isset($vals['receiverAddress'])){
				
				$this->receiverAddress = $vals['receiverAddress'];
			}
			
			
			if (isset($vals['receiverPostCode'])){
				
				$this->receiverPostCode = $vals['receiverPostCode'];
			}
			
			
			if (isset($vals['isJitx'])){
				
				$this->isJitx = $vals['isJitx'];
			}
			
			
			if (isset($vals['boxSeq'])){
				
				$this->boxSeq = $vals['boxSeq'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderDetailModel';
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
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("receiverName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverName);
				
			}
			
			
			
			
			if ("receiverPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverPhone);
				
			}
			
			
			
			
			if ("receiverMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverMobile);
				
			}
			
			
			
			
			if ("receiverProvince" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverProvince);
				
			}
			
			
			
			
			if ("receiverCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverCity);
				
			}
			
			
			
			
			if ("receiverCounty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverCounty);
				
			}
			
			
			
			
			if ("receiverTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverTown);
				
			}
			
			
			
			
			if ("receiverAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverAddress);
				
			}
			
			
			
			
			if ("receiverPostCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiverPostCode);
				
			}
			
			
			
			
			if ("isJitx" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitx); 
				
			}
			
			
			
			
			if ("boxSeq" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxSeq);
				
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
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouse');
			$xfer += $output->writeString($this->deliveryWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverName !== null) {
			
			$xfer += $output->writeFieldBegin('receiverName');
			$xfer += $output->writeString($this->receiverName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverPhone !== null) {
			
			$xfer += $output->writeFieldBegin('receiverPhone');
			$xfer += $output->writeString($this->receiverPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverMobile !== null) {
			
			$xfer += $output->writeFieldBegin('receiverMobile');
			$xfer += $output->writeString($this->receiverMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverProvince !== null) {
			
			$xfer += $output->writeFieldBegin('receiverProvince');
			$xfer += $output->writeString($this->receiverProvince);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverCity !== null) {
			
			$xfer += $output->writeFieldBegin('receiverCity');
			$xfer += $output->writeString($this->receiverCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverCounty !== null) {
			
			$xfer += $output->writeFieldBegin('receiverCounty');
			$xfer += $output->writeString($this->receiverCounty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverTown !== null) {
			
			$xfer += $output->writeFieldBegin('receiverTown');
			$xfer += $output->writeString($this->receiverTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverAddress !== null) {
			
			$xfer += $output->writeFieldBegin('receiverAddress');
			$xfer += $output->writeString($this->receiverAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiverPostCode !== null) {
			
			$xfer += $output->writeFieldBegin('receiverPostCode');
			$xfer += $output->writeString($this->receiverPostCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isJitx !== null) {
			
			$xfer += $output->writeFieldBegin('isJitx');
			$xfer += $output->writeI32($this->isJitx);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxSeq !== null) {
			
			$xfer += $output->writeFieldBegin('boxSeq');
			$xfer += $output->writeString($this->boxSeq);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>