<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraPageReqParam {
	
	static $_TSPEC;
	public $cameraCode = null;
	public $storeCode = null;
	public $pageInfo = null;
	public $posCode = null;
	public $dzStoreCode = null;
	public $regionCode = null;
	public $cityCode = null;
	public $provinceCode = null;
	public $deleteFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cameraCode'
			),
			2 => array(
			'var' => 'storeCode'
			),
			3 => array(
			'var' => 'pageInfo'
			),
			4 => array(
			'var' => 'posCode'
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
			'var' => 'provinceCode'
			),
			9 => array(
			'var' => 'deleteFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cameraCode'])){
				
				$this->cameraCode = $vals['cameraCode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['pageInfo'])){
				
				$this->pageInfo = $vals['pageInfo'];
			}
			
			
			if (isset($vals['posCode'])){
				
				$this->posCode = $vals['posCode'];
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
			
			
			if (isset($vals['provinceCode'])){
				
				$this->provinceCode = $vals['provinceCode'];
			}
			
			
			if (isset($vals['deleteFlag'])){
				
				$this->deleteFlag = $vals['deleteFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraPageReqParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cameraCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraCode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("pageInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->pageInfo = new \com\vip\xstore\user\face\service\common\PageInfo();
				$this->pageInfo->read($input);
				
			}
			
			
			
			
			if ("posCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posCode);
				
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
			
			
			
			
			if ("provinceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceCode);
				
			}
			
			
			
			
			if ("deleteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deleteFlag); 
				
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
		
		
		$xfer += $output->writeFieldBegin('pageInfo');
		
		if (!is_object($this->pageInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->posCode !== null) {
			
			$xfer += $output->writeFieldBegin('posCode');
			$xfer += $output->writeString($this->posCode);
			
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
		
		
		if($this->provinceCode !== null) {
			
			$xfer += $output->writeFieldBegin('provinceCode');
			$xfer += $output->writeString($this->provinceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deleteFlag !== null) {
			
			$xfer += $output->writeFieldBegin('deleteFlag');
			$xfer += $output->writeI32($this->deleteFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>