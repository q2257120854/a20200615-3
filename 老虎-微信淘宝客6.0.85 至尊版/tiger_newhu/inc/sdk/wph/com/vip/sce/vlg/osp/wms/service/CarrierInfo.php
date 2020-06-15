<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class CarrierInfo {
	
	static $_TSPEC;
	public $cust_data_id = null;
	public $order_sn = null;
	public $transport_no = null;
	public $order_status = null;
	public $order_status_info = null;
	public $current_city = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cust_data_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'transport_no'
			),
			4 => array(
			'var' => 'order_status'
			),
			5 => array(
			'var' => 'order_status_info'
			),
			6 => array(
			'var' => 'current_city'
			),
			7 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cust_data_id'])){
				
				$this->cust_data_id = $vals['cust_data_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['order_status_info'])){
				
				$this->order_status_info = $vals['order_status_info'];
			}
			
			
			if (isset($vals['current_city'])){
				
				$this->current_city = $vals['current_city'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cust_data_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cust_data_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_status); 
				
			}
			
			
			
			
			if ("order_status_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status_info);
				
			}
			
			
			
			
			if ("current_city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->current_city);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		$xfer += $output->writeFieldBegin('cust_data_id');
		$xfer += $output->writeString($this->cust_data_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_status');
		$xfer += $output->writeI32($this->order_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_status_info');
		$xfer += $output->writeString($this->order_status_info);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('current_city');
		$xfer += $output->writeString($this->current_city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>