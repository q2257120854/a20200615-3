<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class PostReturnError {
	
	static $_TSPEC;
	public $returnErrorId = null;
	public $returnErrorCode = null;
	public $retrunErrorMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnErrorId'
			),
			2 => array(
			'var' => 'returnErrorCode'
			),
			3 => array(
			'var' => 'retrunErrorMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnErrorId'])){
				
				$this->returnErrorId = $vals['returnErrorId'];
			}
			
			
			if (isset($vals['returnErrorCode'])){
				
				$this->returnErrorCode = $vals['returnErrorCode'];
			}
			
			
			if (isset($vals['retrunErrorMessage'])){
				
				$this->retrunErrorMessage = $vals['retrunErrorMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PostReturnError';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnErrorId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnErrorId);
				
			}
			
			
			
			
			if ("returnErrorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnErrorCode);
				
			}
			
			
			
			
			if ("retrunErrorMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retrunErrorMessage);
				
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
		
		if($this->returnErrorId !== null) {
			
			$xfer += $output->writeFieldBegin('returnErrorId');
			$xfer += $output->writeString($this->returnErrorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnErrorCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnErrorCode');
			$xfer += $output->writeString($this->returnErrorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retrunErrorMessage !== null) {
			
			$xfer += $output->writeFieldBegin('retrunErrorMessage');
			$xfer += $output->writeString($this->retrunErrorMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>