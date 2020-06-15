<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\vreceipt;

class RevinfoDetail {
	
	static $_TSPEC;
	public $transaction_detail_id = null;
	public $warehouse = null;
	public $sku = null;
	public $po_no = null;
	public $purchase_case_no = null;
	public $vis_receipt_no = null;
	public $po_qty = null;
	public $shipping_qty = null;
	public $stock_qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_detail_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'sku'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'purchase_case_no'
			),
			6 => array(
			'var' => 'vis_receipt_no'
			),
			7 => array(
			'var' => 'po_qty'
			),
			8 => array(
			'var' => 'shipping_qty'
			),
			9 => array(
			'var' => 'stock_qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_detail_id'])){
				
				$this->transaction_detail_id = $vals['transaction_detail_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['purchase_case_no'])){
				
				$this->purchase_case_no = $vals['purchase_case_no'];
			}
			
			
			if (isset($vals['vis_receipt_no'])){
				
				$this->vis_receipt_no = $vals['vis_receipt_no'];
			}
			
			
			if (isset($vals['po_qty'])){
				
				$this->po_qty = $vals['po_qty'];
			}
			
			
			if (isset($vals['shipping_qty'])){
				
				$this->shipping_qty = $vals['shipping_qty'];
			}
			
			
			if (isset($vals['stock_qty'])){
				
				$this->stock_qty = $vals['stock_qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RevinfoDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_detail_id);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("purchase_case_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_case_no);
				
			}
			
			
			
			
			if ("vis_receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vis_receipt_no);
				
			}
			
			
			
			
			if ("po_qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->po_qty);
				
			}
			
			
			
			
			if ("shipping_qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->shipping_qty);
				
			}
			
			
			
			
			if ("stock_qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->stock_qty);
				
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
		
		$xfer += $output->writeFieldBegin('transaction_detail_id');
		$xfer += $output->writeString($this->transaction_detail_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeString($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchase_case_no');
		$xfer += $output->writeString($this->purchase_case_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vis_receipt_no');
		$xfer += $output->writeString($this->vis_receipt_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_qty');
		$xfer += $output->writeDouble($this->po_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shipping_qty');
		$xfer += $output->writeDouble($this->shipping_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('stock_qty');
		$xfer += $output->writeDouble($this->stock_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>