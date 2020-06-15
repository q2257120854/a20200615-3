<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class SpecialRequestModel {
	
	static $_TSPEC;
	public $specialCoreModel = null;
	public $speConditionModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'specialCoreModel'
			),
			2 => array(
			'var' => 'speConditionModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['specialCoreModel'])){
				
				$this->specialCoreModel = $vals['specialCoreModel'];
			}
			
			
			if (isset($vals['speConditionModel'])){
				
				$this->speConditionModel = $vals['speConditionModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SpecialRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("specialCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->specialCoreModel = new \com\vip\pms\data\service\PmsSpecialCoreModel();
				$this->specialCoreModel->read($input);
				
			}
			
			
			
			
			if ("speConditionModel" == $schemeField){
				
				$needSkip = false;
				
				$this->speConditionModel = new \com\vip\pms\data\service\PmsSpeConditionModel();
				$this->speConditionModel->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('specialCoreModel');
		
		if (!is_object($this->specialCoreModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->specialCoreModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->speConditionModel !== null) {
			
			$xfer += $output->writeFieldBegin('speConditionModel');
			
			if (!is_object($this->speConditionModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->speConditionModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>