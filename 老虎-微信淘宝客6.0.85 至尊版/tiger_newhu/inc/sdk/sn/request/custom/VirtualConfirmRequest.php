<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-6-28
 */
class VirtualConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cardList;
	
	/**
	 * 
	 */
	private $dealResult;
	
	/**
	 * 
	 */
	private $failedCode;
	
	/**
	 * 
	 */
	private $failedReason;
	
	/**
	 * 
	 */
	private $goodsSnap;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderItemCode;
	
	/**
	 * 
	 */
	private $successTime;
	
	public function getCardList() {
		return $this->cardList;
	}
	
	public function setCardList($cardList) {
		$this->cardList = $cardList;
		$arr = array();
		foreach ($cardList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["cardList"] = $arr;
	}
	
	public function getDealResult() {
		return $this->dealResult;
	}
	
	public function setDealResult($dealResult) {
		$this->dealResult = $dealResult;
		$this->apiParams["dealResult"] = $dealResult;
	}
	
	public function getFailedCode() {
		return $this->failedCode;
	}
	
	public function setFailedCode($failedCode) {
		$this->failedCode = $failedCode;
		$this->apiParams["failedCode"] = $failedCode;
	}
	
	public function getFailedReason() {
		return $this->failedReason;
	}
	
	public function setFailedReason($failedReason) {
		$this->failedReason = $failedReason;
		$this->apiParams["failedReason"] = $failedReason;
	}
	
	public function getGoodsSnap() {
		return $this->goodsSnap;
	}
	
	public function setGoodsSnap($goodsSnap) {
		$this->goodsSnap = $goodsSnap;
		$this->apiParams["goodsSnap"] = $goodsSnap;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderItemCode() {
		return $this->orderItemCode;
	}
	
	public function setOrderItemCode($orderItemCode) {
		$this->orderItemCode = $orderItemCode;
		$this->apiParams["orderItemCode"] = $orderItemCode;
	}
	
	public function getSuccessTime() {
		return $this->successTime;
	}
	
	public function setSuccessTime($successTime) {
		$this->successTime = $successTime;
		$this->apiParams["successTime"] = $successTime;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.virtual.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dealResult, 'dealResult');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->orderItemCode, 'orderItemCode');
	}
	
	public function getBizName(){
		return "confirmVirtual";
	}
	
}

class CardList {

	private $apiParams = array();
	
	private $cardCode;
	
	private $cardSec;
	
	public function getCardCode() {
		return $this->cardCode;
	}

	public function setCardCode($cardCode) {
		$this->cardCode = $cardCode;
		$this->apiParams["cardCode"] = $cardCode;
	}
	
	public function getCardSec() {
		return $this->cardSec;
	}

	public function setCardSec($cardSec) {
		$this->cardSec = $cardSec;
		$this->apiParams["cardSec"] = $cardSec;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>