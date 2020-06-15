<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class OdsOrderMessage {
	
	static $_TSPEC;
	public $addLocalTime = null;
	public $addTime = null;
	public $address = null;
	public $address2 = null;
	public $address3 = null;
	public $address4 = null;
	public $addressType = null;
	public $aigo = null;
	public $areaId = null;
	public $buyer = null;
	public $carriage = null;
	public $city = null;
	public $countryId = null;
	public $createTime = null;
	public $currencySymbol = null;
	public $customerEmail = null;
	public $edbId = null;
	public $erpOrderSn = null;
	public $exFavMoney = null;
	public $exPayMoney1 = null;
	public $exPayMoney2 = null;
	public $exPayMoney3 = null;
	public $extPayType = null;
	public $favourableMoney = null;
	public $goodsMoney = null;
	public $invoice = null;
	public $isHold = null;
	public $isPrintingPrice = null;
	public $lastOrderTime = null;
	public $mobile = null;
	public $money = null;
	public $oldOrderSn = null;
	public $orderId = null;
	public $orderSn = null;
	public $orderType = null;
	public $payType = null;
	public $postCode = null;
	public $remark = null;
	public $saleType = null;
	public $salesPlatform = null;
	public $scheduledSellingId = null;
	public $seqDataId = null;
	public $servicePhone = null;
	public $state = null;
	public $surplus = null;
	public $tel = null;
	public $thirdOrderSn = null;
	public $tmsOrderStatus = null;
	public $transportDay = null;
	public $transportId = null;
	public $transportTime = null;
	public $transportType = null;
	public $userId = null;
	public $userName = null;
	public $userType = null;
	public $userTypeName = null;
	public $vipclub = null;
	public $vipclubName = null;
	public $warehouse = null;
	public $withdrawAddress = null;
	public $parentOrderSn = null;
	public $id = null;
	public $detail = null;
	public $deliveryWarehouse = null;
	public $incoterm = null;
	public $includeNoGood = null;
	public $exchangeBackSn = null;
	public $deliveryType = null;
	public $isDelayCompensate = null;
	public $deliveryPromisedTime = null;
	public $productCode = null;
	public $senderName = null;
	public $senderTelephone = null;
	public $senderMobilePhone = null;
	public $senderAddress = null;
	public $senderProvince = null;
	public $senderCity = null;
	public $senderCountry = null;
	public $senderStreet = null;
	public $senderZipCode = null;
	public $orderBizType = null;
	public $isSpecialDelivery = null;
	public $originalParentOrderSn = null;
	public $odsOrderBizFlags = null;
	public $businessType = null;
	public $orderStatus = null;
	public $updateTime = null;
	public $exchangeRelationNo = null;
	public $extendColumn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'addLocalTime'
			),
			2 => array(
			'var' => 'addTime'
			),
			3 => array(
			'var' => 'address'
			),
			4 => array(
			'var' => 'address2'
			),
			5 => array(
			'var' => 'address3'
			),
			6 => array(
			'var' => 'address4'
			),
			7 => array(
			'var' => 'addressType'
			),
			8 => array(
			'var' => 'aigo'
			),
			9 => array(
			'var' => 'areaId'
			),
			10 => array(
			'var' => 'buyer'
			),
			11 => array(
			'var' => 'carriage'
			),
			12 => array(
			'var' => 'city'
			),
			13 => array(
			'var' => 'countryId'
			),
			14 => array(
			'var' => 'createTime'
			),
			15 => array(
			'var' => 'currencySymbol'
			),
			16 => array(
			'var' => 'customerEmail'
			),
			17 => array(
			'var' => 'edbId'
			),
			18 => array(
			'var' => 'erpOrderSn'
			),
			19 => array(
			'var' => 'exFavMoney'
			),
			20 => array(
			'var' => 'exPayMoney1'
			),
			21 => array(
			'var' => 'exPayMoney2'
			),
			22 => array(
			'var' => 'exPayMoney3'
			),
			23 => array(
			'var' => 'extPayType'
			),
			24 => array(
			'var' => 'favourableMoney'
			),
			25 => array(
			'var' => 'goodsMoney'
			),
			26 => array(
			'var' => 'invoice'
			),
			27 => array(
			'var' => 'isHold'
			),
			28 => array(
			'var' => 'isPrintingPrice'
			),
			29 => array(
			'var' => 'lastOrderTime'
			),
			30 => array(
			'var' => 'mobile'
			),
			31 => array(
			'var' => 'money'
			),
			32 => array(
			'var' => 'oldOrderSn'
			),
			33 => array(
			'var' => 'orderId'
			),
			34 => array(
			'var' => 'orderSn'
			),
			35 => array(
			'var' => 'orderType'
			),
			36 => array(
			'var' => 'payType'
			),
			37 => array(
			'var' => 'postCode'
			),
			38 => array(
			'var' => 'remark'
			),
			39 => array(
			'var' => 'saleType'
			),
			40 => array(
			'var' => 'salesPlatform'
			),
			41 => array(
			'var' => 'scheduledSellingId'
			),
			42 => array(
			'var' => 'seqDataId'
			),
			43 => array(
			'var' => 'servicePhone'
			),
			44 => array(
			'var' => 'state'
			),
			45 => array(
			'var' => 'surplus'
			),
			46 => array(
			'var' => 'tel'
			),
			47 => array(
			'var' => 'thirdOrderSn'
			),
			48 => array(
			'var' => 'tmsOrderStatus'
			),
			49 => array(
			'var' => 'transportDay'
			),
			50 => array(
			'var' => 'transportId'
			),
			51 => array(
			'var' => 'transportTime'
			),
			52 => array(
			'var' => 'transportType'
			),
			53 => array(
			'var' => 'userId'
			),
			54 => array(
			'var' => 'userName'
			),
			55 => array(
			'var' => 'userType'
			),
			56 => array(
			'var' => 'userTypeName'
			),
			57 => array(
			'var' => 'vipclub'
			),
			58 => array(
			'var' => 'vipclubName'
			),
			59 => array(
			'var' => 'warehouse'
			),
			60 => array(
			'var' => 'withdrawAddress'
			),
			61 => array(
			'var' => 'parentOrderSn'
			),
			62 => array(
			'var' => 'id'
			),
			63 => array(
			'var' => 'detail'
			),
			64 => array(
			'var' => 'deliveryWarehouse'
			),
			65 => array(
			'var' => 'incoterm'
			),
			66 => array(
			'var' => 'includeNoGood'
			),
			67 => array(
			'var' => 'exchangeBackSn'
			),
			68 => array(
			'var' => 'deliveryType'
			),
			69 => array(
			'var' => 'isDelayCompensate'
			),
			70 => array(
			'var' => 'deliveryPromisedTime'
			),
			71 => array(
			'var' => 'productCode'
			),
			72 => array(
			'var' => 'senderName'
			),
			73 => array(
			'var' => 'senderTelephone'
			),
			74 => array(
			'var' => 'senderMobilePhone'
			),
			75 => array(
			'var' => 'senderAddress'
			),
			76 => array(
			'var' => 'senderProvince'
			),
			77 => array(
			'var' => 'senderCity'
			),
			78 => array(
			'var' => 'senderCountry'
			),
			79 => array(
			'var' => 'senderStreet'
			),
			80 => array(
			'var' => 'senderZipCode'
			),
			81 => array(
			'var' => 'orderBizType'
			),
			82 => array(
			'var' => 'isSpecialDelivery'
			),
			83 => array(
			'var' => 'originalParentOrderSn'
			),
			84 => array(
			'var' => 'odsOrderBizFlags'
			),
			85 => array(
			'var' => 'businessType'
			),
			86 => array(
			'var' => 'orderStatus'
			),
			87 => array(
			'var' => 'updateTime'
			),
			88 => array(
			'var' => 'exchangeRelationNo'
			),
			89 => array(
			'var' => 'extendColumn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['addLocalTime'])){
				
				$this->addLocalTime = $vals['addLocalTime'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['address2'])){
				
				$this->address2 = $vals['address2'];
			}
			
			
			if (isset($vals['address3'])){
				
				$this->address3 = $vals['address3'];
			}
			
			
			if (isset($vals['address4'])){
				
				$this->address4 = $vals['address4'];
			}
			
			
			if (isset($vals['addressType'])){
				
				$this->addressType = $vals['addressType'];
			}
			
			
			if (isset($vals['aigo'])){
				
				$this->aigo = $vals['aigo'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['countryId'])){
				
				$this->countryId = $vals['countryId'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['currencySymbol'])){
				
				$this->currencySymbol = $vals['currencySymbol'];
			}
			
			
			if (isset($vals['customerEmail'])){
				
				$this->customerEmail = $vals['customerEmail'];
			}
			
			
			if (isset($vals['edbId'])){
				
				$this->edbId = $vals['edbId'];
			}
			
			
			if (isset($vals['erpOrderSn'])){
				
				$this->erpOrderSn = $vals['erpOrderSn'];
			}
			
			
			if (isset($vals['exFavMoney'])){
				
				$this->exFavMoney = $vals['exFavMoney'];
			}
			
			
			if (isset($vals['exPayMoney1'])){
				
				$this->exPayMoney1 = $vals['exPayMoney1'];
			}
			
			
			if (isset($vals['exPayMoney2'])){
				
				$this->exPayMoney2 = $vals['exPayMoney2'];
			}
			
			
			if (isset($vals['exPayMoney3'])){
				
				$this->exPayMoney3 = $vals['exPayMoney3'];
			}
			
			
			if (isset($vals['extPayType'])){
				
				$this->extPayType = $vals['extPayType'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['goodsMoney'])){
				
				$this->goodsMoney = $vals['goodsMoney'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['isHold'])){
				
				$this->isHold = $vals['isHold'];
			}
			
			
			if (isset($vals['isPrintingPrice'])){
				
				$this->isPrintingPrice = $vals['isPrintingPrice'];
			}
			
			
			if (isset($vals['lastOrderTime'])){
				
				$this->lastOrderTime = $vals['lastOrderTime'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['oldOrderSn'])){
				
				$this->oldOrderSn = $vals['oldOrderSn'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['postCode'])){
				
				$this->postCode = $vals['postCode'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['salesPlatform'])){
				
				$this->salesPlatform = $vals['salesPlatform'];
			}
			
			
			if (isset($vals['scheduledSellingId'])){
				
				$this->scheduledSellingId = $vals['scheduledSellingId'];
			}
			
			
			if (isset($vals['seqDataId'])){
				
				$this->seqDataId = $vals['seqDataId'];
			}
			
			
			if (isset($vals['servicePhone'])){
				
				$this->servicePhone = $vals['servicePhone'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['surplus'])){
				
				$this->surplus = $vals['surplus'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['thirdOrderSn'])){
				
				$this->thirdOrderSn = $vals['thirdOrderSn'];
			}
			
			
			if (isset($vals['tmsOrderStatus'])){
				
				$this->tmsOrderStatus = $vals['tmsOrderStatus'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['transportId'])){
				
				$this->transportId = $vals['transportId'];
			}
			
			
			if (isset($vals['transportTime'])){
				
				$this->transportTime = $vals['transportTime'];
			}
			
			
			if (isset($vals['transportType'])){
				
				$this->transportType = $vals['transportType'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['userName'])){
				
				$this->userName = $vals['userName'];
			}
			
			
			if (isset($vals['userType'])){
				
				$this->userType = $vals['userType'];
			}
			
			
			if (isset($vals['userTypeName'])){
				
				$this->userTypeName = $vals['userTypeName'];
			}
			
			
			if (isset($vals['vipclub'])){
				
				$this->vipclub = $vals['vipclub'];
			}
			
			
			if (isset($vals['vipclubName'])){
				
				$this->vipclubName = $vals['vipclubName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['withdrawAddress'])){
				
				$this->withdrawAddress = $vals['withdrawAddress'];
			}
			
			
			if (isset($vals['parentOrderSn'])){
				
				$this->parentOrderSn = $vals['parentOrderSn'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
			if (isset($vals['deliveryWarehouse'])){
				
				$this->deliveryWarehouse = $vals['deliveryWarehouse'];
			}
			
			
			if (isset($vals['incoterm'])){
				
				$this->incoterm = $vals['incoterm'];
			}
			
			
			if (isset($vals['includeNoGood'])){
				
				$this->includeNoGood = $vals['includeNoGood'];
			}
			
			
			if (isset($vals['exchangeBackSn'])){
				
				$this->exchangeBackSn = $vals['exchangeBackSn'];
			}
			
			
			if (isset($vals['deliveryType'])){
				
				$this->deliveryType = $vals['deliveryType'];
			}
			
			
			if (isset($vals['isDelayCompensate'])){
				
				$this->isDelayCompensate = $vals['isDelayCompensate'];
			}
			
			
			if (isset($vals['deliveryPromisedTime'])){
				
				$this->deliveryPromisedTime = $vals['deliveryPromisedTime'];
			}
			
			
			if (isset($vals['productCode'])){
				
				$this->productCode = $vals['productCode'];
			}
			
			
			if (isset($vals['senderName'])){
				
				$this->senderName = $vals['senderName'];
			}
			
			
			if (isset($vals['senderTelephone'])){
				
				$this->senderTelephone = $vals['senderTelephone'];
			}
			
			
			if (isset($vals['senderMobilePhone'])){
				
				$this->senderMobilePhone = $vals['senderMobilePhone'];
			}
			
			
			if (isset($vals['senderAddress'])){
				
				$this->senderAddress = $vals['senderAddress'];
			}
			
			
			if (isset($vals['senderProvince'])){
				
				$this->senderProvince = $vals['senderProvince'];
			}
			
			
			if (isset($vals['senderCity'])){
				
				$this->senderCity = $vals['senderCity'];
			}
			
			
			if (isset($vals['senderCountry'])){
				
				$this->senderCountry = $vals['senderCountry'];
			}
			
			
			if (isset($vals['senderStreet'])){
				
				$this->senderStreet = $vals['senderStreet'];
			}
			
			
			if (isset($vals['senderZipCode'])){
				
				$this->senderZipCode = $vals['senderZipCode'];
			}
			
			
			if (isset($vals['orderBizType'])){
				
				$this->orderBizType = $vals['orderBizType'];
			}
			
			
			if (isset($vals['isSpecialDelivery'])){
				
				$this->isSpecialDelivery = $vals['isSpecialDelivery'];
			}
			
			
			if (isset($vals['originalParentOrderSn'])){
				
				$this->originalParentOrderSn = $vals['originalParentOrderSn'];
			}
			
			
			if (isset($vals['odsOrderBizFlags'])){
				
				$this->odsOrderBizFlags = $vals['odsOrderBizFlags'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['exchangeRelationNo'])){
				
				$this->exchangeRelationNo = $vals['exchangeRelationNo'];
			}
			
			
			if (isset($vals['extendColumn'])){
				
				$this->extendColumn = $vals['extendColumn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OdsOrderMessage';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("addLocalTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addLocalTime);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addTime);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("address2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address2);
				
			}
			
			
			
			
			if ("address3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address3);
				
			}
			
			
			
			
			if ("address4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address4);
				
			}
			
			
			
			
			if ("addressType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addressType);
				
			}
			
			
			
			
			if ("aigo" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->aigo);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("countryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->countryId);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("currencySymbol" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencySymbol);
				
			}
			
			
			
			
			if ("customerEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerEmail);
				
			}
			
			
			
			
			if ("edbId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->edbId);
				
			}
			
			
			
			
			if ("erpOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erpOrderSn);
				
			}
			
			
			
			
			if ("exFavMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exFavMoney);
				
			}
			
			
			
			
			if ("exPayMoney1" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exPayMoney1);
				
			}
			
			
			
			
			if ("exPayMoney2" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exPayMoney2);
				
			}
			
			
			
			
			if ("exPayMoney3" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exPayMoney3);
				
			}
			
			
			
			
			if ("extPayType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extPayType);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favourableMoney);
				
			}
			
			
			
			
			if ("goodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodsMoney);
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("isHold" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isHold); 
				
			}
			
			
			
			
			if ("isPrintingPrice" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPrintingPrice); 
				
			}
			
			
			
			
			if ("lastOrderTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lastOrderTime);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->money);
				
			}
			
			
			
			
			if ("oldOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldOrderSn);
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("postCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postCode);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->saleType); 
				
			}
			
			
			
			
			if ("salesPlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesPlatform);
				
			}
			
			
			
			
			if ("scheduledSellingId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scheduledSellingId);
				
			}
			
			
			
			
			if ("seqDataId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqDataId);
				
			}
			
			
			
			
			if ("servicePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->servicePhone);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("surplus" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->surplus);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("thirdOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdOrderSn);
				
			}
			
			
			
			
			if ("tmsOrderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderStatus);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("transportId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportId);
				
			}
			
			
			
			
			if ("transportTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transportTime); 
				
			}
			
			
			
			
			if ("transportType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportType);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("userName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userName);
				
			}
			
			
			
			
			if ("userType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userType);
				
			}
			
			
			
			
			if ("userTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userTypeName);
				
			}
			
			
			
			
			if ("vipclub" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclub);
				
			}
			
			
			
			
			if ("vipclubName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipclubName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("withdrawAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->withdrawAddress);
				
			}
			
			
			
			
			if ("parentOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentOrderSn);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\deliveryorder\bizservice\OdsOrderMessageDetail();
						$elem0->read($input);
						
						$this->detail[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("deliveryWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryWarehouse);
				
			}
			
			
			
			
			if ("incoterm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->incoterm);
				
			}
			
			
			
			
			if ("includeNoGood" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->includeNoGood);
				
			}
			
			
			
			
			if ("exchangeBackSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeBackSn);
				
			}
			
			
			
			
			if ("deliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryType); 
				
			}
			
			
			
			
			if ("isDelayCompensate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDelayCompensate); 
				
			}
			
			
			
			
			if ("deliveryPromisedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deliveryPromisedTime);
				
			}
			
			
			
			
			if ("productCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productCode);
				
			}
			
			
			
			
			if ("senderName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderName);
				
			}
			
			
			
			
			if ("senderTelephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderTelephone);
				
			}
			
			
			
			
			if ("senderMobilePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderMobilePhone);
				
			}
			
			
			
			
			if ("senderAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderAddress);
				
			}
			
			
			
			
			if ("senderProvince" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderProvince);
				
			}
			
			
			
			
			if ("senderCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderCity);
				
			}
			
			
			
			
			if ("senderCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderCountry);
				
			}
			
			
			
			
			if ("senderStreet" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderStreet);
				
			}
			
			
			
			
			if ("senderZipCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->senderZipCode);
				
			}
			
			
			
			
			if ("orderBizType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderBizType); 
				
			}
			
			
			
			
			if ("isSpecialDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSpecialDelivery); 
				
			}
			
			
			
			
			if ("originalParentOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalParentOrderSn);
				
			}
			
			
			
			
			if ("odsOrderBizFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->odsOrderBizFlags);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->businessType);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderStatus);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
			}
			
			
			
			
			if ("exchangeRelationNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exchangeRelationNo);
				
			}
			
			
			
			
			if ("extendColumn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extendColumn);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->addLocalTime !== null) {
			
			$xfer += $output->writeFieldBegin('addLocalTime');
			$xfer += $output->writeString($this->addLocalTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeString($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address2 !== null) {
			
			$xfer += $output->writeFieldBegin('address2');
			$xfer += $output->writeString($this->address2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address3 !== null) {
			
			$xfer += $output->writeFieldBegin('address3');
			$xfer += $output->writeString($this->address3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address4 !== null) {
			
			$xfer += $output->writeFieldBegin('address4');
			$xfer += $output->writeString($this->address4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addressType !== null) {
			
			$xfer += $output->writeFieldBegin('addressType');
			$xfer += $output->writeString($this->addressType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aigo !== null) {
			
			$xfer += $output->writeFieldBegin('aigo');
			$xfer += $output->writeDouble($this->aigo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->countryId !== null) {
			
			$xfer += $output->writeFieldBegin('countryId');
			$xfer += $output->writeString($this->countryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencySymbol !== null) {
			
			$xfer += $output->writeFieldBegin('currencySymbol');
			$xfer += $output->writeString($this->currencySymbol);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerEmail !== null) {
			
			$xfer += $output->writeFieldBegin('customerEmail');
			$xfer += $output->writeString($this->customerEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->edbId !== null) {
			
			$xfer += $output->writeFieldBegin('edbId');
			$xfer += $output->writeString($this->edbId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->erpOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('erpOrderSn');
			$xfer += $output->writeString($this->erpOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exFavMoney !== null) {
			
			$xfer += $output->writeFieldBegin('exFavMoney');
			$xfer += $output->writeDouble($this->exFavMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney1 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney1');
			$xfer += $output->writeDouble($this->exPayMoney1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney2 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney2');
			$xfer += $output->writeDouble($this->exPayMoney2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exPayMoney3 !== null) {
			
			$xfer += $output->writeFieldBegin('exPayMoney3');
			$xfer += $output->writeDouble($this->exPayMoney3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPayType !== null) {
			
			$xfer += $output->writeFieldBegin('extPayType');
			$xfer += $output->writeString($this->extPayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favourableMoney !== null) {
			
			$xfer += $output->writeFieldBegin('favourableMoney');
			$xfer += $output->writeDouble($this->favourableMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsMoney');
			$xfer += $output->writeDouble($this->goodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isHold !== null) {
			
			$xfer += $output->writeFieldBegin('isHold');
			$xfer += $output->writeI32($this->isHold);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPrintingPrice !== null) {
			
			$xfer += $output->writeFieldBegin('isPrintingPrice');
			$xfer += $output->writeI32($this->isPrintingPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastOrderTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastOrderTime');
			$xfer += $output->writeString($this->lastOrderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeDouble($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('oldOrderSn');
			$xfer += $output->writeString($this->oldOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeI64($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postCode !== null) {
			
			$xfer += $output->writeFieldBegin('postCode');
			$xfer += $output->writeString($this->postCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeI32($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesPlatform !== null) {
			
			$xfer += $output->writeFieldBegin('salesPlatform');
			$xfer += $output->writeString($this->salesPlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scheduledSellingId !== null) {
			
			$xfer += $output->writeFieldBegin('scheduledSellingId');
			$xfer += $output->writeString($this->scheduledSellingId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqDataId !== null) {
			
			$xfer += $output->writeFieldBegin('seqDataId');
			$xfer += $output->writeString($this->seqDataId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->servicePhone !== null) {
			
			$xfer += $output->writeFieldBegin('servicePhone');
			$xfer += $output->writeString($this->servicePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplus !== null) {
			
			$xfer += $output->writeFieldBegin('surplus');
			$xfer += $output->writeDouble($this->surplus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('thirdOrderSn');
			$xfer += $output->writeString($this->thirdOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOrderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderStatus');
			$xfer += $output->writeString($this->tmsOrderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportId !== null) {
			
			$xfer += $output->writeFieldBegin('transportId');
			$xfer += $output->writeString($this->transportId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportTime !== null) {
			
			$xfer += $output->writeFieldBegin('transportTime');
			$xfer += $output->writeI32($this->transportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportType !== null) {
			
			$xfer += $output->writeFieldBegin('transportType');
			$xfer += $output->writeString($this->transportType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userName !== null) {
			
			$xfer += $output->writeFieldBegin('userName');
			$xfer += $output->writeString($this->userName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userType !== null) {
			
			$xfer += $output->writeFieldBegin('userType');
			$xfer += $output->writeString($this->userType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('userTypeName');
			$xfer += $output->writeString($this->userTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipclub !== null) {
			
			$xfer += $output->writeFieldBegin('vipclub');
			$xfer += $output->writeString($this->vipclub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipclubName !== null) {
			
			$xfer += $output->writeFieldBegin('vipclubName');
			$xfer += $output->writeString($this->vipclubName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->withdrawAddress !== null) {
			
			$xfer += $output->writeFieldBegin('withdrawAddress');
			$xfer += $output->writeString($this->withdrawAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('parentOrderSn');
			$xfer += $output->writeString($this->parentOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeString($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detail !== null) {
			
			$xfer += $output->writeFieldBegin('detail');
			
			if (!is_array($this->detail)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detail as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryWarehouse');
			$xfer += $output->writeString($this->deliveryWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->incoterm !== null) {
			
			$xfer += $output->writeFieldBegin('incoterm');
			$xfer += $output->writeString($this->incoterm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->includeNoGood !== null) {
			
			$xfer += $output->writeFieldBegin('includeNoGood');
			$xfer += $output->writeString($this->includeNoGood);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeBackSn !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeBackSn');
			$xfer += $output->writeString($this->exchangeBackSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryType');
			$xfer += $output->writeI32($this->deliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDelayCompensate !== null) {
			
			$xfer += $output->writeFieldBegin('isDelayCompensate');
			$xfer += $output->writeI32($this->isDelayCompensate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryPromisedTime !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryPromisedTime');
			$xfer += $output->writeI64($this->deliveryPromisedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productCode !== null) {
			
			$xfer += $output->writeFieldBegin('productCode');
			$xfer += $output->writeString($this->productCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderName !== null) {
			
			$xfer += $output->writeFieldBegin('senderName');
			$xfer += $output->writeString($this->senderName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderTelephone !== null) {
			
			$xfer += $output->writeFieldBegin('senderTelephone');
			$xfer += $output->writeString($this->senderTelephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderMobilePhone !== null) {
			
			$xfer += $output->writeFieldBegin('senderMobilePhone');
			$xfer += $output->writeString($this->senderMobilePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderAddress !== null) {
			
			$xfer += $output->writeFieldBegin('senderAddress');
			$xfer += $output->writeString($this->senderAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderProvince !== null) {
			
			$xfer += $output->writeFieldBegin('senderProvince');
			$xfer += $output->writeString($this->senderProvince);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderCity !== null) {
			
			$xfer += $output->writeFieldBegin('senderCity');
			$xfer += $output->writeString($this->senderCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderCountry !== null) {
			
			$xfer += $output->writeFieldBegin('senderCountry');
			$xfer += $output->writeString($this->senderCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderStreet !== null) {
			
			$xfer += $output->writeFieldBegin('senderStreet');
			$xfer += $output->writeString($this->senderStreet);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->senderZipCode !== null) {
			
			$xfer += $output->writeFieldBegin('senderZipCode');
			$xfer += $output->writeString($this->senderZipCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderBizType !== null) {
			
			$xfer += $output->writeFieldBegin('orderBizType');
			$xfer += $output->writeI32($this->orderBizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSpecialDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('isSpecialDelivery');
			$xfer += $output->writeI32($this->isSpecialDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalParentOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('originalParentOrderSn');
			$xfer += $output->writeString($this->originalParentOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->odsOrderBizFlags !== null) {
			
			$xfer += $output->writeFieldBegin('odsOrderBizFlags');
			$xfer += $output->writeString($this->odsOrderBizFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeString($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeString($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeString($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exchangeRelationNo !== null) {
			
			$xfer += $output->writeFieldBegin('exchangeRelationNo');
			$xfer += $output->writeString($this->exchangeRelationNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendColumn !== null) {
			
			$xfer += $output->writeFieldBegin('extendColumn');
			$xfer += $output->writeString($this->extendColumn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>