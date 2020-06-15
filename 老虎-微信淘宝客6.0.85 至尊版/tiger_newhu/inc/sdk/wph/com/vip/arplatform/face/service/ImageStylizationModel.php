<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class ImageStylizationModel {
	
	static $_TSPEC;
	public $imageInPath = null;
	public $imageOutPath = null;
	public $type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'imageInPath'
			),
			2 => array(
			'var' => 'imageOutPath'
			),
			3 => array(
			'var' => 'type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['imageInPath'])){
				
				$this->imageInPath = $vals['imageInPath'];
			}
			
			
			if (isset($vals['imageOutPath'])){
				
				$this->imageOutPath = $vals['imageOutPath'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ImageStylizationModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("imageInPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageInPath);
				
			}
			
			
			
			
			if ("imageOutPath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageOutPath);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
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
		
		if($this->imageInPath !== null) {
			
			$xfer += $output->writeFieldBegin('imageInPath');
			$xfer += $output->writeString($this->imageInPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageOutPath !== null) {
			
			$xfer += $output->writeFieldBegin('imageOutPath');
			$xfer += $output->writeString($this->imageOutPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>