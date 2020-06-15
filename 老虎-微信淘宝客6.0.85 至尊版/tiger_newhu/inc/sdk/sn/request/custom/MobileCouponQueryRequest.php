<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2016-8-24
 */
class MobileCouponQueryRequest  extends SuningRequest{
	
	public function getApiMethodName(){
		return 'suning.custom.mobilecoupon.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "queryMobileCoupon";
	}
	
}

?>