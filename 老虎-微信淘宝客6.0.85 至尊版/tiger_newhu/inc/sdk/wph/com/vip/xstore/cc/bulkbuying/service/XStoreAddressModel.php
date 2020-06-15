<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class XStoreAddressModel {
	
	static $_TSPEC;
	public $id = null;
	public $companyCode = null;
	public $title = null;
	public $warehouseCode = null;
	public $areaId = null;
	public $pcd = null;
	public $address = null;
	public $postcode = null;
	public $tel = null;
	public $email = null;
	public $linker = null;
	public $remark = null;
	public $provinceId = null;
	public $cityId = null;
	public $provinceName = null;
	public $cityName = null;
	public $districtName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'companyCode'
			),
			3 => array(
			'var' => 'title'
			),
			4 => array(
			'var' => 'warehouseCode'
			),
			5 => array(
			'var' => 'areaId'
			),
			6 => array(
			'var' => 'pcd'
			),
			7 => array(
			'var' => 'address'
			),
			8 => array(
			'var' => 'postcode'
			),
			9 => array(
			'var' => 'tel'
			),
			10 => array(
			'var' => 'email'
			),
			11 => array(
			'var' => 'linker'
			),
			12 => array(
			'var' => 'remark'
			),
			13 => array(
			'var' => 'provinceId'
			),
			14 => array(
			'var' => 'cityId'
			),
			15 => array(
			'var' => 'provinceName'
			),
			16 => array(
			'var' => 'cityName'
			),
			17 => array(
			'var' => 'districtName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['pcd'])){
				
				$this->pcd = $vals['pcd'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['linker'])){
				
				$this->linker = $vals['linker'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['provinceId'])){
				
				$this->provinceId = $vals['provinceId'];
			}
			
			
			if (isset($vals['cityId'])){
				
				$this->cityId = $vals['cityId'];
			}
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['districtName'])){
				
				$this->districtName = $vals['districtName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XStoreAddressModel';
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
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("pcd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pcd);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("linker" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linker);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("provinceId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceId);
				
			}
			
			
			
			
			if ("cityId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityId);
				
			}
			
			
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("districtName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->districtName);
				
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
		
		
		$xfer += $output->writeFieldBegin('companyCode');
		$xfer += $output->writeString($this->companyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('title');
		$xfer += $output->writeString($this->title);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('areaId');
		$xfer += $output->writeString($this->areaId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pcd !== null) {
			
			$xfer += $output->writeFieldBegin('pcd');
			$xfer += $output->writeString($this->pcd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('tel');
		$xfer += $output->writeString($this->tel);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('linker');
		$xfer += $output->writeString($this->linker);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceId !== null) {
			
			$xfer += $output->writeFieldBegin('provinceId');
			$xfer += $output->writeString($this->provinceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityId !== null) {
			
			$xfer += $output->writeFieldBegin('cityId');
			$xfer += $output->writeString($this->cityId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceName !== null) {
			
			$xfer += $output->writeFieldBegin('provinceName');
			$xfer += $output->writeString($this->provinceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->districtName !== null) {
			
			$xfer += $output->writeFieldBegin('districtName');
			$xfer += $output->writeString($this->districtName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>