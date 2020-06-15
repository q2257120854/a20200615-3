<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\inventory\api;
interface InventoryServiceIf{
	
	
	public function batchForceHoldChannelInventory( $reqList);
	
	public function batchForceHoldOneWarehouseInventory(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryForceHold $holdReq);
	
	public function batchFullUpdateChannelSkuInventory( $reqList);
	
	public function batchFullUpdateWarehouseSkuInventory( $reqList, $source);
	
	public function batchHoldChannelInventory( $reqList);
	
	public function batchHoldOneWarehouseInventory(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryHold $holdReq);
	
	public function batchIncrUpdateChannelSkuInventory( $reqList);
	
	public function batchIncrUpdateWarehouseSkuInventory( $reqList, $source);
	
	public function batchReleaseChannelHold( $reqList);
	
	public function fullUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity);
	
	public function fullUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source);
	
	public function getChannelSkuInventory( $channelId, $skuId);
	
	public function getSumChannelQuantity( $channelId);
	
	public function getSumWarehouseQuantity( $warehouseId);
	
	public function getWarehouseSkuInventory( $warehouseId, $skuId);
	
	public function healthCheck();
	
	public function holdChannelInventory(\com\vip\vop\vcloud\inventory\api\ChannelInventoryHold $holdReq);
	
	public function holdForceChannelInventory(\com\vip\vop\vcloud\inventory\api\ChannelInventoryHold $holdReq);
	
	public function incrUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity);
	
	public function incrUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source);
	
	public function listByWarehouseInventoryLogQueryCriteria(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryLogQueryCriteria $criteria,\com\vip\vop\vcloud\common\api\Pagination $pagination);
	
	public function listChannelSkuInventory( $skuList);
	
	public function listChannelSkuInventoryByChannelId( $channelId,\com\vip\vop\vcloud\common\api\Pagination $pagination);
	
	public function listWarehouseSkuInventory( $skuList);
	
	public function listWarehouseSkuInventoryByWarehouseId( $warehouseId,\com\vip\vop\vcloud\common\api\Pagination $pagination);
	
	public function releaseChannelHold(\com\vip\vop\vcloud\inventory\api\ChannelInventoryRelease $releaseReq);
	
	public function setWarehouseSkuDisabled( $warehouseId, $skuId, $disabled);
	
	public function setWarehouseSkuSafeQuantity( $warehouseId, $skuId, $safeQuantity);
	
	public function updateInventory(\com\vip\vop\vcloud\inventory\api\InventoryUpdateRequest $request);
	
}

class _InventoryServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\inventory\api\InventoryServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.inventory.api.InventoryService", "1.0.0");
	}
	
	
	public function batchForceHoldChannelInventory( $reqList){
		
		$this->send_batchForceHoldChannelInventory( $reqList);
		return $this->recv_batchForceHoldChannelInventory();
	}
	
	public function send_batchForceHoldChannelInventory( $reqList){
		
		$this->initInvocation("batchForceHoldChannelInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchForceHoldChannelInventory_args();
		
		$args->reqList = $reqList;
		
		$this->send_base($args);
	}
	
	public function recv_batchForceHoldChannelInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchForceHoldChannelInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchForceHoldOneWarehouseInventory(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryForceHold $holdReq){
		
		$this->send_batchForceHoldOneWarehouseInventory( $holdReq);
		return $this->recv_batchForceHoldOneWarehouseInventory();
	}
	
	public function send_batchForceHoldOneWarehouseInventory(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryForceHold $holdReq){
		
		$this->initInvocation("batchForceHoldOneWarehouseInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchForceHoldOneWarehouseInventory_args();
		
		$args->holdReq = $holdReq;
		
		$this->send_base($args);
	}
	
	public function recv_batchForceHoldOneWarehouseInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchForceHoldOneWarehouseInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchFullUpdateChannelSkuInventory( $reqList){
		
		$this->send_batchFullUpdateChannelSkuInventory( $reqList);
		return $this->recv_batchFullUpdateChannelSkuInventory();
	}
	
	public function send_batchFullUpdateChannelSkuInventory( $reqList){
		
		$this->initInvocation("batchFullUpdateChannelSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchFullUpdateChannelSkuInventory_args();
		
		$args->reqList = $reqList;
		
		$this->send_base($args);
	}
	
	public function recv_batchFullUpdateChannelSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchFullUpdateChannelSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchFullUpdateWarehouseSkuInventory( $reqList, $source){
		
		$this->send_batchFullUpdateWarehouseSkuInventory( $reqList, $source);
		return $this->recv_batchFullUpdateWarehouseSkuInventory();
	}
	
	public function send_batchFullUpdateWarehouseSkuInventory( $reqList, $source){
		
		$this->initInvocation("batchFullUpdateWarehouseSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchFullUpdateWarehouseSkuInventory_args();
		
		$args->reqList = $reqList;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_batchFullUpdateWarehouseSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchFullUpdateWarehouseSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchHoldChannelInventory( $reqList){
		
		$this->send_batchHoldChannelInventory( $reqList);
		return $this->recv_batchHoldChannelInventory();
	}
	
	public function send_batchHoldChannelInventory( $reqList){
		
		$this->initInvocation("batchHoldChannelInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchHoldChannelInventory_args();
		
		$args->reqList = $reqList;
		
		$this->send_base($args);
	}
	
	public function recv_batchHoldChannelInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchHoldChannelInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchHoldOneWarehouseInventory(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryHold $holdReq){
		
		$this->send_batchHoldOneWarehouseInventory( $holdReq);
		return $this->recv_batchHoldOneWarehouseInventory();
	}
	
	public function send_batchHoldOneWarehouseInventory(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryHold $holdReq){
		
		$this->initInvocation("batchHoldOneWarehouseInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchHoldOneWarehouseInventory_args();
		
		$args->holdReq = $holdReq;
		
		$this->send_base($args);
	}
	
	public function recv_batchHoldOneWarehouseInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchHoldOneWarehouseInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchIncrUpdateChannelSkuInventory( $reqList){
		
		$this->send_batchIncrUpdateChannelSkuInventory( $reqList);
		return $this->recv_batchIncrUpdateChannelSkuInventory();
	}
	
	public function send_batchIncrUpdateChannelSkuInventory( $reqList){
		
		$this->initInvocation("batchIncrUpdateChannelSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchIncrUpdateChannelSkuInventory_args();
		
		$args->reqList = $reqList;
		
		$this->send_base($args);
	}
	
	public function recv_batchIncrUpdateChannelSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchIncrUpdateChannelSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchIncrUpdateWarehouseSkuInventory( $reqList, $source){
		
		$this->send_batchIncrUpdateWarehouseSkuInventory( $reqList, $source);
		return $this->recv_batchIncrUpdateWarehouseSkuInventory();
	}
	
	public function send_batchIncrUpdateWarehouseSkuInventory( $reqList, $source){
		
		$this->initInvocation("batchIncrUpdateWarehouseSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchIncrUpdateWarehouseSkuInventory_args();
		
		$args->reqList = $reqList;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_batchIncrUpdateWarehouseSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchIncrUpdateWarehouseSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchReleaseChannelHold( $reqList){
		
		$this->send_batchReleaseChannelHold( $reqList);
		return $this->recv_batchReleaseChannelHold();
	}
	
	public function send_batchReleaseChannelHold( $reqList){
		
		$this->initInvocation("batchReleaseChannelHold");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchReleaseChannelHold_args();
		
		$args->reqList = $reqList;
		
		$this->send_base($args);
	}
	
	public function recv_batchReleaseChannelHold(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_batchReleaseChannelHold_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function fullUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity){
		
		$this->send_fullUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity);
		return $this->recv_fullUpdateChannelSkuInventory();
	}
	
	public function send_fullUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity){
		
		$this->initInvocation("fullUpdateChannelSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_fullUpdateChannelSkuInventory_args();
		
		$args->transId = $transId;
		
		$args->channelId = $channelId;
		
		$args->skuId = $skuId;
		
		$args->quantity = $quantity;
		
		$this->send_base($args);
	}
	
	public function recv_fullUpdateChannelSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_fullUpdateChannelSkuInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function fullUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source){
		
		$this->send_fullUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source);
		return $this->recv_fullUpdateWarehouseSkuInventory();
	}
	
	public function send_fullUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source){
		
		$this->initInvocation("fullUpdateWarehouseSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_fullUpdateWarehouseSkuInventory_args();
		
		$args->transId = $transId;
		
		$args->warehouseId = $warehouseId;
		
		$args->skuId = $skuId;
		
		$args->quantity = $quantity;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_fullUpdateWarehouseSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_fullUpdateWarehouseSkuInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function getChannelSkuInventory( $channelId, $skuId){
		
		$this->send_getChannelSkuInventory( $channelId, $skuId);
		return $this->recv_getChannelSkuInventory();
	}
	
	public function send_getChannelSkuInventory( $channelId, $skuId){
		
		$this->initInvocation("getChannelSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_getChannelSkuInventory_args();
		
		$args->channelId = $channelId;
		
		$args->skuId = $skuId;
		
		$this->send_base($args);
	}
	
	public function recv_getChannelSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_getChannelSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSumChannelQuantity( $channelId){
		
		$this->send_getSumChannelQuantity( $channelId);
		return $this->recv_getSumChannelQuantity();
	}
	
	public function send_getSumChannelQuantity( $channelId){
		
		$this->initInvocation("getSumChannelQuantity");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_getSumChannelQuantity_args();
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_getSumChannelQuantity(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_getSumChannelQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSumWarehouseQuantity( $warehouseId){
		
		$this->send_getSumWarehouseQuantity( $warehouseId);
		return $this->recv_getSumWarehouseQuantity();
	}
	
	public function send_getSumWarehouseQuantity( $warehouseId){
		
		$this->initInvocation("getSumWarehouseQuantity");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_getSumWarehouseQuantity_args();
		
		$args->warehouseId = $warehouseId;
		
		$this->send_base($args);
	}
	
	public function recv_getSumWarehouseQuantity(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_getSumWarehouseQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWarehouseSkuInventory( $warehouseId, $skuId){
		
		$this->send_getWarehouseSkuInventory( $warehouseId, $skuId);
		return $this->recv_getWarehouseSkuInventory();
	}
	
	public function send_getWarehouseSkuInventory( $warehouseId, $skuId){
		
		$this->initInvocation("getWarehouseSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_getWarehouseSkuInventory_args();
		
		$args->warehouseId = $warehouseId;
		
		$args->skuId = $skuId;
		
		$this->send_base($args);
	}
	
	public function recv_getWarehouseSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_getWarehouseSkuInventory_result();
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
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function holdChannelInventory(\com\vip\vop\vcloud\inventory\api\ChannelInventoryHold $holdReq){
		
		$this->send_holdChannelInventory( $holdReq);
		return $this->recv_holdChannelInventory();
	}
	
	public function send_holdChannelInventory(\com\vip\vop\vcloud\inventory\api\ChannelInventoryHold $holdReq){
		
		$this->initInvocation("holdChannelInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_holdChannelInventory_args();
		
		$args->holdReq = $holdReq;
		
		$this->send_base($args);
	}
	
	public function recv_holdChannelInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_holdChannelInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function holdForceChannelInventory(\com\vip\vop\vcloud\inventory\api\ChannelInventoryHold $holdReq){
		
		$this->send_holdForceChannelInventory( $holdReq);
		return $this->recv_holdForceChannelInventory();
	}
	
	public function send_holdForceChannelInventory(\com\vip\vop\vcloud\inventory\api\ChannelInventoryHold $holdReq){
		
		$this->initInvocation("holdForceChannelInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_holdForceChannelInventory_args();
		
		$args->holdReq = $holdReq;
		
		$this->send_base($args);
	}
	
	public function recv_holdForceChannelInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_holdForceChannelInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function incrUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity){
		
		$this->send_incrUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity);
		return $this->recv_incrUpdateChannelSkuInventory();
	}
	
	public function send_incrUpdateChannelSkuInventory( $transId, $channelId, $skuId, $quantity){
		
		$this->initInvocation("incrUpdateChannelSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_incrUpdateChannelSkuInventory_args();
		
		$args->transId = $transId;
		
		$args->channelId = $channelId;
		
		$args->skuId = $skuId;
		
		$args->quantity = $quantity;
		
		$this->send_base($args);
	}
	
	public function recv_incrUpdateChannelSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_incrUpdateChannelSkuInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function incrUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source){
		
		$this->send_incrUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source);
		return $this->recv_incrUpdateWarehouseSkuInventory();
	}
	
	public function send_incrUpdateWarehouseSkuInventory( $transId, $warehouseId, $skuId, $quantity, $source){
		
		$this->initInvocation("incrUpdateWarehouseSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_incrUpdateWarehouseSkuInventory_args();
		
		$args->transId = $transId;
		
		$args->warehouseId = $warehouseId;
		
		$args->skuId = $skuId;
		
		$args->quantity = $quantity;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_incrUpdateWarehouseSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_incrUpdateWarehouseSkuInventory_result();
		$this->receive_base($result);
		
	}
	
	
	public function listByWarehouseInventoryLogQueryCriteria(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryLogQueryCriteria $criteria,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->send_listByWarehouseInventoryLogQueryCriteria( $criteria, $pagination);
		return $this->recv_listByWarehouseInventoryLogQueryCriteria();
	}
	
	public function send_listByWarehouseInventoryLogQueryCriteria(\com\vip\vop\vcloud\inventory\api\WarehouseInventoryLogQueryCriteria $criteria,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->initInvocation("listByWarehouseInventoryLogQueryCriteria");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_listByWarehouseInventoryLogQueryCriteria_args();
		
		$args->criteria = $criteria;
		
		$args->pagination = $pagination;
		
		$this->send_base($args);
	}
	
	public function recv_listByWarehouseInventoryLogQueryCriteria(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_listByWarehouseInventoryLogQueryCriteria_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listChannelSkuInventory( $skuList){
		
		$this->send_listChannelSkuInventory( $skuList);
		return $this->recv_listChannelSkuInventory();
	}
	
	public function send_listChannelSkuInventory( $skuList){
		
		$this->initInvocation("listChannelSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_listChannelSkuInventory_args();
		
		$args->skuList = $skuList;
		
		$this->send_base($args);
	}
	
	public function recv_listChannelSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_listChannelSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listChannelSkuInventoryByChannelId( $channelId,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->send_listChannelSkuInventoryByChannelId( $channelId, $pagination);
		return $this->recv_listChannelSkuInventoryByChannelId();
	}
	
	public function send_listChannelSkuInventoryByChannelId( $channelId,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->initInvocation("listChannelSkuInventoryByChannelId");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_listChannelSkuInventoryByChannelId_args();
		
		$args->channelId = $channelId;
		
		$args->pagination = $pagination;
		
		$this->send_base($args);
	}
	
	public function recv_listChannelSkuInventoryByChannelId(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_listChannelSkuInventoryByChannelId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listWarehouseSkuInventory( $skuList){
		
		$this->send_listWarehouseSkuInventory( $skuList);
		return $this->recv_listWarehouseSkuInventory();
	}
	
	public function send_listWarehouseSkuInventory( $skuList){
		
		$this->initInvocation("listWarehouseSkuInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_listWarehouseSkuInventory_args();
		
		$args->skuList = $skuList;
		
		$this->send_base($args);
	}
	
	public function recv_listWarehouseSkuInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_listWarehouseSkuInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listWarehouseSkuInventoryByWarehouseId( $warehouseId,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->send_listWarehouseSkuInventoryByWarehouseId( $warehouseId, $pagination);
		return $this->recv_listWarehouseSkuInventoryByWarehouseId();
	}
	
	public function send_listWarehouseSkuInventoryByWarehouseId( $warehouseId,\com\vip\vop\vcloud\common\api\Pagination $pagination){
		
		$this->initInvocation("listWarehouseSkuInventoryByWarehouseId");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_listWarehouseSkuInventoryByWarehouseId_args();
		
		$args->warehouseId = $warehouseId;
		
		$args->pagination = $pagination;
		
		$this->send_base($args);
	}
	
	public function recv_listWarehouseSkuInventoryByWarehouseId(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_listWarehouseSkuInventoryByWarehouseId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function releaseChannelHold(\com\vip\vop\vcloud\inventory\api\ChannelInventoryRelease $releaseReq){
		
		$this->send_releaseChannelHold( $releaseReq);
		return $this->recv_releaseChannelHold();
	}
	
	public function send_releaseChannelHold(\com\vip\vop\vcloud\inventory\api\ChannelInventoryRelease $releaseReq){
		
		$this->initInvocation("releaseChannelHold");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_releaseChannelHold_args();
		
		$args->releaseReq = $releaseReq;
		
		$this->send_base($args);
	}
	
	public function recv_releaseChannelHold(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_releaseChannelHold_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setWarehouseSkuDisabled( $warehouseId, $skuId, $disabled){
		
		$this->send_setWarehouseSkuDisabled( $warehouseId, $skuId, $disabled);
		return $this->recv_setWarehouseSkuDisabled();
	}
	
	public function send_setWarehouseSkuDisabled( $warehouseId, $skuId, $disabled){
		
		$this->initInvocation("setWarehouseSkuDisabled");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_setWarehouseSkuDisabled_args();
		
		$args->warehouseId = $warehouseId;
		
		$args->skuId = $skuId;
		
		$args->disabled = $disabled;
		
		$this->send_base($args);
	}
	
	public function recv_setWarehouseSkuDisabled(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_setWarehouseSkuDisabled_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setWarehouseSkuSafeQuantity( $warehouseId, $skuId, $safeQuantity){
		
		$this->send_setWarehouseSkuSafeQuantity( $warehouseId, $skuId, $safeQuantity);
		return $this->recv_setWarehouseSkuSafeQuantity();
	}
	
	public function send_setWarehouseSkuSafeQuantity( $warehouseId, $skuId, $safeQuantity){
		
		$this->initInvocation("setWarehouseSkuSafeQuantity");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_setWarehouseSkuSafeQuantity_args();
		
		$args->warehouseId = $warehouseId;
		
		$args->skuId = $skuId;
		
		$args->safeQuantity = $safeQuantity;
		
		$this->send_base($args);
	}
	
	public function recv_setWarehouseSkuSafeQuantity(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_setWarehouseSkuSafeQuantity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInventory(\com\vip\vop\vcloud\inventory\api\InventoryUpdateRequest $request){
		
		$this->send_updateInventory( $request);
		return $this->recv_updateInventory();
	}
	
	public function send_updateInventory(\com\vip\vop\vcloud\inventory\api\InventoryUpdateRequest $request){
		
		$this->initInvocation("updateInventory");
		$args = new \com\vip\vop\vcloud\inventory\api\InventoryService_updateInventory_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateInventory(){
		
		$result = new \com\vip\vop\vcloud\inventory\api\InventoryService_updateInventory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class InventoryService_batchForceHoldChannelInventory_args {
	
	static $_TSPEC;
	public $reqList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHold();
					$elem0->read($input);
					
					$this->reqList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('reqList');
		
		if (!is_array($this->reqList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->reqList as $iter0){
			
			
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




class InventoryService_batchForceHoldOneWarehouseInventory_args {
	
	static $_TSPEC;
	public $holdReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'holdReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['holdReq'])){
				
				$this->holdReq = $vals['holdReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->holdReq = new \com\vip\vop\vcloud\inventory\api\WarehouseInventoryForceHold();
			$this->holdReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('holdReq');
		
		if (!is_object($this->holdReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->holdReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_batchFullUpdateChannelSkuInventory_args {
	
	static $_TSPEC;
	public $reqList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryUpdateReq();
					$elem0->read($input);
					
					$this->reqList[$_size0++] = $elem0;
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
		
		if($this->reqList !== null) {
			
			$xfer += $output->writeFieldBegin('reqList');
			
			if (!is_array($this->reqList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reqList as $iter0){
				
				
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




class InventoryService_batchFullUpdateWarehouseSkuInventory_args {
	
	static $_TSPEC;
	public $reqList = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			2 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\vop\vcloud\inventory\api\WarehouseSkuInventoryUpdateReq();
					$elem1->read($input);
					
					$this->reqList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqList !== null) {
			
			$xfer += $output->writeFieldBegin('reqList');
			
			if (!is_array($this->reqList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reqList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_batchHoldChannelInventory_args {
	
	static $_TSPEC;
	public $reqList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHold();
					$elem0->read($input);
					
					$this->reqList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('reqList');
		
		if (!is_array($this->reqList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->reqList as $iter0){
			
			
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




class InventoryService_batchHoldOneWarehouseInventory_args {
	
	static $_TSPEC;
	public $holdReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'holdReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['holdReq'])){
				
				$this->holdReq = $vals['holdReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->holdReq = new \com\vip\vop\vcloud\inventory\api\WarehouseInventoryHold();
			$this->holdReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('holdReq');
		
		if (!is_object($this->holdReq)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->holdReq->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_batchIncrUpdateChannelSkuInventory_args {
	
	static $_TSPEC;
	public $reqList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventoryUpdateReq();
					$elem0->read($input);
					
					$this->reqList[$_size0++] = $elem0;
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
		
		if($this->reqList !== null) {
			
			$xfer += $output->writeFieldBegin('reqList');
			
			if (!is_array($this->reqList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reqList as $iter0){
				
				
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




class InventoryService_batchIncrUpdateWarehouseSkuInventory_args {
	
	static $_TSPEC;
	public $reqList = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			2 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\vop\vcloud\inventory\api\WarehouseSkuInventoryUpdateReq();
					$elem1->read($input);
					
					$this->reqList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqList !== null) {
			
			$xfer += $output->writeFieldBegin('reqList');
			
			if (!is_array($this->reqList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reqList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_batchReleaseChannelHold_args {
	
	static $_TSPEC;
	public $reqList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqList'])){
				
				$this->reqList = $vals['reqList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryRelease();
					$elem0->read($input);
					
					$this->reqList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('reqList');
		
		if (!is_array($this->reqList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->reqList as $iter0){
			
			
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




class InventoryService_fullUpdateChannelSkuInventory_args {
	
	static $_TSPEC;
	public $transId = null;
	public $channelId = null;
	public $skuId = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->quantity); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_fullUpdateWarehouseSkuInventory_args {
	
	static $_TSPEC;
	public $transId = null;
	public $warehouseId = null;
	public $skuId = null;
	public $quantity = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'warehouseId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->quantity); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getChannelSkuInventory_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $skuId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'skuId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
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
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getSumChannelQuantity_args {
	
	static $_TSPEC;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getSumWarehouseQuantity_args {
	
	static $_TSPEC;
	public $warehouseId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getWarehouseSkuInventory_args {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $skuId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'skuId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
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




class InventoryService_holdChannelInventory_args {
	
	static $_TSPEC;
	public $holdReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'holdReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['holdReq'])){
				
				$this->holdReq = $vals['holdReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->holdReq = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHold();
			$this->holdReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->holdReq !== null) {
			
			$xfer += $output->writeFieldBegin('holdReq');
			
			if (!is_object($this->holdReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->holdReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_holdForceChannelInventory_args {
	
	static $_TSPEC;
	public $holdReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'holdReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['holdReq'])){
				
				$this->holdReq = $vals['holdReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->holdReq = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHold();
			$this->holdReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->holdReq !== null) {
			
			$xfer += $output->writeFieldBegin('holdReq');
			
			if (!is_object($this->holdReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->holdReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_incrUpdateChannelSkuInventory_args {
	
	static $_TSPEC;
	public $transId = null;
	public $channelId = null;
	public $skuId = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->quantity); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_incrUpdateWarehouseSkuInventory_args {
	
	static $_TSPEC;
	public $transId = null;
	public $warehouseId = null;
	public $skuId = null;
	public $quantity = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transId'
			),
			2 => array(
			'var' => 'warehouseId'
			),
			3 => array(
			'var' => 'skuId'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->transId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->quantity); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_listByWarehouseInventoryLogQueryCriteria_args {
	
	static $_TSPEC;
	public $criteria = null;
	public $pagination = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'criteria'
			),
			2 => array(
			'var' => 'pagination'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['criteria'])){
				
				$this->criteria = $vals['criteria'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->criteria = new \com\vip\vop\vcloud\inventory\api\WarehouseInventoryLogQueryCriteria();
			$this->criteria->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pagination = new \com\vip\vop\vcloud\common\api\Pagination();
			$this->pagination->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->criteria !== null) {
			
			$xfer += $output->writeFieldBegin('criteria');
			
			if (!is_object($this->criteria)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->criteria->write($output);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_listChannelSkuInventory_args {
	
	static $_TSPEC;
	public $skuList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuList'])){
				
				$this->skuList = $vals['skuList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->skuList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelSku();
					$elem0->read($input);
					
					$this->skuList[$_size0++] = $elem0;
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
		
		if($this->skuList !== null) {
			
			$xfer += $output->writeFieldBegin('skuList');
			
			if (!is_array($this->skuList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->skuList as $iter0){
				
				
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




class InventoryService_listChannelSkuInventoryByChannelId_args {
	
	static $_TSPEC;
	public $channelId = null;
	public $pagination = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'pagination'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pagination = new \com\vip\vop\vcloud\common\api\Pagination();
			$this->pagination->read($input);
			
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
		
		
		if($this->pagination !== null) {
			
			$xfer += $output->writeFieldBegin('pagination');
			
			if (!is_object($this->pagination)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pagination->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_listWarehouseSkuInventory_args {
	
	static $_TSPEC;
	public $skuList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuList'])){
				
				$this->skuList = $vals['skuList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->skuList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\WarehouseSku();
					$elem0->read($input);
					
					$this->skuList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('skuList');
		
		if (!is_array($this->skuList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->skuList as $iter0){
			
			
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




class InventoryService_listWarehouseSkuInventoryByWarehouseId_args {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $pagination = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'pagination'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['pagination'])){
				
				$this->pagination = $vals['pagination'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pagination = new \com\vip\vop\vcloud\common\api\Pagination();
			$this->pagination->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_releaseChannelHold_args {
	
	static $_TSPEC;
	public $releaseReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'releaseReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['releaseReq'])){
				
				$this->releaseReq = $vals['releaseReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->releaseReq = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryRelease();
			$this->releaseReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->releaseReq !== null) {
			
			$xfer += $output->writeFieldBegin('releaseReq');
			
			if (!is_object($this->releaseReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->releaseReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_setWarehouseSkuDisabled_args {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $skuId = null;
	public $disabled = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'skuId'
			),
			3 => array(
			'var' => 'disabled'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['disabled'])){
				
				$this->disabled = $vals['disabled'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->disabled); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->disabled !== null) {
			
			$xfer += $output->writeFieldBegin('disabled');
			$xfer += $output->writeI32($this->disabled);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_setWarehouseSkuSafeQuantity_args {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $skuId = null;
	public $safeQuantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'skuId'
			),
			3 => array(
			'var' => 'safeQuantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['safeQuantity'])){
				
				$this->safeQuantity = $vals['safeQuantity'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->warehouseId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->skuId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->safeQuantity); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouseId !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseId');
			$xfer += $output->writeI64($this->warehouseId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->safeQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('safeQuantity');
			$xfer += $output->writeI32($this->safeQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
			
			
			$this->request = new \com\vip\vop\vcloud\inventory\api\InventoryUpdateRequest();
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




class InventoryService_batchForceHoldChannelInventory_result {
	
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
					
					$key0 = 0;
					$input->readI64($key0); 
					
					$val0 = null;
					
					$val0 = array();
					$_size1 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem1 = null;
							
							$elem1 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHoldResult();
							$elem1->read($input);
							
							$val0[$_size1++] = $elem1;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
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
				
				$xfer += $output->writeI64($kiter0);
				
				
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




class InventoryService_batchForceHoldOneWarehouseInventory_result {
	
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




class InventoryService_batchFullUpdateChannelSkuInventory_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\UpdateResult();
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




class InventoryService_batchFullUpdateWarehouseSkuInventory_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\inventory\api\UpdateResult();
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




class InventoryService_batchHoldChannelInventory_result {
	
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
					
					$key1 = 0;
					$input->readI64($key1); 
					
					$val1 = null;
					
					$val1 = array();
					$_size2 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem2 = null;
							
							$elem2 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHoldResult();
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
				
				$xfer += $output->writeI64($kiter0);
				
				
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




class InventoryService_batchHoldOneWarehouseInventory_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\warehouse\api\Warehouse();
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




class InventoryService_batchIncrUpdateChannelSkuInventory_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\UpdateResult();
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




class InventoryService_batchIncrUpdateWarehouseSkuInventory_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\inventory\api\UpdateResult();
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




class InventoryService_batchReleaseChannelHold_result {
	
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
					
					$key1 = 0;
					$input->readI64($key1); 
					
					$val1 = null;
					
					$val1 = array();
					$_size2 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem2 = null;
							
							$elem2 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHoldResult();
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
				
				$xfer += $output->writeI64($kiter0);
				
				
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




class InventoryService_fullUpdateChannelSkuInventory_result {
	
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




class InventoryService_fullUpdateWarehouseSkuInventory_result {
	
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




class InventoryService_getChannelSkuInventory_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventory();
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




class InventoryService_getSumChannelQuantity_result {
	
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
			
			$input->readI64($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI64($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getSumWarehouseQuantity_result {
	
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
			
			$input->readI64($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI64($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class InventoryService_getWarehouseSkuInventory_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\inventory\api\WarehouseSkuInventory();
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




class InventoryService_holdChannelInventory_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHoldResult();
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




class InventoryService_holdForceChannelInventory_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHoldResult();
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




class InventoryService_incrUpdateChannelSkuInventory_result {
	
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




class InventoryService_incrUpdateWarehouseSkuInventory_result {
	
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




class InventoryService_listByWarehouseInventoryLogQueryCriteria_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\inventory\api\WarehouseInventoryLogQueryResult();
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




class InventoryService_listChannelSkuInventory_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelSkuInventory();
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




class InventoryService_listChannelSkuInventoryByChannelId_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryQueryResult();
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




class InventoryService_listWarehouseSkuInventory_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\WarehouseSkuInventory();
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




class InventoryService_listWarehouseSkuInventoryByWarehouseId_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\inventory\api\WarehouseInventoryQueryResult();
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




class InventoryService_releaseChannelHold_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\inventory\api\ChannelInventoryHoldResult();
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




class InventoryService_setWarehouseSkuDisabled_result {
	
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




class InventoryService_setWarehouseSkuSafeQuantity_result {
	
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




class InventoryService_updateInventory_result {
	
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




?>