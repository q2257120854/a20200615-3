<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class FileLogSetting {
	
	static $_TSPEC;
	public $hostId = null;
	public $logType = null;
	public $remotePath = null;
	public $localPath = null;
	public $pattern = null;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hostId'
			),
			2 => array(
			'var' => 'logType'
			),
			3 => array(
			'var' => 'remotePath'
			),
			4 => array(
			'var' => 'localPath'
			),
			5 => array(
			'var' => 'pattern'
			),
			6 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hostId'])){
				
				$this->hostId = $vals['hostId'];
			}
			
			
			if (isset($vals['logType'])){
				
				$this->logType = $vals['logType'];
			}
			
			
			if (isset($vals['remotePath'])){
				
				$this->remotePath = $vals['remotePath'];
			}
			
			
			if (isset($vals['localPath'])){
				
				$this->localPath = $vals['localPath'];
			}
			
			
			if (isset($vals['pattern'])){
				
				$this->pattern = $vals['pattern'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FileLogSetting';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("hostId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->hostId); 
				
			}
			
			
			
			
			if ("logType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->logType); 
				
			}
			
			
			
			
			if ("remotePath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remotePath);
				
			}
			
			
			
			
			if ("localPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->localPath);
				
			}
			
			
			
			
			if ("pattern" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pattern);
				
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
		
		$xfer += $output->writeFieldBegin('hostId');
		$xfer += $output->writeI64($this->hostId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('logType');
		$xfer += $output->writeByte($this->logType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remotePath');
		$xfer += $output->writeString($this->remotePath);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('localPath');
		$xfer += $output->writeString($this->localPath);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pattern');
		$xfer += $output->writeString($this->pattern);
		
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