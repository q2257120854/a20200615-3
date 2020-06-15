<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class GetVendorScheduleFreezeStockResult {
	
	static $_TSPEC;
	public $vendor_warehouse_id = null;
	public $barcode = null;
	public $schedule_id = null;
	public $freeze_num = null;
	public $freeze_date = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_warehouse_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'schedule_id'
			),
			4 => array(
			'var' => 'freeze_num'
			),
			5 => array(
			'var' => 'freeze_date'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_warehouse_id'])){
				
				$this->vendor_warehouse_id = $vals['vendor_warehouse_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['freeze_num'])){
				
				$this->freeze_num = $vals['freeze_num'];
			}
			
			
			if (isset($vals['freeze_date'])){
				
				$this->freeze_date = $vals['freeze_date'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetVendorScheduleFreezeStockResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_id);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("freeze_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->freeze_num);
				
			}
			
			
			
			
			if ("freeze_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->freeze_date);
				
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
		
		if($this->vendor_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_id');
			$xfer += $output->writeString($this->vendor_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeString($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->freeze_num !== null) {
			
			$xfer += $output->writeFieldBegin('freeze_num');
			$xfer += $output->writeString($this->freeze_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->freeze_date !== null) {
			
			$xfer += $output->writeFieldBegin('freeze_date');
			$xfer += $output->writeString($this->freeze_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>