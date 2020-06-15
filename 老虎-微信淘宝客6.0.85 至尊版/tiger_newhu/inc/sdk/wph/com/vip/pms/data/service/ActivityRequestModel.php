<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class ActivityRequestModel {
	
	static $_TSPEC;
	public $actCoreModel = null;
	public $actConditionModel = null;
	public $actSiteList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCoreModel'
			),
			2 => array(
			'var' => 'actConditionModel'
			),
			3 => array(
			'var' => 'actSiteList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCoreModel'])){
				
				$this->actCoreModel = $vals['actCoreModel'];
			}
			
			
			if (isset($vals['actConditionModel'])){
				
				$this->actConditionModel = $vals['actConditionModel'];
			}
			
			
			if (isset($vals['actSiteList'])){
				
				$this->actSiteList = $vals['actSiteList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActivityRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->actCoreModel = new \com\vip\pms\data\service\PmsActCoreModel();
				$this->actCoreModel->read($input);
				
			}
			
			
			
			
			if ("actConditionModel" == $schemeField){
				
				$needSkip = false;
				
				$this->actConditionModel = new \com\vip\pms\data\service\PmsActConditionModel();
				$this->actConditionModel->read($input);
				
			}
			
			
			
			
			if ("actSiteList" == $schemeField){
				
				$needSkip = false;
				
				$this->actSiteList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsActSiteModel();
						$elem1->read($input);
						
						$this->actSiteList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('actCoreModel');
		
		if (!is_object($this->actCoreModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->actCoreModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actConditionModel');
		
		if (!is_object($this->actConditionModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->actConditionModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actSiteList');
		
		if (!is_array($this->actSiteList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actSiteList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>