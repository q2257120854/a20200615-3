<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\account;

class EnterpriseAccountResult {
	
	static $_TSPEC;
	public $apply_id = null;
	public $enterprise_code = null;
	public $enterprise_employee_no = null;
	public $phone_no = null;
	public $account_type = null;
	public $proc_state = null;
	public $result_code = null;
	public $result_desc = null;
	public $is_deleted = null;
	public $create_time = null;
	public $update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apply_id'
			),
			2 => array(
			'var' => 'enterprise_code'
			),
			3 => array(
			'var' => 'enterprise_employee_no'
			),
			4 => array(
			'var' => 'phone_no'
			),
			5 => array(
			'var' => 'account_type'
			),
			6 => array(
			'var' => 'proc_state'
			),
			7 => array(
			'var' => 'result_code'
			),
			8 => array(
			'var' => 'result_desc'
			),
			9 => array(
			'var' => 'is_deleted'
			),
			10 => array(
			'var' => 'create_time'
			),
			11 => array(
			'var' => 'update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['enterprise_code'])){
				
				$this->enterprise_code = $vals['enterprise_code'];
			}
			
			
			if (isset($vals['enterprise_employee_no'])){
				
				$this->enterprise_employee_no = $vals['enterprise_employee_no'];
			}
			
			
			if (isset($vals['phone_no'])){
				
				$this->phone_no = $vals['phone_no'];
			}
			
			
			if (isset($vals['account_type'])){
				
				$this->account_type = $vals['account_type'];
			}
			
			
			if (isset($vals['proc_state'])){
				
				$this->proc_state = $vals['proc_state'];
			}
			
			
			if (isset($vals['result_code'])){
				
				$this->result_code = $vals['result_code'];
			}
			
			
			if (isset($vals['result_desc'])){
				
				$this->result_desc = $vals['result_desc'];
			}
			
			
			if (isset($vals['is_deleted'])){
				
				$this->is_deleted = $vals['is_deleted'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EnterpriseAccountResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("apply_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->apply_id); 
				
			}
			
			
			
			
			if ("enterprise_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterprise_code);
				
			}
			
			
			
			
			if ("enterprise_employee_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterprise_employee_no);
				
			}
			
			
			
			
			if ("phone_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone_no);
				
			}
			
			
			
			
			if ("account_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->account_type); 
				
			}
			
			
			
			
			if ("proc_state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->proc_state); 
				
			}
			
			
			
			
			if ("result_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_code);
				
			}
			
			
			
			
			if ("result_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_desc);
				
			}
			
			
			
			
			if ("is_deleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_deleted); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
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
		
		if($this->apply_id !== null) {
			
			$xfer += $output->writeFieldBegin('apply_id');
			$xfer += $output->writeI64($this->apply_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterprise_code !== null) {
			
			$xfer += $output->writeFieldBegin('enterprise_code');
			$xfer += $output->writeString($this->enterprise_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterprise_employee_no !== null) {
			
			$xfer += $output->writeFieldBegin('enterprise_employee_no');
			$xfer += $output->writeString($this->enterprise_employee_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone_no !== null) {
			
			$xfer += $output->writeFieldBegin('phone_no');
			$xfer += $output->writeString($this->phone_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->account_type !== null) {
			
			$xfer += $output->writeFieldBegin('account_type');
			$xfer += $output->writeI32($this->account_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->proc_state !== null) {
			
			$xfer += $output->writeFieldBegin('proc_state');
			$xfer += $output->writeI32($this->proc_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_code !== null) {
			
			$xfer += $output->writeFieldBegin('result_code');
			$xfer += $output->writeString($this->result_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_desc !== null) {
			
			$xfer += $output->writeFieldBegin('result_desc');
			$xfer += $output->writeString($this->result_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_deleted !== null) {
			
			$xfer += $output->writeFieldBegin('is_deleted');
			$xfer += $output->writeI32($this->is_deleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>