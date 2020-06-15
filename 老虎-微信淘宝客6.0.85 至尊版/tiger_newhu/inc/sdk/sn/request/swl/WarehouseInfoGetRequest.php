<?php
/**
 * 苏宁开放平台接口 - 单个查询仓库信息
 *
 * @author suning
 * @date   2015-6-24
 */
class WarehouseInfoGetRequest  extends SuningRequest{
	
	/**
	 * 仓库ID
	 */
	private $warehouseCode;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getApiMethodName(){
		return 'suning.swl.warehouseinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
	}
	
	public function getBizName(){
		return "getWarehouseInfo";
	}
	
}

?>