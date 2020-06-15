<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;
interface OrderServiceIf{
	
	
	public function acceptOrder(\com\vip\vop\vcloud\order\OrderStoreReq $req);
	
	public function appointOrderStore(\com\vip\vop\vcloud\order\OrderStoreReq $req);
	
	public function cancelShipment( $partnerId, $orderSn, $channelId, $account, $storeId);
	
	public function checkMultiParcel( $partnerId, $orderSn, $subOrderSn, $channelId);
	
	public function confirmDelivery(\com\vip\vop\vcloud\order\OrderStoreReq $req);
	
	public function confirmDeliveryPartly(\com\vip\vop\vcloud\order\ConfirmDeliveryPartlyReq $req);
	
	public function confirmNoStock(\com\vip\vop\vcloud\order\OrderStoreReq $req);
	
	public function confirmShipment( $partnerId, $orderSn, $channelId, $account, $storeId);
	
	public function confirmUserRefuse(\com\vip\vop\vcloud\order\OrderStoreReq $req);
	
	public function getChannelOrderAndDetail( $partnerId, $channelId, $orderType,\com\vip\vop\vcloud\common\api\Pagination $pagination, $warehouses);
	
	public function getChannelOrderByOrderSn( $partnerId, $orderSn, $subOrderSn, $channelId, $storeId);
	
	public function getChannelOrderItems(\com\vip\vop\vcloud\order\OrderQueryRequest $orderQueryRequest);
	
	public function getOfficialMemberByOrderSn( $partnerId, $orderSn, $channelId);
	
	public function getOrderByChannelIdAndOrderSn( $channelId, $orderSn);
	
	public function getOrderByExpressNo( $partnerId, $orderSn, $subOrderSn, $channelId, $expressNo);
	
	public function getOrderLogisticsByOrderSn( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn);
	
	public function getOrderOptLog( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn);
	
	public function getWaybillDetails( $partnerId, $channelId, $startTime, $endTime,\com\vip\vop\vcloud\common\api\Pagination $pagination, $warehouses, $orderType);
	
	public function healthCheck();
	
	public function listSubOrder( $partnerId, $orderSn, $channelId, $subOrderSn);
	
	public function listWarehouseByOrderSn( $partnerId, $channelId, $orderSn);
	
	public function pullOrders( $channelId, $partnerId, $orderSn, $beginTime, $endTime);
	
	public function refuseOrder(\com\vip\vop\vcloud\order\OrderStoreReq $req);
	
	public function storeConfirmed( $channelId, $subOrderSn, $isConfirmed);
	
	public function updateDeliveryStatus( $partnerId, $orderSn, $deliveryNo, $acceptTime, $acceptAddress, $remark, $opCode, $opId);
	
	public function updateOrderLogisticsBySubOrderSn( $partnerId, $channelId, $subOrderSn, $expressCompany, $expressNo);
	
	public function updateRemark( $channelId, $subOrderSn, $remark);
	
}

class _OrderServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\order\OrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.order.OrderService", "1.0.0");
	}
	
	
	public function acceptOrder(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->send_acceptOrder( $req);
		return $this->recv_acceptOrder();
	}
	
	public function send_acceptOrder(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->initInvocation("acceptOrder");
		$args = new \com\vip\vop\vcloud\order\OrderService_acceptOrder_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_acceptOrder(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_acceptOrder_result();
		$this->receive_base($result);
		
	}
	
	
	public function appointOrderStore(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->send_appointOrderStore( $req);
		return $this->recv_appointOrderStore();
	}
	
	public function send_appointOrderStore(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->initInvocation("appointOrderStore");
		$args = new \com\vip\vop\vcloud\order\OrderService_appointOrderStore_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_appointOrderStore(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_appointOrderStore_result();
		$this->receive_base($result);
		
	}
	
	
	public function cancelShipment( $partnerId, $orderSn, $channelId, $account, $storeId){
		
		$this->send_cancelShipment( $partnerId, $orderSn, $channelId, $account, $storeId);
		return $this->recv_cancelShipment();
	}
	
	public function send_cancelShipment( $partnerId, $orderSn, $channelId, $account, $storeId){
		
		$this->initInvocation("cancelShipment");
		$args = new \com\vip\vop\vcloud\order\OrderService_cancelShipment_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->channelId = $channelId;
		
		$args->account = $account;
		
		$args->storeId = $storeId;
		
		$this->send_base($args);
	}
	
	public function recv_cancelShipment(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_cancelShipment_result();
		$this->receive_base($result);
		
	}
	
	
	public function checkMultiParcel( $partnerId, $orderSn, $subOrderSn, $channelId){
		
		$this->send_checkMultiParcel( $partnerId, $orderSn, $subOrderSn, $channelId);
		return $this->recv_checkMultiParcel();
	}
	
	public function send_checkMultiParcel( $partnerId, $orderSn, $subOrderSn, $channelId){
		
		$this->initInvocation("checkMultiParcel");
		$args = new \com\vip\vop\vcloud\order\OrderService_checkMultiParcel_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->subOrderSn = $subOrderSn;
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_checkMultiParcel(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_checkMultiParcel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmDelivery(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->send_confirmDelivery( $req);
		return $this->recv_confirmDelivery();
	}
	
	public function send_confirmDelivery(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->initInvocation("confirmDelivery");
		$args = new \com\vip\vop\vcloud\order\OrderService_confirmDelivery_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_confirmDelivery(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_confirmDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmDeliveryPartly(\com\vip\vop\vcloud\order\ConfirmDeliveryPartlyReq $req){
		
		$this->send_confirmDeliveryPartly( $req);
		return $this->recv_confirmDeliveryPartly();
	}
	
	public function send_confirmDeliveryPartly(\com\vip\vop\vcloud\order\ConfirmDeliveryPartlyReq $req){
		
		$this->initInvocation("confirmDeliveryPartly");
		$args = new \com\vip\vop\vcloud\order\OrderService_confirmDeliveryPartly_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_confirmDeliveryPartly(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_confirmDeliveryPartly_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmNoStock(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->send_confirmNoStock( $req);
		return $this->recv_confirmNoStock();
	}
	
	public function send_confirmNoStock(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->initInvocation("confirmNoStock");
		$args = new \com\vip\vop\vcloud\order\OrderService_confirmNoStock_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_confirmNoStock(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_confirmNoStock_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmShipment( $partnerId, $orderSn, $channelId, $account, $storeId){
		
		$this->send_confirmShipment( $partnerId, $orderSn, $channelId, $account, $storeId);
		return $this->recv_confirmShipment();
	}
	
	public function send_confirmShipment( $partnerId, $orderSn, $channelId, $account, $storeId){
		
		$this->initInvocation("confirmShipment");
		$args = new \com\vip\vop\vcloud\order\OrderService_confirmShipment_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->channelId = $channelId;
		
		$args->account = $account;
		
		$args->storeId = $storeId;
		
		$this->send_base($args);
	}
	
	public function recv_confirmShipment(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_confirmShipment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmUserRefuse(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->send_confirmUserRefuse( $req);
		return $this->recv_confirmUserRefuse();
	}
	
	public function send_confirmUserRefuse(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->initInvocation("confirmUserRefuse");
		$args = new \com\vip\vop\vcloud\order\OrderService_confirmUserRefuse_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_confirmUserRefuse(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_confirmUserRefuse_result();
		$this->receive_base($result);
		
	}
	
	
	public function getChannelOrderAndDetail( $partnerId, $channelId, $orderType,\com\vip\vop\vcloud\common\api\Pagination $pagination, $warehouses){
		
		$this->send_getChannelOrderAndDetail( $partnerId, $channelId, $orderType, $pagination, $warehouses);
		return $this->recv_getChannelOrderAndDetail();
	}
	
	public function send_getChannelOrderAndDetail( $partnerId, $channelId, $orderType,\com\vip\vop\vcloud\common\api\Pagination $pagination, $warehouses){
		
		$this->initInvocation("getChannelOrderAndDetail");
		$args = new \com\vip\vop\vcloud\order\OrderService_getChannelOrderAndDetail_args();
		
		$args->partnerId = $partnerId;
		
		$args->channelId = $channelId;
		
		$args->orderType = $orderType;
		
		$args->pagination = $pagination;
		
		$args->warehouses = $warehouses;
		
		$this->send_base($args);
	}
	
	public function recv_getChannelOrderAndDetail(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getChannelOrderAndDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getChannelOrderByOrderSn( $partnerId, $orderSn, $subOrderSn, $channelId, $storeId){
		
		$this->send_getChannelOrderByOrderSn( $partnerId, $orderSn, $subOrderSn, $channelId, $storeId);
		return $this->recv_getChannelOrderByOrderSn();
	}
	
	public function send_getChannelOrderByOrderSn( $partnerId, $orderSn, $subOrderSn, $channelId, $storeId){
		
		$this->initInvocation("getChannelOrderByOrderSn");
		$args = new \com\vip\vop\vcloud\order\OrderService_getChannelOrderByOrderSn_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->subOrderSn = $subOrderSn;
		
		$args->channelId = $channelId;
		
		$args->storeId = $storeId;
		
		$this->send_base($args);
	}
	
	public function recv_getChannelOrderByOrderSn(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getChannelOrderByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getChannelOrderItems(\com\vip\vop\vcloud\order\OrderQueryRequest $orderQueryRequest){
		
		$this->send_getChannelOrderItems( $orderQueryRequest);
		return $this->recv_getChannelOrderItems();
	}
	
	public function send_getChannelOrderItems(\com\vip\vop\vcloud\order\OrderQueryRequest $orderQueryRequest){
		
		$this->initInvocation("getChannelOrderItems");
		$args = new \com\vip\vop\vcloud\order\OrderService_getChannelOrderItems_args();
		
		$args->orderQueryRequest = $orderQueryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getChannelOrderItems(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getChannelOrderItems_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOfficialMemberByOrderSn( $partnerId, $orderSn, $channelId){
		
		$this->send_getOfficialMemberByOrderSn( $partnerId, $orderSn, $channelId);
		return $this->recv_getOfficialMemberByOrderSn();
	}
	
	public function send_getOfficialMemberByOrderSn( $partnerId, $orderSn, $channelId){
		
		$this->initInvocation("getOfficialMemberByOrderSn");
		$args = new \com\vip\vop\vcloud\order\OrderService_getOfficialMemberByOrderSn_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_getOfficialMemberByOrderSn(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getOfficialMemberByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderByChannelIdAndOrderSn( $channelId, $orderSn){
		
		$this->send_getOrderByChannelIdAndOrderSn( $channelId, $orderSn);
		return $this->recv_getOrderByChannelIdAndOrderSn();
	}
	
	public function send_getOrderByChannelIdAndOrderSn( $channelId, $orderSn){
		
		$this->initInvocation("getOrderByChannelIdAndOrderSn");
		$args = new \com\vip\vop\vcloud\order\OrderService_getOrderByChannelIdAndOrderSn_args();
		
		$args->channelId = $channelId;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderByChannelIdAndOrderSn(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getOrderByChannelIdAndOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderByExpressNo( $partnerId, $orderSn, $subOrderSn, $channelId, $expressNo){
		
		$this->send_getOrderByExpressNo( $partnerId, $orderSn, $subOrderSn, $channelId, $expressNo);
		return $this->recv_getOrderByExpressNo();
	}
	
	public function send_getOrderByExpressNo( $partnerId, $orderSn, $subOrderSn, $channelId, $expressNo){
		
		$this->initInvocation("getOrderByExpressNo");
		$args = new \com\vip\vop\vcloud\order\OrderService_getOrderByExpressNo_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->subOrderSn = $subOrderSn;
		
		$args->channelId = $channelId;
		
		$args->expressNo = $expressNo;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderByExpressNo(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getOrderByExpressNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderLogisticsByOrderSn( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn){
		
		$this->send_getOrderLogisticsByOrderSn( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn);
		return $this->recv_getOrderLogisticsByOrderSn();
	}
	
	public function send_getOrderLogisticsByOrderSn( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn){
		
		$this->initInvocation("getOrderLogisticsByOrderSn");
		$args = new \com\vip\vop\vcloud\order\OrderService_getOrderLogisticsByOrderSn_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->channelId = $channelId;
		
		$args->storeId = $storeId;
		
		$args->subOrderSn = $subOrderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderLogisticsByOrderSn(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getOrderLogisticsByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderOptLog( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn){
		
		$this->send_getOrderOptLog( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn);
		return $this->recv_getOrderOptLog();
	}
	
	public function send_getOrderOptLog( $partnerId, $orderSn, $channelId, $storeId, $subOrderSn){
		
		$this->initInvocation("getOrderOptLog");
		$args = new \com\vip\vop\vcloud\order\OrderService_getOrderOptLog_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->channelId = $channelId;
		
		$args->storeId = $storeId;
		
		$args->subOrderSn = $subOrderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderOptLog(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getOrderOptLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWaybillDetails( $partnerId, $channelId, $startTime, $endTime,\com\vip\vop\vcloud\common\api\Pagination $pagination, $warehouses, $orderType){
		
		$this->send_getWaybillDetails( $partnerId, $channelId, $startTime, $endTime, $pagination, $warehouses, $orderType);
		return $this->recv_getWaybillDetails();
	}
	
	public function send_getWaybillDetails( $partnerId, $channelId, $startTime, $endTime,\com\vip\vop\vcloud\common\api\Pagination $pagination, $warehouses, $orderType){
		
		$this->initInvocation("getWaybillDetails");
		$args = new \com\vip\vop\vcloud\order\OrderService_getWaybillDetails_args();
		
		$args->partnerId = $partnerId;
		
		$args->channelId = $channelId;
		
		$args->startTime = $startTime;
		
		$args->endTime = $endTime;
		
		$args->pagination = $pagination;
		
		$args->warehouses = $warehouses;
		
		$args->orderType = $orderType;
		
		$this->send_base($args);
	}
	
	public function recv_getWaybillDetails(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_getWaybillDetails_result();
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
		$args = new \com\vip\vop\vcloud\order\OrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listSubOrder( $partnerId, $orderSn, $channelId, $subOrderSn){
		
		$this->send_listSubOrder( $partnerId, $orderSn, $channelId, $subOrderSn);
		return $this->recv_listSubOrder();
	}
	
	public function send_listSubOrder( $partnerId, $orderSn, $channelId, $subOrderSn){
		
		$this->initInvocation("listSubOrder");
		$args = new \com\vip\vop\vcloud\order\OrderService_listSubOrder_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->channelId = $channelId;
		
		$args->subOrderSn = $subOrderSn;
		
		$this->send_base($args);
	}
	
	public function recv_listSubOrder(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_listSubOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listWarehouseByOrderSn( $partnerId, $channelId, $orderSn){
		
		$this->send_listWarehouseByOrderSn( $partnerId, $channelId, $orderSn);
		return $this->recv_listWarehouseByOrderSn();
	}
	
	public function send_listWarehouseByOrderSn( $partnerId, $channelId, $orderSn){
		
		$this->initInvocation("listWarehouseByOrderSn");
		$args = new \com\vip\vop\vcloud\order\OrderService_listWarehouseByOrderSn_args();
		
		$args->partnerId = $partnerId;
		
		$args->channelId = $channelId;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_listWarehouseByOrderSn(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_listWarehouseByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pullOrders( $channelId, $partnerId, $orderSn, $beginTime, $endTime){
		
		$this->send_pullOrders( $channelId, $partnerId, $orderSn, $beginTime, $endTime);
		return $this->recv_pullOrders();
	}
	
	public function send_pullOrders( $channelId, $partnerId, $orderSn, $beginTime, $endTime){
		
		$this->initInvocation("pullOrders");
		$args = new \com\vip\vop\vcloud\order\OrderService_pullOrders_args();
		
		$args->channelId = $channelId;
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->beginTime = $beginTime;
		
		$args->endTime = $endTime;
		
		$this->send_base($args);
	}
	
	public function recv_pullOrders(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_pullOrders_result();
		$this->receive_base($result);
		
	}
	
	
	public function refuseOrder(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->send_refuseOrder( $req);
		return $this->recv_refuseOrder();
	}
	
	public function send_refuseOrder(\com\vip\vop\vcloud\order\OrderStoreReq $req){
		
		$this->initInvocation("refuseOrder");
		$args = new \com\vip\vop\vcloud\order\OrderService_refuseOrder_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_refuseOrder(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_refuseOrder_result();
		$this->receive_base($result);
		
	}
	
	
	public function storeConfirmed( $channelId, $subOrderSn, $isConfirmed){
		
		$this->send_storeConfirmed( $channelId, $subOrderSn, $isConfirmed);
		return $this->recv_storeConfirmed();
	}
	
	public function send_storeConfirmed( $channelId, $subOrderSn, $isConfirmed){
		
		$this->initInvocation("storeConfirmed");
		$args = new \com\vip\vop\vcloud\order\OrderService_storeConfirmed_args();
		
		$args->channelId = $channelId;
		
		$args->subOrderSn = $subOrderSn;
		
		$args->isConfirmed = $isConfirmed;
		
		$this->send_base($args);
	}
	
	public function recv_storeConfirmed(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_storeConfirmed_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateDeliveryStatus( $partnerId, $orderSn, $deliveryNo, $acceptTime, $acceptAddress, $remark, $opCode, $opId){
		
		$this->send_updateDeliveryStatus( $partnerId, $orderSn, $deliveryNo, $acceptTime, $acceptAddress, $remark, $opCode, $opId);
		return $this->recv_updateDeliveryStatus();
	}
	
	public function send_updateDeliveryStatus( $partnerId, $orderSn, $deliveryNo, $acceptTime, $acceptAddress, $remark, $opCode, $opId){
		
		$this->initInvocation("updateDeliveryStatus");
		$args = new \com\vip\vop\vcloud\order\OrderService_updateDeliveryStatus_args();
		
		$args->partnerId = $partnerId;
		
		$args->orderSn = $orderSn;
		
		$args->deliveryNo = $deliveryNo;
		
		$args->acceptTime = $acceptTime;
		
		$args->acceptAddress = $acceptAddress;
		
		$args->remark = $remark;
		
		$args->opCode = $opCode;
		
		$args->opId = $opId;
		
		$this->send_base($args);
	}
	
	public function recv_updateDeliveryStatus(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_updateDeliveryStatus_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateOrderLogisticsBySubOrderSn( $partnerId, $channelId, $subOrderSn, $expressCompany, $expressNo){
		
		$this->send_updateOrderLogisticsBySubOrderSn( $partnerId, $channelId, $subOrderSn, $expressCompany, $expressNo);
		return $this->recv_updateOrderLogisticsBySubOrderSn();
	}
	
	public function send_updateOrderLogisticsBySubOrderSn( $partnerId, $channelId, $subOrderSn, $expressCompany, $expressNo){
		
		$this->initInvocation("updateOrderLogisticsBySubOrderSn");
		$args = new \com\vip\vop\vcloud\order\OrderService_updateOrderLogisticsBySubOrderSn_args();
		
		$args->partnerId = $partnerId;
		
		$args->channelId = $channelId;
		
		$args->subOrderSn = $subOrderSn;
		
		$args->expressCompany = $expressCompany;
		
		$args->expressNo = $expressNo;
		
		$this->send_base($args);
	}
	
	public function recv_updateOrderLogisticsBySubOrderSn(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_updateOrderLogisticsBySubOrderSn_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateRemark( $channelId, $subOrderSn, $remark){
		
		$this->send_updateRemark( $channelId, $subOrderSn, $remark);
		return $this->recv_updateRemark();
	}
	
	public function send_updateRemark( $channelId, $subOrderSn, $remark){
		
		$this->initInvocation("updateRemark");
		$args = new \com\vip\vop\vcloud\order\OrderService_updateRemark_args();
		
		$args->channelId = $channelId;
		
		$args->subOrderSn = $subOrderSn;
		
		$args->remark = $remark;
		
		$this->send_base($args);
	}
	
	public function recv_updateRemark(){
		
		$result = new \com\vip\vop\vcloud\order\OrderService_updateRemark_result();
		$this->receive_base($result);
		
	}
	
	
}




class OrderService_acceptOrder_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\OrderStoreReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_appointOrderStore_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\OrderStoreReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_cancelShipment_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	public $account = null;
	public $storeId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'account'
			),
			5 => array(
			'var' => 'storeId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->account);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->storeId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->account !== null) {
			
			$xfer += $output->writeFieldBegin('account');
			$xfer += $output->writeString($this->account);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_checkMultiParcel_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $subOrderSn = null;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'subOrderSn'
			),
			4 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_confirmDelivery_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\OrderStoreReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_confirmDeliveryPartly_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\ConfirmDeliveryPartlyReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_confirmNoStock_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\OrderStoreReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_confirmShipment_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	public $account = null;
	public $storeId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'account'
			),
			5 => array(
			'var' => 'storeId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->account);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->storeId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('account');
		$xfer += $output->writeString($this->account);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_confirmUserRefuse_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\OrderStoreReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getChannelOrderAndDetail_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	public $orderType = null;
	public $pagination = null;
	public $warehouses = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'orderType'
			),
			6 => array(
			'var' => 'pagination'
			),
			7 => array(
			'var' => 'warehouses'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
			if (isset($vals['warehouses'])){
				
				$this->warehouses = $vals['warehouses'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->orderType); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pagination = new \com\vip\vop\vcloud\common\api\Pagination();
			$this->pagination->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->warehouses = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->warehouses[$_size0++] = $elem0;
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
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeI32($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pagination !== null) {
			
			$xfer += $output->writeFieldBegin('pagination');
			
			if (!is_object($this->pagination)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pagination->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouses !== null) {
			
			$xfer += $output->writeFieldBegin('warehouses');
			
			if (!is_array($this->warehouses)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouses as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getChannelOrderByOrderSn_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $subOrderSn = null;
	public $channelId = null;
	public $storeId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'subOrderSn'
			),
			4 => array(
			'var' => 'channelId'
			),
			5 => array(
			'var' => 'storeId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->storeId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getChannelOrderItems_args {
	
	static $_TSPEC;
	public $orderQueryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderQueryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderQueryRequest'])){
				
				$this->orderQueryRequest = $vals['orderQueryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderQueryRequest = new \com\vip\vop\vcloud\order\OrderQueryRequest();
			$this->orderQueryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderQueryRequest !== null) {
			
			$xfer += $output->writeFieldBegin('orderQueryRequest');
			
			if (!is_object($this->orderQueryRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->orderQueryRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getOfficialMemberByOrderSn_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getOrderByChannelIdAndOrderSn_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
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




class OrderService_getOrderByExpressNo_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $subOrderSn = null;
	public $channelId = null;
	public $expressNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'subOrderSn'
			),
			4 => array(
			'var' => 'channelId'
			),
			5 => array(
			'var' => 'expressNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['expressNo'])){
				
				$this->expressNo = $vals['expressNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->expressNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressNo !== null) {
			
			$xfer += $output->writeFieldBegin('expressNo');
			$xfer += $output->writeString($this->expressNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getOrderLogisticsByOrderSn_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	public $storeId = null;
	public $subOrderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'storeId'
			),
			5 => array(
			'var' => 'subOrderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->storeId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getOrderOptLog_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	public $storeId = null;
	public $subOrderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'storeId'
			),
			5 => array(
			'var' => 'subOrderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->storeId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeId !== null) {
			
			$xfer += $output->writeFieldBegin('storeId');
			$xfer += $output->writeI64($this->storeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_getWaybillDetails_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	public $startTime = null;
	public $endTime = null;
	public $pagination = null;
	public $warehouses = null;
	public $orderType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'startTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'pagination'
			),
			6 => array(
			'var' => 'warehouses'
			),
			7 => array(
			'var' => 'orderType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
			if (isset($vals['warehouses'])){
				
				$this->warehouses = $vals['warehouses'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->startTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endTime); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pagination = new \com\vip\vop\vcloud\common\api\Pagination();
			$this->pagination->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->warehouses = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->warehouses[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->orderType); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pagination !== null) {
			
			$xfer += $output->writeFieldBegin('pagination');
			
			if (!is_object($this->pagination)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pagination->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouses !== null) {
			
			$xfer += $output->writeFieldBegin('warehouses');
			
			if (!is_array($this->warehouses)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouses as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeI32($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_healthCheck_args {
	
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




class OrderService_listSubOrder_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $channelId = null;
	public $subOrderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'subOrderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_listWarehouseByOrderSn_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
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




class OrderService_pullOrders_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $partnerId = null;
	public $orderSn = null;
	public $beginTime = null;
	public $endTime = null;
	
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
			'var' => 'endTime'
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
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
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
			
			$input->readI64($this->endTime);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_refuseOrder_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\order\OrderStoreReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_storeConfirmed_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $subOrderSn = null;
	public $isConfirmed = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'subOrderSn'
			),
			3 => array(
			'var' => 'isConfirmed'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['isConfirmed'])){
				
				$this->isConfirmed = $vals['isConfirmed'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->isConfirmed); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subOrderSn');
		$xfer += $output->writeString($this->subOrderSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isConfirmed !== null) {
			
			$xfer += $output->writeFieldBegin('isConfirmed');
			$xfer += $output->writeI32($this->isConfirmed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_updateDeliveryStatus_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $orderSn = null;
	public $deliveryNo = null;
	public $acceptTime = null;
	public $acceptAddress = null;
	public $remark = null;
	public $opCode = null;
	public $opId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'deliveryNo'
			),
			4 => array(
			'var' => 'acceptTime'
			),
			5 => array(
			'var' => 'acceptAddress'
			),
			6 => array(
			'var' => 'remark'
			),
			7 => array(
			'var' => 'opCode'
			),
			8 => array(
			'var' => 'opId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['deliveryNo'])){
				
				$this->deliveryNo = $vals['deliveryNo'];
			}
			
			
			if (isset($vals['acceptTime'])){
				
				$this->acceptTime = $vals['acceptTime'];
			}
			
			
			if (isset($vals['acceptAddress'])){
				
				$this->acceptAddress = $vals['acceptAddress'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['opCode'])){
				
				$this->opCode = $vals['opCode'];
			}
			
			
			if (isset($vals['opId'])){
				
				$this->opId = $vals['opId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->deliveryNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->acceptTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->acceptAddress);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->remark);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->opCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->opId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryNo !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryNo');
			$xfer += $output->writeString($this->deliveryNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptTime !== null) {
			
			$xfer += $output->writeFieldBegin('acceptTime');
			$xfer += $output->writeI64($this->acceptTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptAddress !== null) {
			
			$xfer += $output->writeFieldBegin('acceptAddress');
			$xfer += $output->writeString($this->acceptAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opCode !== null) {
			
			$xfer += $output->writeFieldBegin('opCode');
			$xfer += $output->writeString($this->opCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->opId !== null) {
			
			$xfer += $output->writeFieldBegin('opId');
			$xfer += $output->writeString($this->opId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_updateOrderLogisticsBySubOrderSn_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	public $subOrderSn = null;
	public $expressCompany = null;
	public $expressNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			3 => array(
			'var' => 'channelId'
			),
			4 => array(
			'var' => 'subOrderSn'
			),
			5 => array(
			'var' => 'expressCompany'
			),
			6 => array(
			'var' => 'expressNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['expressCompany'])){
				
				$this->expressCompany = $vals['expressCompany'];
			}
			
			
			if (isset($vals['expressNo'])){
				
				$this->expressNo = $vals['expressNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->expressCompany);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->expressNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressCompany !== null) {
			
			$xfer += $output->writeFieldBegin('expressCompany');
			$xfer += $output->writeString($this->expressCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressNo !== null) {
			
			$xfer += $output->writeFieldBegin('expressNo');
			$xfer += $output->writeString($this->expressNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OrderService_updateRemark_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $subOrderSn = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'subOrderSn'
			),
			3 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->subOrderSn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->remark);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subOrderSn');
		$xfer += $output->writeString($this->subOrderSn);
		
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




class OrderService_acceptOrder_result {
	
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




class OrderService_appointOrderStore_result {
	
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




class OrderService_cancelShipment_result {
	
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




class OrderService_checkMultiParcel_result {
	
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




class OrderService_confirmDelivery_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\order\Express();
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




class OrderService_confirmDeliveryPartly_result {
	
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




class OrderService_confirmNoStock_result {
	
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




class OrderService_confirmShipment_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\order\Express();
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




class OrderService_confirmUserRefuse_result {
	
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




class OrderService_getChannelOrderAndDetail_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\WayBillResponse();
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




class OrderService_getChannelOrderByOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\OrderItem();
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




class OrderService_getChannelOrderItems_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\OrderResponse();
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




class OrderService_getOfficialMemberByOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\OfficialMember();
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




class OrderService_getOrderByChannelIdAndOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\OrderItem();
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




class OrderService_getOrderByExpressNo_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\OrderItem();
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




class OrderService_getOrderLogisticsByOrderSn_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\order\OrderLogistics();
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




class OrderService_getOrderOptLog_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\order\OrderOptLog();
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




class OrderService_getWaybillDetails_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\order\WayBillResponse();
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




class OrderService_healthCheck_result {
	
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




class OrderService_listSubOrder_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\order\SubOrder();
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




class OrderService_listWarehouseByOrderSn_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\warehouse\api\Warehouse();
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




class OrderService_pullOrders_result {
	
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




class OrderService_refuseOrder_result {
	
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




class OrderService_storeConfirmed_result {
	
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




class OrderService_updateDeliveryStatus_result {
	
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




class OrderService_updateOrderLogisticsBySubOrderSn_result {
	
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




class OrderService_updateRemark_result {
	
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