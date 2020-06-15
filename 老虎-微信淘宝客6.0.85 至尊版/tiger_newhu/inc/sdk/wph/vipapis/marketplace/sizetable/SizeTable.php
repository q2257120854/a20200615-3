<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\sizetable;

class SizeTable {
	
	static $_TSPEC;
	public $size_table_id = null;
	public $size_table_type = null;
	public $size_table_html = null;
	public $size_table_tips = null;
	public $del_flag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_table_id'
			),
			2 => array(
			'var' => 'size_table_type'
			),
			3 => array(
			'var' => 'size_table_html'
			),
			4 => array(
			'var' => 'size_table_tips'
			),
			5 => array(
			'var' => 'del_flag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['size_table_type'])){
				
				$this->size_table_type = $vals['size_table_type'];
			}
			
			
			if (isset($vals['size_table_html'])){
				
				$this->size_table_html = $vals['size_table_html'];
			}
			
			
			if (isset($vals['size_table_tips'])){
				
				$this->size_table_tips = $vals['size_table_tips'];
			}
			
			
			if (isset($vals['del_flag'])){
				
				$this->del_flag = $vals['del_flag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeTable';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("size_table_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_table_id); 
				
			}
			
			
			
			
			if ("size_table_type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->size_table_type); 
				
			}
			
			
			
			
			if ("size_table_html" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_table_html);
				
			}
			
			
			
			
			if ("size_table_tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_table_tips);
				
			}
			
			
			
			
			if ("del_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->del_flag); 
				
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
		
		$xfer += $output->writeFieldBegin('size_table_id');
		$xfer += $output->writeI64($this->size_table_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size_table_type');
		$xfer += $output->writeI16($this->size_table_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->size_table_html !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_html');
			$xfer += $output->writeString($this->size_table_html);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_tips !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_tips');
			$xfer += $output->writeString($this->size_table_tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->del_flag !== null) {
			
			$xfer += $output->writeFieldBegin('del_flag');
			$xfer += $output->writeI16($this->del_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>