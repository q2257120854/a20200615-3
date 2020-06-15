<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BuyLimitState {
	
	static $_TSPEC;
	public $limit = null;
	public $limitState = null;
	public $limitMsg = null;
	public $userStatus = null;
	public $canTry = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limit'
			),
			2 => array(
			'var' => 'limitState'
			),
			3 => array(
			'var' => 'limitMsg'
			),
			4 => array(
			'var' => 'userStatus'
			),
			5 => array(
			'var' => 'canTry'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['limitState'])){
				
				$this->limitState = $vals['limitState'];
			}
			
			
			if (isset($vals['limitMsg'])){
				
				$this->limitMsg = $vals['limitMsg'];
			}
			
			
			if (isset($vals['userStatus'])){
				
				$this->userStatus = $vals['userStatus'];
			}
			
			
			if (isset($vals['canTry'])){
				
				$this->canTry = $vals['canTry'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BuyLimitState';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->limit);
				
			}
			
			
			
			
			if ("limitState" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limitState); 
				
			}
			
			
			
			
			if ("limitMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->limitMsg);
				
			}
			
			
			
			
			if ("userStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userStatus); 
				
			}
			
			
			
			
			if ("canTry" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canTry);
				
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
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeBool($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limitState');
		$xfer += $output->writeI32($this->limitState);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limitMsg !== null) {
			
			$xfer += $output->writeFieldBegin('limitMsg');
			$xfer += $output->writeString($this->limitMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userStatus');
		$xfer += $output->writeI32($this->userStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('canTry');
		$xfer += $output->writeBool($this->canTry);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>