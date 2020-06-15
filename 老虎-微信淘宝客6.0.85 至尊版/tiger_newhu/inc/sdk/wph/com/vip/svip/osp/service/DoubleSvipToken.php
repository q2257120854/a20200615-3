<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class DoubleSvipToken {
	
	static $_TSPEC;
	public $accessToken = null;
	public $svipToken = null;
	public $expireTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'accessToken'
			),
			2 => array(
			'var' => 'svipToken'
			),
			3 => array(
			'var' => 'expireTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['accessToken'])){
				
				$this->accessToken = $vals['accessToken'];
			}
			
			
			if (isset($vals['svipToken'])){
				
				$this->svipToken = $vals['svipToken'];
			}
			
			
			if (isset($vals['expireTime'])){
				
				$this->expireTime = $vals['expireTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DoubleSvipToken';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("accessToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessToken);
				
			}
			
			
			
			
			if ("svipToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipToken);
				
			}
			
			
			
			
			if ("expireTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expireTime);
				
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
		
		if($this->accessToken !== null) {
			
			$xfer += $output->writeFieldBegin('accessToken');
			$xfer += $output->writeString($this->accessToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipToken !== null) {
			
			$xfer += $output->writeFieldBegin('svipToken');
			$xfer += $output->writeString($this->svipToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expireTime !== null) {
			
			$xfer += $output->writeFieldBegin('expireTime');
			$xfer += $output->writeString($this->expireTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>