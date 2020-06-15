<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\ezr;
interface ChannelEzrServiceIf{
	
	
	public function closePCStore( $phoneNo, $vendorCode);
	
	public function createPCStore( $phoneNo, $vendorCode, $storeName);
	
	public function healthCheck();
	
}

class _ChannelEzrServiceClient extends \Osp\Base\OspStub implements \vipapis\ezr\ChannelEzrServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.ezr.ChannelEzrService", "1.0.0");
	}
	
	
	public function closePCStore( $phoneNo, $vendorCode){
		
		$this->send_closePCStore( $phoneNo, $vendorCode);
		return $this->recv_closePCStore();
	}
	
	public function send_closePCStore( $phoneNo, $vendorCode){
		
		$this->initInvocation("closePCStore");
		$args = new \vipapis\ezr\ChannelEzrService_closePCStore_args();
		
		$args->phoneNo = $phoneNo;
		
		$args->vendorCode = $vendorCode;
		
		$this->send_base($args);
	}
	
	public function recv_closePCStore(){
		
		$result = new \vipapis\ezr\ChannelEzrService_closePCStore_result();
		$this->receive_base($result);
		
	}
	
	
	public function createPCStore( $phoneNo, $vendorCode, $storeName){
		
		$this->send_createPCStore( $phoneNo, $vendorCode, $storeName);
		return $this->recv_createPCStore();
	}
	
	public function send_createPCStore( $phoneNo, $vendorCode, $storeName){
		
		$this->initInvocation("createPCStore");
		$args = new \vipapis\ezr\ChannelEzrService_createPCStore_args();
		
		$args->phoneNo = $phoneNo;
		
		$args->vendorCode = $vendorCode;
		
		$args->storeName = $storeName;
		
		$this->send_base($args);
	}
	
	public function recv_createPCStore(){
		
		$result = new \vipapis\ezr\ChannelEzrService_createPCStore_result();
		$this->receive_base($result);
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\ezr\ChannelEzrService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\ezr\ChannelEzrService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ChannelEzrService_closePCStore_args {
	
	static $_TSPEC;
	public $phoneNo = null;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'phoneNo'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['phoneNo'])){
				
				$this->phoneNo = $vals['phoneNo'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->phoneNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendorCode); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('phoneNo');
		$xfer += $output->writeString($this->phoneNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeI64($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ChannelEzrService_createPCStore_args {
	
	static $_TSPEC;
	public $phoneNo = null;
	public $vendorCode = null;
	public $storeName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'phoneNo'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'storeName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['phoneNo'])){
				
				$this->phoneNo = $vals['phoneNo'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['storeName'])){
				
				$this->storeName = $vals['storeName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->phoneNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendorCode); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storeName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('phoneNo');
		$xfer += $output->writeString($this->phoneNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeI64($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeName');
		$xfer += $output->writeString($this->storeName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ChannelEzrService_healthCheck_args {
	
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




class ChannelEzrService_closePCStore_result {
	
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




class ChannelEzrService_createPCStore_result {
	
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




class ChannelEzrService_healthCheck_result {
	
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