<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsReturnOrderDetail {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $line_number = null;
	public $item_code = null;
	public $type = null;
	public $grade = null;
	public $po = null;
	public $qty = null;
	public $status = null;
	public $brand_id = null;
	public $no_po = null;
	public $serial_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'line_number'
			),
			3 => array(
			'var' => 'item_code'
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
			'var' => 'qty'
			),
			8 => array(
			'var' => 'status'
			),
			9 => array(
			'var' => 'brand_id'
			),
			10 => array(
			'var' => 'no_po'
			),
			11 => array(
			'var' => 'serial_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['line_number'])){
				
				$this->line_number = $vals['line_number'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
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
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['no_po'])){
				
				$this->no_po = $vals['no_po'];
			}
			
			
			if (isset($vals['serial_sn'])){
				
				$this->serial_sn = $vals['serial_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsReturnOrderDetail';
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
			
			
			
			
			if ("line_number" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->line_number);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
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
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->qty);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("no_po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->no_po);
				
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
		
		$xfer += $output->writeFieldBegin('line_number');
		$xfer += $output->writeString($this->line_number);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('item_code');
		$xfer += $output->writeString($this->item_code);
		
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
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeDouble($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeString($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('no_po');
		$xfer += $output->writeString($this->no_po);
		
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