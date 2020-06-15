<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BatchCancelRequestV2 {
	
	static $_TSPEC;
	public $batchNo = null;
	public $oaAccount = null;
	public $oaNo = null;
	public $operator = null;
	public $userList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batchNo'
			),
			2 => array(
			'var' => 'oaAccount'
			),
			3 => array(
			'var' => 'oaNo'
			),
			4 => array(
			'var' => 'operator'
			),
			5 => array(
			'var' => 'userList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
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
			
			
			if (isset($vals['userList'])){
				
				$this->userList = $vals['userList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchCancelRequestV2';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
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
			
			
			
			
			if ("userList" == $schemeField){
				
				$needSkip = false;
				
				$this->userList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\CancelUserV2();
						$elem0->read($input);
						
						$this->userList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
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
		
		
		if($this->userList !== null) {
			
			$xfer += $output->writeFieldBegin('userList');
			
			if (!is_array($this->userList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->userList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>