<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class DoCancelRequest {
	
	static $_TSPEC;
	public $userId = null;
	public $reasonText = null;
	public $oaAccount = null;
	public $oaNo = null;
	public $operator = null;
	public $sign = null;
	public $batchNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'reasonText'
			),
			3 => array(
			'var' => 'oaAccount'
			),
			4 => array(
			'var' => 'oaNo'
			),
			5 => array(
			'var' => 'operator'
			),
			6 => array(
			'var' => 'sign'
			),
			7 => array(
			'var' => 'batchNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['reasonText'])){
				
				$this->reasonText = $vals['reasonText'];
			}
			
			
			if (isset($vals['oaAccount'])){
				
				$this->oaAccount = $vals['oaAccount'];
			}
			
			
			if (isset($vals['oaNo'])){
				
				$this->oaNo = $vals['oaNo'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DoCancelRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("reasonText" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonText);
				
			}
			
			
			
			
			if ("oaAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oaAccount);
				
			}
			
			
			
			
			if ("oaNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oaNo);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->batchNo); 
				
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonText !== null) {
			
			$xfer += $output->writeFieldBegin('reasonText');
			$xfer += $output->writeString($this->reasonText);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oaAccount !== null) {
			
			$xfer += $output->writeFieldBegin('oaAccount');
			$xfer += $output->writeString($this->oaAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oaNo !== null) {
			
			$xfer += $output->writeFieldBegin('oaNo');
			$xfer += $output->writeString($this->oaNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign !== null) {
			
			$xfer += $output->writeFieldBegin('sign');
			$xfer += $output->writeString($this->sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeI64($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>