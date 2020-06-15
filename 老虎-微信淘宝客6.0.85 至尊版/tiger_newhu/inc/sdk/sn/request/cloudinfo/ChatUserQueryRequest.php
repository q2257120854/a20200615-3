<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-11-17
 */
class ChatUserQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $loginName;
	
	/**
	 * 
	 */
	private $searchTime;
	
	
	
	public function getLoginName() {
		return $this->loginName;
	}
	
	public function setLoginName($loginName) {
		$this->loginName = $loginName;
		$this->apiParams["loginName"] = $loginName;
	}
	
	public function getSearchTime() {
		return $this->searchTime;
	}
	
	public function setSearchTime($searchTime) {
		$this->searchTime = $searchTime;
		$this->apiParams["searchTime"] = $searchTime;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.cloudinfo.chatuser.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->loginName, 'loginName');
		RequestCheckUtil::checkNotNull($this->searchTime, 'searchTime');
	}
	
	public function getBizName(){
		return "queryChatUser";
	}
	
}

?>