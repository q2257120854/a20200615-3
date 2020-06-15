<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-14
 */
class AddressQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $addressHierarchy;
	
	/**
	 * 
	 */
	private $provinceCode;
	
	public function getAddressHierarchy() {
		return $this->addressHierarchy;
	}
	
	public function setAddressHierarchy($addressHierarchy) {
		$this->addressHierarchy = $addressHierarchy;
		$this->apiParams["addressHierarchy"] = $addressHierarchy;
	}
	
	public function getProvinceCode() {
		return $this->provinceCode;
	}
	
	public function setProvinceCode($provinceCode) {
		$this->provinceCode = $provinceCode;
		$this->apiParams["provinceCode"] = $provinceCode;
	}
	
	public function getApiMethodName(){
		return 'suning.buyout.address.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->addressHierarchy, 'addressHierarchy');
	}
	
	public function getBizName(){
		return "queryAddress";
	}
	
}

?>