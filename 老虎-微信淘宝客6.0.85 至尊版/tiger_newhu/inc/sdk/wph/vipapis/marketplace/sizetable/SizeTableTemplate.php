<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\sizetable;

class SizeTableTemplate {
	
	static $_TSPEC;
	public $size_table_template_name = null;
	public $size_table_id = null;
	public $size_table_type = null;
	public $del_flag = null;
	public $size_table_template_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_table_template_name'
			),
			2 => array(
			'var' => 'size_table_id'
			),
			3 => array(
			'var' => 'size_table_type'
			),
			4 => array(
			'var' => 'del_flag'
			),
			5 => array(
			'var' => 'size_table_template_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_table_template_name'])){
				
				$this->size_table_template_name = $vals['size_table_template_name'];
			}
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['size_table_type'])){
				
				$this->size_table_type = $vals['size_table_type'];
			}
			
			
			if (isset($vals['del_flag'])){
				
				$this->del_flag = $vals['del_flag'];
			}
			
			
			if (isset($vals['size_table_template_id'])){
				
				$this->size_table_template_id = $vals['size_table_template_id'];
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
			
			
			if ("size_table_template_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_table_template_name);
				
			}
			
			
			
			
			if ("size_table_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_table_id); 
				
			}
			
			
			
			
			if ("size_table_type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->size_table_type); 
				
			}
			
			
			
			
			if ("del_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->del_flag); 
				
			}
			
			
			
			
			if ("size_table_template_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size_table_template_id); 
				
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
		
		if($this->size_table_template_name !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_template_name');
			$xfer += $output->writeString($this->size_table_template_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_id');
			$xfer += $output->writeI64($this->size_table_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_type !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_type');
			$xfer += $output->writeI16($this->size_table_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->del_flag !== null) {
			
			$xfer += $output->writeFieldBegin('del_flag');
			$xfer += $output->writeI16($this->del_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_template_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_template_id');
			$xfer += $output->writeI32($this->size_table_template_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>