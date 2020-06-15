<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class Product {
	
	static $_TSPEC;
	public $spu_id = null;
	public $outer_spu_id = null;
	public $title = null;
	public $brand_id = null;
	public $shelf_status = null;
	public $audit_status = null;
	public $first_category_name = null;
	public $second_category_name = null;
	public $third_category_name = null;
	public $image_url = null;
	public $sku_ids = null;
	public $zone_sale_status = null;
	
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
			'var' => 'title'
			),
			4 => array(
			'var' => 'brand_id'
			),
			5 => array(
			'var' => 'shelf_status'
			),
			6 => array(
			'var' => 'audit_status'
			),
			7 => array(
			'var' => 'first_category_name'
			),
			8 => array(
			'var' => 'second_category_name'
			),
			9 => array(
			'var' => 'third_category_name'
			),
			10 => array(
			'var' => 'image_url'
			),
			11 => array(
			'var' => 'sku_ids'
			),
			12 => array(
			'var' => 'zone_sale_status'
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
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['shelf_status'])){
				
				$this->shelf_status = $vals['shelf_status'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
			if (isset($vals['first_category_name'])){
				
				$this->first_category_name = $vals['first_category_name'];
			}
			
			
			if (isset($vals['second_category_name'])){
				
				$this->second_category_name = $vals['second_category_name'];
			}
			
			
			if (isset($vals['third_category_name'])){
				
				$this->third_category_name = $vals['third_category_name'];
			}
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
			if (isset($vals['sku_ids'])){
				
				$this->sku_ids = $vals['sku_ids'];
			}
			
			
			if (isset($vals['zone_sale_status'])){
				
				$this->zone_sale_status = $vals['zone_sale_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Product';
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
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("shelf_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shelf_status);
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_status);
				
			}
			
			
			
			
			if ("first_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->first_category_name);
				
			}
			
			
			
			
			if ("second_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->second_category_name);
				
			}
			
			
			
			
			if ("third_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_category_name);
				
			}
			
			
			
			
			if ("image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_url);
				
			}
			
			
			
			
			if ("sku_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->sku_ids = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->sku_ids[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('spu_id');
		$xfer += $output->writeString($this->spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->outer_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_spu_id');
			$xfer += $output->writeString($this->outer_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeString($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shelf_status !== null) {
			
			$xfer += $output->writeFieldBegin('shelf_status');
			$xfer += $output->writeString($this->shelf_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeString($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->first_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('first_category_name');
			$xfer += $output->writeString($this->first_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->second_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('second_category_name');
			$xfer += $output->writeString($this->second_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_category_name !== null) {
			
			$xfer += $output->writeFieldBegin('third_category_name');
			$xfer += $output->writeString($this->third_category_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_url !== null) {
			
			$xfer += $output->writeFieldBegin('image_url');
			$xfer += $output->writeString($this->image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku_ids !== null) {
			
			$xfer += $output->writeFieldBegin('sku_ids');
			
			if (!is_array($this->sku_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sku_ids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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