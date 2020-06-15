<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class ExternalInvoiceHandleState {
	
	static $_TSPEC;
	public $state = null;
	public $fpdm = null;
	public $fphm = null;
	public $orderSn = null;
	public $retMsg = null;
	public $storeSource = null;
	public $storeId = null;
	public $userId = null;
	public $type = null;
	public $orderReturnNo = null;
	public $pdfUrl = null;
	public $taxRegisterNo = null;
	public $seqNo = null;
	public $invoiceAmount = null;
	public $invoiceSeqNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'state'
			),
			2 => array(
			'var' => 'fpdm'
			),
			3 => array(
			'var' => 'fphm'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'retMsg'
			),
			6 => array(
			'var' => 'storeSource'
			),
			7 => array(
			'var' => 'storeId'
			),
			8 => array(
			'var' => 'userId'
			),
			9 => array(
			'var' => 'type'
			),
			10 => array(
			'var' => 'orderReturnNo'
			),
			11 => array(
			'var' => 'pdfUrl'
			),
			12 => array(
			'var' => 'taxRegisterNo'
			),
			13 => array(
			'var' => 'seqNo'
			),
			14 => array(
			'var' => 'invoiceAmount'
			),
			15 => array(
			'var' => 'invoiceSeqNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['fpdm'])){
				
				$this->fpdm = $vals['fpdm'];
			}
			
			
			if (isset($vals['fphm'])){
				
				$this->fphm = $vals['fphm'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['retMsg'])){
				
				$this->retMsg = $vals['retMsg'];
			}
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['orderReturnNo'])){
				
				$this->orderReturnNo = $vals['orderReturnNo'];
			}
			
			
			if (isset($vals['pdfUrl'])){
				
				$this->pdfUrl = $vals['pdfUrl'];
			}
			
			
			if (isset($vals['taxRegisterNo'])){
				
				$this->taxRegisterNo = $vals['taxRegisterNo'];
			}
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['invoiceAmount'])){
				
				$this->invoiceAmount = $vals['invoiceAmount'];
			}
			
			
			if (isset($vals['invoiceSeqNo'])){
				
				$this->invoiceSeqNo = $vals['invoiceSeqNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExternalInvoiceHandleState';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("fpdm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fpdm);
				
			}
			
			
			
			
			if ("fphm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fphm);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("retMsg" == $schemeField){
				
				$needSkip = false;
				
				$this->retMsg = new \com\vip\fcs\vei\service\BaseRetMsg();
				$this->retMsg->read($input);
				
			}
			
			
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeSource);
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("orderReturnNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderReturnNo);
				
			}
			
			
			
			
			if ("pdfUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdfUrl);
				
			}
			
			
			
			
			if ("taxRegisterNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRegisterNo);
				
			}
			
			
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("invoiceAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceAmount);
				
			}
			
			
			
			
			if ("invoiceSeqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceSeqNo);
				
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
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeString($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->fpdm !== null) {
			
			$xfer += $output->writeFieldBegin('fpdm');
			$xfer += $output->writeString($this->fpdm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fphm !== null) {
			
			$xfer += $output->writeFieldBegin('fphm');
			$xfer += $output->writeString($this->fphm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('retMsg');
		
		if (!is_object($this->retMsg)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->retMsg->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storeSource !== null) {
			
			$xfer += $output->writeFieldBegin('storeSource');
			$xfer += $output->writeString($this->storeSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeString($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderReturnNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderReturnNo');
			$xfer += $output->writeString($this->orderReturnNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdfUrl !== null) {
			
			$xfer += $output->writeFieldBegin('pdfUrl');
			$xfer += $output->writeString($this->pdfUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRegisterNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxRegisterNo');
			$xfer += $output->writeString($this->taxRegisterNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqNo !== null) {
			
			$xfer += $output->writeFieldBegin('seqNo');
			$xfer += $output->writeString($this->seqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceAmount !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceAmount');
			$xfer += $output->writeString($this->invoiceAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceSeqNo !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceSeqNo');
			$xfer += $output->writeString($this->invoiceSeqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>