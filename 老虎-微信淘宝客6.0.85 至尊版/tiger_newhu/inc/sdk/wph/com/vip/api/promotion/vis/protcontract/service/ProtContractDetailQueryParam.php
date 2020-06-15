<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractDetailQueryParam {
	
	static $_TSPEC;
	public $protNo = null;
	public $processCompletedTimeStart = null;
	public $processCompletedTimeEnd = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protNo'
			),
			2 => array(
			'var' => 'processCompletedTimeStart'
			),
			3 => array(
			'var' => 'processCompletedTimeEnd'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protNo'])){
				
				$this->protNo = $vals['protNo'];
			}
			
			
			if (isset($vals['processCompletedTimeStart'])){
				
				$this->processCompletedTimeStart = $vals['processCompletedTimeStart'];
			}
			
			
			if (isset($vals['processCompletedTimeEnd'])){
				
				$this->processCompletedTimeEnd = $vals['processCompletedTimeEnd'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractDetailQueryParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("protNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->protNo);
				
			}
			
			
			
			
			if ("processCompletedTimeStart" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processCompletedTimeStart);
				
			}
			
			
			
			
			if ("processCompletedTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processCompletedTimeEnd);
				
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
		
		if($this->protNo !== null) {
			
			$xfer += $output->writeFieldBegin('protNo');
			$xfer += $output->writeString($this->protNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processCompletedTimeStart !== null) {
			
			$xfer += $output->writeFieldBegin('processCompletedTimeStart');
			$xfer += $output->writeString($this->processCompletedTimeStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processCompletedTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('processCompletedTimeEnd');
			$xfer += $output->writeString($this->processCompletedTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>