<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\brand;

class BrandStory {
	
	static $_TSPEC;
	public $brand_id = null;
	public $cn_name = null;
	public $en_name = null;
	public $logo_url = null;
	public $brand_url = null;
	public $bg_path = null;
	public $bg_path_mobile = null;
	public $store_url_path = null;
	public $description = null;
	public $brand_index = null;
	public $brand_story_content = null;
	public $showcase_pic_urls = null;
	public $exhibition_pic_urls = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'brand_id'
			),
			2 => array(
			'var' => 'cn_name'
			),
			3 => array(
			'var' => 'en_name'
			),
			4 => array(
			'var' => 'logo_url'
			),
			5 => array(
			'var' => 'brand_url'
			),
			6 => array(
			'var' => 'bg_path'
			),
			7 => array(
			'var' => 'bg_path_mobile'
			),
			8 => array(
			'var' => 'store_url_path'
			),
			9 => array(
			'var' => 'description'
			),
			10 => array(
			'var' => 'brand_index'
			),
			11 => array(
			'var' => 'brand_story_content'
			),
			12 => array(
			'var' => 'showcase_pic_urls'
			),
			13 => array(
			'var' => 'exhibition_pic_urls'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['cn_name'])){
				
				$this->cn_name = $vals['cn_name'];
			}
			
			
			if (isset($vals['en_name'])){
				
				$this->en_name = $vals['en_name'];
			}
			
			
			if (isset($vals['logo_url'])){
				
				$this->logo_url = $vals['logo_url'];
			}
			
			
			if (isset($vals['brand_url'])){
				
				$this->brand_url = $vals['brand_url'];
			}
			
			
			if (isset($vals['bg_path'])){
				
				$this->bg_path = $vals['bg_path'];
			}
			
			
			if (isset($vals['bg_path_mobile'])){
				
				$this->bg_path_mobile = $vals['bg_path_mobile'];
			}
			
			
			if (isset($vals['store_url_path'])){
				
				$this->store_url_path = $vals['store_url_path'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['brand_index'])){
				
				$this->brand_index = $vals['brand_index'];
			}
			
			
			if (isset($vals['brand_story_content'])){
				
				$this->brand_story_content = $vals['brand_story_content'];
			}
			
			
			if (isset($vals['showcase_pic_urls'])){
				
				$this->showcase_pic_urls = $vals['showcase_pic_urls'];
			}
			
			
			if (isset($vals['exhibition_pic_urls'])){
				
				$this->exhibition_pic_urls = $vals['exhibition_pic_urls'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandStory';
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
			
			
			
			
			if ("cn_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cn_name);
				
			}
			
			
			
			
			if ("en_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->en_name);
				
			}
			
			
			
			
			if ("logo_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logo_url);
				
			}
			
			
			
			
			if ("brand_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_url);
				
			}
			
			
			
			
			if ("bg_path" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bg_path);
				
			}
			
			
			
			
			if ("bg_path_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bg_path_mobile);
				
			}
			
			
			
			
			if ("store_url_path" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_url_path);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("brand_index" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_index);
				
			}
			
			
			
			
			if ("brand_story_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_story_content);
				
			}
			
			
			
			
			if ("showcase_pic_urls" == $schemeField){
				
				$needSkip = false;
				
				$this->showcase_pic_urls = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->showcase_pic_urls[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("exhibition_pic_urls" == $schemeField){
				
				$needSkip = false;
				
				$this->exhibition_pic_urls = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->exhibition_pic_urls[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeString($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cn_name !== null) {
			
			$xfer += $output->writeFieldBegin('cn_name');
			$xfer += $output->writeString($this->cn_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->en_name !== null) {
			
			$xfer += $output->writeFieldBegin('en_name');
			$xfer += $output->writeString($this->en_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logo_url !== null) {
			
			$xfer += $output->writeFieldBegin('logo_url');
			$xfer += $output->writeString($this->logo_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_url !== null) {
			
			$xfer += $output->writeFieldBegin('brand_url');
			$xfer += $output->writeString($this->brand_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bg_path !== null) {
			
			$xfer += $output->writeFieldBegin('bg_path');
			$xfer += $output->writeString($this->bg_path);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bg_path_mobile !== null) {
			
			$xfer += $output->writeFieldBegin('bg_path_mobile');
			$xfer += $output->writeString($this->bg_path_mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_url_path !== null) {
			
			$xfer += $output->writeFieldBegin('store_url_path');
			$xfer += $output->writeString($this->store_url_path);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_index !== null) {
			
			$xfer += $output->writeFieldBegin('brand_index');
			$xfer += $output->writeString($this->brand_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_story_content !== null) {
			
			$xfer += $output->writeFieldBegin('brand_story_content');
			$xfer += $output->writeString($this->brand_story_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showcase_pic_urls !== null) {
			
			$xfer += $output->writeFieldBegin('showcase_pic_urls');
			
			if (!is_array($this->showcase_pic_urls)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->showcase_pic_urls as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exhibition_pic_urls !== null) {
			
			$xfer += $output->writeFieldBegin('exhibition_pic_urls');
			
			if (!is_array($this->exhibition_pic_urls)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->exhibition_pic_urls as $iter0){
				
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