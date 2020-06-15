<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\sizetable;

class AddSizeTableTemplateRequest {
	
	static $_TSPEC;
	public $type = null;
	public $template_name = null;
	public $tips = null;
	public $template_type = null;
	public $html = null;
	public $size_details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'template_name'
			),
			3 => array(
			'var' => 'tips'
			),
			4 => array(
			'var' => 'template_type'
			),
			5 => array(
			'var' => 'html'
			),
			6 => array(
			'var' => 'size_details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
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
			
			
			if (isset($vals['size_details'])){
				
				$this->size_details = $vals['size_details'];
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
			
			
			
			
			if ("size_details" == $schemeField){
				
				$needSkip = false;
				
				$this->size_details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\sizetable\AddSizeDetail();
						$elem0->read($input);
						
						$this->size_details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->size_details !== null) {
			
			$xfer += $output->writeFieldBegin('size_details');
			
			if (!is_array($this->size_details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->size_details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>