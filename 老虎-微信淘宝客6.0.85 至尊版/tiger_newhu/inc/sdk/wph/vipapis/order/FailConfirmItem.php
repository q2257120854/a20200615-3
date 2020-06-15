<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class FailConfirmItem {
	
	static $_TSPEC;
	public $order_id = null;
	public $failure_msg = null;
	public $failure_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'failure_msg'
			),
			3 => array(
			'var' => 'failure_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['failure_msg'])){
				
				$this->failure_msg = $vals['failure_msg'];
			}
			
			
			if (isset($vals['failure_code'])){
				
				$this->failure_code = $vals['failure_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FailConfirmItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("failure_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failure_msg);
				
			}
			
			
			
			
			if ("failure_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failure_code);
				
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failure_msg !== null) {
			
			$xfer += $output->writeFieldBegin('failure_msg');
			$xfer += $output->writeString($this->failure_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failure_code !== null) {
			
			$xfer += $output->writeFieldBegin('failure_code');
			$xfer += $output->writeString($this->failure_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>