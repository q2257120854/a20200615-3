<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class GetChangeWarehouseWorkflowResult {
	
	static $_TSPEC;
	public $request_id = null;
	public $vendor_id = null;
	public $workflow_sn = null;
	public $order_sn = null;
	public $workflow_state = null;
	public $old_delivery_warehouse = null;
	public $new_delivery_warehouse = null;
	public $update_time = null;
	public $reject_remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request_id'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'workflow_sn'
			),
			4 => array(
			'var' => 'order_sn'
			),
			5 => array(
			'var' => 'workflow_state'
			),
			6 => array(
			'var' => 'old_delivery_warehouse'
			),
			7 => array(
			'var' => 'new_delivery_warehouse'
			),
			8 => array(
			'var' => 'update_time'
			),
			9 => array(
			'var' => 'reject_remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request_id'])){
				
				$this->request_id = $vals['request_id'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['workflow_sn'])){
				
				$this->workflow_sn = $vals['workflow_sn'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['workflow_state'])){
				
				$this->workflow_state = $vals['workflow_state'];
			}
			
			
			if (isset($vals['old_delivery_warehouse'])){
				
				$this->old_delivery_warehouse = $vals['old_delivery_warehouse'];
			}
			
			
			if (isset($vals['new_delivery_warehouse'])){
				
				$this->new_delivery_warehouse = $vals['new_delivery_warehouse'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['reject_remark'])){
				
				$this->reject_remark = $vals['reject_remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetChangeWarehouseWorkflowResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("request_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_id);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("workflow_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workflow_sn);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("workflow_state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workflow_state);
				
			}
			
			
			
			
			if ("old_delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->old_delivery_warehouse);
				
			}
			
			
			
			
			if ("new_delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->new_delivery_warehouse);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time); 
				
			}
			
			
			
			
			if ("reject_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reject_remark);
				
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
		
		if($this->request_id !== null) {
			
			$xfer += $output->writeFieldBegin('request_id');
			$xfer += $output->writeString($this->request_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->workflow_sn !== null) {
			
			$xfer += $output->writeFieldBegin('workflow_sn');
			$xfer += $output->writeString($this->workflow_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workflow_state !== null) {
			
			$xfer += $output->writeFieldBegin('workflow_state');
			$xfer += $output->writeString($this->workflow_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->old_delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('old_delivery_warehouse');
			$xfer += $output->writeString($this->old_delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->new_delivery_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('new_delivery_warehouse');
			$xfer += $output->writeString($this->new_delivery_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reject_remark !== null) {
			
			$xfer += $output->writeFieldBegin('reject_remark');
			$xfer += $output->writeString($this->reject_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>