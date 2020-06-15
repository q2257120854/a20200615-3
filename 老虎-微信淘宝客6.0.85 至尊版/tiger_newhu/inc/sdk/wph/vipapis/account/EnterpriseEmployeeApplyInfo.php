<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\account;

class EnterpriseEmployeeApplyInfo {
	
	static $_TSPEC;
	public $enterprise_employee_no = null;
	public $phone_no = null;
	public $account_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'enterprise_employee_no'
			),
			2 => array(
			'var' => 'phone_no'
			),
			3 => array(
			'var' => 'account_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
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
		
		return 'EnterpriseEmployeeApplyInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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