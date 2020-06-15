<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class OfflineChannelInfo {
	
	static $_TSPEC;
	public $channelType = null;
	public $guideName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelType'
			),
			2 => array(
			'var' => 'guideName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelType'])){
				
				$this->channelType = $vals['channelType'];
			}
			
			
			if (isset($vals['guideName'])){
				
				$this->guideName = $vals['guideName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfflineChannelInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channelType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->channelType); 
				
			}
			
			
			
			
			if ("guideName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->guideName);
				
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
		
		$xfer += $output->writeFieldBegin('channelType');
		$xfer += $output->writeI32($this->channelType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->guideName !== null) {
			
			$xfer += $output->writeFieldBegin('guideName');
			$xfer += $output->writeString($this->guideName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>