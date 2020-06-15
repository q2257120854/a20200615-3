<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\oauth;

class RefreshTokenResponse {
	
	static $_TSPEC;
	public $access_token = null;
	public $create_at = null;
	public $expires_in = null;
	public $expires_time = null;
	public $is_expired = null;
	public $refresh_token = null;
	public $refresh_expires_time = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'access_token'
			),
			2 => array(
			'var' => 'create_at'
			),
			3 => array(
			'var' => 'expires_in'
			),
			4 => array(
			'var' => 'expires_time'
			),
			5 => array(
			'var' => 'is_expired'
			),
			6 => array(
			'var' => 'refresh_token'
			),
			7 => array(
			'var' => 'refresh_expires_time'
			),
			8 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['access_token'])){
				
				$this->access_token = $vals['access_token'];
			}
			
			
			if (isset($vals['create_at'])){
				
				$this->create_at = $vals['create_at'];
			}
			
			
			if (isset($vals['expires_in'])){
				
				$this->expires_in = $vals['expires_in'];
			}
			
			
			if (isset($vals['expires_time'])){
				
				$this->expires_time = $vals['expires_time'];
			}
			
			
			if (isset($vals['is_expired'])){
				
				$this->is_expired = $vals['is_expired'];
			}
			
			
			if (isset($vals['refresh_token'])){
				
				$this->refresh_token = $vals['refresh_token'];
			}
			
			
			if (isset($vals['refresh_expires_time'])){
				
				$this->refresh_expires_time = $vals['refresh_expires_time'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefreshTokenResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("access_token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->access_token);
				
			}
			
			
			
			
			if ("create_at" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_at);
				
			}
			
			
			
			
			if ("expires_in" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expires_in); 
				
			}
			
			
			
			
			if ("expires_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expires_time);
				
			}
			
			
			
			
			if ("is_expired" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_expired);
				
			}
			
			
			
			
			if ("refresh_token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refresh_token);
				
			}
			
			
			
			
			if ("refresh_expires_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refresh_expires_time);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
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
		
		if($this->access_token !== null) {
			
			$xfer += $output->writeFieldBegin('access_token');
			$xfer += $output->writeString($this->access_token);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_at !== null) {
			
			$xfer += $output->writeFieldBegin('create_at');
			$xfer += $output->writeI64($this->create_at);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expires_in !== null) {
			
			$xfer += $output->writeFieldBegin('expires_in');
			$xfer += $output->writeI64($this->expires_in);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expires_time !== null) {
			
			$xfer += $output->writeFieldBegin('expires_time');
			$xfer += $output->writeI64($this->expires_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_expired !== null) {
			
			$xfer += $output->writeFieldBegin('is_expired');
			$xfer += $output->writeBool($this->is_expired);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refresh_token !== null) {
			
			$xfer += $output->writeFieldBegin('refresh_token');
			$xfer += $output->writeString($this->refresh_token);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refresh_expires_time !== null) {
			
			$xfer += $output->writeFieldBegin('refresh_expires_time');
			$xfer += $output->writeI64($this->refresh_expires_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>