<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class ActObjectRangeModel {
	
	static $_TSPEC;
	public $rangeId = null;
	public $rangeName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rangeId'
			),
			2 => array(
			'var' => 'rangeName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rangeId'])){
				
				$this->rangeId = $vals['rangeId'];
			}
			
			
			if (isset($vals['rangeName'])){
				
				$this->rangeName = $vals['rangeName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActObjectRangeModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("rangeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rangeId);
				
			}
			
			
			
			
			if ("rangeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rangeName);
				
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
		
		$xfer += $output->writeFieldBegin('rangeId');
		$xfer += $output->writeString($this->rangeId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->rangeName !== null) {
			
			$xfer += $output->writeFieldBegin('rangeName');
			$xfer += $output->writeString($this->rangeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>