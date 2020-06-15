<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OrderSeq {
	
	static $_TSPEC;
	public $seq_no = null;
	public $order_id = null;
	public $sku_packages_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seq_no'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'sku_packages_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seq_no'])){
				
				$this->seq_no = $vals['seq_no'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['sku_packages_num'])){
				
				$this->sku_packages_num = $vals['sku_packages_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderSeq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seq_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seq_no);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("sku_packages_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sku_packages_num); 
				
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
		
		$xfer += $output->writeFieldBegin('seq_no');
		$xfer += $output->writeString($this->seq_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sku_packages_num !== null) {
			
			$xfer += $output->writeFieldBegin('sku_packages_num');
			$xfer += $output->writeI32($this->sku_packages_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>