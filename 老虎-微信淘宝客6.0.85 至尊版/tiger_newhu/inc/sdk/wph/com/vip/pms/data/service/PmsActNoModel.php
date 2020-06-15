<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActNoModel {
	
	static $_TSPEC;
	public $actPlatform = null;
	public $actnoToApi = null;
	public $actPlatformList = null;
	public $promotionObjectId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actPlatform'
			),
			2 => array(
			'var' => 'actnoToApi'
			),
			3 => array(
			'var' => 'actPlatformList'
			),
			4 => array(
			'var' => 'promotionObjectId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actPlatform'])){
				
				$this->actPlatform = $vals['actPlatform'];
			}
			
			
			if (isset($vals['actnoToApi'])){
				
				$this->actnoToApi = $vals['actnoToApi'];
			}
			
			
			if (isset($vals['actPlatformList'])){
				
				$this->actPlatformList = $vals['actPlatformList'];
			}
			
			
			if (isset($vals['promotionObjectId'])){
				
				$this->promotionObjectId = $vals['promotionObjectId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActNoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actPlatform" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actPlatform); 
				
			}
			
			
			
			
			if ("actnoToApi" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actnoToApi);
				
			}
			
			
			
			
			if ("actPlatformList" == $schemeField){
				
				$needSkip = false;
				
				$this->actPlatformList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->actPlatformList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("promotionObjectId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->promotionObjectId); 
				
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
		
		if($this->actPlatform !== null) {
			
			$xfer += $output->writeFieldBegin('actPlatform');
			$xfer += $output->writeI32($this->actPlatform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('actnoToApi');
		$xfer += $output->writeString($this->actnoToApi);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->actPlatformList !== null) {
			
			$xfer += $output->writeFieldBegin('actPlatformList');
			
			if (!is_array($this->actPlatformList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->actPlatformList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotionObjectId !== null) {
			
			$xfer += $output->writeFieldBegin('promotionObjectId');
			$xfer += $output->writeI64($this->promotionObjectId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>