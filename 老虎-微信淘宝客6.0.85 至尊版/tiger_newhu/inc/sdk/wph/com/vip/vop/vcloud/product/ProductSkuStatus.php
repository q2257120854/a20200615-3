<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;

class ProductSkuStatus {
	
	static $_TSPEC;
	public $partnerId = null;
	public $skuId = null;
	public $sku = null;
	public $vdgValidateStatus = null;
	public $pushVdgStatus = null;
	public $pdcValidateStatus = null;
	public $pushPdcStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'skuId'
			),
			3 => array(
			'var' => 'sku'
			),
			4 => array(
			'var' => 'vdgValidateStatus'
			),
			5 => array(
			'var' => 'pushVdgStatus'
			),
			6 => array(
			'var' => 'pdcValidateStatus'
			),
			7 => array(
			'var' => 'pushPdcStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['vdgValidateStatus'])){
				
				$this->vdgValidateStatus = $vals['vdgValidateStatus'];
			}
			
			
			if (isset($vals['pushVdgStatus'])){
				
				$this->pushVdgStatus = $vals['pushVdgStatus'];
			}
			
			
			if (isset($vals['pdcValidateStatus'])){
				
				$this->pdcValidateStatus = $vals['pdcValidateStatus'];
			}
			
			
			if (isset($vals['pushPdcStatus'])){
				
				$this->pushPdcStatus = $vals['pushPdcStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProductSkuStatus';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->partnerId);
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->skuId);
				
			}
			
			
			
			
			if ("sku" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sku);
				
			}
			
			
			
			
			if ("vdgValidateStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->vdgValidateStatus); 
				
			}
			
			
			
			
			if ("pushVdgStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->pushVdgStatus); 
				
			}
			
			
			
			
			if ("pdcValidateStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->pdcValidateStatus); 
				
			}
			
			
			
			
			if ("pushPdcStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->pushPdcStatus); 
				
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
		
		if($this->partnerId !== null) {
			
			$xfer += $output->writeFieldBegin('partnerId');
			$xfer += $output->writeString($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeString($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sku !== null) {
			
			$xfer += $output->writeFieldBegin('sku');
			$xfer += $output->writeString($this->sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vdgValidateStatus !== null) {
			
			$xfer += $output->writeFieldBegin('vdgValidateStatus');
			$xfer += $output->writeByte($this->vdgValidateStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pushVdgStatus !== null) {
			
			$xfer += $output->writeFieldBegin('pushVdgStatus');
			$xfer += $output->writeByte($this->pushVdgStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pdcValidateStatus !== null) {
			
			$xfer += $output->writeFieldBegin('pdcValidateStatus');
			$xfer += $output->writeByte($this->pdcValidateStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pushPdcStatus !== null) {
			
			$xfer += $output->writeFieldBegin('pushPdcStatus');
			$xfer += $output->writeByte($this->pushPdcStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>