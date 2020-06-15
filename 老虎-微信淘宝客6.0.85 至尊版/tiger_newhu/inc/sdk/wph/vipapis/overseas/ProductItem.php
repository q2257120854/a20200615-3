<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class ProductItem {
	
	static $_TSPEC;
	public $transfer_detail_id = null;
	public $line_num = null;
	public $barcode = null;
	public $no_po = null;
	public $warehouse_type = null;
	public $grade = null;
	public $po_no = null;
	public $num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transfer_detail_id'
			),
			2 => array(
			'var' => 'line_num'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'no_po'
			),
			5 => array(
			'var' => 'warehouse_type'
			),
			6 => array(
			'var' => 'grade'
			),
			7 => array(
			'var' => 'po_no'
			),
			8 => array(
			'var' => 'num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transfer_detail_id'])){
				
				$this->transfer_detail_id = $vals['transfer_detail_id'];
			}
			
			
			if (isset($vals['line_num'])){
				
				$this->line_num = $vals['line_num'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['no_po'])){
				
				$this->no_po = $vals['no_po'];
			}
			
			
			if (isset($vals['warehouse_type'])){
				
				$this->warehouse_type = $vals['warehouse_type'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transfer_detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transfer_detail_id);
				
			}
			
			
			
			
			if ("line_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->line_num);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("no_po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->no_po);
				
			}
			
			
			
			
			if ("warehouse_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_type);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->num); 
				
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
		
		if($this->transfer_detail_id !== null) {
			
			$xfer += $output->writeFieldBegin('transfer_detail_id');
			$xfer += $output->writeString($this->transfer_detail_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->line_num !== null) {
			
			$xfer += $output->writeFieldBegin('line_num');
			$xfer += $output->writeString($this->line_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->no_po !== null) {
			
			$xfer += $output->writeFieldBegin('no_po');
			$xfer += $output->writeString($this->no_po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouse_type');
		$xfer += $output->writeString($this->warehouse_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('grade');
		$xfer += $output->writeString($this->grade);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>