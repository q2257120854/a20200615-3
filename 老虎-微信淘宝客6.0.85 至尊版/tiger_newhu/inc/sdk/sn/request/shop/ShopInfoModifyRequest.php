<?php
/**
 * 苏宁开放平台接口 - 店铺基本信息修改
 *
 * @author suning
 * @date   2014-8-22
 */
class ShopInfoModifyRequest  extends SuningRequest{
	
	/**
	 * 宣传标语
	 */
	private $placard;
	
	/**
	 * 联系电话
	 */
	private $telphone;
	
	public function getPlacard() {
		return $this->placard;
	}
	
	public function setPlacard($placard) {
		$this->placard = $placard;
		$this->apiParams["placard"] = $placard;
	}
	
	public function getTelphone() {
		return $this->telphone;
	}
	
	public function setTelphone($telphone) {
		$this->telphone = $telphone;
		$this->apiParams["telphone"] = $telphone;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.shopinfo.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "modifyShopInfo";
	}
	
}

?>