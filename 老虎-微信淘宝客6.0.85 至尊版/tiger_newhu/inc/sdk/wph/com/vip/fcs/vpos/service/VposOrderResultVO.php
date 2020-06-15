<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service;

class VposOrderResultVO {
	
	static $_TSPEC;
	public $addTime = null;
	public $orderSn = null;
	public $orderMoney = null;
	public $orderQuantity = null;
	public $currency = null;
	public $paySn = null;
	public $payType = null;
	public $paymentTerm = null;
	public $payMoney = null;
	public $extorderSn = null;
	public $extaddTime = null;
	public $saleType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'addTime'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'orderMoney'
			),
			4 => array(
			'var' => 'orderQuantity'
			),
			5 => array(
			'var' => 'currency'
			),
			6 => array(
			'var' => 'paySn'
			),
			7 => array(
			'var' => 'payType'
			),
			8 => array(
			'var' => 'paymentTerm'
			),
			9 => array(
			'var' => 'payMoney'
			),
			10 => array(
			'var' => 'extorderSn'
			),
			11 => array(
			'var' => 'extaddTime'
			),
			12 => array(
			'var' => 'saleType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderMoney'])){
				
				$this->orderMoney = $vals['orderMoney'];
			}
			
			
			if (isset($vals['orderQuantity'])){
				
				$this->orderQuantity = $vals['orderQuantity'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['paySn'])){
				
				$this->paySn = $vals['paySn'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['paymentTerm'])){
				
				$this->paymentTerm = $vals['paymentTerm'];
			}
			
			
			if (isset($vals['payMoney'])){
				
				$this->payMoney = $vals['payMoney'];
			}
			
			
			if (isset($vals['extorderSn'])){
				
				$this->extorderSn = $vals['extorderSn'];
			}
			
			
			if (isset($vals['extaddTime'])){
				
				$this->extaddTime = $vals['extaddTime'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VposOrderResultVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderMoney);
				
			}
			
			
			
			
			if ("orderQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderQuantity); 
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("paySn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySn);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("paymentTerm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentTerm);
				
			}
			
			
			
			
			if ("payMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payMoney);
				
			}
			
			
			
			
			if ("extorderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extorderSn);
				
			}
			
			
			
			
			if ("extaddTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->extaddTime); 
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
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
		
		$xfer += $output->writeFieldBegin('addTime');
		$xfer += $output->writeI64($this->addTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderMoney');
		$xfer += $output->writeString($this->orderMoney);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderQuantity');
		$xfer += $output->writeI32($this->orderQuantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('paySn');
		$xfer += $output->writeString($this->paySn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('paymentTerm');
		$xfer += $output->writeString($this->paymentTerm);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('payMoney');
		$xfer += $output->writeString($this->payMoney);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->extorderSn !== null) {
			
			$xfer += $output->writeFieldBegin('extorderSn');
			$xfer += $output->writeString($this->extorderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extaddTime !== null) {
			
			$xfer += $output->writeFieldBegin('extaddTime');
			$xfer += $output->writeI64($this->extaddTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('saleType');
		$xfer += $output->writeString($this->saleType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>