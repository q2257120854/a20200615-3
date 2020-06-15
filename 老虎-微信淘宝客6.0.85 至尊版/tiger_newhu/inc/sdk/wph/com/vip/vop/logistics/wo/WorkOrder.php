<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class WorkOrder {
	
	static $_TSPEC;
	public $work_order_no = null;
	public $process_state = null;
	public $expire_time = null;
	public $problem_desc = null;
	public $create_time = null;
	public $action_type = null;
	public $work_order_id = null;
	public $pc3_code = null;
	public $pc3_name = null;
	public $state_appendix_info = null;
	public $logistics_nos = null;
	public $recheck_results = null;
	public $attachments = null;
	public $work_order_tasks = null;
	public $option_appendix_infos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'work_order_no'
			),
			2 => array(
			'var' => 'process_state'
			),
			3 => array(
			'var' => 'expire_time'
			),
			4 => array(
			'var' => 'problem_desc'
			),
			5 => array(
			'var' => 'create_time'
			),
			6 => array(
			'var' => 'action_type'
			),
			7 => array(
			'var' => 'work_order_id'
			),
			8 => array(
			'var' => 'pc3_code'
			),
			9 => array(
			'var' => 'pc3_name'
			),
			10 => array(
			'var' => 'state_appendix_info'
			),
			11 => array(
			'var' => 'logistics_nos'
			),
			12 => array(
			'var' => 'recheck_results'
			),
			13 => array(
			'var' => 'attachments'
			),
			14 => array(
			'var' => 'work_order_tasks'
			),
			15 => array(
			'var' => 'option_appendix_infos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['work_order_no'])){
				
				$this->work_order_no = $vals['work_order_no'];
			}
			
			
			if (isset($vals['process_state'])){
				
				$this->process_state = $vals['process_state'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
			if (isset($vals['problem_desc'])){
				
				$this->problem_desc = $vals['problem_desc'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['action_type'])){
				
				$this->action_type = $vals['action_type'];
			}
			
			
			if (isset($vals['work_order_id'])){
				
				$this->work_order_id = $vals['work_order_id'];
			}
			
			
			if (isset($vals['pc3_code'])){
				
				$this->pc3_code = $vals['pc3_code'];
			}
			
			
			if (isset($vals['pc3_name'])){
				
				$this->pc3_name = $vals['pc3_name'];
			}
			
			
			if (isset($vals['state_appendix_info'])){
				
				$this->state_appendix_info = $vals['state_appendix_info'];
			}
			
			
			if (isset($vals['logistics_nos'])){
				
				$this->logistics_nos = $vals['logistics_nos'];
			}
			
			
			if (isset($vals['recheck_results'])){
				
				$this->recheck_results = $vals['recheck_results'];
			}
			
			
			if (isset($vals['attachments'])){
				
				$this->attachments = $vals['attachments'];
			}
			
			
			if (isset($vals['work_order_tasks'])){
				
				$this->work_order_tasks = $vals['work_order_tasks'];
			}
			
			
			if (isset($vals['option_appendix_infos'])){
				
				$this->option_appendix_infos = $vals['option_appendix_infos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("work_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_order_no);
				
			}
			
			
			
			
			if ("process_state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->process_state); 
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expire_time); 
				
			}
			
			
			
			
			if ("problem_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problem_desc);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("action_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_type);
				
			}
			
			
			
			
			if ("work_order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_order_id);
				
			}
			
			
			
			
			if ("pc3_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc3_code);
				
			}
			
			
			
			
			if ("pc3_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc3_name);
				
			}
			
			
			
			
			if ("state_appendix_info" == $schemeField){
				
				$needSkip = false;
				
				$this->state_appendix_info = new \com\vip\vop\logistics\wo\StateAppendixInfo();
				$this->state_appendix_info->read($input);
				
			}
			
			
			
			
			if ("logistics_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->logistics_nos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->logistics_nos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("recheck_results" == $schemeField){
				
				$needSkip = false;
				
				$this->recheck_results = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\logistics\wo\RecheckResult();
						$elem1->read($input);
						
						$this->recheck_results[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("attachments" == $schemeField){
				
				$needSkip = false;
				
				$this->attachments = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\vop\logistics\wo\Attachment();
						$elem2->read($input);
						
						$this->attachments[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("work_order_tasks" == $schemeField){
				
				$needSkip = false;
				
				$this->work_order_tasks = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\vop\logistics\wo\WorkOrderTask();
						$elem3->read($input);
						
						$this->work_order_tasks[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("option_appendix_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->option_appendix_infos = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\vop\logistics\wo\OptionAppendixInfo();
						$elem4->read($input);
						
						$this->option_appendix_infos[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->work_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('work_order_no');
			$xfer += $output->writeString($this->work_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->process_state !== null) {
			
			$xfer += $output->writeFieldBegin('process_state');
			$xfer += $output->writeI32($this->process_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeI64($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problem_desc !== null) {
			
			$xfer += $output->writeFieldBegin('problem_desc');
			$xfer += $output->writeString($this->problem_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->action_type !== null) {
			
			$xfer += $output->writeFieldBegin('action_type');
			$xfer += $output->writeString($this->action_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_order_id !== null) {
			
			$xfer += $output->writeFieldBegin('work_order_id');
			$xfer += $output->writeString($this->work_order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pc3_code !== null) {
			
			$xfer += $output->writeFieldBegin('pc3_code');
			$xfer += $output->writeString($this->pc3_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pc3_name !== null) {
			
			$xfer += $output->writeFieldBegin('pc3_name');
			$xfer += $output->writeString($this->pc3_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state_appendix_info !== null) {
			
			$xfer += $output->writeFieldBegin('state_appendix_info');
			
			if (!is_object($this->state_appendix_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->state_appendix_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logistics_nos !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_nos');
			
			if (!is_array($this->logistics_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->logistics_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recheck_results !== null) {
			
			$xfer += $output->writeFieldBegin('recheck_results');
			
			if (!is_array($this->recheck_results)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->recheck_results as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attachments !== null) {
			
			$xfer += $output->writeFieldBegin('attachments');
			
			if (!is_array($this->attachments)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attachments as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_order_tasks !== null) {
			
			$xfer += $output->writeFieldBegin('work_order_tasks');
			
			if (!is_array($this->work_order_tasks)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->work_order_tasks as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->option_appendix_infos !== null) {
			
			$xfer += $output->writeFieldBegin('option_appendix_infos');
			
			if (!is_array($this->option_appendix_infos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->option_appendix_infos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>