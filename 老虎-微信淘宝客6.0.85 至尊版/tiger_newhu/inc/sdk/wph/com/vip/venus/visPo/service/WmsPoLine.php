<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class WmsPoLine {
	
	static $_TSPEC;
	public $po_line_id = null;
	public $line_num = null;
	public $item_code = null;
	public $quantity = null;
	public $volume_qty = null;
	public $status = null;
	public $update = null;
	public $selling_price = null;
	public $anti_theft_clasp = null;
	public $productionDate = null;
	public $expireDate = null;
	public $approval = null;
	public $approvalTerm = null;
	public $priceWithTax = null;
	public $brandSn = null;
	public $brandName = null;
	public $brandNameEn = null;
	public $tagGroupName = null;
	public $oldItemNo = null;
	public $cartonMeasurement = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_line_id'
			),
			2 => array(
			'var' => 'line_num'
			),
			3 => array(
			'var' => 'item_code'
			),
			4 => array(
			'var' => 'quantity'
			),
			5 => array(
			'var' => 'volume_qty'
			),
			6 => array(
			'var' => 'status'
			),
			7 => array(
			'var' => 'update'
			),
			8 => array(
			'var' => 'selling_price'
			),
			9 => array(
			'var' => 'anti_theft_clasp'
			),
			10 => array(
			'var' => 'productionDate'
			),
			11 => array(
			'var' => 'expireDate'
			),
			12 => array(
			'var' => 'approval'
			),
			13 => array(
			'var' => 'approvalTerm'
			),
			14 => array(
			'var' => 'priceWithTax'
			),
			15 => array(
			'var' => 'brandSn'
			),
			16 => array(
			'var' => 'brandName'
			),
			17 => array(
			'var' => 'brandNameEn'
			),
			18 => array(
			'var' => 'tagGroupName'
			),
			19 => array(
			'var' => 'oldItemNo'
			),
			20 => array(
			'var' => 'cartonMeasurement'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_line_id'])){
				
				$this->po_line_id = $vals['po_line_id'];
			}
			
			
			if (isset($vals['line_num'])){
				
				$this->line_num = $vals['line_num'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['volume_qty'])){
				
				$this->volume_qty = $vals['volume_qty'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['update'])){
				
				$this->update = $vals['update'];
			}
			
			
			if (isset($vals['selling_price'])){
				
				$this->selling_price = $vals['selling_price'];
			}
			
			
			if (isset($vals['anti_theft_clasp'])){
				
				$this->anti_theft_clasp = $vals['anti_theft_clasp'];
			}
			
			
			if (isset($vals['productionDate'])){
				
				$this->productionDate = $vals['productionDate'];
			}
			
			
			if (isset($vals['expireDate'])){
				
				$this->expireDate = $vals['expireDate'];
			}
			
			
			if (isset($vals['approval'])){
				
				$this->approval = $vals['approval'];
			}
			
			
			if (isset($vals['approvalTerm'])){
				
				$this->approvalTerm = $vals['approvalTerm'];
			}
			
			
			if (isset($vals['priceWithTax'])){
				
				$this->priceWithTax = $vals['priceWithTax'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandNameEn'])){
				
				$this->brandNameEn = $vals['brandNameEn'];
			}
			
			
			if (isset($vals['tagGroupName'])){
				
				$this->tagGroupName = $vals['tagGroupName'];
			}
			
			
			if (isset($vals['oldItemNo'])){
				
				$this->oldItemNo = $vals['oldItemNo'];
			}
			
			
			if (isset($vals['cartonMeasurement'])){
				
				$this->cartonMeasurement = $vals['cartonMeasurement'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WmsPoLine';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_line_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_line_id);
				
			}
			
			
			
			
			if ("line_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->line_num);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->quantity);
				
			}
			
			
			
			
			if ("volume_qty" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->volume_qty);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("update" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update);
				
			}
			
			
			
			
			if ("selling_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->selling_price);
				
			}
			
			
			
			
			if ("anti_theft_clasp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anti_theft_clasp);
				
			}
			
			
			
			
			if ("productionDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->productionDate);
				
			}
			
			
			
			
			if ("expireDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expireDate);
				
			}
			
			
			
			
			if ("approval" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval);
				
			}
			
			
			
			
			if ("approvalTerm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approvalTerm);
				
			}
			
			
			
			
			if ("priceWithTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceWithTax);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandNameEn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandNameEn);
				
			}
			
			
			
			
			if ("tagGroupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagGroupName);
				
			}
			
			
			
			
			if ("oldItemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldItemNo);
				
			}
			
			
			
			
			if ("cartonMeasurement" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cartonMeasurement); 
				
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
		
		if($this->po_line_id !== null) {
			
			$xfer += $output->writeFieldBegin('po_line_id');
			$xfer += $output->writeString($this->po_line_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->line_num !== null) {
			
			$xfer += $output->writeFieldBegin('line_num');
			$xfer += $output->writeString($this->line_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeString($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume_qty !== null) {
			
			$xfer += $output->writeFieldBegin('volume_qty');
			$xfer += $output->writeString($this->volume_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update !== null) {
			
			$xfer += $output->writeFieldBegin('update');
			$xfer += $output->writeString($this->update);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->selling_price !== null) {
			
			$xfer += $output->writeFieldBegin('selling_price');
			$xfer += $output->writeString($this->selling_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anti_theft_clasp !== null) {
			
			$xfer += $output->writeFieldBegin('anti_theft_clasp');
			$xfer += $output->writeString($this->anti_theft_clasp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->productionDate !== null) {
			
			$xfer += $output->writeFieldBegin('productionDate');
			$xfer += $output->writeString($this->productionDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expireDate !== null) {
			
			$xfer += $output->writeFieldBegin('expireDate');
			$xfer += $output->writeString($this->expireDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval !== null) {
			
			$xfer += $output->writeFieldBegin('approval');
			$xfer += $output->writeString($this->approval);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approvalTerm !== null) {
			
			$xfer += $output->writeFieldBegin('approvalTerm');
			$xfer += $output->writeString($this->approvalTerm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceWithTax !== null) {
			
			$xfer += $output->writeFieldBegin('priceWithTax');
			$xfer += $output->writeString($this->priceWithTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandNameEn !== null) {
			
			$xfer += $output->writeFieldBegin('brandNameEn');
			$xfer += $output->writeString($this->brandNameEn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagGroupName !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupName');
			$xfer += $output->writeString($this->tagGroupName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->oldItemNo !== null) {
			
			$xfer += $output->writeFieldBegin('oldItemNo');
			$xfer += $output->writeString($this->oldItemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cartonMeasurement !== null) {
			
			$xfer += $output->writeFieldBegin('cartonMeasurement');
			$xfer += $output->writeI32($this->cartonMeasurement);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>