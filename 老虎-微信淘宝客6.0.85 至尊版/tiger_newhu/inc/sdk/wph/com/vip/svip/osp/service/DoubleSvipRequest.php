<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class DoubleSvipRequest {
	
	static $_TSPEC;
	public $apiKey = null;
	public $apiSign = null;
	public $userId = null;
	public $userMobile = null;
	public $userAccount = null;
	public $ip = null;
	public $tencentUserId = null;
	public $tencentUserType = null;
	public $svipType = null;
	public $tencentMemberType = null;
	public $orderSn = null;
	public $productId = null;
	public $svipToken = null;
	public $openId = null;
	public $productName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apiKey'
			),
			2 => array(
			'var' => 'apiSign'
			),
			3 => array(
			'var' => 'userId'
			),
			4 => array(
			'var' => 'userMobile'
			),
			5 => array(
			'var' => 'userAccount'
			),
			6 => array(
			'var' => 'ip'
			),
			7 => array(
			'var' => 'tencentUserId'
			),
			8 => array(
			'var' => 'tencentUserType'
			),
			9 => array(
			'var' => 'svipType'
			),
			10 => array(
			'var' => 'tencentMemberType'
			),
			11 => array(
			'var' => 'orderSn'
			),
			12 => array(
			'var' => 'productId'
			),
			13 => array(
			'var' => 'svipToken'
			),
			14 => array(
			'var' => 'openId'
			),
			15 => array(
			'var' => 'productName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apiKey'])){
				
				$this->apiKey = $vals['apiKey'];
			}
			
			
			if (isset($vals['apiSign'])){
				
				$this->apiSign = $vals['apiSign'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['userMobile'])){
				
				$this->userMobile = $vals['userMobile'];
			}
			
			
			if (isset($vals['userAccount'])){
				
				$this->userAccount = $vals['userAccount'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
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
			
			
			if (isset($vals['tencentMemberType'])){
				
				$this->tencentMemberType = $vals['tencentMemberType'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['productId'])){
				
				$this->productId = $vals['productId'];
			}
			
			
			if (isset($vals['svipToken'])){
				
				$this->svipToken = $vals['svipToken'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['productName'])){
				
				$this->productName = $vals['productName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DoubleSvipRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("apiKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apiKey);
				
			}
			
			
			
			
			if ("apiSign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apiSign);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("userMobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userMobile);
				
			}
			
			
			
			
			if ("userAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userAccount);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("tencentUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tencentUserId);
				
			}
			
			
			
			
			if ("tencentUserType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tencentUserType); 
				
			}
			
			
			
			
			if ("svipType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->svipType); 
				
			}
			
			
			
			
			if ("tencentMemberType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tencentMemberType); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("productId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productId);
				
			}
			
			
			
			
			if ("svipToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipToken);
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("productName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productName);
				
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
		
		if($this->apiKey !== null) {
			
			$xfer += $output->writeFieldBegin('apiKey');
			$xfer += $output->writeString($this->apiKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apiSign !== null) {
			
			$xfer += $output->writeFieldBegin('apiSign');
			$xfer += $output->writeString($this->apiSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userMobile !== null) {
			
			$xfer += $output->writeFieldBegin('userMobile');
			$xfer += $output->writeString($this->userMobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userAccount !== null) {
			
			$xfer += $output->writeFieldBegin('userAccount');
			$xfer += $output->writeString($this->userAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tencentUserId !== null) {
			
			$xfer += $output->writeFieldBegin('tencentUserId');
			$xfer += $output->writeString($this->tencentUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tencentUserType !== null) {
			
			$xfer += $output->writeFieldBegin('tencentUserType');
			$xfer += $output->writeI32($this->tencentUserType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipType !== null) {
			
			$xfer += $output->writeFieldBegin('svipType');
			$xfer += $output->writeI32($this->svipType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tencentMemberType !== null) {
			
			$xfer += $output->writeFieldBegin('tencentMemberType');
			$xfer += $output->writeI32($this->tencentMemberType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productId !== null) {
			
			$xfer += $output->writeFieldBegin('productId');
			$xfer += $output->writeString($this->productId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipToken !== null) {
			
			$xfer += $output->writeFieldBegin('svipToken');
			$xfer += $output->writeString($this->svipToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productName !== null) {
			
			$xfer += $output->writeFieldBegin('productName');
			$xfer += $output->writeString($this->productName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>