<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class MemberlinkGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $memberNo;
	
	/**
	 * 
	 */
	private $mobileNo;
	
	/**
	 * 
	 */
	private $targetUrl;
	
	public function getMemberNo() {
		return $this->memberNo;
	}
	
	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getMobileNo() {
		return $this->mobileNo;
	}
	
	public function setMobileNo($mobileNo) {
		$this->mobileNo = $mobileNo;
		$this->apiParams["mobileNo"] = $mobileNo;
	}
	
	public function getTargetUrl() {
		return $this->targetUrl;
	}
	
	public function setTargetUrl($targetUrl) {
		$this->targetUrl = $targetUrl;
		$this->apiParams["targetUrl"] = $targetUrl;
	}
	
	public function getApiMethodName(){
		return 'suning.online.memberlink.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->memberNo, 'memberNo');
		RequestCheckUtil::checkNotNull($this->targetUrl, 'targetUrl');
	}
	
	public function getBizName(){
		return "getMemberlink";
	}
	
}

?>