<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-5-23
 */
class FivedaysproduceAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $fivedaysProduce;
	
	public function getFivedaysProduce() {
		return $this->fivedaysProduce;
	}
	
	public function setFivedaysProduce($fivedaysProduce) {
		$this->fivedaysProduce = $fivedaysProduce;
		$arr = array();
		foreach ($fivedaysProduce as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["fivedaysProduce"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.fivedaysproduce.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addFivedaysproduce";
	}
	
}

class FivedaysProduce {

	private $apiParams = array();
	
	private $commodityCode;
	
	private $commodityName;
	
	private $factoryName;
	
	private $offlineTime;
	
	private $onlineTime;
	
	private $produceCount;
	
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
	
	public function getOfflineTime() {
		return $this->offlineTime;
	}

	public function setOfflineTime($offlineTime) {
		$this->offlineTime = $offlineTime;
		$this->apiParams["offlineTime"] = $offlineTime;
	}
	
	public function getOnlineTime() {
		return $this->onlineTime;
	}

	public function setOnlineTime($onlineTime) {
		$this->onlineTime = $onlineTime;
		$this->apiParams["onlineTime"] = $onlineTime;
	}
	
	public function getProduceCount() {
		return $this->produceCount;
	}

	public function setProduceCount($produceCount) {
		$this->produceCount = $produceCount;
		$this->apiParams["produceCount"] = $produceCount;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>