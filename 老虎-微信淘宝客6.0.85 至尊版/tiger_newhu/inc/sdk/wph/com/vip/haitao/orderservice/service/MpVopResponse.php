<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class MpVopResponse {
	
	static $_TSPEC;
	public $responseData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'responseData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['responseData'])){
				
				$this->responseData = $vals['responseData'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MpVopResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("responseData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->responseData);
				
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
		
		if($this->responseData !== null) {
			
			$xfer += $output->writeFieldBegin('responseData');
			$xfer += $output->writeString($this->responseData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>