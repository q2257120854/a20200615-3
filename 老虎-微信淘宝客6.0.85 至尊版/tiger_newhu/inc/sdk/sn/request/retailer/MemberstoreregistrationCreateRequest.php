<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-29
 */
class MemberstoreregistrationCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $cityName;
	
	/**
	 * 
	 */
	private $companyAddr;
	
	/**
	 * 
	 */
	private $companyName;
	
	/**
	 * 
	 */
	private $companyType;
	
	/**
	 * 
	 */
	private $contactPerson;
	
	/**
	 * 
	 */
	private $contactPhone;
	
	/**
	 * 
	 */
	private $districtCode;
	
	/**
	 * 
	 */
	private $districtName;
	
	/**
	 * 
	 */
	private $legalIdcardNo;
	
	/**
	 * 
	 */
	private $legalPerson;
	
	/**
	 * 
	 */
	private $licenseNo;
	
	/**
	 * 
	 */
	private $merchantType;
	
	/**
	 * 
	 */
	private $provCode;
	
	/**
	 * 
	 */
	private $provName;
	
	/**
	 * 
	 */
	private $townCode;
	
	/**
	 * 
	 */
	private $townName;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCityName() {
		return $this->cityName;
	}
	
	public function setCityName($cityName) {
		$this->cityName = $cityName;
		$this->apiParams["cityName"] = $cityName;
	}
	
	public function getCompanyAddr() {
		return $this->companyAddr;
	}
	
	public function setCompanyAddr($companyAddr) {
		$this->companyAddr = $companyAddr;
		$this->apiParams["companyAddr"] = $companyAddr;
	}
	
	public function getCompanyName() {
		return $this->companyName;
	}
	
	public function setCompanyName($companyName) {
		$this->companyName = $companyName;
		$this->apiParams["companyName"] = $companyName;
	}
	
	public function getCompanyType() {
		return $this->companyType;
	}
	
	public function setCompanyType($companyType) {
		$this->companyType = $companyType;
		$this->apiParams["companyType"] = $companyType;
	}
	
	public function getContactPerson() {
		return $this->contactPerson;
	}
	
	public function setContactPerson($contactPerson) {
		$this->contactPerson = $contactPerson;
		$this->apiParams["contactPerson"] = $contactPerson;
	}
	
	public function getContactPhone() {
		return $this->contactPhone;
	}
	
	public function setContactPhone($contactPhone) {
		$this->contactPhone = $contactPhone;
		$this->apiParams["contactPhone"] = $contactPhone;
	}
	
	public function getDistrictCode() {
		return $this->districtCode;
	}
	
	public function setDistrictCode($districtCode) {
		$this->districtCode = $districtCode;
		$this->apiParams["districtCode"] = $districtCode;
	}
	
	public function getDistrictName() {
		return $this->districtName;
	}
	
	public function setDistrictName($districtName) {
		$this->districtName = $districtName;
		$this->apiParams["districtName"] = $districtName;
	}
	
	public function getLegalIdcardNo() {
		return $this->legalIdcardNo;
	}
	
	public function setLegalIdcardNo($legalIdcardNo) {
		$this->legalIdcardNo = $legalIdcardNo;
		$this->apiParams["legalIdcardNo"] = $legalIdcardNo;
	}
	
	public function getLegalPerson() {
		return $this->legalPerson;
	}
	
	public function setLegalPerson($legalPerson) {
		$this->legalPerson = $legalPerson;
		$this->apiParams["legalPerson"] = $legalPerson;
	}
	
	public function getLicenseNo() {
		return $this->licenseNo;
	}
	
	public function setLicenseNo($licenseNo) {
		$this->licenseNo = $licenseNo;
		$this->apiParams["licenseNo"] = $licenseNo;
	}
	
	public function getMerchantType() {
		return $this->merchantType;
	}
	
	public function setMerchantType($merchantType) {
		$this->merchantType = $merchantType;
		$this->apiParams["merchantType"] = $merchantType;
	}
	
	public function getProvCode() {
		return $this->provCode;
	}
	
	public function setProvCode($provCode) {
		$this->provCode = $provCode;
		$this->apiParams["provCode"] = $provCode;
	}
	
	public function getProvName() {
		return $this->provName;
	}
	
	public function setProvName($provName) {
		$this->provName = $provName;
		$this->apiParams["provName"] = $provName;
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
	
	public function getApiMethodName(){
		return 'suning.retailer.memberstoreregistration.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
		RequestCheckUtil::checkNotNull($this->cityName, 'cityName');
		RequestCheckUtil::checkNotNull($this->companyAddr, 'companyAddr');
		RequestCheckUtil::checkNotNull($this->companyName, 'companyName');
		RequestCheckUtil::checkNotNull($this->companyType, 'companyType');
		RequestCheckUtil::checkNotNull($this->contactPerson, 'contactPerson');
		RequestCheckUtil::checkNotNull($this->contactPhone, 'contactPhone');
		RequestCheckUtil::checkNotNull($this->districtCode, 'districtCode');
		RequestCheckUtil::checkNotNull($this->districtName, 'districtName');
		RequestCheckUtil::checkNotNull($this->merchantType, 'merchantType');
		RequestCheckUtil::checkNotNull($this->provCode, 'provCode');
		RequestCheckUtil::checkNotNull($this->provName, 'provName');
		RequestCheckUtil::checkNotNull($this->townCode, 'townCode');
		RequestCheckUtil::checkNotNull($this->townName, 'townName');
	}
	
	public function getBizName(){
		return "createMemberstoreregistration";
	}
	
}

?>