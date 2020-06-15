<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;

class GrossProfitRateLadder {
	
	static $_TSPEC;
	public $startDiscount = null;
	public $endDiscount = null;
	public $point = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'startDiscount'
			),
			2 => array(
			'var' => 'endDiscount'
			),
			3 => array(
			'var' => 'point'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['startDiscount'])){
				
				$this->startDiscount = $vals['startDiscount'];
			}
			
			
			if (isset($vals['endDiscount'])){
				
				$this->endDiscount = $vals['endDiscount'];
			}
			
			
			if (isset($vals['point'])){
				
				$this->point = $vals['point'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GrossProfitRateLadder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("startDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->startDiscount);
				
			}
			
			
			
			
			if ("endDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->endDiscount);
				
			}
			
			
			
			
			if ("point" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->point);
				
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
		
		if($this->startDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('startDiscount');
			$xfer += $output->writeDouble($this->startDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('endDiscount');
			$xfer += $output->writeDouble($this->endDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->point !== null) {
			
			$xfer += $output->writeFieldBegin('point');
			$xfer += $output->writeDouble($this->point);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>