<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\price;

class PriceApplicationDetail {
	
	static $_TSPEC;
	public $application_id = null;
	public $barcode = null;
	public $sale_price = null;
	public $market_price = null;
	public $gross_margin = null;
	public $bill_tax_price = null;
	public $bill_currency = null;
	public $extra_discount_type = null;
	public $original_sale_price = null;
	public $osn = null;
	public $sn = null;
	public $withdraw = null;
	public $remark = null;
	public $is_manual = null;
	public $exception_status = null;
	public $exception_description = null;
	public $compareResultList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'application_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'sale_price'
			),
			4 => array(
			'var' => 'market_price'
			),
			5 => array(
			'var' => 'gross_margin'
			),
			6 => array(
			'var' => 'bill_tax_price'
			),
			7 => array(
			'var' => 'bill_currency'
			),
			8 => array(
			'var' => 'extra_discount_type'
			),
			9 => array(
			'var' => 'original_sale_price'
			),
			10 => array(
			'var' => 'osn'
			),
			11 => array(
			'var' => 'sn'
			),
			12 => array(
			'var' => 'withdraw'
			),
			13 => array(
			'var' => 'remark'
			),
			14 => array(
			'var' => 'is_manual'
			),
			15 => array(
			'var' => 'exception_status'
			),
			16 => array(
			'var' => 'exception_description'
			),
			17 => array(
			'var' => 'compareResultList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['application_id'])){
				
				$this->application_id = $vals['application_id'];
			}
			
			
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
			
			
			if (isset($vals['original_sale_price'])){
				
				$this->original_sale_price = $vals['original_sale_price'];
			}
			
			
			if (isset($vals['osn'])){
				
				$this->osn = $vals['osn'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['withdraw'])){
				
				$this->withdraw = $vals['withdraw'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['is_manual'])){
				
				$this->is_manual = $vals['is_manual'];
			}
			
			
			if (isset($vals['exception_status'])){
				
				$this->exception_status = $vals['exception_status'];
			}
			
			
			if (isset($vals['exception_description'])){
				
				$this->exception_description = $vals['exception_description'];
			}
			
			
			if (isset($vals['compareResultList'])){
				
				$this->compareResultList = $vals['compareResultList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PriceApplicationDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("application_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->application_id);
				
			}
			
			
			
			
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
				$input->readString($this->extra_discount_type);
				
			}
			
			
			
			
			if ("original_sale_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->original_sale_price);
				
			}
			
			
			
			
			if ("osn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->osn);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("withdraw" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->withdraw);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("is_manual" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_manual);
				
			}
			
			
			
			
			if ("exception_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exception_status);
				
			}
			
			
			
			
			if ("exception_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exception_description);
				
			}
			
			
			
			
			if ("compareResultList" == $schemeField){
				
				$needSkip = false;
				
				$this->compareResultList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\price\CompareResult();
						$elem0->read($input);
						
						$this->compareResultList[$_size0++] = $elem0;
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
		
		if($this->application_id !== null) {
			
			$xfer += $output->writeFieldBegin('application_id');
			$xfer += $output->writeString($this->application_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
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
			$xfer += $output->writeString($this->extra_discount_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->original_sale_price !== null) {
			
			$xfer += $output->writeFieldBegin('original_sale_price');
			$xfer += $output->writeDouble($this->original_sale_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->osn !== null) {
			
			$xfer += $output->writeFieldBegin('osn');
			$xfer += $output->writeString($this->osn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->withdraw !== null) {
			
			$xfer += $output->writeFieldBegin('withdraw');
			$xfer += $output->writeString($this->withdraw);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_manual !== null) {
			
			$xfer += $output->writeFieldBegin('is_manual');
			$xfer += $output->writeString($this->is_manual);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exception_status !== null) {
			
			$xfer += $output->writeFieldBegin('exception_status');
			$xfer += $output->writeString($this->exception_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exception_description !== null) {
			
			$xfer += $output->writeFieldBegin('exception_description');
			$xfer += $output->writeString($this->exception_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->compareResultList !== null) {
			
			$xfer += $output->writeFieldBegin('compareResultList');
			
			if (!is_array($this->compareResultList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->compareResultList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>