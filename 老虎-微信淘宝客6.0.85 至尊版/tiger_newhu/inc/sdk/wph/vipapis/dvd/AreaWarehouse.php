<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\dvd;

class AreaWarehouse {
	
	static $_TSPEC;
	public $area_warehouse_id = null;
	public $area_warehouse_name = null;
	public $area_warehouse_address = null;
	public $returned_goods_address = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'area_warehouse_id'
			),
			2 => array(
			'var' => 'area_warehouse_name'
			),
			3 => array(
			'var' => 'area_warehouse_address'
			),
			4 => array(
			'var' => 'returned_goods_address'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['area_warehouse_id'])){
				
				$this->area_warehouse_id = $vals['area_warehouse_id'];
			}
			
			
			if (isset($vals['area_warehouse_name'])){
				
				$this->area_warehouse_name = $vals['area_warehouse_name'];
			}
			
			
			if (isset($vals['area_warehouse_address'])){
				
				$this->area_warehouse_address = $vals['area_warehouse_address'];
			}
			
			
			if (isset($vals['returned_goods_address'])){
				
				$this->returned_goods_address = $vals['returned_goods_address'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AreaWarehouse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("area_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_id);
				
			}
			
			
			
			
			if ("area_warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_name);
				
			}
			
			
			
			
			if ("area_warehouse_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_warehouse_address);
				
			}
			
			
			
			
			if ("returned_goods_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returned_goods_address);
				
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
		
		if($this->area_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_id');
			$xfer += $output->writeString($this->area_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_name');
			$xfer += $output->writeString($this->area_warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_warehouse_address !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_address');
			$xfer += $output->writeString($this->area_warehouse_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returned_goods_address !== null) {
			
			$xfer += $output->writeFieldBegin('returned_goods_address');
			$xfer += $output->writeString($this->returned_goods_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>