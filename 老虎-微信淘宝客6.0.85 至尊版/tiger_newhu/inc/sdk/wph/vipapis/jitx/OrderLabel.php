<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class OrderLabel {
	
	static $_TSPEC;
	public $order_sn = null;
	public $transport_no = null;
	public $carrier_code = null;
	public $box_no = null;
	public $total_package = null;
	public $order_label = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'carrier_code'
			),
			4 => array(
			'var' => 'box_no'
			),
			5 => array(
			'var' => 'total_package'
			),
			6 => array(
			'var' => 'order_label'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['total_package'])){
				
				$this->total_package = $vals['total_package'];
			}
			
			
			if (isset($vals['order_label'])){
				
				$this->order_label = $vals['order_label'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderLabel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->box_no); 
				
			}
			
			
			
			
			if ("total_package" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_package); 
				
			}
			
			
			
			
			if ("order_label" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_label);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeI32($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_package !== null) {
			
			$xfer += $output->writeFieldBegin('total_package');
			$xfer += $output->writeI32($this->total_package);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_label !== null) {
			
			$xfer += $output->writeFieldBegin('order_label');
			$xfer += $output->writeString($this->order_label);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>