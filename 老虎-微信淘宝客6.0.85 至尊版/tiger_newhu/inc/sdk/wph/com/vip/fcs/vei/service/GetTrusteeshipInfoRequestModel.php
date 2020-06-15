<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class GetTrusteeshipInfoRequestModel {
	
	static $_TSPEC;
	public $storeSource = null;
	public $storeId = null;
	public $taxRegisterNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storeSource'
			),
			2 => array(
			'var' => 'storeId'
			),
			3 => array(
			'var' => 'taxRegisterNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storeSource'])){
				
				$this->storeSource = $vals['storeSource'];
			}
			
			
			if (isset($vals['storeId'])){
				
				$this->storeId = $vals['storeId'];
			}
			
			
			if (isset($vals['taxRegisterNo'])){
				
				$this->taxRegisterNo = $vals['taxRegisterNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetTrusteeshipInfoRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storeSource" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->storeSource); 
				
			}
			
			
			
			
			if ("storeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeId);
				
			}
			
			
			
			
			if ("taxRegisterNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRegisterNo);
				
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
		
		$xfer += $output->writeFieldBegin('storeSource');
		$xfer += $output->writeByte($this->storeSource);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeId');
		$xfer += $output->writeString($this->storeId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->taxRegisterNo !== null) {
			
			$xfer += $output->writeFieldBegin('taxRegisterNo');
			$xfer += $output->writeString($this->taxRegisterNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>