<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\store;

class Warehouse {
	
	static $_TSPEC;
	public $warehouse_code = null;
	public $warehouse_name = null;
	public $warehouse_address = null;
	public $active_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_code'
			),
			2 => array(
			'var' => 'warehouse_name'
			),
			3 => array(
			'var' => 'warehouse_address'
			),
			4 => array(
			'var' => 'active_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['warehouse_address'])){
				
				$this->warehouse_address = $vals['warehouse_address'];
			}
			
			
			if (isset($vals['active_status'])){
				
				$this->active_status = $vals['active_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Warehouse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("warehouse_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_address);
				
			}
			
			
			
			
			if ("active_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->active_status); 
				
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
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		$xfer += $output->writeString($this->warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_name');
		$xfer += $output->writeString($this->warehouse_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_address');
		$xfer += $output->writeString($this->warehouse_address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('active_status');
		$xfer += $output->writeI32($this->active_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>