<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsCommandCoreModel {
	
	static $_TSPEC;
	public $id = null;
	public $name = null;
	public $code = null;
	public $rpType = null;
	public $channel = null;
	public $range = null;
	public $totalLimit = null;
	public $userLimit = null;
	public $priceLimit = null;
	public $notLimitUser = null;
	public $isAllowRepeatConfig = null;
	public $isAllowRepeat = null;
	public $beginTime = null;
	public $endTime = null;
	public $favType = null;
	public $customerLevelList = null;
	public $saleModelList = null;
	public $isAllowBlackList = null;
	public $commandFavList = null;
	public $commandScopeList = null;
	public $customerSrcList = null;
	public $parentId = null;
	public $userType = null;
	public $audienceConfigList = null;
	
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
			'var' => 'code'
			),
			4 => array(
			'var' => 'rpType'
			),
			5 => array(
			'var' => 'channel'
			),
			6 => array(
			'var' => 'range'
			),
			7 => array(
			'var' => 'totalLimit'
			),
			8 => array(
			'var' => 'userLimit'
			),
			9 => array(
			'var' => 'priceLimit'
			),
			10 => array(
			'var' => 'notLimitUser'
			),
			11 => array(
			'var' => 'isAllowRepeatConfig'
			),
			12 => array(
			'var' => 'isAllowRepeat'
			),
			13 => array(
			'var' => 'beginTime'
			),
			14 => array(
			'var' => 'endTime'
			),
			15 => array(
			'var' => 'favType'
			),
			16 => array(
			'var' => 'customerLevelList'
			),
			17 => array(
			'var' => 'saleModelList'
			),
			18 => array(
			'var' => 'isAllowBlackList'
			),
			19 => array(
			'var' => 'commandFavList'
			),
			20 => array(
			'var' => 'commandScopeList'
			),
			21 => array(
			'var' => 'customerSrcList'
			),
			22 => array(
			'var' => 'parentId'
			),
			23 => array(
			'var' => 'userType'
			),
			24 => array(
			'var' => 'audienceConfigList'
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
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['rpType'])){
				
				$this->rpType = $vals['rpType'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['range'])){
				
				$this->range = $vals['range'];
			}
			
			
			if (isset($vals['totalLimit'])){
				
				$this->totalLimit = $vals['totalLimit'];
			}
			
			
			if (isset($vals['userLimit'])){
				
				$this->userLimit = $vals['userLimit'];
			}
			
			
			if (isset($vals['priceLimit'])){
				
				$this->priceLimit = $vals['priceLimit'];
			}
			
			
			if (isset($vals['notLimitUser'])){
				
				$this->notLimitUser = $vals['notLimitUser'];
			}
			
			
			if (isset($vals['isAllowRepeatConfig'])){
				
				$this->isAllowRepeatConfig = $vals['isAllowRepeatConfig'];
			}
			
			
			if (isset($vals['isAllowRepeat'])){
				
				$this->isAllowRepeat = $vals['isAllowRepeat'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['favType'])){
				
				$this->favType = $vals['favType'];
			}
			
			
			if (isset($vals['customerLevelList'])){
				
				$this->customerLevelList = $vals['customerLevelList'];
			}
			
			
			if (isset($vals['saleModelList'])){
				
				$this->saleModelList = $vals['saleModelList'];
			}
			
			
			if (isset($vals['isAllowBlackList'])){
				
				$this->isAllowBlackList = $vals['isAllowBlackList'];
			}
			
			
			if (isset($vals['commandFavList'])){
				
				$this->commandFavList = $vals['commandFavList'];
			}
			
			
			if (isset($vals['commandScopeList'])){
				
				$this->commandScopeList = $vals['commandScopeList'];
			}
			
			
			if (isset($vals['customerSrcList'])){
				
				$this->customerSrcList = $vals['customerSrcList'];
			}
			
			
			if (isset($vals['parentId'])){
				
				$this->parentId = $vals['parentId'];
			}
			
			
			if (isset($vals['userType'])){
				
				$this->userType = $vals['userType'];
			}
			
			
			if (isset($vals['audienceConfigList'])){
				
				$this->audienceConfigList = $vals['audienceConfigList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsCommandCoreModel';
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
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("rpType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rpType); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->channel); 
				
			}
			
			
			
			
			if ("range" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->range); 
				
			}
			
			
			
			
			if ("totalLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalLimit); 
				
			}
			
			
			
			
			if ("userLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userLimit); 
				
			}
			
			
			
			
			if ("priceLimit" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->priceLimit);
				
			}
			
			
			
			
			if ("notLimitUser" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->notLimitUser);
				
			}
			
			
			
			
			if ("isAllowRepeatConfig" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isAllowRepeatConfig);
				
			}
			
			
			
			
			if ("isAllowRepeat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isAllowRepeat); 
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("favType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->favType); 
				
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
			
			
			
			
			if ("saleModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->saleModelList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem2->read($input);
						
						$this->saleModelList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isAllowBlackList" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isAllowBlackList);
				
			}
			
			
			
			
			if ("commandFavList" == $schemeField){
				
				$needSkip = false;
				
				$this->commandFavList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\pms\data\service\PmsCommandFavModel();
						$elem3->read($input);
						
						$this->commandFavList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("commandScopeList" == $schemeField){
				
				$needSkip = false;
				
				$this->commandScopeList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->commandScopeList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customerSrcList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerSrcList = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						
						$elem5 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem5->read($input);
						
						$this->customerSrcList[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("parentId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parentId);
				
			}
			
			
			
			
			if ("userType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userType); 
				
			}
			
			
			
			
			if ("audienceConfigList" == $schemeField){
				
				$needSkip = false;
				
				$this->audienceConfigList = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						
						$elem6 = new \com\vip\pms\data\service\PmsActAudienceConfigModel();
						$elem6->read($input);
						
						$this->audienceConfigList[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeString($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('rpType');
		$xfer += $output->writeI32($this->rpType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channel');
		$xfer += $output->writeI32($this->channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('range');
		$xfer += $output->writeI32($this->range);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalLimit');
		$xfer += $output->writeI32($this->totalLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userLimit');
		$xfer += $output->writeI32($this->userLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('priceLimit');
		$xfer += $output->writeDouble($this->priceLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('notLimitUser');
		$xfer += $output->writeBool($this->notLimitUser);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isAllowRepeatConfig');
		$xfer += $output->writeBool($this->isAllowRepeatConfig);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isAllowRepeat');
		$xfer += $output->writeI32($this->isAllowRepeat);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('favType');
		$xfer += $output->writeI32($this->favType);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->saleModelList !== null) {
			
			$xfer += $output->writeFieldBegin('saleModelList');
			
			if (!is_array($this->saleModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->saleModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isAllowBlackList');
		$xfer += $output->writeBool($this->isAllowBlackList);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('commandFavList');
		
		if (!is_array($this->commandFavList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->commandFavList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('commandScopeList');
		
		if (!is_array($this->commandScopeList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->commandScopeList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
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
		
		
		if($this->parentId !== null) {
			
			$xfer += $output->writeFieldBegin('parentId');
			$xfer += $output->writeString($this->parentId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userType !== null) {
			
			$xfer += $output->writeFieldBegin('userType');
			$xfer += $output->writeI32($this->userType);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>