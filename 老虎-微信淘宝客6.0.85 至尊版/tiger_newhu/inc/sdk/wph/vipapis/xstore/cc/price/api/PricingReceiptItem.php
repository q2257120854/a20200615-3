<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\price\api;

class PricingReceiptItem {
	
	static $_TSPEC;
	public $company_code = null;
	public $barcode = null;
	public $suggestion_retail_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'company_code'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'suggestion_retail_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['suggestion_retail_price'])){
				
				$this->suggestion_retail_price = $vals['suggestion_retail_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PricingReceiptItem';
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
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("suggestion_retail_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestion_retail_price);
				
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
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestion_retail_price !== null) {
			
			$xfer += $output->writeFieldBegin('suggestion_retail_price');
			$xfer += $output->writeString($this->suggestion_retail_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>