<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\category;

class MappedCategoryProperty {
	
	static $_TSPEC;
	public $vendor_prop_Name = null;
	public $vip_prop_name = null;
	public $vip_prop_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_prop_Name'
			),
			2 => array(
			'var' => 'vip_prop_name'
			),
			3 => array(
			'var' => 'vip_prop_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_prop_Name'])){
				
				$this->vendor_prop_Name = $vals['vendor_prop_Name'];
			}
			
			
			if (isset($vals['vip_prop_name'])){
				
				$this->vip_prop_name = $vals['vip_prop_name'];
			}
			
			
			if (isset($vals['vip_prop_id'])){
				
				$this->vip_prop_id = $vals['vip_prop_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MappedCategoryProperty';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_prop_Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_prop_Name);
				
			}
			
			
			
			
			if ("vip_prop_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_prop_name);
				
			}
			
			
			
			
			if ("vip_prop_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vip_prop_id); 
				
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
		
		if($this->vendor_prop_Name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_prop_Name');
			$xfer += $output->writeString($this->vendor_prop_Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_prop_name !== null) {
			
			$xfer += $output->writeFieldBegin('vip_prop_name');
			$xfer += $output->writeString($this->vip_prop_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_prop_id !== null) {
			
			$xfer += $output->writeFieldBegin('vip_prop_id');
			$xfer += $output->writeI32($this->vip_prop_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>