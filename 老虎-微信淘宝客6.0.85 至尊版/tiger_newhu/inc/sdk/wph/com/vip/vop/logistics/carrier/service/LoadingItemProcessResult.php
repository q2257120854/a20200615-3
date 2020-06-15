<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class LoadingItemProcessResult {
	
	static $_TSPEC;
	public $logistics_no = null;
	public $trade_id = null;
	public $process_status = null;
	public $error_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logistics_no'
			),
			2 => array(
			'var' => 'trade_id'
			),
			3 => array(
			'var' => 'process_status'
			),
			4 => array(
			'var' => 'error_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['process_status'])){
				
				$this->process_status = $vals['process_status'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LoadingItemProcessResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("process_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->process_status); 
				
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
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('trade_id');
			$xfer += $output->writeString($this->trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->process_status !== null) {
			
			$xfer += $output->writeFieldBegin('process_status');
			$xfer += $output->writeI32($this->process_status);
			
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