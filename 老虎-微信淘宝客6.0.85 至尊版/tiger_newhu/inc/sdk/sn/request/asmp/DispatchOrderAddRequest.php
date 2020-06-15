<?php
/**
 * 苏宁开放平台接口 - 厂派订单接入
 *
 * @author suning
 * @date   2016-5-27
 */
class DispatchOrderAddRequest  extends SuningRequest{
	
	/**
	 * 工单来源。工单来源(厂家BP)
	 */
	private $orderSource;
	
	/**
	 * 来源系统行项目号。工厂工单号
	 */
	private $sourceOrderItemId;
	
	/**
	 * 工单类型。工单类型（作业项目），02-维修
	 */
	private $orderType;
	
	/**
	 * 服务申请提交时间。工厂提交工单时间。格式：YYYYMMDDHHMMSS
	 */
	private $orderTime;
	
	/**
	 * 服务数量。服务数量
	 */
	private $saleQty;
	
	/**
	 * 质保标识。0 保内， 1 保外， 2 延保， 3 意外保
	 */
	private $cmmdtyQaType;
	
	/**
	 * 作业时间。顾客期望上门时间。格式：YYYYMMDDHHMMSS
	 */
	private $serviceTime;
	
	/**
	 * 关联电器产品层次。关联电器产品层次
	 */
	private $extdCmmdtyBand;
	
	/**
	 * 关联电器电器商品类目。"R0104001 " "挂壁式单冷机 "
	 */
	private $extdCmmdtyCtgry;
	
	/**
	 * 关联电器商品描述。关联电器商品描述
	 */
	private $extdCommodityName;
	
	/**
	 * 顾客姓名。顾客姓名
	 */
	private $consignee;
	
	/**
	 * 固定电话。固定电话
	 */
	private $phoneNum;
	
	/**
	 * 移动电话。移动电话
	 */
	private $mobPhoneNum;
	
	/**
	 * 地址。标准八段地址 （（八段地址构成：随机数字；小区\大厦\单位\村；市；区\县\开发区；镇\街道办；路\道\街；巷\弄；号；详细地址。重新组合：区\县\开发区+镇\街道办+路\道\街+巷\弄+号+小区\大厦\单位\村+详细地址）
	 */
	private $srvAddress;
	
	/**
	 * 国标码。国标码
	 */
	private $standardCode;
	
	/**
	 * 服务城市编码。025 - 南京市
	 */
	private $cityCode;
	
	/**
	 * 运输区域编码。运输区域编码
	 */
	private $srvAreaCode;
	
	/**
	 * 服务订单备注。服务订单备注
	 */
	private $srvMemo;
	
	/**
	 * 购机日期。购机日期。格式：YYYYMMDDHHMMSS
	 */
	private $saleDate;
	
	/**
	 * 服务请求来源。SN、TM、JD、HE
	 */
	private $serviceSource;
	
	/**
	 * 创建人。如顾客创建则填写customer，客服创建填写客服工号，如商家填写商家编码  厂家可以用厂家客服工号
	 */
	private $salesPerson;
	
	/**
	 * 下单渠道。PC /APP /WEIXIN
	 */
	private $orderChannel;
	
	/**
	 * 故障代码。维修必填   可以默认
	 */
	private $faultTypeCode;
	
	/**
	 * 客户属性。0001 非常重要的客户（重大投诉）
	 */
	private $customerProperty;
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getSourceOrderItemId() {
		return $this->sourceOrderItemId;
	}
	
	public function setSourceOrderItemId($sourceOrderItemId) {
		$this->sourceOrderItemId = $sourceOrderItemId;
		$this->apiParams["sourceOrderItemId"] = $sourceOrderItemId;
	}
	
	public function getOrderType() {
		return $this->orderType;
	}
	
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
		$this->apiParams["orderType"] = $orderType;
	}
	
	public function getOrderTime() {
		return $this->orderTime;
	}
	
	public function setOrderTime($orderTime) {
		$this->orderTime = $orderTime;
		$this->apiParams["orderTime"] = $orderTime;
	}
	
	public function getSaleQty() {
		return $this->saleQty;
	}
	
	public function setSaleQty($saleQty) {
		$this->saleQty = $saleQty;
		$this->apiParams["saleQty"] = $saleQty;
	}
	
	public function getCmmdtyQaType() {
		return $this->cmmdtyQaType;
	}
	
	public function setCmmdtyQaType($cmmdtyQaType) {
		$this->cmmdtyQaType = $cmmdtyQaType;
		$this->apiParams["cmmdtyQaType"] = $cmmdtyQaType;
	}
	
	public function getServiceTime() {
		return $this->serviceTime;
	}
	
	public function setServiceTime($serviceTime) {
		$this->serviceTime = $serviceTime;
		$this->apiParams["serviceTime"] = $serviceTime;
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
	
	public function getExtdCommodityName() {
		return $this->extdCommodityName;
	}
	
	public function setExtdCommodityName($extdCommodityName) {
		$this->extdCommodityName = $extdCommodityName;
		$this->apiParams["extdCommodityName"] = $extdCommodityName;
	}
	
	public function getConsignee() {
		return $this->consignee;
	}
	
	public function setConsignee($consignee) {
		$this->consignee = $consignee;
		$this->apiParams["consignee"] = $consignee;
	}
	
	public function getPhoneNum() {
		return $this->phoneNum;
	}
	
	public function setPhoneNum($phoneNum) {
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}
	
	public function getMobPhoneNum() {
		return $this->mobPhoneNum;
	}
	
	public function setMobPhoneNum($mobPhoneNum) {
		$this->mobPhoneNum = $mobPhoneNum;
		$this->apiParams["mobPhoneNum"] = $mobPhoneNum;
	}
	
	public function getSrvAddress() {
		return $this->srvAddress;
	}
	
	public function setSrvAddress($srvAddress) {
		$this->srvAddress = $srvAddress;
		$this->apiParams["srvAddress"] = $srvAddress;
	}
	
	public function getStandardCode() {
		return $this->standardCode;
	}
	
	public function setStandardCode($standardCode) {
		$this->standardCode = $standardCode;
		$this->apiParams["standardCode"] = $standardCode;
	}
	
	public function getCityCode() {
		return $this->cityCode;
	}
	
	public function setCityCode($cityCode) {
		$this->cityCode = $cityCode;
		$this->apiParams["cityCode"] = $cityCode;
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
	
	public function getSaleDate() {
		return $this->saleDate;
	}
	
	public function setSaleDate($saleDate) {
		$this->saleDate = $saleDate;
		$this->apiParams["saleDate"] = $saleDate;
	}
	
	public function getServiceSource() {
		return $this->serviceSource;
	}
	
	public function setServiceSource($serviceSource) {
		$this->serviceSource = $serviceSource;
		$this->apiParams["serviceSource"] = $serviceSource;
	}
	
	public function getSalesPerson() {
		return $this->salesPerson;
	}
	
	public function setSalesPerson($salesPerson) {
		$this->salesPerson = $salesPerson;
		$this->apiParams["salesPerson"] = $salesPerson;
	}
	
	public function getOrderChannel() {
		return $this->orderChannel;
	}
	
	public function setOrderChannel($orderChannel) {
		$this->orderChannel = $orderChannel;
		$this->apiParams["orderChannel"] = $orderChannel;
	}
	
	public function getFaultTypeCode() {
		return $this->faultTypeCode;
	}
	
	public function setFaultTypeCode($faultTypeCode) {
		$this->faultTypeCode = $faultTypeCode;
		$this->apiParams["faultTypeCode"] = $faultTypeCode;
	}
	
	public function getCustomerProperty() {
		return $this->customerProperty;
	}
	
	public function setCustomerProperty($customerProperty) {
		$this->customerProperty = $customerProperty;
		$this->apiParams["customerProperty"] = $customerProperty;
	}
	
	public function getApiMethodName(){
		return 'suning.asmp.dispatchorder.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->sourceOrderItemId, 'sourceOrderItemId');
		RequestCheckUtil::checkNotNull($this->orderType, 'orderType');
		RequestCheckUtil::checkNotNull($this->orderTime, 'orderTime');
		RequestCheckUtil::checkNotNull($this->saleQty, 'saleQty');
		RequestCheckUtil::checkNotNull($this->cmmdtyQaType, 'cmmdtyQaType');
		RequestCheckUtil::checkNotNull($this->extdCmmdtyBand, 'extdCmmdtyBand');
		RequestCheckUtil::checkNotNull($this->extdCmmdtyCtgry, 'extdCmmdtyCtgry');
		RequestCheckUtil::checkNotNull($this->consignee, 'consignee');
		RequestCheckUtil::checkNotNull($this->mobPhoneNum, 'mobPhoneNum');
		RequestCheckUtil::checkNotNull($this->srvAddress, 'srvAddress');
		RequestCheckUtil::checkNotNull($this->standardCode, 'standardCode');
		RequestCheckUtil::checkNotNull($this->salesPerson, 'salesPerson');
	}
	
	public function getBizName(){
		return "addDispatchOrder";
	}
	
}

?>