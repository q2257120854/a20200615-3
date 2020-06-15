<?php
/**
 * 苏宁开放平台接口 - 批量库存更新
 *
 * @author suning
 * @date   2015-1-19
 */
class LogisticsCrossbuyInvModifyRequest  extends SuningRequest{
	
	/**
	 * 仓库编码。仓库编码
	 */
	private $warehouseCode;
	
	/**
	 * 
	 */
	private $productInv;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}
	
	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getProductInv() {
		return $this->productInv;
	}
	
	public function setProductInv($productInv) {
		$this->productInv = $productInv;
		$arr = array();
		foreach ($productInv as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["productInv"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.logistics.crossbuyinventory.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->warehouseCode, 'warehouseCode');
		RequestCheckUtil::checkNotNull($this->productInv, 'productInv');
	}
	
	public function getBizName(){
		return "modifyInventory";
	}
	
}

class ProductInv {

	private $apiParams = array();
	
	private $cargoOwner;
	
	private $productCode;
	
	private $productName;
	
	private $unrestrictedStock;
	
	private $useStock;
	
	private $restrictedStock;
	
	private $deadlineDate;
	
	public function getCargoOwner() {
		return $this->cargoOwner;
	}

	public function setCargoOwner($cargoOwner) {
		$this->cargoOwner = $cargoOwner;
		$this->apiParams["cargoOwner"] = $cargoOwner;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getProductName() {
		return $this->productName;
	}

	public function setProductName($productName) {
		$this->productName = $productName;
		$this->apiParams["productName"] = $productName;
	}
	
	public function getUnrestrictedStock() {
		return $this->unrestrictedStock;
	}

	public function setUnrestrictedStock($unrestrictedStock) {
		$this->unrestrictedStock = $unrestrictedStock;
		$this->apiParams["unrestrictedStock"] = $unrestrictedStock;
	}
	
	public function getUseStock() {
		return $this->useStock;
	}

	public function setUseStock($useStock) {
		$this->useStock = $useStock;
		$this->apiParams["useStock"] = $useStock;
	}
	
	public function getRestrictedStock() {
		return $this->restrictedStock;
	}

	public function setRestrictedStock($restrictedStock) {
		$this->restrictedStock = $restrictedStock;
		$this->apiParams["restrictedStock"] = $restrictedStock;
	}
	
	public function getDeadlineDate() {
		return $this->deadlineDate;
	}

	public function setDeadlineDate($deadlineDate) {
		$this->deadlineDate = $deadlineDate;
		$this->apiParams["deadlineDate"] = $deadlineDate;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>