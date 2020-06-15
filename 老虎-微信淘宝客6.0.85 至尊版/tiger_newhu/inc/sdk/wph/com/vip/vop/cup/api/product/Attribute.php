<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class Attribute {
	
	static $_TSPEC;
	public $attribute_id = null;
	public $attribute_name = null;
	public $foreign_name = null;
	public $type = null;
	public $data_type = null;
	public $flag = null;
	public $values = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attribute_id'
			),
			2 => array(
			'var' => 'attribute_name'
			),
			3 => array(
			'var' => 'foreign_name'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'data_type'
			),
			6 => array(
			'var' => 'flag'
			),
			7 => array(
			'var' => 'values'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attribute_id'])){
				
				$this->attribute_id = $vals['attribute_id'];
			}
			
			
			if (isset($vals['attribute_name'])){
				
				$this->attribute_name = $vals['attribute_name'];
			}
			
			
			if (isset($vals['foreign_name'])){
				
				$this->foreign_name = $vals['foreign_name'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['data_type'])){
				
				$this->data_type = $vals['data_type'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['values'])){
				
				$this->values = $vals['values'];
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
			
			
			if ("attribute_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attribute_id); 
				
			}
			
			
			
			
			if ("attribute_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute_name);
				
			}
			
			
			
			
			if ("foreign_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreign_name);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\vop\cup\api\product\AttributeType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("data_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\vop\cup\api\product\DataType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->data_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->flag); 
				
			}
			
			
			
			
			if ("values" == $schemeField){
				
				$needSkip = false;
				
				$this->values = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\cup\api\product\AttributeValue();
						$elem1->read($input);
						
						$this->values[$_size1++] = $elem1;
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
		
		if($this->attribute_id !== null) {
			
			$xfer += $output->writeFieldBegin('attribute_id');
			$xfer += $output->writeI32($this->attribute_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute_name !== null) {
			
			$xfer += $output->writeFieldBegin('attribute_name');
			$xfer += $output->writeString($this->attribute_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreign_name !== null) {
			
			$xfer += $output->writeFieldBegin('foreign_name');
			$xfer += $output->writeString($this->foreign_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			
			$em = new \com\vip\vop\cup\api\product\AttributeType; 
			$output->writeString($em::$__names[$this->type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_type !== null) {
			
			$xfer += $output->writeFieldBegin('data_type');
			
			$em = new \com\vip\vop\cup\api\product\DataType; 
			$output->writeString($em::$__names[$this->data_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flag !== null) {
			
			$xfer += $output->writeFieldBegin('flag');
			$xfer += $output->writeByte($this->flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->values !== null) {
			
			$xfer += $output->writeFieldBegin('values');
			
			if (!is_array($this->values)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->values as $iter0){
				
				
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