<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-12
 */
class ProductoperateAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channel;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $entrance;
	
	/**
	 * 
	 */
	private $mdmCityCode;
	
	/**
	 * 
	 */
	private $partnumber;
	
	/**
	 * 
	 */
	private $pdType;
	
	/**
	 * 
	 */
	private $shopId;
	
	/**
	 * 
	 */
	private $shoptType;
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getEntrance() {
		return $this->entrance;
	}
	
	public function setEntrance($entrance) {
		$this->entrance = $entrance;
		$this->apiParams["entrance"] = $entrance;
	}
	
	public function getMdmCityCode() {
		return $this->mdmCityCode;
	}
	
	public function setMdmCityCode($mdmCityCode) {
		$this->mdmCityCode = $mdmCityCode;
		$this->apiParams["mdmCityCode"] = $mdmCityCode;
	}
	
	public function getPartnumber() {
		return $this->partnumber;
	}
	
	public function setPartnumber($partnumber) {
		$this->partnumber = $partnumber;
		$this->apiParams["partnumber"] = $partnumber;
	}
	
	public function getPdType() {
		return $this->pdType;
	}
	
	public function setPdType($pdType) {
		$this->pdType = $pdType;
		$this->apiParams["pdType"] = $pdType;
	}
	
	public function getShopId() {
		return $this->shopId;
	}
	
	public function setShopId($shopId) {
		$this->shopId = $shopId;
		$this->apiParams["shopId"] = $shopId;
	}
	
	public function getShoptType() {
		return $this->shoptType;
	}
	
	public function setShoptType($shoptType) {
		$this->shoptType = $shoptType;
		$this->apiParams["shoptType"] = $shoptType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.productoperate.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channel, 'channel');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->entrance, 'entrance');
		RequestCheckUtil::checkNotNull($this->mdmCityCode, 'mdmCityCode');
		RequestCheckUtil::checkNotNull($this->partnumber, 'partnumber');
		RequestCheckUtil::checkNotNull($this->pdType, 'pdType');
		RequestCheckUtil::checkNotNull($this->shopId, 'shopId');
		RequestCheckUtil::checkNotNull($this->shoptType, 'shoptType');
	}
	
	public function getBizName(){
		return "addProductoperate";
	}
	
}

?>