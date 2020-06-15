<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-11-16
 */
class UpdatevideomesModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelid;
	
	/**
	 * 
	 */
	private $duration;
	
	/**
	 * 
	 */
	private $msg;
	
	/**
	 * 
	 */
	private $transcode;
	
	/**
	 * 
	 */
	private $widthheight;
	
	/**
	 * 
	 */
	private $imgurl;
	
	public function getChannelid() {
		return $this->channelid;
	}
	
	public function setChannelid($channelid) {
		$this->channelid = $channelid;
		$this->apiParams["channelid"] = $channelid;
	}
	
	public function getDuration() {
		return $this->duration;
	}
	
	public function setDuration($duration) {
		$this->duration = $duration;
		$this->apiParams["duration"] = $duration;
	}
	
	public function getMsg() {
		return $this->msg;
	}
	
	public function setMsg($msg) {
		$this->msg = $msg;
		$this->apiParams["msg"] = $msg;
	}
	
	public function getTranscode() {
		return $this->transcode;
	}
	
	public function setTranscode($transcode) {
		$this->transcode = $transcode;
		$this->apiParams["transcode"] = $transcode;
	}
	
	public function getWidthheight() {
		return $this->widthheight;
	}
	
	public function setWidthheight($widthheight) {
		$this->widthheight = $widthheight;
		$this->apiParams["widthheight"] = $widthheight;
	}
	
	public function getImgurl() {
		return $this->imgurl;
	}
	
	public function setImgurl($imgurl) {
		$this->imgurl = $imgurl;
		$this->apiParams["imgurl"] = $imgurl;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.updatevideomes.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelid, 'channelid');
		RequestCheckUtil::checkNotNull($this->duration, 'duration');
		RequestCheckUtil::checkNotNull($this->msg, 'msg');
		RequestCheckUtil::checkNotNull($this->transcode, 'transcode');
	}
	
	public function getBizName(){
		return "modifyUpdatevideomes";
	}
	
}

?>