<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class PushQCResultResp {
	
	static $_TSPEC;
	public $is_success = null;
	public $failure_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'is_success'
			),
			2 => array(
			'var' => 'failure_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['is_success'])){
				
				$this->is_success = $vals['is_success'];
			}
			
			
			if (isset($vals['failure_msg'])){
				
				$this->failure_msg = $vals['failure_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PushQCResultResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("is_success" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_success);
				
			}
			
			
			
			
			if ("failure_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failure_msg);
				
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
		
		$xfer += $output->writeFieldBegin('is_success');
		$xfer += $output->writeBool($this->is_success);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->failure_msg !== null) {
			
			$xfer += $output->writeFieldBegin('failure_msg');
			$xfer += $output->writeString($this->failure_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>