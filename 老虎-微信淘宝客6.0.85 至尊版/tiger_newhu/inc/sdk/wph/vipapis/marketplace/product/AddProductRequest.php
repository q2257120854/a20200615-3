<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class AddProductRequest {
	
	static $_TSPEC;
	public $outer_spu_id = null;
	public $title = null;
	public $third_category_id = null;
	public $brand_id = null;
	public $images = null;
	public $sub_title = null;
	public $prod_props = null;
	public $custom_prod_props = null;
	public $area_output = null;
	public $sale_service = null;
	public $accessories = null;
	public $length = null;
	public $width = null;
	public $height = null;
	public $weight = null;
	public $gross_weight = null;
	public $skus = null;
	public $color_images = null;
	public $zone_sale_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'outer_spu_id'
			),
			2 => array(
			'var' => 'title'
			),
			3 => array(
			'var' => 'third_category_id'
			),
			4 => array(
			'var' => 'brand_id'
			),
			5 => array(
			'var' => 'images'
			),
			6 => array(
			'var' => 'sub_title'
			),
			7 => array(
			'var' => 'prod_props'
			),
			8 => array(
			'var' => 'custom_prod_props'
			),
			9 => array(
			'var' => 'area_output'
			),
			10 => array(
			'var' => 'sale_service'
			),
			11 => array(
			'var' => 'accessories'
			),
			12 => array(
			'var' => 'length'
			),
			13 => array(
			'var' => 'width'
			),
			14 => array(
			'var' => 'height'
			),
			15 => array(
			'var' => 'weight'
			),
			16 => array(
			'var' => 'gross_weight'
			),
			17 => array(
			'var' => 'skus'
			),
			18 => array(
			'var' => 'color_images'
			),
			19 => array(
			'var' => 'zone_sale_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['outer_spu_id'])){
				
				$this->outer_spu_id = $vals['outer_spu_id'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['third_category_id'])){
				
				$this->third_category_id = $vals['third_category_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['images'])){
				
				$this->images = $vals['images'];
			}
			
			
			if (isset($vals['sub_title'])){
				
				$this->sub_title = $vals['sub_title'];
			}
			
			
			if (isset($vals['prod_props'])){
				
				$this->prod_props = $vals['prod_props'];
			}
			
			
			if (isset($vals['custom_prod_props'])){
				
				$this->custom_prod_props = $vals['custom_prod_props'];
			}
			
			
			if (isset($vals['area_output'])){
				
				$this->area_output = $vals['area_output'];
			}
			
			
			if (isset($vals['sale_service'])){
				
				$this->sale_service = $vals['sale_service'];
			}
			
			
			if (isset($vals['accessories'])){
				
				$this->accessories = $vals['accessories'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['width'])){
				
				$this->width = $vals['width'];
			}
			
			
			if (isset($vals['height'])){
				
				$this->height = $vals['height'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['gross_weight'])){
				
				$this->gross_weight = $vals['gross_weight'];
			}
			
			
			if (isset($vals['skus'])){
				
				$this->skus = $vals['skus'];
			}
			
			
			if (isset($vals['color_images'])){
				
				$this->color_images = $vals['color_images'];
			}
			
			
			if (isset($vals['zone_sale_status'])){
				
				$this->zone_sale_status = $vals['zone_sale_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddProductRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("outer_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_spu_id);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("third_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->third_category_id); 
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brand_id); 
				
			}
			
			
			
			
			if ("images" == $schemeField){
				
				$needSkip = false;
				
				$this->images = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\product\Image();
						$elem1->read($input);
						
						$this->images[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sub_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_title);
				
			}
			
			
			
			
			if ("prod_props" == $schemeField){
				
				$needSkip = false;
				
				$this->prod_props = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\marketplace\product\SimpleProperty();
						$elem2->read($input);
						
						$this->prod_props[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("custom_prod_props" == $schemeField){
				
				$needSkip = false;
				
				$this->custom_prod_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key3 = '';
						$input->readString($key3);
						
						$val3 = '';
						$input->readString($val3);
						
						$this->custom_prod_props[$key3] = $val3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("area_output" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_output);
				
			}
			
			
			
			
			if ("sale_service" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_service);
				
			}
			
			
			
			
			if ("accessories" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessories);
				
			}
			
			
			
			
			if ("length" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->length); 
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->width); 
				
			}
			
			
			
			
			if ("height" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->height); 
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weight); 
				
			}
			
			
			
			
			if ("gross_weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->gross_weight); 
				
			}
			
			
			
			
			if ("skus" == $schemeField){
				
				$needSkip = false;
				
				$this->skus = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \vipapis\marketplace\product\AddSkuItem();
						$elem4->read($input);
						
						$this->skus[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("color_images" == $schemeField){
				
				$needSkip = false;
				
				$this->color_images = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \vipapis\marketplace\product\ColorImage();
						$elem5->read($input);
						
						$this->color_images[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("zone_sale_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->zone_sale_status); 
				
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
		
		$xfer += $output->writeFieldBegin('outer_spu_id');
		$xfer += $output->writeString($this->outer_spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('title');
		$xfer += $output->writeString($this->title);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('third_category_id');
		$xfer += $output->writeI32($this->third_category_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->images !== null) {
			
			$xfer += $output->writeFieldBegin('images');
			
			if (!is_array($this->images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->images as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_title !== null) {
			
			$xfer += $output->writeFieldBegin('sub_title');
			$xfer += $output->writeString($this->sub_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prod_props !== null) {
			
			$xfer += $output->writeFieldBegin('prod_props');
			
			if (!is_array($this->prod_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->prod_props as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custom_prod_props !== null) {
			
			$xfer += $output->writeFieldBegin('custom_prod_props');
			
			if (!is_array($this->custom_prod_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->custom_prod_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_output !== null) {
			
			$xfer += $output->writeFieldBegin('area_output');
			$xfer += $output->writeString($this->area_output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_service !== null) {
			
			$xfer += $output->writeFieldBegin('sale_service');
			$xfer += $output->writeString($this->sale_service);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessories !== null) {
			
			$xfer += $output->writeFieldBegin('accessories');
			$xfer += $output->writeString($this->accessories);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->length !== null) {
			
			$xfer += $output->writeFieldBegin('length');
			$xfer += $output->writeI32($this->length);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->width !== null) {
			
			$xfer += $output->writeFieldBegin('width');
			$xfer += $output->writeI32($this->width);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->height !== null) {
			
			$xfer += $output->writeFieldBegin('height');
			$xfer += $output->writeI32($this->height);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI32($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gross_weight !== null) {
			
			$xfer += $output->writeFieldBegin('gross_weight');
			$xfer += $output->writeI32($this->gross_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skus !== null) {
			
			$xfer += $output->writeFieldBegin('skus');
			
			if (!is_array($this->skus)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skus as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color_images !== null) {
			
			$xfer += $output->writeFieldBegin('color_images');
			
			if (!is_array($this->color_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->color_images as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zone_sale_status !== null) {
			
			$xfer += $output->writeFieldBegin('zone_sale_status');
			$xfer += $output->writeI32($this->zone_sale_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>