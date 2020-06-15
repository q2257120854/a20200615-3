<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseOrderImportResponse {
	
	static $_TSPEC;
	public $isSuccess = null;
	public $errorFilePath = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'isSuccess'
			),
			2 => array(
			'var' => 'errorFilePath'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['isSuccess'])){
				
				$this->isSuccess = $vals['isSuccess'];
			}
			
			
			if (isset($vals['errorFilePath'])){
				
				$this->errorFilePath = $vals['errorFilePath'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderImportResponse';
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
			
			
			
			
			if ("errorFilePath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorFilePath);
				
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
		
		if($this->isSuccess !== null) {
			
			$xfer += $output->writeFieldBegin('isSuccess');
			$xfer += $output->writeBool($this->isSuccess);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorFilePath !== null) {
			
			$xfer += $output->writeFieldBegin('errorFilePath');
			$xfer += $output->writeString($this->errorFilePath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>