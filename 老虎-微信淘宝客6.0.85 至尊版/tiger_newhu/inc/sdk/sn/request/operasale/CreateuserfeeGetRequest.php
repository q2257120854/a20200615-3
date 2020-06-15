<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-28
 */
class CreateuserfeeGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $productId;
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getProductId() {
		return $this->productId;
	}
	
	public function setProductId($productId) {
		$this->productId = $productId;
		$this->apiParams["productId"] = $productId;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.createuserfee.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
		RequestCheckUtil::checkNotNull($this->productId, 'productId');
	}
	
	public function getBizName(){
		return "getCreateuserfee";
	}
	
}

?>