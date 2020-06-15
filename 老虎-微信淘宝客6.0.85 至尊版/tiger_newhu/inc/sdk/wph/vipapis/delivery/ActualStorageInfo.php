<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class ActualStorageInfo {
	
	static $_TSPEC;
	public $barcode = null;
	public $po_no = null;
	public $amount = null;
	public $actual_amount = null;
	public $return_amount = null;
	public $differ_amount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'amount'
			),
			4 => array(
			'var' => 'actual_amount'
			),
			5 => array(
			'var' => 'return_amount'
			),
			6 => array(
			'var' => 'differ_amount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['actual_amount'])){
				
				$this->actual_amount = $vals['actual_amount'];
			}
			
			
			if (isset($vals['return_amount'])){
				
				$this->return_amount = $vals['return_amount'];
			}
			
			
			if (isset($vals['differ_amount'])){
				
				$this->differ_amount = $vals['differ_amount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActualStorageInfo';
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
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->amount); 
				
			}
			
			
			
			
			if ("actual_amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actual_amount); 
				
			}
			
			
			
			
			if ("return_amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_amount); 
				
			}
			
			
			
			
			if ("differ_amount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->differ_amount); 
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI32($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_amount !== null) {
			
			$xfer += $output->writeFieldBegin('actual_amount');
			$xfer += $output->writeI32($this->actual_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_amount !== null) {
			
			$xfer += $output->writeFieldBegin('return_amount');
			$xfer += $output->writeI32($this->return_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->differ_amount !== null) {
			
			$xfer += $output->writeFieldBegin('differ_amount');
			$xfer += $output->writeI32($this->differ_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>