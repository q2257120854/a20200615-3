<?php
/**
 * 苏宁开放平台接口 - 退货及退款API - 根据订单修改时间批量获取退货订单信息
 *
 * $pack   suning.custom.rejectedord.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class RejectedordQueryRequest extends SelectSuningRequest
{
    /**
     * 查询修改开始时间(修改时间跨度不能大于一天)。格式:yyyy-MM-dd HH:mm:ss
     */
    private $startTime;

    /**
     * 查询修改结束时间，必须大于修改开始时间(修改时间跨度不能大于一天)，格式:yyyy-MM-dd HH:mm:ss
     */
    private $endTime;

    /**
     * C030:客户申请退货;
     * C040:商家同意退货;C041:商家拒绝退货;
     * C050:商家同意退款;C051:商家拒绝退款;C055:商家延期退款;
     * C060:客户寄货;
     * C070:系统关闭退货请求;C075:客服关闭退货;C080:客服叫停;
     * C110:自动退款;C130:退款成功;C131:退款失败
     */
    private $orderLineStatus;

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

	public function setOrderLineStatus($orderLineStatus)
	{
		$this->orderLineStatus = $orderLineStatus;
		$this->apiParams["orderLineStatus"] = $orderLineStatus;
	}

	public function getOrderLineStatus()
	{
		return $this->orderLineStatus;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.rejectedord.query';
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
		RequestCheckUtil::checkNotNull($this->orderLineStatus, 'endTime');
		RequestCheckUtil::checkValueInItemList($this->orderLineStatus, array('C030','C040','C041','C050','C051','C055','C060','C070','C075','C080','C110','C130','C131'), 'endTime');
		$pageNo = !empty($this -> pageNo) ? $this->pageNo : $pageNoMin;
		$pageSize = !empty($this -> pageSize) ? $this->pageSize : $pageSizeMin;
		RequestCheckUtil::checkNotNull($pageNo,'pageNo');
		RequestCheckUtil::checkNotNull($pageSize,'pageSize');
		parent::check();
	}
	
	public function getBizName(){
		return "batchQueryRejected";
	}
}
?>