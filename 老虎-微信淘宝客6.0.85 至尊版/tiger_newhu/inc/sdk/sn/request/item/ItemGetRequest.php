<?php
/**
 * 苏宁开放平台接口 - 商品API - 我的商品库信息精确查询
 *
 * $pack   suning.custom.item.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class ItemGetRequest extends SuningRequest
{
	/**
	 * 商品名称。可由平台业务-商品服务-获取我的商品库信息接口获取。
     * 非必填项，根据输入内容接口进行精确查询,可输入中文。
     * 商品名称、苏宁商品编码、商家商品编码有且只能输入一个
	 */
	private $productName;

    /**
     * 苏宁商品编码，主商品编码或子商品编码。可由平台业务-商品服务-获取我的商品库信息接口获取。
     * 非必填项，根据接口输入内容进行精确查询。不可输入中文。
     * 商品名称、苏宁商品编码、商家商品编码有且只能输入一个
     */
    private $productCode;

    /**
     * 商家商品编码。非必填项，根据接口输入内容进行精确查询。不可输入中文。
     * 商品名称、苏宁商品编码、商家商品编码有且只能输入一个
     */
    private $itemCode;
	
	private $cmTitle;
	
	public function setCmTitle($cmTitle) {
		$this -> cmTitle = $cmTitle;
		$this->apiParams["cmTitle"] = $cmTitle;
	}

	public function getCmTitle() {
		return $this -> cmTitle;
	}

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
		return 'suning.custom.item.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
	}
	
	public function getBizName(){
		return "item";
	}
}
?>