<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-27
 */
class UnionloginAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $catalog;
	
	/**
	 * 
	 */
	private $channel;
	
	/**
	 * 
	 */
	private $comabb;
	
	/**
	 * 
	 */
	private $comName;
	
	/**
	 * 
	 */
	private $extra;
	
	/**
	 * 
	 */
	private $limit;
	
	/**
	 * 
	 */
	private $limitEndDate;
	
	/**
	 * 
	 */
	private $limitStartDate;
	
	/**
	 * 
	 */
	private $limitType;
	
	/**
	 * 
	 */
	private $role;
	
	/**
	 * 
	 */
	private $spUid;
	
	/**
	 * 
	 */
	private $sysCode;
	
	/**
	 * 
	 */
	private $targetUrl;
	
	/**
	 * 
	 */
	private $uid;
	
	public function getCatalog() {
		return $this->catalog;
	}
	
	public function setCatalog($catalog) {
		$this->catalog = $catalog;
		$this->apiParams["catalog"] = $catalog;
	}
	
	public function getChannel() {
		return $this->channel;
	}
	
	public function setChannel($channel) {
		$this->channel = $channel;
		$this->apiParams["channel"] = $channel;
	}
	
	public function getComabb() {
		return $this->comabb;
	}
	
	public function setComabb($comabb) {
		$this->comabb = $comabb;
		$this->apiParams["comabb"] = $comabb;
	}
	
	public function getComName() {
		return $this->comName;
	}
	
	public function setComName($comName) {
		$this->comName = $comName;
		$this->apiParams["comName"] = $comName;
	}
	
	public function getExtra() {
		return $this->extra;
	}
	
	public function setExtra($extra) {
		$this->extra = $extra;
		$this->apiParams["extra"] = $extra;
	}
	
	public function getLimit() {
		return $this->limit;
	}
	
	public function setLimit($limit) {
		$this->limit = $limit;
		$this->apiParams["limit"] = $limit;
	}
	
	public function getLimitEndDate() {
		return $this->limitEndDate;
	}
	
	public function setLimitEndDate($limitEndDate) {
		$this->limitEndDate = $limitEndDate;
		$this->apiParams["limitEndDate"] = $limitEndDate;
	}
	
	public function getLimitStartDate() {
		return $this->limitStartDate;
	}
	
	public function setLimitStartDate($limitStartDate) {
		$this->limitStartDate = $limitStartDate;
		$this->apiParams["limitStartDate"] = $limitStartDate;
	}
	
	public function getLimitType() {
		return $this->limitType;
	}
	
	public function setLimitType($limitType) {
		$this->limitType = $limitType;
		$this->apiParams["limitType"] = $limitType;
	}
	
	public function getRole() {
		return $this->role;
	}
	
	public function setRole($role) {
		$this->role = $role;
		$this->apiParams["role"] = $role;
	}
	
	public function getSpUid() {
		return $this->spUid;
	}
	
	public function setSpUid($spUid) {
		$this->spUid = $spUid;
		$this->apiParams["spUid"] = $spUid;
	}
	
	public function getSysCode() {
		return $this->sysCode;
	}
	
	public function setSysCode($sysCode) {
		$this->sysCode = $sysCode;
		$this->apiParams["sysCode"] = $sysCode;
	}
	
	public function getTargetUrl() {
		return $this->targetUrl;
	}
	
	public function setTargetUrl($targetUrl) {
		$this->targetUrl = $targetUrl;
		$this->apiParams["targetUrl"] = $targetUrl;
	}
	
	public function getUid() {
		return $this->uid;
	}
	
	public function setUid($uid) {
		$this->uid = $uid;
		$this->apiParams["uid"] = $uid;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.unionlogin.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->comabb, 'comabb');
		RequestCheckUtil::checkNotNull($this->comName, 'comName');
		RequestCheckUtil::checkNotNull($this->sysCode, 'sysCode');
		RequestCheckUtil::checkNotNull($this->uid, 'uid');
	}
	
	public function getBizName(){
		return "addUnionlogin";
	}
	
}

?>