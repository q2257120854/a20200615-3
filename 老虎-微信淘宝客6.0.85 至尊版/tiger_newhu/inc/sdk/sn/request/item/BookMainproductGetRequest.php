<?php
/**
 * 苏宁开放平台接口 - 商品API - 查询商品内容纠错结果（文化制品类商品）
 *
 * $pack   suning.custom.book.mainproduct.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class BookMainproductGetRequest extends SuningRequest
{
	/**
	 * 申请编码，发起纠错申请后，返回的申请编码
	 */
	private $applyCode;

	public function setApplyCode($applyCode)
	{
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}

	public function getApplyCode()
	{
		return $this->applyCode;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.book.mainproduct.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->applyCode, 'applyCode');
	}
	
	public function getBizName(){
		return "mainProduct";
	}
}
?>