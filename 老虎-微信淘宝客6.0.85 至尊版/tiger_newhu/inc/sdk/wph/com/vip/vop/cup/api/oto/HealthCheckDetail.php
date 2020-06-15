<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\oto;

class HealthCheckDetail {
	
	static $_TSPEC;
	public $id = null;
	public $health_check_class = null;
	public $health_check_detail = null;
	public $org_health_check_detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'health_check_class'
			),
			3 => array(
			'var' => 'health_check_detail'
			),
			4 => array(
			'var' => 'org_health_check_detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['health_check_class'])){
				
				$this->health_check_class = $vals['health_check_class'];
			}
			
			
			if (isset($vals['health_check_detail'])){
				
				$this->health_check_detail = $vals['health_check_detail'];
			}
			
			
			if (isset($vals['org_health_check_detail'])){
				
				$this->org_health_check_detail = $vals['org_health_check_detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HealthCheckDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->id); 
				
			}
			
			
			
			
			if ("health_check_class" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->health_check_class);
				
			}
			
			
			
			
			if ("health_check_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->health_check_detail);
				
			}
			
			
			
			
			if ("org_health_check_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->org_health_check_detail);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI32($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->health_check_class !== null) {
			
			$xfer += $output->writeFieldBegin('health_check_class');
			$xfer += $output->writeString($this->health_check_class);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->health_check_detail !== null) {
			
			$xfer += $output->writeFieldBegin('health_check_detail');
			$xfer += $output->writeString($this->health_check_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->org_health_check_detail !== null) {
			
			$xfer += $output->writeFieldBegin('org_health_check_detail');
			$xfer += $output->writeString($this->org_health_check_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>