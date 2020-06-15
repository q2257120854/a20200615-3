<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\category;

class MappedCategory {
	
	static $_TSPEC;
	public $properties = null;
	public $vendor_id = null;
	public $vendor_category_tree_id = null;
	public $vendor_category_tree_name = null;
	public $vendor_category_path = null;
	public $vendor_category_name = null;
	public $vendor_category_id = null;
	public $vip_category_path = null;
	public $vip_category_path_id = null;
	public $vip_category_name = null;
	public $vip_category_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'properties'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'vendor_category_tree_id'
			),
			4 => array(
			'var' => 'vendor_category_tree_name'
			),
			5 => array(
			'var' => 'vendor_category_path'
			),
			6 => array(
			'var' => 'vendor_category_name'
			),
			7 => array(
			'var' => 'vendor_category_id'
			),
			8 => array(
			'var' => 'vip_category_path'
			),
			9 => array(
			'var' => 'vip_category_path_id'
			),
			10 => array(
			'var' => 'vip_category_name'
			),
			11 => array(
			'var' => 'vip_category_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['properties'])){
				
				$this->properties = $vals['properties'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_category_tree_id'])){
				
				$this->vendor_category_tree_id = $vals['vendor_category_tree_id'];
			}
			
			
			if (isset($vals['vendor_category_tree_name'])){
				
				$this->vendor_category_tree_name = $vals['vendor_category_tree_name'];
			}
			
			
			if (isset($vals['vendor_category_path'])){
				
				$this->vendor_category_path = $vals['vendor_category_path'];
			}
			
			
			if (isset($vals['vendor_category_name'])){
				
				$this->vendor_category_name = $vals['vendor_category_name'];
			}
			
			
			if (isset($vals['vendor_category_id'])){
				
				$this->vendor_category_id = $vals['vendor_category_id'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MappedCategory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("properties" == $schemeField){
				
				$needSkip = false;
				
				$this->properties = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\isv\category\MappedCategoryProperty();
						$elem0->read($input);
						
						$this->properties[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("vendor_category_tree_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_category_tree_id); 
				
			}
			
			
			
			
			if ("vendor_category_tree_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_tree_name);
				
			}
			
			
			
			
			if ("vendor_category_path" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_path);
				
			}
			
			
			
			
			if ("vendor_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_name);
				
			}
			
			
			
			
			if ("vendor_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_id);
				
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
		
		if($this->properties !== null) {
			
			$xfer += $output->writeFieldBegin('properties');
			
			if (!is_array($this->properties)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->properties as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_category_tree_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_category_tree_id');
			$xfer += $output->writeI32($this->vendor_category_tree_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_category_tree_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_category_tree_name');
			$xfer += $output->writeString($this->vendor_category_tree_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_category_path !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_category_path');
			$xfer += $output->writeString($this->vendor_category_path);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_category_name');
			$xfer += $output->writeString($this->vendor_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_category_id');
			$xfer += $output->writeString($this->vendor_category_id);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>