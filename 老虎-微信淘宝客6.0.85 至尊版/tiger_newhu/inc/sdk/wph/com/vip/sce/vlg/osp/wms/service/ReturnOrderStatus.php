<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class ReturnOrderStatus {
	
	static $_TSPEC;
	public $id = null;
	public $warehouse = null;
	public $shipment_no = null;
	public $erp_order_no = null;
	public $reference_no = null;
	public $order_type = null;
	public $status_code = null;
	public $action_time = null;
	public $return_type = null;
	public $sub_return_sn = null;
	public $sub_return_flag = null;
	public $memo = null;
	public $user = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'shipment_no'
			),
			4 => array(
			'var' => 'erp_order_no'
			),
			5 => array(
			'var' => 'reference_no'
			),
			6 => array(
			'var' => 'order_type'
			),
			7 => array(
			'var' => 'status_code'
			),
			8 => array(
			'var' => 'action_time'
			),
			9 => array(
			'var' => 'return_type'
			),
			10 => array(
			'var' => 'sub_return_sn'
			),
			11 => array(
			'var' => 'sub_return_flag'
			),
			12 => array(
			'var' => 'memo'
			),
			13 => array(
			'var' => 'user'
			),
			14 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['shipment_no'])){
				
				$this->shipment_no = $vals['shipment_no'];
			}
			
			
			if (isset($vals['erp_order_no'])){
				
				$this->erp_order_no = $vals['erp_order_no'];
			}
			
			
			if (isset($vals['reference_no'])){
				
				$this->reference_no = $vals['reference_no'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['status_code'])){
				
				$this->status_code = $vals['status_code'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['sub_return_sn'])){
				
				$this->sub_return_sn = $vals['sub_return_sn'];
			}
			
			
			if (isset($vals['sub_return_flag'])){
				
				$this->sub_return_flag = $vals['sub_return_flag'];
			}
			
			
			if (isset($vals['memo'])){
				
				$this->memo = $vals['memo'];
			}
			
			
			if (isset($vals['user'])){
				
				$this->user = $vals['user'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOrderStatus';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("shipment_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipment_no);
				
			}
			
			
			
			
			if ("erp_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_order_no);
				
			}
			
			
			
			
			if ("reference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reference_no);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("status_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status_code);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_time);
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_type);
				
			}
			
			
			
			
			if ("sub_return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_return_sn);
				
			}
			
			
			
			
			if ("sub_return_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_return_flag);
				
			}
			
			
			
			
			if ("memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memo);
				
			}
			
			
			
			
			if ("user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeString($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shipment_no');
		$xfer += $output->writeString($this->shipment_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_order_no');
		$xfer += $output->writeString($this->erp_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reference_no');
		$xfer += $output->writeString($this->reference_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeString($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status_code');
		$xfer += $output->writeString($this->status_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('action_time');
		$xfer += $output->writeString($this->action_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_type');
		$xfer += $output->writeString($this->return_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sub_return_sn');
		$xfer += $output->writeString($this->sub_return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sub_return_flag');
		$xfer += $output->writeString($this->sub_return_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('memo');
		$xfer += $output->writeString($this->memo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user');
		$xfer += $output->writeString($this->user);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>