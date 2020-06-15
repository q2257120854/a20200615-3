<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;
interface FendiOrderServiceIf{
	
	
	public function healthCheck();
	
	public function pushCancelledOrderToFendi( $partnerId, $channelId);
	
	public function pushNewOrderToFendi( $channelId, $partnerId);
	
	public function pushShippedOrderToFendi( $partnerId, $channelId);
	
}

class _FendiOrderServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\order\FendiOrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.order.FendiOrderService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\order\FendiOrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\order\FendiOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushCancelledOrderToFendi( $partnerId, $channelId){
		
		$this->send_pushCancelledOrderToFendi( $partnerId, $channelId);
		return $this->recv_pushCancelledOrderToFendi();
	}
	
	public function send_pushCancelledOrderToFendi( $partnerId, $channelId){
		
		$this->initInvocation("pushCancelledOrderToFendi");
		$args = new \com\vip\vop\vcloud\order\FendiOrderService_pushCancelledOrderToFendi_args();
		
		$args->partnerId = $partnerId;
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_pushCancelledOrderToFendi(){
		
		$result = new \com\vip\vop\vcloud\order\FendiOrderService_pushCancelledOrderToFendi_result();
		$this->receive_base($result);
		
	}
	
	
	public function pushNewOrderToFendi( $channelId, $partnerId){
		
		$this->send_pushNewOrderToFendi( $channelId, $partnerId);
		return $this->recv_pushNewOrderToFendi();
	}
	
	public function send_pushNewOrderToFendi( $channelId, $partnerId){
		
		$this->initInvocation("pushNewOrderToFendi");
		$args = new \com\vip\vop\vcloud\order\FendiOrderService_pushNewOrderToFendi_args();
		
		$args->channelId = $channelId;
		
		$args->partnerId = $partnerId;
		
		$this->send_base($args);
	}
	
	public function recv_pushNewOrderToFendi(){
		
		$result = new \com\vip\vop\vcloud\order\FendiOrderService_pushNewOrderToFendi_result();
		$this->receive_base($result);
		
	}
	
	
	public function pushShippedOrderToFendi( $partnerId, $channelId){
		
		$this->send_pushShippedOrderToFendi( $partnerId, $channelId);
		return $this->recv_pushShippedOrderToFendi();
	}
	
	public function send_pushShippedOrderToFendi( $partnerId, $channelId){
		
		$this->initInvocation("pushShippedOrderToFendi");
		$args = new \com\vip\vop\vcloud\order\FendiOrderService_pushShippedOrderToFendi_args();
		
		$args->partnerId = $partnerId;
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_pushShippedOrderToFendi(){
		
		$result = new \com\vip\vop\vcloud\order\FendiOrderService_pushShippedOrderToFendi_result();
		$this->receive_base($result);
		
	}
	
	
}




class FendiOrderService_healthCheck_args {
	
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




class FendiOrderService_pushCancelledOrderToFendi_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FendiOrderService_pushNewOrderToFendi_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $partnerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'partnerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FendiOrderService_pushShippedOrderToFendi_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FendiOrderService_healthCheck_result {
	
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




class FendiOrderService_pushCancelledOrderToFendi_result {
	
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




class FendiOrderService_pushNewOrderToFendi_result {
	
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




class FendiOrderService_pushShippedOrderToFendi_result {
	
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




?>