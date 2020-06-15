<?php
/**
 * 苏宁开放平台接口 - 限时打折活动明细查询
 *
 * @author suning
 * @date   2014-10-16
 */
class GetPriceReduceDetailRequest  extends SuningRequest{
	
	/**
	 * 限时打折活动ID
	 */
	private $priceReduceId;
	
	public function getPriceReduceId() {
		return $this->priceReduceId;
	}
	
	public function setPriceReduceId($priceReduceId) {
		$this->priceReduceId = $priceReduceId;
		$this->apiParams["priceReduceId"] = $priceReduceId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.pricereducedetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->priceReduceId, 'priceReduceId');
	}
	
	public function getBizName(){
		return "getPriceReduce";
	}
	
}

?>