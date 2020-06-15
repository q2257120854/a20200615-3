<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class OrderReturn {
	
	static $_TSPEC;
	public $order_return_id = null;
	public $order_id = null;
	public $return_type = null;
	public $vendor_need_audit = null;
	public $return_reason = null;
	public $return_time = null;
	public $transport_no = null;
	public $carrier = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_return_id'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'return_type'
			),
			4 => array(
			'var' => 'vendor_need_audit'
			),
			5 => array(
			'var' => 'return_reason'
			),
			6 => array(
			'var' => 'return_time'
			),
			7 => array(
			'var' => 'transport_no'
			),
			8 => array(
			'var' => 'carrier'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_return_id'])){
				
				$this->order_return_id = $vals['order_return_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['vendor_need_audit'])){
				
				$this->vendor_need_audit = $vals['vendor_need_audit'];
			}
			
			
			if (isset($vals['return_reason'])){
				
				$this->return_reason = $vals['return_reason'];
			}
			
			
			if (isset($vals['return_time'])){
				
				$this->return_time = $vals['return_time'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderReturn';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_return_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_return_id);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_type); 
				
			}
			
			
			
			
			if ("vendor_need_audit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_need_audit); 
				
			}
			
			
			
			
			if ("return_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_reason);
				
			}
			
			
			
			
			if ("return_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_time);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
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
		
		if($this->order_return_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_return_id');
			$xfer += $output->writeString($this->order_return_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_type !== null) {
			
			$xfer += $output->writeFieldBegin('return_type');
			$xfer += $output->writeI32($this->return_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_need_audit !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_need_audit');
			$xfer += $output->writeI32($this->vendor_need_audit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_reason !== null) {
			
			$xfer += $output->writeFieldBegin('return_reason');
			$xfer += $output->writeString($this->return_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_time !== null) {
			
			$xfer += $output->writeFieldBegin('return_time');
			$xfer += $output->writeString($this->return_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>