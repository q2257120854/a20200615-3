<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;
interface JitDeliveryServiceIf{
	
	
	public function confirmDelivery( $vendor_id, $storage_no, $po_no, $store_sn);
	
	public function confirmDeliveryInfo(\vipapis\delivery\ConfirmDeliveryInfoRequest $confirmRequest);
	
	public function createDelivery( $vendor_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code, $jit_type);
	
	public function createMultiPoDelivery(\vipapis\delivery\CreateMultiPoDeliveryRequest $createMultiPoDeliveryRequest);
	
	public function createPick( $po_no, $vendor_id, $co_mode, $warehouse, $store_sn);
	
	public function deleteDeliveryDetail( $vendor_id, $storage_no, $po_no);
	
	public function deliveryGoods(\vipapis\delivery\DeliveryGoodsRequest $request);
	
	public function editDelivery( $vendor_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code);
	
	public function editMultiPoDelivery(\vipapis\delivery\EditMultiPoDeliveryRequest $editMultiPoDeliveryRequest);
	
	public function getActualStorageInfo(\vipapis\delivery\GetActualStorageInfoRequest $request);
	
	public function getCarrierList(\vipapis\delivery\GetCarrierListRequest $carrierRequest);
	
	public function getDeliveryGoods( $vendor_id, $storage_no, $page, $limit);
	
	public function getDeliveryList( $vendor_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no);
	
	public function getDeliveryTraceInfo(\vipapis\delivery\DeliveryTraceInfoRequest $request);
	
	public function getMultiPoPickDetail(\vipapis\delivery\GetMultiPoPickDetailRequest $getPickDetailRequest);
	
	public function getPickDetail( $po_no, $vendor_id, $pick_no, $page, $limit, $co_mode);
	
	public function getPickFinancialData(\vipapis\delivery\GetPickFinancialDataRequest $request);
	
	public function getPickList( $vendor_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $st_sell_time_to, $et_sell_time_to, $is_export, $page, $limit, $store_sn);
	
	public function getPoList( $st_create_time, $et_create_time, $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $st_sell_et_time, $et_sell_et_time, $page, $limit, $st_po_start_time, $et_po_start_time);
	
	public function getPoOrders( $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $page, $limit, $st_po_start_time, $et_po_start_time);
	
	public function getPoSkuList( $vendor_id, $po_no, $sell_site, $warehouse, $order_status, $st_aduity_time, $et_aduity_time, $order_id, $pick_no, $delivery_no, $st_pick_time, $et_pick_time, $st_delivery_time, $et_delivery_time, $page, $limit);
	
	public function getPrintBox( $pick_no, $vendor_id);
	
	public function getPrintDelivery( $vendor_id, $storage_no, $po_no, $box_no);
	
	public function getRestockStorageInfo(\vipapis\delivery\GetRestockStorageInfoRequest $request);
	
	public function getSkuPriceInfo(\vipapis\delivery\GetSkuPriceRequest $request);
	
	public function healthCheck();
	
	public function importDeliveryDetail( $vendor_id, $po_no, $storage_no, $delivery_no, $store_sn, $delivery_list);
	
	public function importMultiPoDeliveryDetail( $vendor_id, $po_no, $storage_no, $store_sn, $delivery_list);
	
}

class _JitDeliveryServiceClient extends \Osp\Base\OspStub implements \vipapis\delivery\JitDeliveryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.delivery.JitDeliveryService", "1.0.0");
	}
	
	
	public function confirmDelivery( $vendor_id, $storage_no, $po_no, $store_sn){
		
		$this->send_confirmDelivery( $vendor_id, $storage_no, $po_no, $store_sn);
		return $this->recv_confirmDelivery();
	}
	
	public function send_confirmDelivery( $vendor_id, $storage_no, $po_no, $store_sn){
		
		$this->initInvocation("confirmDelivery");
		$args = new \vipapis\delivery\JitDeliveryService_confirmDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->storage_no = $storage_no;
		
		$args->po_no = $po_no;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_confirmDelivery(){
		
		$result = new \vipapis\delivery\JitDeliveryService_confirmDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmDeliveryInfo(\vipapis\delivery\ConfirmDeliveryInfoRequest $confirmRequest){
		
		$this->send_confirmDeliveryInfo( $confirmRequest);
		return $this->recv_confirmDeliveryInfo();
	}
	
	public function send_confirmDeliveryInfo(\vipapis\delivery\ConfirmDeliveryInfoRequest $confirmRequest){
		
		$this->initInvocation("confirmDeliveryInfo");
		$args = new \vipapis\delivery\JitDeliveryService_confirmDeliveryInfo_args();
		
		$args->confirmRequest = $confirmRequest;
		
		$this->send_base($args);
	}
	
	public function recv_confirmDeliveryInfo(){
		
		$result = new \vipapis\delivery\JitDeliveryService_confirmDeliveryInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createDelivery( $vendor_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code, $jit_type){
		
		$this->send_createDelivery( $vendor_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code, $jit_type);
		return $this->recv_createDelivery();
	}
	
	public function send_createDelivery( $vendor_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code, $jit_type){
		
		$this->initInvocation("createDelivery");
		$args = new \vipapis\delivery\JitDeliveryService_createDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->po_no = $po_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->warehouse = $warehouse;
		
		$args->delivery_time = $delivery_time;
		
		$args->arrival_time = $arrival_time;
		
		$args->race_time = $race_time;
		
		$args->carrier_name = $carrier_name;
		
		$args->tel = $tel;
		
		$args->driver = $driver;
		
		$args->driver_tel = $driver_tel;
		
		$args->plate_number = $plate_number;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->delivery_method = $delivery_method;
		
		$args->store_sn = $store_sn;
		
		$args->carrier_code = $carrier_code;
		
		$args->jit_type = $jit_type;
		
		$this->send_base($args);
	}
	
	public function recv_createDelivery(){
		
		$result = new \vipapis\delivery\JitDeliveryService_createDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createMultiPoDelivery(\vipapis\delivery\CreateMultiPoDeliveryRequest $createMultiPoDeliveryRequest){
		
		$this->send_createMultiPoDelivery( $createMultiPoDeliveryRequest);
		return $this->recv_createMultiPoDelivery();
	}
	
	public function send_createMultiPoDelivery(\vipapis\delivery\CreateMultiPoDeliveryRequest $createMultiPoDeliveryRequest){
		
		$this->initInvocation("createMultiPoDelivery");
		$args = new \vipapis\delivery\JitDeliveryService_createMultiPoDelivery_args();
		
		$args->createMultiPoDeliveryRequest = $createMultiPoDeliveryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_createMultiPoDelivery(){
		
		$result = new \vipapis\delivery\JitDeliveryService_createMultiPoDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createPick( $po_no, $vendor_id, $co_mode, $warehouse, $store_sn){
		
		$this->send_createPick( $po_no, $vendor_id, $co_mode, $warehouse, $store_sn);
		return $this->recv_createPick();
	}
	
	public function send_createPick( $po_no, $vendor_id, $co_mode, $warehouse, $store_sn){
		
		$this->initInvocation("createPick");
		$args = new \vipapis\delivery\JitDeliveryService_createPick_args();
		
		$args->po_no = $po_no;
		
		$args->vendor_id = $vendor_id;
		
		$args->co_mode = $co_mode;
		
		$args->warehouse = $warehouse;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_createPick(){
		
		$result = new \vipapis\delivery\JitDeliveryService_createPick_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteDeliveryDetail( $vendor_id, $storage_no, $po_no){
		
		$this->send_deleteDeliveryDetail( $vendor_id, $storage_no, $po_no);
		return $this->recv_deleteDeliveryDetail();
	}
	
	public function send_deleteDeliveryDetail( $vendor_id, $storage_no, $po_no){
		
		$this->initInvocation("deleteDeliveryDetail");
		$args = new \vipapis\delivery\JitDeliveryService_deleteDeliveryDetail_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->storage_no = $storage_no;
		
		$args->po_no = $po_no;
		
		$this->send_base($args);
	}
	
	public function recv_deleteDeliveryDetail(){
		
		$result = new \vipapis\delivery\JitDeliveryService_deleteDeliveryDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deliveryGoods(\vipapis\delivery\DeliveryGoodsRequest $request){
		
		$this->send_deliveryGoods( $request);
		return $this->recv_deliveryGoods();
	}
	
	public function send_deliveryGoods(\vipapis\delivery\DeliveryGoodsRequest $request){
		
		$this->initInvocation("deliveryGoods");
		$args = new \vipapis\delivery\JitDeliveryService_deliveryGoods_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_deliveryGoods(){
		
		$result = new \vipapis\delivery\JitDeliveryService_deliveryGoods_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editDelivery( $vendor_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code){
		
		$this->send_editDelivery( $vendor_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code);
		return $this->recv_editDelivery();
	}
	
	public function send_editDelivery( $vendor_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $race_time, $carrier_name, $tel, $driver, $driver_tel, $plate_number, $page, $limit, $delivery_method, $store_sn, $carrier_code){
		
		$this->initInvocation("editDelivery");
		$args = new \vipapis\delivery\JitDeliveryService_editDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->storage_no = $storage_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->warehouse = $warehouse;
		
		$args->delivery_time = $delivery_time;
		
		$args->arrival_time = $arrival_time;
		
		$args->race_time = $race_time;
		
		$args->carrier_name = $carrier_name;
		
		$args->tel = $tel;
		
		$args->driver = $driver;
		
		$args->driver_tel = $driver_tel;
		
		$args->plate_number = $plate_number;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->delivery_method = $delivery_method;
		
		$args->store_sn = $store_sn;
		
		$args->carrier_code = $carrier_code;
		
		$this->send_base($args);
	}
	
	public function recv_editDelivery(){
		
		$result = new \vipapis\delivery\JitDeliveryService_editDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editMultiPoDelivery(\vipapis\delivery\EditMultiPoDeliveryRequest $editMultiPoDeliveryRequest){
		
		$this->send_editMultiPoDelivery( $editMultiPoDeliveryRequest);
		return $this->recv_editMultiPoDelivery();
	}
	
	public function send_editMultiPoDelivery(\vipapis\delivery\EditMultiPoDeliveryRequest $editMultiPoDeliveryRequest){
		
		$this->initInvocation("editMultiPoDelivery");
		$args = new \vipapis\delivery\JitDeliveryService_editMultiPoDelivery_args();
		
		$args->editMultiPoDeliveryRequest = $editMultiPoDeliveryRequest;
		
		$this->send_base($args);
	}
	
	public function recv_editMultiPoDelivery(){
		
		$result = new \vipapis\delivery\JitDeliveryService_editMultiPoDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getActualStorageInfo(\vipapis\delivery\GetActualStorageInfoRequest $request){
		
		$this->send_getActualStorageInfo( $request);
		return $this->recv_getActualStorageInfo();
	}
	
	public function send_getActualStorageInfo(\vipapis\delivery\GetActualStorageInfoRequest $request){
		
		$this->initInvocation("getActualStorageInfo");
		$args = new \vipapis\delivery\JitDeliveryService_getActualStorageInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getActualStorageInfo(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getActualStorageInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarrierList(\vipapis\delivery\GetCarrierListRequest $carrierRequest){
		
		$this->send_getCarrierList( $carrierRequest);
		return $this->recv_getCarrierList();
	}
	
	public function send_getCarrierList(\vipapis\delivery\GetCarrierListRequest $carrierRequest){
		
		$this->initInvocation("getCarrierList");
		$args = new \vipapis\delivery\JitDeliveryService_getCarrierList_args();
		
		$args->carrierRequest = $carrierRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getCarrierList(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getCarrierList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeliveryGoods( $vendor_id, $storage_no, $page, $limit){
		
		$this->send_getDeliveryGoods( $vendor_id, $storage_no, $page, $limit);
		return $this->recv_getDeliveryGoods();
	}
	
	public function send_getDeliveryGoods( $vendor_id, $storage_no, $page, $limit){
		
		$this->initInvocation("getDeliveryGoods");
		$args = new \vipapis\delivery\JitDeliveryService_getDeliveryGoods_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->storage_no = $storage_no;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getDeliveryGoods(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getDeliveryGoods_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeliveryList( $vendor_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no){
		
		$this->send_getDeliveryList( $vendor_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no);
		return $this->recv_getDeliveryList();
	}
	
	public function send_getDeliveryList( $vendor_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no){
		
		$this->initInvocation("getDeliveryList");
		$args = new \vipapis\delivery\JitDeliveryService_getDeliveryList_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->po_no = $po_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->warehouse = $warehouse;
		
		$args->out_flag = $out_flag;
		
		$args->st_out_time = $st_out_time;
		
		$args->et_out_time = $et_out_time;
		
		$args->st_estimate_arrive_time = $st_estimate_arrive_time;
		
		$args->et_estimate_arrive_time = $et_estimate_arrive_time;
		
		$args->st_arrive_time = $st_arrive_time;
		
		$args->et_arrive_time = $et_arrive_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->store_sn = $store_sn;
		
		$args->storage_no = $storage_no;
		
		$this->send_base($args);
	}
	
	public function recv_getDeliveryList(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getDeliveryList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeliveryTraceInfo(\vipapis\delivery\DeliveryTraceInfoRequest $request){
		
		$this->send_getDeliveryTraceInfo( $request);
		return $this->recv_getDeliveryTraceInfo();
	}
	
	public function send_getDeliveryTraceInfo(\vipapis\delivery\DeliveryTraceInfoRequest $request){
		
		$this->initInvocation("getDeliveryTraceInfo");
		$args = new \vipapis\delivery\JitDeliveryService_getDeliveryTraceInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getDeliveryTraceInfo(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getDeliveryTraceInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMultiPoPickDetail(\vipapis\delivery\GetMultiPoPickDetailRequest $getPickDetailRequest){
		
		$this->send_getMultiPoPickDetail( $getPickDetailRequest);
		return $this->recv_getMultiPoPickDetail();
	}
	
	public function send_getMultiPoPickDetail(\vipapis\delivery\GetMultiPoPickDetailRequest $getPickDetailRequest){
		
		$this->initInvocation("getMultiPoPickDetail");
		$args = new \vipapis\delivery\JitDeliveryService_getMultiPoPickDetail_args();
		
		$args->getPickDetailRequest = $getPickDetailRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getMultiPoPickDetail(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getMultiPoPickDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickDetail( $po_no, $vendor_id, $pick_no, $page, $limit, $co_mode){
		
		$this->send_getPickDetail( $po_no, $vendor_id, $pick_no, $page, $limit, $co_mode);
		return $this->recv_getPickDetail();
	}
	
	public function send_getPickDetail( $po_no, $vendor_id, $pick_no, $page, $limit, $co_mode){
		
		$this->initInvocation("getPickDetail");
		$args = new \vipapis\delivery\JitDeliveryService_getPickDetail_args();
		
		$args->po_no = $po_no;
		
		$args->vendor_id = $vendor_id;
		
		$args->pick_no = $pick_no;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->co_mode = $co_mode;
		
		$this->send_base($args);
	}
	
	public function recv_getPickDetail(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPickDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickFinancialData(\vipapis\delivery\GetPickFinancialDataRequest $request){
		
		$this->send_getPickFinancialData( $request);
		return $this->recv_getPickFinancialData();
	}
	
	public function send_getPickFinancialData(\vipapis\delivery\GetPickFinancialDataRequest $request){
		
		$this->initInvocation("getPickFinancialData");
		$args = new \vipapis\delivery\JitDeliveryService_getPickFinancialData_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getPickFinancialData(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPickFinancialData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickList( $vendor_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $st_sell_time_to, $et_sell_time_to, $is_export, $page, $limit, $store_sn){
		
		$this->send_getPickList( $vendor_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $st_sell_time_to, $et_sell_time_to, $is_export, $page, $limit, $store_sn);
		return $this->recv_getPickList();
	}
	
	public function send_getPickList( $vendor_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $st_sell_time_to, $et_sell_time_to, $is_export, $page, $limit, $store_sn){
		
		$this->initInvocation("getPickList");
		$args = new \vipapis\delivery\JitDeliveryService_getPickList_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->po_no = $po_no;
		
		$args->pick_no = $pick_no;
		
		$args->warehouse = $warehouse;
		
		$args->co_mode = $co_mode;
		
		$args->order_cate = $order_cate;
		
		$args->st_create_time = $st_create_time;
		
		$args->et_create_time = $et_create_time;
		
		$args->st_sell_time_from = $st_sell_time_from;
		
		$args->et_sell_time_from = $et_sell_time_from;
		
		$args->st_sell_time_to = $st_sell_time_to;
		
		$args->et_sell_time_to = $et_sell_time_to;
		
		$args->is_export = $is_export;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_getPickList(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPickList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoList( $st_create_time, $et_create_time, $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $st_sell_et_time, $et_sell_et_time, $page, $limit, $st_po_start_time, $et_po_start_time){
		
		$this->send_getPoList( $st_create_time, $et_create_time, $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $st_sell_et_time, $et_sell_et_time, $page, $limit, $st_po_start_time, $et_po_start_time);
		return $this->recv_getPoList();
	}
	
	public function send_getPoList( $st_create_time, $et_create_time, $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $st_sell_et_time, $et_sell_et_time, $page, $limit, $st_po_start_time, $et_po_start_time){
		
		$this->initInvocation("getPoList");
		$args = new \vipapis\delivery\JitDeliveryService_getPoList_args();
		
		$args->st_create_time = $st_create_time;
		
		$args->et_create_time = $et_create_time;
		
		$args->warehouse = $warehouse;
		
		$args->po_no = $po_no;
		
		$args->co_mode = $co_mode;
		
		$args->vendor_id = $vendor_id;
		
		$args->st_sell_st_time = $st_sell_st_time;
		
		$args->et_sell_st_time = $et_sell_st_time;
		
		$args->st_sell_et_time = $st_sell_et_time;
		
		$args->et_sell_et_time = $et_sell_et_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->st_po_start_time = $st_po_start_time;
		
		$args->et_po_start_time = $et_po_start_time;
		
		$this->send_base($args);
	}
	
	public function recv_getPoList(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoOrders( $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $page, $limit, $st_po_start_time, $et_po_start_time){
		
		$this->send_getPoOrders( $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $page, $limit, $st_po_start_time, $et_po_start_time);
		return $this->recv_getPoOrders();
	}
	
	public function send_getPoOrders( $warehouse, $po_no, $co_mode, $vendor_id, $st_sell_st_time, $et_sell_st_time, $page, $limit, $st_po_start_time, $et_po_start_time){
		
		$this->initInvocation("getPoOrders");
		$args = new \vipapis\delivery\JitDeliveryService_getPoOrders_args();
		
		$args->warehouse = $warehouse;
		
		$args->po_no = $po_no;
		
		$args->co_mode = $co_mode;
		
		$args->vendor_id = $vendor_id;
		
		$args->st_sell_st_time = $st_sell_st_time;
		
		$args->et_sell_st_time = $et_sell_st_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->st_po_start_time = $st_po_start_time;
		
		$args->et_po_start_time = $et_po_start_time;
		
		$this->send_base($args);
	}
	
	public function recv_getPoOrders(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPoOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoSkuList( $vendor_id, $po_no, $sell_site, $warehouse, $order_status, $st_aduity_time, $et_aduity_time, $order_id, $pick_no, $delivery_no, $st_pick_time, $et_pick_time, $st_delivery_time, $et_delivery_time, $page, $limit){
		
		$this->send_getPoSkuList( $vendor_id, $po_no, $sell_site, $warehouse, $order_status, $st_aduity_time, $et_aduity_time, $order_id, $pick_no, $delivery_no, $st_pick_time, $et_pick_time, $st_delivery_time, $et_delivery_time, $page, $limit);
		return $this->recv_getPoSkuList();
	}
	
	public function send_getPoSkuList( $vendor_id, $po_no, $sell_site, $warehouse, $order_status, $st_aduity_time, $et_aduity_time, $order_id, $pick_no, $delivery_no, $st_pick_time, $et_pick_time, $st_delivery_time, $et_delivery_time, $page, $limit){
		
		$this->initInvocation("getPoSkuList");
		$args = new \vipapis\delivery\JitDeliveryService_getPoSkuList_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->po_no = $po_no;
		
		$args->sell_site = $sell_site;
		
		$args->warehouse = $warehouse;
		
		$args->order_status = $order_status;
		
		$args->st_aduity_time = $st_aduity_time;
		
		$args->et_aduity_time = $et_aduity_time;
		
		$args->order_id = $order_id;
		
		$args->pick_no = $pick_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->st_pick_time = $st_pick_time;
		
		$args->et_pick_time = $et_pick_time;
		
		$args->st_delivery_time = $st_delivery_time;
		
		$args->et_delivery_time = $et_delivery_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getPoSkuList(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPoSkuList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPrintBox( $pick_no, $vendor_id){
		
		$this->send_getPrintBox( $pick_no, $vendor_id);
		return $this->recv_getPrintBox();
	}
	
	public function send_getPrintBox( $pick_no, $vendor_id){
		
		$this->initInvocation("getPrintBox");
		$args = new \vipapis\delivery\JitDeliveryService_getPrintBox_args();
		
		$args->pick_no = $pick_no;
		
		$args->vendor_id = $vendor_id;
		
		$this->send_base($args);
	}
	
	public function recv_getPrintBox(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPrintBox_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPrintDelivery( $vendor_id, $storage_no, $po_no, $box_no){
		
		$this->send_getPrintDelivery( $vendor_id, $storage_no, $po_no, $box_no);
		return $this->recv_getPrintDelivery();
	}
	
	public function send_getPrintDelivery( $vendor_id, $storage_no, $po_no, $box_no){
		
		$this->initInvocation("getPrintDelivery");
		$args = new \vipapis\delivery\JitDeliveryService_getPrintDelivery_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->storage_no = $storage_no;
		
		$args->po_no = $po_no;
		
		$args->box_no = $box_no;
		
		$this->send_base($args);
	}
	
	public function recv_getPrintDelivery(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getPrintDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getRestockStorageInfo(\vipapis\delivery\GetRestockStorageInfoRequest $request){
		
		$this->send_getRestockStorageInfo( $request);
		return $this->recv_getRestockStorageInfo();
	}
	
	public function send_getRestockStorageInfo(\vipapis\delivery\GetRestockStorageInfoRequest $request){
		
		$this->initInvocation("getRestockStorageInfo");
		$args = new \vipapis\delivery\JitDeliveryService_getRestockStorageInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getRestockStorageInfo(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getRestockStorageInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSkuPriceInfo(\vipapis\delivery\GetSkuPriceRequest $request){
		
		$this->send_getSkuPriceInfo( $request);
		return $this->recv_getSkuPriceInfo();
	}
	
	public function send_getSkuPriceInfo(\vipapis\delivery\GetSkuPriceRequest $request){
		
		$this->initInvocation("getSkuPriceInfo");
		$args = new \vipapis\delivery\JitDeliveryService_getSkuPriceInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSkuPriceInfo(){
		
		$result = new \vipapis\delivery\JitDeliveryService_getSkuPriceInfo_result();
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
		$args = new \vipapis\delivery\JitDeliveryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\delivery\JitDeliveryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function importDeliveryDetail( $vendor_id, $po_no, $storage_no, $delivery_no, $store_sn, $delivery_list){
		
		$this->send_importDeliveryDetail( $vendor_id, $po_no, $storage_no, $delivery_no, $store_sn, $delivery_list);
		return $this->recv_importDeliveryDetail();
	}
	
	public function send_importDeliveryDetail( $vendor_id, $po_no, $storage_no, $delivery_no, $store_sn, $delivery_list){
		
		$this->initInvocation("importDeliveryDetail");
		$args = new \vipapis\delivery\JitDeliveryService_importDeliveryDetail_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->po_no = $po_no;
		
		$args->storage_no = $storage_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->store_sn = $store_sn;
		
		$args->delivery_list = $delivery_list;
		
		$this->send_base($args);
	}
	
	public function recv_importDeliveryDetail(){
		
		$result = new \vipapis\delivery\JitDeliveryService_importDeliveryDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function importMultiPoDeliveryDetail( $vendor_id, $po_no, $storage_no, $store_sn, $delivery_list){
		
		$this->send_importMultiPoDeliveryDetail( $vendor_id, $po_no, $storage_no, $store_sn, $delivery_list);
		return $this->recv_importMultiPoDeliveryDetail();
	}
	
	public function send_importMultiPoDeliveryDetail( $vendor_id, $po_no, $storage_no, $store_sn, $delivery_list){
		
		$this->initInvocation("importMultiPoDeliveryDetail");
		$args = new \vipapis\delivery\JitDeliveryService_importMultiPoDeliveryDetail_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->po_no = $po_no;
		
		$args->storage_no = $storage_no;
		
		$args->store_sn = $store_sn;
		
		$args->delivery_list = $delivery_list;
		
		$this->send_base($args);
	}
	
	public function recv_importMultiPoDeliveryDetail(){
		
		$result = new \vipapis\delivery\JitDeliveryService_importMultiPoDeliveryDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class JitDeliveryService_confirmDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $storage_no = null;
	public $po_no = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'store_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_confirmDeliveryInfo_args {
	
	static $_TSPEC;
	public $confirmRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'confirmRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['confirmRequest'])){
				
				$this->confirmRequest = $vals['confirmRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->confirmRequest = new \vipapis\delivery\ConfirmDeliveryInfoRequest();
			$this->confirmRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('confirmRequest');
		
		if (!is_object($this->confirmRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->confirmRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_createDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $delivery_time = null;
	public $arrival_time = null;
	public $race_time = null;
	public $carrier_name = null;
	public $tel = null;
	public $driver = null;
	public $driver_tel = null;
	public $plate_number = null;
	public $page = null;
	public $limit = null;
	public $delivery_method = null;
	public $store_sn = null;
	public $carrier_code = null;
	public $jit_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'delivery_no'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'delivery_time'
			),
			6 => array(
			'var' => 'arrival_time'
			),
			7 => array(
			'var' => 'race_time'
			),
			8 => array(
			'var' => 'carrier_name'
			),
			9 => array(
			'var' => 'tel'
			),
			10 => array(
			'var' => 'driver'
			),
			11 => array(
			'var' => 'driver_tel'
			),
			12 => array(
			'var' => 'plate_number'
			),
			13 => array(
			'var' => 'page'
			),
			14 => array(
			'var' => 'limit'
			),
			15 => array(
			'var' => 'delivery_method'
			),
			16 => array(
			'var' => 'store_sn'
			),
			17 => array(
			'var' => 'carrier_code'
			),
			18 => array(
			'var' => 'jit_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['arrival_time'])){
				
				$this->arrival_time = $vals['arrival_time'];
			}
			
			
			if (isset($vals['race_time'])){
				
				$this->race_time = $vals['race_time'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['driver'])){
				
				$this->driver = $vals['driver'];
			}
			
			
			if (isset($vals['driver_tel'])){
				
				$this->driver_tel = $vals['driver_tel'];
			}
			
			
			if (isset($vals['plate_number'])){
				
				$this->plate_number = $vals['plate_number'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['delivery_method'])){
				
				$this->delivery_method = $vals['delivery_method'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['jit_type'])){
				
				$this->jit_type = $vals['jit_type'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_no);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->arrival_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->race_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->tel);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->driver);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->driver_tel);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->plate_number);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_method);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->jit_type); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_no');
		$xfer += $output->writeString($this->delivery_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		
		$em = new \vipapis\common\Warehouse; 
		$output->writeString($em::$__names[$this->warehouse]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_time');
			$xfer += $output->writeString($this->delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('arrival_time');
		$xfer += $output->writeString($this->arrival_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->race_time !== null) {
			
			$xfer += $output->writeFieldBegin('race_time');
			$xfer += $output->writeString($this->race_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrier_name');
		$xfer += $output->writeString($this->carrier_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driver !== null) {
			
			$xfer += $output->writeFieldBegin('driver');
			$xfer += $output->writeString($this->driver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driver_tel !== null) {
			
			$xfer += $output->writeFieldBegin('driver_tel');
			$xfer += $output->writeString($this->driver_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plate_number !== null) {
			
			$xfer += $output->writeFieldBegin('plate_number');
			$xfer += $output->writeString($this->plate_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_method !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_method');
			$xfer += $output->writeString($this->delivery_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->jit_type !== null) {
			
			$xfer += $output->writeFieldBegin('jit_type');
			$xfer += $output->writeI32($this->jit_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_createMultiPoDelivery_args {
	
	static $_TSPEC;
	public $createMultiPoDeliveryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createMultiPoDeliveryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createMultiPoDeliveryRequest'])){
				
				$this->createMultiPoDeliveryRequest = $vals['createMultiPoDeliveryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->createMultiPoDeliveryRequest = new \vipapis\delivery\CreateMultiPoDeliveryRequest();
			$this->createMultiPoDeliveryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('createMultiPoDeliveryRequest');
		
		if (!is_object($this->createMultiPoDeliveryRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->createMultiPoDeliveryRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_createPick_args {
	
	static $_TSPEC;
	public $po_no = null;
	public $vendor_id = null;
	public $co_mode = null;
	public $warehouse = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'co_mode'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'store_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->co_mode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_deleteDeliveryDetail_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $storage_no = null;
	public $po_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			3 => array(
			'var' => 'po_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_deliveryGoods_args {
	
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
			
			
			$this->request = new \vipapis\delivery\DeliveryGoodsRequest();
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




class JitDeliveryService_editDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $storage_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $delivery_time = null;
	public $arrival_time = null;
	public $race_time = null;
	public $carrier_name = null;
	public $tel = null;
	public $driver = null;
	public $driver_tel = null;
	public $plate_number = null;
	public $page = null;
	public $limit = null;
	public $delivery_method = null;
	public $store_sn = null;
	public $carrier_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			3 => array(
			'var' => 'delivery_no'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'delivery_time'
			),
			6 => array(
			'var' => 'arrival_time'
			),
			7 => array(
			'var' => 'race_time'
			),
			8 => array(
			'var' => 'carrier_name'
			),
			9 => array(
			'var' => 'tel'
			),
			10 => array(
			'var' => 'driver'
			),
			11 => array(
			'var' => 'driver_tel'
			),
			12 => array(
			'var' => 'plate_number'
			),
			13 => array(
			'var' => 'page'
			),
			14 => array(
			'var' => 'limit'
			),
			15 => array(
			'var' => 'delivery_method'
			),
			16 => array(
			'var' => 'store_sn'
			),
			17 => array(
			'var' => 'carrier_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['delivery_time'])){
				
				$this->delivery_time = $vals['delivery_time'];
			}
			
			
			if (isset($vals['arrival_time'])){
				
				$this->arrival_time = $vals['arrival_time'];
			}
			
			
			if (isset($vals['race_time'])){
				
				$this->race_time = $vals['race_time'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['driver'])){
				
				$this->driver = $vals['driver'];
			}
			
			
			if (isset($vals['driver_tel'])){
				
				$this->driver_tel = $vals['driver_tel'];
			}
			
			
			if (isset($vals['plate_number'])){
				
				$this->plate_number = $vals['plate_number'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['delivery_method'])){
				
				$this->delivery_method = $vals['delivery_method'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_no);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->arrival_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->race_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->tel);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->driver);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->driver_tel);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->plate_number);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_method);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouse');
		
		$em = new \vipapis\common\Warehouse; 
		$output->writeString($em::$__names[$this->warehouse]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_time');
		$xfer += $output->writeString($this->delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('arrival_time');
			$xfer += $output->writeString($this->arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('race_time');
		$xfer += $output->writeString($this->race_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driver !== null) {
			
			$xfer += $output->writeFieldBegin('driver');
			$xfer += $output->writeString($this->driver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->driver_tel !== null) {
			
			$xfer += $output->writeFieldBegin('driver_tel');
			$xfer += $output->writeString($this->driver_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plate_number !== null) {
			
			$xfer += $output->writeFieldBegin('plate_number');
			$xfer += $output->writeString($this->plate_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_method !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_method');
			$xfer += $output->writeString($this->delivery_method);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_editMultiPoDelivery_args {
	
	static $_TSPEC;
	public $editMultiPoDeliveryRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'editMultiPoDeliveryRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['editMultiPoDeliveryRequest'])){
				
				$this->editMultiPoDeliveryRequest = $vals['editMultiPoDeliveryRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->editMultiPoDeliveryRequest = new \vipapis\delivery\EditMultiPoDeliveryRequest();
			$this->editMultiPoDeliveryRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('editMultiPoDeliveryRequest');
		
		if (!is_object($this->editMultiPoDeliveryRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->editMultiPoDeliveryRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getActualStorageInfo_args {
	
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
			
			
			$this->request = new \vipapis\delivery\GetActualStorageInfoRequest();
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




class JitDeliveryService_getCarrierList_args {
	
	static $_TSPEC;
	public $carrierRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierRequest'])){
				
				$this->carrierRequest = $vals['carrierRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->carrierRequest = new \vipapis\delivery\GetCarrierListRequest();
			$this->carrierRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('carrierRequest');
		
		if (!is_object($this->carrierRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->carrierRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getDeliveryGoods_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $storage_no = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			3 => array(
			'var' => 'page'
			),
			4 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getDeliveryList_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $out_flag = null;
	public $st_out_time = null;
	public $et_out_time = null;
	public $st_estimate_arrive_time = null;
	public $et_estimate_arrive_time = null;
	public $st_arrive_time = null;
	public $et_arrive_time = null;
	public $page = null;
	public $limit = null;
	public $store_sn = null;
	public $storage_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'delivery_no'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'out_flag'
			),
			6 => array(
			'var' => 'st_out_time'
			),
			7 => array(
			'var' => 'et_out_time'
			),
			8 => array(
			'var' => 'st_estimate_arrive_time'
			),
			9 => array(
			'var' => 'et_estimate_arrive_time'
			),
			10 => array(
			'var' => 'st_arrive_time'
			),
			11 => array(
			'var' => 'et_arrive_time'
			),
			12 => array(
			'var' => 'page'
			),
			13 => array(
			'var' => 'limit'
			),
			14 => array(
			'var' => 'store_sn'
			),
			15 => array(
			'var' => 'storage_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['out_flag'])){
				
				$this->out_flag = $vals['out_flag'];
			}
			
			
			if (isset($vals['st_out_time'])){
				
				$this->st_out_time = $vals['st_out_time'];
			}
			
			
			if (isset($vals['et_out_time'])){
				
				$this->et_out_time = $vals['et_out_time'];
			}
			
			
			if (isset($vals['st_estimate_arrive_time'])){
				
				$this->st_estimate_arrive_time = $vals['st_estimate_arrive_time'];
			}
			
			
			if (isset($vals['et_estimate_arrive_time'])){
				
				$this->et_estimate_arrive_time = $vals['et_estimate_arrive_time'];
			}
			
			
			if (isset($vals['st_arrive_time'])){
				
				$this->st_arrive_time = $vals['st_arrive_time'];
			}
			
			
			if (isset($vals['et_arrive_time'])){
				
				$this->et_arrive_time = $vals['et_arrive_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_no);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->out_flag);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_out_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_out_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_estimate_arrive_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_estimate_arrive_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_arrive_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_arrive_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_flag !== null) {
			
			$xfer += $output->writeFieldBegin('out_flag');
			$xfer += $output->writeString($this->out_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_out_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_out_time');
			$xfer += $output->writeString($this->st_out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_out_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_out_time');
			$xfer += $output->writeString($this->et_out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_estimate_arrive_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_estimate_arrive_time');
			$xfer += $output->writeString($this->st_estimate_arrive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_estimate_arrive_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_estimate_arrive_time');
			$xfer += $output->writeString($this->et_estimate_arrive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_arrive_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_arrive_time');
			$xfer += $output->writeString($this->st_arrive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_arrive_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_arrive_time');
			$xfer += $output->writeString($this->et_arrive_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_no');
			$xfer += $output->writeString($this->storage_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getDeliveryTraceInfo_args {
	
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
			
			
			$this->request = new \vipapis\delivery\DeliveryTraceInfoRequest();
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




class JitDeliveryService_getMultiPoPickDetail_args {
	
	static $_TSPEC;
	public $getPickDetailRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getPickDetailRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getPickDetailRequest'])){
				
				$this->getPickDetailRequest = $vals['getPickDetailRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getPickDetailRequest = new \vipapis\delivery\GetMultiPoPickDetailRequest();
			$this->getPickDetailRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('getPickDetailRequest');
		
		if (!is_object($this->getPickDetailRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->getPickDetailRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPickDetail_args {
	
	static $_TSPEC;
	public $po_no = null;
	public $vendor_id = null;
	public $pick_no = null;
	public $page = null;
	public $limit = null;
	public $co_mode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'pick_no'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'limit'
			),
			6 => array(
			'var' => 'co_mode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->pick_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->co_mode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pick_no');
		$xfer += $output->writeString($this->pick_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPickFinancialData_args {
	
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
			
			
			$this->request = new \vipapis\delivery\GetPickFinancialDataRequest();
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




class JitDeliveryService_getPickList_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $pick_no = null;
	public $warehouse = null;
	public $co_mode = null;
	public $order_cate = null;
	public $st_create_time = null;
	public $et_create_time = null;
	public $st_sell_time_from = null;
	public $et_sell_time_from = null;
	public $st_sell_time_to = null;
	public $et_sell_time_to = null;
	public $is_export = null;
	public $page = null;
	public $limit = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'pick_no'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'co_mode'
			),
			6 => array(
			'var' => 'order_cate'
			),
			7 => array(
			'var' => 'st_create_time'
			),
			8 => array(
			'var' => 'et_create_time'
			),
			9 => array(
			'var' => 'st_sell_time_from'
			),
			10 => array(
			'var' => 'et_sell_time_from'
			),
			11 => array(
			'var' => 'st_sell_time_to'
			),
			12 => array(
			'var' => 'et_sell_time_to'
			),
			13 => array(
			'var' => 'is_export'
			),
			15 => array(
			'var' => 'page'
			),
			16 => array(
			'var' => 'limit'
			),
			17 => array(
			'var' => 'store_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['order_cate'])){
				
				$this->order_cate = $vals['order_cate'];
			}
			
			
			if (isset($vals['st_create_time'])){
				
				$this->st_create_time = $vals['st_create_time'];
			}
			
			
			if (isset($vals['et_create_time'])){
				
				$this->et_create_time = $vals['et_create_time'];
			}
			
			
			if (isset($vals['st_sell_time_from'])){
				
				$this->st_sell_time_from = $vals['st_sell_time_from'];
			}
			
			
			if (isset($vals['et_sell_time_from'])){
				
				$this->et_sell_time_from = $vals['et_sell_time_from'];
			}
			
			
			if (isset($vals['st_sell_time_to'])){
				
				$this->st_sell_time_to = $vals['st_sell_time_to'];
			}
			
			
			if (isset($vals['et_sell_time_to'])){
				
				$this->et_sell_time_to = $vals['et_sell_time_to'];
			}
			
			
			if (isset($vals['is_export'])){
				
				$this->is_export = $vals['is_export'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->pick_no);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->co_mode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_cate);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_sell_time_from);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_sell_time_from);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_sell_time_to);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_sell_time_to);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->is_export); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_cate !== null) {
			
			$xfer += $output->writeFieldBegin('order_cate');
			$xfer += $output->writeString($this->order_cate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_create_time');
			$xfer += $output->writeString($this->st_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_create_time');
			$xfer += $output->writeString($this->et_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_sell_time_from !== null) {
			
			$xfer += $output->writeFieldBegin('st_sell_time_from');
			$xfer += $output->writeString($this->st_sell_time_from);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_sell_time_from !== null) {
			
			$xfer += $output->writeFieldBegin('et_sell_time_from');
			$xfer += $output->writeString($this->et_sell_time_from);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_sell_time_to !== null) {
			
			$xfer += $output->writeFieldBegin('st_sell_time_to');
			$xfer += $output->writeString($this->st_sell_time_to);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_sell_time_to !== null) {
			
			$xfer += $output->writeFieldBegin('et_sell_time_to');
			$xfer += $output->writeString($this->et_sell_time_to);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_export !== null) {
			
			$xfer += $output->writeFieldBegin('is_export');
			$xfer += $output->writeI32($this->is_export);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPoList_args {
	
	static $_TSPEC;
	public $st_create_time = null;
	public $et_create_time = null;
	public $warehouse = null;
	public $po_no = null;
	public $co_mode = null;
	public $vendor_id = null;
	public $st_sell_st_time = null;
	public $et_sell_st_time = null;
	public $st_sell_et_time = null;
	public $et_sell_et_time = null;
	public $page = null;
	public $limit = null;
	public $st_po_start_time = null;
	public $et_po_start_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'st_create_time'
			),
			2 => array(
			'var' => 'et_create_time'
			),
			3 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'co_mode'
			),
			6 => array(
			'var' => 'vendor_id'
			),
			7 => array(
			'var' => 'st_sell_st_time'
			),
			8 => array(
			'var' => 'et_sell_st_time'
			),
			9 => array(
			'var' => 'st_sell_et_time'
			),
			10 => array(
			'var' => 'et_sell_et_time'
			),
			11 => array(
			'var' => 'page'
			),
			12 => array(
			'var' => 'limit'
			),
			13 => array(
			'var' => 'st_po_start_time'
			),
			14 => array(
			'var' => 'et_po_start_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['st_create_time'])){
				
				$this->st_create_time = $vals['st_create_time'];
			}
			
			
			if (isset($vals['et_create_time'])){
				
				$this->et_create_time = $vals['et_create_time'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['st_sell_st_time'])){
				
				$this->st_sell_st_time = $vals['st_sell_st_time'];
			}
			
			
			if (isset($vals['et_sell_st_time'])){
				
				$this->et_sell_st_time = $vals['et_sell_st_time'];
			}
			
			
			if (isset($vals['st_sell_et_time'])){
				
				$this->st_sell_et_time = $vals['st_sell_et_time'];
			}
			
			
			if (isset($vals['et_sell_et_time'])){
				
				$this->et_sell_et_time = $vals['et_sell_et_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['st_po_start_time'])){
				
				$this->st_po_start_time = $vals['st_po_start_time'];
			}
			
			
			if (isset($vals['et_po_start_time'])){
				
				$this->et_po_start_time = $vals['et_po_start_time'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->st_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_create_time);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->co_mode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_sell_st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_sell_st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_sell_et_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_sell_et_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_po_start_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_po_start_time);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->st_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_create_time');
			$xfer += $output->writeString($this->st_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_create_time');
			$xfer += $output->writeString($this->et_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->st_sell_st_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_sell_st_time');
			$xfer += $output->writeString($this->st_sell_st_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_sell_st_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_sell_st_time');
			$xfer += $output->writeString($this->et_sell_st_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_sell_et_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_sell_et_time');
			$xfer += $output->writeString($this->st_sell_et_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_sell_et_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_sell_et_time');
			$xfer += $output->writeString($this->et_sell_et_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_po_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_po_start_time');
			$xfer += $output->writeString($this->st_po_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_po_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_po_start_time');
			$xfer += $output->writeString($this->et_po_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPoOrders_args {
	
	static $_TSPEC;
	public $warehouse = null;
	public $po_no = null;
	public $co_mode = null;
	public $vendor_id = null;
	public $st_sell_st_time = null;
	public $et_sell_st_time = null;
	public $page = null;
	public $limit = null;
	public $st_po_start_time = null;
	public $et_po_start_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'co_mode'
			),
			4 => array(
			'var' => 'vendor_id'
			),
			5 => array(
			'var' => 'st_sell_st_time'
			),
			6 => array(
			'var' => 'et_sell_st_time'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'limit'
			),
			9 => array(
			'var' => 'st_po_start_time'
			),
			10 => array(
			'var' => 'et_po_start_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['st_sell_st_time'])){
				
				$this->st_sell_st_time = $vals['st_sell_st_time'];
			}
			
			
			if (isset($vals['et_sell_st_time'])){
				
				$this->et_sell_st_time = $vals['et_sell_st_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['st_po_start_time'])){
				
				$this->st_po_start_time = $vals['st_po_start_time'];
			}
			
			
			if (isset($vals['et_po_start_time'])){
				
				$this->et_po_start_time = $vals['et_po_start_time'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->co_mode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_sell_st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_sell_st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_po_start_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_po_start_time);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->st_sell_st_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_sell_st_time');
			$xfer += $output->writeString($this->st_sell_st_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_sell_st_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_sell_st_time');
			$xfer += $output->writeString($this->et_sell_st_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_po_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_po_start_time');
			$xfer += $output->writeString($this->st_po_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_po_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_po_start_time');
			$xfer += $output->writeString($this->et_po_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPoSkuList_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $sell_site = null;
	public $warehouse = null;
	public $order_status = null;
	public $st_aduity_time = null;
	public $et_aduity_time = null;
	public $order_id = null;
	public $pick_no = null;
	public $delivery_no = null;
	public $st_pick_time = null;
	public $et_pick_time = null;
	public $st_delivery_time = null;
	public $et_delivery_time = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'sell_site'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'order_status'
			),
			6 => array(
			'var' => 'st_aduity_time'
			),
			7 => array(
			'var' => 'et_aduity_time'
			),
			8 => array(
			'var' => 'order_id'
			),
			9 => array(
			'var' => 'pick_no'
			),
			10 => array(
			'var' => 'delivery_no'
			),
			11 => array(
			'var' => 'st_pick_time'
			),
			12 => array(
			'var' => 'et_pick_time'
			),
			13 => array(
			'var' => 'st_delivery_time'
			),
			14 => array(
			'var' => 'et_delivery_time'
			),
			15 => array(
			'var' => 'page'
			),
			16 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['sell_site'])){
				
				$this->sell_site = $vals['sell_site'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['st_aduity_time'])){
				
				$this->st_aduity_time = $vals['st_aduity_time'];
			}
			
			
			if (isset($vals['et_aduity_time'])){
				
				$this->et_aduity_time = $vals['et_aduity_time'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['st_pick_time'])){
				
				$this->st_pick_time = $vals['st_pick_time'];
			}
			
			
			if (isset($vals['et_pick_time'])){
				
				$this->et_pick_time = $vals['et_pick_time'];
			}
			
			
			if (isset($vals['st_delivery_time'])){
				
				$this->st_delivery_time = $vals['st_delivery_time'];
			}
			
			
			if (isset($vals['et_delivery_time'])){
				
				$this->et_delivery_time = $vals['et_delivery_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sell_site);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_status);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_aduity_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_aduity_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->pick_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_pick_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_pick_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sell_site !== null) {
			
			$xfer += $output->writeFieldBegin('sell_site');
			$xfer += $output->writeString($this->sell_site);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->warehouse]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_aduity_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_aduity_time');
			$xfer += $output->writeString($this->st_aduity_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_aduity_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_aduity_time');
			$xfer += $output->writeString($this->et_aduity_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_no !== null) {
			
			$xfer += $output->writeFieldBegin('pick_no');
			$xfer += $output->writeString($this->pick_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_pick_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_pick_time');
			$xfer += $output->writeString($this->st_pick_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_pick_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_pick_time');
			$xfer += $output->writeString($this->et_pick_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_delivery_time');
			$xfer += $output->writeString($this->st_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->et_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('et_delivery_time');
			$xfer += $output->writeString($this->et_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPrintBox_args {
	
	static $_TSPEC;
	public $pick_no = null;
	public $vendor_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pick_no'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pick_no'])){
				
				$this->pick_no = $vals['pick_no'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->pick_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('pick_no');
		$xfer += $output->writeString($this->pick_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getPrintDelivery_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $storage_no = null;
	public $po_no = null;
	public $box_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'box_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->box_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class JitDeliveryService_getRestockStorageInfo_args {
	
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
			
			
			$this->request = new \vipapis\delivery\GetRestockStorageInfoRequest();
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




class JitDeliveryService_getSkuPriceInfo_args {
	
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
			
			
			$this->request = new \vipapis\delivery\GetSkuPriceRequest();
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




class JitDeliveryService_healthCheck_args {
	
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




class JitDeliveryService_importDeliveryDetail_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $storage_no = null;
	public $delivery_no = null;
	public $store_sn = null;
	public $delivery_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'storage_no'
			),
			4 => array(
			'var' => 'delivery_no'
			),
			5 => array(
			'var' => 'store_sn'
			),
			6 => array(
			'var' => 'delivery_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['delivery_list'])){
				
				$this->delivery_list = $vals['delivery_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->delivery_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->delivery_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\delivery\Delivery();
					$elem0->read($input);
					
					$this->delivery_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_no !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_no');
			$xfer += $output->writeString($this->delivery_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('delivery_list');
		
		if (!is_array($this->delivery_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->delivery_list as $iter0){
			
			
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




class JitDeliveryService_importMultiPoDeliveryDetail_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $storage_no = null;
	public $store_sn = null;
	public $delivery_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'storage_no'
			),
			4 => array(
			'var' => 'store_sn'
			),
			5 => array(
			'var' => 'delivery_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
			if (isset($vals['delivery_list'])){
				
				$this->delivery_list = $vals['delivery_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->delivery_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\delivery\Delivery();
					$elem1->read($input);
					
					$this->delivery_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->store_sn !== null) {
			
			$xfer += $output->writeFieldBegin('store_sn');
			$xfer += $output->writeString($this->store_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('delivery_list');
		
		if (!is_array($this->delivery_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->delivery_list as $iter0){
			
			
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




class JitDeliveryService_confirmDelivery_result {
	
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




class JitDeliveryService_confirmDeliveryInfo_result {
	
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




class JitDeliveryService_createDelivery_result {
	
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
			
			
			$this->success = new \vipapis\delivery\CreateDeliveryResponse();
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




class JitDeliveryService_createMultiPoDelivery_result {
	
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




class JitDeliveryService_createPick_result {
	
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
					
					$elem0 = new \vipapis\delivery\SimplePick();
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




class JitDeliveryService_deleteDeliveryDetail_result {
	
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
					
					$elem1 = new \vipapis\delivery\DeleteDeliveryDetail();
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




class JitDeliveryService_deliveryGoods_result {
	
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




class JitDeliveryService_editDelivery_result {
	
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




class JitDeliveryService_editMultiPoDelivery_result {
	
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




class JitDeliveryService_getActualStorageInfo_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetActualStorageInfoResponse();
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




class JitDeliveryService_getCarrierList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetCarrierListResponse();
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




class JitDeliveryService_getDeliveryGoods_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetDeliveryGoodsResponse();
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




class JitDeliveryService_getDeliveryList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetDeliveryListResponse();
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




class JitDeliveryService_getDeliveryTraceInfo_result {
	
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
			
			
			$this->success = new \vipapis\delivery\DeliveryTraceInfoResponse();
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




class JitDeliveryService_getMultiPoPickDetail_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetMultiPoPickDetailResponse();
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




class JitDeliveryService_getPickDetail_result {
	
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
			
			
			$this->success = new \vipapis\delivery\PickDetail();
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




class JitDeliveryService_getPickFinancialData_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPickFinancialDataResponse();
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




class JitDeliveryService_getPickList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPickListResponse();
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




class JitDeliveryService_getPoList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPoListResponse();
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




class JitDeliveryService_getPoOrders_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPoOrdersResponse();
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




class JitDeliveryService_getPoSkuList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPoSkuListResponse();
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




class JitDeliveryService_getPrintBox_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPrintBoxResponse();
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




class JitDeliveryService_getPrintDelivery_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetPrintDeliveryResponse();
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




class JitDeliveryService_getRestockStorageInfo_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetRestockStorageInfoResponse();
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




class JitDeliveryService_getSkuPriceInfo_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetSkuPriceResponse();
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




class JitDeliveryService_healthCheck_result {
	
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




class JitDeliveryService_importDeliveryDetail_result {
	
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




class JitDeliveryService_importMultiPoDeliveryDetail_result {
	
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




?>