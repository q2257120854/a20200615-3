<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class GetSearchWithFeaturesParamResultModel {
	
	static $_TSPEC;
	public $token = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'token'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['token'])){
				
				$this->token = $vals['token'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSearchWithFeaturesParamResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->token);
				
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
		
		$xfer += $output->writeFieldBegin('token');
		$xfer += $output->writeString($this->token);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>