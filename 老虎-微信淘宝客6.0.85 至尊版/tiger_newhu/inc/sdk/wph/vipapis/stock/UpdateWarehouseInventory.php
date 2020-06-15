<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class UpdateWarehouseInventory {
	
	static $_TSPEC;
	public $store_name = null;
	public $barcode = null;
	public $inventory_qty = null;
	public $inventory_type = null;
	public $transaction_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_name'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'inventory_qty'
			),
			4 => array(
			'var' => 'inventory_type'
			),
			5 => array(
			'var' => 'transaction_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_name'])){
				
				$this->store_name = $vals['store_name'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['inventory_qty'])){
				
				$this->inventory_qty = $vals['inventory_qty'];
			}
			
			
			if (isset($vals['inventory_type'])){
				
				$this->inventory_type = $vals['inventory_type'];
			}
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateWarehouseInventory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_name);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("inventory_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_qty); 
				
			}
			
			
			
			
			if ("inventory_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_type); 
				
			}
			
			
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
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
		
		if($this->store_name !== null) {
			
			$xfer += $output->writeFieldBegin('store_name');
			$xfer += $output->writeString($this->store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inventory_qty');
		$xfer += $output->writeI32($this->inventory_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inventory_type');
		$xfer += $output->writeI32($this->inventory_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>