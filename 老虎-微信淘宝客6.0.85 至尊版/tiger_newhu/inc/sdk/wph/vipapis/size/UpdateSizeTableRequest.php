<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class UpdateSizeTableRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $size_table_id = null;
	public $size_table_name = null;
	public $size_table_type = null;
	public $size_table_html = null;
	public $size_table_tips = null;
	public $category_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'size_table_id'
			),
			3 => array(
			'var' => 'size_table_name'
			),
			4 => array(
			'var' => 'size_table_type'
			),
			5 => array(
			'var' => 'size_table_html'
			),
			6 => array(
			'var' => 'size_table_tips'
			),
			7 => array(
			'var' => 'category_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['size_table_name'])){
				
				$this->size_table_name = $vals['size_table_name'];
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
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateSizeTableRequest';
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
			
			
			
			
			if ("size_table_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_table_id); 
				
			}
			
			
			
			
			if ("size_table_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_table_name);
				
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
			
			
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size_table_id');
		$xfer += $output->writeI64($this->size_table_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->size_table_name !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_name');
			$xfer += $output->writeString($this->size_table_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		$xfer += $output->writeFieldBegin('category_id');
		$xfer += $output->writeI32($this->category_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>