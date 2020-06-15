<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-5-3
 */
class BjcpmmurlGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionId;
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.bjcpmmurl.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
	}
	
	public function getBizName(){
		return "getBjcpmmurl";
	}
	
}

?>