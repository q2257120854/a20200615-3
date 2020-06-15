<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\bulkbuying\api;

class UpdatePoWarehouseReceiptQtyReq {
	
	static $_TSPEC;
	public $warehouse_receipt_no = null;
	public $purchase_no = null;
	public $out_purchase_no = null;
	public $total_line_qty = null;
	public $receive_warehouse_code = null;
	public $receive_time = null;
	public $receive_items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_receipt_no'
			),
			2 => array(
			'var' => 'purchase_no'
			),
			3 => array(
			'var' => 'out_purchase_no'
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
			'var' => 'receive_items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_receipt_no'])){
				
				$this->warehouse_receipt_no = $vals['warehouse_receipt_no'];
			}
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['out_purchase_no'])){
				
				$this->out_purchase_no = $vals['out_purchase_no'];
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
			
			
			if (isset($vals['receive_items'])){
				
				$this->receive_items = $vals['receive_items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdatePoWarehouseReceiptQtyReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse_receipt_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_receipt_no);
				
			}
			
			
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("out_purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_purchase_no);
				
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
			
			
			
			
			if ("receive_items" == $schemeField){
				
				$needSkip = false;
				
				$this->receive_items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\xstore\cc\bulkbuying\api\PoWarehouseReceiptQty();
						$elem0->read($input);
						
						$this->receive_items[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('warehouse_receipt_no');
		$xfer += $output->writeString($this->warehouse_receipt_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchase_no');
		$xfer += $output->writeString($this->purchase_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->out_purchase_no !== null) {
			
			$xfer += $output->writeFieldBegin('out_purchase_no');
			$xfer += $output->writeString($this->out_purchase_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('total_line_qty');
		$xfer += $output->writeI32($this->total_line_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receive_warehouse_code');
		$xfer += $output->writeString($this->receive_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receive_time');
		$xfer += $output->writeI64($this->receive_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receive_items');
		
		if (!is_array($this->receive_items)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->receive_items as $iter0){
			
			
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