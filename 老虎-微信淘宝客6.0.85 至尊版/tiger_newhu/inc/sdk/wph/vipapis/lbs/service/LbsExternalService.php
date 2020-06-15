<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\lbs\service;
interface LbsExternalServiceIf{
	
	
	public function getExplainedBarcodes(\com\vip\lbs\lpc\service\entity\GetExplainedBarcodesRequest $getExplainedBarcodesRequest);
	
	public function healthCheck();
	
}

class _LbsExternalServiceClient extends \Osp\Base\OspStub implements \vipapis\lbs\service\LbsExternalServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.lbs.service.LbsExternalService", "1.0.0");
	}
	
	
	public function getExplainedBarcodes(\com\vip\lbs\lpc\service\entity\GetExplainedBarcodesRequest $getExplainedBarcodesRequest){
		
		$this->send_getExplainedBarcodes( $getExplainedBarcodesRequest);
		return $this->recv_getExplainedBarcodes();
	}
	
	public function send_getExplainedBarcodes(\com\vip\lbs\lpc\service\entity\GetExplainedBarcodesRequest $getExplainedBarcodesRequest){
		
		$this->initInvocation("getExplainedBarcodes");
		$args = new \vipapis\lbs\service\LbsExternalService_getExplainedBarcodes_args();
		
		$args->getExplainedBarcodesRequest = $getExplainedBarcodesRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getExplainedBarcodes(){
		
		$result = new \vipapis\lbs\service\LbsExternalService_getExplainedBarcodes_result();
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
		$args = new \vipapis\lbs\service\LbsExternalService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\lbs\service\LbsExternalService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class LbsExternalService_getExplainedBarcodes_args {
	
	static $_TSPEC;
	public $getExplainedBarcodesRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getExplainedBarcodesRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getExplainedBarcodesRequest'])){
				
				$this->getExplainedBarcodesRequest = $vals['getExplainedBarcodesRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getExplainedBarcodesRequest = new \com\vip\lbs\lpc\service\entity\GetExplainedBarcodesRequest();
			$this->getExplainedBarcodesRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getExplainedBarcodesRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getExplainedBarcodesRequest');
			
			if (!is_object($this->getExplainedBarcodesRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getExplainedBarcodesRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class LbsExternalService_healthCheck_args {
	
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




class LbsExternalService_getExplainedBarcodes_result {
	
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
			
			
			$this->success = new \com\vip\lbs\lpc\service\entity\GetExplainedBarcodesResponse();
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




class LbsExternalService_healthCheck_result {
	
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