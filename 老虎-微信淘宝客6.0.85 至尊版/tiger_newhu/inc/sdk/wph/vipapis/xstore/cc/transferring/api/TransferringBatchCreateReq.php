<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\transferring\api;

class TransferringBatchCreateReq {
	
	static $_TSPEC;
	public $transferring_type = null;
	public $ext_trans_order_no = null;
	public $src_company_code = null;
	public $src_warehouse_code = null;
	public $dest_company_code = null;
	public $dest_warehouse_code = null;
	public $is_whale_warehouse = null;
	public $remark = null;
	public $estimated_arrival_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transferring_type'
			),
			2 => array(
			'var' => 'ext_trans_order_no'
			),
			3 => array(
			'var' => 'src_company_code'
			),
			4 => array(
			'var' => 'src_warehouse_code'
			),
			5 => array(
			'var' => 'dest_company_code'
			),
			6 => array(
			'var' => 'dest_warehouse_code'
			),
			7 => array(
			'var' => 'is_whale_warehouse'
			),
			8 => array(
			'var' => 'remark'
			),
			9 => array(
			'var' => 'estimated_arrival_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['ext_trans_order_no'])){
				
				$this->ext_trans_order_no = $vals['ext_trans_order_no'];
			}
			
			
			if (isset($vals['src_company_code'])){
				
				$this->src_company_code = $vals['src_company_code'];
			}
			
			
			if (isset($vals['src_warehouse_code'])){
				
				$this->src_warehouse_code = $vals['src_warehouse_code'];
			}
			
			
			if (isset($vals['dest_company_code'])){
				
				$this->dest_company_code = $vals['dest_company_code'];
			}
			
			
			if (isset($vals['dest_warehouse_code'])){
				
				$this->dest_warehouse_code = $vals['dest_warehouse_code'];
			}
			
			
			if (isset($vals['is_whale_warehouse'])){
				
				$this->is_whale_warehouse = $vals['is_whale_warehouse'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['estimated_arrival_time'])){
				
				$this->estimated_arrival_time = $vals['estimated_arrival_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferringBatchCreateReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transferring_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transferring_type); 
				
			}
			
			
			
			
			if ("ext_trans_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_trans_order_no);
				
			}
			
			
			
			
			if ("src_company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->src_company_code);
				
			}
			
			
			
			
			if ("src_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->src_warehouse_code);
				
			}
			
			
			
			
			if ("dest_company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dest_company_code);
				
			}
			
			
			
			
			if ("dest_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dest_warehouse_code);
				
			}
			
			
			
			
			if ("is_whale_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_whale_warehouse); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("estimated_arrival_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimated_arrival_time);
				
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
		
		$xfer += $output->writeFieldBegin('transferring_type');
		$xfer += $output->writeByte($this->transferring_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ext_trans_order_no');
		$xfer += $output->writeString($this->ext_trans_order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('src_company_code');
		$xfer += $output->writeString($this->src_company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('src_warehouse_code');
		$xfer += $output->writeString($this->src_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dest_company_code');
		$xfer += $output->writeString($this->dest_company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('dest_warehouse_code');
		$xfer += $output->writeString($this->dest_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_whale_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('is_whale_warehouse');
			$xfer += $output->writeByte($this->is_whale_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimated_arrival_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimated_arrival_time');
			$xfer += $output->writeI64($this->estimated_arrival_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>