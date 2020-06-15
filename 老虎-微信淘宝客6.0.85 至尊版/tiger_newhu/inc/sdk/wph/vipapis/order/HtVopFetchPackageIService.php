<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;
interface HtVopFetchPackageIServiceIf{
	
	
	public function getFetchPackageOrderList(\com\vip\haitao\orderservice\service\HtVopFetchPackageParam $htVopFetchPackageParam);
	
	public function healthCheck();
	
}

class _HtVopFetchPackageIServiceClient extends \Osp\Base\OspStub implements \vipapis\order\HtVopFetchPackageIServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.order.HtVopFetchPackageIService", "1.0.0");
	}
	
	
	public function getFetchPackageOrderList(\com\vip\haitao\orderservice\service\HtVopFetchPackageParam $htVopFetchPackageParam){
		
		$this->send_getFetchPackageOrderList( $htVopFetchPackageParam);
		return $this->recv_getFetchPackageOrderList();
	}
	
	public function send_getFetchPackageOrderList(\com\vip\haitao\orderservice\service\HtVopFetchPackageParam $htVopFetchPackageParam){
		
		$this->initInvocation("getFetchPackageOrderList");
		$args = new \vipapis\order\HtVopFetchPackageIService_getFetchPackageOrderList_args();
		
		$args->htVopFetchPackageParam = $htVopFetchPackageParam;
		
		$this->send_base($args);
	}
	
	public function recv_getFetchPackageOrderList(){
		
		$result = new \vipapis\order\HtVopFetchPackageIService_getFetchPackageOrderList_result();
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
		$args = new \vipapis\order\HtVopFetchPackageIService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\order\HtVopFetchPackageIService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtVopFetchPackageIService_getFetchPackageOrderList_args {
	
	static $_TSPEC;
	public $htVopFetchPackageParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htVopFetchPackageParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htVopFetchPackageParam'])){
				
				$this->htVopFetchPackageParam = $vals['htVopFetchPackageParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htVopFetchPackageParam = new \com\vip\haitao\orderservice\service\HtVopFetchPackageParam();
			$this->htVopFetchPackageParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htVopFetchPackageParam !== null) {
			
			$xfer += $output->writeFieldBegin('htVopFetchPackageParam');
			
			if (!is_object($this->htVopFetchPackageParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->htVopFetchPackageParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtVopFetchPackageIService_healthCheck_args {
	
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




class HtVopFetchPackageIService_getFetchPackageOrderList_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtVopFetchPackageResult();
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




class HtVopFetchPackageIService_healthCheck_result {
	
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