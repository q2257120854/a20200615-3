<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class GetGroupValuesRequest {
	
	static $_TSPEC;
	public $group_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'group_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['group_code'])){
				
				$this->group_code = $vals['group_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetGroupValuesRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("group_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_code);
				
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
		
		if($this->group_code !== null) {
			
			$xfer += $output->writeFieldBegin('group_code');
			$xfer += $output->writeString($this->group_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>