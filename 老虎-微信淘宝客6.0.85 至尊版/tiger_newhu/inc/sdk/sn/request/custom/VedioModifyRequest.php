<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-5-29
 */
class VedioModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $classifyName;
	
	/**
	 * 
	 */
	private $source;
	
	/**
	 * 
	 */
	private $type;
	
	/**
	 * 
	 */
	private $videoCode;
	
	/**
	 * 
	 */
	private $videoId;
	
	/**
	 * 
	 */
	private $videoName;
	
	/**
	 * 
	 */
	private $videoSize;
	
	/**
	 * 
	 */
	private $videoSizeKb;
	
	/**
	 * 
	 */
	private $videoUrlId;
	
	/**
	 * 
	 */
	private $videoUrlTv;
	
	public function getClassifyName() {
		return $this->classifyName;
	}
	
	public function setClassifyName($classifyName) {
		$this->classifyName = $classifyName;
		$this->apiParams["classifyName"] = $classifyName;
	}
	
	public function getSource() {
		return $this->source;
	}
	
	public function setSource($source) {
		$this->source = $source;
		$this->apiParams["source"] = $source;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getVideoCode() {
		return $this->videoCode;
	}
	
	public function setVideoCode($videoCode) {
		$this->videoCode = $videoCode;
		$this->apiParams["videoCode"] = $videoCode;
	}
	
	public function getVideoId() {
		return $this->videoId;
	}
	
	public function setVideoId($videoId) {
		$this->videoId = $videoId;
		$this->apiParams["videoId"] = $videoId;
	}
	
	public function getVideoName() {
		return $this->videoName;
	}
	
	public function setVideoName($videoName) {
		$this->videoName = $videoName;
		$this->apiParams["videoName"] = $videoName;
	}
	
	public function getVideoSize() {
		return $this->videoSize;
	}
	
	public function setVideoSize($videoSize) {
		$this->videoSize = $videoSize;
		$this->apiParams["videoSize"] = $videoSize;
	}
	
	public function getVideoSizeKb() {
		return $this->videoSizeKb;
	}
	
	public function setVideoSizeKb($videoSizeKb) {
		$this->videoSizeKb = $videoSizeKb;
		$this->apiParams["videoSizeKb"] = $videoSizeKb;
	}
	
	public function getVideoUrlId() {
		return $this->videoUrlId;
	}
	
	public function setVideoUrlId($videoUrlId) {
		$this->videoUrlId = $videoUrlId;
		$this->apiParams["videoUrlId"] = $videoUrlId;
	}
	
	public function getVideoUrlTv() {
		return $this->videoUrlTv;
	}
	
	public function setVideoUrlTv($videoUrlTv) {
		$this->videoUrlTv = $videoUrlTv;
		$this->apiParams["videoUrlTv"] = $videoUrlTv;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.vedio.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->type, 'type');
	}
	
	public function getBizName(){
		return "modifyVedio";
	}
	
}

?>