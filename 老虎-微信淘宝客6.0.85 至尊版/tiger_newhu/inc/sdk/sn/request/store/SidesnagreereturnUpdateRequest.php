<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidesnagreereturnUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $returnQuestId;
	
	/**
	 * 
	 */
	private $sendType;
	
	public function getReturnQuestId() {
		return $this->returnQuestId;
	}
	
	public function setReturnQuestId($returnQuestId) {
		$this->returnQuestId = $returnQuestId;
		$this->apiParams["returnQuestId"] = $returnQuestId;
	}
	
	public function getSendType() {
		return $this->sendType;
	}
	
	public function setSendType($sendType) {
		$this->sendType = $sendType;
		$this->apiParams["sendType"] = $sendType;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidesnagreereturn.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->returnQuestId, 'returnQuestId');
		RequestCheckUtil::checkNotNull($this->sendType, 'sendType');
	}
	
	public function getBizName(){
		return "updateSidesnagreereturn";
	}
	
}

?>