<?php
/**
 * 苏宁开放平台接口 - 库存API - 库存修改(单个)
 *
 * $pack   suning.custom.inventory.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class InventoryModifyRequest extends SuningRequest
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
     * 新增仓库地址获取到的
     */
    private $invAddrId;

    /**
     * 需要维护的库存值
     */
    private $destInvNum;
	
	private $invType;
	
	public function setInvType($invType)
	{
		$this->invType = $invType;
		$this->apiParams["invType"] = $invType;
	}

	public function getInvType()
	{
		return $this->invType;
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

  	public function setInvAddrId($invAddrId)
	{
		$this->invAddrId = $invAddrId;
		$this->apiParams["invAddrId"] = $invAddrId;
	}

	public function getInvAddrId()
	{
		return $this->invAddrId;
	}

  	public function setDestInvNum($destInvNum)
	{
		$this->destInvNum = $destInvNum;
		$this->apiParams["destInvNum"] = $destInvNum;
	}

	public function getDestInvNum()
	{
		return $this->destInvNum;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.inventory.modify';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->destInvNum, 'destInvNum');
	}
	
	public function getBizName(){
		return "inventory";
	}
}
?>