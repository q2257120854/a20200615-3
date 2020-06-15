<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class UpdateTransOrderItemApiModel {
	
	static $_TSPEC;
	public $tx_id = null;
	public $barcode = null;
	public $purchase_no = null;
	public $out_purchase_no = null;
	public $delivered_quantity = null;
	public $container_no = null;
	public $grade = null;
	public $sell_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tx_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'purchase_no'
			),
			4 => array(
			'var' => 'out_purchase_no'
			),
			5 => array(
			'var' => 'delivered_quantity'
			),
			6 => array(
			'var' => 'container_no'
			),
			7 => array(
			'var' => 'grade'
			),
			8 => array(
			'var' => 'sell_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tx_id'])){
				
				$this->tx_id = $vals['tx_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['purchase_no'])){
				
				$this->purchase_no = $vals['purchase_no'];
			}
			
			
			if (isset($vals['out_purchase_no'])){
				
				$this->out_purchase_no = $vals['out_purchase_no'];
			}
			
			
			if (isset($vals['delivered_quantity'])){
				
				$this->delivered_quantity = $vals['delivered_quantity'];
			}
			
			
			if (isset($vals['container_no'])){
				
				$this->container_no = $vals['container_no'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['sell_status'])){
				
				$this->sell_status = $vals['sell_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateTransOrderItemApiModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tx_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_id);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_no);
				
			}
			
			
			
			
			if ("out_purchase_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_purchase_no);
				
			}
			
			
			
			
			if ("delivered_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivered_quantity);
				
			}
			
			
			
			
			if ("container_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->container_no);
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grade);
				
			}
			
			
			
			
			if ("sell_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sell_status); 
				
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
		
		$xfer += $output->writeFieldBegin('tx_id');
		$xfer += $output->writeString($this->tx_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('purchase_no');
		$xfer += $output->writeString($this->purchase_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('out_purchase_no');
		$xfer += $output->writeString($this->out_purchase_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivered_quantity');
		$xfer += $output->writeString($this->delivered_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->container_no !== null) {
			
			$xfer += $output->writeFieldBegin('container_no');
			$xfer += $output->writeString($this->container_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grade !== null) {
			
			$xfer += $output->writeFieldBegin('grade');
			$xfer += $output->writeString($this->grade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_status !== null) {
			
			$xfer += $output->writeFieldBegin('sell_status');
			$xfer += $output->writeI32($this->sell_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>