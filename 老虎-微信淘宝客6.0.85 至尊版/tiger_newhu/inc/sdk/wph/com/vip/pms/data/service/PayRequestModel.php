<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PayRequestModel {
	
	static $_TSPEC;
	public $payCoreModel = null;
	public $priorityLevel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'payCoreModel'
			),
			2 => array(
			'var' => 'priorityLevel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['payCoreModel'])){
				
				$this->payCoreModel = $vals['payCoreModel'];
			}
			
			
			if (isset($vals['priorityLevel'])){
				
				$this->priorityLevel = $vals['priorityLevel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PayRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("payCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->payCoreModel = new \com\vip\pms\data\service\PmsPayCoreModel();
				$this->payCoreModel->read($input);
				
			}
			
			
			
			
			if ("priorityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->priorityLevel); 
				
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
		
		$xfer += $output->writeFieldBegin('payCoreModel');
		
		if (!is_object($this->payCoreModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->payCoreModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('priorityLevel');
		$xfer += $output->writeI32($this->priorityLevel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>