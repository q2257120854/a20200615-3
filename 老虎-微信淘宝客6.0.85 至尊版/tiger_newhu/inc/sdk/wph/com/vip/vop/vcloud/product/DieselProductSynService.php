<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;
interface DieselProductSynServiceIf{
	
	
	public function dataMigration( $bucket, $key);
	
	public function download( $partnerId);
	
	public function healthCheck();
	
	public function processImageItem();
	
	public function processMasterItem();
	
	public function pushProductToVdg();
	
	public function replyDiesel();
	
	public function validateProduct();
	
	public function validateProductByConfig( $partnerId);
	
}

class _DieselProductSynServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\product\DieselProductSynServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.product.DieselProductSynService", "1.0.0");
	}
	
	
	public function dataMigration( $bucket, $key){
		
		$this->send_dataMigration( $bucket, $key);
		return $this->recv_dataMigration();
	}
	
	public function send_dataMigration( $bucket, $key){
		
		$this->initInvocation("dataMigration");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_dataMigration_args();
		
		$args->bucket = $bucket;
		
		$args->key = $key;
		
		$this->send_base($args);
	}
	
	public function recv_dataMigration(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_dataMigration_result();
		$this->receive_base($result);
		
	}
	
	
	public function download( $partnerId){
		
		$this->send_download( $partnerId);
		return $this->recv_download();
	}
	
	public function send_download( $partnerId){
		
		$this->initInvocation("download");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_download_args();
		
		$args->partnerId = $partnerId;
		
		$this->send_base($args);
	}
	
	public function recv_download(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_download_result();
		$this->receive_base($result);
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function processImageItem(){
		
		$this->send_processImageItem();
		return $this->recv_processImageItem();
	}
	
	public function send_processImageItem(){
		
		$this->initInvocation("processImageItem");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_processImageItem_args();
		
		$this->send_base($args);
	}
	
	public function recv_processImageItem(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_processImageItem_result();
		$this->receive_base($result);
		
	}
	
	
	public function processMasterItem(){
		
		$this->send_processMasterItem();
		return $this->recv_processMasterItem();
	}
	
	public function send_processMasterItem(){
		
		$this->initInvocation("processMasterItem");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_processMasterItem_args();
		
		$this->send_base($args);
	}
	
	public function recv_processMasterItem(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_processMasterItem_result();
		$this->receive_base($result);
		
	}
	
	
	public function pushProductToVdg(){
		
		$this->send_pushProductToVdg();
		return $this->recv_pushProductToVdg();
	}
	
	public function send_pushProductToVdg(){
		
		$this->initInvocation("pushProductToVdg");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_pushProductToVdg_args();
		
		$this->send_base($args);
	}
	
	public function recv_pushProductToVdg(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_pushProductToVdg_result();
		$this->receive_base($result);
		
	}
	
	
	public function replyDiesel(){
		
		$this->send_replyDiesel();
		return $this->recv_replyDiesel();
	}
	
	public function send_replyDiesel(){
		
		$this->initInvocation("replyDiesel");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_replyDiesel_args();
		
		$this->send_base($args);
	}
	
	public function recv_replyDiesel(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_replyDiesel_result();
		$this->receive_base($result);
		
	}
	
	
	public function validateProduct(){
		
		$this->send_validateProduct();
		return $this->recv_validateProduct();
	}
	
	public function send_validateProduct(){
		
		$this->initInvocation("validateProduct");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_validateProduct_args();
		
		$this->send_base($args);
	}
	
	public function recv_validateProduct(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_validateProduct_result();
		$this->receive_base($result);
		
	}
	
	
	public function validateProductByConfig( $partnerId){
		
		$this->send_validateProductByConfig( $partnerId);
		return $this->recv_validateProductByConfig();
	}
	
	public function send_validateProductByConfig( $partnerId){
		
		$this->initInvocation("validateProductByConfig");
		$args = new \com\vip\vop\vcloud\product\DieselProductSynService_validateProductByConfig_args();
		
		$args->partnerId = $partnerId;
		
		$this->send_base($args);
	}
	
	public function recv_validateProductByConfig(){
		
		$result = new \com\vip\vop\vcloud\product\DieselProductSynService_validateProductByConfig_result();
		$this->receive_base($result);
		
	}
	
	
}




class DieselProductSynService_dataMigration_args {
	
	static $_TSPEC;
	public $bucket = null;
	public $key = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bucket'
			),
			2 => array(
			'var' => 'key'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bucket'])){
				
				$this->bucket = $vals['bucket'];
			}
			
			
			if (isset($vals['key'])){
				
				$this->key = $vals['key'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->bucket);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->key);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('bucket');
		$xfer += $output->writeString($this->bucket);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('key');
		$xfer += $output->writeString($this->key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DieselProductSynService_download_args {
	
	static $_TSPEC;
	public $partnerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DieselProductSynService_healthCheck_args {
	
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




class DieselProductSynService_processImageItem_args {
	
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




class DieselProductSynService_processMasterItem_args {
	
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




class DieselProductSynService_pushProductToVdg_args {
	
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




class DieselProductSynService_replyDiesel_args {
	
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




class DieselProductSynService_validateProduct_args {
	
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




class DieselProductSynService_validateProductByConfig_args {
	
	static $_TSPEC;
	public $partnerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DieselProductSynService_dataMigration_result {
	
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




class DieselProductSynService_download_result {
	
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




class DieselProductSynService_healthCheck_result {
	
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




class DieselProductSynService_processImageItem_result {
	
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




class DieselProductSynService_processMasterItem_result {
	
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




class DieselProductSynService_pushProductToVdg_result {
	
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




class DieselProductSynService_replyDiesel_result {
	
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




class DieselProductSynService_validateProduct_result {
	
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




class DieselProductSynService_validateProductByConfig_result {
	
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