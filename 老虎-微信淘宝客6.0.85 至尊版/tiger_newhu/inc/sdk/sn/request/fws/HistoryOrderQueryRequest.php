<?php
/**
 * 苏宁开放平台接口 - 批量查询订单记录接口
 *
 * @author suning
 * @date   2015-6-8
 */
class HistoryOrderQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 服务代码。服务市场的服务的代码
	 */
	private $serverId;
	
	/**
	 * 收费项目代码。服务的子项目的代码
	 */
	private $chargeId;
	
	/**
	 * 开始时间。查询开始时间之后创建的订单，开始时间和结束时间必须成对出现，查询时间起止日期不能超过3个月
	 */
	private $startTime;
	
	/**
	 * 结束时间。查询结束时间之前创建的订单，开始时间和结束时间必须成对出现，查询时间起止日期不能超过3个月
	 */
	private $endTime;
	
	/**
	 * 订单类型。服务市场订单类型：1新订；2续订；3升级；不输入，则查询所有类型；
	 */
	private $orderCategory;
	
	
	
	public function getServerId() {
		return $this->serverId;
	}
	
	public function setServerId($serverId) {
		$this->serverId = $serverId;
		$this->apiParams["serverId"] = $serverId;
	}
	
	public function getChargeId() {
		return $this->chargeId;
	}
	
	public function setChargeId($chargeId) {
		$this->chargeId = $chargeId;
		$this->apiParams["chargeId"] = $chargeId;
	}
	
	public function getStartTime() {
		return $this->startTime;
	}
	
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}
	
	public function getEndTime() {
		return $this->endTime;
	}
	
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}
	
	public function getOrderCategory() {
		return $this->orderCategory;
	}
	
	public function setOrderCategory($orderCategory) {
		$this->orderCategory = $orderCategory;
		$this->apiParams["orderCategory"] = $orderCategory;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.fws.historyorder.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
	}
	
	public function getBizName(){
		return "queryHistoryOrder";
	}
	
}

?>