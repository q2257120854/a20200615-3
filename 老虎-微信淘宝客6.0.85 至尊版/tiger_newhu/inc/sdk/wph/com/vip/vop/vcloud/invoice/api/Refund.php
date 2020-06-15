<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\invoice\api;

class Refund {
	
	static $_TSPEC;
	public $partnerId = null;
	public $channelId = null;
	public $transId = null;
	public $orderSn = null;
	public $refundTime = null;
	public $totalAmount = null;
	public $details = null;
	public $id = null;
	public $dealType = null;
	public $discountAmount = null;
	public $shippingAddress = null;
	public $subTotal = null;
	public $paymentMethod = null;
	public $discountDescription = null;
	public $invoiceType = null;
	public $status = null;
	public $returnNo = null;
	public $returnApplicationId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'channelId'
			),
			3 => array(
			'var' => 'transId'
			),
			4 => array(
			'var' => 'orderSn'
			),
			5 => array(
			'var' => 'refundTime'
			),
			6 => array(
			'var' => 'totalAmount'
			),
			7 => array(
			'var' => 'details'
			),
			8 => array(
			'var' => 'id'
			),
			9 => array(
			'var' => 'dealType'
			),
			10 => array(
			'var' => 'discountAmount'
			),
			11 => array(
			'var' => 'shippingAddress'
			),
			12 => array(
			'var' => 'subTotal'
			),
			13 => array(
			'var' => 'paymentMethod'
			),
			14 => array(
			'var' => 'discountDescription'
			),
			15 => array(
			'var' => 'invoiceType'
			),
			16 => array(
			'var' => 'status'
			),
			17 => array(
			'var' => 'returnNo'
			),
			18 => array(
			'var' => 'returnApplicationId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['transId'])){
				
				$this->transId = $vals['transId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['refundTime'])){
				
				$this->refundTime = $vals['refundTime'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['dealType'])){
				
				$this->dealType = $vals['dealType'];
			}
			
			
			if (isset($vals['discountAmount'])){
				
				$this->discountAmount = $vals['discountAmount'];
			}
			
			
			if (isset($vals['shippingAddress'])){
				
				$this->shippingAddress = $vals['shippingAddress'];
			}
			
			
			if (isset($vals['subTotal'])){
				
				$this->subTotal = $vals['subTotal'];
			}
			
			
			if (isset($vals['paymentMethod'])){
				
				$this->paymentMethod = $vals['paymentMethod'];
			}
			
			
			if (isset($vals['discountDescription'])){
				
				$this->discountDescription = $vals['discountDescription'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['returnNo'])){
				
				$this->returnNo = $vals['returnNo'];
			}
			
			
			if (isset($vals['returnApplicationId'])){
				
				$this->returnApplicationId = $vals['returnApplicationId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Refund';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("transId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("refundTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundTime);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->totalAmount);
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\vcloud\invoice\api\RefundDetail();
						$elem0->read($input);
						
						$this->details[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("dealType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->dealType); 
				
			}
			
			
			
			
			if ("discountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discountAmount);
				
			}
			
			
			
			
			if ("shippingAddress" == $schemeField){
				
				$needSkip = false;
				
				$this->shippingAddress = new \com\vip\vop\vcloud\invoice\api\RefundShippingAddress();
				$this->shippingAddress->read($input);
				
			}
			
			
			
			
			if ("subTotal" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->subTotal);
				
			}
			
			
			
			
			if ("paymentMethod" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentMethod);
				
			}
			
			
			
			
			if ("discountDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountDescription);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceType);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("returnNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnNo);
				
			}
			
			
			
			
			if ("returnApplicationId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnApplicationId);
				
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
			$xfer += $output->writeI64($this->partnerId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transId !== null) {
			
			$xfer += $output->writeFieldBegin('transId');
			$xfer += $output->writeString($this->transId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundTime !== null) {
			
			$xfer += $output->writeFieldBegin('refundTime');
			$xfer += $output->writeI64($this->refundTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('totalAmount');
		$xfer += $output->writeDouble($this->totalAmount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->details !== null) {
			
			$xfer += $output->writeFieldBegin('details');
			
			if (!is_array($this->details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->details as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dealType !== null) {
			
			$xfer += $output->writeFieldBegin('dealType');
			$xfer += $output->writeByte($this->dealType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('discountAmount');
		$xfer += $output->writeDouble($this->discountAmount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->shippingAddress !== null) {
			
			$xfer += $output->writeFieldBegin('shippingAddress');
			
			if (!is_object($this->shippingAddress)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->shippingAddress->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('subTotal');
		$xfer += $output->writeDouble($this->subTotal);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->paymentMethod !== null) {
			
			$xfer += $output->writeFieldBegin('paymentMethod');
			$xfer += $output->writeString($this->paymentMethod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountDescription !== null) {
			
			$xfer += $output->writeFieldBegin('discountDescription');
			$xfer += $output->writeString($this->discountDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeString($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnNo');
			$xfer += $output->writeString($this->returnNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnApplicationId !== null) {
			
			$xfer += $output->writeFieldBegin('returnApplicationId');
			$xfer += $output->writeString($this->returnApplicationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>