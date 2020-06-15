<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class GetCancelInfoResponse {
	
	static $_TSPEC;
	public $order_id = null;
	public $apply_sn = null;
	public $reason_choice_remark = null;
	public $reason_remark = null;
	public $operator_role_name = null;
	public $audit_status = null;
	public $audit_opinion = null;
	public $order_status = null;
	public $is_system = null;
	
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
			'var' => 'reason_choice_remark'
			),
			4 => array(
			'var' => 'reason_remark'
			),
			5 => array(
			'var' => 'operator_role_name'
			),
			6 => array(
			'var' => 'audit_status'
			),
			7 => array(
			'var' => 'audit_opinion'
			),
			8 => array(
			'var' => 'order_status'
			),
			9 => array(
			'var' => 'is_system'
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
			
			
			if (isset($vals['reason_choice_remark'])){
				
				$this->reason_choice_remark = $vals['reason_choice_remark'];
			}
			
			
			if (isset($vals['reason_remark'])){
				
				$this->reason_remark = $vals['reason_remark'];
			}
			
			
			if (isset($vals['operator_role_name'])){
				
				$this->operator_role_name = $vals['operator_role_name'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
			if (isset($vals['audit_opinion'])){
				
				$this->audit_opinion = $vals['audit_opinion'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['is_system'])){
				
				$this->is_system = $vals['is_system'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetCancelInfoResponse';
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
			
			
			
			
			if ("reason_choice_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_choice_remark);
				
			}
			
			
			
			
			if ("reason_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_remark);
				
			}
			
			
			
			
			if ("operator_role_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator_role_name);
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->audit_status); 
				
			}
			
			
			
			
			if ("audit_opinion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_opinion);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("is_system" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_system);
				
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
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->apply_sn !== null) {
			
			$xfer += $output->writeFieldBegin('apply_sn');
			$xfer += $output->writeString($this->apply_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason_choice_remark !== null) {
			
			$xfer += $output->writeFieldBegin('reason_choice_remark');
			$xfer += $output->writeString($this->reason_choice_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason_remark !== null) {
			
			$xfer += $output->writeFieldBegin('reason_remark');
			$xfer += $output->writeString($this->reason_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator_role_name !== null) {
			
			$xfer += $output->writeFieldBegin('operator_role_name');
			$xfer += $output->writeString($this->operator_role_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeI32($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_opinion !== null) {
			
			$xfer += $output->writeFieldBegin('audit_opinion');
			$xfer += $output->writeString($this->audit_opinion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_system !== null) {
			
			$xfer += $output->writeFieldBegin('is_system');
			$xfer += $output->writeString($this->is_system);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>