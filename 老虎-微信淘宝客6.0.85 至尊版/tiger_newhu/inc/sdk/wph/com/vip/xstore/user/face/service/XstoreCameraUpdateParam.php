<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraUpdateParam {
	
	static $_TSPEC;
	public $id = null;
	public $posCode = null;
	public $cameraCode = null;
	public $storeCode = null;
	public $dzStoreCode = null;
	public $regionCode = null;
	public $cityCode = null;
	public $txRegionCode = null;
	public $txStoreCode = null;
	public $runningState = null;
	public $provinceCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'posCode'
			),
			3 => array(
			'var' => 'cameraCode'
			),
			4 => array(
			'var' => 'storeCode'
			),
			5 => array(
			'var' => 'dzStoreCode'
			),
			6 => array(
			'var' => 'regionCode'
			),
			7 => array(
			'var' => 'cityCode'
			),
			8 => array(
			'var' => 'txRegionCode'
			),
			9 => array(
			'var' => 'txStoreCode'
			),
			10 => array(
			'var' => 'runningState'
			),
			11 => array(
			'var' => 'provinceCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['posCode'])){
				
				$this->posCode = $vals['posCode'];
			}
			
			
			if (isset($vals['cameraCode'])){
				
				$this->cameraCode = $vals['cameraCode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['dzStoreCode'])){
				
				$this->dzStoreCode = $vals['dzStoreCode'];
			}
			
			
			if (isset($vals['regionCode'])){
				
				$this->regionCode = $vals['regionCode'];
			}
			
			
			if (isset($vals['cityCode'])){
				
				$this->cityCode = $vals['cityCode'];
			}
			
			
			if (isset($vals['txRegionCode'])){
				
				$this->txRegionCode = $vals['txRegionCode'];
			}
			
			
			if (isset($vals['txStoreCode'])){
				
				$this->txStoreCode = $vals['txStoreCode'];
			}
			
			
			if (isset($vals['runningState'])){
				
				$this->runningState = $vals['runningState'];
			}
			
			
			if (isset($vals['provinceCode'])){
				
				$this->provinceCode = $vals['provinceCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraUpdateParam';
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
			
			
			
			
			if ("posCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posCode);
				
			}
			
			
			
			
			if ("cameraCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraCode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("dzStoreCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dzStoreCode);
				
			}
			
			
			
			
			if ("regionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->regionCode);
				
			}
			
			
			
			
			if ("cityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityCode);
				
			}
			
			
			
			
			if ("txRegionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txRegionCode);
				
			}
			
			
			
			
			if ("txStoreCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txStoreCode);
				
			}
			
			
			
			
			if ("runningState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->runningState); 
				
			}
			
			
			
			
			if ("provinceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceCode);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->posCode !== null) {
			
			$xfer += $output->writeFieldBegin('posCode');
			$xfer += $output->writeString($this->posCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cameraCode !== null) {
			
			$xfer += $output->writeFieldBegin('cameraCode');
			$xfer += $output->writeString($this->cameraCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeCode !== null) {
			
			$xfer += $output->writeFieldBegin('storeCode');
			$xfer += $output->writeString($this->storeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dzStoreCode !== null) {
			
			$xfer += $output->writeFieldBegin('dzStoreCode');
			$xfer += $output->writeString($this->dzStoreCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regionCode !== null) {
			
			$xfer += $output->writeFieldBegin('regionCode');
			$xfer += $output->writeString($this->regionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityCode !== null) {
			
			$xfer += $output->writeFieldBegin('cityCode');
			$xfer += $output->writeString($this->cityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txRegionCode !== null) {
			
			$xfer += $output->writeFieldBegin('txRegionCode');
			$xfer += $output->writeString($this->txRegionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txStoreCode !== null) {
			
			$xfer += $output->writeFieldBegin('txStoreCode');
			$xfer += $output->writeString($this->txStoreCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->runningState !== null) {
			
			$xfer += $output->writeFieldBegin('runningState');
			$xfer += $output->writeI32($this->runningState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceCode !== null) {
			
			$xfer += $output->writeFieldBegin('provinceCode');
			$xfer += $output->writeString($this->provinceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>