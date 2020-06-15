<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class AdminConfigModel {
	
	static $_TSPEC;
	public $id = null;
	public $configType = null;
	public $configKey = null;
	public $configValue = null;
	public $createTime = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'configType'
			),
			3 => array(
			'var' => 'configKey'
			),
			4 => array(
			'var' => 'configValue'
			),
			5 => array(
			'var' => 'createTime'
			),
			6 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['configType'])){
				
				$this->configType = $vals['configType'];
			}
			
			
			if (isset($vals['configKey'])){
				
				$this->configKey = $vals['configKey'];
			}
			
			
			if (isset($vals['configValue'])){
				
				$this->configValue = $vals['configValue'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AdminConfigModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->id); 
				
			}
			
			
			
			
			if ("configType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->configType);
				
			}
			
			
			
			
			if ("configKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->configKey);
				
			}
			
			
			
			
			if ("configValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->configValue);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
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
			$xfer += $output->writeI32($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('configType');
		$xfer += $output->writeString($this->configType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('configKey');
		$xfer += $output->writeString($this->configKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('configValue');
		$xfer += $output->writeString($this->configValue);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>