<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipUserHealthResp {
	
	static $_TSPEC;
	public $highRiskSVIP = null;
	public $hasHealthScore = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'highRiskSVIP'
			),
			2 => array(
			'var' => 'hasHealthScore'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['highRiskSVIP'])){
				
				$this->highRiskSVIP = $vals['highRiskSVIP'];
			}
			
			
			if (isset($vals['hasHealthScore'])){
				
				$this->hasHealthScore = $vals['hasHealthScore'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipUserHealthResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("highRiskSVIP" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->highRiskSVIP);
				
			}
			
			
			
			
			if ("hasHealthScore" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasHealthScore);
				
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
		
		$xfer += $output->writeFieldBegin('highRiskSVIP');
		$xfer += $output->writeBool($this->highRiskSVIP);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hasHealthScore');
		$xfer += $output->writeBool($this->hasHealthScore);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>