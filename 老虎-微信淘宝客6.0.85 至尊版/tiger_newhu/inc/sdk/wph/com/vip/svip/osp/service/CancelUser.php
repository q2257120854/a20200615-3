<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class CancelUser {
	
	static $_TSPEC;
	public $userId = null;
	public $account = null;
	public $oa = null;
	public $vipCardAmount = null;
	public $reasonList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'account'
			),
			3 => array(
			'var' => 'oa'
			),
			4 => array(
			'var' => 'vipCardAmount'
			),
			5 => array(
			'var' => 'reasonList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['oa'])){
				
				$this->oa = $vals['oa'];
			}
			
			
			if (isset($vals['vipCardAmount'])){
				
				$this->vipCardAmount = $vals['vipCardAmount'];
			}
			
			
			if (isset($vals['reasonList'])){
				
				$this->reasonList = $vals['reasonList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelUser';
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
			
			
			
			
			if ("account" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->account);
				
			}
			
			
			
			
			if ("oa" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oa);
				
			}
			
			
			
			
			if ("vipCardAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipCardAmount);
				
			}
			
			
			
			
			if ("reasonList" == $schemeField){
				
				$needSkip = false;
				
				$this->reasonList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\CancelReason();
						$elem0->read($input);
						
						$this->reasonList[$_size0++] = $elem0;
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
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->account !== null) {
			
			$xfer += $output->writeFieldBegin('account');
			$xfer += $output->writeString($this->account);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oa !== null) {
			
			$xfer += $output->writeFieldBegin('oa');
			$xfer += $output->writeString($this->oa);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipCardAmount !== null) {
			
			$xfer += $output->writeFieldBegin('vipCardAmount');
			$xfer += $output->writeString($this->vipCardAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonList !== null) {
			
			$xfer += $output->writeFieldBegin('reasonList');
			
			if (!is_array($this->reasonList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reasonList as $iter0){
				
				
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