<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsPayCoreModel {
	
	static $_TSPEC;
	public $actType = null;
	public $actName = null;
	public $firstOrder = null;
	public $isAllowRepeat = null;
	public $participateNum = null;
	public $peopleNumLimit = null;
	public $showAd = null;
	public $beginTime = null;
	public $endTime = null;
	public $customerSrcList = null;
	public $customerTagList = null;
	public $payHouseList = null;
	public $payDetailList = null;
	public $actMsg = null;
	public $isBlackFilter = null;
	public $blackFilterMsg = null;
	public $isCategoryBlackFilter = null;
	public $audienceConfigList = null;
	
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
			'var' => 'firstOrder'
			),
			4 => array(
			'var' => 'isAllowRepeat'
			),
			5 => array(
			'var' => 'participateNum'
			),
			6 => array(
			'var' => 'peopleNumLimit'
			),
			7 => array(
			'var' => 'showAd'
			),
			8 => array(
			'var' => 'beginTime'
			),
			9 => array(
			'var' => 'endTime'
			),
			10 => array(
			'var' => 'customerSrcList'
			),
			11 => array(
			'var' => 'customerTagList'
			),
			12 => array(
			'var' => 'payHouseList'
			),
			13 => array(
			'var' => 'payDetailList'
			),
			14 => array(
			'var' => 'actMsg'
			),
			15 => array(
			'var' => 'isBlackFilter'
			),
			16 => array(
			'var' => 'blackFilterMsg'
			),
			17 => array(
			'var' => 'isCategoryBlackFilter'
			),
			18 => array(
			'var' => 'audienceConfigList'
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
			
			
			if (isset($vals['firstOrder'])){
				
				$this->firstOrder = $vals['firstOrder'];
			}
			
			
			if (isset($vals['isAllowRepeat'])){
				
				$this->isAllowRepeat = $vals['isAllowRepeat'];
			}
			
			
			if (isset($vals['participateNum'])){
				
				$this->participateNum = $vals['participateNum'];
			}
			
			
			if (isset($vals['peopleNumLimit'])){
				
				$this->peopleNumLimit = $vals['peopleNumLimit'];
			}
			
			
			if (isset($vals['showAd'])){
				
				$this->showAd = $vals['showAd'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['customerSrcList'])){
				
				$this->customerSrcList = $vals['customerSrcList'];
			}
			
			
			if (isset($vals['customerTagList'])){
				
				$this->customerTagList = $vals['customerTagList'];
			}
			
			
			if (isset($vals['payHouseList'])){
				
				$this->payHouseList = $vals['payHouseList'];
			}
			
			
			if (isset($vals['payDetailList'])){
				
				$this->payDetailList = $vals['payDetailList'];
			}
			
			
			if (isset($vals['actMsg'])){
				
				$this->actMsg = $vals['actMsg'];
			}
			
			
			if (isset($vals['isBlackFilter'])){
				
				$this->isBlackFilter = $vals['isBlackFilter'];
			}
			
			
			if (isset($vals['blackFilterMsg'])){
				
				$this->blackFilterMsg = $vals['blackFilterMsg'];
			}
			
			
			if (isset($vals['isCategoryBlackFilter'])){
				
				$this->isCategoryBlackFilter = $vals['isCategoryBlackFilter'];
			}
			
			
			if (isset($vals['audienceConfigList'])){
				
				$this->audienceConfigList = $vals['audienceConfigList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsPayCoreModel';
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
			
			
			
			
			if ("firstOrder" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->firstOrder); 
				
			}
			
			
			
			
			if ("isAllowRepeat" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isAllowRepeat); 
				
			}
			
			
			
			
			if ("participateNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->participateNum); 
				
			}
			
			
			
			
			if ("peopleNumLimit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->peopleNumLimit); 
				
			}
			
			
			
			
			if ("showAd" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->showAd); 
				
			}
			
			
			
			
			if ("beginTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->beginTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
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
			
			
			
			
			if ("customerTagList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerTagList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem1->read($input);
						
						$this->customerTagList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("payHouseList" == $schemeField){
				
				$needSkip = false;
				
				$this->payHouseList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\pms\data\service\PmsPayHouseModel();
						$elem2->read($input);
						
						$this->payHouseList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("payDetailList" == $schemeField){
				
				$needSkip = false;
				
				$this->payDetailList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\pms\data\service\PmsActConfigModel();
						$elem3->read($input);
						
						$this->payDetailList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("actMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actMsg);
				
			}
			
			
			
			
			if ("isBlackFilter" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isBlackFilter); 
				
			}
			
			
			
			
			if ("blackFilterMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->blackFilterMsg);
				
			}
			
			
			
			
			if ("isCategoryBlackFilter" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isCategoryBlackFilter); 
				
			}
			
			
			
			
			if ("audienceConfigList" == $schemeField){
				
				$needSkip = false;
				
				$this->audienceConfigList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\pms\data\service\PmsActAudienceConfigModel();
						$elem4->read($input);
						
						$this->audienceConfigList[$_size4++] = $elem4;
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
		
		$xfer += $output->writeFieldBegin('actType');
		$xfer += $output->writeI32($this->actType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actName');
		$xfer += $output->writeString($this->actName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('firstOrder');
		$xfer += $output->writeI32($this->firstOrder);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isAllowRepeat');
		$xfer += $output->writeI32($this->isAllowRepeat);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('participateNum');
		$xfer += $output->writeI32($this->participateNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('peopleNumLimit');
		$xfer += $output->writeI32($this->peopleNumLimit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('showAd');
		$xfer += $output->writeI32($this->showAd);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
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
		
		
		$xfer += $output->writeFieldBegin('payHouseList');
		
		if (!is_array($this->payHouseList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->payHouseList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('payDetailList');
		
		if (!is_array($this->payDetailList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->payDetailList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actMsg');
		$xfer += $output->writeString($this->actMsg);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isBlackFilter !== null) {
			
			$xfer += $output->writeFieldBegin('isBlackFilter');
			$xfer += $output->writeI32($this->isBlackFilter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->blackFilterMsg !== null) {
			
			$xfer += $output->writeFieldBegin('blackFilterMsg');
			$xfer += $output->writeString($this->blackFilterMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isCategoryBlackFilter !== null) {
			
			$xfer += $output->writeFieldBegin('isCategoryBlackFilter');
			$xfer += $output->writeI32($this->isCategoryBlackFilter);
			
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