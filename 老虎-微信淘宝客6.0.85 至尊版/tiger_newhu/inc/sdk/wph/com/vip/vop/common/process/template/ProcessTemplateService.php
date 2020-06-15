<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\common\process\template;
interface ProcessTemplateServiceIf{
	
	
	public function createProcessTemplate(\com\vip\vop\common\process\template\CreateProcessTemplateReq $createProcessTemplateReq);
	
	public function healthCheck();
	
	public function updateProcessTemplate(\com\vip\vop\common\process\template\UpdateProcessTemplateReq $updateProcessTemplateReq);
	
}

class _ProcessTemplateServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\common\process\template\ProcessTemplateServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.common.process.template.ProcessTemplateService", "1.0.0");
	}
	
	
	public function createProcessTemplate(\com\vip\vop\common\process\template\CreateProcessTemplateReq $createProcessTemplateReq){
		
		$this->send_createProcessTemplate( $createProcessTemplateReq);
		return $this->recv_createProcessTemplate();
	}
	
	public function send_createProcessTemplate(\com\vip\vop\common\process\template\CreateProcessTemplateReq $createProcessTemplateReq){
		
		$this->initInvocation("createProcessTemplate");
		$args = new \com\vip\vop\common\process\template\ProcessTemplateService_createProcessTemplate_args();
		
		$args->createProcessTemplateReq = $createProcessTemplateReq;
		
		$this->send_base($args);
	}
	
	public function recv_createProcessTemplate(){
		
		$result = new \com\vip\vop\common\process\template\ProcessTemplateService_createProcessTemplate_result();
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
		$args = new \com\vip\vop\common\process\template\ProcessTemplateService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\common\process\template\ProcessTemplateService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateProcessTemplate(\com\vip\vop\common\process\template\UpdateProcessTemplateReq $updateProcessTemplateReq){
		
		$this->send_updateProcessTemplate( $updateProcessTemplateReq);
		return $this->recv_updateProcessTemplate();
	}
	
	public function send_updateProcessTemplate(\com\vip\vop\common\process\template\UpdateProcessTemplateReq $updateProcessTemplateReq){
		
		$this->initInvocation("updateProcessTemplate");
		$args = new \com\vip\vop\common\process\template\ProcessTemplateService_updateProcessTemplate_args();
		
		$args->updateProcessTemplateReq = $updateProcessTemplateReq;
		
		$this->send_base($args);
	}
	
	public function recv_updateProcessTemplate(){
		
		$result = new \com\vip\vop\common\process\template\ProcessTemplateService_updateProcessTemplate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProcessTemplateService_createProcessTemplate_args {
	
	static $_TSPEC;
	public $createProcessTemplateReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createProcessTemplateReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createProcessTemplateReq'])){
				
				$this->createProcessTemplateReq = $vals['createProcessTemplateReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->createProcessTemplateReq = new \com\vip\vop\common\process\template\CreateProcessTemplateReq();
			$this->createProcessTemplateReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->createProcessTemplateReq !== null) {
			
			$xfer += $output->writeFieldBegin('createProcessTemplateReq');
			
			if (!is_object($this->createProcessTemplateReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->createProcessTemplateReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProcessTemplateService_healthCheck_args {
	
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




class ProcessTemplateService_updateProcessTemplate_args {
	
	static $_TSPEC;
	public $updateProcessTemplateReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateProcessTemplateReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateProcessTemplateReq'])){
				
				$this->updateProcessTemplateReq = $vals['updateProcessTemplateReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateProcessTemplateReq = new \com\vip\vop\common\process\template\UpdateProcessTemplateReq();
			$this->updateProcessTemplateReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->updateProcessTemplateReq !== null) {
			
			$xfer += $output->writeFieldBegin('updateProcessTemplateReq');
			
			if (!is_object($this->updateProcessTemplateReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->updateProcessTemplateReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProcessTemplateService_createProcessTemplate_result {
	
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
			
			
			$this->success = new \com\vip\vop\common\process\template\CreateProcessTemplateResp();
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




class ProcessTemplateService_healthCheck_result {
	
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




class ProcessTemplateService_updateProcessTemplate_result {
	
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
			
			
			$this->success = new \com\vip\vop\common\process\template\UpdateProcessTemplateResp();
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