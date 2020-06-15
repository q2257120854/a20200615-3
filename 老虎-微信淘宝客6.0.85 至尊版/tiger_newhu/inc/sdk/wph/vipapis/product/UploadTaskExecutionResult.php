<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class UploadTaskExecutionResult {
	
	static $_TSPEC;
	public $task_id = null;
	public $process_status = null;
	public $failure_code = null;
	public $failure_reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'task_id'
			),
			2 => array(
			'var' => 'process_status'
			),
			3 => array(
			'var' => 'failure_code'
			),
			4 => array(
			'var' => 'failure_reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['task_id'])){
				
				$this->task_id = $vals['task_id'];
			}
			
			
			if (isset($vals['process_status'])){
				
				$this->process_status = $vals['process_status'];
			}
			
			
			if (isset($vals['failure_code'])){
				
				$this->failure_code = $vals['failure_code'];
			}
			
			
			if (isset($vals['failure_reason'])){
				
				$this->failure_reason = $vals['failure_reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UploadTaskExecutionResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("task_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->task_id); 
				
			}
			
			
			
			
			if ("process_status" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->process_status); 
				
			}
			
			
			
			
			if ("failure_code" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->failure_code); 
				
			}
			
			
			
			
			if ("failure_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failure_reason);
				
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
		
		if($this->task_id !== null) {
			
			$xfer += $output->writeFieldBegin('task_id');
			$xfer += $output->writeI64($this->task_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->process_status !== null) {
			
			$xfer += $output->writeFieldBegin('process_status');
			$xfer += $output->writeI16($this->process_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failure_code !== null) {
			
			$xfer += $output->writeFieldBegin('failure_code');
			$xfer += $output->writeI16($this->failure_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failure_reason !== null) {
			
			$xfer += $output->writeFieldBegin('failure_reason');
			$xfer += $output->writeString($this->failure_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>