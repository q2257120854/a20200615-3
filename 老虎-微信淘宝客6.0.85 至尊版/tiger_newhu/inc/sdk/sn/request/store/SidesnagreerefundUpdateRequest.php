<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidesnagreerefundUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $returnQuestId;
	
	public function getReturnQuestId() {
		return $this->returnQuestId;
	}
	
	public function setReturnQuestId($returnQuestId) {
		$this->returnQuestId = $returnQuestId;
		$this->apiParams["returnQuestId"] = $returnQuestId;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidesnagreerefund.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->returnQuestId, 'returnQuestId');
	}
	
	public function getBizName(){
		return "updateSidesnagreerefund";
	}
	
}

?>