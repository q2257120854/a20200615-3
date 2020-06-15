<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class DvdOrderStatus {
	
	static $_TSPEC;
	public $order_id = null;
	public $old_order_id = null;
	public $order_status = null;
	public $warehouse_name = null;
	public $ebs_warehouse_code = null;
	public $b2c_warehouse_code = null;
	public $user_type = null;
	public $user_name = null;
	public $is_export = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'old_order_id'
			),
			4 => array(
			'var' => 'order_status'
			),
			5 => array(
			'var' => 'warehouse_name'
			),
			6 => array(
			'var' => 'ebs_warehouse_code'
			),
			7 => array(
			'var' => 'b2c_warehouse_code'
			),
			8 => array(
			'var' => 'user_type'
			),
			9 => array(
			'var' => 'user_name'
			),
			10 => array(
			'var' => 'is_export'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['old_order_id'])){
				
				$this->old_order_id = $vals['old_order_id'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['ebs_warehouse_code'])){
				
				$this->ebs_warehouse_code = $vals['ebs_warehouse_code'];
			}
			
			
			if (isset($vals['b2c_warehouse_code'])){
				
				$this->b2c_warehouse_code = $vals['b2c_warehouse_code'];
			}
			
			
			if (isset($vals['user_type'])){
				
				$this->user_type = $vals['user_type'];
			}
			
			
			if (isset($vals['user_name'])){
				
				$this->user_name = $vals['user_name'];
			}
			
			
			if (isset($vals['is_export'])){
				
				$this->is_export = $vals['is_export'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DvdOrderStatus';
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
			
			
			
			
			if ("old_order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->old_order_id);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\common\OrderStatus::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->order_status = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("ebs_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ebs_warehouse_code);
				
			}
			
			
			
			
			if ("b2c_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2c_warehouse_code);
				
			}
			
			
			
			
			if ("user_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->user_type); 
				
			}
			
			
			
			
			if ("user_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_name);
				
			}
			
			
			
			
			if ("is_export" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_export); 
				
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->old_order_id !== null) {
			
			$xfer += $output->writeFieldBegin('old_order_id');
			$xfer += $output->writeString($this->old_order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			
			$em = new \vipapis\common\OrderStatus; 
			$output->writeString($em::$__names[$this->order_status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_name');
			$xfer += $output->writeString($this->warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ebs_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('ebs_warehouse_code');
			$xfer += $output->writeString($this->ebs_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2c_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('b2c_warehouse_code');
			$xfer += $output->writeString($this->b2c_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_type !== null) {
			
			$xfer += $output->writeFieldBegin('user_type');
			$xfer += $output->writeI32($this->user_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_name !== null) {
			
			$xfer += $output->writeFieldBegin('user_name');
			$xfer += $output->writeString($this->user_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_export !== null) {
			
			$xfer += $output->writeFieldBegin('is_export');
			$xfer += $output->writeI32($this->is_export);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>