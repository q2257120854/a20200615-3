<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class NumberRange {
	
	static $_TSPEC;
	public $min_num = null;
	public $max_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'min_num'
			),
			2 => array(
			'var' => 'max_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['min_num'])){
				
				$this->min_num = $vals['min_num'];
			}
			
			
			if (isset($vals['max_num'])){
				
				$this->max_num = $vals['max_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'NumberRange';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("min_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->min_num); 
				
			}
			
			
			
			
			if ("max_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->max_num); 
				
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
		
		if($this->min_num !== null) {
			
			$xfer += $output->writeFieldBegin('min_num');
			$xfer += $output->writeI32($this->min_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->max_num !== null) {
			
			$xfer += $output->writeFieldBegin('max_num');
			$xfer += $output->writeI32($this->max_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>