<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class ExchangemessagesQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $changeApplyId;
	
	public function getChangeApplyId() {
		return $this->changeApplyId;
	}
	
	public function setChangeApplyId($changeApplyId) {
		$this->changeApplyId = $changeApplyId;
		$this->apiParams["changeApplyId"] = $changeApplyId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.exchangemessages.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->changeApplyId, 'changeApplyId');
	}
	
	public function getBizName(){
		return "queryExchangemessages";
	}
	
}

?>