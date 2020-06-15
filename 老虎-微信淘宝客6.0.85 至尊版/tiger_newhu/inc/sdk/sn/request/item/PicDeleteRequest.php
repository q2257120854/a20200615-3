<?php
/**
 * 苏宁开放平台接口 - 商品API - 图片删除
 *
 * $pack   suning.custom.pic.delete
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class PicDeleteRequest extends SuningRequest
{
    /**
     * 要删除的图片url
     */
    private $picUrl;

  	public function setPicUrl($picUrl)
	{
		$this->picUrl = $picUrl;
		$this->apiParams["picUrl"] = $picUrl;
	}

	public function getPicUrl()
	{
		return $this->picUrl;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.pic.delete';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->picUrl, 'picUrl');
	}
	
	public function getBizName(){
		return "pic";
	}
}
?>