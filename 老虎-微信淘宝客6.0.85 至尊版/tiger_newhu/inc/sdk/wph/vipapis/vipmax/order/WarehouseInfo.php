<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\order;

class WarehouseInfo {
	
	static $_TSPEC;
	public $warehouse = null;
	public $warehouse_name = null;
	public $warehouse_address = null;
	public $warehouse_tel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'warehouse_name'
			),
			3 => array(
			'var' => 'warehouse_address'
			),
			4 => array(
			'var' => 'warehouse_tel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['warehouse_address'])){
				
				$this->warehouse_address = $vals['warehouse_address'];
			}
			
			
			if (isset($vals['warehouse_tel'])){
				
				$this->warehouse_tel = $vals['warehouse_tel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WarehouseInfo';
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
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("warehouse_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_address);
				
			}
			
			
			
			
			if ("warehouse_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_tel);
				
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
		
		$xfer += $output->writeFieldBegin('warehouse_name');
		$xfer += $output->writeString($this->warehouse_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_address');
		$xfer += $output->writeString($this->warehouse_address);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse_tel !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_tel');
			$xfer += $output->writeString($this->warehouse_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>