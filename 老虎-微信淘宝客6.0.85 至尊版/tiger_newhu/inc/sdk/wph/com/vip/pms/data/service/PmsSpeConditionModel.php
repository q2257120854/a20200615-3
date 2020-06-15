<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsSpeConditionModel {
	
	static $_TSPEC;
	public $customerTagList = null;
	public $customerSrcList = null;
	public $customerPageConfigList = null;
	public $audienceConfigList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'customerTagList'
			),
			2 => array(
			'var' => 'customerSrcList'
			),
			3 => array(
			'var' => 'customerPageConfigList'
			),
			4 => array(
			'var' => 'audienceConfigList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['customerTagList'])){
				
				$this->customerTagList = $vals['customerTagList'];
			}
			
			
			if (isset($vals['customerSrcList'])){
				
				$this->customerSrcList = $vals['customerSrcList'];
			}
			
			
			if (isset($vals['customerPageConfigList'])){
				
				$this->customerPageConfigList = $vals['customerPageConfigList'];
			}
			
			
			if (isset($vals['audienceConfigList'])){
				
				$this->audienceConfigList = $vals['audienceConfigList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsSpeConditionModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("customerTagList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerTagList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\PmsSpeConfigModel();
						$elem0->read($input);
						
						$this->customerTagList[$_size0++] = $elem0;
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
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsSpeConfigModel();
						$elem1->read($input);
						
						$this->customerSrcList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customerPageConfigList" == $schemeField){
				
				$needSkip = false;
				
				$this->customerPageConfigList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\pms\data\service\PmsCustomerPageConfigModel();
						$elem2->read($input);
						
						$this->customerPageConfigList[$_size2++] = $elem2;
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
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\pms\data\service\PmsActAudienceConfigModel();
						$elem3->read($input);
						
						$this->audienceConfigList[$_size3++] = $elem3;
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
		
		
		if($this->customerPageConfigList !== null) {
			
			$xfer += $output->writeFieldBegin('customerPageConfigList');
			
			if (!is_array($this->customerPageConfigList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->customerPageConfigList as $iter0){
				
				
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>