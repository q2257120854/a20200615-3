<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class SizeTableTemplate {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $sizetable_template_name = null;
	public $sizetable_id = null;
	public $sizetable_type = null;
	public $del_flag = null;
	public $sizetable_template_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'sizetable_template_name'
			),
			3 => array(
			'var' => 'sizetable_id'
			),
			4 => array(
			'var' => 'sizetable_type'
			),
			5 => array(
			'var' => 'del_flag'
			),
			6 => array(
			'var' => 'sizetable_template_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['sizetable_template_name'])){
				
				$this->sizetable_template_name = $vals['sizetable_template_name'];
			}
			
			
			if (isset($vals['sizetable_id'])){
				
				$this->sizetable_id = $vals['sizetable_id'];
			}
			
			
			if (isset($vals['sizetable_type'])){
				
				$this->sizetable_type = $vals['sizetable_type'];
			}
			
			
			if (isset($vals['del_flag'])){
				
				$this->del_flag = $vals['del_flag'];
			}
			
			
			if (isset($vals['sizetable_template_id'])){
				
				$this->sizetable_template_id = $vals['sizetable_template_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeTableTemplate';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("sizetable_template_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizetable_template_name);
				
			}
			
			
			
			
			if ("sizetable_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizetable_id); 
				
			}
			
			
			
			
			if ("sizetable_type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->sizetable_type); 
				
			}
			
			
			
			
			if ("del_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->del_flag); 
				
			}
			
			
			
			
			if ("sizetable_template_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sizetable_template_id); 
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetable_template_name !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_template_name');
			$xfer += $output->writeString($this->sizetable_template_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetable_id !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_id');
			$xfer += $output->writeI64($this->sizetable_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetable_type !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_type');
			$xfer += $output->writeI16($this->sizetable_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->del_flag !== null) {
			
			$xfer += $output->writeFieldBegin('del_flag');
			$xfer += $output->writeI16($this->del_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetable_template_id !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_template_id');
			$xfer += $output->writeI32($this->sizetable_template_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>