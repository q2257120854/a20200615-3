<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class CarnkQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $seriesId;
	
	public function getSeriesId() {
		return $this->seriesId;
	}
	
	public function setSeriesId($seriesId) {
		$this->seriesId = $seriesId;
		$this->apiParams["seriesId"] = $seriesId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.carnk.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->seriesId, 'seriesId');
	}
	
	public function getBizName(){
		return "queryCarnk";
	}
	
}

?>