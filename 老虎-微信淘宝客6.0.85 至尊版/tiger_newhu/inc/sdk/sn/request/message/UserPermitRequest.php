<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-10-10
 */
class UserPermitRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $topicName;
	
	public function getTopicName() {
		return $this->topicName;
	}
	
	public function setTopicName($topicName) {
		$this->topicName = $topicName;
		$this->apiParams["topicName"] = $topicName;
	}
	
	public function getApiMethodName(){
		return 'suning.message.user.permit';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->topicName, 'topicName');
	}
	
	public function getBizName(){
		return "permitUser";
	}
	
}

?>