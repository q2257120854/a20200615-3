<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;
interface DvdDeliveryServiceIf{
	
	
	public function auditReturnResult(\vipapis\delivery\AuditReturnResultRequest $request);
	
	public function confirmRefuseResult(\vipapis\delivery\ConfirmRefuseResultRequest $request);
	
	public function confirmReturnOrder(\vipapis\delivery\ConfirmReturnOrderRequest $request);
	
	public function confirmReturnResult(\vipapis\delivery\ConfirmReturnResultRequest $request);
	
	public function editShipInfo( $vendor_id, $ship_list);
	
	public function exportOrderById( $vendor_id, $order_id);
	
	public function getCarrierList( $vendor_id, $page, $limit);
	
	public function getOrderDetail( $vendor_id, $order_id, $page, $limit);
	
	public function getOrderFinancialFields( $vendor_id, $order_id, $po_no, $deduction_indicator, $active_no);
	
	public function getOrderList( $st_add_time, $et_add_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit, $sale_type);
	
	public function getOrderListByCreateTime( $st_create_time, $et_create_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit);
	
	public function getOrderReturnDetails(\vipapis\delivery\ReturnOrderDetailsRequest $request);
	
	public function getOrderReturnList( $st_time, $et_time, $vendor_id, $order_id, $return_type, $page, $limit);
	
	public function getOrderStatusById( $vendor_id, $order_id, $sale_type);
	
	public function getPrintTemplate( $vendor_id, $print_type, $order_id);
	
	public function getReturnList( $vendor_id, $st_create_time, $et_create_time, $return_status, $page, $limit);
	
	public function getReturnProduct( $vendor_id, $back_sn, $page, $limit);
	
	public function healthCheck();
	
	public function mergeAfterSaleAddress( $vendor_id, $username, $address, $postcode, $tel);
	
	public function refuseOrder( $vendor_id, $refuse_product_list);
	
	public function returnOrder( $vendor_id, $dvd_return_list);
	
	public function ship( $vendor_id, $ship_list);
	
}

class _DvdDeliveryServiceClient extends \Osp\Base\OspStub implements \vipapis\delivery\DvdDeliveryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.delivery.DvdDeliveryService", "1.0.0");
	}
	
	
	public function auditReturnResult(\vipapis\delivery\AuditReturnResultRequest $request){
		
		$this->send_auditReturnResult( $request);
		return $this->recv_auditReturnResult();
	}
	
	public function send_auditReturnResult(\vipapis\delivery\AuditReturnResultRequest $request){
		
		$this->initInvocation("auditReturnResult");
		$args = new \vipapis\delivery\DvdDeliveryService_auditReturnResult_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_auditReturnResult(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_auditReturnResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmRefuseResult(\vipapis\delivery\ConfirmRefuseResultRequest $request){
		
		$this->send_confirmRefuseResult( $request);
		return $this->recv_confirmRefuseResult();
	}
	
	public function send_confirmRefuseResult(\vipapis\delivery\ConfirmRefuseResultRequest $request){
		
		$this->initInvocation("confirmRefuseResult");
		$args = new \vipapis\delivery\DvdDeliveryService_confirmRefuseResult_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_confirmRefuseResult(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_confirmRefuseResult_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmReturnOrder(\vipapis\delivery\ConfirmReturnOrderRequest $request){
		
		$this->send_confirmReturnOrder( $request);
		return $this->recv_confirmReturnOrder();
	}
	
	public function send_confirmReturnOrder(\vipapis\delivery\ConfirmReturnOrderRequest $request){
		
		$this->initInvocation("confirmReturnOrder");
		$args = new \vipapis\delivery\DvdDeliveryService_confirmReturnOrder_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_confirmReturnOrder(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_confirmReturnOrder_result();
		$this->receive_base($result);
		
	}
	
	
	public function confirmReturnResult(\vipapis\delivery\ConfirmReturnResultRequest $request){
		
		$this->send_confirmReturnResult( $request);
		return $this->recv_confirmReturnResult();
	}
	
	public function send_confirmReturnResult(\vipapis\delivery\ConfirmReturnResultRequest $request){
		
		$this->initInvocation("confirmReturnResult");
		$args = new \vipapis\delivery\DvdDeliveryService_confirmReturnResult_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_confirmReturnResult(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_confirmReturnResult_result();
		$this->receive_base($result);
		
	}
	
	
	public function editShipInfo( $vendor_id, $ship_list){
		
		$this->send_editShipInfo( $vendor_id, $ship_list);
		return $this->recv_editShipInfo();
	}
	
	public function send_editShipInfo( $vendor_id, $ship_list){
		
		$this->initInvocation("editShipInfo");
		$args = new \vipapis\delivery\DvdDeliveryService_editShipInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->ship_list = $ship_list;
		
		$this->send_base($args);
	}
	
	public function recv_editShipInfo(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_editShipInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportOrderById( $vendor_id, $order_id){
		
		$this->send_exportOrderById( $vendor_id, $order_id);
		return $this->recv_exportOrderById();
	}
	
	public function send_exportOrderById( $vendor_id, $order_id){
		
		$this->initInvocation("exportOrderById");
		$args = new \vipapis\delivery\DvdDeliveryService_exportOrderById_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$this->send_base($args);
	}
	
	public function recv_exportOrderById(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_exportOrderById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCarrierList( $vendor_id, $page, $limit){
		
		$this->send_getCarrierList( $vendor_id, $page, $limit);
		return $this->recv_getCarrierList();
	}
	
	public function send_getCarrierList( $vendor_id, $page, $limit){
		
		$this->initInvocation("getCarrierList");
		$args = new \vipapis\delivery\DvdDeliveryService_getCarrierList_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getCarrierList(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getCarrierList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderDetail( $vendor_id, $order_id, $page, $limit){
		
		$this->send_getOrderDetail( $vendor_id, $order_id, $page, $limit);
		return $this->recv_getOrderDetail();
	}
	
	public function send_getOrderDetail( $vendor_id, $order_id, $page, $limit){
		
		$this->initInvocation("getOrderDetail");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderDetail_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderDetail(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderFinancialFields( $vendor_id, $order_id, $po_no, $deduction_indicator, $active_no){
		
		$this->send_getOrderFinancialFields( $vendor_id, $order_id, $po_no, $deduction_indicator, $active_no);
		return $this->recv_getOrderFinancialFields();
	}
	
	public function send_getOrderFinancialFields( $vendor_id, $order_id, $po_no, $deduction_indicator, $active_no){
		
		$this->initInvocation("getOrderFinancialFields");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderFinancialFields_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->po_no = $po_no;
		
		$args->deduction_indicator = $deduction_indicator;
		
		$args->active_no = $active_no;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderFinancialFields(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderFinancialFields_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderList( $st_add_time, $et_add_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit, $sale_type){
		
		$this->send_getOrderList( $st_add_time, $et_add_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit, $sale_type);
		return $this->recv_getOrderList();
	}
	
	public function send_getOrderList( $st_add_time, $et_add_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit, $sale_type){
		
		$this->initInvocation("getOrderList");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderList_args();
		
		$args->st_add_time = $st_add_time;
		
		$args->et_add_time = $et_add_time;
		
		$args->order_status = $order_status;
		
		$args->po_no = $po_no;
		
		$args->order_id = $order_id;
		
		$args->vendor_id = $vendor_id;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->sale_type = $sale_type;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderList(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderListByCreateTime( $st_create_time, $et_create_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit){
		
		$this->send_getOrderListByCreateTime( $st_create_time, $et_create_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit);
		return $this->recv_getOrderListByCreateTime();
	}
	
	public function send_getOrderListByCreateTime( $st_create_time, $et_create_time, $order_status, $po_no, $order_id, $vendor_id, $page, $limit){
		
		$this->initInvocation("getOrderListByCreateTime");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderListByCreateTime_args();
		
		$args->st_create_time = $st_create_time;
		
		$args->et_create_time = $et_create_time;
		
		$args->order_status = $order_status;
		
		$args->po_no = $po_no;
		
		$args->order_id = $order_id;
		
		$args->vendor_id = $vendor_id;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderListByCreateTime(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderListByCreateTime_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderReturnDetails(\vipapis\delivery\ReturnOrderDetailsRequest $request){
		
		$this->send_getOrderReturnDetails( $request);
		return $this->recv_getOrderReturnDetails();
	}
	
	public function send_getOrderReturnDetails(\vipapis\delivery\ReturnOrderDetailsRequest $request){
		
		$this->initInvocation("getOrderReturnDetails");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderReturnDetails_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderReturnDetails(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderReturnDetails_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderReturnList( $st_time, $et_time, $vendor_id, $order_id, $return_type, $page, $limit){
		
		$this->send_getOrderReturnList( $st_time, $et_time, $vendor_id, $order_id, $return_type, $page, $limit);
		return $this->recv_getOrderReturnList();
	}
	
	public function send_getOrderReturnList( $st_time, $et_time, $vendor_id, $order_id, $return_type, $page, $limit){
		
		$this->initInvocation("getOrderReturnList");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderReturnList_args();
		
		$args->st_time = $st_time;
		
		$args->et_time = $et_time;
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->return_type = $return_type;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderReturnList(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderReturnList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderStatusById( $vendor_id, $order_id, $sale_type){
		
		$this->send_getOrderStatusById( $vendor_id, $order_id, $sale_type);
		return $this->recv_getOrderStatusById();
	}
	
	public function send_getOrderStatusById( $vendor_id, $order_id, $sale_type){
		
		$this->initInvocation("getOrderStatusById");
		$args = new \vipapis\delivery\DvdDeliveryService_getOrderStatusById_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->order_id = $order_id;
		
		$args->sale_type = $sale_type;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderStatusById(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getOrderStatusById_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPrintTemplate( $vendor_id, $print_type, $order_id){
		
		$this->send_getPrintTemplate( $vendor_id, $print_type, $order_id);
		return $this->recv_getPrintTemplate();
	}
	
	public function send_getPrintTemplate( $vendor_id, $print_type, $order_id){
		
		$this->initInvocation("getPrintTemplate");
		$args = new \vipapis\delivery\DvdDeliveryService_getPrintTemplate_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->print_type = $print_type;
		
		$args->order_id = $order_id;
		
		$this->send_base($args);
	}
	
	public function recv_getPrintTemplate(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getPrintTemplate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnList( $vendor_id, $st_create_time, $et_create_time, $return_status, $page, $limit){
		
		$this->send_getReturnList( $vendor_id, $st_create_time, $et_create_time, $return_status, $page, $limit);
		return $this->recv_getReturnList();
	}
	
	public function send_getReturnList( $vendor_id, $st_create_time, $et_create_time, $return_status, $page, $limit){
		
		$this->initInvocation("getReturnList");
		$args = new \vipapis\delivery\DvdDeliveryService_getReturnList_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->st_create_time = $st_create_time;
		
		$args->et_create_time = $et_create_time;
		
		$args->return_status = $return_status;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnList(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getReturnList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnProduct( $vendor_id, $back_sn, $page, $limit){
		
		$this->send_getReturnProduct( $vendor_id, $back_sn, $page, $limit);
		return $this->recv_getReturnProduct();
	}
	
	public function send_getReturnProduct( $vendor_id, $back_sn, $page, $limit){
		
		$this->initInvocation("getReturnProduct");
		$args = new \vipapis\delivery\DvdDeliveryService_getReturnProduct_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->back_sn = $back_sn;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnProduct(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_getReturnProduct_result();
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
		$args = new \vipapis\delivery\DvdDeliveryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function mergeAfterSaleAddress( $vendor_id, $username, $address, $postcode, $tel){
		
		$this->send_mergeAfterSaleAddress( $vendor_id, $username, $address, $postcode, $tel);
		return $this->recv_mergeAfterSaleAddress();
	}
	
	public function send_mergeAfterSaleAddress( $vendor_id, $username, $address, $postcode, $tel){
		
		$this->initInvocation("mergeAfterSaleAddress");
		$args = new \vipapis\delivery\DvdDeliveryService_mergeAfterSaleAddress_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->username = $username;
		
		$args->address = $address;
		
		$args->postcode = $postcode;
		
		$args->tel = $tel;
		
		$this->send_base($args);
	}
	
	public function recv_mergeAfterSaleAddress(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_mergeAfterSaleAddress_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function refuseOrder( $vendor_id, $refuse_product_list){
		
		$this->send_refuseOrder( $vendor_id, $refuse_product_list);
		return $this->recv_refuseOrder();
	}
	
	public function send_refuseOrder( $vendor_id, $refuse_product_list){
		
		$this->initInvocation("refuseOrder");
		$args = new \vipapis\delivery\DvdDeliveryService_refuseOrder_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->refuse_product_list = $refuse_product_list;
		
		$this->send_base($args);
	}
	
	public function recv_refuseOrder(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_refuseOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function returnOrder( $vendor_id, $dvd_return_list){
		
		$this->send_returnOrder( $vendor_id, $dvd_return_list);
		return $this->recv_returnOrder();
	}
	
	public function send_returnOrder( $vendor_id, $dvd_return_list){
		
		$this->initInvocation("returnOrder");
		$args = new \vipapis\delivery\DvdDeliveryService_returnOrder_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->dvd_return_list = $dvd_return_list;
		
		$this->send_base($args);
	}
	
	public function recv_returnOrder(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_returnOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ship( $vendor_id, $ship_list){
		
		$this->send_ship( $vendor_id, $ship_list);
		return $this->recv_ship();
	}
	
	public function send_ship( $vendor_id, $ship_list){
		
		$this->initInvocation("ship");
		$args = new \vipapis\delivery\DvdDeliveryService_ship_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->ship_list = $ship_list;
		
		$this->send_base($args);
	}
	
	public function recv_ship(){
		
		$result = new \vipapis\delivery\DvdDeliveryService_ship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class DvdDeliveryService_auditReturnResult_args {
	
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
			
			
			$this->request = new \vipapis\delivery\AuditReturnResultRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_confirmRefuseResult_args {
	
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
			
			
			$this->request = new \vipapis\delivery\ConfirmRefuseResultRequest();
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




class DvdDeliveryService_confirmReturnOrder_args {
	
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
			
			
			$this->request = new \vipapis\delivery\ConfirmReturnOrderRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_confirmReturnResult_args {
	
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
			
			
			$this->request = new \vipapis\delivery\ConfirmReturnResultRequest();
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




class DvdDeliveryService_editShipInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $ship_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'ship_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['ship_list'])){
				
				$this->ship_list = $vals['ship_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->ship_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\delivery\Ship();
					$elem0->read($input);
					
					$this->ship_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('ship_list');
		
		if (!is_array($this->ship_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->ship_list as $iter0){
			
			
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




class DvdDeliveryService_exportOrderById_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'order_id'
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
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_getCarrierList_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
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




class DvdDeliveryService_getOrderDetail_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $page = null;
	public $limit = null;
	
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
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
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
			
			$input->readString($this->order_id);
			
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
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
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




class DvdDeliveryService_getOrderFinancialFields_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $po_no = null;
	public $deduction_indicator = null;
	public $active_no = null;
	
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
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'deduction_indicator'
			),
			5 => array(
			'var' => 'active_no'
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
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['deduction_indicator'])){
				
				$this->deduction_indicator = $vals['deduction_indicator'];
			}
			
			
			if (isset($vals['active_no'])){
				
				$this->active_no = $vals['active_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->deduction_indicator); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->active_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('deduction_indicator');
		$xfer += $output->writeI32($this->deduction_indicator);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->active_no !== null) {
			
			$xfer += $output->writeFieldBegin('active_no');
			$xfer += $output->writeString($this->active_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_getOrderList_args {
	
	static $_TSPEC;
	public $st_add_time = null;
	public $et_add_time = null;
	public $order_status = null;
	public $po_no = null;
	public $order_id = null;
	public $vendor_id = null;
	public $page = null;
	public $limit = null;
	public $sale_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'st_add_time'
			),
			2 => array(
			'var' => 'et_add_time'
			),
			3 => array(
			'var' => 'order_status'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'order_id'
			),
			6 => array(
			'var' => 'vendor_id'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'limit'
			),
			9 => array(
			'var' => 'sale_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['st_add_time'])){
				
				$this->st_add_time = $vals['st_add_time'];
			}
			
			
			if (isset($vals['et_add_time'])){
				
				$this->et_add_time = $vals['et_add_time'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['sale_type'])){
				
				$this->sale_type = $vals['sale_type'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->st_add_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_add_time);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\OrderStatus::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->order_status = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sale_type);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('st_add_time');
		$xfer += $output->writeString($this->st_add_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('et_add_time');
		$xfer += $output->writeString($this->et_add_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			
			$em = new \vipapis\common\OrderStatus; 
			$output->writeString($em::$__names[$this->order_status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
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
		
		
		if($this->sale_type !== null) {
			
			$xfer += $output->writeFieldBegin('sale_type');
			$xfer += $output->writeString($this->sale_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_getOrderListByCreateTime_args {
	
	static $_TSPEC;
	public $st_create_time = null;
	public $et_create_time = null;
	public $order_status = null;
	public $po_no = null;
	public $order_id = null;
	public $vendor_id = null;
	public $page = null;
	public $limit = null;
	
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
			'var' => 'order_status'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'order_id'
			),
			6 => array(
			'var' => 'vendor_id'
			),
			7 => array(
			'var' => 'page'
			),
			8 => array(
			'var' => 'limit'
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
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
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
			
			$input->readString($this->st_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_create_time);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\OrderStatus::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->order_status = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
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
		
		$xfer += $output->writeFieldBegin('st_create_time');
		$xfer += $output->writeString($this->st_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('et_create_time');
		$xfer += $output->writeString($this->et_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			
			$em = new \vipapis\common\OrderStatus; 
			$output->writeString($em::$__names[$this->order_status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
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




class DvdDeliveryService_getOrderReturnDetails_args {
	
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
			
			
			$this->request = new \vipapis\delivery\ReturnOrderDetailsRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_getOrderReturnList_args {
	
	static $_TSPEC;
	public $st_time = null;
	public $et_time = null;
	public $vendor_id = null;
	public $order_id = null;
	public $return_type = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'st_time'
			),
			2 => array(
			'var' => 'et_time'
			),
			3 => array(
			'var' => 'vendor_id'
			),
			4 => array(
			'var' => 'order_id'
			),
			5 => array(
			'var' => 'return_type'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['st_time'])){
				
				$this->st_time = $vals['st_time'];
			}
			
			
			if (isset($vals['et_time'])){
				
				$this->et_time = $vals['et_time'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
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
			
			$input->readString($this->st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->return_type); 
			
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
		
		$xfer += $output->writeFieldBegin('st_time');
		$xfer += $output->writeString($this->st_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('et_time');
		$xfer += $output->writeString($this->et_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI64($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_type !== null) {
			
			$xfer += $output->writeFieldBegin('return_type');
			$xfer += $output->writeI32($this->return_type);
			
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




class DvdDeliveryService_getOrderStatusById_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $order_id = null;
	public $sale_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'sale_type'
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
			
			
			if (isset($vals['sale_type'])){
				
				$this->sale_type = $vals['sale_type'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sale_type);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sale_type !== null) {
			
			$xfer += $output->writeFieldBegin('sale_type');
			$xfer += $output->writeString($this->sale_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_getPrintTemplate_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $print_type = null;
	public $order_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'print_type'
			),
			2 => array(
			'var' => 'order_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['print_type'])){
				
				$this->print_type = $vals['print_type'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->print_type);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->order_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->print_type !== null) {
			
			$xfer += $output->writeFieldBegin('print_type');
			$xfer += $output->writeString($this->print_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_getReturnList_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $st_create_time = null;
	public $et_create_time = null;
	public $return_status = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'st_create_time'
			),
			2 => array(
			'var' => 'et_create_time'
			),
			3 => array(
			'var' => 'return_status'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['st_create_time'])){
				
				$this->st_create_time = $vals['st_create_time'];
			}
			
			
			if (isset($vals['et_create_time'])){
				
				$this->et_create_time = $vals['et_create_time'];
			}
			
			
			if (isset($vals['return_status'])){
				
				$this->return_status = $vals['return_status'];
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
			
			$input->readString($this->st_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->return_status); 
			
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
		
		$xfer += $output->writeFieldBegin('st_create_time');
		$xfer += $output->writeString($this->st_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('et_create_time');
		$xfer += $output->writeString($this->et_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->return_status !== null) {
			
			$xfer += $output->writeFieldBegin('return_status');
			$xfer += $output->writeI32($this->return_status);
			
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




class DvdDeliveryService_getReturnProduct_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $back_sn = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'back_sn'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['back_sn'])){
				
				$this->back_sn = $vals['back_sn'];
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
			
			$input->readString($this->back_sn);
			
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
		
		$xfer += $output->writeFieldBegin('back_sn');
		$xfer += $output->writeString($this->back_sn);
		
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




class DvdDeliveryService_healthCheck_args {
	
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




class DvdDeliveryService_mergeAfterSaleAddress_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $username = null;
	public $address = null;
	public $postcode = null;
	public $tel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'username'
			),
			3 => array(
			'var' => 'address'
			),
			4 => array(
			'var' => 'postcode'
			),
			5 => array(
			'var' => 'tel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['username'])){
				
				$this->username = $vals['username'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->username);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->address);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->postcode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->tel);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('username');
		$xfer += $output->writeString($this->username);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('postcode');
		$xfer += $output->writeString($this->postcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tel');
		$xfer += $output->writeString($this->tel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_refuseOrder_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $refuse_product_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'refuse_product_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['refuse_product_list'])){
				
				$this->refuse_product_list = $vals['refuse_product_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->refuse_product_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\delivery\RefuseOrReturnOrder();
					$elem0->read($input);
					
					$this->refuse_product_list[$_size0++] = $elem0;
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
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refuse_product_list');
		
		if (!is_array($this->refuse_product_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->refuse_product_list as $iter0){
			
			
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




class DvdDeliveryService_returnOrder_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $dvd_return_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'dvd_return_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['dvd_return_list'])){
				
				$this->dvd_return_list = $vals['dvd_return_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_id);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->dvd_return_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\delivery\RefuseOrReturnOrder();
					$elem1->read($input);
					
					$this->dvd_return_list[$_size1++] = $elem1;
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
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dvd_return_list');
		
		if (!is_array($this->dvd_return_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->dvd_return_list as $iter0){
			
			
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




class DvdDeliveryService_ship_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $ship_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'vendor_id'
			),
			1 => array(
			'var' => 'ship_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['ship_list'])){
				
				$this->ship_list = $vals['ship_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->ship_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\delivery\Ship();
					$elem1->read($input);
					
					$this->ship_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('ship_list');
		
		if (!is_array($this->ship_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->ship_list as $iter0){
			
			
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




class DvdDeliveryService_auditReturnResult_result {
	
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




class DvdDeliveryService_confirmRefuseResult_result {
	
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




class DvdDeliveryService_confirmReturnOrder_result {
	
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




class DvdDeliveryService_confirmReturnResult_result {
	
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




class DvdDeliveryService_editShipInfo_result {
	
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
			
			
			$this->success = new \vipapis\delivery\ShipResult();
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




class DvdDeliveryService_exportOrderById_result {
	
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
			
			
			$this->success = new \vipapis\delivery\ExportOrderByIdResponse();
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




class DvdDeliveryService_getCarrierList_result {
	
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




class DvdDeliveryService_getOrderDetail_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetOrderDetailResponse();
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




class DvdDeliveryService_getOrderFinancialFields_result {
	
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
					
					$elem0 = new \vipapis\delivery\OrderFinancialFields();
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




class DvdDeliveryService_getOrderList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetOrderListResponse();
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




class DvdDeliveryService_getOrderListByCreateTime_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetOrderListByCreateTimeResponse();
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




class DvdDeliveryService_getOrderReturnDetails_result {
	
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
			
			
			$this->success = new \vipapis\delivery\OrderReturnDetailResponse();
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




class DvdDeliveryService_getOrderReturnList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\OrderReturnResponse();
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




class DvdDeliveryService_getOrderStatusById_result {
	
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
					
					$elem0 = new \vipapis\delivery\DvdOrderStatus();
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




class DvdDeliveryService_getPrintTemplate_result {
	
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
			
			
			$this->success = new \vipapis\delivery\PrintTemplateResponse();
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




class DvdDeliveryService_getReturnList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetReturnListResponse();
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




class DvdDeliveryService_getReturnProduct_result {
	
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
			
			
			$this->success = new \vipapis\delivery\GetReturnProductResponse();
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




class DvdDeliveryService_healthCheck_result {
	
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




class DvdDeliveryService_mergeAfterSaleAddress_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class DvdDeliveryService_refuseOrder_result {
	
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
			
			
			$this->success = new \vipapis\delivery\RefuseOrReturnProductResponse();
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




class DvdDeliveryService_returnOrder_result {
	
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
			
			
			$this->success = new \vipapis\delivery\RefuseOrReturnProductResponse();
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




class DvdDeliveryService_ship_result {
	
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
			
			
			$this->success = new \vipapis\delivery\ShipResult();
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