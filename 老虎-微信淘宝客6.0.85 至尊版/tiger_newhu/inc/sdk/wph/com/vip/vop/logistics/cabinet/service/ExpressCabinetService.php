<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\cabinet\service;
interface ExpressCabinetServiceIf{
	
	
	public function getShippingByLogisticsNos(\com\vip\vop\logistics\cabinet\GetShippingReq $shippingReq);
	
	public function healthCheck();
	
	public function reportTraces(\com\vip\vop\logistics\cabinet\ExpressCabinetTraceReq $traceReq);
	
}

class _ExpressCabinetServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\logistics\cabinet\service\ExpressCabinetServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.logistics.cabinet.service.ExpressCabinetService", "1.0.0");
	}
	
	
	public function getShippingByLogisticsNos(\com\vip\vop\logistics\cabinet\GetShippingReq $shippingReq){
		
		$this->send_getShippingByLogisticsNos( $shippingReq);
		return $this->recv_getShippingByLogisticsNos();
	}
	
	public function send_getShippingByLogisticsNos(\com\vip\vop\logistics\cabinet\GetShippingReq $shippingReq){
		
		$this->initInvocation("getShippingByLogisticsNos");
		$args = new \com\vip\vop\logistics\cabinet\service\ExpressCabinetService_getShippingByLogisticsNos_args();
		
		$args->shippingReq = $shippingReq;
		
		$this->send_base($args);
	}
	
	public function recv_getShippingByLogisticsNos(){
		
		$result = new \com\vip\vop\logistics\cabinet\service\ExpressCabinetService_getShippingByLogisticsNos_result();
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
		$args = new \com\vip\vop\logistics\cabinet\service\ExpressCabinetService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\logistics\cabinet\service\ExpressCabinetService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function reportTraces(\com\vip\vop\logistics\cabinet\ExpressCabinetTraceReq $traceReq){
		
		$this->send_reportTraces( $traceReq);
		return $this->recv_reportTraces();
	}
	
	public function send_reportTraces(\com\vip\vop\logistics\cabinet\ExpressCabinetTraceReq $traceReq){
		
		$this->initInvocation("reportTraces");
		$args = new \com\vip\vop\logistics\cabinet\service\ExpressCabinetService_reportTraces_args();
		
		$args->traceReq = $traceReq;
		
		$this->send_base($args);
	}
	
	public function recv_reportTraces(){
		
		$result = new \com\vip\vop\logistics\cabinet\service\ExpressCabinetService_reportTraces_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ExpressCabinetService_getShippingByLogisticsNos_args {
	
	static $_TSPEC;
	public $shippingReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shippingReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shippingReq'])){
				
				$this->shippingReq = $vals['shippingReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->shippingReq = new \com\vip\vop\logistics\cabinet\GetShippingReq();
			$this->shippingReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('shippingReq');
		
		if (!is_object($this->shippingReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->shippingReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ExpressCabinetService_healthCheck_args {
	
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




class ExpressCabinetService_reportTraces_args {
	
	static $_TSPEC;
	public $traceReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'traceReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['traceReq'])){
				
				$this->traceReq = $vals['traceReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->traceReq = new \com\vip\vop\logistics\cabinet\ExpressCabinetTraceReq();
			$this->traceReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('traceReq');
		
		if (!is_object($this->traceReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->traceReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ExpressCabinetService_getShippingByLogisticsNos_result {
	
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
			
			
			$this->success = new \com\vip\vop\logistics\cabinet\GetShippingResp();
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




class ExpressCabinetService_healthCheck_result {
	
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




class ExpressCabinetService_reportTraces_result {
	
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
			
			
			$this->success = new \com\vip\vop\logistics\cabinet\ShipmentTraceResp();
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