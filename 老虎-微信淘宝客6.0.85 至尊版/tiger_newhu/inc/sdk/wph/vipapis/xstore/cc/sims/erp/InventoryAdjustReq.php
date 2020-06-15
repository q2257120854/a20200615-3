<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\sims\erp;

class InventoryAdjustReq {
	
	static $_TSPEC;
	public $seqNo = null;
	public $xlsBarcode = null;
	public $storeCode = null;
	public $bizReceiptType = null;
	public $bizReceiptCode = null;
	public $quantity = null;
	public $bizTime = null;
	public $optUser = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seqNo'
			),
			2 => array(
			'var' => 'xlsBarcode'
			),
			3 => array(
			'var' => 'storeCode'
			),
			4 => array(
			'var' => 'bizReceiptType'
			),
			5 => array(
			'var' => 'bizReceiptCode'
			),
			6 => array(
			'var' => 'quantity'
			),
			7 => array(
			'var' => 'bizTime'
			),
			8 => array(
			'var' => 'optUser'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['xlsBarcode'])){
				
				$this->xlsBarcode = $vals['xlsBarcode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['bizReceiptType'])){
				
				$this->bizReceiptType = $vals['bizReceiptType'];
			}
			
			
			if (isset($vals['bizReceiptCode'])){
				
				$this->bizReceiptCode = $vals['bizReceiptCode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
			if (isset($vals['optUser'])){
				
				$this->optUser = $vals['optUser'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryAdjustReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("xlsBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xlsBarcode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("bizReceiptType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizReceiptType); 
				
			}
			
			
			
			
			if ("bizReceiptCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizReceiptCode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime); 
				
			}
			
			
			
			
			if ("optUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optUser);
				
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
		
		$xfer += $output->writeFieldBegin('seqNo');
		$xfer += $output->writeString($this->seqNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('xlsBarcode');
		$xfer += $output->writeString($this->xlsBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizReceiptType');
		$xfer += $output->writeI32($this->bizReceiptType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizReceiptCode');
		$xfer += $output->writeString($this->bizReceiptCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizTime');
		$xfer += $output->writeI64($this->bizTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optUser');
		$xfer += $output->writeString($this->optUser);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>