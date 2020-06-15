<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ProductoperateQueryRequest  extends SelectSuningRequest{
	
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $cityId;
	
	/**
	 * 
	 */
	private $lesCityCode;
	
	/**
	 * 
	 */
	private $mdmCityCode;
	
	
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getCityId() {
		return $this->cityId;
	}
	
	public function setCityId($cityId) {
		$this->cityId = $cityId;
		$this->apiParams["cityId"] = $cityId;
	}
	
	public function getLesCityCode() {
		return $this->lesCityCode;
	}
	
	public function setLesCityCode($lesCityCode) {
		$this->lesCityCode = $lesCityCode;
		$this->apiParams["lesCityCode"] = $lesCityCode;
	}
	
	public function getMdmCityCode() {
		return $this->mdmCityCode;
	}
	
	public function setMdmCityCode($mdmCityCode) {
		$this->mdmCityCode = $mdmCityCode;
		$this->apiParams["mdmCityCode"] = $mdmCityCode;
	}
	
	
	public function getApiMethodName(){
		return 'suning.custom.productoperate.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->cityId, 'cityId');
		RequestCheckUtil::checkNotNull($this->lesCityCode, 'lesCityCode');
		RequestCheckUtil::checkNotNull($this->mdmCityCode, 'mdmCityCode');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
	}
	
	public function getBizName(){
		return "queryProductoperate";
	}
	
}

?>