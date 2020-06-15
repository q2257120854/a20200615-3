<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class SpecialObjectRequest {
	
	static $_TSPEC;
	public $objectBaseModel = null;
	public $objectMemberModelList = null;
	public $objectMemberModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'objectBaseModel'
			),
			2 => array(
			'var' => 'objectMemberModelList'
			),
			3 => array(
			'var' => 'objectMemberModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['objectBaseModel'])){
				
				$this->objectBaseModel = $vals['objectBaseModel'];
			}
			
			
			if (isset($vals['objectMemberModelList'])){
				
				$this->objectMemberModelList = $vals['objectMemberModelList'];
			}
			
			
			if (isset($vals['objectMemberModel'])){
				
				$this->objectMemberModel = $vals['objectMemberModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SpecialObjectRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("objectBaseModel" == $schemeField){
				
				$needSkip = false;
				
				$this->objectBaseModel = new \com\vip\pms\data\model\sync\SpecialObjectBaseModel();
				$this->objectBaseModel->read($input);
				
			}
			
			
			
			
			if ("objectMemberModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->objectMemberModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\model\sync\ActObjectMemberModel();
						$elem0->read($input);
						
						$this->objectMemberModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->objectMemberModelList !== null) {
			
			$xfer += $output->writeFieldBegin('objectMemberModelList');
			
			if (!is_array($this->objectMemberModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->objectMemberModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->objectMemberModel !== null) {
			
			$xfer += $output->writeFieldBegin('objectMemberModel');
			
			if (!is_object($this->objectMemberModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->objectMemberModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>