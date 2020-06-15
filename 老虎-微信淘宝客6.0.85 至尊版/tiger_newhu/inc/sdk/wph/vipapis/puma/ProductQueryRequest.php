<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class ProductQueryRequest {
	
	static $_TSPEC;
	public $pagination = null;
	public $product_ids = null;
	public $brand_sns = null;
	public $third_level_category_ids = null;
	public $query_types = null;
	public $is_on_sale = null;
	public $product_name = null;
	public $price_ranges = null;
	public $product_tags = null;
	public $sort_attres = null;
	public $discount_ranges = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pagination'
			),
			2 => array(
			'var' => 'product_ids'
			),
			3 => array(
			'var' => 'brand_sns'
			),
			4 => array(
			'var' => 'third_level_category_ids'
			),
			5 => array(
			'var' => 'query_types'
			),
			6 => array(
			'var' => 'is_on_sale'
			),
			7 => array(
			'var' => 'product_name'
			),
			8 => array(
			'var' => 'price_ranges'
			),
			9 => array(
			'var' => 'product_tags'
			),
			10 => array(
			'var' => 'sort_attres'
			),
			11 => array(
			'var' => 'discount_ranges'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
			if (isset($vals['product_ids'])){
				
				$this->product_ids = $vals['product_ids'];
			}
			
			
			if (isset($vals['brand_sns'])){
				
				$this->brand_sns = $vals['brand_sns'];
			}
			
			
			if (isset($vals['third_level_category_ids'])){
				
				$this->third_level_category_ids = $vals['third_level_category_ids'];
			}
			
			
			if (isset($vals['query_types'])){
				
				$this->query_types = $vals['query_types'];
			}
			
			
			if (isset($vals['is_on_sale'])){
				
				$this->is_on_sale = $vals['is_on_sale'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['price_ranges'])){
				
				$this->price_ranges = $vals['price_ranges'];
			}
			
			
			if (isset($vals['product_tags'])){
				
				$this->product_tags = $vals['product_tags'];
			}
			
			
			if (isset($vals['sort_attres'])){
				
				$this->sort_attres = $vals['sort_attres'];
			}
			
			
			if (isset($vals['discount_ranges'])){
				
				$this->discount_ranges = $vals['discount_ranges'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductQueryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pagination" == $schemeField){
				
				$needSkip = false;
				
				$this->pagination = new \vipapis\puma\Pagination();
				$this->pagination->read($input);
				
			}
			
			
			
			
			if ("product_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->product_ids = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->product_ids[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("brand_sns" == $schemeField){
				
				$needSkip = false;
				
				$this->brand_sns = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->brand_sns[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("third_level_category_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->third_level_category_ids = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->third_level_category_ids[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("query_types" == $schemeField){
				
				$needSkip = false;
				
				$this->query_types = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->query_types[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("is_on_sale" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_on_sale); 
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("price_ranges" == $schemeField){
				
				$needSkip = false;
				
				$this->price_ranges = array();
				$_size4 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \vipapis\puma\NumberRange();
						$elem4->read($input);
						
						$this->price_ranges[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("product_tags" == $schemeField){
				
				$needSkip = false;
				
				$this->product_tags = array();
				$_size5 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readI32($elem5); 
						
						$this->product_tags[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("sort_attres" == $schemeField){
				
				$needSkip = false;
				
				$this->sort_attres = array();
				$_size6 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						
						$elem6 = new \vipapis\puma\SortAttr();
						$elem6->read($input);
						
						$this->sort_attres[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("discount_ranges" == $schemeField){
				
				$needSkip = false;
				
				$this->discount_ranges = array();
				$_size7 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem7 = null;
						
						$elem7 = new \vipapis\puma\NumberRange();
						$elem7->read($input);
						
						$this->discount_ranges[$_size7++] = $elem7;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		$xfer += $output->writeFieldBegin('pagination');
		
		if (!is_object($this->pagination)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pagination->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->product_ids !== null) {
			
			$xfer += $output->writeFieldBegin('product_ids');
			
			if (!is_array($this->product_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->product_ids as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_sns !== null) {
			
			$xfer += $output->writeFieldBegin('brand_sns');
			
			if (!is_array($this->brand_sns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->brand_sns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->third_level_category_ids !== null) {
			
			$xfer += $output->writeFieldBegin('third_level_category_ids');
			
			if (!is_array($this->third_level_category_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->third_level_category_ids as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('query_types');
		
		if (!is_array($this->query_types)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->query_types as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_on_sale !== null) {
			
			$xfer += $output->writeFieldBegin('is_on_sale');
			$xfer += $output->writeI32($this->is_on_sale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price_ranges !== null) {
			
			$xfer += $output->writeFieldBegin('price_ranges');
			
			if (!is_array($this->price_ranges)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->price_ranges as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_tags !== null) {
			
			$xfer += $output->writeFieldBegin('product_tags');
			
			if (!is_array($this->product_tags)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->product_tags as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort_attres !== null) {
			
			$xfer += $output->writeFieldBegin('sort_attres');
			
			if (!is_array($this->sort_attres)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->sort_attres as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount_ranges !== null) {
			
			$xfer += $output->writeFieldBegin('discount_ranges');
			
			if (!is_array($this->discount_ranges)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->discount_ranges as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>