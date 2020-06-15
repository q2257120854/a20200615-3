<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraStateLogModel {
	
	static $_TSPEC;
	public $cameraCode = null;
	public $cameraStateCode = null;
	public $cameraPing = null;
	public $cameraStateMsg = null;
	public $cameraFormat = null;
	public $cameraFps = null;
	public $cameraResolution = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cameraCode'
			),
			2 => array(
			'var' => 'cameraStateCode'
			),
			3 => array(
			'var' => 'cameraPing'
			),
			4 => array(
			'var' => 'cameraStateMsg'
			),
			5 => array(
			'var' => 'cameraFormat'
			),
			6 => array(
			'var' => 'cameraFps'
			),
			7 => array(
			'var' => 'cameraResolution'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraStateLogModel';
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>