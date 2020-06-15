<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\account;

class EnterpriseAccountResponse {
	
	static $_TSPEC;
	public $total_count = null;
	public $total_page = null;
	public $enterpriseAccounts = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'total_count'
			),
			2 => array(
			'var' => 'total_page'
			),
			3 => array(
			'var' => 'enterpriseAccounts'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['total_count'])){
				
				$this->total_count = $vals['total_count'];
			}
			
			
			if (isset($vals['total_page'])){
				
				$this->total_page = $vals['total_page'];
			}
			
			
			if (isset($vals['enterpriseAccounts'])){
				
				$this->enterpriseAccounts = $vals['enterpriseAccounts'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EnterpriseAccountResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("total_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_count); 
				
			}
			
			
			
			
			if ("total_page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_page); 
				
			}
			
			
			
			
			if ("enterpriseAccounts" == $schemeField){
				
				$needSkip = false;
				
				$this->enterpriseAccounts = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\account\EnterpriseAccountResult();
						$elem0->read($input);
						
						$this->enterpriseAccounts[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('total_count');
		$xfer += $output->writeI32($this->total_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_page');
		$xfer += $output->writeI32($this->total_page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('enterpriseAccounts');
		
		if (!is_array($this->enterpriseAccounts)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->enterpriseAccounts as $iter0){
			
			
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