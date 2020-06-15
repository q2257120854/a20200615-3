<?php
/**
 * 苏宁开放平台接口 - 商家回复订单评价
 *
 * @author suning
 * @date   2016-5-4
 */
class ReplyCmReviewAddRequest  extends SuningRequest{
	
	/**
	 * 商品评价ID。商品评价ID
	 */
	private $commodityReviewId;
	
	/**
	 * 设备类型。设备类型1- PC 5-android phone 6-iphone 7-ipad 8-android pad 9-wap 10-win phone 11-win8 12 android TV
	 */
	private $deceiveType;
	
	/**
	 * 调用方。调用方。默认:official
	 */
	private $type;
	
	/**
	 * 回复内容。回复内容。
	 */
	private $replyContent;
	
	public function getCommodityReviewId() {
		return $this->commodityReviewId;
	}
	
	public function setCommodityReviewId($commodityReviewId) {
		$this->commodityReviewId = $commodityReviewId;
		$this->apiParams["commodityReviewId"] = $commodityReviewId;
	}
	
	public function getDeceiveType() {
		return $this->deceiveType;
	}
	
	public function setDeceiveType($deceiveType) {
		$this->deceiveType = $deceiveType;
		$this->apiParams["deceiveType"] = $deceiveType;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function setType($type) {
		$this->type = $type;
		$this->apiParams["type"] = $type;
	}
	
	public function getReplyContent() {
		return $this->replyContent;
	}
	
	public function setReplyContent($replyContent) {
		$this->replyContent = $replyContent;
		$this->apiParams["replyContent"] = $replyContent;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.replycmreview.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->commodityReviewId, 'commodityReviewId');
		RequestCheckUtil::checkNotNull($this->deceiveType, 'deceiveType');
		RequestCheckUtil::checkNotNull($this->type, 'type');
		RequestCheckUtil::checkNotNull($this->replyContent, 'replyContent');
	}
	
	public function getBizName(){
		return "addReplyCmReview";
	}
	
}

?>