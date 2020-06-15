<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraStateLogUploadResult {
	
	static $_TSPEC;
	public $returnCode = null;
	public $returnMessage = null;
	public $successCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnCode'
			),
			2 => array(
			'var' => 'returnMessage'
			),
			3 => array(
			'var' => 'successCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnCode'])){
				
				$this->returnCode = $vals['returnCode'];
			}
			
			
			if (isset($vals['returnMessage'])){
				
				$this->returnMessage = $vals['returnMessage'];
			}
			
			
			if (isset($vals['successCount'])){
				
				$this->successCount = $vals['successCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraStateLogUploadResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnCode); 
				
			}
			
			
			
			
			if ("returnMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMessage);
				
			}
			
			
			
			
			if ("successCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->successCount); 
				
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
		
		if($this->returnCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnCode');
			$xfer += $output->writeI32($this->returnCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMessage !== null) {
			
			$xfer += $output->writeFieldBegin('returnMessage');
			$xfer += $output->writeString($this->returnMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successCount !== null) {
			
			$xfer += $output->writeFieldBegin('successCount');
			$xfer += $output->writeI32($this->successCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>