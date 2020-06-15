<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\price;

class PriceApplicationStatus {
	
	static $_TSPEC;
	public $application_id = null;
	public $status = null;
	public $exception_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'application_id'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'exception_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['application_id'])){
				
				$this->application_id = $vals['application_id'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['exception_status'])){
				
				$this->exception_status = $vals['exception_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PriceApplicationStatus';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("application_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->application_id);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("exception_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exception_status);
				
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
		
		if($this->application_id !== null) {
			
			$xfer += $output->writeFieldBegin('application_id');
			$xfer += $output->writeString($this->application_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exception_status !== null) {
			
			$xfer += $output->writeFieldBegin('exception_status');
			$xfer += $output->writeString($this->exception_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>