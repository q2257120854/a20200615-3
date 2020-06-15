<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class CrowdcountbystrategyQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $strategy;
	
	public function getStrategy() {
		return $this->strategy;
	}
	
	public function setStrategy($strategy) {
		$this->strategy = $strategy;
		$this->apiParams["strategy"] = $strategy;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.crowdcountbystrategy.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->strategy, 'strategy');
	}
	
	public function getBizName(){
		return "queryCrowdcountbystrategy";
	}
	
}

?>