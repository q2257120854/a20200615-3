<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;
interface Jit3PLDeliveryServiceIf{
	
	
	public function confirmDelivery( $operator_id, $storage_no, $store_sn);
	
	public function createDelivery( $operator_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $delivery_method, $store_sn, $carrier_code);
	
	public function createMultiPoDelivery(\vipapis\delivery\Create3PLMultiPoDeliveryRequest $request);
	
	public function createPick( $po_no, $operator_id, $warehouse, $store_sn);
	
	public function deleteDeliveryDetail( $operator_id, $storage_no, $po_no);
	
	public function editDelivery( $operator_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $tel, $driver, $driver_tel, $delivery_method, $store_sn, $carrier_code);
	
	public function editMultiPoDelivery(\vipapis\delivery\Edit3PLMultiPoDeliveryRequest $request);
	
	public function getDeliveryGoods( $operator_id, $storage_no, $page, $limit);
	
	public function getDeliveryList( $operator_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no);
	
	public function getMultiPoPickDetail(\vipapis\delivery\Get3PLMultiPoPickDetailRequest $request);
	
	public function getPickDetail( $po_no, $operator_id, $pick_no, $page, $limit);
	
	public function getPickList( $operator_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $is_export, $page, $limit, $store_sn);
	
	public function getPoList( $po_no, $co_mode, $operator_id, $st_sell_st_time, $et_sell_st_time, $st_po_start_time, $et_po_start_time, $page, $limit);
	
	public function healthCheck();
	
	public function importDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list);
	
	public function importMultiPoDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list);
	
}

class _Jit3PLDeliveryServiceClient extends \Osp\Base\OspStub implements \vipapis\delivery\Jit3PLDeliveryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.delivery.Jit3PLDeliveryService", "1.0.0");
	}
	
	
	public function confirmDelivery( $operator_id, $storage_no, $store_sn){
		
		$this->send_confirmDelivery( $operator_id, $storage_no, $store_sn);
		return $this->recv_confirmDelivery();
	}
	
	public function send_confirmDelivery( $operator_id, $storage_no, $store_sn){
		
		$this->initInvocation("confirmDelivery");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_confirmDelivery_args();
		
		$args->operator_id = $operator_id;
		
		$args->storage_no = $storage_no;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_confirmDelivery(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_confirmDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createDelivery( $operator_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $delivery_method, $store_sn, $carrier_code){
		
		$this->send_createDelivery( $operator_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $delivery_method, $store_sn, $carrier_code);
		return $this->recv_createDelivery();
	}
	
	public function send_createDelivery( $operator_id, $po_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $delivery_method, $store_sn, $carrier_code){
		
		$this->initInvocation("createDelivery");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_createDelivery_args();
		
		$args->operator_id = $operator_id;
		
		$args->po_no = $po_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->warehouse = $warehouse;
		
		$args->delivery_time = $delivery_time;
		
		$args->arrival_time = $arrival_time;
		
		$args->carrier_name = $carrier_name;
		
		$args->delivery_method = $delivery_method;
		
		$args->store_sn = $store_sn;
		
		$args->carrier_code = $carrier_code;
		
		$this->send_base($args);
	}
	
	public function recv_createDelivery(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_createDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createMultiPoDelivery(\vipapis\delivery\Create3PLMultiPoDeliveryRequest $request){
		
		$this->send_createMultiPoDelivery( $request);
		return $this->recv_createMultiPoDelivery();
	}
	
	public function send_createMultiPoDelivery(\vipapis\delivery\Create3PLMultiPoDeliveryRequest $request){
		
		$this->initInvocation("createMultiPoDelivery");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_createMultiPoDelivery_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_createMultiPoDelivery(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_createMultiPoDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createPick( $po_no, $operator_id, $warehouse, $store_sn){
		
		$this->send_createPick( $po_no, $operator_id, $warehouse, $store_sn);
		return $this->recv_createPick();
	}
	
	public function send_createPick( $po_no, $operator_id, $warehouse, $store_sn){
		
		$this->initInvocation("createPick");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_createPick_args();
		
		$args->po_no = $po_no;
		
		$args->operator_id = $operator_id;
		
		$args->warehouse = $warehouse;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_createPick(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_createPick_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteDeliveryDetail( $operator_id, $storage_no, $po_no){
		
		$this->send_deleteDeliveryDetail( $operator_id, $storage_no, $po_no);
		return $this->recv_deleteDeliveryDetail();
	}
	
	public function send_deleteDeliveryDetail( $operator_id, $storage_no, $po_no){
		
		$this->initInvocation("deleteDeliveryDetail");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_deleteDeliveryDetail_args();
		
		$args->operator_id = $operator_id;
		
		$args->storage_no = $storage_no;
		
		$args->po_no = $po_no;
		
		$this->send_base($args);
	}
	
	public function recv_deleteDeliveryDetail(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_deleteDeliveryDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editDelivery( $operator_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $tel, $driver, $driver_tel, $delivery_method, $store_sn, $carrier_code){
		
		$this->send_editDelivery( $operator_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $tel, $driver, $driver_tel, $delivery_method, $store_sn, $carrier_code);
		return $this->recv_editDelivery();
	}
	
	public function send_editDelivery( $operator_id, $storage_no, $delivery_no, $warehouse, $delivery_time, $arrival_time, $carrier_name, $tel, $driver, $driver_tel, $delivery_method, $store_sn, $carrier_code){
		
		$this->initInvocation("editDelivery");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_editDelivery_args();
		
		$args->operator_id = $operator_id;
		
		$args->storage_no = $storage_no;
		
		$args->delivery_no = $delivery_no;
		
		$args->warehouse = $warehouse;
		
		$args->delivery_time = $delivery_time;
		
		$args->arrival_time = $arrival_time;
		
		$args->carrier_name = $carrier_name;
		
		$args->tel = $tel;
		
		$args->driver = $driver;
		
		$args->driver_tel = $driver_tel;
		
		$args->delivery_method = $delivery_method;
		
		$args->store_sn = $store_sn;
		
		$args->carrier_code = $carrier_code;
		
		$this->send_base($args);
	}
	
	public function recv_editDelivery(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_editDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editMultiPoDelivery(\vipapis\delivery\Edit3PLMultiPoDeliveryRequest $request){
		
		$this->send_editMultiPoDelivery( $request);
		return $this->recv_editMultiPoDelivery();
	}
	
	public function send_editMultiPoDelivery(\vipapis\delivery\Edit3PLMultiPoDeliveryRequest $request){
		
		$this->initInvocation("editMultiPoDelivery");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_editMultiPoDelivery_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_editMultiPoDelivery(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_editMultiPoDelivery_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeliveryGoods( $operator_id, $storage_no, $page, $limit){
		
		$this->send_getDeliveryGoods( $operator_id, $storage_no, $page, $limit);
		return $this->recv_getDeliveryGoods();
	}
	
	public function send_getDeliveryGoods( $operator_id, $storage_no, $page, $limit){
		
		$this->initInvocation("getDeliveryGoods");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_getDeliveryGoods_args();
		
		$args->operator_id = $operator_id;
		
		$args->storage_no = $storage_no;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getDeliveryGoods(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_getDeliveryGoods_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeliveryList( $operator_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no){
		
		$this->send_getDeliveryList( $operator_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no);
		return $this->recv_getDeliveryList();
	}
	
	public function send_getDeliveryList( $operator_id, $po_no, $delivery_no, $warehouse, $out_flag, $st_out_time, $et_out_time, $st_estimate_arrive_time, $et_estimate_arrive_time, $st_arrive_time, $et_arrive_time, $page, $limit, $store_sn, $storage_no){
		
		$this->initInvocation("getDeliveryList");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_getDeliveryList_args();
		
		$args->operator_id = $operator_id;
		
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
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_getDeliveryList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMultiPoPickDetail(\vipapis\delivery\Get3PLMultiPoPickDetailRequest $request){
		
		$this->send_getMultiPoPickDetail( $request);
		return $this->recv_getMultiPoPickDetail();
	}
	
	public function send_getMultiPoPickDetail(\vipapis\delivery\Get3PLMultiPoPickDetailRequest $request){
		
		$this->initInvocation("getMultiPoPickDetail");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_getMultiPoPickDetail_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getMultiPoPickDetail(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_getMultiPoPickDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickDetail( $po_no, $operator_id, $pick_no, $page, $limit){
		
		$this->send_getPickDetail( $po_no, $operator_id, $pick_no, $page, $limit);
		return $this->recv_getPickDetail();
	}
	
	public function send_getPickDetail( $po_no, $operator_id, $pick_no, $page, $limit){
		
		$this->initInvocation("getPickDetail");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_getPickDetail_args();
		
		$args->po_no = $po_no;
		
		$args->operator_id = $operator_id;
		
		$args->pick_no = $pick_no;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getPickDetail(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_getPickDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPickList( $operator_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $is_export, $page, $limit, $store_sn){
		
		$this->send_getPickList( $operator_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $is_export, $page, $limit, $store_sn);
		return $this->recv_getPickList();
	}
	
	public function send_getPickList( $operator_id, $po_no, $pick_no, $warehouse, $co_mode, $order_cate, $st_create_time, $et_create_time, $st_sell_time_from, $et_sell_time_from, $is_export, $page, $limit, $store_sn){
		
		$this->initInvocation("getPickList");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_getPickList_args();
		
		$args->operator_id = $operator_id;
		
		$args->po_no = $po_no;
		
		$args->pick_no = $pick_no;
		
		$args->warehouse = $warehouse;
		
		$args->co_mode = $co_mode;
		
		$args->order_cate = $order_cate;
		
		$args->st_create_time = $st_create_time;
		
		$args->et_create_time = $et_create_time;
		
		$args->st_sell_time_from = $st_sell_time_from;
		
		$args->et_sell_time_from = $et_sell_time_from;
		
		$args->is_export = $is_export;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->store_sn = $store_sn;
		
		$this->send_base($args);
	}
	
	public function recv_getPickList(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_getPickList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoList( $po_no, $co_mode, $operator_id, $st_sell_st_time, $et_sell_st_time, $st_po_start_time, $et_po_start_time, $page, $limit){
		
		$this->send_getPoList( $po_no, $co_mode, $operator_id, $st_sell_st_time, $et_sell_st_time, $st_po_start_time, $et_po_start_time, $page, $limit);
		return $this->recv_getPoList();
	}
	
	public function send_getPoList( $po_no, $co_mode, $operator_id, $st_sell_st_time, $et_sell_st_time, $st_po_start_time, $et_po_start_time, $page, $limit){
		
		$this->initInvocation("getPoList");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_getPoList_args();
		
		$args->po_no = $po_no;
		
		$args->co_mode = $co_mode;
		
		$args->operator_id = $operator_id;
		
		$args->st_sell_st_time = $st_sell_st_time;
		
		$args->et_sell_st_time = $et_sell_st_time;
		
		$args->st_po_start_time = $st_po_start_time;
		
		$args->et_po_start_time = $et_po_start_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getPoList(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_getPoList_result();
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
		$args = new \vipapis\delivery\Jit3PLDeliveryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function importDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list){
		
		$this->send_importDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list);
		return $this->recv_importDeliveryDetail();
	}
	
	public function send_importDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list){
		
		$this->initInvocation("importDeliveryDetail");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_importDeliveryDetail_args();
		
		$args->operator_id = $operator_id;
		
		$args->po_no = $po_no;
		
		$args->storage_no = $storage_no;
		
		$args->store_sn = $store_sn;
		
		$args->delivery_list = $delivery_list;
		
		$this->send_base($args);
	}
	
	public function recv_importDeliveryDetail(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_importDeliveryDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function importMultiPoDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list){
		
		$this->send_importMultiPoDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list);
		return $this->recv_importMultiPoDeliveryDetail();
	}
	
	public function send_importMultiPoDeliveryDetail( $operator_id, $po_no, $storage_no, $store_sn, $delivery_list){
		
		$this->initInvocation("importMultiPoDeliveryDetail");
		$args = new \vipapis\delivery\Jit3PLDeliveryService_importMultiPoDeliveryDetail_args();
		
		$args->operator_id = $operator_id;
		
		$args->po_no = $po_no;
		
		$args->storage_no = $storage_no;
		
		$args->store_sn = $store_sn;
		
		$args->delivery_list = $delivery_list;
		
		$this->send_base($args);
	}
	
	public function recv_importMultiPoDeliveryDetail(){
		
		$result = new \vipapis\delivery\Jit3PLDeliveryService_importMultiPoDeliveryDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class Jit3PLDeliveryService_confirmDelivery_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $storage_no = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
			),
			2 => array(
			'var' => 'storage_no'
			),
			3 => array(
			'var' => 'store_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
			}
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['store_sn'])){
				
				$this->store_sn = $vals['store_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->operator_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storage_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->store_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storage_no');
		$xfer += $output->writeString($this->storage_no);
		
		$xfer += $output->writeFieldEnd();
		
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




class Jit3PLDeliveryService_createDelivery_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $po_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $delivery_time = null;
	public $arrival_time = null;
	public $carrier_name = null;
	public $delivery_method = null;
	public $store_sn = null;
	public $carrier_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			'var' => 'carrier_name'
			),
			8 => array(
			'var' => 'delivery_method'
			),
			9 => array(
			'var' => 'store_sn'
			),
			10 => array(
			'var' => 'carrier_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
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
			
			$input->readI32($this->operator_id); 
			
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
			
			$input->readString($this->carrier_name);
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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
		
		$xfer += $output->writeFieldBegin('carrier_name');
		$xfer += $output->writeString($this->carrier_name);
		
		$xfer += $output->writeFieldEnd();
		
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




class Jit3PLDeliveryService_createMultiPoDelivery_args {
	
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
			
			
			$this->request = new \vipapis\delivery\Create3PLMultiPoDeliveryRequest();
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




class Jit3PLDeliveryService_createPick_args {
	
	static $_TSPEC;
	public $po_no = null;
	public $operator_id = null;
	public $warehouse = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'operator_id'
			),
			3 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'store_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
		$xfer += $output->writeFieldEnd();
		
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




class Jit3PLDeliveryService_deleteDeliveryDetail_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $storage_no = null;
	public $po_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_editDelivery_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $storage_no = null;
	public $delivery_no = null;
	public $warehouse = null;
	public $delivery_time = null;
	public $arrival_time = null;
	public $carrier_name = null;
	public $tel = null;
	public $driver = null;
	public $driver_tel = null;
	public $delivery_method = null;
	public $store_sn = null;
	public $carrier_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			'var' => 'carrier_name'
			),
			8 => array(
			'var' => 'tel'
			),
			9 => array(
			'var' => 'driver'
			),
			10 => array(
			'var' => 'driver_tel'
			),
			11 => array(
			'var' => 'delivery_method'
			),
			12 => array(
			'var' => 'store_sn'
			),
			13 => array(
			'var' => 'carrier_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class Jit3PLDeliveryService_editMultiPoDelivery_args {
	
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
			
			
			$this->request = new \vipapis\delivery\Edit3PLMultiPoDeliveryRequest();
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




class Jit3PLDeliveryService_getDeliveryGoods_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $storage_no = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_getDeliveryList_args {
	
	static $_TSPEC;
	public $operator_id = null;
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
			'var' => 'operator_id'
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
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_getMultiPoPickDetail_args {
	
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
			
			
			$this->request = new \vipapis\delivery\Get3PLMultiPoPickDetailRequest();
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




class Jit3PLDeliveryService_getPickDetail_args {
	
	static $_TSPEC;
	public $po_no = null;
	public $operator_id = null;
	public $pick_no = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'operator_id'
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
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->operator_id); 
			
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
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class Jit3PLDeliveryService_getPickList_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $po_no = null;
	public $pick_no = null;
	public $warehouse = null;
	public $co_mode = null;
	public $order_cate = null;
	public $st_create_time = null;
	public $et_create_time = null;
	public $st_sell_time_from = null;
	public $et_sell_time_from = null;
	public $is_export = null;
	public $page = null;
	public $limit = null;
	public $store_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_getPoList_args {
	
	static $_TSPEC;
	public $po_no = null;
	public $co_mode = null;
	public $operator_id = null;
	public $st_sell_st_time = null;
	public $et_sell_st_time = null;
	public $st_po_start_time = null;
	public $et_po_start_time = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_no'
			),
			2 => array(
			'var' => 'co_mode'
			),
			3 => array(
			'var' => 'operator_id'
			),
			4 => array(
			'var' => 'st_sell_st_time'
			),
			5 => array(
			'var' => 'et_sell_st_time'
			),
			6 => array(
			'var' => 'st_po_start_time'
			),
			7 => array(
			'var' => 'et_po_start_time'
			),
			8 => array(
			'var' => 'page'
			),
			9 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
			}
			
			
			if (isset($vals['st_sell_st_time'])){
				
				$this->st_sell_st_time = $vals['st_sell_st_time'];
			}
			
			
			if (isset($vals['et_sell_st_time'])){
				
				$this->et_sell_st_time = $vals['et_sell_st_time'];
			}
			
			
			if (isset($vals['st_po_start_time'])){
				
				$this->st_po_start_time = $vals['st_po_start_time'];
			}
			
			
			if (isset($vals['et_po_start_time'])){
				
				$this->et_po_start_time = $vals['et_po_start_time'];
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
			
			$input->readString($this->po_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->co_mode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->operator_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_sell_st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_sell_st_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_po_start_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->et_po_start_time);
			
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
		
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_healthCheck_args {
	
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




class Jit3PLDeliveryService_importDeliveryDetail_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $po_no = null;
	public $storage_no = null;
	public $store_sn = null;
	public $delivery_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_importMultiPoDeliveryDetail_args {
	
	static $_TSPEC;
	public $operator_id = null;
	public $po_no = null;
	public $storage_no = null;
	public $store_sn = null;
	public $delivery_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operator_id'
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
			
			
			if (isset($vals['operator_id'])){
				
				$this->operator_id = $vals['operator_id'];
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
			
			$input->readI32($this->operator_id); 
			
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
		
		$xfer += $output->writeFieldBegin('operator_id');
		$xfer += $output->writeI32($this->operator_id);
		
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




class Jit3PLDeliveryService_confirmDelivery_result {
	
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




class Jit3PLDeliveryService_createDelivery_result {
	
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




class Jit3PLDeliveryService_createMultiPoDelivery_result {
	
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




class Jit3PLDeliveryService_createPick_result {
	
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




class Jit3PLDeliveryService_deleteDeliveryDetail_result {
	
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




class Jit3PLDeliveryService_editDelivery_result {
	
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




class Jit3PLDeliveryService_editMultiPoDelivery_result {
	
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




class Jit3PLDeliveryService_getDeliveryGoods_result {
	
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




class Jit3PLDeliveryService_getDeliveryList_result {
	
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




class Jit3PLDeliveryService_getMultiPoPickDetail_result {
	
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




class Jit3PLDeliveryService_getPickDetail_result {
	
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




class Jit3PLDeliveryService_getPickList_result {
	
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




class Jit3PLDeliveryService_getPoList_result {
	
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
			
			
			$this->success = new \vipapis\delivery\Get3PLPoListResponse();
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




class Jit3PLDeliveryService_healthCheck_result {
	
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




class Jit3PLDeliveryService_importDeliveryDetail_result {
	
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




class Jit3PLDeliveryService_importMultiPoDeliveryDetail_result {
	
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