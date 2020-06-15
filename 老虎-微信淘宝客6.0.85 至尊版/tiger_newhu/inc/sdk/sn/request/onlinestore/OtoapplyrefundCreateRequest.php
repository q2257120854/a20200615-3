<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class OtoapplyrefundCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $applyType;
	
	/**
	 * 
	 */
	private $operateTime;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemIdList;
	
	/**
	 * 
	 */
	private $orderPort;
	
	/**
	 * 
	 */
	private $pictureURL;
	
	/**
	 * 
	 */
	private $reasonDes;
	
	/**
	 * 
	 */
	private $reasonName;
	
	/**
	 * 
	 */
	private $retReasonCode;
	
	public function getApplyType() {
		return $this->applyType;
	}
	
	public function setApplyType($applyType) {
		$this->applyType = $applyType;
		$this->apiParams["applyType"] = $applyType;
	}
	
	public function getOperateTime() {
		return $this->operateTime;
	}
	
	public function setOperateTime($operateTime) {
		$this->operateTime = $operateTime;
		$this->apiParams["operateTime"] = $operateTime;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemIdList() {
		return $this->orderItemIdList;
	}
	
	public function setOrderItemIdList($orderItemIdList) {
		$this->orderItemIdList = $orderItemIdList;
		$arr = array();
		foreach ($orderItemIdList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemIdList"] = $arr;
	}
	
	public function getOrderPort() {
		return $this->orderPort;
	}
	
	public function setOrderPort($orderPort) {
		$this->orderPort = $orderPort;
		$this->apiParams["orderPort"] = $orderPort;
	}
	
	public function getPictureURL() {
		return $this->pictureURL;
	}
	
	public function setPictureURL($pictureURL) {
		$this->pictureURL = $pictureURL;
		$this->apiParams["pictureURL"] = $pictureURL;
	}
	
	public function getReasonDes() {
		return $this->reasonDes;
	}
	
	public function setReasonDes($reasonDes) {
		$this->reasonDes = $reasonDes;
		$this->apiParams["reasonDes"] = $reasonDes;
	}
	
	public function getReasonName() {
		return $this->reasonName;
	}
	
	public function setReasonName($reasonName) {
		$this->reasonName = $reasonName;
		$this->apiParams["reasonName"] = $reasonName;
	}
	
	public function getRetReasonCode() {
		return $this->retReasonCode;
	}
	
	public function setRetReasonCode($retReasonCode) {
		$this->retReasonCode = $retReasonCode;
		$this->apiParams["retReasonCode"] = $retReasonCode;
	}
	
	public function getApiMethodName(){
		return 'suning.onlinestore.applyrefund.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->applyType, 'applyType');
		RequestCheckUtil::checkNotNull($this->operateTime, 'operateTime');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
		RequestCheckUtil::checkNotNull($this->reasonName, 'reasonName');
		RequestCheckUtil::checkNotNull($this->retReasonCode, 'retReasonCode');
	}
	
	public function getBizName(){
		return "createOtoapplyrefund";
	}
	
}

class OrderItemIdList {

	private $apiParams = array();
	
	private $orderItemId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>