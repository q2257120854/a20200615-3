<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-4
 */
class VideobatchReceiveRequest  extends SuningRequest{
	
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
	private $videoList;
	
	/**
	 * 
	 */
	private $videoType;
	
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
	
	public function getVideoList() {
		return $this->videoList;
	}
	
	public function setVideoList($videoList) {
		$this->videoList = $videoList;
		$arr = array();
		foreach ($videoList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["videoList"] = $arr;
	}
	
	public function getVideoType() {
		return $this->videoType;
	}
	
	public function setVideoType($videoType) {
		$this->videoType = $videoType;
		$this->apiParams["videoType"] = $videoType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.videobatch.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->source, 'source');
		RequestCheckUtil::checkNotNull($this->type, 'type');
		RequestCheckUtil::checkNotNull($this->videoType, 'videoType');
	}
	
	public function getBizName(){
		return "receiveVideobatch";
	}
	
}

class VideoList {

	private $apiParams = array();
	
	private $classifyName;
	
	private $duration;
	
	private $videoCode;
	
	private $videoId;
	
	private $videoName;
	
	private $videoSize;
	
	private $videoSizeKb;
	
	private $videoUrlId;
	
	private $videoUrlTv;
	
	private $widthHeight;
	
	public function getClassifyName() {
		return $this->classifyName;
	}

	public function setClassifyName($classifyName) {
		$this->classifyName = $classifyName;
		$this->apiParams["classifyName"] = $classifyName;
	}
	
	public function getDuration() {
		return $this->duration;
	}

	public function setDuration($duration) {
		$this->duration = $duration;
		$this->apiParams["duration"] = $duration;
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
	
	public function getWidthHeight() {
		return $this->widthHeight;
	}

	public function setWidthHeight($widthHeight) {
		$this->widthHeight = $widthHeight;
		$this->apiParams["widthHeight"] = $widthHeight;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>