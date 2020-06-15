<?php
/**
 * 苏宁开放平台接口 - 库存API - 设置仓库地址属性
 *
 * $pack   suning.custom.invaddress.set
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class InvaddressSetRequest extends SuningRequest
{
    /**
     * 可从查询仓库地址（查询所有）中获取到
     */
    private $invAddrId;

    /**
     * 0代表默认发货地址、1代表默认退货地址、2代表既是默认发货地址也是默认退货地址、3代表其他地址；
     * 一个商户有且只能设置一个默认发货地址和一个默认退货地址；其他地址无限制
     */
    private $invAddrProp;

  	public function setInvAddrId($invAddrId)
	{
		$this->invAddrId = $invAddrId;
		$this->apiParams["invAddrId"] = $invAddrId;
	}

	public function getInvAddrId()
	{
		return $this->invAddrId;
	}

  	public function setInvAddrProp($invAddrProp)
	{
		$this->invAddrProp = $invAddrProp;
		$this->apiParams["invAddrProp"] = $invAddrProp;
	}

	public function getInvAddrProp()
	{
		return $this->invAddrProp;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.invaddress.set';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->invAddrId, 'invAddrId');
        RequestCheckUtil::checkNotNull($this->invAddrProp, 'invAddrProp');
        RequestCheckUtil::checkValueInItemList($this->invAddrProp, array(0, 1, 2, 3), 'invAddrProp');
	}
	
	public function getBizName(){
		return "invaddress";
	}
}
?>