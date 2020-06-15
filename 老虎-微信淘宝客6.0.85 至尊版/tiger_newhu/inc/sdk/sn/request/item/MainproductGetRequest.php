<?php
/**
 * 苏宁开放平台接口 - 查询商品内容纠错结果
 *
 * @author suning
 * @date   2014-7-18
 */
class MainproductGetRequest  extends SuningRequest{
	
	/**
	 * 申请编码
	 */
	private $applyCode;
	
	public function getApplyCode() {
		return $this->applyCode;
	}
	
	public function setApplyCode($applyCode) {
		$this->applyCode = $applyCode;
		$this->apiParams["applyCode"] = $applyCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.mainproduct.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->applyCode, 'applyCode');
	}
	
	public function getBizName(){
		return "mainProduct";
	}
	
}

?>