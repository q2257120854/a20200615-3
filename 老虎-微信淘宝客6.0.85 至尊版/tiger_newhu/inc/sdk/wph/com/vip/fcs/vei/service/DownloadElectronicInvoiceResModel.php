<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class DownloadElectronicInvoiceResModel {
	
	static $_TSPEC;
	public $pdfContent = null;
	public $restulMesg = null;
	public $result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pdfContent'
			),
			2 => array(
			'var' => 'restulMesg'
			),
			3 => array(
			'var' => 'result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pdfContent'])){
				
				$this->pdfContent = $vals['pdfContent'];
			}
			
			
			if (isset($vals['restulMesg'])){
				
				$this->restulMesg = $vals['restulMesg'];
			}
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DownloadElectronicInvoiceResModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pdfContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdfContent);
				
			}
			
			
			
			
			if ("restulMesg" == $schemeField){
				
				$needSkip = false;
				
				$this->restulMesg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->restulMesg->read($input);
				
			}
			
			
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->result);
				
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
		
		if($this->pdfContent !== null) {
			
			$xfer += $output->writeFieldBegin('pdfContent');
			$xfer += $output->writeString($this->pdfContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->restulMesg !== null) {
			
			$xfer += $output->writeFieldBegin('restulMesg');
			
			if (!is_object($this->restulMesg)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->restulMesg->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			$xfer += $output->writeBool($this->result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>