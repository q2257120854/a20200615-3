<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-5-30
 */
class ChainAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelName;
	
	/**
	 * 
	 */
	private $includeTraceId;
	
	/**
	 * 
	 */
	private $lastMemberCode;
	
	/**
	 * 
	 */
	private $lastPoint;
	
	/**
	 * 
	 */
	private $lastRoleId;
	
	/**
	 * 
	 */
	private $memberCode;
	
	/**
	 * 
	 */
	private $memberName;
	
	/**
	 * 
	 */
	private $msg;
	
	/**
	 * 
	 */
	private $point;
	
	/**
	 * 
	 */
	private $roleId;
	
	/**
	 * 
	 */
	private $traceId;
	
	public function getChannelName() {
		return $this->channelName;
	}
	
	public function setChannelName($channelName) {
		$this->channelName = $channelName;
		$this->apiParams["channelName"] = $channelName;
	}
	
	public function getIncludeTraceId() {
		return $this->includeTraceId;
	}
	
	public function setIncludeTraceId($includeTraceId) {
		$this->includeTraceId = $includeTraceId;
		$this->apiParams["includeTraceId"] = $includeTraceId;
	}
	
	public function getLastMemberCode() {
		return $this->lastMemberCode;
	}
	
	public function setLastMemberCode($lastMemberCode) {
		$this->lastMemberCode = $lastMemberCode;
		$this->apiParams["lastMemberCode"] = $lastMemberCode;
	}
	
	public function getLastPoint() {
		return $this->lastPoint;
	}
	
	public function setLastPoint($lastPoint) {
		$this->lastPoint = $lastPoint;
		$this->apiParams["lastPoint"] = $lastPoint;
	}
	
	public function getLastRoleId() {
		return $this->lastRoleId;
	}
	
	public function setLastRoleId($lastRoleId) {
		$this->lastRoleId = $lastRoleId;
		$this->apiParams["lastRoleId"] = $lastRoleId;
	}
	
	public function getMemberCode() {
		return $this->memberCode;
	}
	
	public function setMemberCode($memberCode) {
		$this->memberCode = $memberCode;
		$this->apiParams["memberCode"] = $memberCode;
	}
	
	public function getMemberName() {
		return $this->memberName;
	}
	
	public function setMemberName($memberName) {
		$this->memberName = $memberName;
		$this->apiParams["memberName"] = $memberName;
	}
	
	public function getMsg() {
		return $this->msg;
	}
	
	public function setMsg($msg) {
		$this->msg = $msg;
		$this->apiParams["msg"] = $msg;
	}
	
	public function getPoint() {
		return $this->point;
	}
	
	public function setPoint($point) {
		$this->point = $point;
		$this->apiParams["point"] = $point;
	}
	
	public function getRoleId() {
		return $this->roleId;
	}
	
	public function setRoleId($roleId) {
		$this->roleId = $roleId;
		$this->apiParams["roleId"] = $roleId;
	}
	
	public function getTraceId() {
		return $this->traceId;
	}
	
	public function setTraceId($traceId) {
		$this->traceId = $traceId;
		$this->apiParams["traceId"] = $traceId;
	}
	
	public function getApiMethodName(){
		return 'suning.cts.chain.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelName, 'channelName');
		RequestCheckUtil::checkNotNull($this->memberCode, 'memberCode');
		RequestCheckUtil::checkNotNull($this->memberName, 'memberName');
		RequestCheckUtil::checkNotNull($this->msg, 'msg');
		RequestCheckUtil::checkNotNull($this->point, 'point');
		RequestCheckUtil::checkNotNull($this->roleId, 'roleId');
	}
	
	public function getBizName(){
		return "addChain";
	}
	
}

?>