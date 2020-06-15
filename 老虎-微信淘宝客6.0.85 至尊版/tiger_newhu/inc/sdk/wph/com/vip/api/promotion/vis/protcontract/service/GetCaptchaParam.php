<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class GetCaptchaParam {
	
	static $_TSPEC;
	public $captchaType = null;
	public $id = null;
	public $ip = null;
	public $cid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'captchaType'
			),
			2 => array(
			'var' => 'id'
			),
			3 => array(
			'var' => 'ip'
			),
			4 => array(
			'var' => 'cid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['captchaType'])){
				
				$this->captchaType = $vals['captchaType'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['cid'])){
				
				$this->cid = $vals['cid'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetCaptchaParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("captchaType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->captchaType); 
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("cid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cid);
				
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
		
		$xfer += $output->writeFieldBegin('captchaType');
		$xfer += $output->writeByte($this->captchaType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ip');
		$xfer += $output->writeString($this->ip);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cid !== null) {
			
			$xfer += $output->writeFieldBegin('cid');
			$xfer += $output->writeString($this->cid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>