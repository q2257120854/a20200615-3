<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class SalesManageModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $operateType;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.salesmanage.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
	}
	
	public function getBizName(){
		return "modifySalesManage";
	}
	
}

?>