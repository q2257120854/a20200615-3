<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\loading;
interface HtLoadingServiceIf{
	
	
	public function getOutRLHandleResult( $userId, $listNo, $orders);
	
	public function healthCheck();
	
	public function receive3PcPreloading(\com\vip\haitao\loading\osp\service\HtPreLoading3PcRequest $request);
	
	public function receiveInLRInfo( $customsCode, $userId, $loadingId, $carLicense, $loadingNumber, $customsReleaseNo, $orders);
	
	public function receiveOutLRInfo(\com\vip\haitao\loading\osp\service\HtReceiveOutLoadingReleaseParam $param);
	
	public function sendLoadingDeclare( $instanceCode, $nodeCode);
	
}

class _HtLoadingServiceClient extends \Osp\Base\OspStub implements \vipapis\loading\HtLoadingServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.loading.HtLoadingService", "1.0.0");
	}
	
	
	public function getOutRLHandleResult( $userId, $listNo, $orders){
		
		$this->send_getOutRLHandleResult( $userId, $listNo, $orders);
		return $this->recv_getOutRLHandleResult();
	}
	
	public function send_getOutRLHandleResult( $userId, $listNo, $orders){
		
		$this->initInvocation("getOutRLHandleResult");
		$args = new \vipapis\loading\HtLoadingService_getOutRLHandleResult_args();
		
		$args->userId = $userId;
		
		$args->listNo = $listNo;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_getOutRLHandleResult(){
		
		$result = new \vipapis\loading\HtLoadingService_getOutRLHandleResult_result();
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
		$args = new \vipapis\loading\HtLoadingService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\loading\HtLoadingService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receive3PcPreloading(\com\vip\haitao\loading\osp\service\HtPreLoading3PcRequest $request){
		
		$this->send_receive3PcPreloading( $request);
		return $this->recv_receive3PcPreloading();
	}
	
	public function send_receive3PcPreloading(\com\vip\haitao\loading\osp\service\HtPreLoading3PcRequest $request){
		
		$this->initInvocation("receive3PcPreloading");
		$args = new \vipapis\loading\HtLoadingService_receive3PcPreloading_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_receive3PcPreloading(){
		
		$result = new \vipapis\loading\HtLoadingService_receive3PcPreloading_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveInLRInfo( $customsCode, $userId, $loadingId, $carLicense, $loadingNumber, $customsReleaseNo, $orders){
		
		$this->send_receiveInLRInfo( $customsCode, $userId, $loadingId, $carLicense, $loadingNumber, $customsReleaseNo, $orders);
		return $this->recv_receiveInLRInfo();
	}
	
	public function send_receiveInLRInfo( $customsCode, $userId, $loadingId, $carLicense, $loadingNumber, $customsReleaseNo, $orders){
		
		$this->initInvocation("receiveInLRInfo");
		$args = new \vipapis\loading\HtLoadingService_receiveInLRInfo_args();
		
		$args->customsCode = $customsCode;
		
		$args->userId = $userId;
		
		$args->loadingId = $loadingId;
		
		$args->carLicense = $carLicense;
		
		$args->loadingNumber = $loadingNumber;
		
		$args->customsReleaseNo = $customsReleaseNo;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_receiveInLRInfo(){
		
		$result = new \vipapis\loading\HtLoadingService_receiveInLRInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveOutLRInfo(\com\vip\haitao\loading\osp\service\HtReceiveOutLoadingReleaseParam $param){
		
		$this->send_receiveOutLRInfo( $param);
		return $this->recv_receiveOutLRInfo();
	}
	
	public function send_receiveOutLRInfo(\com\vip\haitao\loading\osp\service\HtReceiveOutLoadingReleaseParam $param){
		
		$this->initInvocation("receiveOutLRInfo");
		$args = new \vipapis\loading\HtLoadingService_receiveOutLRInfo_args();
		
		$args->param = $param;
		
		$this->send_base($args);
	}
	
	public function recv_receiveOutLRInfo(){
		
		$result = new \vipapis\loading\HtLoadingService_receiveOutLRInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sendLoadingDeclare( $instanceCode, $nodeCode){
		
		$this->send_sendLoadingDeclare( $instanceCode, $nodeCode);
		return $this->recv_sendLoadingDeclare();
	}
	
	public function send_sendLoadingDeclare( $instanceCode, $nodeCode){
		
		$this->initInvocation("sendLoadingDeclare");
		$args = new \vipapis\loading\HtLoadingService_sendLoadingDeclare_args();
		
		$args->instanceCode = $instanceCode;
		
		$args->nodeCode = $nodeCode;
		
		$this->send_base($args);
	}
	
	public function recv_sendLoadingDeclare(){
		
		$result = new \vipapis\loading\HtLoadingService_sendLoadingDeclare_result();
		$this->receive_base($result);
		
	}
	
	
}




class HtLoadingService_getOutRLHandleResult_args {
	
	static $_TSPEC;
	public $userId = null;
	public $listNo = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'listNo'
			),
			3 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['listNo'])){
				
				$this->listNo = $vals['listNo'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->listNo);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->orders[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeString($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('listNo');
		$xfer += $output->writeString($this->listNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtLoadingService_healthCheck_args {
	
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




class HtLoadingService_receive3PcPreloading_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\haitao\loading\osp\service\HtPreLoading3PcRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtLoadingService_receiveInLRInfo_args {
	
	static $_TSPEC;
	public $customsCode = null;
	public $userId = null;
	public $loadingId = null;
	public $carLicense = null;
	public $loadingNumber = null;
	public $customsReleaseNo = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'customsCode'
			),
			2 => array(
			'var' => 'userId'
			),
			3 => array(
			'var' => 'loadingId'
			),
			4 => array(
			'var' => 'carLicense'
			),
			5 => array(
			'var' => 'loadingNumber'
			),
			6 => array(
			'var' => 'customsReleaseNo'
			),
			7 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['loadingId'])){
				
				$this->loadingId = $vals['loadingId'];
			}
			
			
			if (isset($vals['carLicense'])){
				
				$this->carLicense = $vals['carLicense'];
			}
			
			
			if (isset($vals['loadingNumber'])){
				
				$this->loadingNumber = $vals['loadingNumber'];
			}
			
			
			if (isset($vals['customsReleaseNo'])){
				
				$this->customsReleaseNo = $vals['customsReleaseNo'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->loadingId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carLicense);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->loadingNumber);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsReleaseNo);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orders[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeString($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('loadingId');
		$xfer += $output->writeString($this->loadingId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carLicense');
		$xfer += $output->writeString($this->carLicense);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('loadingNumber');
		$xfer += $output->writeString($this->loadingNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsReleaseNo');
		$xfer += $output->writeString($this->customsReleaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtLoadingService_receiveOutLRInfo_args {
	
	static $_TSPEC;
	public $param = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\haitao\loading\osp\service\HtReceiveOutLoadingReleaseParam();
			$this->param->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('param');
		
		if (!is_object($this->param)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->param->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtLoadingService_sendLoadingDeclare_args {
	
	static $_TSPEC;
	public $instanceCode = null;
	public $nodeCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'instanceCode'
			),
			2 => array(
			'var' => 'nodeCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['instanceCode'])){
				
				$this->instanceCode = $vals['instanceCode'];
			}
			
			
			if (isset($vals['nodeCode'])){
				
				$this->nodeCode = $vals['nodeCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->instanceCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->nodeCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('instanceCode');
		$xfer += $output->writeString($this->instanceCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('nodeCode');
		$xfer += $output->writeString($this->nodeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtLoadingService_getOutRLHandleResult_result {
	
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
			
			
			$this->success = new \com\vip\haitao\loading\osp\service\OutRLHandleResult();
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




class HtLoadingService_healthCheck_result {
	
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




class HtLoadingService_receive3PcPreloading_result {
	
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
			
			
			$this->success = new \com\vip\haitao\loading\osp\service\HtPreLoading3PcResponse();
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




class HtLoadingService_receiveInLRInfo_result {
	
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
			
			
			$this->success = new \com\vip\haitao\loading\osp\service\CommonResponse();
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




class HtLoadingService_receiveOutLRInfo_result {
	
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
			
			
			$this->success = new \com\vip\haitao\loading\osp\service\PostResponse();
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




class HtLoadingService_sendLoadingDeclare_result {
	
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