<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-11-16
 */
class CmmdtyreceiveConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemInfo;
	
	public function getOrderItemInfo() {
		return $this->orderItemInfo;
	}
	
	public function setOrderItemInfo($orderItemInfo) {
		$this->orderItemInfo = $orderItemInfo;
		$arr = array();
		foreach ($orderItemInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.cmmdtyreceive.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmCmmdtyreceive";
	}
	
}

class OrderItemInfo {

	private $apiParams = array();
	
	private $operateTime;
	
	private $orderItemId;
	
	private $statusDesc;
	
	public function getOperateTime() {
		return $this->operateTime;
	}

	public function setOperateTime($operateTime) {
		$this->operateTime = $operateTime;
		$this->apiParams["operateTime"] = $operateTime;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getStatusDesc() {
		return $this->statusDesc;
	}

	public function setStatusDesc($statusDesc) {
		$this->statusDesc = $statusDesc;
		$this->apiParams["statusDesc"] = $statusDesc;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>