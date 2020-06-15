<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class ResponseToOds {
	
	static $_TSPEC;
	public $messageId = null;
	public $result = null;
	public $dealMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'messageId'
			),
			2 => array(
			'var' => 'result'
			),
			3 => array(
			'var' => 'dealMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['messageId'])){
				
				$this->messageId = $vals['messageId'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['dealMsg'])){
				
				$this->dealMsg = $vals['dealMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ResponseToOds';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("messageId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->messageId);
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result);
				
			}
			
			
			
			
			if ("dealMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dealMsg);
				
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
		
		if($this->messageId !== null) {
			
			$xfer += $output->writeFieldBegin('messageId');
			$xfer += $output->writeString($this->messageId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeString($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dealMsg !== null) {
			
			$xfer += $output->writeFieldBegin('dealMsg');
			$xfer += $output->writeString($this->dealMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>