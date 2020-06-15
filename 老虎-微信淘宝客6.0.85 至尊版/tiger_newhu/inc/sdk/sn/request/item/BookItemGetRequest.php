<?php
/**
 * 苏宁开放平台接口 - 商品API - 我的商品库信息精确查询（文化制品类商品）
 *
 * $pack   suning.custom.book.item.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class BookItemGetRequest extends SuningRequest
{
	/**
	 * 商品名称。非必填项。可输入中文。商品名称、苏宁商品编码、商家商品编码只能输入一个
	 */
	private $productName;

    /**
     * 苏宁商品编码。非必填项，根据接口输入内容进行精确查询。
     * 可由平台业务-商品服务-获取我的商品库信息（文化制品类）接口获取。
     * 商品名称、苏宁商品编码、商家商品编码只能输入一个
     */
    private $productCode;

    /**
     * 商家商品编码。非必填项，根据接口输入内容进行精确查询。
     * 商品名称、苏宁商品编码、商家商品编码只能输入一个
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
		return 'suning.custom.book.item.get';
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