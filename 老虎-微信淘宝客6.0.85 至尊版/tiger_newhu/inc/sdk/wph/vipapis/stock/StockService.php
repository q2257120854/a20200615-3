<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;
interface StockServiceIf{
	
	
	public function addWarehouseInfo( $vendor_id, $add_warehouse_list);
	
	public function confirmFrozenInventory( $vendor_id, $frozen_trans_id, $inventory_type, $confirm_frozen_inventory_list);
	
	public function confirmUnfrozenInventory( $vendor_id, $frozen_trans_ids);
	
	public function delWarehouseInfo( $vendor_id, $vendor_warehouse_id_list);
	
	public function getFreezeStockTransId( $vendor_id, $frozeType);
	
	public function getFreezingStockDetails( $vendor_id, $frozen_trans_id, $page, $limit);
	
	public function getOxoShopOrderForJit( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit);
	
	public function getOxoShopOrderForPop( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit);
	
	public function getPoNoFrozenTransIdRelationship( $vendor_id, $frozen_trans_id, $po_no);
	
	public function getVendorScheduleFreezeStock( $vendor_id,\vipapis\stock\GetVendorScheduleFreezeStock $get_vendor_schedule_freeze_stock);
	
	public function getWarehouseInfo( $vendor_id, $vendor_warehouse_id, $vip_warehouse_code);
	
	public function healthCheck();
	
	public function updateVendorWarehouseAndVIPWarehouseMap( $vendor_id, $update_warehousemap_list);
	
	public function updateWarehouseInfo( $vendor_id, $update_warehouse_list);
	
	public function updateWarehouseInventory( $vendor_id, $update_warehouse_inventory_list);
	
}

class _StockServiceClient extends \Osp\Base\OspStub implements \vipapis\stock\StockServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.stock.StockService", "1.0.0");
	}
	
	
	public function addWarehouseInfo( $vendor_id, $add_warehouse_list){
		
		$this->send_addWarehouseInfo( $vendor_id, $add_warehouse_list);
		return $this->recv_addWarehouseInfo();
	}
	
	public function send_addWarehouseInfo( $vendor_id, $add_warehouse_list){
		
		$this->initInvocation("addWarehouseInfo");
		$args = new \vipapis\stock\StockService_addWarehouseInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->add_warehouse_list = $add_warehouse_list;
		
		$this->send_base($args);
	}
	
	public function recv_addWarehouseInfo(){
		
		$result = new \vipapis\stock\StockService_addWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmFrozenInventory( $vendor_id, $frozen_trans_id, $inventory_type, $confirm_frozen_inventory_list){
		
		$this->send_confirmFrozenInventory( $vendor_id, $frozen_trans_id, $inventory_type, $confirm_frozen_inventory_list);
		return $this->recv_confirmFrozenInventory();
	}
	
	public function send_confirmFrozenInventory( $vendor_id, $frozen_trans_id, $inventory_type, $confirm_frozen_inventory_list){
		
		$this->initInvocation("confirmFrozenInventory");
		$args = new \vipapis\stock\StockService_confirmFrozenInventory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->frozen_trans_id = $frozen_trans_id;
		
		$args->inventory_type = $inventory_type;
		
		$args->confirm_frozen_inventory_list = $confirm_frozen_inventory_list;
		
		$this->send_base($args);
	}
	
	public function recv_confirmFrozenInventory(){
		
		$result = new \vipapis\stock\StockService_confirmFrozenInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function confirmUnfrozenInventory( $vendor_id, $frozen_trans_ids){
		
		$this->send_confirmUnfrozenInventory( $vendor_id, $frozen_trans_ids);
		return $this->recv_confirmUnfrozenInventory();
	}
	
	public function send_confirmUnfrozenInventory( $vendor_id, $frozen_trans_ids){
		
		$this->initInvocation("confirmUnfrozenInventory");
		$args = new \vipapis\stock\StockService_confirmUnfrozenInventory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->frozen_trans_ids = $frozen_trans_ids;
		
		$this->send_base($args);
	}
	
	public function recv_confirmUnfrozenInventory(){
		
		$result = new \vipapis\stock\StockService_confirmUnfrozenInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function delWarehouseInfo( $vendor_id, $vendor_warehouse_id_list){
		
		$this->send_delWarehouseInfo( $vendor_id, $vendor_warehouse_id_list);
		return $this->recv_delWarehouseInfo();
	}
	
	public function send_delWarehouseInfo( $vendor_id, $vendor_warehouse_id_list){
		
		$this->initInvocation("delWarehouseInfo");
		$args = new \vipapis\stock\StockService_delWarehouseInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_warehouse_id_list = $vendor_warehouse_id_list;
		
		$this->send_base($args);
	}
	
	public function recv_delWarehouseInfo(){
		
		$result = new \vipapis\stock\StockService_delWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getFreezeStockTransId( $vendor_id, $frozeType){
		
		$this->send_getFreezeStockTransId( $vendor_id, $frozeType);
		return $this->recv_getFreezeStockTransId();
	}
	
	public function send_getFreezeStockTransId( $vendor_id, $frozeType){
		
		$this->initInvocation("getFreezeStockTransId");
		$args = new \vipapis\stock\StockService_getFreezeStockTransId_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->frozeType = $frozeType;
		
		$this->send_base($args);
	}
	
	public function recv_getFreezeStockTransId(){
		
		$result = new \vipapis\stock\StockService_getFreezeStockTransId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getFreezingStockDetails( $vendor_id, $frozen_trans_id, $page, $limit){
		
		$this->send_getFreezingStockDetails( $vendor_id, $frozen_trans_id, $page, $limit);
		return $this->recv_getFreezingStockDetails();
	}
	
	public function send_getFreezingStockDetails( $vendor_id, $frozen_trans_id, $page, $limit){
		
		$this->initInvocation("getFreezingStockDetails");
		$args = new \vipapis\stock\StockService_getFreezingStockDetails_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->frozen_trans_id = $frozen_trans_id;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getFreezingStockDetails(){
		
		$result = new \vipapis\stock\StockService_getFreezingStockDetails_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOxoShopOrderForJit( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit){
		
		$this->send_getOxoShopOrderForJit( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit);
		return $this->recv_getOxoShopOrderForJit();
	}
	
	public function send_getOxoShopOrderForJit( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit){
		
		$this->initInvocation("getOxoShopOrderForJit");
		$args = new \vipapis\stock\StockService_getOxoShopOrderForJit_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->warehouse = $warehouse;
		
		$args->vendor_warehouse_id = $vendor_warehouse_id;
		
		$args->start_date = $start_date;
		
		$args->end_date = $end_date;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getOxoShopOrderForJit(){
		
		$result = new \vipapis\stock\StockService_getOxoShopOrderForJit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOxoShopOrderForPop( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit){
		
		$this->send_getOxoShopOrderForPop( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit);
		return $this->recv_getOxoShopOrderForPop();
	}
	
	public function send_getOxoShopOrderForPop( $vendor_id, $warehouse, $vendor_warehouse_id, $start_date, $end_date, $page, $limit){
		
		$this->initInvocation("getOxoShopOrderForPop");
		$args = new \vipapis\stock\StockService_getOxoShopOrderForPop_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->warehouse = $warehouse;
		
		$args->vendor_warehouse_id = $vendor_warehouse_id;
		
		$args->start_date = $start_date;
		
		$args->end_date = $end_date;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getOxoShopOrderForPop(){
		
		$result = new \vipapis\stock\StockService_getOxoShopOrderForPop_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoNoFrozenTransIdRelationship( $vendor_id, $frozen_trans_id, $po_no){
		
		$this->send_getPoNoFrozenTransIdRelationship( $vendor_id, $frozen_trans_id, $po_no);
		return $this->recv_getPoNoFrozenTransIdRelationship();
	}
	
	public function send_getPoNoFrozenTransIdRelationship( $vendor_id, $frozen_trans_id, $po_no){
		
		$this->initInvocation("getPoNoFrozenTransIdRelationship");
		$args = new \vipapis\stock\StockService_getPoNoFrozenTransIdRelationship_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->frozen_trans_id = $frozen_trans_id;
		
		$args->po_no = $po_no;
		
		$this->send_base($args);
	}
	
	public function recv_getPoNoFrozenTransIdRelationship(){
		
		$result = new \vipapis\stock\StockService_getPoNoFrozenTransIdRelationship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getVendorScheduleFreezeStock( $vendor_id,\vipapis\stock\GetVendorScheduleFreezeStock $get_vendor_schedule_freeze_stock){
		
		$this->send_getVendorScheduleFreezeStock( $vendor_id, $get_vendor_schedule_freeze_stock);
		return $this->recv_getVendorScheduleFreezeStock();
	}
	
	public function send_getVendorScheduleFreezeStock( $vendor_id,\vipapis\stock\GetVendorScheduleFreezeStock $get_vendor_schedule_freeze_stock){
		
		$this->initInvocation("getVendorScheduleFreezeStock");
		$args = new \vipapis\stock\StockService_getVendorScheduleFreezeStock_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->get_vendor_schedule_freeze_stock = $get_vendor_schedule_freeze_stock;
		
		$this->send_base($args);
	}
	
	public function recv_getVendorScheduleFreezeStock(){
		
		$result = new \vipapis\stock\StockService_getVendorScheduleFreezeStock_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWarehouseInfo( $vendor_id, $vendor_warehouse_id, $vip_warehouse_code){
		
		$this->send_getWarehouseInfo( $vendor_id, $vendor_warehouse_id, $vip_warehouse_code);
		return $this->recv_getWarehouseInfo();
	}
	
	public function send_getWarehouseInfo( $vendor_id, $vendor_warehouse_id, $vip_warehouse_code){
		
		$this->initInvocation("getWarehouseInfo");
		$args = new \vipapis\stock\StockService_getWarehouseInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_warehouse_id = $vendor_warehouse_id;
		
		$args->vip_warehouse_code = $vip_warehouse_code;
		
		$this->send_base($args);
	}
	
	public function recv_getWarehouseInfo(){
		
		$result = new \vipapis\stock\StockService_getWarehouseInfo_result();
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
		$args = new \vipapis\stock\StockService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\stock\StockService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateVendorWarehouseAndVIPWarehouseMap( $vendor_id, $update_warehousemap_list){
		
		$this->send_updateVendorWarehouseAndVIPWarehouseMap( $vendor_id, $update_warehousemap_list);
		return $this->recv_updateVendorWarehouseAndVIPWarehouseMap();
	}
	
	public function send_updateVendorWarehouseAndVIPWarehouseMap( $vendor_id, $update_warehousemap_list){
		
		$this->initInvocation("updateVendorWarehouseAndVIPWarehouseMap");
		$args = new \vipapis\stock\StockService_updateVendorWarehouseAndVIPWarehouseMap_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->update_warehousemap_list = $update_warehousemap_list;
		
		$this->send_base($args);
	}
	
	public function recv_updateVendorWarehouseAndVIPWarehouseMap(){
		
		$result = new \vipapis\stock\StockService_updateVendorWarehouseAndVIPWarehouseMap_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateWarehouseInfo( $vendor_id, $update_warehouse_list){
		
		$this->send_updateWarehouseInfo( $vendor_id, $update_warehouse_list);
		return $this->recv_updateWarehouseInfo();
	}
	
	public function send_updateWarehouseInfo( $vendor_id, $update_warehouse_list){
		
		$this->initInvocation("updateWarehouseInfo");
		$args = new \vipapis\stock\StockService_updateWarehouseInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->update_warehouse_list = $update_warehouse_list;
		
		$this->send_base($args);
	}
	
	public function recv_updateWarehouseInfo(){
		
		$result = new \vipapis\stock\StockService_updateWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateWarehouseInventory( $vendor_id, $update_warehouse_inventory_list){
		
		$this->send_updateWarehouseInventory( $vendor_id, $update_warehouse_inventory_list);
		return $this->recv_updateWarehouseInventory();
	}
	
	public function send_updateWarehouseInventory( $vendor_id, $update_warehouse_inventory_list){
		
		$this->initInvocation("updateWarehouseInventory");
		$args = new \vipapis\stock\StockService_updateWarehouseInventory_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->update_warehouse_inventory_list = $update_warehouse_inventory_list;
		
		$this->send_base($args);
	}
	
	public function recv_updateWarehouseInventory(){
		
		$result = new \vipapis\stock\StockService_updateWarehouseInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class StockService_addWarehouseInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $add_warehouse_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'add_warehouse_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['add_warehouse_list'])){
				
				$this->add_warehouse_list = $vals['add_warehouse_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->add_warehouse_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\stock\AddWarehouseInfo();
					$elem0->read($input);
					
					$this->add_warehouse_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('add_warehouse_list');
		
		if (!is_array($this->add_warehouse_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->add_warehouse_list as $iter0){
			
			
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




class StockService_confirmFrozenInventory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $frozen_trans_id = null;
	public $inventory_type = null;
	public $confirm_frozen_inventory_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'frozen_trans_id'
			),
			3 => array(
			'var' => 'inventory_type'
			),
			4 => array(
			'var' => 'confirm_frozen_inventory_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['frozen_trans_id'])){
				
				$this->frozen_trans_id = $vals['frozen_trans_id'];
			}
			
			
			if (isset($vals['inventory_type'])){
				
				$this->inventory_type = $vals['inventory_type'];
			}
			
			
			if (isset($vals['confirm_frozen_inventory_list'])){
				
				$this->confirm_frozen_inventory_list = $vals['confirm_frozen_inventory_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->frozen_trans_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->inventory_type); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->confirm_frozen_inventory_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\stock\ConfirmFrozenInventory();
					$elem1->read($input);
					
					$this->confirm_frozen_inventory_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('frozen_trans_id');
		$xfer += $output->writeI32($this->frozen_trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inventory_type');
		$xfer += $output->writeI32($this->inventory_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirm_frozen_inventory_list');
		
		if (!is_array($this->confirm_frozen_inventory_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->confirm_frozen_inventory_list as $iter0){
			
			
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




class StockService_confirmUnfrozenInventory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $frozen_trans_ids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'frozen_trans_ids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['frozen_trans_ids'])){
				
				$this->frozen_trans_ids = $vals['frozen_trans_ids'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->frozen_trans_ids = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->frozen_trans_ids[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('frozen_trans_ids');
		
		if (!is_array($this->frozen_trans_ids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->frozen_trans_ids as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class StockService_delWarehouseInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_warehouse_id_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_warehouse_id_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_warehouse_id_list'])){
				
				$this->vendor_warehouse_id_list = $vals['vendor_warehouse_id_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_warehouse_id_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\stock\InputWarehouseInfo();
					$elem1->read($input);
					
					$this->vendor_warehouse_id_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_warehouse_id_list');
		
		if (!is_array($this->vendor_warehouse_id_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_warehouse_id_list as $iter0){
			
			
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




class StockService_getFreezeStockTransId_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $frozeType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'frozeType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['frozeType'])){
				
				$this->frozeType = $vals['frozeType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->frozeType); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('frozeType');
		$xfer += $output->writeI32($this->frozeType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class StockService_getFreezingStockDetails_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $frozen_trans_id = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'frozen_trans_id'
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
			
			
			if (isset($vals['frozen_trans_id'])){
				
				$this->frozen_trans_id = $vals['frozen_trans_id'];
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
			
			$input->readI32($this->frozen_trans_id); 
			
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
		
		$xfer += $output->writeFieldBegin('frozen_trans_id');
		$xfer += $output->writeI32($this->frozen_trans_id);
		
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




class StockService_getOxoShopOrderForJit_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $warehouse = null;
	public $vendor_warehouse_id = null;
	public $start_date = null;
	public $end_date = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'vendor_warehouse_id'
			),
			4 => array(
			'var' => 'start_date'
			),
			5 => array(
			'var' => 'end_date'
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
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['vendor_warehouse_id'])){
				
				$this->vendor_warehouse_id = $vals['vendor_warehouse_id'];
			}
			
			
			if (isset($vals['start_date'])){
				
				$this->start_date = $vals['start_date'];
			}
			
			
			if (isset($vals['end_date'])){
				
				$this->end_date = $vals['end_date'];
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
			
			$input->readString($this->vendor_warehouse_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->start_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->end_date);
			
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
		
		$xfer += $output->writeFieldBegin('warehouse');
		
		$em = new \vipapis\common\Warehouse; 
		$output->writeString($em::$__names[$this->warehouse]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_warehouse_id');
		$xfer += $output->writeString($this->vendor_warehouse_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->start_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_date');
			$xfer += $output->writeString($this->start_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_date');
			$xfer += $output->writeString($this->end_date);
			
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




class StockService_getOxoShopOrderForPop_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $warehouse = null;
	public $vendor_warehouse_id = null;
	public $start_date = null;
	public $end_date = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'vendor_warehouse_id'
			),
			4 => array(
			'var' => 'start_date'
			),
			5 => array(
			'var' => 'end_date'
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
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['vendor_warehouse_id'])){
				
				$this->vendor_warehouse_id = $vals['vendor_warehouse_id'];
			}
			
			
			if (isset($vals['start_date'])){
				
				$this->start_date = $vals['start_date'];
			}
			
			
			if (isset($vals['end_date'])){
				
				$this->end_date = $vals['end_date'];
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
			
			$input->readString($this->vendor_warehouse_id);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->start_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->end_date);
			
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
		
		$xfer += $output->writeFieldBegin('warehouse');
		
		$em = new \vipapis\common\Warehouse; 
		$output->writeString($em::$__names[$this->warehouse]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_warehouse_id');
		$xfer += $output->writeString($this->vendor_warehouse_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->start_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_date');
			$xfer += $output->writeString($this->start_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_date');
			$xfer += $output->writeString($this->end_date);
			
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




class StockService_getPoNoFrozenTransIdRelationship_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $frozen_trans_id = null;
	public $po_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'frozen_trans_id'
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
			
			
			if (isset($vals['frozen_trans_id'])){
				
				$this->frozen_trans_id = $vals['frozen_trans_id'];
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
			
			$input->readI32($this->frozen_trans_id); 
			
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
		
		if($this->frozen_trans_id !== null) {
			
			$xfer += $output->writeFieldBegin('frozen_trans_id');
			$xfer += $output->writeI32($this->frozen_trans_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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




class StockService_getVendorScheduleFreezeStock_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $get_vendor_schedule_freeze_stock = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'get_vendor_schedule_freeze_stock'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['get_vendor_schedule_freeze_stock'])){
				
				$this->get_vendor_schedule_freeze_stock = $vals['get_vendor_schedule_freeze_stock'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->get_vendor_schedule_freeze_stock = new \vipapis\stock\GetVendorScheduleFreezeStock();
			$this->get_vendor_schedule_freeze_stock->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->get_vendor_schedule_freeze_stock !== null) {
			
			$xfer += $output->writeFieldBegin('get_vendor_schedule_freeze_stock');
			
			if (!is_object($this->get_vendor_schedule_freeze_stock)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->get_vendor_schedule_freeze_stock->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class StockService_getWarehouseInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_warehouse_id = null;
	public $vip_warehouse_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_warehouse_id'
			),
			3 => array(
			'var' => 'vip_warehouse_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_warehouse_id'])){
				
				$this->vendor_warehouse_id = $vals['vendor_warehouse_id'];
			}
			
			
			if (isset($vals['vip_warehouse_code'])){
				
				$this->vip_warehouse_code = $vals['vip_warehouse_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->vendor_warehouse_id);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->vip_warehouse_code = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vendor_warehouse_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_warehouse_id');
			$xfer += $output->writeString($this->vendor_warehouse_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('vip_warehouse_code');
			
			$em = new \vipapis\common\Warehouse; 
			$output->writeString($em::$__names[$this->vip_warehouse_code]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class StockService_healthCheck_args {
	
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




class StockService_updateVendorWarehouseAndVIPWarehouseMap_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $update_warehousemap_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'update_warehousemap_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['update_warehousemap_list'])){
				
				$this->update_warehousemap_list = $vals['update_warehousemap_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->update_warehousemap_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\stock\updateVendorWarehouseAndVIPWarehouseMap();
					$elem0->read($input);
					
					$this->update_warehousemap_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('update_warehousemap_list');
		
		if (!is_array($this->update_warehousemap_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->update_warehousemap_list as $iter0){
			
			
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




class StockService_updateWarehouseInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $update_warehouse_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'update_warehouse_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['update_warehouse_list'])){
				
				$this->update_warehouse_list = $vals['update_warehouse_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->update_warehouse_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\stock\UpdateWarehouseInfo();
					$elem1->read($input);
					
					$this->update_warehouse_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('update_warehouse_list');
		
		if (!is_array($this->update_warehouse_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->update_warehouse_list as $iter0){
			
			
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




class StockService_updateWarehouseInventory_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $update_warehouse_inventory_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'update_warehouse_inventory_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['update_warehouse_inventory_list'])){
				
				$this->update_warehouse_inventory_list = $vals['update_warehouse_inventory_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->update_warehouse_inventory_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\stock\UpdateWarehouseInventory();
					$elem1->read($input);
					
					$this->update_warehouse_inventory_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('update_warehouse_inventory_list');
		
		if (!is_array($this->update_warehouse_inventory_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->update_warehouse_inventory_list as $iter0){
			
			
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




class StockService_addWarehouseInfo_result {
	
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
					
					$elem1 = new \vipapis\stock\AddWarehouseInfoResult();
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




class StockService_confirmFrozenInventory_result {
	
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
			
			
			$this->success = new \vipapis\stock\ConfirmFrozenInventoryResponse();
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




class StockService_confirmUnfrozenInventory_result {
	
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




class StockService_delWarehouseInfo_result {
	
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
					
					$elem0 = new \vipapis\stock\DelResult();
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




class StockService_getFreezeStockTransId_result {
	
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
					
					$elem1 = new \vipapis\stock\FreezeTransIdAndInventoryType();
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




class StockService_getFreezingStockDetails_result {
	
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
			
			
			$this->success = new \vipapis\stock\GetFrozenStockDetailsResponse();
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




class StockService_getOxoShopOrderForJit_result {
	
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
			
			
			$this->success = new \vipapis\stock\GetOxoShopOrderForJitResponse();
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




class StockService_getOxoShopOrderForPop_result {
	
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
			
			
			$this->success = new \vipapis\stock\GetOxoShopOrderForPopResponse();
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




class StockService_getPoNoFrozenTransIdRelationship_result {
	
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
			
			
			$this->success = new \vipapis\stock\PoNoFrozenTransIdRelationShip();
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




class StockService_getVendorScheduleFreezeStock_result {
	
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
					
					$elem0 = new \vipapis\stock\GetVendorScheduleFreezeStockResult();
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




class StockService_getWarehouseInfo_result {
	
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
			
			
			$this->success = new \vipapis\stock\GetWarehouseInfoResponse();
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




class StockService_healthCheck_result {
	
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




class StockService_updateVendorWarehouseAndVIPWarehouseMap_result {
	
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




class StockService_updateWarehouseInfo_result {
	
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
					
					$elem0 = new \vipapis\stock\UpdateWarehouseInfoResult();
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




class StockService_updateWarehouseInventory_result {
	
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
			
			
			$this->success = new \vipapis\stock\UpdateWarehouseInventoryResponse();
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