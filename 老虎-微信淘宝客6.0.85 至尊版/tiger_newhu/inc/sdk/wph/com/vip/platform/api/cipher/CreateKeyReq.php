<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\api\cipher;

class CreateKeyReq {
	
	static $_TSPEC;
	public $keyCategory = null;
	public $keyName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'keyCategory'
			),
			2 => array(
			'var' => 'keyName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['keyCategory'])){
				
				$this->keyCategory = $vals['keyCategory'];
			}
			
			
			if (isset($vals['keyName'])){
				
				$this->keyName = $vals['keyName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateKeyReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("keyCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keyCategory);
				
			}
			
			
			
			
			if ("keyName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keyName);
				
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
		
		$xfer += $output->writeFieldBegin('keyCategory');
		$xfer += $output->writeString($this->keyCategory);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->keyName !== null) {
			
			$xfer += $output->writeFieldBegin('keyName');
			$xfer += $output->writeString($this->keyName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>