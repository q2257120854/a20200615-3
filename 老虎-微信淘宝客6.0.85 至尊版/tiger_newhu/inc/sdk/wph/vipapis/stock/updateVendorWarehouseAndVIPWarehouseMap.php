<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class updateVendorWarehouseAndVIPWarehouseMap {
	
	static $_TSPEC;
	public $vendor_warehouse_id = null;
	public $vip_warehouse_code = null;
	public $priority = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_warehouse_id'
			),
			2 => array(
			'var' => 'vip_warehouse_code'
			),
			3 => array(
			'var' => 'priority'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_warehouse_id'])){
				
				$this->vendor_warehouse_id = $vals['vendor_warehouse_id'];
			}
			
			
			if (isset($vals['vip_warehouse_code'])){
				
				$this->vip_warehouse_code = $vals['vip_warehouse_code'];
			}
			
			
			if (isset($vals['priority'])){
				
				$this->priority = $vals['priority'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'updateVendorWarehouseAndVIPWarehouseMap';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_warehouse_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_id);
				
			}
			
			
			
			
			if ("vip_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_warehouse_code);
				
			}
			
			
			
			
			if ("priority" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priority);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_warehouse_id');
		$xfer += $output->writeString($this->vendor_warehouse_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vip_warehouse_code');
		$xfer += $output->writeString($this->vip_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('priority');
		$xfer += $output->writeString($this->priority);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>