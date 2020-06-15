<?php
/**
 * 苏宁开放平台接口 - 批量获取退货订单号
 *
 * @author suning
 * @date   2016-3-25
 */
class RejectedOrderCodeQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 查询开始时间。查询订单付款完成开始时间。格式：yyyy-MM-dd HH:mm：ss。 开始时间与结束时间间隔不超过30天
	 */
	private $startTime;
	
	/**
	 * 查询结束时间。查询订单付款完成结束时间格式：yyyy-MM-dd HH:mm：ss。 开始时间与结束时间间隔不超过30天
	 */
	private $endTime;
	
	
	
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
	
	
	
	public function getApiMethodName(){
		return 'suning.supply.rejectedordercode.query';
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
		return "queryRejectedOrderCode";
	}
	
}

?>