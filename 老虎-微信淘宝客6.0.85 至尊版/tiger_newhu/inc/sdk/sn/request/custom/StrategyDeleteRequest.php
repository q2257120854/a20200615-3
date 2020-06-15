<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class StrategyDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $strategyId;
	
	public function getStrategyId() {
		return $this->strategyId;
	}
	
	public function setStrategyId($strategyId) {
		$this->strategyId = $strategyId;
		$this->apiParams["strategyId"] = $strategyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.strategy.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->strategyId, 'strategyId');
	}
	
	public function getBizName(){
		return "deleteStrategy";
	}
	
}

?>