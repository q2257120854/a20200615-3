<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActCoreModel {
	
	static $_TSPEC;
	public $actType = null;
	public $actName = null;
	public $actChannel = null;
	public $status = null;
	public $actRange = null;
	public $beginTime = null;
	public $endTime = null;
	public $actMsg = null;
	public $priorityLevel = null;
	public $groupBuyingFlag = null;
	public $prepayFavType = null;
	public $saleModes = null;
	public $supportPrepayFlag = null;
	public $actMainNo = null;
	public $categoryList = null;
	public $categoryChannelId = null;
	public $shopIconMsg = null;
	public $cartIconMsg = null;
	public $prestartTime = null;
	public $label = null;
	public $activityRangeSalesMode = null;
	public $channelList = null;
	public $prepayTailMoneyBeginTime = null;
	public $prepayTailMoneyEndTime = null;
	public $usePromoPic = null;
	public $planId = null;
	public $isQuota = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actType'
			),
			2 => array(
			'var' => 'actName'
			),
			3 => array(
			'var' => 'actChannel'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'actRange'
			),
			6 => array(
			'var' => 'beginTime'
			),
			7 => array(
			'var' => 'endTime'
			),
			8 => array(
			'var' => 'actMsg'
			),
			9 => array(
			'var' => 'priorityLevel'
			),
			10 => array(
			'var' => 'groupBuyingFlag'
			),
			11 => array(
			'var' => 'prepayFavType'
			),
			12 => array(
			'var' => 'saleModes'
			),
			13 => array(
			'var' => 'supportPrepayFlag'
			),
			14 => array(
			'var' => 'actMainNo'
			),
			15 => array(
			'var' => 'categoryList'
			),
			16 => array(
			'var' => 'categoryChannelId'
			),
			17 => array(
			'var' => 'shopIconMsg'
			),
			18 => array(
			'var' => 'cartIconMsg'
			),
			19 => array(
			'var' => 'prestartTime'
			),
			20 => array(
			'var' => 'label'
			),
			21 => array(
			'var' => 'activityRangeSalesMode'
			),
			22 => array(
			'var' => 'channelList'
			),
			23 => array(
			'var' => 'prepayTailMoneyBeginTime'
			),
			24 => array(
			'var' => 'prepayTailMoneyEndTime'
			),
			25 => array(
			'var' => 'usePromoPic'
			),
			26 => array(
			'var' => 'planId'
			),
			27 => array(
			'var' => 'isQuota'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actType'])){
				
				$this->actType = $vals['actType'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
			if (isset($vals['actChannel'])){
				
				$this->actChannel = $vals['actChannel'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['actRange'])){
				
				$this->actRange = $vals['actRange'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['actMsg'])){
				
				$this->actMsg = $vals['actMsg'];
			}
			
			
			if (isset($vals['priorityLevel'])){
				
				$this->priorityLevel = $vals['priorityLevel'];
			}
			
			
			if (isset($vals['groupBuyingFlag'])){
				
				$this->groupBuyingFlag = $vals['groupBuyingFlag'];
			}
			
			
			if (isset($vals['prepayFavType'])){
				
				$this->prepayFavType = $vals['prepayFavType'];
			}
			
			
			if (isset($vals['saleModes'])){
				
				$this->saleModes = $vals['saleModes'];
			}
			
			
			if (isset($vals['supportPrepayFlag'])){
				
				$this->supportPrepayFlag = $vals['supportPrepayFlag'];
			}
			
			
			if (isset($vals['actMainNo'])){
				
				$this->actMainNo = $vals['actMainNo'];
			}
			
			
			if (isset($vals['categoryList'])){
				
				$this->categoryList = $vals['categoryList'];
			}
			
			
			if (isset($vals['categoryChannelId'])){
				
				$this->categoryChannelId = $vals['categoryChannelId'];
			}
			
			
			if (isset($vals['shopIconMsg'])){
				
				$this->shopIconMsg = $vals['shopIconMsg'];
			}
			
			
			if (isset($vals['cartIconMsg'])){
				
				$this->cartIconMsg = $vals['cartIconMsg'];
			}
			
			
			if (isset($vals['prestartTime'])){
				
				$this->prestartTime = $vals['prestartTime'];
			}
			
			
			if (isset($vals['label'])){
				
				$this->label = $vals['label'];
			}
			
			
			if (isset($vals['activityRangeSalesMode'])){
				
				$this->activityRangeSalesMode = $vals['activityRangeSalesMode'];
			}
			
			
			if (isset($vals['channelList'])){
				
				$this->channelList = $vals['channelList'];
			}
			
			
			if (isset($vals['prepayTailMoneyBeginTime'])){
				
				$this->prepayTailMoneyBeginTime = $vals['prepayTailMoneyBeginTime'];
			}
			
			
			if (isset($vals['prepayTailMoneyEndTime'])){
				
				$this->prepayTailMoneyEndTime = $vals['prepayTailMoneyEndTime'];
			}
			
			
			if (isset($vals['usePromoPic'])){
				
				$this->usePromoPic = $vals['usePromoPic'];
			}
			
			
			if (isset($vals['planId'])){
				
				$this->planId = $vals['planId'];
			}
			
			
			if (isset($vals['isQuota'])){
				
				$this->isQuota = $vals['isQuota'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActCoreModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actType); 
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
			}
			
			
			
			
			if ("actChannel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actChannel); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("actRange" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actRange); 
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("actMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actMsg);
				
			}
			
			
			
			
			if ("priorityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->priorityLevel); 
				
			}
			
			
			
			
			if ("groupBuyingFlag" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\pms\data\enums\GroupBuyingFlag::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->groupBuyingFlag = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("prepayFavType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\pms\data\enums\PrepayFavType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->prepayFavType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("saleModes" == $schemeField){
				
				$needSkip = false;
				
				$this->saleModes = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->saleModes[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("supportPrepayFlag" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\pms\data\enums\SupportPrepayFlag::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->supportPrepayFlag = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("actMainNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->actMainNo); 
				
			}
			
			
			
			
			if ("categoryList" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\CouponRangeModel();
						$elem1->read($input);
						
						$this->categoryList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("categoryChannelId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryChannelId);
				
			}
			
			
			
			
			if ("shopIconMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopIconMsg);
				
			}
			
			
			
			
			if ("cartIconMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cartIconMsg);
				
			}
			
			
			
			
			if ("prestartTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->prestartTime); 
				
			}
			
			
			
			
			if ("label" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->label); 
				
			}
			
			
			
			
			if ("activityRangeSalesMode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->activityRangeSalesMode); 
				
			}
			
			
			
			
			if ("channelList" == $schemeField){
				
				$needSkip = false;
				
				$this->channelList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->channelList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("prepayTailMoneyBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayTailMoneyBeginTime); 
				
			}
			
			
			
			
			if ("prepayTailMoneyEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayTailMoneyEndTime); 
				
			}
			
			
			
			
			if ("usePromoPic" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->usePromoPic); 
				
			}
			
			
			
			
			if ("planId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->planId); 
				
			}
			
			
			
			
			if ("isQuota" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isQuota); 
				
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
		
		$xfer += $output->writeFieldBegin('actType');
		$xfer += $output->writeI32($this->actType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actName');
		$xfer += $output->writeString($this->actName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actChannel');
		$xfer += $output->writeI32($this->actChannel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actRange');
		$xfer += $output->writeI32($this->actRange);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actMsg');
		$xfer += $output->writeString($this->actMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('priorityLevel');
		$xfer += $output->writeI32($this->priorityLevel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('groupBuyingFlag');
		
		$em = new \com\vip\pms\data\enums\GroupBuyingFlag; 
		$output->writeString($em::$__names[$this->groupBuyingFlag]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->prepayFavType !== null) {
			
			$xfer += $output->writeFieldBegin('prepayFavType');
			
			$em = new \com\vip\pms\data\enums\PrepayFavType; 
			$output->writeString($em::$__names[$this->prepayFavType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleModes !== null) {
			
			$xfer += $output->writeFieldBegin('saleModes');
			
			if (!is_array($this->saleModes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->saleModes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('supportPrepayFlag');
		
		$em = new \com\vip\pms\data\enums\SupportPrepayFlag; 
		$output->writeString($em::$__names[$this->supportPrepayFlag]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->actMainNo !== null) {
			
			$xfer += $output->writeFieldBegin('actMainNo');
			$xfer += $output->writeI64($this->actMainNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryList !== null) {
			
			$xfer += $output->writeFieldBegin('categoryList');
			
			if (!is_array($this->categoryList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryChannelId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryChannelId');
			$xfer += $output->writeString($this->categoryChannelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopIconMsg !== null) {
			
			$xfer += $output->writeFieldBegin('shopIconMsg');
			$xfer += $output->writeString($this->shopIconMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cartIconMsg !== null) {
			
			$xfer += $output->writeFieldBegin('cartIconMsg');
			$xfer += $output->writeString($this->cartIconMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prestartTime !== null) {
			
			$xfer += $output->writeFieldBegin('prestartTime');
			$xfer += $output->writeI32($this->prestartTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->label !== null) {
			
			$xfer += $output->writeFieldBegin('label');
			$xfer += $output->writeI32($this->label);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityRangeSalesMode !== null) {
			
			$xfer += $output->writeFieldBegin('activityRangeSalesMode');
			$xfer += $output->writeI32($this->activityRangeSalesMode);
			
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
		
		
		if($this->prepayTailMoneyBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('prepayTailMoneyBeginTime');
			$xfer += $output->writeI64($this->prepayTailMoneyBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayTailMoneyEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('prepayTailMoneyEndTime');
			$xfer += $output->writeI64($this->prepayTailMoneyEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usePromoPic !== null) {
			
			$xfer += $output->writeFieldBegin('usePromoPic');
			$xfer += $output->writeByte($this->usePromoPic);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planId !== null) {
			
			$xfer += $output->writeFieldBegin('planId');
			$xfer += $output->writeI64($this->planId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isQuota !== null) {
			
			$xfer += $output->writeFieldBegin('isQuota');
			$xfer += $output->writeByte($this->isQuota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>