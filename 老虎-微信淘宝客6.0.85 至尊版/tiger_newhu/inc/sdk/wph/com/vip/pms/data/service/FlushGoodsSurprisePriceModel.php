<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class FlushGoodsSurprisePriceModel {
	
	static $_TSPEC;
	public $mid = null;
	public $activityNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mid'
			),
			2 => array(
			'var' => 'activityNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
			if (isset($vals['activityNo'])){
				
				$this->activityNo = $vals['activityNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FlushGoodsSurprisePriceModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mid);
				
			}
			
			
			
			
			if ("activityNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityNo);
				
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
		
		$xfer += $output->writeFieldBegin('mid');
		$xfer += $output->writeString($this->mid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activityNo');
		$xfer += $output->writeString($this->activityNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>