<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class PurchaseOrderBatchInfo {
	
	static $_TSPEC;
	public $warehouse = null;
	public $batch_id = null;
	public $batch_no = null;
	public $po_no = null;
	public $trade_model = null;
	public $delivery_time = null;
	public $estimate_arrive_time = null;
	public $po_type = null;
	public $warehouse_type = null;
	public $vendor_code = null;
	public $vendor_id = null;
	public $vendor_name = null;
	public $product_List = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'batch_id'
			),
			3 => array(
			'var' => 'batch_no'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'trade_model'
			),
			6 => array(
			'var' => 'delivery_time'
			),
			7 => array(
			'var' => 'estimate_arrive_time'
			),
			8 => array(
			'var' => 'po_type'
			),
			9 => array(
			'var' => 'warehouse_type'
			),
			10 => array(
			'var' => 'vendor_code'
			),
			11 => array(
			'var' => 'vendor_id'
			),
			12 => array(
			'var' => 'vendor_name'
			),
			13 => array(
			'var' => 'product_List'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['batch_id'])){
				
				$this->batch_id = $vals['batch_id'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['trade_model'])){
				
				$this->trade_model = $vals['trade_model'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['estimate_arrive_time'])){
				
				$this->estimate_arrive_time = $vals['estimate_arrive_time'];
			}
			
			
			if (isset($vals['po_type'])){
				
				$this->po_type = $vals['po_type'];
			}
			
			
			if (isset($vals['warehouse_type'])){
				
				$this->warehouse_type = $vals['warehouse_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['product_List'])){
				
				$this->product_List = $vals['product_List'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderBatchInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("batch_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->batch_id); 
				
			}
			
			
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_no);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("trade_model" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_model);
				
			}
			
			
			
			
			if ("delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_time);
				
			}
			
			
			
			
			if ("estimate_arrive_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->estimate_arrive_time);
				
			}
			
			
			
			
			if ("po_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_type);
				
			}
			
			
			
			
			if ("warehouse_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_type);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("product_List" == $schemeField){
				
				$needSkip = false;
				
				$this->product_List = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\BatchProduct();
						$elem0->read($input);
						
						$this->product_List[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_id');
		$xfer += $output->writeI32($this->batch_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trade_model');
		$xfer += $output->writeString($this->trade_model);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_time');
		$xfer += $output->writeString($this->delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('estimate_arrive_time');
		$xfer += $output->writeString($this->estimate_arrive_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_type');
		$xfer += $output->writeString($this->po_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_type');
		$xfer += $output->writeString($this->warehouse_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_name');
		$xfer += $output->writeString($this->vendor_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_List');
		
		if (!is_array($this->product_List)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->product_List as $iter0){
			
			
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