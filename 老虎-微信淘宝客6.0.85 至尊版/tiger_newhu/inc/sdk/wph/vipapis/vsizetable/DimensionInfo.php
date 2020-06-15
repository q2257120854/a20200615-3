<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class DimensionInfo {
	
	static $_TSPEC;
	public $template_type_id = null;
	public $template_type_name = null;
	public $template_properties = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'template_type_id'
			),
			2 => array(
			'var' => 'template_type_name'
			),
			3 => array(
			'var' => 'template_properties'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['template_type_id'])){
				
				$this->template_type_id = $vals['template_type_id'];
			}
			
			
			if (isset($vals['template_type_name'])){
				
				$this->template_type_name = $vals['template_type_name'];
			}
			
			
			if (isset($vals['template_properties'])){
				
				$this->template_properties = $vals['template_properties'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DimensionInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("template_type_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->template_type_id); 
				
			}
			
			
			
			
			if ("template_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->template_type_name);
				
			}
			
			
			
			
			if ("template_properties" == $schemeField){
				
				$needSkip = false;
				
				$this->template_properties = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->template_properties[$_size1++] = $elem1;
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
		
		if($this->template_type_id !== null) {
			
			$xfer += $output->writeFieldBegin('template_type_id');
			$xfer += $output->writeI32($this->template_type_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->template_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('template_type_name');
			$xfer += $output->writeString($this->template_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->template_properties !== null) {
			
			$xfer += $output->writeFieldBegin('template_properties');
			
			if (!is_array($this->template_properties)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->template_properties as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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