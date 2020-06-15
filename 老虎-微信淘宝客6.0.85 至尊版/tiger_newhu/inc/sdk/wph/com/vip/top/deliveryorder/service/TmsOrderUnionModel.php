<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsOrderUnionModel {
	
	static $_TSPEC;
	public $recId = null;
	public $tmsOrderId = null;
	public $returnBoxTime = null;
	public $purchaseOrderId = null;
	public $isCountFee = null;
	public $easybreak = null;
	public $vipClubName = null;
	public $userTypeName = null;
	public $transportTypeName = null;
	public $surplus = null;
	public $carriage = null;
	public $joinTime = null;
	public $totalPack = null;
	public $orderSn = null;
	public $isPay = null;
	public $orderNo = null;
	public $isCod = null;
	public $resendType = null;
	public $userId = null;
	public $buyer = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $buyerAddress = null;
	public $postCode = null;
	public $buyerAreaId = null;
	public $buyerAddress2 = null;
	public $buyerAddress3 = null;
	public $buyerCity = null;
	public $buyerState = null;
	public $buyerCountryId = null;
	public $buyerTel = null;
	public $poType = null;
	public $poPeriodValid = null;
	public $poBuyer = null;
	public $mobile = null;
	public $transportId = null;
	public $transportType = null;
	public $addTime = null;
	public $payType = null;
	public $transportDay = null;
	public $remark = null;
	public $orderType = null;
	public $vipClub = null;
	public $invoice = null;
	public $goodsMoney = null;
	public $money = null;
	public $aigo = null;
	public $favourableMoney = null;
	public $exFavMoney = null;
	public $userType = null;
	public $exPayMoney1 = null;
	public $exPayMoney2 = null;
	public $exPayMoney3 = null;
	public $isHold = null;
	public $oldOrderSn = null;
	public $iudFlag = null;
	public $transportNo = null;
	public $originalServiceLevel = null;
	public $originalVolume = null;
	public $originalVolumeUnit = null;
	public $originalWeight = null;
	public $originalWeightUnit = null;
	public $originalAmount = null;
	public $transportWorkerName = null;
	public $amountUnit = null;
	public $orderSubType = null;
	public $orderStatus = null;
	public $signInMan = null;
	public $isAutopicked = null;
	public $jionCustWorker = null;
	public $acceptManipulatMatcTime = null;
	public $custNumber = null;
	public $isTrack = null;
	public $isExceptional = null;
	public $isInsurance = null;
	public $closeMan = null;
	public $rejectionTime = null;
	public $signInTime = null;
	public $isClosed = null;
	public $circularWorkerName = null;
	public $closeTime = null;
	public $closeManCode = null;
	public $isCircular = null;
	public $circularWorker = null;
	public $eta = null;
	public $atd = null;
	public $circularTime = null;
	public $oriCity = null;
	public $tmsOriginalOrderId = null;
	public $returnType = null;
	public $returnno = null;
	public $createdByUser = null;
	public $createdOffice = null;
	public $createdDtmLoc = null;
	public $createdTimeZone = null;
	public $updatedOffice = null;
	public $updatedByUser = null;
	public $updatedDtmLoc = null;
	public $isRefuce = null;
	public $custCode = null;
	public $currentDeliveryPoint = null;
	public $deliveryPoint = null;
	public $updatedTimeZone = null;
	public $recordVersion = null;
	public $custType = null;
	public $isDelete = null;
	public $aux1 = null;
	public $aux2 = null;
	public $aux3 = null;
	public $aux4 = null;
	public $aux5 = null;
	public $isFeedBack = null;
	public $autoFreight = null;
	public $fiscalYear = null;
	public $isUpdate = null;
	public $isSpecialReturn = null;
	public $custCounterAmount = null;
	public $custClaimAmount = null;
	public $insuranceClaimAmount = null;
	public $oqcDate = null;
	public $returnGoodsContact = null;
	public $returnGoodsPhone = null;
	public $returnGoodsType = null;
	public $brand = null;
	public $merchantsInterface = null;
	public $merchantsInterfacePhone = null;
	public $returnSpecialRequirements = null;
	public $payment = null;
	public $returnVendorContact = null;
	public $deliveryMode = null;
	public $receivedUnit = null;
	public $transportMode = null;
	public $deliverGoodsManLink = null;
	public $deliverGoodsManPhone = null;
	public $isInStation = null;
	public $buyTown = null;
	public $cancelStatus = null;
	public $wayOfSettlement = null;
	public $ldpJoinTime = null;
	public $reBillingRemark = null;
	public $extPayType = null;
	public $appraisedTime = null;
	public $orderBatchNo = null;
	public $orderMainCust = null;
	public $b2cUserName = null;
	public $mergeOrderSns = null;
	public $mergeParentOrderSn = null;
	public $mergeParentOrderNo = null;
	public $mergeFlag = null;
	public $tempCustCode = null;
	public $isSecondMatch = null;
	public $isSecondMatchAppraise = null;
	public $secondMatchAppraiseTime = null;
	public $isIntercept = null;
	public $interceptOperator = null;
	public $interceptTime = null;
	public $crmCustPointId = null;
	public $isPrint = null;
	public $serviceType = null;
	public $customerCode = null;
	public $sendAddress = null;
	public $dispatchStatus = null;
	public $dispatchDate = null;
	public $mbpCompensationAmount = null;
	public $salesPlatform = null;
	public $carrierPointName = null;
	public $carrierPointCode = null;
	public $carrierPointCustCode = null;
	public $officeName = null;
	public $officeOutName = null;
	public $contact = null;
	public $tel = null;
	public $officeCode = null;
	public $provinceCode = null;
	public $cityCode = null;
	public $countryCode = null;
	public $regionCode = null;
	public $address = null;
	public $custName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'recId'
			),
			2 => array(
			'var' => 'tmsOrderId'
			),
			3 => array(
			'var' => 'returnBoxTime'
			),
			4 => array(
			'var' => 'purchaseOrderId'
			),
			5 => array(
			'var' => 'isCountFee'
			),
			6 => array(
			'var' => 'easybreak'
			),
			7 => array(
			'var' => 'vipClubName'
			),
			8 => array(
			'var' => 'userTypeName'
			),
			9 => array(
			'var' => 'transportTypeName'
			),
			10 => array(
			'var' => 'surplus'
			),
			11 => array(
			'var' => 'carriage'
			),
			12 => array(
			'var' => 'joinTime'
			),
			13 => array(
			'var' => 'totalPack'
			),
			14 => array(
			'var' => 'orderSn'
			),
			15 => array(
			'var' => 'isPay'
			),
			16 => array(
			'var' => 'orderNo'
			),
			17 => array(
			'var' => 'isCod'
			),
			18 => array(
			'var' => 'resendType'
			),
			19 => array(
			'var' => 'userId'
			),
			20 => array(
			'var' => 'buyer'
			),
			21 => array(
			'var' => 'vendorCode'
			),
			22 => array(
			'var' => 'vendorName'
			),
			23 => array(
			'var' => 'buyerAddress'
			),
			24 => array(
			'var' => 'postCode'
			),
			25 => array(
			'var' => 'buyerAreaId'
			),
			26 => array(
			'var' => 'buyerAddress2'
			),
			27 => array(
			'var' => 'buyerAddress3'
			),
			28 => array(
			'var' => 'buyerCity'
			),
			29 => array(
			'var' => 'buyerState'
			),
			30 => array(
			'var' => 'buyerCountryId'
			),
			31 => array(
			'var' => 'buyerTel'
			),
			32 => array(
			'var' => 'poType'
			),
			33 => array(
			'var' => 'poPeriodValid'
			),
			34 => array(
			'var' => 'poBuyer'
			),
			35 => array(
			'var' => 'mobile'
			),
			36 => array(
			'var' => 'transportId'
			),
			37 => array(
			'var' => 'transportType'
			),
			38 => array(
			'var' => 'addTime'
			),
			39 => array(
			'var' => 'payType'
			),
			40 => array(
			'var' => 'transportDay'
			),
			41 => array(
			'var' => 'remark'
			),
			42 => array(
			'var' => 'orderType'
			),
			43 => array(
			'var' => 'vipClub'
			),
			44 => array(
			'var' => 'invoice'
			),
			45 => array(
			'var' => 'goodsMoney'
			),
			46 => array(
			'var' => 'money'
			),
			47 => array(
			'var' => 'aigo'
			),
			48 => array(
			'var' => 'favourableMoney'
			),
			49 => array(
			'var' => 'exFavMoney'
			),
			50 => array(
			'var' => 'userType'
			),
			51 => array(
			'var' => 'exPayMoney1'
			),
			52 => array(
			'var' => 'exPayMoney2'
			),
			53 => array(
			'var' => 'exPayMoney3'
			),
			54 => array(
			'var' => 'isHold'
			),
			55 => array(
			'var' => 'oldOrderSn'
			),
			56 => array(
			'var' => 'iudFlag'
			),
			57 => array(
			'var' => 'transportNo'
			),
			58 => array(
			'var' => 'originalServiceLevel'
			),
			59 => array(
			'var' => 'originalVolume'
			),
			60 => array(
			'var' => 'originalVolumeUnit'
			),
			61 => array(
			'var' => 'originalWeight'
			),
			62 => array(
			'var' => 'originalWeightUnit'
			),
			63 => array(
			'var' => 'originalAmount'
			),
			64 => array(
			'var' => 'transportWorkerName'
			),
			65 => array(
			'var' => 'amountUnit'
			),
			66 => array(
			'var' => 'orderSubType'
			),
			67 => array(
			'var' => 'orderStatus'
			),
			68 => array(
			'var' => 'signInMan'
			),
			69 => array(
			'var' => 'isAutopicked'
			),
			70 => array(
			'var' => 'jionCustWorker'
			),
			71 => array(
			'var' => 'acceptManipulatMatcTime'
			),
			72 => array(
			'var' => 'custNumber'
			),
			73 => array(
			'var' => 'isTrack'
			),
			74 => array(
			'var' => 'isExceptional'
			),
			75 => array(
			'var' => 'isInsurance'
			),
			76 => array(
			'var' => 'closeMan'
			),
			77 => array(
			'var' => 'rejectionTime'
			),
			78 => array(
			'var' => 'signInTime'
			),
			79 => array(
			'var' => 'isClosed'
			),
			80 => array(
			'var' => 'circularWorkerName'
			),
			81 => array(
			'var' => 'closeTime'
			),
			82 => array(
			'var' => 'closeManCode'
			),
			83 => array(
			'var' => 'isCircular'
			),
			84 => array(
			'var' => 'circularWorker'
			),
			85 => array(
			'var' => 'eta'
			),
			86 => array(
			'var' => 'atd'
			),
			87 => array(
			'var' => 'circularTime'
			),
			88 => array(
			'var' => 'oriCity'
			),
			89 => array(
			'var' => 'tmsOriginalOrderId'
			),
			90 => array(
			'var' => 'returnType'
			),
			91 => array(
			'var' => 'returnno'
			),
			92 => array(
			'var' => 'createdByUser'
			),
			93 => array(
			'var' => 'createdOffice'
			),
			94 => array(
			'var' => 'createdDtmLoc'
			),
			95 => array(
			'var' => 'createdTimeZone'
			),
			96 => array(
			'var' => 'updatedOffice'
			),
			97 => array(
			'var' => 'updatedByUser'
			),
			98 => array(
			'var' => 'updatedDtmLoc'
			),
			99 => array(
			'var' => 'isRefuce'
			),
			100 => array(
			'var' => 'custCode'
			),
			101 => array(
			'var' => 'currentDeliveryPoint'
			),
			102 => array(
			'var' => 'deliveryPoint'
			),
			103 => array(
			'var' => 'updatedTimeZone'
			),
			104 => array(
			'var' => 'recordVersion'
			),
			105 => array(
			'var' => 'custType'
			),
			106 => array(
			'var' => 'isDelete'
			),
			107 => array(
			'var' => 'aux1'
			),
			108 => array(
			'var' => 'aux2'
			),
			109 => array(
			'var' => 'aux3'
			),
			110 => array(
			'var' => 'aux4'
			),
			111 => array(
			'var' => 'aux5'
			),
			112 => array(
			'var' => 'isFeedBack'
			),
			113 => array(
			'var' => 'autoFreight'
			),
			114 => array(
			'var' => 'fiscalYear'
			),
			115 => array(
			'var' => 'isUpdate'
			),
			116 => array(
			'var' => 'isSpecialReturn'
			),
			117 => array(
			'var' => 'custCounterAmount'
			),
			118 => array(
			'var' => 'custClaimAmount'
			),
			119 => array(
			'var' => 'insuranceClaimAmount'
			),
			120 => array(
			'var' => 'oqcDate'
			),
			121 => array(
			'var' => 'returnGoodsContact'
			),
			122 => array(
			'var' => 'returnGoodsPhone'
			),
			123 => array(
			'var' => 'returnGoodsType'
			),
			124 => array(
			'var' => 'brand'
			),
			125 => array(
			'var' => 'merchantsInterface'
			),
			126 => array(
			'var' => 'merchantsInterfacePhone'
			),
			127 => array(
			'var' => 'returnSpecialRequirements'
			),
			128 => array(
			'var' => 'payment'
			),
			129 => array(
			'var' => 'returnVendorContact'
			),
			130 => array(
			'var' => 'deliveryMode'
			),
			131 => array(
			'var' => 'receivedUnit'
			),
			132 => array(
			'var' => 'transportMode'
			),
			133 => array(
			'var' => 'deliverGoodsManLink'
			),
			134 => array(
			'var' => 'deliverGoodsManPhone'
			),
			135 => array(
			'var' => 'isInStation'
			),
			136 => array(
			'var' => 'buyTown'
			),
			137 => array(
			'var' => 'cancelStatus'
			),
			138 => array(
			'var' => 'wayOfSettlement'
			),
			139 => array(
			'var' => 'ldpJoinTime'
			),
			140 => array(
			'var' => 'reBillingRemark'
			),
			141 => array(
			'var' => 'extPayType'
			),
			142 => array(
			'var' => 'appraisedTime'
			),
			143 => array(
			'var' => 'orderBatchNo'
			),
			144 => array(
			'var' => 'orderMainCust'
			),
			145 => array(
			'var' => 'b2cUserName'
			),
			146 => array(
			'var' => 'mergeOrderSns'
			),
			147 => array(
			'var' => 'mergeParentOrderSn'
			),
			148 => array(
			'var' => 'mergeParentOrderNo'
			),
			149 => array(
			'var' => 'mergeFlag'
			),
			150 => array(
			'var' => 'tempCustCode'
			),
			151 => array(
			'var' => 'isSecondMatch'
			),
			152 => array(
			'var' => 'isSecondMatchAppraise'
			),
			153 => array(
			'var' => 'secondMatchAppraiseTime'
			),
			154 => array(
			'var' => 'isIntercept'
			),
			155 => array(
			'var' => 'interceptOperator'
			),
			156 => array(
			'var' => 'interceptTime'
			),
			157 => array(
			'var' => 'crmCustPointId'
			),
			158 => array(
			'var' => 'isPrint'
			),
			159 => array(
			'var' => 'serviceType'
			),
			160 => array(
			'var' => 'customerCode'
			),
			161 => array(
			'var' => 'sendAddress'
			),
			162 => array(
			'var' => 'dispatchStatus'
			),
			163 => array(
			'var' => 'dispatchDate'
			),
			164 => array(
			'var' => 'mbpCompensationAmount'
			),
			165 => array(
			'var' => 'salesPlatform'
			),
			166 => array(
			'var' => 'carrierPointName'
			),
			167 => array(
			'var' => 'carrierPointCode'
			),
			168 => array(
			'var' => 'carrierPointCustCode'
			),
			169 => array(
			'var' => 'officeName'
			),
			170 => array(
			'var' => 'officeOutName'
			),
			171 => array(
			'var' => 'contact'
			),
			172 => array(
			'var' => 'tel'
			),
			173 => array(
			'var' => 'officeCode'
			),
			174 => array(
			'var' => 'provinceCode'
			),
			175 => array(
			'var' => 'cityCode'
			),
			176 => array(
			'var' => 'countryCode'
			),
			177 => array(
			'var' => 'regionCode'
			),
			178 => array(
			'var' => 'address'
			),
			179 => array(
			'var' => 'custName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['recId'])){
				
				$this->recId = $vals['recId'];
			}
			
			
			if (isset($vals['tmsOrderId'])){
				
				$this->tmsOrderId = $vals['tmsOrderId'];
			}
			
			
			if (isset($vals['returnBoxTime'])){
				
				$this->returnBoxTime = $vals['returnBoxTime'];
			}
			
			
			if (isset($vals['purchaseOrderId'])){
				
				$this->purchaseOrderId = $vals['purchaseOrderId'];
			}
			
			
			if (isset($vals['isCountFee'])){
				
				$this->isCountFee = $vals['isCountFee'];
			}
			
			
			if (isset($vals['easybreak'])){
				
				$this->easybreak = $vals['easybreak'];
			}
			
			
			if (isset($vals['vipClubName'])){
				
				$this->vipClubName = $vals['vipClubName'];
			}
			
			
			if (isset($vals['userTypeName'])){
				
				$this->userTypeName = $vals['userTypeName'];
			}
			
			
			if (isset($vals['transportTypeName'])){
				
				$this->transportTypeName = $vals['transportTypeName'];
			}
			
			
			if (isset($vals['surplus'])){
				
				$this->surplus = $vals['surplus'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['joinTime'])){
				
				$this->joinTime = $vals['joinTime'];
			}
			
			
			if (isset($vals['totalPack'])){
				
				$this->totalPack = $vals['totalPack'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['isPay'])){
				
				$this->isPay = $vals['isPay'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['isCod'])){
				
				$this->isCod = $vals['isCod'];
			}
			
			
			if (isset($vals['resendType'])){
				
				$this->resendType = $vals['resendType'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['buyerAddress'])){
				
				$this->buyerAddress = $vals['buyerAddress'];
			}
			
			
			if (isset($vals['postCode'])){
				
				$this->postCode = $vals['postCode'];
			}
			
			
			if (isset($vals['buyerAreaId'])){
				
				$this->buyerAreaId = $vals['buyerAreaId'];
			}
			
			
			if (isset($vals['buyerAddress2'])){
				
				$this->buyerAddress2 = $vals['buyerAddress2'];
			}
			
			
			if (isset($vals['buyerAddress3'])){
				
				$this->buyerAddress3 = $vals['buyerAddress3'];
			}
			
			
			if (isset($vals['buyerCity'])){
				
				$this->buyerCity = $vals['buyerCity'];
			}
			
			
			if (isset($vals['buyerState'])){
				
				$this->buyerState = $vals['buyerState'];
			}
			
			
			if (isset($vals['buyerCountryId'])){
				
				$this->buyerCountryId = $vals['buyerCountryId'];
			}
			
			
			if (isset($vals['buyerTel'])){
				
				$this->buyerTel = $vals['buyerTel'];
			}
			
			
			if (isset($vals['poType'])){
				
				$this->poType = $vals['poType'];
			}
			
			
			if (isset($vals['poPeriodValid'])){
				
				$this->poPeriodValid = $vals['poPeriodValid'];
			}
			
			
			if (isset($vals['poBuyer'])){
				
				$this->poBuyer = $vals['poBuyer'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['transportId'])){
				
				$this->transportId = $vals['transportId'];
			}
			
			
			if (isset($vals['transportType'])){
				
				$this->transportType = $vals['transportType'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['vipClub'])){
				
				$this->vipClub = $vals['vipClub'];
			}
			
			
			if (isset($vals['invoice'])){
				
				$this->invoice = $vals['invoice'];
			}
			
			
			if (isset($vals['goodsMoney'])){
				
				$this->goodsMoney = $vals['goodsMoney'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['aigo'])){
				
				$this->aigo = $vals['aigo'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['exFavMoney'])){
				
				$this->exFavMoney = $vals['exFavMoney'];
			}
			
			
			if (isset($vals['userType'])){
				
				$this->userType = $vals['userType'];
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
			
			
			if (isset($vals['isHold'])){
				
				$this->isHold = $vals['isHold'];
			}
			
			
			if (isset($vals['oldOrderSn'])){
				
				$this->oldOrderSn = $vals['oldOrderSn'];
			}
			
			
			if (isset($vals['iudFlag'])){
				
				$this->iudFlag = $vals['iudFlag'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['originalServiceLevel'])){
				
				$this->originalServiceLevel = $vals['originalServiceLevel'];
			}
			
			
			if (isset($vals['originalVolume'])){
				
				$this->originalVolume = $vals['originalVolume'];
			}
			
			
			if (isset($vals['originalVolumeUnit'])){
				
				$this->originalVolumeUnit = $vals['originalVolumeUnit'];
			}
			
			
			if (isset($vals['originalWeight'])){
				
				$this->originalWeight = $vals['originalWeight'];
			}
			
			
			if (isset($vals['originalWeightUnit'])){
				
				$this->originalWeightUnit = $vals['originalWeightUnit'];
			}
			
			
			if (isset($vals['originalAmount'])){
				
				$this->originalAmount = $vals['originalAmount'];
			}
			
			
			if (isset($vals['transportWorkerName'])){
				
				$this->transportWorkerName = $vals['transportWorkerName'];
			}
			
			
			if (isset($vals['amountUnit'])){
				
				$this->amountUnit = $vals['amountUnit'];
			}
			
			
			if (isset($vals['orderSubType'])){
				
				$this->orderSubType = $vals['orderSubType'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['signInMan'])){
				
				$this->signInMan = $vals['signInMan'];
			}
			
			
			if (isset($vals['isAutopicked'])){
				
				$this->isAutopicked = $vals['isAutopicked'];
			}
			
			
			if (isset($vals['jionCustWorker'])){
				
				$this->jionCustWorker = $vals['jionCustWorker'];
			}
			
			
			if (isset($vals['acceptManipulatMatcTime'])){
				
				$this->acceptManipulatMatcTime = $vals['acceptManipulatMatcTime'];
			}
			
			
			if (isset($vals['custNumber'])){
				
				$this->custNumber = $vals['custNumber'];
			}
			
			
			if (isset($vals['isTrack'])){
				
				$this->isTrack = $vals['isTrack'];
			}
			
			
			if (isset($vals['isExceptional'])){
				
				$this->isExceptional = $vals['isExceptional'];
			}
			
			
			if (isset($vals['isInsurance'])){
				
				$this->isInsurance = $vals['isInsurance'];
			}
			
			
			if (isset($vals['closeMan'])){
				
				$this->closeMan = $vals['closeMan'];
			}
			
			
			if (isset($vals['rejectionTime'])){
				
				$this->rejectionTime = $vals['rejectionTime'];
			}
			
			
			if (isset($vals['signInTime'])){
				
				$this->signInTime = $vals['signInTime'];
			}
			
			
			if (isset($vals['isClosed'])){
				
				$this->isClosed = $vals['isClosed'];
			}
			
			
			if (isset($vals['circularWorkerName'])){
				
				$this->circularWorkerName = $vals['circularWorkerName'];
			}
			
			
			if (isset($vals['closeTime'])){
				
				$this->closeTime = $vals['closeTime'];
			}
			
			
			if (isset($vals['closeManCode'])){
				
				$this->closeManCode = $vals['closeManCode'];
			}
			
			
			if (isset($vals['isCircular'])){
				
				$this->isCircular = $vals['isCircular'];
			}
			
			
			if (isset($vals['circularWorker'])){
				
				$this->circularWorker = $vals['circularWorker'];
			}
			
			
			if (isset($vals['eta'])){
				
				$this->eta = $vals['eta'];
			}
			
			
			if (isset($vals['atd'])){
				
				$this->atd = $vals['atd'];
			}
			
			
			if (isset($vals['circularTime'])){
				
				$this->circularTime = $vals['circularTime'];
			}
			
			
			if (isset($vals['oriCity'])){
				
				$this->oriCity = $vals['oriCity'];
			}
			
			
			if (isset($vals['tmsOriginalOrderId'])){
				
				$this->tmsOriginalOrderId = $vals['tmsOriginalOrderId'];
			}
			
			
			if (isset($vals['returnType'])){
				
				$this->returnType = $vals['returnType'];
			}
			
			
			if (isset($vals['returnno'])){
				
				$this->returnno = $vals['returnno'];
			}
			
			
			if (isset($vals['createdByUser'])){
				
				$this->createdByUser = $vals['createdByUser'];
			}
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['createdDtmLoc'])){
				
				$this->createdDtmLoc = $vals['createdDtmLoc'];
			}
			
			
			if (isset($vals['createdTimeZone'])){
				
				$this->createdTimeZone = $vals['createdTimeZone'];
			}
			
			
			if (isset($vals['updatedOffice'])){
				
				$this->updatedOffice = $vals['updatedOffice'];
			}
			
			
			if (isset($vals['updatedByUser'])){
				
				$this->updatedByUser = $vals['updatedByUser'];
			}
			
			
			if (isset($vals['updatedDtmLoc'])){
				
				$this->updatedDtmLoc = $vals['updatedDtmLoc'];
			}
			
			
			if (isset($vals['isRefuce'])){
				
				$this->isRefuce = $vals['isRefuce'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['currentDeliveryPoint'])){
				
				$this->currentDeliveryPoint = $vals['currentDeliveryPoint'];
			}
			
			
			if (isset($vals['deliveryPoint'])){
				
				$this->deliveryPoint = $vals['deliveryPoint'];
			}
			
			
			if (isset($vals['updatedTimeZone'])){
				
				$this->updatedTimeZone = $vals['updatedTimeZone'];
			}
			
			
			if (isset($vals['recordVersion'])){
				
				$this->recordVersion = $vals['recordVersion'];
			}
			
			
			if (isset($vals['custType'])){
				
				$this->custType = $vals['custType'];
			}
			
			
			if (isset($vals['isDelete'])){
				
				$this->isDelete = $vals['isDelete'];
			}
			
			
			if (isset($vals['aux1'])){
				
				$this->aux1 = $vals['aux1'];
			}
			
			
			if (isset($vals['aux2'])){
				
				$this->aux2 = $vals['aux2'];
			}
			
			
			if (isset($vals['aux3'])){
				
				$this->aux3 = $vals['aux3'];
			}
			
			
			if (isset($vals['aux4'])){
				
				$this->aux4 = $vals['aux4'];
			}
			
			
			if (isset($vals['aux5'])){
				
				$this->aux5 = $vals['aux5'];
			}
			
			
			if (isset($vals['isFeedBack'])){
				
				$this->isFeedBack = $vals['isFeedBack'];
			}
			
			
			if (isset($vals['autoFreight'])){
				
				$this->autoFreight = $vals['autoFreight'];
			}
			
			
			if (isset($vals['fiscalYear'])){
				
				$this->fiscalYear = $vals['fiscalYear'];
			}
			
			
			if (isset($vals['isUpdate'])){
				
				$this->isUpdate = $vals['isUpdate'];
			}
			
			
			if (isset($vals['isSpecialReturn'])){
				
				$this->isSpecialReturn = $vals['isSpecialReturn'];
			}
			
			
			if (isset($vals['custCounterAmount'])){
				
				$this->custCounterAmount = $vals['custCounterAmount'];
			}
			
			
			if (isset($vals['custClaimAmount'])){
				
				$this->custClaimAmount = $vals['custClaimAmount'];
			}
			
			
			if (isset($vals['insuranceClaimAmount'])){
				
				$this->insuranceClaimAmount = $vals['insuranceClaimAmount'];
			}
			
			
			if (isset($vals['oqcDate'])){
				
				$this->oqcDate = $vals['oqcDate'];
			}
			
			
			if (isset($vals['returnGoodsContact'])){
				
				$this->returnGoodsContact = $vals['returnGoodsContact'];
			}
			
			
			if (isset($vals['returnGoodsPhone'])){
				
				$this->returnGoodsPhone = $vals['returnGoodsPhone'];
			}
			
			
			if (isset($vals['returnGoodsType'])){
				
				$this->returnGoodsType = $vals['returnGoodsType'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['merchantsInterface'])){
				
				$this->merchantsInterface = $vals['merchantsInterface'];
			}
			
			
			if (isset($vals['merchantsInterfacePhone'])){
				
				$this->merchantsInterfacePhone = $vals['merchantsInterfacePhone'];
			}
			
			
			if (isset($vals['returnSpecialRequirements'])){
				
				$this->returnSpecialRequirements = $vals['returnSpecialRequirements'];
			}
			
			
			if (isset($vals['payment'])){
				
				$this->payment = $vals['payment'];
			}
			
			
			if (isset($vals['returnVendorContact'])){
				
				$this->returnVendorContact = $vals['returnVendorContact'];
			}
			
			
			if (isset($vals['deliveryMode'])){
				
				$this->deliveryMode = $vals['deliveryMode'];
			}
			
			
			if (isset($vals['receivedUnit'])){
				
				$this->receivedUnit = $vals['receivedUnit'];
			}
			
			
			if (isset($vals['transportMode'])){
				
				$this->transportMode = $vals['transportMode'];
			}
			
			
			if (isset($vals['deliverGoodsManLink'])){
				
				$this->deliverGoodsManLink = $vals['deliverGoodsManLink'];
			}
			
			
			if (isset($vals['deliverGoodsManPhone'])){
				
				$this->deliverGoodsManPhone = $vals['deliverGoodsManPhone'];
			}
			
			
			if (isset($vals['isInStation'])){
				
				$this->isInStation = $vals['isInStation'];
			}
			
			
			if (isset($vals['buyTown'])){
				
				$this->buyTown = $vals['buyTown'];
			}
			
			
			if (isset($vals['cancelStatus'])){
				
				$this->cancelStatus = $vals['cancelStatus'];
			}
			
			
			if (isset($vals['wayOfSettlement'])){
				
				$this->wayOfSettlement = $vals['wayOfSettlement'];
			}
			
			
			if (isset($vals['ldpJoinTime'])){
				
				$this->ldpJoinTime = $vals['ldpJoinTime'];
			}
			
			
			if (isset($vals['reBillingRemark'])){
				
				$this->reBillingRemark = $vals['reBillingRemark'];
			}
			
			
			if (isset($vals['extPayType'])){
				
				$this->extPayType = $vals['extPayType'];
			}
			
			
			if (isset($vals['appraisedTime'])){
				
				$this->appraisedTime = $vals['appraisedTime'];
			}
			
			
			if (isset($vals['orderBatchNo'])){
				
				$this->orderBatchNo = $vals['orderBatchNo'];
			}
			
			
			if (isset($vals['orderMainCust'])){
				
				$this->orderMainCust = $vals['orderMainCust'];
			}
			
			
			if (isset($vals['b2cUserName'])){
				
				$this->b2cUserName = $vals['b2cUserName'];
			}
			
			
			if (isset($vals['mergeOrderSns'])){
				
				$this->mergeOrderSns = $vals['mergeOrderSns'];
			}
			
			
			if (isset($vals['mergeParentOrderSn'])){
				
				$this->mergeParentOrderSn = $vals['mergeParentOrderSn'];
			}
			
			
			if (isset($vals['mergeParentOrderNo'])){
				
				$this->mergeParentOrderNo = $vals['mergeParentOrderNo'];
			}
			
			
			if (isset($vals['mergeFlag'])){
				
				$this->mergeFlag = $vals['mergeFlag'];
			}
			
			
			if (isset($vals['tempCustCode'])){
				
				$this->tempCustCode = $vals['tempCustCode'];
			}
			
			
			if (isset($vals['isSecondMatch'])){
				
				$this->isSecondMatch = $vals['isSecondMatch'];
			}
			
			
			if (isset($vals['isSecondMatchAppraise'])){
				
				$this->isSecondMatchAppraise = $vals['isSecondMatchAppraise'];
			}
			
			
			if (isset($vals['secondMatchAppraiseTime'])){
				
				$this->secondMatchAppraiseTime = $vals['secondMatchAppraiseTime'];
			}
			
			
			if (isset($vals['isIntercept'])){
				
				$this->isIntercept = $vals['isIntercept'];
			}
			
			
			if (isset($vals['interceptOperator'])){
				
				$this->interceptOperator = $vals['interceptOperator'];
			}
			
			
			if (isset($vals['interceptTime'])){
				
				$this->interceptTime = $vals['interceptTime'];
			}
			
			
			if (isset($vals['crmCustPointId'])){
				
				$this->crmCustPointId = $vals['crmCustPointId'];
			}
			
			
			if (isset($vals['isPrint'])){
				
				$this->isPrint = $vals['isPrint'];
			}
			
			
			if (isset($vals['serviceType'])){
				
				$this->serviceType = $vals['serviceType'];
			}
			
			
			if (isset($vals['customerCode'])){
				
				$this->customerCode = $vals['customerCode'];
			}
			
			
			if (isset($vals['sendAddress'])){
				
				$this->sendAddress = $vals['sendAddress'];
			}
			
			
			if (isset($vals['dispatchStatus'])){
				
				$this->dispatchStatus = $vals['dispatchStatus'];
			}
			
			
			if (isset($vals['dispatchDate'])){
				
				$this->dispatchDate = $vals['dispatchDate'];
			}
			
			
			if (isset($vals['mbpCompensationAmount'])){
				
				$this->mbpCompensationAmount = $vals['mbpCompensationAmount'];
			}
			
			
			if (isset($vals['salesPlatform'])){
				
				$this->salesPlatform = $vals['salesPlatform'];
			}
			
			
			if (isset($vals['carrierPointName'])){
				
				$this->carrierPointName = $vals['carrierPointName'];
			}
			
			
			if (isset($vals['carrierPointCode'])){
				
				$this->carrierPointCode = $vals['carrierPointCode'];
			}
			
			
			if (isset($vals['carrierPointCustCode'])){
				
				$this->carrierPointCustCode = $vals['carrierPointCustCode'];
			}
			
			
			if (isset($vals['officeName'])){
				
				$this->officeName = $vals['officeName'];
			}
			
			
			if (isset($vals['officeOutName'])){
				
				$this->officeOutName = $vals['officeOutName'];
			}
			
			
			if (isset($vals['contact'])){
				
				$this->contact = $vals['contact'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['officeCode'])){
				
				$this->officeCode = $vals['officeCode'];
			}
			
			
			if (isset($vals['provinceCode'])){
				
				$this->provinceCode = $vals['provinceCode'];
			}
			
			
			if (isset($vals['cityCode'])){
				
				$this->cityCode = $vals['cityCode'];
			}
			
			
			if (isset($vals['countryCode'])){
				
				$this->countryCode = $vals['countryCode'];
			}
			
			
			if (isset($vals['regionCode'])){
				
				$this->regionCode = $vals['regionCode'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderUnionModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("recId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recId); 
				
			}
			
			
			
			
			if ("tmsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderId);
				
			}
			
			
			
			
			if ("returnBoxTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->returnBoxTime); 
				
			}
			
			
			
			
			if ("purchaseOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOrderId);
				
			}
			
			
			
			
			if ("isCountFee" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isCountFee); 
				
			}
			
			
			
			
			if ("easybreak" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->easybreak); 
				
			}
			
			
			
			
			if ("vipClubName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipClubName);
				
			}
			
			
			
			
			if ("userTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userTypeName);
				
			}
			
			
			
			
			if ("transportTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportTypeName);
				
			}
			
			
			
			
			if ("surplus" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->surplus);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("joinTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->joinTime); 
				
			}
			
			
			
			
			if ("totalPack" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalPack); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("isPay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isPay); 
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("isCod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isCod); 
				
			}
			
			
			
			
			if ("resendType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->resendType); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("buyerAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddress);
				
			}
			
			
			
			
			if ("postCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postCode);
				
			}
			
			
			
			
			if ("buyerAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAreaId);
				
			}
			
			
			
			
			if ("buyerAddress2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddress2);
				
			}
			
			
			
			
			if ("buyerAddress3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerAddress3);
				
			}
			
			
			
			
			if ("buyerCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCity);
				
			}
			
			
			
			
			if ("buyerState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerState);
				
			}
			
			
			
			
			if ("buyerCountryId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCountryId);
				
			}
			
			
			
			
			if ("buyerTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerTel);
				
			}
			
			
			
			
			if ("poType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->poType); 
				
			}
			
			
			
			
			if ("poPeriodValid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poPeriodValid);
				
			}
			
			
			
			
			if ("poBuyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poBuyer);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("transportId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transportId); 
				
			}
			
			
			
			
			if ("transportType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportType);
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime); 
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderType);
				
			}
			
			
			
			
			if ("vipClub" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vipClub); 
				
			}
			
			
			
			
			if ("invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoice);
				
			}
			
			
			
			
			if ("goodsMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goodsMoney);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->money);
				
			}
			
			
			
			
			if ("aigo" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->aigo);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favourableMoney);
				
			}
			
			
			
			
			if ("exFavMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->exFavMoney);
				
			}
			
			
			
			
			if ("userType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userType); 
				
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
			
			
			
			
			if ("isHold" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isHold); 
				
			}
			
			
			
			
			if ("oldOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldOrderSn);
				
			}
			
			
			
			
			if ("iudFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->iudFlag); 
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("originalServiceLevel" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->originalServiceLevel);
				
			}
			
			
			
			
			if ("originalVolume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->originalVolume);
				
			}
			
			
			
			
			if ("originalVolumeUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalVolumeUnit);
				
			}
			
			
			
			
			if ("originalWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->originalWeight);
				
			}
			
			
			
			
			if ("originalWeightUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalWeightUnit);
				
			}
			
			
			
			
			if ("originalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->originalAmount);
				
			}
			
			
			
			
			if ("transportWorkerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportWorkerName);
				
			}
			
			
			
			
			if ("amountUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amountUnit);
				
			}
			
			
			
			
			if ("orderSubType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderSubType); 
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderStatus); 
				
			}
			
			
			
			
			if ("signInMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signInMan);
				
			}
			
			
			
			
			if ("isAutopicked" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isAutopicked); 
				
			}
			
			
			
			
			if ("jionCustWorker" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jionCustWorker);
				
			}
			
			
			
			
			if ("acceptManipulatMatcTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->acceptManipulatMatcTime); 
				
			}
			
			
			
			
			if ("custNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->custNumber); 
				
			}
			
			
			
			
			if ("isTrack" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isTrack); 
				
			}
			
			
			
			
			if ("isExceptional" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isExceptional); 
				
			}
			
			
			
			
			if ("isInsurance" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isInsurance); 
				
			}
			
			
			
			
			if ("closeMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->closeMan);
				
			}
			
			
			
			
			if ("rejectionTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rejectionTime); 
				
			}
			
			
			
			
			if ("signInTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signInTime); 
				
			}
			
			
			
			
			if ("isClosed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isClosed); 
				
			}
			
			
			
			
			if ("circularWorkerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->circularWorkerName);
				
			}
			
			
			
			
			if ("closeTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->closeTime); 
				
			}
			
			
			
			
			if ("closeManCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->closeManCode);
				
			}
			
			
			
			
			if ("isCircular" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isCircular); 
				
			}
			
			
			
			
			if ("circularWorker" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->circularWorker);
				
			}
			
			
			
			
			if ("eta" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->eta); 
				
			}
			
			
			
			
			if ("atd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->atd); 
				
			}
			
			
			
			
			if ("circularTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->circularTime); 
				
			}
			
			
			
			
			if ("oriCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oriCity);
				
			}
			
			
			
			
			if ("tmsOriginalOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOriginalOrderId);
				
			}
			
			
			
			
			if ("returnType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnType); 
				
			}
			
			
			
			
			if ("returnno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnno);
				
			}
			
			
			
			
			if ("createdByUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdByUser);
				
			}
			
			
			
			
			if ("createdOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdOffice);
				
			}
			
			
			
			
			if ("createdDtmLoc" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdDtmLoc); 
				
			}
			
			
			
			
			if ("createdTimeZone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdTimeZone);
				
			}
			
			
			
			
			if ("updatedOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedOffice);
				
			}
			
			
			
			
			if ("updatedByUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedByUser);
				
			}
			
			
			
			
			if ("updatedDtmLoc" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updatedDtmLoc); 
				
			}
			
			
			
			
			if ("isRefuce" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isRefuce); 
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("currentDeliveryPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currentDeliveryPoint);
				
			}
			
			
			
			
			if ("deliveryPoint" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryPoint);
				
			}
			
			
			
			
			if ("updatedTimeZone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedTimeZone);
				
			}
			
			
			
			
			if ("recordVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recordVersion); 
				
			}
			
			
			
			
			if ("custType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->custType); 
				
			}
			
			
			
			
			if ("isDelete" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDelete); 
				
			}
			
			
			
			
			if ("aux1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aux1);
				
			}
			
			
			
			
			if ("aux2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aux2);
				
			}
			
			
			
			
			if ("aux3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aux3);
				
			}
			
			
			
			
			if ("aux4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aux4);
				
			}
			
			
			
			
			if ("aux5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aux5);
				
			}
			
			
			
			
			if ("isFeedBack" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isFeedBack); 
				
			}
			
			
			
			
			if ("autoFreight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->autoFreight); 
				
			}
			
			
			
			
			if ("fiscalYear" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fiscalYear);
				
			}
			
			
			
			
			if ("isUpdate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isUpdate); 
				
			}
			
			
			
			
			if ("isSpecialReturn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSpecialReturn); 
				
			}
			
			
			
			
			if ("custCounterAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->custCounterAmount);
				
			}
			
			
			
			
			if ("custClaimAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->custClaimAmount);
				
			}
			
			
			
			
			if ("insuranceClaimAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->insuranceClaimAmount);
				
			}
			
			
			
			
			if ("oqcDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->oqcDate); 
				
			}
			
			
			
			
			if ("returnGoodsContact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsContact);
				
			}
			
			
			
			
			if ("returnGoodsPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnGoodsPhone);
				
			}
			
			
			
			
			if ("returnGoodsType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnGoodsType); 
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("merchantsInterface" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchantsInterface);
				
			}
			
			
			
			
			if ("merchantsInterfacePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchantsInterfacePhone);
				
			}
			
			
			
			
			if ("returnSpecialRequirements" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnSpecialRequirements);
				
			}
			
			
			
			
			if ("payment" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->payment); 
				
			}
			
			
			
			
			if ("returnVendorContact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnVendorContact);
				
			}
			
			
			
			
			if ("deliveryMode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryMode); 
				
			}
			
			
			
			
			if ("receivedUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receivedUnit);
				
			}
			
			
			
			
			if ("transportMode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transportMode); 
				
			}
			
			
			
			
			if ("deliverGoodsManLink" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverGoodsManLink);
				
			}
			
			
			
			
			if ("deliverGoodsManPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverGoodsManPhone);
				
			}
			
			
			
			
			if ("isInStation" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isInStation); 
				
			}
			
			
			
			
			if ("buyTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyTown);
				
			}
			
			
			
			
			if ("cancelStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cancelStatus); 
				
			}
			
			
			
			
			if ("wayOfSettlement" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wayOfSettlement);
				
			}
			
			
			
			
			if ("ldpJoinTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ldpJoinTime); 
				
			}
			
			
			
			
			if ("reBillingRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reBillingRemark);
				
			}
			
			
			
			
			if ("extPayType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->extPayType); 
				
			}
			
			
			
			
			if ("appraisedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->appraisedTime); 
				
			}
			
			
			
			
			if ("orderBatchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderBatchNo);
				
			}
			
			
			
			
			if ("orderMainCust" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderMainCust);
				
			}
			
			
			
			
			if ("b2cUserName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cUserName);
				
			}
			
			
			
			
			if ("mergeOrderSns" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mergeOrderSns);
				
			}
			
			
			
			
			if ("mergeParentOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mergeParentOrderSn);
				
			}
			
			
			
			
			if ("mergeParentOrderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mergeParentOrderNo);
				
			}
			
			
			
			
			if ("mergeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mergeFlag); 
				
			}
			
			
			
			
			if ("tempCustCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tempCustCode);
				
			}
			
			
			
			
			if ("isSecondMatch" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->isSecondMatch); 
				
			}
			
			
			
			
			if ("isSecondMatchAppraise" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSecondMatchAppraise);
				
			}
			
			
			
			
			if ("secondMatchAppraiseTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->secondMatchAppraiseTime); 
				
			}
			
			
			
			
			if ("isIntercept" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isIntercept); 
				
			}
			
			
			
			
			if ("interceptOperator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->interceptOperator);
				
			}
			
			
			
			
			if ("interceptTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->interceptTime); 
				
			}
			
			
			
			
			if ("crmCustPointId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->crmCustPointId);
				
			}
			
			
			
			
			if ("isPrint" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPrint); 
				
			}
			
			
			
			
			if ("serviceType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->serviceType); 
				
			}
			
			
			
			
			if ("customerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customerCode);
				
			}
			
			
			
			
			if ("sendAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sendAddress);
				
			}
			
			
			
			
			if ("dispatchStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->dispatchStatus); 
				
			}
			
			
			
			
			if ("dispatchDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dispatchDate); 
				
			}
			
			
			
			
			if ("mbpCompensationAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->mbpCompensationAmount);
				
			}
			
			
			
			
			if ("salesPlatform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesPlatform);
				
			}
			
			
			
			
			if ("carrierPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointName);
				
			}
			
			
			
			
			if ("carrierPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointCode);
				
			}
			
			
			
			
			if ("carrierPointCustCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointCustCode);
				
			}
			
			
			
			
			if ("officeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->officeName);
				
			}
			
			
			
			
			if ("officeOutName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->officeOutName);
				
			}
			
			
			
			
			if ("contact" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contact);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("officeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->officeCode);
				
			}
			
			
			
			
			if ("provinceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceCode);
				
			}
			
			
			
			
			if ("cityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityCode);
				
			}
			
			
			
			
			if ("countryCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->countryCode);
				
			}
			
			
			
			
			if ("regionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->regionCode);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
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
		
		if($this->recId !== null) {
			
			$xfer += $output->writeFieldBegin('recId');
			$xfer += $output->writeI64($this->recId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderId');
			$xfer += $output->writeString($this->tmsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnBoxTime !== null) {
			
			$xfer += $output->writeFieldBegin('returnBoxTime');
			$xfer += $output->writeI64($this->returnBoxTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOrderId');
			$xfer += $output->writeString($this->purchaseOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCountFee !== null) {
			
			$xfer += $output->writeFieldBegin('isCountFee');
			$xfer += $output->writeI32($this->isCountFee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->easybreak !== null) {
			
			$xfer += $output->writeFieldBegin('easybreak');
			$xfer += $output->writeI32($this->easybreak);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipClubName !== null) {
			
			$xfer += $output->writeFieldBegin('vipClubName');
			$xfer += $output->writeString($this->vipClubName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('userTypeName');
			$xfer += $output->writeString($this->userTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('transportTypeName');
			$xfer += $output->writeString($this->transportTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->surplus !== null) {
			
			$xfer += $output->writeFieldBegin('surplus');
			$xfer += $output->writeDouble($this->surplus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->joinTime !== null) {
			
			$xfer += $output->writeFieldBegin('joinTime');
			$xfer += $output->writeI64($this->joinTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalPack !== null) {
			
			$xfer += $output->writeFieldBegin('totalPack');
			$xfer += $output->writeI64($this->totalPack);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPay !== null) {
			
			$xfer += $output->writeFieldBegin('isPay');
			$xfer += $output->writeI32($this->isPay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderNo');
			$xfer += $output->writeString($this->orderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCod !== null) {
			
			$xfer += $output->writeFieldBegin('isCod');
			$xfer += $output->writeI32($this->isCod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resendType !== null) {
			
			$xfer += $output->writeFieldBegin('resendType');
			$xfer += $output->writeI32($this->resendType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddress !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddress');
			$xfer += $output->writeString($this->buyerAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postCode !== null) {
			
			$xfer += $output->writeFieldBegin('postCode');
			$xfer += $output->writeString($this->postCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAreaId');
			$xfer += $output->writeString($this->buyerAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddress2 !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddress2');
			$xfer += $output->writeString($this->buyerAddress2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerAddress3 !== null) {
			
			$xfer += $output->writeFieldBegin('buyerAddress3');
			$xfer += $output->writeString($this->buyerAddress3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCity !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCity');
			$xfer += $output->writeString($this->buyerCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerState !== null) {
			
			$xfer += $output->writeFieldBegin('buyerState');
			$xfer += $output->writeString($this->buyerState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCountryId !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCountryId');
			$xfer += $output->writeString($this->buyerCountryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerTel !== null) {
			
			$xfer += $output->writeFieldBegin('buyerTel');
			$xfer += $output->writeString($this->buyerTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poType !== null) {
			
			$xfer += $output->writeFieldBegin('poType');
			$xfer += $output->writeI32($this->poType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poPeriodValid !== null) {
			
			$xfer += $output->writeFieldBegin('poPeriodValid');
			$xfer += $output->writeString($this->poPeriodValid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poBuyer !== null) {
			
			$xfer += $output->writeFieldBegin('poBuyer');
			$xfer += $output->writeString($this->poBuyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportId !== null) {
			
			$xfer += $output->writeFieldBegin('transportId');
			$xfer += $output->writeI32($this->transportId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportType !== null) {
			
			$xfer += $output->writeFieldBegin('transportType');
			$xfer += $output->writeString($this->transportType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeI64($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeString($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipClub !== null) {
			
			$xfer += $output->writeFieldBegin('vipClub');
			$xfer += $output->writeI32($this->vipClub);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoice !== null) {
			
			$xfer += $output->writeFieldBegin('invoice');
			$xfer += $output->writeString($this->invoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsMoney !== null) {
			
			$xfer += $output->writeFieldBegin('goodsMoney');
			$xfer += $output->writeDouble($this->goodsMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeDouble($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aigo !== null) {
			
			$xfer += $output->writeFieldBegin('aigo');
			$xfer += $output->writeDouble($this->aigo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favourableMoney !== null) {
			
			$xfer += $output->writeFieldBegin('favourableMoney');
			$xfer += $output->writeDouble($this->favourableMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exFavMoney !== null) {
			
			$xfer += $output->writeFieldBegin('exFavMoney');
			$xfer += $output->writeDouble($this->exFavMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userType !== null) {
			
			$xfer += $output->writeFieldBegin('userType');
			$xfer += $output->writeI32($this->userType);
			
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
		
		
		if($this->isHold !== null) {
			
			$xfer += $output->writeFieldBegin('isHold');
			$xfer += $output->writeI32($this->isHold);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('oldOrderSn');
			$xfer += $output->writeString($this->oldOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->iudFlag !== null) {
			
			$xfer += $output->writeFieldBegin('iudFlag');
			$xfer += $output->writeI32($this->iudFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalServiceLevel !== null) {
			
			$xfer += $output->writeFieldBegin('originalServiceLevel');
			$xfer += $output->writeDouble($this->originalServiceLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalVolume !== null) {
			
			$xfer += $output->writeFieldBegin('originalVolume');
			$xfer += $output->writeDouble($this->originalVolume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalVolumeUnit !== null) {
			
			$xfer += $output->writeFieldBegin('originalVolumeUnit');
			$xfer += $output->writeString($this->originalVolumeUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalWeight !== null) {
			
			$xfer += $output->writeFieldBegin('originalWeight');
			$xfer += $output->writeDouble($this->originalWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalWeightUnit !== null) {
			
			$xfer += $output->writeFieldBegin('originalWeightUnit');
			$xfer += $output->writeString($this->originalWeightUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('originalAmount');
			$xfer += $output->writeDouble($this->originalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportWorkerName !== null) {
			
			$xfer += $output->writeFieldBegin('transportWorkerName');
			$xfer += $output->writeString($this->transportWorkerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amountUnit !== null) {
			
			$xfer += $output->writeFieldBegin('amountUnit');
			$xfer += $output->writeString($this->amountUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSubType !== null) {
			
			$xfer += $output->writeFieldBegin('orderSubType');
			$xfer += $output->writeI32($this->orderSubType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeI32($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signInMan !== null) {
			
			$xfer += $output->writeFieldBegin('signInMan');
			$xfer += $output->writeString($this->signInMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isAutopicked !== null) {
			
			$xfer += $output->writeFieldBegin('isAutopicked');
			$xfer += $output->writeI32($this->isAutopicked);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jionCustWorker !== null) {
			
			$xfer += $output->writeFieldBegin('jionCustWorker');
			$xfer += $output->writeString($this->jionCustWorker);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptManipulatMatcTime !== null) {
			
			$xfer += $output->writeFieldBegin('acceptManipulatMatcTime');
			$xfer += $output->writeI64($this->acceptManipulatMatcTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custNumber !== null) {
			
			$xfer += $output->writeFieldBegin('custNumber');
			$xfer += $output->writeI64($this->custNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTrack !== null) {
			
			$xfer += $output->writeFieldBegin('isTrack');
			$xfer += $output->writeI32($this->isTrack);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isExceptional !== null) {
			
			$xfer += $output->writeFieldBegin('isExceptional');
			$xfer += $output->writeI32($this->isExceptional);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isInsurance !== null) {
			
			$xfer += $output->writeFieldBegin('isInsurance');
			$xfer += $output->writeI32($this->isInsurance);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeMan !== null) {
			
			$xfer += $output->writeFieldBegin('closeMan');
			$xfer += $output->writeString($this->closeMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rejectionTime !== null) {
			
			$xfer += $output->writeFieldBegin('rejectionTime');
			$xfer += $output->writeI64($this->rejectionTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signInTime !== null) {
			
			$xfer += $output->writeFieldBegin('signInTime');
			$xfer += $output->writeI64($this->signInTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isClosed !== null) {
			
			$xfer += $output->writeFieldBegin('isClosed');
			$xfer += $output->writeI32($this->isClosed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->circularWorkerName !== null) {
			
			$xfer += $output->writeFieldBegin('circularWorkerName');
			$xfer += $output->writeString($this->circularWorkerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeTime !== null) {
			
			$xfer += $output->writeFieldBegin('closeTime');
			$xfer += $output->writeI64($this->closeTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeManCode !== null) {
			
			$xfer += $output->writeFieldBegin('closeManCode');
			$xfer += $output->writeString($this->closeManCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCircular !== null) {
			
			$xfer += $output->writeFieldBegin('isCircular');
			$xfer += $output->writeI32($this->isCircular);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->circularWorker !== null) {
			
			$xfer += $output->writeFieldBegin('circularWorker');
			$xfer += $output->writeString($this->circularWorker);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->eta !== null) {
			
			$xfer += $output->writeFieldBegin('eta');
			$xfer += $output->writeI64($this->eta);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->atd !== null) {
			
			$xfer += $output->writeFieldBegin('atd');
			$xfer += $output->writeI64($this->atd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->circularTime !== null) {
			
			$xfer += $output->writeFieldBegin('circularTime');
			$xfer += $output->writeI64($this->circularTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oriCity !== null) {
			
			$xfer += $output->writeFieldBegin('oriCity');
			$xfer += $output->writeString($this->oriCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOriginalOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOriginalOrderId');
			$xfer += $output->writeString($this->tmsOriginalOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnType !== null) {
			
			$xfer += $output->writeFieldBegin('returnType');
			$xfer += $output->writeI32($this->returnType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnno !== null) {
			
			$xfer += $output->writeFieldBegin('returnno');
			$xfer += $output->writeString($this->returnno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdByUser !== null) {
			
			$xfer += $output->writeFieldBegin('createdByUser');
			$xfer += $output->writeString($this->createdByUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdDtmLoc !== null) {
			
			$xfer += $output->writeFieldBegin('createdDtmLoc');
			$xfer += $output->writeI64($this->createdDtmLoc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTimeZone !== null) {
			
			$xfer += $output->writeFieldBegin('createdTimeZone');
			$xfer += $output->writeString($this->createdTimeZone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedOffice !== null) {
			
			$xfer += $output->writeFieldBegin('updatedOffice');
			$xfer += $output->writeString($this->updatedOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedByUser !== null) {
			
			$xfer += $output->writeFieldBegin('updatedByUser');
			$xfer += $output->writeString($this->updatedByUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedDtmLoc !== null) {
			
			$xfer += $output->writeFieldBegin('updatedDtmLoc');
			$xfer += $output->writeI64($this->updatedDtmLoc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isRefuce !== null) {
			
			$xfer += $output->writeFieldBegin('isRefuce');
			$xfer += $output->writeI32($this->isRefuce);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currentDeliveryPoint !== null) {
			
			$xfer += $output->writeFieldBegin('currentDeliveryPoint');
			$xfer += $output->writeString($this->currentDeliveryPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryPoint !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryPoint');
			$xfer += $output->writeString($this->deliveryPoint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedTimeZone !== null) {
			
			$xfer += $output->writeFieldBegin('updatedTimeZone');
			$xfer += $output->writeString($this->updatedTimeZone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordVersion !== null) {
			
			$xfer += $output->writeFieldBegin('recordVersion');
			$xfer += $output->writeI64($this->recordVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custType !== null) {
			
			$xfer += $output->writeFieldBegin('custType');
			$xfer += $output->writeI32($this->custType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDelete !== null) {
			
			$xfer += $output->writeFieldBegin('isDelete');
			$xfer += $output->writeI32($this->isDelete);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aux1 !== null) {
			
			$xfer += $output->writeFieldBegin('aux1');
			$xfer += $output->writeString($this->aux1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aux2 !== null) {
			
			$xfer += $output->writeFieldBegin('aux2');
			$xfer += $output->writeString($this->aux2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aux3 !== null) {
			
			$xfer += $output->writeFieldBegin('aux3');
			$xfer += $output->writeString($this->aux3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aux4 !== null) {
			
			$xfer += $output->writeFieldBegin('aux4');
			$xfer += $output->writeString($this->aux4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aux5 !== null) {
			
			$xfer += $output->writeFieldBegin('aux5');
			$xfer += $output->writeString($this->aux5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isFeedBack !== null) {
			
			$xfer += $output->writeFieldBegin('isFeedBack');
			$xfer += $output->writeI32($this->isFeedBack);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->autoFreight !== null) {
			
			$xfer += $output->writeFieldBegin('autoFreight');
			$xfer += $output->writeI32($this->autoFreight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fiscalYear !== null) {
			
			$xfer += $output->writeFieldBegin('fiscalYear');
			$xfer += $output->writeString($this->fiscalYear);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isUpdate !== null) {
			
			$xfer += $output->writeFieldBegin('isUpdate');
			$xfer += $output->writeI32($this->isUpdate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSpecialReturn !== null) {
			
			$xfer += $output->writeFieldBegin('isSpecialReturn');
			$xfer += $output->writeI32($this->isSpecialReturn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCounterAmount !== null) {
			
			$xfer += $output->writeFieldBegin('custCounterAmount');
			$xfer += $output->writeDouble($this->custCounterAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custClaimAmount !== null) {
			
			$xfer += $output->writeFieldBegin('custClaimAmount');
			$xfer += $output->writeDouble($this->custClaimAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->insuranceClaimAmount !== null) {
			
			$xfer += $output->writeFieldBegin('insuranceClaimAmount');
			$xfer += $output->writeDouble($this->insuranceClaimAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oqcDate !== null) {
			
			$xfer += $output->writeFieldBegin('oqcDate');
			$xfer += $output->writeI64($this->oqcDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsContact !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsContact');
			$xfer += $output->writeString($this->returnGoodsContact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsPhone !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsPhone');
			$xfer += $output->writeString($this->returnGoodsPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnGoodsType !== null) {
			
			$xfer += $output->writeFieldBegin('returnGoodsType');
			$xfer += $output->writeI32($this->returnGoodsType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchantsInterface !== null) {
			
			$xfer += $output->writeFieldBegin('merchantsInterface');
			$xfer += $output->writeString($this->merchantsInterface);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchantsInterfacePhone !== null) {
			
			$xfer += $output->writeFieldBegin('merchantsInterfacePhone');
			$xfer += $output->writeString($this->merchantsInterfacePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnSpecialRequirements !== null) {
			
			$xfer += $output->writeFieldBegin('returnSpecialRequirements');
			$xfer += $output->writeString($this->returnSpecialRequirements);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payment !== null) {
			
			$xfer += $output->writeFieldBegin('payment');
			$xfer += $output->writeI32($this->payment);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnVendorContact !== null) {
			
			$xfer += $output->writeFieldBegin('returnVendorContact');
			$xfer += $output->writeString($this->returnVendorContact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryMode !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryMode');
			$xfer += $output->writeI32($this->deliveryMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receivedUnit !== null) {
			
			$xfer += $output->writeFieldBegin('receivedUnit');
			$xfer += $output->writeString($this->receivedUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportMode !== null) {
			
			$xfer += $output->writeFieldBegin('transportMode');
			$xfer += $output->writeI32($this->transportMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverGoodsManLink !== null) {
			
			$xfer += $output->writeFieldBegin('deliverGoodsManLink');
			$xfer += $output->writeString($this->deliverGoodsManLink);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverGoodsManPhone !== null) {
			
			$xfer += $output->writeFieldBegin('deliverGoodsManPhone');
			$xfer += $output->writeString($this->deliverGoodsManPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isInStation !== null) {
			
			$xfer += $output->writeFieldBegin('isInStation');
			$xfer += $output->writeI32($this->isInStation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyTown !== null) {
			
			$xfer += $output->writeFieldBegin('buyTown');
			$xfer += $output->writeString($this->buyTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cancelStatus !== null) {
			
			$xfer += $output->writeFieldBegin('cancelStatus');
			$xfer += $output->writeI32($this->cancelStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wayOfSettlement !== null) {
			
			$xfer += $output->writeFieldBegin('wayOfSettlement');
			$xfer += $output->writeString($this->wayOfSettlement);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ldpJoinTime !== null) {
			
			$xfer += $output->writeFieldBegin('ldpJoinTime');
			$xfer += $output->writeI64($this->ldpJoinTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reBillingRemark !== null) {
			
			$xfer += $output->writeFieldBegin('reBillingRemark');
			$xfer += $output->writeString($this->reBillingRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extPayType !== null) {
			
			$xfer += $output->writeFieldBegin('extPayType');
			$xfer += $output->writeI32($this->extPayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appraisedTime !== null) {
			
			$xfer += $output->writeFieldBegin('appraisedTime');
			$xfer += $output->writeI64($this->appraisedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderBatchNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderBatchNo');
			$xfer += $output->writeString($this->orderBatchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderMainCust !== null) {
			
			$xfer += $output->writeFieldBegin('orderMainCust');
			$xfer += $output->writeString($this->orderMainCust);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cUserName !== null) {
			
			$xfer += $output->writeFieldBegin('b2cUserName');
			$xfer += $output->writeString($this->b2cUserName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mergeOrderSns !== null) {
			
			$xfer += $output->writeFieldBegin('mergeOrderSns');
			$xfer += $output->writeString($this->mergeOrderSns);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mergeParentOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('mergeParentOrderSn');
			$xfer += $output->writeString($this->mergeParentOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mergeParentOrderNo !== null) {
			
			$xfer += $output->writeFieldBegin('mergeParentOrderNo');
			$xfer += $output->writeString($this->mergeParentOrderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mergeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('mergeFlag');
			$xfer += $output->writeI32($this->mergeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tempCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('tempCustCode');
			$xfer += $output->writeString($this->tempCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSecondMatch !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondMatch');
			$xfer += $output->writeI16($this->isSecondMatch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSecondMatchAppraise !== null) {
			
			$xfer += $output->writeFieldBegin('isSecondMatchAppraise');
			$xfer += $output->writeBool($this->isSecondMatchAppraise);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->secondMatchAppraiseTime !== null) {
			
			$xfer += $output->writeFieldBegin('secondMatchAppraiseTime');
			$xfer += $output->writeI64($this->secondMatchAppraiseTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isIntercept !== null) {
			
			$xfer += $output->writeFieldBegin('isIntercept');
			$xfer += $output->writeI32($this->isIntercept);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->interceptOperator !== null) {
			
			$xfer += $output->writeFieldBegin('interceptOperator');
			$xfer += $output->writeString($this->interceptOperator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->interceptTime !== null) {
			
			$xfer += $output->writeFieldBegin('interceptTime');
			$xfer += $output->writeI64($this->interceptTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crmCustPointId !== null) {
			
			$xfer += $output->writeFieldBegin('crmCustPointId');
			$xfer += $output->writeString($this->crmCustPointId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPrint !== null) {
			
			$xfer += $output->writeFieldBegin('isPrint');
			$xfer += $output->writeByte($this->isPrint);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceType !== null) {
			
			$xfer += $output->writeFieldBegin('serviceType');
			$xfer += $output->writeByte($this->serviceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerCode !== null) {
			
			$xfer += $output->writeFieldBegin('customerCode');
			$xfer += $output->writeString($this->customerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sendAddress !== null) {
			
			$xfer += $output->writeFieldBegin('sendAddress');
			$xfer += $output->writeString($this->sendAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dispatchStatus !== null) {
			
			$xfer += $output->writeFieldBegin('dispatchStatus');
			$xfer += $output->writeByte($this->dispatchStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dispatchDate !== null) {
			
			$xfer += $output->writeFieldBegin('dispatchDate');
			$xfer += $output->writeI64($this->dispatchDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mbpCompensationAmount !== null) {
			
			$xfer += $output->writeFieldBegin('mbpCompensationAmount');
			$xfer += $output->writeDouble($this->mbpCompensationAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesPlatform !== null) {
			
			$xfer += $output->writeFieldBegin('salesPlatform');
			$xfer += $output->writeString($this->salesPlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointName');
			$xfer += $output->writeString($this->carrierPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointCode');
			$xfer += $output->writeString($this->carrierPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointCustCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointCustCode');
			$xfer += $output->writeString($this->carrierPointCustCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->officeName !== null) {
			
			$xfer += $output->writeFieldBegin('officeName');
			$xfer += $output->writeString($this->officeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->officeOutName !== null) {
			
			$xfer += $output->writeFieldBegin('officeOutName');
			$xfer += $output->writeString($this->officeOutName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contact !== null) {
			
			$xfer += $output->writeFieldBegin('contact');
			$xfer += $output->writeString($this->contact);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->officeCode !== null) {
			
			$xfer += $output->writeFieldBegin('officeCode');
			$xfer += $output->writeString($this->officeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceCode !== null) {
			
			$xfer += $output->writeFieldBegin('provinceCode');
			$xfer += $output->writeString($this->provinceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityCode !== null) {
			
			$xfer += $output->writeFieldBegin('cityCode');
			$xfer += $output->writeString($this->cityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->countryCode !== null) {
			
			$xfer += $output->writeFieldBegin('countryCode');
			$xfer += $output->writeString($this->countryCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->regionCode !== null) {
			
			$xfer += $output->writeFieldBegin('regionCode');
			$xfer += $output->writeString($this->regionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>