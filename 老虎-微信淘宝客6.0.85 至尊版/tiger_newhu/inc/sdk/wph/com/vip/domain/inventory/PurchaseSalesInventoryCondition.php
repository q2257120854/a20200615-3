<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class PurchaseSalesInventoryCondition {
	
	static $_TSPEC;
	public $query_type = null;
	public $distribution_model = null;
	public $warehouse_code = null;
	public $po_no = null;
	public $brand_code = null;
	public $start_date = null;
	public $end_date = null;
	public $item_code = null;
	public $pay_category = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'query_type'
			),
			2 => array(
			'var' => 'distribution_model'
			),
			3 => array(
			'var' => 'warehouse_code'
			),
			4 => array(
			'var' => 'po_no'
			),
			5 => array(
			'var' => 'brand_code'
			),
			6 => array(
			'var' => 'start_date'
			),
			7 => array(
			'var' => 'end_date'
			),
			8 => array(
			'var' => 'item_code'
			),
			9 => array(
			'var' => 'pay_category'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['query_type'])){
				
				$this->query_type = $vals['query_type'];
			}
			
			
			if (isset($vals['distribution_model'])){
				
				$this->distribution_model = $vals['distribution_model'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['start_date'])){
				
				$this->start_date = $vals['start_date'];
			}
			
			
			if (isset($vals['end_date'])){
				
				$this->end_date = $vals['end_date'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['pay_category'])){
				
				$this->pay_category = $vals['pay_category'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseSalesInventoryCondition';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("query_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\PurchaseSalesInventoryQueryType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->query_type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("distribution_model" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\DistributionModel::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->distribution_model = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\WarehouseCode::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->warehouse_code = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("start_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_date);
				
			}
			
			
			
			
			if ("end_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_date);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("pay_category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_category);
				
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
		
		$xfer += $output->writeFieldBegin('query_type');
		
		$em = new \com\vip\domain\inventory\PurchaseSalesInventoryQueryType; 
		$output->writeString($em::$__names[$this->query_type]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('distribution_model');
		
		$em = new \com\vip\domain\inventory\DistributionModel; 
		$output->writeString($em::$__names[$this->distribution_model]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		
		$em = new \com\vip\domain\inventory\WarehouseCode; 
		$output->writeString($em::$__names[$this->warehouse_code]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_code !== null) {
			
			$xfer += $output->writeFieldBegin('brand_code');
			$xfer += $output->writeString($this->brand_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('start_date');
		$xfer += $output->writeString($this->start_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('end_date');
		$xfer += $output->writeString($this->end_date);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_category !== null) {
			
			$xfer += $output->writeFieldBegin('pay_category');
			$xfer += $output->writeString($this->pay_category);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>