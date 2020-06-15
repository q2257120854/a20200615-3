<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class WarehouseInfoList {
	
	static $_TSPEC;
	public $vendor_warehouse_id = null;
	public $vendor_warehouse_name = null;
	public $vendor_warehouse_province = null;
	public $vendor_warehouse_city = null;
	public $vendor_warehouse_country = null;
	public $vendor_warehouse_street = null;
	public $vendor_warehouse_addresses = null;
	public $name = null;
	public $tel = null;
	public $vip_warehouse_code = null;
	public $priority = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_warehouse_id'
			),
			2 => array(
			'var' => 'vendor_warehouse_name'
			),
			3 => array(
			'var' => 'vendor_warehouse_province'
			),
			4 => array(
			'var' => 'vendor_warehouse_city'
			),
			5 => array(
			'var' => 'vendor_warehouse_country'
			),
			6 => array(
			'var' => 'vendor_warehouse_street'
			),
			7 => array(
			'var' => 'vendor_warehouse_addresses'
			),
			8 => array(
			'var' => 'name'
			),
			9 => array(
			'var' => 'tel'
			),
			10 => array(
			'var' => 'vip_warehouse_code'
			),
			11 => array(
			'var' => 'priority'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_warehouse_id'])){
				
				$this->vendor_warehouse_id = $vals['vendor_warehouse_id'];
			}
			
			
			if (isset($vals['vendor_warehouse_name'])){
				
				$this->vendor_warehouse_name = $vals['vendor_warehouse_name'];
			}
			
			
			if (isset($vals['vendor_warehouse_province'])){
				
				$this->vendor_warehouse_province = $vals['vendor_warehouse_province'];
			}
			
			
			if (isset($vals['vendor_warehouse_city'])){
				
				$this->vendor_warehouse_city = $vals['vendor_warehouse_city'];
			}
			
			
			if (isset($vals['vendor_warehouse_country'])){
				
				$this->vendor_warehouse_country = $vals['vendor_warehouse_country'];
			}
			
			
			if (isset($vals['vendor_warehouse_street'])){
				
				$this->vendor_warehouse_street = $vals['vendor_warehouse_street'];
			}
			
			
			if (isset($vals['vendor_warehouse_addresses'])){
				
				$this->vendor_warehouse_addresses = $vals['vendor_warehouse_addresses'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
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
		
		return 'WarehouseInfoList';
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
			
			
			
			
			if ("vendor_warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_name);
				
			}
			
			
			
			
			if ("vendor_warehouse_province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_province);
				
			}
			
			
			
			
			if ("vendor_warehouse_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_city);
				
			}
			
			
			
			
			if ("vendor_warehouse_country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_country);
				
			}
			
			
			
			
			if ("vendor_warehouse_street" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_street);
				
			}
			
			
			
			
			if ("vendor_warehouse_addresses" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_warehouse_addresses);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
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
		
		if($this->vendor_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_id');
			$xfer += $output->writeString($this->vendor_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_name');
			$xfer += $output->writeString($this->vendor_warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_warehouse_province !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_province');
			$xfer += $output->writeString($this->vendor_warehouse_province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_warehouse_city !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_city');
			$xfer += $output->writeString($this->vendor_warehouse_city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_warehouse_country !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_country');
			$xfer += $output->writeString($this->vendor_warehouse_country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_warehouse_street !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_street');
			$xfer += $output->writeString($this->vendor_warehouse_street);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_warehouse_addresses !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_addresses');
			$xfer += $output->writeString($this->vendor_warehouse_addresses);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('vip_warehouse_code');
			$xfer += $output->writeString($this->vip_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priority !== null) {
			
			$xfer += $output->writeFieldBegin('priority');
			$xfer += $output->writeString($this->priority);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>