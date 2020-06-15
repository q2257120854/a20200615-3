<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;
interface ImprovedVendorProductServiceIf{
	
	
	public function createBaseProducts( $vendor_id, $vendor_products);
	
	public function createProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products);
	
	public function editProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products);
	
	public function healthCheck();
	
	public function uploadVendorCategory( $vendor_id, $vendor_category_tree_name, $vendor_categories);
	
	public function uploadVendorFullScaleProductImage( $vendor_id, $brand_id, $sn, $product_image_map);
	
}

class _ImprovedVendorProductServiceClient extends \Osp\Base\OspStub implements \vipapis\product\ImprovedVendorProductServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.product.ImprovedVendorProductService", "1.0.0");
	}
	
	
	public function createBaseProducts( $vendor_id, $vendor_products){
		
		$this->send_createBaseProducts( $vendor_id, $vendor_products);
		return $this->recv_createBaseProducts();
	}
	
	public function send_createBaseProducts( $vendor_id, $vendor_products){
		
		$this->initInvocation("createBaseProducts");
		$args = new \vipapis\product\ImprovedVendorProductService_createBaseProducts_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_products = $vendor_products;
		
		$this->send_base($args);
	}
	
	public function recv_createBaseProducts(){
		
		$result = new \vipapis\product\ImprovedVendorProductService_createBaseProducts_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products){
		
		$this->send_createProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products);
		return $this->recv_createProductWithProdInfoMapping();
	}
	
	public function send_createProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products){
		
		$this->initInvocation("createProductWithProdInfoMapping");
		$args = new \vipapis\product\ImprovedVendorProductService_createProductWithProdInfoMapping_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_category_tree_id = $vendor_category_tree_id;
		
		$args->vendor_products = $vendor_products;
		
		$this->send_base($args);
	}
	
	public function recv_createProductWithProdInfoMapping(){
		
		$result = new \vipapis\product\ImprovedVendorProductService_createProductWithProdInfoMapping_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products){
		
		$this->send_editProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products);
		return $this->recv_editProductWithProdInfoMapping();
	}
	
	public function send_editProductWithProdInfoMapping( $vendor_id, $vendor_category_tree_id, $vendor_products){
		
		$this->initInvocation("editProductWithProdInfoMapping");
		$args = new \vipapis\product\ImprovedVendorProductService_editProductWithProdInfoMapping_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_category_tree_id = $vendor_category_tree_id;
		
		$args->vendor_products = $vendor_products;
		
		$this->send_base($args);
	}
	
	public function recv_editProductWithProdInfoMapping(){
		
		$result = new \vipapis\product\ImprovedVendorProductService_editProductWithProdInfoMapping_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\product\ImprovedVendorProductService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\product\ImprovedVendorProductService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadVendorCategory( $vendor_id, $vendor_category_tree_name, $vendor_categories){
		
		$this->send_uploadVendorCategory( $vendor_id, $vendor_category_tree_name, $vendor_categories);
		return $this->recv_uploadVendorCategory();
	}
	
	public function send_uploadVendorCategory( $vendor_id, $vendor_category_tree_name, $vendor_categories){
		
		$this->initInvocation("uploadVendorCategory");
		$args = new \vipapis\product\ImprovedVendorProductService_uploadVendorCategory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_category_tree_name = $vendor_category_tree_name;
		
		$args->vendor_categories = $vendor_categories;
		
		$this->send_base($args);
	}
	
	public function recv_uploadVendorCategory(){
		
		$result = new \vipapis\product\ImprovedVendorProductService_uploadVendorCategory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadVendorFullScaleProductImage( $vendor_id, $brand_id, $sn, $product_image_map){
		
		$this->send_uploadVendorFullScaleProductImage( $vendor_id, $brand_id, $sn, $product_image_map);
		return $this->recv_uploadVendorFullScaleProductImage();
	}
	
	public function send_uploadVendorFullScaleProductImage( $vendor_id, $brand_id, $sn, $product_image_map){
		
		$this->initInvocation("uploadVendorFullScaleProductImage");
		$args = new \vipapis\product\ImprovedVendorProductService_uploadVendorFullScaleProductImage_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->product_image_map = $product_image_map;
		
		$this->send_base($args);
	}
	
	public function recv_uploadVendorFullScaleProductImage(){
		
		$result = new \vipapis\product\ImprovedVendorProductService_uploadVendorFullScaleProductImage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ImprovedVendorProductService_createBaseProducts_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_products = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_products'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_products'])){
				
				$this->vendor_products = $vals['vendor_products'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_products = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\product\CreateBaseProductItem();
					$elem0->read($input);
					
					$this->vendor_products[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_products');
		
		if (!is_array($this->vendor_products)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_products as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_createProductWithProdInfoMapping_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_category_tree_id = null;
	public $vendor_products = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_category_tree_id'
			),
			3 => array(
			'var' => 'vendor_products'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_category_tree_id'])){
				
				$this->vendor_category_tree_id = $vals['vendor_category_tree_id'];
			}
			
			
			if (isset($vals['vendor_products'])){
				
				$this->vendor_products = $vals['vendor_products'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_category_tree_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_products = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\product\CreateVendorProductItem();
					$elem1->read($input);
					
					$this->vendor_products[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_category_tree_id');
		$xfer += $output->writeI32($this->vendor_category_tree_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_products');
		
		if (!is_array($this->vendor_products)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_products as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_editProductWithProdInfoMapping_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_category_tree_id = null;
	public $vendor_products = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_category_tree_id'
			),
			3 => array(
			'var' => 'vendor_products'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_category_tree_id'])){
				
				$this->vendor_category_tree_id = $vals['vendor_category_tree_id'];
			}
			
			
			if (isset($vals['vendor_products'])){
				
				$this->vendor_products = $vals['vendor_products'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_category_tree_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_products = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\product\EditVendorProductItem();
					$elem1->read($input);
					
					$this->vendor_products[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_category_tree_id');
		$xfer += $output->writeI32($this->vendor_category_tree_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_products');
		
		if (!is_array($this->vendor_products)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_products as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_uploadVendorCategory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_category_tree_name = null;
	public $vendor_categories = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_category_tree_name'
			),
			3 => array(
			'var' => 'vendor_categories'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_category_tree_name'])){
				
				$this->vendor_category_tree_name = $vals['vendor_category_tree_name'];
			}
			
			
			if (isset($vals['vendor_categories'])){
				
				$this->vendor_categories = $vals['vendor_categories'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_category_tree_name);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_categories = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\product\VendorCategory();
					$elem1->read($input);
					
					$this->vendor_categories[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_category_tree_name');
		$xfer += $output->writeString($this->vendor_category_tree_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_categories');
		
		if (!is_array($this->vendor_categories)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_categories as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_uploadVendorFullScaleProductImage_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $product_image_map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'product_image_map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['product_image_map'])){
				
				$this->product_image_map = $vals['product_image_map'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->product_image_map = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key1 = 0;
					$input->readI32($key1); 
					
					$val1 = null;
					
					$val1 = new \vipapis\product\UploadImageInfo();
					$val1->read($input);
					
					$this->product_image_map[$key1] = $val1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_image_map');
		
		if (!is_array($this->product_image_map)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->product_image_map as $kiter0 => $viter0){
			
			$xfer += $output->writeI32($kiter0);
			
			
			if (!is_object($viter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $viter0->write($output);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_createBaseProducts_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \vipapis\product\CreateBaseProductResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_createProductWithProdInfoMapping_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \vipapis\product\ImprovedVendorProductResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_editProductWithProdInfoMapping_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \vipapis\product\ImprovedVendorProductResponse();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_uploadVendorCategory_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI32($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ImprovedVendorProductService_uploadVendorFullScaleProductImage_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI32($key0); 
					
					$val0 = null;
					
					$val0 = new \vipapis\product\UploadImageResult();
					$val0->read($input);
					
					$this->success[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
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