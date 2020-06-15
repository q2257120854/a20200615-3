<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class SendgoodsModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deliveryTime;
	
	/**
	 * 
	 */
	private $expressCompanyCode;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $operateStyle;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $sdcsOrderId;
	
	public function getDeliveryTime() {
		return $this->deliveryTime;
	}
	
	public function setDeliveryTime($deliveryTime) {
		$this->deliveryTime = $deliveryTime;
		$this->apiParams["deliveryTime"] = $deliveryTime;
	}
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}
	
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getOperateStyle() {
		return $this->operateStyle;
	}
	
	public function setOperateStyle($operateStyle) {
		$this->operateStyle = $operateStyle;
		$this->apiParams["operateStyle"] = $operateStyle;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSdcsOrderId() {
		return $this->sdcsOrderId;
	}
	
	public function setSdcsOrderId($sdcsOrderId) {
		$this->sdcsOrderId = $sdcsOrderId;
		$this->apiParams["sdcsOrderId"] = $sdcsOrderId;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.sendgoods.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressCompanyCode, 'expressCompanyCode');
		RequestCheckUtil::checkNotNull($this->expressNo, 'expressNo');
		RequestCheckUtil::checkNotNull($this->operateStyle, 'operateStyle');
		RequestCheckUtil::checkNotNull($this->sdcsOrderId, 'sdcsOrderId');
	}
	
	public function getBizName(){
		return "modifySendgoods";
	}
	
}

?>