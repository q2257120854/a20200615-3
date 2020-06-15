<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class SkuPrice {
	
	static $_TSPEC;
	public $partnerId = null;
	public $barcode = null;
	public $marketPrice = null;
	public $foorPrice = null;
	public $retailPrice = null;
	public $specialFrom = null;
	public $specialTo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'marketPrice'
			),
			4 => array(
			'var' => 'foorPrice'
			),
			5 => array(
			'var' => 'retailPrice'
			),
			6 => array(
			'var' => 'specialFrom'
			),
			7 => array(
			'var' => 'specialTo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['foorPrice'])){
				
				$this->foorPrice = $vals['foorPrice'];
			}
			
			
			if (isset($vals['retailPrice'])){
				
				$this->retailPrice = $vals['retailPrice'];
			}
			
			
			if (isset($vals['specialFrom'])){
				
				$this->specialFrom = $vals['specialFrom'];
			}
			
			
			if (isset($vals['specialTo'])){
				
				$this->specialTo = $vals['specialTo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuPrice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->partnerId);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->marketPrice);
				
			}
			
			
			
			
			if ("foorPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->foorPrice);
				
			}
			
			
			
			
			if ("retailPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->retailPrice);
				
			}
			
			
			
			
			if ("specialFrom" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->specialFrom);
				
			}
			
			
			
			
			if ("specialTo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->specialTo);
				
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
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeString($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeDouble($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foorPrice !== null) {
			
			$xfer += $output->writeFieldBegin('foorPrice');
			$xfer += $output->writeDouble($this->foorPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retailPrice !== null) {
			
			$xfer += $output->writeFieldBegin('retailPrice');
			$xfer += $output->writeDouble($this->retailPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialFrom !== null) {
			
			$xfer += $output->writeFieldBegin('specialFrom');
			$xfer += $output->writeI64($this->specialFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialTo !== null) {
			
			$xfer += $output->writeFieldBegin('specialTo');
			$xfer += $output->writeI64($this->specialTo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>