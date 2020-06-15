<?php
/**
 * 苏宁开放平台接口 - 退货及退款API - 批量获取退货订单号
 *
 * $pack   suning.custom.batchrejectedOrd.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class BatchrejectedOrdQueryRequest extends SuningRequest
{
    /**
     * 查询交易创建开始时间。格式：yyyy-MM-dd HH:mm：ss
     */
    private $startTime;

    /**
     * 查询交易创建结束时间。格式：yyyy-MM-dd HH:mm：ss
     */
    private $endTime;

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParams["startTime"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParams["endTime"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.batchrejectedOrd.query';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
        RequestCheckUtil::checkDateValue($this->startTime, 'startTime', 2);
        RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
        RequestCheckUtil::checkDateValue($this->endTime, 'endTime', 2);
	}
	
	public function getBizName(){
		return "batchQueryRejectedOrd";
	}
}
?>