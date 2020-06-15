<?php
/**
 * 苏宁开放平台接口 - 库存API - 修改平行仓仓库库存（单个）
 *
 * $pack   suning.custom.parallelinventory.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class ParallelinventoryModifyRequest extends SuningRequest
{
    /**
     * 商家平行仓仓库编码
     */
    private $invCode;

    /**
     * 苏宁商品编码
     */
    private $productCode;

    /**
     * 商家商品编码
     */
    private $itemCode;

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

  	public function setInvCode($invCode)
	{
		$this->invCode = $invCode;
		$this->apiParams["invCode"] = $invCode;
	}

	public function getInvCode()
	{
		return $this->invCode;
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
		return 'suning.custom.parallelinventory.modify';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->invCode, 'invCode');
        RequestCheckUtil::checkNotNull($this->destInvNum, 'destInvNum');
	}
	
	public function getBizName(){
		return "parallelInventory";
	}
}
?>