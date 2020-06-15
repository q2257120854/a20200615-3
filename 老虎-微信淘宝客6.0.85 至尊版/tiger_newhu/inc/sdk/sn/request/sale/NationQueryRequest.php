<?php
/**
 * 苏宁开放平台接口 - 销售准备API - 国家代码获取
 *
 * $pack   suning.custom.nation.query
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-06-03
 */

class NationQueryRequest extends SuningRequest
{
    /**
     * 国家名称。仅可输入中文国家名称，根据接口输入内容进行模糊查询
     */
    private $nationName;

  	public function setNationName($nationName)
	{
		$this->nationName = $nationName;
		$this->apiParams["nationName"] = $nationName;
	}

	public function getNationName()
	{
		return $this->nationName;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.nation.query';
	}

	/**
	 * 根据请求方式，生成相应请求报文
	 * @param type 请求方式(json或xml)
	 */
	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->nationName, 'nationName');
	}
	
	public function getBizName(){
		return "nation";
	}

}
?>