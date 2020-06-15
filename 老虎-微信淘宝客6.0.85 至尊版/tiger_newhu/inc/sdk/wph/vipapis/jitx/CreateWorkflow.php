<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class CreateWorkflow {
	
	static $_TSPEC;
	public $request_id = null;
	public $order_sn = null;
	public $new_delivery_warehouse = null;
	public $reason_code = null;
	public $reason_remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'new_delivery_warehouse'
			),
			4 => array(
			'var' => 'reason_code'
			),
			5 => array(
			'var' => 'reason_remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request_id'])){
				
				$this->request_id = $vals['request_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['new_delivery_warehouse'])){
				
				$this->new_delivery_warehouse = $vals['new_delivery_warehouse'];
			}
			
			
			if (isset($vals['reason_code'])){
				
				$this->reason_code = $vals['reason_code'];
			}
			
			
			if (isset($vals['reason_remark'])){
				
				$this->reason_remark = $vals['reason_remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateWorkflow';
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
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("new_delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->new_delivery_warehouse);
				
			}
			
			
			
			
			if ("reason_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_code);
				
			}
			
			
			
			
			if ("reason_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_remark);
				
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
		
		$xfer += $output->writeFieldBegin('request_id');
		$xfer += $output->writeString($this->request_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('new_delivery_warehouse');
		$xfer += $output->writeString($this->new_delivery_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reason_code');
		$xfer += $output->writeString($this->reason_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reason_remark !== null) {
			
			$xfer += $output->writeFieldBegin('reason_remark');
			$xfer += $output->writeString($this->reason_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>