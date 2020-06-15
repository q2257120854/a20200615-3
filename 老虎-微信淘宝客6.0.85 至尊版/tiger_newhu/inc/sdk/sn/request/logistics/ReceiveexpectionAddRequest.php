<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-6-28
 */
class ReceiveexpectionAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $exType;
	
	/**
	 * 
	 */
	private $logisticOrderId;
	
	/**
	 * 
	 */
	private $remark;
	
	/**
	 * 
	 */
	private $storeOutCompany;
	
	public function getExType() {
		return $this->exType;
	}
	
	public function setExType($exType) {
		$this->exType = $exType;
		$this->apiParams["exType"] = $exType;
	}
	
	public function getLogisticOrderId() {
		return $this->logisticOrderId;
	}
	
	public function setLogisticOrderId($logisticOrderId) {
		$this->logisticOrderId = $logisticOrderId;
		$this->apiParams["logisticOrderId"] = $logisticOrderId;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getStoreOutCompany() {
		return $this->storeOutCompany;
	}
	
	public function setStoreOutCompany($storeOutCompany) {
		$this->storeOutCompany = $storeOutCompany;
		$this->apiParams["storeOutCompany"] = $storeOutCompany;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.receiveexpection.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->exType, 'exType');
		RequestCheckUtil::checkNotNull($this->logisticOrderId, 'logisticOrderId');
		RequestCheckUtil::checkNotNull($this->remark, 'remark');
		RequestCheckUtil::checkNotNull($this->storeOutCompany, 'storeOutCompany');
	}
	
	public function getBizName(){
		return "addReceiveexpection";
	}
	
}

?>