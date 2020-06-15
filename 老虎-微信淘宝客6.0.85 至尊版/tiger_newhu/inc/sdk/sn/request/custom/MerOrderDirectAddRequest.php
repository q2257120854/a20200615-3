<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-19
 */
class MerOrderDirectAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $cityCode;
	
	/**
	 * 
	 */
	private $cmmdtyQaType;
	
	/**
	 * 
	 */
	private $consignee;
	
	/**
	 * 
	 */
	private $extdCmmdtyBand;
	
	/**
	 * 
	 */
	private $extdCmmdtyCtgry;
	
	/**
	 * 
	 */
	private $extdCommodityCode;
	
	/**
	 * 
	 */
	private $extdCommodityName;
	
	/**
	 * 
	 */
	private $faultTypeCode;
	
	/**
	 * 
	 */
	private $mobPhoneNum;
	
	/**
	 * 
	 */
	private $orderChannel;
	
	/**
	 * 
	 */
	private $orderTime;
	
	/**
	 * 
	 */
	private $phoneNum;
	
	/**
	 * 
	 */
	private $proName;
	
	/**
	 * 
	 */
	private $saleDate;
	
	/**
	 * 
	 */
	private $saleQty;
	
	/**
	 * 
	 */
	private $salesPerson;
	
	/**
	 * 
	 */
	private $sapOrderType;
	
	/**
	 * 
	 */
	private $serviceTime;
	
	/**
	 * 
	 */
	private $sourceOrderItemId;
	
	/**
	 * 
	 */
	private $srvAddress;
	
	/**
	 * 
	 */
	private $srvAreaCode;
	
	/**
	 * 
	 */
	private $srvMemo;
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
	}
	
	public function getCmmdtyQaType() {
		return $this->cmmdtyQaType;
	}
	
	public function setCmmdtyQaType($cmmdtyQaType) {
		$this->cmmdtyQaType = $cmmdtyQaType;
		$this->apiParams["cmmdtyQaType"] = $cmmdtyQaType;
	}
	
	public function getConsignee() {
		return $this->consignee;
	}
	
	public function setConsignee($consignee) {
		$this->consignee = $consignee;
		$this->apiParams["consignee"] = $consignee;
	}
	
	public function getExtdCmmdtyBand() {
		return $this->extdCmmdtyBand;
	}
	
	public function setExtdCmmdtyBand($extdCmmdtyBand) {
		$this->extdCmmdtyBand = $extdCmmdtyBand;
		$this->apiParams["extdCmmdtyBand"] = $extdCmmdtyBand;
	}
	
	public function getExtdCmmdtyCtgry() {
		return $this->extdCmmdtyCtgry;
	}
	
	public function setExtdCmmdtyCtgry($extdCmmdtyCtgry) {
		$this->extdCmmdtyCtgry = $extdCmmdtyCtgry;
		$this->apiParams["extdCmmdtyCtgry"] = $extdCmmdtyCtgry;
	}
	
	public function getExtdCommodityCode() {
		return $this->extdCommodityCode;
	}
	
	public function setExtdCommodityCode($extdCommodityCode) {
		$this->extdCommodityCode = $extdCommodityCode;
		$this->apiParams["extdCommodityCode"] = $extdCommodityCode;
	}
	
	public function getExtdCommodityName() {
		return $this->extdCommodityName;
	}
	
	public function setExtdCommodityName($extdCommodityName) {
		$this->extdCommodityName = $extdCommodityName;
		$this->apiParams["extdCommodityName"] = $extdCommodityName;
	}
	
	public function getFaultTypeCode() {
		return $this->faultTypeCode;
	}
	
	public function setFaultTypeCode($faultTypeCode) {
		$this->faultTypeCode = $faultTypeCode;
		$this->apiParams["faultTypeCode"] = $faultTypeCode;
	}
	
	public function getMobPhoneNum() {
		return $this->mobPhoneNum;
	}
	
	public function setMobPhoneNum($mobPhoneNum) {
		$this->mobPhoneNum = $mobPhoneNum;
		$this->apiParams["mobPhoneNum"] = $mobPhoneNum;
	}
	
	public function getOrderChannel() {
		return $this->orderChannel;
	}
	
	public function setOrderChannel($orderChannel) {
		$this->orderChannel = $orderChannel;
		$this->apiParams["orderChannel"] = $orderChannel;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}
	
	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getProName() {
		return $this->proName;
	}
	
	public function setProName($proName) {
		$this->proName = $proName;
		$this->apiParams["proName"] = $proName;
	}
	
	public function getSaleDate() {
		return $this->saleDate;
	}
	
	public function setSaleDate($saleDate) {
		$this->saleDate = $saleDate;
		$this->apiParams["saleDate"] = $saleDate;
	}
	
	public function getSaleQty() {
		return $this->saleQty;
	}
	
	public function setSaleQty($saleQty) {
		$this->saleQty = $saleQty;
		$this->apiParams["saleQty"] = $saleQty;
	}
	
	public function getSalesPerson() {
		return $this->salesPerson;
	}
	
	public function setSalesPerson($salesPerson) {
		$this->salesPerson = $salesPerson;
		$this->apiParams["salesPerson"] = $salesPerson;
	}
	
	public function getSapOrderType() {
		return $this->sapOrderType;
	}
	
	public function setSapOrderType($sapOrderType) {
		$this->sapOrderType = $sapOrderType;
		$this->apiParams["sapOrderType"] = $sapOrderType;
	}
	
	public function getServiceTime() {
		return $this->serviceTime;
	}
	
	public function setServiceTime($serviceTime) {
		$this->serviceTime = $serviceTime;
		$this->apiParams["serviceTime"] = $serviceTime;
	}
	
	public function getSourceOrderItemId() {
		return $this->sourceOrderItemId;
	}
	
	public function setSourceOrderItemId($sourceOrderItemId) {
		$this->sourceOrderItemId = $sourceOrderItemId;
		$this->apiParams["sourceOrderItemId"] = $sourceOrderItemId;
	}
	
	public function getSrvAddress() {
		return $this->srvAddress;
	}
	
	public function setSrvAddress($srvAddress) {
		$this->srvAddress = $srvAddress;
		$this->apiParams["srvAddress"] = $srvAddress;
	}
	
	public function getSrvAreaCode() {
		return $this->srvAreaCode;
	}
	
	public function setSrvAreaCode($srvAreaCode) {
		$this->srvAreaCode = $srvAreaCode;
		$this->apiParams["srvAreaCode"] = $srvAreaCode;
	}
	
	public function getSrvMemo() {
		return $this->srvMemo;
	}
	
	public function setSrvMemo($srvMemo) {
		$this->srvMemo = $srvMemo;
		$this->apiParams["srvMemo"] = $srvMemo;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.merorderdirect.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->cityCode, 'cityCode');
		RequestCheckUtil::checkNotNull($this->cmmdtyQaType, 'cmmdtyQaType');
		RequestCheckUtil::checkNotNull($this->consignee, 'consignee');
		RequestCheckUtil::checkNotNull($this->extdCmmdtyBand, 'extdCmmdtyBand');
		RequestCheckUtil::checkNotNull($this->extdCmmdtyCtgry, 'extdCmmdtyCtgry');
		RequestCheckUtil::checkNotNull($this->extdCommodityName, 'extdCommodityName');
		RequestCheckUtil::checkNotNull($this->mobPhoneNum, 'mobPhoneNum');
		RequestCheckUtil::checkNotNull($this->orderChannel, 'orderChannel');
		RequestCheckUtil::checkNotNull($this->orderTime, 'orderTime');
		RequestCheckUtil::checkNotNull($this->proName, 'proName');
		RequestCheckUtil::checkNotNull($this->saleDate, 'saleDate');
		RequestCheckUtil::checkNotNull($this->saleQty, 'saleQty');
		RequestCheckUtil::checkNotNull($this->salesPerson, 'salesPerson');
		RequestCheckUtil::checkNotNull($this->sapOrderType, 'sapOrderType');
		RequestCheckUtil::checkNotNull($this->serviceTime, 'serviceTime');
		RequestCheckUtil::checkNotNull($this->sourceOrderItemId, 'sourceOrderItemId');
		RequestCheckUtil::checkNotNull($this->srvAddress, 'srvAddress');
		RequestCheckUtil::checkNotNull($this->srvAreaCode, 'srvAreaCode');
	}
	
	public function getBizName(){
		return "addMerOrderDirect";
	}
	
}

?>