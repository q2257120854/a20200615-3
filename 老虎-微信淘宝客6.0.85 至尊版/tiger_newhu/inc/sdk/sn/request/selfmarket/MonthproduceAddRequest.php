<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class MonthproduceAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $monthProduce;
	
	public function getMonthProduce() {
		return $this->monthProduce;
	}
	
	public function setMonthProduce($monthProduce) {
		$this->monthProduce = $monthProduce;
		$arr = array();
		foreach ($monthProduce as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["monthProduce"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.monthproduce.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addMonthproduce";
	}
	
}

class MonthProduce {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $commodityName;
	
	private $factoryName;
	
	private $offlineDate;
	
	private $onlineDate;
	
	private $planDatetime;
	
	private $produceCount;
	
	private $produceOrder;
	
	public function getCommodityCode() {
		return $this->commodityCode;
	}

	public function setCommodityCode($commodityCode) {
		$this->commodityCode = $commodityCode;
		$this->apiParams["commodityCode"] = $commodityCode;
	}
	
	public function getCommodityName() {
		return $this->commodityName;
	}

	public function setCommodityName($commodityName) {
		$this->commodityName = $commodityName;
		$this->apiParams["commodityName"] = $commodityName;
	}
	
	public function getFactoryName() {
		return $this->factoryName;
	}

	public function setFactoryName($factoryName) {
		$this->factoryName = $factoryName;
		$this->apiParams["factoryName"] = $factoryName;
	}
	
	public function getOfflineDate() {
		return $this->offlineDate;
	}

	public function setOfflineDate($offlineDate) {
		$this->offlineDate = $offlineDate;
		$this->apiParams["offlineDate"] = $offlineDate;
	}
	
	public function getOnlineDate() {
		return $this->onlineDate;
	}

	public function setOnlineDate($onlineDate) {
		$this->onlineDate = $onlineDate;
		$this->apiParams["onlineDate"] = $onlineDate;
	}
	
	public function getPlanDatetime() {
		return $this->planDatetime;
	}

	public function setPlanDatetime($planDatetime) {
		$this->planDatetime = $planDatetime;
		$this->apiParams["planDatetime"] = $planDatetime;
	}
	
	public function getProduceCount() {
		return $this->produceCount;
	}

	public function setProduceCount($produceCount) {
		$this->produceCount = $produceCount;
		$this->apiParams["produceCount"] = $produceCount;
	}
	
	public function getProduceOrder() {
		return $this->produceOrder;
	}

	public function setProduceOrder($produceOrder) {
		$this->produceOrder = $produceOrder;
		$this->apiParams["produceOrder"] = $produceOrder;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>