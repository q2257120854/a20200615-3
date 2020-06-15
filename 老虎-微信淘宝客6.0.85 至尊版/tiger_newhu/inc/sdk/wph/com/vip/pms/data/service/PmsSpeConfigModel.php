<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsSpeConfigModel {
	
	static $_TSPEC;
	public $configType = null;
	public $configValue = null;
	public $configDesc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'configType'
			),
			2 => array(
			'var' => 'configValue'
			),
			3 => array(
			'var' => 'configDesc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['configType'])){
				
				$this->configType = $vals['configType'];
			}
			
			
			if (isset($vals['configValue'])){
				
				$this->configValue = $vals['configValue'];
			}
			
			
			if (isset($vals['configDesc'])){
				
				$this->configDesc = $vals['configDesc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsSpeConfigModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("configType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->configType); 
				
			}
			
			
			
			
			if ("configValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->configValue);
				
			}
			
			
			
			
			if ("configDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->configDesc);
				
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
		
		if($this->configType !== null) {
			
			$xfer += $output->writeFieldBegin('configType');
			$xfer += $output->writeI32($this->configType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('configValue');
		$xfer += $output->writeString($this->configValue);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->configDesc !== null) {
			
			$xfer += $output->writeFieldBegin('configDesc');
			$xfer += $output->writeString($this->configDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>