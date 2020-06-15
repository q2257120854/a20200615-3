<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class CanInvoicingResModel4 {
	
	static $_TSPEC;
	public $canEinvoice = null;
	public $canEinvoicePrint = null;
	public $canPaperInvoice = null;
	public $defaultInvoiceType = null;
	public $restulMesg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'canEinvoice'
			),
			2 => array(
			'var' => 'canEinvoicePrint'
			),
			3 => array(
			'var' => 'canPaperInvoice'
			),
			4 => array(
			'var' => 'defaultInvoiceType'
			),
			5 => array(
			'var' => 'restulMesg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['canEinvoice'])){
				
				$this->canEinvoice = $vals['canEinvoice'];
			}
			
			
			if (isset($vals['canEinvoicePrint'])){
				
				$this->canEinvoicePrint = $vals['canEinvoicePrint'];
			}
			
			
			if (isset($vals['canPaperInvoice'])){
				
				$this->canPaperInvoice = $vals['canPaperInvoice'];
			}
			
			
			if (isset($vals['defaultInvoiceType'])){
				
				$this->defaultInvoiceType = $vals['defaultInvoiceType'];
			}
			
			
			if (isset($vals['restulMesg'])){
				
				$this->restulMesg = $vals['restulMesg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CanInvoicingResModel4';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("canEinvoice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canEinvoice);
				
			}
			
			
			
			
			if ("canEinvoicePrint" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canEinvoicePrint);
				
			}
			
			
			
			
			if ("canPaperInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canPaperInvoice);
				
			}
			
			
			
			
			if ("defaultInvoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->defaultInvoiceType); 
				
			}
			
			
			
			
			if ("restulMesg" == $schemeField){
				
				$needSkip = false;
				
				$this->restulMesg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->restulMesg->read($input);
				
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
		
		if($this->canEinvoice !== null) {
			
			$xfer += $output->writeFieldBegin('canEinvoice');
			$xfer += $output->writeBool($this->canEinvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canEinvoicePrint !== null) {
			
			$xfer += $output->writeFieldBegin('canEinvoicePrint');
			$xfer += $output->writeBool($this->canEinvoicePrint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canPaperInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('canPaperInvoice');
			$xfer += $output->writeBool($this->canPaperInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defaultInvoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('defaultInvoiceType');
			$xfer += $output->writeI32($this->defaultInvoiceType);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>