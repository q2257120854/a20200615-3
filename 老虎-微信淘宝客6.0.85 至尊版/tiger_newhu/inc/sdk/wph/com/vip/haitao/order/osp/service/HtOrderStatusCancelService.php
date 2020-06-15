<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\order\osp\service;
interface HtOrderStatusCancelServiceIf{
	
	
	public function checkOrderStatus( $carrierCode, $orderSnList);
	
	public function create(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel);
	
	public function createSelective(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel);
	
	public function deleteByPrimaryKey( $id);
	
	public function findByOrderSn( $orderSn);
	
	public function findByPrimaryKey( $id);
	
	public function getCancelledOrderList( $carrierCode, $customsCode, $num);
	
	public function healthCheck();
	
	public function selectCount(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel);
	
	public function updateByOrderSn( $orderSn, $takeStatus);
	
	public function updateByPrimaryKey(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel);
	
	public function updateByPrimaryKeySelective(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel);
	
}

class _HtOrderStatusCancelServiceClient extends \Osp\Base\OspStub implements \com\vip\haitao\order\osp\service\HtOrderStatusCancelServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.haitao.order.osp.service.HtOrderStatusCancelService", "1.0.0");
	}
	
	
	public function checkOrderStatus( $carrierCode, $orderSnList){
		
		$this->send_checkOrderStatus( $carrierCode, $orderSnList);
		return $this->recv_checkOrderStatus();
	}
	
	public function send_checkOrderStatus( $carrierCode, $orderSnList){
		
		$this->initInvocation("checkOrderStatus");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_checkOrderStatus_args();
		
		$args->carrierCode = $carrierCode;
		
		$args->orderSnList = $orderSnList;
		
		$this->send_base($args);
	}
	
	public function recv_checkOrderStatus(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_checkOrderStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function create(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->send_create( $htOrderStatusCancelModel);
		return $this->recv_create();
	}
	
	public function send_create(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->initInvocation("create");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_create_args();
		
		$args->htOrderStatusCancelModel = $htOrderStatusCancelModel;
		
		$this->send_base($args);
	}
	
	public function recv_create(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_create_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createSelective(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->send_createSelective( $htOrderStatusCancelModel);
		return $this->recv_createSelective();
	}
	
	public function send_createSelective(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->initInvocation("createSelective");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_createSelective_args();
		
		$args->htOrderStatusCancelModel = $htOrderStatusCancelModel;
		
		$this->send_base($args);
	}
	
	public function recv_createSelective(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_createSelective_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteByPrimaryKey( $id){
		
		$this->send_deleteByPrimaryKey( $id);
		return $this->recv_deleteByPrimaryKey();
	}
	
	public function send_deleteByPrimaryKey( $id){
		
		$this->initInvocation("deleteByPrimaryKey");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_deleteByPrimaryKey_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_deleteByPrimaryKey(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_deleteByPrimaryKey_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findByOrderSn( $orderSn){
		
		$this->send_findByOrderSn( $orderSn);
		return $this->recv_findByOrderSn();
	}
	
	public function send_findByOrderSn( $orderSn){
		
		$this->initInvocation("findByOrderSn");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_findByOrderSn_args();
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_findByOrderSn(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_findByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findByPrimaryKey( $id){
		
		$this->send_findByPrimaryKey( $id);
		return $this->recv_findByPrimaryKey();
	}
	
	public function send_findByPrimaryKey( $id){
		
		$this->initInvocation("findByPrimaryKey");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_findByPrimaryKey_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_findByPrimaryKey(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_findByPrimaryKey_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCancelledOrderList( $carrierCode, $customsCode, $num){
		
		$this->send_getCancelledOrderList( $carrierCode, $customsCode, $num);
		return $this->recv_getCancelledOrderList();
	}
	
	public function send_getCancelledOrderList( $carrierCode, $customsCode, $num){
		
		$this->initInvocation("getCancelledOrderList");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_getCancelledOrderList_args();
		
		$args->carrierCode = $carrierCode;
		
		$args->customsCode = $customsCode;
		
		$args->num = $num;
		
		$this->send_base($args);
	}
	
	public function recv_getCancelledOrderList(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_getCancelledOrderList_result();
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
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function selectCount(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->send_selectCount( $htOrderStatusCancelModel);
		return $this->recv_selectCount();
	}
	
	public function send_selectCount(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->initInvocation("selectCount");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_selectCount_args();
		
		$args->htOrderStatusCancelModel = $htOrderStatusCancelModel;
		
		$this->send_base($args);
	}
	
	public function recv_selectCount(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_selectCount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateByOrderSn( $orderSn, $takeStatus){
		
		$this->send_updateByOrderSn( $orderSn, $takeStatus);
		return $this->recv_updateByOrderSn();
	}
	
	public function send_updateByOrderSn( $orderSn, $takeStatus){
		
		$this->initInvocation("updateByOrderSn");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_updateByOrderSn_args();
		
		$args->orderSn = $orderSn;
		
		$args->takeStatus = $takeStatus;
		
		$this->send_base($args);
	}
	
	public function recv_updateByOrderSn(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_updateByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateByPrimaryKey(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->send_updateByPrimaryKey( $htOrderStatusCancelModel);
		return $this->recv_updateByPrimaryKey();
	}
	
	public function send_updateByPrimaryKey(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->initInvocation("updateByPrimaryKey");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_updateByPrimaryKey_args();
		
		$args->htOrderStatusCancelModel = $htOrderStatusCancelModel;
		
		$this->send_base($args);
	}
	
	public function recv_updateByPrimaryKey(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_updateByPrimaryKey_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateByPrimaryKeySelective(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->send_updateByPrimaryKeySelective( $htOrderStatusCancelModel);
		return $this->recv_updateByPrimaryKeySelective();
	}
	
	public function send_updateByPrimaryKeySelective(\com\vip\haitao\order\osp\service\HtOrderStatusCancelModel $htOrderStatusCancelModel){
		
		$this->initInvocation("updateByPrimaryKeySelective");
		$args = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_updateByPrimaryKeySelective_args();
		
		$args->htOrderStatusCancelModel = $htOrderStatusCancelModel;
		
		$this->send_base($args);
	}
	
	public function recv_updateByPrimaryKeySelective(){
		
		$result = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelService_updateByPrimaryKeySelective_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtOrderStatusCancelService_checkOrderStatus_args {
	
	static $_TSPEC;
	public $carrierCode = null;
	public $orderSnList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierCode'
			),
			2 => array(
			'var' => 'orderSnList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carrierCode);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orderSnList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orderSnList[$_size0++] = $elem0;
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
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSnList !== null) {
			
			$xfer += $output->writeFieldBegin('orderSnList');
			
			if (!is_array($this->orderSnList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderSnList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_create_args {
	
	static $_TSPEC;
	public $htOrderStatusCancelModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htOrderStatusCancelModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htOrderStatusCancelModel'])){
				
				$this->htOrderStatusCancelModel = $vals['htOrderStatusCancelModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htOrderStatusCancelModel = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
			$this->htOrderStatusCancelModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htOrderStatusCancelModel !== null) {
			
			$xfer += $output->writeFieldBegin('htOrderStatusCancelModel');
			
			if (!is_object($this->htOrderStatusCancelModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->htOrderStatusCancelModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_createSelective_args {
	
	static $_TSPEC;
	public $htOrderStatusCancelModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htOrderStatusCancelModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htOrderStatusCancelModel'])){
				
				$this->htOrderStatusCancelModel = $vals['htOrderStatusCancelModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htOrderStatusCancelModel = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
			$this->htOrderStatusCancelModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htOrderStatusCancelModel !== null) {
			
			$xfer += $output->writeFieldBegin('htOrderStatusCancelModel');
			
			if (!is_object($this->htOrderStatusCancelModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->htOrderStatusCancelModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_deleteByPrimaryKey_args {
	
	static $_TSPEC;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_findByOrderSn_args {
	
	static $_TSPEC;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_findByPrimaryKey_args {
	
	static $_TSPEC;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_getCancelledOrderList_args {
	
	static $_TSPEC;
	public $carrierCode = null;
	public $customsCode = null;
	public $num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierCode'
			),
			2 => array(
			'var' => 'customsCode'
			),
			3 => array(
			'var' => 'num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carrierCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsCode !== null) {
			
			$xfer += $output->writeFieldBegin('customsCode');
			$xfer += $output->writeString($this->customsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_healthCheck_args {
	
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




class HtOrderStatusCancelService_selectCount_args {
	
	static $_TSPEC;
	public $htOrderStatusCancelModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htOrderStatusCancelModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htOrderStatusCancelModel'])){
				
				$this->htOrderStatusCancelModel = $vals['htOrderStatusCancelModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htOrderStatusCancelModel = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
			$this->htOrderStatusCancelModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htOrderStatusCancelModel !== null) {
			
			$xfer += $output->writeFieldBegin('htOrderStatusCancelModel');
			
			if (!is_object($this->htOrderStatusCancelModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->htOrderStatusCancelModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_updateByOrderSn_args {
	
	static $_TSPEC;
	public $orderSn = null;
	public $takeStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'takeStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['takeStatus'])){
				
				$this->takeStatus = $vals['takeStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->takeStatus); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->takeStatus !== null) {
			
			$xfer += $output->writeFieldBegin('takeStatus');
			$xfer += $output->writeI32($this->takeStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_updateByPrimaryKey_args {
	
	static $_TSPEC;
	public $htOrderStatusCancelModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htOrderStatusCancelModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htOrderStatusCancelModel'])){
				
				$this->htOrderStatusCancelModel = $vals['htOrderStatusCancelModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htOrderStatusCancelModel = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
			$this->htOrderStatusCancelModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htOrderStatusCancelModel !== null) {
			
			$xfer += $output->writeFieldBegin('htOrderStatusCancelModel');
			
			if (!is_object($this->htOrderStatusCancelModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->htOrderStatusCancelModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_updateByPrimaryKeySelective_args {
	
	static $_TSPEC;
	public $htOrderStatusCancelModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'htOrderStatusCancelModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['htOrderStatusCancelModel'])){
				
				$this->htOrderStatusCancelModel = $vals['htOrderStatusCancelModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->htOrderStatusCancelModel = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
			$this->htOrderStatusCancelModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->htOrderStatusCancelModel !== null) {
			
			$xfer += $output->writeFieldBegin('htOrderStatusCancelModel');
			
			if (!is_object($this->htOrderStatusCancelModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->htOrderStatusCancelModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_checkOrderStatus_result {
	
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
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->success[$_size0++] = $elem0;
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_create_result {
	
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




class HtOrderStatusCancelService_createSelective_result {
	
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




class HtOrderStatusCancelService_deleteByPrimaryKey_result {
	
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




class HtOrderStatusCancelService_findByOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
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




class HtOrderStatusCancelService_findByPrimaryKey_result {
	
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
			
			
			$this->success = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelModel();
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




class HtOrderStatusCancelService_getCancelledOrderList_result {
	
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
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\haitao\order\osp\service\HtOrderStatusCancelFetchListModel();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtOrderStatusCancelService_healthCheck_result {
	
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




class HtOrderStatusCancelService_selectCount_result {
	
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




class HtOrderStatusCancelService_updateByOrderSn_result {
	
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




class HtOrderStatusCancelService_updateByPrimaryKey_result {
	
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




class HtOrderStatusCancelService_updateByPrimaryKeySelective_result {
	
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




?>