<?php
/**
 * 苏宁开放平台接口 - 商品API - 商品下架
 *
 * $pack   suning.custom.shelves.move
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class ShelvesMoveRequest extends SuningRequest
{
    /**
     * 苏宁商品编码。根据接口输入内容进行精确查询。仅可输入主商品编码。可对销售中的商品进行下架处理
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
		return 'suning.custom.shelves.move';
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