<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\sizetable;

class GetSizeTableTemplateRequest {
	
	static $_TSPEC;
	public $page = null;
	public $limit = null;
	public $size_table_template_id = null;
	public $size_table_template_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			2 => array(
			'var' => 'limit'
			),
			3 => array(
			'var' => 'size_table_template_id'
			),
			4 => array(
			'var' => 'size_table_template_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['size_table_template_id'])){
				
				$this->size_table_template_id = $vals['size_table_template_id'];
			}
			
			
			if (isset($vals['size_table_template_name'])){
				
				$this->size_table_template_name = $vals['size_table_template_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSizeTableTemplateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("size_table_template_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size_table_template_id); 
				
			}
			
			
			
			
			if ("size_table_template_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_table_template_name);
				
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
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_template_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_template_id');
			$xfer += $output->writeI32($this->size_table_template_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_template_name !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_template_name');
			$xfer += $output->writeString($this->size_table_template_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>