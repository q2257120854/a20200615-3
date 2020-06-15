<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutTpsResponse {
	
	static $_TSPEC;
	public $resultCode = null;
	public $resultMessage = null;
	public $transactionId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'resultCode'
			),
			2 => array(
			'var' => 'resultMessage'
			),
			3 => array(
			'var' => 'transactionId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['resultCode'])){
				
				$this->resultCode = $vals['resultCode'];
			}
			
			
			if (isset($vals['resultMessage'])){
				
				$this->resultMessage = $vals['resultMessage'];
			}
			
			
			if (isset($vals['transactionId'])){
				
				$this->transactionId = $vals['transactionId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutTpsResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("resultCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->resultCode); 
				
			}
			
			
			
			
			if ("resultMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultMessage);
				
			}
			
			
			
			
			if ("transactionId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transactionId);
				
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
		
		$xfer += $output->writeFieldBegin('resultCode');
		$xfer += $output->writeI32($this->resultCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultMessage');
		$xfer += $output->writeString($this->resultMessage);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transactionId !== null) {
			
			$xfer += $output->writeFieldBegin('transactionId');
			$xfer += $output->writeString($this->transactionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>