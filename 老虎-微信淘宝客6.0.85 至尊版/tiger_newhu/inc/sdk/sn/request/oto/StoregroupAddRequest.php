<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-8
 */
class StoregroupAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $groupName;
	
	/**
	 * 
	 */
	private $groupRemark;
	
	public function getGroupName() {
		return $this->groupName;
	}
	
	public function setGroupName($groupName) {
		$this->groupName = $groupName;
		$this->apiParams["groupName"] = $groupName;
	}
	
	public function getGroupRemark() {
		return $this->groupRemark;
	}
	
	public function setGroupRemark($groupRemark) {
		$this->groupRemark = $groupRemark;
		$this->apiParams["groupRemark"] = $groupRemark;
	}
	
	public function getApiMethodName(){
		return 'suning.oto.storegroup.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->groupName, 'groupName');
		RequestCheckUtil::checkNotNull($this->groupRemark, 'groupRemark');
	}
	
	public function getBizName(){
		return "addStoregroup";
	}
	
}

?>