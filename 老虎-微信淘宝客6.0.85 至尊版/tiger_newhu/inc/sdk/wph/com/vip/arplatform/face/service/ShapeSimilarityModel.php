<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class ShapeSimilarityModel {
	
	static $_TSPEC;
	public $imgSrc = null;
	public $imgTarget = null;
	public $imgTargetOut = null;
	public $code = null;
	public $simScores = null;
	public $message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'imgSrc'
			),
			2 => array(
			'var' => 'imgTarget'
			),
			3 => array(
			'var' => 'imgTargetOut'
			),
			4 => array(
			'var' => 'code'
			),
			5 => array(
			'var' => 'simScores'
			),
			6 => array(
			'var' => 'message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['imgSrc'])){
				
				$this->imgSrc = $vals['imgSrc'];
			}
			
			
			if (isset($vals['imgTarget'])){
				
				$this->imgTarget = $vals['imgTarget'];
			}
			
			
			if (isset($vals['imgTargetOut'])){
				
				$this->imgTargetOut = $vals['imgTargetOut'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['simScores'])){
				
				$this->simScores = $vals['simScores'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShapeSimilarityModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("imgSrc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgSrc);
				
			}
			
			
			
			
			if ("imgTarget" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgTarget);
				
			}
			
			
			
			
			if ("imgTargetOut" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgTargetOut);
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("simScores" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->simScores);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
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
		
		if($this->imgSrc !== null) {
			
			$xfer += $output->writeFieldBegin('imgSrc');
			$xfer += $output->writeString($this->imgSrc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgTarget !== null) {
			
			$xfer += $output->writeFieldBegin('imgTarget');
			$xfer += $output->writeString($this->imgTarget);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgTargetOut !== null) {
			
			$xfer += $output->writeFieldBegin('imgTargetOut');
			$xfer += $output->writeString($this->imgTargetOut);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('simScores');
		$xfer += $output->writeDouble($this->simScores);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>