<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class ReturnOrder {
	
	static $_TSPEC;
	public $return_source = null;
	public $transaction_id = null;
	public $vendor_code = null;
	public $erp_return_sn = null;
	public $return_sn = null;
	public $return_type = null;
	public $pay_type = null;
	public $self_reference = null;
	public $from_warehouse = null;
	public $to_warehouse = null;
	public $line_count = null;
	public $consignee = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $postcode = null;
	public $area_id = null;
	public $telephone = null;
	public $mobile = null;
	public $to_email = null;
	public $cc_email = null;
	public $creater = null;
	public $creat_time = null;
	public $is_need_tidy_up = null;
	public $is_return_original_box = null;
	public $order_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_source'
			),
			2 => array(
			'var' => 'transaction_id'
			),
			3 => array(
			'var' => 'vendor_code'
			),
			4 => array(
			'var' => 'erp_return_sn'
			),
			5 => array(
			'var' => 'return_sn'
			),
			6 => array(
			'var' => 'return_type'
			),
			7 => array(
			'var' => 'pay_type'
			),
			8 => array(
			'var' => 'self_reference'
			),
			9 => array(
			'var' => 'from_warehouse'
			),
			10 => array(
			'var' => 'to_warehouse'
			),
			11 => array(
			'var' => 'line_count'
			),
			12 => array(
			'var' => 'consignee'
			),
			13 => array(
			'var' => 'country'
			),
			14 => array(
			'var' => 'state'
			),
			15 => array(
			'var' => 'city'
			),
			16 => array(
			'var' => 'region'
			),
			17 => array(
			'var' => 'town'
			),
			18 => array(
			'var' => 'address'
			),
			19 => array(
			'var' => 'postcode'
			),
			20 => array(
			'var' => 'area_id'
			),
			21 => array(
			'var' => 'telephone'
			),
			22 => array(
			'var' => 'mobile'
			),
			23 => array(
			'var' => 'to_email'
			),
			24 => array(
			'var' => 'cc_email'
			),
			25 => array(
			'var' => 'creater'
			),
			26 => array(
			'var' => 'creat_time'
			),
			27 => array(
			'var' => 'is_need_tidy_up'
			),
			28 => array(
			'var' => 'is_return_original_box'
			),
			29 => array(
			'var' => 'order_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_source'])){
				
				$this->return_source = $vals['return_source'];
			}
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['erp_return_sn'])){
				
				$this->erp_return_sn = $vals['erp_return_sn'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['self_reference'])){
				
				$this->self_reference = $vals['self_reference'];
			}
			
			
			if (isset($vals['from_warehouse'])){
				
				$this->from_warehouse = $vals['from_warehouse'];
			}
			
			
			if (isset($vals['to_warehouse'])){
				
				$this->to_warehouse = $vals['to_warehouse'];
			}
			
			
			if (isset($vals['line_count'])){
				
				$this->line_count = $vals['line_count'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['postcode'])){
				
				$this->postcode = $vals['postcode'];
			}
			
			
			if (isset($vals['area_id'])){
				
				$this->area_id = $vals['area_id'];
			}
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['to_email'])){
				
				$this->to_email = $vals['to_email'];
			}
			
			
			if (isset($vals['cc_email'])){
				
				$this->cc_email = $vals['cc_email'];
			}
			
			
			if (isset($vals['creater'])){
				
				$this->creater = $vals['creater'];
			}
			
			
			if (isset($vals['creat_time'])){
				
				$this->creat_time = $vals['creat_time'];
			}
			
			
			if (isset($vals['is_need_tidy_up'])){
				
				$this->is_need_tidy_up = $vals['is_need_tidy_up'];
			}
			
			
			if (isset($vals['is_return_original_box'])){
				
				$this->is_return_original_box = $vals['is_return_original_box'];
			}
			
			
			if (isset($vals['order_detail_list'])){
				
				$this->order_detail_list = $vals['order_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_source);
				
			}
			
			
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("erp_return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_return_sn);
				
			}
			
			
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_type);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("self_reference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->self_reference);
				
			}
			
			
			
			
			if ("from_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->from_warehouse);
				
			}
			
			
			
			
			if ("to_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->to_warehouse);
				
			}
			
			
			
			
			if ("line_count" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->line_count);
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("postcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postcode);
				
			}
			
			
			
			
			if ("area_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_id);
				
			}
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("to_email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->to_email);
				
			}
			
			
			
			
			if ("cc_email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cc_email);
				
			}
			
			
			
			
			if ("creater" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creater);
				
			}
			
			
			
			
			if ("creat_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creat_time);
				
			}
			
			
			
			
			if ("is_need_tidy_up" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_need_tidy_up);
				
			}
			
			
			
			
			if ("is_return_original_box" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_return_original_box);
				
			}
			
			
			
			
			if ("order_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\ReturnOrderDetail();
						$elem0->read($input);
						
						$this->order_detail_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('return_source');
		$xfer += $output->writeString($this->return_source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_return_sn');
		$xfer += $output->writeString($this->erp_return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_type');
		$xfer += $output->writeString($this->return_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_type');
		$xfer += $output->writeString($this->pay_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->self_reference !== null) {
			
			$xfer += $output->writeFieldBegin('self_reference');
			$xfer += $output->writeString($this->self_reference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('from_warehouse');
		$xfer += $output->writeString($this->from_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->to_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('to_warehouse');
			$xfer += $output->writeString($this->to_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('line_count');
		$xfer += $output->writeString($this->line_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('consignee');
		$xfer += $output->writeString($this->consignee);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('country');
		$xfer += $output->writeString($this->country);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeString($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->postcode !== null) {
			
			$xfer += $output->writeFieldBegin('postcode');
			$xfer += $output->writeString($this->postcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_id');
			$xfer += $output->writeString($this->area_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->telephone !== null) {
			
			$xfer += $output->writeFieldBegin('telephone');
			$xfer += $output->writeString($this->telephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->to_email !== null) {
			
			$xfer += $output->writeFieldBegin('to_email');
			$xfer += $output->writeString($this->to_email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cc_email !== null) {
			
			$xfer += $output->writeFieldBegin('cc_email');
			$xfer += $output->writeString($this->cc_email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('creater');
		$xfer += $output->writeString($this->creater);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('creat_time');
		$xfer += $output->writeString($this->creat_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_need_tidy_up !== null) {
			
			$xfer += $output->writeFieldBegin('is_need_tidy_up');
			$xfer += $output->writeString($this->is_need_tidy_up);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_return_original_box !== null) {
			
			$xfer += $output->writeFieldBegin('is_return_original_box');
			$xfer += $output->writeString($this->is_return_original_box);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_detail_list');
		
		if (!is_array($this->order_detail_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_detail_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>