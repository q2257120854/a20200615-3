<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class AddSizeTableTemplateRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $type = null;
	public $template_name = null;
	public $tips = null;
	public $template_type = null;
	public $html = null;
	public $size_detail_summaries = null;
	public $third_category_id = null;
	public $third_category_name = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'template_name'
			),
			4 => array(
			'var' => 'tips'
			),
			5 => array(
			'var' => 'template_type'
			),
			6 => array(
			'var' => 'html'
			),
			7 => array(
			'var' => 'size_detail_summaries'
			),
			8 => array(
			'var' => 'third_category_id'
			),
			9 => array(
			'var' => 'third_category_name'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['template_name'])){
				
				$this->template_name = $vals['template_name'];
			}
			
			
			if (isset($vals['tips'])){
				
				$this->tips = $vals['tips'];
			}
			
			
			if (isset($vals['template_type'])){
				
				$this->template_type = $vals['template_type'];
			}
			
			
			if (isset($vals['html'])){
				
				$this->html = $vals['html'];
			}
			
			
			if (isset($vals['size_detail_summaries'])){
				
				$this->size_detail_summaries = $vals['size_detail_summaries'];
			}
			
			
			if (isset($vals['third_category_id'])){
				
				$this->third_category_id = $vals['third_category_id'];
			}
			
			
			if (isset($vals['third_category_name'])){
				
				$this->third_category_name = $vals['third_category_name'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddSizeTableTemplateRequest';
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
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->type); 
				
			}
			
			
			
			
			if ("template_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->template_name);
				
			}
			
			
			
			
			if ("tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tips);
				
			}
			
			
			
			
			if ("template_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->template_type); 
				
			}
			
			
			
			
			if ("html" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->html);
				
			}
			
			
			
			
			if ("size_detail_summaries" == $schemeField){
				
				$needSkip = false;
				
				$this->size_detail_summaries = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\vsizetable\SizeDetailSummary();
						$elem1->read($input);
						
						$this->size_detail_summaries[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("third_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->third_category_id); 
				
			}
			
			
			
			
			if ("third_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_category_name);
				
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
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI16($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('template_name');
		$xfer += $output->writeString($this->template_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tips !== null) {
			
			$xfer += $output->writeFieldBegin('tips');
			$xfer += $output->writeString($this->tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('template_type');
		$xfer += $output->writeI32($this->template_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->html !== null) {
			
			$xfer += $output->writeFieldBegin('html');
			$xfer += $output->writeString($this->html);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_detail_summaries !== null) {
			
			$xfer += $output->writeFieldBegin('size_detail_summaries');
			
			if (!is_array($this->size_detail_summaries)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->size_detail_summaries as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('third_category_id');
			$xfer += $output->writeI32($this->third_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('third_category_name');
			$xfer += $output->writeString($this->third_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>