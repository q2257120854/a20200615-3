<?php
/**
 * 苏宁开放平台接口 - 商品API - 获取苏宁产品详情信息
 *
 * $pack   suning.custom.productdetail.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */

class ProductdetailQueryRequest extends SuningRequest
{
	/**
	 * 商品编码。可由平台业务-商品服务-获取苏宁产品信息接口获取。根据接口输入内容进行精确查询。仅可输入主商品编码，不可输入子商品编码
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
		return 'suning.custom.productdetail.query';
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
		return "productDetail";
	}
}
?>