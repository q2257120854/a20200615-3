<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class UploadImageResult {
	
	static $_TSPEC;
	public $process_status = null;
	public $failure_info = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'process_status'
			),
			2 => array(
			'var' => 'failure_info'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['process_status'])){
				
				$this->process_status = $vals['process_status'];
			}
			
			
			if (isset($vals['failure_info'])){
				
				$this->failure_info = $vals['failure_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadImageResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("process_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->process_status); 
				
			}
			
			
			
			
			if ("failure_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failure_info);
				
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
		
		$xfer += $output->writeFieldBegin('process_status');
		$xfer += $output->writeI32($this->process_status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->failure_info !== null) {
			
			$xfer += $output->writeFieldBegin('failure_info');
			$xfer += $output->writeString($this->failure_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>