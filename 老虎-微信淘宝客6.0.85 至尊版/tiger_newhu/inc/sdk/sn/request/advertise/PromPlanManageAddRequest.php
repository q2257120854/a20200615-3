<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromPlanManageAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionId;
	
	/**
	 * 
	 */
	private $promotionType;
	
	/**
	 * 
	 */
	private $operationType;
	
	public function getPromotionId() {
		return $this->promotionId;
	}
	
	public function setPromotionId($promotionId) {
		$this->promotionId = $promotionId;
		$this->apiParams["promotionId"] = $promotionId;
	}
	
	public function getPromotionType() {
		return $this->promotionType;
	}
	
	public function setPromotionType($promotionType) {
		$this->promotionType = $promotionType;
		$this->apiParams["promotionType"] = $promotionType;
	}
	
	public function getOperationType() {
		return $this->operationType;
	}
	
	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->apiParams["operationType"] = $operationType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promplanmanage.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionId, 'promotionId');
		RequestCheckUtil::checkNotNull($this->promotionType, 'promotionType');
		RequestCheckUtil::checkNotNull($this->operationType, 'operationType');
	}
	
	public function getBizName(){
		return "addPromPlanManage";
	}
	
}

?>