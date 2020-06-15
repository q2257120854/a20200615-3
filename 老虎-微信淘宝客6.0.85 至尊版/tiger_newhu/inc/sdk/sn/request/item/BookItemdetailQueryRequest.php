<?php
/**
 * 苏宁开放平台接口 - 商品API - 获取我的商品详情信息（文化制品类商品）
 *
 * $pack   suning.custom.book.itemdetail.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-26
 */

class BookItemdetailQueryRequest extends SuningRequest
{
	/**
	 * 苏宁商品编码。非必填项，根据接口输入内容进行精确查询。可由平台业务-商品服务-获取我的商品库信息（文化制品类）接口获取
	 */
	private $productCode;

	/**
	 * 商家商品编码(注：苏宁商品编码和商家商品编码只能输入一个)
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
		return 'suning.custom.book.itemdetail.query';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
	}
	
	public function getBizName(){
		return "itemDetail";
	}
}
?>