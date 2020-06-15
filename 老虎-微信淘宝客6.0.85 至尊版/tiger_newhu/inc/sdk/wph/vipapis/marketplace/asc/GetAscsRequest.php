<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class GetAscsRequest {
	
	static $_TSPEC;
	public $order_id = null;
	public $query_start_time = null;
	public $query_end_time = null;
	public $asc_type = null;
	public $asc_status = null;
	public $refund_status = null;
	public $limit = null;
	public $page = null;
	public $operator = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'query_start_time'
			),
			3 => array(
			'var' => 'query_end_time'
			),
			4 => array(
			'var' => 'asc_type'
			),
			5 => array(
			'var' => 'asc_status'
			),
			6 => array(
			'var' => 'refund_status'
			),
			7 => array(
			'var' => 'limit'
			),
			8 => array(
			'var' => 'page'
			),
			9 => array(
			'var' => 'operator'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['query_start_time'])){
				
				$this->query_start_time = $vals['query_start_time'];
			}
			
			
			if (isset($vals['query_end_time'])){
				
				$this->query_end_time = $vals['query_end_time'];
			}
			
			
			if (isset($vals['asc_type'])){
				
				$this->asc_type = $vals['asc_type'];
			}
			
			
			if (isset($vals['asc_status'])){
				
				$this->asc_status = $vals['asc_status'];
			}
			
			
			if (isset($vals['refund_status'])){
				
				$this->refund_status = $vals['refund_status'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetAscsRequest';
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
			
			
			
			
			if ("query_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->query_start_time);
				
			}
			
			
			
			
			if ("query_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->query_end_time);
				
			}
			
			
			
			
			if ("asc_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->asc_type); 
				
			}
			
			
			
			
			if ("asc_status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->asc_status); 
				
			}
			
			
			
			
			if ("refund_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refund_status); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
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
		
		
		if($this->query_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('query_start_time');
			$xfer += $output->writeString($this->query_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->query_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('query_end_time');
			$xfer += $output->writeString($this->query_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_type !== null) {
			
			$xfer += $output->writeFieldBegin('asc_type');
			$xfer += $output->writeByte($this->asc_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_status !== null) {
			
			$xfer += $output->writeFieldBegin('asc_status');
			$xfer += $output->writeByte($this->asc_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_status !== null) {
			
			$xfer += $output->writeFieldBegin('refund_status');
			$xfer += $output->writeI32($this->refund_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>