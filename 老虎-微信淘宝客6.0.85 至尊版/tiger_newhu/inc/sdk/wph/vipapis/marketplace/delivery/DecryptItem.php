<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class DecryptItem {
	
	static $_TSPEC;
	public $encrypt_code = null;
	public $decrypt_code = null;
	public $state = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'encrypt_code'
			),
			2 => array(
			'var' => 'decrypt_code'
			),
			3 => array(
			'var' => 'state'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['encrypt_code'])){
				
				$this->encrypt_code = $vals['encrypt_code'];
			}
			
			
			if (isset($vals['decrypt_code'])){
				
				$this->decrypt_code = $vals['decrypt_code'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DecryptItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("encrypt_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->encrypt_code);
				
			}
			
			
			
			
			if ("decrypt_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->decrypt_code);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->state); 
				
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
		
		$xfer += $output->writeFieldBegin('encrypt_code');
		$xfer += $output->writeString($this->encrypt_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->decrypt_code !== null) {
			
			$xfer += $output->writeFieldBegin('decrypt_code');
			$xfer += $output->writeString($this->decrypt_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeI32($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>