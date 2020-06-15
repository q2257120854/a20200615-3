<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class AccountInfoResult {
	
	static $_TSPEC;
	public $vipAcc = null;
	public $vipFigureUrl = null;
	public $txNickName = null;
	public $txAccType = null;
	public $txOpenId = null;
	public $txFigureUrl = null;
	public $state = null;
	public $txAppId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vipAcc'
			),
			2 => array(
			'var' => 'vipFigureUrl'
			),
			3 => array(
			'var' => 'txNickName'
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
			'var' => 'state'
			),
			8 => array(
			'var' => 'txAppId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vipAcc'])){
				
				$this->vipAcc = $vals['vipAcc'];
			}
			
			
			if (isset($vals['vipFigureUrl'])){
				
				$this->vipFigureUrl = $vals['vipFigureUrl'];
			}
			
			
			if (isset($vals['txNickName'])){
				
				$this->txNickName = $vals['txNickName'];
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
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['txAppId'])){
				
				$this->txAppId = $vals['txAppId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AccountInfoResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vipAcc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipAcc);
				
			}
			
			
			
			
			if ("vipFigureUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipFigureUrl);
				
			}
			
			
			
			
			if ("txNickName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txNickName);
				
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
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->state); 
				
			}
			
			
			
			
			if ("txAppId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txAppId);
				
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
		
		if($this->vipAcc !== null) {
			
			$xfer += $output->writeFieldBegin('vipAcc');
			$xfer += $output->writeString($this->vipAcc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipFigureUrl !== null) {
			
			$xfer += $output->writeFieldBegin('vipFigureUrl');
			$xfer += $output->writeString($this->vipFigureUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->txNickName !== null) {
			
			$xfer += $output->writeFieldBegin('txNickName');
			$xfer += $output->writeString($this->txNickName);
			
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
		
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeI32($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->txAppId !== null) {
			
			$xfer += $output->writeFieldBegin('txAppId');
			$xfer += $output->writeString($this->txAppId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>