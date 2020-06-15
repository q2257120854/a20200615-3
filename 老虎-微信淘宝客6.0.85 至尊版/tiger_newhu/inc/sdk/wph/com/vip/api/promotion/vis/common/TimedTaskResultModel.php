<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\common;

class TimedTaskResultModel {
	
	static $_TSPEC;
	public $ResultCode = null;
	public $Message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ResultCode'
			),
			2 => array(
			'var' => 'Message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ResultCode'])){
				
				$this->ResultCode = $vals['ResultCode'];
			}
			
			
			if (isset($vals['Message'])){
				
				$this->Message = $vals['Message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TimedTaskResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ResultCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ResultCode);
				
			}
			
			
			
			
			if ("Message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->Message);
				
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
		
		$xfer += $output->writeFieldBegin('ResultCode');
		$xfer += $output->writeString($this->ResultCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->Message !== null) {
			
			$xfer += $output->writeFieldBegin('Message');
			$xfer += $output->writeString($this->Message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>