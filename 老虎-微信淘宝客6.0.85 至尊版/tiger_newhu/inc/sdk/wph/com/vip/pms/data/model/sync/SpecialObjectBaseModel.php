<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class SpecialObjectBaseModel {
	
	static $_TSPEC;
	public $objectId = null;
	public $pageId = null;
	public $actType = null;
	public $actName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'objectId'
			),
			2 => array(
			'var' => 'pageId'
			),
			3 => array(
			'var' => 'actType'
			),
			4 => array(
			'var' => 'actName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['objectId'])){
				
				$this->objectId = $vals['objectId'];
			}
			
			
			if (isset($vals['pageId'])){
				
				$this->pageId = $vals['pageId'];
			}
			
			
			if (isset($vals['actType'])){
				
				$this->actType = $vals['actType'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SpecialObjectBaseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("objectId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->objectId); 
				
			}
			
			
			
			
			if ("pageId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageId); 
				
			}
			
			
			
			
			if ("actType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actType); 
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
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
		
		$xfer += $output->writeFieldBegin('objectId');
		$xfer += $output->writeI64($this->objectId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageId');
		$xfer += $output->writeI32($this->pageId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actType');
		$xfer += $output->writeI32($this->actType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actName');
		$xfer += $output->writeString($this->actName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>