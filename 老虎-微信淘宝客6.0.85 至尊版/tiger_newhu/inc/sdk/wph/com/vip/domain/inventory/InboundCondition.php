<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class InboundCondition {
	
	static $_TSPEC;
	public $query_type = null;
	public $distribution_model = null;
	public $warehouse_code = null;
	public $po_no = null;
	public $brand_code = null;
	public $start_created_date = null;
	public $end_created_date = null;
	public $start_inbound_date = null;
	public $end_inbound_date = null;
	public $item_code = null;
	public $inbound_status = null;
	
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
			'var' => 'start_created_date'
			),
			7 => array(
			'var' => 'end_created_date'
			),
			8 => array(
			'var' => 'start_inbound_date'
			),
			9 => array(
			'var' => 'end_inbound_date'
			),
			10 => array(
			'var' => 'item_code'
			),
			11 => array(
			'var' => 'inbound_status'
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
			
			
			if (isset($vals['start_created_date'])){
				
				$this->start_created_date = $vals['start_created_date'];
			}
			
			
			if (isset($vals['end_created_date'])){
				
				$this->end_created_date = $vals['end_created_date'];
			}
			
			
			if (isset($vals['start_inbound_date'])){
				
				$this->start_inbound_date = $vals['start_inbound_date'];
			}
			
			
			if (isset($vals['end_inbound_date'])){
				
				$this->end_inbound_date = $vals['end_inbound_date'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['inbound_status'])){
				
				$this->inbound_status = $vals['inbound_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InboundCondition';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("query_type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\InboundQueryType::$__names;
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
			
			
			
			
			if ("start_created_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_created_date);
				
			}
			
			
			
			
			if ("end_created_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_created_date);
				
			}
			
			
			
			
			if ("start_inbound_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_inbound_date);
				
			}
			
			
			
			
			if ("end_inbound_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_inbound_date);
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("inbound_status" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\InboundStatus::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->inbound_status = $k;
						break;
					}
					
				}
				
				
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
		
		$em = new \com\vip\domain\inventory\InboundQueryType; 
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
		
		
		if($this->start_created_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_created_date');
			$xfer += $output->writeString($this->start_created_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_created_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_created_date');
			$xfer += $output->writeString($this->end_created_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_inbound_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_inbound_date');
			$xfer += $output->writeString($this->start_inbound_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_inbound_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_inbound_date');
			$xfer += $output->writeString($this->end_inbound_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inbound_status !== null) {
			
			$xfer += $output->writeFieldBegin('inbound_status');
			
			$em = new \com\vip\domain\inventory\InboundStatus; 
			$output->writeString($em::$__names[$this->inbound_status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>