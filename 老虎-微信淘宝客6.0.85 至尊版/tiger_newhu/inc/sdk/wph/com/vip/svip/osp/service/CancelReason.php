<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class CancelReason {
	
	static $_TSPEC;
	public $reasonId = null;
	public $quota = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonId'
			),
			2 => array(
			'var' => 'quota'
			),
			3 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['quota'])){
				
				$this->quota = $vals['quota'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelReason';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonId); 
				
			}
			
			
			
			
			if ("quota" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->quota);
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detail);
				
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
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI32($this->reasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quota !== null) {
			
			$xfer += $output->writeFieldBegin('quota');
			$xfer += $output->writeString($this->quota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail !== null) {
			
			$xfer += $output->writeFieldBegin('detail');
			$xfer += $output->writeString($this->detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>