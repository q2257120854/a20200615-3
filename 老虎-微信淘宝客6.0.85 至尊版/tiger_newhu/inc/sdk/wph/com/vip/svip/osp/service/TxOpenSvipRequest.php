<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class TxOpenSvipRequest {
	
	static $_TSPEC;
	public $userIp = null;
	public $orderSn = null;
	public $tencentMemberType = null;
	public $openId = null;
	public $tencentUserId = null;
	public $tencentUserType = null;
	public $svipType = null;
	public $dataSign = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userIp'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'tencentMemberType'
			),
			4 => array(
			'var' => 'openId'
			),
			5 => array(
			'var' => 'tencentUserId'
			),
			6 => array(
			'var' => 'tencentUserType'
			),
			7 => array(
			'var' => 'svipType'
			),
			8 => array(
			'var' => 'dataSign'
			),
			9 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userIp'])){
				
				$this->userIp = $vals['userIp'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['tencentMemberType'])){
				
				$this->tencentMemberType = $vals['tencentMemberType'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['tencentUserId'])){
				
				$this->tencentUserId = $vals['tencentUserId'];
			}
			
			
			if (isset($vals['tencentUserType'])){
				
				$this->tencentUserType = $vals['tencentUserType'];
			}
			
			
			if (isset($vals['svipType'])){
				
				$this->svipType = $vals['svipType'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TxOpenSvipRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userIp);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("tencentMemberType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tencentMemberType);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("tencentUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tencentUserId);
				
			}
			
			
			
			
			if ("tencentUserType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tencentUserType);
				
			}
			
			
			
			
			if ("svipType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipType);
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataSign);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
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
		
		if($this->userIp !== null) {
			
			$xfer += $output->writeFieldBegin('userIp');
			$xfer += $output->writeString($this->userIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tencentMemberType !== null) {
			
			$xfer += $output->writeFieldBegin('tencentMemberType');
			$xfer += $output->writeString($this->tencentMemberType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tencentUserId !== null) {
			
			$xfer += $output->writeFieldBegin('tencentUserId');
			$xfer += $output->writeString($this->tencentUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tencentUserType !== null) {
			
			$xfer += $output->writeFieldBegin('tencentUserType');
			$xfer += $output->writeString($this->tencentUserType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipType !== null) {
			
			$xfer += $output->writeFieldBegin('svipType');
			$xfer += $output->writeString($this->svipType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeString($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>