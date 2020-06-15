<?php
/**
 * 苏宁开放平台接口 - 单个仓库可辐射范围查询
 *
 * @author suning
 * @date   2015-6-24
 */
class WareSaleGetRequest  extends SuningRequest{
	
	/**
	 * 仓库模式
	 */
	private $warehouseType;
	
	/**
	 * 仓库编码
	 */
	private $warehouseCode;
	
	public function getWarehouseType() {
		return $this->warehouseType;
	}
	
	public function setWarehouseType($warehouseType) {
		$this->warehouseType = $warehouseType;
		$this->apiParams["warehouseType"] = $warehouseType;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.waresale.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseType, 'warehouseType');
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
	}
	
	public function getBizName(){
		return "getWareSale";
	}
	
}

?>