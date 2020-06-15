<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class WorkOrderQueryReq {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $distribute_start_time = null;
	public $distribute_end_time = null;
	public $work_order_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'distribute_start_time'
			),
			3 => array(
			'var' => 'distribute_end_time'
			),
			4 => array(
			'var' => 'work_order_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['distribute_start_time'])){
				
				$this->distribute_start_time = $vals['distribute_start_time'];
			}
			
			
			if (isset($vals['distribute_end_time'])){
				
				$this->distribute_end_time = $vals['distribute_end_time'];
			}
			
			
			if (isset($vals['work_order_no'])){
				
				$this->work_order_no = $vals['work_order_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderQueryReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("distribute_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->distribute_start_time); 
				
			}
			
			
			
			
			if ("distribute_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->distribute_end_time); 
				
			}
			
			
			
			
			if ("work_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_order_no);
				
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->distribute_start_time !== null) {
			
			$xfer += $output->writeFieldBegin('distribute_start_time');
			$xfer += $output->writeI64($this->distribute_start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distribute_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('distribute_end_time');
			$xfer += $output->writeI64($this->distribute_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('work_order_no');
			$xfer += $output->writeString($this->work_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>