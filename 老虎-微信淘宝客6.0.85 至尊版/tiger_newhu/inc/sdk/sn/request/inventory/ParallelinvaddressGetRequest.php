<?php
/**
 * 苏宁开放平台接口 - 库存API - 查询单个仓库（平行仓模式）
 *
 * $pack   suning.custom.parallelinvaddress.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class ParallelinvaddressGetRequest extends SuningRequest
{
    /**
     * 仓库编码。由商家自行编辑的编码
     */
    private $invCode;

  	public function setInvCode($invCode)
	{
		$this->invCode = $invCode;
		$this->apiParams["invCode"] = $invCode;
	}

	public function getInvCode()
	{
		return $this->invCode;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.parallelinvaddress.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->invCode, 'invCode');
	}
	
	public function getBizName(){
		return "parallelInvaddress";
	}
}
?>