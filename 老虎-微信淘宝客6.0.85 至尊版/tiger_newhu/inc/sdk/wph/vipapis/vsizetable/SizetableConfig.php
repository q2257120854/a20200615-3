<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class SizetableConfig {
	
	static $_TSPEC;
	public $size_attr_name = null;
	public $required = null;
	public $threshold_start = null;
	public $threshold_end = null;
	public $other_value = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_attr_name'
			),
			2 => array(
			'var' => 'required'
			),
			3 => array(
			'var' => 'threshold_start'
			),
			4 => array(
			'var' => 'threshold_end'
			),
			5 => array(
			'var' => 'other_value'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_attr_name'])){
				
				$this->size_attr_name = $vals['size_attr_name'];
			}
			
			
			if (isset($vals['required'])){
				
				$this->required = $vals['required'];
			}
			
			
			if (isset($vals['threshold_start'])){
				
				$this->threshold_start = $vals['threshold_start'];
			}
			
			
			if (isset($vals['threshold_end'])){
				
				$this->threshold_end = $vals['threshold_end'];
			}
			
			
			if (isset($vals['other_value'])){
				
				$this->other_value = $vals['other_value'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizetableConfig';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("size_attr_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_attr_name);
				
			}
			
			
			
			
			if ("required" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->required); 
				
			}
			
			
			
			
			if ("threshold_start" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->threshold_start); 
				
			}
			
			
			
			
			if ("threshold_end" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->threshold_end); 
				
			}
			
			
			
			
			if ("other_value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->other_value);
				
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
		
		if($this->size_attr_name !== null) {
			
			$xfer += $output->writeFieldBegin('size_attr_name');
			$xfer += $output->writeString($this->size_attr_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->required !== null) {
			
			$xfer += $output->writeFieldBegin('required');
			$xfer += $output->writeI32($this->required);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->threshold_start !== null) {
			
			$xfer += $output->writeFieldBegin('threshold_start');
			$xfer += $output->writeI32($this->threshold_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->threshold_end !== null) {
			
			$xfer += $output->writeFieldBegin('threshold_end');
			$xfer += $output->writeI32($this->threshold_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->other_value !== null) {
			
			$xfer += $output->writeFieldBegin('other_value');
			$xfer += $output->writeString($this->other_value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>