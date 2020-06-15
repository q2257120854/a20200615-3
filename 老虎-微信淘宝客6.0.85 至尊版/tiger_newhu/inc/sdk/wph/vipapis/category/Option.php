<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\category;

class Option {
	
	static $_TSPEC;
	public $attributeId = null;
	public $optionId = null;
	public $name = null;
	public $description = null;
	public $hierarchyGroup = null;
	public $sort = null;
	public $parentOptionId = null;
	public $isVirtual = null;
	public $realOptions = null;
	public $foreignname = null;
	public $externaldata = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeId'
			),
			2 => array(
			'var' => 'optionId'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'description'
			),
			5 => array(
			'var' => 'hierarchyGroup'
			),
			6 => array(
			'var' => 'sort'
			),
			7 => array(
			'var' => 'parentOptionId'
			),
			8 => array(
			'var' => 'isVirtual'
			),
			9 => array(
			'var' => 'realOptions'
			),
			10 => array(
			'var' => 'foreignname'
			),
			11 => array(
			'var' => 'externaldata'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['hierarchyGroup'])){
				
				$this->hierarchyGroup = $vals['hierarchyGroup'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['parentOptionId'])){
				
				$this->parentOptionId = $vals['parentOptionId'];
			}
			
			
			if (isset($vals['isVirtual'])){
				
				$this->isVirtual = $vals['isVirtual'];
			}
			
			
			if (isset($vals['realOptions'])){
				
				$this->realOptions = $vals['realOptions'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['externaldata'])){
				
				$this->externaldata = $vals['externaldata'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Option';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attributeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attributeId); 
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("hierarchyGroup" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hierarchyGroup);
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("parentOptionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->parentOptionId); 
				
			}
			
			
			
			
			if ("isVirtual" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isVirtual);
				
			}
			
			
			
			
			if ("realOptions" == $schemeField){
				
				$needSkip = false;
				
				$this->realOptions = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->realOptions[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("externaldata" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externaldata);
				
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
		
		$xfer += $output->writeFieldBegin('attributeId');
		$xfer += $output->writeI32($this->attributeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optionId');
		$xfer += $output->writeI32($this->optionId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hierarchyGroup !== null) {
			
			$xfer += $output->writeFieldBegin('hierarchyGroup');
			$xfer += $output->writeString($this->hierarchyGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentOptionId !== null) {
			
			$xfer += $output->writeFieldBegin('parentOptionId');
			$xfer += $output->writeI32($this->parentOptionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVirtual !== null) {
			
			$xfer += $output->writeFieldBegin('isVirtual');
			$xfer += $output->writeBool($this->isVirtual);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realOptions !== null) {
			
			$xfer += $output->writeFieldBegin('realOptions');
			
			if (!is_array($this->realOptions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->realOptions as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externaldata !== null) {
			
			$xfer += $output->writeFieldBegin('externaldata');
			$xfer += $output->writeString($this->externaldata);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>