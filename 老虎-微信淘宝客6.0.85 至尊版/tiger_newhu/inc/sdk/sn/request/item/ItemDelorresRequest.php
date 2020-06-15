<?php
/**
 * 苏宁开放平台接口 - 商品API - 商品删除与恢复
 *
 * $pack   suning.custom.item.delorres
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class ItemDelorresRequest extends SuningRequest
{
	/**
	 * 苏宁商品编码。苏宁商品编码与商家商品编码两者必填一个。如果两者都填则以苏宁商品编码为准
	 */
	private $productCode;

	/**
	 * 商家商品编码。苏宁商品编码与商家商品编码两者必填一个。如果两者都填则以苏宁商品编码为准。
	 */
	private $itemCode;

	/**
	 * 0代表删除，1代表恢复
	 */
	private $manageFlag;

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

	public function setManageFlag($manageFlag)
	{
		$this->manageFlag = $manageFlag;
		$this->apiParams["manageFlag"] = $manageFlag;
	}

	public function getManageFlag()
	{
		return $this->manageFlag;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.item.delorres';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->manageFlag, 'manageFlag');
        RequestCheckUtil::checkValueInItemList($this->manageFlag, array(0, 1), 'manageFlag');
	}
	
	public function getBizName(){
		return "item";
	}
}
?>