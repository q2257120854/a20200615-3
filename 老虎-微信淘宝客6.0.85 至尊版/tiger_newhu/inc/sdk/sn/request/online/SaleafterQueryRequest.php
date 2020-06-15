<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class SaleafterQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cmmdtyCode;
	
	/**
	 * 
	 */
	private $custNo;
	
	/**
	 * 
	 */
	private $pn;
	
	/**
	 * 
	 */
	private $prdImgUrl;
	
	/**
	 * 
	 */
	private $prdPrice;
	
	/**
	 * 
	 */
	private $prdurl;
	
	/**
	 * 
	 */
	private $scene;
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}
	
	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCustNo() {
		return $this->custNo;
	}
	
	public function setCustNo($custNo) {
		$this->custNo = $custNo;
		$this->apiParams["custNo"] = $custNo;
	}
	
	public function getPn() {
		return $this->pn;
	}
	
	public function setPn($pn) {
		$this->pn = $pn;
		$this->apiParams["pn"] = $pn;
	}
	
	public function getPrdImgUrl() {
		return $this->prdImgUrl;
	}
	
	public function setPrdImgUrl($prdImgUrl) {
		$this->prdImgUrl = $prdImgUrl;
		$this->apiParams["prdImgUrl"] = $prdImgUrl;
	}
	
	public function getPrdPrice() {
		return $this->prdPrice;
	}
	
	public function setPrdPrice($prdPrice) {
		$this->prdPrice = $prdPrice;
		$this->apiParams["prdPrice"] = $prdPrice;
	}
	
	public function getPrdurl() {
		return $this->prdurl;
	}
	
	public function setPrdurl($prdurl) {
		$this->prdurl = $prdurl;
		$this->apiParams["prdurl"] = $prdurl;
	}
	
	public function getScene() {
		return $this->scene;
	}
	
	public function setScene($scene) {
		$this->scene = $scene;
		$this->apiParams["scene"] = $scene;
	}
	
	public function getApiMethodName(){
		return 'suning.online.saleafter.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNo, 'custNo');
		RequestCheckUtil::checkNotNull($this->scene, 'scene');
	}
	
	public function getBizName(){
		return "querySaleafter";
	}
	
}

?>