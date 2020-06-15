<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraStateLogParam {
	
	static $_TSPEC;
	public $boxMacAddr = null;
	public $boxTemperature = null;
	public $boxPing = null;
	public $boxSoftwareVersion = null;
	public $cameraStateLogs = null;
	public $stateLogTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'boxMacAddr'
			),
			2 => array(
			'var' => 'boxTemperature'
			),
			3 => array(
			'var' => 'boxPing'
			),
			5 => array(
			'var' => 'boxSoftwareVersion'
			),
			6 => array(
			'var' => 'cameraStateLogs'
			),
			7 => array(
			'var' => 'stateLogTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
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
			
			
			if (isset($vals['cameraStateLogs'])){
				
				$this->cameraStateLogs = $vals['cameraStateLogs'];
			}
			
			
			if (isset($vals['stateLogTime'])){
				
				$this->stateLogTime = $vals['stateLogTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraStateLogParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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
			
			
			
			
			if ("cameraStateLogs" == $schemeField){
				
				$needSkip = false;
				
				$this->cameraStateLogs = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\user\face\service\XstoreCameraStateLogModel();
						$elem0->read($input);
						
						$this->cameraStateLogs[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("stateLogTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stateLogTime);
				
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
		
		
		if($this->cameraStateLogs !== null) {
			
			$xfer += $output->writeFieldBegin('cameraStateLogs');
			
			if (!is_array($this->cameraStateLogs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->cameraStateLogs as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stateLogTime !== null) {
			
			$xfer += $output->writeFieldBegin('stateLogTime');
			$xfer += $output->writeI64($this->stateLogTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>