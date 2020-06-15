<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtSaleOrderResult {
	
	static $_TSPEC;
	public $orderId = null;
	public $orderSn = null;
	public $saleType = null;
	public $isTmsProvideTransportNo = null;
	public $createTime = null;
	public $warehouse = null;
	public $remark = null;
	public $transportDay = null;
	public $batchNumber = null;
	public $ladingBillNumber = null;
	public $subLadingBillNumber = null;
	public $brandId = null;
	public $buyer = null;
	public $address = null;
	public $province = null;
	public $city = null;
	public $district = null;
	public $street = null;
	public $buyerIdcard = null;
	public $tel = null;
	public $mobile = null;
	public $totalMoney = null;
	public $payMount = null;
	public $favourableMoney = null;
	public $carriage = null;
	public $customCarriage = null;
	public $taxFee = null;
	public $payMoneyType = null;
	public $tradeNumber = null;
	public $payTypeNumber = null;
	public $enterpriseCertCode = null;
	public $carriersName = null;
	public $carrierPointCode = null;
	public $carrierPointName = null;
	public $transportNo = null;
	public $originCode = null;
	public $destinationCode = null;
	public $templateCode = null;
	public $pickCode = null;
	public $custCode = null;
	public $customsCode = null;
	public $chinaFreightForwarding = null;
	public $globalFreightForwarding = null;
	public $customsClearanceMode = null;
	public $updateTime = null;
	public $status = null;
	public $brandName = null;
	public $HtSaleOrderInfoVopModelList = null;
	public $channel = null;
	public $userDef1 = null;
	public $userDef2 = null;
	public $userDef3 = null;
	public $userDef4 = null;
	public $userDef5 = null;
	public $userDef6 = null;
	public $userDef7 = null;
	public $userDef8 = null;
	public $unloadPointCode = null;
	public $unloadPointName = null;
	public $orderDeliveryBatch = null;
	public $pickupGoodsTime = null;
	public $transportPrd = null;
	public $boxId = null;
	public $payType = null;
	public $transportType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'saleType'
			),
			4 => array(
			'var' => 'isTmsProvideTransportNo'
			),
			5 => array(
			'var' => 'createTime'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'remark'
			),
			8 => array(
			'var' => 'transportDay'
			),
			9 => array(
			'var' => 'batchNumber'
			),
			10 => array(
			'var' => 'ladingBillNumber'
			),
			11 => array(
			'var' => 'subLadingBillNumber'
			),
			12 => array(
			'var' => 'brandId'
			),
			13 => array(
			'var' => 'buyer'
			),
			14 => array(
			'var' => 'address'
			),
			15 => array(
			'var' => 'province'
			),
			16 => array(
			'var' => 'city'
			),
			17 => array(
			'var' => 'district'
			),
			18 => array(
			'var' => 'street'
			),
			19 => array(
			'var' => 'buyerIdcard'
			),
			20 => array(
			'var' => 'tel'
			),
			21 => array(
			'var' => 'mobile'
			),
			22 => array(
			'var' => 'totalMoney'
			),
			23 => array(
			'var' => 'payMount'
			),
			24 => array(
			'var' => 'favourableMoney'
			),
			25 => array(
			'var' => 'carriage'
			),
			26 => array(
			'var' => 'customCarriage'
			),
			27 => array(
			'var' => 'taxFee'
			),
			28 => array(
			'var' => 'payMoneyType'
			),
			29 => array(
			'var' => 'tradeNumber'
			),
			30 => array(
			'var' => 'payTypeNumber'
			),
			31 => array(
			'var' => 'enterpriseCertCode'
			),
			32 => array(
			'var' => 'carriersName'
			),
			33 => array(
			'var' => 'carrierPointCode'
			),
			34 => array(
			'var' => 'carrierPointName'
			),
			35 => array(
			'var' => 'transportNo'
			),
			36 => array(
			'var' => 'originCode'
			),
			37 => array(
			'var' => 'destinationCode'
			),
			38 => array(
			'var' => 'templateCode'
			),
			39 => array(
			'var' => 'pickCode'
			),
			40 => array(
			'var' => 'custCode'
			),
			41 => array(
			'var' => 'customsCode'
			),
			42 => array(
			'var' => 'chinaFreightForwarding'
			),
			43 => array(
			'var' => 'globalFreightForwarding'
			),
			44 => array(
			'var' => 'customsClearanceMode'
			),
			45 => array(
			'var' => 'updateTime'
			),
			46 => array(
			'var' => 'status'
			),
			48 => array(
			'var' => 'brandName'
			),
			47 => array(
			'var' => 'HtSaleOrderInfoVopModelList'
			),
			49 => array(
			'var' => 'channel'
			),
			50 => array(
			'var' => 'userDef1'
			),
			51 => array(
			'var' => 'userDef2'
			),
			52 => array(
			'var' => 'userDef3'
			),
			53 => array(
			'var' => 'userDef4'
			),
			54 => array(
			'var' => 'userDef5'
			),
			55 => array(
			'var' => 'userDef6'
			),
			56 => array(
			'var' => 'userDef7'
			),
			57 => array(
			'var' => 'userDef8'
			),
			58 => array(
			'var' => 'unloadPointCode'
			),
			59 => array(
			'var' => 'unloadPointName'
			),
			60 => array(
			'var' => 'orderDeliveryBatch'
			),
			61 => array(
			'var' => 'pickupGoodsTime'
			),
			62 => array(
			'var' => 'transportPrd'
			),
			63 => array(
			'var' => 'boxId'
			),
			64 => array(
			'var' => 'payType'
			),
			65 => array(
			'var' => 'transportType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
			if (isset($vals['isTmsProvideTransportNo'])){
				
				$this->isTmsProvideTransportNo = $vals['isTmsProvideTransportNo'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transportDay'])){
				
				$this->transportDay = $vals['transportDay'];
			}
			
			
			if (isset($vals['batchNumber'])){
				
				$this->batchNumber = $vals['batchNumber'];
			}
			
			
			if (isset($vals['ladingBillNumber'])){
				
				$this->ladingBillNumber = $vals['ladingBillNumber'];
			}
			
			
			if (isset($vals['subLadingBillNumber'])){
				
				$this->subLadingBillNumber = $vals['subLadingBillNumber'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['street'])){
				
				$this->street = $vals['street'];
			}
			
			
			if (isset($vals['buyerIdcard'])){
				
				$this->buyerIdcard = $vals['buyerIdcard'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['totalMoney'])){
				
				$this->totalMoney = $vals['totalMoney'];
			}
			
			
			if (isset($vals['payMount'])){
				
				$this->payMount = $vals['payMount'];
			}
			
			
			if (isset($vals['favourableMoney'])){
				
				$this->favourableMoney = $vals['favourableMoney'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['customCarriage'])){
				
				$this->customCarriage = $vals['customCarriage'];
			}
			
			
			if (isset($vals['taxFee'])){
				
				$this->taxFee = $vals['taxFee'];
			}
			
			
			if (isset($vals['payMoneyType'])){
				
				$this->payMoneyType = $vals['payMoneyType'];
			}
			
			
			if (isset($vals['tradeNumber'])){
				
				$this->tradeNumber = $vals['tradeNumber'];
			}
			
			
			if (isset($vals['payTypeNumber'])){
				
				$this->payTypeNumber = $vals['payTypeNumber'];
			}
			
			
			if (isset($vals['enterpriseCertCode'])){
				
				$this->enterpriseCertCode = $vals['enterpriseCertCode'];
			}
			
			
			if (isset($vals['carriersName'])){
				
				$this->carriersName = $vals['carriersName'];
			}
			
			
			if (isset($vals['carrierPointCode'])){
				
				$this->carrierPointCode = $vals['carrierPointCode'];
			}
			
			
			if (isset($vals['carrierPointName'])){
				
				$this->carrierPointName = $vals['carrierPointName'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['originCode'])){
				
				$this->originCode = $vals['originCode'];
			}
			
			
			if (isset($vals['destinationCode'])){
				
				$this->destinationCode = $vals['destinationCode'];
			}
			
			
			if (isset($vals['templateCode'])){
				
				$this->templateCode = $vals['templateCode'];
			}
			
			
			if (isset($vals['pickCode'])){
				
				$this->pickCode = $vals['pickCode'];
			}
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['chinaFreightForwarding'])){
				
				$this->chinaFreightForwarding = $vals['chinaFreightForwarding'];
			}
			
			
			if (isset($vals['globalFreightForwarding'])){
				
				$this->globalFreightForwarding = $vals['globalFreightForwarding'];
			}
			
			
			if (isset($vals['customsClearanceMode'])){
				
				$this->customsClearanceMode = $vals['customsClearanceMode'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['HtSaleOrderInfoVopModelList'])){
				
				$this->HtSaleOrderInfoVopModelList = $vals['HtSaleOrderInfoVopModelList'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['userDef1'])){
				
				$this->userDef1 = $vals['userDef1'];
			}
			
			
			if (isset($vals['userDef2'])){
				
				$this->userDef2 = $vals['userDef2'];
			}
			
			
			if (isset($vals['userDef3'])){
				
				$this->userDef3 = $vals['userDef3'];
			}
			
			
			if (isset($vals['userDef4'])){
				
				$this->userDef4 = $vals['userDef4'];
			}
			
			
			if (isset($vals['userDef5'])){
				
				$this->userDef5 = $vals['userDef5'];
			}
			
			
			if (isset($vals['userDef6'])){
				
				$this->userDef6 = $vals['userDef6'];
			}
			
			
			if (isset($vals['userDef7'])){
				
				$this->userDef7 = $vals['userDef7'];
			}
			
			
			if (isset($vals['userDef8'])){
				
				$this->userDef8 = $vals['userDef8'];
			}
			
			
			if (isset($vals['unloadPointCode'])){
				
				$this->unloadPointCode = $vals['unloadPointCode'];
			}
			
			
			if (isset($vals['unloadPointName'])){
				
				$this->unloadPointName = $vals['unloadPointName'];
			}
			
			
			if (isset($vals['orderDeliveryBatch'])){
				
				$this->orderDeliveryBatch = $vals['orderDeliveryBatch'];
			}
			
			
			if (isset($vals['pickupGoodsTime'])){
				
				$this->pickupGoodsTime = $vals['pickupGoodsTime'];
			}
			
			
			if (isset($vals['transportPrd'])){
				
				$this->transportPrd = $vals['transportPrd'];
			}
			
			
			if (isset($vals['boxId'])){
				
				$this->boxId = $vals['boxId'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['transportType'])){
				
				$this->transportType = $vals['transportType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtSaleOrderResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
			}
			
			
			
			
			if ("isTmsProvideTransportNo" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isTmsProvideTransportNo); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transportDay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportDay);
				
			}
			
			
			
			
			if ("batchNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNumber);
				
			}
			
			
			
			
			if ("ladingBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ladingBillNumber);
				
			}
			
			
			
			
			if ("subLadingBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subLadingBillNumber);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("street" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->street);
				
			}
			
			
			
			
			if ("buyerIdcard" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerIdcard);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("totalMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalMoney);
				
			}
			
			
			
			
			if ("payMount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payMount);
				
			}
			
			
			
			
			if ("favourableMoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favourableMoney);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("customCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->customCarriage);
				
			}
			
			
			
			
			if ("taxFee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->taxFee);
				
			}
			
			
			
			
			if ("payMoneyType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMoneyType);
				
			}
			
			
			
			
			if ("tradeNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeNumber);
				
			}
			
			
			
			
			if ("payTypeNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTypeNumber);
				
			}
			
			
			
			
			if ("enterpriseCertCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterpriseCertCode);
				
			}
			
			
			
			
			if ("carriersName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriersName);
				
			}
			
			
			
			
			if ("carrierPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointCode);
				
			}
			
			
			
			
			if ("carrierPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierPointName);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("originCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originCode);
				
			}
			
			
			
			
			if ("destinationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->destinationCode);
				
			}
			
			
			
			
			if ("templateCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->templateCode);
				
			}
			
			
			
			
			if ("pickCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickCode);
				
			}
			
			
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("customsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsCode);
				
			}
			
			
			
			
			if ("chinaFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chinaFreightForwarding);
				
			}
			
			
			
			
			if ("globalFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalFreightForwarding);
				
			}
			
			
			
			
			if ("customsClearanceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsClearanceMode);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateTime);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("HtSaleOrderInfoVopModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->HtSaleOrderInfoVopModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\haitao\orderservice\service\HtSaleOrderInfoModel();
						$elem0->read($input);
						
						$this->HtSaleOrderInfoVopModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("userDef1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef1);
				
			}
			
			
			
			
			if ("userDef2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef2);
				
			}
			
			
			
			
			if ("userDef3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef3);
				
			}
			
			
			
			
			if ("userDef4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef4);
				
			}
			
			
			
			
			if ("userDef5" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userDef5); 
				
			}
			
			
			
			
			if ("userDef6" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userDef6); 
				
			}
			
			
			
			
			if ("userDef7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef7);
				
			}
			
			
			
			
			if ("userDef8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userDef8);
				
			}
			
			
			
			
			if ("unloadPointCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unloadPointCode);
				
			}
			
			
			
			
			if ("unloadPointName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unloadPointName);
				
			}
			
			
			
			
			if ("orderDeliveryBatch" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderDeliveryBatch); 
				
			}
			
			
			
			
			if ("pickupGoodsTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pickupGoodsTime);
				
			}
			
			
			
			
			if ("transportPrd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportPrd);
				
			}
			
			
			
			
			if ("boxId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->boxId);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("transportType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportType);
				
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
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeString($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleType !== null) {
			
			$xfer += $output->writeFieldBegin('saleType');
			$xfer += $output->writeString($this->saleType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTmsProvideTransportNo !== null) {
			
			$xfer += $output->writeFieldBegin('isTmsProvideTransportNo');
			$xfer += $output->writeI32($this->isTmsProvideTransportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportDay !== null) {
			
			$xfer += $output->writeFieldBegin('transportDay');
			$xfer += $output->writeString($this->transportDay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNumber !== null) {
			
			$xfer += $output->writeFieldBegin('batchNumber');
			$xfer += $output->writeString($this->batchNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ladingBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('ladingBillNumber');
			$xfer += $output->writeString($this->ladingBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subLadingBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('subLadingBillNumber');
			$xfer += $output->writeString($this->subLadingBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->street !== null) {
			
			$xfer += $output->writeFieldBegin('street');
			$xfer += $output->writeString($this->street);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerIdcard !== null) {
			
			$xfer += $output->writeFieldBegin('buyerIdcard');
			$xfer += $output->writeString($this->buyerIdcard);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalMoney !== null) {
			
			$xfer += $output->writeFieldBegin('totalMoney');
			$xfer += $output->writeDouble($this->totalMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMount !== null) {
			
			$xfer += $output->writeFieldBegin('payMount');
			$xfer += $output->writeDouble($this->payMount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favourableMoney !== null) {
			
			$xfer += $output->writeFieldBegin('favourableMoney');
			$xfer += $output->writeDouble($this->favourableMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('customCarriage');
			$xfer += $output->writeDouble($this->customCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxFee !== null) {
			
			$xfer += $output->writeFieldBegin('taxFee');
			$xfer += $output->writeDouble($this->taxFee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payMoneyType !== null) {
			
			$xfer += $output->writeFieldBegin('payMoneyType');
			$xfer += $output->writeString($this->payMoneyType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeNumber !== null) {
			
			$xfer += $output->writeFieldBegin('tradeNumber');
			$xfer += $output->writeString($this->tradeNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTypeNumber !== null) {
			
			$xfer += $output->writeFieldBegin('payTypeNumber');
			$xfer += $output->writeString($this->payTypeNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseCertCode !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseCertCode');
			$xfer += $output->writeString($this->enterpriseCertCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriersName !== null) {
			
			$xfer += $output->writeFieldBegin('carriersName');
			$xfer += $output->writeString($this->carriersName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointCode');
			$xfer += $output->writeString($this->carrierPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierPointName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierPointName');
			$xfer += $output->writeString($this->carrierPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originCode !== null) {
			
			$xfer += $output->writeFieldBegin('originCode');
			$xfer += $output->writeString($this->originCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->destinationCode !== null) {
			
			$xfer += $output->writeFieldBegin('destinationCode');
			$xfer += $output->writeString($this->destinationCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->templateCode !== null) {
			
			$xfer += $output->writeFieldBegin('templateCode');
			$xfer += $output->writeString($this->templateCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pickCode !== null) {
			
			$xfer += $output->writeFieldBegin('pickCode');
			$xfer += $output->writeString($this->pickCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsCode !== null) {
			
			$xfer += $output->writeFieldBegin('customsCode');
			$xfer += $output->writeString($this->customsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chinaFreightForwarding !== null) {
			
			$xfer += $output->writeFieldBegin('chinaFreightForwarding');
			$xfer += $output->writeString($this->chinaFreightForwarding);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalFreightForwarding !== null) {
			
			$xfer += $output->writeFieldBegin('globalFreightForwarding');
			$xfer += $output->writeString($this->globalFreightForwarding);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsClearanceMode !== null) {
			
			$xfer += $output->writeFieldBegin('customsClearanceMode');
			$xfer += $output->writeString($this->customsClearanceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeString($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->HtSaleOrderInfoVopModelList !== null) {
			
			$xfer += $output->writeFieldBegin('HtSaleOrderInfoVopModelList');
			
			if (!is_array($this->HtSaleOrderInfoVopModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->HtSaleOrderInfoVopModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef1 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef1');
			$xfer += $output->writeString($this->userDef1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef2 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef2');
			$xfer += $output->writeString($this->userDef2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef3 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef3');
			$xfer += $output->writeString($this->userDef3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef4 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef4');
			$xfer += $output->writeString($this->userDef4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef5 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef5');
			$xfer += $output->writeI64($this->userDef5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef6 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef6');
			$xfer += $output->writeI64($this->userDef6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef7 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef7');
			$xfer += $output->writeString($this->userDef7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userDef8 !== null) {
			
			$xfer += $output->writeFieldBegin('userDef8');
			$xfer += $output->writeString($this->userDef8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unloadPointCode !== null) {
			
			$xfer += $output->writeFieldBegin('unloadPointCode');
			$xfer += $output->writeString($this->unloadPointCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unloadPointName !== null) {
			
			$xfer += $output->writeFieldBegin('unloadPointName');
			$xfer += $output->writeString($this->unloadPointName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('orderDeliveryBatch');
		$xfer += $output->writeI32($this->orderDeliveryBatch);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pickupGoodsTime !== null) {
			
			$xfer += $output->writeFieldBegin('pickupGoodsTime');
			$xfer += $output->writeString($this->pickupGoodsTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportPrd !== null) {
			
			$xfer += $output->writeFieldBegin('transportPrd');
			$xfer += $output->writeString($this->transportPrd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->boxId !== null) {
			
			$xfer += $output->writeFieldBegin('boxId');
			$xfer += $output->writeString($this->boxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportType !== null) {
			
			$xfer += $output->writeFieldBegin('transportType');
			$xfer += $output->writeString($this->transportType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>