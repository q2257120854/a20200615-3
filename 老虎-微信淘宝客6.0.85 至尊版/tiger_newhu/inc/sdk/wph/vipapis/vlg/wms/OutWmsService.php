<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vlg\wms;
interface OutWmsServiceIf{
	
	
	public function callbackOrders( $sysKey, $warehouse, $orderSnList);
	
	public function callbackOutOubShipment( $sysKey, $warehouse, $orderSns);
	
	public function callbackOutZcodeApplys( $sysKey, $warehouse, $appNums);
	
	public function callbackReturnOrders( $sysKey, $warehouse, $ids);
	
	public function deliverOrderContainer( $sysKey, $warehouse, $orders);
	
	public function deliverSaleOrder( $sysKey, $warehouse, $sale_orders);
	
	public function getGlobalDeliverBatch( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsGlobalDeliverBatchParam $globalDeliverBatchInfo);
	
	public function getOrders( $sysKey, $warehouse, $orderSnList, $num);
	
	public function getOutOubShipments( $sysKey, $warehouse, $pageSize);
	
	public function getOutWmsPackageTransferOrders( $sysKey, $warehouse, $carrierCode, $customsCode, $orders);
	
	public function getOutZcodeApplys( $sysKey, $warehouse, $pageSize);
	
	public function getPoBatchList( $sysKey, $warehouse, $start_batch_id, $num, $po_no, $batch_no_list, $vendor_code, $total);
	
	public function getReturnOrders( $sysKey, $warehouse, $num);
	
	public function getTransferLadingBillS( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsLadingBillIDLParam $requestParam);
	
	public function healthCheck();
	
	public function pushOrderStatusList( $sysKey, $warehouse, $order_status_detail_list);
	
	public function pushOutInbShipment( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutInbShipmentInfo $outInbShipmentInfo);
	
	public function pushOutWmsOrderBatch( $sysKey, $warehouse, $warehouseCode, $orderBatchInfos);
	
	public function pushOutZcode( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsZcodeInfo $outWmsZcodeInfo);
	
	public function updateCarrierStatus( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\CarrierInfoRequest $carrierInfoRequest);
	
	public function updatePoBatchStatus( $sysKey, $warehouse, $batch_nos);
	
	public function uploadInvAdjustment( $sysKey, $warehouse, $invAdjustments);
	
	public function uploadReturnOrderStatus( $sysKey, $warehouse, $details);
	
	public function uploadReturnOutDetail( $sysKey, $warehouse, $details);
	
}

class _OutWmsServiceClient extends \Osp\Base\OspStub implements \vipapis\vlg\wms\OutWmsServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.vlg.wms.OutWmsService", "1.0.0");
	}
	
	
	public function callbackOrders( $sysKey, $warehouse, $orderSnList){
		
		$this->send_callbackOrders( $sysKey, $warehouse, $orderSnList);
		return $this->recv_callbackOrders();
	}
	
	public function send_callbackOrders( $sysKey, $warehouse, $orderSnList){
		
		$this->initInvocation("callbackOrders");
		$args = new \vipapis\vlg\wms\OutWmsService_callbackOrders_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->orderSnList = $orderSnList;
		
		$this->send_base($args);
	}
	
	public function recv_callbackOrders(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_callbackOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function callbackOutOubShipment( $sysKey, $warehouse, $orderSns){
		
		$this->send_callbackOutOubShipment( $sysKey, $warehouse, $orderSns);
		return $this->recv_callbackOutOubShipment();
	}
	
	public function send_callbackOutOubShipment( $sysKey, $warehouse, $orderSns){
		
		$this->initInvocation("callbackOutOubShipment");
		$args = new \vipapis\vlg\wms\OutWmsService_callbackOutOubShipment_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->orderSns = $orderSns;
		
		$this->send_base($args);
	}
	
	public function recv_callbackOutOubShipment(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_callbackOutOubShipment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function callbackOutZcodeApplys( $sysKey, $warehouse, $appNums){
		
		$this->send_callbackOutZcodeApplys( $sysKey, $warehouse, $appNums);
		return $this->recv_callbackOutZcodeApplys();
	}
	
	public function send_callbackOutZcodeApplys( $sysKey, $warehouse, $appNums){
		
		$this->initInvocation("callbackOutZcodeApplys");
		$args = new \vipapis\vlg\wms\OutWmsService_callbackOutZcodeApplys_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->appNums = $appNums;
		
		$this->send_base($args);
	}
	
	public function recv_callbackOutZcodeApplys(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_callbackOutZcodeApplys_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function callbackReturnOrders( $sysKey, $warehouse, $ids){
		
		$this->send_callbackReturnOrders( $sysKey, $warehouse, $ids);
		return $this->recv_callbackReturnOrders();
	}
	
	public function send_callbackReturnOrders( $sysKey, $warehouse, $ids){
		
		$this->initInvocation("callbackReturnOrders");
		$args = new \vipapis\vlg\wms\OutWmsService_callbackReturnOrders_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->ids = $ids;
		
		$this->send_base($args);
	}
	
	public function recv_callbackReturnOrders(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_callbackReturnOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deliverOrderContainer( $sysKey, $warehouse, $orders){
		
		$this->send_deliverOrderContainer( $sysKey, $warehouse, $orders);
		return $this->recv_deliverOrderContainer();
	}
	
	public function send_deliverOrderContainer( $sysKey, $warehouse, $orders){
		
		$this->initInvocation("deliverOrderContainer");
		$args = new \vipapis\vlg\wms\OutWmsService_deliverOrderContainer_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_deliverOrderContainer(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_deliverOrderContainer_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deliverSaleOrder( $sysKey, $warehouse, $sale_orders){
		
		$this->send_deliverSaleOrder( $sysKey, $warehouse, $sale_orders);
		return $this->recv_deliverSaleOrder();
	}
	
	public function send_deliverSaleOrder( $sysKey, $warehouse, $sale_orders){
		
		$this->initInvocation("deliverSaleOrder");
		$args = new \vipapis\vlg\wms\OutWmsService_deliverSaleOrder_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->sale_orders = $sale_orders;
		
		$this->send_base($args);
	}
	
	public function recv_deliverSaleOrder(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_deliverSaleOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getGlobalDeliverBatch( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsGlobalDeliverBatchParam $globalDeliverBatchInfo){
		
		$this->send_getGlobalDeliverBatch( $sysKey, $warehouse, $globalDeliverBatchInfo);
		return $this->recv_getGlobalDeliverBatch();
	}
	
	public function send_getGlobalDeliverBatch( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsGlobalDeliverBatchParam $globalDeliverBatchInfo){
		
		$this->initInvocation("getGlobalDeliverBatch");
		$args = new \vipapis\vlg\wms\OutWmsService_getGlobalDeliverBatch_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->globalDeliverBatchInfo = $globalDeliverBatchInfo;
		
		$this->send_base($args);
	}
	
	public function recv_getGlobalDeliverBatch(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getGlobalDeliverBatch_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrders( $sysKey, $warehouse, $orderSnList, $num){
		
		$this->send_getOrders( $sysKey, $warehouse, $orderSnList, $num);
		return $this->recv_getOrders();
	}
	
	public function send_getOrders( $sysKey, $warehouse, $orderSnList, $num){
		
		$this->initInvocation("getOrders");
		$args = new \vipapis\vlg\wms\OutWmsService_getOrders_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->orderSnList = $orderSnList;
		
		$args->num = $num;
		
		$this->send_base($args);
	}
	
	public function recv_getOrders(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOutOubShipments( $sysKey, $warehouse, $pageSize){
		
		$this->send_getOutOubShipments( $sysKey, $warehouse, $pageSize);
		return $this->recv_getOutOubShipments();
	}
	
	public function send_getOutOubShipments( $sysKey, $warehouse, $pageSize){
		
		$this->initInvocation("getOutOubShipments");
		$args = new \vipapis\vlg\wms\OutWmsService_getOutOubShipments_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getOutOubShipments(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getOutOubShipments_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOutWmsPackageTransferOrders( $sysKey, $warehouse, $carrierCode, $customsCode, $orders){
		
		$this->send_getOutWmsPackageTransferOrders( $sysKey, $warehouse, $carrierCode, $customsCode, $orders);
		return $this->recv_getOutWmsPackageTransferOrders();
	}
	
	public function send_getOutWmsPackageTransferOrders( $sysKey, $warehouse, $carrierCode, $customsCode, $orders){
		
		$this->initInvocation("getOutWmsPackageTransferOrders");
		$args = new \vipapis\vlg\wms\OutWmsService_getOutWmsPackageTransferOrders_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->carrierCode = $carrierCode;
		
		$args->customsCode = $customsCode;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_getOutWmsPackageTransferOrders(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getOutWmsPackageTransferOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOutZcodeApplys( $sysKey, $warehouse, $pageSize){
		
		$this->send_getOutZcodeApplys( $sysKey, $warehouse, $pageSize);
		return $this->recv_getOutZcodeApplys();
	}
	
	public function send_getOutZcodeApplys( $sysKey, $warehouse, $pageSize){
		
		$this->initInvocation("getOutZcodeApplys");
		$args = new \vipapis\vlg\wms\OutWmsService_getOutZcodeApplys_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getOutZcodeApplys(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getOutZcodeApplys_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoBatchList( $sysKey, $warehouse, $start_batch_id, $num, $po_no, $batch_no_list, $vendor_code, $total){
		
		$this->send_getPoBatchList( $sysKey, $warehouse, $start_batch_id, $num, $po_no, $batch_no_list, $vendor_code, $total);
		return $this->recv_getPoBatchList();
	}
	
	public function send_getPoBatchList( $sysKey, $warehouse, $start_batch_id, $num, $po_no, $batch_no_list, $vendor_code, $total){
		
		$this->initInvocation("getPoBatchList");
		$args = new \vipapis\vlg\wms\OutWmsService_getPoBatchList_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->start_batch_id = $start_batch_id;
		
		$args->num = $num;
		
		$args->po_no = $po_no;
		
		$args->batch_no_list = $batch_no_list;
		
		$args->vendor_code = $vendor_code;
		
		$args->total = $total;
		
		$this->send_base($args);
	}
	
	public function recv_getPoBatchList(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getPoBatchList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnOrders( $sysKey, $warehouse, $num){
		
		$this->send_getReturnOrders( $sysKey, $warehouse, $num);
		return $this->recv_getReturnOrders();
	}
	
	public function send_getReturnOrders( $sysKey, $warehouse, $num){
		
		$this->initInvocation("getReturnOrders");
		$args = new \vipapis\vlg\wms\OutWmsService_getReturnOrders_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->num = $num;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnOrders(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getReturnOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTransferLadingBillS( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsLadingBillIDLParam $requestParam){
		
		$this->send_getTransferLadingBillS( $sysKey, $warehouse, $requestParam);
		return $this->recv_getTransferLadingBillS();
	}
	
	public function send_getTransferLadingBillS( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsLadingBillIDLParam $requestParam){
		
		$this->initInvocation("getTransferLadingBillS");
		$args = new \vipapis\vlg\wms\OutWmsService_getTransferLadingBillS_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->requestParam = $requestParam;
		
		$this->send_base($args);
	}
	
	public function recv_getTransferLadingBillS(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_getTransferLadingBillS_result();
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
		$args = new \vipapis\vlg\wms\OutWmsService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOrderStatusList( $sysKey, $warehouse, $order_status_detail_list){
		
		$this->send_pushOrderStatusList( $sysKey, $warehouse, $order_status_detail_list);
		return $this->recv_pushOrderStatusList();
	}
	
	public function send_pushOrderStatusList( $sysKey, $warehouse, $order_status_detail_list){
		
		$this->initInvocation("pushOrderStatusList");
		$args = new \vipapis\vlg\wms\OutWmsService_pushOrderStatusList_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->order_status_detail_list = $order_status_detail_list;
		
		$this->send_base($args);
	}
	
	public function recv_pushOrderStatusList(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_pushOrderStatusList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOutInbShipment( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutInbShipmentInfo $outInbShipmentInfo){
		
		$this->send_pushOutInbShipment( $sysKey, $warehouse, $outInbShipmentInfo);
		return $this->recv_pushOutInbShipment();
	}
	
	public function send_pushOutInbShipment( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutInbShipmentInfo $outInbShipmentInfo){
		
		$this->initInvocation("pushOutInbShipment");
		$args = new \vipapis\vlg\wms\OutWmsService_pushOutInbShipment_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->outInbShipmentInfo = $outInbShipmentInfo;
		
		$this->send_base($args);
	}
	
	public function recv_pushOutInbShipment(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_pushOutInbShipment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOutWmsOrderBatch( $sysKey, $warehouse, $warehouseCode, $orderBatchInfos){
		
		$this->send_pushOutWmsOrderBatch( $sysKey, $warehouse, $warehouseCode, $orderBatchInfos);
		return $this->recv_pushOutWmsOrderBatch();
	}
	
	public function send_pushOutWmsOrderBatch( $sysKey, $warehouse, $warehouseCode, $orderBatchInfos){
		
		$this->initInvocation("pushOutWmsOrderBatch");
		$args = new \vipapis\vlg\wms\OutWmsService_pushOutWmsOrderBatch_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->warehouseCode = $warehouseCode;
		
		$args->orderBatchInfos = $orderBatchInfos;
		
		$this->send_base($args);
	}
	
	public function recv_pushOutWmsOrderBatch(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_pushOutWmsOrderBatch_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOutZcode( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsZcodeInfo $outWmsZcodeInfo){
		
		$this->send_pushOutZcode( $sysKey, $warehouse, $outWmsZcodeInfo);
		return $this->recv_pushOutZcode();
	}
	
	public function send_pushOutZcode( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\OutWmsZcodeInfo $outWmsZcodeInfo){
		
		$this->initInvocation("pushOutZcode");
		$args = new \vipapis\vlg\wms\OutWmsService_pushOutZcode_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->outWmsZcodeInfo = $outWmsZcodeInfo;
		
		$this->send_base($args);
	}
	
	public function recv_pushOutZcode(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_pushOutZcode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateCarrierStatus( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\CarrierInfoRequest $carrierInfoRequest){
		
		$this->send_updateCarrierStatus( $sysKey, $warehouse, $carrierInfoRequest);
		return $this->recv_updateCarrierStatus();
	}
	
	public function send_updateCarrierStatus( $sysKey, $warehouse,\com\vip\sce\vlg\osp\wms\service\CarrierInfoRequest $carrierInfoRequest){
		
		$this->initInvocation("updateCarrierStatus");
		$args = new \vipapis\vlg\wms\OutWmsService_updateCarrierStatus_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->carrierInfoRequest = $carrierInfoRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateCarrierStatus(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_updateCarrierStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updatePoBatchStatus( $sysKey, $warehouse, $batch_nos){
		
		$this->send_updatePoBatchStatus( $sysKey, $warehouse, $batch_nos);
		return $this->recv_updatePoBatchStatus();
	}
	
	public function send_updatePoBatchStatus( $sysKey, $warehouse, $batch_nos){
		
		$this->initInvocation("updatePoBatchStatus");
		$args = new \vipapis\vlg\wms\OutWmsService_updatePoBatchStatus_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->batch_nos = $batch_nos;
		
		$this->send_base($args);
	}
	
	public function recv_updatePoBatchStatus(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_updatePoBatchStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadInvAdjustment( $sysKey, $warehouse, $invAdjustments){
		
		$this->send_uploadInvAdjustment( $sysKey, $warehouse, $invAdjustments);
		return $this->recv_uploadInvAdjustment();
	}
	
	public function send_uploadInvAdjustment( $sysKey, $warehouse, $invAdjustments){
		
		$this->initInvocation("uploadInvAdjustment");
		$args = new \vipapis\vlg\wms\OutWmsService_uploadInvAdjustment_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->invAdjustments = $invAdjustments;
		
		$this->send_base($args);
	}
	
	public function recv_uploadInvAdjustment(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_uploadInvAdjustment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadReturnOrderStatus( $sysKey, $warehouse, $details){
		
		$this->send_uploadReturnOrderStatus( $sysKey, $warehouse, $details);
		return $this->recv_uploadReturnOrderStatus();
	}
	
	public function send_uploadReturnOrderStatus( $sysKey, $warehouse, $details){
		
		$this->initInvocation("uploadReturnOrderStatus");
		$args = new \vipapis\vlg\wms\OutWmsService_uploadReturnOrderStatus_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->details = $details;
		
		$this->send_base($args);
	}
	
	public function recv_uploadReturnOrderStatus(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_uploadReturnOrderStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadReturnOutDetail( $sysKey, $warehouse, $details){
		
		$this->send_uploadReturnOutDetail( $sysKey, $warehouse, $details);
		return $this->recv_uploadReturnOutDetail();
	}
	
	public function send_uploadReturnOutDetail( $sysKey, $warehouse, $details){
		
		$this->initInvocation("uploadReturnOutDetail");
		$args = new \vipapis\vlg\wms\OutWmsService_uploadReturnOutDetail_args();
		
		$args->sysKey = $sysKey;
		
		$args->warehouse = $warehouse;
		
		$args->details = $details;
		
		$this->send_base($args);
	}
	
	public function recv_uploadReturnOutDetail(){
		
		$result = new \vipapis\vlg\wms\OutWmsService_uploadReturnOutDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class OutWmsService_callbackOrders_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $orderSnList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'orderSnList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_callbackOutOubShipment_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $orderSns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'orderSns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSns'])){
				
				$this->orderSns = $vals['orderSns'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orderSns = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->orderSns[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSns');
		
		if (!is_array($this->orderSns)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orderSns as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_callbackOutZcodeApplys_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $appNums = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'appNums'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['appNums'])){
				
				$this->appNums = $vals['appNums'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->appNums = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->appNums[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appNums');
		
		if (!is_array($this->appNums)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->appNums as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_callbackReturnOrders_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $ids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'ids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['ids'])){
				
				$this->ids = $vals['ids'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->ids = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->ids[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ids');
		
		if (!is_array($this->ids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->ids as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_deliverOrderContainer_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sce\vlg\osp\wms\service\OrderContainer();
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
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




class OutWmsService_deliverSaleOrder_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $sale_orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'sale_orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sale_orders'])){
				
				$this->sale_orders = $vals['sale_orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->sale_orders = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sce\vlg\osp\wms\service\SaleOrders();
					$elem1->read($input);
					
					$this->sale_orders[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_orders');
		
		if (!is_array($this->sale_orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->sale_orders as $iter0){
			
			
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




class OutWmsService_getGlobalDeliverBatch_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $globalDeliverBatchInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'globalDeliverBatchInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['globalDeliverBatchInfo'])){
				
				$this->globalDeliverBatchInfo = $vals['globalDeliverBatchInfo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->globalDeliverBatchInfo = new \com\vip\sce\vlg\osp\wms\service\OutWmsGlobalDeliverBatchParam();
			$this->globalDeliverBatchInfo->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('globalDeliverBatchInfo');
		
		if (!is_object($this->globalDeliverBatchInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->globalDeliverBatchInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_getOrders_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $orderSnList = null;
	public $num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'orderSnList'
			),
			4 => array(
			'var' => 'num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSnList'])){
				
				$this->orderSnList = $vals['orderSnList'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
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
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
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




class OutWmsService_getOutOubShipments_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_getOutWmsPackageTransferOrders_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $carrierCode = null;
	public $customsCode = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'carrierCode'
			),
			4 => array(
			'var' => 'customsCode'
			),
			5 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrierCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sce\vlg\osp\wms\service\OrdersVo();
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrierCode');
		$xfer += $output->writeString($this->carrierCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
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




class OutWmsService_getOutZcodeApplys_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_getPoBatchList_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $start_batch_id = null;
	public $num = null;
	public $po_no = null;
	public $batch_no_list = null;
	public $vendor_code = null;
	public $total = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'start_batch_id'
			),
			4 => array(
			'var' => 'num'
			),
			5 => array(
			'var' => 'po_no'
			),
			6 => array(
			'var' => 'batch_no_list'
			),
			7 => array(
			'var' => 'vendor_code'
			),
			8 => array(
			'var' => 'total'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['start_batch_id'])){
				
				$this->start_batch_id = $vals['start_batch_id'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['batch_no_list'])){
				
				$this->batch_no_list = $vals['batch_no_list'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->start_batch_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->batch_no_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->batch_no_list[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->total); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('start_batch_id');
		$xfer += $output->writeI32($this->start_batch_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('num');
		$xfer += $output->writeI32($this->num);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batch_no_list !== null) {
			
			$xfer += $output->writeFieldBegin('batch_no_list');
			
			if (!is_array($this->batch_no_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->batch_no_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_getReturnOrders_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->num); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('num');
		$xfer += $output->writeI32($this->num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_getTransferLadingBillS_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $requestParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'requestParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['requestParam'])){
				
				$this->requestParam = $vals['requestParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->requestParam = new \com\vip\sce\vlg\osp\wms\service\OutWmsLadingBillIDLParam();
			$this->requestParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('requestParam');
		
		if (!is_object($this->requestParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->requestParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_healthCheck_args {
	
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




class OutWmsService_pushOrderStatusList_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $order_status_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'order_status_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['order_status_detail_list'])){
				
				$this->order_status_detail_list = $vals['order_status_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->order_status_detail_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sce\vlg\osp\wms\service\OspOutWmsOrderStatusSModel();
					$elem0->read($input);
					
					$this->order_status_detail_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_status_detail_list');
		
		if (!is_array($this->order_status_detail_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_status_detail_list as $iter0){
			
			
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




class OutWmsService_pushOutInbShipment_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $outInbShipmentInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'outInbShipmentInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['outInbShipmentInfo'])){
				
				$this->outInbShipmentInfo = $vals['outInbShipmentInfo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->outInbShipmentInfo = new \com\vip\sce\vlg\osp\wms\service\OutInbShipmentInfo();
			$this->outInbShipmentInfo->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('outInbShipmentInfo');
		
		if (!is_object($this->outInbShipmentInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->outInbShipmentInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_pushOutWmsOrderBatch_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $warehouseCode = null;
	public $orderBatchInfos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'orderBatchInfos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['orderBatchInfos'])){
				
				$this->orderBatchInfos = $vals['orderBatchInfos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouseCode);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orderBatchInfos = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\sce\vlg\osp\wms\service\OrderBatchInfo();
					$elem0->read($input);
					
					$this->orderBatchInfos[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('orderBatchInfos');
		
		if (!is_array($this->orderBatchInfos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orderBatchInfos as $iter0){
			
			
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




class OutWmsService_pushOutZcode_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $outWmsZcodeInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'outWmsZcodeInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['outWmsZcodeInfo'])){
				
				$this->outWmsZcodeInfo = $vals['outWmsZcodeInfo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->outWmsZcodeInfo = new \com\vip\sce\vlg\osp\wms\service\OutWmsZcodeInfo();
			$this->outWmsZcodeInfo->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('outWmsZcodeInfo');
		
		if (!is_object($this->outWmsZcodeInfo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->outWmsZcodeInfo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_updateCarrierStatus_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $carrierInfoRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'carrierInfoRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['carrierInfoRequest'])){
				
				$this->carrierInfoRequest = $vals['carrierInfoRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->carrierInfoRequest = new \com\vip\sce\vlg\osp\wms\service\CarrierInfoRequest();
			$this->carrierInfoRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrierInfoRequest');
		
		if (!is_object($this->carrierInfoRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->carrierInfoRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_updatePoBatchStatus_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $batch_nos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'batch_nos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['batch_nos'])){
				
				$this->batch_nos = $vals['batch_nos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->batch_nos = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->batch_nos[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_nos');
		
		if (!is_array($this->batch_nos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->batch_nos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OutWmsService_uploadInvAdjustment_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $invAdjustments = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'invAdjustments'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['invAdjustments'])){
				
				$this->invAdjustments = $vals['invAdjustments'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->invAdjustments = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sce\vlg\osp\wms\service\InvAdjustment();
					$elem1->read($input);
					
					$this->invAdjustments[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('invAdjustments');
		
		if (!is_array($this->invAdjustments)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->invAdjustments as $iter0){
			
			
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




class OutWmsService_uploadReturnOrderStatus_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->details = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sce\vlg\osp\wms\service\ReturnOrderStatus();
					$elem1->read($input);
					
					$this->details[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('details');
		
		if (!is_array($this->details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->details as $iter0){
			
			
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




class OutWmsService_uploadReturnOutDetail_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $warehouse = null;
	public $details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->details = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\sce\vlg\osp\wms\service\ReturnOutInfo();
					$elem1->read($input);
					
					$this->details[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('sysKey');
		$xfer += $output->writeString($this->sysKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('details');
		
		if (!is_array($this->details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->details as $iter0){
			
			
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




class OutWmsService_callbackOrders_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_callbackOutOubShipment_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_callbackOutZcodeApplys_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_callbackReturnOrders_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_deliverOrderContainer_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_deliverSaleOrder_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_getGlobalDeliverBatch_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_getOrders_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\OutWmsOrderGetHeaderResponse();
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




class OutWmsService_getOutOubShipments_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\GetOutWmsOubShipmentResponse();
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




class OutWmsService_getOutWmsPackageTransferOrders_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_getOutZcodeApplys_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\GetOutWmsZcodeApplyResponse();
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




class OutWmsService_getPoBatchList_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\OspOutWmsPoGetHeaderResponse();
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




class OutWmsService_getReturnOrders_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\OutWmsReturnOrderHeaderResponse();
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




class OutWmsService_getTransferLadingBillS_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_healthCheck_result {
	
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




class OutWmsService_pushOrderStatusList_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_pushOutInbShipment_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_pushOutWmsOrderBatch_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_pushOutZcode_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_updateCarrierStatus_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_updatePoBatchStatus_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_uploadInvAdjustment_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_uploadReturnOrderStatus_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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




class OutWmsService_uploadReturnOutDetail_result {
	
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
			
			
			$this->success = new \com\vip\sce\vlg\osp\wms\service\PostResponse();
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