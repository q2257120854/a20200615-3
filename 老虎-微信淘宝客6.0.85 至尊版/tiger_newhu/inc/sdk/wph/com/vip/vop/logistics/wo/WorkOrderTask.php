<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class WorkOrderTask {
	
	static $_TSPEC;
	public $task_id = null;
	public $task_type = null;
	public $task_name = null;
	public $process_content = null;
	public $task_state_desc = null;
	public $expire_time = null;
	public $ext_info = null;
	public $create_time = null;
	public $work_order_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'task_id'
			),
			2 => array(
			'var' => 'task_type'
			),
			3 => array(
			'var' => 'task_name'
			),
			4 => array(
			'var' => 'process_content'
			),
			5 => array(
			'var' => 'task_state_desc'
			),
			6 => array(
			'var' => 'expire_time'
			),
			7 => array(
			'var' => 'ext_info'
			),
			8 => array(
			'var' => 'create_time'
			),
			9 => array(
			'var' => 'work_order_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['task_id'])){
				
				$this->task_id = $vals['task_id'];
			}
			
			
			if (isset($vals['task_type'])){
				
				$this->task_type = $vals['task_type'];
			}
			
			
			if (isset($vals['task_name'])){
				
				$this->task_name = $vals['task_name'];
			}
			
			
			if (isset($vals['process_content'])){
				
				$this->process_content = $vals['process_content'];
			}
			
			
			if (isset($vals['task_state_desc'])){
				
				$this->task_state_desc = $vals['task_state_desc'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
			if (isset($vals['ext_info'])){
				
				$this->ext_info = $vals['ext_info'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['work_order_no'])){
				
				$this->work_order_no = $vals['work_order_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderTask';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("task_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->task_id); 
				
			}
			
			
			
			
			if ("task_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->task_type); 
				
			}
			
			
			
			
			if ("task_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->task_name);
				
			}
			
			
			
			
			if ("process_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->process_content);
				
			}
			
			
			
			
			if ("task_state_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->task_state_desc);
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expire_time); 
				
			}
			
			
			
			
			if ("ext_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_info);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("work_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_order_no);
				
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
		
		if($this->task_id !== null) {
			
			$xfer += $output->writeFieldBegin('task_id');
			$xfer += $output->writeI32($this->task_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->task_type !== null) {
			
			$xfer += $output->writeFieldBegin('task_type');
			$xfer += $output->writeI32($this->task_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->task_name !== null) {
			
			$xfer += $output->writeFieldBegin('task_name');
			$xfer += $output->writeString($this->task_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->process_content !== null) {
			
			$xfer += $output->writeFieldBegin('process_content');
			$xfer += $output->writeString($this->process_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->task_state_desc !== null) {
			
			$xfer += $output->writeFieldBegin('task_state_desc');
			$xfer += $output->writeString($this->task_state_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeI64($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext_info !== null) {
			
			$xfer += $output->writeFieldBegin('ext_info');
			$xfer += $output->writeString($this->ext_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('work_order_no');
			$xfer += $output->writeString($this->work_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>