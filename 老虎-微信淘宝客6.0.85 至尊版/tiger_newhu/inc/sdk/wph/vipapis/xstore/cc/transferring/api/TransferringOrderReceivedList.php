<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringOrderReceivedList {
	
	static $_TSPEC;
	public $company_code = null;
	public $transferring_order_no = null;
	public $received_warehouse_code = null;
	public $received_date = null;
	public $transferring_type = null;
	
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
			'var' => 'received_warehouse_code'
			),
			4 => array(
			'var' => 'received_date'
			),
			5 => array(
			'var' => 'transferring_type'
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
			
			
			if (isset($vals['received_warehouse_code'])){
				
				$this->received_warehouse_code = $vals['received_warehouse_code'];
			}
			
			
			if (isset($vals['received_date'])){
				
				$this->received_date = $vals['received_date'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringOrderReceivedList';
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
			
			
			
			
			if ("received_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->received_warehouse_code);
				
			}
			
			
			
			
			if ("received_date" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->received_date);
				
			}
			
			
			
			
			if ("transferring_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->transferring_type); 
				
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
		
		$xfer += $output->writeFieldBegin('company_code');
		$xfer += $output->writeString($this->company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transferring_order_no');
		$xfer += $output->writeString($this->transferring_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('received_warehouse_code');
		$xfer += $output->writeString($this->received_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('received_date');
		$xfer += $output->writeI64($this->received_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transferring_type');
		$xfer += $output->writeI32($this->transferring_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>