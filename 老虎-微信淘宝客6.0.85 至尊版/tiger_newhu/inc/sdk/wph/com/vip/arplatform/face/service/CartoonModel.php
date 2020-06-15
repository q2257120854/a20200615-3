<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class CartoonModel {
	
	static $_TSPEC;
	public $imageInPath = null;
	public $imageOutPath = null;
	public $faceUrl = null;
	public $faceLessUrl = null;
	public $cr = null;
	public $cb = null;
	public $point = null;
	
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
			'var' => 'faceUrl'
			),
			4 => array(
			'var' => 'faceLessUrl'
			),
			5 => array(
			'var' => 'cr'
			),
			6 => array(
			'var' => 'cb'
			),
			7 => array(
			'var' => 'point'
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
			
			
			if (isset($vals['faceUrl'])){
				
				$this->faceUrl = $vals['faceUrl'];
			}
			
			
			if (isset($vals['faceLessUrl'])){
				
				$this->faceLessUrl = $vals['faceLessUrl'];
			}
			
			
			if (isset($vals['cr'])){
				
				$this->cr = $vals['cr'];
			}
			
			
			if (isset($vals['cb'])){
				
				$this->cb = $vals['cb'];
			}
			
			
			if (isset($vals['point'])){
				
				$this->point = $vals['point'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CartoonModel';
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
			
			
			
			
			if ("faceUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->faceUrl);
				
			}
			
			
			
			
			if ("faceLessUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->faceLessUrl);
				
			}
			
			
			
			
			if ("cr" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cr); 
				
			}
			
			
			
			
			if ("cb" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cb); 
				
			}
			
			
			
			
			if ("point" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->point);
				
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
		
		
		if($this->faceUrl !== null) {
			
			$xfer += $output->writeFieldBegin('faceUrl');
			$xfer += $output->writeString($this->faceUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->faceLessUrl !== null) {
			
			$xfer += $output->writeFieldBegin('faceLessUrl');
			$xfer += $output->writeString($this->faceLessUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cr !== null) {
			
			$xfer += $output->writeFieldBegin('cr');
			$xfer += $output->writeI32($this->cr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cb !== null) {
			
			$xfer += $output->writeFieldBegin('cb');
			$xfer += $output->writeI32($this->cb);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->point !== null) {
			
			$xfer += $output->writeFieldBegin('point');
			$xfer += $output->writeString($this->point);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>