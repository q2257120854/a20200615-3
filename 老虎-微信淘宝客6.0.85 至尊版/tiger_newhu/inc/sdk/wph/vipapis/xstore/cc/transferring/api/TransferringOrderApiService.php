<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;
interface TransferringOrderApiServiceIf{
	
	
	public function completeTransferringOrder(\vipapis\xstore\cc\transferring\api\CompleteOrderRequest $request);
	
	public function confirmTransferringDelivery(\vipapis\xstore\cc\transferring\api\ConfirmTransferringDeliveryReq $request);
	
	public function confirmTransferringOrder( $confirm_transferring_order);
	
	public function healthCheck();
	
	public function queryTransferringDelivery( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size);
	
	public function queryTransferringDeliveryForPDA( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size);
	
	public function queryTransferringDeliveryItem( $transferring_order_no, $page, $page_size);
	
	public function queryTransferringOrder( $transferring_type, $create_time_start, $create_time_end, $page, $page_size, $confirm_status);
	
	public function queryTransferringOrderForPDA( $transferring_types, $create_time_start, $create_time_end, $page, $page_size, $confirm_status);
	
	public function queryTransferringOrderItem( $transferring_order_no, $page, $page_size);
	
	public function queryTransferringReceipt( $start_received_time, $end_received_time, $transferring_type, $page, $page_size);
	
	public function queryTransferringReceiptItem( $transferring_order_no, $page, $page_size);
	
	public function transferringBatchCancel( $batch_no);
	
	public function transferringBatchCreate(\vipapis\xstore\cc\transferring\api\TransferringBatchCreateReq $req);
	
	public function transferringBatchEmpty( $batch_no);
	
	public function transferringBatchImportDetail(\vipapis\xstore\cc\transferring\api\TransferringBatchImportDetailReq $req);
	
	public function transferringBatchSubmit( $batch_no);
	
	public function transferringOrderCancel( $transferringOrderNo);
	
	public function updateTransferringItemQuantity( $transferring_order_no, $delivery_date, $ship_warehouse_code, $transferring_order_items, $carrier_code, $carrier_name, $transport_no, $total_row);
	
	public function updateTransferringReceivedQuantity( $transferring_order_no, $received_date, $received_warehouse_code, $transferring_order_received, $total_row);
	
	public function updateTransferringWopReceivedQuantity( $transferring_order_no, $batch_no, $batch_line_count, $out_order_no, $received_warehouse_code, $received_date, $received_items, $total_row);
	
}

class _TransferringOrderApiServiceClient extends \Osp\Base\OspStub implements \vipapis\xstore\cc\transferring\api\TransferringOrderApiServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.xstore.cc.transferring.api.TransferringOrderApiService", "1.0.0");
	}
	
	
	public function completeTransferringOrder(\vipapis\xstore\cc\transferring\api\CompleteOrderRequest $request){
		
		$this->send_completeTransferringOrder( $request);
		return $this->recv_completeTransferringOrder();
	}
	
	public function send_completeTransferringOrder(\vipapis\xstore\cc\transferring\api\CompleteOrderRequest $request){
		
		$this->initInvocation("completeTransferringOrder");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_completeTransferringOrder_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_completeTransferringOrder(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_completeTransferringOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmTransferringDelivery(\vipapis\xstore\cc\transferring\api\ConfirmTransferringDeliveryReq $request){
		
		$this->send_confirmTransferringDelivery( $request);
		return $this->recv_confirmTransferringDelivery();
	}
	
	public function send_confirmTransferringDelivery(\vipapis\xstore\cc\transferring\api\ConfirmTransferringDeliveryReq $request){
		
		$this->initInvocation("confirmTransferringDelivery");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_confirmTransferringDelivery_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_confirmTransferringDelivery(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_confirmTransferringDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmTransferringOrder( $confirm_transferring_order){
		
		$this->send_confirmTransferringOrder( $confirm_transferring_order);
		return $this->recv_confirmTransferringOrder();
	}
	
	public function send_confirmTransferringOrder( $confirm_transferring_order){
		
		$this->initInvocation("confirmTransferringOrder");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_confirmTransferringOrder_args();
		
		$args->confirm_transferring_order = $confirm_transferring_order;
		
		$this->send_base($args);
	}
	
	public function recv_confirmTransferringOrder(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_confirmTransferringOrder_result();
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
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringDelivery( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size){
		
		$this->send_queryTransferringDelivery( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size);
		return $this->recv_queryTransferringDelivery();
	}
	
	public function send_queryTransferringDelivery( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size){
		
		$this->initInvocation("queryTransferringDelivery");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringDelivery_args();
		
		$args->start_delivery_time = $start_delivery_time;
		
		$args->end_delivery_time = $end_delivery_time;
		
		$args->transferring_type = $transferring_type;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringDelivery(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringDeliveryForPDA( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size){
		
		$this->send_queryTransferringDeliveryForPDA( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size);
		return $this->recv_queryTransferringDeliveryForPDA();
	}
	
	public function send_queryTransferringDeliveryForPDA( $start_delivery_time, $end_delivery_time, $transferring_type, $page, $page_size){
		
		$this->initInvocation("queryTransferringDeliveryForPDA");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringDeliveryForPDA_args();
		
		$args->start_delivery_time = $start_delivery_time;
		
		$args->end_delivery_time = $end_delivery_time;
		
		$args->transferring_type = $transferring_type;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringDeliveryForPDA(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringDeliveryForPDA_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringDeliveryItem( $transferring_order_no, $page, $page_size){
		
		$this->send_queryTransferringDeliveryItem( $transferring_order_no, $page, $page_size);
		return $this->recv_queryTransferringDeliveryItem();
	}
	
	public function send_queryTransferringDeliveryItem( $transferring_order_no, $page, $page_size){
		
		$this->initInvocation("queryTransferringDeliveryItem");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringDeliveryItem_args();
		
		$args->transferring_order_no = $transferring_order_no;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringDeliveryItem(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringDeliveryItem_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringOrder( $transferring_type, $create_time_start, $create_time_end, $page, $page_size, $confirm_status){
		
		$this->send_queryTransferringOrder( $transferring_type, $create_time_start, $create_time_end, $page, $page_size, $confirm_status);
		return $this->recv_queryTransferringOrder();
	}
	
	public function send_queryTransferringOrder( $transferring_type, $create_time_start, $create_time_end, $page, $page_size, $confirm_status){
		
		$this->initInvocation("queryTransferringOrder");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringOrder_args();
		
		$args->transferring_type = $transferring_type;
		
		$args->create_time_start = $create_time_start;
		
		$args->create_time_end = $create_time_end;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$args->confirm_status = $confirm_status;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringOrder(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringOrderForPDA( $transferring_types, $create_time_start, $create_time_end, $page, $page_size, $confirm_status){
		
		$this->send_queryTransferringOrderForPDA( $transferring_types, $create_time_start, $create_time_end, $page, $page_size, $confirm_status);
		return $this->recv_queryTransferringOrderForPDA();
	}
	
	public function send_queryTransferringOrderForPDA( $transferring_types, $create_time_start, $create_time_end, $page, $page_size, $confirm_status){
		
		$this->initInvocation("queryTransferringOrderForPDA");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringOrderForPDA_args();
		
		$args->transferring_types = $transferring_types;
		
		$args->create_time_start = $create_time_start;
		
		$args->create_time_end = $create_time_end;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$args->confirm_status = $confirm_status;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringOrderForPDA(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringOrderForPDA_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringOrderItem( $transferring_order_no, $page, $page_size){
		
		$this->send_queryTransferringOrderItem( $transferring_order_no, $page, $page_size);
		return $this->recv_queryTransferringOrderItem();
	}
	
	public function send_queryTransferringOrderItem( $transferring_order_no, $page, $page_size){
		
		$this->initInvocation("queryTransferringOrderItem");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringOrderItem_args();
		
		$args->transferring_order_no = $transferring_order_no;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringOrderItem(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringOrderItem_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringReceipt( $start_received_time, $end_received_time, $transferring_type, $page, $page_size){
		
		$this->send_queryTransferringReceipt( $start_received_time, $end_received_time, $transferring_type, $page, $page_size);
		return $this->recv_queryTransferringReceipt();
	}
	
	public function send_queryTransferringReceipt( $start_received_time, $end_received_time, $transferring_type, $page, $page_size){
		
		$this->initInvocation("queryTransferringReceipt");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringReceipt_args();
		
		$args->start_received_time = $start_received_time;
		
		$args->end_received_time = $end_received_time;
		
		$args->transferring_type = $transferring_type;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringReceipt(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringReceipt_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryTransferringReceiptItem( $transferring_order_no, $page, $page_size){
		
		$this->send_queryTransferringReceiptItem( $transferring_order_no, $page, $page_size);
		return $this->recv_queryTransferringReceiptItem();
	}
	
	public function send_queryTransferringReceiptItem( $transferring_order_no, $page, $page_size){
		
		$this->initInvocation("queryTransferringReceiptItem");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringReceiptItem_args();
		
		$args->transferring_order_no = $transferring_order_no;
		
		$args->page = $page;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_queryTransferringReceiptItem(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_queryTransferringReceiptItem_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferringBatchCancel( $batch_no){
		
		$this->send_transferringBatchCancel( $batch_no);
		return $this->recv_transferringBatchCancel();
	}
	
	public function send_transferringBatchCancel( $batch_no){
		
		$this->initInvocation("transferringBatchCancel");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchCancel_args();
		
		$args->batch_no = $batch_no;
		
		$this->send_base($args);
	}
	
	public function recv_transferringBatchCancel(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchCancel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferringBatchCreate(\vipapis\xstore\cc\transferring\api\TransferringBatchCreateReq $req){
		
		$this->send_transferringBatchCreate( $req);
		return $this->recv_transferringBatchCreate();
	}
	
	public function send_transferringBatchCreate(\vipapis\xstore\cc\transferring\api\TransferringBatchCreateReq $req){
		
		$this->initInvocation("transferringBatchCreate");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchCreate_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_transferringBatchCreate(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchCreate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferringBatchEmpty( $batch_no){
		
		$this->send_transferringBatchEmpty( $batch_no);
		return $this->recv_transferringBatchEmpty();
	}
	
	public function send_transferringBatchEmpty( $batch_no){
		
		$this->initInvocation("transferringBatchEmpty");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchEmpty_args();
		
		$args->batch_no = $batch_no;
		
		$this->send_base($args);
	}
	
	public function recv_transferringBatchEmpty(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchEmpty_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferringBatchImportDetail(\vipapis\xstore\cc\transferring\api\TransferringBatchImportDetailReq $req){
		
		$this->send_transferringBatchImportDetail( $req);
		return $this->recv_transferringBatchImportDetail();
	}
	
	public function send_transferringBatchImportDetail(\vipapis\xstore\cc\transferring\api\TransferringBatchImportDetailReq $req){
		
		$this->initInvocation("transferringBatchImportDetail");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchImportDetail_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_transferringBatchImportDetail(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchImportDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferringBatchSubmit( $batch_no){
		
		$this->send_transferringBatchSubmit( $batch_no);
		return $this->recv_transferringBatchSubmit();
	}
	
	public function send_transferringBatchSubmit( $batch_no){
		
		$this->initInvocation("transferringBatchSubmit");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchSubmit_args();
		
		$args->batch_no = $batch_no;
		
		$this->send_base($args);
	}
	
	public function recv_transferringBatchSubmit(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringBatchSubmit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function transferringOrderCancel( $transferringOrderNo){
		
		$this->send_transferringOrderCancel( $transferringOrderNo);
		return $this->recv_transferringOrderCancel();
	}
	
	public function send_transferringOrderCancel( $transferringOrderNo){
		
		$this->initInvocation("transferringOrderCancel");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringOrderCancel_args();
		
		$args->transferringOrderNo = $transferringOrderNo;
		
		$this->send_base($args);
	}
	
	public function recv_transferringOrderCancel(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_transferringOrderCancel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateTransferringItemQuantity( $transferring_order_no, $delivery_date, $ship_warehouse_code, $transferring_order_items, $carrier_code, $carrier_name, $transport_no, $total_row){
		
		$this->send_updateTransferringItemQuantity( $transferring_order_no, $delivery_date, $ship_warehouse_code, $transferring_order_items, $carrier_code, $carrier_name, $transport_no, $total_row);
		return $this->recv_updateTransferringItemQuantity();
	}
	
	public function send_updateTransferringItemQuantity( $transferring_order_no, $delivery_date, $ship_warehouse_code, $transferring_order_items, $carrier_code, $carrier_name, $transport_no, $total_row){
		
		$this->initInvocation("updateTransferringItemQuantity");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_updateTransferringItemQuantity_args();
		
		$args->transferring_order_no = $transferring_order_no;
		
		$args->delivery_date = $delivery_date;
		
		$args->ship_warehouse_code = $ship_warehouse_code;
		
		$args->transferring_order_items = $transferring_order_items;
		
		$args->carrier_code = $carrier_code;
		
		$args->carrier_name = $carrier_name;
		
		$args->transport_no = $transport_no;
		
		$args->total_row = $total_row;
		
		$this->send_base($args);
	}
	
	public function recv_updateTransferringItemQuantity(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_updateTransferringItemQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateTransferringReceivedQuantity( $transferring_order_no, $received_date, $received_warehouse_code, $transferring_order_received, $total_row){
		
		$this->send_updateTransferringReceivedQuantity( $transferring_order_no, $received_date, $received_warehouse_code, $transferring_order_received, $total_row);
		return $this->recv_updateTransferringReceivedQuantity();
	}
	
	public function send_updateTransferringReceivedQuantity( $transferring_order_no, $received_date, $received_warehouse_code, $transferring_order_received, $total_row){
		
		$this->initInvocation("updateTransferringReceivedQuantity");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_updateTransferringReceivedQuantity_args();
		
		$args->transferring_order_no = $transferring_order_no;
		
		$args->received_date = $received_date;
		
		$args->received_warehouse_code = $received_warehouse_code;
		
		$args->transferring_order_received = $transferring_order_received;
		
		$args->total_row = $total_row;
		
		$this->send_base($args);
	}
	
	public function recv_updateTransferringReceivedQuantity(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_updateTransferringReceivedQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateTransferringWopReceivedQuantity( $transferring_order_no, $batch_no, $batch_line_count, $out_order_no, $received_warehouse_code, $received_date, $received_items, $total_row){
		
		$this->send_updateTransferringWopReceivedQuantity( $transferring_order_no, $batch_no, $batch_line_count, $out_order_no, $received_warehouse_code, $received_date, $received_items, $total_row);
		return $this->recv_updateTransferringWopReceivedQuantity();
	}
	
	public function send_updateTransferringWopReceivedQuantity( $transferring_order_no, $batch_no, $batch_line_count, $out_order_no, $received_warehouse_code, $received_date, $received_items, $total_row){
		
		$this->initInvocation("updateTransferringWopReceivedQuantity");
		$args = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_updateTransferringWopReceivedQuantity_args();
		
		$args->transferring_order_no = $transferring_order_no;
		
		$args->batch_no = $batch_no;
		
		$args->batch_line_count = $batch_line_count;
		
		$args->out_order_no = $out_order_no;
		
		$args->received_warehouse_code = $received_warehouse_code;
		
		$args->received_date = $received_date;
		
		$args->received_items = $received_items;
		
		$args->total_row = $total_row;
		
		$this->send_base($args);
	}
	
	public function recv_updateTransferringWopReceivedQuantity(){
		
		$result = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiService_updateTransferringWopReceivedQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TransferringOrderApiService_completeTransferringOrder_args {
	
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
			
			
			$this->request = new \vipapis\xstore\cc\transferring\api\CompleteOrderRequest();
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




class TransferringOrderApiService_confirmTransferringDelivery_args {
	
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
			
			
			$this->request = new \vipapis\xstore\cc\transferring\api\ConfirmTransferringDeliveryReq();
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




class TransferringOrderApiService_confirmTransferringOrder_args {
	
	static $_TSPEC;
	public $confirm_transferring_order = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'confirm_transferring_order'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['confirm_transferring_order'])){
				
				$this->confirm_transferring_order = $vals['confirm_transferring_order'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->confirm_transferring_order = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiConfirmQuery();
					$elem0->read($input);
					
					$this->confirm_transferring_order[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('confirm_transferring_order');
		
		if (!is_array($this->confirm_transferring_order)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->confirm_transferring_order as $iter0){
			
			
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




class TransferringOrderApiService_healthCheck_args {
	
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




class TransferringOrderApiService_queryTransferringDelivery_args {
	
	static $_TSPEC;
	public $start_delivery_time = null;
	public $end_delivery_time = null;
	public $transferring_type = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'start_delivery_time'
			),
			2 => array(
			'var' => 'end_delivery_time'
			),
			3 => array(
			'var' => 'transferring_type'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['start_delivery_time'])){
				
				$this->start_delivery_time = $vals['start_delivery_time'];
			}
			
			
			if (isset($vals['end_delivery_time'])){
				
				$this->end_delivery_time = $vals['end_delivery_time'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->start_delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->end_delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->transferring_type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('start_delivery_time');
		$xfer += $output->writeI64($this->start_delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_delivery_time');
		$xfer += $output->writeI64($this->end_delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transferring_type');
		$xfer += $output->writeByte($this->transferring_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringDeliveryForPDA_args {
	
	static $_TSPEC;
	public $start_delivery_time = null;
	public $end_delivery_time = null;
	public $transferring_type = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'start_delivery_time'
			),
			2 => array(
			'var' => 'end_delivery_time'
			),
			3 => array(
			'var' => 'transferring_type'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['start_delivery_time'])){
				
				$this->start_delivery_time = $vals['start_delivery_time'];
			}
			
			
			if (isset($vals['end_delivery_time'])){
				
				$this->end_delivery_time = $vals['end_delivery_time'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->start_delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->end_delivery_time);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->transferring_type = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readByte($elem0); 
					
					$this->transferring_type[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('start_delivery_time');
		$xfer += $output->writeI64($this->start_delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_delivery_time');
		$xfer += $output->writeI64($this->end_delivery_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transferring_type');
		
		if (!is_array($this->transferring_type)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->transferring_type as $iter0){
			
			$xfer += $output->writeByte($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringDeliveryItem_args {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('transferring_order_no');
		$xfer += $output->writeString($this->transferring_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringOrder_args {
	
	static $_TSPEC;
	public $transferring_type = null;
	public $create_time_start = null;
	public $create_time_end = null;
	public $page = null;
	public $page_size = null;
	public $confirm_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_type'
			),
			2 => array(
			'var' => 'create_time_start'
			),
			3 => array(
			'var' => 'create_time_end'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'page_size'
			),
			6 => array(
			'var' => 'confirm_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['create_time_start'])){
				
				$this->create_time_start = $vals['create_time_start'];
			}
			
			
			if (isset($vals['create_time_end'])){
				
				$this->create_time_end = $vals['create_time_end'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['confirm_status'])){
				
				$this->confirm_status = $vals['confirm_status'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readByte($this->transferring_type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->create_time_start);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->create_time_end);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->confirm_status);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transferring_type !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_type');
			$xfer += $output->writeByte($this->transferring_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_start !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_start');
			$xfer += $output->writeI64($this->create_time_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_end');
			$xfer += $output->writeI64($this->create_time_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('confirm_status');
		$xfer += $output->writeString($this->confirm_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringOrderForPDA_args {
	
	static $_TSPEC;
	public $transferring_types = null;
	public $create_time_start = null;
	public $create_time_end = null;
	public $page = null;
	public $page_size = null;
	public $confirm_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_types'
			),
			2 => array(
			'var' => 'create_time_start'
			),
			3 => array(
			'var' => 'create_time_end'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'page_size'
			),
			6 => array(
			'var' => 'confirm_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_types'])){
				
				$this->transferring_types = $vals['transferring_types'];
			}
			
			
			if (isset($vals['create_time_start'])){
				
				$this->create_time_start = $vals['create_time_start'];
			}
			
			
			if (isset($vals['create_time_end'])){
				
				$this->create_time_end = $vals['create_time_end'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['confirm_status'])){
				
				$this->confirm_status = $vals['confirm_status'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->transferring_types = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readByte($elem0); 
					
					$this->transferring_types[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->create_time_start);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->create_time_end);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->confirm_status);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transferring_types !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_types');
			
			if (!is_array($this->transferring_types)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transferring_types as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_start !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_start');
			$xfer += $output->writeI64($this->create_time_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_end');
			$xfer += $output->writeI64($this->create_time_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('confirm_status');
		$xfer += $output->writeString($this->confirm_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringOrderItem_args {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('transferring_order_no');
		$xfer += $output->writeString($this->transferring_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringReceipt_args {
	
	static $_TSPEC;
	public $start_received_time = null;
	public $end_received_time = null;
	public $transferring_type = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'start_received_time'
			),
			2 => array(
			'var' => 'end_received_time'
			),
			3 => array(
			'var' => 'transferring_type'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['start_received_time'])){
				
				$this->start_received_time = $vals['start_received_time'];
			}
			
			
			if (isset($vals['end_received_time'])){
				
				$this->end_received_time = $vals['end_received_time'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->start_received_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->end_received_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->transferring_type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('start_received_time');
		$xfer += $output->writeI64($this->start_received_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_received_time');
		$xfer += $output->writeI64($this->end_received_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transferring_type !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_type');
			$xfer += $output->writeI32($this->transferring_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_queryTransferringReceiptItem_args {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('transferring_order_no');
		$xfer += $output->writeString($this->transferring_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page_size !== null) {
			
			$xfer += $output->writeFieldBegin('page_size');
			$xfer += $output->writeI32($this->page_size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_transferringBatchCancel_args {
	
	static $_TSPEC;
	public $batch_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->batch_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_transferringBatchCreate_args {
	
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
			
			
			$this->req = new \vipapis\xstore\cc\transferring\api\TransferringBatchCreateReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_transferringBatchEmpty_args {
	
	static $_TSPEC;
	public $batch_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->batch_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_transferringBatchImportDetail_args {
	
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
			
			
			$this->req = new \vipapis\xstore\cc\transferring\api\TransferringBatchImportDetailReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_transferringBatchSubmit_args {
	
	static $_TSPEC;
	public $batch_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->batch_no);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_transferringOrderCancel_args {
	
	static $_TSPEC;
	public $transferringOrderNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferringOrderNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferringOrderNo'])){
				
				$this->transferringOrderNo = $vals['transferringOrderNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferringOrderNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('transferringOrderNo');
		$xfer += $output->writeString($this->transferringOrderNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_updateTransferringItemQuantity_args {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $delivery_date = null;
	public $ship_warehouse_code = null;
	public $transferring_order_items = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $transport_no = null;
	public $total_row = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'delivery_date'
			),
			3 => array(
			'var' => 'ship_warehouse_code'
			),
			4 => array(
			'var' => 'transferring_order_items'
			),
			5 => array(
			'var' => 'carrier_code'
			),
			6 => array(
			'var' => 'carrier_name'
			),
			7 => array(
			'var' => 'transport_no'
			),
			8 => array(
			'var' => 'total_row'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['delivery_date'])){
				
				$this->delivery_date = $vals['delivery_date'];
			}
			
			
			if (isset($vals['ship_warehouse_code'])){
				
				$this->ship_warehouse_code = $vals['ship_warehouse_code'];
			}
			
			
			if (isset($vals['transferring_order_items'])){
				
				$this->transferring_order_items = $vals['transferring_order_items'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['total_row'])){
				
				$this->total_row = $vals['total_row'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->delivery_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ship_warehouse_code);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->transferring_order_items = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\xstore\cc\transferring\api\UpdateTransOrderItemApiModel();
					$elem0->read($input);
					
					$this->transferring_order_items[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->carrier_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->transport_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->total_row); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transferring_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_no');
			$xfer += $output->writeString($this->transferring_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_date !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_date');
			$xfer += $output->writeI64($this->delivery_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ship_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('ship_warehouse_code');
			$xfer += $output->writeString($this->ship_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_order_items !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_items');
			
			if (!is_array($this->transferring_order_items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transferring_order_items as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_name !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_name');
			$xfer += $output->writeString($this->carrier_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_row !== null) {
			
			$xfer += $output->writeFieldBegin('total_row');
			$xfer += $output->writeI32($this->total_row);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_updateTransferringReceivedQuantity_args {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $received_date = null;
	public $received_warehouse_code = null;
	public $transferring_order_received = null;
	public $total_row = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'received_date'
			),
			3 => array(
			'var' => 'received_warehouse_code'
			),
			4 => array(
			'var' => 'transferring_order_received'
			),
			5 => array(
			'var' => 'total_row'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['received_date'])){
				
				$this->received_date = $vals['received_date'];
			}
			
			
			if (isset($vals['received_warehouse_code'])){
				
				$this->received_warehouse_code = $vals['received_warehouse_code'];
			}
			
			
			if (isset($vals['transferring_order_received'])){
				
				$this->transferring_order_received = $vals['transferring_order_received'];
			}
			
			
			if (isset($vals['total_row'])){
				
				$this->total_row = $vals['total_row'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->received_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->received_warehouse_code);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->transferring_order_received = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\xstore\cc\transferring\api\UpdateTransferringOrderReceivedApiModel();
					$elem0->read($input);
					
					$this->transferring_order_received[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->total_row); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transferring_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_no');
			$xfer += $output->writeString($this->transferring_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->received_date !== null) {
			
			$xfer += $output->writeFieldBegin('received_date');
			$xfer += $output->writeI64($this->received_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->received_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('received_warehouse_code');
			$xfer += $output->writeString($this->received_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_order_received !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_received');
			
			if (!is_array($this->transferring_order_received)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transferring_order_received as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_row !== null) {
			
			$xfer += $output->writeFieldBegin('total_row');
			$xfer += $output->writeI32($this->total_row);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_updateTransferringWopReceivedQuantity_args {
	
	static $_TSPEC;
	public $transferring_order_no = null;
	public $batch_no = null;
	public $batch_line_count = null;
	public $out_order_no = null;
	public $received_warehouse_code = null;
	public $received_date = null;
	public $received_items = null;
	public $total_row = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_order_no'
			),
			2 => array(
			'var' => 'batch_no'
			),
			3 => array(
			'var' => 'batch_line_count'
			),
			4 => array(
			'var' => 'out_order_no'
			),
			5 => array(
			'var' => 'received_warehouse_code'
			),
			6 => array(
			'var' => 'received_date'
			),
			7 => array(
			'var' => 'received_items'
			),
			8 => array(
			'var' => 'total_row'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['batch_line_count'])){
				
				$this->batch_line_count = $vals['batch_line_count'];
			}
			
			
			if (isset($vals['out_order_no'])){
				
				$this->out_order_no = $vals['out_order_no'];
			}
			
			
			if (isset($vals['received_warehouse_code'])){
				
				$this->received_warehouse_code = $vals['received_warehouse_code'];
			}
			
			
			if (isset($vals['received_date'])){
				
				$this->received_date = $vals['received_date'];
			}
			
			
			if (isset($vals['received_items'])){
				
				$this->received_items = $vals['received_items'];
			}
			
			
			if (isset($vals['total_row'])){
				
				$this->total_row = $vals['total_row'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transferring_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->batch_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->batch_line_count); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->out_order_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->received_warehouse_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->received_date);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->received_items = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\xstore\cc\transferring\api\TransferringWopReceivedQty();
					$elem0->read($input);
					
					$this->received_items[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->total_row); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('transferring_order_no');
		$xfer += $output->writeString($this->transferring_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batch_line_count');
		$xfer += $output->writeI32($this->batch_line_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('out_order_no');
		$xfer += $output->writeString($this->out_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('received_warehouse_code');
		$xfer += $output->writeString($this->received_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('received_date');
		$xfer += $output->writeI64($this->received_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('received_items');
		
		if (!is_array($this->received_items)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->received_items as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->total_row !== null) {
			
			$xfer += $output->writeFieldBegin('total_row');
			$xfer += $output->writeI32($this->total_row);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TransferringOrderApiService_completeTransferringOrder_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\CompleteOrderResponse();
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




class TransferringOrderApiService_confirmTransferringDelivery_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\ConfirmTransferringDeliveryRes();
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




class TransferringOrderApiService_confirmTransferringOrder_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiConfirmResult();
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




class TransferringOrderApiService_healthCheck_result {
	
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




class TransferringOrderApiService_queryTransferringDelivery_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\QueryTransferringDeliveryResult();
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




class TransferringOrderApiService_queryTransferringDeliveryForPDA_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\QueryTransferringDeliveryResult();
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




class TransferringOrderApiService_queryTransferringDeliveryItem_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\QueryTransferringDeliveryItemResult();
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




class TransferringOrderApiService_queryTransferringOrder_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiResultModel();
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




class TransferringOrderApiService_queryTransferringOrderForPDA_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringOrderApiResultModel();
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




class TransferringOrderApiService_queryTransferringOrderItem_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringOrderItemApiResult();
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




class TransferringOrderApiService_queryTransferringReceipt_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\QueryTransferringReceiptResult();
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




class TransferringOrderApiService_queryTransferringReceiptItem_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\QueryTransferringReceiptItemResult();
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




class TransferringOrderApiService_transferringBatchCancel_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringBatchRes();
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




class TransferringOrderApiService_transferringBatchCreate_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringBatchCreateRes();
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




class TransferringOrderApiService_transferringBatchEmpty_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringBatchRes();
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




class TransferringOrderApiService_transferringBatchImportDetail_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringBatchImportDetailRes();
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




class TransferringOrderApiService_transferringBatchSubmit_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringBatchSubmitRes();
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




class TransferringOrderApiService_transferringOrderCancel_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\TransferringOrderCancelRes();
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




class TransferringOrderApiService_updateTransferringItemQuantity_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\UpdateTransItemQtyApiResult();
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




class TransferringOrderApiService_updateTransferringReceivedQuantity_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\UpdateTransReceivedQtyApiResult();
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




class TransferringOrderApiService_updateTransferringWopReceivedQuantity_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\transferring\api\UpdateTransferringWopReceivedQuantityResult();
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