<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-10-19
 */
class PromUnitManageAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $promotionUnitId;
	
	/**
	 * 
	 */
	private $promotionUnitType;
	
	/**
	 * 
	 */
	private $operationType;
	
	public function getPromotionUnitId() {
		return $this->promotionUnitId;
	}
	
	public function setPromotionUnitId($promotionUnitId) {
		$this->promotionUnitId = $promotionUnitId;
		$this->apiParams["promotionUnitId"] = $promotionUnitId;
	}
	
	public function getPromotionUnitType() {
		return $this->promotionUnitType;
	}
	
	public function setPromotionUnitType($promotionUnitType) {
		$this->promotionUnitType = $promotionUnitType;
		$this->apiParams["promotionUnitType"] = $promotionUnitType;
	}
	
	public function getOperationType() {
		return $this->operationType;
	}
	
	public function setOperationType($operationType) {
		$this->operationType = $operationType;
		$this->apiParams["operationType"] = $operationType;
	}
	
	public function getApiMethodName(){
		return 'suning.advertise.promunitmanage.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->promotionUnitId, 'promotionUnitId');
		RequestCheckUtil::checkNotNull($this->promotionUnitType, 'promotionUnitType');
		RequestCheckUtil::checkNotNull($this->operationType, 'operationType');
	}
	
	public function getBizName(){
		return "addPromUnitManage";
	}
	
}

?>