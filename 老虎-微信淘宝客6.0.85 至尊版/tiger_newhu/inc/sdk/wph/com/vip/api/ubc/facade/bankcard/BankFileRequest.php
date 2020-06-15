<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\bankcard;

class BankFileRequest {
	
	static $_TSPEC;
	public $bankName = null;
	public $fileStreamStr = null;
	public $fileDataNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bankName'
			),
			2 => array(
			'var' => 'fileStreamStr'
			),
			3 => array(
			'var' => 'fileDataNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bankName'])){
				
				$this->bankName = $vals['bankName'];
			}
			
			
			if (isset($vals['fileStreamStr'])){
				
				$this->fileStreamStr = $vals['fileStreamStr'];
			}
			
			
			if (isset($vals['fileDataNum'])){
				
				$this->fileDataNum = $vals['fileDataNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BankFileRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bankName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankName);
				
			}
			
			
			
			
			if ("fileStreamStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fileStreamStr);
				
			}
			
			
			
			
			if ("fileDataNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->fileDataNum); 
				
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
		
		$xfer += $output->writeFieldBegin('bankName');
		$xfer += $output->writeString($this->bankName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('fileStreamStr');
		$xfer += $output->writeString($this->fileStreamStr);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->fileDataNum !== null) {
			
			$xfer += $output->writeFieldBegin('fileDataNum');
			$xfer += $output->writeI32($this->fileDataNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>