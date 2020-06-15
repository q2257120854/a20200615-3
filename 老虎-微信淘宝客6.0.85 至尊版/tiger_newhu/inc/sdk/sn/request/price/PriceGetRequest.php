<?php
/**
 * 苏宁开放平台接口 - 价格API - 价格查询(单个)
 *
 * $pack   suning.custom.price.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class PriceGetRequest extends SuningRequest
{
    /**
     * 苏宁商品编码
     */
    private $productCode;

    /**
     * 商家商品编码。苏宁商品编码、商家商品编码必须有一个有值。
     * 如果填了商家商品编码则按照商家商品编码搜索出对应的苏宁商品编码并查询价格。
     * 如果两者都填写，则以苏宁商品编码为准
     */
    private $itemCode;

  	public function setProductCode($productCode)
	{
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}

	public function getProductCode()
	{
		return $this->productCode;
	}

  	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.price.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
	}
	
	public function getBizName(){
		return "getPrice";
	}
}
?>