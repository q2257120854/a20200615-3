<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-6
 */
class KuaishounewpromotionurlGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $backUrl;
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $itemKey;
	
	/**
	 * 
	 */
	private $pid;
	
	public function getBackUrl() {
		return $this->backUrl;
	}
	
	public function setBackUrl($backUrl) {
		$this->backUrl = $backUrl;
		$this->apiParams["backUrl"] = $backUrl;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getItemKey() {
		return $this->itemKey;
	}
	
	public function setItemKey($itemKey) {
		$this->itemKey = $itemKey;
		$this->apiParams["itemKey"] = $itemKey;
	}
	
	public function getPid() {
		return $this->pid;
	}
	
	public function setPid($pid) {
		$this->pid = $pid;
		$this->apiParams["pid"] = $pid;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.kuaishounewpromotionurl.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->itemKey, 'itemKey');
	}
	
	public function getBizName(){
		return "getKuaishounewpromotionurl";
	}
	
}

?>