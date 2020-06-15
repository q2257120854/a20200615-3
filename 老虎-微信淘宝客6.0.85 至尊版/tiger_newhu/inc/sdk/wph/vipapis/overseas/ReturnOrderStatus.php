<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class ReturnOrderStatus {
	
	static $_TSPEC;
	public $id = null;
	public $shipment_no = null;
	public $erp_order_sn = null;
	public $reference_no = null;
	public $order_type = null;
	public $status_code = null;
	public $create_time = null;
	public $memo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'shipment_no'
			),
			3 => array(
			'var' => 'erp_order_sn'
			),
			4 => array(
			'var' => 'reference_no'
			),
			5 => array(
			'var' => 'order_type'
			),
			6 => array(
			'var' => 'status_code'
			),
			7 => array(
			'var' => 'create_time'
			),
			8 => array(
			'var' => 'memo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['shipment_no'])){
				
				$this->shipment_no = $vals['shipment_no'];
			}
			
			
			if (isset($vals['erp_order_sn'])){
				
				$this->erp_order_sn = $vals['erp_order_sn'];
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
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['memo'])){
				
				$this->memo = $vals['memo'];
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
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("shipment_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipment_no);
				
			}
			
			
			
			
			if ("erp_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_order_sn);
				
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
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memo);
				
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
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shipment_no');
		$xfer += $output->writeString($this->shipment_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->erp_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('erp_order_sn');
			$xfer += $output->writeString($this->erp_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reference_no !== null) {
			
			$xfer += $output->writeFieldBegin('reference_no');
			$xfer += $output->writeString($this->reference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeString($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status_code');
		$xfer += $output->writeString($this->status_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->memo !== null) {
			
			$xfer += $output->writeFieldBegin('memo');
			$xfer += $output->writeString($this->memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>