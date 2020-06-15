<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class DvdReturn {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $return_status = null;
	public $return_reason = null;
	public $create_time = null;
	public $back_sn = null;
	
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
			'var' => 'return_status'
			),
			4 => array(
			'var' => 'return_reason'
			),
			5 => array(
			'var' => 'create_time'
			),
			6 => array(
			'var' => 'back_sn'
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
			
			
			if (isset($vals['return_status'])){
				
				$this->return_status = $vals['return_status'];
			}
			
			
			if (isset($vals['return_reason'])){
				
				$this->return_reason = $vals['return_reason'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['back_sn'])){
				
				$this->back_sn = $vals['back_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DvdReturn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("return_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_status);
				
			}
			
			
			
			
			if ("return_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_reason);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("back_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->back_sn);
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_status !== null) {
			
			$xfer += $output->writeFieldBegin('return_status');
			$xfer += $output->writeString($this->return_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_reason !== null) {
			
			$xfer += $output->writeFieldBegin('return_reason');
			$xfer += $output->writeString($this->return_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->back_sn !== null) {
			
			$xfer += $output->writeFieldBegin('back_sn');
			$xfer += $output->writeString($this->back_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>