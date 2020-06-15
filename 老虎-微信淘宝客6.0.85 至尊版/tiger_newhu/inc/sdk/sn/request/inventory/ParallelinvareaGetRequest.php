<?php
/**
 * 苏宁开放平台接口 - 库存API - （平行仓模式）查询仓库覆盖范围
 *
 * $pack   suning.custom.parallelinvarea.get
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class ParallelinvareaGetRequest extends SuningRequest
{
    /**
     * 商家创建仓库时自行定义的仓库编码
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
		return 'suning.custom.parallelinvarea.get';
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
		return "parallelInvarea";
	}
}
?>