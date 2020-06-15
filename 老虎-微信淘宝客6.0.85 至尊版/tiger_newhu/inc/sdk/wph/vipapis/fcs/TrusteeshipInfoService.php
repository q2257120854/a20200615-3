<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\fcs;
interface TrusteeshipInfoServiceIf{
	
	
	public function createTrusteeshipInfo(\com\vip\fcs\vei\service\CreateTrusteeshipInfoRequestModel $createTrusteeshipInfoRequestModel);
	
	public function getTrusteeshipInfo(\com\vip\fcs\vei\service\GetTrusteeshipInfoRequestModel $getTrusteeshipInfoRequestModel);
	
	public function healthCheck();
	
	public function updateTrusteeshipInfo(\com\vip\fcs\vei\service\UpdateTrusteeshipInfoRequestModel $updateTrusteeshipInfoRequestModel);
	
}

class _TrusteeshipInfoServiceClient extends \Osp\Base\OspStub implements \vipapis\fcs\TrusteeshipInfoServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.fcs.TrusteeshipInfoService", "1.0.0");
	}
	
	
	public function createTrusteeshipInfo(\com\vip\fcs\vei\service\CreateTrusteeshipInfoRequestModel $createTrusteeshipInfoRequestModel){
		
		$this->send_createTrusteeshipInfo( $createTrusteeshipInfoRequestModel);
		return $this->recv_createTrusteeshipInfo();
	}
	
	public function send_createTrusteeshipInfo(\com\vip\fcs\vei\service\CreateTrusteeshipInfoRequestModel $createTrusteeshipInfoRequestModel){
		
		$this->initInvocation("createTrusteeshipInfo");
		$args = new \vipapis\fcs\TrusteeshipInfoService_createTrusteeshipInfo_args();
		
		$args->createTrusteeshipInfoRequestModel = $createTrusteeshipInfoRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_createTrusteeshipInfo(){
		
		$result = new \vipapis\fcs\TrusteeshipInfoService_createTrusteeshipInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTrusteeshipInfo(\com\vip\fcs\vei\service\GetTrusteeshipInfoRequestModel $getTrusteeshipInfoRequestModel){
		
		$this->send_getTrusteeshipInfo( $getTrusteeshipInfoRequestModel);
		return $this->recv_getTrusteeshipInfo();
	}
	
	public function send_getTrusteeshipInfo(\com\vip\fcs\vei\service\GetTrusteeshipInfoRequestModel $getTrusteeshipInfoRequestModel){
		
		$this->initInvocation("getTrusteeshipInfo");
		$args = new \vipapis\fcs\TrusteeshipInfoService_getTrusteeshipInfo_args();
		
		$args->getTrusteeshipInfoRequestModel = $getTrusteeshipInfoRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_getTrusteeshipInfo(){
		
		$result = new \vipapis\fcs\TrusteeshipInfoService_getTrusteeshipInfo_result();
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
		$args = new \vipapis\fcs\TrusteeshipInfoService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\fcs\TrusteeshipInfoService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateTrusteeshipInfo(\com\vip\fcs\vei\service\UpdateTrusteeshipInfoRequestModel $updateTrusteeshipInfoRequestModel){
		
		$this->send_updateTrusteeshipInfo( $updateTrusteeshipInfoRequestModel);
		return $this->recv_updateTrusteeshipInfo();
	}
	
	public function send_updateTrusteeshipInfo(\com\vip\fcs\vei\service\UpdateTrusteeshipInfoRequestModel $updateTrusteeshipInfoRequestModel){
		
		$this->initInvocation("updateTrusteeshipInfo");
		$args = new \vipapis\fcs\TrusteeshipInfoService_updateTrusteeshipInfo_args();
		
		$args->updateTrusteeshipInfoRequestModel = $updateTrusteeshipInfoRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_updateTrusteeshipInfo(){
		
		$result = new \vipapis\fcs\TrusteeshipInfoService_updateTrusteeshipInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TrusteeshipInfoService_createTrusteeshipInfo_args {
	
	static $_TSPEC;
	public $createTrusteeshipInfoRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createTrusteeshipInfoRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createTrusteeshipInfoRequestModel'])){
				
				$this->createTrusteeshipInfoRequestModel = $vals['createTrusteeshipInfoRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->createTrusteeshipInfoRequestModel = new \com\vip\fcs\vei\service\CreateTrusteeshipInfoRequestModel();
			$this->createTrusteeshipInfoRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->createTrusteeshipInfoRequestModel !== null) {
			
			$xfer += $output->writeFieldBegin('createTrusteeshipInfoRequestModel');
			
			if (!is_object($this->createTrusteeshipInfoRequestModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->createTrusteeshipInfoRequestModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TrusteeshipInfoService_getTrusteeshipInfo_args {
	
	static $_TSPEC;
	public $getTrusteeshipInfoRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getTrusteeshipInfoRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getTrusteeshipInfoRequestModel'])){
				
				$this->getTrusteeshipInfoRequestModel = $vals['getTrusteeshipInfoRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getTrusteeshipInfoRequestModel = new \com\vip\fcs\vei\service\GetTrusteeshipInfoRequestModel();
			$this->getTrusteeshipInfoRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getTrusteeshipInfoRequestModel !== null) {
			
			$xfer += $output->writeFieldBegin('getTrusteeshipInfoRequestModel');
			
			if (!is_object($this->getTrusteeshipInfoRequestModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getTrusteeshipInfoRequestModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TrusteeshipInfoService_healthCheck_args {
	
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




class TrusteeshipInfoService_updateTrusteeshipInfo_args {
	
	static $_TSPEC;
	public $updateTrusteeshipInfoRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateTrusteeshipInfoRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateTrusteeshipInfoRequestModel'])){
				
				$this->updateTrusteeshipInfoRequestModel = $vals['updateTrusteeshipInfoRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateTrusteeshipInfoRequestModel = new \com\vip\fcs\vei\service\UpdateTrusteeshipInfoRequestModel();
			$this->updateTrusteeshipInfoRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->updateTrusteeshipInfoRequestModel !== null) {
			
			$xfer += $output->writeFieldBegin('updateTrusteeshipInfoRequestModel');
			
			if (!is_object($this->updateTrusteeshipInfoRequestModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->updateTrusteeshipInfoRequestModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TrusteeshipInfoService_createTrusteeshipInfo_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\CreateTrusteeshipInfoResponseModel();
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




class TrusteeshipInfoService_getTrusteeshipInfo_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\GetTrusteeshipInfoResponseModel();
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




class TrusteeshipInfoService_healthCheck_result {
	
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




class TrusteeshipInfoService_updateTrusteeshipInfo_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\UpdateTrusteeshipInfoResponseModel();
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