<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\productsale;
interface ProductSaleServiceIf{
	
	
	public function exportExcel(\com\vip\vipapis\productsale\service\ProductSaleInfosParam $productSaleInfosParam);
	
	public function getProductSaleInfoLogs( $productSaleInfoId);
	
	public function getProductSaleInfos(\com\vip\vipapis\productsale\service\ProductSaleParam $productSaleParam);
	
	public function getProductSaleInfosByIds( $ids);
	
	public function getProductSaleInfosByParam(\com\vip\vipapis\productsale\service\ProductSaleInfosParam $productSaleInfosParam);
	
	public function healthCheck();
	
	public function updateProductSaleInfos( $productSaleInfoModel);
	
}

class _ProductSaleServiceClient extends \Osp\Base\OspStub implements \vipapis\productsale\ProductSaleServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.productsale.ProductSaleService", "1.0.0");
	}
	
	
	public function exportExcel(\com\vip\vipapis\productsale\service\ProductSaleInfosParam $productSaleInfosParam){
		
		$this->send_exportExcel( $productSaleInfosParam);
		return $this->recv_exportExcel();
	}
	
	public function send_exportExcel(\com\vip\vipapis\productsale\service\ProductSaleInfosParam $productSaleInfosParam){
		
		$this->initInvocation("exportExcel");
		$args = new \vipapis\productsale\ProductSaleService_exportExcel_args();
		
		$args->productSaleInfosParam = $productSaleInfosParam;
		
		$this->send_base($args);
	}
	
	public function recv_exportExcel(){
		
		$result = new \vipapis\productsale\ProductSaleService_exportExcel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductSaleInfoLogs( $productSaleInfoId){
		
		$this->send_getProductSaleInfoLogs( $productSaleInfoId);
		return $this->recv_getProductSaleInfoLogs();
	}
	
	public function send_getProductSaleInfoLogs( $productSaleInfoId){
		
		$this->initInvocation("getProductSaleInfoLogs");
		$args = new \vipapis\productsale\ProductSaleService_getProductSaleInfoLogs_args();
		
		$args->productSaleInfoId = $productSaleInfoId;
		
		$this->send_base($args);
	}
	
	public function recv_getProductSaleInfoLogs(){
		
		$result = new \vipapis\productsale\ProductSaleService_getProductSaleInfoLogs_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductSaleInfos(\com\vip\vipapis\productsale\service\ProductSaleParam $productSaleParam){
		
		$this->send_getProductSaleInfos( $productSaleParam);
		return $this->recv_getProductSaleInfos();
	}
	
	public function send_getProductSaleInfos(\com\vip\vipapis\productsale\service\ProductSaleParam $productSaleParam){
		
		$this->initInvocation("getProductSaleInfos");
		$args = new \vipapis\productsale\ProductSaleService_getProductSaleInfos_args();
		
		$args->productSaleParam = $productSaleParam;
		
		$this->send_base($args);
	}
	
	public function recv_getProductSaleInfos(){
		
		$result = new \vipapis\productsale\ProductSaleService_getProductSaleInfos_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductSaleInfosByIds( $ids){
		
		$this->send_getProductSaleInfosByIds( $ids);
		return $this->recv_getProductSaleInfosByIds();
	}
	
	public function send_getProductSaleInfosByIds( $ids){
		
		$this->initInvocation("getProductSaleInfosByIds");
		$args = new \vipapis\productsale\ProductSaleService_getProductSaleInfosByIds_args();
		
		$args->ids = $ids;
		
		$this->send_base($args);
	}
	
	public function recv_getProductSaleInfosByIds(){
		
		$result = new \vipapis\productsale\ProductSaleService_getProductSaleInfosByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductSaleInfosByParam(\com\vip\vipapis\productsale\service\ProductSaleInfosParam $productSaleInfosParam){
		
		$this->send_getProductSaleInfosByParam( $productSaleInfosParam);
		return $this->recv_getProductSaleInfosByParam();
	}
	
	public function send_getProductSaleInfosByParam(\com\vip\vipapis\productsale\service\ProductSaleInfosParam $productSaleInfosParam){
		
		$this->initInvocation("getProductSaleInfosByParam");
		$args = new \vipapis\productsale\ProductSaleService_getProductSaleInfosByParam_args();
		
		$args->productSaleInfosParam = $productSaleInfosParam;
		
		$this->send_base($args);
	}
	
	public function recv_getProductSaleInfosByParam(){
		
		$result = new \vipapis\productsale\ProductSaleService_getProductSaleInfosByParam_result();
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
		$args = new \vipapis\productsale\ProductSaleService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\productsale\ProductSaleService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateProductSaleInfos( $productSaleInfoModel){
		
		$this->send_updateProductSaleInfos( $productSaleInfoModel);
		return $this->recv_updateProductSaleInfos();
	}
	
	public function send_updateProductSaleInfos( $productSaleInfoModel){
		
		$this->initInvocation("updateProductSaleInfos");
		$args = new \vipapis\productsale\ProductSaleService_updateProductSaleInfos_args();
		
		$args->productSaleInfoModel = $productSaleInfoModel;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSaleInfos(){
		
		$result = new \vipapis\productsale\ProductSaleService_updateProductSaleInfos_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProductSaleService_exportExcel_args {
	
	static $_TSPEC;
	public $productSaleInfosParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productSaleInfosParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productSaleInfosParam'])){
				
				$this->productSaleInfosParam = $vals['productSaleInfosParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->productSaleInfosParam = new \com\vip\vipapis\productsale\service\ProductSaleInfosParam();
			$this->productSaleInfosParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->productSaleInfosParam !== null) {
			
			$xfer += $output->writeFieldBegin('productSaleInfosParam');
			
			if (!is_object($this->productSaleInfosParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->productSaleInfosParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSaleService_getProductSaleInfoLogs_args {
	
	static $_TSPEC;
	public $productSaleInfoId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productSaleInfoId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productSaleInfoId'])){
				
				$this->productSaleInfoId = $vals['productSaleInfoId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->productSaleInfoId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->productSaleInfoId !== null) {
			
			$xfer += $output->writeFieldBegin('productSaleInfoId');
			$xfer += $output->writeI64($this->productSaleInfoId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSaleService_getProductSaleInfos_args {
	
	static $_TSPEC;
	public $productSaleParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productSaleParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productSaleParam'])){
				
				$this->productSaleParam = $vals['productSaleParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->productSaleParam = new \com\vip\vipapis\productsale\service\ProductSaleParam();
			$this->productSaleParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->productSaleParam !== null) {
			
			$xfer += $output->writeFieldBegin('productSaleParam');
			
			if (!is_object($this->productSaleParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->productSaleParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSaleService_getProductSaleInfosByIds_args {
	
	static $_TSPEC;
	public $ids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ids'])){
				
				$this->ids = $vals['ids'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->ids = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->ids[$_size0++] = $elem0;
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
		
		if($this->ids !== null) {
			
			$xfer += $output->writeFieldBegin('ids');
			
			if (!is_array($this->ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ids as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSaleService_getProductSaleInfosByParam_args {
	
	static $_TSPEC;
	public $productSaleInfosParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productSaleInfosParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productSaleInfosParam'])){
				
				$this->productSaleInfosParam = $vals['productSaleInfosParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->productSaleInfosParam = new \com\vip\vipapis\productsale\service\ProductSaleInfosParam();
			$this->productSaleInfosParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->productSaleInfosParam !== null) {
			
			$xfer += $output->writeFieldBegin('productSaleInfosParam');
			
			if (!is_object($this->productSaleInfosParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->productSaleInfosParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductSaleService_healthCheck_args {
	
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




class ProductSaleService_updateProductSaleInfos_args {
	
	static $_TSPEC;
	public $productSaleInfoModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'productSaleInfoModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['productSaleInfoModel'])){
				
				$this->productSaleInfoModel = $vals['productSaleInfoModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->productSaleInfoModel = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vipapis\productsale\service\ProductSaleInfoModel();
					$elem0->read($input);
					
					$this->productSaleInfoModel[$_size0++] = $elem0;
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
		
		if($this->productSaleInfoModel !== null) {
			
			$xfer += $output->writeFieldBegin('productSaleInfoModel');
			
			if (!is_array($this->productSaleInfoModel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->productSaleInfoModel as $iter0){
				
				
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




class ProductSaleService_exportExcel_result {
	
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




class ProductSaleService_getProductSaleInfoLogs_result {
	
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
					
					$elem0 = new \com\vip\vipapis\productsale\service\ProductSaleInfoLog();
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




class ProductSaleService_getProductSaleInfos_result {
	
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
			
			
			$this->success = new \com\vip\vipapis\productsale\service\ProductSaleInfosResponse();
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




class ProductSaleService_getProductSaleInfosByIds_result {
	
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
					
					$elem0 = new \com\vip\vipapis\productsale\service\ProductSaleInfoModel();
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




class ProductSaleService_getProductSaleInfosByParam_result {
	
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
			
			
			$this->success = new \com\vip\vipapis\productsale\service\ProductSaleInfoModelResponse();
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




class ProductSaleService_healthCheck_result {
	
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




class ProductSaleService_updateProductSaleInfos_result {
	
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
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>