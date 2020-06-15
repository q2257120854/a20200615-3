<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class AttributeValue {
	
	static $_TSPEC;
	public $option_id = null;
	public $option_name = null;
	public $option_aliases = null;
	public $literal = null;
	public $flag = null;
	public $sort = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'option_id'
			),
			2 => array(
			'var' => 'option_name'
			),
			3 => array(
			'var' => 'option_aliases'
			),
			4 => array(
			'var' => 'literal'
			),
			5 => array(
			'var' => 'flag'
			),
			6 => array(
			'var' => 'sort'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['option_id'])){
				
				$this->option_id = $vals['option_id'];
			}
			
			
			if (isset($vals['option_name'])){
				
				$this->option_name = $vals['option_name'];
			}
			
			
			if (isset($vals['option_aliases'])){
				
				$this->option_aliases = $vals['option_aliases'];
			}
			
			
			if (isset($vals['literal'])){
				
				$this->literal = $vals['literal'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttributeValue';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("option_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->option_id); 
				
			}
			
			
			
			
			if ("option_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->option_name);
				
			}
			
			
			
			
			if ("option_aliases" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->option_aliases);
				
			}
			
			
			
			
			if ("literal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->literal);
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->flag); 
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
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
		
		if($this->option_id !== null) {
			
			$xfer += $output->writeFieldBegin('option_id');
			$xfer += $output->writeI32($this->option_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->option_name !== null) {
			
			$xfer += $output->writeFieldBegin('option_name');
			$xfer += $output->writeString($this->option_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->option_aliases !== null) {
			
			$xfer += $output->writeFieldBegin('option_aliases');
			$xfer += $output->writeString($this->option_aliases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->literal !== null) {
			
			$xfer += $output->writeFieldBegin('literal');
			$xfer += $output->writeString($this->literal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flag !== null) {
			
			$xfer += $output->writeFieldBegin('flag');
			$xfer += $output->writeByte($this->flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>