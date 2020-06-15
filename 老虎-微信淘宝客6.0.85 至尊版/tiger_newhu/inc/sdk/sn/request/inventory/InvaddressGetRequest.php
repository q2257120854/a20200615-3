<?php
/**
 * 苏宁开放平台接口 - 库存API - 查询仓库地址(查询单个)
 *
 * $pack   suning.custom.invaddress.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class InvaddressGetRequest extends SuningRequest
{
    /**
     * 可从查询仓库地址（查询所有）中获取到
     */
    private $invAddrId;

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
		return 'suning.custom.invaddress.get';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->invAddrId, 'invAddrId');
	}
	
	public function getBizName(){
		return "invaddress";
	}
}
?>