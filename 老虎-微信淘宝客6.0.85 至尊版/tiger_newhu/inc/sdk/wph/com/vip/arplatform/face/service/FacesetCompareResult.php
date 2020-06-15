<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class FacesetCompareResult {
	
	static $_TSPEC;
	public $time_used = null;
	public $confidence = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'time_used'
			),
			2 => array(
			'var' => 'confidence'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['time_used'])){
				
				$this->time_used = $vals['time_used'];
			}
			
			
			if (isset($vals['confidence'])){
				
				$this->confidence = $vals['confidence'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FacesetCompareResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("time_used" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->time_used); 
				
			}
			
			
			
			
			if ("confidence" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->confidence);
				
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
		
		$xfer += $output->writeFieldBegin('time_used');
		$xfer += $output->writeI64($this->time_used);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confidence');
		$xfer += $output->writeDouble($this->confidence);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>