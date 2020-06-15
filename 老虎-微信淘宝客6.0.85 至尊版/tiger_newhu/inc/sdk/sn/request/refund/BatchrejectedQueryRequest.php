<?php

/**
 * 苏宁开放平台接口 - 退货及退款API - 批量获取退货信息
 *
 * $pack   suning.custom.batchrejected
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */
class BatchrejectedQueryRequest extends SelectSuningRequest {

	/**
	 * 查询交易创建开始时间。格式：yyyy-MM-dd HH:mm：ss
	 */
	private $startTime;

	/**
	 * 查询交易创建结束时间。格式：yyyy-MM-dd HH:mm：ss
	 */
	private $endTime;

	public function setStartTime($startTime) {
		$this -> startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}

	public function getStartTime() {
		return $this -> startTime;
	}

	public function setEndTime($endTime) {
		$this -> endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}

	public function getEndTime() {
		return $this -> endTime;
	}

	public function getApiMethodName() {
		return 'suning.custom.batchrejected.query';
	}

	public function getApiParams() {
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		RequestCheckUtil::checkNotNull($this -> startTime, 'startTime');
		RequestCheckUtil::checkDateValue($this -> startTime, 'startTime', 2);
		RequestCheckUtil::checkNotNull($this -> endTime, 'endTime');
		RequestCheckUtil::checkDateValue($this -> endTime, 'endTime', 2);
		$pageNo = ! empty($this -> pageNo) ? $this -> pageNo : $pageNoMin;
		$pageSize = ! empty($this -> pageSize) ? $this -> pageSize : $pageSizeMin;
		RequestCheckUtil::checkNotNull($pageNo, 'pageNo');
		RequestCheckUtil::checkNotNull($pageSize, 'pageSize');
		parent::check();
	}
	
	public function getBizName(){
		return "batchQueryRejected";
	}
}
?>