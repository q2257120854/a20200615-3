<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;
interface CarrierServiceIf{
	
	
	public function fetchTransportNos(\com\vip\top\carrier\bizservice\FetchTransportNosRequestModel $requestModel);
	
	public function getAllExpressCo();
	
	public function getCarrier( $custNo);
	
	public function getCarrierByCustNo( $custNo);
	
	public function getCarrierByName( $custName);
	
	public function getCarrierListByWareHouse( $warehouse);
	
	public function getCarriers( $custNos);
	
	public function getForwarderCompanyVO( $orderSn, $warehouse);
	
	public function getLefengOrderDeliveryInfo( $orderSn, $warehouse);
	
	public function getOrderDeliveryInfo( $orderSn, $warehouse);
	
	public function getPickInfo(\com\vip\top\carrier\bizservice\PickupQueryInfo $info, $warehouse, $limit, $offset);
	
	public function getPickInfoTotalNum(\com\vip\top\carrier\bizservice\PickupQueryInfo $info, $warehouse);
	
	public function getPickingInfoByAddress(\com\vip\top\carrier\bizservice\PickingInfoRequest $pickingInfoRequest);
	
	public function getReturnOrderInfo( $orderSn, $warehouse);
	
	public function getSortingInfoByAddress(\com\vip\top\carrier\bizservice\SortingInfoRequestHead $sortingInfoRequestHead, $sortingInfoRequestItems);
	
	public function getTransportNosByOrderDetail( $sysKey, $vendorCode, $thirdCustCode, $size,\com\vip\top\carrier\bizservice\TmsOrderDetailModel $tmsOrderDetailModel);
	
	public function getTransportNosByThirdCustCode( $sysKey, $vendorCode, $thirdCustCode, $size, $orderSn);
	
	public function getVisitHourOption( $returnApplyTime, $lastAddressCode);
	
	public function getVisitTimeOption( $returnApplyTime, $lastAddressCode);
	
	public function healthCheck();
	
	public function listCarriers( $type, $showAll);
	
	public function matchCarrier( $tmsOrderInfoModels, $warehouse);
	
	public function matchCarrierById( $tmsOrderIds, $warehouse);
	
	public function matchCarrierByIdWithPriority( $tmsOrderIds, $warehouse);
	
	public function queryCustStandardNameByUncode( $custUncode);
	
	public function queryTransportNosByOrderSn( $orderSns);
	
	public function refreshCrmCustRuleAllocationByCreatedOffice( $createdOffice, $warehouse);
	
	public function refreshCustPickupGoodsTime( $crmCustId, $warehouse);
	
	public function refreshCustPointInfo( $crmCustPointId, $warehouse);
	
	public function refreshCustRelevantCache(\com\vip\top\carrier\cache\RefreshCacheParam $param, $warehouse);
	
	public function refreshInfConfiguration( $pkKey, $warehouse);
	
	public function refreshPickingInfo( $crmCustId, $warehouse);
	
	public function refreshSbDeliverPointByRegion( $createdOffice, $regionCode, $warehouse);
	
	public function refreshTmsSysParamByParamKey( $paramKey, $warehouse);
	
	public function syncCarrierById( $tmsOrderIds, $warehouse);
	
}

class _CarrierServiceClient extends \Osp\Base\OspStub implements \com\vip\top\carrier\bizservice\CarrierServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.top.carrier.bizservice.CarrierService", "1.4.0");
	}
	
	
	public function fetchTransportNos(\com\vip\top\carrier\bizservice\FetchTransportNosRequestModel $requestModel){
		
		$this->send_fetchTransportNos( $requestModel);
		return $this->recv_fetchTransportNos();
	}
	
	public function send_fetchTransportNos(\com\vip\top\carrier\bizservice\FetchTransportNosRequestModel $requestModel){
		
		$this->initInvocation("fetchTransportNos");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_fetchTransportNos_args();
		
		$args->requestModel = $requestModel;
		
		$this->send_base($args);
	}
	
	public function recv_fetchTransportNos(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_fetchTransportNos_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAllExpressCo(){
		
		$this->send_getAllExpressCo();
		return $this->recv_getAllExpressCo();
	}
	
	public function send_getAllExpressCo(){
		
		$this->initInvocation("getAllExpressCo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getAllExpressCo_args();
		
		$this->send_base($args);
	}
	
	public function recv_getAllExpressCo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getAllExpressCo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarrier( $custNo){
		
		$this->send_getCarrier( $custNo);
		return $this->recv_getCarrier();
	}
	
	public function send_getCarrier( $custNo){
		
		$this->initInvocation("getCarrier");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getCarrier_args();
		
		$args->custNo = $custNo;
		
		$this->send_base($args);
	}
	
	public function recv_getCarrier(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getCarrier_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarrierByCustNo( $custNo){
		
		$this->send_getCarrierByCustNo( $custNo);
		return $this->recv_getCarrierByCustNo();
	}
	
	public function send_getCarrierByCustNo( $custNo){
		
		$this->initInvocation("getCarrierByCustNo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getCarrierByCustNo_args();
		
		$args->custNo = $custNo;
		
		$this->send_base($args);
	}
	
	public function recv_getCarrierByCustNo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getCarrierByCustNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarrierByName( $custName){
		
		$this->send_getCarrierByName( $custName);
		return $this->recv_getCarrierByName();
	}
	
	public function send_getCarrierByName( $custName){
		
		$this->initInvocation("getCarrierByName");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getCarrierByName_args();
		
		$args->custName = $custName;
		
		$this->send_base($args);
	}
	
	public function recv_getCarrierByName(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getCarrierByName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarrierListByWareHouse( $warehouse){
		
		$this->send_getCarrierListByWareHouse( $warehouse);
		return $this->recv_getCarrierListByWareHouse();
	}
	
	public function send_getCarrierListByWareHouse( $warehouse){
		
		$this->initInvocation("getCarrierListByWareHouse");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getCarrierListByWareHouse_args();
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getCarrierListByWareHouse(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getCarrierListByWareHouse_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarriers( $custNos){
		
		$this->send_getCarriers( $custNos);
		return $this->recv_getCarriers();
	}
	
	public function send_getCarriers( $custNos){
		
		$this->initInvocation("getCarriers");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getCarriers_args();
		
		$args->custNos = $custNos;
		
		$this->send_base($args);
	}
	
	public function recv_getCarriers(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getCarriers_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getForwarderCompanyVO( $orderSn, $warehouse){
		
		$this->send_getForwarderCompanyVO( $orderSn, $warehouse);
		return $this->recv_getForwarderCompanyVO();
	}
	
	public function send_getForwarderCompanyVO( $orderSn, $warehouse){
		
		$this->initInvocation("getForwarderCompanyVO");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getForwarderCompanyVO_args();
		
		$args->orderSn = $orderSn;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getForwarderCompanyVO(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getForwarderCompanyVO_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getLefengOrderDeliveryInfo( $orderSn, $warehouse){
		
		$this->send_getLefengOrderDeliveryInfo( $orderSn, $warehouse);
		return $this->recv_getLefengOrderDeliveryInfo();
	}
	
	public function send_getLefengOrderDeliveryInfo( $orderSn, $warehouse){
		
		$this->initInvocation("getLefengOrderDeliveryInfo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getLefengOrderDeliveryInfo_args();
		
		$args->orderSn = $orderSn;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getLefengOrderDeliveryInfo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getLefengOrderDeliveryInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderDeliveryInfo( $orderSn, $warehouse){
		
		$this->send_getOrderDeliveryInfo( $orderSn, $warehouse);
		return $this->recv_getOrderDeliveryInfo();
	}
	
	public function send_getOrderDeliveryInfo( $orderSn, $warehouse){
		
		$this->initInvocation("getOrderDeliveryInfo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getOrderDeliveryInfo_args();
		
		$args->orderSn = $orderSn;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderDeliveryInfo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getOrderDeliveryInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickInfo(\com\vip\top\carrier\bizservice\PickupQueryInfo $info, $warehouse, $limit, $offset){
		
		$this->send_getPickInfo( $info, $warehouse, $limit, $offset);
		return $this->recv_getPickInfo();
	}
	
	public function send_getPickInfo(\com\vip\top\carrier\bizservice\PickupQueryInfo $info, $warehouse, $limit, $offset){
		
		$this->initInvocation("getPickInfo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getPickInfo_args();
		
		$args->info = $info;
		
		$args->warehouse = $warehouse;
		
		$args->limit = $limit;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_getPickInfo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getPickInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickInfoTotalNum(\com\vip\top\carrier\bizservice\PickupQueryInfo $info, $warehouse){
		
		$this->send_getPickInfoTotalNum( $info, $warehouse);
		return $this->recv_getPickInfoTotalNum();
	}
	
	public function send_getPickInfoTotalNum(\com\vip\top\carrier\bizservice\PickupQueryInfo $info, $warehouse){
		
		$this->initInvocation("getPickInfoTotalNum");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getPickInfoTotalNum_args();
		
		$args->info = $info;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getPickInfoTotalNum(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getPickInfoTotalNum_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickingInfoByAddress(\com\vip\top\carrier\bizservice\PickingInfoRequest $pickingInfoRequest){
		
		$this->send_getPickingInfoByAddress( $pickingInfoRequest);
		return $this->recv_getPickingInfoByAddress();
	}
	
	public function send_getPickingInfoByAddress(\com\vip\top\carrier\bizservice\PickingInfoRequest $pickingInfoRequest){
		
		$this->initInvocation("getPickingInfoByAddress");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getPickingInfoByAddress_args();
		
		$args->pickingInfoRequest = $pickingInfoRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getPickingInfoByAddress(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getPickingInfoByAddress_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnOrderInfo( $orderSn, $warehouse){
		
		$this->send_getReturnOrderInfo( $orderSn, $warehouse);
		return $this->recv_getReturnOrderInfo();
	}
	
	public function send_getReturnOrderInfo( $orderSn, $warehouse){
		
		$this->initInvocation("getReturnOrderInfo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getReturnOrderInfo_args();
		
		$args->orderSn = $orderSn;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnOrderInfo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getReturnOrderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSortingInfoByAddress(\com\vip\top\carrier\bizservice\SortingInfoRequestHead $sortingInfoRequestHead, $sortingInfoRequestItems){
		
		$this->send_getSortingInfoByAddress( $sortingInfoRequestHead, $sortingInfoRequestItems);
		return $this->recv_getSortingInfoByAddress();
	}
	
	public function send_getSortingInfoByAddress(\com\vip\top\carrier\bizservice\SortingInfoRequestHead $sortingInfoRequestHead, $sortingInfoRequestItems){
		
		$this->initInvocation("getSortingInfoByAddress");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getSortingInfoByAddress_args();
		
		$args->sortingInfoRequestHead = $sortingInfoRequestHead;
		
		$args->sortingInfoRequestItems = $sortingInfoRequestItems;
		
		$this->send_base($args);
	}
	
	public function recv_getSortingInfoByAddress(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getSortingInfoByAddress_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTransportNosByOrderDetail( $sysKey, $vendorCode, $thirdCustCode, $size,\com\vip\top\carrier\bizservice\TmsOrderDetailModel $tmsOrderDetailModel){
		
		$this->send_getTransportNosByOrderDetail( $sysKey, $vendorCode, $thirdCustCode, $size, $tmsOrderDetailModel);
		return $this->recv_getTransportNosByOrderDetail();
	}
	
	public function send_getTransportNosByOrderDetail( $sysKey, $vendorCode, $thirdCustCode, $size,\com\vip\top\carrier\bizservice\TmsOrderDetailModel $tmsOrderDetailModel){
		
		$this->initInvocation("getTransportNosByOrderDetail");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getTransportNosByOrderDetail_args();
		
		$args->sysKey = $sysKey;
		
		$args->vendorCode = $vendorCode;
		
		$args->thirdCustCode = $thirdCustCode;
		
		$args->size = $size;
		
		$args->tmsOrderDetailModel = $tmsOrderDetailModel;
		
		$this->send_base($args);
	}
	
	public function recv_getTransportNosByOrderDetail(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getTransportNosByOrderDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTransportNosByThirdCustCode( $sysKey, $vendorCode, $thirdCustCode, $size, $orderSn){
		
		$this->send_getTransportNosByThirdCustCode( $sysKey, $vendorCode, $thirdCustCode, $size, $orderSn);
		return $this->recv_getTransportNosByThirdCustCode();
	}
	
	public function send_getTransportNosByThirdCustCode( $sysKey, $vendorCode, $thirdCustCode, $size, $orderSn){
		
		$this->initInvocation("getTransportNosByThirdCustCode");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getTransportNosByThirdCustCode_args();
		
		$args->sysKey = $sysKey;
		
		$args->vendorCode = $vendorCode;
		
		$args->thirdCustCode = $thirdCustCode;
		
		$args->size = $size;
		
		$args->orderSn = $orderSn;
		
		$this->send_base($args);
	}
	
	public function recv_getTransportNosByThirdCustCode(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getTransportNosByThirdCustCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getVisitHourOption( $returnApplyTime, $lastAddressCode){
		
		$this->send_getVisitHourOption( $returnApplyTime, $lastAddressCode);
		return $this->recv_getVisitHourOption();
	}
	
	public function send_getVisitHourOption( $returnApplyTime, $lastAddressCode){
		
		$this->initInvocation("getVisitHourOption");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getVisitHourOption_args();
		
		$args->returnApplyTime = $returnApplyTime;
		
		$args->lastAddressCode = $lastAddressCode;
		
		$this->send_base($args);
	}
	
	public function recv_getVisitHourOption(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getVisitHourOption_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getVisitTimeOption( $returnApplyTime, $lastAddressCode){
		
		$this->send_getVisitTimeOption( $returnApplyTime, $lastAddressCode);
		return $this->recv_getVisitTimeOption();
	}
	
	public function send_getVisitTimeOption( $returnApplyTime, $lastAddressCode){
		
		$this->initInvocation("getVisitTimeOption");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_getVisitTimeOption_args();
		
		$args->returnApplyTime = $returnApplyTime;
		
		$args->lastAddressCode = $lastAddressCode;
		
		$this->send_base($args);
	}
	
	public function recv_getVisitTimeOption(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_getVisitTimeOption_result();
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
		$args = new \com\vip\top\carrier\bizservice\CarrierService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listCarriers( $type, $showAll){
		
		$this->send_listCarriers( $type, $showAll);
		return $this->recv_listCarriers();
	}
	
	public function send_listCarriers( $type, $showAll){
		
		$this->initInvocation("listCarriers");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_listCarriers_args();
		
		$args->type = $type;
		
		$args->showAll = $showAll;
		
		$this->send_base($args);
	}
	
	public function recv_listCarriers(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_listCarriers_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function matchCarrier( $tmsOrderInfoModels, $warehouse){
		
		$this->send_matchCarrier( $tmsOrderInfoModels, $warehouse);
		return $this->recv_matchCarrier();
	}
	
	public function send_matchCarrier( $tmsOrderInfoModels, $warehouse){
		
		$this->initInvocation("matchCarrier");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_matchCarrier_args();
		
		$args->tmsOrderInfoModels = $tmsOrderInfoModels;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_matchCarrier(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_matchCarrier_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function matchCarrierById( $tmsOrderIds, $warehouse){
		
		$this->send_matchCarrierById( $tmsOrderIds, $warehouse);
		return $this->recv_matchCarrierById();
	}
	
	public function send_matchCarrierById( $tmsOrderIds, $warehouse){
		
		$this->initInvocation("matchCarrierById");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_matchCarrierById_args();
		
		$args->tmsOrderIds = $tmsOrderIds;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_matchCarrierById(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_matchCarrierById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function matchCarrierByIdWithPriority( $tmsOrderIds, $warehouse){
		
		$this->send_matchCarrierByIdWithPriority( $tmsOrderIds, $warehouse);
		return $this->recv_matchCarrierByIdWithPriority();
	}
	
	public function send_matchCarrierByIdWithPriority( $tmsOrderIds, $warehouse){
		
		$this->initInvocation("matchCarrierByIdWithPriority");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_matchCarrierByIdWithPriority_args();
		
		$args->tmsOrderIds = $tmsOrderIds;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_matchCarrierByIdWithPriority(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_matchCarrierByIdWithPriority_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryCustStandardNameByUncode( $custUncode){
		
		$this->send_queryCustStandardNameByUncode( $custUncode);
		return $this->recv_queryCustStandardNameByUncode();
	}
	
	public function send_queryCustStandardNameByUncode( $custUncode){
		
		$this->initInvocation("queryCustStandardNameByUncode");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_queryCustStandardNameByUncode_args();
		
		$args->custUncode = $custUncode;
		
		$this->send_base($args);
	}
	
	public function recv_queryCustStandardNameByUncode(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_queryCustStandardNameByUncode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransportNosByOrderSn( $orderSns){
		
		$this->send_queryTransportNosByOrderSn( $orderSns);
		return $this->recv_queryTransportNosByOrderSn();
	}
	
	public function send_queryTransportNosByOrderSn( $orderSns){
		
		$this->initInvocation("queryTransportNosByOrderSn");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_queryTransportNosByOrderSn_args();
		
		$args->orderSns = $orderSns;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransportNosByOrderSn(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_queryTransportNosByOrderSn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function refreshCrmCustRuleAllocationByCreatedOffice( $createdOffice, $warehouse){
		
		$this->send_refreshCrmCustRuleAllocationByCreatedOffice( $createdOffice, $warehouse);
		return $this->recv_refreshCrmCustRuleAllocationByCreatedOffice();
	}
	
	public function send_refreshCrmCustRuleAllocationByCreatedOffice( $createdOffice, $warehouse){
		
		$this->initInvocation("refreshCrmCustRuleAllocationByCreatedOffice");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshCrmCustRuleAllocationByCreatedOffice_args();
		
		$args->createdOffice = $createdOffice;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshCrmCustRuleAllocationByCreatedOffice(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshCrmCustRuleAllocationByCreatedOffice_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshCustPickupGoodsTime( $crmCustId, $warehouse){
		
		$this->send_refreshCustPickupGoodsTime( $crmCustId, $warehouse);
		return $this->recv_refreshCustPickupGoodsTime();
	}
	
	public function send_refreshCustPickupGoodsTime( $crmCustId, $warehouse){
		
		$this->initInvocation("refreshCustPickupGoodsTime");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshCustPickupGoodsTime_args();
		
		$args->crmCustId = $crmCustId;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshCustPickupGoodsTime(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshCustPickupGoodsTime_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshCustPointInfo( $crmCustPointId, $warehouse){
		
		$this->send_refreshCustPointInfo( $crmCustPointId, $warehouse);
		return $this->recv_refreshCustPointInfo();
	}
	
	public function send_refreshCustPointInfo( $crmCustPointId, $warehouse){
		
		$this->initInvocation("refreshCustPointInfo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshCustPointInfo_args();
		
		$args->crmCustPointId = $crmCustPointId;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshCustPointInfo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshCustPointInfo_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshCustRelevantCache(\com\vip\top\carrier\cache\RefreshCacheParam $param, $warehouse){
		
		$this->send_refreshCustRelevantCache( $param, $warehouse);
		return $this->recv_refreshCustRelevantCache();
	}
	
	public function send_refreshCustRelevantCache(\com\vip\top\carrier\cache\RefreshCacheParam $param, $warehouse){
		
		$this->initInvocation("refreshCustRelevantCache");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshCustRelevantCache_args();
		
		$args->param = $param;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshCustRelevantCache(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshCustRelevantCache_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshInfConfiguration( $pkKey, $warehouse){
		
		$this->send_refreshInfConfiguration( $pkKey, $warehouse);
		return $this->recv_refreshInfConfiguration();
	}
	
	public function send_refreshInfConfiguration( $pkKey, $warehouse){
		
		$this->initInvocation("refreshInfConfiguration");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshInfConfiguration_args();
		
		$args->pkKey = $pkKey;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshInfConfiguration(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshInfConfiguration_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshPickingInfo( $crmCustId, $warehouse){
		
		$this->send_refreshPickingInfo( $crmCustId, $warehouse);
		return $this->recv_refreshPickingInfo();
	}
	
	public function send_refreshPickingInfo( $crmCustId, $warehouse){
		
		$this->initInvocation("refreshPickingInfo");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshPickingInfo_args();
		
		$args->crmCustId = $crmCustId;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshPickingInfo(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshPickingInfo_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshSbDeliverPointByRegion( $createdOffice, $regionCode, $warehouse){
		
		$this->send_refreshSbDeliverPointByRegion( $createdOffice, $regionCode, $warehouse);
		return $this->recv_refreshSbDeliverPointByRegion();
	}
	
	public function send_refreshSbDeliverPointByRegion( $createdOffice, $regionCode, $warehouse){
		
		$this->initInvocation("refreshSbDeliverPointByRegion");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshSbDeliverPointByRegion_args();
		
		$args->createdOffice = $createdOffice;
		
		$args->regionCode = $regionCode;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshSbDeliverPointByRegion(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshSbDeliverPointByRegion_result();
		$this->receive_base($result);
		
	}
	
	
	public function refreshTmsSysParamByParamKey( $paramKey, $warehouse){
		
		$this->send_refreshTmsSysParamByParamKey( $paramKey, $warehouse);
		return $this->recv_refreshTmsSysParamByParamKey();
	}
	
	public function send_refreshTmsSysParamByParamKey( $paramKey, $warehouse){
		
		$this->initInvocation("refreshTmsSysParamByParamKey");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_refreshTmsSysParamByParamKey_args();
		
		$args->paramKey = $paramKey;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_refreshTmsSysParamByParamKey(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_refreshTmsSysParamByParamKey_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncCarrierById( $tmsOrderIds, $warehouse){
		
		$this->send_syncCarrierById( $tmsOrderIds, $warehouse);
		return $this->recv_syncCarrierById();
	}
	
	public function send_syncCarrierById( $tmsOrderIds, $warehouse){
		
		$this->initInvocation("syncCarrierById");
		$args = new \com\vip\top\carrier\bizservice\CarrierService_syncCarrierById_args();
		
		$args->tmsOrderIds = $tmsOrderIds;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_syncCarrierById(){
		
		$result = new \com\vip\top\carrier\bizservice\CarrierService_syncCarrierById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class CarrierService_fetchTransportNos_args {
	
	static $_TSPEC;
	public $requestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestModel'])){
				
				$this->requestModel = $vals['requestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->requestModel = new \com\vip\top\carrier\bizservice\FetchTransportNosRequestModel();
			$this->requestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->requestModel !== null) {
			
			$xfer += $output->writeFieldBegin('requestModel');
			
			if (!is_object($this->requestModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->requestModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getAllExpressCo_args {
	
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




class CarrierService_getCarrier_args {
	
	static $_TSPEC;
	public $custNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->custNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeString($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getCarrierByCustNo_args {
	
	static $_TSPEC;
	public $custNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->custNo); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeI64($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getCarrierByName_args {
	
	static $_TSPEC;
	public $custName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->custName);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getCarrierListByWareHouse_args {
	
	static $_TSPEC;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getCarriers_args {
	
	static $_TSPEC;
	public $custNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNos'])){
				
				$this->custNos = $vals['custNos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->custNos = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->custNos[$_size0++] = $elem0;
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
		
		if($this->custNos !== null) {
			
			$xfer += $output->writeFieldBegin('custNos');
			
			if (!is_array($this->custNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->custNos as $iter0){
				
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




class CarrierService_getForwarderCompanyVO_args {
	
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




class CarrierService_getLefengOrderDeliveryInfo_args {
	
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




class CarrierService_getOrderDeliveryInfo_args {
	
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




class CarrierService_getPickInfo_args {
	
	static $_TSPEC;
	public $info = null;
	public $warehouse = null;
	public $limit = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'info'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'limit'
			),
			4 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['info'])){
				
				$this->info = $vals['info'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->info = new \com\vip\top\carrier\bizservice\PickupQueryInfo();
			$this->info->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->info !== null) {
			
			$xfer += $output->writeFieldBegin('info');
			
			if (!is_object($this->info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offset !== null) {
			
			$xfer += $output->writeFieldBegin('offset');
			$xfer += $output->writeI32($this->offset);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getPickInfoTotalNum_args {
	
	static $_TSPEC;
	public $info = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'info'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['info'])){
				
				$this->info = $vals['info'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->info = new \com\vip\top\carrier\bizservice\PickupQueryInfo();
			$this->info->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->info !== null) {
			
			$xfer += $output->writeFieldBegin('info');
			
			if (!is_object($this->info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->info->write($output);
			
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




class CarrierService_getPickingInfoByAddress_args {
	
	static $_TSPEC;
	public $pickingInfoRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pickingInfoRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pickingInfoRequest'])){
				
				$this->pickingInfoRequest = $vals['pickingInfoRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->pickingInfoRequest = new \com\vip\top\carrier\bizservice\PickingInfoRequest();
			$this->pickingInfoRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pickingInfoRequest !== null) {
			
			$xfer += $output->writeFieldBegin('pickingInfoRequest');
			
			if (!is_object($this->pickingInfoRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pickingInfoRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getReturnOrderInfo_args {
	
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




class CarrierService_getSortingInfoByAddress_args {
	
	static $_TSPEC;
	public $sortingInfoRequestHead = null;
	public $sortingInfoRequestItems = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sortingInfoRequestHead'
			),
			2 => array(
			'var' => 'sortingInfoRequestItems'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sortingInfoRequestHead'])){
				
				$this->sortingInfoRequestHead = $vals['sortingInfoRequestHead'];
			}
			
			
			if (isset($vals['sortingInfoRequestItems'])){
				
				$this->sortingInfoRequestItems = $vals['sortingInfoRequestItems'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->sortingInfoRequestHead = new \com\vip\top\carrier\bizservice\SortingInfoRequestHead();
			$this->sortingInfoRequestHead->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->sortingInfoRequestItems = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\top\carrier\bizservice\SortingInfoRequestItem();
					$elem0->read($input);
					
					$this->sortingInfoRequestItems[$_size0++] = $elem0;
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
		
		if($this->sortingInfoRequestHead !== null) {
			
			$xfer += $output->writeFieldBegin('sortingInfoRequestHead');
			
			if (!is_object($this->sortingInfoRequestHead)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->sortingInfoRequestHead->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sortingInfoRequestItems !== null) {
			
			$xfer += $output->writeFieldBegin('sortingInfoRequestItems');
			
			if (!is_array($this->sortingInfoRequestItems)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sortingInfoRequestItems as $iter0){
				
				
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




class CarrierService_getTransportNosByOrderDetail_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $vendorCode = null;
	public $thirdCustCode = null;
	public $size = null;
	public $tmsOrderDetailModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'thirdCustCode'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'tmsOrderDetailModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['thirdCustCode'])){
				
				$this->thirdCustCode = $vals['thirdCustCode'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['tmsOrderDetailModel'])){
				
				$this->tmsOrderDetailModel = $vals['tmsOrderDetailModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendorCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->thirdCustCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->size); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->tmsOrderDetailModel = new \com\vip\top\carrier\bizservice\TmsOrderDetailModel();
			$this->tmsOrderDetailModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->sysKey !== null) {
			
			$xfer += $output->writeFieldBegin('sysKey');
			$xfer += $output->writeString($this->sysKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCustCode');
			$xfer += $output->writeString($this->thirdCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('size');
		$xfer += $output->writeI32($this->size);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tmsOrderDetailModel !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderDetailModel');
			
			if (!is_object($this->tmsOrderDetailModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->tmsOrderDetailModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getTransportNosByThirdCustCode_args {
	
	static $_TSPEC;
	public $sysKey = null;
	public $vendorCode = null;
	public $thirdCustCode = null;
	public $size = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sysKey'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'thirdCustCode'
			),
			4 => array(
			'var' => 'size'
			),
			5 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sysKey'])){
				
				$this->sysKey = $vals['sysKey'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['thirdCustCode'])){
				
				$this->thirdCustCode = $vals['thirdCustCode'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sysKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendorCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->thirdCustCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->size); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->orderSn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->sysKey !== null) {
			
			$xfer += $output->writeFieldBegin('sysKey');
			$xfer += $output->writeString($this->sysKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCustCode');
			$xfer += $output->writeString($this->thirdCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('size');
		$xfer += $output->writeI32($this->size);
		
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




class CarrierService_getVisitHourOption_args {
	
	static $_TSPEC;
	public $returnApplyTime = null;
	public $lastAddressCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnApplyTime'
			),
			2 => array(
			'var' => 'lastAddressCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnApplyTime'])){
				
				$this->returnApplyTime = $vals['returnApplyTime'];
			}
			
			
			if (isset($vals['lastAddressCode'])){
				
				$this->lastAddressCode = $vals['lastAddressCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->returnApplyTime);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->lastAddressCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->returnApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnApplyTime');
			$xfer += $output->writeString($this->returnApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastAddressCode !== null) {
			
			$xfer += $output->writeFieldBegin('lastAddressCode');
			$xfer += $output->writeString($this->lastAddressCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getVisitTimeOption_args {
	
	static $_TSPEC;
	public $returnApplyTime = null;
	public $lastAddressCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnApplyTime'
			),
			2 => array(
			'var' => 'lastAddressCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnApplyTime'])){
				
				$this->returnApplyTime = $vals['returnApplyTime'];
			}
			
			
			if (isset($vals['lastAddressCode'])){
				
				$this->lastAddressCode = $vals['lastAddressCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->returnApplyTime);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->lastAddressCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->returnApplyTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnApplyTime');
			$xfer += $output->writeString($this->returnApplyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastAddressCode !== null) {
			
			$xfer += $output->writeFieldBegin('lastAddressCode');
			$xfer += $output->writeString($this->lastAddressCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_healthCheck_args {
	
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




class CarrierService_listCarriers_args {
	
	static $_TSPEC;
	public $type = null;
	public $showAll = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'showAll'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['showAll'])){
				
				$this->showAll = $vals['showAll'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->showAll);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeI32($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showAll !== null) {
			
			$xfer += $output->writeFieldBegin('showAll');
			$xfer += $output->writeBool($this->showAll);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_matchCarrier_args {
	
	static $_TSPEC;
	public $tmsOrderInfoModels = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderInfoModels'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderInfoModels'])){
				
				$this->tmsOrderInfoModels = $vals['tmsOrderInfoModels'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tmsOrderInfoModels = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\top\carrier\bizservice\TmsOrderInfoModel();
					$elem0->read($input);
					
					$this->tmsOrderInfoModels[$_size0++] = $elem0;
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
		
		if($this->tmsOrderInfoModels !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderInfoModels');
			
			if (!is_array($this->tmsOrderInfoModels)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tmsOrderInfoModels as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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




class CarrierService_matchCarrierById_args {
	
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




class CarrierService_matchCarrierByIdWithPriority_args {
	
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




class CarrierService_queryCustStandardNameByUncode_args {
	
	static $_TSPEC;
	public $custUncode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custUncode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custUncode'])){
				
				$this->custUncode = $vals['custUncode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->custUncode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->custUncode !== null) {
			
			$xfer += $output->writeFieldBegin('custUncode');
			$xfer += $output->writeString($this->custUncode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_queryTransportNosByOrderSn_args {
	
	static $_TSPEC;
	public $orderSns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSns'])){
				
				$this->orderSns = $vals['orderSns'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderSns = array();
			$_size0 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->orderSns[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->orderSns !== null) {
			
			$xfer += $output->writeFieldBegin('orderSns');
			
			if (!is_array($this->orderSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->orderSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_refreshCrmCustRuleAllocationByCreatedOffice_args {
	
	static $_TSPEC;
	public $createdOffice = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createdOffice'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->createdOffice);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
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




class CarrierService_refreshCustPickupGoodsTime_args {
	
	static $_TSPEC;
	public $crmCustId = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'crmCustId'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['crmCustId'])){
				
				$this->crmCustId = $vals['crmCustId'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->crmCustId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->crmCustId !== null) {
			
			$xfer += $output->writeFieldBegin('crmCustId');
			$xfer += $output->writeString($this->crmCustId);
			
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




class CarrierService_refreshCustPointInfo_args {
	
	static $_TSPEC;
	public $crmCustPointId = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'crmCustPointId'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['crmCustPointId'])){
				
				$this->crmCustPointId = $vals['crmCustPointId'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->crmCustPointId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->crmCustPointId !== null) {
			
			$xfer += $output->writeFieldBegin('crmCustPointId');
			$xfer += $output->writeString($this->crmCustPointId);
			
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




class CarrierService_refreshCustRelevantCache_args {
	
	static $_TSPEC;
	public $param = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'param'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['param'])){
				
				$this->param = $vals['param'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->param = new \com\vip\top\carrier\cache\RefreshCacheParam();
			$this->param->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->param !== null) {
			
			$xfer += $output->writeFieldBegin('param');
			
			if (!is_object($this->param)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->param->write($output);
			
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




class CarrierService_refreshInfConfiguration_args {
	
	static $_TSPEC;
	public $pkKey = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pkKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pkKey'])){
				
				$this->pkKey = $vals['pkKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->pkKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->pkKey !== null) {
			
			$xfer += $output->writeFieldBegin('pkKey');
			$xfer += $output->writeString($this->pkKey);
			
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




class CarrierService_refreshPickingInfo_args {
	
	static $_TSPEC;
	public $crmCustId = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'crmCustId'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['crmCustId'])){
				
				$this->crmCustId = $vals['crmCustId'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->crmCustId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->crmCustId !== null) {
			
			$xfer += $output->writeFieldBegin('crmCustId');
			$xfer += $output->writeString($this->crmCustId);
			
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




class CarrierService_refreshSbDeliverPointByRegion_args {
	
	static $_TSPEC;
	public $createdOffice = null;
	public $regionCode = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createdOffice'
			),
			2 => array(
			'var' => 'regionCode'
			),
			3 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['regionCode'])){
				
				$this->regionCode = $vals['regionCode'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->createdOffice);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->regionCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regionCode !== null) {
			
			$xfer += $output->writeFieldBegin('regionCode');
			$xfer += $output->writeString($this->regionCode);
			
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




class CarrierService_refreshTmsSysParamByParamKey_args {
	
	static $_TSPEC;
	public $paramKey = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'paramKey'
			),
			2 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['paramKey'])){
				
				$this->paramKey = $vals['paramKey'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->paramKey);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->paramKey !== null) {
			
			$xfer += $output->writeFieldBegin('paramKey');
			$xfer += $output->writeString($this->paramKey);
			
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




class CarrierService_syncCarrierById_args {
	
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




class CarrierService_fetchTransportNos_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\TransportNosResponseModel();
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




class CarrierService_getAllExpressCo_result {
	
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
					
					$elem0 = new \com\vip\top\carrier\bizservice\ExpressCo();
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




class CarrierService_getCarrier_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\RegisteredCarrierModelModel();
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




class CarrierService_getCarrierByCustNo_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\RegisteredCarrierModelModel();
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




class CarrierService_getCarrierByName_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\RegisteredCarrierModelModel();
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




class CarrierService_getCarrierListByWareHouse_result {
	
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
					
					$elem0 = new \com\vip\top\carrier\bizservice\RegisteredCarrierModelModel();
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




class CarrierService_getCarriers_result {
	
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
					
					$val1 = new \com\vip\top\carrier\bizservice\RegisteredCarrierModelModel();
					$val1->read($input);
					
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
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getForwarderCompanyVO_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\ForwarderCompanyVO();
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




class CarrierService_getLefengOrderDeliveryInfo_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\OrderDeliveryInfo();
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




class CarrierService_getOrderDeliveryInfo_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\OrderDeliveryInfo();
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




class CarrierService_getPickInfo_result {
	
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
					
					$elem0 = new \com\vip\top\carrier\bizservice\PickupQueryResult();
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




class CarrierService_getPickInfoTotalNum_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI32($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_getPickingInfoByAddress_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\PickingInfoResult();
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




class CarrierService_getReturnOrderInfo_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\ReturnOrderInfo();
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




class CarrierService_getSortingInfoByAddress_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\SortingInfoResult();
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




class CarrierService_getTransportNosByOrderDetail_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\TransportNoInfosResponseModel();
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




class CarrierService_getTransportNosByThirdCustCode_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\TransportNosResponseModel();
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




class CarrierService_getVisitHourOption_result {
	
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
					
					$elem0 = new \com\vip\top\carrier\service\GetPackageTimeVo();
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




class CarrierService_getVisitTimeOption_result {
	
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




class CarrierService_healthCheck_result {
	
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




class CarrierService_listCarriers_result {
	
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
					
					$elem0 = new \com\vip\top\carrier\bizservice\RegisteredCarrierModelModel();
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




class CarrierService_matchCarrier_result {
	
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
					
					$val1 = new \com\vip\top\carrier\bizservice\MatchResultInfo();
					$val1->read($input);
					
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
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_matchCarrierById_result {
	
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
					
					$val1 = new \com\vip\top\carrier\bizservice\MatchResultInfo();
					$val1->read($input);
					
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
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CarrierService_matchCarrierByIdWithPriority_result {
	
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
							
							$elem2 = new \com\vip\top\carrier\bizservice\MatchProcessResultInfo();
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




class CarrierService_queryCustStandardNameByUncode_result {
	
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




class CarrierService_queryTransportNosByOrderSn_result {
	
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
			
			
			$this->success = new \com\vip\top\carrier\bizservice\TransportNoInfosMapResponseModel();
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




class CarrierService_refreshCrmCustRuleAllocationByCreatedOffice_result {
	
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




class CarrierService_refreshCustPickupGoodsTime_result {
	
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




class CarrierService_refreshCustPointInfo_result {
	
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




class CarrierService_refreshCustRelevantCache_result {
	
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




class CarrierService_refreshInfConfiguration_result {
	
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




class CarrierService_refreshPickingInfo_result {
	
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




class CarrierService_refreshSbDeliverPointByRegion_result {
	
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




class CarrierService_refreshTmsSysParamByParamKey_result {
	
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




class CarrierService_syncCarrierById_result {
	
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
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = null;
					
					$val0 = new \com\vip\top\carrier\bizservice\SyncResultInfo();
					$val0->read($input);
					
					$this->success[$key0] = $val0;
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
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>