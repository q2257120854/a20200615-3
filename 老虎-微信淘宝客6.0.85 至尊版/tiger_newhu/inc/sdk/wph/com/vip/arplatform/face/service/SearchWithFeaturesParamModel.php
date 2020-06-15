<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class SearchWithFeaturesParamModel {
	
	static $_TSPEC;
	public $facesetKey = null;
	public $imageUrl = null;
	public $opacity = null;
	public $asynchronization = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'facesetKey'
			),
			2 => array(
			'var' => 'imageUrl'
			),
			3 => array(
			'var' => 'opacity'
			),
			4 => array(
			'var' => 'asynchronization'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['facesetKey'])){
				
				$this->facesetKey = $vals['facesetKey'];
			}
			
			
			if (isset($vals['imageUrl'])){
				
				$this->imageUrl = $vals['imageUrl'];
			}
			
			
			if (isset($vals['opacity'])){
				
				$this->opacity = $vals['opacity'];
			}
			
			
			if (isset($vals['asynchronization'])){
				
				$this->asynchronization = $vals['asynchronization'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SearchWithFeaturesParamModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("facesetKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->facesetKey);
				
			}
			
			
			
			
			if ("imageUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageUrl);
				
			}
			
			
			
			
			if ("opacity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->opacity); 
				
			}
			
			
			
			
			if ("asynchronization" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->asynchronization); 
				
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
		
		$xfer += $output->writeFieldBegin('facesetKey');
		$xfer += $output->writeString($this->facesetKey);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('imageUrl');
		$xfer += $output->writeString($this->imageUrl);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->opacity !== null) {
			
			$xfer += $output->writeFieldBegin('opacity');
			$xfer += $output->writeI32($this->opacity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asynchronization !== null) {
			
			$xfer += $output->writeFieldBegin('asynchronization');
			$xfer += $output->writeByte($this->asynchronization);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>