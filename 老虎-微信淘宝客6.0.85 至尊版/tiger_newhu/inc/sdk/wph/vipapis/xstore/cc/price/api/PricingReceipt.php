<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\price\api;

class PricingReceipt {
	
	static $_TSPEC;
	public $company_code = null;
	public $pricing_no = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'company_code'
			),
			2 => array(
			'var' => 'pricing_no'
			),
			3 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['pricing_no'])){
				
				$this->pricing_no = $vals['pricing_no'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PricingReceipt';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("pricing_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pricing_no);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
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
		
		if($this->company_code !== null) {
			
			$xfer += $output->writeFieldBegin('company_code');
			$xfer += $output->writeString($this->company_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pricing_no !== null) {
			
			$xfer += $output->writeFieldBegin('pricing_no');
			$xfer += $output->writeString($this->pricing_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>