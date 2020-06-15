<?php
/**
 * 苏宁开放平台接口 - 商品API - 获取我的商品库信息
 *
 * $pack   suning.custom.item.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */

class ItemQueryRequest extends SelectSuningRequest
{
    /**
     * 品牌编码，可由平台业务-商品服务-获取商品品牌信息接口获取。
     * 非必填项，根据接口输入内容进行精确查询,不可输入中文。
     */
    private $brandCode;

	/**
	 * 采购目录编码。可由平台业务-商品服务-获取商品采购目录信息接口获取。
	 * 非必填项，根据接口输入内容进行精确查询,不可输入中文。
	 */
	private $categoryCode;

    /**
	 * 处理状态。1：正在处理；2：处理成功；3：处理失败；4：审核不通过
	 */
	private $status;
	
	/**
	 * 开始时间，格式：yyyy-MM-dd HH:mm:ss
	 */
	private $startTime;
	
	/**
	 * 结束时间，格式：yyyy-MM-dd HH:mm:ss
	 */
	private $endTime;
	
    public function getStartTime()
    {
        return $this->startTime;
    }
    
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParams["startTime"] = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParams["endTime"] = $endTime;
    }

    public function setBrandCode($brandCode)
	{
		$this->brandCode = $brandCode;
		$this->apiParams["brandCode"] = $brandCode;
	}

	public function getBrandCode()
	{
		return $this->brandCode;
	}

  	public function setCategoryCode($categoryCode)
	{
		$this->categoryCode = $categoryCode;
		$this->apiParams["categoryCode"] = $categoryCode;
	}

	public function getCategoryCode()
	{
		return $this->categoryCode;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParams["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.item.query';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		RequestCheckUtil::checkValueInItemList($this->status, array(1, 2, 3, 4), 'status');
		parent::check();
	}
	
	public function getBizName(){
		return "item";
	}
}
?>