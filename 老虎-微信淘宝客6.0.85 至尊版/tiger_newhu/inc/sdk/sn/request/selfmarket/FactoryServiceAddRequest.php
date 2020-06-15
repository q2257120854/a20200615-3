<?php
/**
 * 苏宁开放平台接口 - 厂家安装订单信息反馈
 *
 * @author suning
 * @date   2016-4-20
 */
class FactoryServiceAddRequest  extends SuningRequest{
	
	/**
	 * 条目GUID。服务订单条目编码
	 */
	private $recordGuId;
	
	/**
	 * 行项目GUID。服务订单行项目编码
	 */
	private $itemGuId;
	
	/**
	 * 服务订单号。服务订单编码
	 */
	private $srvOrdId;
	
	/**
	 * 订单类型。ZA15:厂家安装订单。
	 */
	private $srvOrdType;
	
	/**
	 * 订单状态。PG：派工；XD：销单；GX：更新。
	 */
	private $orderStatus;
	
	/**
	 * 工厂网点名称。工厂作业网点名称。派工时传输
	 */
	private $facSiteName;
	
	/**
	 * 工厂网点电话。工厂作业网点联系方式。派工时传输
	 */
	private $facSiteTel;
	
	/**
	 * 订单完成情况。E0006：服务完成；E0007：服务未完成；E0008：服务取消。销单状态填写。
	 */
	private $srvStatus;
	
	/**
	 * 未完成原因。作业未完成原因。销单状态填写。
	 */
	private $inCompleteReason;
	
	/**
	 * 售后之恋ID。表结构关联主键。用于关联传输和反馈信息。由获取厂家安装订单信息接口获得。
	 */
	private $installedId;
	
	public function getRecordGuId() {
		return $this->recordGuId;
	}
	
	public function setRecordGuId($recordGuId) {
		$this->recordGuId = $recordGuId;
		$this->apiParams["recordGuId"] = $recordGuId;
	}
	
	public function getItemGuId() {
		return $this->itemGuId;
	}
	
	public function setItemGuId($itemGuId) {
		$this->itemGuId = $itemGuId;
		$this->apiParams["itemGuId"] = $itemGuId;
	}
	
	public function getSrvOrdId() {
		return $this->srvOrdId;
	}
	
	public function setSrvOrdId($srvOrdId) {
		$this->srvOrdId = $srvOrdId;
		$this->apiParams["srvOrdId"] = $srvOrdId;
	}
	
	public function getSrvOrdType() {
		return $this->srvOrdType;
	}
	
	public function setSrvOrdType($srvOrdType) {
		$this->srvOrdType = $srvOrdType;
		$this->apiParams["srvOrdType"] = $srvOrdType;
	}
	
	public function getOrderStatus() {
		return $this->orderStatus;
	}
	
	public function setOrderStatus($orderStatus) {
		$this->orderStatus = $orderStatus;
		$this->apiParams["orderStatus"] = $orderStatus;
	}
	
	public function getFacSiteName() {
		return $this->facSiteName;
	}
	
	public function setFacSiteName($facSiteName) {
		$this->facSiteName = $facSiteName;
		$this->apiParams["facSiteName"] = $facSiteName;
	}
	
	public function getFacSiteTel() {
		return $this->facSiteTel;
	}
	
	public function setFacSiteTel($facSiteTel) {
		$this->facSiteTel = $facSiteTel;
		$this->apiParams["facSiteTel"] = $facSiteTel;
	}
	
	public function getSrvStatus() {
		return $this->srvStatus;
	}
	
	public function setSrvStatus($srvStatus) {
		$this->srvStatus = $srvStatus;
		$this->apiParams["srvStatus"] = $srvStatus;
	}
	
	public function getInCompleteReason() {
		return $this->inCompleteReason;
	}
	
	public function setInCompleteReason($inCompleteReason) {
		$this->inCompleteReason = $inCompleteReason;
		$this->apiParams["inCompleteReason"] = $inCompleteReason;
	}
	
	public function getInstalledId() {
		return $this->installedId;
	}
	
	public function setInstalledId($installedId) {
		$this->installedId = $installedId;
		$this->apiParams["installedId"] = $installedId;
	}
	
	public function getApiMethodName(){
		return 'suning.facservice.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->recordGuId, 'recordGuId');
		RequestCheckUtil::checkNotNull($this->itemGuId, 'itemGuId');
		RequestCheckUtil::checkNotNull($this->srvOrdId, 'srvOrdId');
		RequestCheckUtil::checkNotNull($this->srvOrdType, 'srvOrdType');
		RequestCheckUtil::checkNotNull($this->orderStatus, 'orderStatus');
		RequestCheckUtil::checkNotNull($this->srvStatus, 'srvStatus');
		RequestCheckUtil::checkNotNull($this->installedId, 'installedId');
	}
	
	public function getBizName(){
		return "facserviceadd";
	}
	
}

?>