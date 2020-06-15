<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-8-2
 */
class PointsubtractConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $accountStruct;
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $beginRecNum;
	
	/**
	 * 
	 */
	private $custNum;
	
	/**
	 * 
	 */
	private $ecoType;
	
	/**
	 * 
	 */
	private $getRecNum;
	
	/**
	 * 
	 */
	private $sourceChannel;
	
	/**
	 * 
	 */
	private $sourceSystemNo;
	
	/**
	 * 
	 */
	private $tranTimestamp;
	
	public function getAccountStruct() {
		return $this->accountStruct;
	}
	
	public function setAccountStruct($accountStruct) {
		$this->accountStruct = $accountStruct;
		$this->apiParams["accountStruct"] = $accountStruct->getApiParams();
	}
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getBeginRecNum() {
		return $this->beginRecNum;
	}
	
	public function setBeginRecNum($beginRecNum) {
		$this->beginRecNum = $beginRecNum;
		$this->apiParams["beginRecNum"] = $beginRecNum;
	}
	
	public function getCustNum() {
		return $this->custNum;
	}
	
	public function setCustNum($custNum) {
		$this->custNum = $custNum;
		$this->apiParams["custNum"] = $custNum;
	}
	
	public function getEcoType() {
		return $this->ecoType;
	}
	
	public function setEcoType($ecoType) {
		$this->ecoType = $ecoType;
		$this->apiParams["ecoType"] = $ecoType;
	}
	
	public function getGetRecNum() {
		return $this->getRecNum;
	}
	
	public function setGetRecNum($getRecNum) {
		$this->getRecNum = $getRecNum;
		$this->apiParams["getRecNum"] = $getRecNum;
	}
	
	public function getSourceChannel() {
		return $this->sourceChannel;
	}
	
	public function setSourceChannel($sourceChannel) {
		$this->sourceChannel = $sourceChannel;
		$this->apiParams["sourceChannel"] = $sourceChannel;
	}
	
	public function getSourceSystemNo() {
		return $this->sourceSystemNo;
	}
	
	public function setSourceSystemNo($sourceSystemNo) {
		$this->sourceSystemNo = $sourceSystemNo;
		$this->apiParams["sourceSystemNo"] = $sourceSystemNo;
	}
	
	public function getTranTimestamp() {
		return $this->tranTimestamp;
	}
	
	public function setTranTimestamp($tranTimestamp) {
		$this->tranTimestamp = $tranTimestamp;
		$this->apiParams["tranTimestamp"] = $tranTimestamp;
	}
	
	public function getApiMethodName(){
		return 'suning.custexpand.pointsubtract.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->custNum, 'custNum');
		RequestCheckUtil::checkNotNull($this->ecoType, 'ecoType');
		RequestCheckUtil::checkNotNull($this->sourceChannel, 'sourceChannel');
		RequestCheckUtil::checkNotNull($this->sourceSystemNo, 'sourceSystemNo');
		RequestCheckUtil::checkNotNull($this->tranTimestamp, 'tranTimestamp');
	}
	
	public function getBizName(){
		return "confirmPointsubtract";
	}
	
}

class SubtractStructList {

	private $apiParams = array();
	
	private $accountSubAmt;
	
	private $accountType;
	
	public function getAccountSubAmt() {
		return $this->accountSubAmt;
	}

	public function setAccountSubAmt($accountSubAmt) {
		$this->accountSubAmt = $accountSubAmt;
		$this->apiParams["accountSubAmt"] = $accountSubAmt;
	}
	
	public function getAccountType() {
		return $this->accountType;
	}

	public function setAccountType($accountType) {
		$this->accountType = $accountType;
		$this->apiParams["accountType"] = $accountType;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class AccountStruct {

	private $apiParams = array();
	
	private $operator;
	
	private $orderStructList;
	
	private $uniteOrderId;
	
	public function getOperator() {
		return $this->operator;
	}

	public function setOperator($operator) {
		$this->operator = $operator;
		$this->apiParams["operator"] = $operator;
	}
	
	public function getOrderStructList() {
		return $this->orderStructList;
	}

	public function setOrderStructList($orderStructList) {
		$this->orderStructList = $orderStructList;
		$arr = array();
		foreach ($orderStructList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderStructList"] = $arr;
	}
	
	public function getUniteOrderId() {
		return $this->uniteOrderId;
	}

	public function setUniteOrderId($uniteOrderId) {
		$this->uniteOrderId = $uniteOrderId;
		$this->apiParams["uniteOrderId"] = $uniteOrderId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class OrderStructList {

	private $apiParams = array();
	
	private $branch;
	
	private $cmmdtyBrand;
	
	private $cmmdtyCatalog;
	
	private $cmmdtyCode;
	
	private $cmmdtyGroup;
	
	private $cmmdtyName;
	
	private $orderAmt;
	
	private $orderItemId;
	
	private $orderType;
	
	private $orderTypeDesc;
	
	private $store;
	
	private $subtractStructList;
	
	private $supplierCode;
	
	private $supplierType;
	
	public function getBranch() {
		return $this->branch;
	}

	public function setBranch($branch) {
		$this->branch = $branch;
		$this->apiParams["branch"] = $branch;
	}
	
	public function getCmmdtyBrand() {
		return $this->cmmdtyBrand;
	}

	public function setCmmdtyBrand($cmmdtyBrand) {
		$this->cmmdtyBrand = $cmmdtyBrand;
		$this->apiParams["cmmdtyBrand"] = $cmmdtyBrand;
	}
	
	public function getCmmdtyCatalog() {
		return $this->cmmdtyCatalog;
	}

	public function setCmmdtyCatalog($cmmdtyCatalog) {
		$this->cmmdtyCatalog = $cmmdtyCatalog;
		$this->apiParams["cmmdtyCatalog"] = $cmmdtyCatalog;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getCmmdtyGroup() {
		return $this->cmmdtyGroup;
	}

	public function setCmmdtyGroup($cmmdtyGroup) {
		$this->cmmdtyGroup = $cmmdtyGroup;
		$this->apiParams["cmmdtyGroup"] = $cmmdtyGroup;
	}
	
	public function getCmmdtyName() {
		return $this->cmmdtyName;
	}

	public function setCmmdtyName($cmmdtyName) {
		$this->cmmdtyName = $cmmdtyName;
		$this->apiParams["cmmdtyName"] = $cmmdtyName;
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
	
	public function getSubtractStructList() {
		return $this->subtractStructList;
	}

	public function setSubtractStructList($subtractStructList) {
		$this->subtractStructList = $subtractStructList;
		$arr = array();
		foreach ($subtractStructList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["subtractStructList"] = $arr;
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