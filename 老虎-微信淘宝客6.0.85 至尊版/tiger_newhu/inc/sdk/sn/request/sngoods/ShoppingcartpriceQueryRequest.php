<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-25
 */
class ShoppingcartpriceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $cmmdtyInfoList;
	
	/**
	 * 
	 */
	private $regionCode;
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCmmdtyInfoList() {
		return $this->cmmdtyInfoList;
	}
	
	public function setCmmdtyInfoList($cmmdtyInfoList) {
		$this->cmmdtyInfoList = $cmmdtyInfoList;
		$arr = array();
		foreach ($cmmdtyInfoList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cmmdtyInfoList"] = $arr;
	}
	
	public function getRegionCode() {
		return $this->regionCode;
	}
	
	public function setRegionCode($regionCode) {
		$this->regionCode = $regionCode;
		$this->apiParams["regionCode"] = $regionCode;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.shoppingcartprice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
		RequestCheckUtil::checkNotNull($this->regionCode, 'regionCode');
	}
	
	public function getBizName(){
		return "queryShoppingcartprice";
	}
	
}

class CmmdtyInfoList {

	private $apiParams = array();
	
	private $num;
	
	private $skuId;
	
	private $supplierCode;
	
	public function getNum() {
		return $this->num;
	}

	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>