<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipUserLimitStateResp {
	
	static $_TSPEC;
	public $formal = null;
	public $trial = null;
	public $userLv = null;
	public $userStatus = null;
	public $remainingDays = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'formal'
			),
			2 => array(
			'var' => 'trial'
			),
			3 => array(
			'var' => 'userLv'
			),
			4 => array(
			'var' => 'userStatus'
			),
			5 => array(
			'var' => 'remainingDays'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['formal'])){
				
				$this->formal = $vals['formal'];
			}
			
			
			if (isset($vals['trial'])){
				
				$this->trial = $vals['trial'];
			}
			
			
			if (isset($vals['userLv'])){
				
				$this->userLv = $vals['userLv'];
			}
			
			
			if (isset($vals['userStatus'])){
				
				$this->userStatus = $vals['userStatus'];
			}
			
			
			if (isset($vals['remainingDays'])){
				
				$this->remainingDays = $vals['remainingDays'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipUserLimitStateResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("formal" == $schemeField){
				
				$needSkip = false;
				
				$this->formal = new \com\vip\svip\osp\service\BaseResult();
				$this->formal->read($input);
				
			}
			
			
			
			
			if ("trial" == $schemeField){
				
				$needSkip = false;
				
				$this->trial = new \com\vip\svip\osp\service\BaseResult();
				$this->trial->read($input);
				
			}
			
			
			
			
			if ("userLv" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userLv);
				
			}
			
			
			
			
			if ("userStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userStatus); 
				
			}
			
			
			
			
			if ("remainingDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->remainingDays); 
				
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
		
		if($this->formal !== null) {
			
			$xfer += $output->writeFieldBegin('formal');
			
			if (!is_object($this->formal)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->formal->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trial !== null) {
			
			$xfer += $output->writeFieldBegin('trial');
			
			if (!is_object($this->trial)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->trial->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userLv !== null) {
			
			$xfer += $output->writeFieldBegin('userLv');
			$xfer += $output->writeString($this->userLv);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userStatus');
		$xfer += $output->writeI32($this->userStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remainingDays');
		$xfer += $output->writeI32($this->remainingDays);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>