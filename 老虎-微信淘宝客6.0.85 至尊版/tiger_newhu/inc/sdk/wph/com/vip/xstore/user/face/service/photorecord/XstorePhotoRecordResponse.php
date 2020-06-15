<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service\photorecord;

class XstorePhotoRecordResponse {
	
	static $_TSPEC;
	public $isSuccess = null;
	public $errorCode = null;
	public $errorDesc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'isSuccess'
			),
			2 => array(
			'var' => 'errorCode'
			),
			3 => array(
			'var' => 'errorDesc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['isSuccess'])){
				
				$this->isSuccess = $vals['isSuccess'];
			}
			
			
			if (isset($vals['errorCode'])){
				
				$this->errorCode = $vals['errorCode'];
			}
			
			
			if (isset($vals['errorDesc'])){
				
				$this->errorDesc = $vals['errorDesc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstorePhotoRecordResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("isSuccess" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSuccess);
				
			}
			
			
			
			
			if ("errorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorCode);
				
			}
			
			
			
			
			if ("errorDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorDesc);
				
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
		
		$xfer += $output->writeFieldBegin('isSuccess');
		$xfer += $output->writeBool($this->isSuccess);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->errorCode !== null) {
			
			$xfer += $output->writeFieldBegin('errorCode');
			$xfer += $output->writeString($this->errorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorDesc !== null) {
			
			$xfer += $output->writeFieldBegin('errorDesc');
			$xfer += $output->writeString($this->errorDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>