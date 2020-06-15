<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-10
 */
class CloudsalesreportQueryRequest  extends SelectSuningRequest{
	
	
	
	/**
	 * 
	 */
	private $statisStartDate;
	
	/**
	 * 
	 */
	private $statisEndDate;
	
	/**
	 * 
	 */
	private $vendorCd;
	
	/**
	 * 
	 */
	private $strCd;
	
	/**
	 * 
	 */
	private $strNm;
	
	/**
	 * 
	 */
	private $gdsCd;
	
	/**
	 * 
	 */
	private $vendorGds;
	
	
	
	public function getStatisStartDate() {
		return $this->statisStartDate;
	}
	
	public function setStatisStartDate($statisStartDate) {
		$this->statisStartDate = $statisStartDate;
		$this->apiParams["statisStartDate"] = $statisStartDate;
	}
	
	public function getStatisEndDate() {
		return $this->statisEndDate;
	}
	
	public function setStatisEndDate($statisEndDate) {
		$this->statisEndDate = $statisEndDate;
		$this->apiParams["statisEndDate"] = $statisEndDate;
	}
	
	public function getVendorCd() {
		return $this->vendorCd;
	}
	
	public function setVendorCd($vendorCd) {
		$this->vendorCd = $vendorCd;
		$this->apiParams["vendorCd"] = $vendorCd;
	}
	
	public function getStrCd() {
		return $this->strCd;
	}
	
	public function setStrCd($strCd) {
		$this->strCd = $strCd;
		$this->apiParams["strCd"] = $strCd;
	}
	
	public function getStrNm() {
		return $this->strNm;
	}
	
	public function setStrNm($strNm) {
		$this->strNm = $strNm;
		$this->apiParams["strNm"] = $strNm;
	}
	
	public function getGdsCd() {
		return $this->gdsCd;
	}
	
	public function setGdsCd($gdsCd) {
		$this->gdsCd = $gdsCd;
		$this->apiParams["gdsCd"] = $gdsCd;
	}
	
	public function getVendorGds() {
		return $this->vendorGds;
	}
	
	public function setVendorGds($vendorGds) {
		$this->vendorGds = $vendorGds;
		$this->apiParams["vendorGds"] = $vendorGds;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.cloudsalesreport.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->statisStartDate, 'statisStartDate');
		RequestCheckUtil::checkNotNull($this->statisEndDate, 'statisEndDate');
		RequestCheckUtil::checkNotNull($this->vendorCd, 'vendorCd');
	}
	
	public function getBizName(){
		return "queryCloudsalesreport";
	}
	
}

?>