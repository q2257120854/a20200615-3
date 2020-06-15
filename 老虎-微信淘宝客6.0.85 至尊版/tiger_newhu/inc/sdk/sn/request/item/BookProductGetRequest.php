<?php
/**
 * 苏宁开放平台接口 - 商品API - 文化制品类苏宁产品信息精确查询
 *
 * $pack   suning.custom.book.product.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class BookProductGetRequest extends SuningRequest
{
	/**
	 * 商品名称。非必填项，根据接口输入内容进行精确查询。苏宁商品编码、商品名称、ISBN号至少输入一个
	 */
	private $productName;

    /**
     * 苏宁商品编码。非必填项，可由平台业务-商品服务-获取苏宁产品信息接口获取。
     * 苏宁商品编码、商品名称、ISBN号至少输入一个
     */
    private $productCode;

    /**
     * 中文图书、外文图书、音像、期刊杂志的ISBN号。非必填项，根据接口输入内容进行精确查询。
     * 文化制品类商家可通过ISBN号查询。苏宁商品编码、商品名称、ISBN号至少输入一个
     */
    private $isbnCode;

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

  	public function setIsbnCode($isbnCode)
	{
		$this->isbnCode = $isbnCode;
		$this->apiParams["isbnCode"] = $isbnCode;
	}

	public function getIsbnCode()
	{
		return $this->isbnCode;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.book.product.get';
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