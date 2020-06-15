<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-7-27
 */
class PointgiveAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $deviceId;
	
	/**
	 * 
	 */
	private $ecoType;
	
	/**
	 * 
	 */
	private $invokerCode;
	
	/**
	 * 
	 */
	private $order;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $sceneCode;
	
	/**
	 * 
	 */
	private $sceneType;
	
	/**
	 * 
	 */
	private $transId;
	
	/**
	 * 
	 */
	private $transTimestamp;
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getDeviceId() {
		return $this->deviceId;
	}
	
	public function setDeviceId($deviceId) {
		$this->deviceId = $deviceId;
		$this->apiParams["deviceId"] = $deviceId;
	}
	
	public function getEcoType() {
		return $this->ecoType;
	}
	
	public function setEcoType($ecoType) {
		$this->ecoType = $ecoType;
		$this->apiParams["ecoType"] = $ecoType;
	}
	
	public function getInvokerCode() {
		return $this->invokerCode;
	}
	
	public function setInvokerCode($invokerCode) {
		$this->invokerCode = $invokerCode;
		$this->apiParams["invokerCode"] = $invokerCode;
	}
	
	public function getOrder() {
		return $this->order;
	}
	
	public function setOrder($order) {
		$this->order = $order;
		$this->apiParams["order"] = $order->getApiParams();
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getSceneCode() {
		return $this->sceneCode;
	}
	
	public function setSceneCode($sceneCode) {
		$this->sceneCode = $sceneCode;
		$this->apiParams["sceneCode"] = $sceneCode;
	}
	
	public function getSceneType() {
		return $this->sceneType;
	}
	
	public function setSceneType($sceneType) {
		$this->sceneType = $sceneType;
		$this->apiParams["sceneType"] = $sceneType;
	}
	
	public function getTransId() {
		return $this->transId;
	}
	
	public function setTransId($transId) {
		$this->transId = $transId;
		$this->apiParams["transId"] = $transId;
	}
	
	public function getTransTimestamp() {
		return $this->transTimestamp;
	}
	
	public function setTransTimestamp($transTimestamp) {
		$this->transTimestamp = $transTimestamp;
		$this->apiParams["transTimestamp"] = $transTimestamp;
	}
	
	public function getApiMethodName(){
		return 'suning.cmall.pointgive.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->ecoType, 'ecoType');
		RequestCheckUtil::checkNotNull($this->invokerCode, 'invokerCode');
		RequestCheckUtil::checkNotNull($this->sceneCode, 'sceneCode');
		RequestCheckUtil::checkNotNull($this->sceneType, 'sceneType');
		RequestCheckUtil::checkNotNull($this->transId, 'transId');
		RequestCheckUtil::checkNotNull($this->transTimestamp, 'transTimestamp');
	}
	
	public function getBizName(){
		return "addPointgive";
	}
	
}

class Order {

	private $apiParams = array();
	
	private $accountType;
	
	private $addAmt;
	
	private $branch;
	
	private $cmdtyBrand;
	
	private $cmdtyCatalog;
	
	private $cmdtyCode;
	
	private $cmdtyGroup;
	
	private $cmdtyName;
	
	private $orderAmt;
	
	private $orderItemId;
	
	private $orderType;
	
	private $orderTypeDesc;
	
	private $store;
	
	private $supplierCode;
	
	private $supplierType;
	
	public function getAccountType() {
		return $this->accountType;
	}

	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		$this->apiParams["accountType"] = $accountType;
	}
	
	public function getAddAmt() {
		return $this->addAmt;
	}

	public function setAddAmt($addAmt) {
		$this->addAmt = $addAmt;
		$this->apiParams["addAmt"] = $addAmt;
	}
	
	public function getBranch() {
		return $this->branch;
	}

	public function setBranch($branch) {
		$this->branch = $branch;
		$this->apiParams["branch"] = $branch;
	}
	
	public function getCmdtyBrand() {
		return $this->cmdtyBrand;
	}

	public function setCmdtyBrand($cmdtyBrand) {
		$this->cmdtyBrand = $cmdtyBrand;
		$this->apiParams["cmdtyBrand"] = $cmdtyBrand;
	}
	
	public function getCmdtyCatalog() {
		return $this->cmdtyCatalog;
	}

	public function setCmdtyCatalog($cmdtyCatalog) {
		$this->cmdtyCatalog = $cmdtyCatalog;
		$this->apiParams["cmdtyCatalog"] = $cmdtyCatalog;
	}
	
	public function getCmdtyCode() {
		return $this->cmdtyCode;
	}

	public function setCmdtyCode($cmdtyCode) {
		$this->cmdtyCode = $cmdtyCode;
		$this->apiParams["cmdtyCode"] = $cmdtyCode;
	}
	
	public function getCmdtyGroup() {
		return $this->cmdtyGroup;
	}

	public function setCmdtyGroup($cmdtyGroup) {
		$this->cmdtyGroup = $cmdtyGroup;
		$this->apiParams["cmdtyGroup"] = $cmdtyGroup;
	}
	
	public function getCmdtyName() {
		return $this->cmdtyName;
	}

	public function setCmdtyName($cmdtyName) {
		$this->cmdtyName = $cmdtyName;
		$this->apiParams["cmdtyName"] = $cmdtyName;
	}
	
	public function getOrderAmt() {
		return $this->orderAmt;
	}

	public function setOrderAmt($orderAmt) {
		$this->orderAmt = $orderAmt;
		$this->apiParams["orderAmt"] = $orderAmt;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}

	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getOrderTypeDesc() {
		return $this->orderTypeDesc;
	}

	public function setOrderTypeDesc($orderTypeDesc) {
		$this->orderTypeDesc = $orderTypeDesc;
		$this->apiParams["orderTypeDesc"] = $orderTypeDesc;
	}
	
	public function getStore() {
		return $this->store;
	}

	public function setStore($store) {
		$this->store = $store;
		$this->apiParams["store"] = $store;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getSupplierType() {
		return $this->supplierType;
	}

	public function setSupplierType($supplierType) {
		$this->supplierType = $supplierType;
		$this->apiParams["supplierType"] = $supplierType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>