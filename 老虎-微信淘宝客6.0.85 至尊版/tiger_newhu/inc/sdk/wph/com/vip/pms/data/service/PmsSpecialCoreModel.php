<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsSpecialCoreModel {
	
	static $_TSPEC;
	public $specialNo = null;
	public $category = null;
	public $actType = null;
	public $actRange = null;
	public $actName = null;
	public $actMsg = null;
	public $goodsMsg = null;
	public $iconMsg = null;
	public $favorable = null;
	public $limitPrice = null;
	public $enterpriseList = null;
	public $specialFavList = null;
	public $platformList = null;
	public $beginTime = null;
	public $endTime = null;
	public $specialScopeList = null;
	public $excludeRangeList = null;
	public $icon = null;
	public $uiThemeCode = null;
	public $businessCode = null;
	public $channelList = null;
	public $promotionObjectId = null;
	public $mainNo = null;
	public $planId = null;
	public $prestartTime = null;
	public $crazyType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'specialNo'
			),
			2 => array(
			'var' => 'category'
			),
			3 => array(
			'var' => 'actType'
			),
			4 => array(
			'var' => 'actRange'
			),
			5 => array(
			'var' => 'actName'
			),
			6 => array(
			'var' => 'actMsg'
			),
			7 => array(
			'var' => 'goodsMsg'
			),
			8 => array(
			'var' => 'iconMsg'
			),
			9 => array(
			'var' => 'favorable'
			),
			10 => array(
			'var' => 'limitPrice'
			),
			11 => array(
			'var' => 'enterpriseList'
			),
			12 => array(
			'var' => 'specialFavList'
			),
			13 => array(
			'var' => 'platformList'
			),
			14 => array(
			'var' => 'beginTime'
			),
			15 => array(
			'var' => 'endTime'
			),
			16 => array(
			'var' => 'specialScopeList'
			),
			17 => array(
			'var' => 'excludeRangeList'
			),
			18 => array(
			'var' => 'icon'
			),
			19 => array(
			'var' => 'uiThemeCode'
			),
			20 => array(
			'var' => 'businessCode'
			),
			21 => array(
			'var' => 'channelList'
			),
			22 => array(
			'var' => 'promotionObjectId'
			),
			23 => array(
			'var' => 'mainNo'
			),
			24 => array(
			'var' => 'planId'
			),
			25 => array(
			'var' => 'prestartTime'
			),
			26 => array(
			'var' => 'crazyType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['specialNo'])){
				
				$this->specialNo = $vals['specialNo'];
			}
			
			
			if (isset($vals['category'])){
				
				$this->category = $vals['category'];
			}
			
			
			if (isset($vals['actType'])){
				
				$this->actType = $vals['actType'];
			}
			
			
			if (isset($vals['actRange'])){
				
				$this->actRange = $vals['actRange'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
			if (isset($vals['actMsg'])){
				
				$this->actMsg = $vals['actMsg'];
			}
			
			
			if (isset($vals['goodsMsg'])){
				
				$this->goodsMsg = $vals['goodsMsg'];
			}
			
			
			if (isset($vals['iconMsg'])){
				
				$this->iconMsg = $vals['iconMsg'];
			}
			
			
			if (isset($vals['favorable'])){
				
				$this->favorable = $vals['favorable'];
			}
			
			
			if (isset($vals['limitPrice'])){
				
				$this->limitPrice = $vals['limitPrice'];
			}
			
			
			if (isset($vals['enterpriseList'])){
				
				$this->enterpriseList = $vals['enterpriseList'];
			}
			
			
			if (isset($vals['specialFavList'])){
				
				$this->specialFavList = $vals['specialFavList'];
			}
			
			
			if (isset($vals['platformList'])){
				
				$this->platformList = $vals['platformList'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['specialScopeList'])){
				
				$this->specialScopeList = $vals['specialScopeList'];
			}
			
			
			if (isset($vals['excludeRangeList'])){
				
				$this->excludeRangeList = $vals['excludeRangeList'];
			}
			
			
			if (isset($vals['icon'])){
				
				$this->icon = $vals['icon'];
			}
			
			
			if (isset($vals['uiThemeCode'])){
				
				$this->uiThemeCode = $vals['uiThemeCode'];
			}
			
			
			if (isset($vals['businessCode'])){
				
				$this->businessCode = $vals['businessCode'];
			}
			
			
			if (isset($vals['channelList'])){
				
				$this->channelList = $vals['channelList'];
			}
			
			
			if (isset($vals['promotionObjectId'])){
				
				$this->promotionObjectId = $vals['promotionObjectId'];
			}
			
			
			if (isset($vals['mainNo'])){
				
				$this->mainNo = $vals['mainNo'];
			}
			
			
			if (isset($vals['planId'])){
				
				$this->planId = $vals['planId'];
			}
			
			
			if (isset($vals['prestartTime'])){
				
				$this->prestartTime = $vals['prestartTime'];
			}
			
			
			if (isset($vals['crazyType'])){
				
				$this->crazyType = $vals['crazyType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsSpecialCoreModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("specialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialNo);
				
			}
			
			
			
			
			if ("category" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category); 
				
			}
			
			
			
			
			if ("actType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actType); 
				
			}
			
			
			
			
			if ("actRange" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actRange); 
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
			}
			
			
			
			
			if ("actMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actMsg);
				
			}
			
			
			
			
			if ("goodsMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsMsg);
				
			}
			
			
			
			
			if ("iconMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->iconMsg);
				
			}
			
			
			
			
			if ("favorable" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->favorable);
				
			}
			
			
			
			
			if ("limitPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->limitPrice);
				
			}
			
			
			
			
			if ("enterpriseList" == $schemeField){
				
				$needSkip = false;
				
				$this->enterpriseList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->enterpriseList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("specialFavList" == $schemeField){
				
				$needSkip = false;
				
				$this->specialFavList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsSpecialFavModel();
						$elem1->read($input);
						
						$this->specialFavList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("platformList" == $schemeField){
				
				$needSkip = false;
				
				$this->platformList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->platformList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("specialScopeList" == $schemeField){
				
				$needSkip = false;
				
				$this->specialScopeList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->specialScopeList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("excludeRangeList" == $schemeField){
				
				$needSkip = false;
				
				$this->excludeRangeList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->excludeRangeList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("icon" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->icon);
				
			}
			
			
			
			
			if ("uiThemeCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->uiThemeCode); 
				
			}
			
			
			
			
			if ("businessCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->businessCode); 
				
			}
			
			
			
			
			if ("channelList" == $schemeField){
				
				$needSkip = false;
				
				$this->channelList = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readI32($elem5); 
						
						$this->channelList[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("promotionObjectId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->promotionObjectId); 
				
			}
			
			
			
			
			if ("mainNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mainNo);
				
			}
			
			
			
			
			if ("planId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->planId); 
				
			}
			
			
			
			
			if ("prestartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->prestartTime); 
				
			}
			
			
			
			
			if ("crazyType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->crazyType); 
				
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
		
		$xfer += $output->writeFieldBegin('specialNo');
		$xfer += $output->writeString($this->specialNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category');
		$xfer += $output->writeI32($this->category);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actType');
		$xfer += $output->writeI32($this->actType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actRange');
		$xfer += $output->writeI32($this->actRange);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actName');
		$xfer += $output->writeString($this->actName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actMsg');
		$xfer += $output->writeString($this->actMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsMsg');
		$xfer += $output->writeString($this->goodsMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('iconMsg');
		$xfer += $output->writeString($this->iconMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('favorable');
		$xfer += $output->writeDouble($this->favorable);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limitPrice !== null) {
			
			$xfer += $output->writeFieldBegin('limitPrice');
			$xfer += $output->writeString($this->limitPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseList !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseList');
			
			if (!is_array($this->enterpriseList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->enterpriseList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialFavList !== null) {
			
			$xfer += $output->writeFieldBegin('specialFavList');
			
			if (!is_array($this->specialFavList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->specialFavList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platformList !== null) {
			
			$xfer += $output->writeFieldBegin('platformList');
			
			if (!is_array($this->platformList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->platformList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->specialScopeList !== null) {
			
			$xfer += $output->writeFieldBegin('specialScopeList');
			
			if (!is_array($this->specialScopeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->specialScopeList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->excludeRangeList !== null) {
			
			$xfer += $output->writeFieldBegin('excludeRangeList');
			
			if (!is_array($this->excludeRangeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->excludeRangeList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->icon !== null) {
			
			$xfer += $output->writeFieldBegin('icon');
			$xfer += $output->writeString($this->icon);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uiThemeCode !== null) {
			
			$xfer += $output->writeFieldBegin('uiThemeCode');
			$xfer += $output->writeI32($this->uiThemeCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->businessCode !== null) {
			
			$xfer += $output->writeFieldBegin('businessCode');
			$xfer += $output->writeI32($this->businessCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelList !== null) {
			
			$xfer += $output->writeFieldBegin('channelList');
			
			if (!is_array($this->channelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->channelList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotionObjectId !== null) {
			
			$xfer += $output->writeFieldBegin('promotionObjectId');
			$xfer += $output->writeI64($this->promotionObjectId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mainNo !== null) {
			
			$xfer += $output->writeFieldBegin('mainNo');
			$xfer += $output->writeString($this->mainNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planId !== null) {
			
			$xfer += $output->writeFieldBegin('planId');
			$xfer += $output->writeI64($this->planId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prestartTime !== null) {
			
			$xfer += $output->writeFieldBegin('prestartTime');
			$xfer += $output->writeI32($this->prestartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crazyType !== null) {
			
			$xfer += $output->writeFieldBegin('crazyType');
			$xfer += $output->writeByte($this->crazyType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>