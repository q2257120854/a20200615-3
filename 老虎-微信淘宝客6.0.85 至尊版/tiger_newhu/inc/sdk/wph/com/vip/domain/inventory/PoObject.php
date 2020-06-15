<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class PoObject {
	
	static $_TSPEC;
	public $systemPoNo = null;
	public $clientPoNo = null;
	public $warehouseCode = null;
	public $poStatus = null;
	public $saleArea = null;
	public $zip = null;
	public $warehouseContacter = null;
	public $warehouseContacterTel = null;
	public $warehouseContacterMobie = null;
	public $warehouseCountry = null;
	public $warehouseState = null;
	public $warehouseCity = null;
	public $warehouseDistrict = null;
	public $warehouseAddress = null;
	public $channel = null;
	public $contacter = null;
	public $contacterTel = null;
	public $contacterMobie = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $district = null;
	public $address = null;
	public $email = null;
	public $weight = null;
	public $volume = null;
	public $itemTotal = null;
	public $onRacksTime = null;
	public $remark = null;
	public $createUser = null;
	public $createdDtmLoc = null;
	public $updatedUser = null;
	public $updatedDtmLoc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'systemPoNo'
			),
			2 => array(
			'var' => 'clientPoNo'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			4 => array(
			'var' => 'poStatus'
			),
			5 => array(
			'var' => 'saleArea'
			),
			6 => array(
			'var' => 'zip'
			),
			7 => array(
			'var' => 'warehouseContacter'
			),
			8 => array(
			'var' => 'warehouseContacterTel'
			),
			9 => array(
			'var' => 'warehouseContacterMobie'
			),
			10 => array(
			'var' => 'warehouseCountry'
			),
			11 => array(
			'var' => 'warehouseState'
			),
			12 => array(
			'var' => 'warehouseCity'
			),
			13 => array(
			'var' => 'warehouseDistrict'
			),
			14 => array(
			'var' => 'warehouseAddress'
			),
			15 => array(
			'var' => 'channel'
			),
			16 => array(
			'var' => 'contacter'
			),
			17 => array(
			'var' => 'contacterTel'
			),
			18 => array(
			'var' => 'contacterMobie'
			),
			19 => array(
			'var' => 'country'
			),
			20 => array(
			'var' => 'state'
			),
			21 => array(
			'var' => 'city'
			),
			22 => array(
			'var' => 'district'
			),
			23 => array(
			'var' => 'address'
			),
			24 => array(
			'var' => 'email'
			),
			25 => array(
			'var' => 'weight'
			),
			26 => array(
			'var' => 'volume'
			),
			27 => array(
			'var' => 'itemTotal'
			),
			28 => array(
			'var' => 'onRacksTime'
			),
			29 => array(
			'var' => 'remark'
			),
			30 => array(
			'var' => 'createUser'
			),
			31 => array(
			'var' => 'createdDtmLoc'
			),
			32 => array(
			'var' => 'updatedUser'
			),
			33 => array(
			'var' => 'updatedDtmLoc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['systemPoNo'])){
				
				$this->systemPoNo = $vals['systemPoNo'];
			}
			
			
			if (isset($vals['clientPoNo'])){
				
				$this->clientPoNo = $vals['clientPoNo'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['poStatus'])){
				
				$this->poStatus = $vals['poStatus'];
			}
			
			
			if (isset($vals['saleArea'])){
				
				$this->saleArea = $vals['saleArea'];
			}
			
			
			if (isset($vals['zip'])){
				
				$this->zip = $vals['zip'];
			}
			
			
			if (isset($vals['warehouseContacter'])){
				
				$this->warehouseContacter = $vals['warehouseContacter'];
			}
			
			
			if (isset($vals['warehouseContacterTel'])){
				
				$this->warehouseContacterTel = $vals['warehouseContacterTel'];
			}
			
			
			if (isset($vals['warehouseContacterMobie'])){
				
				$this->warehouseContacterMobie = $vals['warehouseContacterMobie'];
			}
			
			
			if (isset($vals['warehouseCountry'])){
				
				$this->warehouseCountry = $vals['warehouseCountry'];
			}
			
			
			if (isset($vals['warehouseState'])){
				
				$this->warehouseState = $vals['warehouseState'];
			}
			
			
			if (isset($vals['warehouseCity'])){
				
				$this->warehouseCity = $vals['warehouseCity'];
			}
			
			
			if (isset($vals['warehouseDistrict'])){
				
				$this->warehouseDistrict = $vals['warehouseDistrict'];
			}
			
			
			if (isset($vals['warehouseAddress'])){
				
				$this->warehouseAddress = $vals['warehouseAddress'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['contacter'])){
				
				$this->contacter = $vals['contacter'];
			}
			
			
			if (isset($vals['contacterTel'])){
				
				$this->contacterTel = $vals['contacterTel'];
			}
			
			
			if (isset($vals['contacterMobie'])){
				
				$this->contacterMobie = $vals['contacterMobie'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['itemTotal'])){
				
				$this->itemTotal = $vals['itemTotal'];
			}
			
			
			if (isset($vals['onRacksTime'])){
				
				$this->onRacksTime = $vals['onRacksTime'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createUser'])){
				
				$this->createUser = $vals['createUser'];
			}
			
			
			if (isset($vals['createdDtmLoc'])){
				
				$this->createdDtmLoc = $vals['createdDtmLoc'];
			}
			
			
			if (isset($vals['updatedUser'])){
				
				$this->updatedUser = $vals['updatedUser'];
			}
			
			
			if (isset($vals['updatedDtmLoc'])){
				
				$this->updatedDtmLoc = $vals['updatedDtmLoc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoObject';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("systemPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->systemPoNo);
				
			}
			
			
			
			
			if ("clientPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientPoNo);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("poStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poStatus);
				
			}
			
			
			
			
			if ("saleArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleArea);
				
			}
			
			
			
			
			if ("zip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zip);
				
			}
			
			
			
			
			if ("warehouseContacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseContacter);
				
			}
			
			
			
			
			if ("warehouseContacterTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseContacterTel);
				
			}
			
			
			
			
			if ("warehouseContacterMobie" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseContacterMobie);
				
			}
			
			
			
			
			if ("warehouseCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCountry);
				
			}
			
			
			
			
			if ("warehouseState" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseState);
				
			}
			
			
			
			
			if ("warehouseCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCity);
				
			}
			
			
			
			
			if ("warehouseDistrict" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseDistrict);
				
			}
			
			
			
			
			if ("warehouseAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseAddress);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\ChannelInventoryChannel::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->channel = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("contacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter);
				
			}
			
			
			
			
			if ("contacterTel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacterTel);
				
			}
			
			
			
			
			if ("contacterMobie" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacterMobie);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume);
				
			}
			
			
			
			
			if ("itemTotal" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->itemTotal); 
				
			}
			
			
			
			
			if ("onRacksTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->onRacksTime);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUser);
				
			}
			
			
			
			
			if ("createdDtmLoc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdDtmLoc);
				
			}
			
			
			
			
			if ("updatedUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedUser);
				
			}
			
			
			
			
			if ("updatedDtmLoc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedDtmLoc);
				
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
		
		if($this->systemPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('systemPoNo');
			$xfer += $output->writeString($this->systemPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('clientPoNo');
			$xfer += $output->writeString($this->clientPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poStatus !== null) {
			
			$xfer += $output->writeFieldBegin('poStatus');
			$xfer += $output->writeString($this->poStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleArea !== null) {
			
			$xfer += $output->writeFieldBegin('saleArea');
			$xfer += $output->writeString($this->saleArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zip !== null) {
			
			$xfer += $output->writeFieldBegin('zip');
			$xfer += $output->writeString($this->zip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseContacter !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseContacter');
			$xfer += $output->writeString($this->warehouseContacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseContacterTel !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseContacterTel');
			$xfer += $output->writeString($this->warehouseContacterTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseContacterMobie !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseContacterMobie');
			$xfer += $output->writeString($this->warehouseContacterMobie);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCountry !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCountry');
			$xfer += $output->writeString($this->warehouseCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseState !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseState');
			$xfer += $output->writeString($this->warehouseState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCity !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCity');
			$xfer += $output->writeString($this->warehouseCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseDistrict !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseDistrict');
			$xfer += $output->writeString($this->warehouseDistrict);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseAddress !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseAddress');
			$xfer += $output->writeString($this->warehouseAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			
			$em = new \com\vip\domain\inventory\ChannelInventoryChannel; 
			$output->writeString($em::$__names[$this->channel]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacter !== null) {
			
			$xfer += $output->writeFieldBegin('contacter');
			$xfer += $output->writeString($this->contacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacterTel !== null) {
			
			$xfer += $output->writeFieldBegin('contacterTel');
			$xfer += $output->writeString($this->contacterTel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacterMobie !== null) {
			
			$xfer += $output->writeFieldBegin('contacterMobie');
			$xfer += $output->writeString($this->contacterMobie);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
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
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeString($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeString($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('itemTotal');
		$xfer += $output->writeI32($this->itemTotal);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->onRacksTime !== null) {
			
			$xfer += $output->writeFieldBegin('onRacksTime');
			$xfer += $output->writeString($this->onRacksTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUser !== null) {
			
			$xfer += $output->writeFieldBegin('createUser');
			$xfer += $output->writeString($this->createUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdDtmLoc !== null) {
			
			$xfer += $output->writeFieldBegin('createdDtmLoc');
			$xfer += $output->writeString($this->createdDtmLoc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedUser !== null) {
			
			$xfer += $output->writeFieldBegin('updatedUser');
			$xfer += $output->writeString($this->updatedUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedDtmLoc !== null) {
			
			$xfer += $output->writeFieldBegin('updatedDtmLoc');
			$xfer += $output->writeString($this->updatedDtmLoc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>