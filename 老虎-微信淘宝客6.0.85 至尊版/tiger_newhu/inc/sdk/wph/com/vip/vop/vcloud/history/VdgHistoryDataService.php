<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\history;
interface VdgHistoryDataServiceIf{
	
	
	public function healthCheck();
	
	public function pullHistoryOrders( $channelId, $partnerId, $orderSn, $beginTime, $maxId);
	
	public function synHistoricProductAndPrice( $bucket, $key);
	
}

class _VdgHistoryDataServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\history\VdgHistoryDataServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.history.VdgHistoryDataService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\history\VdgHistoryDataService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\history\VdgHistoryDataService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pullHistoryOrders( $channelId, $partnerId, $orderSn, $beginTime, $maxId){
		
		$this->send_pullHistoryOrders( $channelId, $partnerId, $orderSn, $beginTime, $maxId);
		return $this->recv_pullHistoryOrders();
	}
	
	public function send_pullHistoryOrders( $channelId, $partnerId, $orderSn, $beginTime, $maxId){
		
		$this->initInvocation("pullHistoryOrders");
		$args = new \com\vip\vop\vcloud\history\VdgHistoryDataService_pullHistoryOrders_args();
		
		$args->channelId = $channelId;
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->beginTime = $beginTime;
		
		$args->maxId = $maxId;
		
		$this->send_base($args);
	}
	
	public function recv_pullHistoryOrders(){
		
		$result = new \com\vip\vop\vcloud\history\VdgHistoryDataService_pullHistoryOrders_result();
		$this->receive_base($result);
		
	}
	
	
	public function synHistoricProductAndPrice( $bucket, $key){
		
		$this->send_synHistoricProductAndPrice( $bucket, $key);
		return $this->recv_synHistoricProductAndPrice();
	}
	
	public function send_synHistoricProductAndPrice( $bucket, $key){
		
		$this->initInvocation("synHistoricProductAndPrice");
		$args = new \com\vip\vop\vcloud\history\VdgHistoryDataService_synHistoricProductAndPrice_args();
		
		$args->bucket = $bucket;
		
		$args->key = $key;
		
		$this->send_base($args);
	}
	
	public function recv_synHistoricProductAndPrice(){
		
		$result = new \com\vip\vop\vcloud\history\VdgHistoryDataService_synHistoricProductAndPrice_result();
		$this->receive_base($result);
		
	}
	
	
}




class VdgHistoryDataService_healthCheck_args {
	
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




class VdgHistoryDataService_pullHistoryOrders_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $partnerId = null;
	public $orderSn = null;
	public $beginTime = null;
	public $maxId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'partnerId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'beginTime'
			),
			5 => array(
			'var' => 'maxId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['maxId'])){
				
				$this->maxId = $vals['maxId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->beginTime);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->maxId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->beginTime !== null) {
			
			$xfer += $output->writeFieldBegin('beginTime');
			$xfer += $output->writeI64($this->beginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('maxId');
		$xfer += $output->writeI64($this->maxId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VdgHistoryDataService_synHistoricProductAndPrice_args {
	
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




class VdgHistoryDataService_healthCheck_result {
	
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




class VdgHistoryDataService_pullHistoryOrders_result {
	
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




class VdgHistoryDataService_synHistoricProductAndPrice_result {
	
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