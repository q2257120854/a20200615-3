<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\oauth;

class RefreshTokenRequest {
	
	static $_TSPEC;
	public $refresh_token = null;
	public $client_id = null;
	public $client_secret = null;
	public $request_client_ip = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refresh_token'
			),
			2 => array(
			'var' => 'client_id'
			),
			3 => array(
			'var' => 'client_secret'
			),
			4 => array(
			'var' => 'request_client_ip'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refresh_token'])){
				
				$this->refresh_token = $vals['refresh_token'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['client_secret'])){
				
				$this->client_secret = $vals['client_secret'];
			}
			
			
			if (isset($vals['request_client_ip'])){
				
				$this->request_client_ip = $vals['request_client_ip'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefreshTokenRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refresh_token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refresh_token);
				
			}
			
			
			
			
			if ("client_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client_id);
				
			}
			
			
			
			
			if ("client_secret" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client_secret);
				
			}
			
			
			
			
			if ("request_client_ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_client_ip);
				
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
		
		$xfer += $output->writeFieldBegin('refresh_token');
		$xfer += $output->writeString($this->refresh_token);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_secret');
		$xfer += $output->writeString($this->client_secret);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('request_client_ip');
		$xfer += $output->writeString($this->request_client_ip);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>