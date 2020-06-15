<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OrderDetail {
	
	static $_TSPEC;
	public $skuId = null;
	public $spuId = null;
	public $productName = null;
	public $barcode = null;
	public $quantity = null;
	public $price = null;
	public $status = null;
	public $imageUrl = null;
	public $sn = null;
	public $size = null;
	public $categoryName = null;
	public $color = null;
	public $colorCode = null;
	public $spu = null;
	public $leavingUnboxQuantity = null;
	public $unboxQuantity = null;
	public $discountPrice = null;
	public $subOrderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuId'
			),
			2 => array(
			'var' => 'spuId'
			),
			3 => array(
			'var' => 'productName'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'quantity'
			),
			6 => array(
			'var' => 'price'
			),
			7 => array(
			'var' => 'status'
			),
			8 => array(
			'var' => 'imageUrl'
			),
			9 => array(
			'var' => 'sn'
			),
			10 => array(
			'var' => 'size'
			),
			11 => array(
			'var' => 'categoryName'
			),
			12 => array(
			'var' => 'color'
			),
			13 => array(
			'var' => 'colorCode'
			),
			14 => array(
			'var' => 'spu'
			),
			15 => array(
			'var' => 'leavingUnboxQuantity'
			),
			16 => array(
			'var' => 'unboxQuantity'
			),
			17 => array(
			'var' => 'discountPrice'
			),
			18 => array(
			'var' => 'subOrderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['spuId'])){
				
				$this->spuId = $vals['spuId'];
			}
			
			
			if (isset($vals['productName'])){
				
				$this->productName = $vals['productName'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['imageUrl'])){
				
				$this->imageUrl = $vals['imageUrl'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['colorCode'])){
				
				$this->colorCode = $vals['colorCode'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['leavingUnboxQuantity'])){
				
				$this->leavingUnboxQuantity = $vals['leavingUnboxQuantity'];
			}
			
			
			if (isset($vals['unboxQuantity'])){
				
				$this->unboxQuantity = $vals['unboxQuantity'];
			}
			
			
			if (isset($vals['discountPrice'])){
				
				$this->discountPrice = $vals['discountPrice'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("spuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->spuId); 
				
			}
			
			
			
			
			if ("productName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productName);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("imageUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageUrl);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("categoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryName);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("colorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->colorCode);
				
			}
			
			
			
			
			if ("spu" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu);
				
			}
			
			
			
			
			if ("leavingUnboxQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leavingUnboxQuantity); 
				
			}
			
			
			
			
			if ("unboxQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->unboxQuantity); 
				
			}
			
			
			
			
			if ("discountPrice" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discountPrice);
				
			}
			
			
			
			
			if ("subOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSn);
				
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
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spuId !== null) {
			
			$xfer += $output->writeFieldBegin('spuId');
			$xfer += $output->writeI64($this->spuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productName !== null) {
			
			$xfer += $output->writeFieldBegin('productName');
			$xfer += $output->writeString($this->productName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeDouble($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageUrl !== null) {
			
			$xfer += $output->writeFieldBegin('imageUrl');
			$xfer += $output->writeString($this->imageUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryName !== null) {
			
			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->colorCode !== null) {
			
			$xfer += $output->writeFieldBegin('colorCode');
			$xfer += $output->writeString($this->colorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spu !== null) {
			
			$xfer += $output->writeFieldBegin('spu');
			$xfer += $output->writeString($this->spu);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('leavingUnboxQuantity');
		$xfer += $output->writeI32($this->leavingUnboxQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('unboxQuantity');
		$xfer += $output->writeI32($this->unboxQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('discountPrice');
		$xfer += $output->writeDouble($this->discountPrice);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->subOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('subOrderSn');
			$xfer += $output->writeString($this->subOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>