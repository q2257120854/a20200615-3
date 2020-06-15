<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class ProductDetail {
	
	static $_TSPEC;
	public $spu_id = null;
	public $outer_spu_id = null;
	public $skus = null;
	public $title = null;
	public $sub_title = null;
	public $prod_props = null;
	public $custom_prod_props = null;
	public $images = null;
	public $area_output = null;
	public $brand_id = null;
	public $brand_name = null;
	public $third_category_id = null;
	public $sale_service = null;
	public $accessories = null;
	public $length = null;
	public $width = null;
	public $high = null;
	public $weight = null;
	public $audit_status = null;
	public $size_table_id = null;
	public $gross_weight = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			2 => array(
			'var' => 'outer_spu_id'
			),
			3 => array(
			'var' => 'skus'
			),
			4 => array(
			'var' => 'title'
			),
			5 => array(
			'var' => 'sub_title'
			),
			6 => array(
			'var' => 'prod_props'
			),
			7 => array(
			'var' => 'custom_prod_props'
			),
			8 => array(
			'var' => 'images'
			),
			9 => array(
			'var' => 'area_output'
			),
			10 => array(
			'var' => 'brand_id'
			),
			11 => array(
			'var' => 'brand_name'
			),
			12 => array(
			'var' => 'third_category_id'
			),
			13 => array(
			'var' => 'sale_service'
			),
			14 => array(
			'var' => 'accessories'
			),
			15 => array(
			'var' => 'length'
			),
			16 => array(
			'var' => 'width'
			),
			17 => array(
			'var' => 'high'
			),
			18 => array(
			'var' => 'weight'
			),
			19 => array(
			'var' => 'audit_status'
			),
			20 => array(
			'var' => 'size_table_id'
			),
			21 => array(
			'var' => 'gross_weight'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
			if (isset($vals['outer_spu_id'])){
				
				$this->outer_spu_id = $vals['outer_spu_id'];
			}
			
			
			if (isset($vals['skus'])){
				
				$this->skus = $vals['skus'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
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
			
			
			if (isset($vals['images'])){
				
				$this->images = $vals['images'];
			}
			
			
			if (isset($vals['area_output'])){
				
				$this->area_output = $vals['area_output'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['third_category_id'])){
				
				$this->third_category_id = $vals['third_category_id'];
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
			
			
			if (isset($vals['high'])){
				
				$this->high = $vals['high'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['gross_weight'])){
				
				$this->gross_weight = $vals['gross_weight'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu_id);
				
			}
			
			
			
			
			if ("outer_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_spu_id);
				
			}
			
			
			
			
			if ("skus" == $schemeField){
				
				$needSkip = false;
				
				$this->skus = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\product\SkuDetail();
						$elem0->read($input);
						
						$this->skus[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("sub_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_title);
				
			}
			
			
			
			
			if ("prod_props" == $schemeField){
				
				$needSkip = false;
				
				$this->prod_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->prod_props[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("custom_prod_props" == $schemeField){
				
				$needSkip = false;
				
				$this->custom_prod_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key2 = '';
						$input->readString($key2);
						
						$val2 = '';
						$input->readString($val2);
						
						$this->custom_prod_props[$key2] = $val2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("images" == $schemeField){
				
				$needSkip = false;
				
				$this->images = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \vipapis\marketplace\product\Image();
						$elem3->read($input);
						
						$this->images[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("area_output" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_output);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brand_id); 
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("third_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->third_category_id); 
				
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
				$input->readDouble($this->length);
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->width);
				
			}
			
			
			
			
			if ("high" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->high);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_status);
				
			}
			
			
			
			
			if ("size_table_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->size_table_id); 
				
			}
			
			
			
			
			if ("gross_weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->gross_weight); 
				
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
		
		$xfer += $output->writeFieldBegin('spu_id');
		$xfer += $output->writeString($this->spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->outer_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_spu_id');
			$xfer += $output->writeString($this->outer_spu_id);
			
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
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
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
			
			$output->writeMapBegin();
			foreach ($this->prod_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
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
		
		
		if($this->area_output !== null) {
			
			$xfer += $output->writeFieldBegin('area_output');
			$xfer += $output->writeString($this->area_output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI32($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('third_category_id');
			$xfer += $output->writeI32($this->third_category_id);
			
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
			$xfer += $output->writeDouble($this->length);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->width !== null) {
			
			$xfer += $output->writeFieldBegin('width');
			$xfer += $output->writeDouble($this->width);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->high !== null) {
			
			$xfer += $output->writeFieldBegin('high');
			$xfer += $output->writeDouble($this->high);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeString($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_table_id');
			$xfer += $output->writeI64($this->size_table_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gross_weight !== null) {
			
			$xfer += $output->writeFieldBegin('gross_weight');
			$xfer += $output->writeI32($this->gross_weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>