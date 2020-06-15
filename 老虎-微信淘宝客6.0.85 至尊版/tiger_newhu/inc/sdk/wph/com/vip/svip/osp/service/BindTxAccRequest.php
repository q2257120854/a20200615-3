<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BindTxAccRequest {
	
	static $_TSPEC;
	public $userId = null;
	public $userIp = null;
	public $mid = null;
	public $txAccType = null;
	public $txOpenId = null;
	public $txFigureUrl = null;
	public $txNickName = null;
	public $appId = null;
	public $dataSign = null;
	public $accessToken = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'userIp'
			),
			3 => array(
			'var' => 'mid'
			),
			4 => array(
			'var' => 'txAccType'
			),
			5 => array(
			'var' => 'txOpenId'
			),
			6 => array(
			'var' => 'txFigureUrl'
			),
			7 => array(
			'var' => 'txNickName'
			),
			8 => array(
			'var' => 'appId'
			),
			9 => array(
			'var' => 'dataSign'
			),
			10 => array(
			'var' => 'accessToken'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['userIp'])){
				
				$this->userIp = $vals['userIp'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['txAccType'])){
				
				$this->txAccType = $vals['txAccType'];
			}
			
			
			if (isset($vals['txOpenId'])){
				
				$this->txOpenId = $vals['txOpenId'];
			}
			
			
			if (isset($vals['txFigureUrl'])){
				
				$this->txFigureUrl = $vals['txFigureUrl'];
			}
			
			
			if (isset($vals['txNickName'])){
				
				$this->txNickName = $vals['txNickName'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
			if (isset($vals['accessToken'])){
				
				$this->accessToken = $vals['accessToken'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BindTxAccRequest';
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
			
			
			
			
			if ("userIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userIp);
				
			}
			
			
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("txAccType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->txAccType); 
				
			}
			
			
			
			
			if ("txOpenId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txOpenId);
				
			}
			
			
			
			
			if ("txFigureUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txFigureUrl);
				
			}
			
			
			
			
			if ("txNickName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txNickName);
				
			}
			
			
			
			
			if ("appId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appId);
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataSign);
				
			}
			
			
			
			
			if ("accessToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessToken);
				
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
		
		
		if($this->userIp !== null) {
			
			$xfer += $output->writeFieldBegin('userIp');
			$xfer += $output->writeString($this->userIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('txAccType');
		$xfer += $output->writeI32($this->txAccType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->txOpenId !== null) {
			
			$xfer += $output->writeFieldBegin('txOpenId');
			$xfer += $output->writeString($this->txOpenId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txFigureUrl !== null) {
			
			$xfer += $output->writeFieldBegin('txFigureUrl');
			$xfer += $output->writeString($this->txFigureUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txNickName !== null) {
			
			$xfer += $output->writeFieldBegin('txNickName');
			$xfer += $output->writeString($this->txNickName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeString($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessToken !== null) {
			
			$xfer += $output->writeFieldBegin('accessToken');
			$xfer += $output->writeString($this->accessToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>