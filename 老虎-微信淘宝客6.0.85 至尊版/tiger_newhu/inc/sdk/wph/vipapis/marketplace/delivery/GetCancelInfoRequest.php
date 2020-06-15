<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class GetCancelInfoRequest {
	
	static $_TSPEC;
	public $order_id = null;
	public $apply_sn = null;
	public $audit_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'apply_sn'
			),
			3 => array(
			'var' => 'audit_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['apply_sn'])){
				
				$this->apply_sn = $vals['apply_sn'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetCancelInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("apply_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_sn);
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->audit_status); 
				
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apply_sn !== null) {
			
			$xfer += $output->writeFieldBegin('apply_sn');
			$xfer += $output->writeString($this->apply_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeI32($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>