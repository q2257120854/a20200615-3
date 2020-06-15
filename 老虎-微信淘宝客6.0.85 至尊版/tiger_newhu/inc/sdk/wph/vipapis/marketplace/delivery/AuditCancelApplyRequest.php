<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class AuditCancelApplyRequest {
	
	static $_TSPEC;
	public $apply_sn = null;
	public $audit_status = null;
	public $opinion = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apply_sn'
			),
			2 => array(
			'var' => 'audit_status'
			),
			3 => array(
			'var' => 'opinion'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apply_sn'])){
				
				$this->apply_sn = $vals['apply_sn'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
			if (isset($vals['opinion'])){
				
				$this->opinion = $vals['opinion'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AuditCancelApplyRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("apply_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_sn);
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->audit_status); 
				
			}
			
			
			
			
			if ("opinion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opinion);
				
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
		
		$xfer += $output->writeFieldBegin('apply_sn');
		$xfer += $output->writeString($this->apply_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('audit_status');
		$xfer += $output->writeI32($this->audit_status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->opinion !== null) {
			
			$xfer += $output->writeFieldBegin('opinion');
			$xfer += $output->writeString($this->opinion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>