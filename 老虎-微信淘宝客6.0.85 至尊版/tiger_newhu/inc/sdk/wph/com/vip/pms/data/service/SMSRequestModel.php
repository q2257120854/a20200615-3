<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class SMSRequestModel {
	
	static $_TSPEC;
	public $domain = null;
	public $ip = null;
	public $milliseconds = null;
	public $msgContent = null;
	public $phoneNumbers = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domain'
			),
			2 => array(
			'var' => 'ip'
			),
			3 => array(
			'var' => 'milliseconds'
			),
			4 => array(
			'var' => 'msgContent'
			),
			5 => array(
			'var' => 'phoneNumbers'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domain'])){
				
				$this->domain = $vals['domain'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['milliseconds'])){
				
				$this->milliseconds = $vals['milliseconds'];
			}
			
			
			if (isset($vals['msgContent'])){
				
				$this->msgContent = $vals['msgContent'];
			}
			
			
			if (isset($vals['phoneNumbers'])){
				
				$this->phoneNumbers = $vals['phoneNumbers'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SMSRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("domain" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->domain);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("milliseconds" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->milliseconds); 
				
			}
			
			
			
			
			if ("msgContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgContent);
				
			}
			
			
			
			
			if ("phoneNumbers" == $schemeField){
				
				$needSkip = false;
				
				$this->phoneNumbers = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->phoneNumbers[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		$xfer += $output->writeFieldBegin('domain');
		$xfer += $output->writeString($this->domain);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->milliseconds !== null) {
			
			$xfer += $output->writeFieldBegin('milliseconds');
			$xfer += $output->writeI64($this->milliseconds);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('msgContent');
		$xfer += $output->writeString($this->msgContent);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->phoneNumbers !== null) {
			
			$xfer += $output->writeFieldBegin('phoneNumbers');
			
			if (!is_array($this->phoneNumbers)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->phoneNumbers as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>