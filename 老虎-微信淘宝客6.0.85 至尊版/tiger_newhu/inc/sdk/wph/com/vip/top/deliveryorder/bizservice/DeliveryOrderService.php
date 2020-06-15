<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;
interface DeliveryOrderServiceIf{
	
	
	public function findDeliveryTracks( $transportNo);
	
	public function findDeliveryTracksToStorage( $transportNo, $storage);
	
	public function findListDeliveryTracks( $transportNoList);
	
	public function findOrderSnByTransportNo( $orderType, $transportNoList, $storage);
	
	public function findTmsOrderByReceiverPhone( $receiverPhone, $pageIndex, $pageSize);
	
	public function findTmsOrderByReceiverPhoneToStorage( $receiverPhone, $pageIndex, $pageSize, $storage);
	
	public function getTmsOrderByOrderSnAndWareHouse( $orderSn, $wareHouse, $pageIndex, $pageSize);
	
	public function getTmsOrderByTransportNo( $transportNo, $pageIndex, $pageSize);
	
	public function getTmsOrderByTransportNoAndWareHouse( $transportNo, $wareHouse, $pageIndex, $pageSize);
	
	public function getTmsOrderByTransportNoToStorage( $transportNo, $pageIndex, $pageSize, $storage);
	
	public function getTransportNoByOrderSn( $orderSn, $warehouse);
	
	public function healthCheck();
	
	public function matchCarrier( $tmsOrderIds, $warehouse);
	
	public function modifyTmsOrderInfo(\com\vip\top\deliveryorder\bizservice\TmsOrderModifyRequest $tmsOrderModifyRequest, $warehouse);
	
	public function processOdsMessage( $orderMsg);
	
	public function processOdsOrderStatus( $orderMsg);
	
	public function selectPageByReceiverPhone(\com\vip\top\deliveryorder\service\TmsOrderModel $tmsOrderModel, $pageIndex, $pageSize);
	
	public function updatePackageNumFlag( $orderSn, $packageNumFlag, $departdatabase);
	
	public function updateTmsOrderInfo(\com\vip\top\deliveryorder\bizservice\TmsOrderUpdateRequest $tmsOrderUpdateRequest, $warehouse);
	
}

class _DeliveryOrderServiceClient extends \Osp\Base\OspStub implements \com\vip\top\deliveryorder\bizservice\DeliveryOrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.top.deliveryorder.bizservice.DeliveryOrderService", "1.0.0");
	}
	
	
	public function findDeliveryTracks( $transportNo){
		
		$this->send_findDeliveryTracks( $transportNo);
		return $this->recv_findDeliveryTracks();
	}
	
	public function send_findDeliveryTracks( $transportNo){
		
		$this->initInvocation("findDeliveryTracks");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findDeliveryTracks_args();
		
		$args->transportNo = $transportNo;
		
		$this->send_base($args);
	}
	
	public function recv_findDeliveryTracks(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findDeliveryTracks_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findDeliveryTracksToStorage( $transportNo, $storage){
		
		$this->send_findDeliveryTracksToStorage( $transportNo, $storage);
		return $this->recv_findDeliveryTracksToStorage();
	}
	
	public function send_findDeliveryTracksToStorage( $transportNo, $storage){
		
		$this->initInvocation("findDeliveryTracksToStorage");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findDeliveryTracksToStorage_args();
		
		$args->transportNo = $transportNo;
		
		$args->storage = $storage;
		
		$this->send_base($args);
	}
	
	public function recv_findDeliveryTracksToStorage(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findDeliveryTracksToStorage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findListDeliveryTracks( $transportNoList){
		
		$this->send_findListDeliveryTracks( $transportNoList);
		return $this->recv_findListDeliveryTracks();
	}
	
	public function send_findListDeliveryTracks( $transportNoList){
		
		$this->initInvocation("findListDeliveryTracks");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findListDeliveryTracks_args();
		
		$args->transportNoList = $transportNoList;
		
		$this->send_base($args);
	}
	
	public function recv_findListDeliveryTracks(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findListDeliveryTracks_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findOrderSnByTransportNo( $orderType, $transportNoList, $storage){
		
		$this->send_findOrderSnByTransportNo( $orderType, $transportNoList, $storage);
		return $this->recv_findOrderSnByTransportNo();
	}
	
	public function send_findOrderSnByTransportNo( $orderType, $transportNoList, $storage){
		
		$this->initInvocation("findOrderSnByTransportNo");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findOrderSnByTransportNo_args();
		
		$args->orderType = $orderType;
		
		$args->transportNoList = $transportNoList;
		
		$args->storage = $storage;
		
		$this->send_base($args);
	}
	
	public function recv_findOrderSnByTransportNo(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findOrderSnByTransportNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findTmsOrderByReceiverPhone( $receiverPhone, $pageIndex, $pageSize){
		
		$this->send_findTmsOrderByReceiverPhone( $receiverPhone, $pageIndex, $pageSize);
		return $this->recv_findTmsOrderByReceiverPhone();
	}
	
	public function send_findTmsOrderByReceiverPhone( $receiverPhone, $pageIndex, $pageSize){
		
		$this->initInvocation("findTmsOrderByReceiverPhone");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findTmsOrderByReceiverPhone_args();
		
		$args->receiverPhone = $receiverPhone;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_findTmsOrderByReceiverPhone(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findTmsOrderByReceiverPhone_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function findTmsOrderByReceiverPhoneToStorage( $receiverPhone, $pageIndex, $pageSize, $storage){
		
		$this->send_findTmsOrderByReceiverPhoneToStorage( $receiverPhone, $pageIndex, $pageSize, $storage);
		return $this->recv_findTmsOrderByReceiverPhoneToStorage();
	}
	
	public function send_findTmsOrderByReceiverPhoneToStorage( $receiverPhone, $pageIndex, $pageSize, $storage){
		
		$this->initInvocation("findTmsOrderByReceiverPhoneToStorage");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findTmsOrderByReceiverPhoneToStorage_args();
		
		$args->receiverPhone = $receiverPhone;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$args->storage = $storage;
		
		$this->send_base($args);
	}
	
	public function recv_findTmsOrderByReceiverPhoneToStorage(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_findTmsOrderByReceiverPhoneToStorage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTmsOrderByOrderSnAndWareHouse( $orderSn, $wareHouse, $pageIndex, $pageSize){
		
		$this->send_getTmsOrderByOrderSnAndWareHouse( $orderSn, $wareHouse, $pageIndex, $pageSize);
		return $this->recv_getTmsOrderByOrderSnAndWareHouse();
	}
	
	public function send_getTmsOrderByOrderSnAndWareHouse( $orderSn, $wareHouse, $pageIndex, $pageSize){
		
		$this->initInvocation("getTmsOrderByOrderSnAndWareHouse");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByOrderSnAndWareHouse_args();
		
		$args->orderSn = $orderSn;
		
		$args->wareHouse = $wareHouse;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getTmsOrderByOrderSnAndWareHouse(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByOrderSnAndWareHouse_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTmsOrderByTransportNo( $transportNo, $pageIndex, $pageSize){
		
		$this->send_getTmsOrderByTransportNo( $transportNo, $pageIndex, $pageSize);
		return $this->recv_getTmsOrderByTransportNo();
	}
	
	public function send_getTmsOrderByTransportNo( $transportNo, $pageIndex, $pageSize){
		
		$this->initInvocation("getTmsOrderByTransportNo");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByTransportNo_args();
		
		$args->transportNo = $transportNo;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getTmsOrderByTransportNo(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByTransportNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTmsOrderByTransportNoAndWareHouse( $transportNo, $wareHouse, $pageIndex, $pageSize){
		
		$this->send_getTmsOrderByTransportNoAndWareHouse( $transportNo, $wareHouse, $pageIndex, $pageSize);
		return $this->recv_getTmsOrderByTransportNoAndWareHouse();
	}
	
	public function send_getTmsOrderByTransportNoAndWareHouse( $transportNo, $wareHouse, $pageIndex, $pageSize){
		
		$this->initInvocation("getTmsOrderByTransportNoAndWareHouse");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByTransportNoAndWareHouse_args();
		
		$args->transportNo = $transportNo;
		
		$args->wareHouse = $wareHouse;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getTmsOrderByTransportNoAndWareHouse(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByTransportNoAndWareHouse_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTmsOrderByTransportNoToStorage( $transportNo, $pageIndex, $pageSize, $storage){
		
		$this->send_getTmsOrderByTransportNoToStorage( $transportNo, $pageIndex, $pageSize, $storage);
		return $this->recv_getTmsOrderByTransportNoToStorage();
	}
	
	public function send_getTmsOrderByTransportNoToStorage( $transportNo, $pageIndex, $pageSize, $storage){
		
		$this->initInvocation("getTmsOrderByTransportNoToStorage");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByTransportNoToStorage_args();
		
		$args->transportNo = $transportNo;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$args->storage = $storage;
		
		$this->send_base($args);
	}
	
	public function recv_getTmsOrderByTransportNoToStorage(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTmsOrderByTransportNoToStorage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTransportNoByOrderSn( $orderSn, $warehouse){
		
		$this->send_getTransportNoByOrderSn( $orderSn, $warehouse);
		return $this->recv_getTransportNoByOrderSn();
	}
	
	public function send_getTransportNoByOrderSn( $orderSn, $warehouse){
		
		$this->initInvocation("getTransportNoByOrderSn");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTransportNoByOrderSn_args();
		
		$args->orderSn = $orderSn;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getTransportNoByOrderSn(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_getTransportNoByOrderSn_result();
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
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function matchCarrier( $tmsOrderIds, $warehouse){
		
		$this->send_matchCarrier( $tmsOrderIds, $warehouse);
		return $this->recv_matchCarrier();
	}
	
	public function send_matchCarrier( $tmsOrderIds, $warehouse){
		
		$this->initInvocation("matchCarrier");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_matchCarrier_args();
		
		$args->tmsOrderIds = $tmsOrderIds;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_matchCarrier(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_matchCarrier_result();
		$this->receive_base($result);
		
	}
	
	
	public function modifyTmsOrderInfo(\com\vip\top\deliveryorder\bizservice\TmsOrderModifyRequest $tmsOrderModifyRequest, $warehouse){
		
		$this->send_modifyTmsOrderInfo( $tmsOrderModifyRequest, $warehouse);
		return $this->recv_modifyTmsOrderInfo();
	}
	
	public function send_modifyTmsOrderInfo(\com\vip\top\deliveryorder\bizservice\TmsOrderModifyRequest $tmsOrderModifyRequest, $warehouse){
		
		$this->initInvocation("modifyTmsOrderInfo");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_modifyTmsOrderInfo_args();
		
		$args->tmsOrderModifyRequest = $tmsOrderModifyRequest;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_modifyTmsOrderInfo(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_modifyTmsOrderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function processOdsMessage( $orderMsg){
		
		$this->send_processOdsMessage( $orderMsg);
		return $this->recv_processOdsMessage();
	}
	
	public function send_processOdsMessage( $orderMsg){
		
		$this->initInvocation("processOdsMessage");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_processOdsMessage_args();
		
		$args->orderMsg = $orderMsg;
		
		$this->send_base($args);
	}
	
	public function recv_processOdsMessage(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_processOdsMessage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function processOdsOrderStatus( $orderMsg){
		
		$this->send_processOdsOrderStatus( $orderMsg);
		return $this->recv_processOdsOrderStatus();
	}
	
	public function send_processOdsOrderStatus( $orderMsg){
		
		$this->initInvocation("processOdsOrderStatus");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_processOdsOrderStatus_args();
		
		$args->orderMsg = $orderMsg;
		
		$this->send_base($args);
	}
	
	public function recv_processOdsOrderStatus(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_processOdsOrderStatus_result();
		$this->receive_base($result);
		
	}
	
	
	public function selectPageByReceiverPhone(\com\vip\top\deliveryorder\service\TmsOrderModel $tmsOrderModel, $pageIndex, $pageSize){
		
		$this->send_selectPageByReceiverPhone( $tmsOrderModel, $pageIndex, $pageSize);
		return $this->recv_selectPageByReceiverPhone();
	}
	
	public function send_selectPageByReceiverPhone(\com\vip\top\deliveryorder\service\TmsOrderModel $tmsOrderModel, $pageIndex, $pageSize){
		
		$this->initInvocation("selectPageByReceiverPhone");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_selectPageByReceiverPhone_args();
		
		$args->tmsOrderModel = $tmsOrderModel;
		
		$args->pageIndex = $pageIndex;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_selectPageByReceiverPhone(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_selectPageByReceiverPhone_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updatePackageNumFlag( $orderSn, $packageNumFlag, $departdatabase){
		
		$this->send_updatePackageNumFlag( $orderSn, $packageNumFlag, $departdatabase);
		return $this->recv_updatePackageNumFlag();
	}
	
	public function send_updatePackageNumFlag( $orderSn, $packageNumFlag, $departdatabase){
		
		$this->initInvocation("updatePackageNumFlag");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_updatePackageNumFlag_args();
		
		$args->orderSn = $orderSn;
		
		$args->packageNumFlag = $packageNumFlag;
		
		$args->departdatabase = $departdatabase;
		
		$this->send_base($args);
	}
	
	public function recv_updatePackageNumFlag(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_updatePackageNumFlag_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateTmsOrderInfo(\com\vip\top\deliveryorder\bizservice\TmsOrderUpdateRequest $tmsOrderUpdateRequest, $warehouse){
		
		$this->send_updateTmsOrderInfo( $tmsOrderUpdateRequest, $warehouse);
		return $this->recv_updateTmsOrderInfo();
	}
	
	public function send_updateTmsOrderInfo(\com\vip\top\deliveryorder\bizservice\TmsOrderUpdateRequest $tmsOrderUpdateRequest, $warehouse){
		
		$this->initInvocation("updateTmsOrderInfo");
		$args = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_updateTmsOrderInfo_args();
		
		$args->tmsOrderUpdateRequest = $tmsOrderUpdateRequest;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_updateTmsOrderInfo(){
		
		$result = new \com\vip\top\deliveryorder\bizservice\DeliveryOrderService_updateTmsOrderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class DeliveryOrderService_findDeliveryTracks_args {
	
	static $_TSPEC;
	public $transportNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transportNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findDeliveryTracksToStorage_args {
	
	static $_TSPEC;
	public $transportNo = null;
	public $storage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'storage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['storage'])){
				
				$this->storage = $vals['storage'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transportNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage !== null) {
			
			$xfer += $output->writeFieldBegin('storage');
			$xfer += $output->writeString($this->storage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findListDeliveryTracks_args {
	
	static $_TSPEC;
	public $transportNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNoList'])){
				
				$this->transportNoList = $vals['transportNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->transportNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->transportNoList[$_size0++] = $elem0;
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
		
		if($this->transportNoList !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoList');
			
			if (!is_array($this->transportNoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportNoList as $iter0){
				
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




class DeliveryOrderService_findOrderSnByTransportNo_args {
	
	static $_TSPEC;
	public $orderType = null;
	public $transportNoList = null;
	public $storage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderType'
			),
			2 => array(
			'var' => 'transportNoList'
			),
			3 => array(
			'var' => 'storage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['transportNoList'])){
				
				$this->transportNoList = $vals['transportNoList'];
			}
			
			
			if (isset($vals['storage'])){
				
				$this->storage = $vals['storage'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderType);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->transportNoList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->transportNoList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNoList !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoList');
			
			if (!is_array($this->transportNoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportNoList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage !== null) {
			
			$xfer += $output->writeFieldBegin('storage');
			$xfer += $output->writeString($this->storage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findTmsOrderByReceiverPhone_args {
	
	static $_TSPEC;
	public $receiverPhone = null;
	public $pageIndex = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'receiverPhone'
			),
			2 => array(
			'var' => 'pageIndex'
			),
			3 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['receiverPhone'])){
				
				$this->receiverPhone = $vals['receiverPhone'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->receiverPhone);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->receiverPhone !== null) {
			
			$xfer += $output->writeFieldBegin('receiverPhone');
			$xfer += $output->writeString($this->receiverPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findTmsOrderByReceiverPhoneToStorage_args {
	
	static $_TSPEC;
	public $receiverPhone = null;
	public $pageIndex = null;
	public $pageSize = null;
	public $storage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'receiverPhone'
			),
			2 => array(
			'var' => 'pageIndex'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'storage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['receiverPhone'])){
				
				$this->receiverPhone = $vals['receiverPhone'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['storage'])){
				
				$this->storage = $vals['storage'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->receiverPhone);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->receiverPhone !== null) {
			
			$xfer += $output->writeFieldBegin('receiverPhone');
			$xfer += $output->writeString($this->receiverPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storage !== null) {
			
			$xfer += $output->writeFieldBegin('storage');
			$xfer += $output->writeString($this->storage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_getTmsOrderByOrderSnAndWareHouse_args {
	
	static $_TSPEC;
	public $orderSn = null;
	public $wareHouse = null;
	public $pageIndex = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'wareHouse'
			),
			3 => array(
			'var' => 'pageIndex'
			),
			4 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['wareHouse'])){
				
				$this->wareHouse = $vals['wareHouse'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->wareHouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
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
		
		
		if($this->wareHouse !== null) {
			
			$xfer += $output->writeFieldBegin('wareHouse');
			$xfer += $output->writeString($this->wareHouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_getTmsOrderByTransportNo_args {
	
	static $_TSPEC;
	public $transportNo = null;
	public $pageIndex = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'pageIndex'
			),
			3 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transportNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_getTmsOrderByTransportNoAndWareHouse_args {
	
	static $_TSPEC;
	public $transportNo = null;
	public $wareHouse = null;
	public $pageIndex = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'wareHouse'
			),
			3 => array(
			'var' => 'pageIndex'
			),
			4 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['wareHouse'])){
				
				$this->wareHouse = $vals['wareHouse'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transportNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->wareHouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wareHouse !== null) {
			
			$xfer += $output->writeFieldBegin('wareHouse');
			$xfer += $output->writeString($this->wareHouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_getTmsOrderByTransportNoToStorage_args {
	
	static $_TSPEC;
	public $transportNo = null;
	public $pageIndex = null;
	public $pageSize = null;
	public $storage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transportNo'
			),
			2 => array(
			'var' => 'pageIndex'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'storage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['storage'])){
				
				$this->storage = $vals['storage'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transportNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storage !== null) {
			
			$xfer += $output->writeFieldBegin('storage');
			$xfer += $output->writeString($this->storage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_getTransportNoByOrderSn_args {
	
	static $_TSPEC;
	public $orderSn = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
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
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_healthCheck_args {
	
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




class DeliveryOrderService_matchCarrier_args {
	
	static $_TSPEC;
	public $tmsOrderIds = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderIds'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderIds'])){
				
				$this->tmsOrderIds = $vals['tmsOrderIds'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsOrderIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->tmsOrderIds[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tmsOrderIds !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderIds');
			
			if (!is_array($this->tmsOrderIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tmsOrderIds as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_modifyTmsOrderInfo_args {
	
	static $_TSPEC;
	public $tmsOrderModifyRequest = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderModifyRequest'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderModifyRequest'])){
				
				$this->tmsOrderModifyRequest = $vals['tmsOrderModifyRequest'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsOrderModifyRequest = new \com\vip\top\deliveryorder\bizservice\TmsOrderModifyRequest();
			$this->tmsOrderModifyRequest->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tmsOrderModifyRequest !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderModifyRequest');
			
			if (!is_object($this->tmsOrderModifyRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsOrderModifyRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_processOdsMessage_args {
	
	static $_TSPEC;
	public $orderMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderMsg'])){
				
				$this->orderMsg = $vals['orderMsg'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderMsg);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderMsg !== null) {
			
			$xfer += $output->writeFieldBegin('orderMsg');
			$xfer += $output->writeString($this->orderMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_processOdsOrderStatus_args {
	
	static $_TSPEC;
	public $orderMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderMsg'])){
				
				$this->orderMsg = $vals['orderMsg'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderMsg);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderMsg');
		$xfer += $output->writeString($this->orderMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_selectPageByReceiverPhone_args {
	
	static $_TSPEC;
	public $tmsOrderModel = null;
	public $pageIndex = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderModel'
			),
			2 => array(
			'var' => 'pageIndex'
			),
			3 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderModel'])){
				
				$this->tmsOrderModel = $vals['tmsOrderModel'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsOrderModel = new \com\vip\top\deliveryorder\service\TmsOrderModel();
			$this->tmsOrderModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageIndex); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tmsOrderModel !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderModel');
			
			if (!is_object($this->tmsOrderModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsOrderModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_updatePackageNumFlag_args {
	
	static $_TSPEC;
	public $orderSn = null;
	public $packageNumFlag = null;
	public $departdatabase = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'packageNumFlag'
			),
			3 => array(
			'var' => 'departdatabase'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['packageNumFlag'])){
				
				$this->packageNumFlag = $vals['packageNumFlag'];
			}
			
			
			if (isset($vals['departdatabase'])){
				
				$this->departdatabase = $vals['departdatabase'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->packageNumFlag); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->departdatabase);
			
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
		
		
		if($this->packageNumFlag !== null) {
			
			$xfer += $output->writeFieldBegin('packageNumFlag');
			$xfer += $output->writeI32($this->packageNumFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->departdatabase !== null) {
			
			$xfer += $output->writeFieldBegin('departdatabase');
			$xfer += $output->writeString($this->departdatabase);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_updateTmsOrderInfo_args {
	
	static $_TSPEC;
	public $tmsOrderUpdateRequest = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderUpdateRequest'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderUpdateRequest'])){
				
				$this->tmsOrderUpdateRequest = $vals['tmsOrderUpdateRequest'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsOrderUpdateRequest = new \com\vip\top\deliveryorder\bizservice\TmsOrderUpdateRequest();
			$this->tmsOrderUpdateRequest->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->tmsOrderUpdateRequest !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderUpdateRequest');
			
			if (!is_object($this->tmsOrderUpdateRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsOrderUpdateRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findDeliveryTracks_result {
	
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
					
					$elem0 = new \com\vip\top\deliveryorder\service\TmsOrderTrackModel();
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




class DeliveryOrderService_findDeliveryTracksToStorage_result {
	
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
					
					$elem1 = new \com\vip\top\deliveryorder\service\TmsOrderTrackModel();
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




class DeliveryOrderService_findListDeliveryTracks_result {
	
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
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key1 = '';
					$input->readString($key1);
					
					$val1 = null;
					
					$val1 = array();
					$_size2 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem2 = null;
							
							$elem2 = new \com\vip\top\deliveryorder\service\TmsOrderTrackModel();
							$elem2->read($input);
							
							$val1[$_size2++] = $elem2;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
					$this->success[$key1] = $val1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
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
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				
				if (!is_array($viter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeListBegin();
				foreach ($viter0 as $iter1){
					
					
					if (!is_object($iter1)) {
						
						throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
					}
					
					$xfer += $iter1->write($output);
					
				}
				
				$output->writeListEnd();
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findOrderSnByTransportNo_result {
	
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
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key2 = '';
					$input->readString($key2);
					
					$val2 = '';
					$input->readString($val2);
					
					$this->success[$key2] = $val2;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
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
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_findTmsOrderByReceiverPhone_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_findTmsOrderByReceiverPhoneToStorage_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_getTmsOrderByOrderSnAndWareHouse_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_getTmsOrderByTransportNo_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_getTmsOrderByTransportNoAndWareHouse_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_getTmsOrderByTransportNoToStorage_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_getTransportNoByOrderSn_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DeliveryOrderService_healthCheck_result {
	
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




class DeliveryOrderService_matchCarrier_result {
	
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




class DeliveryOrderService_modifyTmsOrderInfo_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderModifyResponse();
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




class DeliveryOrderService_processOdsMessage_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\service\ProcessResult();
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




class DeliveryOrderService_processOdsOrderStatus_result {
	
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




class DeliveryOrderService_selectPageByReceiverPhone_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderPageModel();
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




class DeliveryOrderService_updatePackageNumFlag_result {
	
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




class DeliveryOrderService_updateTmsOrderInfo_result {
	
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
			
			
			$this->success = new \com\vip\top\deliveryorder\bizservice\TmsOrderUpdateResponse();
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