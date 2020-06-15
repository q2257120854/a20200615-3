<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo\service;
interface LogisticsWorkOrderServiceIf{
	
	
	public function createWorkOrder(\com\vip\vop\logistics\wo\CreateWorkOrderReq $createWorkOrderReq);
	
	public function getWorkOrders(\com\vip\vop\logistics\wo\WorkOrderQueryReq $workOrderQueryReq);
	
	public function healthCheck();
	
	public function replyProcessResult(\com\vip\vop\logistics\wo\WorkOrderProcessResult $processResult);
	
	public function replyRecheckResult(\com\vip\vop\logistics\wo\WorkOrderRecheckResult $rechekResult);
	
}

class _LogisticsWorkOrderServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\logistics\wo\service\LogisticsWorkOrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.logistics.wo.service.LogisticsWorkOrderService", "1.0.0");
	}
	
	
	public function createWorkOrder(\com\vip\vop\logistics\wo\CreateWorkOrderReq $createWorkOrderReq){
		
		$this->send_createWorkOrder( $createWorkOrderReq);
		return $this->recv_createWorkOrder();
	}
	
	public function send_createWorkOrder(\com\vip\vop\logistics\wo\CreateWorkOrderReq $createWorkOrderReq){
		
		$this->initInvocation("createWorkOrder");
		$args = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_createWorkOrder_args();
		
		$args->createWorkOrderReq = $createWorkOrderReq;
		
		$this->send_base($args);
	}
	
	public function recv_createWorkOrder(){
		
		$result = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_createWorkOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWorkOrders(\com\vip\vop\logistics\wo\WorkOrderQueryReq $workOrderQueryReq){
		
		$this->send_getWorkOrders( $workOrderQueryReq);
		return $this->recv_getWorkOrders();
	}
	
	public function send_getWorkOrders(\com\vip\vop\logistics\wo\WorkOrderQueryReq $workOrderQueryReq){
		
		$this->initInvocation("getWorkOrders");
		$args = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_getWorkOrders_args();
		
		$args->workOrderQueryReq = $workOrderQueryReq;
		
		$this->send_base($args);
	}
	
	public function recv_getWorkOrders(){
		
		$result = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_getWorkOrders_result();
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
		$args = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function replyProcessResult(\com\vip\vop\logistics\wo\WorkOrderProcessResult $processResult){
		
		$this->send_replyProcessResult( $processResult);
		return $this->recv_replyProcessResult();
	}
	
	public function send_replyProcessResult(\com\vip\vop\logistics\wo\WorkOrderProcessResult $processResult){
		
		$this->initInvocation("replyProcessResult");
		$args = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_replyProcessResult_args();
		
		$args->processResult = $processResult;
		
		$this->send_base($args);
	}
	
	public function recv_replyProcessResult(){
		
		$result = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_replyProcessResult_result();
		$this->receive_base($result);
		
	}
	
	
	public function replyRecheckResult(\com\vip\vop\logistics\wo\WorkOrderRecheckResult $rechekResult){
		
		$this->send_replyRecheckResult( $rechekResult);
		return $this->recv_replyRecheckResult();
	}
	
	public function send_replyRecheckResult(\com\vip\vop\logistics\wo\WorkOrderRecheckResult $rechekResult){
		
		$this->initInvocation("replyRecheckResult");
		$args = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_replyRecheckResult_args();
		
		$args->rechekResult = $rechekResult;
		
		$this->send_base($args);
	}
	
	public function recv_replyRecheckResult(){
		
		$result = new \com\vip\vop\logistics\wo\service\LogisticsWorkOrderService_replyRecheckResult_result();
		$this->receive_base($result);
		
	}
	
	
}




class LogisticsWorkOrderService_createWorkOrder_args {
	
	static $_TSPEC;
	public $createWorkOrderReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createWorkOrderReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createWorkOrderReq'])){
				
				$this->createWorkOrderReq = $vals['createWorkOrderReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->createWorkOrderReq = new \com\vip\vop\logistics\wo\CreateWorkOrderReq();
			$this->createWorkOrderReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('createWorkOrderReq');
		
		if (!is_object($this->createWorkOrderReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->createWorkOrderReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class LogisticsWorkOrderService_getWorkOrders_args {
	
	static $_TSPEC;
	public $workOrderQueryReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'workOrderQueryReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['workOrderQueryReq'])){
				
				$this->workOrderQueryReq = $vals['workOrderQueryReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->workOrderQueryReq = new \com\vip\vop\logistics\wo\WorkOrderQueryReq();
			$this->workOrderQueryReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('workOrderQueryReq');
		
		if (!is_object($this->workOrderQueryReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->workOrderQueryReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class LogisticsWorkOrderService_healthCheck_args {
	
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




class LogisticsWorkOrderService_replyProcessResult_args {
	
	static $_TSPEC;
	public $processResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'processResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['processResult'])){
				
				$this->processResult = $vals['processResult'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->processResult = new \com\vip\vop\logistics\wo\WorkOrderProcessResult();
			$this->processResult->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('processResult');
		
		if (!is_object($this->processResult)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->processResult->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class LogisticsWorkOrderService_replyRecheckResult_args {
	
	static $_TSPEC;
	public $rechekResult = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rechekResult'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rechekResult'])){
				
				$this->rechekResult = $vals['rechekResult'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->rechekResult = new \com\vip\vop\logistics\wo\WorkOrderRecheckResult();
			$this->rechekResult->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('rechekResult');
		
		if (!is_object($this->rechekResult)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->rechekResult->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class LogisticsWorkOrderService_createWorkOrder_result {
	
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
			
			
			$this->success = new \com\vip\vop\logistics\wo\CreateWorkOrderResp();
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




class LogisticsWorkOrderService_getWorkOrders_result {
	
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
					
					$elem0 = new \com\vip\vop\logistics\wo\WorkOrder();
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




class LogisticsWorkOrderService_healthCheck_result {
	
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




class LogisticsWorkOrderService_replyProcessResult_result {
	
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




class LogisticsWorkOrderService_replyRecheckResult_result {
	
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