<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class SizeCategoryDo {
	
	static $_TSPEC;
	public $id = null;
	public $category_id = null;
	public $size_pic = null;
	public $size_template_id = null;
	public $size_detail_does = null;
	public $size_template_do = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'category_id'
			),
			3 => array(
			'var' => 'size_pic'
			),
			4 => array(
			'var' => 'size_template_id'
			),
			5 => array(
			'var' => 'size_detail_does'
			),
			6 => array(
			'var' => 'size_template_do'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['size_pic'])){
				
				$this->size_pic = $vals['size_pic'];
			}
			
			
			if (isset($vals['size_template_id'])){
				
				$this->size_template_id = $vals['size_template_id'];
			}
			
			
			if (isset($vals['size_detail_does'])){
				
				$this->size_detail_does = $vals['size_detail_does'];
			}
			
			
			if (isset($vals['size_template_do'])){
				
				$this->size_template_do = $vals['size_template_do'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeCategoryDo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
			}
			
			
			
			
			if ("size_pic" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_pic);
				
			}
			
			
			
			
			if ("size_template_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_template_id); 
				
			}
			
			
			
			
			if ("size_detail_does" == $schemeField){
				
				$needSkip = false;
				
				$this->size_detail_does = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\size\SizeDetailDo();
						$elem0->read($input);
						
						$this->size_detail_does[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("size_template_do" == $schemeField){
				
				$needSkip = false;
				
				$this->size_template_do = new \vipapis\size\SizeTemplateDo();
				$this->size_template_do->read($input);
				
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
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category_id !== null) {
			
			$xfer += $output->writeFieldBegin('category_id');
			$xfer += $output->writeI32($this->category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_pic !== null) {
			
			$xfer += $output->writeFieldBegin('size_pic');
			$xfer += $output->writeString($this->size_pic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_template_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_template_id');
			$xfer += $output->writeI64($this->size_template_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_detail_does !== null) {
			
			$xfer += $output->writeFieldBegin('size_detail_does');
			
			if (!is_array($this->size_detail_does)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->size_detail_does as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_template_do !== null) {
			
			$xfer += $output->writeFieldBegin('size_template_do');
			
			if (!is_object($this->size_template_do)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->size_template_do->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>