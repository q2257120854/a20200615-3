<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-22
 */
class BuysuperAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $businessSource;
	
	/**
	 * 
	 */
	private $goodsNoConfigId;
	
	/**
	 * 
	 */
	private $mixCustNum;
	
	/**
	 * 
	 */
	private $packageType;
	
	/**
	 * 
	 */
	private $phone;
	
	/**
	 * 
	 */
	private $seqId;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getBusinessSource() {
		return $this->businessSource;
	}
	
	public function setBusinessSource($businessSource) {
		$this->businessSource = $businessSource;
		$this->apiParams["businessSource"] = $businessSource;
	}
	
	public function getGoodsNoConfigId() {
		return $this->goodsNoConfigId;
	}
	
	public function setGoodsNoConfigId($goodsNoConfigId) {
		$this->goodsNoConfigId = $goodsNoConfigId;
		$this->apiParams["goodsNoConfigId"] = $goodsNoConfigId;
	}
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getPackageType() {
		return $this->packageType;
	}
	
	public function setPackageType($packageType) {
		$this->packageType = $packageType;
		$this->apiParams["packageType"] = $packageType;
	}
	
	public function getPhone() {
		return $this->phone;
	}
	
	public function setPhone($phone) {
		$this->phone = $phone;
		$this->apiParams["phone"] = $phone;
	}
	
	public function getSeqId() {
		return $this->seqId;
	}
	
	public function setSeqId($seqId) {
		$this->seqId = $seqId;
		$this->apiParams["seqId"] = $seqId;
	}
	
	public function getApiMethodName(){
		return 'suning.superext.buysuper.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
		RequestCheckUtil::checkNotNull($this->seqId, 'seqId');
	}
	
	public function getBizName(){
		return "addBuysuper";
	}
	
}

?>