<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponCommonModel {
	
	static $_TSPEC;
	public $id = null;
	public $name = null;
	public $range = null;
	public $offersType = null;
	public $giveType = null;
	public $buy = null;
	public $offer = null;
	public $isOnlinePay = null;
	public $isAllowBlackList = null;
	public $useBeginTime = null;
	public $useEndTime = null;
	public $platformList = null;
	public $rangeList = null;
	public $saleModelList = null;
	public $sendNum = null;
	public $categoryChannelId = null;
	public $categoryList = null;
	public $salt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'range'
			),
			4 => array(
			'var' => 'offersType'
			),
			5 => array(
			'var' => 'giveType'
			),
			6 => array(
			'var' => 'buy'
			),
			7 => array(
			'var' => 'offer'
			),
			8 => array(
			'var' => 'isOnlinePay'
			),
			9 => array(
			'var' => 'isAllowBlackList'
			),
			10 => array(
			'var' => 'useBeginTime'
			),
			11 => array(
			'var' => 'useEndTime'
			),
			12 => array(
			'var' => 'platformList'
			),
			13 => array(
			'var' => 'rangeList'
			),
			14 => array(
			'var' => 'saleModelList'
			),
			15 => array(
			'var' => 'sendNum'
			),
			16 => array(
			'var' => 'categoryChannelId'
			),
			17 => array(
			'var' => 'categoryList'
			),
			18 => array(
			'var' => 'salt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['range'])){
				
				$this->range = $vals['range'];
			}
			
			
			if (isset($vals['offersType'])){
				
				$this->offersType = $vals['offersType'];
			}
			
			
			if (isset($vals['giveType'])){
				
				$this->giveType = $vals['giveType'];
			}
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['offer'])){
				
				$this->offer = $vals['offer'];
			}
			
			
			if (isset($vals['isOnlinePay'])){
				
				$this->isOnlinePay = $vals['isOnlinePay'];
			}
			
			
			if (isset($vals['isAllowBlackList'])){
				
				$this->isAllowBlackList = $vals['isAllowBlackList'];
			}
			
			
			if (isset($vals['useBeginTime'])){
				
				$this->useBeginTime = $vals['useBeginTime'];
			}
			
			
			if (isset($vals['useEndTime'])){
				
				$this->useEndTime = $vals['useEndTime'];
			}
			
			
			if (isset($vals['platformList'])){
				
				$this->platformList = $vals['platformList'];
			}
			
			
			if (isset($vals['rangeList'])){
				
				$this->rangeList = $vals['rangeList'];
			}
			
			
			if (isset($vals['saleModelList'])){
				
				$this->saleModelList = $vals['saleModelList'];
			}
			
			
			if (isset($vals['sendNum'])){
				
				$this->sendNum = $vals['sendNum'];
			}
			
			
			if (isset($vals['categoryChannelId'])){
				
				$this->categoryChannelId = $vals['categoryChannelId'];
			}
			
			
			if (isset($vals['categoryList'])){
				
				$this->categoryList = $vals['categoryList'];
			}
			
			
			if (isset($vals['salt'])){
				
				$this->salt = $vals['salt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponCommonModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("range" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->range); 
				
			}
			
			
			
			
			if ("offersType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->offersType); 
				
			}
			
			
			
			
			if ("giveType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->giveType); 
				
			}
			
			
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->buy);
				
			}
			
			
			
			
			if ("offer" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->offer);
				
			}
			
			
			
			
			if ("isOnlinePay" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isOnlinePay);
				
			}
			
			
			
			
			if ("isAllowBlackList" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isAllowBlackList);
				
			}
			
			
			
			
			if ("useBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useBeginTime); 
				
			}
			
			
			
			
			if ("useEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->useEndTime); 
				
			}
			
			
			
			
			if ("platformList" == $schemeField){
				
				$needSkip = false;
				
				$this->platformList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->platformList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("rangeList" == $schemeField){
				
				$needSkip = false;
				
				$this->rangeList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\CouponRangeModel();
						$elem1->read($input);
						
						$this->rangeList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("saleModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->saleModelList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->saleModelList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sendNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sendNum); 
				
			}
			
			
			
			
			if ("categoryChannelId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryChannelId);
				
			}
			
			
			
			
			if ("categoryList" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\pms\data\service\CouponRangeModel();
						$elem3->read($input);
						
						$this->categoryList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("salt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salt);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeString($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('range');
		$xfer += $output->writeI32($this->range);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offersType');
		$xfer += $output->writeI32($this->offersType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('giveType');
		$xfer += $output->writeI32($this->giveType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buy');
		$xfer += $output->writeDouble($this->buy);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offer');
		$xfer += $output->writeDouble($this->offer);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isOnlinePay');
		$xfer += $output->writeBool($this->isOnlinePay);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isAllowBlackList');
		$xfer += $output->writeBool($this->isAllowBlackList);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('useBeginTime');
		$xfer += $output->writeI64($this->useBeginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('useEndTime');
		$xfer += $output->writeI64($this->useEndTime);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		if($this->rangeList !== null) {
			
			$xfer += $output->writeFieldBegin('rangeList');
			
			if (!is_array($this->rangeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->rangeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleModelList !== null) {
			
			$xfer += $output->writeFieldBegin('saleModelList');
			
			if (!is_array($this->saleModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->saleModelList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sendNum !== null) {
			
			$xfer += $output->writeFieldBegin('sendNum');
			$xfer += $output->writeI32($this->sendNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryChannelId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryChannelId');
			$xfer += $output->writeString($this->categoryChannelId);
			
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
		
		
		if($this->salt !== null) {
			
			$xfer += $output->writeFieldBegin('salt');
			$xfer += $output->writeString($this->salt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>