<?php
/**
 * 苏宁开放平台接口 - 库存API - 库存查询(单个)
 *
 * $pack   suning.custom.inventory.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class InventoryGetRequest extends SuningRequest
{
    /**
     * 苏宁商品编码
     */
    private $productCode;

    /**
     * 商家商品编码。苏宁商品编码、商家商品编码必须有一个有值，
     * 如果填了商家商品编码则按照商家商品编码搜索出对应的苏宁商品编码并查询库存。
     * 如果两者都填写，则以苏宁商品编码为准
     */
    private $itemCode;

    /**
     * 可从查询仓库地址（查询所有）中获取到
     */
    private $invAddrId;

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

  	public function setInvAddrId($invAddrId)
	{
		$this->invAddrId = $invAddrId;
		$this->apiParams["invAddrId"] = $invAddrId;
	}

	public function getInvAddrId()
	{
		return $this->invAddrId;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.inventory.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
	}
	
	public function getBizName(){
		return "inventory";
	}
}
?>