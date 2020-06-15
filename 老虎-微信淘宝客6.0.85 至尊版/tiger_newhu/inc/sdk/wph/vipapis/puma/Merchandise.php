<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\puma;

class Merchandise {
	
	static $_TSPEC;
	public $merchandise_no = null;
	public $start_sell_time = null;
	public $end_sell_time = null;
	public $sales_no = null;
	public $sales_sites = null;
	public $is_on_sale = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchandise_no'
			),
			2 => array(
			'var' => 'start_sell_time'
			),
			3 => array(
			'var' => 'end_sell_time'
			),
			4 => array(
			'var' => 'sales_no'
			),
			5 => array(
			'var' => 'sales_sites'
			),
			6 => array(
			'var' => 'is_on_sale'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchandise_no'])){
				
				$this->merchandise_no = $vals['merchandise_no'];
			}
			
			
			if (isset($vals['start_sell_time'])){
				
				$this->start_sell_time = $vals['start_sell_time'];
			}
			
			
			if (isset($vals['end_sell_time'])){
				
				$this->end_sell_time = $vals['end_sell_time'];
			}
			
			
			if (isset($vals['sales_no'])){
				
				$this->sales_no = $vals['sales_no'];
			}
			
			
			if (isset($vals['sales_sites'])){
				
				$this->sales_sites = $vals['sales_sites'];
			}
			
			
			if (isset($vals['is_on_sale'])){
				
				$this->is_on_sale = $vals['is_on_sale'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Merchandise';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchandise_no" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->merchandise_no); 
				
			}
			
			
			
			
			if ("start_sell_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_sell_time); 
				
			}
			
			
			
			
			if ("end_sell_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_sell_time); 
				
			}
			
			
			
			
			if ("sales_no" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_no); 
				
			}
			
			
			
			
			if ("sales_sites" == $schemeField){
				
				$needSkip = false;
				
				$this->sales_sites = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->sales_sites[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("is_on_sale" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_on_sale); 
				
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
		
		if($this->merchandise_no !== null) {
			
			$xfer += $output->writeFieldBegin('merchandise_no');
			$xfer += $output->writeI64($this->merchandise_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_sell_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_sell_time');
			$xfer += $output->writeI64($this->start_sell_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_sell_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_sell_time');
			$xfer += $output->writeI64($this->end_sell_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_no !== null) {
			
			$xfer += $output->writeFieldBegin('sales_no');
			$xfer += $output->writeI64($this->sales_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_sites !== null) {
			
			$xfer += $output->writeFieldBegin('sales_sites');
			
			if (!is_array($this->sales_sites)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sales_sites as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_on_sale !== null) {
			
			$xfer += $output->writeFieldBegin('is_on_sale');
			$xfer += $output->writeI32($this->is_on_sale);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>