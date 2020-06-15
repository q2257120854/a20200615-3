<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BaseRequestHeader {
	
	static $_TSPEC;
	public $userId = null;
	public $tokenId = null;
	public $tokenSecret = null;
	public $ip = null;
	public $marsCid = null;
	public $needSaveAmount = null;
	public $needFigureUrl = null;
	public $needRebate = null;
	public $needPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'tokenId'
			),
			3 => array(
			'var' => 'tokenSecret'
			),
			4 => array(
			'var' => 'ip'
			),
			5 => array(
			'var' => 'marsCid'
			),
			6 => array(
			'var' => 'needSaveAmount'
			),
			7 => array(
			'var' => 'needFigureUrl'
			),
			8 => array(
			'var' => 'needRebate'
			),
			9 => array(
			'var' => 'needPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['tokenId'])){
				
				$this->tokenId = $vals['tokenId'];
			}
			
			
			if (isset($vals['tokenSecret'])){
				
				$this->tokenSecret = $vals['tokenSecret'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['marsCid'])){
				
				$this->marsCid = $vals['marsCid'];
			}
			
			
			if (isset($vals['needSaveAmount'])){
				
				$this->needSaveAmount = $vals['needSaveAmount'];
			}
			
			
			if (isset($vals['needFigureUrl'])){
				
				$this->needFigureUrl = $vals['needFigureUrl'];
			}
			
			
			if (isset($vals['needRebate'])){
				
				$this->needRebate = $vals['needRebate'];
			}
			
			
			if (isset($vals['needPrice'])){
				
				$this->needPrice = $vals['needPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BaseRequestHeader';
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
			
			
			
			
			if ("tokenId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tokenId);
				
			}
			
			
			
			
			if ("tokenSecret" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tokenSecret);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("marsCid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marsCid);
				
			}
			
			
			
			
			if ("needSaveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needSaveAmount);
				
			}
			
			
			
			
			if ("needFigureUrl" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needFigureUrl);
				
			}
			
			
			
			
			if ("needRebate" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needRebate);
				
			}
			
			
			
			
			if ("needPrice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needPrice);
				
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tokenId !== null) {
			
			$xfer += $output->writeFieldBegin('tokenId');
			$xfer += $output->writeString($this->tokenId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tokenSecret !== null) {
			
			$xfer += $output->writeFieldBegin('tokenSecret');
			$xfer += $output->writeString($this->tokenSecret);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marsCid !== null) {
			
			$xfer += $output->writeFieldBegin('marsCid');
			$xfer += $output->writeString($this->marsCid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needSaveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('needSaveAmount');
			$xfer += $output->writeBool($this->needSaveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needFigureUrl !== null) {
			
			$xfer += $output->writeFieldBegin('needFigureUrl');
			$xfer += $output->writeBool($this->needFigureUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needRebate !== null) {
			
			$xfer += $output->writeFieldBegin('needRebate');
			$xfer += $output->writeBool($this->needRebate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needPrice !== null) {
			
			$xfer += $output->writeFieldBegin('needPrice');
			$xfer += $output->writeBool($this->needPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>