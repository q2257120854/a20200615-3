<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-2-17
 */
class WarepooldistrictagingQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $warehouseCode;
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.warepooldistrictaging.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
	}
	
	public function getBizName(){
		return "queryWarepooldistrictaging";
	}
	
}

?>