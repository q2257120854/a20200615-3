<?php
/**
 * 苏宁开放平台接口 - 免运费活动详情查询
 *
 * @author suning
 * @date   2014-10-16
 */
class GetFreeFreightRequest  extends SuningRequest{
	
	/**
	 * 免运费活动ID
	 */
	private $freeFreightId;
	
	public function getFreeFreightId() {
		return $this->freeFreightId;
	}
	
	public function setFreeFreightId($freeFreightId) {
		$this->freeFreightId = $freeFreightId;
		$this->apiParams["freeFreightId"] = $freeFreightId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.freefreightdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->freeFreightId, 'freeFreightId');
	}
	
	public function getBizName(){
		return "getFreeFreight";
	}
	
}

?>