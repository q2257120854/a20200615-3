<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\price;

class UpdatePriceApplicationDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $osn = null;
	public $po_no = null;
	public $sale_price = null;
	public $market_price = null;
	public $bill_tax_price = null;
	public $withdraw = null;
	public $extra_discount_type = null;
	public $exception_remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'osn'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'sale_price'
			),
			5 => array(
			'var' => 'market_price'
			),
			6 => array(
			'var' => 'bill_tax_price'
			),
			7 => array(
			'var' => 'withdraw'
			),
			8 => array(
			'var' => 'extra_discount_type'
			),
			9 => array(
			'var' => 'exception_remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['osn'])){
				
				$this->osn = $vals['osn'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['sale_price'])){
				
				$this->sale_price = $vals['sale_price'];
			}
			
			
			if (isset($vals['market_price'])){
				
				$this->market_price = $vals['market_price'];
			}
			
			
			if (isset($vals['bill_tax_price'])){
				
				$this->bill_tax_price = $vals['bill_tax_price'];
			}
			
			
			if (isset($vals['withdraw'])){
				
				$this->withdraw = $vals['withdraw'];
			}
			
			
			if (isset($vals['extra_discount_type'])){
				
				$this->extra_discount_type = $vals['extra_discount_type'];
			}
			
			
			if (isset($vals['exception_remark'])){
				
				$this->exception_remark = $vals['exception_remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdatePriceApplicationDetail';
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
			
			
			
			
			if ("osn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->osn);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sale_price);
				
			}
			
			
			
			
			if ("market_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->market_price);
				
			}
			
			
			
			
			if ("bill_tax_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->bill_tax_price);
				
			}
			
			
			
			
			if ("withdraw" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->withdraw);
				
			}
			
			
			
			
			if ("extra_discount_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extra_discount_type);
				
			}
			
			
			
			
			if ("exception_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exception_remark);
				
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
		
		if($this->osn !== null) {
			
			$xfer += $output->writeFieldBegin('osn');
			$xfer += $output->writeString($this->osn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('sale_price');
			$xfer += $output->writeDouble($this->sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->market_price !== null) {
			
			$xfer += $output->writeFieldBegin('market_price');
			$xfer += $output->writeDouble($this->market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bill_tax_price !== null) {
			
			$xfer += $output->writeFieldBegin('bill_tax_price');
			$xfer += $output->writeDouble($this->bill_tax_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->withdraw !== null) {
			
			$xfer += $output->writeFieldBegin('withdraw');
			$xfer += $output->writeString($this->withdraw);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extra_discount_type !== null) {
			
			$xfer += $output->writeFieldBegin('extra_discount_type');
			$xfer += $output->writeString($this->extra_discount_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exception_remark !== null) {
			
			$xfer += $output->writeFieldBegin('exception_remark');
			$xfer += $output->writeString($this->exception_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>