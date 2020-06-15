<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromotionDiscountModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $mobileTerminalDiscount;
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getMobileTerminalDiscount() {
		return $this->mobileTerminalDiscount;
	}
	
	public function setMobileTerminalDiscount($mobileTerminalDiscount) {
		$this->mobileTerminalDiscount = $mobileTerminalDiscount;
		$this->apiParams["mobileTerminalDiscount"] = $mobileTerminalDiscount;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promotiondiscount.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
	}
	
	public function getBizName(){
		return "modifyPromotionDiscount";
	}
	
}

?>