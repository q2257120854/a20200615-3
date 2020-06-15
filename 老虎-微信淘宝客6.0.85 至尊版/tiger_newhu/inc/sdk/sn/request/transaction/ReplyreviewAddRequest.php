<?php
/**
 * 苏宁开放平台接口 - 商家回复订单评价
 *
 * @author suning
 * @date   2014-9-25
 */
class ReplyreviewAddRequest  extends SuningRequest{
	
	/**
	 * 苏宁订单号
	 */
	private $orderCode;
	
	/**
	 * 苏宁商品编码
	 */
	private $productCode;
	
	/**
	 * 商家回复
	 */
	private $replyContent;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getReplyContent() {
		return $this->replyContent;
	}
	
	public function setReplyContent($replyContent) {
		$this->replyContent = $replyContent;
		$this->apiParams["replyContent"] = $replyContent;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.replyreview.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->replyContent, 'replyContent');
	}
	
	public function getBizName(){
		return "addReplyReview";
	}
	
}

?>