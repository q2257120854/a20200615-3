<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\delivery;

class DefectiveGood {
	
	static $_TSPEC;
	public $poNo = null;
	public $receiptNo = null;
	public $purchaseCaseNo = null;
	public $itemCode = null;
	public $qty = null;
	public $reasonCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNo'
			),
			2 => array(
			'var' => 'receiptNo'
			),
			3 => array(
			'var' => 'purchaseCaseNo'
			),
			4 => array(
			'var' => 'itemCode'
			),
			5 => array(
			'var' => 'qty'
			),
			6 => array(
			'var' => 'reasonCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['receiptNo'])){
				
				$this->receiptNo = $vals['receiptNo'];
			}
			
			
			if (isset($vals['purchaseCaseNo'])){
				
				$this->purchaseCaseNo = $vals['purchaseCaseNo'];
			}
			
			
			if (isset($vals['itemCode'])){
				
				$this->itemCode = $vals['itemCode'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['reasonCode'])){
				
				$this->reasonCode = $vals['reasonCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DefectiveGood';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("receiptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiptNo);
				
			}
			
			
			
			
			if ("purchaseCaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCaseNo);
				
			}
			
			
			
			
			if ("itemCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemCode);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("reasonCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonCode);
				
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
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiptNo !== null) {
			
			$xfer += $output->writeFieldBegin('receiptNo');
			$xfer += $output->writeString($this->receiptNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCaseNo');
			$xfer += $output->writeString($this->purchaseCaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemCode !== null) {
			
			$xfer += $output->writeFieldBegin('itemCode');
			$xfer += $output->writeString($this->itemCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI32($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reasonCode !== null) {
			
			$xfer += $output->writeFieldBegin('reasonCode');
			$xfer += $output->writeString($this->reasonCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>