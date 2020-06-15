<?php
/**
 * 苏宁开放平台接口 - 促销活动管理
 *
 * @author suning
 * @date   2015-7-27
 */
class SalesManageModifyRequest  extends SuningRequest{
	
	/**
	 * 促销活动ID。促销活动的唯一ID
	 */
	private $activityCode;
	
	/**
	 * 管理行为。1终止、2暂停、3重启
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