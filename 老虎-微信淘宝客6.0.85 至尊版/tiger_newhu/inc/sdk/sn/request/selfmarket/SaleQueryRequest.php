<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-20
 */
class SaleQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $gdsCd;
	
	
	
	/**
	 * 
	 */
	private $statisEndDate;
	
	/**
	 * 
	 */
	private $statisStartDate;
	
	/**
	 * 
	 */
	private $vendorCd;
	
	/**
	 * 
	 */
	private $vendorGds;
	
	public function getGdsCd() {
		return $this->gdsCd;
	}
	
	public function setGdsCd($gdsCd) {
		$this->gdsCd = $gdsCd;
		$this->apiParams["gdsCd"] = $gdsCd;
	}
	
	
	
	public function getStatisEndDate() {
		return $this->statisEndDate;
	}
	
	public function setStatisEndDate($statisEndDate) {
		$this->statisEndDate = $statisEndDate;
		$this->apiParams["statisEndDate"] = $statisEndDate;
	}
	
	public function getStatisStartDate() {
		return $this->statisStartDate;
	}
	
	public function setStatisStartDate($statisStartDate) {
		$this->statisStartDate = $statisStartDate;
		$this->apiParams["statisStartDate"] = $statisStartDate;
	}
	
	public function getVendorCd() {
		return $this->vendorCd;
	}
	
	public function setVendorCd($vendorCd) {
		$this->vendorCd = $vendorCd;
		$this->apiParams["vendorCd"] = $vendorCd;
	}
	
	public function getVendorGds() {
		return $this->vendorGds;
	}
	
	public function setVendorGds($vendorGds) {
		$this->vendorGds = $vendorGds;
		$this->apiParams["vendorGds"] = $vendorGds;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.sale.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->statisEndDate, 'statisEndDate');
		RequestCheckUtil::checkNotNull($this->statisStartDate, 'statisStartDate');
		RequestCheckUtil::checkNotNull($this->vendorCd, 'vendorCd');
	}
	
	public function getBizName(){
		return "querySale";
	}
	
}

?>