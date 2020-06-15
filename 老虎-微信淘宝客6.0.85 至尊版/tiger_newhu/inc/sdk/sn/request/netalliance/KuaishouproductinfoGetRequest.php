<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-3-6
 */
class KuaishouproductinfoGetRequest  extends SuningRequest{
	
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
	private $relItemUrl;
	
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
	
	public function getRelItemUrl() {
		return $this->relItemUrl;
	}
	
	public function setRelItemUrl($relItemUrl) {
		$this->relItemUrl = $relItemUrl;
		$this->apiParams["relItemUrl"] = $relItemUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.netalliance.kuaishouproductinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->relItemUrl, 'relItemUrl');
	}
	
	public function getBizName(){
		return "getKuaishouproductinfo";
	}
	
}

?>