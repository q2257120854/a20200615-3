<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\oto;

class SpuIdAndSkuId {
	
	static $_TSPEC;
	public $vendor_Id = null;
	public $barcode = null;
	public $v_spu_id = null;
	public $v_sku_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_Id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'v_spu_id'
			),
			4 => array(
			'var' => 'v_sku_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_Id'])){
				
				$this->vendor_Id = $vals['vendor_Id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['v_spu_id'])){
				
				$this->v_spu_id = $vals['v_spu_id'];
			}
			
			
			if (isset($vals['v_sku_id'])){
				
				$this->v_sku_id = $vals['v_sku_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SpuIdAndSkuId';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_Id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_Id); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("v_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->v_spu_id); 
				
			}
			
			
			
			
			if ("v_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->v_sku_id); 
				
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
		
		if($this->vendor_Id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_Id');
			$xfer += $output->writeI32($this->vendor_Id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->v_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('v_spu_id');
			$xfer += $output->writeI64($this->v_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->v_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('v_sku_id');
			$xfer += $output->writeI64($this->v_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>