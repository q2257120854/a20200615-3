<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractDiscountInfoModel {
	
	static $_TSPEC;
	public $mainId = null;
	public $activityType = null;
	public $activityChildType = null;
	public $fullValueOne = null;
	public $cutsValueOne = null;
	public $fullValueTwo = null;
	public $cutsValueTwo = null;
	public $fullValueThree = null;
	public $cutsValueThree = null;
	public $fullValueFour = null;
	public $cutsValueFour = null;
	public $fullValueFive = null;
	public $cutsValueFive = null;
	public $isTop = null;
	public $mobileRemark = null;
	public $redMoney = null;
	public $redNum = null;
	public $fullMoney = null;
	public $scaleValue = null;
	public $rollNum = null;
	public $extraValue = null;
	public $bearType = null;
	public $bearValue = null;
	public $oldDeduction = null;
	public $newDeduction = null;
	public $preferentialType = null;
	public $prepayType = null;
	public $prepayValue = null;
	public $prepayPreferential = null;
	public $spellPersonNum = null;
	public $spellType = null;
	public $spellPreferentialValue = null;
	public $topNum = null;
	public $exclusivePriceDiscount = null;
	public $actNo = null;
	public $actName = null;
	public $id = null;
	public $buyAndCutInfos = null;
	public $oxoScaleValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'activityType'
			),
			3 => array(
			'var' => 'activityChildType'
			),
			4 => array(
			'var' => 'fullValueOne'
			),
			5 => array(
			'var' => 'cutsValueOne'
			),
			6 => array(
			'var' => 'fullValueTwo'
			),
			7 => array(
			'var' => 'cutsValueTwo'
			),
			8 => array(
			'var' => 'fullValueThree'
			),
			9 => array(
			'var' => 'cutsValueThree'
			),
			10 => array(
			'var' => 'fullValueFour'
			),
			11 => array(
			'var' => 'cutsValueFour'
			),
			12 => array(
			'var' => 'fullValueFive'
			),
			13 => array(
			'var' => 'cutsValueFive'
			),
			14 => array(
			'var' => 'isTop'
			),
			15 => array(
			'var' => 'mobileRemark'
			),
			16 => array(
			'var' => 'redMoney'
			),
			17 => array(
			'var' => 'redNum'
			),
			18 => array(
			'var' => 'fullMoney'
			),
			19 => array(
			'var' => 'scaleValue'
			),
			20 => array(
			'var' => 'rollNum'
			),
			21 => array(
			'var' => 'extraValue'
			),
			22 => array(
			'var' => 'bearType'
			),
			23 => array(
			'var' => 'bearValue'
			),
			24 => array(
			'var' => 'oldDeduction'
			),
			25 => array(
			'var' => 'newDeduction'
			),
			26 => array(
			'var' => 'preferentialType'
			),
			27 => array(
			'var' => 'prepayType'
			),
			28 => array(
			'var' => 'prepayValue'
			),
			29 => array(
			'var' => 'prepayPreferential'
			),
			30 => array(
			'var' => 'spellPersonNum'
			),
			31 => array(
			'var' => 'spellType'
			),
			32 => array(
			'var' => 'spellPreferentialValue'
			),
			33 => array(
			'var' => 'topNum'
			),
			34 => array(
			'var' => 'exclusivePriceDiscount'
			),
			35 => array(
			'var' => 'actNo'
			),
			36 => array(
			'var' => 'actName'
			),
			37 => array(
			'var' => 'id'
			),
			38 => array(
			'var' => 'buyAndCutInfos'
			),
			39 => array(
			'var' => 'oxoScaleValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['activityChildType'])){
				
				$this->activityChildType = $vals['activityChildType'];
			}
			
			
			if (isset($vals['fullValueOne'])){
				
				$this->fullValueOne = $vals['fullValueOne'];
			}
			
			
			if (isset($vals['cutsValueOne'])){
				
				$this->cutsValueOne = $vals['cutsValueOne'];
			}
			
			
			if (isset($vals['fullValueTwo'])){
				
				$this->fullValueTwo = $vals['fullValueTwo'];
			}
			
			
			if (isset($vals['cutsValueTwo'])){
				
				$this->cutsValueTwo = $vals['cutsValueTwo'];
			}
			
			
			if (isset($vals['fullValueThree'])){
				
				$this->fullValueThree = $vals['fullValueThree'];
			}
			
			
			if (isset($vals['cutsValueThree'])){
				
				$this->cutsValueThree = $vals['cutsValueThree'];
			}
			
			
			if (isset($vals['fullValueFour'])){
				
				$this->fullValueFour = $vals['fullValueFour'];
			}
			
			
			if (isset($vals['cutsValueFour'])){
				
				$this->cutsValueFour = $vals['cutsValueFour'];
			}
			
			
			if (isset($vals['fullValueFive'])){
				
				$this->fullValueFive = $vals['fullValueFive'];
			}
			
			
			if (isset($vals['cutsValueFive'])){
				
				$this->cutsValueFive = $vals['cutsValueFive'];
			}
			
			
			if (isset($vals['isTop'])){
				
				$this->isTop = $vals['isTop'];
			}
			
			
			if (isset($vals['mobileRemark'])){
				
				$this->mobileRemark = $vals['mobileRemark'];
			}
			
			
			if (isset($vals['redMoney'])){
				
				$this->redMoney = $vals['redMoney'];
			}
			
			
			if (isset($vals['redNum'])){
				
				$this->redNum = $vals['redNum'];
			}
			
			
			if (isset($vals['fullMoney'])){
				
				$this->fullMoney = $vals['fullMoney'];
			}
			
			
			if (isset($vals['scaleValue'])){
				
				$this->scaleValue = $vals['scaleValue'];
			}
			
			
			if (isset($vals['rollNum'])){
				
				$this->rollNum = $vals['rollNum'];
			}
			
			
			if (isset($vals['extraValue'])){
				
				$this->extraValue = $vals['extraValue'];
			}
			
			
			if (isset($vals['bearType'])){
				
				$this->bearType = $vals['bearType'];
			}
			
			
			if (isset($vals['bearValue'])){
				
				$this->bearValue = $vals['bearValue'];
			}
			
			
			if (isset($vals['oldDeduction'])){
				
				$this->oldDeduction = $vals['oldDeduction'];
			}
			
			
			if (isset($vals['newDeduction'])){
				
				$this->newDeduction = $vals['newDeduction'];
			}
			
			
			if (isset($vals['preferentialType'])){
				
				$this->preferentialType = $vals['preferentialType'];
			}
			
			
			if (isset($vals['prepayType'])){
				
				$this->prepayType = $vals['prepayType'];
			}
			
			
			if (isset($vals['prepayValue'])){
				
				$this->prepayValue = $vals['prepayValue'];
			}
			
			
			if (isset($vals['prepayPreferential'])){
				
				$this->prepayPreferential = $vals['prepayPreferential'];
			}
			
			
			if (isset($vals['spellPersonNum'])){
				
				$this->spellPersonNum = $vals['spellPersonNum'];
			}
			
			
			if (isset($vals['spellType'])){
				
				$this->spellType = $vals['spellType'];
			}
			
			
			if (isset($vals['spellPreferentialValue'])){
				
				$this->spellPreferentialValue = $vals['spellPreferentialValue'];
			}
			
			
			if (isset($vals['topNum'])){
				
				$this->topNum = $vals['topNum'];
			}
			
			
			if (isset($vals['exclusivePriceDiscount'])){
				
				$this->exclusivePriceDiscount = $vals['exclusivePriceDiscount'];
			}
			
			
			if (isset($vals['actNo'])){
				
				$this->actNo = $vals['actNo'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['buyAndCutInfos'])){
				
				$this->buyAndCutInfos = $vals['buyAndCutInfos'];
			}
			
			
			if (isset($vals['oxoScaleValue'])){
				
				$this->oxoScaleValue = $vals['oxoScaleValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractDiscountInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mainId); 
				
			}
			
			
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("activityChildType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityChildType); 
				
			}
			
			
			
			
			if ("fullValueOne" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullValueOne);
				
			}
			
			
			
			
			if ("cutsValueOne" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cutsValueOne);
				
			}
			
			
			
			
			if ("fullValueTwo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullValueTwo);
				
			}
			
			
			
			
			if ("cutsValueTwo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cutsValueTwo);
				
			}
			
			
			
			
			if ("fullValueThree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullValueThree);
				
			}
			
			
			
			
			if ("cutsValueThree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cutsValueThree);
				
			}
			
			
			
			
			if ("fullValueFour" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullValueFour);
				
			}
			
			
			
			
			if ("cutsValueFour" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cutsValueFour);
				
			}
			
			
			
			
			if ("fullValueFive" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullValueFive);
				
			}
			
			
			
			
			if ("cutsValueFive" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cutsValueFive);
				
			}
			
			
			
			
			if ("isTop" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isTop); 
				
			}
			
			
			
			
			if ("mobileRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileRemark);
				
			}
			
			
			
			
			if ("redMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->redMoney);
				
			}
			
			
			
			
			if ("redNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->redNum); 
				
			}
			
			
			
			
			if ("fullMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullMoney);
				
			}
			
			
			
			
			if ("scaleValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scaleValue);
				
			}
			
			
			
			
			if ("rollNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rollNum); 
				
			}
			
			
			
			
			if ("extraValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extraValue);
				
			}
			
			
			
			
			if ("bearType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->bearType); 
				
			}
			
			
			
			
			if ("bearValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bearValue);
				
			}
			
			
			
			
			if ("oldDeduction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldDeduction);
				
			}
			
			
			
			
			if ("newDeduction" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newDeduction);
				
			}
			
			
			
			
			if ("preferentialType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->preferentialType); 
				
			}
			
			
			
			
			if ("prepayType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->prepayType); 
				
			}
			
			
			
			
			if ("prepayValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayValue);
				
			}
			
			
			
			
			if ("prepayPreferential" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayPreferential);
				
			}
			
			
			
			
			if ("spellPersonNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->spellPersonNum); 
				
			}
			
			
			
			
			if ("spellType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->spellType); 
				
			}
			
			
			
			
			if ("spellPreferentialValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spellPreferentialValue);
				
			}
			
			
			
			
			if ("topNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->topNum); 
				
			}
			
			
			
			
			if ("exclusivePriceDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exclusivePriceDiscount);
				
			}
			
			
			
			
			if ("actNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actNo);
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("buyAndCutInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->buyAndCutInfos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\BuyAndCutInfo();
						$elem0->read($input);
						
						$this->buyAndCutInfos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("oxoScaleValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oxoScaleValue);
				
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
		
		if($this->mainId !== null) {
			
			$xfer += $output->writeFieldBegin('mainId');
			$xfer += $output->writeI64($this->mainId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityType !== null) {
			
			$xfer += $output->writeFieldBegin('activityType');
			$xfer += $output->writeByte($this->activityType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityChildType !== null) {
			
			$xfer += $output->writeFieldBegin('activityChildType');
			$xfer += $output->writeByte($this->activityChildType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullValueOne !== null) {
			
			$xfer += $output->writeFieldBegin('fullValueOne');
			$xfer += $output->writeString($this->fullValueOne);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cutsValueOne !== null) {
			
			$xfer += $output->writeFieldBegin('cutsValueOne');
			$xfer += $output->writeString($this->cutsValueOne);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullValueTwo !== null) {
			
			$xfer += $output->writeFieldBegin('fullValueTwo');
			$xfer += $output->writeString($this->fullValueTwo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cutsValueTwo !== null) {
			
			$xfer += $output->writeFieldBegin('cutsValueTwo');
			$xfer += $output->writeString($this->cutsValueTwo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullValueThree !== null) {
			
			$xfer += $output->writeFieldBegin('fullValueThree');
			$xfer += $output->writeString($this->fullValueThree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cutsValueThree !== null) {
			
			$xfer += $output->writeFieldBegin('cutsValueThree');
			$xfer += $output->writeString($this->cutsValueThree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullValueFour !== null) {
			
			$xfer += $output->writeFieldBegin('fullValueFour');
			$xfer += $output->writeString($this->fullValueFour);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cutsValueFour !== null) {
			
			$xfer += $output->writeFieldBegin('cutsValueFour');
			$xfer += $output->writeString($this->cutsValueFour);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullValueFive !== null) {
			
			$xfer += $output->writeFieldBegin('fullValueFive');
			$xfer += $output->writeString($this->fullValueFive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cutsValueFive !== null) {
			
			$xfer += $output->writeFieldBegin('cutsValueFive');
			$xfer += $output->writeString($this->cutsValueFive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTop !== null) {
			
			$xfer += $output->writeFieldBegin('isTop');
			$xfer += $output->writeByte($this->isTop);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileRemark !== null) {
			
			$xfer += $output->writeFieldBegin('mobileRemark');
			$xfer += $output->writeString($this->mobileRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redMoney !== null) {
			
			$xfer += $output->writeFieldBegin('redMoney');
			$xfer += $output->writeString($this->redMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->redNum !== null) {
			
			$xfer += $output->writeFieldBegin('redNum');
			$xfer += $output->writeI32($this->redNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullMoney !== null) {
			
			$xfer += $output->writeFieldBegin('fullMoney');
			$xfer += $output->writeString($this->fullMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scaleValue !== null) {
			
			$xfer += $output->writeFieldBegin('scaleValue');
			$xfer += $output->writeString($this->scaleValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rollNum !== null) {
			
			$xfer += $output->writeFieldBegin('rollNum');
			$xfer += $output->writeI32($this->rollNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extraValue !== null) {
			
			$xfer += $output->writeFieldBegin('extraValue');
			$xfer += $output->writeString($this->extraValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bearType !== null) {
			
			$xfer += $output->writeFieldBegin('bearType');
			$xfer += $output->writeByte($this->bearType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bearValue !== null) {
			
			$xfer += $output->writeFieldBegin('bearValue');
			$xfer += $output->writeString($this->bearValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldDeduction !== null) {
			
			$xfer += $output->writeFieldBegin('oldDeduction');
			$xfer += $output->writeString($this->oldDeduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newDeduction !== null) {
			
			$xfer += $output->writeFieldBegin('newDeduction');
			$xfer += $output->writeString($this->newDeduction);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preferentialType !== null) {
			
			$xfer += $output->writeFieldBegin('preferentialType');
			$xfer += $output->writeByte($this->preferentialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayType !== null) {
			
			$xfer += $output->writeFieldBegin('prepayType');
			$xfer += $output->writeByte($this->prepayType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayValue !== null) {
			
			$xfer += $output->writeFieldBegin('prepayValue');
			$xfer += $output->writeString($this->prepayValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayPreferential !== null) {
			
			$xfer += $output->writeFieldBegin('prepayPreferential');
			$xfer += $output->writeString($this->prepayPreferential);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellPersonNum !== null) {
			
			$xfer += $output->writeFieldBegin('spellPersonNum');
			$xfer += $output->writeI32($this->spellPersonNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellType !== null) {
			
			$xfer += $output->writeFieldBegin('spellType');
			$xfer += $output->writeByte($this->spellType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellPreferentialValue !== null) {
			
			$xfer += $output->writeFieldBegin('spellPreferentialValue');
			$xfer += $output->writeString($this->spellPreferentialValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->topNum !== null) {
			
			$xfer += $output->writeFieldBegin('topNum');
			$xfer += $output->writeI32($this->topNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exclusivePriceDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('exclusivePriceDiscount');
			$xfer += $output->writeString($this->exclusivePriceDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actNo !== null) {
			
			$xfer += $output->writeFieldBegin('actNo');
			$xfer += $output->writeString($this->actNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actName !== null) {
			
			$xfer += $output->writeFieldBegin('actName');
			$xfer += $output->writeString($this->actName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyAndCutInfos !== null) {
			
			$xfer += $output->writeFieldBegin('buyAndCutInfos');
			
			if (!is_array($this->buyAndCutInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->buyAndCutInfos as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oxoScaleValue !== null) {
			
			$xfer += $output->writeFieldBegin('oxoScaleValue');
			$xfer += $output->writeString($this->oxoScaleValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>