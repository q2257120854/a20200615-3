<?php
/**
 * 苏宁开放平台接口 - 商品API - 商品上架
 *
 * $pack   suning.custom.shelves.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class ShelvesAddRequest extends SuningRequest
{
    /**
     * 苏宁商品编码。可通过平台业务-商品服务-获取我的商品库信息接口获取。根据接口输入内容进行精确查询。仅可输入主商品编码
     */
    private $productCode;

  	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.shelves.add';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
	}
	
	public function getBizName(){
		return "shelves";
	}
}
?>