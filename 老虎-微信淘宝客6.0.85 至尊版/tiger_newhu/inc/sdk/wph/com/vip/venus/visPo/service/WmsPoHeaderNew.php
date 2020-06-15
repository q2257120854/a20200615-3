<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class WmsPoHeaderNew {
	
	static $_TSPEC;
	public $id = null;
	public $po = null;
	public $createTime = null;
	public $updateTime = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $address = null;
	public $city = null;
	public $province = null;
	public $country = null;
	public $contacterTelephone = null;
	public $contacter = null;
	public $email = null;
	public $purchaseTypeName = null;
	public $buyerName = null;
	public $status = null;
	public $sellArea = null;
	public $buyerBy = null;
	public $wareHouseCode = null;
	public $dept = null;
	public $needByDate = null;
	public $is3pl = null;
	public $purchaseOffice1 = null;
	public $purchaseOffice1Name = null;
	public $purchaseOffice = null;
	public $purchaseOfficeName = null;
	public $purchaseOfficeDivide = null;
	public $purchaseOfficeDivideName = null;
	public $purchaseArea = null;
	public $purchaseAreaName = null;
	public $isVWarehouse = null;
	public $generalTrade = null;
	public $purchaseCompany = null;
	public $purchaseCompanyCode = null;
	public $createUserId = null;
	public $owner = null;
	public $assignChannelCode = null;
	public $additionalTag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'po'
			),
			3 => array(
			'var' => 'createTime'
			),
			4 => array(
			'var' => 'updateTime'
			),
			5 => array(
			'var' => 'vendorCode'
			),
			6 => array(
			'var' => 'vendorName'
			),
			7 => array(
			'var' => 'address'
			),
			8 => array(
			'var' => 'city'
			),
			9 => array(
			'var' => 'province'
			),
			10 => array(
			'var' => 'country'
			),
			11 => array(
			'var' => 'contacterTelephone'
			),
			12 => array(
			'var' => 'contacter'
			),
			13 => array(
			'var' => 'email'
			),
			14 => array(
			'var' => 'purchaseTypeName'
			),
			15 => array(
			'var' => 'buyerName'
			),
			16 => array(
			'var' => 'status'
			),
			17 => array(
			'var' => 'sellArea'
			),
			18 => array(
			'var' => 'buyerBy'
			),
			19 => array(
			'var' => 'wareHouseCode'
			),
			20 => array(
			'var' => 'dept'
			),
			21 => array(
			'var' => 'needByDate'
			),
			22 => array(
			'var' => 'is3pl'
			),
			23 => array(
			'var' => 'purchaseOffice1'
			),
			24 => array(
			'var' => 'purchaseOffice1Name'
			),
			25 => array(
			'var' => 'purchaseOffice'
			),
			26 => array(
			'var' => 'purchaseOfficeName'
			),
			27 => array(
			'var' => 'purchaseOfficeDivide'
			),
			28 => array(
			'var' => 'purchaseOfficeDivideName'
			),
			29 => array(
			'var' => 'purchaseArea'
			),
			30 => array(
			'var' => 'purchaseAreaName'
			),
			31 => array(
			'var' => 'isVWarehouse'
			),
			32 => array(
			'var' => 'generalTrade'
			),
			33 => array(
			'var' => 'purchaseCompany'
			),
			34 => array(
			'var' => 'purchaseCompanyCode'
			),
			35 => array(
			'var' => 'createUserId'
			),
			36 => array(
			'var' => 'owner'
			),
			37 => array(
			'var' => 'assignChannelCode'
			),
			38 => array(
			'var' => 'additionalTag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['contacterTelephone'])){
				
				$this->contacterTelephone = $vals['contacterTelephone'];
			}
			
			
			if (isset($vals['contacter'])){
				
				$this->contacter = $vals['contacter'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['purchaseTypeName'])){
				
				$this->purchaseTypeName = $vals['purchaseTypeName'];
			}
			
			
			if (isset($vals['buyerName'])){
				
				$this->buyerName = $vals['buyerName'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sellArea'])){
				
				$this->sellArea = $vals['sellArea'];
			}
			
			
			if (isset($vals['buyerBy'])){
				
				$this->buyerBy = $vals['buyerBy'];
			}
			
			
			if (isset($vals['wareHouseCode'])){
				
				$this->wareHouseCode = $vals['wareHouseCode'];
			}
			
			
			if (isset($vals['dept'])){
				
				$this->dept = $vals['dept'];
			}
			
			
			if (isset($vals['needByDate'])){
				
				$this->needByDate = $vals['needByDate'];
			}
			
			
			if (isset($vals['is3pl'])){
				
				$this->is3pl = $vals['is3pl'];
			}
			
			
			if (isset($vals['purchaseOffice1'])){
				
				$this->purchaseOffice1 = $vals['purchaseOffice1'];
			}
			
			
			if (isset($vals['purchaseOffice1Name'])){
				
				$this->purchaseOffice1Name = $vals['purchaseOffice1Name'];
			}
			
			
			if (isset($vals['purchaseOffice'])){
				
				$this->purchaseOffice = $vals['purchaseOffice'];
			}
			
			
			if (isset($vals['purchaseOfficeName'])){
				
				$this->purchaseOfficeName = $vals['purchaseOfficeName'];
			}
			
			
			if (isset($vals['purchaseOfficeDivide'])){
				
				$this->purchaseOfficeDivide = $vals['purchaseOfficeDivide'];
			}
			
			
			if (isset($vals['purchaseOfficeDivideName'])){
				
				$this->purchaseOfficeDivideName = $vals['purchaseOfficeDivideName'];
			}
			
			
			if (isset($vals['purchaseArea'])){
				
				$this->purchaseArea = $vals['purchaseArea'];
			}
			
			
			if (isset($vals['purchaseAreaName'])){
				
				$this->purchaseAreaName = $vals['purchaseAreaName'];
			}
			
			
			if (isset($vals['isVWarehouse'])){
				
				$this->isVWarehouse = $vals['isVWarehouse'];
			}
			
			
			if (isset($vals['generalTrade'])){
				
				$this->generalTrade = $vals['generalTrade'];
			}
			
			
			if (isset($vals['purchaseCompany'])){
				
				$this->purchaseCompany = $vals['purchaseCompany'];
			}
			
			
			if (isset($vals['purchaseCompanyCode'])){
				
				$this->purchaseCompanyCode = $vals['purchaseCompanyCode'];
			}
			
			
			if (isset($vals['createUserId'])){
				
				$this->createUserId = $vals['createUserId'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['assignChannelCode'])){
				
				$this->assignChannelCode = $vals['assignChannelCode'];
			}
			
			
			if (isset($vals['additionalTag'])){
				
				$this->additionalTag = $vals['additionalTag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WmsPoHeaderNew';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("contacterTelephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacterTelephone);
				
			}
			
			
			
			
			if ("contacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("purchaseTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseTypeName);
				
			}
			
			
			
			
			if ("buyerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerName);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("sellArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellArea);
				
			}
			
			
			
			
			if ("buyerBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerBy);
				
			}
			
			
			
			
			if ("wareHouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wareHouseCode);
				
			}
			
			
			
			
			if ("dept" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept);
				
			}
			
			
			
			
			if ("needByDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->needByDate);
				
			}
			
			
			
			
			if ("is3pl" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is3pl); 
				
			}
			
			
			
			
			if ("purchaseOffice1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice1);
				
			}
			
			
			
			
			if ("purchaseOffice1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice1Name);
				
			}
			
			
			
			
			if ("purchaseOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice);
				
			}
			
			
			
			
			if ("purchaseOfficeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOfficeName);
				
			}
			
			
			
			
			if ("purchaseOfficeDivide" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOfficeDivide);
				
			}
			
			
			
			
			if ("purchaseOfficeDivideName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOfficeDivideName);
				
			}
			
			
			
			
			if ("purchaseArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseArea);
				
			}
			
			
			
			
			if ("purchaseAreaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseAreaName);
				
			}
			
			
			
			
			if ("isVWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isVWarehouse); 
				
			}
			
			
			
			
			if ("generalTrade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->generalTrade);
				
			}
			
			
			
			
			if ("purchaseCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompany);
				
			}
			
			
			
			
			if ("purchaseCompanyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompanyCode);
				
			}
			
			
			
			
			if ("createUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUserId);
				
			}
			
			
			
			
			if ("owner" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\venus\po\service\Owner::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->owner = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("assignChannelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assignChannelCode);
				
			}
			
			
			
			
			if ("additionalTag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->additionalTag); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
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
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacterTelephone !== null) {
			
			$xfer += $output->writeFieldBegin('contacterTelephone');
			$xfer += $output->writeString($this->contacterTelephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacter !== null) {
			
			$xfer += $output->writeFieldBegin('contacter');
			$xfer += $output->writeString($this->contacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseTypeName');
			$xfer += $output->writeString($this->purchaseTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerName');
			$xfer += $output->writeString($this->buyerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sellArea !== null) {
			
			$xfer += $output->writeFieldBegin('sellArea');
			$xfer += $output->writeString($this->sellArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerBy !== null) {
			
			$xfer += $output->writeFieldBegin('buyerBy');
			$xfer += $output->writeString($this->buyerBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wareHouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('wareHouseCode');
			$xfer += $output->writeString($this->wareHouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept !== null) {
			
			$xfer += $output->writeFieldBegin('dept');
			$xfer += $output->writeString($this->dept);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->needByDate !== null) {
			
			$xfer += $output->writeFieldBegin('needByDate');
			$xfer += $output->writeString($this->needByDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is3pl');
		$xfer += $output->writeByte($this->is3pl);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->purchaseOffice1 !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice1');
			$xfer += $output->writeString($this->purchaseOffice1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice1Name !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice1Name');
			$xfer += $output->writeString($this->purchaseOffice1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice');
			$xfer += $output->writeString($this->purchaseOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOfficeName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOfficeName');
			$xfer += $output->writeString($this->purchaseOfficeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOfficeDivide !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOfficeDivide');
			$xfer += $output->writeString($this->purchaseOfficeDivide);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOfficeDivideName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOfficeDivideName');
			$xfer += $output->writeString($this->purchaseOfficeDivideName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseArea !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseArea');
			$xfer += $output->writeString($this->purchaseArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseAreaName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseAreaName');
			$xfer += $output->writeString($this->purchaseAreaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isVWarehouse');
		$xfer += $output->writeI32($this->isVWarehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->generalTrade !== null) {
			
			$xfer += $output->writeFieldBegin('generalTrade');
			$xfer += $output->writeString($this->generalTrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompany !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompany');
			$xfer += $output->writeString($this->purchaseCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompanyCode !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompanyCode');
			$xfer += $output->writeString($this->purchaseCompanyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUserId !== null) {
			
			$xfer += $output->writeFieldBegin('createUserId');
			$xfer += $output->writeString($this->createUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->owner !== null) {
			
			$xfer += $output->writeFieldBegin('owner');
			
			$em = new \com\vip\venus\po\service\Owner; 
			$output->writeString($em::$__names[$this->owner]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assignChannelCode !== null) {
			
			$xfer += $output->writeFieldBegin('assignChannelCode');
			$xfer += $output->writeString($this->assignChannelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->additionalTag !== null) {
			
			$xfer += $output->writeFieldBegin('additionalTag');
			$xfer += $output->writeI32($this->additionalTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>