<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class GetSkuInventoryResult {
	
	static $_TSPEC;
	public $cooperation_no = null;
	public $warehouse = null;
	public $barcode = null;
	public $leaving_stock = null;
	public $current_hold = null;
	public $circuit_break_value = null;
	public $area_warehouse_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cooperation_no'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'leaving_stock'
			),
			5 => array(
			'var' => 'current_hold'
			),
			6 => array(
			'var' => 'circuit_break_value'
			),
			7 => array(
			'var' => 'area_warehouse_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['leaving_stock'])){
				
				$this->leaving_stock = $vals['leaving_stock'];
			}
			
			
			if (isset($vals['current_hold'])){
				
				$this->current_hold = $vals['current_hold'];
			}
			
			
			if (isset($vals['circuit_break_value'])){
				
				$this->circuit_break_value = $vals['circuit_break_value'];
			}
			
			
			if (isset($vals['area_warehouse_id'])){
				
				$this->area_warehouse_id = $vals['area_warehouse_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSkuInventoryResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("leaving_stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leaving_stock); 
				
			}
			
			
			
			
			if ("current_hold" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->current_hold); 
				
			}
			
			
			
			
			if ("circuit_break_value" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->circuit_break_value); 
				
			}
			
			
			
			
			if ("area_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_id);
				
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
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeI32($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('leaving_stock');
		$xfer += $output->writeI32($this->leaving_stock);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('current_hold');
		$xfer += $output->writeI32($this->current_hold);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->circuit_break_value !== null) {
			
			$xfer += $output->writeFieldBegin('circuit_break_value');
			$xfer += $output->writeI32($this->circuit_break_value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_id');
			$xfer += $output->writeString($this->area_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>