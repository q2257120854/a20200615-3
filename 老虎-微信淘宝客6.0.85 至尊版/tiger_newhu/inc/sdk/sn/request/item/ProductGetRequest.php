<?php
/**
 * 苏宁开放平台接口 - 商品API - 苏宁产品信息精确查询
 *
 * $pack   suning.custom.product.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class ProductGetRequest extends SuningRequest
{
	/**
	 * 商品名称，可由平台业务-商品服务-获取苏宁产品信息接口获取。
     * 非必填项，根据接口输入内容进行精确查询,可输入中文。商品名称和苏宁商品编码至少输入一个
	 */
	private $productName;

    /**
     * 苏宁商品编码。可由平台业务-商品服务-获取苏宁产品信息接口获取。
     * 非必填项，根据接口输入内容进行精确查询。不可输入中文。商品名称和苏宁商品编码至少输入一个
     */
    private $productCode;

	public function setProductName($productName)
	{
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}

	public function getProductName()
	{
		return $this->productName;
	}

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
		return 'suning.custom.product.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
	}
	
	public function getBizName(){
		return "product";
	}
}
?>