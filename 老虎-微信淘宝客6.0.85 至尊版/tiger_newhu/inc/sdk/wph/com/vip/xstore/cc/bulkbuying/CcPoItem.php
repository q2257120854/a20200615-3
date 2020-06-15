<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying;

class CcPoItem {
	
	static $_TSPEC;
	public $id = null;
	public $po = null;
	public $vendorCode = null;
	public $barcode = null;
	public $vSpuId = null;
	public $vSkuId = null;
	public $costPrice = null;
	public $tagPrice = null;
	public $deliverWarehouse = null;
	public $purchaseQuantity = null;
	public $disabilityLevel = null;
	public $subDisabilityLevel = null;
	public $age = null;
	public $holdQuantity = null;
	public $deliveredQuantity = null;
	public $receivedQuantity = null;
	public $barcodeOrigin = null;
	public $prodName = null;
	public $vipPurchasePrice = null;
	public $costPriceCny = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'po'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'vSpuId'
			),
			6 => array(
			'var' => 'vSkuId'
			),
			7 => array(
			'var' => 'costPrice'
			),
			8 => array(
			'var' => 'tagPrice'
			),
			9 => array(
			'var' => 'deliverWarehouse'
			),
			10 => array(
			'var' => 'purchaseQuantity'
			),
			11 => array(
			'var' => 'disabilityLevel'
			),
			12 => array(
			'var' => 'subDisabilityLevel'
			),
			13 => array(
			'var' => 'age'
			),
			14 => array(
			'var' => 'holdQuantity'
			),
			15 => array(
			'var' => 'deliveredQuantity'
			),
			16 => array(
			'var' => 'receivedQuantity'
			),
			17 => array(
			'var' => 'barcodeOrigin'
			),
			18 => array(
			'var' => 'prodName'
			),
			19 => array(
			'var' => 'vipPurchasePrice'
			),
			20 => array(
			'var' => 'costPriceCny'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vSpuId'])){
				
				$this->vSpuId = $vals['vSpuId'];
			}
			
			
			if (isset($vals['vSkuId'])){
				
				$this->vSkuId = $vals['vSkuId'];
			}
			
			
			if (isset($vals['costPrice'])){
				
				$this->costPrice = $vals['costPrice'];
			}
			
			
			if (isset($vals['tagPrice'])){
				
				$this->tagPrice = $vals['tagPrice'];
			}
			
			
			if (isset($vals['deliverWarehouse'])){
				
				$this->deliverWarehouse = $vals['deliverWarehouse'];
			}
			
			
			if (isset($vals['purchaseQuantity'])){
				
				$this->purchaseQuantity = $vals['purchaseQuantity'];
			}
			
			
			if (isset($vals['disabilityLevel'])){
				
				$this->disabilityLevel = $vals['disabilityLevel'];
			}
			
			
			if (isset($vals['subDisabilityLevel'])){
				
				$this->subDisabilityLevel = $vals['subDisabilityLevel'];
			}
			
			
			if (isset($vals['age'])){
				
				$this->age = $vals['age'];
			}
			
			
			if (isset($vals['holdQuantity'])){
				
				$this->holdQuantity = $vals['holdQuantity'];
			}
			
			
			if (isset($vals['deliveredQuantity'])){
				
				$this->deliveredQuantity = $vals['deliveredQuantity'];
			}
			
			
			if (isset($vals['receivedQuantity'])){
				
				$this->receivedQuantity = $vals['receivedQuantity'];
			}
			
			
			if (isset($vals['barcodeOrigin'])){
				
				$this->barcodeOrigin = $vals['barcodeOrigin'];
			}
			
			
			if (isset($vals['prodName'])){
				
				$this->prodName = $vals['prodName'];
			}
			
			
			if (isset($vals['vipPurchasePrice'])){
				
				$this->vipPurchasePrice = $vals['vipPurchasePrice'];
			}
			
			
			if (isset($vals['costPriceCny'])){
				
				$this->costPriceCny = $vals['costPriceCny'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CcPoItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("vSpuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSpuId); 
				
			}
			
			
			
			
			if ("vSkuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vSkuId); 
				
			}
			
			
			
			
			if ("costPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->costPrice);
				
			}
			
			
			
			
			if ("tagPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->tagPrice);
				
			}
			
			
			
			
			if ("deliverWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliverWarehouse);
				
			}
			
			
			
			
			if ("purchaseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->purchaseQuantity); 
				
			}
			
			
			
			
			if ("disabilityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->disabilityLevel);
				
			}
			
			
			
			
			if ("subDisabilityLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subDisabilityLevel);
				
			}
			
			
			
			
			if ("age" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->age); 
				
			}
			
			
			
			
			if ("holdQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->holdQuantity); 
				
			}
			
			
			
			
			if ("deliveredQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveredQuantity); 
				
			}
			
			
			
			
			if ("receivedQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->receivedQuantity); 
				
			}
			
			
			
			
			if ("barcodeOrigin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcodeOrigin);
				
			}
			
			
			
			
			if ("prodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prodName);
				
			}
			
			
			
			
			if ("vipPurchasePrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->vipPurchasePrice);
				
			}
			
			
			
			
			if ("costPriceCny" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->costPriceCny);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSpuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSpuId');
			$xfer += $output->writeI64($this->vSpuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vSkuId !== null) {
			
			$xfer += $output->writeFieldBegin('vSkuId');
			$xfer += $output->writeI64($this->vSkuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->costPrice !== null) {
			
			$xfer += $output->writeFieldBegin('costPrice');
			$xfer += $output->writeDouble($this->costPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagPrice !== null) {
			
			$xfer += $output->writeFieldBegin('tagPrice');
			$xfer += $output->writeDouble($this->tagPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliverWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('deliverWarehouse');
			$xfer += $output->writeString($this->deliverWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseQuantity');
			$xfer += $output->writeI32($this->purchaseQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->disabilityLevel !== null) {
			
			$xfer += $output->writeFieldBegin('disabilityLevel');
			$xfer += $output->writeString($this->disabilityLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subDisabilityLevel !== null) {
			
			$xfer += $output->writeFieldBegin('subDisabilityLevel');
			$xfer += $output->writeString($this->subDisabilityLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->age !== null) {
			
			$xfer += $output->writeFieldBegin('age');
			$xfer += $output->writeI32($this->age);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('holdQuantity');
			$xfer += $output->writeI32($this->holdQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveredQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('deliveredQuantity');
			$xfer += $output->writeI32($this->deliveredQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receivedQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('receivedQuantity');
			$xfer += $output->writeI32($this->receivedQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcodeOrigin !== null) {
			
			$xfer += $output->writeFieldBegin('barcodeOrigin');
			$xfer += $output->writeString($this->barcodeOrigin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodName !== null) {
			
			$xfer += $output->writeFieldBegin('prodName');
			$xfer += $output->writeString($this->prodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPurchasePrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPurchasePrice');
			$xfer += $output->writeDouble($this->vipPurchasePrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->costPriceCny !== null) {
			
			$xfer += $output->writeFieldBegin('costPriceCny');
			$xfer += $output->writeDouble($this->costPriceCny);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>