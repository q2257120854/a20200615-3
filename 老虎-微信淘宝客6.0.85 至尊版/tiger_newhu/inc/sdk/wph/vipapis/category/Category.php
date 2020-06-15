<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\category;

class Category {
	
	static $_TSPEC;
	public $category_id = null;
	public $category_name = null;
	public $foreignname = null;
	public $description = null;
	public $category_type = null;
	public $keywords = null;
	public $flags = null;
	public $hierarchy_id = null;
	public $last_updatetime = null;
	public $related_categories = null;
	public $children = null;
	public $mapping = null;
	public $major_parent_category_id = null;
	public $salve_parent_category_ids = null;
	public $attributes = null;
	
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
			'var' => 'foreignname'
			),
			4 => array(
			'var' => 'description'
			),
			5 => array(
			'var' => 'category_type'
			),
			6 => array(
			'var' => 'keywords'
			),
			7 => array(
			'var' => 'flags'
			),
			8 => array(
			'var' => 'hierarchy_id'
			),
			9 => array(
			'var' => 'last_updatetime'
			),
			10 => array(
			'var' => 'related_categories'
			),
			11 => array(
			'var' => 'children'
			),
			12 => array(
			'var' => 'mapping'
			),
			13 => array(
			'var' => 'major_parent_category_id'
			),
			14 => array(
			'var' => 'salve_parent_category_ids'
			),
			15 => array(
			'var' => 'attributes'
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
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['category_type'])){
				
				$this->category_type = $vals['category_type'];
			}
			
			
			if (isset($vals['keywords'])){
				
				$this->keywords = $vals['keywords'];
			}
			
			
			if (isset($vals['flags'])){
				
				$this->flags = $vals['flags'];
			}
			
			
			if (isset($vals['hierarchy_id'])){
				
				$this->hierarchy_id = $vals['hierarchy_id'];
			}
			
			
			if (isset($vals['last_updatetime'])){
				
				$this->last_updatetime = $vals['last_updatetime'];
			}
			
			
			if (isset($vals['related_categories'])){
				
				$this->related_categories = $vals['related_categories'];
			}
			
			
			if (isset($vals['children'])){
				
				$this->children = $vals['children'];
			}
			
			
			if (isset($vals['mapping'])){
				
				$this->mapping = $vals['mapping'];
			}
			
			
			if (isset($vals['major_parent_category_id'])){
				
				$this->major_parent_category_id = $vals['major_parent_category_id'];
			}
			
			
			if (isset($vals['salve_parent_category_ids'])){
				
				$this->salve_parent_category_ids = $vals['salve_parent_category_ids'];
			}
			
			
			if (isset($vals['attributes'])){
				
				$this->attributes = $vals['attributes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Category';
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
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("category_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\category\CategoryType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->category_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("keywords" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keywords);
				
			}
			
			
			
			
			if ("flags" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->flags); 
				
			}
			
			
			
			
			if ("hierarchy_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hierarchy_id); 
				
			}
			
			
			
			
			if ("last_updatetime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->last_updatetime); 
				
			}
			
			
			
			
			if ("related_categories" == $schemeField){
				
				$needSkip = false;
				
				$this->related_categories = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->related_categories[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("children" == $schemeField){
				
				$needSkip = false;
				
				$this->children = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\category\Category();
						$elem2->read($input);
						
						$this->children[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("mapping" == $schemeField){
				
				$needSkip = false;
				
				$this->mapping = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \vipapis\category\CategoryMapping();
						$elem3->read($input);
						
						$this->mapping[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("major_parent_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->major_parent_category_id); 
				
			}
			
			
			
			
			if ("salve_parent_category_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->salve_parent_category_ids = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readI32($elem4); 
						
						$this->salve_parent_category_ids[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("attributes" == $schemeField){
				
				$needSkip = false;
				
				$this->attributes = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \vipapis\category\Attribute();
						$elem5->read($input);
						
						$this->attributes[$_size5++] = $elem5;
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
		
		$xfer += $output->writeFieldBegin('category_id');
		$xfer += $output->writeI32($this->category_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->category_name !== null) {
			
			$xfer += $output->writeFieldBegin('category_name');
			$xfer += $output->writeString($this->category_name);
			
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
		
		
		if($this->category_type !== null) {
			
			$xfer += $output->writeFieldBegin('category_type');
			
			$em = new \vipapis\category\CategoryType; 
			$output->writeString($em::$__names[$this->category_type]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->keywords !== null) {
			
			$xfer += $output->writeFieldBegin('keywords');
			$xfer += $output->writeString($this->keywords);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flags !== null) {
			
			$xfer += $output->writeFieldBegin('flags');
			$xfer += $output->writeI64($this->flags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hierarchy_id !== null) {
			
			$xfer += $output->writeFieldBegin('hierarchy_id');
			$xfer += $output->writeI32($this->hierarchy_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_updatetime !== null) {
			
			$xfer += $output->writeFieldBegin('last_updatetime');
			$xfer += $output->writeI64($this->last_updatetime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->related_categories !== null) {
			
			$xfer += $output->writeFieldBegin('related_categories');
			
			if (!is_array($this->related_categories)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->related_categories as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->children !== null) {
			
			$xfer += $output->writeFieldBegin('children');
			
			if (!is_array($this->children)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->children as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mapping !== null) {
			
			$xfer += $output->writeFieldBegin('mapping');
			
			if (!is_array($this->mapping)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mapping as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->major_parent_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('major_parent_category_id');
			$xfer += $output->writeI32($this->major_parent_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salve_parent_category_ids !== null) {
			
			$xfer += $output->writeFieldBegin('salve_parent_category_ids');
			
			if (!is_array($this->salve_parent_category_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->salve_parent_category_ids as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributes !== null) {
			
			$xfer += $output->writeFieldBegin('attributes');
			
			if (!is_array($this->attributes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attributes as $iter0){
				
				
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