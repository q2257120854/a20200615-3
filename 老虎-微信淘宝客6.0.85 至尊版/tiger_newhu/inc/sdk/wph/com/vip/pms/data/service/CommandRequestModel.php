<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CommandRequestModel {
	
	static $_TSPEC;
	public $commandCoreModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commandCoreModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commandCoreModel'])){
				
				$this->commandCoreModel = $vals['commandCoreModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CommandRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("commandCoreModel" == $schemeField){
				
				$needSkip = false;
				
				$this->commandCoreModel = new \com\vip\pms\data\service\PmsCommandCoreModel();
				$this->commandCoreModel->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('commandCoreModel');
		
		if (!is_object($this->commandCoreModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commandCoreModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>