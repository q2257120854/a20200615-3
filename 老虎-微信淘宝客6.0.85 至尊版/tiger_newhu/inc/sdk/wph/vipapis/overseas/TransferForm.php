<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class TransferForm {
	
	static $_TSPEC;
	public $transfer_source = null;
	public $transaction_id = null;
	public $vendor_code = null;
	public $erp_transfer_sn = null;
	public $transfer_sn = null;
	public $transfer_type = null;
	public $pay_type = null;
	public $from_warehouse = null;
	public $to_warehouse = null;
	public $line_count = null;
	public $to_email = null;
	public $cc_email = null;
	public $erp_creater = null;
	public $erp_create_time = null;
	public $consignee = null;
	public $country = null;
	public $state = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $postcode = null;
	public $telephone = null;
	public $mobile = null;
	public $area_id = null;
	public $product_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transfer_source'
			),
			2 => array(
			'var' => 'transaction_id'
			),
			3 => array(
			'var' => 'vendor_code'
			),
			4 => array(
			'var' => 'erp_transfer_sn'
			),
			5 => array(
			'var' => 'transfer_sn'
			),
			6 => array(
			'var' => 'transfer_type'
			),
			7 => array(
			'var' => 'pay_type'
			),
			8 => array(
			'var' => 'from_warehouse'
			),
			9 => array(
			'var' => 'to_warehouse'
			),
			10 => array(
			'var' => 'line_count'
			),
			11 => array(
			'var' => 'to_email'
			),
			12 => array(
			'var' => 'cc_email'
			),
			13 => array(
			'var' => 'erp_creater'
			),
			14 => array(
			'var' => 'erp_create_time'
			),
			15 => array(
			'var' => 'consignee'
			),
			16 => array(
			'var' => 'country'
			),
			17 => array(
			'var' => 'state'
			),
			18 => array(
			'var' => 'city'
			),
			19 => array(
			'var' => 'region'
			),
			20 => array(
			'var' => 'town'
			),
			21 => array(
			'var' => 'address'
			),
			22 => array(
			'var' => 'postcode'
			),
			23 => array(
			'var' => 'telephone'
			),
			24 => array(
			'var' => 'mobile'
			),
			25 => array(
			'var' => 'area_id'
			),
			26 => array(
			'var' => 'product_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transfer_source'])){
				
				$this->transfer_source = $vals['transfer_source'];
			}
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['erp_transfer_sn'])){
				
				$this->erp_transfer_sn = $vals['erp_transfer_sn'];
			}
			
			
			if (isset($vals['transfer_sn'])){
				
				$this->transfer_sn = $vals['transfer_sn'];
			}
			
			
			if (isset($vals['transfer_type'])){
				
				$this->transfer_type = $vals['transfer_type'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
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
			
			
			if (isset($vals['telephone'])){
				
				$this->telephone = $vals['telephone'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['area_id'])){
				
				$this->area_id = $vals['area_id'];
			}
			
			
			if (isset($vals['product_list'])){
				
				$this->product_list = $vals['product_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransferForm';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transfer_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transfer_source);
				
			}
			
			
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("erp_transfer_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_transfer_sn);
				
			}
			
			
			
			
			if ("transfer_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transfer_sn);
				
			}
			
			
			
			
			if ("transfer_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transfer_type);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
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
				$input->readI64($this->line_count); 
				
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
			
			
			
			
			if ("telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->telephone);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("area_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_id);
				
			}
			
			
			
			
			if ("product_list" == $schemeField){
				
				$needSkip = false;
				
				$this->product_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\ProductItem();
						$elem0->read($input);
						
						$this->product_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('transfer_source');
		$xfer += $output->writeString($this->transfer_source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_transfer_sn');
		$xfer += $output->writeString($this->erp_transfer_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transfer_sn');
		$xfer += $output->writeString($this->transfer_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transfer_type');
		$xfer += $output->writeString($this->transfer_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_type');
		$xfer += $output->writeString($this->pay_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('from_warehouse');
		$xfer += $output->writeString($this->from_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('to_warehouse');
		$xfer += $output->writeString($this->to_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('line_count');
		$xfer += $output->writeI64($this->line_count);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldBegin('erp_creater');
		$xfer += $output->writeString($this->erp_creater);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_create_time');
		$xfer += $output->writeString($this->erp_create_time);
		
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
		
		
		if($this->area_id !== null) {
			
			$xfer += $output->writeFieldBegin('area_id');
			$xfer += $output->writeString($this->area_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('product_list');
		
		if (!is_array($this->product_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->product_list as $iter0){
			
			
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