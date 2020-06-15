<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class ChannelInventoryQueryCondition {
	
	static $_TSPEC;
	public $warehouse_code = null;
	public $channel = null;
	public $grade = null;
	public $status = null;
	public $item_code = null;
	public $brand_code = null;
	public $in_vip_sales_plan = null;
	public $pageToward = null;
	public $backwardId = null;
	public $forwardId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse_code'
			),
			2 => array(
			'var' => 'channel'
			),
			3 => array(
			'var' => 'grade'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'item_code'
			),
			6 => array(
			'var' => 'brand_code'
			),
			7 => array(
			'var' => 'in_vip_sales_plan'
			),
			8 => array(
			'var' => 'pageToward'
			),
			9 => array(
			'var' => 'backwardId'
			),
			10 => array(
			'var' => 'forwardId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['grade'])){
				
				$this->grade = $vals['grade'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['item_code'])){
				
				$this->item_code = $vals['item_code'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['in_vip_sales_plan'])){
				
				$this->in_vip_sales_plan = $vals['in_vip_sales_plan'];
			}
			
			
			if (isset($vals['pageToward'])){
				
				$this->pageToward = $vals['pageToward'];
			}
			
			
			if (isset($vals['backwardId'])){
				
				$this->backwardId = $vals['backwardId'];
			}
			
			
			if (isset($vals['forwardId'])){
				
				$this->forwardId = $vals['forwardId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelInventoryQueryCondition';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
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
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\ChannelInventoryChannel::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->channel = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("grade" == $schemeField){
				
				$needSkip = false;
				
				$this->grade = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$names = \com\vip\domain\inventory\ChannelInventoryGrade::$__names;
						$name = null;
						$input->readString($name);
						foreach ($names as $k => $v){
							
							if($name == $v){
								
								$elem1 = $k;
								break;
							}
							
						}
						
						
						$this->grade[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\ChannelInventoryStatus::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->status = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("item_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->item_code);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("in_vip_sales_plan" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\ChannelInventoryInVipSalesPlan::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->in_vip_sales_plan = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("pageToward" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageToward); 
				
			}
			
			
			
			
			if ("backwardId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->backwardId);
				
			}
			
			
			
			
			if ("forwardId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->forwardId);
				
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
		
		$xfer += $output->writeFieldBegin('warehouse_code');
		
		$em = new \com\vip\domain\inventory\WarehouseCode; 
		$output->writeString($em::$__names[$this->warehouse_code]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channel');
		
		$em = new \com\vip\domain\inventory\ChannelInventoryChannel; 
		$output->writeString($em::$__names[$this->channel]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('grade');
		
		if (!is_array($this->grade)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->grade as $iter0){
			
			
			$em = new \com\vip\domain\inventory\ChannelInventoryGrade; 
			$output->writeString($em::$__names[$iter0]);  
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			$em = new \com\vip\domain\inventory\ChannelInventoryStatus; 
			$output->writeString($em::$__names[$this->status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->item_code !== null) {
			
			$xfer += $output->writeFieldBegin('item_code');
			$xfer += $output->writeString($this->item_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_code !== null) {
			
			$xfer += $output->writeFieldBegin('brand_code');
			$xfer += $output->writeString($this->brand_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->in_vip_sales_plan !== null) {
			
			$xfer += $output->writeFieldBegin('in_vip_sales_plan');
			
			$em = new \com\vip\domain\inventory\ChannelInventoryInVipSalesPlan; 
			$output->writeString($em::$__names[$this->in_vip_sales_plan]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageToward !== null) {
			
			$xfer += $output->writeFieldBegin('pageToward');
			$xfer += $output->writeI32($this->pageToward);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->backwardId !== null) {
			
			$xfer += $output->writeFieldBegin('backwardId');
			$xfer += $output->writeString($this->backwardId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->forwardId !== null) {
			
			$xfer += $output->writeFieldBegin('forwardId');
			$xfer += $output->writeString($this->forwardId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>