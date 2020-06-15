<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class SpuDetail {
	
	static $_TSPEC;
	public $title = null;
	public $short_video = null;
	public $long_video = null;
	public $sub_title = null;
	public $category_id = null;
	public $brand_cn_name = null;
	public $brand_en_name = null;
	public $length = null;
	public $width = null;
	public $height = null;
	public $weight = null;
	public $gross_weight = null;
	public $flat_spec_props = null;
	public $item_properties = null;
	public $size_table = null;
	public $app_measurement_diagram = null;
	public $pc_measurement_diagram = null;
	public $name = null;
	public $sn = null;
	public $brand_id = null;
	public $area_output = null;
	public $is_fragile = null;
	public $is_large = null;
	public $is_precious = null;
	public $accessory_info = null;
	public $sale_service = null;
	public $tax_rate = null;
	public $washing_instruct = null;
	public $top_category_id = null;
	public $sub_category_id = null;
	public $is_embargo = null;
	public $create_time = null;
	public $make_up_flag = null;
	public $attr_spec_props = null;
	public $item_images = null;
	public $square_images = null;
	public $market_price = null;
	public $season = null;
	public $gender = null;
	public $tax_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'title'
			),
			2 => array(
			'var' => 'short_video'
			),
			3 => array(
			'var' => 'long_video'
			),
			4 => array(
			'var' => 'sub_title'
			),
			5 => array(
			'var' => 'category_id'
			),
			6 => array(
			'var' => 'brand_cn_name'
			),
			7 => array(
			'var' => 'brand_en_name'
			),
			8 => array(
			'var' => 'length'
			),
			9 => array(
			'var' => 'width'
			),
			10 => array(
			'var' => 'height'
			),
			11 => array(
			'var' => 'weight'
			),
			12 => array(
			'var' => 'gross_weight'
			),
			13 => array(
			'var' => 'flat_spec_props'
			),
			14 => array(
			'var' => 'item_properties'
			),
			15 => array(
			'var' => 'size_table'
			),
			16 => array(
			'var' => 'app_measurement_diagram'
			),
			17 => array(
			'var' => 'pc_measurement_diagram'
			),
			18 => array(
			'var' => 'name'
			),
			19 => array(
			'var' => 'sn'
			),
			20 => array(
			'var' => 'brand_id'
			),
			21 => array(
			'var' => 'area_output'
			),
			22 => array(
			'var' => 'is_fragile'
			),
			23 => array(
			'var' => 'is_large'
			),
			24 => array(
			'var' => 'is_precious'
			),
			25 => array(
			'var' => 'accessory_info'
			),
			26 => array(
			'var' => 'sale_service'
			),
			27 => array(
			'var' => 'tax_rate'
			),
			28 => array(
			'var' => 'washing_instruct'
			),
			29 => array(
			'var' => 'top_category_id'
			),
			30 => array(
			'var' => 'sub_category_id'
			),
			31 => array(
			'var' => 'is_embargo'
			),
			32 => array(
			'var' => 'create_time'
			),
			33 => array(
			'var' => 'make_up_flag'
			),
			34 => array(
			'var' => 'attr_spec_props'
			),
			35 => array(
			'var' => 'item_images'
			),
			36 => array(
			'var' => 'square_images'
			),
			37 => array(
			'var' => 'market_price'
			),
			38 => array(
			'var' => 'season'
			),
			39 => array(
			'var' => 'gender'
			),
			40 => array(
			'var' => 'tax_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['short_video'])){
				
				$this->short_video = $vals['short_video'];
			}
			
			
			if (isset($vals['long_video'])){
				
				$this->long_video = $vals['long_video'];
			}
			
			
			if (isset($vals['sub_title'])){
				
				$this->sub_title = $vals['sub_title'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['brand_cn_name'])){
				
				$this->brand_cn_name = $vals['brand_cn_name'];
			}
			
			
			if (isset($vals['brand_en_name'])){
				
				$this->brand_en_name = $vals['brand_en_name'];
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
			
			
			if (isset($vals['flat_spec_props'])){
				
				$this->flat_spec_props = $vals['flat_spec_props'];
			}
			
			
			if (isset($vals['item_properties'])){
				
				$this->item_properties = $vals['item_properties'];
			}
			
			
			if (isset($vals['size_table'])){
				
				$this->size_table = $vals['size_table'];
			}
			
			
			if (isset($vals['app_measurement_diagram'])){
				
				$this->app_measurement_diagram = $vals['app_measurement_diagram'];
			}
			
			
			if (isset($vals['pc_measurement_diagram'])){
				
				$this->pc_measurement_diagram = $vals['pc_measurement_diagram'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['area_output'])){
				
				$this->area_output = $vals['area_output'];
			}
			
			
			if (isset($vals['is_fragile'])){
				
				$this->is_fragile = $vals['is_fragile'];
			}
			
			
			if (isset($vals['is_large'])){
				
				$this->is_large = $vals['is_large'];
			}
			
			
			if (isset($vals['is_precious'])){
				
				$this->is_precious = $vals['is_precious'];
			}
			
			
			if (isset($vals['accessory_info'])){
				
				$this->accessory_info = $vals['accessory_info'];
			}
			
			
			if (isset($vals['sale_service'])){
				
				$this->sale_service = $vals['sale_service'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['washing_instruct'])){
				
				$this->washing_instruct = $vals['washing_instruct'];
			}
			
			
			if (isset($vals['top_category_id'])){
				
				$this->top_category_id = $vals['top_category_id'];
			}
			
			
			if (isset($vals['sub_category_id'])){
				
				$this->sub_category_id = $vals['sub_category_id'];
			}
			
			
			if (isset($vals['is_embargo'])){
				
				$this->is_embargo = $vals['is_embargo'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['make_up_flag'])){
				
				$this->make_up_flag = $vals['make_up_flag'];
			}
			
			
			if (isset($vals['attr_spec_props'])){
				
				$this->attr_spec_props = $vals['attr_spec_props'];
			}
			
			
			if (isset($vals['item_images'])){
				
				$this->item_images = $vals['item_images'];
			}
			
			
			if (isset($vals['square_images'])){
				
				$this->square_images = $vals['square_images'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['season'])){
				
				$this->season = $vals['season'];
			}
			
			
			if (isset($vals['gender'])){
				
				$this->gender = $vals['gender'];
			}
			
			
			if (isset($vals['tax_code'])){
				
				$this->tax_code = $vals['tax_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SpuDetail';
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
			
			
			
			
			if ("short_video" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->short_video);
				
			}
			
			
			
			
			if ("long_video" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->long_video);
				
			}
			
			
			
			
			if ("sub_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_title);
				
			}
			
			
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
			}
			
			
			
			
			if ("brand_cn_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_cn_name);
				
			}
			
			
			
			
			if ("brand_en_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_en_name);
				
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
			
			
			
			
			if ("flat_spec_props" == $schemeField){
				
				$needSkip = false;
				
				$this->flat_spec_props = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->flat_spec_props[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("item_properties" == $schemeField){
				
				$needSkip = false;
				
				$this->item_properties = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\cup\api\product\ItemProperty();
						$elem1->read($input);
						
						$this->item_properties[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("size_table" == $schemeField){
				
				$needSkip = false;
				
				$this->size_table = new \com\vip\vop\cup\api\product\SizeTable();
				$this->size_table->read($input);
				
			}
			
			
			
			
			if ("app_measurement_diagram" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->app_measurement_diagram);
				
			}
			
			
			
			
			if ("pc_measurement_diagram" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc_measurement_diagram);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brand_id); 
				
			}
			
			
			
			
			if ("area_output" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_output);
				
			}
			
			
			
			
			if ("is_fragile" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_fragile);
				
			}
			
			
			
			
			if ("is_large" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_large);
				
			}
			
			
			
			
			if ("is_precious" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_precious);
				
			}
			
			
			
			
			if ("accessory_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accessory_info);
				
			}
			
			
			
			
			if ("sale_service" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_service);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->tax_rate);
				
			}
			
			
			
			
			if ("washing_instruct" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->washing_instruct);
				
			}
			
			
			
			
			if ("top_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->top_category_id); 
				
			}
			
			
			
			
			if ("sub_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sub_category_id); 
				
			}
			
			
			
			
			if ("is_embargo" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_embargo);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("make_up_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->make_up_flag); 
				
			}
			
			
			
			
			if ("attr_spec_props" == $schemeField){
				
				$needSkip = false;
				
				$this->attr_spec_props = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\vop\cup\api\product\Attribute();
						$elem2->read($input);
						
						$this->attr_spec_props[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("item_images" == $schemeField){
				
				$needSkip = false;
				
				$this->item_images = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\vop\cup\api\product\ItemImage();
						$elem3->read($input);
						
						$this->item_images[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("square_images" == $schemeField){
				
				$needSkip = false;
				
				$this->square_images = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\vop\cup\api\product\ItemImage();
						$elem4->read($input);
						
						$this->square_images[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->market_price);
				
			}
			
			
			
			
			if ("season" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->season);
				
			}
			
			
			
			
			if ("gender" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gender);
				
			}
			
			
			
			
			if ("tax_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_code);
				
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
		
		
		if($this->short_video !== null) {
			
			$xfer += $output->writeFieldBegin('short_video');
			$xfer += $output->writeString($this->short_video);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->long_video !== null) {
			
			$xfer += $output->writeFieldBegin('long_video');
			$xfer += $output->writeString($this->long_video);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_title !== null) {
			
			$xfer += $output->writeFieldBegin('sub_title');
			$xfer += $output->writeString($this->sub_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category_id !== null) {
			
			$xfer += $output->writeFieldBegin('category_id');
			$xfer += $output->writeI32($this->category_id);
			
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
		
		
		if($this->flat_spec_props !== null) {
			
			$xfer += $output->writeFieldBegin('flat_spec_props');
			
			if (!is_array($this->flat_spec_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->flat_spec_props as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_properties !== null) {
			
			$xfer += $output->writeFieldBegin('item_properties');
			
			if (!is_array($this->item_properties)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->item_properties as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_table !== null) {
			
			$xfer += $output->writeFieldBegin('size_table');
			
			if (!is_object($this->size_table)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->size_table->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->app_measurement_diagram !== null) {
			
			$xfer += $output->writeFieldBegin('app_measurement_diagram');
			$xfer += $output->writeString($this->app_measurement_diagram);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pc_measurement_diagram !== null) {
			
			$xfer += $output->writeFieldBegin('pc_measurement_diagram');
			$xfer += $output->writeString($this->pc_measurement_diagram);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI32($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_output !== null) {
			
			$xfer += $output->writeFieldBegin('area_output');
			$xfer += $output->writeString($this->area_output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_fragile !== null) {
			
			$xfer += $output->writeFieldBegin('is_fragile');
			$xfer += $output->writeBool($this->is_fragile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_large !== null) {
			
			$xfer += $output->writeFieldBegin('is_large');
			$xfer += $output->writeBool($this->is_large);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_precious !== null) {
			
			$xfer += $output->writeFieldBegin('is_precious');
			$xfer += $output->writeBool($this->is_precious);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accessory_info !== null) {
			
			$xfer += $output->writeFieldBegin('accessory_info');
			$xfer += $output->writeString($this->accessory_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_service !== null) {
			
			$xfer += $output->writeFieldBegin('sale_service');
			$xfer += $output->writeString($this->sale_service);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('tax_rate');
			$xfer += $output->writeDouble($this->tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->washing_instruct !== null) {
			
			$xfer += $output->writeFieldBegin('washing_instruct');
			$xfer += $output->writeString($this->washing_instruct);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->top_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('top_category_id');
			$xfer += $output->writeI32($this->top_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('sub_category_id');
			$xfer += $output->writeI32($this->sub_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_embargo !== null) {
			
			$xfer += $output->writeFieldBegin('is_embargo');
			$xfer += $output->writeBool($this->is_embargo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->make_up_flag !== null) {
			
			$xfer += $output->writeFieldBegin('make_up_flag');
			$xfer += $output->writeI32($this->make_up_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attr_spec_props !== null) {
			
			$xfer += $output->writeFieldBegin('attr_spec_props');
			
			if (!is_array($this->attr_spec_props)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attr_spec_props as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_images !== null) {
			
			$xfer += $output->writeFieldBegin('item_images');
			
			if (!is_array($this->item_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->item_images as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->square_images !== null) {
			
			$xfer += $output->writeFieldBegin('square_images');
			
			if (!is_array($this->square_images)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->square_images as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeDouble($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->season !== null) {
			
			$xfer += $output->writeFieldBegin('season');
			$xfer += $output->writeString($this->season);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gender !== null) {
			
			$xfer += $output->writeFieldBegin('gender');
			$xfer += $output->writeString($this->gender);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tax_code !== null) {
			
			$xfer += $output->writeFieldBegin('tax_code');
			$xfer += $output->writeString($this->tax_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>