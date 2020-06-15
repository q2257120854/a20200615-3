<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class CancelSubmissionResult {
	
	static $_TSPEC;
	public $vendorProductSN = null;
	public $is_success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorProductSN'
			),
			2 => array(
			'var' => 'is_success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorProductSN'])){
				
				$this->vendorProductSN = $vals['vendorProductSN'];
			}
			
			
			if (isset($vals['is_success'])){
				
				$this->is_success = $vals['is_success'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelSubmissionResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorProductSN" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorProductSN = new \vipapis\product\VendorProductSN();
				$this->vendorProductSN->read($input);
				
			}
			
			
			
			
			if ("is_success" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_success);
				
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
		
		if($this->vendorProductSN !== null) {
			
			$xfer += $output->writeFieldBegin('vendorProductSN');
			
			if (!is_object($this->vendorProductSN)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->vendorProductSN->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_success !== null) {
			
			$xfer += $output->writeFieldBegin('is_success');
			$xfer += $output->writeBool($this->is_success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>