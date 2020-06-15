<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class CategorySizetableConfig {
	
	static $_TSPEC;
	public $category_id = null;
	public $category_name = null;
	public $size_type_id = null;
	public $size_type_name = null;
	public $sizetableConfigs = null;
	
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
			'var' => 'size_type_id'
			),
			4 => array(
			'var' => 'size_type_name'
			),
			5 => array(
			'var' => 'sizetableConfigs'
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
			
			
			if (isset($vals['size_type_id'])){
				
				$this->size_type_id = $vals['size_type_id'];
			}
			
			
			if (isset($vals['size_type_name'])){
				
				$this->size_type_name = $vals['size_type_name'];
			}
			
			
			if (isset($vals['sizetableConfigs'])){
				
				$this->sizetableConfigs = $vals['sizetableConfigs'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategorySizetableConfig';
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
			
			
			
			
			if ("size_type_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size_type_id); 
				
			}
			
			
			
			
			if ("size_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_type_name);
				
			}
			
			
			
			
			if ("sizetableConfigs" == $schemeField){
				
				$needSkip = false;
				
				$this->sizetableConfigs = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vsizetable\SizetableConfig();
						$elem0->read($input);
						
						$this->sizetableConfigs[$_size0++] = $elem0;
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
		
		
		if($this->size_type_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_type_id');
			$xfer += $output->writeI32($this->size_type_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('size_type_name');
			$xfer += $output->writeString($this->size_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetableConfigs !== null) {
			
			$xfer += $output->writeFieldBegin('sizetableConfigs');
			
			if (!is_array($this->sizetableConfigs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizetableConfigs as $iter0){
				
				
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