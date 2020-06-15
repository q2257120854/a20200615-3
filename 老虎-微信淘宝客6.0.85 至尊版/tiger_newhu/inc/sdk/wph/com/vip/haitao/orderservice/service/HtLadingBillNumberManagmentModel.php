<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtLadingBillNumberManagmentModel {
	
	static $_TSPEC;
	public $ladingBillNumber = null;
	public $flightNumber = null;
	public $totalWeight = null;
	public $warehouse = null;
	public $shipmentPort = null;
	public $shipmentCountry = null;
	public $arrivePort = null;
	public $arriveCountry = null;
	public $attachmentPath = null;
	public $senderType = null;
	public $customsClearanceMode = null;
	public $customsCode = null;
	public $chinaFreightForwarding = null;
	public $globalFreightForwarding = null;
	public $saleStyle = null;
	public $orderCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ladingBillNumber'
			),
			2 => array(
			'var' => 'flightNumber'
			),
			3 => array(
			'var' => 'totalWeight'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'shipmentPort'
			),
			6 => array(
			'var' => 'shipmentCountry'
			),
			7 => array(
			'var' => 'arrivePort'
			),
			8 => array(
			'var' => 'arriveCountry'
			),
			9 => array(
			'var' => 'attachmentPath'
			),
			10 => array(
			'var' => 'senderType'
			),
			11 => array(
			'var' => 'customsClearanceMode'
			),
			12 => array(
			'var' => 'customsCode'
			),
			13 => array(
			'var' => 'chinaFreightForwarding'
			),
			14 => array(
			'var' => 'globalFreightForwarding'
			),
			15 => array(
			'var' => 'saleStyle'
			),
			16 => array(
			'var' => 'orderCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ladingBillNumber'])){
				
				$this->ladingBillNumber = $vals['ladingBillNumber'];
			}
			
			
			if (isset($vals['flightNumber'])){
				
				$this->flightNumber = $vals['flightNumber'];
			}
			
			
			if (isset($vals['totalWeight'])){
				
				$this->totalWeight = $vals['totalWeight'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['shipmentPort'])){
				
				$this->shipmentPort = $vals['shipmentPort'];
			}
			
			
			if (isset($vals['shipmentCountry'])){
				
				$this->shipmentCountry = $vals['shipmentCountry'];
			}
			
			
			if (isset($vals['arrivePort'])){
				
				$this->arrivePort = $vals['arrivePort'];
			}
			
			
			if (isset($vals['arriveCountry'])){
				
				$this->arriveCountry = $vals['arriveCountry'];
			}
			
			
			if (isset($vals['attachmentPath'])){
				
				$this->attachmentPath = $vals['attachmentPath'];
			}
			
			
			if (isset($vals['senderType'])){
				
				$this->senderType = $vals['senderType'];
			}
			
			
			if (isset($vals['customsClearanceMode'])){
				
				$this->customsClearanceMode = $vals['customsClearanceMode'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['chinaFreightForwarding'])){
				
				$this->chinaFreightForwarding = $vals['chinaFreightForwarding'];
			}
			
			
			if (isset($vals['globalFreightForwarding'])){
				
				$this->globalFreightForwarding = $vals['globalFreightForwarding'];
			}
			
			
			if (isset($vals['saleStyle'])){
				
				$this->saleStyle = $vals['saleStyle'];
			}
			
			
			if (isset($vals['orderCount'])){
				
				$this->orderCount = $vals['orderCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtLadingBillNumberManagmentModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ladingBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ladingBillNumber);
				
			}
			
			
			
			
			if ("flightNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->flightNumber);
				
			}
			
			
			
			
			if ("totalWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalWeight);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("shipmentPort" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentPort);
				
			}
			
			
			
			
			if ("shipmentCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipmentCountry);
				
			}
			
			
			
			
			if ("arrivePort" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arrivePort);
				
			}
			
			
			
			
			if ("arriveCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->arriveCountry);
				
			}
			
			
			
			
			if ("attachmentPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attachmentPath);
				
			}
			
			
			
			
			if ("senderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->senderType); 
				
			}
			
			
			
			
			if ("customsClearanceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsClearanceMode);
				
			}
			
			
			
			
			if ("customsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsCode);
				
			}
			
			
			
			
			if ("chinaFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chinaFreightForwarding);
				
			}
			
			
			
			
			if ("globalFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalFreightForwarding);
				
			}
			
			
			
			
			if ("saleStyle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleStyle);
				
			}
			
			
			
			
			if ("orderCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderCount); 
				
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
		
		$xfer += $output->writeFieldBegin('ladingBillNumber');
		$xfer += $output->writeString($this->ladingBillNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('flightNumber');
		$xfer += $output->writeString($this->flightNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalWeight');
		$xfer += $output->writeDouble($this->totalWeight);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shipmentPort');
		$xfer += $output->writeString($this->shipmentPort);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shipmentCountry');
		$xfer += $output->writeString($this->shipmentCountry);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('arrivePort');
		$xfer += $output->writeString($this->arrivePort);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('arriveCountry');
		$xfer += $output->writeString($this->arriveCountry);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('attachmentPath');
		$xfer += $output->writeString($this->attachmentPath);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('senderType');
		$xfer += $output->writeI32($this->senderType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsClearanceMode');
		$xfer += $output->writeString($this->customsClearanceMode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('chinaFreightForwarding');
		$xfer += $output->writeString($this->chinaFreightForwarding);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('globalFreightForwarding');
		$xfer += $output->writeString($this->globalFreightForwarding);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('saleStyle');
		$xfer += $output->writeString($this->saleStyle);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderCount !== null) {
			
			$xfer += $output->writeFieldBegin('orderCount');
			$xfer += $output->writeI32($this->orderCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>