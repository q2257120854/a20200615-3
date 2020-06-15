<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;
interface ProductSchemaServiceIf{
	
	
	public function createProductBySchema(\com\vip\isv\schema\CreateProductBySchemaRequest $createProductSchemaRequest);
	
	public function getProductSchema(\com\vip\isv\schema\GetProductSchemaRequest $getProductSchemaRequest);
	
	public function healthCheck();
	
	public function updateProductBySchema(\com\vip\isv\schema\UpdateProductBySchemaRequest $updateProductSchemaRequest);
	
}

class _ProductSchemaServiceClient extends \Osp\Base\OspStub implements \vipapis\product\ProductSchemaServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.product.ProductSchemaService", "1.0.0");
	}
	
	
	public function createProductBySchema(\com\vip\isv\schema\CreateProductBySchemaRequest $createProductSchemaRequest){
		
		$this->send_createProductBySchema( $createProductSchemaRequest);
		return $this->recv_createProductBySchema();
	}
	
	public function send_createProductBySchema(\com\vip\isv\schema\CreateProductBySchemaRequest $createProductSchemaRequest){
		
		$this->initInvocation("createProductBySchema");
		$args = new \vipapis\product\ProductSchemaService_createProductBySchema_args();
		
		$args->createProductSchemaRequest = $createProductSchemaRequest;
		
		$this->send_base($args);
	}
	
	public function recv_createProductBySchema(){
		
		$result = new \vipapis\product\ProductSchemaService_createProductBySchema_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductSchema(\com\vip\isv\schema\GetProductSchemaRequest $getProductSchemaRequest){
		
		$this->send_getProductSchema( $getProductSchemaRequest);
		return $this->recv_getProductSchema();
	}
	
	public function send_getProductSchema(\com\vip\isv\schema\GetProductSchemaRequest $getProductSchemaRequest){
		
		$this->initInvocation("getProductSchema");
		$args = new \vipapis\product\ProductSchemaService_getProductSchema_args();
		
		$args->getProductSchemaRequest = $getProductSchemaRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getProductSchema(){
		
		$result = new \vipapis\product\ProductSchemaService_getProductSchema_result();
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
		$args = new \vipapis\product\ProductSchemaService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\product\ProductSchemaService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateProductBySchema(\com\vip\isv\schema\UpdateProductBySchemaRequest $updateProductSchemaRequest){
		
		$this->send_updateProductBySchema( $updateProductSchemaRequest);
		return $this->recv_updateProductBySchema();
	}
	
	public function send_updateProductBySchema(\com\vip\isv\schema\UpdateProductBySchemaRequest $updateProductSchemaRequest){
		
		$this->initInvocation("updateProductBySchema");
		$args = new \vipapis\product\ProductSchemaService_updateProductBySchema_args();
		
		$args->updateProductSchemaRequest = $updateProductSchemaRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductBySchema(){
		
		$result = new \vipapis\product\ProductSchemaService_updateProductBySchema_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProductSchemaService_createProductBySchema_args {
	
	static $_TSPEC;
	public $createProductSchemaRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createProductSchemaRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createProductSchemaRequest'])){
				
				$this->createProductSchemaRequest = $vals['createProductSchemaRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->createProductSchemaRequest = new \com\vip\isv\schema\CreateProductBySchemaRequest();
			$this->createProductSchemaRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('createProductSchemaRequest');
		
		if (!is_object($this->createProductSchemaRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->createProductSchemaRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSchemaService_getProductSchema_args {
	
	static $_TSPEC;
	public $getProductSchemaRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getProductSchemaRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getProductSchemaRequest'])){
				
				$this->getProductSchemaRequest = $vals['getProductSchemaRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getProductSchemaRequest = new \com\vip\isv\schema\GetProductSchemaRequest();
			$this->getProductSchemaRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('getProductSchemaRequest');
		
		if (!is_object($this->getProductSchemaRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->getProductSchemaRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSchemaService_healthCheck_args {
	
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




class ProductSchemaService_updateProductBySchema_args {
	
	static $_TSPEC;
	public $updateProductSchemaRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateProductSchemaRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateProductSchemaRequest'])){
				
				$this->updateProductSchemaRequest = $vals['updateProductSchemaRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateProductSchemaRequest = new \com\vip\isv\schema\UpdateProductBySchemaRequest();
			$this->updateProductSchemaRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('updateProductSchemaRequest');
		
		if (!is_object($this->updateProductSchemaRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->updateProductSchemaRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSchemaService_createProductBySchema_result {
	
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
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\isv\schema\ProductResponse();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSchemaService_getProductSchema_result {
	
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




class ProductSchemaService_healthCheck_result {
	
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




class ProductSchemaService_updateProductBySchema_result {
	
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
			
			
			$this->success = new \com\vip\isv\schema\ProductResponse();
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