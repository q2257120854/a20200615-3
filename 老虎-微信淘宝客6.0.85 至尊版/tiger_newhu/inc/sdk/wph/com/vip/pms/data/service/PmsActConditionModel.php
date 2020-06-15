<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActConditionModel {
	
	static $_TSPEC;
	public $display = null;
	public $peopleNumLimit = null;
	public $giveType = null;
	public $giftType = null;
	public $actGiftType = null;
	public $isAllowRepeat = null;
	public $customerSrcList = null;
	public $customerLevelList = null;
	public $enterpriseType = null;
	public $prepayFavType = null;
	public $mcKinseyList = null;
	public $mcKinsey2List = null;
	public $customerTagList = null;
	public $enterpriseList = null;
	public $mobileChannelList = null;
	public $repeatAmountLimit = null;
	public $freeCarriageList = null;
	public $audienceConfigList = null;
	public $buyLimit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'display'
			),
			2 => array(
			'var' => 'peopleNumLimit'
			),
			3 => array(
			'var' => 'giveType'
			),
			4 => array(
			'var' => 'giftType'
			),
			5 => array(
			'var' => 'actGiftType'
			),
			6 => array(
			'var' => 'isAllowRepeat'
			),
			7 => array(
			'var' => 'customerSrcList'
			),
			8 => array(
			'var' => 'customerLevelList'
			),
			9 => array(
			'var' => 'enterpriseType'
			),
			10 => array(
			'var' => 'prepayFavType'
			),
			11 => array(
			'var' => 'mcKinseyList'
			),
			12 => array(
			'var' => 'mcKinsey2List'
			),
			13 => array(
			'var' => 'customerTagList'
			),
			14 => array(
			'var' => 'enterpriseList'
			),
			15 => array(
			'var' => 'mobileChannelList'
			),
			16 => array(
			'var' => 'repeatAmountLimit'
			),
			17 => array(
			'var' => 'freeCarriageList'
			),
			18 => array(
			'var' => 'audienceConfigList'
			),
			19 => array(
			'var' => 'buyLimit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['display'])){
				
				$this->display = $vals['display'];
			}
			
			
			if (isset($vals['peopleNumLimit'])){
				
				$this->peopleNumLimit = $vals['peopleNumLimit'];
			}
			
			
			if (isset($vals['giveType'])){
				
				$this->giveType = $vals['giveType'];
			}
			
			
			if (isset($vals['giftType'])){
				
				$this->giftType = $vals['giftType'];
			}
			
			
			if (isset($vals['actGiftType'])){
				
				$this->actGiftType = $vals['actGiftType'];
			}
			
			
			if (isset($vals['isAllowRepeat'])){
				
				$this->isAllowRepeat = $vals['isAllowRepeat'];
			}
			
			
			if (isset($vals['customerSrcList'])){
				
				$this->customerSrcList = $vals['customerSrcList'];
			}
			
			
			if (isset($vals['customerLevelList'])){
				
				$this->customerLevelList = $vals['customerLevelList'];
			}
			
			
			if (isset($vals['enterpriseType'])){
				
				$this->enterpriseType = $vals['enterpriseType'];
			}
			
			
			if (isset($vals['prepayFavType'])){
				
				$this->prepayFavType = $vals['prepayFavType'];
			}
			
			
			if (isset($vals['mcKinseyList'])){
				
				$this->mcKinseyList = $vals['mcKinseyList'];
			}
			
			
			if (isset($vals['mcKinsey2List'])){
				
				$this->mcKinsey2List = $vals['mcKinsey2List'];
			}
			
			
			if (isset($vals['customerTagList'])){
				
				$this->customerTagList = $vals['customerTagList'];
			}
			
			
			if (isset($vals['enterpriseList'])){
				
				$this->enterpriseList = $vals['enterpriseList'];
			}
			
			
			if (isset($vals['mobileChannelList'])){
				
				$this->mobileChannelList = $vals['mobileChannelList'];
			}
			
			
			if (isset($vals['repeatAmountLimit'])){
				
				$this->repeatAmountLimit = $vals['repeatAmountLimit'];
			}
			
			
			if (isset($vals['freeCarriageList'])){
				
				$this->freeCarriageList = $vals['freeCarriageList'];
			}
			
			
			if (isset($vals['audienceConfigList'])){
				
				$this->audienceConfigList = $vals['audienceConfigList'];
			}
			
			
			if (isset($vals['buyLimit'])){
				
				$this->buyLimit = $vals['buyLimit'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActConditionModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("display" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->display); 
				
			}
			
			
			
			
			if ("peopleNumLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->peopleNumLimit); 
				
			}
			
			
			
			
			if ("giveType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->giveType); 
				
			}
			
			
			
			
			if ("giftType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->giftType); 
				
			}
			
			
			
			
			if ("actGiftType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actGiftType); 
				
			}
			
			
			
			
			if ("isAllowRepeat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isAllowRepeat); 
				
			}
			
			
			
			
			if ("customerSrcList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerSrcList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem0->read($input);
						
						$this->customerSrcList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customerLevelList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerLevelList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem1->read($input);
						
						$this->customerLevelList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("enterpriseType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->enterpriseType); 
				
			}
			
			
			
			
			if ("prepayFavType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prepayFavType);
				
			}
			
			
			
			
			if ("mcKinseyList" == $schemeField){
				
				$needSkip = false;
				
				$this->mcKinseyList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem2->read($input);
						
						$this->mcKinseyList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("mcKinsey2List" == $schemeField){
				
				$needSkip = false;
				
				$this->mcKinsey2List = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem3->read($input);
						
						$this->mcKinsey2List[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customerTagList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerTagList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem4->read($input);
						
						$this->customerTagList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("enterpriseList" == $schemeField){
				
				$needSkip = false;
				
				$this->enterpriseList = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem5->read($input);
						
						$this->enterpriseList[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("mobileChannelList" == $schemeField){
				
				$needSkip = false;
				
				$this->mobileChannelList = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						
						$elem6 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem6->read($input);
						
						$this->mobileChannelList[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("repeatAmountLimit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->repeatAmountLimit);
				
			}
			
			
			
			
			if ("freeCarriageList" == $schemeField){
				
				$needSkip = false;
				
				$this->freeCarriageList = array();
				$_size7 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem7 = null;
						
						$elem7 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem7->read($input);
						
						$this->freeCarriageList[$_size7++] = $elem7;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("audienceConfigList" == $schemeField){
				
				$needSkip = false;
				
				$this->audienceConfigList = array();
				$_size8 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem8 = null;
						
						$elem8 = new \com\vip\pms\data\service\PmsActAudienceConfigModel();
						$elem8->read($input);
						
						$this->audienceConfigList[$_size8++] = $elem8;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("buyLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyLimit); 
				
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
		
		$xfer += $output->writeFieldBegin('display');
		$xfer += $output->writeI32($this->display);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('peopleNumLimit');
		$xfer += $output->writeI32($this->peopleNumLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('giveType');
		$xfer += $output->writeI32($this->giveType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('giftType');
		$xfer += $output->writeI32($this->giftType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actGiftType');
		$xfer += $output->writeI32($this->actGiftType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isAllowRepeat');
		$xfer += $output->writeI32($this->isAllowRepeat);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->customerSrcList !== null) {
			
			$xfer += $output->writeFieldBegin('customerSrcList');
			
			if (!is_array($this->customerSrcList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customerSrcList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerLevelList !== null) {
			
			$xfer += $output->writeFieldBegin('customerLevelList');
			
			if (!is_array($this->customerLevelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customerLevelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('enterpriseType');
		$xfer += $output->writeI32($this->enterpriseType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->prepayFavType !== null) {
			
			$xfer += $output->writeFieldBegin('prepayFavType');
			$xfer += $output->writeString($this->prepayFavType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mcKinseyList !== null) {
			
			$xfer += $output->writeFieldBegin('mcKinseyList');
			
			if (!is_array($this->mcKinseyList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mcKinseyList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mcKinsey2List !== null) {
			
			$xfer += $output->writeFieldBegin('mcKinsey2List');
			
			if (!is_array($this->mcKinsey2List)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mcKinsey2List as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customerTagList !== null) {
			
			$xfer += $output->writeFieldBegin('customerTagList');
			
			if (!is_array($this->customerTagList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customerTagList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enterpriseList !== null) {
			
			$xfer += $output->writeFieldBegin('enterpriseList');
			
			if (!is_array($this->enterpriseList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->enterpriseList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileChannelList !== null) {
			
			$xfer += $output->writeFieldBegin('mobileChannelList');
			
			if (!is_array($this->mobileChannelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mobileChannelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->repeatAmountLimit !== null) {
			
			$xfer += $output->writeFieldBegin('repeatAmountLimit');
			$xfer += $output->writeDouble($this->repeatAmountLimit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->freeCarriageList !== null) {
			
			$xfer += $output->writeFieldBegin('freeCarriageList');
			
			if (!is_array($this->freeCarriageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->freeCarriageList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audienceConfigList !== null) {
			
			$xfer += $output->writeFieldBegin('audienceConfigList');
			
			if (!is_array($this->audienceConfigList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->audienceConfigList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyLimit !== null) {
			
			$xfer += $output->writeFieldBegin('buyLimit');
			$xfer += $output->writeI32($this->buyLimit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>