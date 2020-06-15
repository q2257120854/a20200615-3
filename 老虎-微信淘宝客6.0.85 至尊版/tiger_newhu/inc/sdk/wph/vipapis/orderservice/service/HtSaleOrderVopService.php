<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\orderservice\service;
interface HtSaleOrderVopServiceIf{
	
	
	public function feedbackMpOrder( $requestData);
	
	public function findOrderResultByParams( $warehouse, $orderSn, $num);
	
	public function findOrderResultModelByParams( $warehouse, $orderSn, $num);
	
	public function getMpOrder( $requestData);
	
	public function getSaleOrderCancellation( $carrierCode, $customsCode, $num);
	
	public function getSaleOrderList( $carriercode, $orderSn, $num, $customsCode);
	
	public function getSaleOrderListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType);
	
	public function getSaleOrderModelList( $carriercode, $orderSn, $num, $customsCode);
	
	public function getSaleOrderModelListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType);
	
	public function healthCheck();
	
	public function sendDeclareResult( $requestData);
	
	public function updateCancelOrderStatus( $carriercode,\com\vip\haitao\orderservice\service\HtSaleOrderCancellationCallbackResult $resultList, $isUpdateStatus);
	
	public function updateSendChbOrderStatusByOrderSn( $carriercode, $orderSn, $customsCode);
	
	public function updateSendOrderStatusByOrderSn( $warehouse, $orderSn);
	
}

class _HtSaleOrderVopServiceClient extends \Osp\Base\OspStub implements \vipapis\orderservice\service\HtSaleOrderVopServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.orderservice.service.HtSaleOrderVopService", "1.0.0");
	}
	
	
	public function feedbackMpOrder( $requestData){
		
		$this->send_feedbackMpOrder( $requestData);
		return $this->recv_feedbackMpOrder();
	}
	
	public function send_feedbackMpOrder( $requestData){
		
		$this->initInvocation("feedbackMpOrder");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_feedbackMpOrder_args();
		
		$args->requestData = $requestData;
		
		$this->send_base($args);
	}
	
	public function recv_feedbackMpOrder(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_feedbackMpOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findOrderResultByParams( $warehouse, $orderSn, $num){
		
		$this->send_findOrderResultByParams( $warehouse, $orderSn, $num);
		return $this->recv_findOrderResultByParams();
	}
	
	public function send_findOrderResultByParams( $warehouse, $orderSn, $num){
		
		$this->initInvocation("findOrderResultByParams");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_findOrderResultByParams_args();
		
		$args->warehouse = $warehouse;
		
		$args->orderSn = $orderSn;
		
		$args->num = $num;
		
		$this->send_base($args);
	}
	
	public function recv_findOrderResultByParams(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_findOrderResultByParams_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findOrderResultModelByParams( $warehouse, $orderSn, $num){
		
		$this->send_findOrderResultModelByParams( $warehouse, $orderSn, $num);
		return $this->recv_findOrderResultModelByParams();
	}
	
	public function send_findOrderResultModelByParams( $warehouse, $orderSn, $num){
		
		$this->initInvocation("findOrderResultModelByParams");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_findOrderResultModelByParams_args();
		
		$args->warehouse = $warehouse;
		
		$args->orderSn = $orderSn;
		
		$args->num = $num;
		
		$this->send_base($args);
	}
	
	public function recv_findOrderResultModelByParams(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_findOrderResultModelByParams_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMpOrder( $requestData){
		
		$this->send_getMpOrder( $requestData);
		return $this->recv_getMpOrder();
	}
	
	public function send_getMpOrder( $requestData){
		
		$this->initInvocation("getMpOrder");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_getMpOrder_args();
		
		$args->requestData = $requestData;
		
		$this->send_base($args);
	}
	
	public function recv_getMpOrder(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_getMpOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSaleOrderCancellation( $carrierCode, $customsCode, $num){
		
		$this->send_getSaleOrderCancellation( $carrierCode, $customsCode, $num);
		return $this->recv_getSaleOrderCancellation();
	}
	
	public function send_getSaleOrderCancellation( $carrierCode, $customsCode, $num){
		
		$this->initInvocation("getSaleOrderCancellation");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderCancellation_args();
		
		$args->carrierCode = $carrierCode;
		
		$args->customsCode = $customsCode;
		
		$args->num = $num;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleOrderCancellation(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderCancellation_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSaleOrderList( $carriercode, $orderSn, $num, $customsCode){
		
		$this->send_getSaleOrderList( $carriercode, $orderSn, $num, $customsCode);
		return $this->recv_getSaleOrderList();
	}
	
	public function send_getSaleOrderList( $carriercode, $orderSn, $num, $customsCode){
		
		$this->initInvocation("getSaleOrderList");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderList_args();
		
		$args->carriercode = $carriercode;
		
		$args->orderSn = $orderSn;
		
		$args->num = $num;
		
		$args->customsCode = $customsCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleOrderList(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSaleOrderListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType){
		
		$this->send_getSaleOrderListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType);
		return $this->recv_getSaleOrderListByOrderType();
	}
	
	public function send_getSaleOrderListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType){
		
		$this->initInvocation("getSaleOrderListByOrderType");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderListByOrderType_args();
		
		$args->carriercode = $carriercode;
		
		$args->orderSn = $orderSn;
		
		$args->num = $num;
		
		$args->customsCode = $customsCode;
		
		$args->orderType = $orderType;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleOrderListByOrderType(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderListByOrderType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSaleOrderModelList( $carriercode, $orderSn, $num, $customsCode){
		
		$this->send_getSaleOrderModelList( $carriercode, $orderSn, $num, $customsCode);
		return $this->recv_getSaleOrderModelList();
	}
	
	public function send_getSaleOrderModelList( $carriercode, $orderSn, $num, $customsCode){
		
		$this->initInvocation("getSaleOrderModelList");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderModelList_args();
		
		$args->carriercode = $carriercode;
		
		$args->orderSn = $orderSn;
		
		$args->num = $num;
		
		$args->customsCode = $customsCode;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleOrderModelList(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderModelList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSaleOrderModelListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType){
		
		$this->send_getSaleOrderModelListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType);
		return $this->recv_getSaleOrderModelListByOrderType();
	}
	
	public function send_getSaleOrderModelListByOrderType( $carriercode, $orderSn, $num, $customsCode, $orderType){
		
		$this->initInvocation("getSaleOrderModelListByOrderType");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderModelListByOrderType_args();
		
		$args->carriercode = $carriercode;
		
		$args->orderSn = $orderSn;
		
		$args->num = $num;
		
		$args->customsCode = $customsCode;
		
		$args->orderType = $orderType;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleOrderModelListByOrderType(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_getSaleOrderModelListByOrderType_result();
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
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sendDeclareResult( $requestData){
		
		$this->send_sendDeclareResult( $requestData);
		return $this->recv_sendDeclareResult();
	}
	
	public function send_sendDeclareResult( $requestData){
		
		$this->initInvocation("sendDeclareResult");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_sendDeclareResult_args();
		
		$args->requestData = $requestData;
		
		$this->send_base($args);
	}
	
	public function recv_sendDeclareResult(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_sendDeclareResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateCancelOrderStatus( $carriercode,\com\vip\haitao\orderservice\service\HtSaleOrderCancellationCallbackResult $resultList, $isUpdateStatus){
		
		$this->send_updateCancelOrderStatus( $carriercode, $resultList, $isUpdateStatus);
		return $this->recv_updateCancelOrderStatus();
	}
	
	public function send_updateCancelOrderStatus( $carriercode,\com\vip\haitao\orderservice\service\HtSaleOrderCancellationCallbackResult $resultList, $isUpdateStatus){
		
		$this->initInvocation("updateCancelOrderStatus");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_updateCancelOrderStatus_args();
		
		$args->carriercode = $carriercode;
		
		$args->resultList = $resultList;
		
		$args->isUpdateStatus = $isUpdateStatus;
		
		$this->send_base($args);
	}
	
	public function recv_updateCancelOrderStatus(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_updateCancelOrderStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateSendChbOrderStatusByOrderSn( $carriercode, $orderSn, $customsCode){
		
		$this->send_updateSendChbOrderStatusByOrderSn( $carriercode, $orderSn, $customsCode);
		return $this->recv_updateSendChbOrderStatusByOrderSn();
	}
	
	public function send_updateSendChbOrderStatusByOrderSn( $carriercode, $orderSn, $customsCode){
		
		$this->initInvocation("updateSendChbOrderStatusByOrderSn");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_updateSendChbOrderStatusByOrderSn_args();
		
		$args->carriercode = $carriercode;
		
		$args->orderSn = $orderSn;
		
		$args->customsCode = $customsCode;
		
		$this->send_base($args);
	}
	
	public function recv_updateSendChbOrderStatusByOrderSn(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_updateSendChbOrderStatusByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateSendOrderStatusByOrderSn( $warehouse, $orderSn){
		
		$this->send_updateSendOrderStatusByOrderSn( $warehouse, $orderSn);
		return $this->recv_updateSendOrderStatusByOrderSn();
	}
	
	public function send_updateSendOrderStatusByOrderSn( $warehouse, $orderSn){
		
		$this->initInvocation("updateSendOrderStatusByOrderSn");
		$args = new \vipapis\orderservice\service\HtSaleOrderVopService_updateSendOrderStatusByOrderSn_args();
		
		$args->warehouse = $warehouse;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_updateSendOrderStatusByOrderSn(){
		
		$result = new \vipapis\orderservice\service\HtSaleOrderVopService_updateSendOrderStatusByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtSaleOrderVopService_feedbackMpOrder_args {
	
	static $_TSPEC;
	public $requestData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestData'])){
				
				$this->requestData = $vals['requestData'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->requestData);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->requestData !== null) {
			
			$xfer += $output->writeFieldBegin('requestData');
			$xfer += $output->writeString($this->requestData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_findOrderResultByParams_args {
	
	static $_TSPEC;
	public $warehouse = null;
	public $orderSn = null;
	public $num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
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




class HtSaleOrderVopService_findOrderResultModelByParams_args {
	
	static $_TSPEC;
	public $warehouse = null;
	public $orderSn = null;
	public $num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
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




class HtSaleOrderVopService_getMpOrder_args {
	
	static $_TSPEC;
	public $requestData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestData'])){
				
				$this->requestData = $vals['requestData'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->requestData);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->requestData !== null) {
			
			$xfer += $output->writeFieldBegin('requestData');
			$xfer += $output->writeString($this->requestData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_getSaleOrderCancellation_args {
	
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
		
		$xfer += $output->writeFieldBegin('carrierCode');
		$xfer += $output->writeString($this->carrierCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
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




class HtSaleOrderVopService_getSaleOrderList_args {
	
	static $_TSPEC;
	public $carriercode = null;
	public $orderSn = null;
	public $num = null;
	public $customsCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriercode'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'num'
			),
			4 => array(
			'var' => 'customsCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carriercode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carriercode');
		$xfer += $output->writeString($this->carriercode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_getSaleOrderListByOrderType_args {
	
	static $_TSPEC;
	public $carriercode = null;
	public $orderSn = null;
	public $num = null;
	public $customsCode = null;
	public $orderType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriercode'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'num'
			),
			4 => array(
			'var' => 'customsCode'
			),
			5 => array(
			'var' => 'orderType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carriercode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderType);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carriercode');
		$xfer += $output->writeString($this->carriercode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderType');
		$xfer += $output->writeString($this->orderType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_getSaleOrderModelList_args {
	
	static $_TSPEC;
	public $carriercode = null;
	public $orderSn = null;
	public $num = null;
	public $customsCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriercode'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'num'
			),
			4 => array(
			'var' => 'customsCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carriercode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carriercode');
		$xfer += $output->writeString($this->carriercode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_getSaleOrderModelListByOrderType_args {
	
	static $_TSPEC;
	public $carriercode = null;
	public $orderSn = null;
	public $num = null;
	public $customsCode = null;
	public $orderType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriercode'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'num'
			),
			4 => array(
			'var' => 'customsCode'
			),
			5 => array(
			'var' => 'orderType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carriercode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderType);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carriercode');
		$xfer += $output->writeString($this->carriercode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->num !== null) {
			
			$xfer += $output->writeFieldBegin('num');
			$xfer += $output->writeI32($this->num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderType');
		$xfer += $output->writeString($this->orderType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_healthCheck_args {
	
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




class HtSaleOrderVopService_sendDeclareResult_args {
	
	static $_TSPEC;
	public $requestData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestData'])){
				
				$this->requestData = $vals['requestData'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->requestData);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->requestData !== null) {
			
			$xfer += $output->writeFieldBegin('requestData');
			$xfer += $output->writeString($this->requestData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_updateCancelOrderStatus_args {
	
	static $_TSPEC;
	public $carriercode = null;
	public $resultList = null;
	public $isUpdateStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriercode'
			),
			2 => array(
			'var' => 'resultList'
			),
			3 => array(
			'var' => 'isUpdateStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['resultList'])){
				
				$this->resultList = $vals['resultList'];
			}
			
			
			if (isset($vals['isUpdateStatus'])){
				
				$this->isUpdateStatus = $vals['isUpdateStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carriercode);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->resultList = new \com\vip\haitao\orderservice\service\HtSaleOrderCancellationCallbackResult();
			$this->resultList->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isUpdateStatus);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carriercode');
		$xfer += $output->writeString($this->carriercode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultList');
		
		if (!is_object($this->resultList)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->resultList->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isUpdateStatus');
		$xfer += $output->writeBool($this->isUpdateStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_updateSendChbOrderStatusByOrderSn_args {
	
	static $_TSPEC;
	public $carriercode = null;
	public $orderSn = null;
	public $customsCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carriercode'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'customsCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carriercode'])){
				
				$this->carriercode = $vals['carriercode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->carriercode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carriercode');
		$xfer += $output->writeString($this->carriercode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_updateSendOrderStatusByOrderSn_args {
	
	static $_TSPEC;
	public $warehouse = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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




class HtSaleOrderVopService_feedbackMpOrder_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\MpVopResponse();
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




class HtSaleOrderVopService_findOrderResultByParams_result {
	
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
					
					$elem0 = new \com\vip\haitao\orderservice\service\HtSaleOrderResult();
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




class HtSaleOrderVopService_findOrderResultModelByParams_result {
	
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
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\haitao\orderservice\service\HtSaleOrderResultModel();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
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




class HtSaleOrderVopService_getMpOrder_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\MpVopResponse();
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




class HtSaleOrderVopService_getSaleOrderCancellation_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtSaleOrderCancellationResult();
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




class HtSaleOrderVopService_getSaleOrderList_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtCarrierSaleOrderResult();
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




class HtSaleOrderVopService_getSaleOrderListByOrderType_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtCarrierSaleOrderResult();
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




class HtSaleOrderVopService_getSaleOrderModelList_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtCarrierSaleOrderResultModel();
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




class HtSaleOrderVopService_getSaleOrderModelListByOrderType_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtCarrierSaleOrderResultModel();
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




class HtSaleOrderVopService_healthCheck_result {
	
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




class HtSaleOrderVopService_sendDeclareResult_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\MpVopResponse();
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




class HtSaleOrderVopService_updateCancelOrderStatus_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleOrderVopService_updateSendChbOrderStatusByOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtSaleTransferBatchNoResult();
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




class HtSaleOrderVopService_updateSendOrderStatusByOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtSaleTransferBatchNoResult();
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