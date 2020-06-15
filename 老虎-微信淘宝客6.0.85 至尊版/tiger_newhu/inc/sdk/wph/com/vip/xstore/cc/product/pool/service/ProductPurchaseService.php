<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\product\pool\service;
interface ProductPurchaseServiceIf{
	
	
	public function healthCheck();
	
	public function prodQuery(\com\vip\xstore\cc\product\pool\service\ProdQueryReqDTO $prodQueryReqDTO);
	
	public function prodValidate(\com\vip\xstore\cc\product\pool\service\ProdValidateReqDTO $prodValidateReqDTO);
	
}

class _ProductPurchaseServiceClient extends \Osp\Base\OspStub implements \com\vip\xstore\cc\product\pool\service\ProductPurchaseServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.xstore.cc.product.pool.service.ProductPurchaseService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\xstore\cc\product\pool\service\ProductPurchaseService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\xstore\cc\product\pool\service\ProductPurchaseService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function prodQuery(\com\vip\xstore\cc\product\pool\service\ProdQueryReqDTO $prodQueryReqDTO){
		
		$this->send_prodQuery( $prodQueryReqDTO);
		return $this->recv_prodQuery();
	}
	
	public function send_prodQuery(\com\vip\xstore\cc\product\pool\service\ProdQueryReqDTO $prodQueryReqDTO){
		
		$this->initInvocation("prodQuery");
		$args = new \com\vip\xstore\cc\product\pool\service\ProductPurchaseService_prodQuery_args();
		
		$args->prodQueryReqDTO = $prodQueryReqDTO;
		
		$this->send_base($args);
	}
	
	public function recv_prodQuery(){
		
		$result = new \com\vip\xstore\cc\product\pool\service\ProductPurchaseService_prodQuery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function prodValidate(\com\vip\xstore\cc\product\pool\service\ProdValidateReqDTO $prodValidateReqDTO){
		
		$this->send_prodValidate( $prodValidateReqDTO);
		return $this->recv_prodValidate();
	}
	
	public function send_prodValidate(\com\vip\xstore\cc\product\pool\service\ProdValidateReqDTO $prodValidateReqDTO){
		
		$this->initInvocation("prodValidate");
		$args = new \com\vip\xstore\cc\product\pool\service\ProductPurchaseService_prodValidate_args();
		
		$args->prodValidateReqDTO = $prodValidateReqDTO;
		
		$this->send_base($args);
	}
	
	public function recv_prodValidate(){
		
		$result = new \com\vip\xstore\cc\product\pool\service\ProductPurchaseService_prodValidate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProductPurchaseService_healthCheck_args {
	
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




class ProductPurchaseService_prodQuery_args {
	
	static $_TSPEC;
	public $prodQueryReqDTO = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prodQueryReqDTO'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prodQueryReqDTO'])){
				
				$this->prodQueryReqDTO = $vals['prodQueryReqDTO'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->prodQueryReqDTO = new \com\vip\xstore\cc\product\pool\service\ProdQueryReqDTO();
			$this->prodQueryReqDTO->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('prodQueryReqDTO');
		
		if (!is_object($this->prodQueryReqDTO)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->prodQueryReqDTO->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductPurchaseService_prodValidate_args {
	
	static $_TSPEC;
	public $prodValidateReqDTO = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prodValidateReqDTO'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prodValidateReqDTO'])){
				
				$this->prodValidateReqDTO = $vals['prodValidateReqDTO'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->prodValidateReqDTO = new \com\vip\xstore\cc\product\pool\service\ProdValidateReqDTO();
			$this->prodValidateReqDTO->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('prodValidateReqDTO');
		
		if (!is_object($this->prodValidateReqDTO)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->prodValidateReqDTO->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductPurchaseService_healthCheck_result {
	
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




class ProductPurchaseService_prodQuery_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\product\pool\service\ProdQueryRespDTO();
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




class ProductPurchaseService_prodValidate_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\product\pool\service\ProdValidateRespDTO();
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