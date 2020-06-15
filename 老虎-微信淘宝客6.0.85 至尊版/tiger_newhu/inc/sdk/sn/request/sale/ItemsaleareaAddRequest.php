<?php
/**
 * 苏宁开放平台接口 - 单品销售范围维护
 *
 * @author suning
 * @date   2014-7-18
 */
class ItemsaleareaAddRequest  extends SuningRequest{
	
	/**
	 * 苏宁商品编码
	 */
	private $productCode;
	
	/**
	 * 商家商品编码
	 */
	private $itemCode;
	
	/**
	 * 省份 
	 */
	private $provList;
	
	/**
	 * 城市
	 */
	private $cityList;
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}
	
	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getProvList() {
		return $this->provList;
	}
	
	public function setProvList($provList) {
		$this->provList = $provList;
		$this->apiParams["provList"] = $provList->getApiParams();
	}
	
	public function getCityList() {
		return $this->cityList;
	}
	
	public function setCityList($cityList) {
		$this->cityList = $cityList;
		$this->apiParams["cityList"] = $cityList->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.custom.itemsalearea.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->itemCode, 'itemCode');
	}
	
	public function getBizName(){
		return "itemSalearea";
	}
	
}

class ProvList {

	private $apiParams = array();
	
	private $prov;
	
	public function getProv() {
		return $this->prov;
	}

	public function setProv($prov) {
		$this->prov = $prov;
		$this->apiParams["prov"] = $prov;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class CityList {

	private $apiParams = array();
	
	private $city;
	
	public function getCity() {
		return $this->city;
	}

	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>