<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class ComposestrategyCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $description;
	
	/**
	 * 
	 */
	private $keywords;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $strategyIdA;
	
	/**
	 * 
	 */
	private $strategyIdB;
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
		$this->apiParams["description"] = $description;
	}
	
	public function getKeywords() {
		return $this->keywords;
	}
	
	public function setKeywords($keywords) {
		$this->keywords = $keywords;
		$this->apiParams["keywords"] = $keywords;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getStrategyIdA() {
		return $this->strategyIdA;
	}
	
	public function setStrategyIdA($strategyIdA) {
		$this->strategyIdA = $strategyIdA;
		$this->apiParams["strategyIdA"] = $strategyIdA;
	}
	
	public function getStrategyIdB() {
		return $this->strategyIdB;
	}
	
	public function setStrategyIdB($strategyIdB) {
		$this->strategyIdB = $strategyIdB;
		$this->apiParams["strategyIdB"] = $strategyIdB;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.composestrategy.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->keywords, 'keywords');
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->strategyIdA, 'strategyIdA');
		RequestCheckUtil::checkNotNull($this->strategyIdB, 'strategyIdB');
	}
	
	public function getBizName(){
		return "createComposestrategy";
	}
	
}

?>