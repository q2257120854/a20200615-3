<?php
/**
 * 苏宁开放平台接口 - 交易API - 批量获取订单号
 *
 * @author 14042058
 * @date   2014-6-4
 */
class OrdercodeQueryRequest extends SuningRequest{
	/**
	 * 查询交易创建开始时间
	 */
	private $startTime;
	/**
	 * 查询交易结束开始时间
	 */
	private $endTime;
	/**
	 * 订单状态（10待发货，20已发货，21部分发货，30交易成功 ，40交易关闭）
	 */
	private $orderStatus;
	/**
	 * @return the $startTime
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * @return the $endTime
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * @return the $orderStatus
	 */
	public function getOrderStatus() {
		return $this->orderStatus;
	}

	/**
	 * @param field_type $startTime
	 */
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}

	/**
	 * @param field_type $endTime
	 */
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}

	/**
	 * @param field_type $orderStatus
	 */
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getApiMethodName()
	{
		return 'suning.custom.ordercode.query';
	}
	
	public function getApiParams()
	{
		return $this->apiParams;
	}
	
	public function check()
	{
		//非空校验
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		//日期格式校验
		RequestCheckUtil::checkDate($this->startTime, 'startTime');
		RequestCheckUtil::checkDate($this->endTime, 'endTime');
		//日期比较
		RequestCheckUtil::checkDateCompare($this->startTime, $this->endTime);
		//日期间隔校验
		RequestCheckUtil::checkDateT($this->startTime, $this->endTime, 30);
		if(!RequestCheckUtil::checkEmpty($this->orderStatus)){
			$array = array("10","20","21","30","40");
			RequestCheckUtil::checkValueInItemList($this->orderStatus, $array, "orderStatus");
			unset($array);
		}
		
	
	}

	public function getBizName(){
		return "orderCodeQuery";
	}
}

?>