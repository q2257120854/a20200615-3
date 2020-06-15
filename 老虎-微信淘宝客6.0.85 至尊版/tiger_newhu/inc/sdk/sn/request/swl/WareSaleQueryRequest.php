<?php
/**
 * 苏宁开放平台接口 - 仓库可辐射范围批量查询
 *
 * @author suning
 * @date   2015-6-24
 */
class WareSaleQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 仓库模式
	 */
	private $warehouseType;
	
	
	
	public function getWarehouseType() {
		return $this->warehouseType;
	}
	
	public function setWarehouseType($warehouseType) {
		$this->warehouseType = $warehouseType;
		$this->apiParams["warehouseType"] = $warehouseType;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.swl.waresale.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseType, 'warehouseType');
	}
	
	public function getBizName(){
		return "queryWareSale";
	}
	
}

?>