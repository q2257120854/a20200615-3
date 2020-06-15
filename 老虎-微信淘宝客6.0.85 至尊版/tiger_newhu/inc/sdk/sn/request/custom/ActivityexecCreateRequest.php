<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class ActivityexecCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityCode;
	
	/**
	 * 
	 */
	private $giveAmount;
	
	/**
	 * 
	 */
	private $mixCustNum;
	
	/**
	 * 
	 */
	private $rewardLevel;
	
	public function getActivityCode() {
		return $this->activityCode;
	}
	
	public function setActivityCode($activityCode) {
		$this->activityCode = $activityCode;
		$this->apiParams["activityCode"] = $activityCode;
	}
	
	public function getGiveAmount() {
		return $this->giveAmount;
	}
	
	public function setGiveAmount($giveAmount) {
		$this->giveAmount = $giveAmount;
		$this->apiParams["giveAmount"] = $giveAmount;
	}
	
	public function getMixCustNum() {
		return $this->mixCustNum;
	}
	
	public function setMixCustNum($mixCustNum) {
		$this->mixCustNum = $mixCustNum;
		$this->apiParams["mixCustNum"] = $mixCustNum;
	}
	
	public function getRewardLevel() {
		return $this->rewardLevel;
	}
	
	public function setRewardLevel($rewardLevel) {
		$this->rewardLevel = $rewardLevel;
		$this->apiParams["rewardLevel"] = $rewardLevel;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.activityexec.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->activityCode, 'activityCode');
		RequestCheckUtil::checkNotNull($this->mixCustNum, 'mixCustNum');
	}
	
	public function getBizName(){
		return "createActivityexec";
	}
	
}

?>