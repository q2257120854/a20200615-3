<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\sales;

class Sales {
	
	static $_TSPEC;
	public $sales_no = null;
	public $name = null;
	public $sale_st = null;
	public $sale_et = null;
	public $warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sales_no'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'sale_st'
			),
			4 => array(
			'var' => 'sale_et'
			),
			5 => array(
			'var' => 'warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sales_no'])){
				
				$this->sales_no = $vals['sales_no'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['sale_st'])){
				
				$this->sale_st = $vals['sale_st'];
			}
			
			
			if (isset($vals['sale_et'])){
				
				$this->sale_et = $vals['sale_et'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Sales';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sales_no" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_no); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("sale_st" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sale_st); 
				
			}
			
			
			
			
			if ("sale_et" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sale_et); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
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
		
		$xfer += $output->writeFieldBegin('sales_no');
		$xfer += $output->writeI64($this->sales_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_st');
		$xfer += $output->writeI64($this->sale_st);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_et');
		$xfer += $output->writeI64($this->sale_et);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>