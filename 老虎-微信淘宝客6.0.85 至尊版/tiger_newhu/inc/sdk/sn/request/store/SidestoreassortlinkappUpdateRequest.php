<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-21
 */
class SidestoreassortlinkappUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appStoreCode;
	
	/**
	 * 
	 */
	private $parentProdCode;
	
	/**
	 * 
	 */
	private $prodCodeType;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $protypeid;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppStoreCode() {
		return $this->appStoreCode;
	}
	
	public function setAppStoreCode($appStoreCode) {
		$this->appStoreCode = $appStoreCode;
		$this->apiParams["appStoreCode"] = $appStoreCode;
	}
	
	public function getParentProdCode() {
		return $this->parentProdCode;
	}
	
	public function setParentProdCode($parentProdCode) {
		$this->parentProdCode = $parentProdCode;
		$this->apiParams["parentProdCode"] = $parentProdCode;
	}
	
	public function getProdCodeType() {
		return $this->prodCodeType;
	}
	
	public function setProdCodeType($prodCodeType) {
		$this->prodCodeType = $prodCodeType;
		$this->apiParams["prodCodeType"] = $prodCodeType;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProtypeid() {
		return $this->protypeid;
	}
	
	public function setProtypeid($protypeid) {
		$this->protypeid = $protypeid;
		$this->apiParams["protypeid"] = $protypeid;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.store.sidestoreassortlinkapp.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->parentProdCode, 'parentProdCode');
		RequestCheckUtil::checkNotNull($this->prodCodeType, 'prodCodeType');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->protypeid, 'protypeid');
	}
	
	public function getBizName(){
		return "updateSidestoreassortlinkapp";
	}
	
}

?>