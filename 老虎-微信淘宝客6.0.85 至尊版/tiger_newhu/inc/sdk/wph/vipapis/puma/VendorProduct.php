<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class VendorProduct {
	
	static $_TSPEC;
	public $title = null;
	public $image_url = null;
	public $product_type = null;
	public $brand_id = null;
	public $brand_name = null;
	public $brand_cn_name = null;
	public $brand_en_name = null;
	public $third_level_category_id = null;
	public $third_level_category_name = null;
	public $square_images = null;
	public $rectangle_images = null;
	public $detailed_Images = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'title'
			),
			2 => array(
			'var' => 'image_url'
			),
			3 => array(
			'var' => 'product_type'
			),
			4 => array(
			'var' => 'brand_id'
			),
			5 => array(
			'var' => 'brand_name'
			),
			6 => array(
			'var' => 'brand_cn_name'
			),
			7 => array(
			'var' => 'brand_en_name'
			),
			8 => array(
			'var' => 'third_level_category_id'
			),
			9 => array(
			'var' => 'third_level_category_name'
			),
			10 => array(
			'var' => 'square_images'
			),
			11 => array(
			'var' => 'rectangle_images'
			),
			12 => array(
			'var' => 'detailed_Images'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
			if (isset($vals['product_type'])){
				
				$this->product_type = $vals['product_type'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['brand_cn_name'])){
				
				$this->brand_cn_name = $vals['brand_cn_name'];
			}
			
			
			if (isset($vals['brand_en_name'])){
				
				$this->brand_en_name = $vals['brand_en_name'];
			}
			
			
			if (isset($vals['third_level_category_id'])){
				
				$this->third_level_category_id = $vals['third_level_category_id'];
			}
			
			
			if (isset($vals['third_level_category_name'])){
				
				$this->third_level_category_name = $vals['third_level_category_name'];
			}
			
			
			if (isset($vals['square_images'])){
				
				$this->square_images = $vals['square_images'];
			}
			
			
			if (isset($vals['rectangle_images'])){
				
				$this->rectangle_images = $vals['rectangle_images'];
			}
			
			
			if (isset($vals['detailed_Images'])){
				
				$this->detailed_Images = $vals['detailed_Images'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_url);
				
			}
			
			
			
			
			if ("product_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->product_type); 
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("brand_cn_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_cn_name);
				
			}
			
			
			
			
			if ("brand_en_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_en_name);
				
			}
			
			
			
			
			if ("third_level_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->third_level_category_id); 
				
			}
			
			
			
			
			if ("third_level_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_level_category_name);
				
			}
			
			
			
			
			if ("square_images" == $schemeField){
				
				$needSkip = false;
				
				$this->square_images = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = 0;
						$input->readI32($key0); 
						
						$val0 = '';
						$input->readString($val0);
						
						$this->square_images[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("rectangle_images" == $schemeField){
				
				$needSkip = false;
				
				$this->rectangle_images = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = 0;
						$input->readI32($key1); 
						
						$val1 = '';
						$input->readString($val1);
						
						$this->rectangle_images[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("detailed_Images" == $schemeField){
				
				$needSkip = false;
				
				$this->detailed_Images = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key2 = 0;
						$input->readI32($key2); 
						
						$val2 = '';
						$input->readString($val2);
						
						$this->detailed_Images[$key2] = $val2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_url !== null) {
			
			$xfer += $output->writeFieldBegin('image_url');
			$xfer += $output->writeString($this->image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_type !== null) {
			
			$xfer += $output->writeFieldBegin('product_type');
			$xfer += $output->writeI32($this->product_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeString($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_cn_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_cn_name');
			$xfer += $output->writeString($this->brand_cn_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_en_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_en_name');
			$xfer += $output->writeString($this->brand_en_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_level_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('third_level_category_id');
			$xfer += $output->writeI32($this->third_level_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_level_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('third_level_category_name');
			$xfer += $output->writeString($this->third_level_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->square_images !== null) {
			
			$xfer += $output->writeFieldBegin('square_images');
			
			if (!is_array($this->square_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->square_images as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rectangle_images !== null) {
			
			$xfer += $output->writeFieldBegin('rectangle_images');
			
			if (!is_array($this->rectangle_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->rectangle_images as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailed_Images !== null) {
			
			$xfer += $output->writeFieldBegin('detailed_Images');
			
			if (!is_array($this->detailed_Images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->detailed_Images as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>