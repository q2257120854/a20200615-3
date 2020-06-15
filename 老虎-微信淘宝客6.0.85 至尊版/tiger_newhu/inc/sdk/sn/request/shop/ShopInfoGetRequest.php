<?php
/**
 * 苏宁开放平台接口 - 获取店铺基本信息
 *
 * @author suning
 * @date   2014-8-22
 */
class ShopInfoGetRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.shopinfo.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getShopInfo";
	}
	
}

?>