<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\brand;

class BrandInfo {
	
	static $_TSPEC;
	public $brand_id = null;
	public $brand_name = null;
	public $brand_name_eng = null;
	public $brand_name_pinyin = null;
	public $brand_logo = null;
	public $brand_description = null;
	public $brand_url = null;
	public $brand_level = null;
	public $last_modify_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brand_id'
			),
			2 => array(
			'var' => 'brand_name'
			),
			3 => array(
			'var' => 'brand_name_eng'
			),
			4 => array(
			'var' => 'brand_name_pinyin'
			),
			5 => array(
			'var' => 'brand_logo'
			),
			6 => array(
			'var' => 'brand_description'
			),
			7 => array(
			'var' => 'brand_url'
			),
			8 => array(
			'var' => 'brand_level'
			),
			9 => array(
			'var' => 'last_modify_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['brand_name_eng'])){
				
				$this->brand_name_eng = $vals['brand_name_eng'];
			}
			
			
			if (isset($vals['brand_name_pinyin'])){
				
				$this->brand_name_pinyin = $vals['brand_name_pinyin'];
			}
			
			
			if (isset($vals['brand_logo'])){
				
				$this->brand_logo = $vals['brand_logo'];
			}
			
			
			if (isset($vals['brand_description'])){
				
				$this->brand_description = $vals['brand_description'];
			}
			
			
			if (isset($vals['brand_url'])){
				
				$this->brand_url = $vals['brand_url'];
			}
			
			
			if (isset($vals['brand_level'])){
				
				$this->brand_level = $vals['brand_level'];
			}
			
			
			if (isset($vals['last_modify_time'])){
				
				$this->last_modify_time = $vals['last_modify_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("brand_name_eng" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name_eng);
				
			}
			
			
			
			
			if ("brand_name_pinyin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name_pinyin);
				
			}
			
			
			
			
			if ("brand_logo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_logo);
				
			}
			
			
			
			
			if ("brand_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_description);
				
			}
			
			
			
			
			if ("brand_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_url);
				
			}
			
			
			
			
			if ("brand_level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_level);
				
			}
			
			
			
			
			if ("last_modify_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->last_modify_time);
				
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
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeString($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name_eng !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name_eng');
			$xfer += $output->writeString($this->brand_name_eng);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name_pinyin !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name_pinyin');
			$xfer += $output->writeString($this->brand_name_pinyin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_logo !== null) {
			
			$xfer += $output->writeFieldBegin('brand_logo');
			$xfer += $output->writeString($this->brand_logo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_description !== null) {
			
			$xfer += $output->writeFieldBegin('brand_description');
			$xfer += $output->writeString($this->brand_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_url !== null) {
			
			$xfer += $output->writeFieldBegin('brand_url');
			$xfer += $output->writeString($this->brand_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_level !== null) {
			
			$xfer += $output->writeFieldBegin('brand_level');
			$xfer += $output->writeString($this->brand_level);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->last_modify_time !== null) {
			
			$xfer += $output->writeFieldBegin('last_modify_time');
			$xfer += $output->writeString($this->last_modify_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>