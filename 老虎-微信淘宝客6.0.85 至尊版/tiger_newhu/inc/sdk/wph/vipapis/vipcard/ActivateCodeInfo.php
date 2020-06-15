<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipcard;

class ActivateCodeInfo {
	
	static $_TSPEC;
	public $card_code = null;
	public $activate_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'card_code'
			),
			2 => array(
			'var' => 'activate_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['activate_code'])){
				
				$this->activate_code = $vals['activate_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActivateCodeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("card_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->card_code);
				
			}
			
			
			
			
			if ("activate_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activate_code);
				
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
		
		$xfer += $output->writeFieldBegin('card_code');
		$xfer += $output->writeString($this->card_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activate_code');
		$xfer += $output->writeString($this->activate_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>