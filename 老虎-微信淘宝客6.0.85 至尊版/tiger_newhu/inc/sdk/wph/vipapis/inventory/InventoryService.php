<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;
interface InventoryServiceIf{
	
	
	public function getAdvisedSkuList( $vendor_id, $cooperation_no, $warehouse);
	
	public function getCooperationNoList(\vipapis\inventory\GetCooperationNoListRequest $getCooperationNoListRequest);
	
	public function getDeductOrderDetail(\vipapis\inventory\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest);
	
	public function getInventoryCancelledOrders(\vipapis\inventory\InventoryCancelledOrdersRequest $inventoryCancelledOrdersRequest);
	
	public function getInventoryDeductOrders(\vipapis\inventory\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest);
	
	public function getInventoryOccupiedOrders(\vipapis\inventory\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest);
	
	public function getMpSkuStock(\vipapis\inventory\GetMpSkuStockRequest $getSkuStockRequest);
	
	public function getSkuInfo(\vipapis\inventory\GetSkuInfoRequest $request);
	
	public function getSkuList(\vipapis\inventory\GetScheduleSkuListCriteria $criteria, $page, $limit);
	
	public function getSkuStock( $vendor_id, $cooperation_no, $warehouse, $barcode, $area_warehouse_id);
	
	public function healthCheck();
	
	public function updateInventory(\vipapis\inventory\UpdateSkuInventoryRequest $request);
	
	public function updateMpSkuStock(\vipapis\inventory\UpdateMpSkuStockRequest $updateSkuStockRequest);
	
}

class _InventoryServiceClient extends \Osp\Base\OspStub implements \vipapis\inventory\InventoryServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.inventory.InventoryService", "1.0.0");
	}
	
	
	public function getAdvisedSkuList( $vendor_id, $cooperation_no, $warehouse){
		
		$this->send_getAdvisedSkuList( $vendor_id, $cooperation_no, $warehouse);
		return $this->recv_getAdvisedSkuList();
	}
	
	public function send_getAdvisedSkuList( $vendor_id, $cooperation_no, $warehouse){
		
		$this->initInvocation("getAdvisedSkuList");
		$args = new \vipapis\inventory\InventoryService_getAdvisedSkuList_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->cooperation_no = $cooperation_no;
		
		$args->warehouse = $warehouse;
		
		$this->send_base($args);
	}
	
	public function recv_getAdvisedSkuList(){
		
		$result = new \vipapis\inventory\InventoryService_getAdvisedSkuList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCooperationNoList(\vipapis\inventory\GetCooperationNoListRequest $getCooperationNoListRequest){
		
		$this->send_getCooperationNoList( $getCooperationNoListRequest);
		return $this->recv_getCooperationNoList();
	}
	
	public function send_getCooperationNoList(\vipapis\inventory\GetCooperationNoListRequest $getCooperationNoListRequest){
		
		$this->initInvocation("getCooperationNoList");
		$args = new \vipapis\inventory\InventoryService_getCooperationNoList_args();
		
		$args->getCooperationNoListRequest = $getCooperationNoListRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getCooperationNoList(){
		
		$result = new \vipapis\inventory\InventoryService_getCooperationNoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getDeductOrderDetail(\vipapis\inventory\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->send_getDeductOrderDetail( $inventoryDeductOrdersRequest);
		return $this->recv_getDeductOrderDetail();
	}
	
	public function send_getDeductOrderDetail(\vipapis\inventory\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->initInvocation("getDeductOrderDetail");
		$args = new \vipapis\inventory\InventoryService_getDeductOrderDetail_args();
		
		$args->inventoryDeductOrdersRequest = $inventoryDeductOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getDeductOrderDetail(){
		
		$result = new \vipapis\inventory\InventoryService_getDeductOrderDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryCancelledOrders(\vipapis\inventory\InventoryCancelledOrdersRequest $inventoryCancelledOrdersRequest){
		
		$this->send_getInventoryCancelledOrders( $inventoryCancelledOrdersRequest);
		return $this->recv_getInventoryCancelledOrders();
	}
	
	public function send_getInventoryCancelledOrders(\vipapis\inventory\InventoryCancelledOrdersRequest $inventoryCancelledOrdersRequest){
		
		$this->initInvocation("getInventoryCancelledOrders");
		$args = new \vipapis\inventory\InventoryService_getInventoryCancelledOrders_args();
		
		$args->inventoryCancelledOrdersRequest = $inventoryCancelledOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryCancelledOrders(){
		
		$result = new \vipapis\inventory\InventoryService_getInventoryCancelledOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryDeductOrders(\vipapis\inventory\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->send_getInventoryDeductOrders( $inventoryDeductOrdersRequest);
		return $this->recv_getInventoryDeductOrders();
	}
	
	public function send_getInventoryDeductOrders(\vipapis\inventory\InventoryDeductOrdersRequest $inventoryDeductOrdersRequest){
		
		$this->initInvocation("getInventoryDeductOrders");
		$args = new \vipapis\inventory\InventoryService_getInventoryDeductOrders_args();
		
		$args->inventoryDeductOrdersRequest = $inventoryDeductOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryDeductOrders(){
		
		$result = new \vipapis\inventory\InventoryService_getInventoryDeductOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInventoryOccupiedOrders(\vipapis\inventory\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest){
		
		$this->send_getInventoryOccupiedOrders( $inventoryOccupiedOrdersRequest);
		return $this->recv_getInventoryOccupiedOrders();
	}
	
	public function send_getInventoryOccupiedOrders(\vipapis\inventory\InventoryOccupiedOrdersRequest $inventoryOccupiedOrdersRequest){
		
		$this->initInvocation("getInventoryOccupiedOrders");
		$args = new \vipapis\inventory\InventoryService_getInventoryOccupiedOrders_args();
		
		$args->inventoryOccupiedOrdersRequest = $inventoryOccupiedOrdersRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getInventoryOccupiedOrders(){
		
		$result = new \vipapis\inventory\InventoryService_getInventoryOccupiedOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMpSkuStock(\vipapis\inventory\GetMpSkuStockRequest $getSkuStockRequest){
		
		$this->send_getMpSkuStock( $getSkuStockRequest);
		return $this->recv_getMpSkuStock();
	}
	
	public function send_getMpSkuStock(\vipapis\inventory\GetMpSkuStockRequest $getSkuStockRequest){
		
		$this->initInvocation("getMpSkuStock");
		$args = new \vipapis\inventory\InventoryService_getMpSkuStock_args();
		
		$args->getSkuStockRequest = $getSkuStockRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getMpSkuStock(){
		
		$result = new \vipapis\inventory\InventoryService_getMpSkuStock_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSkuInfo(\vipapis\inventory\GetSkuInfoRequest $request){
		
		$this->send_getSkuInfo( $request);
		return $this->recv_getSkuInfo();
	}
	
	public function send_getSkuInfo(\vipapis\inventory\GetSkuInfoRequest $request){
		
		$this->initInvocation("getSkuInfo");
		$args = new \vipapis\inventory\InventoryService_getSkuInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_getSkuInfo(){
		
		$result = new \vipapis\inventory\InventoryService_getSkuInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSkuList(\vipapis\inventory\GetScheduleSkuListCriteria $criteria, $page, $limit){
		
		$this->send_getSkuList( $criteria, $page, $limit);
		return $this->recv_getSkuList();
	}
	
	public function send_getSkuList(\vipapis\inventory\GetScheduleSkuListCriteria $criteria, $page, $limit){
		
		$this->initInvocation("getSkuList");
		$args = new \vipapis\inventory\InventoryService_getSkuList_args();
		
		$args->criteria = $criteria;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getSkuList(){
		
		$result = new \vipapis\inventory\InventoryService_getSkuList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSkuStock( $vendor_id, $cooperation_no, $warehouse, $barcode, $area_warehouse_id){
		
		$this->send_getSkuStock( $vendor_id, $cooperation_no, $warehouse, $barcode, $area_warehouse_id);
		return $this->recv_getSkuStock();
	}
	
	public function send_getSkuStock( $vendor_id, $cooperation_no, $warehouse, $barcode, $area_warehouse_id){
		
		$this->initInvocation("getSkuStock");
		$args = new \vipapis\inventory\InventoryService_getSkuStock_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->cooperation_no = $cooperation_no;
		
		$args->warehouse = $warehouse;
		
		$args->barcode = $barcode;
		
		$args->area_warehouse_id = $area_warehouse_id;
		
		$this->send_base($args);
	}
	
	public function recv_getSkuStock(){
		
		$result = new \vipapis\inventory\InventoryService_getSkuStock_result();
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
		$args = new \vipapis\inventory\InventoryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\inventory\InventoryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInventory(\vipapis\inventory\UpdateSkuInventoryRequest $request){
		
		$this->send_updateInventory( $request);
		return $this->recv_updateInventory();
	}
	
	public function send_updateInventory(\vipapis\inventory\UpdateSkuInventoryRequest $request){
		
		$this->initInvocation("updateInventory");
		$args = new \vipapis\inventory\InventoryService_updateInventory_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateInventory(){
		
		$result = new \vipapis\inventory\InventoryService_updateInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateMpSkuStock(\vipapis\inventory\UpdateMpSkuStockRequest $updateSkuStockRequest){
		
		$this->send_updateMpSkuStock( $updateSkuStockRequest);
		return $this->recv_updateMpSkuStock();
	}
	
	public function send_updateMpSkuStock(\vipapis\inventory\UpdateMpSkuStockRequest $updateSkuStockRequest){
		
		$this->initInvocation("updateMpSkuStock");
		$args = new \vipapis\inventory\InventoryService_updateMpSkuStock_args();
		
		$args->updateSkuStockRequest = $updateSkuStockRequest;
		
		$this->send_base($args);
	}
	
	public function recv_updateMpSkuStock(){
		
		$result = new \vipapis\inventory\InventoryService_updateMpSkuStock_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class InventoryService_getAdvisedSkuList_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_no = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_no'
			),
			3 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->cooperation_no); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cooperation_no');
		$xfer += $output->writeI32($this->cooperation_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getCooperationNoList_args {
	
	static $_TSPEC;
	public $getCooperationNoListRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getCooperationNoListRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getCooperationNoListRequest'])){
				
				$this->getCooperationNoListRequest = $vals['getCooperationNoListRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getCooperationNoListRequest = new \vipapis\inventory\GetCooperationNoListRequest();
			$this->getCooperationNoListRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getCooperationNoListRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getCooperationNoListRequest');
			
			if (!is_object($this->getCooperationNoListRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getCooperationNoListRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getDeductOrderDetail_args {
	
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
			
			
			$this->inventoryDeductOrdersRequest = new \vipapis\inventory\InventoryDeductOrdersRequest();
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




class InventoryService_getInventoryCancelledOrders_args {
	
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
			
			
			$this->inventoryCancelledOrdersRequest = new \vipapis\inventory\InventoryCancelledOrdersRequest();
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




class InventoryService_getInventoryDeductOrders_args {
	
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
			
			
			$this->inventoryDeductOrdersRequest = new \vipapis\inventory\InventoryDeductOrdersRequest();
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




class InventoryService_getInventoryOccupiedOrders_args {
	
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
			
			
			$this->inventoryOccupiedOrdersRequest = new \vipapis\inventory\InventoryOccupiedOrdersRequest();
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




class InventoryService_getMpSkuStock_args {
	
	static $_TSPEC;
	public $getSkuStockRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getSkuStockRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getSkuStockRequest'])){
				
				$this->getSkuStockRequest = $vals['getSkuStockRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getSkuStockRequest = new \vipapis\inventory\GetMpSkuStockRequest();
			$this->getSkuStockRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getSkuStockRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getSkuStockRequest');
			
			if (!is_object($this->getSkuStockRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getSkuStockRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getSkuInfo_args {
	
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
			
			
			$this->request = new \vipapis\inventory\GetSkuInfoRequest();
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




class InventoryService_getSkuList_args {
	
	static $_TSPEC;
	public $criteria = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'criteria'
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
			
			
			if (isset($vals['criteria'])){
				
				$this->criteria = $vals['criteria'];
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
			
			
			$this->criteria = new \vipapis\inventory\GetScheduleSkuListCriteria();
			$this->criteria->read($input);
			
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
		
		$xfer += $output->writeFieldBegin('criteria');
		
		if (!is_object($this->criteria)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->criteria->write($output);
		
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




class InventoryService_getSkuStock_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_no = null;
	public $warehouse = null;
	public $barcode = null;
	public $area_warehouse_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_no'
			),
			3 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'area_warehouse_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['area_warehouse_id'])){
				
				$this->area_warehouse_id = $vals['area_warehouse_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->cooperation_no); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->barcode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->area_warehouse_id);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeI32($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->area_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_warehouse_id');
			$xfer += $output->writeString($this->area_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_healthCheck_args {
	
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




class InventoryService_updateInventory_args {
	
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
			
			
			$this->request = new \vipapis\inventory\UpdateSkuInventoryRequest();
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




class InventoryService_updateMpSkuStock_args {
	
	static $_TSPEC;
	public $updateSkuStockRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateSkuStockRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateSkuStockRequest'])){
				
				$this->updateSkuStockRequest = $vals['updateSkuStockRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->updateSkuStockRequest = new \vipapis\inventory\UpdateMpSkuStockRequest();
			$this->updateSkuStockRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->updateSkuStockRequest !== null) {
			
			$xfer += $output->writeFieldBegin('updateSkuStockRequest');
			
			if (!is_object($this->updateSkuStockRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->updateSkuStockRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getAdvisedSkuList_result {
	
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
			
			
			$this->success = new \vipapis\inventory\GetAdvisedSkuListResult();
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




class InventoryService_getCooperationNoList_result {
	
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
			
			
			$this->success = new \vipapis\inventory\GetCooperationNoListResponse();
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




class InventoryService_getDeductOrderDetail_result {
	
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
			
			
			$this->success = new \vipapis\inventory\InventoryDeductOrderDetailResponse();
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




class InventoryService_getInventoryCancelledOrders_result {
	
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
			
			
			$this->success = new \vipapis\inventory\CancelledOrdersResponse();
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




class InventoryService_getInventoryDeductOrders_result {
	
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
			
			
			$this->success = new \vipapis\inventory\InventoryDeductOrdersResponse();
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




class InventoryService_getInventoryOccupiedOrders_result {
	
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
			
			
			$this->success = new \vipapis\inventory\OccupiedOrderResponse();
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




class InventoryService_getMpSkuStock_result {
	
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
			
			
			$this->success = new \vipapis\inventory\GetMpSkuStockResponse();
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




class InventoryService_getSkuInfo_result {
	
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
					
					$elem0 = new \vipapis\inventory\SkuInfo();
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




class InventoryService_getSkuList_result {
	
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
			
			
			$this->success = new \vipapis\inventory\GetScheduleSkuListResult();
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




class InventoryService_getSkuStock_result {
	
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
					
					$elem0 = new \vipapis\inventory\GetSkuInventoryResult();
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




class InventoryService_healthCheck_result {
	
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




class InventoryService_updateInventory_result {
	
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




class InventoryService_updateMpSkuStock_result {
	
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
			
			
			$this->success = new \vipapis\inventory\UpdateMpSkuStockResponse();
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