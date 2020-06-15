<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\account;

class EnterpriseAccountUpdateRequest {
	
	static $_TSPEC;
	public $enterprise_code = null;
	public $enterprise_employee_no = null;
	public $phone_no = null;
	public $account_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'enterprise_code'
			),
			2 => array(
			'var' => 'enterprise_employee_no'
			),
			3 => array(
			'var' => 'phone_no'
			),
			4 => array(
			'var' => 'account_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['enterprise_code'])){
				
				$this->enterprise_code = $vals['enterprise_code'];
			}
			
			
			if (isset($vals['enterprise_employee_no'])){
				
				$this->enterprise_employee_no = $vals['enterprise_employee_no'];
			}
			
			
			if (isset($vals['phone_no'])){
				
				$this->phone_no = $vals['phone_no'];
			}
			
			
			if (isset($vals['account_type'])){
				
				$this->account_type = $vals['account_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EnterpriseAccountUpdateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("enterprise_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterprise_code);
				
			}
			
			
			
			
			if ("enterprise_employee_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enterprise_employee_no);
				
			}
			
			
			
			
			if ("phone_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone_no);
				
			}
			
			
			
			
			if ("account_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->account_type); 
				
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
		
		$xfer += $output->writeFieldBegin('enterprise_code');
		$xfer += $output->writeString($this->enterprise_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('enterprise_employee_no');
		$xfer += $output->writeString($this->enterprise_employee_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('phone_no');
		$xfer += $output->writeString($this->phone_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('account_type');
		$xfer += $output->writeI32($this->account_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>