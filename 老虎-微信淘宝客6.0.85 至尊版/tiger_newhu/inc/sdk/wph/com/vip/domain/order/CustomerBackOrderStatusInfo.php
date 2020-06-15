<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class CustomerBackOrderStatusInfo {
	
	static $_TSPEC;
	public $max_id = null;
	public $erp_back_sn = null;
	public $transport_no = null;
	public $transport_code = null;
	public $transport_detail = null;
	public $ab_reason = null;
	public $ab_remark = null;
	public $carriers_code = null;
	public $carriers_shortname = null;
	public $carriers_type = null;
	public $play_type = null;
	public $play_money = null;
	public $warehouse = null;
	public $action_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'max_id'
			),
			2 => array(
			'var' => 'erp_back_sn'
			),
			3 => array(
			'var' => 'transport_no'
			),
			4 => array(
			'var' => 'transport_code'
			),
			5 => array(
			'var' => 'transport_detail'
			),
			6 => array(
			'var' => 'ab_reason'
			),
			7 => array(
			'var' => 'ab_remark'
			),
			8 => array(
			'var' => 'carriers_code'
			),
			9 => array(
			'var' => 'carriers_shortname'
			),
			10 => array(
			'var' => 'carriers_type'
			),
			11 => array(
			'var' => 'play_type'
			),
			12 => array(
			'var' => 'play_money'
			),
			13 => array(
			'var' => 'warehouse'
			),
			14 => array(
			'var' => 'action_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['max_id'])){
				
				$this->max_id = $vals['max_id'];
			}
			
			
			if (isset($vals['erp_back_sn'])){
				
				$this->erp_back_sn = $vals['erp_back_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['transport_code'])){
				
				$this->transport_code = $vals['transport_code'];
			}
			
			
			if (isset($vals['transport_detail'])){
				
				$this->transport_detail = $vals['transport_detail'];
			}
			
			
			if (isset($vals['ab_reason'])){
				
				$this->ab_reason = $vals['ab_reason'];
			}
			
			
			if (isset($vals['ab_remark'])){
				
				$this->ab_remark = $vals['ab_remark'];
			}
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['carriers_shortname'])){
				
				$this->carriers_shortname = $vals['carriers_shortname'];
			}
			
			
			if (isset($vals['carriers_type'])){
				
				$this->carriers_type = $vals['carriers_type'];
			}
			
			
			if (isset($vals['play_type'])){
				
				$this->play_type = $vals['play_type'];
			}
			
			
			if (isset($vals['play_money'])){
				
				$this->play_money = $vals['play_money'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomerBackOrderStatusInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("max_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->max_id); 
				
			}
			
			
			
			
			if ("erp_back_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_back_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("transport_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_code);
				
			}
			
			
			
			
			if ("transport_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_detail);
				
			}
			
			
			
			
			if ("ab_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ab_reason);
				
			}
			
			
			
			
			if ("ab_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ab_remark);
				
			}
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("carriers_shortname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_shortname);
				
			}
			
			
			
			
			if ("carriers_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_type);
				
			}
			
			
			
			
			if ("play_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->play_type);
				
			}
			
			
			
			
			if ("play_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->play_money);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_time);
				
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
		
		if($this->max_id !== null) {
			
			$xfer += $output->writeFieldBegin('max_id');
			$xfer += $output->writeI64($this->max_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->erp_back_sn !== null) {
			
			$xfer += $output->writeFieldBegin('erp_back_sn');
			$xfer += $output->writeString($this->erp_back_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_code !== null) {
			
			$xfer += $output->writeFieldBegin('transport_code');
			$xfer += $output->writeString($this->transport_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_detail !== null) {
			
			$xfer += $output->writeFieldBegin('transport_detail');
			$xfer += $output->writeString($this->transport_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ab_reason !== null) {
			
			$xfer += $output->writeFieldBegin('ab_reason');
			$xfer += $output->writeString($this->ab_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ab_remark !== null) {
			
			$xfer += $output->writeFieldBegin('ab_remark');
			$xfer += $output->writeString($this->ab_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_shortname !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_shortname');
			$xfer += $output->writeString($this->carriers_shortname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_type !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_type');
			$xfer += $output->writeString($this->carriers_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->play_type !== null) {
			
			$xfer += $output->writeFieldBegin('play_type');
			$xfer += $output->writeString($this->play_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->play_money !== null) {
			
			$xfer += $output->writeFieldBegin('play_money');
			$xfer += $output->writeDouble($this->play_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->action_time !== null) {
			
			$xfer += $output->writeFieldBegin('action_time');
			$xfer += $output->writeString($this->action_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>