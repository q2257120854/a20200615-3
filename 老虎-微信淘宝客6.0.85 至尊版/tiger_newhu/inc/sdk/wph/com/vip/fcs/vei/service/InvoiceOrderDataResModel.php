<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class InvoiceOrderDataResModel {
	
	static $_TSPEC;
	public $result = null;
	public $resultMesg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'resultMesg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['resultMesg'])){
				
				$this->resultMesg = $vals['resultMesg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvoiceOrderDataResModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->result);
				
			}
			
			
			
			
			if ("resultMesg" == $schemeField){
				
				$needSkip = false;
				
				$this->resultMesg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->resultMesg->read($input);
				
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
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeBool($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultMesg !== null) {
			
			$xfer += $output->writeFieldBegin('resultMesg');
			
			if (!is_object($this->resultMesg)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->resultMesg->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>