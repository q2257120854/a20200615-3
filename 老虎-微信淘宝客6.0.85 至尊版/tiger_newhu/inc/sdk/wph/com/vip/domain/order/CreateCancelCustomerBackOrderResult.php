<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class CreateCancelCustomerBackOrderResult {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $max_id = null;
	public $erp_back_sn = null;
	public $status = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'max_id'
			),
			3 => array(
			'var' => 'erp_back_sn'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['max_id'])){
				
				$this->max_id = $vals['max_id'];
			}
			
			
			if (isset($vals['erp_back_sn'])){
				
				$this->erp_back_sn = $vals['erp_back_sn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateCancelCustomerBackOrderResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("max_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->max_id); 
				
			}
			
			
			
			
			if ("erp_back_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_back_sn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->transaction_id !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_id');
			$xfer += $output->writeString($this->transaction_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->max_id !== null) {
			
			$xfer += $output->writeFieldBegin('max_id');
			$xfer += $output->writeI64($this->max_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->erp_back_sn !== null) {
			
			$xfer += $output->writeFieldBegin('erp_back_sn');
			$xfer += $output->writeString($this->erp_back_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>