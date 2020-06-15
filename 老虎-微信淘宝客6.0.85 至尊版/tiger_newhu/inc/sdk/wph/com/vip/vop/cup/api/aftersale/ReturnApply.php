<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\aftersale;

class ReturnApply {
	
	static $_TSPEC;
	public $apply_id = null;
	public $order_sn = null;
	public $user_code = null;
	public $add_time = null;
	public $reason_id = null;
	public $reason = null;
	public $user_remark = null;
	public $admin_remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apply_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'user_code'
			),
			4 => array(
			'var' => 'add_time'
			),
			5 => array(
			'var' => 'reason_id'
			),
			6 => array(
			'var' => 'reason'
			),
			7 => array(
			'var' => 'user_remark'
			),
			8 => array(
			'var' => 'admin_remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['user_code'])){
				
				$this->user_code = $vals['user_code'];
			}
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['reason_id'])){
				
				$this->reason_id = $vals['reason_id'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
			if (isset($vals['user_remark'])){
				
				$this->user_remark = $vals['user_remark'];
			}
			
			
			if (isset($vals['admin_remark'])){
				
				$this->admin_remark = $vals['admin_remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnApply';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("apply_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_code);
				
			}
			
			
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->add_time);
				
			}
			
			
			
			
			if ("reason_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reason_id); 
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
			}
			
			
			
			
			if ("user_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_remark);
				
			}
			
			
			
			
			if ("admin_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->admin_remark);
				
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
		
		$xfer += $output->writeFieldBegin('apply_id');
		$xfer += $output->writeString($this->apply_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user_code');
		$xfer += $output->writeString($this->user_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('add_time');
		$xfer += $output->writeString($this->add_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reason_id');
		$xfer += $output->writeI32($this->reason_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reason');
		$xfer += $output->writeString($this->reason);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->user_remark !== null) {
			
			$xfer += $output->writeFieldBegin('user_remark');
			$xfer += $output->writeString($this->user_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->admin_remark !== null) {
			
			$xfer += $output->writeFieldBegin('admin_remark');
			$xfer += $output->writeString($this->admin_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>