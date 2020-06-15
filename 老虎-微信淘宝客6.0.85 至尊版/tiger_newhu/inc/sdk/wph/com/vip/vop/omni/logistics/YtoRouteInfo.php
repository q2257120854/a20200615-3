<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\logistics;

class YtoRouteInfo {
	
	static $_TSPEC;
	public $logisticProviderId = null;
	public $clientId = null;
	public $mailNo = null;
	public $txLogisticId = null;
	public $infoType = null;
	public $infoContent = null;
	public $remark = null;
	public $weight = null;
	public $signedName = null;
	public $deliveryName = null;
	public $acceptTime = null;
	public $contactInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logisticProviderId'
			),
			2 => array(
			'var' => 'clientId'
			),
			3 => array(
			'var' => 'mailNo'
			),
			4 => array(
			'var' => 'txLogisticId'
			),
			5 => array(
			'var' => 'infoType'
			),
			6 => array(
			'var' => 'infoContent'
			),
			7 => array(
			'var' => 'remark'
			),
			8 => array(
			'var' => 'weight'
			),
			9 => array(
			'var' => 'signedName'
			),
			10 => array(
			'var' => 'deliveryName'
			),
			11 => array(
			'var' => 'acceptTime'
			),
			12 => array(
			'var' => 'contactInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logisticProviderId'])){
				
				$this->logisticProviderId = $vals['logisticProviderId'];
			}
			
			
			if (isset($vals['clientId'])){
				
				$this->clientId = $vals['clientId'];
			}
			
			
			if (isset($vals['mailNo'])){
				
				$this->mailNo = $vals['mailNo'];
			}
			
			
			if (isset($vals['txLogisticId'])){
				
				$this->txLogisticId = $vals['txLogisticId'];
			}
			
			
			if (isset($vals['infoType'])){
				
				$this->infoType = $vals['infoType'];
			}
			
			
			if (isset($vals['infoContent'])){
				
				$this->infoContent = $vals['infoContent'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['signedName'])){
				
				$this->signedName = $vals['signedName'];
			}
			
			
			if (isset($vals['deliveryName'])){
				
				$this->deliveryName = $vals['deliveryName'];
			}
			
			
			if (isset($vals['acceptTime'])){
				
				$this->acceptTime = $vals['acceptTime'];
			}
			
			
			if (isset($vals['contactInfo'])){
				
				$this->contactInfo = $vals['contactInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'YtoRouteInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logisticProviderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logisticProviderId);
				
			}
			
			
			
			
			if ("clientId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientId);
				
			}
			
			
			
			
			if ("mailNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mailNo);
				
			}
			
			
			
			
			if ("txLogisticId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txLogisticId);
				
			}
			
			
			
			
			if ("infoType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infoType);
				
			}
			
			
			
			
			if ("infoContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->infoContent);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("signedName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signedName);
				
			}
			
			
			
			
			if ("deliveryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryName);
				
			}
			
			
			
			
			if ("acceptTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->acceptTime);
				
			}
			
			
			
			
			if ("contactInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactInfo);
				
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
		
		if($this->logisticProviderId !== null) {
			
			$xfer += $output->writeFieldBegin('logisticProviderId');
			$xfer += $output->writeString($this->logisticProviderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientId !== null) {
			
			$xfer += $output->writeFieldBegin('clientId');
			$xfer += $output->writeString($this->clientId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mailNo !== null) {
			
			$xfer += $output->writeFieldBegin('mailNo');
			$xfer += $output->writeString($this->mailNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txLogisticId !== null) {
			
			$xfer += $output->writeFieldBegin('txLogisticId');
			$xfer += $output->writeString($this->txLogisticId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infoType !== null) {
			
			$xfer += $output->writeFieldBegin('infoType');
			$xfer += $output->writeString($this->infoType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infoContent !== null) {
			
			$xfer += $output->writeFieldBegin('infoContent');
			$xfer += $output->writeString($this->infoContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signedName !== null) {
			
			$xfer += $output->writeFieldBegin('signedName');
			$xfer += $output->writeString($this->signedName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryName !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryName');
			$xfer += $output->writeString($this->deliveryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptTime !== null) {
			
			$xfer += $output->writeFieldBegin('acceptTime');
			$xfer += $output->writeI64($this->acceptTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactInfo !== null) {
			
			$xfer += $output->writeFieldBegin('contactInfo');
			$xfer += $output->writeString($this->contactInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>