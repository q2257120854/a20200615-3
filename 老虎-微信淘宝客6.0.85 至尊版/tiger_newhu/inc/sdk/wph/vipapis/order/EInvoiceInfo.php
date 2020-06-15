<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class EInvoiceInfo {
	
	static $_TSPEC;
	public $orderId = null;
	public $status = null;
	public $eInvoiceCode = null;
	public $eInvoiceSerialNo = null;
	public $msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderId'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'eInvoiceCode'
			),
			4 => array(
			'var' => 'eInvoiceSerialNo'
			),
			5 => array(
			'var' => 'msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['eInvoiceCode'])){
				
				$this->eInvoiceCode = $vals['eInvoiceCode'];
			}
			
			
			if (isset($vals['eInvoiceSerialNo'])){
				
				$this->eInvoiceSerialNo = $vals['eInvoiceSerialNo'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EInvoiceInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("eInvoiceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eInvoiceCode);
				
			}
			
			
			
			
			if ("eInvoiceSerialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->eInvoiceSerialNo);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
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
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eInvoiceCode !== null) {
			
			$xfer += $output->writeFieldBegin('eInvoiceCode');
			$xfer += $output->writeString($this->eInvoiceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eInvoiceSerialNo !== null) {
			
			$xfer += $output->writeFieldBegin('eInvoiceSerialNo');
			$xfer += $output->writeString($this->eInvoiceSerialNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>