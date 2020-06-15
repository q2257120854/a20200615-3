<?php
/**
 * 苏宁开放平台接口 - 商品API - 获取商品参数模板
 *
 * $pack   suning.custom.itemparameters.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */

class ItemparametersQueryRequest extends SelectSuningRequest
{
	/**
	 * 苏宁底层采购目录编码。必填项。可由平台业务-商品服务-获取商品采购目录信息接口获得
	 */
	private $categoryCode;
	
	private $targetChannel;
	
	public function setTargetChannel($targetChannel) {
		$this -> targetChannel = $targetChannel;
		$this->apiParams["targetChannel"] = $targetChannel;
	}

	public function getTargetChannel() {
		return $this -> targetChannel;
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

    public function getApiMethodName()
	{
		return 'suning.custom.itemparameters.query';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

	public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50) {
		RequestCheckUtil::checkNotNull($this->categoryCode, 'categoryCode');
        parent::check();
	}
	
	public function getBizName(){
		return "itemParameters";
	}
}
?>