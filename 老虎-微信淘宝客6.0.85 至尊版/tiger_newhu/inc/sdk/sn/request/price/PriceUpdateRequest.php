<?php
/**
 * 苏宁开放平台接口 - 价格API - 价格更新(单个)
 *
 * $pack   suning.custom.price.update
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class PriceUpdateRequest extends SuningRequest
{
    /**
     * 苏宁商品编码
     */
    private $productCode;

    /**
     * 商家商品编码。苏宁商品编码、商家商品编码必须有一个有值。
     * 如果填了商家商品编码则按照商家商品编码搜索出对应的苏宁商品编码并更新价格。
     * 如果两者都填写，则以苏宁商品编码为准
     */
    private $itemCode;

    /**
     * 价格范围：0.01-9,999,999,999,999.99；精确到2位小数；单位：元。
     * 如31.55，表示：35元5角5分。需要在正确的价格区间内
     */
    private $price;

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

  	public function setPrice($price)
	{
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.price.update';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->price, 'price');
        RequestCheckUtil::checkFormatNumber($this->price, 'price');
	}
	
	public function getBizName(){
		return "updatePrice";
	}
}
?>