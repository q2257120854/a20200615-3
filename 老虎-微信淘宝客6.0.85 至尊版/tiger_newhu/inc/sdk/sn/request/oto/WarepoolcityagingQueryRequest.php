<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-2-17
 */
class WarepoolcityagingQueryRequest  extends SuningRequest{
	
	/**
	 * 
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
		return 'suning.oto.warepoolcityaging.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
	}
	
	public function getBizName(){
		return "queryWarepoolcityaging";
	}
	
}

?>