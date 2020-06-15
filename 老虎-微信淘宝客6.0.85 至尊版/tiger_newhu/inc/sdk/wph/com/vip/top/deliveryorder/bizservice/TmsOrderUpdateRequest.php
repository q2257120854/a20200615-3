<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class TmsOrderUpdateRequest {
	
	static $_TSPEC;
	public $orderSn = null;
	public $isJitX = null;
	public $deliveryWarehouse = null;
	public $custCode = null;
	public $transportNo = null;
	public $carrierPointCode = null;
	public $carrierPointName = null;
	public $pickCode = null;
	public $srcSortingPointCode = null;
	public $srcSortingPointName = null;
	public $srcCarrierPointCode = null;
	public $srcCarrierPointName = null;
	public $destSortingPointCode = null;
	public $destSortingPointName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'isJitX'
			),
			3 => array(
			'var' => 'deliveryWarehouse'
			),
			4 => array(
			'var' => 'custCode'
			),
			5 => array(
			'var' => 'transportNo'
			),
			6 => array(
			'var' => 'carrierPointCode'
			),
			7 => array(
			'var' => 'carrierPointName'
			),
			8 => array(
			'var' => 'pickCode'
			),
			9 => array(
			'var' => 'srcSortingPointCode'
			),
			10 => array(
			'var' => 'srcSortingPointName'
			),
			11 => array(
			'var' => 'srcCarrierPointCode'
			),
			12 => array(
			'var' => 'srcCarrierPointName'
			),
			13 => array(
			'var' => 'destSortingPointCode'
			),
			14 => array(
			'var' => 'destSortingPointName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['isJitX'])){
				
				$this->isJitX = $vals['isJitX'];
			}
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrierPointCode'])){
				
				$this->carrierPointCode = $vals['carrierPointCode'];
			}
			
			
			if (isset($vals['carrierPointName'])){
				
				$this->carrierPointName = $vals['carrierPointName'];
			}
			
			
			if (isset($vals['pickCode'])){
				
				$this->pickCode = $vals['pickCode'];
			}
			
			
			if (isset($vals['srcSortingPointCode'])){
				
				$this->srcSortingPointCode = $vals['srcSortingPointCode'];
			}
			
			
			if (isset($vals['srcSortingPointName'])){
				
				$this->srcSortingPointName = $vals['srcSortingPointName'];
			}
			
			
			if (isset($vals['srcCarrierPointCode'])){
				
				$this->srcCarrierPointCode = $vals['srcCarrierPointCode'];
			}
			
			
			if (isset($vals['srcCarrierPointName'])){
				
				$this->srcCarrierPointName = $vals['srcCarrierPointName'];
			}
			
			
			if (isset($vals['destSortingPointCode'])){
				
				$this->destSortingPointCode = $vals['destSortingPointCode'];
			}
			
			
			if (isset($vals['destSortingPointName'])){
				
				$this->destSortingPointName = $vals['destSortingPointName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderUpdateRequest';
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
			
			
			
			
			if ("isJitX" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitX); 
				
			}
			
			
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrierPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointCode);
				
			}
			
			
			
			
			if ("carrierPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointName);
				
			}
			
			
			
			
			if ("pickCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickCode);
				
			}
			
			
			
			
			if ("srcSortingPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->srcSortingPointCode);
				
			}
			
			
			
			
			if ("srcSortingPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->srcSortingPointName);
				
			}
			
			
			
			
			if ("srcCarrierPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->srcCarrierPointCode);
				
			}
			
			
			
			
			if ("srcCarrierPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->srcCarrierPointName);
				
			}
			
			
			
			
			if ("destSortingPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destSortingPointCode);
				
			}
			
			
			
			
			if ("destSortingPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destSortingPointName);
				
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
		
		
		if($this->isJitX !== null) {
			
			$xfer += $output->writeFieldBegin('isJitX');
			$xfer += $output->writeI32($this->isJitX);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouse');
			$xfer += $output->writeString($this->deliveryWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointCode');
			$xfer += $output->writeString($this->carrierPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointName');
			$xfer += $output->writeString($this->carrierPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickCode !== null) {
			
			$xfer += $output->writeFieldBegin('pickCode');
			$xfer += $output->writeString($this->pickCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->srcSortingPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('srcSortingPointCode');
			$xfer += $output->writeString($this->srcSortingPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->srcSortingPointName !== null) {
			
			$xfer += $output->writeFieldBegin('srcSortingPointName');
			$xfer += $output->writeString($this->srcSortingPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->srcCarrierPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('srcCarrierPointCode');
			$xfer += $output->writeString($this->srcCarrierPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->srcCarrierPointName !== null) {
			
			$xfer += $output->writeFieldBegin('srcCarrierPointName');
			$xfer += $output->writeString($this->srcCarrierPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destSortingPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('destSortingPointCode');
			$xfer += $output->writeString($this->destSortingPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destSortingPointName !== null) {
			
			$xfer += $output->writeFieldBegin('destSortingPointName');
			$xfer += $output->writeString($this->destSortingPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>