<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringOrderApiModel {
	
	static $_TSPEC;
	public $company_code = null;
	public $transferring_order_no = null;
	public $transferring_type = null;
	public $src_warehouse_code = null;
	public $dest_warehouse_code = null;
	public $created_by_user_id = null;
	public $is_whale_warehouse = null;
	public $create_time = null;
	public $estimated_arrival_time = null;
	public $pre_created = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'company_code'
			),
			2 => array(
			'var' => 'transferring_order_no'
			),
			3 => array(
			'var' => 'transferring_type'
			),
			4 => array(
			'var' => 'src_warehouse_code'
			),
			5 => array(
			'var' => 'dest_warehouse_code'
			),
			6 => array(
			'var' => 'created_by_user_id'
			),
			7 => array(
			'var' => 'is_whale_warehouse'
			),
			8 => array(
			'var' => 'create_time'
			),
			9 => array(
			'var' => 'estimated_arrival_time'
			),
			10 => array(
			'var' => 'pre_created'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['transferring_order_no'])){
				
				$this->transferring_order_no = $vals['transferring_order_no'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['src_warehouse_code'])){
				
				$this->src_warehouse_code = $vals['src_warehouse_code'];
			}
			
			
			if (isset($vals['dest_warehouse_code'])){
				
				$this->dest_warehouse_code = $vals['dest_warehouse_code'];
			}
			
			
			if (isset($vals['created_by_user_id'])){
				
				$this->created_by_user_id = $vals['created_by_user_id'];
			}
			
			
			if (isset($vals['is_whale_warehouse'])){
				
				$this->is_whale_warehouse = $vals['is_whale_warehouse'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['estimated_arrival_time'])){
				
				$this->estimated_arrival_time = $vals['estimated_arrival_time'];
			}
			
			
			if (isset($vals['pre_created'])){
				
				$this->pre_created = $vals['pre_created'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringOrderApiModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("transferring_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_order_no);
				
			}
			
			
			
			
			if ("transferring_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transferring_type); 
				
			}
			
			
			
			
			if ("src_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->src_warehouse_code);
				
			}
			
			
			
			
			if ("dest_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dest_warehouse_code);
				
			}
			
			
			
			
			if ("created_by_user_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->created_by_user_id);
				
			}
			
			
			
			
			if ("is_whale_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_whale_warehouse); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("estimated_arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimated_arrival_time);
				
			}
			
			
			
			
			if ("pre_created" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->pre_created); 
				
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
		
		if($this->company_code !== null) {
			
			$xfer += $output->writeFieldBegin('company_code');
			$xfer += $output->writeString($this->company_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_order_no');
			$xfer += $output->writeString($this->transferring_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_type !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_type');
			$xfer += $output->writeByte($this->transferring_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('src_warehouse_code');
		$xfer += $output->writeString($this->src_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dest_warehouse_code');
		$xfer += $output->writeString($this->dest_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->created_by_user_id !== null) {
			
			$xfer += $output->writeFieldBegin('created_by_user_id');
			$xfer += $output->writeString($this->created_by_user_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_whale_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('is_whale_warehouse');
			$xfer += $output->writeByte($this->is_whale_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimated_arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimated_arrival_time');
			$xfer += $output->writeI64($this->estimated_arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_created !== null) {
			
			$xfer += $output->writeFieldBegin('pre_created');
			$xfer += $output->writeByte($this->pre_created);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>