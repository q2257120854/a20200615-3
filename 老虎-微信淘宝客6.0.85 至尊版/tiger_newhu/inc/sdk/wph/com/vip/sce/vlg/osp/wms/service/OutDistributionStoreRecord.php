<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutDistributionStoreRecord {
	
	static $_TSPEC;
	public $transactionId = null;
	public $orderSn = null;
	public $billtype = null;
	public $transportMode = null;
	public $transportTool = null;
	public $carrierUnit = null;
	public $carrierMode = null;
	public $logisticsNo = null;
	public $plateNumber = null;
	public $transporter = null;
	public $departureTime = null;
	public $temperature = null;
	public $humidity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transactionId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'billtype'
			),
			4 => array(
			'var' => 'transportMode'
			),
			5 => array(
			'var' => 'transportTool'
			),
			6 => array(
			'var' => 'carrierUnit'
			),
			7 => array(
			'var' => 'carrierMode'
			),
			8 => array(
			'var' => 'logisticsNo'
			),
			9 => array(
			'var' => 'plateNumber'
			),
			10 => array(
			'var' => 'transporter'
			),
			11 => array(
			'var' => 'departureTime'
			),
			12 => array(
			'var' => 'temperature'
			),
			13 => array(
			'var' => 'humidity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['billtype'])){
				
				$this->billtype = $vals['billtype'];
			}
			
			
			if (isset($vals['transportMode'])){
				
				$this->transportMode = $vals['transportMode'];
			}
			
			
			if (isset($vals['transportTool'])){
				
				$this->transportTool = $vals['transportTool'];
			}
			
			
			if (isset($vals['carrierUnit'])){
				
				$this->carrierUnit = $vals['carrierUnit'];
			}
			
			
			if (isset($vals['carrierMode'])){
				
				$this->carrierMode = $vals['carrierMode'];
			}
			
			
			if (isset($vals['logisticsNo'])){
				
				$this->logisticsNo = $vals['logisticsNo'];
			}
			
			
			if (isset($vals['plateNumber'])){
				
				$this->plateNumber = $vals['plateNumber'];
			}
			
			
			if (isset($vals['transporter'])){
				
				$this->transporter = $vals['transporter'];
			}
			
			
			if (isset($vals['departureTime'])){
				
				$this->departureTime = $vals['departureTime'];
			}
			
			
			if (isset($vals['temperature'])){
				
				$this->temperature = $vals['temperature'];
			}
			
			
			if (isset($vals['humidity'])){
				
				$this->humidity = $vals['humidity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutDistributionStoreRecord';
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
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("billtype" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billtype);
				
			}
			
			
			
			
			if ("transportMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportMode);
				
			}
			
			
			
			
			if ("transportTool" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportTool);
				
			}
			
			
			
			
			if ("carrierUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierUnit);
				
			}
			
			
			
			
			if ("carrierMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierMode);
				
			}
			
			
			
			
			if ("logisticsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logisticsNo);
				
			}
			
			
			
			
			if ("plateNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plateNumber);
				
			}
			
			
			
			
			if ("transporter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transporter);
				
			}
			
			
			
			
			if ("departureTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->departureTime);
				
			}
			
			
			
			
			if ("temperature" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->temperature);
				
			}
			
			
			
			
			if ("humidity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->humidity);
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('billtype');
		$xfer += $output->writeString($this->billtype);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportMode');
		$xfer += $output->writeString($this->transportMode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportTool');
		$xfer += $output->writeString($this->transportTool);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrierUnit');
		$xfer += $output->writeString($this->carrierUnit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrierMode');
		$xfer += $output->writeString($this->carrierMode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('logisticsNo');
		$xfer += $output->writeString($this->logisticsNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('plateNumber');
		$xfer += $output->writeString($this->plateNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transporter');
		$xfer += $output->writeString($this->transporter);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('departureTime');
		$xfer += $output->writeString($this->departureTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('temperature');
		$xfer += $output->writeDouble($this->temperature);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('humidity');
		$xfer += $output->writeDouble($this->humidity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>