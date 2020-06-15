<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class UnpickInfo {
	
	static $_TSPEC;
	public $warehouse_not_pick = null;
	public $supply_num = null;
	public $sub_warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_not_pick'
			),
			2 => array(
			'var' => 'supply_num'
			),
			3 => array(
			'var' => 'sub_warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_not_pick'])){
				
				$this->warehouse_not_pick = $vals['warehouse_not_pick'];
			}
			
			
			if (isset($vals['supply_num'])){
				
				$this->supply_num = $vals['supply_num'];
			}
			
			
			if (isset($vals['sub_warehouse'])){
				
				$this->sub_warehouse = $vals['sub_warehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UnpickInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse_not_pick" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->warehouse_not_pick); 
				
			}
			
			
			
			
			if ("supply_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->supply_num); 
				
			}
			
			
			
			
			if ("sub_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_warehouse);
				
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
		
		if($this->warehouse_not_pick !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_not_pick');
			$xfer += $output->writeI32($this->warehouse_not_pick);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->supply_num !== null) {
			
			$xfer += $output->writeFieldBegin('supply_num');
			$xfer += $output->writeI32($this->supply_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('sub_warehouse');
			$xfer += $output->writeString($this->sub_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>