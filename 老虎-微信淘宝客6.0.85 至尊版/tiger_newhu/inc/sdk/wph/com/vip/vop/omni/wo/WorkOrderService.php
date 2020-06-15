<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\wo;
interface WorkOrderServiceIf{
	
	
	public function getNeedPushWorkOrders( $vendorId, $startTime, $lastId, $size);
	
	public function getOxoOrderCarrier( $orderSn);
	
	public function handleWorkOrder(\com\vip\vop\omni\wo\WorkOrder $workOrder);
	
	public function handleWorkOrderAttachment(\com\vip\vop\omni\wo\WorkOrderAttach $workOrderAttach);
	
	public function healthCheck();
	
	public function pushWorkOrder(\com\vip\vop\omni\wo\WorkOrder $workOrder);
	
	public function workOrderReply(\com\vip\vop\omni\wo\WorkOrderReply $reply);
	
}

class _WorkOrderServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\omni\wo\WorkOrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.omni.wo.WorkOrderService", "1.0.0");
	}
	
	
	public function getNeedPushWorkOrders( $vendorId, $startTime, $lastId, $size){
		
		$this->send_getNeedPushWorkOrders( $vendorId, $startTime, $lastId, $size);
		return $this->recv_getNeedPushWorkOrders();
	}
	
	public function send_getNeedPushWorkOrders( $vendorId, $startTime, $lastId, $size){
		
		$this->initInvocation("getNeedPushWorkOrders");
		$args = new \com\vip\vop\omni\wo\WorkOrderService_getNeedPushWorkOrders_args();
		
		$args->vendorId = $vendorId;
		
		$args->startTime = $startTime;
		
		$args->lastId = $lastId;
		
		$args->size = $size;
		
		$this->send_base($args);
	}
	
	public function recv_getNeedPushWorkOrders(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_getNeedPushWorkOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOxoOrderCarrier( $orderSn){
		
		$this->send_getOxoOrderCarrier( $orderSn);
		return $this->recv_getOxoOrderCarrier();
	}
	
	public function send_getOxoOrderCarrier( $orderSn){
		
		$this->initInvocation("getOxoOrderCarrier");
		$args = new \com\vip\vop\omni\wo\WorkOrderService_getOxoOrderCarrier_args();
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getOxoOrderCarrier(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_getOxoOrderCarrier_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function handleWorkOrder(\com\vip\vop\omni\wo\WorkOrder $workOrder){
		
		$this->send_handleWorkOrder( $workOrder);
		return $this->recv_handleWorkOrder();
	}
	
	public function send_handleWorkOrder(\com\vip\vop\omni\wo\WorkOrder $workOrder){
		
		$this->initInvocation("handleWorkOrder");
		$args = new \com\vip\vop\omni\wo\WorkOrderService_handleWorkOrder_args();
		
		$args->workOrder = $workOrder;
		
		$this->send_base($args);
	}
	
	public function recv_handleWorkOrder(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_handleWorkOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function handleWorkOrderAttachment(\com\vip\vop\omni\wo\WorkOrderAttach $workOrderAttach){
		
		$this->send_handleWorkOrderAttachment( $workOrderAttach);
		return $this->recv_handleWorkOrderAttachment();
	}
	
	public function send_handleWorkOrderAttachment(\com\vip\vop\omni\wo\WorkOrderAttach $workOrderAttach){
		
		$this->initInvocation("handleWorkOrderAttachment");
		$args = new \com\vip\vop\omni\wo\WorkOrderService_handleWorkOrderAttachment_args();
		
		$args->workOrderAttach = $workOrderAttach;
		
		$this->send_base($args);
	}
	
	public function recv_handleWorkOrderAttachment(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_handleWorkOrderAttachment_result();
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
		$args = new \com\vip\vop\omni\wo\WorkOrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushWorkOrder(\com\vip\vop\omni\wo\WorkOrder $workOrder){
		
		$this->send_pushWorkOrder( $workOrder);
		return $this->recv_pushWorkOrder();
	}
	
	public function send_pushWorkOrder(\com\vip\vop\omni\wo\WorkOrder $workOrder){
		
		$this->initInvocation("pushWorkOrder");
		$args = new \com\vip\vop\omni\wo\WorkOrderService_pushWorkOrder_args();
		
		$args->workOrder = $workOrder;
		
		$this->send_base($args);
	}
	
	public function recv_pushWorkOrder(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_pushWorkOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function workOrderReply(\com\vip\vop\omni\wo\WorkOrderReply $reply){
		
		$this->send_workOrderReply( $reply);
		return $this->recv_workOrderReply();
	}
	
	public function send_workOrderReply(\com\vip\vop\omni\wo\WorkOrderReply $reply){
		
		$this->initInvocation("workOrderReply");
		$args = new \com\vip\vop\omni\wo\WorkOrderService_workOrderReply_args();
		
		$args->reply = $reply;
		
		$this->send_base($args);
	}
	
	public function recv_workOrderReply(){
		
		$result = new \com\vip\vop\omni\wo\WorkOrderService_workOrderReply_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class WorkOrderService_getNeedPushWorkOrders_args {
	
	static $_TSPEC;
	public $vendorId = null;
	public $startTime = null;
	public $lastId = null;
	public $size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorId'
			),
			2 => array(
			'var' => 'startTime'
			),
			3 => array(
			'var' => 'lastId'
			),
			4 => array(
			'var' => 'size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['lastId'])){
				
				$this->lastId = $vals['lastId'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendorId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->startTime);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->lastId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastId !== null) {
			
			$xfer += $output->writeFieldBegin('lastId');
			$xfer += $output->writeI64($this->lastId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeI32($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_getOxoOrderCarrier_args {
	
	static $_TSPEC;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_handleWorkOrder_args {
	
	static $_TSPEC;
	public $workOrder = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'workOrder'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['workOrder'])){
				
				$this->workOrder = $vals['workOrder'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->workOrder = new \com\vip\vop\omni\wo\WorkOrder();
			$this->workOrder->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('workOrder');
		
		if (!is_object($this->workOrder)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->workOrder->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_handleWorkOrderAttachment_args {
	
	static $_TSPEC;
	public $workOrderAttach = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'workOrderAttach'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['workOrderAttach'])){
				
				$this->workOrderAttach = $vals['workOrderAttach'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->workOrderAttach = new \com\vip\vop\omni\wo\WorkOrderAttach();
			$this->workOrderAttach->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('workOrderAttach');
		
		if (!is_object($this->workOrderAttach)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->workOrderAttach->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_healthCheck_args {
	
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




class WorkOrderService_pushWorkOrder_args {
	
	static $_TSPEC;
	public $workOrder = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'workOrder'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['workOrder'])){
				
				$this->workOrder = $vals['workOrder'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->workOrder = new \com\vip\vop\omni\wo\WorkOrder();
			$this->workOrder->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('workOrder');
		
		if (!is_object($this->workOrder)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->workOrder->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_workOrderReply_args {
	
	static $_TSPEC;
	public $reply = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reply'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reply'])){
				
				$this->reply = $vals['reply'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reply = new \com\vip\vop\omni\wo\WorkOrderReply();
			$this->reply->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reply');
		
		if (!is_object($this->reply)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reply->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_getNeedPushWorkOrders_result {
	
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
					
					$elem0 = new \com\vip\vop\omni\wo\WorkOrder();
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




class WorkOrderService_getOxoOrderCarrier_result {
	
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
			
			
			$this->success = new \com\vip\vop\omni\wo\OxoOrderCarrierInfo();
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




class WorkOrderService_handleWorkOrder_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_handleWorkOrderAttachment_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_healthCheck_result {
	
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




class WorkOrderService_pushWorkOrder_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class WorkOrderService_workOrderReply_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>