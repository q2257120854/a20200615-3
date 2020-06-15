<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\price;

class SubmitPriceApplicationDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $sale_price = null;
	public $market_price = null;
	public $gross_margin = null;
	public $bill_tax_price = null;
	public $bill_currency = null;
	public $extra_discount_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'sale_price'
			),
			3 => array(
			'var' => 'market_price'
			),
			4 => array(
			'var' => 'gross_margin'
			),
			5 => array(
			'var' => 'bill_tax_price'
			),
			6 => array(
			'var' => 'bill_currency'
			),
			7 => array(
			'var' => 'extra_discount_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['sale_price'])){
				
				$this->sale_price = $vals['sale_price'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['gross_margin'])){
				
				$this->gross_margin = $vals['gross_margin'];
			}
			
			
			if (isset($vals['bill_tax_price'])){
				
				$this->bill_tax_price = $vals['bill_tax_price'];
			}
			
			
			if (isset($vals['bill_currency'])){
				
				$this->bill_currency = $vals['bill_currency'];
			}
			
			
			if (isset($vals['extra_discount_type'])){
				
				$this->extra_discount_type = $vals['extra_discount_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitPriceApplicationDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sale_price);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->market_price);
				
			}
			
			
			
			
			if ("gross_margin" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->gross_margin);
				
			}
			
			
			
			
			if ("bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_tax_price);
				
			}
			
			
			
			
			if ("bill_currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_currency);
				
			}
			
			
			
			
			if ("extra_discount_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->extra_discount_type); 
				
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_price');
		$xfer += $output->writeDouble($this->sale_price);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeDouble($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gross_margin !== null) {
			
			$xfer += $output->writeFieldBegin('gross_margin');
			$xfer += $output->writeDouble($this->gross_margin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_tax_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_tax_price');
			$xfer += $output->writeDouble($this->bill_tax_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_currency !== null) {
			
			$xfer += $output->writeFieldBegin('bill_currency');
			$xfer += $output->writeString($this->bill_currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extra_discount_type !== null) {
			
			$xfer += $output->writeFieldBegin('extra_discount_type');
			$xfer += $output->writeByte($this->extra_discount_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>