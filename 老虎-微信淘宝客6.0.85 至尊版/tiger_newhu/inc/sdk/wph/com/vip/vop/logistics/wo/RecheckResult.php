<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class RecheckResult {
	
	static $_TSPEC;
	public $work_order_no = null;
	public $recheck_state = null;
	public $is_new = null;
	public $recheck_time = null;
	public $expire_time = null;
	public $recheck_problem = null;
	public $recheck_process_content = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'work_order_no'
			),
			2 => array(
			'var' => 'recheck_state'
			),
			3 => array(
			'var' => 'is_new'
			),
			4 => array(
			'var' => 'recheck_time'
			),
			5 => array(
			'var' => 'expire_time'
			),
			6 => array(
			'var' => 'recheck_problem'
			),
			7 => array(
			'var' => 'recheck_process_content'
			),
			8 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['work_order_no'])){
				
				$this->work_order_no = $vals['work_order_no'];
			}
			
			
			if (isset($vals['recheck_state'])){
				
				$this->recheck_state = $vals['recheck_state'];
			}
			
			
			if (isset($vals['is_new'])){
				
				$this->is_new = $vals['is_new'];
			}
			
			
			if (isset($vals['recheck_time'])){
				
				$this->recheck_time = $vals['recheck_time'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
			if (isset($vals['recheck_problem'])){
				
				$this->recheck_problem = $vals['recheck_problem'];
			}
			
			
			if (isset($vals['recheck_process_content'])){
				
				$this->recheck_process_content = $vals['recheck_process_content'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RecheckResult';
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
			
			
			
			
			if ("recheck_state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->recheck_state); 
				
			}
			
			
			
			
			if ("is_new" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_new); 
				
			}
			
			
			
			
			if ("recheck_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recheck_time); 
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expire_time); 
				
			}
			
			
			
			
			if ("recheck_problem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recheck_problem);
				
			}
			
			
			
			
			if ("recheck_process_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recheck_process_content);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
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
		
		
		if($this->recheck_state !== null) {
			
			$xfer += $output->writeFieldBegin('recheck_state');
			$xfer += $output->writeI32($this->recheck_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_new !== null) {
			
			$xfer += $output->writeFieldBegin('is_new');
			$xfer += $output->writeI32($this->is_new);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recheck_time !== null) {
			
			$xfer += $output->writeFieldBegin('recheck_time');
			$xfer += $output->writeI64($this->recheck_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeI64($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recheck_problem !== null) {
			
			$xfer += $output->writeFieldBegin('recheck_problem');
			$xfer += $output->writeString($this->recheck_problem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recheck_process_content !== null) {
			
			$xfer += $output->writeFieldBegin('recheck_process_content');
			$xfer += $output->writeString($this->recheck_process_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>