<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreBoxStateLogModel {
	
	static $_TSPEC;
	public $id = null;
	public $boxMacAddr = null;
	public $boxTemperature = null;
	public $boxPing = null;
	public $boxSoftwareVersion = null;
	public $cameraCode = null;
	public $cameraStateCode = null;
	public $cameraPing = null;
	public $cameraStateMsg = null;
	public $cameraFormat = null;
	public $cameraFps = null;
	public $cameraResolution = null;
	public $stateLogTime = null;
	public $createTime = null;
	public $updateTime = null;
	public $deleteFlag = null;
	public $storeCode = null;
	public $posCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'boxMacAddr'
			),
			3 => array(
			'var' => 'boxTemperature'
			),
			4 => array(
			'var' => 'boxPing'
			),
			5 => array(
			'var' => 'boxSoftwareVersion'
			),
			6 => array(
			'var' => 'cameraCode'
			),
			7 => array(
			'var' => 'cameraStateCode'
			),
			8 => array(
			'var' => 'cameraPing'
			),
			9 => array(
			'var' => 'cameraStateMsg'
			),
			10 => array(
			'var' => 'cameraFormat'
			),
			11 => array(
			'var' => 'cameraFps'
			),
			12 => array(
			'var' => 'cameraResolution'
			),
			13 => array(
			'var' => 'stateLogTime'
			),
			14 => array(
			'var' => 'createTime'
			),
			15 => array(
			'var' => 'updateTime'
			),
			16 => array(
			'var' => 'deleteFlag'
			),
			17 => array(
			'var' => 'storeCode'
			),
			18 => array(
			'var' => 'posCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['boxMacAddr'])){
				
				$this->boxMacAddr = $vals['boxMacAddr'];
			}
			
			
			if (isset($vals['boxTemperature'])){
				
				$this->boxTemperature = $vals['boxTemperature'];
			}
			
			
			if (isset($vals['boxPing'])){
				
				$this->boxPing = $vals['boxPing'];
			}
			
			
			if (isset($vals['boxSoftwareVersion'])){
				
				$this->boxSoftwareVersion = $vals['boxSoftwareVersion'];
			}
			
			
			if (isset($vals['cameraCode'])){
				
				$this->cameraCode = $vals['cameraCode'];
			}
			
			
			if (isset($vals['cameraStateCode'])){
				
				$this->cameraStateCode = $vals['cameraStateCode'];
			}
			
			
			if (isset($vals['cameraPing'])){
				
				$this->cameraPing = $vals['cameraPing'];
			}
			
			
			if (isset($vals['cameraStateMsg'])){
				
				$this->cameraStateMsg = $vals['cameraStateMsg'];
			}
			
			
			if (isset($vals['cameraFormat'])){
				
				$this->cameraFormat = $vals['cameraFormat'];
			}
			
			
			if (isset($vals['cameraFps'])){
				
				$this->cameraFps = $vals['cameraFps'];
			}
			
			
			if (isset($vals['cameraResolution'])){
				
				$this->cameraResolution = $vals['cameraResolution'];
			}
			
			
			if (isset($vals['stateLogTime'])){
				
				$this->stateLogTime = $vals['stateLogTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['deleteFlag'])){
				
				$this->deleteFlag = $vals['deleteFlag'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['posCode'])){
				
				$this->posCode = $vals['posCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreBoxStateLogModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("boxMacAddr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxMacAddr);
				
			}
			
			
			
			
			if ("boxTemperature" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxTemperature);
				
			}
			
			
			
			
			if ("boxPing" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxPing);
				
			}
			
			
			
			
			if ("boxSoftwareVersion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxSoftwareVersion);
				
			}
			
			
			
			
			if ("cameraCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraCode);
				
			}
			
			
			
			
			if ("cameraStateCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraStateCode);
				
			}
			
			
			
			
			if ("cameraPing" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraPing);
				
			}
			
			
			
			
			if ("cameraStateMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraStateMsg);
				
			}
			
			
			
			
			if ("cameraFormat" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraFormat);
				
			}
			
			
			
			
			if ("cameraFps" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraFps);
				
			}
			
			
			
			
			if ("cameraResolution" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraResolution);
				
			}
			
			
			
			
			if ("stateLogTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stateLogTime);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("deleteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deleteFlag); 
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("posCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posCode);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxMacAddr !== null) {
			
			$xfer += $output->writeFieldBegin('boxMacAddr');
			$xfer += $output->writeString($this->boxMacAddr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxTemperature !== null) {
			
			$xfer += $output->writeFieldBegin('boxTemperature');
			$xfer += $output->writeString($this->boxTemperature);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxPing !== null) {
			
			$xfer += $output->writeFieldBegin('boxPing');
			$xfer += $output->writeString($this->boxPing);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxSoftwareVersion !== null) {
			
			$xfer += $output->writeFieldBegin('boxSoftwareVersion');
			$xfer += $output->writeString($this->boxSoftwareVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('cameraCode');
		$xfer += $output->writeString($this->cameraCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cameraStateCode !== null) {
			
			$xfer += $output->writeFieldBegin('cameraStateCode');
			$xfer += $output->writeString($this->cameraStateCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cameraPing !== null) {
			
			$xfer += $output->writeFieldBegin('cameraPing');
			$xfer += $output->writeString($this->cameraPing);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cameraStateMsg !== null) {
			
			$xfer += $output->writeFieldBegin('cameraStateMsg');
			$xfer += $output->writeString($this->cameraStateMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cameraFormat !== null) {
			
			$xfer += $output->writeFieldBegin('cameraFormat');
			$xfer += $output->writeString($this->cameraFormat);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cameraFps !== null) {
			
			$xfer += $output->writeFieldBegin('cameraFps');
			$xfer += $output->writeString($this->cameraFps);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cameraResolution !== null) {
			
			$xfer += $output->writeFieldBegin('cameraResolution');
			$xfer += $output->writeString($this->cameraResolution);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stateLogTime !== null) {
			
			$xfer += $output->writeFieldBegin('stateLogTime');
			$xfer += $output->writeI64($this->stateLogTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deleteFlag !== null) {
			
			$xfer += $output->writeFieldBegin('deleteFlag');
			$xfer += $output->writeI32($this->deleteFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeCode !== null) {
			
			$xfer += $output->writeFieldBegin('storeCode');
			$xfer += $output->writeString($this->storeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posCode !== null) {
			
			$xfer += $output->writeFieldBegin('posCode');
			$xfer += $output->writeString($this->posCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>