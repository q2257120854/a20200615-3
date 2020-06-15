<?php
/**
 * 苏宁开放平台接口 - 商品API - 图片上传
 *
 * $pack   suning.custom.pic.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-29
 */

class PicAddRequest extends SuningUploadRequest
{
	private $apiParams = array();
    /**
     * 从图片流读取的字节数组,先base64加密然后去除空格回车作为字段，支持jpg、gif、bmp、jpeg及大写JPG、GIF、BMP、JPEG四种格式
     */
    private $picContent;

  	public function setPicContent($picContent)
	{
		$this->picContent = $picContent;
		$this->apiParams["picContent"] = $picContent;
	}

	public function getPicContent()
	{
		return $this->picContent;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.pic.add';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->picContent, 'picContent');
	}
	
	public function getBizName(){
		return "pic";
	}
}
?>