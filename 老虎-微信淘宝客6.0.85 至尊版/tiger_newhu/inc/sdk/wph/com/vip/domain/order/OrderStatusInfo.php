<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class OrderStatusInfo {
	
	static $_TSPEC;
	public $erp_order_sn = null;
	public $transport_no = null;
	public $transport_code = null;
	public $transport_detail = null;
	public $carriers_code = null;
	public $carriers_name = null;
	public $carriers_shortname = null;
	public $carriers_type = null;
	public $warehouse = null;
	public $action_time = null;
	public $pay_type = null;
	public $ext_pay_type = null;
	public $alipay_cust_no = null;
	public $max_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'erp_order_sn'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'transport_code'
			),
			4 => array(
			'var' => 'transport_detail'
			),
			5 => array(
			'var' => 'carriers_code'
			),
			6 => array(
			'var' => 'carriers_name'
			),
			7 => array(
			'var' => 'carriers_shortname'
			),
			8 => array(
			'var' => 'carriers_type'
			),
			9 => array(
			'var' => 'warehouse'
			),
			10 => array(
			'var' => 'action_time'
			),
			11 => array(
			'var' => 'pay_type'
			),
			12 => array(
			'var' => 'ext_pay_type'
			),
			13 => array(
			'var' => 'alipay_cust_no'
			),
			14 => array(
			'var' => 'max_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['erp_order_sn'])){
				
				$this->erp_order_sn = $vals['erp_order_sn'];
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
			
			
			if (isset($vals['carriers_code'])){
				
				$this->carriers_code = $vals['carriers_code'];
			}
			
			
			if (isset($vals['carriers_name'])){
				
				$this->carriers_name = $vals['carriers_name'];
			}
			
			
			if (isset($vals['carriers_shortname'])){
				
				$this->carriers_shortname = $vals['carriers_shortname'];
			}
			
			
			if (isset($vals['carriers_type'])){
				
				$this->carriers_type = $vals['carriers_type'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['ext_pay_type'])){
				
				$this->ext_pay_type = $vals['ext_pay_type'];
			}
			
			
			if (isset($vals['alipay_cust_no'])){
				
				$this->alipay_cust_no = $vals['alipay_cust_no'];
			}
			
			
			if (isset($vals['max_id'])){
				
				$this->max_id = $vals['max_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderStatusInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("erp_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_order_sn);
				
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
			
			
			
			
			if ("carriers_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_code);
				
			}
			
			
			
			
			if ("carriers_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_name);
				
			}
			
			
			
			
			if ("carriers_shortname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_shortname);
				
			}
			
			
			
			
			if ("carriers_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriers_type);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_time);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("ext_pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_pay_type);
				
			}
			
			
			
			
			if ("alipay_cust_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->alipay_cust_no);
				
			}
			
			
			
			
			if ("max_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->max_id); 
				
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
		
		if($this->erp_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('erp_order_sn');
			$xfer += $output->writeString($this->erp_order_sn);
			
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
		
		
		if($this->carriers_code !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_code');
			$xfer += $output->writeString($this->carriers_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriers_name !== null) {
			
			$xfer += $output->writeFieldBegin('carriers_name');
			$xfer += $output->writeString($this->carriers_name);
			
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
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeString($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext_pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('ext_pay_type');
			$xfer += $output->writeString($this->ext_pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->alipay_cust_no !== null) {
			
			$xfer += $output->writeFieldBegin('alipay_cust_no');
			$xfer += $output->writeString($this->alipay_cust_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->max_id !== null) {
			
			$xfer += $output->writeFieldBegin('max_id');
			$xfer += $output->writeI64($this->max_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>