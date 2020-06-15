<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class ApplyreturngoodsCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyType;
	
	/**
	 * 
	 */
	private $attachInfo;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemId;
	
	/**
	 * 
	 */
	private $orderStatus;
	
	/**
	 * 
	 */
	private $packInfo;
	
	/**
	 * 
	 */
	private $picInfo;
	
	/**
	 * 
	 */
	private $reOrderItemId;
	
	/**
	 * 
	 */
	private $retNum;
	
	/**
	 * 
	 */
	private $retReason;
	
	/**
	 * 
	 */
	private $useInfo;
	
	/**
	 * 
	 */
	private $retDesc;
	
	public function getApplyType() {
		return $this->applyType;
	}
	
	public function setApplyType($applyType) {
		$this->applyType = $applyType;
		$this->apiParams["applyType"] = $applyType;
	}
	
	public function getAttachInfo() {
		return $this->attachInfo;
	}
	
	public function setAttachInfo($attachInfo) {
		$this->attachInfo = $attachInfo;
		$this->apiParams["attachInfo"] = $attachInfo;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getPackInfo() {
		return $this->packInfo;
	}
	
	public function setPackInfo($packInfo) {
		$this->packInfo = $packInfo;
		$this->apiParams["packInfo"] = $packInfo;
	}
	
	public function getPicInfo() {
		return $this->picInfo;
	}
	
	public function setPicInfo($picInfo) {
		$this->picInfo = $picInfo;
		$arr = array();
		foreach ($picInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["picInfo"] = $arr;
	}
	
	public function getReOrderItemId() {
		return $this->reOrderItemId;
	}
	
	public function setReOrderItemId($reOrderItemId) {
		$this->reOrderItemId = $reOrderItemId;
		$this->apiParams["reOrderItemId"] = $reOrderItemId;
	}
	
	public function getRetNum() {
		return $this->retNum;
	}
	
	public function setRetNum($retNum) {
		$this->retNum = $retNum;
		$this->apiParams["retNum"] = $retNum;
	}
	
	public function getRetReason() {
		return $this->retReason;
	}
	
	public function setRetReason($retReason) {
		$this->retReason = $retReason;
		$this->apiParams["retReason"] = $retReason;
	}
	
	public function getUseInfo() {
		return $this->useInfo;
	}
	
	public function setUseInfo($useInfo) {
		$this->useInfo = $useInfo;
		$this->apiParams["useInfo"] = $useInfo;
	}
	
	public function getRetDesc() {
		return $this->retDesc;
	}
	
	public function setRetDesc($retDesc) {
		$this->retDesc = $retDesc;
		$this->apiParams["retDesc"] = $retDesc;
	}
	
	public function getApiMethodName(){
		return 'suning.online.applyreturngoods.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->applyType, 'applyType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->orderItemId, 'orderItemId');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->reOrderItemId, 'reOrderItemId');
		RequestCheckUtil::checkNotNull($this->retReason, 'retReason');
	}
	
	public function getBizName(){
		return "createApplyreturngoods";
	}
	
}

class PicInfo {

	private $apiParams = array();
	
	private $picture;
	
	public function getPicture() {
		return $this->picture;
	}

	public function setPicture($picture) {
		$this->picture = $picture;
		$this->apiParams["picture"] = $picture;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>