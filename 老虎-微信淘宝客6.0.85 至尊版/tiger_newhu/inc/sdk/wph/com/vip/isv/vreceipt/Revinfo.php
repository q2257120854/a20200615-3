<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\vreceipt;

class Revinfo {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $receipt_no = null;
	public $receipt_type = null;
	public $vendor_code = null;
	public $warehouse = null;
	public $total_po_qty = null;
	public $total_shipping_qty = null;
	public $total_ship_cont_count = null;
	public $total_inb_qty = null;
	public $receive_complete_time = null;
	public $details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'receipt_no'
			),
			3 => array(
			'var' => 'receipt_type'
			),
			4 => array(
			'var' => 'vendor_code'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'total_po_qty'
			),
			7 => array(
			'var' => 'total_shipping_qty'
			),
			8 => array(
			'var' => 'total_ship_cont_count'
			),
			9 => array(
			'var' => 'total_inb_qty'
			),
			10 => array(
			'var' => 'receive_complete_time'
			),
			11 => array(
			'var' => 'details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['receipt_no'])){
				
				$this->receipt_no = $vals['receipt_no'];
			}
			
			
			if (isset($vals['receipt_type'])){
				
				$this->receipt_type = $vals['receipt_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['total_po_qty'])){
				
				$this->total_po_qty = $vals['total_po_qty'];
			}
			
			
			if (isset($vals['total_shipping_qty'])){
				
				$this->total_shipping_qty = $vals['total_shipping_qty'];
			}
			
			
			if (isset($vals['total_ship_cont_count'])){
				
				$this->total_ship_cont_count = $vals['total_ship_cont_count'];
			}
			
			
			if (isset($vals['total_inb_qty'])){
				
				$this->total_inb_qty = $vals['total_inb_qty'];
			}
			
			
			if (isset($vals['receive_complete_time'])){
				
				$this->receive_complete_time = $vals['receive_complete_time'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Revinfo';
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
			
			
			
			
			if ("receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_no);
				
			}
			
			
			
			
			if ("receipt_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_type);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("total_po_qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_po_qty);
				
			}
			
			
			
			
			if ("total_shipping_qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_shipping_qty);
				
			}
			
			
			
			
			if ("total_ship_cont_count" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_ship_cont_count);
				
			}
			
			
			
			
			if ("total_inb_qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_inb_qty);
				
			}
			
			
			
			
			if ("receive_complete_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->receive_complete_time);
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\isv\vreceipt\RevinfoDetail();
						$elem0->read($input);
						
						$this->details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('receipt_no');
		$xfer += $output->writeString($this->receipt_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receipt_type');
		$xfer += $output->writeString($this->receipt_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_po_qty');
		$xfer += $output->writeDouble($this->total_po_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_shipping_qty');
		$xfer += $output->writeDouble($this->total_shipping_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_ship_cont_count');
		$xfer += $output->writeDouble($this->total_ship_cont_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_inb_qty');
		$xfer += $output->writeDouble($this->total_inb_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receive_complete_time');
		$xfer += $output->writeI64($this->receive_complete_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('details');
		
		if (!is_array($this->details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>