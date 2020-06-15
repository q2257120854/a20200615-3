<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class ExchangerefusereasonQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $changeReasonType;
	
	public function getChangeReasonType() {
		return $this->changeReasonType;
	}
	
	public function setChangeReasonType($changeReasonType) {
		$this->changeReasonType = $changeReasonType;
		$this->apiParams["changeReasonType"] = $changeReasonType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.exchangerefusereason.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->changeReasonType, 'changeReasonType');
	}
	
	public function getBizName(){
		return "queryExchangerefusereason";
	}
	
}

?>