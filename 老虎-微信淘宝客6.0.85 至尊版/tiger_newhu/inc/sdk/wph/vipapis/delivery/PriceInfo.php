<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class PriceInfo {
	
	static $_TSPEC;
	public $barcode = null;
	public $actual_market_price = null;
	public $actual_unit_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'actual_market_price'
			),
			3 => array(
			'var' => 'actual_unit_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['actual_market_price'])){
				
				$this->actual_market_price = $vals['actual_market_price'];
			}
			
			
			if (isset($vals['actual_unit_price'])){
				
				$this->actual_unit_price = $vals['actual_unit_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PriceInfo';
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
			
			
			
			
			if ("actual_market_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_market_price);
				
			}
			
			
			
			
			if ("actual_unit_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actual_unit_price);
				
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
		
		if($this->actual_market_price !== null) {
			
			$xfer += $output->writeFieldBegin('actual_market_price');
			$xfer += $output->writeString($this->actual_market_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('actual_unit_price');
		$xfer += $output->writeString($this->actual_unit_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>