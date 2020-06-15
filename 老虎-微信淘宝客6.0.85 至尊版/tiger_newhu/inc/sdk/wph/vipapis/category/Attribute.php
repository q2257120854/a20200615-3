<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\category;

class Attribute {
	
	static $_TSPEC;
	public $attriute_id = null;
	public $attribute_name = null;
	public $foreignname = null;
	public $description = null;
	public $attribute_type = null;
	public $data_type = null;
	public $unit = null;
	public $sort = null;
	public $flags = null;
	public $parent_attribute_id = null;
	public $options = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attriute_id'
			),
			2 => array(
			'var' => 'attribute_name'
			),
			3 => array(
			'var' => 'foreignname'
			),
			4 => array(
			'var' => 'description'
			),
			5 => array(
			'var' => 'attribute_type'
			),
			6 => array(
			'var' => 'data_type'
			),
			7 => array(
			'var' => 'unit'
			),
			8 => array(
			'var' => 'sort'
			),
			9 => array(
			'var' => 'flags'
			),
			10 => array(
			'var' => 'parent_attribute_id'
			),
			11 => array(
			'var' => 'options'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attriute_id'])){
				
				$this->attriute_id = $vals['attriute_id'];
			}
			
			
			if (isset($vals['attribute_name'])){
				
				$this->attribute_name = $vals['attribute_name'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['attribute_type'])){
				
				$this->attribute_type = $vals['attribute_type'];
			}
			
			
			if (isset($vals['data_type'])){
				
				$this->data_type = $vals['data_type'];
			}
			
			
			if (isset($vals['unit'])){
				
				$this->unit = $vals['unit'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['flags'])){
				
				$this->flags = $vals['flags'];
			}
			
			
			if (isset($vals['parent_attribute_id'])){
				
				$this->parent_attribute_id = $vals['parent_attribute_id'];
			}
			
			
			if (isset($vals['options'])){
				
				$this->options = $vals['options'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Attribute';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attriute_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attriute_id); 
				
			}
			
			
			
			
			if ("attribute_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute_name);
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("attribute_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\category\AttributeType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->attribute_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("data_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\category\DataType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->data_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unit);
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("flags" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->flags); 
				
			}
			
			
			
			
			if ("parent_attribute_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->parent_attribute_id); 
				
			}
			
			
			
			
			if ("options" == $schemeField){
				
				$needSkip = false;
				
				$this->options = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\category\Option();
						$elem0->read($input);
						
						$this->options[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('attriute_id');
		$xfer += $output->writeI32($this->attriute_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attribute_name !== null) {
			
			$xfer += $output->writeFieldBegin('attribute_name');
			$xfer += $output->writeString($this->attribute_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute_type !== null) {
			
			$xfer += $output->writeFieldBegin('attribute_type');
			
			$em = new \vipapis\category\AttributeType; 
			$output->writeString($em::$__names[$this->attribute_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_type !== null) {
			
			$xfer += $output->writeFieldBegin('data_type');
			
			$em = new \vipapis\category\DataType; 
			$output->writeString($em::$__names[$this->data_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unit !== null) {
			
			$xfer += $output->writeFieldBegin('unit');
			$xfer += $output->writeString($this->unit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flags !== null) {
			
			$xfer += $output->writeFieldBegin('flags');
			$xfer += $output->writeI64($this->flags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parent_attribute_id !== null) {
			
			$xfer += $output->writeFieldBegin('parent_attribute_id');
			$xfer += $output->writeI32($this->parent_attribute_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->options !== null) {
			
			$xfer += $output->writeFieldBegin('options');
			
			if (!is_array($this->options)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->options as $iter0){
				
				
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