<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\product\pool\service;

class ProdValidateReqDTO {
	
	static $_TSPEC;
	public $companyCode = null;
	public $businessType = null;
	public $verificationItems = null;
	public $isQuota = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'companyCode'
			),
			2 => array(
			'var' => 'businessType'
			),
			3 => array(
			'var' => 'verificationItems'
			),
			4 => array(
			'var' => 'isQuota'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['verificationItems'])){
				
				$this->verificationItems = $vals['verificationItems'];
			}
			
			
			if (isset($vals['isQuota'])){
				
				$this->isQuota = $vals['isQuota'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProdValidateReqDTO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->businessType); 
				
			}
			
			
			
			
			if ("verificationItems" == $schemeField){
				
				$needSkip = false;
				
				$this->verificationItems = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\cc\product\pool\service\VerificationItem();
						$elem0->read($input);
						
						$this->verificationItems[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isQuota" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isQuota); 
				
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
		
		$xfer += $output->writeFieldBegin('companyCode');
		$xfer += $output->writeString($this->companyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('businessType');
		$xfer += $output->writeI32($this->businessType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('verificationItems');
		
		if (!is_array($this->verificationItems)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->verificationItems as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isQuota !== null) {
			
			$xfer += $output->writeFieldBegin('isQuota');
			$xfer += $output->writeByte($this->isQuota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>