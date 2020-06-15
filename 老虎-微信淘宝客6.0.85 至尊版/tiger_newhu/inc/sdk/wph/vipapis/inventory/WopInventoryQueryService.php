<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;
interface WopInventoryQueryServiceIf{
	
	
	public function getChannelInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\ChannelInventoryQueryCondition $queryCondition);
	
	public function getInbound( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\InboundCondition $queryCondition);
	
	public function getPurchaseSalesInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\PurchaseSalesInventoryCondition $queryCondition);
	
	public function getRealtimeInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\RealtimeInventoryCondition $queryCondition);
	
	public function healthCheck();
	
}

class _WopInventoryQueryServiceClient extends \Osp\Base\OspStub implements \vipapis\inventory\WopInventoryQueryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.inventory.WopInventoryQueryService", "1.0.0");
	}
	
	
	public function getChannelInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\ChannelInventoryQueryCondition $queryCondition){
		
		$this->send_getChannelInventory( $vendor_id, $page_index, $page_count, $queryCondition);
		return $this->recv_getChannelInventory();
	}
	
	public function send_getChannelInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\ChannelInventoryQueryCondition $queryCondition){
		
		$this->initInvocation("getChannelInventory");
		$args = new \vipapis\inventory\WopInventoryQueryService_getChannelInventory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->page_index = $page_index;
		
		$args->page_count = $page_count;
		
		$args->queryCondition = $queryCondition;
		
		$this->send_base($args);
	}
	
	public function recv_getChannelInventory(){
		
		$result = new \vipapis\inventory\WopInventoryQueryService_getChannelInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInbound( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\InboundCondition $queryCondition){
		
		$this->send_getInbound( $vendor_id, $page_index, $page_count, $queryCondition);
		return $this->recv_getInbound();
	}
	
	public function send_getInbound( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\InboundCondition $queryCondition){
		
		$this->initInvocation("getInbound");
		$args = new \vipapis\inventory\WopInventoryQueryService_getInbound_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->page_index = $page_index;
		
		$args->page_count = $page_count;
		
		$args->queryCondition = $queryCondition;
		
		$this->send_base($args);
	}
	
	public function recv_getInbound(){
		
		$result = new \vipapis\inventory\WopInventoryQueryService_getInbound_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPurchaseSalesInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\PurchaseSalesInventoryCondition $queryCondition){
		
		$this->send_getPurchaseSalesInventory( $vendor_id, $page_index, $page_count, $queryCondition);
		return $this->recv_getPurchaseSalesInventory();
	}
	
	public function send_getPurchaseSalesInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\PurchaseSalesInventoryCondition $queryCondition){
		
		$this->initInvocation("getPurchaseSalesInventory");
		$args = new \vipapis\inventory\WopInventoryQueryService_getPurchaseSalesInventory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->page_index = $page_index;
		
		$args->page_count = $page_count;
		
		$args->queryCondition = $queryCondition;
		
		$this->send_base($args);
	}
	
	public function recv_getPurchaseSalesInventory(){
		
		$result = new \vipapis\inventory\WopInventoryQueryService_getPurchaseSalesInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getRealtimeInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\RealtimeInventoryCondition $queryCondition){
		
		$this->send_getRealtimeInventory( $vendor_id, $page_index, $page_count, $queryCondition);
		return $this->recv_getRealtimeInventory();
	}
	
	public function send_getRealtimeInventory( $vendor_id, $page_index, $page_count,\com\vip\domain\inventory\RealtimeInventoryCondition $queryCondition){
		
		$this->initInvocation("getRealtimeInventory");
		$args = new \vipapis\inventory\WopInventoryQueryService_getRealtimeInventory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->page_index = $page_index;
		
		$args->page_count = $page_count;
		
		$args->queryCondition = $queryCondition;
		
		$this->send_base($args);
	}
	
	public function recv_getRealtimeInventory(){
		
		$result = new \vipapis\inventory\WopInventoryQueryService_getRealtimeInventory_result();
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
		$args = new \vipapis\inventory\WopInventoryQueryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\inventory\WopInventoryQueryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class WopInventoryQueryService_getChannelInventory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $page_index = null;
	public $page_count = null;
	public $queryCondition = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'page_index'
			),
			3 => array(
			'var' => 'page_count'
			),
			4 => array(
			'var' => 'queryCondition'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_count'])){
				
				$this->page_count = $vals['page_count'];
			}
			
			
			if (isset($vals['queryCondition'])){
				
				$this->queryCondition = $vals['queryCondition'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_index); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_count); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->queryCondition = new \com\vip\domain\inventory\ChannelInventoryQueryCondition();
			$this->queryCondition->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_count !== null) {
			
			$xfer += $output->writeFieldBegin('page_count');
			$xfer += $output->writeI32($this->page_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('queryCondition');
		
		if (!is_object($this->queryCondition)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryCondition->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WopInventoryQueryService_getInbound_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $page_index = null;
	public $page_count = null;
	public $queryCondition = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'page_index'
			),
			3 => array(
			'var' => 'page_count'
			),
			4 => array(
			'var' => 'queryCondition'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_count'])){
				
				$this->page_count = $vals['page_count'];
			}
			
			
			if (isset($vals['queryCondition'])){
				
				$this->queryCondition = $vals['queryCondition'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_index); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_count); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->queryCondition = new \com\vip\domain\inventory\InboundCondition();
			$this->queryCondition->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_count !== null) {
			
			$xfer += $output->writeFieldBegin('page_count');
			$xfer += $output->writeI32($this->page_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('queryCondition');
		
		if (!is_object($this->queryCondition)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryCondition->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WopInventoryQueryService_getPurchaseSalesInventory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $page_index = null;
	public $page_count = null;
	public $queryCondition = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'page_index'
			),
			3 => array(
			'var' => 'page_count'
			),
			4 => array(
			'var' => 'queryCondition'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_count'])){
				
				$this->page_count = $vals['page_count'];
			}
			
			
			if (isset($vals['queryCondition'])){
				
				$this->queryCondition = $vals['queryCondition'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_index); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_count); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->queryCondition = new \com\vip\domain\inventory\PurchaseSalesInventoryCondition();
			$this->queryCondition->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeString($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_count !== null) {
			
			$xfer += $output->writeFieldBegin('page_count');
			$xfer += $output->writeI32($this->page_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('queryCondition');
		
		if (!is_object($this->queryCondition)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryCondition->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WopInventoryQueryService_getRealtimeInventory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $page_index = null;
	public $page_count = null;
	public $queryCondition = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'page_index'
			),
			3 => array(
			'var' => 'page_count'
			),
			4 => array(
			'var' => 'queryCondition'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_count'])){
				
				$this->page_count = $vals['page_count'];
			}
			
			
			if (isset($vals['queryCondition'])){
				
				$this->queryCondition = $vals['queryCondition'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_index); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_count); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->queryCondition = new \com\vip\domain\inventory\RealtimeInventoryCondition();
			$this->queryCondition->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page_index !== null) {
			
			$xfer += $output->writeFieldBegin('page_index');
			$xfer += $output->writeI32($this->page_index);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_count !== null) {
			
			$xfer += $output->writeFieldBegin('page_count');
			$xfer += $output->writeI32($this->page_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('queryCondition');
		
		if (!is_object($this->queryCondition)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryCondition->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WopInventoryQueryService_healthCheck_args {
	
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




class WopInventoryQueryService_getChannelInventory_result {
	
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
			
			
			$this->success = new \com\vip\domain\inventory\GetChannelInventoryResponse();
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




class WopInventoryQueryService_getInbound_result {
	
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
			
			
			$this->success = new \com\vip\domain\inventory\GetInboundResponse();
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




class WopInventoryQueryService_getPurchaseSalesInventory_result {
	
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
			
			
			$this->success = new \com\vip\domain\inventory\PurchaseSalesInventoryResponse();
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




class WopInventoryQueryService_getRealtimeInventory_result {
	
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
			
			
			$this->success = new \com\vip\domain\inventory\GetRealtimeInventoryResponse();
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




class WopInventoryQueryService_healthCheck_result {
	
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




?>