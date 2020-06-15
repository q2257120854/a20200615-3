<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-1-9
 */
class BillReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $billDetailReqItemList;
	
	public function getBillDetailReqItemList() {
		return $this->billDetailReqItemList;
	}
	
	public function setBillDetailReqItemList($billDetailReqItemList) {
		$this->billDetailReqItemList = $billDetailReqItemList;
		$arr = array();
		foreach ($billDetailReqItemList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["billDetailReqItemList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.bill.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "receiveBill";
	}
	
}

class BillDetailReqItemList {

	private $apiParams = array();
	
	private $billDate;
	
	private $clearAmount;
	
	private $clearDate;
	
	private $cmmdtyCode;
	
	private $comment;
	
	private $goodsAmount;
	
	private $orderId;
	
	private $orderItemId;
	
	private $platformDiscountAmount;
	
	private $platformUsageDiscount;
	
	private $platformUsageFee;
	
	private $promotionDiscount;
	
	private $promotionFee;
	
	private $receiveTime;
	
	private $settlementCommission;
	
	private $settlementDifference;
	
	private $settlementPrice;
	
	private $snCmmdtyCode;
	
	private $snCmmdtyName;
	
	private $suningDiscountAmount;
	
	private $supplierCode;
	
	private $tradeType;
	
	private $transportFee;
	
	public function getBillDate() {
		return $this->billDate;
	}

	public function setBillDate($billDate) {
		$this->billDate = $billDate;
		$this->apiParams["billDate"] = $billDate;
	}
	
	public function getClearAmount() {
		return $this->clearAmount;
	}

	public function setClearAmount($clearAmount) {
		$this->clearAmount = $clearAmount;
		$this->apiParams["clearAmount"] = $clearAmount;
	}
	
	public function getClearDate() {
		return $this->clearDate;
	}

	public function setClearDate($clearDate) {
		$this->clearDate = $clearDate;
		$this->apiParams["clearDate"] = $clearDate;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getComment() {
		return $this->comment;
	}

	public function setComment($comment) {
		$this->comment = $comment;
		$this->apiParams["comment"] = $comment;
	}
	
	public function getGoodsAmount() {
		return $this->goodsAmount;
	}

	public function setGoodsAmount($goodsAmount) {
		$this->goodsAmount = $goodsAmount;
		$this->apiParams["goodsAmount"] = $goodsAmount;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getPlatformDiscountAmount() {
		return $this->platformDiscountAmount;
	}

	public function setPlatformDiscountAmount($platformDiscountAmount) {
		$this->platformDiscountAmount = $platformDiscountAmount;
		$this->apiParams["platformDiscountAmount"] = $platformDiscountAmount;
	}
	
	public function getPlatformUsageDiscount() {
		return $this->platformUsageDiscount;
	}

	public function setPlatformUsageDiscount($platformUsageDiscount) {
		$this->platformUsageDiscount = $platformUsageDiscount;
		$this->apiParams["platformUsageDiscount"] = $platformUsageDiscount;
	}
	
	public function getPlatformUsageFee() {
		return $this->platformUsageFee;
	}

	public function setPlatformUsageFee($platformUsageFee) {
		$this->platformUsageFee = $platformUsageFee;
		$this->apiParams["platformUsageFee"] = $platformUsageFee;
	}
	
	public function getPromotionDiscount() {
		return $this->promotionDiscount;
	}

	public function setPromotionDiscount($promotionDiscount) {
		$this->promotionDiscount = $promotionDiscount;
		$this->apiParams["promotionDiscount"] = $promotionDiscount;
	}
	
	public function getPromotionFee() {
		return $this->promotionFee;
	}

	public function setPromotionFee($promotionFee) {
		$this->promotionFee = $promotionFee;
		$this->apiParams["promotionFee"] = $promotionFee;
	}
	
	public function getReceiveTime() {
		return $this->receiveTime;
	}

	public function setReceiveTime($receiveTime) {
		$this->receiveTime = $receiveTime;
		$this->apiParams["receiveTime"] = $receiveTime;
	}
	
	public function getSettlementCommission() {
		return $this->settlementCommission;
	}

	public function setSettlementCommission($settlementCommission) {
		$this->settlementCommission = $settlementCommission;
		$this->apiParams["settlementCommission"] = $settlementCommission;
	}
	
	public function getSettlementDifference() {
		return $this->settlementDifference;
	}

	public function setSettlementDifference($settlementDifference) {
		$this->settlementDifference = $settlementDifference;
		$this->apiParams["settlementDifference"] = $settlementDifference;
	}
	
	public function getSettlementPrice() {
		return $this->settlementPrice;
	}

	public function setSettlementPrice($settlementPrice) {
		$this->settlementPrice = $settlementPrice;
		$this->apiParams["settlementPrice"] = $settlementPrice;
	}
	
	public function getSnCmmdtyCode() {
		return $this->snCmmdtyCode;
	}

	public function setSnCmmdtyCode($snCmmdtyCode) {
		$this->snCmmdtyCode = $snCmmdtyCode;
		$this->apiParams["snCmmdtyCode"] = $snCmmdtyCode;
	}
	
	public function getSnCmmdtyName() {
		return $this->snCmmdtyName;
	}

	public function setSnCmmdtyName($snCmmdtyName) {
		$this->snCmmdtyName = $snCmmdtyName;
		$this->apiParams["snCmmdtyName"] = $snCmmdtyName;
	}
	
	public function getSuningDiscountAmount() {
		return $this->suningDiscountAmount;
	}

	public function setSuningDiscountAmount($suningDiscountAmount) {
		$this->suningDiscountAmount = $suningDiscountAmount;
		$this->apiParams["suningDiscountAmount"] = $suningDiscountAmount;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}

	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getTradeType() {
		return $this->tradeType;
	}

	public function setTradeType($tradeType) {
		$this->tradeType = $tradeType;
		$this->apiParams["tradeType"] = $tradeType;
	}
	
	public function getTransportFee() {
		return $this->transportFee;
	}

	public function setTransportFee($transportFee) {
		$this->transportFee = $transportFee;
		$this->apiParams["transportFee"] = $transportFee;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>