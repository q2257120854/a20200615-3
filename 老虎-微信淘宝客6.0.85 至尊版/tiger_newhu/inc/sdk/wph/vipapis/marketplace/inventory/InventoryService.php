<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\inventory;
interface InventoryServiceIf{
	
	
	public function getSkuStock(\vipapis\marketplace\inventory\GetSkuStockRequest $getSkuStockRequest);
	
	public function healthCheck();
	
	public function increaseSkuStock(\vipapis\marketplace\inventory\IncreaseSkuStockRequest $increaseSkuStockRequest);
	
	public function updateSkuStock(\vipapis\marketplace\inventory\UpdateSkuStockRequest $updateSkuStockRequest);
	
}

class _InventoryServiceClient extends \Osp\Base\OspStub implements \vipapis\marketplace\inventory\InventoryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.marketplace.inventory.InventoryService", "1.0.0");
	}
	
	
	public function getSkuStock(\vipapis\marketplace\inventory\GetSkuStockRequest $getSkuStockRequest){
		
		$this->send_getSkuStock( $getSkuStockRequest);
		return $this->recv_getSkuStock();
	}
	
	public function send_getSkuStock(\vipapis\marketplace\inventory\GetSkuStockRequest $getSkuStockRequest){
		
		$this->initInvocation("getSkuStock");
		$args = new \vipapis\marketplace\inventory\InventoryService_getSkuStock_args();
		
		$args->getSkuStockRequest = $getSkuStockRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getSkuStock(){
		
		$result = new \vipapis\marketplace\inventory\InventoryService_getSkuStock_result();
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
		$args = new \vipapis\marketplace\inventory\InventoryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\marketplace\inventory\InventoryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function increaseSkuStock(\vipapis\marketplace\inventory\IncreaseSkuStockRequest $increaseSkuStockRequest){
		
		$this->send_increaseSkuStock( $increaseSkuStockRequest);
		return $this->recv_increaseSkuStock();
	}
	
	public function send_increaseSkuStock(\vipapis\marketplace\inventory\IncreaseSkuStockRequest $increaseSkuStockRequest){
		
		$this->initInvocation("increaseSkuStock");
		$args = new \vipapis\marketplace\inventory\InventoryService_increaseSkuStock_args();
		
		$args->increaseSkuStockRequest = $increaseSkuStockRequest;
		
		$this->send_base($args);
	}
	
	public function recv_increaseSkuStock(){
		
		$result = new \vipapis\marketplace\inventory\InventoryService_increaseSkuStock_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateSkuStock(\vipapis\marketplace\inventory\UpdateSkuStockRequest $updateSkuStockRequest){
		
		$this->send_updateSkuStock( $updateSkuStockRequest);
		return $this->recv_updateSkuStock();
	}
	
	public function send_updateSkuStock(\vipapis\marketplace\inventory\UpdateSkuStockRequest $updateSkuStockRequest){
		
		$this->initInvocation("updateSkuStock");
		$args = new \vipapis\marketplace\inventory\InventoryService_updateSkuStock_args();
		
		$args->updateSkuStockRequest = $updateSkuStockRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateSkuStock(){
		
		$result = new \vipapis\marketplace\inventory\InventoryService_updateSkuStock_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class InventoryService_getSkuStock_args {
	
	static $_TSPEC;
	public $getSkuStockRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getSkuStockRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getSkuStockRequest'])){
				
				$this->getSkuStockRequest = $vals['getSkuStockRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getSkuStockRequest = new \vipapis\marketplace\inventory\GetSkuStockRequest();
			$this->getSkuStockRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getSkuStockRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getSkuStockRequest');
			
			if (!is_object($this->getSkuStockRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getSkuStockRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_healthCheck_args {
	
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




class InventoryService_increaseSkuStock_args {
	
	static $_TSPEC;
	public $increaseSkuStockRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'increaseSkuStockRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['increaseSkuStockRequest'])){
				
				$this->increaseSkuStockRequest = $vals['increaseSkuStockRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->increaseSkuStockRequest = new \vipapis\marketplace\inventory\IncreaseSkuStockRequest();
			$this->increaseSkuStockRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('increaseSkuStockRequest');
		
		if (!is_object($this->increaseSkuStockRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->increaseSkuStockRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_updateSkuStock_args {
	
	static $_TSPEC;
	public $updateSkuStockRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateSkuStockRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateSkuStockRequest'])){
				
				$this->updateSkuStockRequest = $vals['updateSkuStockRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateSkuStockRequest = new \vipapis\marketplace\inventory\UpdateSkuStockRequest();
			$this->updateSkuStockRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->updateSkuStockRequest !== null) {
			
			$xfer += $output->writeFieldBegin('updateSkuStockRequest');
			
			if (!is_object($this->updateSkuStockRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->updateSkuStockRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getSkuStock_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\inventory\GetSkuStockResponse();
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




class InventoryService_healthCheck_result {
	
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




class InventoryService_increaseSkuStock_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\inventory\IncreaseSkuStockResponse();
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




class InventoryService_updateSkuStock_result {
	
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
			
			
			$this->success = new \vipapis\marketplace\inventory\UpdateSkuStockResponse();
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