<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-2-20
 */
class CmmdtybycouponoractQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityId;
	
	/**
	 * 
	 */
	private $chanId;
	
	/**
	 * 
	 */
	private $city;
	
	/**
	 * 
	 */
	private $couponRuleId;
	
	/**
	 * 
	 */
	private $cp;
	
	/**
	 * 
	 */
	private $kw;
	
	/**
	 * 
	 */
	private $price;
	
	/**
	 * 
	 */
	private $ps;
	
	/**
	 * 
	 */
	private $snfw;
	
	/**
	 * 
	 */
	private $st;
	
	/**
	 * 
	 */
	private $stock;
	
	/**
	 * 
	 */
	private $type;
	
	public function getActivityId() {
		return $this->activityId;
	}
	
	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getChanId() {
		return $this->chanId;
	}
	
	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCity() {
		return $this->city;
	}
	
	public function setCity($city) {
		$this->city = $city;
		$this->apiParams["city"] = $city;
	}
	
	public function getCouponRuleId() {
		return $this->couponRuleId;
	}
	
	public function setCouponRuleId($couponRuleId) {
		$this->couponRuleId = $couponRuleId;
		$this->apiParams["couponRuleId"] = $couponRuleId;
	}
	
	public function getCp() {
		return $this->cp;
	}
	
	public function setCp($cp) {
		$this->cp = $cp;
		$this->apiParams["cp"] = $cp;
	}
	
	public function getKw() {
		return $this->kw;
	}
	
	public function setKw($kw) {
		$this->kw = $kw;
		$this->apiParams["kw"] = $kw;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getPs() {
		return $this->ps;
	}
	
	public function setPs($ps) {
		$this->ps = $ps;
		$this->apiParams["ps"] = $ps;
	}
	
	public function getSnfw() {
		return $this->snfw;
	}
	
	public function setSnfw($snfw) {
		$this->snfw = $snfw;
		$this->apiParams["snfw"] = $snfw;
	}
	
	public function getSt() {
		return $this->st;
	}
	
	public function setSt($st) {
		$this->st = $st;
		$this->apiParams["st"] = $st;
	}
	
	public function getStock() {
		return $this->stock;
	}
	
	public function setStock($stock) {
		$this->stock = $stock;
		$this->apiParams["stock"] = $stock;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.online.cmmdtybycouponoract.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->chanId, 'chanId');
		RequestCheckUtil::checkNotNull($this->city, 'city');
		RequestCheckUtil::checkNotNull($this->cp, 'cp');
		RequestCheckUtil::checkNotNull($this->ps, 'ps');
		RequestCheckUtil::checkNotNull($this->snfw, 'snfw');
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "queryCmmdtybycouponoract";
	}
	
}

?>