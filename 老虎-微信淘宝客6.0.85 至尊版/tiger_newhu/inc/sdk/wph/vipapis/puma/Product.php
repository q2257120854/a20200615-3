<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class Product {
	
	static $_TSPEC;
	public $stock = null;
	public $cps = null;
	public $price = null;
	public $merchandise = null;
	public $vendor_product = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'stock'
			),
			2 => array(
			'var' => 'cps'
			),
			3 => array(
			'var' => 'price'
			),
			4 => array(
			'var' => 'merchandise'
			),
			5 => array(
			'var' => 'vendor_product'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['stock'])){
				
				$this->stock = $vals['stock'];
			}
			
			
			if (isset($vals['cps'])){
				
				$this->cps = $vals['cps'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['merchandise'])){
				
				$this->merchandise = $vals['merchandise'];
			}
			
			
			if (isset($vals['vendor_product'])){
				
				$this->vendor_product = $vals['vendor_product'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Product';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("stock" == $schemeField){
				
				$needSkip = false;
				
				$this->stock = new \vipapis\puma\Stock();
				$this->stock->read($input);
				
			}
			
			
			
			
			if ("cps" == $schemeField){
				
				$needSkip = false;
				
				$this->cps = new \vipapis\puma\Cps();
				$this->cps->read($input);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				
				$this->price = new \vipapis\puma\Price();
				$this->price->read($input);
				
			}
			
			
			
			
			if ("merchandise" == $schemeField){
				
				$needSkip = false;
				
				$this->merchandise = new \vipapis\puma\Merchandise();
				$this->merchandise->read($input);
				
			}
			
			
			
			
			if ("vendor_product" == $schemeField){
				
				$needSkip = false;
				
				$this->vendor_product = new \vipapis\puma\VendorProduct();
				$this->vendor_product->read($input);
				
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
		
		if($this->stock !== null) {
			
			$xfer += $output->writeFieldBegin('stock');
			
			if (!is_object($this->stock)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->stock->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cps !== null) {
			
			$xfer += $output->writeFieldBegin('cps');
			
			if (!is_object($this->cps)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->cps->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			
			if (!is_object($this->price)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->price->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandise !== null) {
			
			$xfer += $output->writeFieldBegin('merchandise');
			
			if (!is_object($this->merchandise)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->merchandise->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_product !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_product');
			
			if (!is_object($this->vendor_product)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->vendor_product->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>