<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraInfoModel {
	
	static $_TSPEC;
	public $id = null;
	public $posCode = null;
	public $cameraCode = null;
	public $storeCode = null;
	public $dzStoreCode = null;
	public $regionCode = null;
	public $cityCode = null;
	public $createTime = null;
	public $updateTime = null;
	public $deleteFlag = null;
	public $storeName = null;
	public $provinceCode = null;
	public $provinceName = null;
	public $cityName = null;
	public $districtCode = null;
	public $district = null;
	public $contact = null;
	public $contactTel = null;
	public $contactMobile = null;
	public $zipCode = null;
	public $txRegionCode = null;
	public $txStoreCode = null;
	public $runningState = null;
	
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
			'var' => 'createTime'
			),
			9 => array(
			'var' => 'updateTime'
			),
			10 => array(
			'var' => 'deleteFlag'
			),
			11 => array(
			'var' => 'storeName'
			),
			12 => array(
			'var' => 'provinceCode'
			),
			13 => array(
			'var' => 'provinceName'
			),
			14 => array(
			'var' => 'cityName'
			),
			15 => array(
			'var' => 'districtCode'
			),
			16 => array(
			'var' => 'district'
			),
			17 => array(
			'var' => 'contact'
			),
			18 => array(
			'var' => 'contactTel'
			),
			19 => array(
			'var' => 'contactMobile'
			),
			20 => array(
			'var' => 'zipCode'
			),
			21 => array(
			'var' => 'txRegionCode'
			),
			22 => array(
			'var' => 'txStoreCode'
			),
			23 => array(
			'var' => 'runningState'
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
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['deleteFlag'])){
				
				$this->deleteFlag = $vals['deleteFlag'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
			if (isset($vals['provinceCode'])){
				
				$this->provinceCode = $vals['provinceCode'];
			}
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['districtCode'])){
				
				$this->districtCode = $vals['districtCode'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['contact'])){
				
				$this->contact = $vals['contact'];
			}
			
			
			if (isset($vals['contactTel'])){
				
				$this->contactTel = $vals['contactTel'];
			}
			
			
			if (isset($vals['contactMobile'])){
				
				$this->contactMobile = $vals['contactMobile'];
			}
			
			
			if (isset($vals['zipCode'])){
				
				$this->zipCode = $vals['zipCode'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraInfoModel';
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
			
			
			
			
			if ("storeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeName);
				
			}
			
			
			
			
			if ("provinceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceCode);
				
			}
			
			
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("districtCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->districtCode);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("contact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contact);
				
			}
			
			
			
			
			if ("contactTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactTel);
				
			}
			
			
			
			
			if ("contactMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactMobile);
				
			}
			
			
			
			
			if ("zipCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zipCode);
				
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
		
		
		$xfer += $output->writeFieldBegin('posCode');
		$xfer += $output->writeString($this->posCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cameraCode');
		$xfer += $output->writeString($this->cameraCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->storeName !== null) {
			
			$xfer += $output->writeFieldBegin('storeName');
			$xfer += $output->writeString($this->storeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceCode !== null) {
			
			$xfer += $output->writeFieldBegin('provinceCode');
			$xfer += $output->writeString($this->provinceCode);
			
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
		
		
		if($this->districtCode !== null) {
			
			$xfer += $output->writeFieldBegin('districtCode');
			$xfer += $output->writeString($this->districtCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contact !== null) {
			
			$xfer += $output->writeFieldBegin('contact');
			$xfer += $output->writeString($this->contact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactTel !== null) {
			
			$xfer += $output->writeFieldBegin('contactTel');
			$xfer += $output->writeString($this->contactTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactMobile !== null) {
			
			$xfer += $output->writeFieldBegin('contactMobile');
			$xfer += $output->writeString($this->contactMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zipCode !== null) {
			
			$xfer += $output->writeFieldBegin('zipCode');
			$xfer += $output->writeString($this->zipCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txRegionCode !== null) {
			
			$xfer += $output->writeFieldBegin('txRegionCode');
			$xfer += $output->writeString($this->txRegionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('txStoreCode');
		$xfer += $output->writeString($this->txStoreCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->runningState !== null) {
			
			$xfer += $output->writeFieldBegin('runningState');
			$xfer += $output->writeI32($this->runningState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>