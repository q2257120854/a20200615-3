<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class VendorSizeMappingDo {
	
	static $_TSPEC;
	public $id = null;
	public $vendor_id = null;
	public $vip_category_path = null;
	public $vip_category_path_id = null;
	public $vip_category_name = null;
	public $vip_category_id = null;
	public $size_table_id = null;
	public $create_time = null;
	public $update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'vip_category_path'
			),
			4 => array(
			'var' => 'vip_category_path_id'
			),
			5 => array(
			'var' => 'vip_category_name'
			),
			6 => array(
			'var' => 'vip_category_id'
			),
			7 => array(
			'var' => 'size_table_id'
			),
			8 => array(
			'var' => 'create_time'
			),
			9 => array(
			'var' => 'update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vip_category_path'])){
				
				$this->vip_category_path = $vals['vip_category_path'];
			}
			
			
			if (isset($vals['vip_category_path_id'])){
				
				$this->vip_category_path_id = $vals['vip_category_path_id'];
			}
			
			
			if (isset($vals['vip_category_name'])){
				
				$this->vip_category_name = $vals['vip_category_name'];
			}
			
			
			if (isset($vals['vip_category_id'])){
				
				$this->vip_category_id = $vals['vip_category_id'];
			}
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorSizeMappingDo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->id); 
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vip_category_path" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_category_path);
				
			}
			
			
			
			
			if ("vip_category_path_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_category_path_id);
				
			}
			
			
			
			
			if ("vip_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_category_name);
				
			}
			
			
			
			
			if ("vip_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vip_category_id); 
				
			}
			
			
			
			
			if ("size_table_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_table_id);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI32($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_category_path !== null) {
			
			$xfer += $output->writeFieldBegin('vip_category_path');
			$xfer += $output->writeString($this->vip_category_path);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_category_path_id !== null) {
			
			$xfer += $output->writeFieldBegin('vip_category_path_id');
			$xfer += $output->writeString($this->vip_category_path_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('vip_category_name');
			$xfer += $output->writeString($this->vip_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('vip_category_id');
			$xfer += $output->writeI32($this->vip_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_id');
			$xfer += $output->writeString($this->size_table_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>