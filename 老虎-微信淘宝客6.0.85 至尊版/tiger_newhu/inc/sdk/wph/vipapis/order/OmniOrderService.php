<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;
interface OmniOrderServiceIf{
	
	
	public function batchConfirmDelivery(\vipapis\order\BatchConfirmDeliveryRequest $request);
	
	public function confirmDelivery( $vendor_id, $store_sn, $package_no, $is_preformed, $orders, $estimate_delivery_time);
	
	public function confirmInvoice( $vendor_id,\vipapis\order\OrderInvoiceReq $order_invoice);
	
	public function confirmOrderInvoice( $vendor_id, $order_invoices);
	
	public function confirmOxoDelivery( $vendor_id, $order_id, $store_sn, $notice_type, $package_no, $estimate_delivery_time);
	
	public function confirmOxoShipment( $vendor_id, $order_id, $store_sn, $carrier_code, $transport_no);
	
	public function confirmStoreDelivery( $vendor_id, $order_id, $store_sn, $package_no, $estimate_delivery_time);
	
	public function getDeliveryInfo( $vendor_id, $store_sn, $orders);
	
	public function getInventoryCancelledOrders(\vipapis\order\InventoryCancelledOrdersRequest $inventoryCancelledOrdersRequest);
	
	public function getInventoryDeductOrders(\vipapis\order\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest);
	
	public function getInventoryOccupiedOrders(\vipapis\order\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest);
	
	public function getOmniCancelledOrders( $vendor_id, $brand_id, $order_type, $st_query_time, $et_query_time, $limit, $page);
	
	public function getOmniOrders( $vendor_id, $brand_id, $business_type, $st_query_time, $et_query_time, $limit, $page);
	
	public function getOrderEInvoiceInfo( $vendorId, $orders);
	
	public function getOrderInvoice( $vendor_id, $orders);
	
	public function getOxoOrders(\vipapis\order\OxoOrderRequest $ordersRequest);
	
	public function getOxoReturnOrders(\vipapis\order\OxoReturnOrderRequest $request);
	
	public function healthCheck();
	
	public function printInvoice( $vendor_id, $store_sn, $batch_no, $orders,\vipapis\order\ExtInfo $ext_info, $print_type);
	
	public function pushOrderEInvoice();
	
	public function pushOrderPackageWeight( $vendor_id, $store_sn, $orders);
	
	public function pushQCResult( $vendor_id, $store_sn, $orders);
	
	public function replyStoreSn( $vendor_id, $order_store_mapping);
	
	public function resetConfirmStoreState( $vendor_id, $orderSn);
	
	public function responseOrderStore( $vendor_id, $order_id, $store_sn);
	
	public function updateStoreSn( $vendor_id, $order_store_mapping);
	
}

class _OmniOrderServiceClient extends \Osp\Base\OspStub implements \vipapis\order\OmniOrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.order.OmniOrderService", "1.0.0");
	}
	
	
	public function batchConfirmDelivery(\vipapis\order\BatchConfirmDeliveryRequest $request){
		
		$this->send_batchConfirmDelivery( $request);
		return $this->recv_batchConfirmDelivery();
	}
	
	public function send_batchConfirmDelivery(\vipapis\order\BatchConfirmDeliveryRequest $request){
		
		$this->initInvocation("batchConfirmDelivery");
		$args = new \vipapis\order\OmniOrderService_batchConfirmDelivery_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_batchConfirmDelivery(){
		
		$result = new \vipapis\order\OmniOrderService_batchConfirmDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmDelivery( $vendor_id, $store_sn, $package_no, $is_preformed, $orders, $estimate_delivery_time){
		
		$this->send_confirmDelivery( $vendor_id, $store_sn, $package_no, $is_preformed, $orders, $estimate_delivery_time);
		return $this->recv_confirmDelivery();
	}
	
	public function send_confirmDelivery( $vendor_id, $store_sn, $package_no, $is_preformed, $orders, $estimate_delivery_time){
		
		$this->initInvocation("confirmDelivery");
		$args = new \vipapis\order\OmniOrderService_confirmDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->store_sn = $store_sn;
		
		$args->package_no = $package_no;
		
		$args->is_preformed = $is_preformed;
		
		$args->orders = $orders;
		
		$args->estimate_delivery_time = $estimate_delivery_time;
		
		$this->send_base($args);
	}
	
	public function recv_confirmDelivery(){
		
		$result = new \vipapis\order\OmniOrderService_confirmDelivery_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmInvoice( $vendor_id,\vipapis\order\OrderInvoiceReq $order_invoice){
		
		$this->send_confirmInvoice( $vendor_id, $order_invoice);
		return $this->recv_confirmInvoice();
	}
	
	public function send_confirmInvoice( $vendor_id,\vipapis\order\OrderInvoiceReq $order_invoice){
		
		$this->initInvocation("confirmInvoice");
		$args = new \vipapis\order\OmniOrderService_confirmInvoice_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_invoice = $order_invoice;
		
		$this->send_base($args);
	}
	
	public function recv_confirmInvoice(){
		
		$result = new \vipapis\order\OmniOrderService_confirmInvoice_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmOrderInvoice( $vendor_id, $order_invoices){
		
		$this->send_confirmOrderInvoice( $vendor_id, $order_invoices);
		return $this->recv_confirmOrderInvoice();
	}
	
	public function send_confirmOrderInvoice( $vendor_id, $order_invoices){
		
		$this->initInvocation("confirmOrderInvoice");
		$args = new \vipapis\order\OmniOrderService_confirmOrderInvoice_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_invoices = $order_invoices;
		
		$this->send_base($args);
	}
	
	public function recv_confirmOrderInvoice(){
		
		$result = new \vipapis\order\OmniOrderService_confirmOrderInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmOxoDelivery( $vendor_id, $order_id, $store_sn, $notice_type, $package_no, $estimate_delivery_time){
		
		$this->send_confirmOxoDelivery( $vendor_id, $order_id, $store_sn, $notice_type, $package_no, $estimate_delivery_time);
		return $this->recv_confirmOxoDelivery();
	}
	
	public function send_confirmOxoDelivery( $vendor_id, $order_id, $store_sn, $notice_type, $package_no, $estimate_delivery_time){
		
		$this->initInvocation("confirmOxoDelivery");
		$args = new \vipapis\order\OmniOrderService_confirmOxoDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->store_sn = $store_sn;
		
		$args->notice_type = $notice_type;
		
		$args->package_no = $package_no;
		
		$args->estimate_delivery_time = $estimate_delivery_time;
		
		$this->send_base($args);
	}
	
	public function recv_confirmOxoDelivery(){
		
		$result = new \vipapis\order\OmniOrderService_confirmOxoDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmOxoShipment( $vendor_id, $order_id, $store_sn, $carrier_code, $transport_no){
		
		$this->send_confirmOxoShipment( $vendor_id, $order_id, $store_sn, $carrier_code, $transport_no);
		return $this->recv_confirmOxoShipment();
	}
	
	public function send_confirmOxoShipment( $vendor_id, $order_id, $store_sn, $carrier_code, $transport_no){
		
		$this->initInvocation("confirmOxoShipment");
		$args = new \vipapis\order\OmniOrderService_confirmOxoShipment_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->store_sn = $store_sn;
		
		$args->carrier_code = $carrier_code;
		
		$args->transport_no = $transport_no;
		
		$this->send_base($args);
	}
	
	public function recv_confirmOxoShipment(){
		
		$result = new \vipapis\order\OmniOrderService_confirmOxoShipment_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmStoreDelivery( $vendor_id, $order_id, $store_sn, $package_no, $estimate_delivery_time){
		
		$this->send_confirmStoreDelivery( $vendor_id, $order_id, $store_sn, $package_no, $estimate_delivery_time);
		return $this->recv_confirmStoreDelivery();
	}
	
	public function send_confirmStoreDelivery( $vendor_id, $order_id, $store_sn, $package_no, $estimate_delivery_time){
		
		$this->initInvocation("confirmStoreDelivery");
		$args = new \vipapis\order\OmniOrderService_confirmStoreDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->store_sn = $store_sn;
		
		$args->package_no = $package_no;
		
		$args->estimate_delivery_time = $estimate_delivery_time;
		
		$this->send_base($args);
	}
	
	public function recv_confirmStoreDelivery(){
		
		$result = new \vipapis\order\OmniOrderService_confirmStoreDelivery_result();
		$this->receive_base($result);
		
	}
	
	
	public function getDeliveryInfo( $vendor_id, $store_sn, $orders){
		
		$this->send_getDeliveryInfo( $vendor_id, $store_sn, $orders);
		return $this->recv_getDeliveryInfo();
	}
	
	public function send_getDeliveryInfo( $vendor_id, $store_sn, $orders){
		
		$this->initInvocation("getDeliveryInfo");
		$args = new \vipapis\order\OmniOrderService_getDeliveryInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->store_sn = $store_sn;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_getDeliveryInfo(){
		
		$result = new \vipapis\order\OmniOrderService_getDeliveryInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryCancelledOrders(\vipapis\order\InventoryCancelledOrdersRequest $inventoryCancelledOrdersRequest){
		
		$this->send_getInventoryCancelledOrders( $inventoryCancelledOrdersRequest);
		return $this->recv_getInventoryCancelledOrders();
	}
	
	public function send_getInventoryCancelledOrders(\vipapis\order\InventoryCancelledOrdersRequest $inventoryCancelledOrdersRequest){
		
		$this->initInvocation("getInventoryCancelledOrders");
		$args = new \vipapis\order\OmniOrderService_getInventoryCancelledOrders_args();
		
		$args->inventoryCancelledOrdersRequest = $inventoryCancelledOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryCancelledOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getInventoryCancelledOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryDeductOrders(\vipapis\order\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->send_getInventoryDeductOrders( $inventoryDeductOrdersRequest);
		return $this->recv_getInventoryDeductOrders();
	}
	
	public function send_getInventoryDeductOrders(\vipapis\order\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->initInvocation("getInventoryDeductOrders");
		$args = new \vipapis\order\OmniOrderService_getInventoryDeductOrders_args();
		
		$args->inventoryDeductOrdersRequest = $inventoryDeductOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryDeductOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getInventoryDeductOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryOccupiedOrders(\vipapis\order\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest){
		
		$this->send_getInventoryOccupiedOrders( $inventoryOccupiedOrdersRequest);
		return $this->recv_getInventoryOccupiedOrders();
	}
	
	public function send_getInventoryOccupiedOrders(\vipapis\order\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest){
		
		$this->initInvocation("getInventoryOccupiedOrders");
		$args = new \vipapis\order\OmniOrderService_getInventoryOccupiedOrders_args();
		
		$args->inventoryOccupiedOrdersRequest = $inventoryOccupiedOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryOccupiedOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getInventoryOccupiedOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOmniCancelledOrders( $vendor_id, $brand_id, $order_type, $st_query_time, $et_query_time, $limit, $page){
		
		$this->send_getOmniCancelledOrders( $vendor_id, $brand_id, $order_type, $st_query_time, $et_query_time, $limit, $page);
		return $this->recv_getOmniCancelledOrders();
	}
	
	public function send_getOmniCancelledOrders( $vendor_id, $brand_id, $order_type, $st_query_time, $et_query_time, $limit, $page){
		
		$this->initInvocation("getOmniCancelledOrders");
		$args = new \vipapis\order\OmniOrderService_getOmniCancelledOrders_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->order_type = $order_type;
		
		$args->st_query_time = $st_query_time;
		
		$args->et_query_time = $et_query_time;
		
		$args->limit = $limit;
		
		$args->page = $page;
		
		$this->send_base($args);
	}
	
	public function recv_getOmniCancelledOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getOmniCancelledOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOmniOrders( $vendor_id, $brand_id, $business_type, $st_query_time, $et_query_time, $limit, $page){
		
		$this->send_getOmniOrders( $vendor_id, $brand_id, $business_type, $st_query_time, $et_query_time, $limit, $page);
		return $this->recv_getOmniOrders();
	}
	
	public function send_getOmniOrders( $vendor_id, $brand_id, $business_type, $st_query_time, $et_query_time, $limit, $page){
		
		$this->initInvocation("getOmniOrders");
		$args = new \vipapis\order\OmniOrderService_getOmniOrders_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->business_type = $business_type;
		
		$args->st_query_time = $st_query_time;
		
		$args->et_query_time = $et_query_time;
		
		$args->limit = $limit;
		
		$args->page = $page;
		
		$this->send_base($args);
	}
	
	public function recv_getOmniOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getOmniOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderEInvoiceInfo( $vendorId, $orders){
		
		$this->send_getOrderEInvoiceInfo( $vendorId, $orders);
		return $this->recv_getOrderEInvoiceInfo();
	}
	
	public function send_getOrderEInvoiceInfo( $vendorId, $orders){
		
		$this->initInvocation("getOrderEInvoiceInfo");
		$args = new \vipapis\order\OmniOrderService_getOrderEInvoiceInfo_args();
		
		$args->vendorId = $vendorId;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderEInvoiceInfo(){
		
		$result = new \vipapis\order\OmniOrderService_getOrderEInvoiceInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderInvoice( $vendor_id, $orders){
		
		$this->send_getOrderInvoice( $vendor_id, $orders);
		return $this->recv_getOrderInvoice();
	}
	
	public function send_getOrderInvoice( $vendor_id, $orders){
		
		$this->initInvocation("getOrderInvoice");
		$args = new \vipapis\order\OmniOrderService_getOrderInvoice_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderInvoice(){
		
		$result = new \vipapis\order\OmniOrderService_getOrderInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOxoOrders(\vipapis\order\OxoOrderRequest $ordersRequest){
		
		$this->send_getOxoOrders( $ordersRequest);
		return $this->recv_getOxoOrders();
	}
	
	public function send_getOxoOrders(\vipapis\order\OxoOrderRequest $ordersRequest){
		
		$this->initInvocation("getOxoOrders");
		$args = new \vipapis\order\OmniOrderService_getOxoOrders_args();
		
		$args->ordersRequest = $ordersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getOxoOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getOxoOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOxoReturnOrders(\vipapis\order\OxoReturnOrderRequest $request){
		
		$this->send_getOxoReturnOrders( $request);
		return $this->recv_getOxoReturnOrders();
	}
	
	public function send_getOxoReturnOrders(\vipapis\order\OxoReturnOrderRequest $request){
		
		$this->initInvocation("getOxoReturnOrders");
		$args = new \vipapis\order\OmniOrderService_getOxoReturnOrders_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getOxoReturnOrders(){
		
		$result = new \vipapis\order\OmniOrderService_getOxoReturnOrders_result();
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
		$args = new \vipapis\order\OmniOrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\order\OmniOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function printInvoice( $vendor_id, $store_sn, $batch_no, $orders,\vipapis\order\ExtInfo $ext_info, $print_type){
		
		$this->send_printInvoice( $vendor_id, $store_sn, $batch_no, $orders, $ext_info, $print_type);
		return $this->recv_printInvoice();
	}
	
	public function send_printInvoice( $vendor_id, $store_sn, $batch_no, $orders,\vipapis\order\ExtInfo $ext_info, $print_type){
		
		$this->initInvocation("printInvoice");
		$args = new \vipapis\order\OmniOrderService_printInvoice_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->store_sn = $store_sn;
		
		$args->batch_no = $batch_no;
		
		$args->orders = $orders;
		
		$args->ext_info = $ext_info;
		
		$args->print_type = $print_type;
		
		$this->send_base($args);
	}
	
	public function recv_printInvoice(){
		
		$result = new \vipapis\order\OmniOrderService_printInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOrderEInvoice(){
		
		$this->send_pushOrderEInvoice();
		return $this->recv_pushOrderEInvoice();
	}
	
	public function send_pushOrderEInvoice(){
		
		$this->initInvocation("pushOrderEInvoice");
		$args = new \vipapis\order\OmniOrderService_pushOrderEInvoice_args();
		
		$this->send_base($args);
	}
	
	public function recv_pushOrderEInvoice(){
		
		$result = new \vipapis\order\OmniOrderService_pushOrderEInvoice_result();
		$this->receive_base($result);
		
	}
	
	
	public function pushOrderPackageWeight( $vendor_id, $store_sn, $orders){
		
		$this->send_pushOrderPackageWeight( $vendor_id, $store_sn, $orders);
		return $this->recv_pushOrderPackageWeight();
	}
	
	public function send_pushOrderPackageWeight( $vendor_id, $store_sn, $orders){
		
		$this->initInvocation("pushOrderPackageWeight");
		$args = new \vipapis\order\OmniOrderService_pushOrderPackageWeight_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->store_sn = $store_sn;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_pushOrderPackageWeight(){
		
		$result = new \vipapis\order\OmniOrderService_pushOrderPackageWeight_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushQCResult( $vendor_id, $store_sn, $orders){
		
		$this->send_pushQCResult( $vendor_id, $store_sn, $orders);
		return $this->recv_pushQCResult();
	}
	
	public function send_pushQCResult( $vendor_id, $store_sn, $orders){
		
		$this->initInvocation("pushQCResult");
		$args = new \vipapis\order\OmniOrderService_pushQCResult_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->store_sn = $store_sn;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_pushQCResult(){
		
		$result = new \vipapis\order\OmniOrderService_pushQCResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function replyStoreSn( $vendor_id, $order_store_mapping){
		
		$this->send_replyStoreSn( $vendor_id, $order_store_mapping);
		return $this->recv_replyStoreSn();
	}
	
	public function send_replyStoreSn( $vendor_id, $order_store_mapping){
		
		$this->initInvocation("replyStoreSn");
		$args = new \vipapis\order\OmniOrderService_replyStoreSn_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_store_mapping = $order_store_mapping;
		
		$this->send_base($args);
	}
	
	public function recv_replyStoreSn(){
		
		$result = new \vipapis\order\OmniOrderService_replyStoreSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function resetConfirmStoreState( $vendor_id, $orderSn){
		
		$this->send_resetConfirmStoreState( $vendor_id, $orderSn);
		return $this->recv_resetConfirmStoreState();
	}
	
	public function send_resetConfirmStoreState( $vendor_id, $orderSn){
		
		$this->initInvocation("resetConfirmStoreState");
		$args = new \vipapis\order\OmniOrderService_resetConfirmStoreState_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_resetConfirmStoreState(){
		
		$result = new \vipapis\order\OmniOrderService_resetConfirmStoreState_result();
		$this->receive_base($result);
		
	}
	
	
	public function responseOrderStore( $vendor_id, $order_id, $store_sn){
		
		$this->send_responseOrderStore( $vendor_id, $order_id, $store_sn);
		return $this->recv_responseOrderStore();
	}
	
	public function send_responseOrderStore( $vendor_id, $order_id, $store_sn){
		
		$this->initInvocation("responseOrderStore");
		$args = new \vipapis\order\OmniOrderService_responseOrderStore_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_responseOrderStore(){
		
		$result = new \vipapis\order\OmniOrderService_responseOrderStore_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateStoreSn( $vendor_id, $order_store_mapping){
		
		$this->send_updateStoreSn( $vendor_id, $order_store_mapping);
		return $this->recv_updateStoreSn();
	}
	
	public function send_updateStoreSn( $vendor_id, $order_store_mapping){
		
		$this->initInvocation("updateStoreSn");
		$args = new \vipapis\order\OmniOrderService_updateStoreSn_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_store_mapping = $order_store_mapping;
		
		$this->send_base($args);
	}
	
	public function recv_updateStoreSn(){
		
		$result = new \vipapis\order\OmniOrderService_updateStoreSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class OmniOrderService_batchConfirmDelivery_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\order\BatchConfirmDeliveryRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_confirmDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $store_sn = null;
	public $package_no = null;
	public $is_preformed = null;
	public $orders = null;
	public $estimate_delivery_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'store_sn'
			),
			3 => array(
			'var' => 'package_no'
			),
			4 => array(
			'var' => 'is_preformed'
			),
			5 => array(
			'var' => 'orders'
			),
			6 => array(
			'var' => 'estimate_delivery_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['is_preformed'])){
				
				$this->is_preformed = $vals['is_preformed'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
			if (isset($vals['estimate_delivery_time'])){
				
				$this->estimate_delivery_time = $vals['estimate_delivery_time'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->package_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->is_preformed);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orders[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->estimate_delivery_time); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is_preformed');
		$xfer += $output->writeBool($this->is_preformed);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->estimate_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_delivery_time');
			$xfer += $output->writeI64($this->estimate_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_confirmInvoice_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_invoice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_invoice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_invoice'])){
				
				$this->order_invoice = $vals['order_invoice'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->order_invoice = new \vipapis\order\OrderInvoiceReq();
			$this->order_invoice->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_invoice');
		
		if (!is_object($this->order_invoice)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->order_invoice->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_confirmOrderInvoice_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_invoices = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_invoices'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_invoices'])){
				
				$this->order_invoices = $vals['order_invoices'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->order_invoices = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\order\OrderInvoiceReq();
					$elem0->read($input);
					
					$this->order_invoices[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_invoices');
		
		if (!is_array($this->order_invoices)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_invoices as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_confirmOxoDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $store_sn = null;
	public $notice_type = null;
	public $package_no = null;
	public $estimate_delivery_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'store_sn'
			),
			4 => array(
			'var' => 'notice_type'
			),
			5 => array(
			'var' => 'package_no'
			),
			6 => array(
			'var' => 'estimate_delivery_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['notice_type'])){
				
				$this->notice_type = $vals['notice_type'];
			}
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['estimate_delivery_time'])){
				
				$this->estimate_delivery_time = $vals['estimate_delivery_time'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->notice_type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->package_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->estimate_delivery_time); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->notice_type !== null) {
			
			$xfer += $output->writeFieldBegin('notice_type');
			$xfer += $output->writeByte($this->notice_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimate_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_delivery_time');
			$xfer += $output->writeI64($this->estimate_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_confirmOxoShipment_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $store_sn = null;
	public $carrier_code = null;
	public $transport_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'store_sn'
			),
			4 => array(
			'var' => 'carrier_code'
			),
			5 => array(
			'var' => 'transport_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transport_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_confirmStoreDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $store_sn = null;
	public $package_no = null;
	public $estimate_delivery_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'store_sn'
			),
			4 => array(
			'var' => 'package_no'
			),
			5 => array(
			'var' => 'estimate_delivery_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['estimate_delivery_time'])){
				
				$this->estimate_delivery_time = $vals['estimate_delivery_time'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->package_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->estimate_delivery_time); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimate_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_delivery_time');
			$xfer += $output->writeI64($this->estimate_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getDeliveryInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $store_sn = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'store_sn'
			),
			3 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orders[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getInventoryCancelledOrders_args {
	
	static $_TSPEC;
	public $inventoryCancelledOrdersRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'inventoryCancelledOrdersRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['inventoryCancelledOrdersRequest'])){
				
				$this->inventoryCancelledOrdersRequest = $vals['inventoryCancelledOrdersRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->inventoryCancelledOrdersRequest = new \vipapis\order\InventoryCancelledOrdersRequest();
			$this->inventoryCancelledOrdersRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->inventoryCancelledOrdersRequest !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryCancelledOrdersRequest');
			
			if (!is_object($this->inventoryCancelledOrdersRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->inventoryCancelledOrdersRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getInventoryDeductOrders_args {
	
	static $_TSPEC;
	public $inventoryDeductOrdersRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'inventoryDeductOrdersRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['inventoryDeductOrdersRequest'])){
				
				$this->inventoryDeductOrdersRequest = $vals['inventoryDeductOrdersRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->inventoryDeductOrdersRequest = new \vipapis\order\InventoryDeductOrdersRequest();
			$this->inventoryDeductOrdersRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->inventoryDeductOrdersRequest !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryDeductOrdersRequest');
			
			if (!is_object($this->inventoryDeductOrdersRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->inventoryDeductOrdersRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getInventoryOccupiedOrders_args {
	
	static $_TSPEC;
	public $inventoryOccupiedOrdersRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'inventoryOccupiedOrdersRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['inventoryOccupiedOrdersRequest'])){
				
				$this->inventoryOccupiedOrdersRequest = $vals['inventoryOccupiedOrdersRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->inventoryOccupiedOrdersRequest = new \vipapis\order\InventoryOccupiedOrdersRequest();
			$this->inventoryOccupiedOrdersRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->inventoryOccupiedOrdersRequest !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryOccupiedOrdersRequest');
			
			if (!is_object($this->inventoryOccupiedOrdersRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->inventoryOccupiedOrdersRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getOmniCancelledOrders_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $order_type = null;
	public $st_query_time = null;
	public $et_query_time = null;
	public $limit = null;
	public $page = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'order_type'
			),
			4 => array(
			'var' => 'st_query_time'
			),
			5 => array(
			'var' => 'et_query_time'
			),
			6 => array(
			'var' => 'limit'
			),
			7 => array(
			'var' => 'page'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['st_query_time'])){
				
				$this->st_query_time = $vals['st_query_time'];
			}
			
			
			if (isset($vals['et_query_time'])){
				
				$this->et_query_time = $vals['et_query_time'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->order_type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->st_query_time); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->et_query_time); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI64($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeByte($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('st_query_time');
		$xfer += $output->writeI64($this->st_query_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('et_query_time');
		$xfer += $output->writeI64($this->et_query_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getOmniOrders_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $business_type = null;
	public $st_query_time = null;
	public $et_query_time = null;
	public $limit = null;
	public $page = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'business_type'
			),
			4 => array(
			'var' => 'st_query_time'
			),
			5 => array(
			'var' => 'et_query_time'
			),
			6 => array(
			'var' => 'limit'
			),
			7 => array(
			'var' => 'page'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['business_type'])){
				
				$this->business_type = $vals['business_type'];
			}
			
			
			if (isset($vals['st_query_time'])){
				
				$this->st_query_time = $vals['st_query_time'];
			}
			
			
			if (isset($vals['et_query_time'])){
				
				$this->et_query_time = $vals['et_query_time'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->business_type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->st_query_time); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->et_query_time); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI64($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->business_type !== null) {
			
			$xfer += $output->writeFieldBegin('business_type');
			$xfer += $output->writeByte($this->business_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('st_query_time');
		$xfer += $output->writeI64($this->st_query_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('et_query_time');
		$xfer += $output->writeI64($this->et_query_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getOrderEInvoiceInfo_args {
	
	static $_TSPEC;
	public $vendorId = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorId'
			),
			2 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendorId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orders[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendorId');
		$xfer += $output->writeI32($this->vendorId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getOrderInvoice_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->orders[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getOxoOrders_args {
	
	static $_TSPEC;
	public $ordersRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ordersRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ordersRequest'])){
				
				$this->ordersRequest = $vals['ordersRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->ordersRequest = new \vipapis\order\OxoOrderRequest();
			$this->ordersRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->ordersRequest !== null) {
			
			$xfer += $output->writeFieldBegin('ordersRequest');
			
			if (!is_object($this->ordersRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->ordersRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_getOxoReturnOrders_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\order\OxoReturnOrderRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_healthCheck_args {
	
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




class OmniOrderService_printInvoice_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $store_sn = null;
	public $batch_no = null;
	public $orders = null;
	public $ext_info = null;
	public $print_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'store_sn'
			),
			3 => array(
			'var' => 'batch_no'
			),
			4 => array(
			'var' => 'orders'
			),
			5 => array(
			'var' => 'ext_info'
			),
			6 => array(
			'var' => 'print_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
			if (isset($vals['ext_info'])){
				
				$this->ext_info = $vals['ext_info'];
			}
			
			
			if (isset($vals['print_type'])){
				
				$this->print_type = $vals['print_type'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->batch_no);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\order\OrderSeq();
					$elem0->read($input);
					
					$this->orders[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$this->ext_info = new \vipapis\order\ExtInfo();
			$this->ext_info->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->print_type); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ext_info !== null) {
			
			$xfer += $output->writeFieldBegin('ext_info');
			
			if (!is_object($this->ext_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->ext_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->print_type !== null) {
			
			$xfer += $output->writeFieldBegin('print_type');
			$xfer += $output->writeI32($this->print_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_pushOrderEInvoice_args {
	
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




class OmniOrderService_pushOrderPackageWeight_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $store_sn = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'store_sn'
			),
			3 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\order\OrderPackageWeight();
					$elem0->read($input);
					
					$this->orders[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_pushQCResult_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $store_sn = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'store_sn'
			),
			3 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\order\OrderQCResult();
					$elem1->read($input);
					
					$this->orders[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_replyStoreSn_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_store_mapping = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_store_mapping'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_store_mapping'])){
				
				$this->order_store_mapping = $vals['order_store_mapping'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->order_store_mapping = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\order\OrderStoreMapping();
					$elem1->read($input);
					
					$this->order_store_mapping[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_store_mapping');
		
		if (!is_array($this->order_store_mapping)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_store_mapping as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_resetConfirmStoreState_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_responseOrderStore_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'store_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('store_sn');
		$xfer += $output->writeString($this->store_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_updateStoreSn_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_store_mapping = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'order_store_mapping'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_store_mapping'])){
				
				$this->order_store_mapping = $vals['order_store_mapping'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->order_store_mapping = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\order\OrderStoreMappingEx();
					$elem0->read($input);
					
					$this->order_store_mapping[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_store_mapping');
		
		if (!is_array($this->order_store_mapping)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_store_mapping as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OmniOrderService_batchConfirmDelivery_result {
	
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
			
			
			$this->success = new \vipapis\order\BatchConfirmDeliveryResult();
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




class OmniOrderService_confirmDelivery_result {
	
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




class OmniOrderService_confirmInvoice_result {
	
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




class OmniOrderService_confirmOrderInvoice_result {
	
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
			
			
			$this->success = new \vipapis\order\OrderInvoiceConfirmResp();
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




class OmniOrderService_confirmOxoDelivery_result {
	
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
			
			
			$this->success = new \vipapis\order\ConfirmDeliveryResp();
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




class OmniOrderService_confirmOxoShipment_result {
	
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




class OmniOrderService_confirmStoreDelivery_result {
	
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




class OmniOrderService_getDeliveryInfo_result {
	
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
					
					$elem0 = new \vipapis\order\OrderDeliveryInfo();
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




class OmniOrderService_getInventoryCancelledOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\CancelledOrdersResponse();
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




class OmniOrderService_getInventoryDeductOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\InventoryDeductOrdersResponse();
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




class OmniOrderService_getInventoryOccupiedOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\OccupiedOrderResponse();
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




class OmniOrderService_getOmniCancelledOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\GetOmniCancelledOrdersResp();
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




class OmniOrderService_getOmniOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\GetOmniOrdersResp();
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




class OmniOrderService_getOrderEInvoiceInfo_result {
	
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
					
					$elem0 = new \vipapis\order\EInvoiceInfo();
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




class OmniOrderService_getOrderInvoice_result {
	
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
			
			
			$this->success = new \vipapis\order\OrderInvoiceQueryResp();
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




class OmniOrderService_getOxoOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\OxoOrderResponse();
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




class OmniOrderService_getOxoReturnOrders_result {
	
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
			
			
			$this->success = new \vipapis\order\OxoReturnOrderResponse();
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




class OmniOrderService_healthCheck_result {
	
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




class OmniOrderService_printInvoice_result {
	
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
			
			
			$this->success = new \vipapis\order\PrintInvoiceResp();
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




class OmniOrderService_pushOrderEInvoice_result {
	
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




class OmniOrderService_pushOrderPackageWeight_result {
	
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
			
			
			$this->success = new \vipapis\order\PushOrderPackageWeightResp();
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




class OmniOrderService_pushQCResult_result {
	
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
			
			
			$this->success = new \vipapis\order\PushQCResultResp();
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




class OmniOrderService_replyStoreSn_result {
	
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
			
			
			$this->success = new \vipapis\order\ReplyStoreSnResp();
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




class OmniOrderService_resetConfirmStoreState_result {
	
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




class OmniOrderService_responseOrderStore_result {
	
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




class OmniOrderService_updateStoreSn_result {
	
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
			
			
			$this->success = new \vipapis\order\UpdateStoreSnResp();
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