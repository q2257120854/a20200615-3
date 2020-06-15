<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromotionUnitModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	/**
	 * 
	 */
	private $goodsCode;
	
	/**
	 * 
	 */
	private $goodsUrl;
	
	/**
	 * 
	 */
	private $unitDetail;
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getGoodsCode() {
		return $this->goodsCode;
	}
	
	public function setGoodsCode($goodsCode) {
		$this->goodsCode = $goodsCode;
		$this->apiParams["goodsCode"] = $goodsCode;
	}
	
	public function getGoodsUrl() {
		return $this->goodsUrl;
	}
	
	public function setGoodsUrl($goodsUrl) {
		$this->goodsUrl = $goodsUrl;
		$this->apiParams["goodsUrl"] = $goodsUrl;
	}
	
	public function getUnitDetail() {
		return $this->unitDetail;
	}
	
	public function setUnitDetail($unitDetail) {
		$this->unitDetail = $unitDetail;
		$arr = array();
		foreach ($unitDetail as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["unitDetail"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotionunit.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
		RequestCheckUtil::checkNotNull($this->goodsCode, 'goodsCode');
		RequestCheckUtil::checkNotNull($this->goodsUrl, 'goodsUrl');
	}
	
	public function getBizName(){
		return "modifyPromotionUnit";
	}
	
}

class UnitDetail {

	private $apiParams = array();
	
	private $keyWordCataLog;
	
	private $price;
	
	private $type;
	
	public function getKeyWordCataLog() {
		return $this->keyWordCataLog;
	}

	public function setKeyWordCataLog($keyWordCataLog) {
		$this->keyWordCataLog = $keyWordCataLog;
		$this->apiParams["keyWordCataLog"] = $keyWordCataLog;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>