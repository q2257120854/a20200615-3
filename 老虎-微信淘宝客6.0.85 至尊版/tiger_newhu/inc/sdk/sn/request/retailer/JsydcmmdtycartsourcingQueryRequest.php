<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-28
 */
class JsydcmmdtycartsourcingQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $area;
	
	/**
	 * 
	 */
	private $skuNums;
	
	/**
	 * 
	 */
	private $token;
	
	public function getArea() {
		return $this->area;
	}
	
	public function setArea($area) {
		$this->area = $area;
		$this->apiParams["area"] = $area;
	}
	
	public function getSkuNums() {
		return $this->skuNums;
	}
	
	public function setSkuNums($skuNums) {
		$this->skuNums = $skuNums;
		$arr = array();
		foreach ($skuNums as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skuNums"] = $arr;
	}
	
	public function getToken() {
		return $this->token;
	}
	
	public function setToken($token) {
		$this->token = $token;
		$this->apiParams["token"] = $token;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.jsydcmmdtycartsourcing.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryJsydcmmdtycartsourcing";
	}
	
}

class SkuNums {

	private $apiParams = array();
	
	private $num;
	
	private $skuId;
	
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
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>