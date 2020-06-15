<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;

class CrCbModel {
	
	static $_TSPEC;
	public $cr = null;
	public $cb = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cr'
			),
			2 => array(
			'var' => 'cb'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cr'])){
				
				$this->cr = $vals['cr'];
			}
			
			
			if (isset($vals['cb'])){
				
				$this->cb = $vals['cb'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CrCbModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cr" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cr); 
				
			}
			
			
			
			
			if ("cb" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cb); 
				
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>