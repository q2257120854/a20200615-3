<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class StatPoCommonStruct {
	
	static $_TSPEC;
	public $purchaseQuantity = null;
	public $avgAmount = null;
	public $totalAmount = null;
	public $discount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			97 => array(
			'var' => 'purchaseQuantity'
			),
			98 => array(
			'var' => 'avgAmount'
			),
			99 => array(
			'var' => 'totalAmount'
			),
			100 => array(
			'var' => 'discount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseQuantity'])){
				
				$this->purchaseQuantity = $vals['purchaseQuantity'];
			}
			
			
			if (isset($vals['avgAmount'])){
				
				$this->avgAmount = $vals['avgAmount'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'StatPoCommonStruct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchaseQuantity); 
				
			}
			
			
			
			
			if ("avgAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->avgAmount);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount);
				
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
		
		$xfer += $output->writeFieldBegin('purchaseQuantity');
		$xfer += $output->writeI32($this->purchaseQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('avgAmount');
		$xfer += $output->writeDouble($this->avgAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('totalAmount');
		$xfer += $output->writeDouble($this->totalAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('discount');
		$xfer += $output->writeDouble($this->discount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>