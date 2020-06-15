<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\inventory\service\wop;

class WopInvChgLogReq {
	
	static $_TSPEC;
	public $seqNo = null;
	public $companyCode = null;
	public $bizReceiptType = null;
	public $bizReceiptCode = null;
	public $warehouseStoreCode = null;
	public $xlsBarcode = null;
	public $poNo = null;
	public $stockType = null;
	public $goodsGrade = null;
	public $sellingStatus = null;
	public $quantity = null;
	public $bizTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seqNo'
			),
			2 => array(
			'var' => 'companyCode'
			),
			3 => array(
			'var' => 'bizReceiptType'
			),
			4 => array(
			'var' => 'bizReceiptCode'
			),
			5 => array(
			'var' => 'warehouseStoreCode'
			),
			6 => array(
			'var' => 'xlsBarcode'
			),
			7 => array(
			'var' => 'poNo'
			),
			8 => array(
			'var' => 'stockType'
			),
			9 => array(
			'var' => 'goodsGrade'
			),
			10 => array(
			'var' => 'sellingStatus'
			),
			11 => array(
			'var' => 'quantity'
			),
			12 => array(
			'var' => 'bizTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['bizReceiptType'])){
				
				$this->bizReceiptType = $vals['bizReceiptType'];
			}
			
			
			if (isset($vals['bizReceiptCode'])){
				
				$this->bizReceiptCode = $vals['bizReceiptCode'];
			}
			
			
			if (isset($vals['warehouseStoreCode'])){
				
				$this->warehouseStoreCode = $vals['warehouseStoreCode'];
			}
			
			
			if (isset($vals['xlsBarcode'])){
				
				$this->xlsBarcode = $vals['xlsBarcode'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['stockType'])){
				
				$this->stockType = $vals['stockType'];
			}
			
			
			if (isset($vals['goodsGrade'])){
				
				$this->goodsGrade = $vals['goodsGrade'];
			}
			
			
			if (isset($vals['sellingStatus'])){
				
				$this->sellingStatus = $vals['sellingStatus'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WopInvChgLogReq';
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
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("bizReceiptType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizReceiptType); 
				
			}
			
			
			
			
			if ("bizReceiptCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizReceiptCode);
				
			}
			
			
			
			
			if ("warehouseStoreCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseStoreCode);
				
			}
			
			
			
			
			if ("xlsBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->xlsBarcode);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("stockType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stockType); 
				
			}
			
			
			
			
			if ("goodsGrade" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsGrade); 
				
			}
			
			
			
			
			if ("sellingStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sellingStatus); 
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime); 
				
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
		
		$xfer += $output->writeFieldBegin('companyCode');
		$xfer += $output->writeString($this->companyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizReceiptType');
		$xfer += $output->writeI32($this->bizReceiptType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bizReceiptCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizReceiptCode');
			$xfer += $output->writeString($this->bizReceiptCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouseStoreCode');
		$xfer += $output->writeString($this->warehouseStoreCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('xlsBarcode');
		$xfer += $output->writeString($this->xlsBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('poNo');
		$xfer += $output->writeString($this->poNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('stockType');
		$xfer += $output->writeI32($this->stockType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsGrade');
		$xfer += $output->writeI32($this->goodsGrade);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sellingStatus');
		$xfer += $output->writeI32($this->sellingStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bizTime');
		$xfer += $output->writeI64($this->bizTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>