<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\fcs;
interface MpInvoiceServiceIf{
	
	
	public function healthCheck();
	
	public function receiveMpInvoiceIssueResult(\com\vip\fcs\vei\service\MpInvoiceIssueResultRequestModel $pushMpInvoiceIssueResultRequestModel);
	
}

class _MpInvoiceServiceClient extends \Osp\Base\OspStub implements \vipapis\fcs\MpInvoiceServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.fcs.MpInvoiceService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\fcs\MpInvoiceService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\fcs\MpInvoiceService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveMpInvoiceIssueResult(\com\vip\fcs\vei\service\MpInvoiceIssueResultRequestModel $pushMpInvoiceIssueResultRequestModel){
		
		$this->send_receiveMpInvoiceIssueResult( $pushMpInvoiceIssueResultRequestModel);
		return $this->recv_receiveMpInvoiceIssueResult();
	}
	
	public function send_receiveMpInvoiceIssueResult(\com\vip\fcs\vei\service\MpInvoiceIssueResultRequestModel $pushMpInvoiceIssueResultRequestModel){
		
		$this->initInvocation("receiveMpInvoiceIssueResult");
		$args = new \vipapis\fcs\MpInvoiceService_receiveMpInvoiceIssueResult_args();
		
		$args->pushMpInvoiceIssueResultRequestModel = $pushMpInvoiceIssueResultRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_receiveMpInvoiceIssueResult(){
		
		$result = new \vipapis\fcs\MpInvoiceService_receiveMpInvoiceIssueResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class MpInvoiceService_healthCheck_args {
	
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




class MpInvoiceService_receiveMpInvoiceIssueResult_args {
	
	static $_TSPEC;
	public $pushMpInvoiceIssueResultRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pushMpInvoiceIssueResultRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pushMpInvoiceIssueResultRequestModel'])){
				
				$this->pushMpInvoiceIssueResultRequestModel = $vals['pushMpInvoiceIssueResultRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pushMpInvoiceIssueResultRequestModel = new \com\vip\fcs\vei\service\MpInvoiceIssueResultRequestModel();
			$this->pushMpInvoiceIssueResultRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pushMpInvoiceIssueResultRequestModel !== null) {
			
			$xfer += $output->writeFieldBegin('pushMpInvoiceIssueResultRequestModel');
			
			if (!is_object($this->pushMpInvoiceIssueResultRequestModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pushMpInvoiceIssueResultRequestModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MpInvoiceService_healthCheck_result {
	
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




class MpInvoiceService_receiveMpInvoiceIssueResult_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\MpInvoiceIssueResultResponseModel();
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