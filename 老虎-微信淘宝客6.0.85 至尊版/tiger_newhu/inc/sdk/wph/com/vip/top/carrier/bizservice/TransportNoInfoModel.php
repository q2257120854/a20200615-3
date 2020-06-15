<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNoInfoModel {
	
	static $_TSPEC;
	public $transportNo = null;
	public $pickCode = null;
	public $srcSortingPointCode = null;
	public $srcSortingPointName = null;
	public $srcCarrierPointCode = null;
	public $srcCarrierPointName = null;
	public $destSortingPointCode = null;
	public $destSortingPointName = null;
	public $unloadPointCode = null;
	public $unloadPointName = null;
	public $originCode = null;
	public $destinationCode = null;
	public $carrierPointCode = null;
	public $carrierPointName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'pickCode'
			),
			3 => array(
			'var' => 'srcSortingPointCode'
			),
			4 => array(
			'var' => 'srcSortingPointName'
			),
			5 => array(
			'var' => 'srcCarrierPointCode'
			),
			6 => array(
			'var' => 'srcCarrierPointName'
			),
			7 => array(
			'var' => 'destSortingPointCode'
			),
			8 => array(
			'var' => 'destSortingPointName'
			),
			9 => array(
			'var' => 'unloadPointCode'
			),
			10 => array(
			'var' => 'unloadPointName'
			),
			11 => array(
			'var' => 'originCode'
			),
			12 => array(
			'var' => 'destinationCode'
			),
			13 => array(
			'var' => 'carrierPointCode'
			),
			14 => array(
			'var' => 'carrierPointName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
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
			
			
			if (isset($vals['unloadPointCode'])){
				
				$this->unloadPointCode = $vals['unloadPointCode'];
			}
			
			
			if (isset($vals['unloadPointName'])){
				
				$this->unloadPointName = $vals['unloadPointName'];
			}
			
			
			if (isset($vals['originCode'])){
				
				$this->originCode = $vals['originCode'];
			}
			
			
			if (isset($vals['destinationCode'])){
				
				$this->destinationCode = $vals['destinationCode'];
			}
			
			
			if (isset($vals['carrierPointCode'])){
				
				$this->carrierPointCode = $vals['carrierPointCode'];
			}
			
			
			if (isset($vals['carrierPointName'])){
				
				$this->carrierPointName = $vals['carrierPointName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNoInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
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
			
			
			
			
			if ("unloadPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unloadPointCode);
				
			}
			
			
			
			
			if ("unloadPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unloadPointName);
				
			}
			
			
			
			
			if ("originCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originCode);
				
			}
			
			
			
			
			if ("destinationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destinationCode);
				
			}
			
			
			
			
			if ("carrierPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointCode);
				
			}
			
			
			
			
			if ("carrierPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointName);
				
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
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
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
		
		
		if($this->unloadPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('unloadPointCode');
			$xfer += $output->writeString($this->unloadPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unloadPointName !== null) {
			
			$xfer += $output->writeFieldBegin('unloadPointName');
			$xfer += $output->writeString($this->unloadPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originCode !== null) {
			
			$xfer += $output->writeFieldBegin('originCode');
			$xfer += $output->writeString($this->originCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destinationCode !== null) {
			
			$xfer += $output->writeFieldBegin('destinationCode');
			$xfer += $output->writeString($this->destinationCode);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>