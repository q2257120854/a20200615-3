<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-15
 */
class ShopinfoModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $placard;
	
	/**
	 * 
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
		return "modifyShopinfo";
	}
	
}

?>