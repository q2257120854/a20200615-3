<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class ReturnOutDetailInfo {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $item_code = null;
	public $item_name = null;
	public $type = null;
	public $grade = null;
	public $po = null;
	public $company_code = null;
	public $sales_status = null;
	public $sales_no = null;
	public $qty = null;
	public $box_id = null;
	public $serial_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'item_code'
			),
			3 => array(
			'var' => 'item_name'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'grade'
			),
			6 => array(
			'var' => 'po'
			),
			7 => array(
			'var' => 'company_code'
			),
			8 => array(
			'var' => 'sales_status'
			),
			9 => array(
			'var' => 'sales_no'
			),
			10 => array(
			'var' => 'qty'
			),
			11 => array(
			'var' => 'box_id'
			),
			12 => array(
			'var' => 'serial_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['item_name'])){
				
				$this->item_name = $vals['item_name'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['sales_status'])){
				
				$this->sales_status = $vals['sales_status'];
			}
			
			
			if (isset($vals['sales_no'])){
				
				$this->sales_no = $vals['sales_no'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['box_id'])){
				
				$this->box_id = $vals['box_id'];
			}
			
			
			if (isset($vals['serial_sn'])){
				
				$this->serial_sn = $vals['serial_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOutDetailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("item_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_name);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("sales_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_status);
				
			}
			
			
			
			
			if ("sales_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_no);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->qty);
				
			}
			
			
			
			
			if ("box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_id);
				
			}
			
			
			
			
			if ("serial_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial_sn);
				
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_code');
		$xfer += $output->writeString($this->item_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_name');
		$xfer += $output->writeString($this->item_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('grade');
		$xfer += $output->writeString($this->grade);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po');
		$xfer += $output->writeString($this->po);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('company_code');
		$xfer += $output->writeString($this->company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_status');
		$xfer += $output->writeString($this->sales_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_no');
		$xfer += $output->writeString($this->sales_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeDouble($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_id');
		$xfer += $output->writeString($this->box_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('serial_sn');
		$xfer += $output->writeString($this->serial_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>