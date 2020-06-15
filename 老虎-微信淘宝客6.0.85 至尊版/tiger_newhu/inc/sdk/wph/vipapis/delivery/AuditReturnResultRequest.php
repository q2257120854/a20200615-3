<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class AuditReturnResultRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $order_return_id = null;
	public $vendor_audit_stat = null;
	public $vendor_audit_opinion = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'order_return_id'
			),
			4 => array(
			'var' => 'vendor_audit_stat'
			),
			5 => array(
			'var' => 'vendor_audit_opinion'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['order_return_id'])){
				
				$this->order_return_id = $vals['order_return_id'];
			}
			
			
			if (isset($vals['vendor_audit_stat'])){
				
				$this->vendor_audit_stat = $vals['vendor_audit_stat'];
			}
			
			
			if (isset($vals['vendor_audit_opinion'])){
				
				$this->vendor_audit_opinion = $vals['vendor_audit_opinion'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AuditReturnResultRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendor_id); 
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("order_return_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_return_id);
				
			}
			
			
			
			
			if ("vendor_audit_stat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_audit_stat); 
				
			}
			
			
			
			
			if ("vendor_audit_opinion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_audit_opinion);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_return_id');
		$xfer += $output->writeString($this->order_return_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_audit_stat');
		$xfer += $output->writeI32($this->vendor_audit_stat);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vendor_audit_opinion !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_audit_opinion');
			$xfer += $output->writeString($this->vendor_audit_opinion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>