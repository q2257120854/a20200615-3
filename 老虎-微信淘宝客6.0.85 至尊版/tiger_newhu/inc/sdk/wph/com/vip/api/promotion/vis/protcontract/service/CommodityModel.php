<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class CommodityModel {
	
	static $_TSPEC;
	public $mid = null;
	public $commodityNo = null;
	public $barCode = null;
	public $commodityName = null;
	public $brandId = null;
	public $spellTypeDesc = null;
	public $spellTypeFullDesc = null;
	public $spellPersonNum = null;
	public $spellNumLimit = null;
	public $preferentialTypeDesc = null;
	public $prepayPreferential = null;
	public $prepayTypeDesc = null;
	public $prepayValue = null;
	public $discountValue = null;
	public $actPrice = null;
	public $userHelpCount = null;
	public $floorPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mid'
			),
			2 => array(
			'var' => 'commodityNo'
			),
			3 => array(
			'var' => 'barCode'
			),
			4 => array(
			'var' => 'commodityName'
			),
			5 => array(
			'var' => 'brandId'
			),
			6 => array(
			'var' => 'spellTypeDesc'
			),
			7 => array(
			'var' => 'spellTypeFullDesc'
			),
			8 => array(
			'var' => 'spellPersonNum'
			),
			9 => array(
			'var' => 'spellNumLimit'
			),
			10 => array(
			'var' => 'preferentialTypeDesc'
			),
			11 => array(
			'var' => 'prepayPreferential'
			),
			12 => array(
			'var' => 'prepayTypeDesc'
			),
			13 => array(
			'var' => 'prepayValue'
			),
			14 => array(
			'var' => 'discountValue'
			),
			16 => array(
			'var' => 'actPrice'
			),
			17 => array(
			'var' => 'userHelpCount'
			),
			18 => array(
			'var' => 'floorPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['commodityNo'])){
				
				$this->commodityNo = $vals['commodityNo'];
			}
			
			
			if (isset($vals['barCode'])){
				
				$this->barCode = $vals['barCode'];
			}
			
			
			if (isset($vals['commodityName'])){
				
				$this->commodityName = $vals['commodityName'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['spellTypeDesc'])){
				
				$this->spellTypeDesc = $vals['spellTypeDesc'];
			}
			
			
			if (isset($vals['spellTypeFullDesc'])){
				
				$this->spellTypeFullDesc = $vals['spellTypeFullDesc'];
			}
			
			
			if (isset($vals['spellPersonNum'])){
				
				$this->spellPersonNum = $vals['spellPersonNum'];
			}
			
			
			if (isset($vals['spellNumLimit'])){
				
				$this->spellNumLimit = $vals['spellNumLimit'];
			}
			
			
			if (isset($vals['preferentialTypeDesc'])){
				
				$this->preferentialTypeDesc = $vals['preferentialTypeDesc'];
			}
			
			
			if (isset($vals['prepayPreferential'])){
				
				$this->prepayPreferential = $vals['prepayPreferential'];
			}
			
			
			if (isset($vals['prepayTypeDesc'])){
				
				$this->prepayTypeDesc = $vals['prepayTypeDesc'];
			}
			
			
			if (isset($vals['prepayValue'])){
				
				$this->prepayValue = $vals['prepayValue'];
			}
			
			
			if (isset($vals['discountValue'])){
				
				$this->discountValue = $vals['discountValue'];
			}
			
			
			if (isset($vals['actPrice'])){
				
				$this->actPrice = $vals['actPrice'];
			}
			
			
			if (isset($vals['userHelpCount'])){
				
				$this->userHelpCount = $vals['userHelpCount'];
			}
			
			
			if (isset($vals['floorPrice'])){
				
				$this->floorPrice = $vals['floorPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CommodityModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("commodityNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityNo);
				
			}
			
			
			
			
			if ("barCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barCode);
				
			}
			
			
			
			
			if ("commodityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commodityName);
				
			}
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandId);
				
			}
			
			
			
			
			if ("spellTypeDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spellTypeDesc);
				
			}
			
			
			
			
			if ("spellTypeFullDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spellTypeFullDesc);
				
			}
			
			
			
			
			if ("spellPersonNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->spellPersonNum); 
				
			}
			
			
			
			
			if ("spellNumLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->spellNumLimit); 
				
			}
			
			
			
			
			if ("preferentialTypeDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preferentialTypeDesc);
				
			}
			
			
			
			
			if ("prepayPreferential" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayPreferential);
				
			}
			
			
			
			
			if ("prepayTypeDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayTypeDesc);
				
			}
			
			
			
			
			if ("prepayValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayValue);
				
			}
			
			
			
			
			if ("discountValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountValue);
				
			}
			
			
			
			
			if ("actPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actPrice);
				
			}
			
			
			
			
			if ("userHelpCount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userHelpCount);
				
			}
			
			
			
			
			if ("floorPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->floorPrice);
				
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
		
		if($this->mid !== null) {
			
			$xfer += $output->writeFieldBegin('mid');
			$xfer += $output->writeString($this->mid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityNo !== null) {
			
			$xfer += $output->writeFieldBegin('commodityNo');
			$xfer += $output->writeString($this->commodityNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barCode !== null) {
			
			$xfer += $output->writeFieldBegin('barCode');
			$xfer += $output->writeString($this->barCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityName !== null) {
			
			$xfer += $output->writeFieldBegin('commodityName');
			$xfer += $output->writeString($this->commodityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeString($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellTypeDesc !== null) {
			
			$xfer += $output->writeFieldBegin('spellTypeDesc');
			$xfer += $output->writeString($this->spellTypeDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellTypeFullDesc !== null) {
			
			$xfer += $output->writeFieldBegin('spellTypeFullDesc');
			$xfer += $output->writeString($this->spellTypeFullDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellPersonNum !== null) {
			
			$xfer += $output->writeFieldBegin('spellPersonNum');
			$xfer += $output->writeI32($this->spellPersonNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellNumLimit !== null) {
			
			$xfer += $output->writeFieldBegin('spellNumLimit');
			$xfer += $output->writeI32($this->spellNumLimit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preferentialTypeDesc !== null) {
			
			$xfer += $output->writeFieldBegin('preferentialTypeDesc');
			$xfer += $output->writeString($this->preferentialTypeDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayPreferential !== null) {
			
			$xfer += $output->writeFieldBegin('prepayPreferential');
			$xfer += $output->writeString($this->prepayPreferential);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayTypeDesc !== null) {
			
			$xfer += $output->writeFieldBegin('prepayTypeDesc');
			$xfer += $output->writeString($this->prepayTypeDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayValue !== null) {
			
			$xfer += $output->writeFieldBegin('prepayValue');
			$xfer += $output->writeString($this->prepayValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountValue !== null) {
			
			$xfer += $output->writeFieldBegin('discountValue');
			$xfer += $output->writeString($this->discountValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actPrice !== null) {
			
			$xfer += $output->writeFieldBegin('actPrice');
			$xfer += $output->writeString($this->actPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userHelpCount !== null) {
			
			$xfer += $output->writeFieldBegin('userHelpCount');
			$xfer += $output->writeString($this->userHelpCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->floorPrice !== null) {
			
			$xfer += $output->writeFieldBegin('floorPrice');
			$xfer += $output->writeString($this->floorPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>