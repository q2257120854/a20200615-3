<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\ubc\facade\bankcard;

class BankDataRequest {
	
	static $_TSPEC;
	public $bankName = null;
	public $dataStr = null;
	public $dataNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bankName'
			),
			2 => array(
			'var' => 'dataStr'
			),
			3 => array(
			'var' => 'dataNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bankName'])){
				
				$this->bankName = $vals['bankName'];
			}
			
			
			if (isset($vals['dataStr'])){
				
				$this->dataStr = $vals['dataStr'];
			}
			
			
			if (isset($vals['dataNum'])){
				
				$this->dataNum = $vals['dataNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BankDataRequest';
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
			
			
			
			
			if ("dataStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataStr);
				
			}
			
			
			
			
			if ("dataNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dataNum); 
				
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
		
		$xfer += $output->writeFieldBegin('dataStr');
		$xfer += $output->writeString($this->dataStr);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dataNum');
		$xfer += $output->writeI32($this->dataNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>