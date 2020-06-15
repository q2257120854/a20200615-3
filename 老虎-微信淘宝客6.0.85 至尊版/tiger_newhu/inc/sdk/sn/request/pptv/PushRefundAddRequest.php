<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-4-1
 */
class PushRefundAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $buyerNick;
	
	/**
	 * 
	 */
	private $companyName;
	
	/**
	 * 
	 */
	private $createdTime;
	
	/**
	 * 
	 */
	private $desc;
	
	/**
	 * 
	 */
	private $modifiedTime;
	
	/**
	 * 
	 */
	private $num;
	
	/**
	 * 
	 */
	private $oid;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $outerId;
	
	/**
	 * 
	 */
	private $reason;
	
	/**
	 * 
	 */
	private $refundFee;
	
	/**
	 * 
	 */
	private $refundId;
	
	/**
	 * 
	 */
	private $refundNum;
	
	/**
	 * 
	 */
	private $refundPhase;
	
	/**
	 * 
	 */
	private $refundVersion;
	
	/**
	 * 
	 */
	private $sellerNick;
	
	/**
	 * 
	 */
	private $sid;
	
	/**
	 * 
	 */
	private $status;
	
	/**
	 * 
	 */
	private $tid;
	
	/**
	 * 
	 */
	private $title;
	
	/**
	 * 
	 */
	private $totalFee;
	
	/**
	 * 
	 */
	private $type;
	
	public function getBuyerNick() {
		return $this->buyerNick;
	}
	
	public function setBuyerNick($buyerNick) {
		$this->buyerNick = $buyerNick;
		$this->apiParams["buyerNick"] = $buyerNick;
	}
	
	public function getCompanyName() {
		return $this->companyName;
	}
	
	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->apiParams["companyName"] = $companyName;
	}
	
	public function getCreatedTime() {
		return $this->createdTime;
	}
	
	public function setCreatedTime($createdTime) {
		$this->createdTime = $createdTime;
		$this->apiParams["createdTime"] = $createdTime;
	}
	
	public function getDesc() {
		return $this->desc;
	}
	
	public function setDesc($desc) {
		$this->desc = $desc;
		$this->apiParams["desc"] = $desc;
	}
	
	public function getModifiedTime() {
		return $this->modifiedTime;
	}
	
	public function setModifiedTime($modifiedTime) {
		$this->modifiedTime = $modifiedTime;
		$this->apiParams["modifiedTime"] = $modifiedTime;
	}
	
	public function getNum() {
		return $this->num;
	}
	
	public function setNum($num) {
		$this->num = $num;
		$this->apiParams["num"] = $num;
	}
	
	public function getOid() {
		return $this->oid;
	}
	
	public function setOid($oid) {
		$this->oid = $oid;
		$this->apiParams["oid"] = $oid;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getOuterId() {
		return $this->outerId;
	}
	
	public function setOuterId($outerId) {
		$this->outerId = $outerId;
		$this->apiParams["outerId"] = $outerId;
	}
	
	public function getReason() {
		return $this->reason;
	}
	
	public function setReason($reason) {
		$this->reason = $reason;
		$this->apiParams["reason"] = $reason;
	}
	
	public function getRefundFee() {
		return $this->refundFee;
	}
	
	public function setRefundFee($refundFee) {
		$this->refundFee = $refundFee;
		$this->apiParams["refundFee"] = $refundFee;
	}
	
	public function getRefundId() {
		return $this->refundId;
	}
	
	public function setRefundId($refundId) {
		$this->refundId = $refundId;
		$this->apiParams["refundId"] = $refundId;
	}
	
	public function getRefundNum() {
		return $this->refundNum;
	}
	
	public function setRefundNum($refundNum) {
		$this->refundNum = $refundNum;
		$this->apiParams["refundNum"] = $refundNum;
	}
	
	public function getRefundPhase() {
		return $this->refundPhase;
	}
	
	public function setRefundPhase($refundPhase) {
		$this->refundPhase = $refundPhase;
		$this->apiParams["refundPhase"] = $refundPhase;
	}
	
	public function getRefundVersion() {
		return $this->refundVersion;
	}
	
	public function setRefundVersion($refundVersion) {
		$this->refundVersion = $refundVersion;
		$this->apiParams["refundVersion"] = $refundVersion;
	}
	
	public function getSellerNick() {
		return $this->sellerNick;
	}
	
	public function setSellerNick($sellerNick) {
		$this->sellerNick = $sellerNick;
		$this->apiParams["sellerNick"] = $sellerNick;
	}
	
	public function getSid() {
		return $this->sid;
	}
	
	public function setSid($sid) {
		$this->sid = $sid;
		$this->apiParams["sid"] = $sid;
	}
	
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}
	
	public function getTid() {
		return $this->tid;
	}
	
	public function setTid($tid) {
		$this->tid = $tid;
		$this->apiParams["tid"] = $tid;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function setTitle($title) {
		$this->title = $title;
		$this->apiParams["title"] = $title;
	}
	
	public function getTotalFee() {
		return $this->totalFee;
	}
	
	public function setTotalFee($totalFee) {
		$this->totalFee = $totalFee;
		$this->apiParams["totalFee"] = $totalFee;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getApiMethodName(){
		return 'suning.pptv.pushrefund.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addPushRefund";
	}
	
}

?>