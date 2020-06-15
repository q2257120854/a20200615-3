<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class SizeMapping {
	
	static $_TSPEC;
	public $category_id = null;
	public $category_name = null;
	public $size_table_attrs = null;
	public $illustrative_image = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'category_id'
			),
			2 => array(
			'var' => 'category_name'
			),
			3 => array(
			'var' => 'size_table_attrs'
			),
			4 => array(
			'var' => 'illustrative_image'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['category_name'])){
				
				$this->category_name = $vals['category_name'];
			}
			
			
			if (isset($vals['size_table_attrs'])){
				
				$this->size_table_attrs = $vals['size_table_attrs'];
			}
			
			
			if (isset($vals['illustrative_image'])){
				
				$this->illustrative_image = $vals['illustrative_image'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeMapping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
			}
			
			
			
			
			if ("category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category_name);
				
			}
			
			
			
			
			if ("size_table_attrs" == $schemeField){
				
				$needSkip = false;
				
				$this->size_table_attrs = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->size_table_attrs[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("illustrative_image" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->illustrative_image);
				
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
		
		if($this->category_id !== null) {
			
			$xfer += $output->writeFieldBegin('category_id');
			$xfer += $output->writeI32($this->category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category_name !== null) {
			
			$xfer += $output->writeFieldBegin('category_name');
			$xfer += $output->writeString($this->category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_attrs !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_attrs');
			
			if (!is_array($this->size_table_attrs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->size_table_attrs as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->illustrative_image !== null) {
			
			$xfer += $output->writeFieldBegin('illustrative_image');
			$xfer += $output->writeString($this->illustrative_image);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>