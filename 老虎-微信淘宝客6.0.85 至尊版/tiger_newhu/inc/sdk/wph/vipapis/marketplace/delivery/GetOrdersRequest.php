<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class GetOrdersRequest {
	
	static $_TSPEC;
	public $status = null;
	public $order_ids = null;
	public $is_export = null;
	public $query_start_time = null;
	public $query_end_time = null;
	public $date_type = null;
	public $limit = null;
	public $page = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'status'
			),
			2 => array(
			'var' => 'order_ids'
			),
			3 => array(
			'var' => 'is_export'
			),
			4 => array(
			'var' => 'query_start_time'
			),
			5 => array(
			'var' => 'query_end_time'
			),
			6 => array(
			'var' => 'date_type'
			),
			7 => array(
			'var' => 'limit'
			),
			8 => array(
			'var' => 'page'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['order_ids'])){
				
				$this->order_ids = $vals['order_ids'];
			}
			
			
			if (isset($vals['is_export'])){
				
				$this->is_export = $vals['is_export'];
			}
			
			
			if (isset($vals['query_start_time'])){
				
				$this->query_start_time = $vals['query_start_time'];
			}
			
			
			if (isset($vals['query_end_time'])){
				
				$this->query_end_time = $vals['query_end_time'];
			}
			
			
			if (isset($vals['date_type'])){
				
				$this->date_type = $vals['date_type'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOrdersRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				
				$this->status = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->status[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("order_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->order_ids = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->order_ids[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("is_export" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_export);
				
			}
			
			
			
			
			if ("query_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->query_start_time);
				
			}
			
			
			
			
			if ("query_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->query_end_time);
				
			}
			
			
			
			
			if ("date_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->date_type); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
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
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			if (!is_array($this->status)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->status as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_ids !== null) {
			
			$xfer += $output->writeFieldBegin('order_ids');
			
			if (!is_array($this->order_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->order_ids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_export !== null) {
			
			$xfer += $output->writeFieldBegin('is_export');
			$xfer += $output->writeString($this->is_export);
			
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
		
		
		if($this->date_type !== null) {
			
			$xfer += $output->writeFieldBegin('date_type');
			$xfer += $output->writeI32($this->date_type);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>