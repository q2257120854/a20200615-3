<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsReturnOrderHeader {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $warehouse = null;
	public $return_source = null;
	public $vendor_code = null;
	public $erp_return_sn = null;
	public $return_sn = null;
	public $return_type = null;
	public $pay_type = null;
	public $po = null;
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
	public $erp_creater = null;
	public $erp_create_time = null;
	public $ship_to = null;
	public $self_reference = null;
	public $is_return_original_box = null;
	public $is_need_tidy_up = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'return_source'
			),
			4 => array(
			'var' => 'vendor_code'
			),
			5 => array(
			'var' => 'erp_return_sn'
			),
			6 => array(
			'var' => 'return_sn'
			),
			7 => array(
			'var' => 'return_type'
			),
			8 => array(
			'var' => 'pay_type'
			),
			9 => array(
			'var' => 'po'
			),
			10 => array(
			'var' => 'line_count'
			),
			11 => array(
			'var' => 'consignee'
			),
			12 => array(
			'var' => 'country'
			),
			13 => array(
			'var' => 'state'
			),
			14 => array(
			'var' => 'city'
			),
			15 => array(
			'var' => 'region'
			),
			16 => array(
			'var' => 'town'
			),
			17 => array(
			'var' => 'address'
			),
			18 => array(
			'var' => 'postcode'
			),
			19 => array(
			'var' => 'area_id'
			),
			20 => array(
			'var' => 'telephone'
			),
			21 => array(
			'var' => 'mobile'
			),
			22 => array(
			'var' => 'to_email'
			),
			23 => array(
			'var' => 'cc_email'
			),
			24 => array(
			'var' => 'erp_creater'
			),
			25 => array(
			'var' => 'erp_create_time'
			),
			26 => array(
			'var' => 'ship_to'
			),
			27 => array(
			'var' => 'self_reference'
			),
			28 => array(
			'var' => 'is_return_original_box'
			),
			29 => array(
			'var' => 'is_need_tidy_up'
			),
			30 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['return_source'])){
				
				$this->return_source = $vals['return_source'];
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
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
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
			
			
			if (isset($vals['erp_creater'])){
				
				$this->erp_creater = $vals['erp_creater'];
			}
			
			
			if (isset($vals['erp_create_time'])){
				
				$this->erp_create_time = $vals['erp_create_time'];
			}
			
			
			if (isset($vals['ship_to'])){
				
				$this->ship_to = $vals['ship_to'];
			}
			
			
			if (isset($vals['self_reference'])){
				
				$this->self_reference = $vals['self_reference'];
			}
			
			
			if (isset($vals['is_return_original_box'])){
				
				$this->is_return_original_box = $vals['is_return_original_box'];
			}
			
			
			if (isset($vals['is_need_tidy_up'])){
				
				$this->is_need_tidy_up = $vals['is_need_tidy_up'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsReturnOrderHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("return_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_source);
				
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
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("line_count" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->line_count); 
				
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
			
			
			
			
			if ("erp_creater" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_creater);
				
			}
			
			
			
			
			if ("erp_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_create_time);
				
			}
			
			
			
			
			if ("ship_to" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ship_to);
				
			}
			
			
			
			
			if ("self_reference" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->self_reference); 
				
			}
			
			
			
			
			if ("is_return_original_box" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_return_original_box); 
				
			}
			
			
			
			
			if ("is_need_tidy_up" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_need_tidy_up); 
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sce\vlg\osp\wms\service\OutWmsReturnOrderDetail();
						$elem0->read($input);
						
						$this->detail[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_source');
		$xfer += $output->writeString($this->return_source);
		
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
		
		$xfer += $output->writeFieldBegin('po');
		$xfer += $output->writeString($this->po);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('line_count');
		$xfer += $output->writeI64($this->line_count);
		
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
		
		$xfer += $output->writeFieldBegin('region');
		$xfer += $output->writeString($this->region);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('town');
		$xfer += $output->writeString($this->town);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('postcode');
		$xfer += $output->writeString($this->postcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('area_id');
		$xfer += $output->writeString($this->area_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('telephone');
		$xfer += $output->writeString($this->telephone);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mobile');
		$xfer += $output->writeString($this->mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('to_email');
		$xfer += $output->writeString($this->to_email);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cc_email');
		$xfer += $output->writeString($this->cc_email);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_creater');
		$xfer += $output->writeString($this->erp_creater);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_create_time');
		$xfer += $output->writeString($this->erp_create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ship_to');
		$xfer += $output->writeString($this->ship_to);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('self_reference');
		$xfer += $output->writeI32($this->self_reference);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_return_original_box');
		$xfer += $output->writeI32($this->is_return_original_box);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_need_tidy_up');
		$xfer += $output->writeI32($this->is_need_tidy_up);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->detail !== null) {
			
			$xfer += $output->writeFieldBegin('detail');
			
			if (!is_array($this->detail)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->detail as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>