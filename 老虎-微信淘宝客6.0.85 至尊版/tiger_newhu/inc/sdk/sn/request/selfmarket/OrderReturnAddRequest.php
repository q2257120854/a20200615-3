<?php
/**
 * 苏宁开放平台接口 - 订单退货任务创建
 *
 * @author suning
 * @date   2015-12-28
 */
class OrderReturnAddRequest  extends SuningRequest{
	
	/**
	 * 外部订单编号。必须与发货订单号相同
	 */
	private $outOrderId;
	
	/**
	 * 外部原发货订单号。
	 */
	private $oldOrderId;
	
	/**
	 * 订单来源。201 天猫旗舰店，214京东， 203 苏宁， 204 亚马逊中国， 205当当 ，206 ebay,207 VIP，208 一号店，209 国美 210 拍拍，211 聚美，212 乐蜂 202 1688，301 其他(MIMS输其他)
	 */
	private $orderSource;
	
	/**
	 * 预期送达开始时间。格式为 yyyy-MM-dd HH:mm:ss
	 */
	private $expectStartTime;
	
	/**
	 * 预期送达结束时间。格式为 yyyy-MM-dd HH:mm:ss
	 */
	private $expectEndTime;
	
	/**
	 * 备注。销退时留言备注填充到此字段
	 */
	private $remark;
	
	/**
	 * 发件方邮编。
	 */
	private $senderZipCode;
	
	/**
	 * 发件方省份。（中文）
	 */
	private $senderProvince;
	
	/**
	 * 发件方城市。（中文）
	 */
	private $senderCity;
	
	/**
	 * 发件方区县。（中文）揽件为1且订单标识为9时必填
	 */
	private $senderArea;
	
	/**
	 * 发件方镇。（中文），如果没有镇就给全区
	 */
	private $senderTown;
	
	/**
	 * 发件方地址。（中文）揽件为1且订单标识为9时必填
	 */
	private $senderAddress;
	
	/**
	 * 发件方名称。发件方名称:（采购入库放供应商名称）， （销退填买家名称）， （调拨入库填写仓库名称）
	 */
	private $senderName;
	
	/**
	 * 发件方手机。发件方手机和电话二者必填其一
	 */
	private $senderMobile;
	
	/**
	 * 发件方电话。发件方手机和电话二者必填其一
	 */
	private $senderPhone;
	
	/**
	 * 1需要；空不需要；如果需要揽件  则商品行的运单号必须为空；如果不需要揽件，运单号保持必填
	 */
	private $takeFlag;
	
	/**
	 * 揽件标识为1时，订单标识必须为9；订单标识为9时，揽件标识必须为1
	 */
	private $orderFlag;
	
	/**
	 * 
	 */
	private $orderProductList;
	
	public function getOutOrderId() {
		return $this->outOrderId;
	}
	
	public function setOutOrderId($outOrderId) {
		$this->outOrderId = $outOrderId;
		$this->apiParams["outOrderId"] = $outOrderId;
	}
	
	public function getOldOrderId() {
		return $this->oldOrderId;
	}
	
	public function setOldOrderId($oldOrderId) {
		$this->oldOrderId = $oldOrderId;
		$this->apiParams["oldOrderId"] = $oldOrderId;
	}
	
	public function getOrderSource() {
		return $this->orderSource;
	}
	
	public function setOrderSource($orderSource) {
		$this->orderSource = $orderSource;
		$this->apiParams["orderSource"] = $orderSource;
	}
	
	public function getExpectStartTime() {
		return $this->expectStartTime;
	}
	
	public function setExpectStartTime($expectStartTime) {
		$this->expectStartTime = $expectStartTime;
		$this->apiParams["expectStartTime"] = $expectStartTime;
	}
	
	public function getExpectEndTime() {
		return $this->expectEndTime;
	}
	
	public function setExpectEndTime($expectEndTime) {
		$this->expectEndTime = $expectEndTime;
		$this->apiParams["expectEndTime"] = $expectEndTime;
	}
	
	public function getRemark() {
		return $this->remark;
	}
	
	public function setRemark($remark) {
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}
	
	public function getSenderZipCode() {
		return $this->senderZipCode;
	}
	
	public function setSenderZipCode($senderZipCode) {
		$this->senderZipCode = $senderZipCode;
		$this->apiParams["senderZipCode"] = $senderZipCode;
	}
	
	public function getSenderProvince() {
		return $this->senderProvince;
	}
	
	public function setSenderProvince($senderProvince) {
		$this->senderProvince = $senderProvince;
		$this->apiParams["senderProvince"] = $senderProvince;
	}
	
	public function getSenderCity() {
		return $this->senderCity;
	}
	
	public function setSenderCity($senderCity) {
		$this->senderCity = $senderCity;
		$this->apiParams["senderCity"] = $senderCity;
	}
	
	public function getSenderArea() {
		return $this->senderArea;
	}
	
	public function setSenderArea($senderArea) {
		$this->senderArea = $senderArea;
		$this->apiParams["senderArea"] = $senderArea;
	}
	
	public function getSenderTown() {
		return $this->senderTown;
	}
	
	public function setSenderTown($senderTown) {
		$this->senderTown = $senderTown;
		$this->apiParams["senderTown"] = $senderTown;
	}
	
	public function getSenderAddress() {
		return $this->senderAddress;
	}
	
	public function setSenderAddress($senderAddress) {
		$this->senderAddress = $senderAddress;
		$this->apiParams["senderAddress"] = $senderAddress;
	}
	
	public function getSenderName() {
		return $this->senderName;
	}
	
	public function setSenderName($senderName) {
		$this->senderName = $senderName;
		$this->apiParams["senderName"] = $senderName;
	}
	
	public function getSenderMobile() {
		return $this->senderMobile;
	}
	
	public function setSenderMobile($senderMobile) {
		$this->senderMobile = $senderMobile;
		$this->apiParams["senderMobile"] = $senderMobile;
	}
	
	public function getSenderPhone() {
		return $this->senderPhone;
	}
	
	public function setSenderPhone($senderPhone) {
		$this->senderPhone = $senderPhone;
		$this->apiParams["senderPhone"] = $senderPhone;
	}
	
	public function getTakeFlag() {
		return $this->takeFlag;
	}
	
	public function setTakeFlag($takeFlag) {
		$this->takeFlag = $takeFlag;
		$this->apiParams["takeFlag"] = $takeFlag;
	}
	
	public function getOrderFlag() {
		return $this->orderFlag;
	}
	
	public function setOrderFlag($orderFlag) {
		$this->orderFlag = $orderFlag;
		$this->apiParams["orderFlag"] = $orderFlag;
	}
	
	public function getOrderProductList() {
		return $this->orderProductList;
	}
	
	public function setOrderProductList($orderProductList) {
		$this->orderProductList = $orderProductList;
		$arr = array();
		foreach ($orderProductList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderProductList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.fourps.orderreturn.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->outOrderId, 'outOrderId');
		RequestCheckUtil::checkNotNull($this->oldOrderId, 'oldOrderId');
		RequestCheckUtil::checkNotNull($this->orderSource, 'orderSource');
		RequestCheckUtil::checkNotNull($this->expectStartTime, 'expectStartTime');
		RequestCheckUtil::checkNotNull($this->expectEndTime, 'expectEndTime');
		RequestCheckUtil::checkNotNull($this->senderProvince, 'senderProvince');
		RequestCheckUtil::checkNotNull($this->senderCity, 'senderCity');
		RequestCheckUtil::checkNotNull($this->senderName, 'senderName');
		RequestCheckUtil::checkNotNull($this->orderProductList, 'orderProductList');
	}
	
	public function getBizName(){
		return "addOrderReturn";
	}
	
}

class OrderProductList {

	private $apiParams = array();
	
	private $warehouseCode;
	
	private $orderItemId;
	
	private $returnReason;
	
	private $deliverNo;
	
	private $itemName;
	
	private $itemCode;
	
	private $outerItemId;
	
	private $itemQuantity;
	
	public function getWarehouseCode() {
		return $this->warehouseCode;
	}

	public function setWarehouseCode($warehouseCode) {
		$this->warehouseCode = $warehouseCode;
		$this->apiParams["warehouseCode"] = $warehouseCode;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getReturnReason() {
		return $this->returnReason;
	}

	public function setReturnReason($returnReason) {
		$this->returnReason = $returnReason;
		$this->apiParams["returnReason"] = $returnReason;
	}
	
	public function getDeliverNo() {
		return $this->deliverNo;
	}

	public function setDeliverNo($deliverNo) {
		$this->deliverNo = $deliverNo;
		$this->apiParams["deliverNo"] = $deliverNo;
	}
	
	public function getItemName() {
		return $this->itemName;
	}

	public function setItemName($itemName) {
		$this->itemName = $itemName;
		$this->apiParams["itemName"] = $itemName;
	}
	
	public function getItemCode() {
		return $this->itemCode;
	}

	public function setItemCode($itemCode) {
		$this->itemCode = $itemCode;
		$this->apiParams["itemCode"] = $itemCode;
	}
	
	public function getOuterItemId() {
		return $this->outerItemId;
	}

	public function setOuterItemId($outerItemId) {
		$this->outerItemId = $outerItemId;
		$this->apiParams["outerItemId"] = $outerItemId;
	}
	
	public function getItemQuantity() {
		return $this->itemQuantity;
	}

	public function setItemQuantity($itemQuantity) {
		$this->itemQuantity = $itemQuantity;
		$this->apiParams["itemQuantity"] = $itemQuantity;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>