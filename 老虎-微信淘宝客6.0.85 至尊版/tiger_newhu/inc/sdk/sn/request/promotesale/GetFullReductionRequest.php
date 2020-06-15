<?php
/**
 * 苏宁开放平台接口 - 满减活动详情查询
 *
 * @author suning
 * @date   2014-10-16
 */
class GetFullReductionRequest  extends SuningRequest{
	
	/**
	 * 满减活动ID
	 */
	private $fullReductionId;
	
	public function getFullReductionId() {
		return $this->fullReductionId;
	}
	
	public function setFullReductionId($fullReductionId) {
		$this->fullReductionId = $fullReductionId;
		$this->apiParams["fullReductionId"] = $fullReductionId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.fullreductiondetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->fullReductionId, 'fullReductionId');
	}
	
	public function getBizName(){
		return "getFullReduction";
	}
	
}

?>