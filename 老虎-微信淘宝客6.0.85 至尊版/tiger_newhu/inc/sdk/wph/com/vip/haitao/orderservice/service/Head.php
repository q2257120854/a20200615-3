<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class Head {
	
	static $_TSPEC;
	public $responseTime = null;
	public $sysResponseCode = null;
	public $sysResponseMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'responseTime'
			),
			2 => array(
			'var' => 'sysResponseCode'
			),
			3 => array(
			'var' => 'sysResponseMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['responseTime'])){
				
				$this->responseTime = $vals['responseTime'];
			}
			
			
			if (isset($vals['sysResponseCode'])){
				
				$this->sysResponseCode = $vals['sysResponseCode'];
			}
			
			
			if (isset($vals['sysResponseMsg'])){
				
				$this->sysResponseMsg = $vals['sysResponseMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Head';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("responseTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->responseTime);
				
			}
			
			
			
			
			if ("sysResponseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysResponseCode);
				
			}
			
			
			
			
			if ("sysResponseMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sysResponseMsg);
				
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
		
		if($this->responseTime !== null) {
			
			$xfer += $output->writeFieldBegin('responseTime');
			$xfer += $output->writeString($this->responseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysResponseCode !== null) {
			
			$xfer += $output->writeFieldBegin('sysResponseCode');
			$xfer += $output->writeString($this->sysResponseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sysResponseMsg !== null) {
			
			$xfer += $output->writeFieldBegin('sysResponseMsg');
			$xfer += $output->writeString($this->sysResponseMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>