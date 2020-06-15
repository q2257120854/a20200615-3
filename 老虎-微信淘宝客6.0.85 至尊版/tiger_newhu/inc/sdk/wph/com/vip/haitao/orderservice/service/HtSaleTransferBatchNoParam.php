<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtSaleTransferBatchNoParam {
	
	static $_TSPEC;
	public $warehouse = null;
	public $batchNo = null;
	public $deliveryNum = null;
	public $customsCode = null;
	public $chinaFreightForwarding = null;
	public $globalFreightForwarding = null;
	public $customsClearanceMode = null;
	public $creatTime = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'batchNo'
			),
			3 => array(
			'var' => 'deliveryNum'
			),
			4 => array(
			'var' => 'customsCode'
			),
			5 => array(
			'var' => 'chinaFreightForwarding'
			),
			6 => array(
			'var' => 'globalFreightForwarding'
			),
			7 => array(
			'var' => 'customsClearanceMode'
			),
			8 => array(
			'var' => 'creatTime'
			),
			9 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['deliveryNum'])){
				
				$this->deliveryNum = $vals['deliveryNum'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['chinaFreightForwarding'])){
				
				$this->chinaFreightForwarding = $vals['chinaFreightForwarding'];
			}
			
			
			if (isset($vals['globalFreightForwarding'])){
				
				$this->globalFreightForwarding = $vals['globalFreightForwarding'];
			}
			
			
			if (isset($vals['customsClearanceMode'])){
				
				$this->customsClearanceMode = $vals['customsClearanceMode'];
			}
			
			
			if (isset($vals['creatTime'])){
				
				$this->creatTime = $vals['creatTime'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtSaleTransferBatchNoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("deliveryNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->deliveryNum); 
				
			}
			
			
			
			
			if ("customsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsCode);
				
			}
			
			
			
			
			if ("chinaFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chinaFreightForwarding);
				
			}
			
			
			
			
			if ("globalFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalFreightForwarding);
				
			}
			
			
			
			
			if ("customsClearanceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsClearanceMode);
				
			}
			
			
			
			
			if ("creatTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creatTime);
				
			}
			
			
			
			
			if ("orders" == $schemeField){
				
				$needSkip = false;
				
				$this->orders = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\haitao\orderservice\service\HtSaleTransferBatchNoReOrder();
						$elem0->read($input);
						
						$this->orders[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deliveryNum');
		$xfer += $output->writeI32($this->deliveryNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsCode');
		$xfer += $output->writeString($this->customsCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('chinaFreightForwarding');
		$xfer += $output->writeString($this->chinaFreightForwarding);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('globalFreightForwarding');
		$xfer += $output->writeString($this->globalFreightForwarding);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customsClearanceMode');
		$xfer += $output->writeString($this->customsClearanceMode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->creatTime !== null) {
			
			$xfer += $output->writeFieldBegin('creatTime');
			$xfer += $output->writeString($this->creatTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orders !== null) {
			
			$xfer += $output->writeFieldBegin('orders');
			
			if (!is_array($this->orders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orders as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>