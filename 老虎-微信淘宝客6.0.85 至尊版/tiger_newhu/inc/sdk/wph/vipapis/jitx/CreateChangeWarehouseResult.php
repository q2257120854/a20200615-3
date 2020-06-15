<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class CreateChangeWarehouseResult {
	
	static $_TSPEC;
	public $result = null;
	public $workflow_sn = null;
	public $request_id = null;
	public $error_code = null;
	public $error_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'workflow_sn'
			),
			3 => array(
			'var' => 'request_id'
			),
			4 => array(
			'var' => 'error_code'
			),
			5 => array(
			'var' => 'error_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['workflow_sn'])){
				
				$this->workflow_sn = $vals['workflow_sn'];
			}
			
			
			if (isset($vals['request_id'])){
				
				$this->request_id = $vals['request_id'];
			}
			
			
			if (isset($vals['error_code'])){
				
				$this->error_code = $vals['error_code'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateChangeWarehouseResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result);
				
			}
			
			
			
			
			if ("workflow_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workflow_sn);
				
			}
			
			
			
			
			if ("request_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_id);
				
			}
			
			
			
			
			if ("error_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_code);
				
			}
			
			
			
			
			if ("error_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_msg);
				
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
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeString($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workflow_sn !== null) {
			
			$xfer += $output->writeFieldBegin('workflow_sn');
			$xfer += $output->writeString($this->workflow_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->request_id !== null) {
			
			$xfer += $output->writeFieldBegin('request_id');
			$xfer += $output->writeString($this->request_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_code !== null) {
			
			$xfer += $output->writeFieldBegin('error_code');
			$xfer += $output->writeString($this->error_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_msg !== null) {
			
			$xfer += $output->writeFieldBegin('error_msg');
			$xfer += $output->writeString($this->error_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>