<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class ActObjectRequest {
	
	static $_TSPEC;
	public $objectBaseModel = null;
	public $objectMemberModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'objectBaseModel'
			),
			2 => array(
			'var' => 'objectMemberModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['objectBaseModel'])){
				
				$this->objectBaseModel = $vals['objectBaseModel'];
			}
			
			
			if (isset($vals['objectMemberModel'])){
				
				$this->objectMemberModel = $vals['objectMemberModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActObjectRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("objectBaseModel" == $schemeField){
				
				$needSkip = false;
				
				$this->objectBaseModel = new \com\vip\pms\data\model\sync\ActObjectBaseModel();
				$this->objectBaseModel->read($input);
				
			}
			
			
			
			
			if ("objectMemberModel" == $schemeField){
				
				$needSkip = false;
				
				$this->objectMemberModel = new \com\vip\pms\data\model\sync\ActObjectMemberModel();
				$this->objectMemberModel->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('objectBaseModel');
		
		if (!is_object($this->objectBaseModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->objectBaseModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('objectMemberModel');
		
		if (!is_object($this->objectMemberModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->objectMemberModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>