<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-12-13
 */
class AppointCreateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $actionEndTime;
	
	/**
	 * 
	 */
	private $actionId;
	
	/**
	 * 
	 */
	private $actionName;
	
	/**
	 * 
	 */
	private $actionStartTime;
	
	/**
	 * 
	 */
	private $actionType;
	
	/**
	 * 
	 */
	private $adapteTerminal;
	
	/**
	 * 
	 */
	private $enrollInfoCode;
	
	/**
	 * 
	 */
	private $excludeCitys;
	
	/**
	 * 
	 */
	private $goodsList;
	
	/**
	 * 
	 */
	private $goodsSubList;
	
	/**
	 * 
	 */
	private $noticePhone;
	
	/**
	 * 
	 */
	private $operateType;
	
	/**
	 * 
	 */
	private $operateUser;
	
	/**
	 * 
	 */
	private $otherTerminalSale;
	
	/**
	 * 
	 */
	private $partType;
	
	/**
	 * 
	 */
	private $phoneShareContent;
	
	/**
	 * 
	 */
	private $phoneShareImgUrl;
	
	/**
	 * 
	 */
	private $phoneShareTitle;
	
	/**
	 * 
	 */
	private $phoneShareUrl;
	
	/**
	 * 
	 */
	private $purchaseEndTime;
	
	/**
	 * 
	 */
	private $purchaseStartTime;
	
	/**
	 * 
	 */
	private $receiveSys;
	
	/**
	 * 
	 */
	private $scheduleEndTime;
	
	/**
	 * 
	 */
	private $scheduleStartTime;
	
	/**
	 * 
	 */
	private $sendScalperMsg;
	
	/**
	 * 
	 */
	private $sendUserMsg;
	
	/**
	 * 
	 */
	private $supervipPurchaseStartTime;
	
	/**
	 * 
	 */
	private $ticketResaleStartTime;
	
	/**
	 * 
	 */
	private $transitDate;
	
	/**
	 * 
	 */
	private $transitFlag;
	
	/**
	 * 
	 */
	private $vendorCode;
	
	/**
	 * 
	 */
	private $vendorName;
	
	/**
	 * 
	 */
	private $vendorType;
	
	/**
	 * 
	 */
	private $versionNumber;
	
	public function getActionEndTime() {
		return $this->actionEndTime;
	}
	
	public function setActionEndTime($actionEndTime) {
		$this->actionEndTime = $actionEndTime;
		$this->apiParams["actionEndTime"] = $actionEndTime;
	}
	
	public function getActionId() {
		return $this->actionId;
	}
	
	public function setActionId($actionId) {
		$this->actionId = $actionId;
		$this->apiParams["actionId"] = $actionId;
	}
	
	public function getActionName() {
		return $this->actionName;
	}
	
	public function setActionName($actionName) {
		$this->actionName = $actionName;
		$this->apiParams["actionName"] = $actionName;
	}
	
	public function getActionStartTime() {
		return $this->actionStartTime;
	}
	
	public function setActionStartTime($actionStartTime) {
		$this->actionStartTime = $actionStartTime;
		$this->apiParams["actionStartTime"] = $actionStartTime;
	}
	
	public function getActionType() {
		return $this->actionType;
	}
	
	public function setActionType($actionType) {
		$this->actionType = $actionType;
		$this->apiParams["actionType"] = $actionType;
	}
	
	public function getAdapteTerminal() {
		return $this->adapteTerminal;
	}
	
	public function setAdapteTerminal($adapteTerminal) {
		$this->adapteTerminal = $adapteTerminal;
		$this->apiParams["adapteTerminal"] = $adapteTerminal;
	}
	
	public function getEnrollInfoCode() {
		return $this->enrollInfoCode;
	}
	
	public function setEnrollInfoCode($enrollInfoCode) {
		$this->enrollInfoCode = $enrollInfoCode;
		$this->apiParams["enrollInfoCode"] = $enrollInfoCode;
	}
	
	public function getExcludeCitys() {
		return $this->excludeCitys;
	}
	
	public function setExcludeCitys($excludeCitys) {
		$this->excludeCitys = $excludeCitys;
		$this->apiParams["excludeCitys"] = $excludeCitys;
	}
	
	public function getGoodsList() {
		return $this->goodsList;
	}
	
	public function setGoodsList($goodsList) {
		$this->goodsList = $goodsList;
		$arr = array();
		foreach ($goodsList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["goodsList"] = $arr;
	}
	
	public function getGoodsSubList() {
		return $this->goodsSubList;
	}
	
	public function setGoodsSubList($goodsSubList) {
		$this->goodsSubList = $goodsSubList;
		$arr = array();
		foreach ($goodsSubList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["goodsSubList"] = $arr;
	}
	
	public function getNoticePhone() {
		return $this->noticePhone;
	}
	
	public function setNoticePhone($noticePhone) {
		$this->noticePhone = $noticePhone;
		$this->apiParams["noticePhone"] = $noticePhone;
	}
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getOperateUser() {
		return $this->operateUser;
	}
	
	public function setOperateUser($operateUser) {
		$this->operateUser = $operateUser;
		$this->apiParams["operateUser"] = $operateUser;
	}
	
	public function getOtherTerminalSale() {
		return $this->otherTerminalSale;
	}
	
	public function setOtherTerminalSale($otherTerminalSale) {
		$this->otherTerminalSale = $otherTerminalSale;
		$this->apiParams["otherTerminalSale"] = $otherTerminalSale;
	}
	
	public function getPartType() {
		return $this->partType;
	}
	
	public function setPartType($partType) {
		$this->partType = $partType;
		$this->apiParams["partType"] = $partType;
	}
	
	public function getPhoneShareContent() {
		return $this->phoneShareContent;
	}
	
	public function setPhoneShareContent($phoneShareContent) {
		$this->phoneShareContent = $phoneShareContent;
		$this->apiParams["phoneShareContent"] = $phoneShareContent;
	}
	
	public function getPhoneShareImgUrl() {
		return $this->phoneShareImgUrl;
	}
	
	public function setPhoneShareImgUrl($phoneShareImgUrl) {
		$this->phoneShareImgUrl = $phoneShareImgUrl;
		$this->apiParams["phoneShareImgUrl"] = $phoneShareImgUrl;
	}
	
	public function getPhoneShareTitle() {
		return $this->phoneShareTitle;
	}
	
	public function setPhoneShareTitle($phoneShareTitle) {
		$this->phoneShareTitle = $phoneShareTitle;
		$this->apiParams["phoneShareTitle"] = $phoneShareTitle;
	}
	
	public function getPhoneShareUrl() {
		return $this->phoneShareUrl;
	}
	
	public function setPhoneShareUrl($phoneShareUrl) {
		$this->phoneShareUrl = $phoneShareUrl;
		$this->apiParams["phoneShareUrl"] = $phoneShareUrl;
	}
	
	public function getPurchaseEndTime() {
		return $this->purchaseEndTime;
	}
	
	public function setPurchaseEndTime($purchaseEndTime) {
		$this->purchaseEndTime = $purchaseEndTime;
		$this->apiParams["purchaseEndTime"] = $purchaseEndTime;
	}
	
	public function getPurchaseStartTime() {
		return $this->purchaseStartTime;
	}
	
	public function setPurchaseStartTime($purchaseStartTime) {
		$this->purchaseStartTime = $purchaseStartTime;
		$this->apiParams["purchaseStartTime"] = $purchaseStartTime;
	}
	
	public function getReceiveSys() {
		return $this->receiveSys;
	}
	
	public function setReceiveSys($receiveSys) {
		$this->receiveSys = $receiveSys;
		$this->apiParams["receiveSys"] = $receiveSys;
	}
	
	public function getScheduleEndTime() {
		return $this->scheduleEndTime;
	}
	
	public function setScheduleEndTime($scheduleEndTime) {
		$this->scheduleEndTime = $scheduleEndTime;
		$this->apiParams["scheduleEndTime"] = $scheduleEndTime;
	}
	
	public function getScheduleStartTime() {
		return $this->scheduleStartTime;
	}
	
	public function setScheduleStartTime($scheduleStartTime) {
		$this->scheduleStartTime = $scheduleStartTime;
		$this->apiParams["scheduleStartTime"] = $scheduleStartTime;
	}
	
	public function getSendScalperMsg() {
		return $this->sendScalperMsg;
	}
	
	public function setSendScalperMsg($sendScalperMsg) {
		$this->sendScalperMsg = $sendScalperMsg;
		$this->apiParams["sendScalperMsg"] = $sendScalperMsg;
	}
	
	public function getSendUserMsg() {
		return $this->sendUserMsg;
	}
	
	public function setSendUserMsg($sendUserMsg) {
		$this->sendUserMsg = $sendUserMsg;
		$this->apiParams["sendUserMsg"] = $sendUserMsg;
	}
	
	public function getSupervipPurchaseStartTime() {
		return $this->supervipPurchaseStartTime;
	}
	
	public function setSupervipPurchaseStartTime($supervipPurchaseStartTime) {
		$this->supervipPurchaseStartTime = $supervipPurchaseStartTime;
		$this->apiParams["supervipPurchaseStartTime"] = $supervipPurchaseStartTime;
	}
	
	public function getTicketResaleStartTime() {
		return $this->ticketResaleStartTime;
	}
	
	public function setTicketResaleStartTime($ticketResaleStartTime) {
		$this->ticketResaleStartTime = $ticketResaleStartTime;
		$this->apiParams["ticketResaleStartTime"] = $ticketResaleStartTime;
	}
	
	public function getTransitDate() {
		return $this->transitDate;
	}
	
	public function setTransitDate($transitDate) {
		$this->transitDate = $transitDate;
		$this->apiParams["transitDate"] = $transitDate;
	}
	
	public function getTransitFlag() {
		return $this->transitFlag;
	}
	
	public function setTransitFlag($transitFlag) {
		$this->transitFlag = $transitFlag;
		$this->apiParams["transitFlag"] = $transitFlag;
	}
	
	public function getVendorCode() {
		return $this->vendorCode;
	}
	
	public function setVendorCode($vendorCode) {
		$this->vendorCode = $vendorCode;
		$this->apiParams["vendorCode"] = $vendorCode;
	}
	
	public function getVendorName() {
		return $this->vendorName;
	}
	
	public function setVendorName($vendorName) {
		$this->vendorName = $vendorName;
		$this->apiParams["vendorName"] = $vendorName;
	}
	
	public function getVendorType() {
		return $this->vendorType;
	}
	
	public function setVendorType($vendorType) {
		$this->vendorType = $vendorType;
		$this->apiParams["vendorType"] = $vendorType;
	}
	
	public function getVersionNumber() {
		return $this->versionNumber;
	}
	
	public function setVersionNumber($versionNumber) {
		$this->versionNumber = $versionNumber;
		$this->apiParams["versionNumber"] = $versionNumber;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.appoint.create';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->actionEndTime, 'actionEndTime');
		RequestCheckUtil::checkNotNull($this->actionName, 'actionName');
		RequestCheckUtil::checkNotNull($this->actionStartTime, 'actionStartTime');
		RequestCheckUtil::checkNotNull($this->actionType, 'actionType');
		RequestCheckUtil::checkNotNull($this->adapteTerminal, 'adapteTerminal');
		RequestCheckUtil::checkNotNull($this->enrollInfoCode, 'enrollInfoCode');
		RequestCheckUtil::checkNotNull($this->excludeCitys, 'excludeCitys');
		RequestCheckUtil::checkNotNull($this->noticePhone, 'noticePhone');
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
		RequestCheckUtil::checkNotNull($this->operateUser, 'operateUser');
		RequestCheckUtil::checkNotNull($this->otherTerminalSale, 'otherTerminalSale');
		RequestCheckUtil::checkNotNull($this->partType, 'partType');
		RequestCheckUtil::checkNotNull($this->phoneShareContent, 'phoneShareContent');
		RequestCheckUtil::checkNotNull($this->phoneShareImgUrl, 'phoneShareImgUrl');
		RequestCheckUtil::checkNotNull($this->phoneShareTitle, 'phoneShareTitle');
		RequestCheckUtil::checkNotNull($this->phoneShareUrl, 'phoneShareUrl');
		RequestCheckUtil::checkNotNull($this->purchaseEndTime, 'purchaseEndTime');
		RequestCheckUtil::checkNotNull($this->purchaseStartTime, 'purchaseStartTime');
		RequestCheckUtil::checkNotNull($this->receiveSys, 'receiveSys');
		RequestCheckUtil::checkNotNull($this->scheduleEndTime, 'scheduleEndTime');
		RequestCheckUtil::checkNotNull($this->scheduleStartTime, 'scheduleStartTime');
		RequestCheckUtil::checkNotNull($this->sendScalperMsg, 'sendScalperMsg');
		RequestCheckUtil::checkNotNull($this->sendUserMsg, 'sendUserMsg');
		RequestCheckUtil::checkNotNull($this->ticketResaleStartTime, 'ticketResaleStartTime');
		RequestCheckUtil::checkNotNull($this->transitFlag, 'transitFlag');
		RequestCheckUtil::checkNotNull($this->vendorCode, 'vendorCode');
		RequestCheckUtil::checkNotNull($this->vendorName, 'vendorName');
		RequestCheckUtil::checkNotNull($this->vendorType, 'vendorType');
		RequestCheckUtil::checkNotNull($this->versionNumber, 'versionNumber');
	}
	
	public function getBizName(){
		return "createAppoint";
	}
	
}

class GoodsList {

	private $apiParams = array();
	
	private $appointPrice;
	
	private $catengrpCode;
	
	private $color;
	
	private $defaultGoodsFlags;
	
	private $msgContent;
	
	private $partName;
	
	private $partnumber;
	
	private $personBuyLimit;
	
	private $price;
	
	private $priceLabel;
	
	private $standard;
	
	private $totalLimit;
	
	public function getAppointPrice() {
		return $this->appointPrice;
	}

	public function setAppointPrice($appointPrice) {
		$this->appointPrice = $appointPrice;
		$this->apiParams["appointPrice"] = $appointPrice;
	}
	
	public function getCatengrpCode() {
		return $this->catengrpCode;
	}

	public function setCatengrpCode($catengrpCode) {
		$this->catengrpCode = $catengrpCode;
		$this->apiParams["catengrpCode"] = $catengrpCode;
	}
	
	public function getColor() {
		return $this->color;
	}

	public function setColor($color) {
		$this->color = $color;
		$this->apiParams["color"] = $color;
	}
	
	public function getDefaultGoodsFlags() {
		return $this->defaultGoodsFlags;
	}

	public function setDefaultGoodsFlags($defaultGoodsFlags) {
		$this->defaultGoodsFlags = $defaultGoodsFlags;
		$this->apiParams["defaultGoodsFlags"] = $defaultGoodsFlags;
	}
	
	public function getMsgContent() {
		return $this->msgContent;
	}

	public function setMsgContent($msgContent) {
		$this->msgContent = $msgContent;
		$this->apiParams["msgContent"] = $msgContent;
	}
	
	public function getPartName() {
		return $this->partName;
	}

	public function setPartName($partName) {
		$this->partName = $partName;
		$this->apiParams["partName"] = $partName;
	}
	
	public function getPartnumber() {
		return $this->partnumber;
	}

	public function setPartnumber($partnumber) {
		$this->partnumber = $partnumber;
		$this->apiParams["partnumber"] = $partnumber;
	}
	
	public function getPersonBuyLimit() {
		return $this->personBuyLimit;
	}

	public function setPersonBuyLimit($personBuyLimit) {
		$this->personBuyLimit = $personBuyLimit;
		$this->apiParams["personBuyLimit"] = $personBuyLimit;
	}
	
	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
		$this->apiParams["price"] = $price;
	}
	
	public function getPriceLabel() {
		return $this->priceLabel;
	}

	public function setPriceLabel($priceLabel) {
		$this->priceLabel = $priceLabel;
		$this->apiParams["priceLabel"] = $priceLabel;
	}
	
	public function getStandard() {
		return $this->standard;
	}

	public function setStandard($standard) {
		$this->standard = $standard;
		$this->apiParams["standard"] = $standard;
	}
	
	public function getTotalLimit() {
		return $this->totalLimit;
	}

	public function setTotalLimit($totalLimit) {
		$this->totalLimit = $totalLimit;
		$this->apiParams["totalLimit"] = $totalLimit;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

class GoodsSubList {

	private $apiParams = array();
	
	private $count;
	
	private $subAppointPrice;
	
	private $subPartName;
	
	private $subPartNumber;
	
	private $subPrice;
	
	private $subTextPrice;
	
	public function getCount() {
		return $this->count;
	}

	public function setCount($count) {
		$this->count = $count;
		$this->apiParams["count"] = $count;
	}
	
	public function getSubAppointPrice() {
		return $this->subAppointPrice;
	}

	public function setSubAppointPrice($subAppointPrice) {
		$this->subAppointPrice = $subAppointPrice;
		$this->apiParams["subAppointPrice"] = $subAppointPrice;
	}
	
	public function getSubPartName() {
		return $this->subPartName;
	}

	public function setSubPartName($subPartName) {
		$this->subPartName = $subPartName;
		$this->apiParams["subPartName"] = $subPartName;
	}
	
	public function getSubPartNumber() {
		return $this->subPartNumber;
	}

	public function setSubPartNumber($subPartNumber) {
		$this->subPartNumber = $subPartNumber;
		$this->apiParams["subPartNumber"] = $subPartNumber;
	}
	
	public function getSubPrice() {
		return $this->subPrice;
	}

	public function setSubPrice($subPrice) {
		$this->subPrice = $subPrice;
		$this->apiParams["subPrice"] = $subPrice;
	}
	
	public function getSubTextPrice() {
		return $this->subTextPrice;
	}

	public function setSubTextPrice($subTextPrice) {
		$this->subTextPrice = $subTextPrice;
		$this->apiParams["subTextPrice"] = $subTextPrice;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>