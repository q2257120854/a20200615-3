<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class Host {
	
	static $_TSPEC;
	public $partnerId = null;
	public $hostType = null;
	public $host = null;
	public $port = null;
	public $username = null;
	public $password = null;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'hostType'
			),
			3 => array(
			'var' => 'host'
			),
			4 => array(
			'var' => 'port'
			),
			5 => array(
			'var' => 'username'
			),
			6 => array(
			'var' => 'password'
			),
			7 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['hostType'])){
				
				$this->hostType = $vals['hostType'];
			}
			
			
			if (isset($vals['host'])){
				
				$this->host = $vals['host'];
			}
			
			
			if (isset($vals['port'])){
				
				$this->port = $vals['port'];
			}
			
			
			if (isset($vals['username'])){
				
				$this->username = $vals['username'];
			}
			
			
			if (isset($vals['password'])){
				
				$this->password = $vals['password'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Host';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->partnerId);
				
			}
			
			
			
			
			if ("hostType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->hostType); 
				
			}
			
			
			
			
			if ("host" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->host);
				
			}
			
			
			
			
			if ("port" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->port); 
				
			}
			
			
			
			
			if ("username" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->username);
				
			}
			
			
			
			
			if ("password" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->password);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
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
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeString($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hostType');
		$xfer += $output->writeByte($this->hostType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('host');
		$xfer += $output->writeString($this->host);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('port');
		$xfer += $output->writeI32($this->port);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('username');
		$xfer += $output->writeString($this->username);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('password');
		$xfer += $output->writeString($this->password);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>