<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\closePo\service;

class ItemReceiveInfo {
	
	static $_TSPEC;
	public $itemBarCode = null;
	public $recAmount = null;
	public $purchaseAmount = null;
	public $brandSn = null;
	public $cat3Code = null;
	public $buyerGroupCode = null;
	public $priceWithTax = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'itemBarCode'
			),
			2 => array(
			'var' => 'recAmount'
			),
			3 => array(
			'var' => 'purchaseAmount'
			),
			4 => array(
			'var' => 'brandSn'
			),
			5 => array(
			'var' => 'cat3Code'
			),
			6 => array(
			'var' => 'buyerGroupCode'
			),
			7 => array(
			'var' => 'priceWithTax'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['itemBarCode'])){
				
				$this->itemBarCode = $vals['itemBarCode'];
			}
			
			
			if (isset($vals['recAmount'])){
				
				$this->recAmount = $vals['recAmount'];
			}
			
			
			if (isset($vals['purchaseAmount'])){
				
				$this->purchaseAmount = $vals['purchaseAmount'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['cat3Code'])){
				
				$this->cat3Code = $vals['cat3Code'];
			}
			
			
			if (isset($vals['buyerGroupCode'])){
				
				$this->buyerGroupCode = $vals['buyerGroupCode'];
			}
			
			
			if (isset($vals['priceWithTax'])){
				
				$this->priceWithTax = $vals['priceWithTax'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ItemReceiveInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("itemBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemBarCode);
				
			}
			
			
			
			
			if ("recAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->recAmount); 
				
			}
			
			
			
			
			if ("purchaseAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchaseAmount); 
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("cat3Code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cat3Code); 
				
			}
			
			
			
			
			if ("buyerGroupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerGroupCode);
				
			}
			
			
			
			
			if ("priceWithTax" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->priceWithTax);
				
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
		
		if($this->itemBarCode !== null) {
			
			$xfer += $output->writeFieldBegin('itemBarCode');
			$xfer += $output->writeString($this->itemBarCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recAmount !== null) {
			
			$xfer += $output->writeFieldBegin('recAmount');
			$xfer += $output->writeI32($this->recAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseAmount !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseAmount');
			$xfer += $output->writeI32($this->purchaseAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cat3Code !== null) {
			
			$xfer += $output->writeFieldBegin('cat3Code');
			$xfer += $output->writeI32($this->cat3Code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerGroupCode !== null) {
			
			$xfer += $output->writeFieldBegin('buyerGroupCode');
			$xfer += $output->writeString($this->buyerGroupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceWithTax !== null) {
			
			$xfer += $output->writeFieldBegin('priceWithTax');
			$xfer += $output->writeDouble($this->priceWithTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>