<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class ReceiveinfoModifyRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityName;
	
	/**
	 * 
	 */
	private $customerName;
	
	/**
	 * 
	 */
	private $detailAddress;
	
	/**
	 * 
	 */
	private $districtName;
	
	/**
	 * 
	 */
	private $mobilePhoneNum;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $phoneNum;
	
	/**
	 * 
	 */
	private $provinceName;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	/**
	 * 
	 */
	private $townCode;
	
	/**
	 * 
	 */
	private $townName;
	
	/**
	 * 
	 */
	private $userName;
	
	public function getCityName() {
		return $this->cityName;
	}
	
	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getCustomerName() {
		return $this->customerName;
	}
	
	public function setCustomerName($customerName) {
		$this->customerName = $customerName;
		$this->apiParams["customerName"] = $customerName;
	}
	
	public function getDetailAddress() {
		return $this->detailAddress;
	}
	
	public function setDetailAddress($detailAddress) {
		$this->detailAddress = $detailAddress;
		$this->apiParams["detailAddress"] = $detailAddress;
	}
	
	public function getDistrictName() {
		return $this->districtName;
	}
	
	public function setDistrictName($districtName) {
		$this->districtName = $districtName;
		$this->apiParams["districtName"] = $districtName;
	}
	
	public function getMobilePhoneNum() {
		return $this->mobilePhoneNum;
	}
	
	public function setMobilePhoneNum($mobilePhoneNum) {
		$this->mobilePhoneNum = $mobilePhoneNum;
		$this->apiParams["mobilePhoneNum"] = $mobilePhoneNum;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getProvinceName() {
		return $this->provinceName;
	}
	
	public function setProvinceName($provinceName) {
		$this->provinceName = $provinceName;
		$this->apiParams["provinceName"] = $provinceName;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getTownCode() {
		return $this->townCode;
	}
	
	public function setTownCode($townCode) {
		$this->townCode = $townCode;
		$this->apiParams["townCode"] = $townCode;
	}
	
	public function getTownName() {
		return $this->townName;
	}
	
	public function setTownName($townName) {
		$this->townName = $townName;
		$this->apiParams["townName"] = $townName;
	}
	
	public function getUserName() {
		return $this->userName;
	}
	
	public function setUserName($userName) {
		$this->userName = $userName;
		$this->apiParams["userName"] = $userName;
	}
	
	public function getApiMethodName(){
		return 'suning.selfmarket.receiveinfo.modify';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityName, 'cityName');
		RequestCheckUtil::checkNotNull($this->customerName, 'customerName');
		RequestCheckUtil::checkNotNull($this->detailAddress, 'detailAddress');
		RequestCheckUtil::checkNotNull($this->districtName, 'districtName');
		RequestCheckUtil::checkNotNull($this->mobilePhoneNum, 'mobilePhoneNum');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->provinceName, 'provinceName');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
		RequestCheckUtil::checkNotNull($this->townCode, 'townCode');
		RequestCheckUtil::checkNotNull($this->townName, 'townName');
		RequestCheckUtil::checkNotNull($this->userName, 'userName');
	}
	
	public function getBizName(){
		return "modifyReceiveinfo";
	}
	
}

?>