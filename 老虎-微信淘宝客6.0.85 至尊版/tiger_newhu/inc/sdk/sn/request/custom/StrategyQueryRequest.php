<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class StrategyQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $name;
	
	
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.custom.strategy.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryStrategy";
	}
	
}

?>