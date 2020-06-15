<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\common\switcher;
interface AppSwitcherServiceIf{
	
	
	public function closeSwitcher( $domainName, $moduleName);
	
	public function createSwitcher( $domainName, $moduleName, $remark);
	
	public function healthCheck();
	
	public function insertOrUpdate(\com\vip\vop\common\switcher\AppSwitcherVo $switcherVo);
	
	public function isOpenSwither( $domainName, $moduleName);
	
	public function listSwitcher( $domainName, $moduleName, $page, $pageSize);
	
	public function openSwitcher( $domainName, $moduleName);
	
}

class _AppSwitcherServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\common\switcher\AppSwitcherServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.common.switcher.AppSwitcherService", "1.0.0");
	}
	
	
	public function closeSwitcher( $domainName, $moduleName){
		
		$this->send_closeSwitcher( $domainName, $moduleName);
		return $this->recv_closeSwitcher();
	}
	
	public function send_closeSwitcher( $domainName, $moduleName){
		
		$this->initInvocation("closeSwitcher");
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_closeSwitcher_args();
		
		$args->domainName = $domainName;
		
		$args->moduleName = $moduleName;
		
		$this->send_base($args);
	}
	
	public function recv_closeSwitcher(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_closeSwitcher_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSwitcher( $domainName, $moduleName, $remark){
		
		$this->send_createSwitcher( $domainName, $moduleName, $remark);
		return $this->recv_createSwitcher();
	}
	
	public function send_createSwitcher( $domainName, $moduleName, $remark){
		
		$this->initInvocation("createSwitcher");
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_createSwitcher_args();
		
		$args->domainName = $domainName;
		
		$args->moduleName = $moduleName;
		
		$args->remark = $remark;
		
		$this->send_base($args);
	}
	
	public function recv_createSwitcher(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_createSwitcher_result();
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
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function insertOrUpdate(\com\vip\vop\common\switcher\AppSwitcherVo $switcherVo){
		
		$this->send_insertOrUpdate( $switcherVo);
		return $this->recv_insertOrUpdate();
	}
	
	public function send_insertOrUpdate(\com\vip\vop\common\switcher\AppSwitcherVo $switcherVo){
		
		$this->initInvocation("insertOrUpdate");
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_insertOrUpdate_args();
		
		$args->switcherVo = $switcherVo;
		
		$this->send_base($args);
	}
	
	public function recv_insertOrUpdate(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_insertOrUpdate_result();
		$this->receive_base($result);
		
	}
	
	
	public function isOpenSwither( $domainName, $moduleName){
		
		$this->send_isOpenSwither( $domainName, $moduleName);
		return $this->recv_isOpenSwither();
	}
	
	public function send_isOpenSwither( $domainName, $moduleName){
		
		$this->initInvocation("isOpenSwither");
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_isOpenSwither_args();
		
		$args->domainName = $domainName;
		
		$args->moduleName = $moduleName;
		
		$this->send_base($args);
	}
	
	public function recv_isOpenSwither(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_isOpenSwither_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listSwitcher( $domainName, $moduleName, $page, $pageSize){
		
		$this->send_listSwitcher( $domainName, $moduleName, $page, $pageSize);
		return $this->recv_listSwitcher();
	}
	
	public function send_listSwitcher( $domainName, $moduleName, $page, $pageSize){
		
		$this->initInvocation("listSwitcher");
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_listSwitcher_args();
		
		$args->domainName = $domainName;
		
		$args->moduleName = $moduleName;
		
		$args->page = $page;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_listSwitcher(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_listSwitcher_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function openSwitcher( $domainName, $moduleName){
		
		$this->send_openSwitcher( $domainName, $moduleName);
		return $this->recv_openSwitcher();
	}
	
	public function send_openSwitcher( $domainName, $moduleName){
		
		$this->initInvocation("openSwitcher");
		$args = new \com\vip\vop\common\switcher\AppSwitcherService_openSwitcher_args();
		
		$args->domainName = $domainName;
		
		$args->moduleName = $moduleName;
		
		$this->send_base($args);
	}
	
	public function recv_openSwitcher(){
		
		$result = new \com\vip\vop\common\switcher\AppSwitcherService_openSwitcher_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class AppSwitcherService_closeSwitcher_args {
	
	static $_TSPEC;
	public $domainName = null;
	public $moduleName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domainName'
			),
			2 => array(
			'var' => 'moduleName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domainName'])){
				
				$this->domainName = $vals['domainName'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->domainName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->moduleName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('domainName');
		$xfer += $output->writeString($this->domainName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('moduleName');
		$xfer += $output->writeString($this->moduleName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_createSwitcher_args {
	
	static $_TSPEC;
	public $domainName = null;
	public $moduleName = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domainName'
			),
			2 => array(
			'var' => 'moduleName'
			),
			3 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domainName'])){
				
				$this->domainName = $vals['domainName'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->domainName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->moduleName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->remark);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('domainName');
		$xfer += $output->writeString($this->domainName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('moduleName');
		$xfer += $output->writeString($this->moduleName);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_healthCheck_args {
	
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




class AppSwitcherService_insertOrUpdate_args {
	
	static $_TSPEC;
	public $switcherVo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'switcherVo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['switcherVo'])){
				
				$this->switcherVo = $vals['switcherVo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->switcherVo = new \com\vip\vop\common\switcher\AppSwitcherVo();
			$this->switcherVo->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('switcherVo');
		
		if (!is_object($this->switcherVo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->switcherVo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_isOpenSwither_args {
	
	static $_TSPEC;
	public $domainName = null;
	public $moduleName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domainName'
			),
			2 => array(
			'var' => 'moduleName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domainName'])){
				
				$this->domainName = $vals['domainName'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->domainName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->moduleName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('domainName');
		$xfer += $output->writeString($this->domainName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('moduleName');
		$xfer += $output->writeString($this->moduleName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_listSwitcher_args {
	
	static $_TSPEC;
	public $domainName = null;
	public $moduleName = null;
	public $page = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domainName'
			),
			2 => array(
			'var' => 'moduleName'
			),
			3 => array(
			'var' => 'page'
			),
			4 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domainName'])){
				
				$this->domainName = $vals['domainName'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->domainName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->moduleName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->domainName !== null) {
			
			$xfer += $output->writeFieldBegin('domainName');
			$xfer += $output->writeString($this->domainName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moduleName !== null) {
			
			$xfer += $output->writeFieldBegin('moduleName');
			$xfer += $output->writeString($this->moduleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_openSwitcher_args {
	
	static $_TSPEC;
	public $domainName = null;
	public $moduleName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domainName'
			),
			2 => array(
			'var' => 'moduleName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domainName'])){
				
				$this->domainName = $vals['domainName'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->domainName);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->moduleName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('domainName');
		$xfer += $output->writeString($this->domainName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('moduleName');
		$xfer += $output->writeString($this->moduleName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_closeSwitcher_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_createSwitcher_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_healthCheck_result {
	
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




class AppSwitcherService_insertOrUpdate_result {
	
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




class AppSwitcherService_isOpenSwither_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AppSwitcherService_listSwitcher_result {
	
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
			
			
			$this->success = new \com\vip\vop\common\switcher\ListSwitcherResponse();
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




class AppSwitcherService_openSwitcher_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>