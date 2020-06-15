<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\vreturn;

class DefectiveGoods {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $po_no = null;
	public $receipt_no = null;
	public $reference_no = null;
	public $edit_type = null;
	public $warehouse = null;
	public $item_code = null;
	public $item_desc = null;
	public $reason_code = null;
	public $inventory_type = null;
	public $purchase_case_no = null;
	public $qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'receipt_no'
			),
			4 => array(
			'var' => 'reference_no'
			),
			5 => array(
			'var' => 'edit_type'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'item_code'
			),
			8 => array(
			'var' => 'item_desc'
			),
			9 => array(
			'var' => 'reason_code'
			),
			10 => array(
			'var' => 'inventory_type'
			),
			11 => array(
			'var' => 'purchase_case_no'
			),
			12 => array(
			'var' => 'qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['receipt_no'])){
				
				$this->receipt_no = $vals['receipt_no'];
			}
			
			
			if (isset($vals['reference_no'])){
				
				$this->reference_no = $vals['reference_no'];
			}
			
			
			if (isset($vals['edit_type'])){
				
				$this->edit_type = $vals['edit_type'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['item_desc'])){
				
				$this->item_desc = $vals['item_desc'];
			}
			
			
			if (isset($vals['reason_code'])){
				
				$this->reason_code = $vals['reason_code'];
			}
			
			
			if (isset($vals['inventory_type'])){
				
				$this->inventory_type = $vals['inventory_type'];
			}
			
			
			if (isset($vals['purchase_case_no'])){
				
				$this->purchase_case_no = $vals['purchase_case_no'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DefectiveGoods';
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
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_no);
				
			}
			
			
			
			
			if ("reference_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reference_no);
				
			}
			
			
			
			
			if ("edit_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edit_type);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("item_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_desc);
				
			}
			
			
			
			
			if ("reason_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason_code);
				
			}
			
			
			
			
			if ("inventory_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inventory_type);
				
			}
			
			
			
			
			if ("purchase_case_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_case_no);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
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
		
		if($this->transaction_id !== null) {
			
			$xfer += $output->writeFieldBegin('transaction_id');
			$xfer += $output->writeString($this->transaction_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receipt_no !== null) {
			
			$xfer += $output->writeFieldBegin('receipt_no');
			$xfer += $output->writeString($this->receipt_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reference_no !== null) {
			
			$xfer += $output->writeFieldBegin('reference_no');
			$xfer += $output->writeString($this->reference_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edit_type !== null) {
			
			$xfer += $output->writeFieldBegin('edit_type');
			$xfer += $output->writeString($this->edit_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_desc !== null) {
			
			$xfer += $output->writeFieldBegin('item_desc');
			$xfer += $output->writeString($this->item_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason_code !== null) {
			
			$xfer += $output->writeFieldBegin('reason_code');
			$xfer += $output->writeString($this->reason_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventory_type !== null) {
			
			$xfer += $output->writeFieldBegin('inventory_type');
			$xfer += $output->writeString($this->inventory_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_case_no !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_case_no');
			$xfer += $output->writeString($this->purchase_case_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>