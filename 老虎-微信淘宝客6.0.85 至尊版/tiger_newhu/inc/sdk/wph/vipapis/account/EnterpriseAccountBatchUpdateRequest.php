<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\account;

class EnterpriseAccountBatchUpdateRequest {
	
	static $_TSPEC;
	public $enterprise_code = null;
	public $apply_employees = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'enterprise_code'
			),
			2 => array(
			'var' => 'apply_employees'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['enterprise_code'])){
				
				$this->enterprise_code = $vals['enterprise_code'];
			}
			
			
			if (isset($vals['apply_employees'])){
				
				$this->apply_employees = $vals['apply_employees'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EnterpriseAccountBatchUpdateRequest';
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
			
			
			
			
			if ("apply_employees" == $schemeField){
				
				$needSkip = false;
				
				$this->apply_employees = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\account\EnterpriseEmployeeApplyInfo();
						$elem0->read($input);
						
						$this->apply_employees[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('apply_employees');
		
		if (!is_array($this->apply_employees)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->apply_employees as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>