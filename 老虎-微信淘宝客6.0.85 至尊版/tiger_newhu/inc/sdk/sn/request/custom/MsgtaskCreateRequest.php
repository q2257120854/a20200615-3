<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-29
 */
class MsgtaskCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $appSecret;
	
	/**
	 * 
	 */
	private $content;
	
	/**
	 * 
	 */
	private $interestActivityId;
	
	/**
	 * 
	 */
	private $interestType;
	
	/**
	 * 
	 */
	private $longUrl;
	
	/**
	 * 
	 */
	private $paramJson;
	
	/**
	 * 
	 */
	private $shortUrl;
	
	/**
	 * 
	 */
	private $sign;
	
	/**
	 * 
	 */
	private $taskChannel;
	
	/**
	 * 
	 */
	private $template;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getAppSecret() {
		return $this->appSecret;
	}
	
	public function setAppSecret($appSecret) {
		$this->appSecret = $appSecret;
		$this->apiParams["appSecret"] = $appSecret;
	}
	
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
		$this->apiParams["content"] = $content;
	}
	
	public function getInterestActivityId() {
		return $this->interestActivityId;
	}
	
	public function setInterestActivityId($interestActivityId) {
		$this->interestActivityId = $interestActivityId;
		$this->apiParams["interestActivityId"] = $interestActivityId;
	}
	
	public function getInterestType() {
		return $this->interestType;
	}
	
	public function setInterestType($interestType) {
		$this->interestType = $interestType;
		$this->apiParams["interestType"] = $interestType;
	}
	
	public function getLongUrl() {
		return $this->longUrl;
	}
	
	public function setLongUrl($longUrl) {
		$this->longUrl = $longUrl;
		$this->apiParams["longUrl"] = $longUrl;
	}
	
	public function getParamJson() {
		return $this->paramJson;
	}
	
	public function setParamJson($paramJson) {
		$this->paramJson = $paramJson;
		$this->apiParams["paramJson"] = $paramJson;
	}
	
	public function getShortUrl() {
		return $this->shortUrl;
	}
	
	public function setShortUrl($shortUrl) {
		$this->shortUrl = $shortUrl;
		$this->apiParams["shortUrl"] = $shortUrl;
	}
	
	public function getSign() {
		return $this->sign;
	}
	
	public function setSign($sign) {
		$this->sign = $sign;
		$this->apiParams["sign"] = $sign;
	}
	
	public function getTaskChannel() {
		return $this->taskChannel;
	}
	
	public function setTaskChannel($taskChannel) {
		$this->taskChannel = $taskChannel;
		$this->apiParams["taskChannel"] = $taskChannel;
	}
	
	public function getTemplate() {
		return $this->template;
	}
	
	public function setTemplate($template) {
		$this->template = $template;
		$this->apiParams["template"] = $template;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.msgtask.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->content, 'content');
		RequestCheckUtil::checkNotNull($this->interestType, 'interestType');
		RequestCheckUtil::checkNotNull($this->sign, 'sign');
		RequestCheckUtil::checkNotNull($this->taskChannel, 'taskChannel');
		RequestCheckUtil::checkNotNull($this->template, 'template');
	}
	
	public function getBizName(){
		return "createMsgtask";
	}
	
}

?>