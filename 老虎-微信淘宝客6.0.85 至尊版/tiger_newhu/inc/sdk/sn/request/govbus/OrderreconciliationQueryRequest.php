<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-15
 */
class OrderreconciliationQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 
	 */
	private $dateType;
	
	/**
	 * 
	 */
	private $endDate;
	
	/**
	 * 
	 */
	private $orderItemStatus;
	
	
	
	/**
	 * 
	 */
	private $queryType;
	
	/**
	 * 
	 */
	private $startDate;
	
	/**
	 * 
	 */
	private $sysCode;
	
	/**
	 * 
	 */
	private $uid;
	
	public function getDateType() {
		return $this->dateType;
	}
	
	public function setDateType($dateType) {
		$this->dateType = $dateType;
		$this->apiParams["dateType"] = $dateType;
	}
	
	public function getEndDate() {
		return $this->endDate;
	}
	
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
		$this->apiParams["endDate"] = $endDate;
	}
	
	public function getOrderItemStatus() {
		return $this->orderItemStatus;
	}
	
	public function setOrderItemStatus($orderItemStatus) {
		$this->orderItemStatus = $orderItemStatus;
		$arr = array();
		foreach ($orderItemStatus as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemStatus"] = $arr;
	}
	
	
	
	public function getQueryType() {
		return $this->queryType;
	}
	
	public function setQueryType($queryType) {
		$this->queryType = $queryType;
		$this->apiParams["queryType"] = $queryType;
	}
	
	public function getStartDate() {
		return $this->startDate;
	}
	
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		$this->apiParams["startDate"] = $startDate;
	}
	
	public function getSysCode() {
		return $this->sysCode;
	}
	
	public function setSysCode($sysCode) {
		$this->sysCode = $sysCode;
		$this->apiParams["sysCode"] = $sysCode;
	}
	
	public function getUid() {
		return $this->uid;
	}
	
	public function setUid($uid) {
		$this->uid = $uid;
		$this->apiParams["uid"] = $uid;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.orderreconciliation.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->dateType, 'dateType');
		RequestCheckUtil::checkNotNull($this->endDate, 'endDate');
		RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
		RequestCheckUtil::checkNotNull($this->startDate, 'startDate');
		RequestCheckUtil::checkNotNull($this->sysCode, 'sysCode');
	}
	
	public function getBizName(){
		return "queryOrderreconciliation";
	}
	
}

class OrderItemStatus {

	private $apiParams = array();
	
	private $itemStatus;
	
	public function getItemStatus() {
		return $this->itemStatus;
	}

	public function setItemStatus($itemStatus) {
		$this->itemStatus = $itemStatus;
		$this->apiParams["itemStatus"] = $itemStatus;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>