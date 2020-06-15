<?php
/**
 * 苏宁开放平台接口 - 查询收费项目属性接口
 *
 * @author suning
 * @date   2015-6-8
 */
class ChargeItemInfoGetRequest  extends SuningRequest{
	
	/**
	 * 服务代码。服务的代码
	 */
	private $serverId;
	
	public function getServerId() {
		return $this->serverId;
	}
	
	public function setServerId($serverId) {
		$this->serverId = $serverId;
		$this->apiParams["serverId"] = $serverId;
	}
	
	public function getApiMethodName(){
		return 'suning.fws.chargeiteminfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->serverId, 'serverId');
	}
	
	public function getBizName(){
		return "getChargeItemInfo";
	}
	
}

?>