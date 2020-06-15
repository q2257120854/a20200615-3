<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class BtborderpayinfoQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $appType;
	
	/**
	 * 
	 */
	private $channelType;
	
	/**
	 * 
	 */
	private $device;
	
	/**
	 * 
	 */
	private $logonUserName;
	
	/**
	 * 
	 */
	private $notifyUrl;
	
	/**
	 * 
	 */
	private $orderNos;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $version;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getAppType() {
		return $this->appType;
	}
	
	public function setAppType($appType) {
		$this->appType = $appType;
		$this->apiParams["appType"] = $appType;
	}
	
	public function getChannelType() {
		return $this->channelType;
	}
	
	public function setChannelType($channelType) {
		$this->channelType = $channelType;
		$this->apiParams["channelType"] = $channelType;
	}
	
	public function getDevice() {
		return $this->device;
	}
	
	public function setDevice($device) {
		$this->device = $device;
		$this->apiParams["device"] = $device;
	}
	
	public function getLogonUserName() {
		return $this->logonUserName;
	}
	
	public function setLogonUserName($logonUserName) {
		$this->logonUserName = $logonUserName;
		$this->apiParams["logonUserName"] = $logonUserName;
	}
	
	public function getNotifyUrl() {
		return $this->notifyUrl;
	}
	
	public function setNotifyUrl($notifyUrl) {
		$this->notifyUrl = $notifyUrl;
		$this->apiParams["notifyUrl"] = $notifyUrl;
	}
	
	public function getOrderNos() {
		return $this->orderNos;
	}
	
	public function setOrderNos($orderNos) {
		$this->orderNos = $orderNos;
		$arr = array();
		foreach ($orderNos as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderNos"] = $arr;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getVersion() {
		return $this->version;
	}
	
	public function setVersion($version) {
		$this->version = $version;
		$this->apiParams["version"] = $version;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btborderpayonlineinfo.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->channelType, 'channelType');
		RequestCheckUtil::checkNotNull($this->device, 'device');
		RequestCheckUtil::checkNotNull($this->logonUserName, 'logonUserName');
		RequestCheckUtil::checkNotNull($this->notifyUrl, 'notifyUrl');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "queryBtborderpayinfo";
	}
	
}

class OrderNos {

	private $apiParams = array();
	
	private $orderNo;
	
	public function getOrderNo() {
		return $this->orderNo;
	}

	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>