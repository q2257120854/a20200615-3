<?php
/**
 * 苏宁开放平台接口 - 商品入库预约信息批量查询
 *
 * @author suning
 * @date   2016-5-27
 */
class StorageSubQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 预约单状态。01 预约成功 02预约失败 03已取消 04已入库
	 */
	private $orderState;
	
	/**
	 * 仓库ID。预约的苏宁仓库ID，如果不输入则默认查询全部仓库的预约信息
	 */
	private $warehouseCode;
	
	/**
	 * 查询开始时间（预约入库）。）
	 */
	private $orderBeginDate;
	
	/**
	 * 查询结束时间（预约入库）。
	 */
	private $orderEndDate;
	
	/**
	 * 查询开始时间（预约创建时间）。
	 */
	private $applyBeginDate;
	
	/**
	 * 查询结束时间（预约创建时间）。
	 */
	private $applyEndDate;
	
	
	
	public function getOrderState() {
		return $this->orderState;
	}
	
	public function setOrderState($orderState) {
		$this->orderState = $orderState;
		$this->apiParams["orderState"] = $orderState;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getOrderBeginDate() {
		return $this->orderBeginDate;
	}
	
	public function setOrderBeginDate($orderBeginDate) {
		$this->orderBeginDate = $orderBeginDate;
		$this->apiParams["orderBeginDate"] = $orderBeginDate;
	}
	
	public function getOrderEndDate() {
		return $this->orderEndDate;
	}
	
	public function setOrderEndDate($orderEndDate) {
		$this->orderEndDate = $orderEndDate;
		$this->apiParams["orderEndDate"] = $orderEndDate;
	}
	
	public function getApplyBeginDate() {
		return $this->applyBeginDate;
	}
	
	public function setApplyBeginDate($applyBeginDate) {
		$this->applyBeginDate = $applyBeginDate;
		$this->apiParams["applyBeginDate"] = $applyBeginDate;
	}
	
	public function getApplyEndDate() {
		return $this->applyEndDate;
	}
	
	public function setApplyEndDate($applyEndDate) {
		$this->applyEndDate = $applyEndDate;
		$this->apiParams["applyEndDate"] = $applyEndDate;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.storagesub.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryStorageSub";
	}
	
}

?>