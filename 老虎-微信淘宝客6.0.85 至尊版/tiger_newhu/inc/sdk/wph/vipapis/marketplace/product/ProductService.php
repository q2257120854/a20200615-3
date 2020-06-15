<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;
interface ProductServiceIf{
	
	
	public function addProduct(\vipapis\marketplace\product\AddProductRequest $request);
	
	public function appendSkus(\vipapis\marketplace\product\AppendSkusRequest $request);
	
	public function autoBindProductSizeTable(\vipapis\marketplace\product\AutoBindProductSizeTableRequest $autoBindProductSizeTableRequest);
	
	public function bindProductColorImage(\vipapis\marketplace\product\ProductColorImageBindModel $bindModel);
	
	public function bindProductImage(\vipapis\marketplace\product\ProductImageBindModel $bindModel);
	
	public function deleteSku( $sku_id);
	
	public function deleteSpu( $spu_id);
	
	public function editProduct(\vipapis\marketplace\product\EditProductRequest $request);
	
	public function getProductById( $spu_id);
	
	public function getProductPreviewUrl( $spu_id, $sku_id);
	
	public function getProducts(\vipapis\marketplace\product\GetProductRequest $request);
	
	public function getSkuById( $sku_id);
	
	public function healthCheck();
	
	public function offShelf(\vipapis\marketplace\product\OffShelfProduct $offShelfProduct);
	
	public function onShelf(\vipapis\marketplace\product\OnShelfProduct $onShelfProduct);
	
	public function submitProducts( $spu_ids);
	
	public function unbindProductImage(\vipapis\marketplace\product\UnbindProductImageRequest $unbindProductImageRequest);
	
	public function uploadImage( $file_name, $is_override, $img_content);
	
}

class _ProductServiceClient extends \Osp\Base\OspStub implements \vipapis\marketplace\product\ProductServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.marketplace.product.ProductService", "1.0.0");
	}
	
	
	public function addProduct(\vipapis\marketplace\product\AddProductRequest $request){
		
		$this->send_addProduct( $request);
		return $this->recv_addProduct();
	}
	
	public function send_addProduct(\vipapis\marketplace\product\AddProductRequest $request){
		
		$this->initInvocation("addProduct");
		$args = new \vipapis\marketplace\product\ProductService_addProduct_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addProduct(){
		
		$result = new \vipapis\marketplace\product\ProductService_addProduct_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function appendSkus(\vipapis\marketplace\product\AppendSkusRequest $request){
		
		$this->send_appendSkus( $request);
		return $this->recv_appendSkus();
	}
	
	public function send_appendSkus(\vipapis\marketplace\product\AppendSkusRequest $request){
		
		$this->initInvocation("appendSkus");
		$args = new \vipapis\marketplace\product\ProductService_appendSkus_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_appendSkus(){
		
		$result = new \vipapis\marketplace\product\ProductService_appendSkus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function autoBindProductSizeTable(\vipapis\marketplace\product\AutoBindProductSizeTableRequest $autoBindProductSizeTableRequest){
		
		$this->send_autoBindProductSizeTable( $autoBindProductSizeTableRequest);
		return $this->recv_autoBindProductSizeTable();
	}
	
	public function send_autoBindProductSizeTable(\vipapis\marketplace\product\AutoBindProductSizeTableRequest $autoBindProductSizeTableRequest){
		
		$this->initInvocation("autoBindProductSizeTable");
		$args = new \vipapis\marketplace\product\ProductService_autoBindProductSizeTable_args();
		
		$args->autoBindProductSizeTableRequest = $autoBindProductSizeTableRequest;
		
		$this->send_base($args);
	}
	
	public function recv_autoBindProductSizeTable(){
		
		$result = new \vipapis\marketplace\product\ProductService_autoBindProductSizeTable_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function bindProductColorImage(\vipapis\marketplace\product\ProductColorImageBindModel $bindModel){
		
		$this->send_bindProductColorImage( $bindModel);
		return $this->recv_bindProductColorImage();
	}
	
	public function send_bindProductColorImage(\vipapis\marketplace\product\ProductColorImageBindModel $bindModel){
		
		$this->initInvocation("bindProductColorImage");
		$args = new \vipapis\marketplace\product\ProductService_bindProductColorImage_args();
		
		$args->bindModel = $bindModel;
		
		$this->send_base($args);
	}
	
	public function recv_bindProductColorImage(){
		
		$result = new \vipapis\marketplace\product\ProductService_bindProductColorImage_result();
		$this->receive_base($result);
		
	}
	
	
	public function bindProductImage(\vipapis\marketplace\product\ProductImageBindModel $bindModel){
		
		$this->send_bindProductImage( $bindModel);
		return $this->recv_bindProductImage();
	}
	
	public function send_bindProductImage(\vipapis\marketplace\product\ProductImageBindModel $bindModel){
		
		$this->initInvocation("bindProductImage");
		$args = new \vipapis\marketplace\product\ProductService_bindProductImage_args();
		
		$args->bindModel = $bindModel;
		
		$this->send_base($args);
	}
	
	public function recv_bindProductImage(){
		
		$result = new \vipapis\marketplace\product\ProductService_bindProductImage_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteSku( $sku_id){
		
		$this->send_deleteSku( $sku_id);
		return $this->recv_deleteSku();
	}
	
	public function send_deleteSku( $sku_id){
		
		$this->initInvocation("deleteSku");
		$args = new \vipapis\marketplace\product\ProductService_deleteSku_args();
		
		$args->sku_id = $sku_id;
		
		$this->send_base($args);
	}
	
	public function recv_deleteSku(){
		
		$result = new \vipapis\marketplace\product\ProductService_deleteSku_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteSpu( $spu_id){
		
		$this->send_deleteSpu( $spu_id);
		return $this->recv_deleteSpu();
	}
	
	public function send_deleteSpu( $spu_id){
		
		$this->initInvocation("deleteSpu");
		$args = new \vipapis\marketplace\product\ProductService_deleteSpu_args();
		
		$args->spu_id = $spu_id;
		
		$this->send_base($args);
	}
	
	public function recv_deleteSpu(){
		
		$result = new \vipapis\marketplace\product\ProductService_deleteSpu_result();
		$this->receive_base($result);
		
	}
	
	
	public function editProduct(\vipapis\marketplace\product\EditProductRequest $request){
		
		$this->send_editProduct( $request);
		return $this->recv_editProduct();
	}
	
	public function send_editProduct(\vipapis\marketplace\product\EditProductRequest $request){
		
		$this->initInvocation("editProduct");
		$args = new \vipapis\marketplace\product\ProductService_editProduct_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_editProduct(){
		
		$result = new \vipapis\marketplace\product\ProductService_editProduct_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductById( $spu_id){
		
		$this->send_getProductById( $spu_id);
		return $this->recv_getProductById();
	}
	
	public function send_getProductById( $spu_id){
		
		$this->initInvocation("getProductById");
		$args = new \vipapis\marketplace\product\ProductService_getProductById_args();
		
		$args->spu_id = $spu_id;
		
		$this->send_base($args);
	}
	
	public function recv_getProductById(){
		
		$result = new \vipapis\marketplace\product\ProductService_getProductById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductPreviewUrl( $spu_id, $sku_id){
		
		$this->send_getProductPreviewUrl( $spu_id, $sku_id);
		return $this->recv_getProductPreviewUrl();
	}
	
	public function send_getProductPreviewUrl( $spu_id, $sku_id){
		
		$this->initInvocation("getProductPreviewUrl");
		$args = new \vipapis\marketplace\product\ProductService_getProductPreviewUrl_args();
		
		$args->spu_id = $spu_id;
		
		$args->sku_id = $sku_id;
		
		$this->send_base($args);
	}
	
	public function recv_getProductPreviewUrl(){
		
		$result = new \vipapis\marketplace\product\ProductService_getProductPreviewUrl_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProducts(\vipapis\marketplace\product\GetProductRequest $request){
		
		$this->send_getProducts( $request);
		return $this->recv_getProducts();
	}
	
	public function send_getProducts(\vipapis\marketplace\product\GetProductRequest $request){
		
		$this->initInvocation("getProducts");
		$args = new \vipapis\marketplace\product\ProductService_getProducts_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getProducts(){
		
		$result = new \vipapis\marketplace\product\ProductService_getProducts_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSkuById( $sku_id){
		
		$this->send_getSkuById( $sku_id);
		return $this->recv_getSkuById();
	}
	
	public function send_getSkuById( $sku_id){
		
		$this->initInvocation("getSkuById");
		$args = new \vipapis\marketplace\product\ProductService_getSkuById_args();
		
		$args->sku_id = $sku_id;
		
		$this->send_base($args);
	}
	
	public function recv_getSkuById(){
		
		$result = new \vipapis\marketplace\product\ProductService_getSkuById_result();
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
		$args = new \vipapis\marketplace\product\ProductService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\marketplace\product\ProductService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offShelf(\vipapis\marketplace\product\OffShelfProduct $offShelfProduct){
		
		$this->send_offShelf( $offShelfProduct);
		return $this->recv_offShelf();
	}
	
	public function send_offShelf(\vipapis\marketplace\product\OffShelfProduct $offShelfProduct){
		
		$this->initInvocation("offShelf");
		$args = new \vipapis\marketplace\product\ProductService_offShelf_args();
		
		$args->offShelfProduct = $offShelfProduct;
		
		$this->send_base($args);
	}
	
	public function recv_offShelf(){
		
		$result = new \vipapis\marketplace\product\ProductService_offShelf_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function onShelf(\vipapis\marketplace\product\OnShelfProduct $onShelfProduct){
		
		$this->send_onShelf( $onShelfProduct);
		return $this->recv_onShelf();
	}
	
	public function send_onShelf(\vipapis\marketplace\product\OnShelfProduct $onShelfProduct){
		
		$this->initInvocation("onShelf");
		$args = new \vipapis\marketplace\product\ProductService_onShelf_args();
		
		$args->onShelfProduct = $onShelfProduct;
		
		$this->send_base($args);
	}
	
	public function recv_onShelf(){
		
		$result = new \vipapis\marketplace\product\ProductService_onShelf_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function submitProducts( $spu_ids){
		
		$this->send_submitProducts( $spu_ids);
		return $this->recv_submitProducts();
	}
	
	public function send_submitProducts( $spu_ids){
		
		$this->initInvocation("submitProducts");
		$args = new \vipapis\marketplace\product\ProductService_submitProducts_args();
		
		$args->spu_ids = $spu_ids;
		
		$this->send_base($args);
	}
	
	public function recv_submitProducts(){
		
		$result = new \vipapis\marketplace\product\ProductService_submitProducts_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function unbindProductImage(\vipapis\marketplace\product\UnbindProductImageRequest $unbindProductImageRequest){
		
		$this->send_unbindProductImage( $unbindProductImageRequest);
		return $this->recv_unbindProductImage();
	}
	
	public function send_unbindProductImage(\vipapis\marketplace\product\UnbindProductImageRequest $unbindProductImageRequest){
		
		$this->initInvocation("unbindProductImage");
		$args = new \vipapis\marketplace\product\ProductService_unbindProductImage_args();
		
		$args->unbindProductImageRequest = $unbindProductImageRequest;
		
		$this->send_base($args);
	}
	
	public function recv_unbindProductImage(){
		
		$result = new \vipapis\marketplace\product\ProductService_unbindProductImage_result();
		$this->receive_base($result);
		
	}
	
	
	public function uploadImage( $file_name, $is_override, $img_content){
		
		$this->send_uploadImage( $file_name, $is_override, $img_content);
		return $this->recv_uploadImage();
	}
	
	public function send_uploadImage( $file_name, $is_override, $img_content){
		
		$this->initInvocation("uploadImage");
		$args = new \vipapis\marketplace\product\ProductService_uploadImage_args();
		
		$args->file_name = $file_name;
		
		$args->is_override = $is_override;
		
		$args->img_content = $img_content;
		
		$this->send_base($args);
	}
	
	public function recv_uploadImage(){
		
		$result = new \vipapis\marketplace\product\ProductService_uploadImage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProductService_addProduct_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\marketplace\product\AddProductRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_appendSkus_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\marketplace\product\AppendSkusRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_autoBindProductSizeTable_args {
	
	static $_TSPEC;
	public $autoBindProductSizeTableRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'autoBindProductSizeTableRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['autoBindProductSizeTableRequest'])){
				
				$this->autoBindProductSizeTableRequest = $vals['autoBindProductSizeTableRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->autoBindProductSizeTableRequest = new \vipapis\marketplace\product\AutoBindProductSizeTableRequest();
			$this->autoBindProductSizeTableRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('autoBindProductSizeTableRequest');
		
		if (!is_object($this->autoBindProductSizeTableRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->autoBindProductSizeTableRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_bindProductColorImage_args {
	
	static $_TSPEC;
	public $bindModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bindModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bindModel'])){
				
				$this->bindModel = $vals['bindModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->bindModel = new \vipapis\marketplace\product\ProductColorImageBindModel();
			$this->bindModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('bindModel');
		
		if (!is_object($this->bindModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->bindModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_bindProductImage_args {
	
	static $_TSPEC;
	public $bindModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bindModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bindModel'])){
				
				$this->bindModel = $vals['bindModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->bindModel = new \vipapis\marketplace\product\ProductImageBindModel();
			$this->bindModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('bindModel');
		
		if (!is_object($this->bindModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->bindModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_deleteSku_args {
	
	static $_TSPEC;
	public $sku_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sku_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sku_id');
		$xfer += $output->writeString($this->sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_deleteSpu_args {
	
	static $_TSPEC;
	public $spu_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->spu_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('spu_id');
		$xfer += $output->writeString($this->spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_editProduct_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\marketplace\product\EditProductRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_getProductById_args {
	
	static $_TSPEC;
	public $spu_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->spu_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('spu_id');
		$xfer += $output->writeString($this->spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_getProductPreviewUrl_args {
	
	static $_TSPEC;
	public $spu_id = null;
	public $sku_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			2 => array(
			'var' => 'sku_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->spu_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sku_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('spu_id');
		$xfer += $output->writeString($this->spu_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeString($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_getProducts_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\marketplace\product\GetProductRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_getSkuById_args {
	
	static $_TSPEC;
	public $sku_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sku_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sku_id');
		$xfer += $output->writeString($this->sku_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_healthCheck_args {
	
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




class ProductService_offShelf_args {
	
	static $_TSPEC;
	public $offShelfProduct = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'offShelfProduct'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['offShelfProduct'])){
				
				$this->offShelfProduct = $vals['offShelfProduct'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->offShelfProduct = new \vipapis\marketplace\product\OffShelfProduct();
			$this->offShelfProduct->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('offShelfProduct');
		
		if (!is_object($this->offShelfProduct)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->offShelfProduct->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_onShelf_args {
	
	static $_TSPEC;
	public $onShelfProduct = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'onShelfProduct'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['onShelfProduct'])){
				
				$this->onShelfProduct = $vals['onShelfProduct'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->onShelfProduct = new \vipapis\marketplace\product\OnShelfProduct();
			$this->onShelfProduct->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('onShelfProduct');
		
		if (!is_object($this->onShelfProduct)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->onShelfProduct->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_submitProducts_args {
	
	static $_TSPEC;
	public $spu_ids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_ids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_ids'])){
				
				$this->spu_ids = $vals['spu_ids'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->spu_ids = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->spu_ids[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('spu_ids');
		
		if (!is_array($this->spu_ids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->spu_ids as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_unbindProductImage_args {
	
	static $_TSPEC;
	public $unbindProductImageRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'unbindProductImageRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['unbindProductImageRequest'])){
				
				$this->unbindProductImageRequest = $vals['unbindProductImageRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->unbindProductImageRequest = new \vipapis\marketplace\product\UnbindProductImageRequest();
			$this->unbindProductImageRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('unbindProductImageRequest');
		
		if (!is_object($this->unbindProductImageRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->unbindProductImageRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_uploadImage_args {
	
	static $_TSPEC;
	public $file_name = null;
	public $is_override = null;
	public $img_content = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'file_name'
			),
			2 => array(
			'var' => 'is_override'
			),
			3 => array(
			'var' => 'img_content'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['file_name'])){
				
				$this->file_name = $vals['file_name'];
			}
			
			
			if (isset($vals['is_override'])){
				
				$this->is_override = $vals['is_override'];
			}
			
			
			if (isset($vals['img_content'])){
				
				$this->img_content = $vals['img_content'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->file_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->is_override);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->img_content);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('file_name');
		$xfer += $output->writeString($this->file_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_override');
		$xfer += $output->writeString($this->is_override);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_content');
		$xfer += $output->writeString($this->img_content);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_addProduct_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\AddProductResponse();
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




class ProductService_appendSkus_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\AppendSkusResponse();
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




class ProductService_autoBindProductSizeTable_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\AutoBindProductSizeTableResponse();
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




class ProductService_bindProductColorImage_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ProductService_bindProductImage_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ProductService_deleteSku_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ProductService_deleteSpu_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ProductService_editProduct_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\EditProductResponse();
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




class ProductService_getProductById_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\ProductDetail();
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




class ProductService_getProductPreviewUrl_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductService_getProducts_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\GetProductsResponse();
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




class ProductService_getSkuById_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\SkuDetail();
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




class ProductService_healthCheck_result {
	
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




class ProductService_offShelf_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\OffShelfResponse();
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




class ProductService_onShelf_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\OnShelfResponse();
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




class ProductService_submitProducts_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\SubmitProductsResponse();
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




class ProductService_unbindProductImage_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class ProductService_uploadImage_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\product\ImageInfo();
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




?>