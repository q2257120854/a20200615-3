<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class PoItemObject {
	
	static $_TSPEC;
	public $itemCode = null;
	public $warehouseCode = null;
	public $applyQty = null;
	public $tagPrice = null;
	public $iqcQty = null;
	public $shelvesQty = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'itemCode'
			),
			2 => array(
			'var' => 'warehouseCode'
			),
			3 => array(
			'var' => 'applyQty'
			),
			4 => array(
			'var' => 'tagPrice'
			),
			5 => array(
			'var' => 'iqcQty'
			),
			6 => array(
			'var' => 'shelvesQty'
			),
			7 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['itemCode'])){
				
				$this->itemCode = $vals['itemCode'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['applyQty'])){
				
				$this->applyQty = $vals['applyQty'];
			}
			
			
			if (isset($vals['tagPrice'])){
				
				$this->tagPrice = $vals['tagPrice'];
			}
			
			
			if (isset($vals['iqcQty'])){
				
				$this->iqcQty = $vals['iqcQty'];
			}
			
			
			if (isset($vals['shelvesQty'])){
				
				$this->shelvesQty = $vals['shelvesQty'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoItemObject';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("itemCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemCode);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("applyQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->applyQty); 
				
			}
			
			
			
			
			if ("tagPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->tagPrice);
				
			}
			
			
			
			
			if ("iqcQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->iqcQty); 
				
			}
			
			
			
			
			if ("shelvesQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->shelvesQty); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->itemCode !== null) {
			
			$xfer += $output->writeFieldBegin('itemCode');
			$xfer += $output->writeString($this->itemCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('applyQty');
		$xfer += $output->writeI32($this->applyQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tagPrice');
		$xfer += $output->writeDouble($this->tagPrice);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('iqcQty');
		$xfer += $output->writeI32($this->iqcQty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shelvesQty');
		$xfer += $output->writeI32($this->shelvesQty);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>