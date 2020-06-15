<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringOrderDeliveryList {
	
	static $_TSPEC;
	public $company_code = null;
	public $transferring_order_no = null;
	public $delivery_warehouse_code = null;
	public $delivery_date = null;
	public $transferring_type = null;
	public $src_warehouse_code = null;
	public $dest_warehouse_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'company_code'
			),
			2 => array(
			'var' => 'transferring_order_no'
			),
			3 => array(
			'var' => 'delivery_warehouse_code'
			),
			4 => array(
			'var' => 'delivery_date'
			),
			5 => array(
			'var' => 'transferring_type'
			),
			6 => array(
			'var' => 'src_warehouse_code'
			),
			7 => array(
			'var' => 'dest_warehouse_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['delivery_warehouse_code'])){
				
				$this->delivery_warehouse_code = $vals['delivery_warehouse_code'];
			}
			
			
			if (isset($vals['delivery_date'])){
				
				$this->delivery_date = $vals['delivery_date'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['src_warehouse_code'])){
				
				$this->src_warehouse_code = $vals['src_warehouse_code'];
			}
			
			
			if (isset($vals['dest_warehouse_code'])){
				
				$this->dest_warehouse_code = $vals['dest_warehouse_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringOrderDeliveryList';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("transferring_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_order_no);
				
			}
			
			
			
			
			if ("delivery_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse_code);
				
			}
			
			
			
			
			if ("delivery_date" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->delivery_date);
				
			}
			
			
			
			
			if ("transferring_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transferring_type); 
				
			}
			
			
			
			
			if ("src_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->src_warehouse_code);
				
			}
			
			
			
			
			if ("dest_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dest_warehouse_code);
				
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
		
		if($this->company_code !== null) {
			
			$xfer += $output->writeFieldBegin('company_code');
			$xfer += $output->writeString($this->company_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_no');
			$xfer += $output->writeString($this->transferring_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse_code');
			$xfer += $output->writeString($this->delivery_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_date !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_date');
			$xfer += $output->writeI64($this->delivery_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_type !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_type');
			$xfer += $output->writeByte($this->transferring_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->src_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('src_warehouse_code');
			$xfer += $output->writeString($this->src_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dest_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('dest_warehouse_code');
			$xfer += $output->writeString($this->dest_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>