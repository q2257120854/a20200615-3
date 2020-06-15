<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class SaleProps {
	
	static $_TSPEC;
	public $props_id = null;
	public $props_name = null;
	public $props_value = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'props_id'
			),
			2 => array(
			'var' => 'props_name'
			),
			3 => array(
			'var' => 'props_value'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['props_id'])){
				
				$this->props_id = $vals['props_id'];
			}
			
			
			if (isset($vals['props_name'])){
				
				$this->props_name = $vals['props_name'];
			}
			
			
			if (isset($vals['props_value'])){
				
				$this->props_value = $vals['props_value'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SaleProps';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("props_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->props_id); 
				
			}
			
			
			
			
			if ("props_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->props_name);
				
			}
			
			
			
			
			if ("props_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->props_value);
				
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
		
		if($this->props_id !== null) {
			
			$xfer += $output->writeFieldBegin('props_id');
			$xfer += $output->writeI32($this->props_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->props_name !== null) {
			
			$xfer += $output->writeFieldBegin('props_name');
			$xfer += $output->writeString($this->props_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->props_value !== null) {
			
			$xfer += $output->writeFieldBegin('props_value');
			$xfer += $output->writeString($this->props_value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>