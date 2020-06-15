<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class PoWarehouseReceipt {
	
	static $_TSPEC;
	public $purchase_no = null;
	public $company_code = null;
	public $warehouse_receipt_no = null;
	public $total_line_qty = null;
	public $receive_warehouse_code = null;
	public $receive_time = null;
	public $purchase_type = null;
	public $buyer_name = null;
	public $vendor_code = null;
	public $vendor_name = null;
	public $is_whale_warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchase_no'
			),
			2 => array(
			'var' => 'company_code'
			),
			3 => array(
			'var' => 'warehouse_receipt_no'
			),
			4 => array(
			'var' => 'total_line_qty'
			),
			5 => array(
			'var' => 'receive_warehouse_code'
			),
			6 => array(
			'var' => 'receive_time'
			),
			7 => array(
			'var' => 'purchase_type'
			),
			8 => array(
			'var' => 'buyer_name'
			),
			9 => array(
			'var' => 'vendor_code'
			),
			10 => array(
			'var' => 'vendor_name'
			),
			11 => array(
			'var' => 'is_whale_warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['warehouse_receipt_no'])){
				
				$this->warehouse_receipt_no = $vals['warehouse_receipt_no'];
			}
			
			
			if (isset($vals['total_line_qty'])){
				
				$this->total_line_qty = $vals['total_line_qty'];
			}
			
			
			if (isset($vals['receive_warehouse_code'])){
				
				$this->receive_warehouse_code = $vals['receive_warehouse_code'];
			}
			
			
			if (isset($vals['receive_time'])){
				
				$this->receive_time = $vals['receive_time'];
			}
			
			
			if (isset($vals['purchase_type'])){
				
				$this->purchase_type = $vals['purchase_type'];
			}
			
			
			if (isset($vals['buyer_name'])){
				
				$this->buyer_name = $vals['buyer_name'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['is_whale_warehouse'])){
				
				$this->is_whale_warehouse = $vals['is_whale_warehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoWarehouseReceipt';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("warehouse_receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_receipt_no);
				
			}
			
			
			
			
			if ("total_line_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_line_qty); 
				
			}
			
			
			
			
			if ("receive_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receive_warehouse_code);
				
			}
			
			
			
			
			if ("receive_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->receive_time);
				
			}
			
			
			
			
			if ("purchase_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->purchase_type); 
				
			}
			
			
			
			
			if ("buyer_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_name);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("is_whale_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_whale_warehouse); 
				
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
		
		if($this->purchase_no !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_no');
			$xfer += $output->writeString($this->purchase_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->company_code !== null) {
			
			$xfer += $output->writeFieldBegin('company_code');
			$xfer += $output->writeString($this->company_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_receipt_no !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_receipt_no');
			$xfer += $output->writeString($this->warehouse_receipt_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('total_line_qty');
		$xfer += $output->writeI32($this->total_line_qty);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->receive_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('receive_warehouse_code');
			$xfer += $output->writeString($this->receive_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receive_time !== null) {
			
			$xfer += $output->writeFieldBegin('receive_time');
			$xfer += $output->writeI64($this->receive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_type !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_type');
			$xfer += $output->writeByte($this->purchase_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer_name !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_name');
			$xfer += $output->writeString($this->buyer_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_whale_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('is_whale_warehouse');
			$xfer += $output->writeByte($this->is_whale_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>