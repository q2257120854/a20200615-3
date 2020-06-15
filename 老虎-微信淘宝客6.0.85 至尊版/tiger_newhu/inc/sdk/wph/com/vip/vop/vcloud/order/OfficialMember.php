<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OfficialMember {
	
	static $_TSPEC;
	public $memberId = null;
	public $account = null;
	public $customerGroup = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'memberId'
			),
			2 => array(
			'var' => 'account'
			),
			3 => array(
			'var' => 'customerGroup'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['memberId'])){
				
				$this->memberId = $vals['memberId'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['customerGroup'])){
				
				$this->customerGroup = $vals['customerGroup'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfficialMember';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("memberId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memberId);
				
			}
			
			
			
			
			if ("account" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->account);
				
			}
			
			
			
			
			if ("customerGroup" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerGroup);
				
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
		
		if($this->memberId !== null) {
			
			$xfer += $output->writeFieldBegin('memberId');
			$xfer += $output->writeString($this->memberId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->account !== null) {
			
			$xfer += $output->writeFieldBegin('account');
			$xfer += $output->writeString($this->account);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerGroup !== null) {
			
			$xfer += $output->writeFieldBegin('customerGroup');
			$xfer += $output->writeString($this->customerGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>