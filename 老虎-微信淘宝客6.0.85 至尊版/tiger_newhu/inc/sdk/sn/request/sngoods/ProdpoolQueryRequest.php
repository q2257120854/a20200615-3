<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-25
 */
class ProdpoolQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $channelCode;
	
	
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.prodpool.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
	}
	
	public function getBizName(){
		return "queryProdpool";
	}
	
}

?>