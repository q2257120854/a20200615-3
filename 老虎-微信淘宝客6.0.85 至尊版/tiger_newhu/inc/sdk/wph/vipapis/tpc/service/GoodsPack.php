<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\tpc\service;

class GoodsPack {
	
	static $_TSPEC;
	public $barcode = null;
	public $goodsName = null;
	public $preAmount = null;
	public $amount = null;
	public $serialNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'goodsName'
			),
			3 => array(
			'var' => 'preAmount'
			),
			4 => array(
			'var' => 'amount'
			),
			5 => array(
			'var' => 'serialNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['preAmount'])){
				
				$this->preAmount = $vals['preAmount'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['serialNum'])){
				
				$this->serialNum = $vals['serialNum'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodsPack';
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
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("preAmount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->preAmount); 
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->amount); 
				
			}
			
			
			
			
			if ("serialNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNum);
				
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
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preAmount !== null) {
			
			$xfer += $output->writeFieldBegin('preAmount');
			$xfer += $output->writeI64($this->preAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeI64($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serialNum !== null) {
			
			$xfer += $output->writeFieldBegin('serialNum');
			$xfer += $output->writeString($this->serialNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>