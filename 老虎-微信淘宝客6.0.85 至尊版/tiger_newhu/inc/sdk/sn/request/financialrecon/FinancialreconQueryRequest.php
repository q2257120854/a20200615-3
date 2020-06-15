<?php
/**
 * 苏宁开放平台接口 - 财务API - 根据修改时间批量获取财务对账信息
 *
 * $pack   suning.custom.financialrecon.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class FinancialreconQueryRequest extends SelectSuningRequest
{
    /**
     * 查询修改开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
     */
    private $startTime;

    /**
     * 查询修改结束时间，必须大于修改开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss
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
		return 'suning.custom.financialrecon.query';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
		RequestCheckUtil::checkDateValue($this->startTime, 'startTime', 2);
		RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
		RequestCheckUtil::checkDateValue($this->endTime, 'endTime', 2);
		parent::check();
	}
	
	public function getBizName(){
		return "financialRecon";
	}
}
?>