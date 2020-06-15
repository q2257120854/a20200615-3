<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\invoice;

class GetInvoicesRequest {
	
	static $_TSPEC;
	public $order_id = null;
	public $query_start_time = null;
	public $query_end_time = null;
	public $invoice_type = null;
	public $invoice_status = null;
	public $limit = null;
	public $page = null;
	
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
			'var' => 'invoice_type'
			),
			5 => array(
			'var' => 'invoice_status'
			),
			6 => array(
			'var' => 'limit'
			),
			7 => array(
			'var' => 'page'
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
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['invoice_status'])){
				
				$this->invoice_status = $vals['invoice_status'];
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
		
		return 'GetInvoicesRequest';
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
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_type);
				
			}
			
			
			
			
			if ("invoice_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice_status);
				
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
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->invoice_type !== null) {
			
			$xfer += $output->writeFieldBegin('invoice_type');
			$xfer += $output->writeString($this->invoice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('invoice_status');
		$xfer += $output->writeString($this->invoice_status);
		
		$xfer += $output->writeFieldEnd();
		
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