<?php
/**
 * 苏宁开放平台接口 - 查询主账号下的子账号列表
 *
 * @author suning
 * @date   2015-6-5
 */
class ChildUserInfoQueryRequest  extends SelectSuningRequest{
	
	/**
	 * 主账号会员编码。主账号会员编码
	 */
	private $mainCust;
	
	/**
	 * 模糊查询关键字。模糊查询关键字
	 */
	private $keyword;
	
	
	
	public function getMainCust() {
		return $this->mainCust;
	}
	
	public function setMainCust($mainCust) {
		$this->mainCust = $mainCust;
		$this->apiParams["mainCust"] = $mainCust;
	}
	
	public function getKeyword() {
		return $this->keyword;
	}
	
	public function setKeyword($keyword) {
		$this->keyword = $keyword;
		$this->apiParams["keyword"] = $keyword;
	}
	
	
	
	public function getApiMethodName(){
		return 'suning.cloud.childuserinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->mainCust, 'mainCust');
	}
	
	public function getBizName(){
		return "queryChildUserInfo";
	}
	
}

?>