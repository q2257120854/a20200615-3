<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class SalesTimeRange {
	
	static $_TSPEC;
	public $sales_time_from_begin = null;
	public $sales_time_from_end = null;
	public $sales_time_to_begin = null;
	public $sales_time_to_end = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sales_time_from_begin'
			),
			2 => array(
			'var' => 'sales_time_from_end'
			),
			3 => array(
			'var' => 'sales_time_to_begin'
			),
			4 => array(
			'var' => 'sales_time_to_end'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sales_time_from_begin'])){
				
				$this->sales_time_from_begin = $vals['sales_time_from_begin'];
			}
			
			
			if (isset($vals['sales_time_from_end'])){
				
				$this->sales_time_from_end = $vals['sales_time_from_end'];
			}
			
			
			if (isset($vals['sales_time_to_begin'])){
				
				$this->sales_time_to_begin = $vals['sales_time_to_begin'];
			}
			
			
			if (isset($vals['sales_time_to_end'])){
				
				$this->sales_time_to_end = $vals['sales_time_to_end'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SalesTimeRange';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sales_time_from_begin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_time_from_begin); 
				
			}
			
			
			
			
			if ("sales_time_from_end" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_time_from_end); 
				
			}
			
			
			
			
			if ("sales_time_to_begin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_time_to_begin); 
				
			}
			
			
			
			
			if ("sales_time_to_end" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_time_to_end); 
				
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
		
		if($this->sales_time_from_begin !== null) {
			
			$xfer += $output->writeFieldBegin('sales_time_from_begin');
			$xfer += $output->writeI64($this->sales_time_from_begin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_time_from_end !== null) {
			
			$xfer += $output->writeFieldBegin('sales_time_from_end');
			$xfer += $output->writeI64($this->sales_time_from_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_time_to_begin !== null) {
			
			$xfer += $output->writeFieldBegin('sales_time_to_begin');
			$xfer += $output->writeI64($this->sales_time_to_begin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_time_to_end !== null) {
			
			$xfer += $output->writeFieldBegin('sales_time_to_end');
			$xfer += $output->writeI64($this->sales_time_to_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>