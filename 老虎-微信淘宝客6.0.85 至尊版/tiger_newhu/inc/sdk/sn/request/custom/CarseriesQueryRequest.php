<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class CarseriesQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $brandId;
	
	public function getBrandId() {
		return $this->brandId;
	}
	
	public function setBrandId($brandId) {
		$this->brandId = $brandId;
		$this->apiParams["brandId"] = $brandId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.carseries.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->brandId, 'brandId');
	}
	
	public function getBizName(){
		return "queryCarseries";
	}
	
}

?>