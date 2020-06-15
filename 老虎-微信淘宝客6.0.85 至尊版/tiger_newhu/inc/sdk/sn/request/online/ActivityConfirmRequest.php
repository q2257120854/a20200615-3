<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-6-25
 */
class ActivityConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $activityInfo;
	
	public function getActivityInfo() {
		return $this->activityInfo;
	}
	
	public function setActivityInfo($activityInfo) {
		$this->activityInfo = $activityInfo;
		$arr = array();
		foreach ($activityInfo as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["activityInfo"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.activity.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmActivity";
	}
	
}

class ActivityInfo {

	private $apiParams = array();
	
	private $activityId;
	
	private $cartItemId;
	
	private $chanId;
	
	private $cmmdtyCode;
	
	private $memberNo;
	
	private $saleNum;
	
	public function getActivityId() {
		return $this->activityId;
	}

	public function setActivityId($activityId) {
		$this->activityId = $activityId;
		$this->apiParams["activityId"] = $activityId;
	}
	
	public function getCartItemId() {
		return $this->cartItemId;
	}

	public function setCartItemId($cartItemId) {
		$this->cartItemId = $cartItemId;
		$this->apiParams["cartItemId"] = $cartItemId;
	}
	
	public function getChanId() {
		return $this->chanId;
	}

	public function setChanId($chanId) {
		$this->chanId = $chanId;
		$this->apiParams["chanId"] = $chanId;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getMemberNo() {
		return $this->memberNo;
	}

	public function setMemberNo($memberNo) {
		$this->memberNo = $memberNo;
		$this->apiParams["memberNo"] = $memberNo;
	}
	
	public function getSaleNum() {
		return $this->saleNum;
	}

	public function setSaleNum($saleNum) {
		$this->saleNum = $saleNum;
		$this->apiParams["saleNum"] = $saleNum;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>