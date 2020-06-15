<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class QueryCcPoItemReq {
	
	static $_TSPEC;
	public $page = null;
	public $pageSize = null;
	public $purchaseNo = null;
	public $requiredFields = null;
	public $effectiveDeliveredOnly = null;
	public $barcodeSet = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			2 => array(
			'var' => 'pageSize'
			),
			3 => array(
			'var' => 'purchaseNo'
			),
			4 => array(
			'var' => 'requiredFields'
			),
			5 => array(
			'var' => 'effectiveDeliveredOnly'
			),
			6 => array(
			'var' => 'barcodeSet'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['requiredFields'])){
				
				$this->requiredFields = $vals['requiredFields'];
			}
			
			
			if (isset($vals['effectiveDeliveredOnly'])){
				
				$this->effectiveDeliveredOnly = $vals['effectiveDeliveredOnly'];
			}
			
			
			if (isset($vals['barcodeSet'])){
				
				$this->barcodeSet = $vals['barcodeSet'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryCcPoItemReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("purchaseNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseNo);
				
			}
			
			
			
			
			if ("requiredFields" == $schemeField){
				
				$needSkip = false;
				
				$this->requiredFields = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->requiredFields[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("effectiveDeliveredOnly" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->effectiveDeliveredOnly);
				
			}
			
			
			
			
			if ("barcodeSet" == $schemeField){
				
				$needSkip = false;
				
				$this->barcodeSet = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->barcodeSet[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->requiredFields !== null) {
			
			$xfer += $output->writeFieldBegin('requiredFields');
			
			if (!is_array($this->requiredFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->requiredFields as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effectiveDeliveredOnly !== null) {
			
			$xfer += $output->writeFieldBegin('effectiveDeliveredOnly');
			$xfer += $output->writeBool($this->effectiveDeliveredOnly);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcodeSet !== null) {
			
			$xfer += $output->writeFieldBegin('barcodeSet');
			
			if (!is_array($this->barcodeSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->barcodeSet as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>