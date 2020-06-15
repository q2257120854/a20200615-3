<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringDeliveryItem {
	
	static $_TSPEC;
	public $barcode = null;
	public $delivery_quantity = null;
	public $container_no = null;
	public $tx_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'delivery_quantity'
			),
			3 => array(
			'var' => 'container_no'
			),
			4 => array(
			'var' => 'tx_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['delivery_quantity'])){
				
				$this->delivery_quantity = $vals['delivery_quantity'];
			}
			
			
			if (isset($vals['container_no'])){
				
				$this->container_no = $vals['container_no'];
			}
			
			
			if (isset($vals['tx_id'])){
				
				$this->tx_id = $vals['tx_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringDeliveryItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("delivery_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->delivery_quantity); 
				
			}
			
			
			
			
			if ("container_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->container_no);
				
			}
			
			
			
			
			if ("tx_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_id);
				
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_quantity');
			$xfer += $output->writeI32($this->delivery_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->container_no !== null) {
			
			$xfer += $output->writeFieldBegin('container_no');
			$xfer += $output->writeString($this->container_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tx_id !== null) {
			
			$xfer += $output->writeFieldBegin('tx_id');
			$xfer += $output->writeString($this->tx_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>