<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class DrawRequest {
	
	static $_TSPEC;
	public $bizCode = null;
	public $encryptPhone = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bizCode'
			),
			2 => array(
			'var' => 'encryptPhone'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bizCode'])){
				
				$this->bizCode = $vals['bizCode'];
			}
			
			
			if (isset($vals['encryptPhone'])){
				
				$this->encryptPhone = $vals['encryptPhone'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DrawRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bizCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizCode);
				
			}
			
			
			
			
			if ("encryptPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->encryptPhone);
				
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
		
		if($this->bizCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizCode');
			$xfer += $output->writeString($this->bizCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->encryptPhone !== null) {
			
			$xfer += $output->writeFieldBegin('encryptPhone');
			$xfer += $output->writeString($this->encryptPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>