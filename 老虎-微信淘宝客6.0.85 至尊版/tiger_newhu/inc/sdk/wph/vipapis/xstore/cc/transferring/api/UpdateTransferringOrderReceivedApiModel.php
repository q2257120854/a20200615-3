<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class UpdateTransferringOrderReceivedApiModel {
	
	static $_TSPEC;
	public $tx_id = null;
	public $barcode = null;
	public $purchase_no = null;
	public $out_purchase_no = null;
	public $received_quantity = null;
	public $container_no = null;
	
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
			'var' => 'received_quantity'
			),
			6 => array(
			'var' => 'container_no'
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
			
			
			if (isset($vals['received_quantity'])){
				
				$this->received_quantity = $vals['received_quantity'];
			}
			
			
			if (isset($vals['container_no'])){
				
				$this->container_no = $vals['container_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateTransferringOrderReceivedApiModel';
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
			
			
			
			
			if ("received_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->received_quantity);
				
			}
			
			
			
			
			if ("container_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->container_no);
				
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
		
		if($this->out_purchase_no !== null) {
			
			$xfer += $output->writeFieldBegin('out_purchase_no');
			$xfer += $output->writeString($this->out_purchase_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('received_quantity');
		$xfer += $output->writeString($this->received_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->container_no !== null) {
			
			$xfer += $output->writeFieldBegin('container_no');
			$xfer += $output->writeString($this->container_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>