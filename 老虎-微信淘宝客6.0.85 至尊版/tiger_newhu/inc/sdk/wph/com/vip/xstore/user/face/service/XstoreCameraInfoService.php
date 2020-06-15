<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;
interface XstoreCameraInfoServiceIf{
	
	
	public function batchDeleteCamera(\com\vip\xstore\user\face\service\XstoreCameraBatchDelParam $delParam);
	
	public function createCamera(\com\vip\xstore\user\face\service\XstoreCameraInfoModel $xstoreCameraInfoModel);
	
	public function deleteCamera(\com\vip\xstore\user\face\service\XstoreCameraDelParam $delParam);
	
	public function healthCheck();
	
	public function queryCameraList(\com\vip\xstore\user\face\service\XstoreCameraPageReqParam $pageReqParam);
	
	public function selectCameraStateLog(\com\vip\xstore\user\face\service\XstoreCameraStateLogReqParam $pageReqParam);
	
	public function updateCamera(\com\vip\xstore\user\face\service\XstoreCameraUpdateParam $updateParam);
	
	public function uploadCameraStateLog(\com\vip\xstore\user\face\service\XstoreCameraStateLogParam $xstoreCameraStateLogParam);
	
}

class _XstoreCameraInfoServiceClient extends \Osp\Base\OspStub implements \com\vip\xstore\user\face\service\XstoreCameraInfoServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.xstore.user.face.service.XstoreCameraInfoService", "1.0.0");
	}
	
	
	public function batchDeleteCamera(\com\vip\xstore\user\face\service\XstoreCameraBatchDelParam $delParam){
		
		$this->send_batchDeleteCamera( $delParam);
		return $this->recv_batchDeleteCamera();
	}
	
	public function send_batchDeleteCamera(\com\vip\xstore\user\face\service\XstoreCameraBatchDelParam $delParam){
		
		$this->initInvocation("batchDeleteCamera");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_batchDeleteCamera_args();
		
		$args->delParam = $delParam;
		
		$this->send_base($args);
	}
	
	public function recv_batchDeleteCamera(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_batchDeleteCamera_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createCamera(\com\vip\xstore\user\face\service\XstoreCameraInfoModel $xstoreCameraInfoModel){
		
		$this->send_createCamera( $xstoreCameraInfoModel);
		return $this->recv_createCamera();
	}
	
	public function send_createCamera(\com\vip\xstore\user\face\service\XstoreCameraInfoModel $xstoreCameraInfoModel){
		
		$this->initInvocation("createCamera");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_createCamera_args();
		
		$args->xstoreCameraInfoModel = $xstoreCameraInfoModel;
		
		$this->send_base($args);
	}
	
	public function recv_createCamera(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_createCamera_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteCamera(\com\vip\xstore\user\face\service\XstoreCameraDelParam $delParam){
		
		$this->send_deleteCamera( $delParam);
		return $this->recv_deleteCamera();
	}
	
	public function send_deleteCamera(\com\vip\xstore\user\face\service\XstoreCameraDelParam $delParam){
		
		$this->initInvocation("deleteCamera");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_deleteCamera_args();
		
		$args->delParam = $delParam;
		
		$this->send_base($args);
	}
	
	public function recv_deleteCamera(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_deleteCamera_result();
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
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryCameraList(\com\vip\xstore\user\face\service\XstoreCameraPageReqParam $pageReqParam){
		
		$this->send_queryCameraList( $pageReqParam);
		return $this->recv_queryCameraList();
	}
	
	public function send_queryCameraList(\com\vip\xstore\user\face\service\XstoreCameraPageReqParam $pageReqParam){
		
		$this->initInvocation("queryCameraList");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_queryCameraList_args();
		
		$args->pageReqParam = $pageReqParam;
		
		$this->send_base($args);
	}
	
	public function recv_queryCameraList(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_queryCameraList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function selectCameraStateLog(\com\vip\xstore\user\face\service\XstoreCameraStateLogReqParam $pageReqParam){
		
		$this->send_selectCameraStateLog( $pageReqParam);
		return $this->recv_selectCameraStateLog();
	}
	
	public function send_selectCameraStateLog(\com\vip\xstore\user\face\service\XstoreCameraStateLogReqParam $pageReqParam){
		
		$this->initInvocation("selectCameraStateLog");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_selectCameraStateLog_args();
		
		$args->pageReqParam = $pageReqParam;
		
		$this->send_base($args);
	}
	
	public function recv_selectCameraStateLog(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_selectCameraStateLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateCamera(\com\vip\xstore\user\face\service\XstoreCameraUpdateParam $updateParam){
		
		$this->send_updateCamera( $updateParam);
		return $this->recv_updateCamera();
	}
	
	public function send_updateCamera(\com\vip\xstore\user\face\service\XstoreCameraUpdateParam $updateParam){
		
		$this->initInvocation("updateCamera");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_updateCamera_args();
		
		$args->updateParam = $updateParam;
		
		$this->send_base($args);
	}
	
	public function recv_updateCamera(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_updateCamera_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadCameraStateLog(\com\vip\xstore\user\face\service\XstoreCameraStateLogParam $xstoreCameraStateLogParam){
		
		$this->send_uploadCameraStateLog( $xstoreCameraStateLogParam);
		return $this->recv_uploadCameraStateLog();
	}
	
	public function send_uploadCameraStateLog(\com\vip\xstore\user\face\service\XstoreCameraStateLogParam $xstoreCameraStateLogParam){
		
		$this->initInvocation("uploadCameraStateLog");
		$args = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_uploadCameraStateLog_args();
		
		$args->xstoreCameraStateLogParam = $xstoreCameraStateLogParam;
		
		$this->send_base($args);
	}
	
	public function recv_uploadCameraStateLog(){
		
		$result = new \com\vip\xstore\user\face\service\XstoreCameraInfoService_uploadCameraStateLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class XstoreCameraInfoService_batchDeleteCamera_args {
	
	static $_TSPEC;
	public $delParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'delParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['delParam'])){
				
				$this->delParam = $vals['delParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->delParam = new \com\vip\xstore\user\face\service\XstoreCameraBatchDelParam();
			$this->delParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('delParam');
		
		if (!is_object($this->delParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->delParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_createCamera_args {
	
	static $_TSPEC;
	public $xstoreCameraInfoModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'xstoreCameraInfoModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['xstoreCameraInfoModel'])){
				
				$this->xstoreCameraInfoModel = $vals['xstoreCameraInfoModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->xstoreCameraInfoModel = new \com\vip\xstore\user\face\service\XstoreCameraInfoModel();
			$this->xstoreCameraInfoModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('xstoreCameraInfoModel');
		
		if (!is_object($this->xstoreCameraInfoModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->xstoreCameraInfoModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_deleteCamera_args {
	
	static $_TSPEC;
	public $delParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'delParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['delParam'])){
				
				$this->delParam = $vals['delParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->delParam = new \com\vip\xstore\user\face\service\XstoreCameraDelParam();
			$this->delParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('delParam');
		
		if (!is_object($this->delParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->delParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_healthCheck_args {
	
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




class XstoreCameraInfoService_queryCameraList_args {
	
	static $_TSPEC;
	public $pageReqParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pageReqParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pageReqParam'])){
				
				$this->pageReqParam = $vals['pageReqParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pageReqParam = new \com\vip\xstore\user\face\service\XstoreCameraPageReqParam();
			$this->pageReqParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('pageReqParam');
		
		if (!is_object($this->pageReqParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageReqParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_selectCameraStateLog_args {
	
	static $_TSPEC;
	public $pageReqParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pageReqParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pageReqParam'])){
				
				$this->pageReqParam = $vals['pageReqParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pageReqParam = new \com\vip\xstore\user\face\service\XstoreCameraStateLogReqParam();
			$this->pageReqParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('pageReqParam');
		
		if (!is_object($this->pageReqParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pageReqParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_updateCamera_args {
	
	static $_TSPEC;
	public $updateParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateParam'])){
				
				$this->updateParam = $vals['updateParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateParam = new \com\vip\xstore\user\face\service\XstoreCameraUpdateParam();
			$this->updateParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('updateParam');
		
		if (!is_object($this->updateParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->updateParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_uploadCameraStateLog_args {
	
	static $_TSPEC;
	public $xstoreCameraStateLogParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'xstoreCameraStateLogParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['xstoreCameraStateLogParam'])){
				
				$this->xstoreCameraStateLogParam = $vals['xstoreCameraStateLogParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->xstoreCameraStateLogParam = new \com\vip\xstore\user\face\service\XstoreCameraStateLogParam();
			$this->xstoreCameraStateLogParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('xstoreCameraStateLogParam');
		
		if (!is_object($this->xstoreCameraStateLogParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->xstoreCameraStateLogParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_batchDeleteCamera_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_createCamera_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_deleteCamera_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_healthCheck_result {
	
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




class XstoreCameraInfoService_queryCameraList_result {
	
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
			
			
			$this->success = new \com\vip\xstore\user\face\service\XstoreCameraInfoListResult();
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




class XstoreCameraInfoService_selectCameraStateLog_result {
	
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
			
			
			$this->success = new \com\vip\xstore\user\face\service\XstoreCameraStateLogListResult();
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




class XstoreCameraInfoService_updateCamera_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class XstoreCameraInfoService_uploadCameraStateLog_result {
	
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
			
			
			$this->success = new \com\vip\xstore\user\face\service\XstoreCameraStateLogUploadResult();
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