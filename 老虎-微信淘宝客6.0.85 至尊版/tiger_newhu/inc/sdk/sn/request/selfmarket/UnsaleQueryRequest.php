<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-12-4
 */
class UnsaleQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $gdsCd;
	
	
	
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
		return 'suning.selfmarket.unsale.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->vendorCd, 'vendorCd');
	}
	
	public function getBizName(){
		return "queryUnsale";
	}
	
}

?>