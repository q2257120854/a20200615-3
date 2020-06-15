<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-28
 */
class LabelstrategyCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $description;
	
	/**
	 * 
	 */
	private $name;
	
	/**
	 * 
	 */
	private $strategy;
	
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
		$this->apiParams["description"] = $description;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		$this->apiParams["name"] = $name;
	}
	
	public function getStrategy() {
		return $this->strategy;
	}
	
	public function setStrategy($strategy) {
		$this->strategy = $strategy;
		$this->apiParams["strategy"] = $strategy;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.labelstrategy.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->name, 'name');
		RequestCheckUtil::checkNotNull($this->strategy, 'strategy');
	}
	
	public function getBizName(){
		return "createLabelstrategy";
	}
	
}

?>